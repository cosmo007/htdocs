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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '@iI?vATa9/ri:b{#d6rAi{[Quxvp$jbu$|;W(}a7EiVC+vqibE)d-u.,a8mdOLi6');
define('SECURE_AUTH_KEY',  'NJRkYxPp>lI2ta_OU<1*K_bm _b*zOUC/(9E)XK1Q_{MLLkkzDl47P*(J<t5nq.b');
define('LOGGED_IN_KEY',    'G(,@BZu-eiw(!tZf<Xw]UJwY354Zs2ZBf!o8PWK?wG,d*5b!O+W0rNz~PCCHrY:E');
define('NONCE_KEY',        'b}vN%H,fIyo,.v]S-4x]Mk,g9o`OBm Cp$Ra--nzv+V~2|3*W:rGDf)+v7?w3oBf');
define('AUTH_SALT',        'XQ.YR/+[:e1ue_y9cHa.L[u!ToI_=-g$B<G|iR*%I6PYhgYQ-& 1[+C+]|tL?_b=');
define('SECURE_AUTH_SALT', 'ZZ*`&+%ZFtn<vq!y D*O)1Z[Gm*AS4W?L8B){-^~^e_~SY^=|;%?qR&IP|>2N#C^');
define('LOGGED_IN_SALT',   '(7_xnRgKmb^Ceca:,1AI`FnAEr|.|:BUPfL61/:y$$^}^&E[;Utg69S*D<YGgc~K');
define('NONCE_SALT',       '`bl`].CXix#ymH+MujB__n3+Mc(Cw[- yJ|,UEtB-36`,xp4iS4Tlqhd[d:J&f[j');

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
