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
define( 'DB_NAME', 'eduzerdb' );

/** Database username */
define( 'DB_USER', 'eduzer' );

/** Database password */
define( 'DB_PASSWORD', 'Admin' );

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
define( 'AUTH_KEY',         '@nSIlK>TP>xRF(je9Qx?%yr=ndu: zq^y-[NRL;l)?*X#hzAw>MKl3mv(]p_D398' );
define( 'SECURE_AUTH_KEY',  '{Z!G*?1w%$|cVa5XNxoP3!L&Xp&X<2r2fZ4`$X;_xQI#.NIWa7,sL-V75<Mr qBl' );
define( 'LOGGED_IN_KEY',    '46)oco!x0w5]e m$Q<m=W<&5/4W+fC^SIQ3vCv0^nX;{=8uq87T;GCS(s1NtiM_[' );
define( 'NONCE_KEY',        'Tn(FSm7>aL(-?ms5`c70+}*8&~%eX>VcMOWVu?!%>R/2d/*4T>OV@`mk-CqT, ^n' );
define( 'AUTH_SALT',        'pGHyZR2s~%ppnaf!g`Jt%B=lvKLOxZK_0J6JXxh.A!7);),H-pnPMGZ/I.nv9BB#' );
define( 'SECURE_AUTH_SALT', 'Q}}TkO=+%dF]2,Yi?_QTXXFm89A%CzjUhX)=JN!-{b~ZtIt3Mz9 n*LjdZ_%WoD(' );
define( 'LOGGED_IN_SALT',   ':L-8BHl*9<N[iIu;H1b`7=aELI2P>sCLV>?ik!QONgU>Ow[ZvLB%R lkd|;BG7>b' );
define( 'NONCE_SALT',       'g4p=L[!&!<#}S0Md4,u~h95(/5<_>iz:ieQilL[N_nW]6ujdc$fDBk|i]{Mg[oR~' );

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
