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
define( 'DB_NAME', 'choir' );

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
define( 'AUTH_KEY',         '_gaCqjghVv*c8w>UA=wUED?CiGoH B_,jN!tJeAp+Z,myg:+wDURj(jsOAi`O[UE' );
define( 'SECURE_AUTH_KEY',  'Fsf5YXQooWlukR}]i]d:r6N{CH}{},zb9e4K;cHoq5^5 |E~UVE)L%)Wg~PMjTe;' );
define( 'LOGGED_IN_KEY',    '`h_cX8mW;D(_dXgb2}$l9f8*q3 mpcO<@Whf<Ct}L<9w]1[l=dYs;)2Vi.y=$IC!' );
define( 'NONCE_KEY',        'E`YY4LOU[X:uk?0j4sK@fK/O[Gc#V,ZQUCD~gg<s?+HR[XFF{[{MYShq?bQX*+,Z' );
define( 'AUTH_SALT',        ':bT[IGizp|vq|<Q+4V,1XrUcfY5<)69>SSyv&f3E(=s;U.B+xcZt;bxOm#_Y`n@(' );
define( 'SECURE_AUTH_SALT', ';4O<G1J@XW ekPoF8&+B15dT!xSD%x<|q&65+Ee&w*@b<tX)%k=?!xQ q3t>5JA2' );
define( 'LOGGED_IN_SALT',   'jz/)eF&)ny+~ofd{$:^w!Z]Y=ZhFQEbC*L-gG]GR C,T[$oezk.D{lJ3#B<o1q~Z' );
define( 'NONCE_SALT',       'Xn[cL-f&bH0PbE k@9lS$3KJ>1-t~T7E_07{F).yw7R?D^mORn1s#-XCtkT{~8^0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'choir_';

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
