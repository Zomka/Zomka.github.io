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
define('DB_NAME', 'Zomka');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'W(kvi?7LBec%x-`_/x1{ ,Pp,ShOhxX:k}eT(9i: K<BwOI{5i.D-PPk1:$UbCHX');
define('SECURE_AUTH_KEY',  'yoT7*OAS#PDoy|vM%?C/?c@(pKU<FOAQ{ a#/!]c/I3TKf()Ks?`KP%CoU`v3Rw6');
define('LOGGED_IN_KEY',    '0p]/Fzi#rX`&XGu[7FDh=65g6?MA[y @BBq$KWBn%F9Q#M9^R>6~(JoTxo!($,7t');
define('NONCE_KEY',        '<zQPl::AbTHojnKpL&4Ez;;;~?|T~|&f w=Ivw85c_ioPc5}c6:_.>o$O/x!IBZ?');
define('AUTH_SALT',        'iojxUzqEsZ^G?VXj(T{Gemz[0FJrpH%v2RQv.+s@VRR&(yM??>oBR0BE@=) j=dy');
define('SECURE_AUTH_SALT', 'geH.tSbugt[--V0wX;$,Z+jV*~^=QoT<=>-qx]~x{-p#QFA.6k&5whkFHoQvqYf{');
define('LOGGED_IN_SALT',   'H&H?rN+v4Q*S_/R>j[tS*29?[FYt=R!Kx@i4B.0Aw@/Ak 8u~.a@+&&JhIl1)L&i');
define('NONCE_SALT',       '{0a:&qj*yv.eoQ<1.J)Kb1t@l,CQZ;hW~@` ~-d,q;AS-0Iq0+LyrnQox5 zGUoZ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
