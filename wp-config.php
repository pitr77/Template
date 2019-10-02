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
define( 'DB_NAME', 'music' );

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
define( 'AUTH_KEY',         '*P(`A35ypj|-)?q1s,=BcI/] P/e(z=HMF`?oM+ZLL(2FwC#&$lv=orkIU!qwD57' );
define( 'SECURE_AUTH_KEY',  'ze,4G&QypgA6.]f]eG3HJTe=h0U}<|f#EMZ?af[5j)-LdNTt7|T 6q@a]gk;Nq*t' );
define( 'LOGGED_IN_KEY',    '5)7xSl0h |K=#P!uGWHi(i]MMvm_p>Z]~S{iFJ0&R9KYt8I`^!i%ve4EECE6ocfW' );
define( 'NONCE_KEY',        'c.RwTNl:Sg$:;E9{MC6auL8jqm9}9BK5xQ#G75j_@o!qP-D 7#3/Hy?j=SE]HW7m' );
define( 'AUTH_SALT',        'mPFO)VRG*@J&-kVm+VG;DzoG,GYpyMh`4o}ytT&vPtVbaVhB9RcXKv7Gs!9+vZed' );
define( 'SECURE_AUTH_SALT', 'VYi|lpT[i[#RcxPj6AK>=vp~%>(Qhn$a;]-50HZ~3KtTMd}eVX6P)[io`+o${=E=' );
define( 'LOGGED_IN_SALT',   'w[L4/K>M4UsT_oJ](wfNS>9Y(JutS@>/b(i6FEd^,JIz9c*BA=k~Z0dwc},>u/>I' );
define( 'NONCE_SALT',       '<Q01RfQB&v6{-d-q@ L!$2{h|QH;.PYoQ$@]EF|<Piz|uz=;:%Z+he<6?+V&I(WE' );

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
