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
define( 'DB_NAME', 'Soumajit' );

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
define( 'AUTH_KEY',         'R0N!{{r;s&T3m(+dYcT!W/fu5@D!u-nzn`Mb60&TCOC}jb4,|o>H}a `KTpsWWVK' );
define( 'SECURE_AUTH_KEY',  'y!ksT,Mv{oTT^ZVM@b$hxmz>0/=k+53HrNXnj=#;N0=Z`1(*Kcd2Lf&]g~?*82){' );
define( 'LOGGED_IN_KEY',    'U2lMv8INH4GV*lbxf}=ML<Pa7v _xVfcbt`3n+a}_eJ9Qg >9Shv,+uU8=XNeMub' );
define( 'NONCE_KEY',        '$$H00aZAe_Y,7=KM5IYd2!`?s6;NQLk7] 4F(khG{6_9!Zlu8*b@lM+=I=6fF0,C' );
define( 'AUTH_SALT',        '`<KgC fXX(9ps=Hkg!W]~&AvFD>oG?EO{ST)bucUz8M=|y=r`e-9`s TeFl3XgfD' );
define( 'SECURE_AUTH_SALT', 'hkZHgl|Nj5H8#if*6Bj#)qISx{sgJHcxCvbsu,}IQz8ZA?cR]>1LGnd]Um2qLj$!' );
define( 'LOGGED_IN_SALT',   '|^c(N!!{pLXiww |O4~4(PF@>G*:nz |bRcWxzUVbct.[q|1LD_1ilr^hm.SRfip' );
define( 'NONCE_SALT',       'HtBBzu}hH/R#2&~4A2F,Eu(GHlU:3rRDJ?~Ws7|.LU4:cC+DS%sV/RhOu#^t6YuO' );

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
