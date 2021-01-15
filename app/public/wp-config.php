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
define('AUTH_KEY',         'a8HXazxbRg8PAHmYN7fDUQKri98t0gAxYaJVViGGlXYPhft798kyqwiKMOsbx5SLnfq7g2udVCk8oD6EugA2WQ==');
define('SECURE_AUTH_KEY',  '7B/E3xifUIWxMXGD4sal2noJhCn/bIKN+Uf7N1JzAvPufPDw2UWggMdrZhWaCMvfulZ6+yQ/RnE/EM0HA7nXUw==');
define('LOGGED_IN_KEY',    'NAkFdba+YrcF90vvVqoahRQEGQZEkGu45/qfOAdzrAJpIFnHSwALRi/ffpxQqzw0k3L4OLq1UetRhmrNGFTkRw==');
define('NONCE_KEY',        'l/lsTjwW6PpOy6zqNOr6+zQqL3EexBJCm7HaVPONCKBerrvzwgeZfnEswf0rcujS0786kB8E/woIbhMwcrzNMg==');
define('AUTH_SALT',        '+E+jUhUxt4bs7qJCHvIA8gSGAXVQbSgeLbss1bmwf6OhfOTD4qoLmbndD/Ii9/CBz93UUFvz5brh4D2iTxBQug==');
define('SECURE_AUTH_SALT', '2oxyammw8sF4pfFgJSph78qoSAio7ZswLvE8+XFhqDmoJXtS6IeemFWBOAApiSU3rWs8UydS7zb083QPgx/qgA==');
define('LOGGED_IN_SALT',   'YdNSqnzjYSq+C6XrWT8EG4QOxoJhP7OcU4+7+EvNKeHDgdMe9tzV82EmNTSXnS4CPYXY4CvDCDGiAB9zvRbwlQ==');
define('NONCE_SALT',       '0+ybGhn6LfMyPpG4P+W4Ontok0KUnkmy+/pIxC4xU5V+Q36XUDJzb4x5ygIjEfExH2v3MD+2e5ksKnaYZXh3yA==');

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
