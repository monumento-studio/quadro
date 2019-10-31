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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e9pmAhNCkfGsiFRjVbroX6061AcFYvQrcUtAbtczO4roVmYRL3p5eTNlPTneLimn/e7DBSImgx/LiciWOMzbhg==');
define('SECURE_AUTH_KEY',  'dR8SledESGIZlp+U5HBIAFLj/65SJDoVrrRcxcB/C/gzIdn1vy0m3s6z8tzUKxPVgflihdtDg6Gre1V1EOzbbA==');
define('LOGGED_IN_KEY',    '6BL3RwlEqi2wfxDa7vL+qgOViLbwVTYJKpHny0mFN4gS2OeTNiVb7otx3jLSw1i0hFnxO6R9gRjKVf7yP4lIUw==');
define('NONCE_KEY',        'lfePOuN0e64iqr17oUKYE0mtpBQNmkz3P+f0ab9Kc7+/kHTgf/BzFhPbTjGcK4TLhqh55613PSzN9+iMKa7x/Q==');
define('AUTH_SALT',        'sqC1uHaJ8P4sIBQ5fsUogQxLsPoYaRSn10/wpswe0q47qP/Nt/x+FoNuMd5uoSTFuRHnNW6ODDeCOJOHKMT9eQ==');
define('SECURE_AUTH_SALT', 'QO7H/Y92MTPgxer4WjreC+WhobrPCsnQ+1cSX+7pcrpz5wOv7euW1il1HHkz/3ycPhwbG/8zm4xEwsrTccLk2A==');
define('LOGGED_IN_SALT',   'wE9k6r3Z27Xez8pzL/5ln3e5nr1pO89QegnedfWc+O4SXGikWTv8x9T0b0R+2XthvSlhDnXa8iL05BZ738W5kg==');
define('NONCE_SALT',       'XLgfMd7wOLy1VixgH+G85GvAESUXqI1xzqkmN7pX7FO5sjd+c0aNC0BxYO0UEC/ZdvyO3RTBE2tPX/kFbQK+uQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';



define( 'WP_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
