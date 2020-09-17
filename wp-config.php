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
if(strstr($_SERVER['SERVER_NAME'], 'samuiarena.local')){
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

} else {
	define( 'DB_NAME', 'samuiare_wp' );

	/** MySQL database username */
	define( 'DB_USER', 'samuiare_mysql' );

	/** MySQL database password */
	define( 'DB_PASSWORD', '4rTaw,)T+[;P' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );

	/** Database Charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8' );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );
}

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JO3WBA8wYBBg/mr0tNHkF6WSJCRBAfzzp46vFn6gjywF6RlX+axjeHhKaD4hjhGt+gn40QIbAbLaw/DUHZ5q4A==');
define('SECURE_AUTH_KEY',  'IAggHKMTQp7BQ1MezSCa7B1Ht58Bu5GFdNh62eruhG89CDau2Tcp3wquNme1OmBmLN0pCApiHDKne4Hn8/jbEw==');
define('LOGGED_IN_KEY',    'qf005Q9vrPzfngljFb9aJ1Wz1qOj5SmddNhzaGdUx8gHFHeMGrMGv+9FJn6dN42p3sVWvd7jND2QTHEeiVvtRQ==');
define('NONCE_KEY',        'om4BfxIX0qVwVg+aHoie7Xa9ogB80/L9KhzejExgu5IAhs5P0vn/GO38M0ziTOdcXRuiysiovIZY3/NSPrwMEg==');
define('AUTH_SALT',        'k+XubLsxHeUpDGEjm/KpWUs70T5g4pR5E7wHwMALZjmtPDK6aP94E/m5nfeiC9YKozVe4JuUdiOsmlpR4n7BfQ==');
define('SECURE_AUTH_SALT', 'd7z6RsfXSMvncPGADyV9cx0+g+4VAYJm5ScEHDa5iFUnre6KCccuHfaBsQSpG1YZF3yq2tdZExjGmBzUjNxANA==');
define('LOGGED_IN_SALT',   '6Yk2xIdHUPrfRH4bM4qi3dawyCivwFgAsI74WX1CRA1m5oC2LLBvKvFaOwU8fNnSG3znYk4XkGu65B2f9AocHA==');
define('NONCE_SALT',       'QbS9ZVk01MqtYRFBYGTdQG2n6KFtVQyo0S6qhpxu6xoSZGMgTN/e08cqK5WiQRt8HK6bi5s8Au9x6vswGkEkbA==');

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
