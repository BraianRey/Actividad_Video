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
define( 'DB_NAME', 'actividad_bd' );

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
define( 'AUTH_KEY',         'u$ZYoVJZsAp-W;N3$F)18;S6p3&M;xM,6SWIu[XE$kg=Wkp[$@N4{h|b4( &5>7r' );
define( 'SECURE_AUTH_KEY',  'f! 4GGm3G>[w1?/bwj*L(x`=m`5xQ0D,D6:?Gei%6% B5tqsP6s7]o:{sl-p&#dj' );
define( 'LOGGED_IN_KEY',    '@YW{3kvs;0$PJ`*enhR>@~*8sM9(2&-ezs{J==1O3xgBFAg8Ve[B1}MLGLXxL$`p' );
define( 'NONCE_KEY',        'rXo(!ca,FRK8MTP9Q:(/Y&&#)s[:pU?&5%tkMs2=j105U.%1}S@{?@aIci:QqVI*' );
define( 'AUTH_SALT',        'XuL|^7]]bXvIZ[6: K>=LS6N{MH< Ya:k>O9/#IyR{BcjJ>;J*t0u}/ulPVc5T27' );
define( 'SECURE_AUTH_SALT', '.e)ysxB1CueWuMy0 L[~~QldCj([-q>UP^%&/jS*hob G lf,JrioQ,i8u/PkiAA' );
define( 'LOGGED_IN_SALT',   '2wF{tng:vb)s.J4#Il^_wc=Acbf:_x$3~>ETXs6VW=rb%1|G8j2xkv{mF_ IX!?0' );
define( 'NONCE_SALT',       'poc@~b#Sy,]p>aeF)1?D[jFt 7kDX)psT2!_k/C`-h^~t:/n5wR1P0:1{?0_b|.Q' );

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
