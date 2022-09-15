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
define( 'DB_NAME', 'skm' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'vps' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Vps12345' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '&){ ddX,#tuOEs%Z }B,aG+S<;n&Xz3j`T5_j=/fliSfH.IWzDZlm0]6yF<K=Cd>' );
define( 'SECURE_AUTH_KEY',  'i,:-bT=~cZ1OwbS*Qk8qCzZnYcAY(khPrM`x(|0p2Z$zAxXARHe^XA8az5y*SUAw' );
define( 'LOGGED_IN_KEY',    '=a!!,c6Spl*K]|-D>E(KhhvrwC6{BhM;CGzaes{#rJHP>-j?fW-#KY3FFKIR.bZi' );
define( 'NONCE_KEY',        '8dT~^>@IeY6EM>.L n?xAQ];@lx-ZBo2i9`QE 4xkpj:,e7 nTtm!ckBDa+xTvqB' );
define( 'AUTH_SALT',        'y2z7p]54igxnlViro4G^2Sf`.eHf3IW^ 98MAj1l{vz6gA>(H0 .enI*Yw3S)Uo]' );
define( 'SECURE_AUTH_SALT', ']L38;RW-+pq6tEYAZnu,OH3-X!SP.g-kd_hAp;}IA|{HGkcgVk,$(q;5K&kv4aGj' );
define( 'LOGGED_IN_SALT',   'Iq4Jq^*jm*&{5[yO{Jb:cG<0vmOX_&[0HgSjL[ZS,+d*rNE!X!Zyl{K7H5/w(O[k' );
define( 'NONCE_SALT',       'i(zdnsxzY+zvVg)jo5u-HDW?<LS1UgBc#MF}< ?,3 (`LqK)G_nVP6rJ7a)z:=sF' );

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
