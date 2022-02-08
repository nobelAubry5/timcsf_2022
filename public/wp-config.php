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
define( 'DB_NAME', 'timcsf_2022' );

/** MySQL database username */
define( 'DB_USER', 'timcsf_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'timcsf_motdepasse' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '~zycV>(-Z558Mh8~@3hUp@zO,-@n*OR7V@(F34 ;k&Jiz>Dbvn0H?:#=x{8HXTgP' );
define( 'SECURE_AUTH_KEY',  '3@Nt3)#VSl% <jvq#$Q$tz<VifH,t4T/7(rj-j&9Cu]}.[)@drJLvXO`[eqLWD3x' );
define( 'LOGGED_IN_KEY',    'RA@xy&f6KXdX[?L1fZlnX:s0TK;?T!(u-1J^>sGdY4(!ij.Tl&>TJ_++%a!`@neS' );
define( 'NONCE_KEY',        '37]7O xYQ74ppitmjhkwyLSttMKA!qBQ%20vB:+whyVdi`TX,%I78ifb|zoj4PEU' );
define( 'AUTH_SALT',        '(L?KUyZw41H*e*Od3,@(zLupOC^b&L5Uo;-:~1IU<RU_g[cUa1I*/.*j9gE7~J4 ' );
define( 'SECURE_AUTH_SALT', 'KU|2(~X9ha{];FHk_i3}x6.LL:O~~5^QED}UY<v5uA$q8XS&M!e*xX=JA jyWiB2' );
define( 'LOGGED_IN_SALT',   'D1Rj],=a8LM`F=X5.AO~):*lC:32;a-(|ar([>^NSX>oP=~j;k(`^?`?+9V.D2n+' );
define( 'NONCE_SALT',       'v(v4pF@sAa^LEJdK|wl&7zlsI{iQ:Mq~q(}r(2]>fplNVrx_4v3V3YRqNoto6@=d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tim_';

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
define( 'WP_AUTO_UPDATE_CORE', false );
