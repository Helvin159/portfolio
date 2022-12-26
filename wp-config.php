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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

if($_SERVER['SERVER_NAME'] === 'portfoliov4.local'){

	define( 'DB_NAME', 'local' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
} else{

	define( 'DB_NAME', 'kmmkcamy_mrrymer' );

	/** MySQL database username */
	define( 'DB_USER', 'kmmkcamy_mrrymer' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'DoRa0411!?!' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}


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
define('AUTH_KEY',         'xhQDZ/UCefPN8c4SB6ywd9wx+vq8BBC62AtZFFPqfKiSOtwxDmITj1L8yitnDGEXvsYK7DUSyiP7n97cJS+a7A==');
define('SECURE_AUTH_KEY',  'ZPI9roSQYLh5OvI8NnemfNXeW3aA7YLWjjLfjyD9e3UFocU+pUsOb/T6TuEvFJxDGLBxLgrSha2m3wKMtO7OXg==');
define('LOGGED_IN_KEY',    'J8awWSlmg07Pk9zGx8MidLqBnNJ8STnMwWpBO9engEoMk0K1C9ufwI1B5Csgx+0YcZHmw/9Akq38Kl2zjL3p1w==');
define('NONCE_KEY',        'ufALuCZIiJpfB201RJPeDLx8Tl9Cer36VwgOZm5g0/HU0eahVC30gPWdNtBpugSncyRLyz9LVFatAqCw2oxzUQ==');
define('AUTH_SALT',        'DkkBW1wshRq9HwgJA2lbbicPz/sI22ova94rJvsQfErIEiYxC+XnFMROqj1ir0EFiapxYoOhGu6unasCY1NhcQ==');
define('SECURE_AUTH_SALT', 'pW962UNquLQjY/yC/Sn5fHXxXrs0tz8IEhrboSW1iYCWoCJ5xuolLZT+xi0ndXQF7ZY5vpSQoX+eU75wTgiQtQ==');
define('LOGGED_IN_SALT',   '1dRhday7+3NmSMlheuL6r5/hw6uPcGFVRiI45FGyeP+o4otL6/3pIKkAo8sZPbu0RESqclng2jKcOE+Z0lWC3g==');
define('NONCE_SALT',       'uHYC8rRzBhlCAIFGvUbkbxMmnw9c1DKAk6EtOwCeSIUvH0Aa6tziuejOPJ9hICznS5Hj3k10TzIpBp3xRzw/Rg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
