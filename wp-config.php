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
define('DB_NAME', 'matamunch');

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
define('AUTH_KEY',         '29{=+~;t6^S}G7whp>h.Zc}8lw1FVRMRiI-rxm=gxq=-[2VRLft1{.6]b|=]P2bd');
define('SECURE_AUTH_KEY',  'P$ZyR=m||&t+R#|7[VZv(NME9>Oc7#qT4o*AWdgG|_#C;(Z3g0$|(=Vt:_>T$@vn');
define('LOGGED_IN_KEY',    'fl4l~WK+3f;Bb{c-pIK}~+f!ar!I> (,Ht)1hn+W|V-D3@Cs`z8w?^ez[FWcg6n#');
define('NONCE_KEY',        'w5{s-*@,+<i_+Ip|Ur!utm1Iz-U>dxnQFT!Bz58e9(g1?L n6mv|C]utctSa2l1 ');
define('AUTH_SALT',        'sFRJkoej<5j;Z,M43|AZRAw8:V|0fa3g//L_]i.|?fzrQ`->ba774: w--=qM]W0');
define('SECURE_AUTH_SALT', '8kL+,-5 (h7(-z9uF#|j3 tt%-ydv?1 P}+MP@5,Z+4e.|f72Dr>-R/+{/>#k1-d');
define('LOGGED_IN_SALT',   ';xpR.A(o5;=A+&-Y(A^j)()_UBR i(FW) s)9 O9JUd(d33Za)/WfHClTO9^PW?=');
define('NONCE_SALT',       ' rw|+EqJR];^[|+]Mp[d]DK:q/8v~^Gl >dD4cL970;Z<T^mLW%o+qpolT{ N;Ib');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
