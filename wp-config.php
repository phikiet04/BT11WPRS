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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bt11' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'XjGR<Nr~YXi%-QE9T+~q;%<Kv5Y<6LtF~0bM0VoG~[P&IX!)Sz5EhJZ$IOXJGL^p' );
define( 'SECURE_AUTH_KEY',  '.uPSSSzOd~@#H%q5q$QU@u`;|SHqwWSfF_kfec%ESFKR4%>MV VzH7dGAgipcHP>' );
define( 'LOGGED_IN_KEY',    'R|.gCUa]m/AoY:!{?4rSK1_O w*#qH,Xl/l_dgQV(fp#4cN{<YGt-yZ&kP&=d97f' );
define( 'NONCE_KEY',        '[Hda~Jr:SSCWBLB(#;?4FCa,-&t!K}>eC8_qfqB7ek/4UjN%,2j}JbI#X?W2dYKq' );
define( 'AUTH_SALT',        'S{tnQ=W,maN]^_):Xt)UsK)>0=-=Dn&CiUV1tSzb!AbsQrPY$X*GrO[[qsWyAw9E' );
define( 'SECURE_AUTH_SALT', 'glP M.x]BPU?:r9GIid@J/cPwtg_E^}Xr<&oR7bjuP@n:-)lG+GKGVb ,ht>,s~c' );
define( 'LOGGED_IN_SALT',   'Nf;om25=}*2Q?)EA`p9|;Rr}S1vq.NxHwt)1Ut(P8gI~NZpOKnNXRsBjz+6Xc?lH' );
define( 'NONCE_SALT',       '*7=f0D?BeMSyi->m6`W_M2I:^y_!x(:<%6/)lamN9#_IJlS1+U{55TaLE?uQEEm(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
