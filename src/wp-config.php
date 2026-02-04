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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'liceu' );

/** Database password */
define( 'DB_PASSWORD', 'liceu' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',         '+*Ay-`uRnBf`V^yg!:jRbb~50$X3j.u*G<y`g(z|uXT^d/TQvwK9&353[~Tjyu_d' );
define( 'SECURE_AUTH_KEY',  'w)G+txijczb@ nJ})KEZE5;<J65SKWM~x88mR4C$_b]k3Pzls8Dsr$.J:VWi)z?!' );
define( 'LOGGED_IN_KEY',    'F<0Iyv`fP3xUh`Y]{RIOFa8_=b|}tfxZ]:Mj5-.Uxz}#W0g!_1YiU8i,(F99+6=.' );
define( 'NONCE_KEY',        '%UwpMLc/Hi&k~vx07V,Xw Lkbk*rJm#%0S;$k<}/G%oBbv<vGHF6^dMtd8QVmIOJ' );
define( 'AUTH_SALT',        'QMjMZ:GMioub$I`T`SogdeiZ{/UwxUMkBLVH-9ydQT~jA+$:rCtMnBs+1sAF}ab%' );
define( 'SECURE_AUTH_SALT', 'm%eskiVthk@Urc[M(HwXFSNyG]TqgzfAh :KcW,8ijx:pLfF%;c5|3q^ ^g-5Y1e' );
define( 'LOGGED_IN_SALT',   'VN_zkZL*1[$xI}GKj|-N]RQCf `IUN@p1!LPiZ{E|:L)hsh6.C5gvnv!@;]<9>e;' );
define( 'NONCE_SALT',       '>+.Kv2>>Ny*^]7aT>z[$JogFVnu><A+8445D+aVm*4b@L!cF7w_u_H2OyH !B=9&' );

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
$table_prefix = 'adca_';

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
