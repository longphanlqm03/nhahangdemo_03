<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nhahang' );

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
define( 'AUTH_KEY',         '#1V^h}:+ATWY36[)Q)iT_52DmCC&!-IvHlf1-dh@#UK@u+bT*|W[nde~RD-JgHdv' );
define( 'SECURE_AUTH_KEY',  'WYhW=.$1_y6|{@%2] As(IT:|ThNCu!B`M%(n7Oh):KpC:u(03oiw!gS-9I=F|r4' );
define( 'LOGGED_IN_KEY',    '[/w4qe^j8S<M)tqmA5f{|3^_k4sUkXJ7Pc;:Ck6V>.LbPM=od$Q43C2-ZwR+e48d' );
define( 'NONCE_KEY',        '$c+iilda_Cp&J:p=7CMWW~wxxJ%gd8Q3kW@}ZRjs^S4(R =iCB4t/ZaAkt-Z`-eB' );
define( 'AUTH_SALT',        '$b`yP8, nw%owrZsmh|(`R^pr6LSswk@QJW03/M !}yK$<aF&iNG]1^t4`+k-gIw' );
define( 'SECURE_AUTH_SALT', 'zVx^$:gEsUITa[|5Wz~*OL?*CmDI*oqNzk7A7>^zc4q, C1RLBGW5gF>2vVkfL5c' );
define( 'LOGGED_IN_SALT',   'j;zNa}jG7%I}C8&_8A&k@O/cHiWc)]^sXNf^#rZr@]{S(?oN[(:3o145=U0~j%}j' );
define( 'NONCE_SALT',       'SHw5.3C;rkloMbFX8E3=>/b|!ZdqzmL_CjuIZTcu4)Fbp]ylhI[3MY{1&n-t,zrA' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
