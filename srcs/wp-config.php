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
define( 'DB_NAME', 'wordpress' );

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
    define('AUTH_KEY',         '._|gT[:i~Sfa^$W-^68lwDhErG+iARN,qo9JWVM<?}Nek<A`b{r>Qf5|?uFh6:2)');
    define('SECURE_AUTH_KEY',  '%U;z_&8]E3IeIp^mr#Oxnro=4VIe0Puc_o}*Ci{JV}5 &(x2c 4~qGHAK,HdUb+s');
    define('LOGGED_IN_KEY',    '-@cQa#ZE>V.MU5?ur}{ku>2j7oGm_u3}~FK[9^?w:.9=E,r%&DP9cf^[M2n={j,<');
    define('NONCE_KEY',        'gZy`Vi#NuvlzY<aM{[LB7u7,[tz|H|&^qmH0Y`8lP=BI%M4[c/0[R{z$Sgu+Yn|m');
    define('AUTH_SALT',        '2{t]ISKxRN@snT|9>9&BQX|/|-+8XP+Xm#~uz+i?mM+)/tA>#QY|G!]_JyE^Y10-');
    define('SECURE_AUTH_SALT', 'W8PZ`py}$sD[XGh3`@3Ha_}]2PdmwXr z*zlRpTlnS#MnA!yHWHIEH`T|pu,)7qU');
    define('LOGGED_IN_SALT',   '?J$2U[afu?hZ<V53Mg&WiIPIRqbZuMA&Kfc@*DG4:kztbHF6/-$&5eJ{AK),~fc`');
    define('NONCE_SALT',       'ISL?fp|fq=fY5e}-@pH&bs!+/GMXm3zq[(LskV6HATJfAHF3oO!IW*N9X7+;mu}&');

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
