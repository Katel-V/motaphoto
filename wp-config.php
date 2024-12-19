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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'dTHcUdfdVqYI.MJZL}mI7(YxbbpbKsy~2=rO5?i5y[0-wSHa`3gq)has.`dv7h[v' );
define( 'SECURE_AUTH_KEY',   'XRx V/VBaF5!rt_k&;~_:N$J+&:*32Y2Ys>.qd?=xHh`GY.fO;~5Kr*FgQJgr=K!' );
define( 'LOGGED_IN_KEY',     '0&(}!1mNKlMi[{FENj&:b9Eg8EESJ4|5i!`=rrtwf;iSFagj)/FW!/T]+I?e)BnT' );
define( 'NONCE_KEY',         'aZgUE{|(N<Kxrz;WOfT^s{D{p|y<(zIcFl#9k|0)/Ytg|t9JX^!9I3>&]cLoli2e' );
define( 'AUTH_SALT',         '*OXK~y#EaF|KnZ-w0jC/ @|Xu|;o}h!{-6ERd|%|,ewqvzD0p|J#z]2&rMy;Us?z' );
define( 'SECURE_AUTH_SALT',  'iyYnRvun54GhJxVJG(N1C5zm<MG*-93~LSBZVC/Sb8G&S!pRDmH8W?z hEFQfFyZ' );
define( 'LOGGED_IN_SALT',    'G%J0S~l4(50k#O7Z**]3/Y})AM]^-Q!dH8;upSSniN_=VGU8WBYz)`*P<pV*2Oa]' );
define( 'NONCE_SALT',        'v+k_2-)V0IRGEP(BBLXSX6u~Fp4$ZXhGnv]^%@)>NzB$(4`ZI)#M4ZC#jtnM0SJ/' );
define( 'WP_CACHE_KEY_SALT', '%J-_~}}Cs*-6F:99Ozdn(<tu|uHHV<ysD*mQ(bEK7[] X%b7*1XZ1Q#E~tgDf[^8' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
