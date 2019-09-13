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
define( 'DB_NAME', 'photo_theme_db' );

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
define( 'AUTH_KEY',         'YT&J&wnhd1BNv?Rrs4  .v)KaTZr`?UquL,fhqMC7>cC`QQfTQvAOYIw%#>qT5te' );
define( 'SECURE_AUTH_KEY',  '1gG8etxjQ[};~}~C;-[wp}GDvE>qbK;$oNL>5N7o6cXDcDiBT75FVw&fBrxc{0>U' );
define( 'LOGGED_IN_KEY',    'L2ns(62|UsNEc8ZM15{89/+*UBR(]as5|_chj@oi*A?y&T-|d_?*oV~jkUF*/Dj0' );
define( 'NONCE_KEY',        'bhEh1d)xEP>IN*l9yIYTj]mG<g8-c/wT/2ec`j,Jt#cU)Fzw[2bVNQ:XTwknxeJ`' );
define( 'AUTH_SALT',        'D.W:5Iq&bbc-K%{sL__U`~mI#+F~M*Tz-F R3us+?9sK3#8fS*E%]AfgiYXYYQ?&' );
define( 'SECURE_AUTH_SALT', '~mR?hU`XP/c]xG.;z<iZc.9}G>kfF7{a+>SWTk^D/Wps)nFV{(V/*i4%OXS]Z:|Z' );
define( 'LOGGED_IN_SALT',   '8<pPj|Or&X}r[K.i,CZix<;6=NE tF]_ R&|Uf$Z[}:$6w}P(KBdjmuX$%@ajm/!' );
define( 'NONCE_SALT',       'DS!-%-5lr0y7^PsC~d}fc4{^{?^U6b7Lf<n|6}G9mk #2vg_cAz6HKNd:GI lu1n' );

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
