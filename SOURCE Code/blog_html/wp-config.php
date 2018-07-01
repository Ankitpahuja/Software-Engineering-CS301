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
define('DB_NAME', 'wordpress-3231ee29');

/** MySQL database username */
define('DB_USER', 'wordpress-3231ee29');

/** MySQL database password */
define('DB_PASSWORD', '27ba60cd58f2');

/** MySQL hostname */
define('DB_HOST', 'shareddb1d.hosting.stackcp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Fvuk4UuwtfId5oUKLxT811cTB8XnZ+Lz');
define('SECURE_AUTH_KEY',  'Ql7pOET1Od1vqZAVBP3DseXhQKQOdyMU');
define('LOGGED_IN_KEY',    'owDWrtb+n1r9zJ0sTKvvPiuVZI42BYyA');
define('NONCE_KEY',        'V9k7AI7tWZAxg3ouMNs4L+l4g2S1sgXZ');
define('AUTH_SALT',        'gfCfCBas84CsHXnVM0X5DiD8+A1QEAYi');
define('SECURE_AUTH_SALT', 'f7t3wnpmit1pGb643M4+SvLV4z5RnOBM');
define('LOGGED_IN_SALT',   'pF8qGchC0omQOWqBkEM+0mUekLFWYc5/');
define('NONCE_SALT',       'hnj1/r40FdIhpjM03syzXePODuTrMn7w');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
