<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qtest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-UVu18U0ID2P)!2IjbLOW9gU!BzC#erUP01X[K^J]h7TfUEKz76{flF<LHep0t$f' );
define( 'SECURE_AUTH_KEY',  'LSn{lV4-PB@DCf I]Du`Yl+DwrdLp0H7^j~Wsl8p{NH@#z1#&;,7(2!U}<r5K^v{' );
define( 'LOGGED_IN_KEY',    'Wx<A44(BAA-PaZQpYcN<JXW/Q`(96bOnz}E1+`BUFa}tAPyG0AN#);}_};)gMl.q' );
define( 'NONCE_KEY',        '^UrmZqze,CanHy#_{O=*8?}#v[km#vO< .e8=nNkaY^l:>R)m6khS=m6%_8$^3|b' );
define( 'AUTH_SALT',        '=XS>&IMA&HGtX<<CgG0{@+z*vKDlmxq2XKQN>3)N47KnOwE6~-d+l[ nTv(KwSFa' );
define( 'SECURE_AUTH_SALT', 'Jn|^<L;LYt#.,x9O^0FY[f>OJ%FSmuMpdVS:!nhFh`p/nRh}Oa1i9ng#K^N6h,iu' );
define( 'LOGGED_IN_SALT',   '/@X?y~F8b2$BJD#+~t8QbzTkAR 6-RiTepjw/o@y??BVe<CzLi2k:Ui|;rRY?+S$' );
define( 'NONCE_SALT',       'hHy>)]++0.5GR#2[aM0 P`)K=Vz3A({B[C2)ZFk~HiG6(#;WevI:L`XKL.;.3_]<' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
