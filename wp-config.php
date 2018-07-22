<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_film_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '[<Y+~=76$F#PdVE3HiJb;9z/GX@#q+.gcbB%_a^0f#Q01=>N+]d!rtc}[51b?$^_');
define('SECURE_AUTH_KEY',  'piNZd0hH26F6%SO/uEa~ #^Wg!Y+raA$2c!/U[,[Kxl3Z6*dU-6(UDAB<}_hCXy_');
define('LOGGED_IN_KEY',    'd3EFrJc!^+MV[#u}&0rE60=R{<2+(x?ieT)a_FUazC%MP]eC0hhT%9?$*3Z$/z@A');
define('NONCE_KEY',        '(fn$@_,~A!6`t7!|RJ]&Y(f786E8Bhtx>utxG(#a!:O?t&mu/}+CY9.B^L*;Zj]/');
define('AUTH_SALT',        'xC=Ac,??**>|<}%Qo$|_SMwJ<]i/;mMXyhT~~H]RX+ztiK.0C*%ts]#`/UOm8M!7');
define('SECURE_AUTH_SALT', '`YE[iQ8%tF%VSh:qMkgV1ZnW`WQ;!`52CgLMf}o=l&<qQh(9QwI8*e*9Vz2#[D5N');
define('LOGGED_IN_SALT',   'r%U~u.|/aPu#jSTXEpDi@9C` 8>bx]<3xy%co&A?B#_c2of_RJZL]8C<>i#f%_8;');
define('NONCE_SALT',       '}=?ZZ#NM0Y9jZIhtInj6cT{wK< w8#yT}b)_:#i;|iF7 +FE(Ago-#wnjt&#(W|5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
