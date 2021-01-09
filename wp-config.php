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
define( 'DB_NAME', 'fashionelle' );

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
define( 'AUTH_KEY',         ',:rKbmX.SRX= *r8Ojwn!Mu]_KNNjqyOHqDha+YX56KO:=eCw-wL*+sJKc*CaX./' );
define( 'SECURE_AUTH_KEY',  'W=PO!;R62MZ[a`VolRyx9f+qw7ik,LAgVq)&aTRN,Cgj5s0(vzUbSkr]PfX>j4M8' );
define( 'LOGGED_IN_KEY',    'Ge%$LP-@[+$?[67Aou=,Sj1Mh&@yCoWq6dfFbHDZE[-p}gHzEFl]4TuR]Z?b=OgI' );
define( 'NONCE_KEY',        's=kFg9.PTwF.9YK?<7Bh=8wuysFoTpPgZOE])SPy,<H%8~K`.A1V}vMrhOOEd,tm' );
define( 'AUTH_SALT',        'VN]%SZ:$_:Do$7QK$)N%gW&cl2iRgJ3R0FYwmf#.~pN4rOCm`_S|_67D2&Y<`VsY' );
define( 'SECURE_AUTH_SALT', '/[!F}9<`ibE^`A<WdH7V>3}wP:%p{JqKE}a 5Eu7&.{+g%!P;rT~nB?7c8XQs4]Q' );
define( 'LOGGED_IN_SALT',   '@<<P;=Kg<6$~N<<<PvXd@R8bf:o5lxRn_Q9q~Ese5SQ-_XKhYlgx/L7b&_:tnD%^' );
define( 'NONCE_SALT',       'vU}e}La5`M9&`)MOx((eXiaZebU=T(&^~v~joq9vhHtuH)9bO1q34LG2=Y0pE t=' );

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
