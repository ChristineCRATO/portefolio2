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
define( 'DB_NAME', 'portefolio2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>7rbiq)!eY9n*/&|!j;fAZY-IU ecLPn 4NaX^PrKco/cF;`E+~[spm(KwUHWxiA' );
define( 'SECURE_AUTH_KEY',  'A}b$$AG_K%MMXWNj{WI[1cK5nol .U0}n(>4VfTyF%=,3X+W:su7=}_k*@G}{!y8' );
define( 'LOGGED_IN_KEY',    '!;__rOj.Tiq%nsHQ5V8to/6Y>>Wg5;2H/GoRlDORV?Op2:Ymv D3&G#S_XpH@+bc' );
define( 'NONCE_KEY',        '`1kC_D/f`entAN{I6ewKHE*DXOfCrLN`JIe{7J})OyiUhnrC_[Whyj]55T;MiUYQ' );
define( 'AUTH_SALT',        '$rMhUsQcx~;Rr(jhJa=uucSSmN:!x3vT1XD=EM8#lFYI(_sBzD>`t5S-r3I|uL$N' );
define( 'SECURE_AUTH_SALT', 'v9FL2:R+!#(U~E(_hyZW!S<oTYzp2<!?GTS5D#Q4Rn0I7ZfmVvw,TwEO}*fO]SU5' );
define( 'LOGGED_IN_SALT',   ';Y-lZZ.BAcw*W~~YQ!r{7!E+`w~=*e5r,m/jK{&%o2YeH~E#SIS1i:5X$*|kA9=8' );
define( 'NONCE_SALT',       '76g0A{F6=s=A&[%)Zr((F-$n*N~f~KP,v>;1m8)({UZ?=|h e=97t{[h*Fp#9L?|' );

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
