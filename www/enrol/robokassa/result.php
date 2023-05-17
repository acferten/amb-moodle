<?php

require_once('../../config.php');
require_once($CFG->libdir . '/enrollib.php');
require_once($CFG->libdir . '/filelib.php');

// чтение параметров
// read parameters
$inv_id = required_param('InvId', PARAM_ALPHANUMEXT);
$instanceid = required_param('shp_instanceid', PARAM_ALPHANUMEXT);
$id = required_param('shp_id', PARAM_ALPHANUMEXT);
$out_summ = $_REQUEST["OutSum"];
$crc = $_REQUEST["SignatureValue"];

// регистрационная информация (пароль #2)
// registration info (password #2)
$mrh_pass2 = get_config('enrol_robokassa', 'password_2');

// установка текущего времени
// current date
$tm = getdate(time() + 9 * 3600);
$date = "$tm[year]-$tm[mon]-$tm[mday] $tm[hours]:$tm[minutes]:$tm[seconds]";

// контрольная сумма
$crc = strtoupper($crc);

// моя контрольная сумма
$my_crc = strtoupper(md5("{$out_summ}:{$inv_id}:{$mrh_pass2}:shp_id={$id}:shp_instanceid={$instanceid}"));

$data = new stdClass();

$data->userid = $USER->id;
$data->courseid = $id;
$data->instanceid = $instanceid;
$data->orderid = $inv_id;
$data->payment_status = "Pending";
$data->payment_currency = $data->mc_currency;
$data->timeupdated = time();

$DB->insert_record("enrol_robokassa", $data);

$record = $DB->get_record('enrol_robokassa', ['orderid' => $inv_id]);

// проверка корректности подписи
// check signature
if ($my_crc != $crc) {
    $DB->insert_record("enrol_robokassa", $data);

    $DB->execute("update {enrol_robokassa} set payment_status=:payment_status where orderid=:orderid",
        ['payment_status' => "Failed", 'orderid' => $inv_id]);
    echo "<h2>Payment failed.</h2>";
    exit();
} else {
    // признак успешно проведенной операции
    // success
    echo "OK$inv_id\n";

    $DB->execute("update {enrol_robokassa} set payment_status=:payment_status where orderid=:orderid",
        ['payment_status' => "OK$inv_id", 'orderid' => $inv_id]);

    $plugin_instance = $DB->get_record("enrol",
        array("id" => $record->instanceid,
            "enrol" => "robokassa",
            "status" => 0
        ), "*", MUST_EXIST);

    $plugin = enrol_get_plugin('robokassa');

    if ($plugin_instance->enrolperiod) {
        $timestart = time();
        $timeend = $timestart + $plugin_instance->enrolperiod;
    } else {
        $timestart = 0;
        $timeend = 0;
    }

    $userid = $record->userid;
    // Enrol user.
    $plugin->enrol_user($plugin_instance, $userid, $plugin_instance->roleid, $timestart, $timeend);

    $context = context_course::instance($record->courseid, MUST_EXIST);
    $PAGE->set_context($context);

    require_login();

    if (!empty($SESSION->wantsurl)) {
        $destination = $SESSION->wantsurl;
        unset($SESSION->wantsurl);
    } else {
        $destination = "$CFG->wwwroot/course/view.php?id=$record->courseid";
    }

    if (is_enrolled($context, null, '', true)) {
        $course = $DB->get_record('course', ['id' => $record->courseid]);
        $fullname = format_string($course->fullname, true, array('context' => $context));
        redirect($destination, get_string('paymentthanks', '', $fullname));
    }
}

// запись в бд информации о проведенной операции
// save order info to db
//$f = @fopen("order.txt", "a+") or
//die("error");
//fputs($f, "order_num :$inv_id;Summ :$out_summ;Date :$date\n");
//fclose($f);