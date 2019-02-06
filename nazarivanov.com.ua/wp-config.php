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
define('DB_NAME', 'nazarivanov');

/** MySQL database username */
define('DB_USER', 'nazar206');

/** MySQL database password */
define('DB_PASSWORD', '142536a');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'E!9J5ujvaQ!6y*$dr=PHKujyUsc9O@cLXH]{6.CZ*VwJAk+Qu{!?)uB 0|nk$UGy');
define('SECURE_AUTH_KEY',  'lJQ;DQmH`f(IH0~QJXB$xYF3eb}(P`b1K#uM6saKfpxq]KXFTO[p^;5sqC HH?2<');
define('LOGGED_IN_KEY',    '5LLT}/-N*x)mV.H$<1cWU`x9}hES#;ywtSKE.Dmm(}ml1f1lV%o>8wG(6[8s-%_h');
define('NONCE_KEY',        'A%a!~p$CF|(Q.]mL CVsJ<O{1s&mf>!Rer?mx(=?t;YqgpBtEUm:{g1(:Fq<ayX^');
define('AUTH_SALT',        '2,TM|@CvPh@QlN!!y!(B`%DQLEx.#&Ie_Hw(a~5Kf^eFzi|4tz(1K,[^&WQ&F}Md');
define('SECURE_AUTH_SALT', 'sJ<Rg?Flvr6CE47-~q=?qT xhaURty1mB&I)1G/;OcNsMr0//8123f{7thla;XZY');
define('LOGGED_IN_SALT',   '5]b(?T:P(x|zd8&;M~xvF:RAQuNQaB 0g;oe:LULh%,^si|[|fr8:~6lf3|=B6Wz');
define('NONCE_SALT',       '5hOWV;?kN2]mEIa={2.>&6Rfp[8*r`TbdM.WSzqiaP&Eg%PqyQVo<q4kTTf5^3 ]');

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
