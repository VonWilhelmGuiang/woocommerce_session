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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'DX]83fJ[S(GVWXe0T[bmhfHcH)o*FUNyb-E8Q_:lho1R>mL2CQ70NA~YMS8cs8~a' );
define( 'SECURE_AUTH_KEY',  'qs`&0/e*?xw}ty!2O>xEw)!`psl3.^_sa^XUeHXz5MGh)[/ehn]i)79.WFAJIKhX' );
define( 'LOGGED_IN_KEY',    '.9=Oz E+*wr01pBBC HI#RUBJ54tCE7@CIh|)`R`(qfK*:Q!:aRgBb>H)]A@q:BH' );
define( 'NONCE_KEY',        'Hkwu*^9YkixWHdJRhRTJnh/k?a=m;/%.^g5m6t,~Mg 7R$X~-K>:=i bU 5g$Gf9' );
define( 'AUTH_SALT',        'n.^~%[50.`5>D<s2u{)`)P=@p:*nNIPDvL`fyCOAQ[.FBw([;SEug6Gu[@<Iv7it' );
define( 'SECURE_AUTH_SALT', 'GrXbx!d96u2]JEz)`q<g~KbwL6+=L)+4S+i3@~~GRR9UO_P&F&WTj=L9l#Q*.be+' );
define( 'LOGGED_IN_SALT',   '_!;2;>!r[T]p^9)U7+kY&/3iVATZ%2KfXUkS&2Q^&hH,RmCS>WBkDH)Ohn3cW0K#' );
define( 'NONCE_SALT',       'z|$AChs561!NMj|Lz.,?-d_|@s5Ha{0V_e=Z[9]aU.<# fc|~F])U6#IT{U,b+*-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'woo_';

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
