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
define( 'AUTH_KEY',          '`dG}&S5lkXs~L{/gOK&-JhkYH:[2]&pma4$ZF:M(q^X1-#iojLsE3~:wd&dE8I}S' );
define( 'SECURE_AUTH_KEY',   'x[6hI;><#>HyycL8YPxaP9AGxm=:+!o`C?<i=C.vS?0m*?OxA%#Q9}1[Ifz]rh|;' );
define( 'LOGGED_IN_KEY',     ',S`cRh Q%EuxLslAB@9y^F.#9OMaip7<{{u;T8vpR|%+HM0by~ Gk,Hc9A,ky3_c' );
define( 'NONCE_KEY',         'fTY&0Y+p!%Cp3Syx91 Tvi`_pWc^77CLVnF;6iFldlbF.Z>S~^H^s=+6,91mN2nu' );
define( 'AUTH_SALT',         '1p+xdpqdZ ]_#2$csE$ BIVhbjW[/v}Q;O oD<Q>UwP)u9<UCc$`3YY+x)VAQ!+4' );
define( 'SECURE_AUTH_SALT',  'bZm]US>TNg|<Xx#Bn:MC=PuDt9J[8|qks$t/jYyZ02G@HpRh1kuSe<z5,Hk9KFx_' );
define( 'LOGGED_IN_SALT',    'ohgd>aViKBlM/ulzNRW*lAfGU/Bo=@UgSwSfMRJUc7v*v|i<-vn`=pQL>w~Chy2!' );
define( 'NONCE_SALT',        '-ru<p=E_.=TVa,!BMX{$v,)tD)?j?;b?v>R-_1&x<(>u]5sO*Z:H>(Z[Z^mgG][h' );
define( 'WP_CACHE_KEY_SALT', 'YIegm/5m4tSv x9/e?UY~*s~j5;c-<t$(+_V0]gE<qUuYpi^/-UM%l)0CJb`KVxF' );


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
