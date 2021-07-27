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
define( 'DB_NAME', 'travelguide2' );

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
define( 'AUTH_KEY',         '.XerHF ;SvQ?%==^;{CEt+5@.2G.y7w&&=4,6eqkDI!Er<<0~4g:k+.c[@=_zI$x' );
define( 'SECURE_AUTH_KEY',  'mU<0PF(5zs?g}Rlw MMN%1F.N|Pj?B>||`189_va4R0BH5aEw%42D%U7lhQTw2UC' );
define( 'LOGGED_IN_KEY',    '=@QhFBt=u~=0_6`T;5+(d[Wip]7FM$6DVSck`:JA);_FW1TWu{*xX)owx/D%ozcP' );
define( 'NONCE_KEY',        '^*}%$Oc(-wnJhA7?HXN6m,To2TeQ]J@12JBEH4dv(J}$r-_[%3a zjduGUm8x]D$' );
define( 'AUTH_SALT',        '_WLbE57R(_Nb=%ubetsEM(6=?Vf}2VmP$`*9FX>{mYNFCv7$K^$*h}-nQLdJ5~nK' );
define( 'SECURE_AUTH_SALT', '3?4JLg3^j=bniXd7:xZ5Ht^JeFmd<:TCYJf{.@]5raWQJA<hqyOyJDF]7x@70gL(' );
define( 'LOGGED_IN_SALT',   'nb0|Ql1*(Oo:FrESG(O+XJ#kwlv9;kH^;Lwz.)e]x#^VxEJVu@/W-9Ul:ml1fuqp' );
define( 'NONCE_SALT',       'd(9Z#EBh0{8RDRWPkvI&IVJU,e$&|,i[#A--Jl|,oId !zl8Gkv%1K^x/ W!%V%~' );

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
