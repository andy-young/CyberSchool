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
define('DB_NAME', 'cyberschDBbse2v');

/** MySQL database username */
define('DB_USER', 'cyberschDBbse2v');

/** MySQL database password */
define('DB_PASSWORD', 'J4uE2YJsj');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'tKAmq*q.<Xbifi2ILIPT*2;Htx]x*2Smtai+6PWDLe.<;$,>UnvcvyIQUQYc^37>');
define('SECURE_AUTH_KEY',  '#OdC9KhdpWOa-#_t~-#Hqi.{6<.LITAMEfqnMmfq{xt*ALE2]6Wie6XPb+aTu*+');
define('LOGGED_IN_KEY',    'r0}7w_~[KC!85GdZ1SKWwVSd~[#@[|0NK[JCNoG8Zkh~dZk|@[itp+6+t;96H;A2T');
define('NONCE_KEY',        'BjvG8Rk~sZs!4:o|-:G[!5OhVJcvo!ocz}!0z:!4N4}GZNgIAUn^ubu<$yn^3MF{');
define('AUTH_SALT',        '!|8@0|8VJ0NCVsg1ODWpiOhat#~ex]_6_+;H5PG5OlZtZSl~1[p_w]D[~1KdW<AM');
define('SECURE_AUTH_SALT', '!K:G4OhVJgzo!o!z}F4z}G4N8}FZsg1ODWpWOh-p_i+p_6;x;H5PCWKdwdSl_1[p_');
define('LOGGED_IN_SALT',   'jM^r@^nvF}7IbnUXEQ^mjub>y,,q$M3!:zJ0CC[4kNZVCs~kowd:-|0@N8FJ0BrY');
define('NONCE_SALT',       'B0^}cJ1C[ZhOS8-K5G:kVZG@ssd5~|sG1C]+TDDL2ipWTAHxeqqWi2*]1~OaDHO5l');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
