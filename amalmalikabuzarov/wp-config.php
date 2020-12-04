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
define( 'DB_NAME', 'amalmalikabuzarov' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'JKovuN1_Gl/P#yz 2{x+PpkZO;3R*pV+2_p~SEj.pGP76!&b>[X&J{-UiZvZ-pj#' );
define( 'SECURE_AUTH_KEY',  'ze{PIq)ftF g$3c`>D{Al/pK8h 8}aa)&)XGW6C~l8XfwEu6DzExz8~N6ydTq!AN' );
define( 'LOGGED_IN_KEY',    '&s[QqSd~SkBxH|>@B[Va(8nCHDFz?h!6Y}-.C.IF4){D8ZBUA:DYecN(g][iJ>81' );
define( 'NONCE_KEY',        'Rz_xV] ju3i2k99&^I/_m<wau RkfB#~s{!LkoAh&Fmq#rxCpnsqvUJ!qrz2V|ci' );
define( 'AUTH_SALT',        'B(L/$YYF:O!IJRZ+>v CD{MGB@@wZ1+rsNdE%>?pq6Zav0p|;[$@!_.0sKuq9}f1' );
define( 'SECURE_AUTH_SALT', 'sk.Wk|YF{7US~+pZnl7HPeAHS?fM2_i58~p6)qfv$@*D=p#RSR56=JElHp]CD(zn' );
define( 'LOGGED_IN_SALT',   'L={2n89z -y l)1N-:SBb?.g=6Yf ~Kz3+qx7k}lHi4Ugf9oy7~Gq7TF/9F`%`B-' );
define( 'NONCE_SALT',       '>&;X2AHhPiKjp8LX8fkAh*5+*QrwanJnMAT1u8NJB-:^C,lS!_<^I,>;l8Et_)3K' );

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
