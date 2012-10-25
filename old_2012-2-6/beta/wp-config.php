<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'montlake_wrd1');

/** MySQL database username */
define('DB_USER', 'montlake_wrd1');

/** MySQL database password */
define('DB_PASSWORD', '0dvfFpjS4S');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'DaICfP77d5ureqs7kJjQimLFEloxOmbTaIHpjUqURzC0MNHk4uE6LXfpkox9n7aF');
define('SECURE_AUTH_KEY',  'KW6YlIOM2SJ0bSVeuHgYN875rSRSS6Q6UkHELKXtdoHFwUQdQczBTZsAzQuWrR8W');
define('LOGGED_IN_KEY',    'enFbxH1xJDqjkoUUEiaqXQD8O2qUceE776ouZ3iOTLiqmF97JzKHOEdOJ4Ecyk5u');
define('NONCE_KEY',        'pBi5axjszYESn7dn8TmwnJCYn3r50s3gbc0rDBwDbvF8Hs4wUZ1GMl1E875R2YHH');
define('AUTH_SALT',        'V4f6VVkFykOAR41fync4H1YLj7DTZKEkJWgJM6HK1zXTsnK6MGv33TaF8tjRjlXS');
define('SECURE_AUTH_SALT', 'Mf53wMLDe8L0t47iuD0SxHVf1huc6ltj0xtMsofdzfN7T78deRLwqzkLvv7ZbLmB');
define('LOGGED_IN_SALT',   'XzMj7KO6YrlOOcKZ69T31MaRP0vCjh1LqRpb0AdjkklpwcrsDOlZRE9f2fptQZKF');
define('NONCE_SALT',       'BNB3NnOAe9lfakGezZzTIk2y5PA6meqm0xZt6YXe7uhO7KwGml9iG1Zgab5dYJ0d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
