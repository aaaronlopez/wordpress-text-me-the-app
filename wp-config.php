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
define('DB_NAME', 'branch');

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
define('AUTH_KEY',         '{(uiI|mSw)wkx5ngxALo.#fVS|7ad+oy0CK(=c&Rgpx,Tup12Eg~K_x#a?2%GpH/');
define('SECURE_AUTH_KEY',  '}Dk6?Q5?+g}yF>q-0eY+elod$l.{,jXgX<^|M=&W5f[&Ck>&U)l9;JmS{Uz_}I<A');
define('LOGGED_IN_KEY',    '1{~45uiuD%bQ(IkM0y@e}6JLT-E,HGBFEK%5T_p#(!^x93^WB;i%&PT&PQN1_#{h');
define('NONCE_KEY',        'I#Z9Cjk#njJ{hJB@;m&/zgBhv8Y-CL$iVGcN iOB(NR,>-CPe-X4gx>_I0O:9GM,');
define('AUTH_SALT',        '41n[!TpGO6Te+VLKB$RdQ4AGAl<)[b~tC(ST{D^1gLw:;%RO,{ke._{{j)!+t(eo');
define('SECURE_AUTH_SALT', '?SpCz7k.%=)8-at(g|DS0.^I `n}+7hC+tGK;7w2G_FB6(fd8>U Etgn$|`3eEnx');
define('LOGGED_IN_SALT',   '(r(z@-Y4[md5^H8)#h<mFsh+9kpE&{f&/pSu0l%!+9<Rv#&E6M-~]YBL~64/A&f>');
define('NONCE_SALT',       'Q~gM%L[kXZu[N!RDPNe|7L8^XL4<-z8KM-q0+0:+*u5g3t)93VRmM~q|vQi[,E&l');

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
