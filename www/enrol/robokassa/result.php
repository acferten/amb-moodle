<?php

require("../../config.php");
require_once("$CFG->dirroot/enrol/robokassa/lib.php");
// Disable moodle specific debug messages and any errors in output,
// comment out when debugging or better look into error log!
define('NO_DEBUG_DISPLAY', true);

// This script does not require login.
require("../../config.php"); // phpcs:ignore
require_once("lib.php");
require_once($CFG->libdir . '/enrollib.php');
require_once($CFG->libdir . '/filelib.php');

// PayPal does not like when we return error messages here,
// the custom handler just logs exceptions and stops.
set_exception_handler(\enrol_paypal\util::get_exception_handler());
global $DB;

$data = new stdClass();

// регистрационная информация (пароль #2)
// registration info (password #2)
$mrh_pass2 = get_config('enrol_robokassa', 'password_2');

//установка текущего времени
//current date
$tm = getdate(time() + 9 * 3600);
$date = "$tm[year]-$tm[mon]-$tm[mday] $tm[hours]:$tm[minutes]:$tm[seconds]";

// чтение параметров
// read parameters
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
$shp_item = $_REQUEST["Shp_item"];
$crc = $_REQUEST["SignatureValue"];

$crc = strtoupper($crc);

$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2:Shp_item=$shp_item"));

// проверка корректности подписи
// check signature
if ($my_crc != $crc) {
    echo "bad sign\n";
    exit();
}

// признак успешно проведенной операции
// success
echo "OK$inv_id\n";

// запись в бд информации о проведенной операции
// save order info to db


$f = @fopen("order.txt", "a+") or
die("error");
fputs($f, "order_num :$inv_id;Summ :$out_summ;Date :$date\n");
fclose($f);


$DB->insert_record("enrol_robokassa", $data);

if ($plugin_instance->enrolperiod) {
    $timestart = time();
    $timeend = $timestart + $plugin_instance->enrolperiod;
} else {
    $timestart = 0;
    $timeend = 0;
}

// Enrol user
$plugin->enrol_user($plugin_instance, $user->id, $plugin_instance->roleid, $timestart, $timeend);

// Pass $view=true to filter hidden caps if the user cannot see them
if ($users = get_users_by_capability($context, 'moodle/course:update', 'u.*', 'u.id ASC',
    '', '', '', '', false, true)) {
    $users = sort_by_roleassignment_authority($users, $context);
    $teacher = array_shift($users);
} else {
    $teacher = false;
}

$mailstudents = $plugin->get_config('mailstudents');
$mailteachers = $plugin->get_config('mailteachers');
$mailadmins = $plugin->get_config('mailadmins');
$shortname = format_string($course->shortname, true, array('context' => $context));


if (!empty($mailstudents)) {
    $a = new stdClass();
    $a->coursename = format_string($course->fullname, true, array('context' => $coursecontext));
    $a->profileurl = "$CFG->wwwroot/user/view.php?id=$user->id";

    $eventdata = new \core\message\message();
    $eventdata->courseid = $course->id;
    $eventdata->modulename = 'moodle';
    $eventdata->component = 'enrol_paypal';
    $eventdata->name = 'paypal_enrolment';
    $eventdata->userfrom = empty($teacher) ? core_user::get_noreply_user() : $teacher;
    $eventdata->userto = $user;
    $eventdata->subject = get_string("enrolmentnew", 'enrol', $shortname);
    $eventdata->fullmessage = get_string('welcometocoursetext', '', $a);
    $eventdata->fullmessageformat = FORMAT_PLAIN;
    $eventdata->fullmessagehtml = '';
    $eventdata->smallmessage = '';
    message_send($eventdata);

}

if (!empty($mailteachers) && !empty($teacher)) {
    $a->course = format_string($course->fullname, true, array('context' => $coursecontext));
    $a->user = fullname($user);

    $eventdata = new \core\message\message();
    $eventdata->courseid = $course->id;
    $eventdata->modulename = 'moodle';
    $eventdata->component = 'enrol_paypal';
    $eventdata->name = 'paypal_enrolment';
    $eventdata->userfrom = $user;
    $eventdata->userto = $teacher;
    $eventdata->subject = get_string("enrolmentnew", 'enrol', $shortname);
    $eventdata->fullmessage = get_string('enrolmentnewuser', 'enrol', $a);
    $eventdata->fullmessageformat = FORMAT_PLAIN;
    $eventdata->fullmessagehtml = '';
    $eventdata->smallmessage = '';
    message_send($eventdata);
}

if (!empty($mailadmins)) {
    $a->course = format_string($course->fullname, true, array('context' => $coursecontext));
    $a->user = fullname($user);
    $admins = get_admins();
    foreach ($admins as $admin) {
        $eventdata = new \core\message\message();
        $eventdata->courseid = $course->id;
        $eventdata->modulename = 'moodle';
        $eventdata->component = 'enrol_paypal';
        $eventdata->name = 'paypal_enrolment';
        $eventdata->userfrom = $user;
        $eventdata->userto = $admin;
        $eventdata->subject = get_string("enrolmentnew", 'enrol', $shortname);
        $eventdata->fullmessage = get_string('enrolmentnewuser', 'enrol', $a);
        $eventdata->fullmessageformat = FORMAT_PLAIN;
        $eventdata->fullmessagehtml = '';
        $eventdata->smallmessage = '';
        message_send($eventdata);
    }
} else if (strcmp($result, "INVALID") == 0) { // ERROR
    $DB->insert_record("enrol_paypal", $data, false);
    throw new moodle_exception('erripninvalid', 'enrol_paypal', '', null, json_encode($data));
}

