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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nafisah' );

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
define( 'AUTH_KEY',         'L^SRsZ>f~VzC*C wlN.qw^cfXK|qgmEUuK#(JlOkbhs8dW[A0v.&TGga,-=W<&66' );
define( 'SECURE_AUTH_KEY',  'r2(mZ8qkZp=-G@)_AV0@)R0M(30)s@S22jSj!]M-LOe-31ggh#h zL##@B4Mix55' );
define( 'LOGGED_IN_KEY',    'dDR~74=3re,j5EdN,}uQ)`V`6R](nN!wa1H[jh_XK2[GaJ]yC!!-lneG`ng(szwZ' );
define( 'NONCE_KEY',        's=Fk.&W.#q~= 19 6;74A2vM9IP3M66+|kNz~r{fj)%Wn~GBCSsOmhf!Lz$by]$_' );
define( 'AUTH_SALT',        '-Z Z|n.Fr2^t~G([,e;P*=q&j2[IN=Mu%-JQ&<RwsL>Zu@Us{K<MifVP}:3n=S$D' );
define( 'SECURE_AUTH_SALT', '6h6KM9N%o0?qNfnQZ8 <(AF$.U,W=)m@xn^l;z}cxpgeI>rwLIg>Dv0N0&qpbE=w' );
define( 'LOGGED_IN_SALT',   'WL*mRi8y9f(4[+b<OqZ:c{fGQLTb2h 1}LqEEt$[K5*vl^%`yyF1N0t;I2vqMwY;' );
define( 'NONCE_SALT',       '0Zp  u[^5^vDJ s!tl9HC(:W0Abj(A?Eq&=#7/5*_hwP,!HPGXJh4OC)E[nh8c|0' );

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
