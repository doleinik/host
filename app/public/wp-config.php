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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'aFY3M9mQZOX/K?`W-ARnbYqrE-`e#/s%WY]P9_@ks|84BANi5qzQe<!W`6<mPUgQ' );
define( 'SECURE_AUTH_KEY',   'v_2|e^~=CJbT*DC1qZ]7S+$(>lu|o62*_tnCyplH*jYqI._h[sg;MuX.QEmCP*3j' );
define( 'LOGGED_IN_KEY',     'cbs0(6d+VrdDmY*5w,Njy!gd{LdAiv~:Q0C*XxRO|!shDB6~wXrYNmY6;e#&YII&' );
define( 'NONCE_KEY',         '1=*RK2h:5AB^/?J1=vdI!&z|G67K-#>Tl8]k=.,LhC #hFgU|+T~L.Xe:?tR4$dg' );
define( 'AUTH_SALT',         'T,G|t$P9o)|GBW20<BPM9Y?`eZ_rl+)jw^9bJ0$,lbt.4!|=q>g[M_Iz7^Tra4Bg' );
define( 'SECURE_AUTH_SALT',  'w?JM8 QS5oR$lk@7AGAb|C@3&K0!.UvsVB~w>C*mJo{^h+WYPaB+SMGB)i~<?y,<' );
define( 'LOGGED_IN_SALT',    'g1J~3bh!u8{TiW/6]C1S:o=bpGrU9$ 9OA4_*%h:JhKWq%;5MAdm?-CS^n]f>r3X' );
define( 'NONCE_SALT',        'Iutgu]Ug:,2/q>Qs$%/Lwgl5[_Pt!1#>6`4jTedzxyzbzoP}YUS_0-+k-#ZhVl&*' );
define( 'WP_CACHE_KEY_SALT', '&;+4qm_m/xn!t_Df4;eN<Agqd+;T+7*@.~) +HG?M+ZN^Uubc(jb~Q042BjfL,cA' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
