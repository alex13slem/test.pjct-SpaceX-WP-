<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'SpaceX' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Bf&J@>)BMM97En|pYit:CX,!PYav;<(AG%.//~Whx}k54/3NQ=bN{I6>r`-b:2SS' );
define( 'SECURE_AUTH_KEY',  '(j+``;$@Qw@7[hVP0r8I>]l)-#y&g,3a|;O@?XZBM65r~c~`QLf/DyU_kYnIZ&m~' );
define( 'LOGGED_IN_KEY',    '!JNh=T4EK>qK ~xajK^rG::QEYC%K;tr0Mv}YTQE|/DJiOxv,GsShMN@ q3zrv1,' );
define( 'NONCE_KEY',        'RZm=tj8wyZxEZC.Mj&z)%IE^~)!KL]Qc]@{>5) [`@5Y0`cmuAz0J:8m7qh&lTJN' );
define( 'AUTH_SALT',        'F= K|iZxi*cIm)h,V8fIjc|vZx=?|u!D$zG35ugbW&c>[`~,Y/(p>F2zx6j]n4D[' );
define( 'SECURE_AUTH_SALT', 'a2R8144^ej5;}BaIT_j58<v[.OXxrhf{L@ZG]z{}K@#+I?Rm)Z/O )eCBB@|}|K;' );
define( 'LOGGED_IN_SALT',   'YFftO2bN_ir5oB2fmxAQc0C$5fw:lAZp-vLqz|#5580T){ur}e.}v9#AcYJ9h]6,' );
define( 'NONCE_SALT',       '?*a:IG#>1v`jEoAbCS)e>gI=<oUYX-kO=,8&.}V/syJx X}Yl2{T.JXj1!Kfx$X:' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
