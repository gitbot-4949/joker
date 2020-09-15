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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joker_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q&&O+Kn9/6}LgakA!sA1,;T?d;R/o_F/`/<tzk= t]T48XgTQ9Makl8sXw1UQ[#4' );
define( 'SECURE_AUTH_KEY',  '?:x4Xf)#9$s<8ec`;(S!i~,=}d9pAqNg&V0hHFEH|n%rdCOnXv/p^ .E}QD6frP6' );
define( 'LOGGED_IN_KEY',    'W!zgT40 ^&-]SB-Ou)V^U[9!l7pWa=_d}R!JeW _AG:sgB6Xi&*TUg_Vm8qit^d_' );
define( 'NONCE_KEY',        '^[|m4|<AOs85@HHhcMXh_Bw?&$US=Tcq>)z^/{uDVjN7Unp~:;|1,_qRW{^R#ygx' );
define( 'AUTH_SALT',        'k{Tx4^@+1%]>Z{8S?,F28]v<JSSt]-PA6j|5-3o8aZP}c9tr^f#?[;x|gmh_[9C!' );
define( 'SECURE_AUTH_SALT', '-y8g!x8.TNz8C()ALfSJcc7?LbSSW=C!hD/[G9{%*Z=j{/=!%!;:WHg.Rejkq$fC' );
define( 'LOGGED_IN_SALT',   '{gDth,/#$YJ0B1Z,($c0x-lhaaQ9)[@*c7/9LT_rCsrd-BtWceJ:xXa|.;UaP$U ' );
define( 'NONCE_SALT',       '9TN%3Fy+WNl}I{/^f:5Xw!k8&j.pUS7$[}*&?}N@>)b=Fu?Mm>ho3uS9BbLq@2w5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
