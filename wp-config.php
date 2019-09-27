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
define( 'DB_NAME', 'awesome' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'y^[z/1xWk{-DS35A<b_HvD^GO|4*WnDCvdBuRhsIcY>AF77;_vPwC}J.F_:L<U;D' );
define( 'SECURE_AUTH_KEY',  'v0Iglh)yA&u`$ec(nfpzMW{_tC/z&su$>V?$QhuQ#:Zj*y9]&n}s:)Z7?>b|4$-M' );
define( 'LOGGED_IN_KEY',    'Td;eb**#w=/h4N@X&7TW+}*=eKOQWh;kTch^Wl6%TNCQ+4A4p&&@:D`;xUJR{OyI' );
define( 'NONCE_KEY',        'U[!oCD[$|v[c)f%D3vd;xAXI,%Q<C)G{T{FB$;!R[z?p*aF%*EB)z}u#Z$#<eK:D' );
define( 'AUTH_SALT',        '<ZH>BtR09,]5Qj/YNC]JdMD(nq-=Oh6/M0&rlj6fV>Lb6]dQ-5&<{O5Jn2eQSL->' );
define( 'SECURE_AUTH_SALT', 'y)W5KQLOwFY*Kbrn!L,%3$2eEa$bL5tl@WnIKQ*~+?8[>Y5:J~UbOx=G_53Nv!n}' );
define( 'LOGGED_IN_SALT',   'YhZxw}Z}o&K5#I7*g>i3`? M^R^-@:{:4>Pvio:am 2U7j^82{BgkA/7))OaFTmv' );
define( 'NONCE_SALT',       'D!#l[HC:ut!eY{w2K|Ll9F5%&>d?6N9z/9VWuyGcG%I^9Ev.pg#()YvIz%#@,hGo' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
