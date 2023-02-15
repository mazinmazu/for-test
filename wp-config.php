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
define( 'DB_NAME', 'phase2' );

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
dsds

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
define( 'AUTH_KEY',         '%:w;z=7hsY%4.}!6wj=o&oo:]D;J5cJ]%}W(z-3QtP>D0QM{HR$]O}Dj7D+Y9hQ(' );
define( 'SECURE_AUTH_KEY',  'LG!:S@M)Z#XJ[bM0mx08I2GIm9;|(dEN9uc]:|lS7_z2uWyG&rh0]$)U^bs=A+G)' );
define( 'LOGGED_IN_KEY',    'Q^7Vad#HKbIbC?TSvtl9!n83{bG.]Nr!Ya_-zW{%-v!/q_$7ehagl!K5AotkaIKi' );
define( 'NONCE_KEY',        'GZ.`7,BN}0#Z;1a5@Px9)[{5,iuE!<=ekws!`W|}+C3sx+5;/&MCwuh,U-_c>;jy' );
define( 'AUTH_SALT',        'q:o}su[Y;*J$@?.&nMt3_2-9^*<bzofUQ6CU!6JtPVQf1n#>A:d r&D+wc/N;W_4' );
define( 'SECURE_AUTH_SALT', '5h7Qq}^/^FZMTf]@T{erLr<NtIkAKOfN}0I`E/32s_cch#/{HXqvrHtuOhm`C++3' );
define( 'LOGGED_IN_SALT',   'L/7p3n5&}d^<*6>jVN6Cdl&8wW<|qs]GAyeljB.-hnhzvy0w+HmWLPI,=8*UXmgG' );
define( 'NONCE_SALT',       '@(10Ld./GE@!AuwmUBgje}-jsQ]Qh/S!Bqt,mFhvRjwE[i[{;b8kF@`uUh`#MofN' );

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
