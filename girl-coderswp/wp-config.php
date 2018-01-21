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
define('DB_NAME', 'girl-coders');

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
define('AUTH_KEY',         'vjL,5oF|]fsJ0su;1t*C[g_|yrlJF08->J~Q-:XwB2TVe#2i5GYd%3#N#|:+Dqj ');
define('SECURE_AUTH_KEY',  'tbjK2k7 yOai=Ehn*Bk&Gm}r;yFVUE;#!(9I]Mcu#a!PQ fh,S&:%bQ(id~7@V(M');
define('LOGGED_IN_KEY',    'E ?-Yrc7-C>a>XUOLJIDo`Hr(XVT@4N$U.kK>6&.!6=Qy0!fqPK-;f!g;->!+bE6');
define('NONCE_KEY',        'G22`kEFZVW.u|gVAGB+CYt}U}<yFKlL[f$)#7+UnjNq#@a_|2IM!v ~YpOTJ=n0o');
define('AUTH_SALT',        'o{H|=xL/[2n@X1b3{Q$#e,9T[xkU86CJP%{igr*8pq*_ST5;$rcV>@bJ!g]S|lp1');
define('SECURE_AUTH_SALT', 'Fb! *S!@BxU%9j0dJCPI=,>fTt>-8Qyu^IYk2[~y${8,pFKLbod!Kj2i;k@R#H(>');
define('LOGGED_IN_SALT',   ']ZHLZ!qTv2j*?iVDJ+?viwxPnE_oJb6IaI[C|5{b5OWeP,9wYEeR?U+Tg)yT_:MT');
define('NONCE_SALT',       'wnFBnaD2P>V ql02wbMD?u)KEGmQ$fIA/uP*_q&7-F=#>}r&~yBCa.8`P(U=[f^$');

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
