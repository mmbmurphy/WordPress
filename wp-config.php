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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'D3lbarton17!');

/** MySQL hostname */
define('DB_HOST', '104.197.161.159');

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
define('AUTH_KEY',         'M[+Z{14HnBL:y+,^b?HIVNwiSRkY9v!C-R*-sX2!V{UCr|i1|baf*-BsNtmO}:4H');
define('SECURE_AUTH_KEY',  '[-(Nw4h8[ 1n$ YxX,<1?_Syz:b0Pgr|TRu|FJ>bOl{eWmqkLJ2X1Fh<5i?`K&<H');
define('LOGGED_IN_KEY',    '6IGxzlPVl,e3]kK^8>KQ$y^m-Uz7_^u+7 C8,RQe|VXEdYeKW.5PFtN_Rr*Vh1$]');
define('NONCE_KEY',        'WawPzDSQ*6$7-?2xj8bhqU3**EmPPkUfT~n[N!L#unLK/n9(w?}-Nug+vo<Y9pP8');
define('AUTH_SALT',        'hM2rA![CfFKQrS6^,1HlWS)nE%:|A1Y vn$=$quQLJ]yEAHxGWYxt:Yo|@hY^`_+');
define('SECURE_AUTH_SALT', '<_G/c|M,/qpYW;8>HuRK2rc4+nSves}fyZP(5R.|GSy+>QlD:P$E9_-n6tB|5t[u');
define('LOGGED_IN_SALT',   '/A8D|[,nxH^a4JR$^2;=1E_[b]3=f%|aK#pf{{q:U[7g~m`-=hC,YaS}}3lBRyWP');
define('NONCE_SALT',       '#BqO&@8qS%O~VR|QR+h u-7,1scJhu;[h1t|*WHr 97m vapMfJq`=.g4%`|~$kN');

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
