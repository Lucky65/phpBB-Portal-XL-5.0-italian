<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: rss_forum.php 204 2009-12-20 12:04:51Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 portalxl.eu - update translation for portal xl on 2011/04/14
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* rss_forum [Italian]
*
*/
/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'RSS_FORUM' => 'Modulo RSS',
	'RSS_FORUM_EXPLAIN' => 'Qui ci sono le impostazioni per il modulo RSS forum.<br/> Queste impostazioni possono essere sovrascritte a seconda delle impostazioni predefinite RSS.',
	'RSS_FORUM_ALTERNATE' => 'Links alternativi RSS',
	'RSS_FORUM_ALTERNATE_EXPLAIN' => 'Visualizza o meno i links alternativi nella barra di navigazione del browser.',
	'RSS_FORUM_EXCLUDE' => 'Esclusioni forum',
	'RSS_FORUM_EXCLUDE_EXPLAIN' => 'Puoi decidere di escludere diversi forum dall’elenco di feeds RSS.<br /><u>Nota :</u> Se questo campo è vuoto, tutti i forum pubblici saranno elencati.',
	// Content
	'RSS_FORUM_CONTENT' => 'Configurazione contenuto forum',
	'RSS_FORUM_FIRST' => 'Primo messaggio',
	'RSS_FORUM_FIRST_EXPLAIN' => 'Visualizza o meno i primi messaggi nell’URL per tutti gli argomenti elencati nei feeds RSS.<br/> Per default, solo l’ultimo messaggio di ciascun thread è elencato. Visualizzando il primo, si avrà maggior lavoro per il server.',
	'RSS_FORUM_LAST' => 'Ultimo messaggio',
	'RSS_FORUM_LAST_EXPLAIN' => 'Visualizza o meno gli ultimi messaggi nell’URL per tutti gli argomenti elencati nei feeds RSS.<br/> Per default, solo l’ultimo messaggio di ciascun thread è elencato. Questa opzione è molto utile se vuoi elencare il primo messaggio URL nei feeds RSS.<br/>Nota: Configurando il primo messaggio su SI e l’ultimo messaggio su NO scaturisce la stessa creazione del feed news.',
	'RSS_FORUM_RULES' => 'Visualizza regole forum',
	'RSS_FORUM_RULES_EXPLAIN' => 'Visualizza o meno le regole nei feeds RSS.',
	// Reset settings
	'RSS_FORUM_RESET' => 'Modulo forum RSS',
	'RSS_FORUM_RESET_EXPLAIN' => 'Ripristina le opzioni dei moduli RSS ai valori di default.',
	'RSS_FORUM_MAIN_RESET' => 'Forums RSS',
	'RSS_FORUM_MAIN_RESET_EXPLAIN' => 'Ripristina le opzioni ai valori di default nella "Configurazione feeds RSS".',
	'RSS_FORUM_CONTENT_RESET' => 'Contenuto RSS forum',
	'RSS_FORUM_CONTENT_RESET_EXPLAIN' => 'Ripristina le opzioni ai valori di default nel modulo RSS forum.',
	'RSS_FORUM_CACHE_RESET' => 'RSS forum cache',
	'RSS_FORUM_CACHE_RESET_EXPLAIN' => 'Ripristina la cache ai valori di default nel modulo RSS forum.',
	'RSS_FORUM_MODREWRITE_RESET' => 'Riscrittura URL RSS forum',
	'RSS_FORUM_MODREWRITE_RESET_EXPLAIN' => 'Ripristina la riscrittura URL ai valori di default nel modulo RSS forum.',
	'RSS_FORUM_GZIP_RESET' => 'Forums RSS gunzip',
	'RSS_FORUM_GZIP_RESET_EXPLAIN' => 'Ripristina gunzip ai valori di default nel modulo RSS forum.',
	'RSS_FORUM_LIMIT_RESET' => 'Limiti forum RSS',
	'RSS_FORUM_LIMIT_RESET_EXPLAIN' => 'Ripristina i limiti ai valori di default nel modulo HTML forum.',
	'RSS_FORUM_SORT_RESET' => 'Ordinamento RSS forum',
	'RSS_FORUM_SORT_RESET_EXPLAIN' => 'Ripristina l’ordinamento ai valori di default nel modulo RSS forum.',
	'RSS_FORUM_PAGINATION_RESET' => 'Paginazione RSS forum',
	'RSS_FORUM_PAGINATION_RESET_EXPLAIN' => 'Ripristina la paginazione ai valori di default nel modulo RSS forum.',
));
?>