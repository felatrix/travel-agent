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
define( 'DB_NAME', 'travel_agent' );

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
define( 'AUTH_KEY',         'rSqq`Z`<zOVN$Q@c!;Eh-L;,lB/#-qIn$hvGbLx{YH-`[{d6[4.RLr4HB3b5cvN`' );
define( 'SECURE_AUTH_KEY',  '?=F.>T!}^6umrEM2Ls[vI-?><VMn~CJ/:xbT5|[=quRhJI1j0pT2W9UW>y#_h-=P' );
define( 'LOGGED_IN_KEY',    '~6m?-c}5a_uI1]>7|nfZA$F83e1VT^U+h5P0lep!P;FtQ(Q1]6QE#B,~00S%Z(su' );
define( 'NONCE_KEY',        'Pc^Y}y!,f=tcWOg(i>P2J!5ULc8yDNA#{PW]2?t98]O#$wVIM7iHIF!3Wa9yb$aR' );
define( 'AUTH_SALT',        '0xGA.4ElhP pK/zSF#R>a)f)zV~JzdsZlAR>:q:l:]/s8je;Hw5P9|mw474;IyzE' );
define( 'SECURE_AUTH_SALT', '!OC%Pz~`aSU[y,s^EYe P7S4gSb-u2O3<_U_:Cp1SEQfV9V/b?O?m+LL+{ULK!:[' );
define( 'LOGGED_IN_SALT',   'H&@ArhfmTma#oUNXS :Z`e&i+syZj=T5:rT3F;`aWn)J}H`!OvBf7H4)3#I5=m:<' );
define( 'NONCE_SALT',       'cekOSxwf2Sh]^&K_F!([v)S89eoWoV{535l88azzP2@pcf{CMDV18v@ e:n2Njj2' );

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
