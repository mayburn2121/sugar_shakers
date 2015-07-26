<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/mayburn/public_html/wp/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Premier@22');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Eir:5J<X?WGZ2JeF0eL8maal/ET7mm^Fk83mmbFK6C6EEP!JCH!p\`(MGv?KAb6NH$j7CB5b39um(KG2tQi4St');
define('SECURE_AUTH_KEY',  '!U7v>;/i>/?:Ij#k11LxnJ!c5PDn^NSk=_d\`p5Nh$UrfRY-7;DOD:4!b:;7dlcxw=-)~0Va');
define('LOGGED_IN_KEY',    'I63S>_1;4oJ(k^HhW:##Aq*6SLbXrlsTld/>K8?SOh$!^xX;x^F4(U2(Mcqac)R:\`@ML^?');
define('NONCE_KEY',        '9J@~L|EJXaXxg96Avzh#JvYqV;yEQ-yVz~vULSk>DB(E4I|u2)e|flO@Y:lDniD@mVvO!DAO=~2M');
define('AUTH_SALT',        '>;q@N|>ZJzhNGG4$/entqyd>vw_~)/~vlT^RZni@1YH2cLcb9cbI!#LgIE$L0)Q');
define('SECURE_AUTH_SALT', 'CB)dLxU|_=o*UdSU#|KW<l*xh?*00OO_@O_-BOVimzcQz*b|-gLqj(_\`=RC~-wR#qrQx8GX:d$k_5)2');
define('LOGGED_IN_SALT',   '=^3@#*(DgolWZS:KG*!ksEfC~AHtba:;fSPPG<EJ-_gS8*U*aZD<y$MzRjB>-ICZeH');
define('NONCE_SALT',       'YzSs-PFkgAfZJp=#yST@EfA(FddTjYpryZah/h!:-:)ucVYH!>h!Iw6hZvipZV;muNN*jQH?l18e-;P');


/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
