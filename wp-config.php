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
define('DB_NAME', 'curso_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '*xs2K$[Bl_`?;#r)cr9J5S}(~j|>,D#<AJ.Pki}Mx}wFCCc[h(%OGsq_IINOVA/A');
define('SECURE_AUTH_KEY',  '{ALa7p((~s(P-+4U@jVcvL+?9.W`M7!0|.7&j!l7[@5&`^O[@lUszp+u9]D>q)Kx');
define('LOGGED_IN_KEY',    ':*N^F~!>XRm3O+mZj4hD%p27Dj0k^=J`~B}kJ*,ZPTKDz*S%RAZA|QrwD`%,@` a');
define('NONCE_KEY',        'k?gx${5g9Y M)V?qz#`N5_u@jm4WrjDf7(}4E~djeF_}>dJp~Y$tX]h^S;8C^C%-');
define('AUTH_SALT',        'r|DY3OM~U[@e`UvAfYVZaJ(bL2sRZZG$A3bl3e0o Z?mT)Vct3xzzK}G@TG u9a9');
define('SECURE_AUTH_SALT', 'n(;$YAB;zvKufq|n#oEQ]:~C*~EL3j@=vy+PgS!nc{zP%Ih2]21zR;Nx>3JYt?rx');
define('LOGGED_IN_SALT',   ' Ac#gUSkH74^[8sbW5yfISMB|^4KV1C<Npw*P^eNb}vpfy&/}+gs=X%,UJ*4O#CM');
define('NONCE_SALT',       'a$hY>QGn(%%4:icLN;Gq^~4[X)SVIYbxc3tH=WTgi>gun:0,qbY_M.(!]?llk#g)');

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
