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
define('AUTH_KEY',         '`Z<yU&-]89`HZ~,h_R{+.,d}SRgYw342{F&eN?X{~>C5q~9/V]d@9a~R,v&Z-+LT');
define('SECURE_AUTH_KEY',  '+Kc&d2-3i5N(L{1t]o[@k(Kk60Hjm:3XN+Gt&Thh6}]EHZ 9&nL61c1|`k#3KZN+');
define('LOGGED_IN_KEY',    'W~_?m +i`UT%G MO,]%^@a-<BEL7|2f+v]_*d|,N}},$9IU>,1iA|_+[&0n/F0f;');
define('NONCE_KEY',        'HE6M_i({jA|kbr{I7<h$+UEG~5MK4CQot6Q9}bE]b{^fE}5+e,-P*TMs:^vD|-L.');
define('AUTH_SALT',        'sQjkQn++.cq^kJ#[fii]:|4}ekHiRR-X|58zz^I@mQ`3vA$9zU!ix`Pql E;7tKK');
define('SECURE_AUTH_SALT', 'jB]#HuHhiG8AjA)hMXQIc-gG+Jl+5 74NaZQ+XiJN{S[/Qt>,w^+h$Q}FP#E:pZ[');
define('LOGGED_IN_SALT',   'Bp+HD2pfZjYv8Vs@7VKpgPa^hCc2qoPGwy[[fr/eB5&KS}hd?T&e*.i_|D+2`;U4');
define('NONCE_SALT',       'n-9GKk2%A`i|e]D%}!Zt! `JxGuAi@1~W-c^EoHeRKX-ge.e6fk/7FvHA}VTvA23');

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
