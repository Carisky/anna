<?php
define('WP_CACHE', true); // Added by SpeedyCache

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
define( 'DB_NAME', 'annakwia_wp940' );

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
define( 'AUTH_KEY',         '4p8qbfglfsvlg6tzszhutem80vl1juyhbreh9cjaqo9eo0i2p0upxilxomk8kt59' );
define( 'SECURE_AUTH_KEY',  'gnuo69ys9vunbkaahop7arfez3relopy7oqhsgrixtlzacucauxqij6q2mqb8uga' );
define( 'LOGGED_IN_KEY',    'rln2vye4kihr8jlxcoasfiwttc9gyudxwdwoad6atvu8lebgyquhdibhzm2vv5hc' );
define( 'NONCE_KEY',        '3rlo8npkfbgkttbm6rhopokq2bdak55rxyigneo8hzo99mq0uennayyuohnoctru' );
define( 'AUTH_SALT',        '9yfokskvsypoo7oetcizg7jopijfh3hyu6eo4hzvydg4kmsqowdvdyqiomdfjxae' );
define( 'SECURE_AUTH_SALT', 'j0keersgrsompsu7of1no48k5i7gboivacnc9niclp2rmlknesz5mkznha2mjwgq' );
define( 'LOGGED_IN_SALT',   'rvpwww9kwg5oo9ttsbi3cidvztpovjgkwvumnsfpixrge0uzduhzficmp9cvqdye' );
define( 'NONCE_SALT',       'ybfovk7czdznfmeyg7z4zt6eeakyyvl7qeaiqisvhwfpyjznnu4skun2hhotlegq' );

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
$table_prefix = 'wpkh_';

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_MEMORY_LIMIT', '256M' );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
