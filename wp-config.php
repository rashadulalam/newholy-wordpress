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
define( 'DB_NAME', 'newholy' );

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
define( 'AUTH_KEY',         'GQGB~PBtM<fLh$F<tPNM:_qnwDBi*L{ ](30*VD!tacWtOMX#kp8!XE2K*IriR~`' );
define( 'SECURE_AUTH_KEY',  'RXM#%zsq#r a<Rk}&t9nK-~RPh|Jkd.J~ )FsG85C_f+xOLsm`Ce}tR_AqIC2{qs' );
define( 'LOGGED_IN_KEY',    'CV}xgU)dVr8c*J1<4@Ha5_LJ[IQ?dphU5C?hIq-<3_oq:&ZQ0#D7s9aCZk@n/:E3' );
define( 'NONCE_KEY',        ';O:m$OiwNUxyzZL[T}#[ACz0Y9l xaY}e2YU}#*$:C}$~FM$>83^[Qy{R7W[~H4>' );
define( 'AUTH_SALT',        '!fXdcS5:i1#`:Z=,`U-;j;o}=G^vRE$!Z2vX2B|V3I+W,yTh!O?;W._vEk|CSc/r' );
define( 'SECURE_AUTH_SALT', '8a57`}5n,`kU2N@HK;)2gLO]BG[2<U=npJ9~x)Q5+u.5.wpt%P%sKqI<7@+Iyo~V' );
define( 'LOGGED_IN_SALT',   ',`W=qW$Q:-sT2-ga,TgMOVH{ak{$Pp{hl@>R^L3*6b*eo. U:Ttq&D$%^GLB=6sM' );
define( 'NONCE_SALT',       'K$mhG@CcKA,{:w}^K5.#QyRh-X=U#YJcLSp>{Z^@P|*1dbGRm}a:TVUy[Rn@+hRf' );

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
