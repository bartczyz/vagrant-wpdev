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
define('AUTH_KEY',         'RIll|k(2*ma+Hq{Tg(LQAA=9,] Z]mLsF}U(G!sf,>;zs~j9N7KYFU`A6aQgaziO');
define('SECURE_AUTH_KEY',  'z2kH8^b9,UD`n/=cJ`oc*T|wx)1JIGA7rlW6{9DN4]-=#dz2e_ugo1~/]IdJ|X4.');
define('LOGGED_IN_KEY',    '%nt7Kvo[=U%hw%QFx_Zo?=S+r`tIx-_T>{UNA!+({VJU},(r#R@Y$- VrD/o}^TK');
define('NONCE_KEY',        '@@/+T]&F_bGzk)>:9v?V;_gNrwN#YQa4}_RkP&=O}hMaNO$%t!*RrOOy>Ji-V<@H');
define('AUTH_SALT',        'aeF*]4Q2[+m2IeJiZgkIeE(TNiBJQ>J8nOm@p:_Kl<!_le?jSRd]|v/r.(>AvQF6');
define('SECURE_AUTH_SALT', '(_wM9=3Lh}UXqd8v2Swu$b5<-pvZ*u[-wZZr?bIG%Ps2BUo%a2V%lukOG1bsH3Z?');
define('LOGGED_IN_SALT',   'nb!|O`Q$xyiV*IHGYroy{QxV4nCrdxjC6Q8fgG%::D*L]9DVB<|jIF3i|&#~Jg3]');
define('NONCE_SALT',       'DOd|BI!};owCtBQ$%7^?xMq[x5%^7IXrH<fqFl{1BiNIoq:Z0lnlC1ui(Y80+#,L');

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

define('FS_METHOD','direct');