<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'heroku_6b3e45fec62f82e');

/** MySQL database username */
define('DB_USER', 'bd828dbb395bab');

/** MySQL database password */
define('DB_PASSWORD', '26ccbc9c');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

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
define('AUTH_KEY',         'pcqy(w{pI^.jcj_H+?}wy;I3+A:`eKaUFB.V|pJM|$@60h6KLvo!t1VSK<Gg(.]s');
define('SECURE_AUTH_KEY',  '/)d;C=*HPsQZY#k,|_a#Q!.`0P75S_)%lh2_@8.TC,U}gh_LlB|*~^TL3+VAM>*o');
define('LOGGED_IN_KEY',    'LUzq2{W cFRXU5XmL.);-]hgPCJtv<oxPk_N=(=p]|i.MP=Jo>mu08M] q|7(R}u');
define('NONCE_KEY',        'IqhTngZY?D,{zZD5G#Z_G9E-$[U2NmnE:uZ93k^iSjUN,%9A$><uRRSDL<fUy%~~');
define('AUTH_SALT',        'Er)wtyXGd+oM9m<+[S)l#arBi:V3)y6OU$U 7>9aTQ2@%#^L3=LWaaL@JSX~lWa_');
define('SECURE_AUTH_SALT', 'fB2f%i*> ;zK>@*)x+:fP3XynV] h|fb^;,|t2C]*n&g+^ 7P^Mc^lFw>[!]|9j_');
define('LOGGED_IN_SALT',   'NVBL[-T$ CKh;7y,,Cd)6P!]J=$4<Y`1G].trBu>Vlg<6K(=i&n20z3&{W]blCsu');
define('NONCE_SALT',       'XrT<x%B_%`x9ahvxh4n}9`dsAImUKKpR90VP2^etj,q<8XK<=op5lbT#FRo8-CsU');

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
