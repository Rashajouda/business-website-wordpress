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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '!>Q$%Z i.{.)=72;fhSX&<=!Y6;|=t4[7H_X[>96[:x}GU{|^4$N<=Cnv%=,M<&n' );
define( 'SECURE_AUTH_KEY',  '>-sc[8j,7[*Z!kdJ$0>2s9#YO_eiwL>l40d(sCs1u,Uf<>[C1 6q)/nq:CBdIu5/' );
define( 'LOGGED_IN_KEY',    'jr1pZN#?KrEE]|pWVE4C.*)!U=+Lli>t0S]Bj*7[V?*TvlJ]Zn]gxN$&b!ZOtotg' );
define( 'NONCE_KEY',        'h#U>CINW~vwzoy;|-%KT([$UJ~_yka8 Z^!jjN!e?WfE1jvFAQ5}hjX,iND_h2(&' );
define( 'AUTH_SALT',        'vX!$V8Sa@}A2?:U`9T*lmjc~JQ!k)Eu1K)qD3^SM&YHaX5{i1.W?~C?&=MB[:k=^' );
define( 'SECURE_AUTH_SALT', 'pK3ko]T8~|>/x:Ma6oT>=4Q.$M/Lg|SkN:{0.D1PRxFue8#~n}*0M/9jiF&r~]MY' );
define( 'LOGGED_IN_SALT',   '.c5{g%)Uw4JaVxp0(Ug5/Fwk70FB2<NM^ dz-/NR(^6E,j^M4:Y+p)*HWf*GpuP9' );
define( 'NONCE_SALT',       'hK}c1$TR)C0rPm9v5288R@oQ&K22._L0Y15LRuf4{W,xfNMslu^hBf5v9xMSiEjg' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
