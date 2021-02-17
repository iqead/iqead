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
define( 'DB_NAME', 'iqead' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Site@evosany@1815#' );

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
define( 'AUTH_KEY',         'FZ#D~g4>!#quIz)6KO}%}O,kMz4t/=>D&a=RCc*>h62R$_;_VJ=R:eeCid;`!H,n' );
define( 'SECURE_AUTH_KEY',  '& rCeThHF9<8>h6EcM~xtze 2K~a96c7CHmtTmtNU!T#bT55b8h(I-V/Zkjf7R%(' );
define( 'LOGGED_IN_KEY',    'hS?QC76Mmq-zslz/8E|C:9 Gz[GA zKoF3wV?{A8d:DlRg9G`!{FxLGC3ck_;#+C' );
define( 'NONCE_KEY',        'g!D^UZ8{bk1xvr>Gr&vQ-~<!UQz9tuZ7A>)<3pqAK2@s~2]E^NYE/oT1%Ogf$R8/' );
define( 'AUTH_SALT',        '9bQ7Ei@ng+nL<6dX%vs#6Z3]io3!(v:8U/Bg#kBM&ifBNXk3kn13V{q>R%Ys -+3' );
define( 'SECURE_AUTH_SALT', 'd=e`3~ANoNeG0nUuPR=9ZyrIPb:$?!no8Mora!R]4$I&:tAxq^m2[msH.4Q@`Q=s' );
define( 'LOGGED_IN_SALT',   '{)aP|3r/+KnZvb)Rv0}u,b}wW&%URi~PE.ta;c?C6huMOII~FIU6moHp$;Xz2T(B' );
define( 'NONCE_SALT',       '`b-Ix-f/xBVsj@?s`rmr:P?ZKm2~5E+E`%qf(t8YW[ZR@;q-[4s`]s+m)%#X*3om' );

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
