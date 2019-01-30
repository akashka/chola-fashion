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
define('DB_NAME', 'cholafas_wp286');

/** MySQL database username */
define('DB_USER', 'cholafas_wp286');

/** MySQL database password */
define('DB_PASSWORD', '6P)9S99S9)');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'noviuf5ri77hwatdgo6fqoela4ajv6hjvplthfj3on5pvl3wemba7jyhzd8dtepl');
define('SECURE_AUTH_KEY',  'selb85tmblilvcpb6okdcsat1gslxjkzgpgrkz5teppvekiuaz850jx33eymbuey');
define('LOGGED_IN_KEY',    'iayw2dendoi0jvvxvqxkgnsogfxz6rcoa9fzksdj1ngbz5mtdyuq4u5crl3vv6mb');
define('NONCE_KEY',        'ovxtivxmklya9m7zjvy4vxxtf3ct5ex8vh3q5zynxulac070h1mrplamfwtnvomh');
define('AUTH_SALT',        'qkcnqtk4yg3njjdgu3vuoqbmyuftmsoygx4s43nlb9yv9toijhdbpd57eggqqcfg');
define('SECURE_AUTH_SALT', 'bxj4v9jd7bg7odptyoblp750mgwtaoqedza9wtqe8xofdu8muqj0ykjebeexwocu');
define('LOGGED_IN_SALT',   'csbiibrft4fghj0pqhvdmzmif4gl1fg5isnhg9xy5p0pcjqpblql8ljli07viafr');
define('NONCE_SALT',       'ttkmty9ucw1orjkdl6ryhp1cfrsvfcktlfwex1o89kvqhzkyy0dutzdvgrgr9yeg');

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
define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
#Added by HostingRaja Security Team, Please do not remove
define('DISALLOW_FILE_EDIT', true);
