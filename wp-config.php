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
define( 'DB_NAME', 'btwp' );

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
define( 'AUTH_KEY',         'm9Jhgcn!.^J#GWf(SJeB3#Lx[JJD5L[H/Ir?.)ww6KpeGK+AkT7x.Wo4l|F8x7MU' );
define( 'SECURE_AUTH_KEY',  'wDf&.cy,b1-?mdb{X3ZS>bq3Uv(.vs%LxdnswR-r2W{O3?=GxCzDU<84yl5<sve?' );
define( 'LOGGED_IN_KEY',    'f#*tz6MG~.O-W9eYrOf?gR],S#<L.8({&n&#0&PcHB`boGe(1K87DGU|54Oo&k@b' );
define( 'NONCE_KEY',        'tEH[vkayz491=[O(>q&(<A[uht@4m}2%]E?cy3HU~}|y`%:^D4KKDU:{}y3w,D?0' );
define( 'AUTH_SALT',        'lOrcWqkH;P%$.4vjM)KTdBR%|L<* OoV5U*DlcKDhCo;hk ZzPrs0,M$1oR:HCU]' );
define( 'SECURE_AUTH_SALT', '*^ af4?DvbjfcS0s_+B!=]W-tbSZY!I.yfqZq2v$9>L<[`)K9y#?fhY,/|krG C;' );
define( 'LOGGED_IN_SALT',   'M2grI^VoqPVOTxyoG20T!/-IZXL-^5do.WF95d<eiQJje<>f+JChU^ $z./wCIsy' );
define( 'NONCE_SALT',       'ro]rc2VC>L{>34hhg l]:ATzSgPG.uXe5XF3=x$D_5 1>flHZf&z_@7+uRy:xb|r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
