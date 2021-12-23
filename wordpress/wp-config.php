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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '4A$h^ZMN>|4AeB[-JSN{M3?F^AG]:B>E}baR&5bXDC8!Hi{+Bg1]~[}|m#9G1O2t' );
define( 'SECURE_AUTH_KEY',  '%MizL+1FVw@8L5+[,)D4*,Ylju&NZ}.$#jz.zz<k2[V]AWTqxkL6AW#OM=CRSJPG' );
define( 'LOGGED_IN_KEY',    'AK8hv9z^.V~%h]a]>)B>af+48ISAZ%SmY1mPMcL|wG!H^&X@b}Bi:=ttmlbSnzzS' );
define( 'NONCE_KEY',        '3;|G}yoMdcm:ev%/cd+XzfI:X`vIp|W-uU$MD!(=Q@4kkMY}Q/:d}pxT7T*jJp6h' );
define( 'AUTH_SALT',        'bZ]ex[TOu<%ilg4LwwhqB;%[!:PtPNeD#Db]#w2pW>kM(R-n]C~y$z8H/jgSCZk,' );
define( 'SECURE_AUTH_SALT', 'fo8i6@X9gNO{xmRW++B5-Ub9TGsNjW3(/G^fH;|)4T`UHAxbcD{2n][6(h L6N;4' );
define( 'LOGGED_IN_SALT',   'P$c;Id}bPEW#Gazn{=)I`&rLH$?&[f+_:KO<2mI#PUo @H~E^qm)#dV7l1DJh9UT' );
define( 'NONCE_SALT',       'P;2~#vM^2rb n{+;%g.K9(o^#TSg7=y}3kVgbHh+/uI90?-pU}qN=M@1MR!j^Y,]' );

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
