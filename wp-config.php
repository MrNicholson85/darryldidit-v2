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
define('DB_NAME', 'ddi_v2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Z^wajrZ7$?:AB9{JA&$%ARF/LU`P(D_Z3}HBadZ.PjX0(31$M4KQn OzNM=(]QHB');
define('SECURE_AUTH_KEY',  'YVJ[>gK?t}Z*Iu=:XrN+c@j8<od{#>D,ntjOD)P(i9T&~7ARz1H7Rqfml] :dA,4');
define('LOGGED_IN_KEY',    ':laM=o$]m %+P7g_CkW_hm`730wAVIJ7OVgfR%-zucTQ<[~-2T$WO$]H[F~!y0Ht');
define('NONCE_KEY',        '@1.v~9nsA~H |6QiA(b4mD^uUWh&N{kij&B[[^.7ut6~h1I+)/o&rrIXgiT)&dHy');
define('AUTH_SALT',        'DLX|<Gn?.l2yc11#<^KdNrPL}Yb_D*h~w!)/^DG]B<fH7ACA_=-7@e=kb0F zUzG');
define('SECURE_AUTH_SALT', 'hVaYY^^^[h8c9_Qt3R(Q06937Eq!rQ}cD/~QhVb!h`nBmW@L7*y?%)P3[6CGxs})');
define('LOGGED_IN_SALT',   'A$WAN:<ivJy^Q:pN`P;AJ-;LwI(Pv9Og)I=n2D[6@[nEy~OA^4QcLcKdW&4%3(,K');
define('NONCE_SALT',       ',zYoBB0L/ZaB,|13k*(ch|A?A7i/Ip>2@$&&]1Y6W+2c!y${#K }{kTZA9T~H)+L');

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
