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
define('DB_NAME', 'heritage');

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
define('AUTH_KEY',         'DN9Lg.o75*@`[>3+e~+^|r/]zE$7l}Ezl*{<BZudH>(=yu1!:{DQN?-v5QX7=PIS');
define('SECURE_AUTH_KEY',  '4^^L`Ps[=N?3$9O0K%`>~Xk DlSKTM5%&e?%{=}euvN(U!M/h57su. LPW<{FFiG');
define('LOGGED_IN_KEY',    'X{yy93%;R:.oKyR/<k(:l656U[g=R.=*}ZT-ly2^Zr>wM|Ii?W (]`qcJIlpf=Sf');
define('NONCE_KEY',        'K >-ac#qm6|KZ=:j?U)Yte=lx/m[DBw~$Y]yUiRr,2;N+zi4Dp=N%8~_P#91oz1x');
define('AUTH_SALT',        'r|%#>e2-eO5_Ft@/v1KHD&P; fD#S!_sC; m<p3!4j |&67|/L4]&[#Uc~1cvj{r');
define('SECURE_AUTH_SALT', 'Gv@wYYO6F6:u{BR#mTJ*nV$uL8-gmi_a6<o!^!74aito7F=.DSccd nh-TmE1gdY');
define('LOGGED_IN_SALT',   '}j{`4PrdE0UJ|B8QKL;HXeA-eIM$pEk`V?~ @=O;{-|(XFtM$BdJ~X0H,XyT7l3N');
define('NONCE_SALT',       '<KxZYHye0zB9Nc6~F.gf]v|]4~58v?/qh$Lx0xWByq0b.Y`G$Wy]B;LNEoS;3PB;');

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
