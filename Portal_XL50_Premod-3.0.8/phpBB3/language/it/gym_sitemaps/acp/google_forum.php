<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: google_forum.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/01/01
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* google_forum [Italian]
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
	'GOOGLE_FORUM' => 'Mappe forum',
	'GOOGLE_FORUM_EXPLAIN' => 'Queste sono le configurazioni per il modulo mappa sito di Google.<br/> Alcune sono già in funzione e sovrascrivono le impostazioni delle mappe sito con le principali priorità delle tue impostazioni.',
	'GOOGLE_FORUM_SETTINGS' => 'Configurazione mappa sito forum',
	'GOOGLE_FORUM_SETTINGS_EXPLAIN' => 'Le seguenti configurazioni sono specifiche per il modulo mappa sito di Google.',
	'GOOGLE_FORUM_STICKY_PRIORITY' => 'Priorità messaggi importanti',
	'GOOGLE_FORUM_STICKY_PRIORITY_EXPLAIN' => 'Priorità messaggi importanti(deve essere un numero compreso tra 0.0 &amp; 1.0 incluso).',
	'GOOGLE_FORUM_ANNOUCE_PRIORITY' => 'Priorità annunci',
	'GOOGLE_FORUM_ANNOUCE_PRIORITY_EXPLAIN' => 'Priorità annunci(deve essere un numero compreso tra 0.0 &amp; 1.0 incluso).',
	'GOOGLE_FORUM_GLOBAL_PRIORITY' => 'Priorità annunci globali',
	'GOOGLE_FORUM_GLOBAL_PRIORITY_EXPLAIN' => 'Priorità annunci globali(deve essere un numero compreso tra 0.0 &amp; 1.0 incluso).',
	'GOOGLE_FORUM_EXCLUDE' => 'Esclusioni forum',
	'GOOGLE_FORUM_EXCLUDE_EXPLAIN' => 'Puoi escludere uno o più forum dalla lista della mappe.<br /><u>Nota :</u> Se il campo resta vuoto, tutti i forum saranno elencati.',
	// Reset settings
	'GOOGLE_FORUM_RESET' => 'Modulo mappe sito forum',
	'GOOGLE_FORUM_RESET_EXPLAIN' => 'Ripristina tutte le opzioni ai valori di default.',
	'GOOGLE_FORUM_MAIN_RESET' => 'Mappe forum',
	'GOOGLE_FORUM_MAIN_RESET_EXPLAIN' => 'Ripristina tutte le opzioni di default in "mappe forum".',
	'GOOGLE_FORUM_CACHE_RESET' => 'Cache mappe forum',
	'GOOGLE_FORUM_CACHE_RESET_EXPLAIN' => 'Ripristina tutte le opzioni di default in "cache mappe forum".',
	'GOOGLE_FORUM_MODREWRITE_RESET' => 'Mappe sito riscrittura URL (mod rewrite)',
	'GOOGLE_FORUM_MODREWRITE_RESET_EXPLAIN' => 'Ripristina tutte le opzioni di default in "riscrittura URL mappe forum".',
	'GOOGLE_FORUM_GZIP_RESET' => 'Mappe sito gunzip',
	'GOOGLE_FORUM_GZIP_RESET_EXPLAIN' => 'Ripristina tutte le opzioni di default in "mappe forum gunzip".',
	'GOOGLE_FORUM_LIMIT_RESET' => 'Limiti mappe sito',
	'GOOGLE_FORUM_LIMIT_RESET_EXPLAIN' => 'Ripristina tutte le opzioni di default in "limiti mappe forum".',
	'GOOGLE_FORUM_SORT_RESET' => 'Ordinamento mappe forum',
	'GOOGLE_FORUM_SORT_RESET_EXPLAIN' => 'Ripristina tutte le opzioni di default in "ordinamento mappe forum".',
	'GOOGLE_FORUM_PAGINATION_RESET' => 'Paginazione mappe forum',
	'GOOGLE_FORUM_PAGINATION_RESET_EXPLAIN' => 'Ripristina tutte le opzioni di default in "paginazione mappe forum".',
));
?>