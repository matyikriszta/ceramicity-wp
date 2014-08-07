<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ceramicity-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'qAzxd4*p7gFTc3g`+KM+LA%JrD`F-<M/Y#>Q|U_09*Qtbf7.d@IRBE=6-LdXrXKx');
define('SECURE_AUTH_KEY',  '9;_3/1]H0aC|,MfkuDOcK9#TAqUl#@WtT;<~(@^$*%!2AQ`VafW]FNUm#4a^/^gG');
define('LOGGED_IN_KEY',    '|~&_Di?>C29=6!t`)EsVkKhB_m:ES5Jvl]k+kT~g|N +}IxyY@Pnvg+J|Q,Jt2q*');
define('NONCE_KEY',        '5#ETQx:a4O986.o|B500XQIHG@vlOn`CLR]90~AC~&DHW&.2Ezu0z5hryOvO]bD3');
define('AUTH_SALT',        ' m[68LHR>r.z.E!:x^5}uJg;3iIr99`!+jF b<I(m_J-m<!#oUDC$[b[NG2qma%x');
define('SECURE_AUTH_SALT', '`*+6Ux`t[a6cozMe/Q yYX<_8;F59Met4_CP{?^@Wg`(1;Me-o+(]Kd q)|vW0$g');
define('LOGGED_IN_SALT',   'uyB?~DCl-<=e^eu!N1`D5+I:.EP? *1=hYf-iqeQBSn`0kI7G0OU>VK&_&e^Ml[|');
define('NONCE_SALT',       'K|HvqQ7R<OMqFDG~_-RMMQa(+R{. ytkmD^9O])]{#^$p|.*|[TdE&R,O?_Td$;Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
