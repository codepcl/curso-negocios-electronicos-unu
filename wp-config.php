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
define( 'DB_NAME', 'zapatillas' );

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
define( 'AUTH_KEY',         'p(+PuKL5h_hI5}[|E|ksaOSMs<r6^]2a)BufD39^#p-.ZvDcpV.~/V.6bdAjcS8`' );
define( 'SECURE_AUTH_KEY',  'X8H;r>u%Ic|0{t[c6D+HiIBOxF`VWA|K;`|LLtrDj$6IWVV2s~`?qY|j<6|A(DAX' );
define( 'LOGGED_IN_KEY',    ',tDY$&8f9-4|$|MF@1aaZjEa?%urM #i34+U*=#jp_cM3`$a$vY`T$Tq%pcct{u9' );
define( 'NONCE_KEY',        'cr[&UV{~]o:onEm/mB%?ACq.Q);PJRGnIrdQQ_Qh?lqCiIlNPY5WHTAvyq_Q/QGg' );
define( 'AUTH_SALT',        '2dB@vR,}3.@,epgFgW{:U+5t4kM_mi/)A_>_fGFw{]o3U|&Iq,uch_tCH6{%&=7s' );
define( 'SECURE_AUTH_SALT', '9,fbhGY::USG~c?ah1YcVdEj+E[B&f#leiUr)fuA_jR)e=1U**avz>E&yVR$;}h2' );
define( 'LOGGED_IN_SALT',   '+Mx3^nq5^(b$wn2j+4y]i?Y~3=Y3>/]J(WGK1.c<>GWAn>*!gY~bBy]t;J/g my+' );
define( 'NONCE_SALT',       'bLgl9MwAo,@5h1f-C7jR-UTl{Wdai;fYlq|ZkdQ9V&e! oZs/J3(p{8ZTw3a__NW' );

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
