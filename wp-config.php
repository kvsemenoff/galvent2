<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */

define('DB_NAME', 'galvent');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z^tFWWxcA+H([ 5i6}yk*W)Q}sb3#>$l:H/1g&)~jmns{vInc-t[kw@J/~-aAD$4');
define('SECURE_AUTH_KEY',  '(@:79yEAIt%IIUmU wcR_Z]a_n@OzL>$DjAPi>8Z~OJFcQBvQ0.,8o)tO 1&nI63');
define('LOGGED_IN_KEY',    'q=r][4>vt*105T2M:-;3zSe(u&0P8nkAzfisaWHmKDm3Zt*T3iKR.L*G S&Fq*Hu');
define('NONCE_KEY',        'qXQoNN(QI.u+8;5ZHd-rfbC,B;XqDkpX5JN&KqD}//lzxOmZn=#:64u^3A~G7qFB');
define('AUTH_SALT',        '` 4ApL6f5AG7+~xOr..o/(%k|+lWo*IOJorwVEChlo?eAelB|7hG~M!6EzTST-S;');
define('SECURE_AUTH_SALT', 'jwG(P;#422@LvYygir{E|.%7hMyxL&90tJ7?~@]wf~zWI3]I&GW,09XqF?<XIFv8');
define('LOGGED_IN_SALT',   't/id[of,OOoZ7RLkD<QGSpb20yNzq2A#BF^^esT$frsqgs0Ye({p_;^E9t:gew&4');
define('NONCE_SALT',       '&7KpaPcw*-JjN02S+P&!saL!Z.^<~1qq-/%k%&}s?q37g{mgL40hB$jSA8A[wgXv');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_galvent';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
