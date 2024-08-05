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
define( 'DB_NAME', 'isogift' );

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
define( 'AUTH_KEY',         'Am6Y(RxG{fq7F?ObVEMQs12w;hX5q iu_gxNOXMkDI3DY~+*)XYrSY@P,ou6Eu<|' );
define( 'SECURE_AUTH_KEY',  'l.yL8FZ:M5*~{**CyddbUKN]F<&phE{0%^a@0}_#A*@1,$7Lwg|&>yn.3An,3^<{' );
define( 'LOGGED_IN_KEY',    ',)U-zD%<h&$cDE{fx|=~%u]j8XiZ33iF@@%r +_;SqFD-L0zf6RpvU+6+MS23!w[' );
define( 'NONCE_KEY',        'j0j;HNqlPov1OZ7i5MH.bHI%54{@;RtKNbza%6c7gkJn7T(R7<~Q2vo^aDBJx?Oc' );
define( 'AUTH_SALT',        'T$EXr 0~C[eU%.;#h4^_^8UX%5[hou1-;e@ FHc;Ami45~??Q-elTU_8BivI(Bj?' );
define( 'SECURE_AUTH_SALT', 'y;q|SoH+rQNbXb|@u[E76|#A#oDKW6]+XZ?C<6<Z%At)LBEle%7LXbj!mXwDT_M|' );
define( 'LOGGED_IN_SALT',   '352=&#75)+Co=eWFw[o;-/4?CH@ix]<e*Uk?{=$B.6_==XOc`baiO9E,R-z Wf)[' );
define( 'NONCE_SALT',       '@bFVSE2:SR4p2N|j{X?CjZ9(w.Ue09#h]@l7d?D*Zo%s%:6MA[~93!P~, 3Sx2^X' );

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
define('WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', true );
define( 'AUTOMATIC_UPDATER_DISABLED', true );


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
