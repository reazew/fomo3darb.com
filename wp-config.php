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
define( 'DB_NAME', 'posh4d_bd' );

/** Database username */
define( 'DB_USER', 'Jonas' );

/** Database password */
define( 'DB_PASSWORD', 'casabranca' );

/** Database hostname */
define( 'DB_HOST', '192.168.254.162' );

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
define( 'AUTH_KEY',         '4Ou!__%H{]d@Gi*/H;`$%<w#Ld/CV_UT!A0jGXVF{5UW8sS`|jRU,1a8ELa`G$3T' );
define( 'SECURE_AUTH_KEY',  'DdPd!daKy3l+l7;%]u{-2?G!qUL3l2#2[>6oF+#i;6MSl8~oEK|r48~~NF;USe&y' );
define( 'LOGGED_IN_KEY',    '%YA#pa`rjW5`3]zUpG%=aq9.BM0c.wxR2AID /(8NfDCuJLz5S7RNN{tpnLS?Ym,' );
define( 'NONCE_KEY',        'y5`z}zSW(uIf(4|V(8BccgRIiu][c-Q^uJA~S$,nh9Ca{hj|aj,q,Mn,:c?Jq3Lz' );
define( 'AUTH_SALT',        'O)t@PdfHQ#QDOX)?lXG<<K%m]H+;+@wkFK-tBk2)/T,8,6{74eA9 O.[b|{MM1v)' );
define( 'SECURE_AUTH_SALT', 'k*NaR7Q0~]:wIZM/tevy6_?+EwL,xNONu:E-%Qb[hIa^Ije_0:6GrM^=q3eP9A>>' );
define( 'LOGGED_IN_SALT',   'd&M_t]^2<C<bK@@:n;|2,2Ngv%J(!3:AV/>4cp%XKo8q{SoE91|c0OsU$}<mJ/m6' );
define( 'NONCE_SALT',       '|TX#]XBt!!R}OR/z,X~n6C7(]s%Gw-sMmF8G2Wm^?|.>HtoJQcFy;$|9zP/y_>.S' );

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
