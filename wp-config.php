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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'U_`M@g+ ;+6si?7UD*$% fhO|{8&hueaPk`dMwxDS)_#u~qJD.?+]*<i$|>5tW}_' );
define( 'SECURE_AUTH_KEY',  '|DLqx[x1N;F)ue3ZIYoMR^gH~|wc2Oyo,Z%#yX@uq_+Dz@:.2/i@*(wqGg,GAX~~' );
define( 'LOGGED_IN_KEY',    'mH@`E=^FCpfWP|iE;#okk/*}w2sR%NR/leo:K<l5ToDXF|f-A1;v[9WqCY&^!+Bd' );
define( 'NONCE_KEY',        'DyS& <mf01_AAI9^{<!&r44YS,ao`F@JI8J64/JZf{Oa#XDN-u#hd~JvMvLDsp$g' );
define( 'AUTH_SALT',        'zE^f4#srMx#?Kp&c1U#+:&MRra.;|mbs>U?gAa%(~3Sq5-c_Dz>n Pwf`3e%f@)|' );
define( 'SECURE_AUTH_SALT', 'x[U[lTyiQ`Mac9r?T.(#<0oMBw-::mYTO.l)13G&v}`rj`lWh3)E`)@QX/-8Lbri' );
define( 'LOGGED_IN_SALT',   'w.Po#4T~G@xNeALHLTkzS{TL17|dsYC6KR R]/* A +5U>ali98.+K^-c0$V`aZp' );
define( 'NONCE_SALT',       'Old=}[m2g]:xh jM,BKi4Uz2_,o9ni]AF$CIQ6f{DA8Xx#.u^{%%Dq#NBUL8S~vo' );

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
