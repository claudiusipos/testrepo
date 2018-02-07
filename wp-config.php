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
define('DB_NAME', 'kravse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Eaa&1uGcv$fPCITqeOM.A:~vMJ.JTJivkl5:d1T+wNN!J6wKdjx8;Tz5D$ur&B2{');
define('SECURE_AUTH_KEY',  'A,V;#CKXa2cPD2?0k<CY{3`,67{}[c`![5I[6Czg(0qM>r*:VT3bqgZlJFi?{(TT');
define('LOGGED_IN_KEY',    ',o<kF:fePovCx:eAi^E,(|P%KwI7tWVkvb0mH^2Gy/csAj;gCr?HUW,:JKfq$m8d');
define('NONCE_KEY',        'SdbFTY*{*nVDmU|)J_Z*R>p8,cj![/hxda>Em3n/4:~Y&64bddZ~A:P|cf|. `~-');
define('AUTH_SALT',        'zh[U39;NxD%1]Z.q5!nOkda`7[#xCo=cc{!vt3x[5rg>d^Ikkj~A_TPSQM1{R||{');
define('SECURE_AUTH_SALT', '_:`nxA0(`aL9TK|$#Gy7tGrw`qr]Jz7yMr_],[Wh|fB$#vP0Y2*MIz47^;8J7&$T');
define('LOGGED_IN_SALT',   '5XL{JB{x>4A6_*6<C]jOC1zJbD~6%{5F;Eqe>`}AtW%DaGPI`:hqp 6r}507GHcP');
define('NONCE_SALT',       'AajT3|8}H;#4QiGNg!s.O.s3j)=aKB&3oN7AIz#fM-}cE3&w**r9(28+UjePP@~7');

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
