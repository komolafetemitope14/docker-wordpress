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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'wppassword' );

/** Database hostname */
define( 'DB_HOST', 'wp_db' );

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
define( 'AUTH_KEY',         ';NQO|k%V|A=6*~L}:kyA< G?GD#I/!}H:>8jmRYKgQe6Nq3!Liu_,AYJzLgVA&av' );
define( 'SECURE_AUTH_KEY',  'u{]qT|]p1#Rx({]:fg _2w0Gx}VU~CYzeE$b(Alb W$Q>FR:l;Uh5VoI;FPan@Zq' );
define( 'LOGGED_IN_KEY',    '%?&YCI{yX0[$*:1%`>j;}L!8&#n*chs:S(C9dNgD) Kj3[}_M$)f.F#s6uR]qZ/9' );
define( 'NONCE_KEY',        '_5jiN1uvd+72?D!He;azU?m_Adl+^-[D#8f8JNW;7jx1lrRL|E0XTcRjR{4NsnJ6' );
define( 'AUTH_SALT',        '5t}%,WDb&?RcQ6,&BxVfFevK`F99P0@HC>/PV/|Cf_hQ90RJN:,U_A9B7m*m;o.p' );
define( 'SECURE_AUTH_SALT', 'Z=eu8LyTN;xrI_dvK)k!}+Wp}x-@gn)KK&Jr2C|r7jlX>&ZlAWI`3J;=5#0l3-h9' );
define( 'LOGGED_IN_SALT',   'KX/sbJHR,~E|>2XCT:E4X$+T.o?a0EM a?0}Vusf4 ]X{m5&1JGXiVWcTWwX(@/n' );
define( 'NONCE_SALT',       '>ru8lh-T-+$iMg$v#(+Z~5DhPNo)Uyk34Dr6ZV8b/yV~CH?{P%IXTP<?;3/P!/(9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
