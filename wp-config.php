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
define( 'DB_NAME', 'aquamobile' );

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
define( 'AUTH_KEY',         ' (KSK;cn/xgf{XG&yyNBg>,:$VJ:bO#9FTEx)t`$@<*WRW/Q+)(VM@UDXUEid7`>' );
define( 'SECURE_AUTH_KEY',  'W@?2YL&_9kLBBltqk:!Y|dd$,HBubf&%>SptV$r6N|TFn@#)w^P%Q7-t[cClz9#:' );
define( 'LOGGED_IN_KEY',    '[s@>l>LY6}b_7`h5~~e@`4Liaor-<;9gf9,gw?$YD*0tF~Gi{3itccI7Vf+b|piS' );
define( 'NONCE_KEY',        '^#T^kmyg3#/Fkt_}MQ;9.D1e:gDe1;EQzv6sy-3wKiQ?=4ZGyMYI9qn=wFb`,q)n' );
define( 'AUTH_SALT',        'uzK9N0sJ;eL(](<;XnWg9{{l<HMIlxZw0#l+OUPr{^)Fr%:|uWVzU#$.;)(yaKj)' );
define( 'SECURE_AUTH_SALT', 'hHSiX`D:xOY]x4pIX.{*k[!C7=rqh-Th]Mx$a%Y}x(#a{0Y;mT+xJ``6Ut$oIzq1' );
define( 'LOGGED_IN_SALT',   '$]},YoiH|Z?&1.T!<Z<_+@Mj~^c|k OE}TZ6^ozA7sr(o4aV#0m;)EgA>E!rXFSm' );
define( 'NONCE_SALT',       '$v~r fLezwncHp+/s;?$X(,n<Gg+$sz&D_C:*|DNUdW%2wT=.i~JC ?DT{NI22pY' );

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
