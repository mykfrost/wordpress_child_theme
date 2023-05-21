<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_2023_database');

/** Database username */
define('DB_USER', 'mykfrost');

/** Database password */
define('DB_PASSWORD', 'Korupted1!');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!{-&76Uz+]du+CS=jNFpd+c-IoMJ~S8XddR*([Z9r_wIM`7/uM5:OC@=gdv.c6?!');
define('SECURE_AUTH_KEY',  '|V!W,(*!z`)-+OBz)+I?Bam*rXW_!x]MV(k!:.!JzW}/ezWi^zBEreK?3s3s9T,O');
define('LOGGED_IN_KEY',    '{}v||^j3g[A--^Ujh</sf*cxvP^V]0(_i{Vi&D>IMC75GZFu;qR-a]J_SUCg~e-D');
define('NONCE_KEY',        '&#@G[*_w[R-ZBY]M5-L3v;6BPo<X{7yG,JC$+_-E|vd&Qy.zJ|])..H#JS}bWf_@');
define('AUTH_SALT',        '#e1~i;HpTex7ir|n4[,UC4fp(Xo/UL3|]r;|}D|JJ+Pw7MR#yoZ9$F|4O]K`#j/B');
define('SECURE_AUTH_SALT', '3Zp( s 5&3 EUlT,U!*S4Ra0+0$HT5m)ImTdw+5|<^ZU=VZv*2rlU*d<(.}Yx+NE');
define('LOGGED_IN_SALT',   '6n$_$:;9h,J=KpIVB`MnSL|[fV0zNZ#UQ8)m)@4l$+Cd]mo3V82ZJEN:mcr[`{$M');
define('NONCE_SALT',       '<F,du;CWT4U3;}Q}O;}zzkFgA>E@#<44m!N& I{F>W?$P[r[]5_<l9q5<yBulxG^');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
