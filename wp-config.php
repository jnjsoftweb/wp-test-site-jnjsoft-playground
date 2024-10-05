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
define( 'AUTH_KEY',          'kk&xbUMKoag7`M9EoL)u+&&DHA{rTT1p!6kESs577L)2TKpuGT)g{r&:%pncr4=S' );
define( 'SECURE_AUTH_KEY',   '<y~vp30y6~`iX/X&qpl=;}V~_C4BOl84]0}WPZA{7&@G-n1A!lv_uMvRFLv 59L8' );
define( 'LOGGED_IN_KEY',     'L2K9Xab{!&#;MB%=u6*v=;uB-z^WYOQcD(PB%;_^,Q<k[67G~6m8o>5m1/}@OphY' );
define( 'NONCE_KEY',         '?v%j9 %uQ4t~p|^SV737Q6;!<,VR,Dul%uzn1$J]zWq@%mn2n|43<]_l7RD&C>&}' );
define( 'AUTH_SALT',         'L/+i8zQ=TqXdp-nNJ/jA*bwRmNnd&@?^R8V50@$6kFb%Q+Fj BETcWiGj7Z#XwwC' );
define( 'SECURE_AUTH_SALT',  '@de4.cz[rlIM|lNniL;`qvvTUY}.$8#a.AeKah f%ul(]}O<?G~t*,]:h 9Cwd`F' );
define( 'LOGGED_IN_SALT',    'M&(E2TMlrZ*_]?i+^B<y)LU]ya5t:ZGT*TGPQsHE-.J!=|%7rc.6]}tYj%b<iitX' );
define( 'NONCE_SALT',        'dBAb]4l##>ziYe*g+^*nNqCA cMjq6}Y1Wzu:BvRF?gP,_u=R||mNDe{g{#Tolba' );
define( 'WP_CACHE_KEY_SALT', 'zNyUbKW9CfOD;dMIsJVXUg+^fQ*qtvl6F?=x@8+obD>b/Twl%_9fM+Nj_?/{W5%z' );


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
