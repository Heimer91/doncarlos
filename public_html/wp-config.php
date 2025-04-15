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
define( 'DB_NAME', 'dblty7hmatrs87' );

/** Database username */
define( 'DB_USER', 'u3pnele0kyfgg' );

/** Database password */
define( 'DB_PASSWORD', 'xsbvayo5qrmd' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          't(Mn*-FCIeWp9)2P^{`&;WWQ3QP]co.;8#?@$e7Q9qk}A+SVZ%a)XD@KZj=|76VE' );
define( 'SECURE_AUTH_KEY',   'uHcTqJ}h(}oN#//@SO*u9e%@ P1xgC zn]j&m@JVT(551|7bscf%%Vn=K(e f^`y' );
define( 'LOGGED_IN_KEY',     'Pstu}DT5hQ{A|z(eBythz=`Q9<fk.5(xRF|B>X @I=^=OfV&.?%V.dD5YoxD$4xL' );
define( 'NONCE_KEY',         'pf-=:j:BUtsl$dzSR{gKL[$YYSKCDSb?_VO+Sk#pTwiMlKLCQ]}oZYCi0zLc7O3E' );
define( 'AUTH_SALT',         'r`$Mcmt(m|;J+<6(2m;cY_@_^wAkSx*Qmn5Nt1}72%`|v1Jhy#Zv4tz4.KR54%-V' );
define( 'SECURE_AUTH_SALT',  'Q7bRxFjk8B6;oK_-*DhTG<*RG/DtZ#mh#l(%M5-n3?hFK;+N9e*!.Ng.(9PgHDO7' );
define( 'LOGGED_IN_SALT',    '9q~(RP_z!B:2{v4S&!?rN.aZOJHOW3:Q]h|;UCXSLUaHoE16Ly)x$Y({g(kYll4M' );
define( 'NONCE_SALT',        '96[2MBPV~3T5Hx-y6;)B:}@{<$hX(gq>CC;%|YEB1nkev{il g0b@L3^(2/]:7BS' );
define( 'WP_CACHE_KEY_SALT', '6QSWF{,F5UP/c? j`kl)x^4OGf%Lz6}5fzo%F7R+ Ac0[3N?X%D-/uBK>/<*JA1b' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rhq_';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
