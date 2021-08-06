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
define( 'DB_NAME', 'invission_new' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root@123##' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'vxd+)U3qmvbjcylJ5e,+uU@-(&&rO!QhGNi^FS wSfDae}P@i+ZcR{,?/Fty~a*T' );
define( 'SECURE_AUTH_KEY',  'L0wi!:jn$%P7`0.9hj$kAB}N#?pC>]D#JB:f;0lR+L+66$rzQ6;HyJlYWmPH.l]Q' );
define( 'LOGGED_IN_KEY',    '[(W+Ew)R*W0<P#.0BUC!IttOQv`4_p0N,c8^a6)Jd)EA>)mV/<b-oDec?Bb!8J~e' );
define( 'NONCE_KEY',        '!5&92#Zffzt h[z`dwf?#67s5?10Q>%y$+5k+L:8(r[r@Agq-,PKeT/fDXqd,c`B' );
define( 'AUTH_SALT',        ' UV4klk7-pa89C*5arvf:?2![pc[7e]]0YtFt!WWeBWVY7!#~jK#9Q)M!YWG9!qt' );
define( 'SECURE_AUTH_SALT', ' #u}d4Tiw5}k8Vl^p)^T=%{$>dnn?MN4v!Jno]W_,i*U/skVe#cqWueCGLKEqW-a' );
define( 'LOGGED_IN_SALT',   ' ,H8uT 4[SilXi!^I@o=83VEUoUQ4.jG.[Mi43D^c~PYMb.HJGJl4!i)u/7neaqN' );
define( 'NONCE_SALT',       '1DcHO%~a-X5D(tnBqb,>acl%Rd%Y0mq#]9IJFE}F.XTo5swKJH5):WN^X$$<v &`' );

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
