<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: google_forum.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* google_forum [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'GOOGLE_FORUM' => 'Mapovanie stránok fóra',
	'GOOGLE_FORUM_EXPLAIN' => 'Ide o nastavenie modulu fóra pre mapovanie Google.<br/> Niektoré nastavenia sa anulujú v závislosti na mapovaní stránok prepísaním hlavných nastavení Google.',
	'GOOGLE_FORUM_SETTINGS' => 'Nastavenia mapovania stránok fóra',
	'GOOGLE_FORUM_SETTINGS_EXPLAIN' => 'Nasledujúce nastavenia sú špecifické pre modul fóra mapovanie stránok Google.',
	'GOOGLE_FORUM_STICKY_PRIORITY' => 'Priorita Prilepenia',
	'GOOGLE_FORUM_STICKY_PRIORITY_EXPLAIN' => 'Priorita Prilepenia (musí byť zadané číslo medzi 0.0 a 1.0 vrátane).',
	'GOOGLE_FORUM_ANNOUCE_PRIORITY' => 'Priorita Oznámenia',
	'GOOGLE_FORUM_ANNOUCE_PRIORITY_EXPLAIN' => 'Priorita Oznámenia (musí byť zadané číslo medzi 0.0 a 1.0 vrátane).',
	'GOOGLE_FORUM_GLOBAL_PRIORITY' => 'Globálna Priorita Oznámenia',
	'GOOGLE_FORUM_GLOBAL_PRIORITY_EXPLAIN' => 'Globálna Priorita Oznámenia (musí byť zadané číslo medzi 0.0 a 1.0 vrátane).',
	'GOOGLE_FORUM_EXCLUDE' => 'Vylúčenie Fór',
	'GOOGLE_FORUM_EXCLUDE_EXPLAIN' => 'V tomto nastavení môžete vylúčiť jedno alebo viac fór zo zoznamu mapovania stránok.<br /><u>Poznámka :</u> Ak v tomto zadaní nebude označené nič, budú evidované všetky verejné fóra v zozname.',
	// Reset settings
	'GOOGLE_FORUM_RESET' => 'Modul mapovanie stránok fóra',
	'GOOGLE_FORUM_RESET_EXPLAIN' => 'Resetujem všetky nastavenia modulu mapovania stránok fóra na predvolené hodnoty.',
	'GOOGLE_FORUM_MAIN_RESET' => 'Hlavné mapovanie stránok fóra',
	'GOOGLE_FORUM_MAIN_RESET_EXPLAIN' => 'Resetujem všetky nastavenia v "Mapovanie Stránok Fóra" (hlavná) tabuľka v module mapovania stránok fóra.',
	'GOOGLE_FORUM_CACHE_RESET' => 'Cache mapovania stránok fóra',
	'GOOGLE_FORUM_CACHE_RESET_EXPLAIN' => 'Resetujem všetky nastavenia medzipamäte modulu mapovania stránok fóra na predvolené hodnoty.',
	'GOOGLE_FORUM_MODREWRITE_RESET' => 'Prepísané URL zmapovaných stránok fóra',
	'GOOGLE_FORUM_MODREWRITE_RESET_EXPLAIN' => 'Resetujem všetky nastavenia prepísaných URL v module zmapovaných stránok fóra na predvolené hodnoty.',
	'GOOGLE_FORUM_GZIP_RESET' => 'Fóra mapovanie stránok gunzip',
	'GOOGLE_FORUM_GZIP_RESET_EXPLAIN' => 'Resetujem všetky nastavenia gunzip v module zmapovaných stránok fóra.',
	'GOOGLE_FORUM_LIMIT_RESET' => 'Limity mapovanie stránok fóra',
	'GOOGLE_FORUM_LIMIT_RESET_EXPLAIN' => 'Resetujem všetky nastavenia limitov v module zmapovaných stránok fóra.',
	'GOOGLE_FORUM_SORT_RESET' => 'Vytriedenie mapovaných stránok fóra',
	'GOOGLE_FORUM_SORT_RESET_EXPLAIN' => 'Resetujem všetky nastavenia roztriedenia v module zmapovaných stránok fóra.',
	'GOOGLE_FORUM_PAGINATION_RESET' => 'Stránkovanie zmapovaných stránok fóra',
	'GOOGLE_FORUM_PAGINATION_RESET_EXPLAIN' => 'Resetujem všetky nastavenia stránkovania v module zmapovaných stránok fóra.',
));
?>