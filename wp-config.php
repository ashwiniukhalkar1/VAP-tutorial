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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Jg)]412Vm 0l&3dBI>z%[^s|YbP<mKS8:rmEv`z.bj;2aGm0w&$Bw+VaPK2iL7{F' );
define( 'SECURE_AUTH_KEY',  ':J=Hq6lmeVJ*40;sO,*~33Bp3d58FQ&l_X[JGp(cw*c4*f,jak4u^#{M-3(vseZ(' );
define( 'LOGGED_IN_KEY',    '[%dLr+/Gk/ihwb%^<U+g(2O{tX)~8eGSu%~u=BK|kj Q|?rpOzv^bdz}Ma}mcs}Q' );
define( 'NONCE_KEY',        'mB,?OO(G~8pOYXR%BWy1x6rwl.f2 #; qUP0K<X,5o1O%,q}0SL|nPT5I[I9>>pO' );
define( 'AUTH_SALT',        '0TyYQgQ_?c1G4^-w+k(/oR`__M)fWsME(6Q^O59LH@8J@4s}1$}8}v.&vQ4HGky$' );
define( 'SECURE_AUTH_SALT', 'W&<jm1N:EaYy3[Jy]U^;v*Ay}2-x#COQ-R%&,pmvzH+jwD{`sw9`39QzRsL;r#;(' );
define( 'LOGGED_IN_SALT',   'BBuABYB<2vAUTULo+|Y@@h6yBv*vhr/JJt8BoM_X$R#YnvViP )`]rP~-n{cFrkv' );
define( 'NONCE_SALT',       'R}$uqzrU,TlmH6mABzsm~Y8=|6aW k@l9*-`n=Zc?u1ehjA{gRDrIP`t@uYm7LN&' );

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
