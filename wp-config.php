<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** MySQL database username */

/** MySQL database password */

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

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'RiQ?!yJYJJ_n*wxB:n*P`)Vo|HX KGhax3J55.?nWiX/]mlz~<.igp%_K0|#@0!v');
define('SECURE_AUTH_KEY',  '9**87pmNcH5%o^+,pl!e]GDg2^[0^Sw^=|C.Z^(i/*YIf|5.l]n^FLlkA-,ek2w5');
define('LOGGED_IN_KEY',    '`.w@XM*KAIefwZ/z(GC*!n_,Mk+Ko |m`c4E?5o4=]+@D)lCz[UM+-C(d|sPe:Y;');
define('NONCE_KEY',        ')P/iI^qo1]![byLe)luH4f5=j]j&P!DB/4Y#ol9y6CGNuQ3uJe(RwM:2oi#6hb0y');
define('AUTH_SALT',        '*/_g[PPP{-`O^+GImZ^StYgmL{%OQxfX78 HdPYG#?W,2CJ_b|$),LK~-<xvmv&K');
define('SECURE_AUTH_SALT', 'kdVf-+Rys3{gSTPfC-wg!$.GqQMd0wxCe^Fybj_-_Jsg~#;h 621WZve(^8?[Oe!');
define('LOGGED_IN_SALT',   '#|EFk@_bcxH9-?#)HgIzl8@j]JeG4#]iqc[z0a.?!hzYW@~?/-7_UYyjLjxF~X?w');
define('NONCE_SALT',       '~wJ+6-FFB*BXz Wp,WW`#])V]~6,Z%7ep@1+r:KC0+!Rr,i~D+@sm_LXQ7/94Av2');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'ZS5WGB93cv');
require_once(ABSPATH . 'wp-settings.php');
