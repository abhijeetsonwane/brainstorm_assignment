<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brainstorm' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'P)8:6PhD>rj(F$yb|;fY&8lP`$bbr|Q4L~62c0y)1P5wA&.:,kyUjKc6e^d1b5Uw' );
define( 'SECURE_AUTH_KEY',  'Jg=v/|rp6IZ>5f_.}2kmo~93IjDYeWE*3b{dbi&%=U&mFTG>,$3/poR-;mb/%VD{' );
define( 'LOGGED_IN_KEY',    'Fq=9S}9/^ </StWUC$dsOXAn6*vrAu&xS2tvN1KN|Ib>5!jI.fw?v+x1Py0dT#V ' );
define( 'NONCE_KEY',        'X6W.K7A37o|c7dJ%rAYqhS/ug!mb01M%fmyZ3gN_SSa,exruQbtK[P<wDE,a_cEY' );
define( 'AUTH_SALT',        'hQ)N*Dg$S#OA#W,NR*k-g5RC4,y4MGCff~:wZypu^l+>ViSi?4ik|b9K1a$X,r&3' );
define( 'SECURE_AUTH_SALT', '^(rdI%L}!aF3.i6}x|$U0bIg2TKF.laFXkI9J77%lz0O=D[7Rc71cEXXJyi{Hi-?' );
define( 'LOGGED_IN_SALT',   'oJKvmXnz@.&W-NVfc,m}eU+qX2xcTLa<TL)1vU~2YtxN$Muw/)SZYdnUj#ij c{#' );
define( 'NONCE_SALT',       'GL2R>dTYN_BOIzg )pvMj[=CCzpeqA]*F<w{5qQ`H0SotYep|Ad.k6bchDEGib`^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
