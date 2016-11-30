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
define('DB_NAME', 'nickbromer_db');

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
define('AUTH_KEY',         'Jy4JmI]?g;H+pk1-@hNDV~y8zCQF!w@Qi&Pl$z1;Q#aGA1]Fdb{}/c<OY)I+olNK');
define('SECURE_AUTH_KEY',  'YBAC?GoxOV4qLJD+O1_vy2RQiGk=WHI>sw%6HwD:)OWA+]B1@hZJu0W]A@!?~`]O');
define('LOGGED_IN_KEY',    'wVP6)p9fn]-c}|?Jt?^w)w@}*@B2;PrgbjR;:L*_TXR>bZ~.?,%>qU<Caww~YMU}');
define('NONCE_KEY',        't(bXso1;f.I#YEA(YE)XBH{dZSwNf+$&em-Fn47ZS2;6%Dm}:@!)a 7y`Nl&;CN9');
define('AUTH_SALT',        'aG)1V`1fhdJ$tc02a<< ,vi?h8]s.={WrCI_ <J]aT|%CfxP=]@|6g@s|w|goATR');
define('SECURE_AUTH_SALT', '(ZxkpI[nz8<QmV{T72RQ}^$*;v^*aS94B7`XQVO4pFDqO7K?ytpgK!y$kD~yi1,(');
define('LOGGED_IN_SALT',   'N2fk3x+?^>tV/c`kGhb.u!r%5[$7:UW,{EJW}ZM%.;N`2hXTjLiFBHEt7II/ySwl');
define('NONCE_SALT',       'dt4X@%!D4/6R 6~w9-HeBKmPnya_vWsq R|$;[^<|4ysz>,(a9Z6S-XTW(N`Ly(T');

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
