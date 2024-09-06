<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kite_under_games' );

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
define( 'AUTH_KEY',         'dgDx=25l>u3EGlnx1^4U?I3?X{WPuEa5{{DZ-@=F+PfntDT92g/J0*Rs_(j3Sp<`' );
define( 'SECURE_AUTH_KEY',  '|NONO_aaKCP6Vg`,-gJO?a:J9gt,:H8%dgZ:%2IM( ~Bf?6eq_FSY-uNztV8fh%o' );
define( 'LOGGED_IN_KEY',    'cr}T#NVpeeF9D(zL)$2MSvGNimvHb&Yowx)uQ<A3C:=^s^5Gfee|H-oR;@.`Dm3u' );
define( 'NONCE_KEY',        '+2I:x*:Sx(e_{TEd$T.wkl6pRV-~jo}YsH[qnm;6*#/oJRG6tk<8+oWBaEj:`--d' );
define( 'AUTH_SALT',        'kO_[B-$dxQTAj.wjyg&++%8cfpp/J*pf~*g|YlA~7[Vfzn4PMj!KeCX/O@d%AR00' );
define( 'SECURE_AUTH_SALT', 'Fg!&Od#*MC>k3NVde-h2t.<Mhz`IiWS5fsTC##}]/qKOW`e^7tfxTZ|/J;CMRARJ' );
define( 'LOGGED_IN_SALT',   'um(dv>JVELP60u+wwR,Lq(?p*3@=h=0o 5ZrqBbJZR{v>G,P+N)L*2m!p-:1:|5?' );
define( 'NONCE_SALT',       ']!OGuL,v$q?wtat%GMB*5J0),ua^kELWm(LITX%g(;j&#r|R-:&BUYCPS}qp,P-l' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
