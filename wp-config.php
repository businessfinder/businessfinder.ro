<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'monkeyen_wp168');

/** MySQL database username */
define('DB_USER', 'monkeyen_wp168');

/** MySQL database password */
define('DB_PASSWORD', 'm5P!(2Su2I');

/** MySQL hostname */
define('DB_HOST', '192.168.124.3');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ywcmbt3cnfat87ndxoo0thbpq8nhnh15b2gyxmnozlr3bfevkmeyvgxufoulqedn');
define('SECURE_AUTH_KEY',  's3hi9qp6vpx2zd8x6fsp1o1imeuwk8iguucz23cfntdpe1hmcuyhecpz8qviwvvr');
define('LOGGED_IN_KEY',    'js3ib8io7jw9bkxs4oxd55s0on5t7svb8z0ztqi2yema7vrzyjc8bk4hoxd8xrym');
define('NONCE_KEY',        'mrcgf6arymd3le5ywbbyotr8gj9angb4fkfouja1ju5wefrib02ra5oqkwtechn4');
define('AUTH_SALT',        '3ghlocjzbewcfk6oecwgztymqia6f3cyx9fqkdi1lismvtwa1s9jz4vwfk3yh7ys');
define('SECURE_AUTH_SALT', 'z2g0xqducvbpf6s3wtlieohzsjyxarbaqwrdv8fwailewuxth6w2gacpikxvwijm');
define('LOGGED_IN_SALT',   'x0gy9l9q4juz7l8iserwmusvkgglytchvylqkwjtue1ziobifpc7dhirz3diz5u7');
define('NONCE_SALT',       '9em8cjtaoemanwmukxxuxa4rbotnqxjfncvyzkmhnjpzbelhedc5mnmrcembzhs8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
