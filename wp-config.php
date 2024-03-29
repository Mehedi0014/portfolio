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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'N;3]?2d.kq$2Ct2o[Gb2S,h{9!&OD_O%At8D%W5ots]y;cq&3@?Z.Q{=bw>#l,_@' );
define( 'SECURE_AUTH_KEY',  'Y]jO:;B_/BOPl.DCJ?:U66-BPJ)FzPY3o<-A#*~nPN.Mn/3KOYtoSnG/+H^ltU&/' );
define( 'LOGGED_IN_KEY',    'E;WLU?SD=QEpp!(}M2#{j@B8__N<rOFhRg1`1!&#H<]R9FM)am/i}<ArTGhxObWE' );
define( 'NONCE_KEY',        '{iGY$`}7UtI`H]&QzW<}i8]k59^tSW[{!JT>BYBYB99<rxd$$^7T?<a-I3=M4}!J' );
define( 'AUTH_SALT',        'cuKUZG%J&f0P|G0&xCbKTqH0|iS%Ih+p-SBS&DSr8_}rH[7nr#uxP)t] ?N[ZY3*' );
define( 'SECURE_AUTH_SALT', 'y4$;aymsko%fJ7J+tU*0$Cey7$`Xb|5aNo,2Fh9MLP0gv`De]fq24>}Do.7fjuV|' );
define( 'LOGGED_IN_SALT',   'o7%FbklI][+7`X`r;4bkXE&5*?tOs(9|C_H;X$O%T!~Ug%)-mrjU3][qPjj6-DvN' );
define( 'NONCE_SALT',       'WNy{xh  m2H[6m(hr}=;Ez)R)v+roMb#my=]hg-xhs`Wl,Ma}/lBWjp<Kn,Sia$&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mwmphs_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
