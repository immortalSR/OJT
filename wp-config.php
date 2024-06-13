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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         '4_+CS0k/g$~xG830l}HQ@b%8O:8 j8($ndfv!]>|maBs`# c;qwt4%sa]+@}tx0#' );
define( 'SECURE_AUTH_KEY',  'Bc1qzUnpTwXl(Z,u%^f&ZWOp[^|y#Zg9Y),(y&:cgudX:Lph<h0{g|K/O,}g0@].' );
define( 'LOGGED_IN_KEY',    '8hKyt8r&+A@ukXekk=AUM>q$kmN[gx:0-EaJj?[(zr4w67_*,/X_JATU}{5OF{vQ' );
define( 'NONCE_KEY',        'zFWwSfljk^>%)Q5!rAgBVI}O6HQ.I,QkS{moN?1(LDnQgwu,L%%<d!Cyz@ Q>C/r' );
define( 'AUTH_SALT',        'lQg=fc4_>~/ db`LgTgZ[_>g.M<{&E{[:u BCvo/xd_U9Ru1|Fxc/?DHSJ8.3~y`' );
define( 'SECURE_AUTH_SALT', '84dLXR]xKb9E6J3z]<>OXv||]mL-W)O&<a9RI7`gE%488!:n&Do)q nxd1IR>s<v' );
define( 'LOGGED_IN_SALT',   'e>no8<Tx<.)]SI=q}<M7.HJF!j/D46AV1<)q(@z_9{$uJJo:t[GHFjAD7V9NJ{/F' );
define( 'NONCE_SALT',       'J?a1z7T(8oqz~R6j{|:9Bl46_;>S+6kDj?$blSxONmdsrsttJ~+ae4)!V5##HBad' );

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
