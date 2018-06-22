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
define('DB_NAME', 'pressure_lacreativetech');

/** MySQL database username */
define('DB_USER', 'pressure_lacroot');

/** MySQL database password */
define('DB_PASSWORD', '3eg$zyCOgF!d');

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
define('AUTH_KEY',         '~bI1woIuL/b}1XO05(3&7~4=?+$.gHjP&_g`VB[5Ir:%kW?mXs~:XdQ.xcM~omz_');
define('SECURE_AUTH_KEY',  'Q,8vu<yR?S]U*`2*X{nSV9{8pH%)71E/klk9U~>m&;5U!F60>OZ$6TVBaDX{IsP ');
define('LOGGED_IN_KEY',    'JwIHAcN(Ct1B]KqfanW8pg>ffxV@829%w0-{oE}7LK<XVqXU{P:oAyFIRJ,1HDA7');
define('NONCE_KEY',        'Hb<ID<Ut;|ERU)1 g<fU%tV^#&yRo>gIes(|j||KrzE01]8%hr$A0:6i<LZ$af6b');
define('AUTH_SALT',        '{KGN(Vwf~t8,5erR:$`QK9kA=|S9QTk]yE/L4q~j!FqTL|)CxUN4>{sRIa|@Jq*7');
define('SECURE_AUTH_SALT', 'oz0;<$DD?sj-5w`KG2C62Ebnb$rT){I<*(%?kI0)CkNov_+0JGK9:B|Z!U=Pi9Dq');
define('LOGGED_IN_SALT',   'a8c]|`gy$&FmXhk<j!k#T(R|R+=ZkgAVhoMDUK8  n`s>]JK5|.HO`cfh;k$UQ!,');
define('NONCE_SALT',       's-mUa;Y&D:w (,0;2}({KKX;2(y]bXxS=m(um!DIKcS>FhRdW|seJ7cLurY$ O_{');

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
