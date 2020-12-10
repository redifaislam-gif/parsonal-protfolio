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
define( 'DB_NAME', 'parsonal protfolio_db' );

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
define( 'AUTH_KEY',         'nVf$3iM+C9A _iMk?YiOG>YH}>dJ2C)/@5J)JXQ*TfEi2+s-[+[~#X]bYe7-gVJU' );
define( 'SECURE_AUTH_KEY',  ',o:&^ku9ba;H]rB<C{RS+)(]rH.mVBk5{0j:h@D~G)Nb,t?_*h7LC HV;X<EI]_B' );
define( 'LOGGED_IN_KEY',    'U839CA(^M{TMs`]Y9q#]gzQ(2AaVt6f{|%RsWA`6,Cy?C.jwj<XtCj3Nn(;MA?c1' );
define( 'NONCE_KEY',        'M[23>ZAC:h}N,8V>A6Ta9!fC@8j&@!;N}hgdwF~fDE^3bJbZ;.`pZ*GXc/TazbLb' );
define( 'AUTH_SALT',        'cuEdq OBq7OZDk&;XM43*ADW9}By]-#4M3X9L[5;?RJM-l2*tY}TQg**7b`Q9+ik' );
define( 'SECURE_AUTH_SALT', 'BhYt5hbk#2gWjZV|SU*}p`[=$y3G=(U;!rNNklDP6?-@oxr`oRHO$z=;yOw|yh[|' );
define( 'LOGGED_IN_SALT',   ',rtoU:~NTjmNv8>vZ!q*= P3;$qy4i9Sy.j46uelH=TCp]EK7G/bK[0q/x,R.&1R' );
define( 'NONCE_SALT',       '6A#$&]mqb`8,+0ai*jGT1CV:UHA!*<~@},L6MUUC39!YmtxIsN[8i[=ag <Jdc{P' );

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
