<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u298715616_e5RhW' );

/** Database username */
define( 'DB_USER', 'u298715616_YpwWe' );

/** Database password */
define( 'DB_PASSWORD', '7IXKcFAUq0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'O*/AI5R>]ChXVqz5ndnE(6U7T.I;5NzF*YmK<}cZnbfVQ>U*bp>:!td31j`MAVwH' );
define( 'SECURE_AUTH_KEY',   '$Q/-2CT?4We?mZ~vKjw,LQ~/b+H:HbP~{N{>U)ri I.mJmv%#QVFG#[rb*32sl6r' );
define( 'LOGGED_IN_KEY',     'G4zH4<@i_a1]Rh&^h<T,IBY4Tqk*xSGDX9[HLwG4hkoz}892LVHYowpXMEEYUu5+' );
define( 'NONCE_KEY',         '=mcT8Fr3ZaASzO2_/eD-dwn5Vs~yQ?eq5W[ITMp0F!sw,Zzq6-0^)v_q,2<|V;iC' );
define( 'AUTH_SALT',         'HgIHLHdeVq`U~^|3 etJSp?~RcV@uWP($%d2RZt4 9xm)j%K3q)^whu}]LqSxA+C' );
define( 'SECURE_AUTH_SALT',  ',cD&FVx Mqm?YM>52{{3$y8E=J-i$gwH#G,bK+;ByMC9TGq`Uqx]eZ.=#E$_5ak)' );
define( 'LOGGED_IN_SALT',    'Nzy5u&w6P](YD/nqHewX;m~tR|9{ebymUrO>hp.eCG|SL:aF4wO*@c6R4}Us{~3s' );
define( 'NONCE_SALT',        'rH>GVgHT1^B}.96VIRP zi0q=Q^(V{MQKI5csdLaD|x%{(k?r[672s21*AF:Uj?+' );
define( 'WP_CACHE_KEY_SALT', 'zD9B9^EOI!,VH.&&.z*vY+li#Y*j$V3!ZLJ-Y/F`s V0Sn1k6upK7o:Z@D,bvvD1' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
