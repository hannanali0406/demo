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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress.bugstech' );

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
define( 'AUTH_KEY',         ';Lt[-@0O^(QQ,./6<TCe6ZF9ZF;!B<d8uN*:#7zfh|$gwYx!o{Ooaf#_$tK;k%S(' );
define( 'SECURE_AUTH_KEY',  'Yu80?$XU3sg6N+2bb>@aqCn-L|k&<O(X?D<k^TE~#{Ggnj&)xRBE.?C%bSuyL}R}' );
define( 'LOGGED_IN_KEY',    'q1;~XfQ:H@n;[!V ?:r6DYpj5-~`@-4UAsI!H6|f(^9l~td{5VbR3r){&r<=0`%$' );
define( 'NONCE_KEY',        'aMSgH+WgN.[x+U5RgEZWD04d0,g]#OnBW[6Y>_aZb%y _~g~OCH|fM5G;j+CgGQ<' );
define( 'AUTH_SALT',        'fIOy_[9p>&;PY?WqfOavT#ELdaa[N9r~4^.Cpc^exCUf%~8VoP1m39va>k(hs@z+' );
define( 'SECURE_AUTH_SALT', '9 _k^@8fv7coh.16:yJHTu6L|;_`%tAsj@ipHKOKB^c!dCS)zLPJ+q=je[N@/kEB' );
define( 'LOGGED_IN_SALT',   'Q,B@ 0|Rm{g6jIsU->8$D%9G@w|XH4E{9;on=(>q(uG$y.`Em_h_&8gR9Fr&E{P/' );
define( 'NONCE_SALT',       'UPUWeMRo9)1HJV-%UC4d{Bv&LBH`aT;5$Mz6gUatR:Vv%Hu?CIeC!X>udBp4(A/]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
