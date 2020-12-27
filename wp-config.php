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
define( 'DB_NAME', 'theme_db' );

/** MySQL database username */
define( 'DB_USER', 'theme_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test123' );

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
define( 'AUTH_KEY',         '|(]GKp#KTfD0?!@*(xL7<#/X#(b(Ew7Z+-2K_&r/0x_{O>E=n(3x;*Kd,7X4kGKZ' );
define( 'SECURE_AUTH_KEY',  'cAe>z~>q8? f7/ZG[BX>Z-#xaPC6*wWF1MqROjY@oJ`b6Zcy#fMxb~QUX)Up^CU!' );
define( 'LOGGED_IN_KEY',    '!o[V<}W{^!o[!TN=kIb5/iurP@.po.>#!>6A=DUTVl(VohcEE<C%Ek+_$aVSMrZ}' );
define( 'NONCE_KEY',        'CN> b4dncDgw,bss&(Z`23.yz:yk/h)5K~;<-`R_6Eu8g c:g!*^u$zLmya}kuG(' );
define( 'AUTH_SALT',        'V{XRh 3i5&$m_{3CEcR`f3}i^[i3k-Y7qO[{O=Iue_hIL,_,M Y#g3Cv[2A`(|p;' );
define( 'SECURE_AUTH_SALT', 'm-C1,}K2,rd^zye1|brC(<(sXb>&h:s#0a#>J{R(.c{1)=g=@uh;{R&.=fJ$EPi}' );
define( 'LOGGED_IN_SALT',   ')i1[je^aADIY!l!zvH]&W$rDygQcnpIQJ9m7rOn*4y&1E::v}4w@].f]YXp3*S8p' );
define( 'NONCE_SALT',       'zDI*M#u?WZ{086hRYq$`$Rz}^n?.,.TWb{i8mJuyj[1 Q-O_%Ax/&tbZ` UX||zF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'th_';

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
