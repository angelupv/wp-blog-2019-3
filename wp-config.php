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
define( 'DB_NAME', 'wp-blog-2019-3' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1a1185b22cd00da90eddcec32c4f004196e88e00f4b1f8c9' );

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
define( 'AUTH_KEY',         'I|7*[GV}=M/5>muTe3Q3f9=@pSa&>2$y7GTD$ZSA[qx^P7V3HHz$>97`#zI%(~n ' );
define( 'SECURE_AUTH_KEY',  'Fmk<rXC.df_/ksi0-L<CCVM})<JuUY}D;uGMRyiqo(=Fhs4|*L|!#&J@tD_.dJ03' );
define( 'LOGGED_IN_KEY',    '%_(H87F+D[S1HF!d>C?7.>.Tb0OPx.BK!mhaXDDrY]j[Aim#~+ ~+ nH1PZBdBG~' );
define( 'NONCE_KEY',        '546+veau=[e$eW7xO IPQJ(_L,ZJ>QgtVdZ9.}Bhr`_(L6+]/$l^PC4db`0Fif$_' );
define( 'AUTH_SALT',        'PoUVFP,f>rFQTs$t/BA?5tne9x/;+1R1~@;fN*$UL;1a[_q@=(tDNwb WNQ%&@oW' );
define( 'SECURE_AUTH_SALT', 'z`^l0HHp.jaNH8OvAP(}a`8c.ljK(sSi<5`9-mY3#4W|[xDfpnN-_zo<knnRbj|p' );
define( 'LOGGED_IN_SALT',   'XMc>C1K1<#<+IW<h@ylJZ5DwqJs5X!6:fL#lP65+B#W>/{c:dtu81P9$@NB>!|~D' );
define( 'NONCE_SALT',       '))>_;eY-&g% %E*Mabv_$gGIH1g9;J>fyvN-w^@SC==T2Hr^wqZL,n-_oLt@].EB' );

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
