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
define( 'DB_NAME', 'test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5fO=cEpf /ys=Wq<zF3r>z9Oofg$rphi]W6;L{q91Md)P-0 GxKBk>JQJ b-2[UH' );
define( 'SECURE_AUTH_KEY',  'dLw!jx,@s}J+3f>?AS9F-OM3{&`F4n^0%4ASKo]5D_2G>eq@Mr9TMXtrP5MbdYG9' );
define( 'LOGGED_IN_KEY',    '6EvN*Z3Nj@i?q?(v:a$-d[Y$E[Y*ADviOzCqJlm30{9H}ZqMOcD&F=%T={:;h /@' );
define( 'NONCE_KEY',        '{2KZv9eeA8jTJ4~1W*A4pZqFdFf7<]#YeS&{v$:_src$M(ZWBf5:,]B/Krg $!v-' );
define( 'AUTH_SALT',        '3Mbn O2;AZl[wY`jVdV?](%_I=(ki@NeU69t-qc9@DzB7tHGt4|g}cW1I<lTV~nF' );
define( 'SECURE_AUTH_SALT', '~bsg|`QD+~#XO50Rq>dDU B1kzbZn/czlBLiek-r2u%hG~Tqgdkefp+Ht8hUQLZu' );
define( 'LOGGED_IN_SALT',   '}V!lu5~ bW?Gi$ |KA4fi5H:E#7gYie&D2]UV|Ela{i%u*q|&%OpltQeil=@JF3[' );
define( 'NONCE_SALT',       '!*=pDz+^/} :&@M, $y|Zc?:Es($9tYbC=?m[a]Pq;0s7FwUohsv@^IclKH6d0CR' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
