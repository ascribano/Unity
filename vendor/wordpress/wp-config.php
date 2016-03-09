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
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'b1g{UvV`DXv}1>mBiCAhR0*11C;zhWxKj|ZS^L~`NQid*ir2.>e9VaM2TBsw)pVS');
define('SECURE_AUTH_KEY',  'OI/OZs?,2_7t|%RN*fBVxK|bHKTJK.|Ehlv#744atr!C. nP=f<+HXTnao6q[C&-');
define('LOGGED_IN_KEY',    '|<Exr8uFT=MN|8o4u)Uui+/AF{~YH(> 8LY;~AVortFD73>Q(g]D-^X_D68E:b@C');
define('NONCE_KEY',        'HX*_*}KF!r%5=k7Mhb!D-kO3fNX!7N&uZ+;-wl46e);_ZQPdq^SKb}CE)|D}l>[3');
define('AUTH_SALT',        'DG}=avpe$!}^IY!2Kb$q(Nq>.CW/>RxgqfW0rqq<lM2^}uQ5@-y$Dc{}<av9EwqC');
define('SECURE_AUTH_SALT', ' z9(JiUtna@cdUG86AHs{nTnSD5OTv-}+!C|Yr%;H89[8>)Opax?6-gi%OXAW.QU');
define('LOGGED_IN_SALT',   'xnp*EpmlU(H&W<-l+?F<`Es^:L Y~F~ nc>Km4n;0zw@u0+kLj&y+1FB<rug8-Qk');
define('NONCE_SALT',       'nt9Jh3k3r{Q]w.Sur+fOH)&a.iCg tP{QUbu3_y~ ;Zk.IbjoK,n~@Zm]0BA/aVR');

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
