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
define('DB_NAME', 'sdtopddg_puspenjaat');

/** MySQL database username */
define('DB_USER', 'sdtopddg_jaatind');

/** MySQL database password */
define('DB_PASSWORD', '*ZSC2y=BEXCE');

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
define('AUTH_KEY',         'rZ1!?U{ccw*)..l:T5n`{s+i=0i95vP(:>3P3Xe6ldZrDT>WHHt25/`Q/4q5El^C');
define('SECURE_AUTH_KEY',  'p-c>pQOP2`Y9I%;,UofYKhy3p^m*/+Hk9>e216w/(I(u5mx +~b(eTbf/kE/h*Q3');
define('LOGGED_IN_KEY',    'nW{%Vu}HBgCW/6D#oE:8-9*3 KJ*2%Fv1#2q}JlrW66,/xKxiNs`eg8fPART0%xK');
define('NONCE_KEY',        '#da~^09;{AY|@rL<hts9Cl*k8+WG(9u:H~x~sQU,9l,@})T9dD37/k*g5w<lK=2A');
define('AUTH_SALT',        ':hq&+5U>F-Mj8r<pz[dpAr^O7|!=VJ.ir1AIR!sf|)nw&k0.eFAP[pE*9=o%/RlY');
define('SECURE_AUTH_SALT', '[Z$m4 :_HWZu%f+tB,osAr70%ywrwlV^*q&>*#bax0N,]YEQv^rWz2z7<rqtlEMh');
define('LOGGED_IN_SALT',   'kxE71xzFFZ4zs 82wcA{TYeK]yIyy?:kdHLntRLHg+?uDdctcx7pYrO)^-fLbC_k');
define('NONCE_SALT',       '^_h_se@=<v P)=9*5b,tU{R:&gmy?&Jw<dSr>>*u%!lgvNj_:-V&Dw@L<,^H|e3<');

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
define( 'WP_MEMORY_LIMIT', '1024M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
