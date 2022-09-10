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
define( 'DB_NAME', 'wp_technostroy' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'q91we12er' );

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
define( 'AUTH_KEY',         'S2Og}#OPBnR5M]P|zil2On?&|<`tyw;_u0lV)>1IoPb{2p)E`B =]9w.IbCg5ooH' );
define( 'SECURE_AUTH_KEY',  '>]?%TYT#pnK0=U:Zc/U1?R,`%$E0UM).*6|[b.EG0RE(w^-^[.N/fS]BwJyMK(j_' );
define( 'LOGGED_IN_KEY',    '8QjJ2=nRFLv7i7pHlyoZZoy-6SF^-6e9aSh>M)8s;C?h,sFg=jkqhmP:}@NXp*}U' );
define( 'NONCE_KEY',        '$Gp^wdxV]n/P>BW%i#n0b0g` .|?{<lhhy[sS&14!RAo+QN~]8=8eUMv^y.$NQab' );
define( 'AUTH_SALT',        'DsC$L9aEYcU@r5W+*5jVs]E*7,%0gRx+0o.~[NOS:YS:N~5|:DhajRN I}3~mAzu' );
define( 'SECURE_AUTH_SALT', 'B1L%q;Qgb+4N(+kYNm?=C1i6F,#]%=R![XCJfksY70~3tb!08a<ro;R>USmY*r@l' );
define( 'LOGGED_IN_SALT',   '^5KtboZW)Pk><}%1c6e?%DUhQ:<N0tUB:WWTE$03`6Z6cT={w8B32gK|KdbQmYn6' );
define( 'NONCE_SALT',       'F`}ZN~#VgtJ^x:74UmSdnR~Ah6rF|C5EoctwApMo%]as@xzH@Xzl[r TS%Qr5zU5' );

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
