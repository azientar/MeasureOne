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
define('DB_NAME', 'measureone_test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'joe49ect8el5hdouamxistqlak8c3zmvj8bpzjveecyexucdlrskmdxxmjkebp0s');
define('SECURE_AUTH_KEY',  'wkefxaqnipikik5uuamjk5eufgwormudgmz44vgzr9agwofkatknbcstwbck9fj4');
define('LOGGED_IN_KEY',    'iruydawqib2o2lbqrtij0jrbqc3sjw4qlxyqwnfhqduiw71qhvijzq0yd7wlgtks');
define('NONCE_KEY',        'rv8aywto9zvsw8zb0vokmua6dtcxyl8wagcirxc2bhp2h0svqkzmupfdyp4iat2a');
define('AUTH_SALT',        'qmifwzb83tbjpyog01l2u0vn8y2xke1u3os2xqmu6tsodprf8hi7nmujer877t6f');
define('SECURE_AUTH_SALT', '9rxd57vr8rbd7s8iknx7xnpcaidfwyqn0iy0j5imcwf0t37p630vvyej64rz9vxa');
define('LOGGED_IN_SALT',   'z8nspswlvqhmwcfelcffiutoffa7xc270iezlxuyoicfwxxii7gzs4abxlaakvv1');
define('NONCE_SALT',       'drm7ltctyzjn6thxlr779ymschveflczrpumvkdapn9auyvwr4xcgigf5aziaipe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbx_';

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
