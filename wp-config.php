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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         ' &XRv%%<]rPt,QOh3f0jh<9lJb&mxYue1wOW>rUwJ *<JS,eF?zK7IF_mA[?1;T0');
define('SECURE_AUTH_KEY',  '[g3Q/7Jl)W`B:N+<j3aPcl2I%xb/O^cyy;fiL33znx-c#{=SJCs[zuX#YA>}Nz~[');
define('LOGGED_IN_KEY',    '^ARN>KUXzXI}8|VHv1Xt1RIUf$VOl-UbCHSxJle|Yf@Tzd+@PICl/F=zy02z:L{n');
define('NONCE_KEY',        'vbG*3by[*X<w*E4xl|Jh}OnK6__?_]s+$IYeOfBPOlPXz(}uGA]RubKO$k8`t{u0');
define('AUTH_SALT',        'WJLw~N-o71e#p4~ym%V6CJ9oF^{B_=c<~HJPLMcS!oI|d[jAG!|[9,Vx8KRo71>B');
define('SECURE_AUTH_SALT', 'D.,l[V5p@vB=:ElR2eWwyX}eqeZBd> mL`4DNJXj}/2n4P:(^r#`n$wLKgmQotVj');
define('LOGGED_IN_SALT',   'ND-S%DwwYgeAD;|lEqL/d*gQ0B1rUh~cFF H|JA=Le{7C]YGB^f-dJeJb98Ypu0`');
define('NONCE_SALT',       '2naR~1#nV#Tyd`#;E!9N[=G- ~2He`XJ#|%~2I~&:)K-lclad}xg,a6f_o@QGZiD');

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
