<?php
// This file is part of Moodle - http://moodle.org/
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_robokassa', language 'en'.
 *
 * @package    enrol_robokassa
 * @copyright  2023 Alexandra Gavrilenko {viktoriagavrilenko0@gmail.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$string['robokassa:config'] = 'Configure robokassa enrol instances';
$string['robokassa:manage'] = 'Manage enrolled users';
$string['robokassa:unenrol'] = 'Unenrol users from course';
$string['robokassa:unenrolself'] = 'Unenrol self from the course';
$string['robokassaaccepted'] = 'robokassa payments accepted';
$string['pluginname'] = 'Robokassa';
$string['pluginname_desc'] = 'The robokassa module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['sendpaymentbutton'] = 'Send payment via Robokassa';
$string['status'] = 'Allow robokassa enrolments';
$string['status_desc'] = 'Allow users to use robokassa to enrol into a course by default.';
$string['transactions'] = 'robokassa transactions';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';

$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';

$string['expiredaction'] = 'Enrolment expiry action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';

$string['cost'] = 'Enrol cost';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during PayPal enrolments';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['assignrole'] = 'Assign role';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['merchant_login'] = 'Merchant ID';
$string['password_1'] = 'Password #1';
$string['password_2'] = 'Password #2';
$string['orders'] = 'Orders';

$string['privacy:metadata:enrol_robokassa:enrol_robokassa'] = 'Information about the robokassa transactions for robokassa enrolments.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:courseid'] = 'The ID of the course that is sold.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:instanceid'] = 'The ID of the enrolment instance in the course.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:item_name'] = 'The full name of the course that its enrolment has been sold.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:memo'] = 'A note field.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:payment_status'] = 'The status of the payment.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:timeupdated'] = 'The time of Moodle being notified by robokassa about the payment.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:userid'] = 'The ID of the user who bought the course enrolment.';
$string['privacy:metadata:enrol_robokassa:robokassa_ru'] = 'The robokassa enrolment plugin transmits user data from Moodle to the robokassa website.';
$string['privacy:metadata:enrol_robokassa:robokassa_ru:email'] = 'Email address of the user who is buying the course.';
$string['privacy:metadata:enrol_robokassa:robokassa_ru:first_name'] = 'First name of the user who is buying the course.';
$string['privacy:metadata:enrol_robokassa:robokassa_ru:last_name'] = 'Last name of the user who is buying the course.';
