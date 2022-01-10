<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '{{DB_NAME}}' );

/** MySQL database username */
define( 'DB_USER', '{{DB_USER}}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{DB_PW}}' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z%U;h;E4@dvm,R|)gv^;hKFkz-{t[r1?ls-bj5SI#il)a.xGOqt+a-A54Y4lJtfw');
define('SECURE_AUTH_KEY',  '[=}~J3/7#okDR$y6Bx_c!b6erQl)p~3^:Pk5^.ugkd%.@*M/-T</kE=l[L4xcSdX');
define('LOGGED_IN_KEY',    'n6Dnjgl%H&R->*@7 gq4k|g&+@BWB/+*^r-{zOL))a/.^wz8OJwmh0e!f61F*/MX');
define('NONCE_KEY',        '%9I$,Nvw$}[EgwU=+$pxmmmnxLLwK+i.db0JR0q6 %W=h<G v0X M4c% (~-8QKD');
define('AUTH_SALT',        'dR#@*+)!d|%l-@kF=%3K&AV1`?t+Z79)q*P!h5{J0D-2!NgvJDC=,9=up<@1hdx6');
define('SECURE_AUTH_SALT', '+Yp Mon9RwkZxO&ykQ|(MzX3LXDI-l2VL|BIT<`PU~9_x.To)miWoS8R%vMSMd#X');
define('LOGGED_IN_SALT',   'rRR+gJ K&R<T07CTqix-BbjEYN6w$Mr $OberUh%__xEAFA(~SN G@5H,8d:%<%G');
define('NONCE_SALT',       'S CUNUAJa^w{.Cb^gy<anE8%,H>d|tjKl@g!IW0,Fen|3kD}3.PpB.ld85h$6E0e');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
