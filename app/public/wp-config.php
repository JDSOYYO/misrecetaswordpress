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
define('AUTH_KEY',         '44rrUyY5l4Pjtl5JJVdIFv+kZKaM7efBGWo/00MJ9p3IQ3Povf+CJ23DiKboSeAiEMtMH+qia118uYerr/Ll+A==');
define('SECURE_AUTH_KEY',  'Ixc2LgJiQfv1N8jybKJ+0i+w939C6yIUKu6ydfIHjBbJmZLOlEp+YYloVUehSV3cN0QITUb3KKwvtjAlVafS9w==');
define('LOGGED_IN_KEY',    'tIlhjXMUHsgw3QHrb0+GBNWJ+1IYM1nRBavS9YVjwP6w69PJrxeZ7h6/9LTN83cKZEGgzkAvqPr2vdnSaZkF5w==');
define('NONCE_KEY',        '7oZnP608EyRbnr3JrZ+z966SRNkr0P8dLzVAaDx/LNihcYFbNca1aL3saBKExXAzyc44BvxGXqoXakrrECd4+A==');
define('AUTH_SALT',        'pRQLnhUyg/JDG7zqnpjPVan0id5kbqat1BE7C4lQ8tIeTy/RnaZZ4Kh5NdG1xSwJUGM7/CZcbOlGEBsSs+8cCg==');
define('SECURE_AUTH_SALT', 'vSDmtOy68bWAzQkLdnEQZeJoyGhgOndPDsgrxZ+uvDz3n4/6zqHUPd4EIAQmysI05FanmJnSzYaTS7l3Yq7yMA==');
define('LOGGED_IN_SALT',   'Y9ZldGBEGGdBn4DbUoFfc0vJXfyE3LpR3cUAsXhMUSk3KxmrNPUU7Ye871mYBz5D5ZekqU8OQ+dQ4Wl0cnD6EQ==');
define('NONCE_SALT',       '6U1Q4A0iFCSRZNt71OKklKa37bqStdbFghglg/rz8cHbB2W+q/j4sSMKQ/qBHSJzQPoFXdx6p4f/jzLP2g5puw==');

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
