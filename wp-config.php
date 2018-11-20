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
define('AUTH_KEY',         'Y0Y:xE;2-!5s5gU2-XRHJ-w_>or>kBiAUEn^Kgx=$M^0L?g%u-nbbpy(^G3:`X&V');
define('SECURE_AUTH_KEY',  'YohWwdg@y, tmhhr,s-:+UaUGf3*[%;G>&;bIuX^o!2>Ys5OmS1{SUV#}c,ne0w!');
define('LOGGED_IN_KEY',    'e;p/t#dZ_8g^T[w,<LI(kt[;vwE$hX8*[6#mr:rHDG,$@Xti,nBd0b/?hG0xSba@');
define('NONCE_KEY',        '^KJ}%EMPyj?;6B}iV[9>QCqTIF{qwd3!|pyM*T3Gxr{/qMu*gorI8gK|c|k(/0dG');
define('AUTH_SALT',        'lTv@z{kH(lIKYAe5`%2dFdof~}`J[$Rz.yefcs8OfsZ&|+G?))+$Z.k5s*-s]tua');
define('SECURE_AUTH_SALT', 'dN8}S{8rd~8T,}#5O@9|(uP$W~61AvSi KxUb`5$JTjde#@r:Bad)uxluyNxYrD-');
define('LOGGED_IN_SALT',   '5HFI&FpVie$l*&HqkWht>>N QnF.nnF1`7zT.L:078;.9n+W|d<PWcl,$tol;Fp2');
define('NONCE_SALT',       'F1DOwNfn`bP/KW%z9S,,_=Z!uq0Ao9;;V*R@WmW:WU!B&!Rcn(Unk&xMpT{m-I|q');

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
