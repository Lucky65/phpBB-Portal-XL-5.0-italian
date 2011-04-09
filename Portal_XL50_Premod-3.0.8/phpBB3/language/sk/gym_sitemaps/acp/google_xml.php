<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: google_xml.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* google_xml [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'GOOGLE_XML' => 'XML Mapy stránok',
	'GOOGLE_XML_EXPLAIN' => 'Toto nastavenie sa jedná parameterov pre modul XML Google Mapy stránok. Tento modul umožňuje plne integrovať Zoznam adries URL zo súboru XML (na URL pre každý riadok) v GYM Mapy stránok a tak využiť všetky vlastností modulu ako je štýl XSLT a ich ukladanie do medzipamäte.<br/> Niektoré nastavenia môžu byť prepísané v závislosti na Google Mapa stránok a na hlavnom nastavení <b>Prepísaniee</b>.<br/>Každý súbor xml bude v Adresáry: gym_sitemaps/sources/ a budú brané do úvahy, keď budete prečisťovať cache.<br/> Každý zoznam URL v súbore XML musí byť uložený v jenom riadku s úplnou adresou URL a musí sa dodržať základný vzorec pre pomenovanie súborov : <b>google_</b>xml_file_name<b>.xml</b>.<br />Vstup bude vytvorený v Indexe Mapy stránok s URL <b>example.com/sitemap.php?xml=xml_file_name</b> alebo <b>example.com/xml-xml_file_name.xml</b> už s prepísanov url.<br/> Pre názov zdrojového súboru je potrebné použiť alfanumerické znaky (0-9a-Z) a obidva oddeľovače "_" a "-".<p>Môžete tiež využiť plnú mapa URL vygenerovanú externými aplikáciami, konfiguráciou súboru gym_sitemaps / sources / xml_google_external.php (Prečítajte si komentáre v súbore pre viac informácií).</p><u style="color:red;">Poznámka :</u><br/> Odporúča sa, aby tento modul mapa stránok bol v cache, aby sa zabránilo zbytočnému parsovaniu potenciálne veľkých súborov XML.',
	// Main
	'GOOGLE_XML_CONFIG' => 'XML nastavenie Mapy stránok',
	'GOOGLE_XML_CONFIG_EXPLAIN' => 'Niektoré nastavenia môžu byť prepísané v závislosti na Google Mapa stránok v hlavnom  nastavení <b>Prepísanie</b>.',
	'GOOGLE_XML_RANDOMIZE' => 'Transformácia',
	'GOOGLE_XML_RANDOMIZE_EXPLAIN' => 'Môžete transformovať nahodné URL z xml súboru. Zmenené poradie na pravidelnom základe môže trochu pomôcť presunu. Táto voľba je tiež užitočné napríklad, keď chcete obmedziť url na 1000 pre tento modul a používať súbory xml zdrojových 5000 url, v takýchto prípadoch sa všetkých 5000 URL budú pravidelne zobrazovať na zodpovedajúcej mape.<br/><u>Poznámka :</u><br/>Táto možnosť vyžaduje plné parsovanie zdrojového súboru, odporúča sa použiť, keď sa aktivuje do medzipamäte.',
	'GOOGLE_XML_UNIQUE' => 'Kontrola duplikátov',
	'GOOGLE_XML_UNIQUE_EXPLAIN' => 'Aktivovaním, sa zabezpečite, že ak vaša URL sa nachádza v xml súbore viac ako 1 krát, tak sa týmto aktivovaním zobrazí v mape stránok len jedna.<br/><u>Poznámka :</u><br/>Táto možnosť vyžaduje plné parsovanie zdrojového súboru, odporúča sa použiť, keď sa aktivuje do medzipamäte.',
	'GOOGLE_XML_FORCE_LASTMOD' => 'Posledná zmena',
	'GOOGLE_XML_FORCE_LASTMOD_EXPLAIN' => 'Môžete donútiť poslednú zmenu času založenie v cache (aj keď vyrovnávacia pamäť nie je aktivovaná) pre všetky adresy URL v súbore Mapy stránok. Modul tiež nastaví priority a zmení frekvencie založené na tomto poslednom čase. Navyše poslednej modifikícii, zmení frekvenciu a prioritné značky uvedené v zdrojovom súbore xml, ale aj ak v poslednej modifikícii zdrojoveho súbore značky všetky nie sú.<br/><u>Poznámka :</u><br/>Táto možnosť vyžaduje plné parsovanie zdrojového súboru, odporúča sa použiť, keď sa aktivuje do medzipamäte.',
	'GOOGLE_XML_FORCE_LIMIT' => 'Nanútenie limitu',
	'GOOGLE_XML_FORCE_LIMIT_EXPLAIN' => 'V tomto zadani sa môžete uistiť, či nie je prekročený limit, ako je maximálne množstvo URL ktoré budú zobrazené v mape stránok.<br/><u>Poznámka :</u><br/>Táto volba vyžaduje plnu kontrolu syntaktaxu a analýzu zdrojového súboru, toto sa doporučuje použiť pri aktivovaní medzipamäte.',
	// Reset settings
	'GOOGLE_XML_RESET' => 'Modul XML Mapy stránok',
	'GOOGLE_XML_RESET_EXPLAIN' => 'Resetujem všetky nastavenia "XML Mapy stránok" (hlavnú) tabulku modulu XML Mapy stránok.',
	'GOOGLE_XML_MAIN_RESET' => 'Nastavenia XML Mapy stránok',
	'GOOGLE_XML_MAIN_RESET_EXPLAIN' => 'Resetujem všetky nastavenia "XML Mapy stránok" (hlavnú) tabulku modulu XML Mapy stránok.',
	'GOOGLE_XML_CACHE_RESET' => 'XML Mapy stránok v Cache',
	'GOOGLE_XML_CACHE_RESET_EXPLAIN' => 'Resetujem všetky nastavenia medzipamäte modulu XML Mapy stránok.',
	'GOOGLE_XML_GZIP_RESET' => 'XML Gunzip Mapy stránok',
	'GOOGLE_XML_GZIP_RESET_EXPLAIN' => 'Resetujem všetky nastavenia Gunzip modulu XML Mapy stránok.',
	'GOOGLE_XML_LIMIT_RESET' => 'XML Limit Mapy stránok',
	'GOOGLE_XML_LIMIT_RESET_EXPLAIN' => 'Resetujem všetky nastavenia Limity modulu XML Mapy stránok.',
));
?>