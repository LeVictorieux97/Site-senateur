<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'zoCbLXSra0beJARKwxZNXID2pkMh87qvjx7FeiSMor1qhthWqLUmpGtRyB9DEV3B');
//END Really Simple Security key

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
define( 'DB_NAME', 'senateur' );

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
define( 'AUTH_KEY',         '+Hi0E`@23tMidAu._?EnhSkGfH^H4G,d8Z-ho]HDL^)5{c~BPA!56WYtUmcNG(Ep' );
define( 'SECURE_AUTH_KEY',  'x@3(>6>{eta<.h5bOxJC-gy9tsip4&Jo.VXm#hC-hJ.ZZ`P0kZS7rTn(f+M+9Go}' );
define( 'LOGGED_IN_KEY',    '}20nA>ynp|`hRF*@8.wz-W-5g~Wouj=QvTV3{h#`R I0_ibsL%MO&}8(3`vc(xcN' );
define( 'NONCE_KEY',        '.BR ]qVi{6-j2VfC3EbX6K7m[r884Ds+UPjqH@ppa)j)HdpV{{lgVvL]n% U3XK2' );
define( 'AUTH_SALT',        'vGP}n*(1u}HH]>)!`LZ=veC^G1.;H!g`CwgA]4p@tA3O@(=AglAva8{{W|euXuN9' );
define( 'SECURE_AUTH_SALT', '&:W/skg{Q0|RkRo5>E`!c84G7Rr@O:lQeZ4!I;DdV:iwx+RVu$mv1PM7nlhj?`WY' );
define( 'LOGGED_IN_SALT',   '6?kV0cmbu[s%!f{ h1^ue8B,T9q9=2|+[ps6i(d.i6ff`O[v9J7/AdzRn?.kR#^c' );
define( 'NONCE_SALT',       '|>Lzv7Ym2S?/:W4)Q>89,7K&R<^3rskWLq6B_HJNaM*dCTX<U<rzQ/TL1=p$J*w@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
