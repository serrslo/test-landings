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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_landing' );

/** Database username */
define( 'DB_USER', 'test_landing' );

/** Database password */
define( 'DB_PASSWORD', '1eiBrJi9v1H1qbTB' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'J.->B}{.LEDV!NrhDm:{dST2Z>].6By%,A2P]#tM9zB9)LDOY{`wfIIz,P}4QH@(' );
define( 'SECURE_AUTH_KEY',   '-hsckG`E-dO][#1Cn)aV[HA3Q4l`*flskiD)iDU-`fMUf@cRW9/TEGPOpw+W`@&T' );
define( 'LOGGED_IN_KEY',     'Rtp$ZLe2$K5`eFO<~*HV99 6STf63xWoyMtJ||=^c^58N;FY<]OoF[ Pm;S!wAv$' );
define( 'NONCE_KEY',         '=kLkHBSvK+/+?R#HjA#1;6EqKpzQ5HTOPMn5i=jNI]m$4@Yv6M|&-z3hq<iqRF=g' );
define( 'AUTH_SALT',         '/Up4~L!;!Lix6)n{Jqa8)Q~k*T;r!A{4kJAY~$8V,P1)ni@dAl}O>,TYpz7L,:f5' );
define( 'SECURE_AUTH_SALT',  '1f78bP55E9kO|:}Eq5>_3ITVBe<*7z_@,F[!I<1gURe>L@^by*1T&T}b&/FI|}+&' );
define( 'LOGGED_IN_SALT',    '{K!k+s46<K0n7_*`K^& v@efNyXfOWhG-c. U@[[$sd?4J=Qyq|+s1<PtdN2PIvB' );
define( 'NONCE_SALT',        'P[-Y{i?%ekd*nN[WptRfHNZU5{9af}M?{o?, _L4a?K<P3He)N7~NX)aB{v{ Tu}' );
define( 'WP_CACHE_KEY_SALT', '~km@X@vf~1!M6}9-|fw&*R= &~BF{2^5B1:e;s.{m~]IraPIo@dzC08@@c>|Fh0n' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
