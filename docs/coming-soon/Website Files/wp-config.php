<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mandtglobal_com_sec' );

/** Database username */
define( 'DB_USER', 'mandtglobal_com_sec' );

/** Database password */
define( 'DB_PASSWORD', '4F6A0WZz23JSZsMvZ9WF' );

/** Database hostname */
define( 'DB_HOST', 'mandtglobal.com.mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')bCtImz![Ip PEO4>p{88j>q6JlOp6],(?l|qH+q6tSdZrUGG3_$T/F!5so/B~|S');
define('SECURE_AUTH_KEY',  'mx;K+>e/z1on=EVhT+yzcVyy.1#7~FA]|LVE/e(D{t%-.|cJep,v8_8byW^siSAR');
define('LOGGED_IN_KEY',    'I;QO&!u#,rDNT_A,o=oLnfBAf0L|BS?8Ns!NB&{/16.073[tW|5fZ64BblWrP.u^');
define('NONCE_KEY',        'C{|i}RhH3Q$X6:=v-F!o<3rZHs[=J=<kW>6T`@L O_[-v/Sey)TvfCAP8AA|aRQu');
define('AUTH_SALT',        '!Z&cf!gJ6u0ib?AODG/G-[U5]v5K<D<Ey)x%M(/]zD14X`+)^#.?41-fJ|`hO07(');
define('SECURE_AUTH_SALT', 'dD%Kx}yn+ox&a3&lb*y2,-%g9_^}(jf8#7R4(Qq:I`BB|^1{K/>[:IB`BW,4jS63');
define('LOGGED_IN_SALT',   '<;gV6{uK537Mzt+8k.SEPQ&Nkn+F6j{z%Puep0]l-*(No-_;J=?s6(tDs4/$2w+;');
define('NONCE_SALT',       'I_RBlls-Un}t=lq^|=`&q]v #^i3|B<;2*N.7#-fau,3rLIpMP8tRA+eSU owHE{');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
