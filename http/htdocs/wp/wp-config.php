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
define('DB_NAME', 'sidedoor_20170408');

/** MySQL database username */
define('DB_USER', 'sean');

/** MySQL database password */
define('DB_PASSWORD', 'qt8rofoheHHx');

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
define('AUTH_KEY',         'R~}cn9)-wySqWXQ+Fm4-Dk&u%,7IN<WYJ6$Jt9<_>0m#CeT$Em3V5:|5l:pXQ,T-');
define('SECURE_AUTH_KEY',  'QF(YX]mK^GQ`TP1cwuIUP5yQI6VN16y<z[Y*iysX.u,eEB?&>LS-@=QU6eX2B!-!');
define('LOGGED_IN_KEY',    'E#dB OqN0v0KHB2uK/{{c27lvuPc~j}><)DX|ud!5mylg_kKhy1lxnG1gC|ba`b ');
define('NONCE_KEY',        'y>JH+bNojl`B>E%B%(f;1|yOi//|L}J3qDzzV48m:x}N3j^,e]T}]{P+u;az=+vS');
define('AUTH_SALT',        '!.AU%GzHYp-d#$(hZL?A%T/>`^~tC{#48M^H3P|ddw4%G]e.+lC];jU7_@Ew&xjM');
define('SECURE_AUTH_SALT', '0,rC*kg9pc6,7e6} B3Rx[qR69R.$$UFj<p8kx%-*r&s0Y 3VcY6=coa+5}bY=LX');
define('LOGGED_IN_SALT',   'seJm`.1O3vXj(F7Q @Cx@#+Rb:YARi]_B|obj4E7(_148GMn LB58e[Vyw^,8ndf');
define('NONCE_SALT',       'g(T{&myH.vBQMI@#b;S]fkSS%7]Y>8N ]Q3Fw!WzN@tD{Wm$*NMz}KcrRAUT}SI=');

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
