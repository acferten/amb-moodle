<?php
// This file is part of Moodle - http://moodle.org/
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_robokassa', language 'ru'.
 *
 * @package    enrol_robokassa
 * @copyright  2023 Alexandra Gavrilenko {viktoriagavrilenko0@gmail.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$string['robokassa:config'] = 'Configure robokassa enrol instances';
$string['robokassa:manage'] = 'Управление зачисленными пользователями';
$string['robokassa:unenrol'] = 'Отчислить пользователей из курса';
$string['robokassa:unenrolself'] = 'Покинуть курс';
$string['robokassaaccepted'] = 'Оплата robokassa прията';
$string['pluginname'] = 'Robokassa';
$string['pluginname_desc'] = 'Модуль Robokassa позволяет вам настраивать платные курсы. Здесь Вы можете задать цену по умолчанию, которая будет применяться к новым созданным курсам. После создания, в параметрах курса (Участники -> Способы зачисления на курс -> Робокасса -> Шестеренка в колонке "Редактировать"), можно изменить эту цену по умолчанию на другую.';
$string['sendpaymentbutton'] = 'Оплатить через Robokassa';
$string['status'] = 'Разрешить зачисление на курс через оплату Robokassa';
$string['status_desc'] = 'Разрешить пользователям использовать robokassa для зачисления на курс по умолчанию.';
$string['transactions'] = 'robokassa транзакции';
$string['unenrolselfconfirm'] = 'Вы действительно хотите покинуть курс "{$a}"?';

$string['mailadmins'] = 'Послать уведомление администратору';
$string['mailstudents'] = 'Послать уведомление студентам';
$string['mailteachers'] = 'Послать уведомление учителям';

$string['expiredaction'] = 'Действие при окончании срока зачисления на курс';
$string['expiredaction_help'] = 'Выберите действие, которое необходимо выполнить по истечении срока зачисления пользователя. Пожалуйста, обратите внимание, что некоторые пользовательские данные и настройки удаляются из курса при отчислении с курса.';

$string['cost'] = 'Стоимость зачисления';
$string['currency'] = 'Валюта';
$string['defaultrole'] = 'Назначемая по умолчанию роль';
$string['defaultrole_desc'] = 'Выберите роль, которая должна быть назначена пользователям при зачислении через Robokassa';
$string['enrolperiod'] = 'Длительность нахождения на курсе';
$string['enrolperiod_help'] = 'Период времени, в течение которого пользователь имеет доступ к данным курса, начиная с момента зачисления пользователя. Если этот параметр отключен, продолжительность будет неограниченной.';
$string['enrolperiod_desc'] = 'Срок доступа к купленным курсам по умолчанию. Если значение равно нулю, то по умолчанию доступ к курсам для пользователей будет неограничен по времени, если не указано иное в настройках определенного курса.';
$string['assignrole'] = 'Назначить роль';
$string['enrolstartdate'] = 'Дата начала возможности зачисления';
$string['enrolstartdate_help'] = 'Если включено, пользователи могут поступить на курс только с момента указанной даты.';
$string['enrolenddate'] = 'Дата окончания возможности зачисления';
$string['enrolenddate_help'] = 'Если включено, пользователи могут поступить на курс только до указанной даты.';
$string['merchant_login'] = 'Идентификатор магазина';
$string['password_1'] = 'Пароль #1';
$string['password_2'] = 'Пароль #2';
$string['orders'] = 'Заказы';

$string['privacy:metadata:enrol_robokassa:enrol_robokassa'] = 'Информация о транзакциях robokassa для зачислений через robokassa.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:courseid'] = 'ID проданного курса.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:instanceid'] = 'ID экземпляра зачисления на курс.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:item_name'] = 'Полное название курса, который был куплен.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:memo'] = 'Поле для заметок.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:payment_status'] = 'Статус оплаты.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:timeupdated'] = 'Время получения Moodle уведомления robokassa об оплате.';
$string['privacy:metadata:enrol_robokassa:enrol_robokassa:userid'] = 'ID пользователя, который купил курс.';
$string['privacy:metadata:enrol_robokassa:robokassa_ru'] = 'Плагин зачисления robokassa передает пользовательские данные из Moodle на веб-сайт robokassa.';
$string['privacy:metadata:enrol_robokassa:robokassa_ru:email'] = 'Адрес электронной почты пользователя, который покупает курс.';
$string['privacy:metadata:enrol_robokassa:robokassa_ru:first_name'] = 'Имя пользователя, который покупает курс.';
$string['privacy:metadata:enrol_robokassa:robokassa_ru:last_name'] = 'Фамилия пользователя, который покупает курс.';
