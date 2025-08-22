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
define( 'DB_NAME', 'test7' );

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
define( 'AUTH_KEY',         'g,iX#E7>&!i.@<y5}0Kx|v{Y9],1oh]X6[-?<$s<VT$yDN^2)MXSR4-}9H.+r([W' );
define( 'SECURE_AUTH_KEY',  'T>^Uf[]*C.]3W^2^y w3zOcw(p~nLZ1~R<`0$W:XEHrObmx/`4}~crwdW1yd_~l%' );
define( 'LOGGED_IN_KEY',    ';18r!8ZIO+xWl<}*{1/tvI:j>4dUe F}loh&W/`e7J5a wFzY485 fhD:Wb8on<U' );
define( 'NONCE_KEY',        '3q*-x}h)<E#NxM[lVIxMfs5v&i#d67:eB~P@N}31e0:aa&xRKP^wqi.J7O|`asr4' );
define( 'AUTH_SALT',        'u|CiZZ>S+=bqR-84*dTjy*&]zm#5nU7`*gm}>1XX|5WD:u58T6l>WQ{LA?wxW^j-' );
define( 'SECURE_AUTH_SALT', 'jgKbIEq,OANDtl@_cSx_ET~Oa{H5P:q-7OS +G-y}0fUThq,(a6x??:T0B;F%2QT' );
define( 'LOGGED_IN_SALT',   'x^c3/eaBz>^9m$Y5-7hReo):3mQ}O$DGtCGBRFB8D&k-fWO[@`?fHxUz#t9?Peq3' );
define( 'NONCE_SALT',       'U>Pm&^ ^AkXI{I8t _ &%{TDQ%%zjk%>t1&{]Bq%FUpOkA`mpQ/z~-_l6. SZXs3' );

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
$table_prefix = 'test_';

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
