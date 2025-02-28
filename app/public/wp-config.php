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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Ky[Z;gz6nI9>bck6}o0qlZoor,~{!@IQPFZCW(^PM?}zt8B6hy|EFl<>.LntIu`r' );
define( 'SECURE_AUTH_KEY',   ' 2vFUy:NeQv`@_$iUd^wdwRbFz[IkZT}_!a}^A+O*xh:5qDcA5.3=S;6A%{n%B$N' );
define( 'LOGGED_IN_KEY',     '^=i@So`X/~f&Op{Z7hVi:%$h1Qu7`rMyk(!9W%e^^UDXrT^Yju(_}{wEE<MV31ob' );
define( 'NONCE_KEY',         '83 nk::AFivx5BgG5gn Td|+%US,x*=xOM>mYU{uqwnt!{KFiZl`a)?->@s6foVX' );
define( 'AUTH_SALT',         ':C-~dfW Hb`VG@GW8|&6NYSYf-va26@0UBo`JEn9f6`+HvSZBg(/,87n7Cy6yuXa' );
define( 'SECURE_AUTH_SALT',  'r.Com9$/mE:WVf/I-@eh<fddoE L0<x<#peEE&38TntSR>fY.m;dG4uvJ2|DogU#' );
define( 'LOGGED_IN_SALT',    'fYxaLI WUAol%e}>BX6~P*@$vg)Dz~w-:>|{eK LH5n?>P0P32|K#zBbo{Vl4.}3' );
define( 'NONCE_SALT',        'jjG4vKk6W:{<,*bKTRJXmm_GKjf>%70CMwme|3GZ|*$=/:4#Q#3_O#g,KA]6Oc/|' );
define( 'WP_CACHE_KEY_SALT', ':.I!-wSrmgt^_DH%c|~kS>iU0bL:Dt5?q.XA}2Bho$vM[;w!_>Xzca/etLoG$~em' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
