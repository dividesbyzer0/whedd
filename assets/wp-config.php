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
error_reporting(E_ALL); ini_set('display_errors', 1);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'whedd_wp');^M

/** MySQL database username */
define('DB_USER', 'whedd_user');^M

/** MySQL database password */
define('DB_PASSWORD', 'pass4whedd');^M

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
define('AUTH_KEY',         'o_f!WNY2Z%U%U p:pq2ODXB&InoAOL!Il)S~}M{r_18*?1pS^;[Su{[6b%1NOwI^');
define('SECURE_AUTH_KEY',  'a*>68-~s8/fw^C(m*[Co[&o-d8+n:Wy$=8p_g#-8eH9}$hi>Fb}B-IayL-/-Ml) ');
define('LOGGED_IN_KEY',    '|gt;?zXvD_O#B8*}^TUu_>Q%:k(}N;o.K[VvB$koN`}feiKj~eMrHq&d+E!GI[(:');
define('NONCE_KEY',        'R-k>|u{3EGG|AIB}!5P*,ECoFLys$fiB[![5yZi`91BiMB7z-U<xp=*$iyqs~g5-');
define('AUTH_SALT',        'V~DU0aTN1=b66lCn5%$w&Lrq[>n+Kx/fpwb-JLZI)J+ay,@Jc_/?t+A-6n? Wu:3');
define('SECURE_AUTH_SALT', 'u+R>Wx-}5?|;z;B%Iq^T-s,mfYuEWZCDg?HSp0HRJ7Ac19JA$*l)-Di3%WcOSM}J');
define('LOGGED_IN_SALT',   'IQr-vIZ4|S^Mv8LOx%}EDlsy[`;:eojZ{]=Tm,_*%E%NZ+E)Nn$=so`TWg]kx%8q');
define('NONCE_SALT',       '2OAp_~-Gv@&}p gRg5kR{|qqk;|,6iepdl-uISGT-F4c{r(-csX#+%IZmTA61a}k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
