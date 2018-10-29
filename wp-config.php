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
define('DB_NAME', 'renshawspt');

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
define('AUTH_KEY',         'CH2*.,6g&.jKrfSS%:%=qA>@1&c**HXuiYbbIN#b6hH(_aOO]v3X$<E(,5sG6=H]');
define('SECURE_AUTH_KEY',  'XQDoJbiAE>Y9U5@6x(#8G{xA27mjKQ;32wL9y!D<xxAfSQcU5Dt*$r^x9<<0S2R<');
define('LOGGED_IN_KEY',    '5@`d^dw,s4lF`IZE+Q=#(VSf*+76[D9Z2N*Rn,MD:U`Y`Z:BSFnQ-}k$X.YZ=O1%');
define('NONCE_KEY',        '}n:|gfMjsE(Wn:q=!<kLlt_ZTtqC:6H1Kn{E&^K9NR@r@L1yDg$=RGqj}]K<ws>L');
define('AUTH_SALT',        '`) kFOI:@pW/[bRaUEvI<)YnvxWhYGbZ0NTBt@9GcjeOv!cgG<V,gz^dUVe%3ePM');
define('SECURE_AUTH_SALT', '[FtuO&h|>&m0QvQ2lKE*K`{uU436MmQYZ/w~]uhv%k3JHax|kFR0qX~S&-`KQP#_');
define('LOGGED_IN_SALT',   '7ts7)}$<,O1-03e=TWp o/mKb%/WpRY|OCpre#5zhbVXwT8EM8&MsjWoPRPa1/@q');
define('NONCE_SALT',       'UV+,?M@qZ_>)j^lF=t2F-LP(p0 nkEz{tuvzf,+1>=1Ce`z%6N|,&5@CwqFy_ZZY');

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
