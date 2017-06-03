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
define('DB_NAME', 'valerini_wordpress');

/** MySQL database username */
define('DB_USER', 'valerini');

/** MySQL database password */
define('DB_PASSWORD', 'smetanka');

/** MySQL hostname */
define('DB_HOST', 'holoholotales.local');

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
define('AUTH_KEY',         'L,*G{P3V4xLK[*jJPI#R].#l/(%Q]]A`Z8/TE>Gu-xu+/&+<F?):+m!!2eiHFX)R');
define('SECURE_AUTH_KEY',  '4mx%GL?WvL~ _7Yaj%(di>k/gc @;Lv+nHTrlpkYyT.b87QGj?xPXSshBc{5^,P<');
define('LOGGED_IN_KEY',    '@I=B[ra*H(8?rjV;!RT*M4=OI&QWdm^F[UP|A[|<}vwb|pfll,<;k^DL}ep(QdQ:');
define('NONCE_KEY',        'c{j<3g74t.9O:jIT=-47U+6!dE R:J#.XWH/ctTkR3PxKj<XqdNdkNqU3{_zz{_F');
define('AUTH_SALT',        '/q:s5.*L5}l~UUqRPN3`fQd:zwe-W(IxJb;0c[jlCkdb1Q77G 5^|Pxx*6LjE_]M');
define('SECURE_AUTH_SALT', '86mY9HK+_2!13$3ypdJMUp?Q@g)B} LF3wIcDgbZlcjj=<ieQ;8h;k~eO!#blb/A');
define('LOGGED_IN_SALT',   ',ol*x+5NnJ9x%u,PQ;:X8]Wcl}NZRpa7MuZpL(PrFE/>MQl;tBH4B!A!`^,>F2r~');
define('NONCE_SALT',       'brHw91tH!MeVmWdnw6e;v)9w+ZH#z69-8SRFYdP>w[,{eVPGDB*`@AdC{MK~P}$z');

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
