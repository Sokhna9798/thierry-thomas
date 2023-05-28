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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thierrythomas' );

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
define( 'AUTH_KEY',         '%o369N6wm*xK0Q8AXb(KKVdud^6c_#Rd:Kz0k9z-|&Q#@QT~hUc=o<C~/1x}R5#,' );
define( 'SECURE_AUTH_KEY',  'S~z~o7+`sb7.M2/7#~v/u^ANND;6}WPioz=]}:>`~u-k!6D&m|uJ7%bC^[AF]fTB' );
define( 'LOGGED_IN_KEY',    'lX.GkgZYi|3;7BT#1CP-.#3sLY;TGaA!;9>de,WD7yrW1PFi[`(?e-1f5RwR]=7<' );
define( 'NONCE_KEY',        'HHlP( <}Q-{,pp@ jk]llTpF1O~PltJ>%B86-&q,oz>k$!qniC$bPhDf5BaU@{D!' );
define( 'AUTH_SALT',        'eq4Lsa<rwD5@|.YKvIi],n~$X;GRsKSr kKQ<e~qC:FOojN<{f|TICGq=I0MCrpN' );
define( 'SECURE_AUTH_SALT', '/`.vUnxq~L}a_M@$5KbdHFNq6)vlh=Dr=o8wwQ/C2-h4!e&3[+/Sd%Gh3kI5*v%=' );
define( 'LOGGED_IN_SALT',   'W>{cSaUWgAe}tHNPnGwb6Lb9BHm?CS!l?R!F@mqJYFJ[%OL/o2d#]@}8cm<VSr8n' );
define( 'NONCE_SALT',       '7VYhtJ_h3+YF27!V>a+|93#O[{,&VsJWoW 0P<&wIq?mX@VP(+J5s~$()XUkJDey' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
