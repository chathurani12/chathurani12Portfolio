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
define( 'DB_NAME', 'chathurani12Portfolio_db' );

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
define( 'AUTH_KEY',         ' L#:yya*Q~J=D{kfgM?Jfa;Tt34Eid1y#6UG0tueB6Uz=_0Ex*x];Q,*?$|HmSy!' );
define( 'SECURE_AUTH_KEY',  '0$o}lfu~XIuXlHHI[m*ix3n)awr`v7 u1fts7F*01,`#M:Im(*oaF[UE|`dj/I:>' );
define( 'LOGGED_IN_KEY',    'p8&El3KDt;@[x`gA*jG_oXt1GomnkeCzJAIG^FUcI3V1Fb>7[Ugc!jgGRa7XaL9S' );
define( 'NONCE_KEY',        'C!ET~9la3_#sH)SUhIdFW2oD$):8INz^EvxK`r]z^irsqVsQ~_Z*<K{kW7VcFmnx' );
define( 'AUTH_SALT',        'Sn0xo$MZ1A+=(*gwnMqBfNnCiq<ffT9M=uv#ur&c]EZEh2P4|?2cXe_!^pN#y*@X' );
define( 'SECURE_AUTH_SALT', 'I|?nWnhLn g|6Q~#K&StMVQ<GPt}50jtBNik.0_.8,GK)A3f)YphW3iBK=4I.J/ ' );
define( 'LOGGED_IN_SALT',   's-~y:9n>OjAQCo(E<~oRDBgFd3WGqtr2hKL2t><,Zk&)M&W-Wnxv1bFdmyGQn=>-' );
define( 'NONCE_SALT',       '1k!a&L&VX:&)S?mDg3YTW,BZ$/?`*452yzd@ yyjg50F%-F+vp)v$#s=188$11q/' );

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
