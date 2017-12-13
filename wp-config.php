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
define('DB_NAME', 'zs-starter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7+7WW{HSrhe Ge~m&i6zPsr^cTvSxv$89G|*W*S|[]%6S#5$K7/C0QOm1H?lv(av');
define('SECURE_AUTH_KEY',  'c5Rrezp##@w}w_$p5Ln_?8ANS5@gZUZhuJY6Ke%7#1-{z~FS(6q0xbd=NpzB/qV<');
define('LOGGED_IN_KEY',    '8}m>dErM<Z6k+w)E[pIXE}/#>O.]*M:i17v%_+i0AYC-#xfPEhQUBUhicHG~lUJ<');
define('NONCE_KEY',        '55KvG&~P{6Y16+t)@HX/BT5eydh$lFE/B]dS?>&X2{)&p_ICQj7?{P-{rA#k{?z4');
define('AUTH_SALT',        '|Op;o=}PQ8=xLGbc87D9<mRWFCIuNGW Q?JH51`kMAv!J-}lqa+>v-twWxYMw0?6');
define('SECURE_AUTH_SALT', '8Lt.n,NKT93ABTo|{s#S!4pg!GGbjWnT<aM2,qb=tWcAj_HV[V=J?Q@5ZwZ/i<s!');
define('LOGGED_IN_SALT',   'g3=+hrx|ojlrth.7g O9(&_fpL/arh?X>{hY7zBW~=|m]B:~8+Q5%N.1|/|;i+/F');
define('NONCE_SALT',       '7MPCB]yZ9>)%r;a>; +Hx#*>aT#*XSl.(,N$vB:)VeyD`nv{8)2M;QIg^}.W@UYW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
