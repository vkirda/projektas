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
define('DB_NAME', 'projektas');

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
define('AUTH_KEY',         '$`jJAXjq2=Y)Z+6`P4Q?qAbsM}h,?Aqh0^M.Mzrr:jXl<*Vm{uSS[wl/`wKxCvU:');
define('SECURE_AUTH_KEY',  'Nu[je73%z4LTpA4-T~|:r>,BfM)g#1W:V,{{.Qm)sIt!eiCH+)DgQs>i0o_~;itW');
define('LOGGED_IN_KEY',    'DmDhTmKPvu4CdwNng#F? h/64ut5D6$KQXmVRGt8c3)t(ai$]qWY}BG`EINOq@Nj');
define('NONCE_KEY',        '[*r=UB`xjjT}KB5OW^U~=#>HAK1*-F.v)~`GF1RnJ[Z]DKcRpI@dAfkjf.gHpS@7');
define('AUTH_SALT',        'MT{Nlf%kVTh?Z@ie^c}XTv7s{`9:)Ohg~5 Ww|U1.m|_`&}19R1+HY ,-KnhBGaw');
define('SECURE_AUTH_SALT', ':)*.69E:+ocs}s8605C;4l728V%fc-#q[0?c(rQ3ff1MKW*((%^F}cbU9Y#jm`U.');
define('LOGGED_IN_SALT',   '.u6f`fBn. AW+k>=#>{#+ERRTG5Bo^}-uL>!Cyr*5DwvM@MG!Ez$g9/bM1?6X4m?');
define('NONCE_SALT',       '&+=DbG95>z_P0Lnu-yj<8y]D[Yegl]4Y :^Ut},hG3U:_W]6T-2;S6%]{GT(,(@6');

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
