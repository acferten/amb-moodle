<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_mfa', language 'ru', version '4.1'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Достигнутый вес';
$string['alltime'] = 'Все время';
$string['areyousure'] = 'Вы уверены, что хотите отозвать фактор?';
$string['combination'] = 'Комбинация';
$string['connector'] = 'И';
$string['created'] = 'Создано';
$string['createdfromip'] = 'Создано с IP';
$string['debugmode:currentweight'] = 'Текущий вес: {$a}';
$string['debugmode:heading'] = 'Режим отладки';
$string['devicename'] = 'Устройство';
$string['email:subject'] = 'Невозможно войти в систему как {$a}';
$string['enablefactor'] = 'Включить фактор';
$string['error:actionnotfound'] = 'Действие \'{$a}\' не поддерживается';
$string['error:directaccess'] = 'Эта страница не должна быть доступна напрямую';
$string['error:factornotenabled'] = 'Фактор \'{$a}\' выключен';
$string['error:factornotfound'] = 'Фактор \'{$a}\' не найден';
$string['error:home'] = 'Щелкните здесь, чтобы вернуться домой.';
$string['error:notenoughfactors'] = 'Невозможно пройти аутентификацию';
$string['error:reauth'] = 'Нам не удалось подтвердить вашу личность в достаточной степени, чтобы соответствовать этой политике безопасности аутентификации сайтов.<br>
Это может быть связано с: <br>
1) Шаги заблокированы — подождите несколько минут и повторите попытку.<br>
2) Шаги не пройдены. Проверьте детали каждого шага. <br>
3) Были пропущены шаги - перезагрузите эту страницу или попробуйте войти снова.';
$string['error:revoke'] = 'Невозможно отозвать фактор';
$string['error:setupfactor'] = 'Не удается настроить фактор';
$string['error:support'] = 'Если вы все еще не можете войти в систему или считаете, что видите это по ошибке, пожалуйста, отправьте письмо в службу поддержки по следующему адресу:';
$string['error:wrongfactorid'] = 'Неверный id фактора «{$a}»';
$string['event:failfactor'] = 'Сбой аутентификации MFA из-за ошибки фактора';
$string['event:faillockout'] = 'Ошибка аутентификации MFA из-за слишком большого количества попыток.';
$string['event:failnotenoughfactors'] = 'Аутентификация MFA не удалась из-за недостаточного количества удовлетворенных факторов.';
$string['event:userdeletedfactor'] = 'Фактор удален';
$string['event:userfailedmfa'] = 'Ошибка аутентификации пользователя MFA';
$string['event:userpassedmfa'] = 'Проверка пройдена';
$string['event:userrevokedfactor'] = 'Отзыв фактора';
$string['event:usersetupfactor'] = 'Настройка фактора';
$string['factor'] = 'Фактор';
$string['factorlocked'] = 'Фактор \'{$a}\' заблокирован из-за превышения числа неудачных попыток.';
$string['factorreport'] = 'Отчет по всем факторам';
$string['factorreset'] = 'Ваш MFA \'{$a->factor}\' был сброшен администратором сайта. Возможно, вам придется снова настроить этот фактор. {$a->url}';
$string['factorresetall'] = 'Все ваши факторы MFA были сброшены администратором сайта. Возможно, вам придется снова настроить эти факторы. {$а}';
$string['factorrevoked'] = 'Фактор \'{$a}\' успешно отозван.';
$string['factorsetup'] = 'Фактор \'{$a}\' успешно настроен.';
$string['fallback'] = 'Резервный фактор';
$string['fallback_info'] = 'Этот фактор является запасным вариантом, если другие факторы не настроены. Этот фактор всегда будет неудачным.';
$string['gotourl'] = 'Перейдите на исходный URL-адрес:';
$string['guidance'] = 'Руководство пользователя МФА';
$string['inputrequired'] = 'Пользовательский ввод';
$string['ipatcreation'] = 'IP-адрес при создании фактора';
$string['lastverified'] = 'Последняя проверка';
$string['lockedusersforallfactors'] = 'Заблокированные пользователи: все факторы';
$string['lockedusersforfactor'] = 'Заблокированные пользователи: {$a}';
$string['lockoutnotification'] = 'У вас остались попытки ({$a}) для подтверждения этого фактора.';
$string['lookbackperiod'] = 'Отображение информации MFA начиная с {$a}.';
$string['mfa'] = 'МФА';
$string['mfa:mfaaccess'] = 'Взаимодействие с МФА';
$string['mfareports'] = 'Отчеты МФА';
$string['mfasettings'] = 'Управление МФА';
$string['na'] = 'н/д';
$string['needhelp'] = 'Нужна помощь?';
$string['nologinusers'] = 'Не вошли';
$string['nonauthusers'] = 'В ожидании МФА';
$string['overall'] = 'В целом';
$string['pending'] = 'В ожидании';
$string['performbulk'] = 'Массовое действие';
$string['pluginname'] = 'Многофакторная аутентификация';
$string['preferences:activefactors'] = 'Действующие факторы';
$string['preferences:availablefactors'] = 'Доступные факторы';
$string['preferences:header'] = 'Настройки многофакторной аутентификации';
$string['preferenceslink'] = 'Нажмите здесь, чтобы перейти к настройкам пользователя.';
$string['privacy:metadata:tool_mfa'] = 'Данные с настроенными факторами МФА';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP, с которого был настроен фактор';
$string['privacy:metadata:tool_mfa:factor'] = 'Тип фактора';
$string['privacy:metadata:tool_mfa:id'] = 'ID записи';
$string['privacy:metadata:tool_mfa:label'] = 'метка для экземпляра фактора, например, устройство или электронная почта';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Время, когда пользователь был в последний раз верифицирован с этим фактором';
$string['privacy:metadata:tool_mfa:secret'] = 'Любые секретные данные для фактора';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Время создания экземпляра фактора';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Время последнего изменения фактора';
$string['privacy:metadata:tool_mfa:userid'] = 'ID пользователя, которому принадлежит фактор';
$string['privacy:metadata:tool_mfa_auth'] = 'В этой таблице базы данных хранится время, когда последний раз для идентификатора пользователя была зарегистрирована успешная аутентификация MFA.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Время последней аутентификации пользователя с помощью';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Пользователь, с которым связана эта отметка времени.';
$string['privacy:metadata:tool_mfa_secrets'] = 'В этой таблице базы данных хранятся временные секреты для аутентификации пользователя.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Фактор, с которым связан этот секрет.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Секретный защитный код.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'Идентификатор сеанса, с которым связан этот секрет.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Пользователь, с которым связан этот секрет.';
$string['redirecterrordetected'] = 'Обнаружено неподдерживаемое перенаправление, выполнение сценария прекращено. Произошла ошибка перенаправления между МФА и {$a}.';
$string['resetconfirm'] = 'Сбросить пользовательский фактор';
$string['resetfactor'] = 'Сбросить факторы аутентификации пользователя';
$string['resetfactorconfirm'] = 'Вы уверены, что хотите сбросить этот фактор для {$a}?';
$string['resetfactorplaceholder'] = 'Имя пользователя или адрес электронной почты';
$string['resetsuccess'] = 'Фактор \'{$a->factor}\' успешно сброшен для пользователя \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'Фактор \'{$a}\' успешно сброшен для предоставленных пользователей.';
$string['resetuser'] = 'Пользователь:';
$string['revoke'] = 'Отозвать';
$string['revokefactor'] = 'Отзыв фактора';
$string['selectfactor'] = 'Выберите фактор для сброса:';
$string['selectperiod'] = 'Выберите период ретроспективного анализа для отчета:';
$string['settings:combinations'] = 'Резюме хороших условий для входа в систему';
$string['settings:debugmode'] = 'Включить отладочный режим';
$string['settings:debugmode_help'] = 'В режиме отладки на страницах администрирования плагина, а также на странице настроек пользователя будет отображаться небольшой баннер с информацией о задействованных в данный момент факторах.';
$string['settings:duration'] = 'Срок действия секрета';
$string['settings:duration_help'] = 'Срок действия сгенерированных секретов.';
$string['settings:enabled'] = 'Плагин МФА включен';
$string['settings:enabled_help'] = '';
$string['settings:enablefactor'] = 'Включить фактор';
$string['settings:enablefactor_help'] = 'Установите этот флажок, чтобы разрешить использование фактора для аутентификации.';
$string['settings:general'] = 'Общие настройки';
$string['settings:guidancecheck'] = 'Воспользуйтесь инструкцией';
$string['settings:guidancecheck_help'] = 'Добавьте ссылку на страницу руководства на страницах проверки подлинности MFA и странице настроек MFA.';
$string['settings:guidancefiles'] = 'Файлы страницы руководства';
$string['settings:guidancefiles_help'] = 'Добавьте сюда любые файлы для использования на странице руководства и вставьте их на страницу, используя {{filename}} (разрешенный путь) или {{{filename}}} (html-ссылка) в редакторе.';
$string['settings:guidancepage'] = 'Содержимое страницы руководства';
$string['settings:guidancepage_help'] = 'Введенный здесь код HTML будет отображаться на странице руководства. Введите имена файлов из файловой области, чтобы встроить файл с разрешенным путем {{имя файла}} или в виде html-ссылки, используя {{{имя файла}}}.';
$string['settings:lockout'] = 'Порог блокировки';
$string['settings:lockout_help'] = 'Количество попыток пользователя ответить на запрос фактора, прежде чем ему будет запрещено входить в систему.';
$string['settings:redir_exclusions'] = 'URL-адреса, которые не должны перенаправлять проверку MFA';
$string['settings:redir_exclusions_help'] = 'Каждая новая строка представляет собой относительный URL-адрес из корня сайта, для которого проверка MFA не будет перенаправляться, например. /admin/tool/securityquestions/set_responses.php';
$string['settings:weight'] = 'Вес фактора';
$string['settings:weight_help'] = 'Вес этого фактора в случае прохождения. Для входа в систему пользователю требуется не менее 100 баллов.';
$string['setup'] = 'Настройка';
$string['setupfactor'] = 'Настройка фактора';
$string['setuprequired'] = 'Настройки пользователя';
$string['state:fail'] = 'Неудача';
$string['state:locked'] = 'Заблокировано';
$string['state:neutral'] = 'Нейтрально';
$string['state:pass'] = 'Пройдено';
$string['state:unknown'] = 'Неизвестное';
$string['totalusers'] = 'Всего пользователей';
$string['totalweight'] = 'Итоговый вес';
$string['userempty'] = 'Пользователь не может быть пустым.';
$string['userlogs'] = 'Логи пользователя';
$string['usernotfound'] = 'Не удалось найти пользователя.';
$string['usersauthedinperiod'] = 'Вошли';
$string['verificationcode'] = 'Введите проверочный код для подтверждения';
$string['verificationcode_help'] = 'Код подтверждения, предоставленный текущим фактором аутентификации.';
$string['viewlockedusers'] = 'Просмотр заблокированных пользователей';
$string['weight'] = 'Вес';
