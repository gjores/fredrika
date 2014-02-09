<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'wordpress');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')F]GvLlV%<KxAOj|GxN#DncdhLQ+mIz5s$/0Gku}xYJB%<|F gpnv=@WV0]%[8:s');
define('SECURE_AUTH_KEY',  '$|a3jU;@UqZw~t<l-/{B{+Ks2Vv=>x,ANgG]o;jH-)Qq]?IvIKik%R/B;_&v8b:L');
define('LOGGED_IN_KEY',    'x0!PaFx?y*~8C(oh|Sy.$j)at|z~|&bT+SC6vX2J9u2-?=GXRdC0K1H:9PuQdCdr');
define('NONCE_KEY',        '~vp>N(5]tJeH6&(SwX^|.@!;AWt}@&`b-lr84/P)|%^Fp{`l=0f4}IOCnKZN(ZSV');
define('AUTH_SALT',        ']PWy;4[(TPhf:us%E.u<4`>h]S6~|S|h)KM_EVqP>#(6,h).!J>+?L}tX,kVBl75');
define('SECURE_AUTH_SALT', ',~&PUhs[i2eRhj+o[&!j#|Bm3%1q+++9[}fZ4@Hcwy~8moF.&b;KdQZivKe}ugE.');
define('LOGGED_IN_SALT',   'AEzAm{)rUp}&+|@I3S*mD0TK!i}x[%~Te+kx),a$lI<S/j}A+?1Ky/2;d$U0V@2^');
define('NONCE_SALT',       'P#-NJO)k,h1xKkw9M.e+I ??d9^_gmu3lCjlk;LdohJB:9BmRob!-/Io[97-~pZ=');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-språk, förinställt för svenska.
 *
 * Du kan ändra detta för att ändra språk för WordPress.  En motsvarande .mo-fil
 * för det valda språket måste finnas i wp-content/languages. Exempel, lägg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' för att få sidan
 * på svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');