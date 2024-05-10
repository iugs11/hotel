<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oxygctdj_wp350' );

/** Database username */
define( 'DB_USER', 'oxygctdj_wp350' );

/** Database password */
define( 'DB_PASSWORD', '0D296))U[[p5XSo(' );

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
define( 'AUTH_KEY',         'zkrvlomvpp3lr0gtucls1rmgpulgz3mn4tznzg1xpm8j6j0705tah4cuk8pmbtqk' );
define( 'SECURE_AUTH_KEY',  'mq12faix8p3zxth2pdtptngfd1i5d8gtmculrxnyniwley0qsrh0reysevi7302t' );
define( 'LOGGED_IN_KEY',    'lttdtqb96xjkwarr9kekxoroj3xh8dx7ee0lrtdwraoj8ukmgaimeto73ultosz3' );
define( 'NONCE_KEY',        'd09z0uwlxr2ph5bgxv7u8ofmmo7blzqbqmh4ow7cvczwpjal9gk7fuicn8i7oyso' );
define( 'AUTH_SALT',        '2xugzbhdvjgcrlyjlucypltwusxn8saiaogjtejqqub7lsn8ua2h2ylrzlrj9eje' );
define( 'SECURE_AUTH_SALT', 'rpmsh9lto5rw6piwar9mbn1nuinfhvf2alzo6r9onj7qymgqe27fikb0qviqwq9t' );
define( 'LOGGED_IN_SALT',   'l8p6sa3ebuin6tnk9ndxz40vyr4ym4xaf35qrncresx3dkx9zdceqvnrmjlvhpvy' );
define( 'NONCE_SALT',       'f50kjvywfwwvl2dflyb99zaltcucizptnucqr4na46xsel9s1u6m6jx6bdjb9fbo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqv_';

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
