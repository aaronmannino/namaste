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
define('DB_NAME', 'i991082_wp4');

/** MySQL database username */
define('DB_USER', 'i991082_wp4');

/** MySQL database password */
define('DB_PASSWORD', 'N)G(EgB~2i04^[7');

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
define('AUTH_KEY',         'lpK5GNfLWJXtqYokrtYep7WxqQCr9CsIEJezEfiAm3o8tGntAiCHo25KAL3Kgf6R');
define('SECURE_AUTH_KEY',  'M4V0e0mA1q8tQIK88Y3PabV4x7BT86wRnCNel9Ig3UbRy26srjlDE92rhotnByjY');
define('LOGGED_IN_KEY',    'HzDnQjvSiGrnFHydiKr5BgrRmJoOTFZI5a8HSAoPTJHoXBaPFRguFs8Xc6LFR63I');
define('NONCE_KEY',        'XYt5fSFtO6OkB5uHdBUAnjqstXHTwsM4TdBC3j3xonjgLcLSmjHfQtMQAW39COT8');
define('AUTH_SALT',        'lWrrtg7mX1OzeYM91dyoVPf33FZpyE9pTL0ifxDotZpsnprCPC1Ey2NvAOROTedU');
define('SECURE_AUTH_SALT', 'WslvYhKPXiW2cahJ3I4GDdITqBA7liHL6nTc0VCGonne4JjDXcqsdJhKfoYoWb0e');
define('LOGGED_IN_SALT',   'aT8Y2BT97v9izWFNqPytYkyoYOoVlnZdOqMUAdmKoHoU2PhPvVu0ryIpbPNhE3Ew');
define('NONCE_SALT',       '9afmjEYIYE4vCantA57vMuTcFy4GaHi4tvPasbac8YismfbxNKlTfAYJyM2GYoiN');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
