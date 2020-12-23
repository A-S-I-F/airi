<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'asif' );

/** MySQL database username */
define( 'DB_USER', 'asif' );

/** MySQL database password */
define( 'DB_PASSWORD', 'iPhone4sAsif' );

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
define( 'AUTH_KEY',         'O:vEdW!3d$Gk.5Da!X#~VBISG[Ip^gRRrva[^Ru{b!RF;p.^}I4p$#72COxnd!.m' );
define( 'SECURE_AUTH_KEY',  'A6(9~IQw-&L4=;;E2ioKL0;(u2KKK3k1ENP2rY;gLw`:x:wG2eVVg=Wg*AH9FP3}' );
define( 'LOGGED_IN_KEY',    '^c-DhEZ]h.WP_PVt2VNRVUR3Y7LSN|tR&m?}@-4l/un5|0vgVcy8se!rXTI:f`%!' );
define( 'NONCE_KEY',        '6K8:Z.(>s^7Bf0jVD)G]QQ8Tpl3CFOXw-F[eCJp%#BJ2zKacoLCaf&nK/n3* S@ ' );
define( 'AUTH_SALT',        '1&V!TH}J<y?NufK(K,ap+>+]|~,csWx#]^)w<>Oc^%OhXN0QwuDE}?rPn5!=&rA~' );
define( 'SECURE_AUTH_SALT', '>bNWo+EvP3Ex85H9?5w~|TtO]6e85z2Kb#Ea7C@e2Ob.,9+A~M$^]9FPDj/!UNPu' );
define( 'LOGGED_IN_SALT',   ')&kH:|DdyDR{H|r5;bopO6aZgwL8Qc/T+9dlP7;XNqIs%W:)3jjeTFy5Ma)^C^m$' );
define( 'NONCE_SALT',       ')FWRPXt}^P>x;qhz?EW5Q!(MXoJ/*j+6ip`dY:t|y/z1ELNA0)sHbuXO&?0#Pnp/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'as_';

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
