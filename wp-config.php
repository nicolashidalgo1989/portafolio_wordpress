<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'nh_portafolio');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'nh_portafolio');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '159753aaanh_portafolio');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '{)l6MY!::DU npz%y2,)T71Z<o_,R=|v24s,Bx`XrQl gy]0c{Y[l6V:O{<shlGx');
define('SECURE_AUTH_KEY', 'x[=%(e|}pk5DBh6/=PYW(BC=;jhR@BC8v.c9?LVeWtlc];{B n.iS-` }_OpfH C');
define('LOGGED_IN_KEY', '`ld?/.>3U|siNT9~;]&!C4CuH%AQV{t]|^]4N#YOBVNck>^UCr!}MG J]],{~N(`');
define('NONCE_KEY', 'r0tWX?T_xyZtITNnELu vi`Ii?WoI0Q[c]7qj^&o6IyGZp;ST4.1V$K3Y:L5U.$Y');
define('AUTH_SALT', 'Mll]U1Szs]E`5qGFq6?jgJ2g~9`90dc7v7;{xHpg*e PWOh4GFqL5!G1mR/p@2~O');
define('SECURE_AUTH_SALT', 'A-#U@{~Y!0r2r|Zb1#nnxx(dG$anzc7DUVj(cw+*Q%QA2)fEIp_L0yp1?,&<.@|P');
define('LOGGED_IN_SALT', 'oHcyCsv+mD;b#*8oH_Hq+ UtK<`[ml%}`auT.ls)z|O8THj+<4y0G70.WY#w6q-;');
define('NONCE_SALT', 'Zgt?-kju[Cdd/10#^~=tr<%L4L:FiK69mr5IPffNT,|gnU&V`IbhmJvzv-({-Rg,');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'nh_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

