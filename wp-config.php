<?php
/**
 * The base configuration for WordPress.
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
 * @package awps
 */

/**
 * Include Dotenv library to pull config options from .env file.
 */
if ( file_exists( __DIR__ . '/wp-content/themes/avionqueva/vendor/autoload.php' ) ) :
	require_once __DIR__ . '/wp-content/themes/avionqueva/vendor/autoload.php';
	$dotenv = new Dotenv\Dotenv( __DIR__ );
	$dotenv->load();
endif;

if ( file_exists( dirname( __DIR__ ) . '/wp-content/themes/avionqueva/vendor/autoload.php' ) ) :
	require_once dirname( __DIR__ ) . '/wp-content/themes/avionqueva/vendor/autoload.php';
	$dotenv = new Dotenv\Dotenv( dirname( __DIR__ ) );
	$dotenv->load();
endif;

/** MySQL settings - You can get this info from your web host
 * The name of the database for WordPress
 */

define( 'DB_NAME', getenv( 'DB_NAME' ) );

/* MySQL database username */
define( 'DB_USER', getenv( 'DB_USER' ) );

/* MySQL database password */
define( 'DB_PASSWORD', getenv( 'DB_PASSWORD' ) );

/* MySQL hostname */
define( 'DB_HOST', getenv( 'DB_HOST' ) );

/* Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/* The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '#@@^yq~wVXr.Rm+ktqG wnf!FyRxHE)Aswp4v?hRqV^|_9H{~Pn,~AC !u}qWFKe');
define('SECURE_AUTH_KEY',  'pks3qu%>%_73{|:BcAk`-qs|=Afta}+]9P?ufS7{pUDTpF8R3%0y(A_<%3pTrg`w');
define('LOGGED_IN_KEY',    'O7vu^JTrS#A&~E:>F,3!hAT.UeHcqQy/70d|pgq0x%<v$aX1af dt9`K7y;=o/19');
define('NONCE_KEY',        'FpFSX/7|C&05hP?~]=Dbk|0_@N*I=4oBC+{2>?)?9*ARB`owt#k4f}3#Vbx/d7CU');
define('AUTH_SALT',        'xN0}>P;Pw0MyYvp21h,*#+u73oqF7LINj2|fM&]_-<nUXB^{jvb.>}5vt77/llg8');
define('SECURE_AUTH_SALT', '[>Z+Aw+UN1Z}E7:#v5,5Uz_0|-GUUtKX+.OJY72oZ~bh^f!+2-ngo&-P9k(AVJ5g');
define('LOGGED_IN_SALT',   'l!au|%|{BDG@og+;9!7>vz7f!GO8B 2- =1@%0qb|#>h2zkGn@r_$Z~Mk)}=#wuE');
define('NONCE_SALT',       '%NZKYEpJpSrbLu-aJCWC@@*dCDpt<H<`FS~406N5A@4q5)Blzm2q;vmx0>8n[,lR');

/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */

$table_prefix = getenv( 'DB_PREFIX' );

/*
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

define( 'WP_DEBUG', getenv( 'APP_ENV' ) === 'development' ? true : false );

/**
 * Define home and site url
 * reduces DB calls and increase performance
 */

define( 'WP_HOME', getenv( 'WP_HOME' ) );
define( 'WP_SITEURL', getenv( 'WP_SITEURL' ) );

/**
 * Manage Post revisions and autosave
 */

define( 'AUTOSAVE_INTERVAL', getenv( 'AUTOSAVE_INTERVAL' ) );
define( 'WP_POST_REVISIONS', getenv( 'WP_POST_REVISIONS' ) );

/**
 * Manage Trash auto empty
 */

define( 'EMPTY_TRASH_DAYS', getenv( 'EMPTY_TRASH_DAYS' ) );

/**
 * Increase PHP memory limit
 *
 * This might not work for some hosting providers
 */

define( 'WP_MEMORY_LIMIT', getenv( 'WP_MEMORY_LIMIT' ) );

/* That's all, stop editing! Happy blogging. */

/* Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) :
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
endif;

/* Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';
