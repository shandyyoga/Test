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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shandyyoga' );

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
define( 'AUTH_KEY',         ' 9**-I7sR1J$kA[@sPml.l^%*sj;ocLK!:zLq>)}vaIM@Zt673rFBJx(E];a1D9S' );
define( 'SECURE_AUTH_KEY',  'Mx>}O%.os)}mL&|1A8O52wI5aqVqBbh(a@mhm62c>sF&~6ou=zvTdef.|z%}RbVI' );
define( 'LOGGED_IN_KEY',    'KH6x`%r|>C$oOoH lH;k3D[YrL3g5Xi>n&CXOOcRDK%c<|n2Aqo@x+8Xl=gVxN/<' );
define( 'NONCE_KEY',        '0[ qFyM0aZ*[S`!+pt~}vGkqdyz|Z,HqU+LF2n_WmUEj#y[2h8$ On9sI% GZ-).' );
define( 'AUTH_SALT',        '5q]BRFO8XzAdLtx9$[f)hgt<.ot2~o^Cs>}*S<#ie^&eaU8LVoWFi1b-Pa*/McY6' );
define( 'SECURE_AUTH_SALT', ';TL&>5}4E-9U4w}%EpN_9o),uwGzDh$x?i5O}!(qpZO9?nIreStl{7XH?`qiQ4vN' );
define( 'LOGGED_IN_SALT',   '7q)*;5_W17]Wd+:,v<wAsAIleh@E8{0M5BlC`e-jO}A9f=Iy^Zv,P4;@ttwyg27R' );
define( 'NONCE_SALT',       'o@ujsH_Et>Y-k}qhUrr/rrDx4}7f{]W^9.ag9I}yM7[66(`s0t~vV-9x3swk>!bE' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
