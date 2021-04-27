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
define( 'DB_NAME', 'wp_test' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppassword' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EG5[+ S#Oww}qhQq7Y<9i?}Df_`OY5>9`2&ctNhHOmlN+d&v^;V(]3-t@c|$YjtU' );
define( 'SECURE_AUTH_KEY',  'HO,:gJuR0t1:U_ys3SIE(l<.Yv =G>{XkFK?e#8K|TPfUQMaM{58x)a?/h`JMSj1' );
define( 'LOGGED_IN_KEY',    ' p1}Tnvj5V*@*psYV(gC2W_ReU`i3$BV@6_IsSLQejY_*JJuE@/lO~)Vi:I`#`%v' );
define( 'NONCE_KEY',        'ch4;F)`^hn,^>xpL$N<Oq(6s5, t+k_=Y%|-FIDG3?{N{Wizg&V?`tX{nQ;dmWCo' );
define( 'AUTH_SALT',        ':@eB<RH^!~~HGHw Y*nd6n[0(3&=tXvcv9oPxEIs44k[_0VNzbd`MF5>K2![LwU0' );
define( 'SECURE_AUTH_SALT', '3?M:D0S*;WBBK{p rPY[ZJSb?6{l&W_%R#m/nCTUP:Pue}qw4}6Y@gm,px{hZ~3@' );
define( 'LOGGED_IN_SALT',   '1,`n 4y=0u7JcELcE-8]zNF}/t/8/dRZ,tHsSAP>FIM&d4DM4T;OeRLzPDU;~BR=' );
define( 'NONCE_SALT',       'mb3[GU0,+5%12Dy%/2JrHQF)^m~&kd%3Xv9AAgQ[q/{s{c>CJyACD8>i*i%g=j0I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

