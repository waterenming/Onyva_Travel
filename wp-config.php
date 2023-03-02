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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/* 			PROD 		*/
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xi640wb8kkk4wty1' );
//define( 'DB_NAME', 'heroku_e2bbacb7dec8b58' );

/** Database username */
define( 'DB_USER', 'lbbjcuapvwwxb7i5' );
//define( 'DB_USER', 'bd84b4dde9129f' );

/** Database password */
define( 'DB_PASSWORD', 'ze4pbthfi9iyt4uo' );
//define( 'DB_PASSWORD', '1be0fcfa' );

/** Database hostname */
define( 'DB_HOST', 'ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com' );
//define( 'DB_HOST', 'eu-cdbr-west-03.cleardb.net' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/* DEV */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/*define( 'DB_NAME', 'onyva_travel' );

define( 'DB_USER', 'root' );

define( 'DB_PASSWORD', 'root' );

define( 'DB_HOST', 'localhost' );

define( 'DB_CHARSET', 'utf8mb4' );

define( 'DB_COLLATE', '' );*/

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
define( 'AUTH_KEY',         'nwd9)9p1?8i<mM=S%O jT5b.j$Lm4Vn*+r}4smg{:akVQq+Zu(u>w@_ a+e@M|++' );
define( 'SECURE_AUTH_KEY',  'a&fMS#-{Cd]XZ~IbAo{_NvK2F8FMgXKhJdrr#`w S,_G!7^?^o*Ogd:QNXRx90,q' );
define( 'LOGGED_IN_KEY',    'q]8ot|84$*I{Kz{6I&lI9Qj[A!.1qp]6Sw/rGrH)!I1V(x9( P?0`js$llTk0,#I' );
define( 'NONCE_KEY',        'S@gNX{.Cd-zCI;M4.A1?)=R{8&5yU|=Fz# uPmj -&#m(;lrxRxSEr:]X~nr~}YB' );
define( 'AUTH_SALT',        'I[{2Kkq,qQ^NJ}8A5/`:^y|(NP(Ff(NwptIDtHB#dOZNZsZ-^l|>d_b^Fp:Dr9wx' );
define( 'SECURE_AUTH_SALT', 'wK11~w:xg)G>QDy;.XRL,99xD??tQGVh@{dg8!b5G`/!Sg44Lr0/,{ }vB-x,8n&' );
define( 'LOGGED_IN_SALT',   'bt;Mb5Eir>-jNCV!kh3u# +;DS{ns>$Q~uF~| #=|{~AP`5n2WhfND+gLyZDL?;|' );
define( 'NONCE_SALT',       'n{V)y 8zV3Bhg_:n6;G_7cD%Jr@~SCcP4g.CZN1xjpdivH:V~2j~9yY.MVE7y 74' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
