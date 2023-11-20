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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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


define('AUTH_KEY',         '7niWJoprGVvWNQItapUwLoW72MBapjWXCjvvwiR80/Qq7zWZQVldk9qQBlEmygESmHx1PbXiCDrJ7/Tn3QnHuA==');
define('SECURE_AUTH_KEY',  'o3YD5Ev5KTGr+7Ku7fhzzSGkHa8yIHvzgCH3fpgix/JlpX6WCe/k6MC1aSr/tnKdaoQAoQxrF42kmYUPCrPjSg==');
define('LOGGED_IN_KEY',    'KUfkQsJ3WKVhz0wH8CLPndJdNCk/Fn3kWcrN1B7Sh/sJjfvrUI1KzXzWA5XDnsbJmZwyrM1MFXx/v0aQ0hnZ0Q==');
define('NONCE_KEY',        'nqig/DJKSJ2zd6euxhauFP9ks8u0cv/hfKwnEN46JZDuAgTUHxS8j4VLHyZhY/epa8qpN47sqovFo9HkB4zPzw==');
define('AUTH_SALT',        '7IHJhiwaLn8ZbYELzlM6SMJg6KeX4HiE95h1jCM5n4XYc+45NObM6Nu4SjDoSN9fRZopcng1SM17OfUVmzxYbQ==');
define('SECURE_AUTH_SALT', 'qsxiYubnYYwNtEAWKK7kB3GDazcFmdKp5uGaF5nEisFLYm4wdQT9VBIbD7JFTxks5Y+yttKvLnRXYBtCCJTrGQ==');
define('LOGGED_IN_SALT',   'dycFA6rREBmHcTCNLQdWUqmxEX95CiKHmzQvuHk7yK6iz8ThjmdCS/NeGpvAks4KElz17bt7XRTvE3lJS7b4Yg==');
define('NONCE_SALT',       'ds6c/DQo4KO/mwFEgjY2XNDFkaRJkzNLVcJoLA2Jg0ynwv87nM6IgKV8PXKRcf/CytOUHF8loxrApCiMK1Dt2Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
