<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: html_forum.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* html_forum [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'HTML_FORUM' => 'HTML Modul Fóra',
	'HTML_FORUM_EXPLAIN' => 'Tieto nastavenie sú pre modul fóra HTML.<br/> Niektoré HTML môžu byť prepísané v závislosti na nastavení v zadaní <b>Prepísanie</b> HTML.',
	'HTML_FORUM_EXCLUDE' => 'Vylúčenie fór',
	'HTML_FORUM_EXCLUDE_EXPLAIN' => 'V tomto zadaní môžete vylúčiť jedno alebo viac fór zo zoznamu RSS.<br /><b>Poznámka :</b> Ak ostane toto pole prázdne, budú uvedené všetky načítané fóra.',
	'HTML_FORUM_ALLOW_NEWS' => 'Novinky fóra',
	'HTML_FORUM_ALLOW_NEWS_EXPLAIN' => 'Stránka fóra novinky je stránka zobrazujúca jednu alebo viac tém, zakladných príspevkov ako zostrihnuté, alebo nie a pochádza z jedného alebo viacerých fór z ktorých si môžete vybrať nižšie.',
	'HTML_FORUM_ALLOW_CAT_NEWS' => 'Kategórie noviniek fóra',
	'HTML_FORUM_ALLOW_CAT_NEWS_EXPLAIN' => 'Ak je toto zadanie aktívne, každé vylúčené fórum bude mať stránku noviniek pre témy.',
	'HTML_FORUM_NEWS_IDS' => 'Zdroje noviniek fóra',
	'HTML_FORUM_NEWS_IDS_EXPLAIN' => 'V tomto zadaní si môžete vybrať jedno alebo viac fór, a to aj súkromné, ako zdroj noviniek pre hlavnú stránku fóra.<br /><b>Poznámka</b> :<br />Ak v zadaní nebude nič označené, budú všetky platné fóra sa brať ako zdroj pre stránku noviniek fóra.',
	'HTML_FORUM_LTOPIC' => 'Voliteľný posledný aktívny zoznam tém',
	'HTML_FORUM_INDEX_LTOPIC' => 'Zobrazenie fóra v mape',
	'HTML_FORUM_INDEX_LTOPIC_EXPLAIN' => 'Zobrazim, posledný aktívny zoznam tém na mape fóra. <br/>Zadajte počet tém pre zobrazenie, 0 deaktivuje.',
	'HTML_FORUM_CAT_LTOPIC' => 'Zobrazenie kategórii v mape fór',
	'HTML_FORUM_CAT_LTOPIC_EXPLAIN' => 'Zobrazim, posledný aktívny zoznam tém v každej mape fóra.<br/>Zadajte počet tém pre zobrazenie, 0 deaktivuje.',
	'HTML_FORUM_NEWS_LTOPIC' => 'Zobrazenie stránky noviniek fóra',
	'HTML_FORUM_NEWS_LTOPIC_EXPLAIN' => 'Zobrazim, posledný aktívny zoznam tém na stránke aktualit fóra.<br/>Zadajte počet tém pre zobrazenie, 0 deaktivuje.',
	'HTML_FORUM_CAT_NEWS_LTOPIC' => 'Zobrazenie kategórii stránky noviniek fóra',
	'HTML_FORUM_CAT_NEWS_LTOPIC_EXPLAIN' => 'Zobrazim, posledný aktívny zoznam tém na každej stránke aktualit fóra.<br/>Zadajte počet tém pre zobrazenie, 0 deaktivuje.',
	'HTML_FORUM_LTOPIC_PAGINATION' => 'Posledne aktívne témy stránkovania',
	'HTML_FORUM_LTOPIC_PAGINATION_EXPLAIN' => 'Zobrazim, stránkovanie témy v poslednom aktívnom zozname tém.',
	'HTML_FORUM_LTOPIC_EXCLUDE' => 'Posledne aktívne témy zoznam vylúčených',
	'HTML_FORUM_LTOPIC_EXCLUDE_EXPLAIN' => 'V tomto zadaní môžete vylúčiť z fóra, viac ako jeden, posledný aktívny výpis tém.<br /><b>Poznámka :</b> Ak ostane toto pole prázdne, budú uvedené všetky platné výpisy fóra.',
	// Pagination
	'HTML_FORUM_PAGINATION' => 'Stránkovanie máp fóra',
	'HTML_FORUM_PAGINATION_EXPLAIN' => 'Aktivujte zadania, pokiaľ chcete zobrazovať viac ako jednu stránku a zoznam všetkých tém v každej mape fóra.',
	'HTML_FORUM_PAGINATION_LIMIT' => 'Tém na stránke',
	'HTML_FORUM_PAGINATION_LIMIT_EXPLAIN' => 'Keď je aktivované stránkovanie mapy fóra, tak tu môžete zadať počet tém pre zobrazenie na jednej stránke.',
	// Content
	'HTML_FORUM_CONTENT' => 'Nastavenie Obsahu Fóra',
	'HTML_FORUM_FIRST' => 'Zoradenie Máp',
	'HTML_FORUM_FIRST_EXPLAIN' => 'Mapy fóra sa môžu zoradiť podľa zostarnutia, prvá téma prvé miesto, alebo téma posledného príspevku. To znamená, že môžete použiť zoradenie podľa vytvorenia tém, alebo poradie poslednej odpovede.',
	'HTML_FORUM_NEWS_FIRST' => 'Zoradenie noviniek',
	'HTML_FORUM_NEWS_FIRST_EXPLAIN' => 'Stránky noviniek fóra sa môžu zoradiť podľa zostarnutia, prvá téma prvé miesto, alebo téma posledného príspevku. To znamená, že môžete použiť zoradenie podľa vytvorenia tém, alebo poradie poslednej odpovede.',
	'HTML_FORUM_LAST_POST' => 'Zobrazím posledný príspevok',
	'HTML_FORUM_LAST_POST_EXPLAIN' => 'Zobrazim, informáciu o téme evidovanej v zozname posledného príspevku.',
	'HTML_FORUM_POST_BUTTONS' => 'Zobrazím odosielacie tlačitko',
	'HTML_FORUM_POST_BUTTONS_EXPLAIN' => 'Zobrazim odosielacie tlačitko ako napríklad, odpoveď, editovať a tak ďalej ...',
	'HTML_FORUM_RULES' => 'Zobrazím pravidlá fóra',
	'HTML_FORUM_RULES_EXPLAIN' => 'Zobrazím pravidlá, vo fóre Novinky a mapa stránok.',
	'HTML_FORUM_DESC' => 'Zobrazím opis pravidiel fóra',
	'HTML_FORUM_DESC_EXPLAIN' => 'Zobrazím opis pravidiel fóra, v mape stránok fóra a nových tém.',
	// Reset settings
	'HTML_FORUM_RESET' => 'HTML moduly fóra',
	'HTML_FORUM_RESET_EXPLAIN' => 'Resetujem všetky nastavenia modulov HTML fóra na predvolené hodnoty.',
	'HTML_FORUM_MAIN_RESET' => 'Hlavné HTML fóra',
	'HTML_FORUM_MAIN_RESET_EXPLAIN' => 'Resetujem na predvolené všetky voľby v "Nastaveniach HTML" (hlavná) tabuľka HTML v module fóra.',
	'HTML_FORUM_CONTENT_RESET' => 'Nové HTML fóra',
	'HTML_FORUM_CONTENT_RESET_EXPLAIN' => 'Resetujem všetky nastavenia na predvolené hodnoty nových HTML v module fóra.',
	'HTML_FORUM_CACHE_RESET' => 'V cache HTML fóra',
	'HTML_FORUM_CACHE_RESET_EXPLAIN' => 'Resetujem všetky nastavenia HTML modulov fóra rýchlej pamäte.',
	'HTML_FORUM_MODREWRITE_RESET' => 'HTML prepísanie URL fóra',
	'HTML_FORUM_MODREWRITE_RESET_EXPLAIN' => 'Resetujem na predvolené všetky nastavenia prepísaných URL modulov HTML fóra.',
	'HTML_FORUM_GZIP_RESET' => 'Použité Gunzip v HTML fóra',
	'HTML_FORUM_GZIP_RESET_EXPLAIN' => 'Resetujem na predvolené všetky nastavenia Gunzip modulov HTML fóra.',
	'HTML_FORUM_LIMIT_RESET' => 'Obmedzenie HTML fóra',
	'HTML_FORUM_LIMIT_RESET_EXPLAIN' => 'Resetujem na predvolené všetky nastavenia limitov HTML fóra.',
	'HTML_FORUM_SORT_RESET' => 'Triedenie HTML fóra',
	'HTML_FORUM_SORT_RESET_EXPLAIN' => 'Resetujem na predvolené všetky nastavenia Roztriedených modulov HTML fóra.',
	'HTML_FORUM_PAGINATION_RESET' => 'Stránkovanie HTML fóra',
	'HTML_FORUM_PAGINATION_RESET_EXPLAIN' => 'Resetujem na predvolené všetky nastavenia Stránkovania modulov HTML fóra.',
));
?>