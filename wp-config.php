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
define( 'DB_NAME', 'testsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'X| bb-PUo%zNnT$WDx7{JYQ.nwX-+bm<^1)aH[f,wAcC4[sc.!`|s&UUllktiHqh' );
define( 'SECURE_AUTH_KEY',  'R-hW_ E;|{vA-VLqN*<n&&,G[tce<*Zd,bm8-UlB)A+!>oc{}vDOrQPo?C(kM+` ' );
define( 'LOGGED_IN_KEY',    '9_]VQ{U4O91^!rgXTdec@i)PN?Aa[0{!)NUcVlR4;TI06f-7 IryY72I%e1B1vVx' );
define( 'NONCE_KEY',        'J;sU?1s=!~1Muy_a{R{Zi+]E* /r!:]/,9><-TF//Kdf<pD.1}#SOvh{B *T:TIF' );
define( 'AUTH_SALT',        'CuBY;%<cPROjQBgj6w5&xkp[F+t_BmY iY8Q5HD6o>;#b7@ t$t^]rC=f{=vwOhV' );
define( 'SECURE_AUTH_SALT', '8K{s$q0&^U@UA@my},Ouq*Vd8~qOZyucK#wTPtyGliXm-{(SX09ie,, {na%6DZI' );
define( 'LOGGED_IN_SALT',   'Tj1[<urSfnlim`BHKueufTZT;Ix}tC{!yYM8k=,v m0lA_GS[o HM!&$A=<n*`fA' );
define( 'NONCE_SALT',       ':CP@:rUXbMv25-5r0pX5h8( Pv3m_g#F_vEEj)Ep/o<unHExB~|ouvD+8JDjwe.h' );

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
