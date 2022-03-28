<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LanisClean' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nOfR7GlrXEvnM1iZ7MU6WtVWN1ojogrTyCvPlrJalt0BCtZDLwMe96enaunghu36' );
define( 'SECURE_AUTH_KEY',  'ggGweUTcdonaJXOtSWAesD2m3KfLd7oJ4CIqcsSWgTy7yl548rzhHvdFanbKruuc' );
define( 'LOGGED_IN_KEY',    '72hmDyJCrtRVlENzhzNa2dGbKMsW3kbpEn6T68BxEVL5J81vvfrr8lgeYXAr0PZX' );
define( 'NONCE_KEY',        'YCdgqQpeJcKgKAZi8CxtJEVRBWsGjKDNFCFSnIwf2jvCjFO6QUX5ryZ01YBVxSSl' );
define( 'AUTH_SALT',        'Pe0ae96Q1WCB9vc1YFiNr6axt7sqza6cFReSFjrYpGeaUdCEazuHLKJ53ZDpWWMJ' );
define( 'SECURE_AUTH_SALT', 'O9slD19jvi5lCjkeClgAJ2LD1OAuFpcvk4CVxF9aNv4ZaPVIfCBeJpdp5K936TdC' );
define( 'LOGGED_IN_SALT',   'q39yzi0DLvRv66Tj1wWbeh0sh2xNuEg7NRoVIze46vAcBqq7fXFx4euPTtS4ckCZ' );
define( 'NONCE_SALT',       'hD5snAPf4eJQu173QzHuWIo90bxyK6IvN7XVZa0LtTkJcYeGABbanqdKVuTxBowm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
