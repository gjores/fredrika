<?php
/**
 * Baskonfiguration f�r WordPress.
 *
 * Denna fil inneh�ller f�ljande konfigurationer: Inst�llningar f�r MySQL,
 * Tabellprefix, S�kerhetsnycklar, WordPress-spr�k, och ABSPATH.
 * Mer information p� {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter f�r du fr�n ditt webbhotell.
 *
 * Denna fil anv�nds av wp-config.php-genereringsskript under installationen.
 * Du beh�ver inte anv�nda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i v�rdena.
 *
 * @package WordPress
 */

// ** MySQL-inst�llningar - MySQL-uppgifter f�r du fr�n ditt webbhotell ** //
/** Namnet p� databasen du vill anv�nda f�r WordPress */
define('DB_NAME', 'wordpress');

/** MySQL-databasens anv�ndarnamn */
define('DB_USER', 'root');

/** MySQL-databasens l�senord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning f�r tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp f�r databasen. �ndra inte om du �r os�ker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * �ndra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan n�r som helst �ndra dessa nycklar f�r att g�ra aktiva cookies obrukbara, vilket tvingar alla anv�ndare att logga in p� nytt.
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
 * Tabellprefix f�r WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokst�ver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-spr�k, f�rinst�llt f�r svenska.
 *
 * Du kan �ndra detta f�r att �ndra spr�k f�r WordPress.  En motsvarande .mo-fil
 * f�r det valda spr�ket m�ste finnas i wp-content/languages. Exempel, l�gg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' f�r att f� sidan
 * p� svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * F�r utvecklare: WordPress fels�kningsl�ge. 
 * 
 * �ndra detta till true f�r att aktivera meddelanden under utveckling. 
 * Det �r rekommderat att man som till�ggsskapare och temaskapare anv�nder WP_DEBUG 
 * i sin utvecklingsmilj�. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera h�r! Blogga p�. */

/** Absoluta s�kv�g till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-v�rden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');