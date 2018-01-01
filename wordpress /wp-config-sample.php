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
define('AUTH_KEY',         'UI:z+Ygd 4+i>AKp:mLO-S@vHm(2e*evj(+U;Kotlq8|64jsPHAn_q9E;WB|X1Kv');
define('SECURE_AUTH_KEY',  '8tubhF:yB={D5CE[f{fE.9)7dwX[,*Mok$j5e]{qW.KCA[>UO+3bvO`<!%9J<xQZ');
define('LOGGED_IN_KEY',    'L%NJQ$kSrE:#GQYva--dfqHGt#IXX>xMu[<B%.<tM^)w,81+=vIGC s)VHEkL[ar');
define('NONCE_KEY',        'bR-scmBW?u!s4-FyZRPQ+#O|seP+^]qsYze4mm_0wTuZ[{ ;fj:!VF!6U`wrh[6(');
define('AUTH_SALT',        'lY+#A>!u&Vdod}:6{eR*KW_j-L|i[PhUP~2H&isU+9E|kcXOgR+S )i6qUkSn}L#');
define('SECURE_AUTH_SALT', 'Qx7I6DWVo*xAqs2-ffF,CIgrAn&%GaPSnO])_vO4P-|-PTW#!)B=enDE}+ rp@}]');
define('LOGGED_IN_SALT',   'nWO5?M&$qO@M1{Y7< (OqBbo1l,&!}+S2%yd71= v..+]|D<VHAa1`qhV<1-@xUw');
define('NONCE_SALT',       '|t>x_e!+9A9M (n{g8.i,}/D&5fB]Puwa|Ttct$fbwaQQNih!-|UFe7CtN28mRi[');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
