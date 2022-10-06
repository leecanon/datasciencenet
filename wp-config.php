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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'datasciencenet' );

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
define( 'AUTH_KEY',         'STQo&>x;s<&`tpyM*+h@/pN6/AsDB;jxF4`mnF%<pSDThRF`c}FsmdB;oM99ahRH' );
define( 'SECURE_AUTH_KEY',  'kJFKk@AHpZ3G:$*IpyET`=wADDaBBlt9)Y;OUQk)UZJi9TS|K+wzs?*^|CKTx3u;' );
define( 'LOGGED_IN_KEY',    '(:a{Dvzfe1`r9q7y!H{@D9Ht.GuAho%$xH{CuN=G=lCQ2{YT{]T(,#l+xjJ1l^Q ' );
define( 'NONCE_KEY',        '3ZV8%3%Uj,_M[,WUv `Mh:d#M1E^vSm0_Kmz;O%<WQ8i*sXGJ6AvAG7$Iig,hi)G' );
define( 'AUTH_SALT',        'B.Scj2I.,J|Kdag4thM9fOs/e~)SWe`e|HweTN5IA`6l-+!eib8gflEyrYOj Wr0' );
define( 'SECURE_AUTH_SALT', ';Lh915$XHlER.x?Jt-8Rc$AV&#tQ}E5a.O#@m{~;;*PB.!;GPAR`(AI f)w>Ux7V' );
define( 'LOGGED_IN_SALT',   'j4Dinp2cIurqS?Di&%3o_Rg,Ycx*#3{}QPF;*#W9Kti/Q_kj8y6clw*_d|ZVQ$PH' );
define( 'NONCE_SALT',       'nCO7W*/qTj;(W_;+j.(xL3>6E?v]X+4@E@9Y)v[jv2B<u!%4gUeG$*h)=DEsgf(9' );

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
