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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'desaku' );

/** MySQL database password */
define( 'DB_PASSWORD', '1805021008' );

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
define( 'AUTH_KEY',         'ibV}6Eu3RkBEIkA/kQw4C=lsGg|P&Fe@0]SL*o7B%6*8p0PpF.yLR~^y>Kt`+g8H' );
define( 'SECURE_AUTH_KEY',  'snwV8F/_2A_e`7vv6$`U!5Iw(W1mcz%WxXZOpLx1B>>|4_5ZPVnaFjWr?F&YhV=m' );
define( 'LOGGED_IN_KEY',    'xs4R@j3(k2w.iE9K-,om-9c5Rg{7!q{:Z61:|1B<Rd3$U *J &?JD*N36J2xwv8F' );
define( 'NONCE_KEY',        '/uzXd+9;?,j/{ppf4Au#n.3o NX_#ncI7!/%zFR=A&jOU8C<ZId^%p^iCD^,26eI' );
define( 'AUTH_SALT',        '%l3?-b!3+9+Z/_&o6~+]_lGakA8G#VFpv1@Oe#>@^>|HZ@]~pi|!jt!p>]wAHunF' );
define( 'SECURE_AUTH_SALT', 'ZIRWrw8uxge=cWX(sRd *?p;#}D21mf.x4)+Xjd C<uz(?k5pQ%3S1m1%u-ALCEl' );
define( 'LOGGED_IN_SALT',   'hW U#?]C?Sm%_9jzs{-*Pmmzg2,za&2-O?;)fYCf5CP;v+L<vr8+d(@_S` *)gK|' );
define( 'NONCE_SALT',       '{e>wz=O#lUo= :dn%HzSGS]^G`zdH7;h%+D`U_{(o}k`xP#?!=2Toqpr!q8Dd$GV' );

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
