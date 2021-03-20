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
define( 'DB_NAME', 'ExampleSite_db' );

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
define( 'AUTH_KEY',         'aKbk+Fs+ooY!d{v{z&SU}~+*Sw!E{MLgXa}seM[S}-78-+/;{s9#:]E#XmZFD_8B' );
define( 'SECURE_AUTH_KEY',  'Z&M#CJmy,%A[ M9DCXz$q+vxF;-ZS^j)1ui.ik;SEqR<I1Zbndv&9}r6%0en1O5W' );
define( 'LOGGED_IN_KEY',    '7h4.AGy5$@#2$::]XBhk{y$fPGLD#h!RT~Gx=(6dBd7`3:>B?G%/o!b%jn(`zJ67' );
define( 'NONCE_KEY',        'JdqFWF}}HmH?:!v)C8NT=H{;m%3L`s3oq]hN^)k)j}k#z$DtVcC9r{<A]{v_Z@~{' );
define( 'AUTH_SALT',        '{qG)~C=CvXm<NG;Z?X(IrpHsmIbhZS783:P.`7+5cgk=k;ZX[Q]/0iA@xz=GC$#j' );
define( 'SECURE_AUTH_SALT', 'V;h*GA`.)r{Hkd^ze4/HKp}lc[VO&djN0qXuP8hoI+UfY0bONeDZK4:&TN#^M2UN' );
define( 'LOGGED_IN_SALT',   ' SY0B*bN95K/x<DV#Y]7<{*>/q9x?Z#8Y/,MkkfF`rCLg@>kK%~l?]DCT~D[L-2 ' );
define( 'NONCE_SALT',       '[E<q6DV8Ul*qsB!-%zd-b>ZdaJz`zqG_P{z5Jn9skoANV{O2aK~?P VBB{ ` D5z' );

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
