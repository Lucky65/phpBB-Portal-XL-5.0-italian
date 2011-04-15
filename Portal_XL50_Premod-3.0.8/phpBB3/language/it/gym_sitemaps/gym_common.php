<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_common.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 portalxl.eu - update translation for portal xl on 2011/04/14
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_common [Italian]
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
	'RSS_AUTH_SOME_USER' => '<b><u>Attenzione :</u></b>Questa lista di voci è personalizzata secondo le regole di <b>%s</b>.<br/>Alcune di queste voci elencate non saranno visibili se non sei loggato.',
	'RSS_AUTH_THIS_USER' => '<b><u>Attenzione :</u></b>Questa lista di voci è personalizzata secondo le regole di <b>%s</b>.Alcune di queste voci elencate non saranno visibili se non sei loggato.',
	'RSS_AUTH_SOME' => '<b><u>Attenzione :</u></b>Questa lista di voci non è visibile al pubblico.<br/>Alcune di queste voci elencate non saranno visibili se non sei loggato.',
	'RSS_AUTH_THIS' => '<b><u>Attenzione :</u></b>Questa lista di voci non è visibile al pubblico.<br/>Alcune di queste voci elencate non saranno visibili se non sei loggato.',
	'RSS_CHAN_LIST_TITLE' => 'Canali',
	'RSS_CHAN_LIST_DESC' => 'Questa lista canali è elencata nei feeds RSS disponibili.',
	'RSS_CHAN_LIST_DESC_MODULE' => 'Questa lista canali è elencata nei feeds RSS disponibili per : %s.',
	'RSS_ANNOUCES_DESC' => 'Questi feeds sono elencati negli annunci globali di : %s',
	'RSS_ANNOUNCES_TITLE' => 'Annunci dal  : %s',
	'GYM_LAST_POST_BY' => 'Ultimo messaggio da ',
	'GYM_FIRST_POST_BY' => 'Messaggio di ',
	'GYM_LINK' => 'Link',
	'GYM_SOURCE' => 'Fonte',
	'GYM_RSS_SOURCE' => 'Fonte',
	'RSS_MORE' => 'altro',
	'RSS_CHANNELS' => 'Canali',
	'RSS_CONTENT' => 'Contenuto',
	'RSS_SHORT' => 'Lista breve',
	'RSS_LONG' => 'Lista ampia',
	'RSS_NEWS' => 'News',
	'RSS_NEWS_DESC' => 'Ultime news dal',
	'RSS_REPORTED_UNAPPROVED' => 'Questa voce è in attesa di essere approvata.',

	'GYM_HOME' => 'Home',
	'GYM_FORUM_INDEX' => 'Indice Forum',
	'GYM_LASTMOD_DATE' => 'Data ultima modifica',
	'GYM_SEO' => 'Ottimizzazione Motori di Ricerca',
	'GYM_MINUTES' => 'minuti',
	'GYM_SQLEXPLAIN' => 'Spiegazione rapporto SQL',
	'GYM_SQLEXPLAIN_MSG' => 'Loggato come amministratore, puoi selezionare %s per questa pagina.',
	'GYM_BOOKMARK_THIS' => 'Condividi',
	// Errors
	'GYM_ERROR_404' => 'Questa pagina non esiste o non è stata attivata',
	'GYM_ERROR_404_EXPLAIN' => 'Il server non trova la corrispondenza all’URL utilizzato.',
	'GYM_ERROR_401' => 'Non hai i permessi per vedere questa pagina.',
	'GYM_ERROR_401_EXPLAIN' => 'Questa pagina è accessibile solo ad utenti registrati.',
	'GYM_LOGIN' => 'Non hai i permessi per vedere questa pagina.',
	'GYM_LOGIN_EXPLAIN' => 'Devi essere registrato per vedere questa pagina.',
	'GYM_TOO_FEW_ITEMS' => 'Pagina non disponibile',
	'GYM_TOO_FEW_ITEMS_EXPLAIN' => 'Questa pagina non contiene le voci visualizzate.',
	'GYM_TOO_FEW_ITEMS_EXPLAIN_ADMIN' => 'Questa pagina non contiene le voci visualizzate. (Inferiore al limite configurato in ACP).<br/>Un’errore 404 per intestazione non trovata è stato inviato per informare adeguatamente i motori di ricerca allo scopo di eliminare questo collegamento.',

	'GOOGLE_SITEMAP' => 'Mappa',
	'GOOGLE_SITEMAP_OF' => 'Mappa sito di',
	'GOOGLE_MAP_OF' => 'Mappa sito di %1$s',
	'GOOGLE_SITEMAPINDEX' => 'Indice Mappa',
	'GOOGLE_NUMBER_OF_SITEMAP' => 'Numero di mappe sito in quest’indice',
	'GOOGLE_NUMBER_OF_URL' => 'Numero di URL in questa mappa sito di Google',
	'GOOGLE_SITEMAP_URL' => 'URL mappa sito',
	'GOOGLE_CHANGEFREQ' => 'Cambia freq.',
	'GOOGLE_PRIORITY' => 'Importanza',

	'RSS_FEED' => 'Feed RSS',
	'RSS_FEED_OF' => 'Feed RSS di %1$s',
	'RSS_2_LINK' => 'Link feed RSS 2.0',
	'RSS_UPDATE' => 'Aggiornato',
	'RSS_LAST_UPDATE' => 'Ultimo aggiornamento',
	'RSS_SUBSCRIBE_POD' => '<h2>Sottoscrivi ora questo feed!</h2>Con le preferenze del servizio.',
	'RSS_SUBSCRIBE' => 'Per sottoscrivere manualmente questo feed RSS, usa il seguente URL :',
	'RSS_ITEM_LISTED' => 'Una voce in elenco.',
	'RSS_ITEMS_LISTED' => 'voci elencate.',
	'RSS_VALID' => 'RSS 2.0 feed valido',

	// Old URL handling
	'RSS_1XREDIR' => 'Questo feed RSS è stato spostato',
	'RSS_1XREDIR_MSG' => 'Questo feed RSS è stato spostato, puoi trovarlo quì ',
	// HTML sitemaps
	'HTML_MAP' => 'Mappa',
	'HTML_MAP_OF' => 'Mappa sito di %1$s',
	'HTML_MAP_NONE' => 'Nessuna mappa sito',
	'HTML_NO_ITEMS' => 'Nessuna voce',
	'HTML_NEWS' => 'News',
	'HTML_NEWS_OF' => 'News di %1$s',
	'HTML_NEWS_NONE' => 'Nessuna news',
	'HTML_PAGE' => 'Pagina',
	'HTML_MORE' => 'Leggi tutto',
	// Forum
	'HTML_FORUM_MAP' => 'Mappa sito forum',
	'HTML_FORUM_NEWS' => 'Forums news',
	'HTML_FORUM_GLOBAL_MAP' => 'Lista annunci globali',
	'HTML_FORUM_GLOBAL_NEWS' => 'Annunci globali',
	'HTML_FORUM_ANNOUNCE_MAP' => 'Lista annunci',
	'HTML_FORUM_ANNOUNCE_NEWS' => 'Annunci',
	'HTML_FORUM_STICKY_MAP' => 'Lista importanti',
	'HTML_FORUM_STICKY_NEWS' => 'Importanti',
	'HTML_LASTX_TOPICS_TITLE' => 'Ultimi %1$s argomenti attivi',
	'TRANSLATION_INFO'      => 'Traduzione Italiana PhpBB <a href="http://www.phpbb.it/">phpBB.it</a> - Per Portal XL & Seo Premod <a href="http://www.portalxl.eu/">portalxl.eu</a>'
));
?>
