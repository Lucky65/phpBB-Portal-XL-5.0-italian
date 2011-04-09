<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: html_forum.php 204 2009-12-20 12:04:51Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/03/16
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* html_forum [Italian]
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
	'HTML_FORUM' => 'Modulo forum HTML',
	'HTML_FORUM_EXPLAIN' => 'Qui ci sono le impostazioni per il modulo HTML forum.<br/> Queste impostazioni possono essere sovrascritte a seconda delle impostazioni predefinite HTML.',
	'HTML_FORUM_EXCLUDE' => 'Esclusioni forum',
	'HTML_FORUM_EXCLUDE_EXPLAIN' => 'Puoi decidere di escludere diversi forum dall’elenco di feeds RSS.<br /><u>Nota :</u> Se questo campo è vuoto, tutti i forum pubblici saranno elencati.',
	'HTML_FORUM_ALLOW_NEWS' => 'Forum News',
	'HTML_FORUM_ALLOW_NEWS_EXPLAIN' => 'Il forum news visualizza diversi messaggi con i primi argomenti, tagliati o meno, e provenienti da uno o più forum selezionabili.',
	'HTML_FORUM_ALLOW_CAT_NEWS' => 'Categoria news forum',
	'HTML_FORUM_ALLOW_CAT_NEWS_EXPLAIN' => 'Attiva o meno le pagine news nel forum. Se attivata, ogni forum avrà una pagina di notizie per i suoi argomenti.',
	'HTML_FORUM_NEWS_IDS' => 'Fonte forum news',
	'HTML_FORUM_NEWS_IDS_EXPLAIN' => 'Puoi selezionare diversi forum, anche privati, come fonte di una nuova pagina principale del forum.<br /><u>Nota</u> :<br />Se lasciato vuoto, tutti i forum autorizzati saranno presi come fonte per la pagina forum news.',
	'HTML_FORUM_LTOPIC' => 'Ultimo elenco opzionale degli argomenti attivi',
	'HTML_FORUM_INDEX_LTOPIC' => 'Visualizza sulla mappa forum',
	'HTML_FORUM_INDEX_LTOPIC_EXPLAIN' => 'Visualizza, o meno, l’ultimo argomento attivo sulla mappa forum.<br/>Occorre inserire il numero dell’argomento da visualizzare, 0 per disattivare.',
	'HTML_FORUM_CAT_LTOPIC' => 'Visualizza sulla categoria mappe forum',
	'HTML_FORUM_CAT_LTOPIC_EXPLAIN' => 'Visualizza, o meno, l’ultimo argomento attivo sulla mappa forum.<br/>Occorre inserire il numero dell’argomento da visualizzare, 0 per disattivare.',
	'HTML_FORUM_NEWS_LTOPIC' => 'Visualizza sulla pagina news forum',
	'HTML_FORUM_NEWS_LTOPIC_EXPLAIN' => 'Visualizza, o meno, l’ultimo argomento attivo sulla mappa forum.<br/>Occorre inserire il numero dell’argomento da visualizzare, 0 per disattivare.',
	'HTML_FORUM_CAT_NEWS_LTOPIC' => 'Visualizza sulla categoria pagina news forum',
	'HTML_FORUM_CAT_NEWS_LTOPIC_EXPLAIN' => 'Visualizza, o meno, l’ultimo argomento attivo sulla mappa forum.<br/>Occorre inserire il numero dell’argomento da visualizzare, 0 per disattivare.',
	'HTML_FORUM_LTOPIC_PAGINATION' => 'Paginazione ultimo argomento attivo',
	'HTML_FORUM_LTOPIC_PAGINATION_EXPLAIN' => 'Visualizza o meno la paginazione nella lista argomenti attivi.',
	'HTML_FORUM_LTOPIC_EXCLUDE' => 'Lista esclusione argomenti attivi',
	'HTML_FORUM_LTOPIC_EXCLUDE_EXPLAIN' => 'Peoi escludere diversi forum dalla lista degli argomenti attivi.<br /><u>Nota :</u> Se questo campo è vuoto, tutti i forum pubblici ssranno elencati.',
	// Pagination
	'HTML_FORUM_PAGINATION' => 'Paginazione mappa forum',
	'HTML_FORUM_PAGINATION_EXPLAIN' => 'Attiva o meno la paginazione delle mappe forum. Attiva questa opzione se desideri visualizzare più di una pagina e la lista di tutti gli argomenti di ogni mappa forum.',
	'HTML_FORUM_PAGINATION_LIMIT' => 'Argomenti per pagina',
	'HTML_FORUM_PAGINATION_LIMIT_EXPLAIN' => 'Quando l apaginazione è attivata, puoi definire il numero di argomenti visualizzati per pagina.',
	// Content
	'HTML_FORUM_CONTENT' => 'Configurazione contenuto forum',
	'HTML_FORUM_FIRST' => 'Ordinamento mappa forum',
	'HTML_FORUM_FIRST_EXPLAIN' => 'La mappa forum può essere ordinata con la prima data argomento o la data dell’ultimo messaggio. Ciò significa che è possibile utilizzare la creazione o l’ultimo argomento secondo l’ordine delle risposte.',
	'HTML_FORUM_NEWS_FIRST' => 'Ordinamento news',
	'HTML_FORUM_NEWS_FIRST_EXPLAIN' => 'Il forum news può essere ordinato con la prima data argomento o la data dell’ultimo messaggio. Ciò significa che è possibile utilizzare la creazione o l’ultimo argomento secondo l’ordine delle risposte.',
	'HTML_FORUM_LAST_POST' => 'Visualizza ultimo messaggio',
	'HTML_FORUM_LAST_POST_EXPLAIN' => 'visualizza o meno, l’informazione ultimo messaggio nella lista argomenti.',
	'HTML_FORUM_POST_BUTTONS' => 'Visulizza pulsante messaggio',
	'HTML_FORUM_POST_BUTTONS_EXPLAIN' => 'Visualizza o meno i pulsanti come, edita, rispondi ecc...',
	'HTML_FORUM_RULES' => 'Visualizza regole forum',
	'HTML_FORUM_RULES_EXPLAIN' => 'Visualizza o meno le regole del forum news e la mappa pagine.',
	'HTML_FORUM_DESC' => 'Visualizza descrizione regole',
	'HTML_FORUM_DESC_EXPLAIN' => 'Visualizza o meno la descrizione nel forum news e nella mappa pagine.',
	// Reset settings
	'HTML_FORUM_RESET' => 'Modulo forum HTML',
	'HTML_FORUM_RESET_EXPLAIN' => 'Ripristina le opzioni ai valori di default nel modulo HTML forum.',
	'HTML_FORUM_MAIN_RESET' => 'HTML forum',
	'HTML_FORUM_MAIN_RESET_EXPLAIN' => 'Ripristina ai valori di default le opzioni nelle "Configurazioni HTML".',
	'HTML_FORUM_CONTENT_RESET' => 'Forum news HTML',
	'HTML_FORUM_CONTENT_RESET_EXPLAIN' => 'Ripristina le opzioni ai valori di default nel modulo HTML forum.',
	'HTML_FORUM_CACHE_RESET' => 'HTML forum cache',
	'HTML_FORUM_CACHE_RESET_EXPLAIN' => 'Ripristina la cache ai valori di default nel modulo HTML forum.',
	'HTML_FORUM_MODREWRITE_RESET' => 'Riscrittura URL forum',
	'HTML_FORUM_MODREWRITE_RESET_EXPLAIN' => 'Ripristina la riscrittura URL ai valori di default nel modulo HTML forum.',
	'HTML_FORUM_GZIP_RESET' => 'HTML forum gunzip',
	'HTML_FORUM_GZIP_RESET_EXPLAIN' => 'Ripristina gunzip ai valori di default nel modulo HTML forum.',
	'HTML_FORUM_LIMIT_RESET' => 'Limiti HTML forum',
	'HTML_FORUM_LIMIT_RESET_EXPLAIN' => 'Ripristina i limiti ai valori di default nel modulo HTML forum.',
	'HTML_FORUM_SORT_RESET' => 'Ordinamento HTML forum',
	'HTML_FORUM_SORT_RESET_EXPLAIN' => 'Ripristina l’ordinamento ai valori di default nel modulo HTML forum.',
	'HTML_FORUM_PAGINATION_RESET' => 'Paginazione HTML forum',
	'HTML_FORUM_PAGINATION_RESET_EXPLAIN' => 'Ripristina la paginazione ai valori di default nel modulo HTML forum.',
));
?>