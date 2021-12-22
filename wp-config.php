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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
	$_SERVER['HTTPS']='on';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "chalets-et-caviar" );

/** MySQL database username */
define( 'DB_USER', "chalet-et-caviar" );

/** MySQL database password */
define( 'DB_PASSWORD', "pepitard" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', 'https://chalets-et-caviar.zbox.ovh' );
    define( 'WP_HOME', 'https://chalets-et-caviar.zbox.ovh' );
}



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
define( 'AUTH_KEY',         'jrrIu7MOzie4561W9f6mp8D236lIDJVPiBxF0ZkCP6ZkTw8em0ZbtDA8xTvLBWL9' );
define( 'SECURE_AUTH_KEY',  'SiSa5D142tKvpPmoTf1OkNPwzfwcSC4bowB29gu1fkbrETdrjuMhROtPYqaD7U0l' );
define( 'LOGGED_IN_KEY',    '0FgZ4kEp1JJBOBBdBzXVWAIkBbFt3Fb1L6OIz5ViFmGqEnpzPcJ63J0ld5fnpm5T' );
define( 'NONCE_KEY',        'rTYSrG9Y3F8hZA5GKjspHgcZOgAkEWYyy8fVoOxH6JIX6DuPiKkm81weG9WVqyn5' );
define( 'AUTH_SALT',        '3eIQCg0zARknPm0NItqbvyLpK7z7YHGXNoupUFtIijASbLWoiTDtgdLkE3QEARpk' );
define( 'SECURE_AUTH_SALT', 'OTzMYjhiqDB1yD9CCkedtk5UrecEo1uoMJYnFvZWK5qZRuarObYS3WswOBQ4SSwW' );
define( 'LOGGED_IN_SALT',   'sHhSUm5mf9k3kQM8OeuoOwtumSOsAd7qZPxPm1BJECFVsfeTFjz8itWYR1Gdy7S2' );
define( 'NONCE_SALT',       'J7OnOmJE9LUZwq861hOX7bDbBg3RQu4XsEcCYh5XCkkioiOKhq9SNfbvO5VaWMXG' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
