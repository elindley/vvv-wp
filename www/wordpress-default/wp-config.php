<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_default');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         ') BRKb%er<8!cB<$0?ILm1emR&lhu_W;P,)|>%B.~-<N/^1!_8VCp9_3rs]-<x-|');
define('SECURE_AUTH_KEY',  '-9:PQkM[NEi0/fJ#P_??E6a/S<P6e(:k-c!rgw+Y~4=>W/sxJ,)=/-[V##MKv-@I');
define('LOGGED_IN_KEY',    '<*4VA$zxGn<e;NH?ouSvmJ0im:7FR+ 0&Od,@6qO Xu4*+ZZ4:C+Q]-wV;v_yT:i');
define('NONCE_KEY',        'd-$$ZX=*hzF=+^~ Ls_d?Leq#!-/&:2vrW:}8X8D{$LUcY5lhk5c`f=w=[r.A.qn');
define('AUTH_SALT',        '-v4H ;]7e9-`fyz}7}[2h0RD=Bk}@f}LDHx*Wbs<.i4D(gd^v|;D+b||C[f/-Tr ');
define('SECURE_AUTH_SALT', '6D*|rpK+5(aSV|O`&`i9&s}}|)l9Y8Y1VJSE3+f$&X{QT(!{O}j>l|3A,} 9unI*');
define('LOGGED_IN_SALT',   '+$!?$hog, wu3+!++O& #+J#dw~Ad5 ]bt]{8&txpd4mCY7@[;VO5^+M1Lxqo^!e');
define('NONCE_SALT',       '|H4??T{6I^eo4Q3&JzOQA$;oBlfi,,[vBOQN;SoGde.ye8Cg4NnIZ~LO3wxsFl2p');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
