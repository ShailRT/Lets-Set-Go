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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'letsset' );

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
define( 'AUTH_KEY',         ',5t2oa?^_8X[Lq}96^sbAz/:jLVv~Ph0@Y(jzR93I/LW0#AzquR+qmQ#K]HUMqDf' );
define( 'SECURE_AUTH_KEY',  'fef}(1IBKJJd! +-z;,7$@KYBHWG@zfb}X+7-Ze5<XrE;/[6_jOAnYX8; 1cF`Ue' );
define( 'LOGGED_IN_KEY',    'vReQ?.9}p$5=/gNG9~P()sB(SM@:PnQ]`4V~5l&Qip9bP<zN{fbM0#[8ns~mJw`h' );
define( 'NONCE_KEY',        '+n4d*Qe2-izg~GM(T5|Kzw>>U_laIB7o*(rUwd {s~e#&%{cRexDwH?j#5g@,*g,' );
define( 'AUTH_SALT',        ' ,V)5uZw@YsRcLjcpYx:etYj[dOp+xO7~frD<CBp;+/IH1+Tonrebt<yFq9#:7g1' );
define( 'SECURE_AUTH_SALT', '&_n,ZDT`%&O:P& _@X~l@6M 2{5d!}>c BqL^n-ZB][aV%uSjTh~j@|{J2JFVy@0' );
define( 'LOGGED_IN_SALT',   '(Lr[(V<6nmtrVIZW6_Ll1Jwuc_pE+tDgeP~&xpOO?>rZ8,=/@WNb/f9uu(E*`K8f' );
define( 'NONCE_SALT',       'uM((;? e8>x&g%w=GkW~4zg>rQJAcTLFgqYoy^o(fBH`<Md@Ecx6ak1@VO~uR?jt' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
