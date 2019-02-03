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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'itiwordpresstest_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kR6rN}M1[twD<Bpid3c,%p_,}N9aLUj3%E9WB)*3&Kk3RN.<f-6sAfLa@m$zPK!E');
define('SECURE_AUTH_KEY',  'C,ok8cqL0IF9_4+v/}bK{)a1Q3H,juE#_WTN-<?pq*<SkXr{;{#Q5[!(;U<NHUXD');
define('LOGGED_IN_KEY',    '}G^iDn#DVZSga5;XJH$ j7W_!fPM{S/0{2/:d;:bN.GR>tu_gY$B!awTl=6[bN~0');
define('NONCE_KEY',        'i3JVFaIw v-Kn)p,j{EPQG!ub_x!T%h.QrhnNtx>AeF,(!?{Tv?-tADEC}G29zE<');
define('AUTH_SALT',        'I~cGEfJoTSiP4kURoro$eA55,@?VK?^-1?u<sn=Y;pLOag,1qg%ztTC9MS?b0pUR');
define('SECURE_AUTH_SALT', 'suTvjoDyoxtC!jwtk$aicVLP~4*HQItmp<U-]R=om@%@JZ[I2BH6_KN8i!Bk<oI9');
define('LOGGED_IN_SALT',   'y0%HK;8i*eRX<3L/K@}M1(-<hu<%;{<4hj TP<w,M? >h>G-}L1kW81AznF[[qde');
define('NONCE_SALT',       ':Gbt{o=|#+i.`11.%&Nln%qZPjg/Ju?_Y)-q0UxIj!$Qt~`q`M&~(^@A[im Ds(M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
