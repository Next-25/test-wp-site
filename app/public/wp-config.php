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
define( 'AUTH_KEY',          '.P8Lu2veSfHF>,0(fVa 1;qa2.{cTBI}e&`1`0~hB4lp{}b5i}yfcrS6*VXFJ+YR' );
define( 'SECURE_AUTH_KEY',   'X2eqKJ}U]quQi.$Aa!>0(`lP0TQY?1r&MqDk.|?t$phJ@j5tzu3a-oZ13aR$kkUR' );
define( 'LOGGED_IN_KEY',     'u}E~E<,m^QE8NFu,dSe:,q)F~D*rqpuISikJqhdLx#t]<oeT[ie?x9?oL_&xtJh$' );
define( 'NONCE_KEY',         'w6=K&DaZWM1,[xdr`l`*lc;s60?lk{X%us:VBm[!7.#QmH|A5+~|@dF$>w^-Vq/Y' );
define( 'AUTH_SALT',         'KS])LvKS~]p^wYb}=Iz|qg4`A:,XemrO(!I&7;*4PcBA&m+AzvWy05aAe+Z6 ziw' );
define( 'SECURE_AUTH_SALT',  '&aP.9Z<Ue5F}PW?hY>ZukQ0T5<!X0bP6Q;nMf,Fbr,f:|[buTKVFGus&#j4D0`r.' );
define( 'LOGGED_IN_SALT',    'muq;WOK p4;)(]qz0wrlg(X&.}Cu1Kl6vek)^5tT42bg,z>Z9QZOnJV-NNH =iC=' );
define( 'NONCE_SALT',        'vu_#%g*vx8i<AAD]I_s~$(0=uO8{aXXNST=b#5lBWV;(8]2`HH!(g>Q{i`!^aQuw' );
define( 'WP_CACHE_KEY_SALT', 'Un3;xBwB_)LO_He++H[UH `jRcqCt;=aM{J@l13D&fhxYV[sx6m/5.B!+y<xR-|9' );


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
