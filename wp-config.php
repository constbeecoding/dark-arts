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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_dark_arts' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define('AUTH_KEY',         ' AAdg{%Qe8;M8x@f_=%%xJj9bJ= R$*<O]ZS?;M$oM~{_q%lP70O8=Fsb9}(.}q2');
define('SECURE_AUTH_KEY',  '-}):~a!8Xn55o:y9FPpjN>N6676N)ul@8~&sJ*RXyex~dgtAKrFE^e#i?Z#?va1g');
define('LOGGED_IN_KEY',    'jd6q|&QH~^#a(G?He%Y8c2]1K%%|1P_9!Wd/|x|~ZZ7DcWm^}f,iK%W#1|dXd>.D');
define('NONCE_KEY',        '~NfjY0%gM~WgesCksG/+?&Q=TI@rz%I>m3-xC-p)1l[CH%G285Nu)Q#LG}YEFonW');
define('AUTH_SALT',        'c=1ZPwK*=i}M2vf:-O}S/uT=,wQtk_ss}?HP;R0qeP&&`|X$IJ2Y()=/g+dFu~>3');
define('SECURE_AUTH_SALT', '#<X8]D{-Sm+H2 WS`shZ[`u@Uj|w|=0o42ur#@M%|Zbnl!h9$%f|!tgLSN/lTX.2');
define('LOGGED_IN_SALT',   'di[*n.u&HSxkfM?m?&X=+?S9{`$Ip(Fp+p-5;u0UsqW8s-~5QNun`-GeT-|nb0F4');
define('NONCE_SALT',       '}<W0V6J+YuW;+@L2qLzr!2~8^(-A&LL%{lLs0Oim66BI+KZvp +;x4` 6*(y>yLz');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyz77_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
