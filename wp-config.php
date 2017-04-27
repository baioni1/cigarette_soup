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
define('DB_NAME', 'testsite');

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
define('AUTH_KEY',         'Y=Nh:p(m(1PCD,p::ToFO 8k4s2i^yCU+-?]$2F]tq(Ai<~*n{skspns{7Z49k2t');
define('SECURE_AUTH_KEY',  '@:Y@x6Jl7?myr9C)+LL5}l?.^ht % :[DA7f%lSp6H`[BYXlj1VQ+7!RCPtY>5o,');
define('LOGGED_IN_KEY',    '&B%~wv&{FQ@K=*{zZv[/jWQ4]`0R9J@jgK%XXKA!(FTHd)c&jZ{@_(Ozs?=m=.iq');
define('NONCE_KEY',        'Tvx?Ni0g4!q#<IvbGLBCc@z]s_SyP6?BxWs`w5wBanT:r9&$JRV_4t%{$S-h?NRb');
define('AUTH_SALT',        'l-TJV)g9~T0VB]s:IrUw_dfXr*U9MX>%7r+b:F*(xnUF1lO1w.ULvd6a;%7?S:[]');
define('SECURE_AUTH_SALT', 'mnR!F2.gOsHZvZGbAo 3L@i_uhA(uo:A^[~YxWC:>4|rg$0wJ%S$u-EoMZ#;b1iG');
define('LOGGED_IN_SALT',   'l$L3Js<hT:_V8?.C/Y7k!*A,dJ{msO+r4a4(H*vYoM1EE4?W- >b-tc}!l:DKlq&');
define('NONCE_SALT',       'B=6HrE^;:@DsD h1R-2>12jFS/(hH80VIx^01>h,j2PTn:2Zq-mrZSaeuUVF=M>{');

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
