<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'Deepak' );

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
define( 'AUTH_KEY',         'ys>BP,#i03k,$eP!Iuggmw2j;p:MMTy,%nkdWGP-4?fCE{Q2L0~Y%&+v7>$a:`Jl' );
define( 'SECURE_AUTH_KEY',  'UO0{!%n()2Wx%CbF#n$CHC]&,3,Fn7E3+p#c)1/l!]ez,AXV^gYb#vx|SgT7pvS;' );
define( 'LOGGED_IN_KEY',    'YKaU A]i28(X1=cx_RJ#[y@FHRmc.idHaz=byOZV01=>buc<T%}<lL.}8y^_Iv[6' );
define( 'NONCE_KEY',        '~kx#pPR,mw;(64PG3q- ^d{jm!N/Ll(z46BL5=U7RT+Y2Gf`GLo% zehU)aw?OKI' );
define( 'AUTH_SALT',        ']sE?%QyP&#fBCLt+QqSEC2RN bLWmciauJ##TqG1%DcW3&Be4 D ?;Kv9J~!JNi6' );
define( 'SECURE_AUTH_SALT', 'X6k2GV<*4S0I~eI>f|KjfnGR+-,N&{&J+UuB6nQ-EXI9+gkAz-rwY-B_}Yg$mA}m' );
define( 'LOGGED_IN_SALT',   'Nk<g?`ZKzBb~z5fSHj9YEdv/bbP]F&,G|BC.#0.[zUd@}nEJgW3^8^Q99Y8c2w7B' );
define( 'NONCE_SALT',       '~qB7v&;W{/B0c+Md+T.Bu*O$p2:.R)2k {mfZ0f.Nw.KY%&Xaxrhui]K7tk?aknI' );

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
