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
define( 'DB_NAME', 'example' );

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
define( 'AUTH_KEY',         'PO0ne2HB#!Ixv-9s8%L#2AJIX|;;U:gthcy}63KGRn#(Wq)H* xU$|Jp]9lmosIv' );
define( 'SECURE_AUTH_KEY',  'Z)s:=ExIvMPvV|=-[Na/-j}cyS dT4$GM~dt?S{8NDI7;urTPiDHy(I^hP.Pe3~h' );
define( 'LOGGED_IN_KEY',    '`@!f!%=*h^?BK?r(L 6F?&KkB^*FZ@?4 0&:4JDN?e^G5rD}}dK*;1a-k:PYs@U,' );
define( 'NONCE_KEY',        '1i;IdDVXJ-1b2H,3C7y.D`d5PN39iLt@rc{WOtKhSlFDB[qAkT:e`>7G~iR|M{y-' );
define( 'AUTH_SALT',        ')}ETo./|6qjIvx9s%^%gO90}e#ZXZX@ZNQhk[FQIXU0z|It=SB`s->]hM)t<W3Gn' );
define( 'SECURE_AUTH_SALT', 'E,T6=m.4}I:COKG`78.V)0*Ba7;2lFSM]%eHr{Dg1p+m%>dbhe0&{zc(Qx1+~_7v' );
define( 'LOGGED_IN_SALT',   '$Ztc~OI~eKGF1Rq_6?vy. UW-W$rC_aU#+/Du_hs%jkfe~Oc-d.ItlyACQ9XSxX*' );
define( 'NONCE_SALT',       'pS%{hopc+!t~KLz*SU?NDvy`mqL5->sS3w18nN_Ol`$1mxrUp-I*IzH^XVdH5Y!C' );

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
