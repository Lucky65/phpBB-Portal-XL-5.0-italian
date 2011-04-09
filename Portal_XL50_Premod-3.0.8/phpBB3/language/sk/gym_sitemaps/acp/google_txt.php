<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: google_txt.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* google_txt [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'GOOGLE_TXT' => 'TXT Mapa stránok',
	'GOOGLE_TXT_EXPLAIN' => 'Jedná sa o parameter TXT pre Mapovanie stránok modulu Google. Je možné plne integrovať zoznam URL z textového súboru (na URL na riadok) v mapovaní stránok GYM a využiť všetky vlastností modulu ako je XSLt úprava a ukladanie.<br/> Niektoré nastavenia môžu byť prepísané v závislosti na Google mapovaní stránok a na hlavnom nastavení <b>Prepísanie</b>.<br/>Každý textový súbor pridaný do adresára gym_sitemaps/sources/ bude zobraný do úvahy, pri čistení cache cez ACP pomocou odkazu ktorý je vyššie.<br/> Každý zoznam URL v textovom súbore musí byť uložený v jenom riadku s úplnou adresou URL a musí sa dodržať základný vzorec pre pomenovanie súborov : <b>google_</b>txt_file_name<b>.txt</b>.<br />Vstup bude vytvorený v Indexe Mapy stránok s URL <b>example.com/sitemap.php?txt=txt_file_name</b> alebo <b>example.com/txt-txt_file_name.xml</b> už s prepísanov url.<br/> Pre názov zdrojového súboru je potrebné použiť alfanumerické znaky (0-9a-Z) a obidva oddeľovače "_" a "-".<br/><u style="color:red;">Poznámka :</u><br/> Odporúča sa, aby modul mapa stránok bol v cache, aby sa zabránilo zbytočnej syntaktickej analýze potenciálne veľkých textových súborov.',
	// Main
	'GOOGLE_TXT_CONFIG' => 'Nastavenie Mapa stránok TXT',
	'GOOGLE_TXT_CONFIG_EXPLAIN' => 'Niektoré nastavenia môžu byť prepísané v závislosti na Google mapovaní stránok a na hlavnom nastavení <b>Prepísanie</b>.',
	'GOOGLE_TXT_RANDOMIZE' => 'Transformácia',
	'GOOGLE_TXT_RANDOMIZE_EXPLAIN' => 'Môžete transformovať nahodné URL z textového súboru. Zmenené poradie na pravidelnom základe môže trochu pomôcť presunu. Táto voľba je tiež užitočné napríklad, keď chcete obmedziť url na 1000 pre tento modul a používať súbory s textom zdrojových 5000 url, v takýchto prípadoch sa všetkých 5000 URL budú pravidelne zobrazovať na zodpovedajúcej mape.',
	'GOOGLE_TXT_UNIQUE' => 'Kontrola duplicitných',
	'GOOGLE_TXT_UNIQUE_EXPLAIN' => 'Aktivovanim, sa ubezpečíte, že či niektoré URL objavujú viac ako raz v texte zdroja, i keď sa zobrazí iba raz v Mape stránok.',
	'GOOGLE_TXT_FORCE_LASTMOD' => 'Posledná zmena',
	'GOOGLE_TXT_FORCE_LASTMOD_EXPLAIN' => 'Môžete donútiť zotrvanie poslednej modifikácie v cykle cache (aj keď vyrovnávacia pamäť nie je aktivovaná) pre všetky adresy URL v súbore Mapy stránok. Modul odhadne priority a zmeny frekvencie založené na tomto poslednom časovom móde. V predvolenom nastavení nie je pridaný žiadny príznak.',
	// Reset settings
	'GOOGLE_TXT_RESET' => 'TXT Modul Mapy stránok',
	'GOOGLE_TXT_RESET_EXPLAIN' => 'Resetujem všetky nastavenia, radenia TXT module Mapy stránok.',
	'GOOGLE_TXT_MAIN_RESET' => 'Nastavenie TXT Mapy stránok',
	'GOOGLE_TXT_MAIN_RESET_EXPLAIN' => 'Resetujem všetky nastavenia, volieb "nastavených v TXT Mapy stránok" (hlavná) tabuľka TXT module Mapy stránok.',
	'GOOGLE_TXT_CACHE_RESET' => 'TXT Mapy stránok Cache',
	'GOOGLE_TXT_CACHE_RESET_EXPLAIN' => 'Resetujem všetky nastavenia, volieb medzipamäte v TXT module Mapy stránok.',
	'GOOGLE_TXT_GZIP_RESET' => 'TXT Mapy stránok Gunzip',
	'GOOGLE_TXT_GZIP_RESET_EXPLAIN' => 'Resetujem všetky nastavenia, volieb Gunzip v TXT module Mapy stránok.',
	'GOOGLE_TXT_LIMIT_RESET' => 'Limit TXT Mapy stránok',
	'GOOGLE_TXT_LIMIT_RESET_EXPLAIN' => 'Resetujem všetky nastavenia, zvolených Limitov v TXT module Mapy stránok.',
));
?>