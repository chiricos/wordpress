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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

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
define('AUTH_KEY',         '}v?uU2JnHI,m.AfrJV%gb?@Au:d|%GCpaX0G7F-y-,E#`a{m;Uo`!jH7vSoV>@XS');
define('SECURE_AUTH_KEY',  '*AVx}K>(_4{,TgQy =^,dpPh wi+y+!rK4Xkycr8I8g/B0M,_32ZAB|wNHN7Dz|R');
define('LOGGED_IN_KEY',    'CL_%PHQ]c)8Q;gBoxPX*jDDS`r+ps.=ktmk@_tIM_u4$,j=9x36txUsDw8X&N}qv');
define('NONCE_KEY',        '#-b~ [YB9:{J]yF`dg]Tsu5=*ig(.8rnF&[e^U*+7a-KBUjp0rhMOOb*id[@!v@B');
define('AUTH_SALT',        '@aTvqWj$2fc3awbjO-!#nOmX+yhBkp<h<er-?JKCYjb%lH;)^15G@E%+)=W|fI!8');
define('SECURE_AUTH_SALT', 'u:l1zgT L*p6Ooi3qpJ5V~vq75]/|UiypW23u)|u^7w 8L^T;cta,MCVD?><cjit');
define('LOGGED_IN_SALT',   'C+Lc:mhQ,XWLI5^Q~m*}?Xt5?7+Po-WN5F>lp4+d#2xi;r3~[(U>u24k~pSiV!Cm');
define('NONCE_SALT',       'U&:d>E-;^r#|N{c@5%@=E&v|hPfZ,$5/ :P*#ihW1U<Z9pj8vVm-sg?9O-atAr{$');

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
