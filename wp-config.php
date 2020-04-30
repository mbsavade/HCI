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
define( 'DB_NAME', 'ms' );

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
define( 'AUTH_KEY',         '~^!,7y@,v?<-~azPr|t2Z,hJ>Rn<!Ff!/X(76Oo{ ?aOF#uFp5]F)Y#GG1w2!#G=' );
define( 'SECURE_AUTH_KEY',  'C cRe-no*hjB(2,+BDb~QO8x8W2XR=Q3?g SL.M1P2]OZDKC^7[/v,(p-Y3W=%^r' );
define( 'LOGGED_IN_KEY',    '>fPEunH),SN8:I~POJ:-[ $=/}$9uP82WgZ]0@_Q S*QLDUZJ>R6u(<hUQ/@(roq' );
define( 'NONCE_KEY',        '~EBXh +%N1KLC8|e<l=,sqj0[};]>}D7]*0Q>e6j@8=_1XyvAVXOaE<Ni,#L~@XV' );
define( 'AUTH_SALT',        '$7w?_ZV3EI(1(!O@-bPB?/>GS/|Qcn%Db%f?uAU1BzA,R]@#(h-1(B{R;m5?A3oM' );
define( 'SECURE_AUTH_SALT', '].r3;cBB0^}tl{9YgL`,S2GO[)er_&~VE.wqsC|E]OXEe%c+AzW6S.aq9I:YC;|^' );
define( 'LOGGED_IN_SALT',   'lL~DhB`v:=at?ui3OW0%&EngC*8&6C(a.QZ5{QCG(P-o8 1<KNAaJr*E{8,X3nr1' );
define( 'NONCE_SALT',       'N#e1 ?:x36wvoN.^Yx IxGp[1UBf5M&Saxe#`$202nSjZdh~<RGxiQnNscdehTC-' );

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
