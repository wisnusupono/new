<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'coba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mK?K9+gq3nAc^2;;j68=OYpVz2fPGP}]#M/(e3&inuVS5g=&*D9yj9B`u1w(|?,*' );
define( 'SECURE_AUTH_KEY',  'AvA=V$G:/=l4zH)!%*N_j*}%u;X5$1`w;n|cu+f?i[DVe-X*hQ-o}8-LTP(d;9)d' );
define( 'LOGGED_IN_KEY',    'd8ud@Y!M0T!bVbmu{.vqFN(dI2Umme5HtzW>+Eq>|#.z6@!*N(4kyv!2%=SM8~OA' );
define( 'NONCE_KEY',        ':svg:p$z[rD6 w@SO=Eb&<iJHO&Tg1/*~J7Bx6[]MS?j(KNIXE_6{x?H6MlVu,_{' );
define( 'AUTH_SALT',        'dUJWLk:.cvo3a_hEkmvuy &8n4$)qk]/7eZep&C;/sJKw&op%o!}RW*0WDZ/J@1J' );
define( 'SECURE_AUTH_SALT', 'TRBuBqq-M7[y8{Y#&0jXV[/=w-t6`,D1Dveqi_jAZDQ*6Dhy!Rb)g,C%kKkf$$uX' );
define( 'LOGGED_IN_SALT',   'Im?xC1cd)nz7B<lT&/_=Pz=#3dy$eue&7LQn5j0&?#qKKM#VeVYBuN#zzo.q6}?f' );
define( 'NONCE_SALT',       'W!!n*Ws,aOVyjxzO?`I~`OVv^Hb)Z6q7<+HS[_H}{iUi1MvTZz~U;$BcM4I8elCy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
