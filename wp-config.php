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
define( 'DB_NAME', 'quicksort_db' );

/** MySQL database username */
define( 'DB_USER', 'quicksort_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'quicksort' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'U.9$+JV~P&ztrID$]XO@ur,ubho*n}tU#U|}{pz8M8br:miJqNd%:My3.&O~Q^YZ' );
define( 'SECURE_AUTH_KEY',  '`L[K4-A*{emLb}&MGd9uhM;`B5;};e#l5g`6I*&_RR4O&_+WL,#f|J!#TJZ*VqJG' );
define( 'LOGGED_IN_KEY',    '!:fT$SO[V^n20]s#lfu~&-[vE5xqOX?!(*wg6r*m@/Zmgp7l&?CwcD]6--Sp[Jr~' );
define( 'NONCE_KEY',        'P6=@/Kekq$y(NpA{1kF0P`s72d>NF>XDp[2hjwzkD;;L#Y<{Qq9n-MJy%yv7}9X,' );
define( 'AUTH_SALT',        '4Z<]<NI*ylwAN<{r@ jOc] OvU^,h__0{2JD2-EW{cKj83AW,q;xcaHCxw6mZG.Y' );
define( 'SECURE_AUTH_SALT', ']_@(u-hHx1:qBqb_QP<zXEZicWNs->?lxw6h]77|W/].-Wyrf^YLxkv[6lk<L_w0' );
define( 'LOGGED_IN_SALT',   'uNf:F:@LWXr-[Q$Gy`MH:-c$z 43?A[8tZ%**QU]@;2z3YnWwd$eA-o0)>ba$:PM' );
define( 'NONCE_SALT',       '%bzI|;;nm>IZ(q}huF?0?x,X2J?KAi-Y%7P2]?zLr}UW&Yr+T9%0m$JiqPS:[,:;' );

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
