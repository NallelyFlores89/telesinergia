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
define('DB_NAME', 'tele_sin_energia_db');
define('FS_METHOD', 'direct');
/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'NALLELY123');

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
define('AUTH_KEY',         '.K9?hwZG7Du40TpLr76O`>XR:~zuLkb#^R?1l{=%KQW-0=g!2&DeKb09[xZE)= *');
define('SECURE_AUTH_KEY',  'C?wLCR*RMs;_W%rB#t_Q!W3q)-#_!|*RH[cJXp,t_~2GN,|zT)Ob`;v8h+Gq8^.(');
define('LOGGED_IN_KEY',    'J&_k7:%S-vaS$e>!w4iv>{zm&hM7PF!-]kc!$}+!ovgg~Riia7bGmYmepUB-dHJ?');
define('NONCE_KEY',        'x:5FA+j{|Q(du;$a3B]--[ryP@d#4,Ft$JZUsBp.VnT05G?L}t8!=blruy##xIc3');
define('AUTH_SALT',        'V5+40KG1D`TRx-gJz(A%m) YO<(b6o![[ezox/ud(x`d3|>C_EL$6+SSj6K6}WG.');
define('SECURE_AUTH_SALT', 'U-A8YkoXBU.ti]9dTj)(qArp[<?0n:]xbv+3.=zpb |73y+qU}RpTW?>GQvse@j}');
define('LOGGED_IN_SALT',   '7)-Ds[;19fx]qKtfNJjI-KIGnFmka!+[(iygQn_&~txi3F:;dXJ3L$5</SwHsN-a');
define('NONCE_SALT',       'p!fpDJmD.:9N!sa}K`-~;CIcW]O`p<iPy6/,0*q->52u1}K8c6C9e{eB;pS(PIKR');

/**#@-*/

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

