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
define('DB_NAME', 'wp_brainds');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         ';#o@FCO}dQ_L&S4)0^M5Vs=^Nf@1P0loOia5~Ns&,X:ux}ftH7wzgi@r[umc6CLz');
define('SECURE_AUTH_KEY',  'tMnYXmw_oZU=!,&L0;+NmMn<e/}Ij`sF=eEtH!P(2[v&.up^E]HKkL%DI`YJbAFO');
define('LOGGED_IN_KEY',    '.]3AhXHwZTYor}^F=76 EZFhjdF|4+Te&ihc9{{ a/@Cxmw,)6cI]W %O3x]TJ#z');
define('NONCE_KEY',        'bAdYR-=-i|s4%W`{~cZx-Y2rJrJ=IOg&>A#ajPGq?(n><R(UuAWg^nuEOI6oKQ44');
define('AUTH_SALT',        'rBK}D-e;caBb2y@<PC<sW=D}-~0a<z~v@AD6SO=-scMd Gc=5_fv{hr+~(%p0uN[');
define('SECURE_AUTH_SALT', 'nhPDUgtuR4p_;GV gOoDBUL_94TstcpO,6<&e|$`5;=sMKk>g>5GJ<mEHAzS[t8@');
define('LOGGED_IN_SALT',   'pZdu6 X[;4CP lxfD?Un[/_dhx;LC8jkOml5W@fPk8H,Alo+CeGIL&ZJ[]0/]rM*');
define('NONCE_SALT',       ',7avpx4^Cupc8!v4rABg=JN6Hne(sqU;djX|$U;*Z(.1jvC-G%u&T#~e9>E5$|;j');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
