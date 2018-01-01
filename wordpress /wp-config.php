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
define('DB_NAME', 'redress');

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
define('AUTH_KEY',         'R>Lt_Ux:ONAcQ.rhwM~#b:${)=apN?3gqYh/At:arRP)Lp8Y{CDq{0[X07;loU21');
define('SECURE_AUTH_KEY',  'gkH2*ZoT,Ri`j,+Jgp:$)Exu3nIQLI^KOfl.~i/_0Dv$|O?o~Q#Ka-C%$d=R4`*_');
define('LOGGED_IN_KEY',    'PeI0S`yw +_eo(+`A1HohC &gt#5XxVzdX51duy/|c~.4~*rUqYUlprK6PSy+.0G');
define('NONCE_KEY',        'Q,I~V}tejP^6yb]zb]mZ-U%[jprrT{b-]=lrpPJ xpbO@<j2(R<~!dOY(}7hlJ*)');
define('AUTH_SALT',        'MBx,@s5rb5WBGQ{ofDZvZ5N @DRrT&I|!OF7p{%5w3T{GH4?#Ql6o5^TE6j$m=2M');
define('SECURE_AUTH_SALT', '95tU9N_G/#tmppI;a9nUtqpVPRR6;EHj?ucn,9#sMA0br{;Pp2vXRfH2{r_2df.{');
define('LOGGED_IN_SALT',   'i*rBexp2hS@PT>MO5B12sZ#Olf<Csp-[_<n8cOj`XN9/34>H.Yhl>i^)o*Z`-R!2');
define('NONCE_SALT',       '?JfSU>9_1fSoFc>cqrCzpg^`EP@-Mc;;5B*G(ho{A|9r=/f(JnNvtgO[9FN2Z`|C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'doukk_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
