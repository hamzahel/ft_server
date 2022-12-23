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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         '`mSdrl64n9kPSa:%F/4z6J5.w|&?UJ?eP1uY1(Fa*]x#5F^iiTM?(8=5OAO`X<c]');
define('SECURE_AUTH_KEY',  'hfe)Jo|oax*Et +q|cF-DfgmP[h&NhXi+I(79f3_?en~f!)4t/5L|r|vBD#Ar?qB');
define('LOGGED_IN_KEY',    '[Z[>A_[ryz!cHCUD:-2].)^Z+-2StP~oVtBW9Lv7:@RNRoaXT{Vs*}q5-@r-uzKW');
define('NONCE_KEY',        '^wC_@JjQq.=();X8]p/wPsQQei>/skHl&[5$-+BEoT%=cUX-ja|>&n8Qm;c|;Q-T');
define('AUTH_SALT',        ':WG`FUT1Vmi8u~ Zc.-|F-s?lv7fCO<?{J[dr_|yttF(k-yEpMv+HBjD^@+Hqoca');
define('SECURE_AUTH_SALT', ' Q0N*/Do-?>_Tbk:w!8ZK-1t`w_NDe1&m9X#; nsF0:--E^snBz?B/BU3nAcw`yt');
define('LOGGED_IN_SALT',   'EGxGy29 tmNO,nV>,*P?XnDIr-k&~I+ P`7,LaUz2QR(Qm0*Zqv6iDbr15#nQ,NB');
define('NONCE_SALT',       '~/`PqQ+W6EcKugwAlbx>|@,iQ|%H^l8[(zv?)T}0[+|||xK+Enfy2E](o0u3)j/l');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
