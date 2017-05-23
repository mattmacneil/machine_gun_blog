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
define('DB_NAME', 'mgwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '! TOjB-2<s?[rb-!PUg-r[JV%uOv8`fiNg3:ucbC6c)=8j-A,6eOFZR[<X&6~i%%');
define('SECURE_AUTH_KEY',  'tK[!5@+:I-CjJMd1L9r{l_>5SAss3#L pktzL2|`.i]@h+]E|35x#u<1nc:^r=&i');
define('LOGGED_IN_KEY',    '/@QgECU:{V,3MMwo |Y/b4G~.y5{PX{kUkl#t`*umo<ki.QvI:9&BsCg4i|GMi5A');
define('NONCE_KEY',        '@6Yz,E%8$rnU&`f+y+>HMd[^9>0Ft=yqb0`N6nywQfy-LgM#ZTj-|} .-0V=<B;B');
define('AUTH_SALT',        'GoO-Iw7kP-X5!]87E:cMf-0Q|tA1:4YUfDApL|:25lGg+/j@:GZbbG9BymRUe7!T');
define('SECURE_AUTH_SALT', '?C6CQi#$u%rnI=Mc+o1-@<@n6m(r0. 01+~*EFM2#eejS@DdT5Bkjb2jKN><a/f|');
define('LOGGED_IN_SALT',   'AM1bq7Q3SG7S?|mXfWZ~-[J?P+Zh1y!mww]:aNAbvNY1#x&F4$1!$UIC79+W1j]|');
define('NONCE_SALT',       '&J%PnU.|eXLz$H;CKPAr%lyKFBIS3Dd[ZT$-/(&#+{_ZvTh b~a=El}!OuR2#p2C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mg_';

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
