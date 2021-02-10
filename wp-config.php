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
define('DB_NAME', 'ddi_db');

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
define('AUTH_KEY',         '^BRwseQsi};B@BkRz]nse3zp>x<pvxKE88!kN)!C!80Uo7C#B4M8 aJV++A=K$3N');
define('SECURE_AUTH_KEY',  '-ezj$Bii1O|9?v$Upe$vuTbvkbRD7){LWIK&#txwg!re1K0|a8d?&STj=Hj3[b1Q');
define('LOGGED_IN_KEY',    'dpD/Ea,yfat#MVHlE3!0h81Qdg-cw!taXTe+%+2XP-,_P#Aw)%^wX]oVs%_EsP^]');
define('NONCE_KEY',        ']f5s3ogw7VB<Q~jT[H|,`*S^[>eAIocZp:6D,3JQNTq9y:kI/!P4j0oso ^M<8zE');
define('AUTH_SALT',        '~f; =(jnpKbwMk8N&ve`K6f|3o+-m)d+1Es$.V]]L:Mv]=!q55{+T[+0I:j4|`]g');
define('SECURE_AUTH_SALT', '_a5g=_ycmCD/hb$S0d#O](~zQj,E)N=DXbh{Uw{~**`%$RJLyQ>N!{nrs*)Z9xWw');
define('LOGGED_IN_SALT',   '$X9OX37wcF,e|SS$~dqmOxOYG{0~|WlpIz&Tld~Aa$S~shD)}C2w7QjZGLAVlYI}');
define('NONCE_SALT',       'rGU+BylW=A#-V,tKCYdl/>_|b9lskkS2HVDKf?%L/x{lTG,]#$~r!uy6,GlUu:9^');

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
