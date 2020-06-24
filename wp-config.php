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
define('AUTH_KEY',         'rj52cHLx6zjrmI86aA/uq25lkZT2dteTegi1xS5+90moVbjPkqOzgbbFlK+AHhH9YcnrKYHxv962Ehj8knVnZw==');
define('SECURE_AUTH_KEY',  'JtoN38zLIxKBpIYUOi/HEOgWFaon1cJDKQsRdIRS5XF7Hotu6ASz4zMHk7BP57X7XI9KnETzocCo1bmC705hTg==');
define('LOGGED_IN_KEY',    '3XyNIU88uNx6x/X+sq9uj7yUJUmA60DzpaT2yfDUrMQE59IxKoUr14zmgZgP+7h0ulG5Pzg2daKFqOGukiAV3A==');
define('NONCE_KEY',        'ZWuU9KwiCE18JTzADCjMIJ7DwRSYfV0QzDibWMt/RNdMeX6XeE6zOuj+vxPRJRoOzJUmInAa8/nXCQv0WTbpFA==');
define('AUTH_SALT',        'lPCmkUoL2fnfPTLifU9rnYWLpbblwaImINfX2XVmYbxP/bSgb2ejo2vFVmS1eR49i05z2Ujt2Yc6cSDziZd97w==');
define('SECURE_AUTH_SALT', 'UKzh6yqP8tb0PFUJp2dOtPUncQvwCe8YZPvcML/t7c8ImiLsr5s45jBebZh5nFIUBEFVWt3TWLCPcionFst8Tw==');
define('LOGGED_IN_SALT',   'A3Jo+BjAsBghZ/lqlUXoOYRsxL4lXvymuWwQHTVxaxFLgDzIH5G9TUfB+wxaJKTCpul2R6/oJ3uJonnG8MtzoQ==');
define('NONCE_SALT',       '1M4zbSSOZKdnhklXLyw/QUmBtME7wg6oB9MMgb7TbQt0rUV19F3jEMYL+Dn8IXhANX+j2TMTdAVoeGc/nqRrIw==');

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
