<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'perchisa');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5F?k;q2E& WoL?)~F|Ld*4tj5Ur9Ko>L]+;$>DJpDOKeu&PxQdGS/zn.^T3DB&JK');
define('SECURE_AUTH_KEY',  '|8WY|guSD%*!Drv4|D TD)o|7:x{N+15nW+/SZHNoU<l0I|(K8P&OX1)r3q9oW2(');
define('LOGGED_IN_KEY',    '>_]DF5a4rQvv[@Cu,|n@M^ZmE5R&7r_Kk:-AlHU^^VhO2Q/2pLJa.}XYFgrH/UiO');
define('NONCE_KEY',        'a)2+H>SCuQ>}3jb}=2sd(Us_oj+Cvg_;9}X|Al_[{W ([9Z65|vFT:$>sVc9y:iv');
define('AUTH_SALT',        '-B3:~4MR(Uq[)`hQN7&0w5m>g[^{v#Eb.Zy^Pba9V@//9O*UFK-gBxW8J_Cg{y]9');
define('SECURE_AUTH_SALT', '+-{-HH*^>y|y3`M+#<Z(E$:WNb0L`>2;b+?->x-p/9&C-C]cyr(H _3.gQA,91l$');
define('LOGGED_IN_SALT',   'nF)az`H<%Uyo3Go*9x+OYR#M(`Ikz/ jO@Zkn;adJ[uI)`#h-CK^(cVS?]QlrAFn');
define('NONCE_SALT',       '|CvETD1TvkPJC@POixiJ9X4cXW)kAxb}`&+h#_360+Bs)ra>?!c^ogAvZCu):qL:');

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
