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
define('DB_NAME', 'csda');

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
define('AUTH_KEY',         'vu,{%[B^Z~hFI>0:2Q830iAg-{Io}s(]Fn7Zzs-$[zj.s&yC]eGSW;811y05+,oY');
define('SECURE_AUTH_KEY',  'Q+&I}LsXT)n=+I0] @bLGt^ki1TL0.`2u?^+P?f,J8GT}:WBx!ADgEOx++H$Uj>`');
define('LOGGED_IN_KEY',    'Z..9!NX7W}&vy+Rkf 4Z;3vcewcr2Cy;d<z(!~9i/2a$iuI2x$.WefqoPT|$qEhd');
define('NONCE_KEY',        'g6d2|f@X#TtX.rY6b},$?7Ypt45boh=S1u^{.K[+7&fB$$T+/p:&,.>gT+:%^/zE');
define('AUTH_SALT',        ':Hr0pZitvck<&zCW:}&VW2Id+_|20%eHtdIdd~^m4g9~148W}6@B/1-D%Tb?;OX[');
define('SECURE_AUTH_SALT', 'WahX+b`5wOdewq&CDgvJ1E6&Rcf ~@SNy=`s)NI|HWpd^?|jU)k |AH&3dy+z0}[');
define('LOGGED_IN_SALT',   '93-94+f-a6]]iN3!+~o}}_H[l+~1wz-mu;|1#TSK`pK]q&t%/K&BC{yzA9+m_)tY');
define('NONCE_SALT',       'aow(+!)CjbrpS%D0(U{J%e@ roh:ZQU7O^`KM~/WMR3f|L0LynU&X22-:a# Q*3/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'csda_';

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
