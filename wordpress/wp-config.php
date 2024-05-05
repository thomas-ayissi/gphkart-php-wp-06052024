<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tmb_sam04052024' );

/** Database username */
define( 'DB_USER', 'tk87hyts87dxz' );

/** Database password */
define( 'DB_PASSWORD', 'JY#fxDqW97-DvOUrps3487fu-KIUfc20gvx9D' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-1FMTD/?utF$?gq(<.b^Lm:Uov.%ujgho<J@QBZyHiE^dbf 1@JHu(e&Y;(V!^l%' );
define( 'SECURE_AUTH_KEY',  '[D82(@L4t+!F6322c6(T+S<A*EHAW7p[ORF@2)U5UlTcHZa;a97mYrnSSIARRn}%' );
define( 'LOGGED_IN_KEY',    'o7D]K%4QOD{r(Wnpm^mnbFefBm~ }-J|y5;t!fXIq<yamRd{/YX8$4GW)d+NB==<' );
define( 'NONCE_KEY',        '#JtUaBsV:}03OPv5Wh,y=CJ&v7C {A662Fu-|Z`ucvL+5f>H@w0NsiO6t-bgL,cb' );
define( 'AUTH_SALT',        'fvY,MKe`SZ&^Zj Q%H-ISLB.j^[q8>(C:(v!x-5R$z)q.J5~Nxy{7iHq/+4/1|SO' );
define( 'SECURE_AUTH_SALT', 'H+Mw:w*lFNZ x4=BU#sf{4X4~q2%{SL%X&la?rR5Cs?`(BR7CB=J2^I*:IUc]N8d' );
define( 'LOGGED_IN_SALT',   'vOVg4%=pAFR0b0<<5:|Vdq?I;Q(>G fDNTB+~l,%%x.!?h%_`k`;H@6+V&9CCp!U' );
define( 'NONCE_SALT',       '<k@6nV6BzGP0FFi|3I$*3!RVP2~N[fq3__dFmIT9+8v73^5mE!*i)ogQ%mN0GS*,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tk_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
