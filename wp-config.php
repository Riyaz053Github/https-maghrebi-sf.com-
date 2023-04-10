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

define('DB_NAME', 'swdemo_maghrebi');



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

define( 'WPCF7_AUTOP', false );

define( 'WPMS_ON', true );
//define( 'WPMS_SMTP_PASS', 'support@123' ); //email cpanel configure password.

/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'W%}(ht8kdyFW7uH1w[6j,K#{i@Ovlw<yqxnkfs>DlvYp45o<Z8oa0JD/+{.eb/ys');

define('SECURE_AUTH_KEY',  'xcd6/i2sV[ AtyAOw[?nZ;{^[>I#sz (>`6O,My@nb6]?H6sNbY;nk/3n|iN<5Y?');

define('LOGGED_IN_KEY',    'D3JA!!o=r0vL#/P}jh4-&.3Xyo`AI4 &!8v4rwq{,$V[lL(!,mW9obRn]& ^DuO%');

define('NONCE_KEY',        '(%v$GWWjPDF[E(-5AY/.<8&3{}`78;nX-,x<;&XR]&16y4d$|A9chl>A>V#%~r%m');

define('AUTH_SALT',        'XEN5ZNYuCs~%p+_<-CaUxb,6 w]A)*z*Kq|6<~Qvz}t%-,-f^WvaM5:o^L/Mi[}-');

define('SECURE_AUTH_SALT', 'R6v6{ |tg;@YbypN-eh^~fL$,UFr_WS06l7w;6tizCwFqr=GKR?_)`[(pj~ T4B:');

define('LOGGED_IN_SALT',   'F/8% `M-sARM!7qj!w@h(]p}Pmo$p2(x3H?>$:E}yFw6GyH)D~2J|$/#5P~_A]P]');

define('NONCE_SALT',       '7y$JG9rwQav0Hif+x^eo3`PD{85s&k~vQiRC~d+X(+FJ4;La+gL*F]JELW$s!!RW');



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

