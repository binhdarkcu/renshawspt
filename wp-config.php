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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'ji&VT>k>V1U0<`gzx{_^^QbTgHq4Eoic:3(peayh<3:=~:Cmx:X/K6As pD!%OHK');
define('SECURE_AUTH_KEY',  '#Vci;O##ZE`ly6I@x48@JTEwuwI#8?glf*W,-=X{oL-*SbUNIvHL*q8b&_fixX#4');
define('LOGGED_IN_KEY',    '6o&!f+/eoczu{s5?^yb-/S2|db1T$(NWsuA?(g10!}<HIsPyq4]=`fUa=7/@R74w');
define('NONCE_KEY',        '/j_QE2Hk@J<~2W{!g`0;CGAUnuNgWduX/~PS#Ln~=*o&VO0~r[%}+@-ouYJq.aXT');
define('AUTH_SALT',        ';c{k*F&*=7@yWUr-dy;i2 3r)Z}D9#{T8F<Ryhz!nobF?E,lb.uir4(n$</hDz6&');
define('SECURE_AUTH_SALT', ')88er(p4+Rv-6@w~/y8;PZNC@AL?co=~Az~F#+*HHETPBv*S3vy~J>q?y2k6:YL;');
define('LOGGED_IN_SALT',   '`o,p):^CnK$R&#wER//hDjr ci^AqxTSS#nzut^>r2q3[vA1v@oMwSQR)w0Q *0?');
define('NONCE_SALT',       'Er.:!5*SETEV<,_`QV,J!^O~`rcZis<Nzmbhb_~^d<5&^;1;X*mE,=aA(2HRk4Yy');

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
