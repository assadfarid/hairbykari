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
define( 'DB_NAME', 'hbkdb' );

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
define( 'AUTH_KEY',         ' <iXv,0TvYkL clxi?DVoAI9q!S-@]H9o!b0@K1< ^*1$:M>&ZaKeH6[wow U%~j' );
define( 'SECURE_AUTH_KEY',  ' -]NeUWVz:X6D%ZRadK4J{6dp {B0#B_FI-7J4/[X/Hg7n&Y.=V&Ki.zbSt^8K/y' );
define( 'LOGGED_IN_KEY',    '}%qPCJO#pI0,+ej+cxp4N|E(: g jG<K2-gm@>E_zQY*ziRAh+u*/8v 5%i{[0]e' );
define( 'NONCE_KEY',        'cV$X@p1gn0tet4@6z!1i9.nQW%EGGzO ~Ql.GmTPx^nLQ$7^wBTb32~>/)nyP]C8' );
define( 'AUTH_SALT',        '=EA:AppWS,4cqt&q)NEpF/f[-B,.Ig=zx_j{bV^N[n>+h`ELo^@44.Ffm4qoKaR&' );
define( 'SECURE_AUTH_SALT', '^cd_n;iTy(7JC9GUgiIFN}&_8u->ff-{(~Og<P10,G9(=9D`k#iCYaTD<ww_H#8z' );
define( 'LOGGED_IN_SALT',   'R/EE{ VYkoKA* _!}j:S(94^vrOz8([+4r,MBkF~R8aY#*Tr0UD}A4!-4W8oZP b' );
define( 'NONCE_SALT',       'aQ$OHmwN11uyMP5_8SE3C@,hX1Z<5sTQsw6.S97g]c>G= y/6t>kz+*Fl3qlHCw1' );

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
