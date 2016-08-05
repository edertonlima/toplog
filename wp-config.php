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
define('DB_NAME', 'edertton_wp10');

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
define('AUTH_KEY',         '~29}J^sd9G^@g|LfUiH{Ej[.{#plpMFV$nqJyP`a.b(KkAt6P+WMruRV^x]eD|3a');
define('SECURE_AUTH_KEY',  '3DBsT-+#=qh&dVC?N<d9yw2fHv.4h}>NBS?f)(lMKCA2Hm%/2}-$(,b~fGdX@P1{');
define('LOGGED_IN_KEY',    '+lS5xW.}&-r_QZ&TzD%}6CR%dP!r+5xWQ_s9_zJJ(@IGZKwa4E4~eGC~?Uq;N2<0');
define('NONCE_KEY',        ':W!7Y$a9m-(tAs~s40W)[+$^DcbhE|59Y]e#>3gcbQuIYt3O}UOVD7.FYqKKf}ZL');
define('AUTH_SALT',        'v(}x*JdwMIXMMVV81*<$F8%l:vqDzwDZ}Hd%,7hI1RsmpX5F!bwy8/2/{)nN~<MD');
define('SECURE_AUTH_SALT', '<u8KIqR`?Or;Kob[f8{_ d4i!$Uiza.Mj|]:[Y}aTDI&>j]u_>WQ`xqna5XDx~hk');
define('LOGGED_IN_SALT',   '/!<X^XX%Qm3w<dqhRC}D9WG!VWa[!KnJ$2s((_b9w9z*az3S3FRud!:zuXC-eJ=o');
define('NONCE_SALT',       'Oj!)V!7,PnIO||/{:k5|m* rh?B{qq7GhUrUK$}Zsi34REN7-/jE y7TN;nc[PFy');

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
