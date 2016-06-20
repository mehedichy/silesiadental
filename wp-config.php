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
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('DB_NAME', 'silesia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Wt@cK|r;QCarbWua+I;.[.bI:Yur^a0/3.#_NhEdx<p4V(|<)]a{:%$@* Yx:V_s');
define('SECURE_AUTH_KEY',  '8aU,Z&Woyb{2F(0!&O5WhSvA+z%5Bu #DZ&zTPc[8h}!sMmIlE%EH:CPi4|H{^lX');
define('LOGGED_IN_KEY',    '0@kTi?pd}Iw1rql.G*.6;R>2@^A][G9^B9CqQ)5Fo>0+lg0)FZ?Z,cRpW$kG<;l3');
define('NONCE_KEY',        '5_VifWl^:jvrQ}O(P r3g`M $`]5^Ql,[RTI_22tnV^mB LR`(UjC~z(0`P?`G>u');
define('AUTH_SALT',        '*9K29ERi_dBsZ`aqs3Rp0*ea/>YUITmePAb;ADQg3e$ja *I=dho}RX/xvwl g|F');
define('SECURE_AUTH_SALT', 'aw6g_zh<?L1k&30A^FQ!PbuCGAB&{CVOd-~,I#~1tL=7@3Kh4tRM5[fHC$fh%F<R');
define('LOGGED_IN_SALT',   '&=O?GgVYM)G`2s<rk@KtbW;j&j&;2xh[3M8G252_6dz)Mj<Tfnw5?(roxR-OcBY4');
define('NONCE_SALT',       'IaQmCWf8i-l_gK~f-F{LMb/gL0hbe,o$0ctke5,ayxsbSs v0RfYWQ:nCGG;:]p3');

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
