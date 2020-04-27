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
define('AUTH_KEY',         'P#FSZ%2-&NEJU[R-+{DBRawYFDy5S4&I_B83V#u|%Y~LRx:pJcEw#$08FxmT7T12');
define('SECURE_AUTH_KEY',  '#rl)B3euie%Fu6De?3<.j%)EL~JPvrz@bd88P+Of1*!X8&clUy;knGSuL,Nq+OV0');
define('LOGGED_IN_KEY',    '$DC%zkAI+j&{88X=^-YE?8i5RQ5_jc4yZ4&0EeI-F6dt+LxK.`Y0d_-})]M-7[j%');
define('NONCE_KEY',        'n]aBfYltI,sL~DC_Y<1rj,sAmTV9(6l__=wUws A<79G|>TL_:T_^:X!O!!d2+0%');
define('AUTH_SALT',        'VZ`HY2&S$SY)WrR[F6y8qglYS?H:vm4jv;S_5X)V,}lE@GIsyty5>]@!EVX[`$GJ');
define('SECURE_AUTH_SALT', 'a>2=L*Sqto2K<QjD!ph%vlFB9{YS<.pRQO34kW<+X]6Z@gupecB$9`XAx@6C[4xM');
define('LOGGED_IN_SALT',   'O}ZO(<bNS0PQv5H:r{D/WSRlRi!]EheG(O_hbJY2Z;y^y$@%UaFNB_S6GXD::C,;');
define('NONCE_SALT',       '^O{w/Ru>]Fe{Y)4V?ZL*{j}$LxiFa| /.)@T,uD`E6fjDllao(y?x2^7r4I5M4Mm');

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
