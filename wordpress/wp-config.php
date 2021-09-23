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
define( 'DB_NAME', 'myown' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/* Make WordPress install plugins directly */
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '.)Q83Wd/W#?jTia*/vi73?zOd,,ANsWm?P1kbDzFgJV,S q_Isg>LMzwXQ=Bd42~' );
define( 'SECURE_AUTH_KEY',  'v^G(6wat&sC}H2pK/*?YrqEbG}:)X5 OUd?6[=$#M@5]p8*,9xBNTpClR&AL^z+p' );
define( 'LOGGED_IN_KEY',    'YVf6SR+fLKd9S4ilIF2k}?IQh(R&8og3R:H893J4&u.HBFy/kVVo^1QEE@7Q@10l' );
define( 'NONCE_KEY',        'JzH52T/q.9|RZ<zn$[DqkGek~n4t_,(ntrt7+-M3?zEXs,=u*_Ri$zdZovud7CYW' );
define( 'AUTH_SALT',        's%UuA#!l/s6JfK=`.cA!JTSZv=O8rl<__CRfgcweOB&.%W:GD;r8RC1PC{4#jl{J' );
define( 'SECURE_AUTH_SALT', 'YWzJ;aTtMjV^<iC9(fzz(/!!Mz*SZyVD%5xj,q{I/rkVagaryO>f=-XwVDRZYR]R' );
define( 'LOGGED_IN_SALT',   'OEwcZ5+i_-UX?^ertmN_>::#=@^]QGcL(z:4|Gh[(noq[rNnBnE+Teuk O7MK1 t' );
define( 'NONCE_SALT',       '?l;cG@h@Gf{iXs%Vk;E_t^J!dS+fs/_$p?2y%dx?%GhVpE&*rBopk>;uATWFL8/!' );

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
