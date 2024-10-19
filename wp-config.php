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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '4c&tgcy21_VvgQ@.h%+g=8W*$W=k?/Dh0^3oAs2<[t!b6<M}O/{`Un>D_y|8Q0F}' );
define( 'SECURE_AUTH_KEY',  'DkCpXt;?`GvIe-KY9O3=gwc/:*F8c!;-~c$2gh`f~4D1yrEdZ^F}POdP8E[l^$-=' );
define( 'LOGGED_IN_KEY',    'V?oD=B-b1Kr`Zk3#+drjyA; S{JJ@4/KL<1gtnA*9<}:UJ5%f{l]R,s 3jdY9&^>' );
define( 'NONCE_KEY',        '=hed&ekRrpJRWGG]AptkJMP6BY?x$G[f~lbd51EG-*MWmZoh~Qb!7$Ffe#<X.@|>' );
define( 'AUTH_SALT',        '<~ ]5(,u5ekGa%<qawGP,[dI;t+4DYqJ-C{U<&5IaUtTNauUJ0Z.m!@e;0!=0n0V' );
define( 'SECURE_AUTH_SALT', '2t;.FUj)MEUS%Hbt0;P_D/Ln)F?HkotA)OT.1[V&9 9%:`x-!5M=NB< hjYOSqx2' );
define( 'LOGGED_IN_SALT',   'sc4Qf@CsBfF8By4RnTPypg|[lzPehzlj/+(4m3|@i^)oPN+NsUNru`z[=i[LkkQ=' );
define( 'NONCE_SALT',       'hZ5I{K{ANGyaL5k&`g$aj4Ws/%8hu&;2%i*Z|3C9q<{N.{qrkNhIrj^./qUgeA~-' );

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
