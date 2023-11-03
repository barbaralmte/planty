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


define('AUTH_KEY',         'M40bVem2/pcY1+xSrVaoaIk3TAT6mtLgAtSygc5mtn3qVZcmlHN96ndzcinz6K4UOHieJTdZN/6GMluoBIaY/A==');
define('SECURE_AUTH_KEY',  'dOV5iejjsI8sAoXec5uHWlHL2nkdlhXNNZWNHSTYl5bYMQwa3eolTNmApqu1kvM/I4oVR0R0ej9FOl4H1ewhgA==');
define('LOGGED_IN_KEY',    'vjc9qHrBh5hx3yVVo3Ag7ppn1L/pDYI1NRClCJ5VaoTMBr8DQo7d/ebMsXfsuOneTWWPxsAA0WjfkZT7mryLjw==');
define('NONCE_KEY',        'cE7PeztL3PjfvIEb1ds7W3Y/su4vGf3oOyldLFXyiHAFRZ2L5zFbVi3sk25FRnL18adI9cpUqEj4tdEqbJ9NRw==');
define('AUTH_SALT',        'EqxqHt/CHzWtsR7qjVg3DuOxlKRexqfaeqFFgx9o23EDQABVi6A96oOwJkejsi9jIep0E5WCEqyWKul8clwtnw==');
define('SECURE_AUTH_SALT', 'cL6HIBt4t2NFwxFRy7fMNpJ42Y9AJ3XoaipL6GoE+ZDHQkDEPD5Yn2SIWtX3ErF+Y3MFlLs54yW2IE1nyjaJiw==');
define('LOGGED_IN_SALT',   'XUROAhYXB68H3L+H2P4sRtTPtuhds6DrFGzNvBrB266QxMcJU4WXClK1OVF4v1eC3iNbmckkBOppnui4bw12xg==');
define('NONCE_SALT',       '8VFzkgYM1gVwb7NAfaY3S/futyiXA9EFzUdrlD0nfcUVc7NPti0pkd8r72pyoErBlDRcWklCXKEHa0uai6i03w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
