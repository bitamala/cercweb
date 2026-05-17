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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '80ea58da86908897d38c86b6f888fe42f564413c15f099db' );

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
define( 'AUTH_KEY',         'V76a9f$SB9uwb+pPmq@GfY8(-GqkM*c.h M$[rv,>c/TBAneoMuhE6(+RbS:@4}H' );
define( 'SECURE_AUTH_KEY',  '_I}_/RV5RU/XWqVQc* |n>]r2}(/rrJ;;w/Za%cnyHMAyQPOPi7>hIiC+8%rfV-z' );
define( 'LOGGED_IN_KEY',    'N8Lw&^h}i9/?pgmF_:[_KjiLFjkGxQY+C5F(8eA=Uu=X89j09TzJwUCE2t-W3X^L' );
define( 'NONCE_KEY',        'MYN08,=NZPS B% fn3^nC1x^b[`e|$_^btqYZBUYM5noR#YN?M3npg~2Ld%xiZE`' );
define( 'AUTH_SALT',        'g_U; [qk5lCP~u&5xmF$%40wLgIt{3:[;NuugT.<6_0]tLQa&6.CHw+8Y0WF NQ#' );
define( 'SECURE_AUTH_SALT', 'xt/%OcvY2sF]HIv{M7S&3oLsZSo2/a;B%05g-57a{,Ps%K{rXlrlI2H=4AHzNyM_' );
define( 'LOGGED_IN_SALT',   'VOUkli $?aZ)pztNq9U=gA8Da&(!Ds|S^%E<:tjY{ea2Pw>tvTAY5G2a+H}5j1)m' );
define( 'NONCE_SALT',       'RxFM$;U^K@9l{0Df.,ZNlc-[rf/8e~/U}a00ZXUC!FM_sQ_Wn{Y#IcoO`5i[|p*~' );

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
