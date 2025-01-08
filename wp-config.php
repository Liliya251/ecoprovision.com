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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'N&*=?Ulsww3@dOa80-YjygZ$ -uH?DY{5&Rsj-6yujhiq^1i,}8ms^1C(KnEq>x2' );
define( 'SECURE_AUTH_KEY',  '0SDgm,r{w$~2|EE:CK_Rs+J&_Erx/ekdp@zi[mRh>mv|Waljvl>Y/9fszK$S@CaF' );
define( 'LOGGED_IN_KEY',    'mUo9#E^LP{a{B5G{lF(C1+R2LIcq@ZX_o5kC)]XOm2F 8yDm0++$%(Xl58@S4MaK' );
define( 'NONCE_KEY',        'b5nNe9}T+)d]zs_mIv:Ig)lCxzsO2f}G=~/j|;lEI`E^![t!0EDJBrKXl<|>^hLP' );
define( 'AUTH_SALT',        'N(PNYOl0BITv54+5 d/&CXeZv&6{KVQTg0({xA.-PPdXKeCXOQnzfKImWZrv:|(G' );
define( 'SECURE_AUTH_SALT', 'cq,n|AL$k[;YUc0#XL dXP})X#Tm7s1@5P(R}s8}tn3^@uIGA3-g~*h40J([ulDF' );
define( 'LOGGED_IN_SALT',   '.*>w.ZWJ/]_A_}:oBz~Bx2g0LE GIflJ]A$Og4|=^f)XF7Y:LP{A[a=u-W`sG{}V' );
define( 'NONCE_SALT',       '-Y2V64ve]MFo#&Z&@LFzT@Y*nON< `RiR4i4|~s$>9~%kD:Q@H[G6N0=gLbA*v ]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'kt_';

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
