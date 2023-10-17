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
define( 'DB_NAME', 'diets' );

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
define( 'AUTH_KEY',         'TJ700j,cq/B17lZt*l~MxR7]03;^>WXzA)i_KiP*Vp?zZ&H:uV)Xk],Z80.;l*$}' );
define( 'SECURE_AUTH_KEY',  ']5KQ!ojx?+&:9Fxg~O[MupXdg9,<ha~[eeG/rFFUwQ4wH}=mKz-z+ik9j7@5lVo7' );
define( 'LOGGED_IN_KEY',    'U%!BZ@us>%eYQFriUQ_@a:5pGDrdG%/Q7)8BY!6<e,4D>N kA|+*V{?b,5WI{ZXL' );
define( 'NONCE_KEY',        'M)HdE~&$/sEs33[QB#FrO<^z>v[Ae>cfrCl8;k+p/*a`H|&?>C_S}d6a7fPBRxrw' );
define( 'AUTH_SALT',        '2i=7FvKPT~*]Mo&v`.LIPjvBi=%M5}:r2+O*?W(gN}0ae{kLR3jCE$)0;OUEt^7{' );
define( 'SECURE_AUTH_SALT', '$8B5VnvDvNyNpKW?d%0D_?3%7WGTiGq#^X#AT5@[~l(`vR@`l#CYo*wHZ}gyQBAB' );
define( 'LOGGED_IN_SALT',   'weNk +]-oRB 7`+*|{A&vF6ds:?(;{Z{k=b5e#p?H6jR:)Gb=19rb57$mx<mj3CI' );
define( 'NONCE_SALT',       'WjXp10%<ao*%KqSZ2OFj(X1$nk%:mSl)5@_y[W_7s HNbY:s:4F7/H*k^Et?}x7h' );

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
