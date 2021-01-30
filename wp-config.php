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
define( 'DB_NAME', 'lanternelectrical' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5D,EiWue}*ya4[pI2]XL:1OgJy^gSuFaixZA{}A`zco/hmSJr;$sG,#WokQ|W3hg' );
define( 'SECURE_AUTH_KEY',  ')`DGIgv}OA$cz4cHARz=B .AOA{]kWv&4Q&SgHn&7#YISug!rh5UNcx3l(t:K;RV' );
define( 'LOGGED_IN_KEY',    'EYn3/Syd*?fy9[7>Y>j)!56O&<vNz{5xl(%R(!R hmF<l>}{;.21:b.j>/1@cY= ' );
define( 'NONCE_KEY',        'In??f,(@&;90<65hGEkJF{<$)L8iN8jm6{C=CQJ@?qnwigZdurZy]+R8*=w(+U}j' );
define( 'AUTH_SALT',        'DK=or:h:xg(1zqywa{o]wK.Ud4haMa4F@hh4[+eO*[C>So:wPGOEAZK-x?cZ=Wmw' );
define( 'SECURE_AUTH_SALT', 'Y<@m?|}1O$TqlB$^]x4NYpmYSwQW{9p<% M{I jdS7pl[[1[{W&sBdNcTnCGZvkK' );
define( 'LOGGED_IN_SALT',   '(EIhn]-un]aSYn{3^LQ#c&;5Q.a|fnlpm*a3qfl?pG&!F&y[^o<Zy&l+:XrF|jf*' );
define( 'NONCE_SALT',       '&b%8)xQ=)N9ru1*YB,xFF^UjimgZUvpg7=d@XWFG G3OUX#rA1Y+^PrM.*}}Lpay' );

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
