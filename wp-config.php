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
define( 'DB_NAME', 'codingcrunch_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'U~X]QZb04bI_}S~J8 D&Up^Z@%9!)XUv52wf;%|N1U;9nusaemNV]wQfg` H}f^8' );
define( 'SECURE_AUTH_KEY',  'r/EDb)JOuyZ6K`XM}GCX<|v8X^bGmg+;BR0hC>7jW@Yu0f,=|J|d=O}u8@YXwV]n' );
define( 'LOGGED_IN_KEY',    'p@0Up<=&z//l|0L!Z}kp,<pWHvz]iEuA|*kmrEyA.wlq(Q:{S`1hlm,X>iyKyC4k' );
define( 'NONCE_KEY',        ' xjgTi#4n#UWXJ`qwWp@jHrq26WrFD1t8)zeV]=YK+qgzvcy}5VxVmu_SdB2R^YE' );
define( 'AUTH_SALT',        'NCBcZDV}s>,CauxaYRV8nk9{Xf=U4E=4~[)-8^YXG|(WPz@GZoP oP&VS$E;l}?H' );
define( 'SECURE_AUTH_SALT', 'Ew7<g9/*572!<:jjr?tNrEC!S^u-!eo3]bNQr+{D|F|3bp*/8.&rCVPxkPuK3qIc' );
define( 'LOGGED_IN_SALT',   'j7ZP6h.*zm.tZWw3H9 #yV,0e0tJb}l!EEa-1ibUnD PnOtBtG1h7`vlPtS*4e43' );
define( 'NONCE_SALT',       '~zb|>rJH n^O1h#?;2sh@mfao(a/nJD=_OaokM-^Hk+FyralGon<S@m0Tdh.NH>$' );

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
