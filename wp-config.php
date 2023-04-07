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
define( 'DB_NAME', 'tutorial' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'FF4tT8bPHwY8UX35qSCudr1YCuZynIDKr7Uo3F6j0Xcmj4vTGV3oGlFLzHeLHxzn' );
define( 'SECURE_AUTH_KEY',  'B2w228vlvzMM0kFY1LTcAy70vEvvzw91HoVsqgK1HVjCp60nTEmnbuQ5Og9opjYe' );
define( 'LOGGED_IN_KEY',    'XrRiXsE5mOvIwL5DtlcgkWAUnnY4BGCdxWhdHXVwcs3zZl1He51Oh6DZC3UOK5pL' );
define( 'NONCE_KEY',        'mGxEisEZgHDgEpJVpj5GdcGxqdeb63M9MYPumzi0Hli81mK0vmiJh58gGfi1MyeW' );
define( 'AUTH_SALT',        'XVfq3kHbux8npnMY3JfkYHiisTaLhBWqvVBRoQQvcnG5wYKjpJuuKdIGe3oWVnnS' );
define( 'SECURE_AUTH_SALT', 'FtltmN8dVZbRgdLvtMEskGgta7dGiZLBSOci2R0lJQ0kGEfX4vh0RO5vKzY4P65k' );
define( 'LOGGED_IN_SALT',   'HjQeGJYmT1akNe6hpTAh9q9dyG6nRpg3nyPUAgnphSPi3YvN6Lyy73kRIqK4A3C5' );
define( 'NONCE_SALT',       'erO7n2kRIwqjFL93ywm2i9pEBsqlF5r5u5ILuIHnRDPo4xNy7CczV4AUCcqHkxmQ' );

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
