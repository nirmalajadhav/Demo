<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ccsitedb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/*User Defined*/
// The following file is used for the URLs
include_once (dirname(dirname(__FILE__)).'/config.php';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6jj$9=unrvd4/Heh` v1.] RiMCY22*.kho&y(i4;^u2I?6.E.n.-D&|M^&*CB>O');
define('SECURE_AUTH_KEY',  '0B^).6cBSDLv?DH$V1E93:aJf>ba].r/kWh5QEIZDr-Dl~{;M5nhX]n*wawYsM||');
define('LOGGED_IN_KEY',    'Z5Qy nXcUh/J8y+`c>y%H1b< )orOwCCAnL+hK{CJMA1jRP=Nc?TG7>cD ?KHW=;');
define('NONCE_KEY',        'yyI{>2=Sol2xUqsTS~k74vr:Ib$O?1<r?1M5)pDAGM{` (qmaFqIc{oH&:?FW-R7');
define('AUTH_SALT',        'xFD}@a^Xts}=DK<Sfy<s#n6{8c/9<V=)*f/sXG ^AN})L<Z)b9h:lv7erST] $fM');
define('SECURE_AUTH_SALT', '5.lnN]!$KWS);O5o!ib.~46S5]f`:^`!b<wn|!uFmK,b/;f:n=I`Kqv%f=%&)2Q*');
define('LOGGED_IN_SALT',   '/U-/[a_l&$o$ihlB]M_7wzZ%=:k=vo0InH9JCYWlaUVD!aR,s]=HQh8xYq(@M[am');
define('NONCE_SALT',       'CVbH$cMe~;x(f1q3J>>C6Ib5)n}./j*W9d44;-Rjs+E,<b=3p;p}jAthcPS*BjDc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ccwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'v6.cometchat.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
