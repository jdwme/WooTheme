<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'magicDBqcfq9');

/** MySQL database username */
define('DB_USER', 'magicDBqcfq9');

/** MySQL database password */
define('DB_PASSWORD', 'mJVYVYEHE');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'vYUB3{,$*yqjbTM2{.+umfbME7<^nfXQIA3{.<*xqiaHA2].+tmeTLE6;<umeXPH');
define('SECURE_AUTH_KEY',  'AxtmeWWD5;#~xphaSOH91_+tleWP5;#~xphaZWOG91[_-slSKC5#~wphdWOG91[_-');
define('LOGGED_IN_KEY',    '@rYQJB30>^rkcUNF80>!zrYQJIB3{,$unfXQIB3<zrjcUMF7>^yrjbUTME6<*y');
define('NONCE_KEY',        'R0},rjcUNF7B3{,$unfXE7<^yjcUMF7>^$unfYQIIA2*yqibTLE6;<.unfXQIA3');
define('AUTH_SALT',        'yieXPHA2]xqiaTE6<*yqibTLE62{._+tleWOH92]xphaLD6;#*xtmeWPH92]]_-t');
define('SECURE_AUTH_SALT', '~taSKD581[!-skdVNG80[whZSKC5:|~wohZVOGbTLE6;<*xqXPHA2.$umfXPIA2{.');
define('LOGGED_IN_SALT',   '$fRNF70>^ngYQJB{,$unfXUME7<^yYQIB3{,$vrjbUME76<*yqXPIA2{.+ufbTM');
define('NONCE_SALT',       'a95_~xphOH91]+tmiaSLD5;+tleWWSKC5:|~wpVOG81_-tldaSKD5:#~wddVNG80[');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
