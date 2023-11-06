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
define( 'DB_NAME', 'psikolog' );

/** Database username */
define( 'DB_USER', 'psikolog' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         ',$:(6?mo)KJ =4lY|mtrRJm](MJ5%&A]a5&#xfsgd]J!]Ap%8K9~VCh@t,,m%h[0' );
define( 'SECURE_AUTH_KEY',  'G78s:/g-nk{HU.!O0%[vF?|],LGuW~BoeyPc~/!.IlHG[jdASchq&kC%K2GA,Q!5' );
define( 'LOGGED_IN_KEY',    'LQ6*$b{Qf3O>>-97fjL9Qr:G+uu 4#T&Bb4w>|WM=;=iQOF,_7WOgdM1:WU6-uz$' );
define( 'NONCE_KEY',        '$6Isf?4S*gVE27zdnNiE:EQ{ox.`_6K.wO>.bPpq=L)*&=FJ+8OK[%eb(^n(JH#O' );
define( 'AUTH_SALT',        'qq8+}BXD=~fd#O4e2!u,@1PSC}kziQB}b}LG0HqMlh;|2rU-cqpG/oO>Wu2o^]T}' );
define( 'SECURE_AUTH_SALT', '?xMpMU<pwwXcv;OfYJ-A7j-KNTDCJ=?[MI.r9W!HIe[+$hZONRqh_GRQzhTHu!ZY' );
define( 'LOGGED_IN_SALT',   'o3gn}U$uoTo-@NfCMDDpDJQ.g`DLr&Moov`ZO/OKmy.Sz9.8n8@-?|[Z(C(GxrIW' );
define( 'NONCE_SALT',       'C0uz)y=E<~,YwYU;`LK%E<R*II[K-L0ncT&{vU|:iO03k:oQ[6tZxG+v[kShRE(D' );

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
