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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         'l2tbW6KLQoxUep+V3M5nuKrKkODZaY53m39L+ULdEbQcOEggttMeg7alu6UrK58gOv/HAMjErZHzAzPxzaeXHw==');
define('SECURE_AUTH_KEY',  '977yFjPnq1PN6QvbJBm1gdqLkdlLkjjIruot4VGHw2ySEkTlDQAo4Hs8GCOWz65uyiOfMEClIxwlg3XSGT22kA==');
define('LOGGED_IN_KEY',    'fp992pUZfVjzxahAd4FJp8SDuc4CwtDqY1Sdl8sEsz0lkTNcTH6/QK45/abGkae7zBSKGwLTmaPSh4tmFcmH4w==');
define('NONCE_KEY',        '1p+qwzr10TrZcn+FOr2O9lYADpTk8es60Nvi16Pv3jD1OlGyJGgTs8JrnyXlR1gRWAfuBi6fiR5U8vqXCclIDA==');
define('AUTH_SALT',        '008apE+NcTnP23fHmyqQFKdutMAVAJDfH0aE8Nkaxa0W+f4crCOFTykxW9ZWZ2BAkfs1WXRDUUgJzjbZUx4JeQ==');
define('SECURE_AUTH_SALT', 'Y2XSeplUh1N1EuaQMS9SlAMK/8YQ+acDx3t1RbNoLfCJmh42DieBpOxHGh3Qr20lKkfyaVrAw6jgMUNljyBn3g==');
define('LOGGED_IN_SALT',   'MeEQ+AAphLR9dtmdiz8N6M3GrtNkqlA9B7rGb3Glhdu6AgGe/KT6A4Cq31iuoqo5++5T+XF0sbPEcHpQNypKSg==');
define('NONCE_SALT',       '/OnvvIgBamXtx2KQApf/MEkX/7Arc8GeNmIr+aIVlXO78Clwn+UUxuoBn+wRbm2zRFa6kvN9+FInkLEQTr2+Gw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
