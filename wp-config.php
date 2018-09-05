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
define('DB_NAME', 'lsfc_db');

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
define('AUTH_KEY',         'QDiJ,G:C`Zs pEfgTw{4V.r+CeR4B1eva5mYb3{V.IL6B/(^iY#M1p p[B-/Mh:3');
define('SECURE_AUTH_KEY',  'gA9CM%J:Mrwbur|D#/l]pI9PcUr3=P[Z9OtU:Q{!EnD=RAY)zQ-Jm))iXid[0e|E');
define('LOGGED_IN_KEY',    'qJ8Ww&KF0~V*=j3ZRNZA(EFlKZ62E2kB1sJDIj!,6)Y5Y];J>)])0C[&1fzJs1OM');
define('NONCE_KEY',        'Ab,RE}OySa#wUwnUk?x<7Kj`6;;DP6.E[@[Pbb~!Q~P,-mJ&4-+](F,q+~]PHy)&');
define('AUTH_SALT',        '5T7tdjnX<*}VZ6PD vV1kmByBh:+iqI8LP:w;>fwQ -hlaU|ogS`0h7fL[!D>AS`');
define('SECURE_AUTH_SALT', 'z5XDUkMcd?.cKR:?($5qLTS0fb;lu3E];9o+Vuw<,29bnW6x#Kg`4u2Ls&~r.1z/');
define('LOGGED_IN_SALT',   '#23SLBt=#ctkCBHhoZ@N;`<Ux2ebY:urCD3*6/}E0T/C*SD$O{JJBY,zsfF<VkL>');
define('NONCE_SALT',       'ltAs:lrNDiZS]9A}V`@I8*R,&3}`qnsv=3nE9eNV8M&Q261=,R+ut6fwwR L>3`1');

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
