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
define('DB_NAME', 'wordpressdemo');

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
define('AUTH_KEY',         '5BO;`K(Jh?@rERRS&1)l$Lt:-EP8//)l=@NW][dJukylC~-]57CT<&0wT}E-trDr');
define('SECURE_AUTH_KEY',  'YLTDa(cXg=oUJ5%Gt((AREk3l:>L_bS[@%]lXl~A>2.5 Ffl/5n ]nH4svOcHQYU');
define('LOGGED_IN_KEY',    'C;3G#MQA 5v0@/*,]y0cLshp+)g8Bn6V%1W]Sih@8`uh)[.<ib]6w:DK4Vr{7#6+');
define('NONCE_KEY',        'QkB$B{r;o^>ysnqx.|;%~!f&G y;bddyMn+4kD:,J~n[OD_ew{pn$tk6er[2DjJ$');
define('AUTH_SALT',        '4HuE!dTPK,n;ezu}zL,7#w@7oU_&PH(204Z;kEEM.B0z=q&F]vIJx62exhoi,d2(');
define('SECURE_AUTH_SALT', 'cD_3}dt>s455FDFnB}~4=@Dne]o-^J/0AGO6R!.Hun)3=)goZZs8v{2i%,!0V8t=');
define('LOGGED_IN_SALT',   'e6wY5xC;R`V.D@;t7fZ{xcfj^X7Xfv3_!xTW]E j7I<eT1u[naZ/SU1JHqjo+Aav');
define('NONCE_SALT',       '}s/N-jak8?iOTiJiB)]=(0(5dmpE>4bP@HQxzF;3~>xPeQFZ3K$6G=!7ph({&643');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
