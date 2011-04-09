<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: rss_forum.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* rss_forum [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'RSS_FORUM' => 'Modul Fór RSS ',
	'RSS_FORUM_EXPLAIN' => 'Jedná sa o nastavenie modulu kanálov RSS pre fórum.<br/> Niektoré z nich môžu byť prepísané v závislosti na RSS a Zakladné <b>Prepísanie</b> nastavení.',
	'RSS_FORUM_ALTERNATE' => 'Alternatívne odkazy RSS',
	'RSS_FORUM_ALTERNATE_EXPLAIN' => 'Zobrazím alternatívne odkazy RSS fóra v navigačnej lište prehliadačoch',
	'RSS_FORUM_EXCLUDE' => 'Vylúčenie Fór',
	'RSS_FORUM_EXCLUDE_EXPLAIN' => 'V tomto zadani môžete vylúčiť jedno alebo viac fór zo zoznamu RSS.<br /><u>Poznámka :</u> Ak v tomto zadaní nebude označené nič, budú načítané všetky verejné fóra do zoznamu.',
	// Content
	'RSS_FORUM_CONTENT' => 'Nastavenie obsahu fór',
	'RSS_FORUM_FIRST' => 'Prvá správa',
	'RSS_FORUM_FIRST_EXPLAIN' => 'Zobrazím URL v zdrojoch RSS prvého prispevku všetkých tém. <br/> V predvolenom nastavení je uvedený len posledný príspevok každého vlákna. Zobrazením prvého príspevku sa pridelí trochu viac práce pre server.',
	'RSS_FORUM_LAST' => 'Posledná správa',
	'RSS_FORUM_LAST_EXPLAIN' => 'Zobrazím URL v zdrojoch RSS posleného prispevku všetkých tém.<br/>  V predvolenom nastavení je uvedený len posledný príspevok každého vlákna. Táto voľba je užitočná ak chcete len zaznamenať URL prvého prispevku v zdrojoch RSS.<br/>Prosím čítajte: Nastavením Prvej správy na Áno a poslednej správy na Nie je rovnaké ako zostavenie nových zdrojov.',
	'RSS_FORUM_RULES' => 'Zobrazenie pravidiel fóra',
	'RSS_FORUM_RULES_EXPLAIN' => 'Zobrazím pravidlá fóra v zdrojoch RSS.',
	// Reset settings
	'RSS_FORUM_RESET' => 'Modul RSS vo fóre',
	'RSS_FORUM_RESET_EXPLAIN' => 'Resetujem všetky nastavenia modulu RSS vo fóre na predvolené hodnoty.',
	'RSS_FORUM_MAIN_RESET' => 'Hlavne RSS fóra',
	'RSS_FORUM_MAIN_RESET_EXPLAIN' => 'Resetujem všetky nastavenia v "Nastavených zdrojoch RSS" (hlavná) tabuľka fóra v module RSS.',
	'RSS_FORUM_CONTENT_RESET' => 'Obsah fór v RSS',
	'RSS_FORUM_CONTENT_RESET_EXPLAIN' => 'Resetujem všetky nastavenia obsahu fór v module RSS.',
	'RSS_FORUM_CACHE_RESET' => 'Cache RSS fór',
	'RSS_FORUM_CACHE_RESET_EXPLAIN' => 'Resetujem všetky nastavenia medzipamäte modulu fóra RSS.',
	'RSS_FORUM_MODREWRITE_RESET' => 'Prepísanie URL zdrojov v RSS ',
	'RSS_FORUM_MODREWRITE_RESET_EXPLAIN' => 'Resetujem všetky nastavenia prepísaných URL obsahu fór v module RSS.',
	'RSS_FORUM_GZIP_RESET' => 'Použité Gunzip v RSS fóra',
	'RSS_FORUM_GZIP_RESET_EXPLAIN' => 'Resetujem všetky nastavenia Gunzip obsahu fór v module RSS.',
	'RSS_FORUM_LIMIT_RESET' => 'Obmedzenia fór v RSS',
	'RSS_FORUM_LIMIT_RESET_EXPLAIN' => 'Resetujem všetky nastavenia limitov obsahu fór v module RSS.',
	'RSS_FORUM_SORT_RESET' => 'Vytriedenie obsahu fór v RSS',
	'RSS_FORUM_SORT_RESET_EXPLAIN' => 'Resetujem všetky nastavenia vytriedeného obsahu fór v module RSS.',
	'RSS_FORUM_PAGINATION_RESET' => 'Stránkovanie fór v RSS',
	'RSS_FORUM_PAGINATION_RESET_EXPLAIN' => 'Resetujem všetky nastavenia Stránkovania obsahu fór v module RSS.',
));
?>
