<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_common.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_common [Slovak] preložil J.P alias Brahma
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
	// Main
	'ALL' => 'Všetko',
	'MAIN' => 'Mapovanie stránok GYM',
	'MAIN_MAIN_RESET' => 'Mapovanie stránok GYM hlavné nastavenia',
	'MAIN_MAIN_RESET_EXPLAIN' => 'Resetujem všetky hlavné nastavenia GYM na predvolené hodnoty.',
	// Linking setup
	'GYM_LINKS_ACTIVATION' => 'Prepojenie Fór',
	'GYM_LINKS_MAIN' => 'Hlavné odkazy',
	'GYM_LINKS_MAIN_EXPLAIN' => 'Zobrazím odkazy GYM dole v lište hlavnej stránky: Ide o zoznam Mapy stránok, hlavné RSS napojenia zoznamu stránok ako aj základné mapy a nové stránky.',
	'GYM_LINKS_INDEX' => 'Odkazy na index',
	'GYM_LINKS_INDEX_EXPLAIN' => 'Zobrazím odkazy na dostupné stránky každého fóra v obsahu fóra. Tieto linky sú pripojené pod popisom fóra.',
	'GYM_LINKS_CAT' => 'Odkazy na domovskej stránke fóra',
	'GYM_LINKS_CAT_EXPLAIN' => 'Zobrazím dostupné odkazy stránky na stránke fóra. Tieto odkazy sú pripojené pod názvom fóra.',
	// Google sitemaps
	'GOOGLE' => 'Google',
	// Reset settings
	'GOOGLE_MAIN_RESET' => 'Mapovanie stránok Google hlavné nastavenia',
	'GOOGLE_MAIN_RESET_EXPLAIN' => 'Resetujem všetky hlavné nastavenia Mapovnia stránok Google na predvolené hodnoty.',
	// RSS feeds
	'RSS' => 'RSS',
	'RSS_ALTERNATE' => 'Alternatívne odkazy RSS',
	'RSS_ALTERNATE_EXPLAIN' => 'Zobrazím Alternatívne odkazy RSS v navigačnej lište prehliadačoch',
	'RSS_LINKING_TYPE' => 'Typ Prepojení RSS',
	'RSS_LINKING_TYPE_EXPLAIN' => 'Typ zdrojov pre zobrazenie stránky mimo fórum.<br/>Môže byť nastavené na :<br/><b>&bull; Nové Zdroje s obsahom, alebo Nové Zdroje bez obsahu</b><br/>Položky sú zobrazené v poradí, dátum vytvorenia, alebo sú zobrazené bez obsahu,<br/><b>&bull; Regulárne Zdroje s obsahom, alebo Regulárne Zdroje bez obsahu</b><br/>Položky sú zobrazené podľa dátumu poslednej aktivity, alebo sú zoradené bez obsahu.<br/>Toto sa týka iba zobrazených odkazov, nie v skutočnosti dostupných zdrojov.',
	'RSS_LINKING_NEWS' => 'Nové Zdroje bez obsahu',
	'RSS_LINKING_NEWS_DIGEST' => 'Nové Zdroje s obsahom',
	'RSS_LINKING_REGULAR' => 'Regulárne Zdroje bez obsahu',
	'RSS_LINKING_REGULAR_DIGEST' => 'Regulárne Zdroje s obsahom',
	// Reset settings
	'RSS_MAIN_RESET' => 'RSS hlavné nastavenia',
	'RSS_MAIN_RESET_EXPLAIN' => 'Resetujem všetky hlavné nastavenia RSS na predvolené hodnoty.',
	'YAHOO' => 'Yahoo',
	// HTML
	'HTML_MAIN_RESET' => 'Globálne nastavenia HTML',
	'HTML_MAIN_RESET_EXPLAIN' => 'Resetujem všetky hlavné nastavenia zmapovaných HTML ako aj nových HTML na predvolené hodnoty.',
	'HTML' => 'Html',

	// GYM authorisation array
	'GYM_AUTH_ADMIN' => 'Admin',
	'GYM_AUTH_GLOBALMOD' => 'Všetci moderátory',
	'GYM_AUTH_REG' => 'Prihlásený',
	'GYM_AUTH_GUEST' => 'Hostia',
	'GYM_AUTH_ALL' => 'Všetci',
	'GYM_AUTH_NONE' => 'Nikto',
	// XSLT
	'GYM_STYLE' => 'Dizajn',

	// Cache status
	'SEO_CACHE_FILE_TITLE' => 'Stav Cache',
	'SEO_CACHE_STATUS' => 'Súbor cache je nakonfigurovaný v: <b>%s</b>',
	'SEO_CACHE_FOUND' => 'Súbor cache som našiel.',
	'SEO_CACHE_NOT_FOUND' => 'Súbor cache som nenašiel.',
	'SEO_CACHE_WRITABLE' => 'Súbor cache je zapisovateľný.',
	'SEO_CACHE_UNWRITABLE' => 'Súbor cache <b>nie je</b> zapisovateľný.  Prosím nastavte atribút zložky cache na 0777.',
	
	// Mod Rewrite type
	'ACP_SEO_SIMPLE' => 'Základné',
	'ACP_SEO_MIXED' => 'Zmiešané',
	'ACP_SEO_ADVANCED' => 'Rozšírené',
	'ACP_PHPBB_SEO_VERSION' => 'Verzia',
	'ACP_SEO_SUPPORT_FORUM' => 'Podpora cez Fórum',
	'ACP_SEO_RELEASE_THREAD' => 'Práve Dostupný Subjekt',
	'ACP_SEO_REGISTER_TITLE' => 'Zaregistrovať',
	'ACP_SEO_REGISTER_UPDATE' => 'informovaniu o aktualizáciách',
	'ACP_SEO_REGISTER_MSG' => 'Možno sa budete chcieť %1$s kvôli %2$s',

	// Maintenance
	'GYM_MAINTENANCE' => 'Údržba',
	'GYM_MODULE_MAINTENANCE' => '%1$s údržbov',
	'GYM_MODULE_MAINTENANCE_EXPLAIN' => 'Tu si môžete spravovať súbory vo vyrovnávacej pamäti používané modulom %1$s.<br/> Existujú dva typy: jeden sa používa pre ukladanie výstupných dát pre verejné stránky, a použivajú sa na vybudovanie každého modulu ACP. Môžete odstrániť moduly ACP z cache ak označíte vyčistiť cache; predvolené je vyčistenie obsahu cache pre vybrané moduly.',
	'GYM_CLEAR_CACHE' => 'Prečistenie cache %1$s',
	'GYM_CLEAR_CACHE_EXPLAIN' => 'Môžete prečistiť súbory cache modulu %1$s. Tieto súbory cache obsahujú údaje, ktoré sa používajú pri vytvorení výstupov %1$s.<br/>Tento výkon je užitočný ak chcete obnoviť cache.',
	'GYM_CLEAR_ACP_CACHE' => 'Prečistenie ACP %1$s',
	'GYM_CLEAR_ACP_CACHE_EXPLAIN' => 'Môžete zvoliť aj toto, prečistenie nastavení cache ACP %1$s. Tieto súbory cache obsahujú údaje ktoré sa používajú pri vytvorení ACP %1$s.<br/>Toto prečistenie je užitočné ak chcete aktivovať nové možnosti, ktoré môžu byť pridané do modulov tohto typu výstupu.',
	'GYM_CACHE_CLEARED' => 'Prečistenie cache prebehlo úspešne v : ',
	'GYM_CACHE_NOT_CLEARED' => 'Došlo k chybe pri prečistení cache, skontrolujte oprávnenia zložky (chmod 0666 alebo 0777).<br/>Zložka aktualne je spracovávana pre cache is : ',
	'GYM_FILE_CLEARED' => 'Vymazané Súbor(y): ',
	'GYM_CACHE_ACCESSED' => 'Zložka medzipamäte bola riadne sprístupnená, ale neboli vymazané žiadne súbory: ',
	'MODULE_CACHE_CLEARED' => 'Modul ACP v cache bol úspešne prečistený, ak ste práve nahral modul, tak sa teraz v ACP ukáže.',
	
	// set defaults
	'GYM_SETTINGS' => 'Nastavenia',
	'GYM_RESET_ALL' => 'Resetovať Všetko',
	'GYM_RESET_ALL_EXPLAIN' => 'Ak zadáte Áno, budú všetky vyššie uvedené nastavenia tohoto balíka, nastavené na predvolené.',
	'GYM_RESET' => 'Resetovanie nastavení %1$s',
	'GYM_RESET_EXPLAIN' => 'Cez tieto nastavenia môžete resetovať nastavenia modulov %1$s, a to naraz celý modul, alebo jednotlivé nastavenia súborov modulu.',

	'GYM_INSTALL' => 'Inštalácia',
	'GYM_MODULE_INSTALL' => 'Inštalácia modulu %1$s',
	'GYM_MODULE_INSTALL_EXPLAIN' => 'Nižšie si môžete aktivovať / deaktivovať modul %1$s.<br/>Ak ste práve nahral modul, musíte ho aktivovať, aby sa dal používať.<br/>Ak nevidíte nový modul, skúste prečistiť medzipamäť modulu údržba stránky v ACP.',

	// Titles
	'GYM_MAIN' => 'Nastavenia Mapy stránok GYM',
	'GYM_MAIN_EXPLAIN' => 'Jedná sa o nastavenie spoločné pre všetky typy výstupov a pre všetky moduly.<br/> Aplikované môžu byť všetky typy výstupov (html, RSS, Google sitemaps, Yahoo! url list) a to všetkých modulov v závislosti na vašom nastavení.',
	'MAIN_MAIN' => 'Prehľad Mapy stránok GYM',
	'MAIN_MAIN_EXPLAIN' => 'Mapovania stránok GYM je veľmi flexibilný vyhľadávač Optimalizovaný modul pre phpBB. Umožňuje vybudovať cez Google mapu stránok, RSS 2.0 kanálov, Yahoo! zoznamy URL a mapy stránok html pre vaše fórum, rovnako ako pre akúkoľvek časť vašej web stránky vďaka modularite.<br/><br/> Každý výstup typu (Google, RSS, html & Yahoo) môže zachytiť položky na zozname z niekoľkých aplikácií nainštalovaných vo vašom webe (fórum, albumy, atď ...) pomocou špecializovaného modulu.<br/>Môžete aktivovať / deaktivovať pomocou modulov inštaláciu linku každého typu výstupu cez tento ACP, každý modul má svoju vlastnú stránku nastavenia.<br/><br/>Uistite sa, že máte %1$s, podporu najdete tu %2$s.<br/>Všeobecná podpora SEO a diskusia je tiež na %3$s<br/>%4$s<br/>',

	'GYM_GOOGLE' => 'Mapovanie stránok Google',
	'GYM_GOOGLE_EXPLAIN' => 'Ide o spoločné nastavenie pre všetky stránky mapovaných s Google moduly (nastavenia fóra, atď ...).<br/> Môžu sa použiť na všetky moduly mapovania stránok Google v závislosti na výstupe hlavných nastavení pre tento typ modulu.',
	'GYM_RSS' => 'Kanály RSS',
	'GYM_RSS_EXPLAIN' => 'Ide o spoločné nastavenie pre všetky kanály RSS moduly (nastavenia fóra, atď ...).<br/> Môžu sa použiť na všetky moduly kanálov RSS v závislosti na výstupe hlavných nastavení pre tento typ modulu.',
	'GYM_HTML' => 'Stránky HTML',
	'GYM_HTML_EXPLAIN' => 'Ide o spoločné nastavenie pre všetky HTML moduly (nastavenia fóra, atď ...).<br/> Môžu sa použiť na všetky moduly HTML v závislosti na výstupe hlavných nastavení pre tento typ modulu.',
	'GYM_MODULES_INSTALLED' => 'Modul(y) nie je aktívny',
	'GYM_MODULES_UNINSTALLED' => 'Modul(y) nie je aktívny',

	// Overrides
	'GYM_OVERRIDE_GLOBAL' => 'Komplexný',
	'GYM_OVERRIDE_OTYPE' => 'Typ Výstupu',
	'GYM_OVERRIDE_MODULE' => 'Modul',
	
	// override messages
	'GYM_OVERRIDED_GLOBAL' => 'Táto voľba je aktuálne prepísaná na najvyššiu úroveň (Hlavné nastavenia)',
	'GYM_OVERRIDED_OTYPE' => 'Táto voľba je aktuálne prepísaná na typ výstupnej úrovni',
	'GYM_OVERRIDED_MODULE' => 'Táto voľba je aktuálne prepísaná na úroveň modulu',
	'GYM_OVERRIDED_VALUE' => 'Aktuálna hodnota prichádza do úvahy: ',
	'GYM_OVERRIDED_VALUE_NOTHING' => 'žiadna',
	'GYM_COULD_OVERRIDE' => 'Táto voľba by mohla byť vyradená, ale aktuálne nie je.',

	// Overridable / common options
	'GYM_CACHE' => 'Cache',
	'GYM_CACHE_EXPLAIN' => 'V týchto nastaveniach si môžete nastaviť rôzne možnosti ukladania do cache. Pamätajte si, že tieto nastavenia môžu byť vyradené v závislosti na nastavení v zadaní <b>Prepísanie</b>.',
	'GYM_MOD_SINCE' => 'Aktivácia Modifikácií',
	'GYM_MOD_SINCE_EXPLAIN' => 'Modul požiada prehliadač, ak má už aktuálnu verziu stránky vo svojej pamäti, na opätovné odoslanie obsahu.<br/><b>Poznámka :</b> Táto voľba sa bude týkať všetkých typov výstupu.',
	'GYM_CACHE_ON' => 'Aktivácia medzipamäte Caching',
	'GYM_CACHE_ON_EXPLAIN' => 'Cez toto zadanie môžete aktivovať ukladanie do cache.',
	'GYM_CACHE_FORCE_GZIP' => 'Vynútenie kompresie v Cache',
	'GYM_CACHE_FORCE_GZIP_EXPLAIN' => 'Cez toto zadanie vnutite používanie kompresie gunzip pre súbory vo vyrovnávacej pamäti. Toto môže minimálne pomôcť, ak miniete webový priestor, ale spôsobí to viac práce pre server nakoľko sa musí dekomprimovať súbor pred jeho odoslaním do prehliadača.',
	'GYM_CACHE_MAX_AGE' => 'Doba ponechania v Cache',
	'GYM_CACHE_MAX_AGE_EXPLAIN' => 'Bude použitý maximálny čas ponechania súborov v medzipamäte pred tým, ako budú aktualizované. Každý súbor v cache bude aktualizovaný vždy ak si ho niekto bude prezerať a o túto dobu sa čas predľži. Ak nie, bude medzipamäť aktualizovaná iba na základe dopytu cez ACP.',
	'GYM_CACHE_AUTO_REGEN' => 'Auto aktualizácia Cache',
	'GYM_CACHE_AUTO_REGEN_EXPLAIN' => 'Ak sa ativuje automaticka aktualizácia cache, bude zoznam výstupov aktualizovaný akonáhle mu šas v cache vyprší, ak nie, budete musieť uložené súbory manuálne vymazať cez Údržbu odkaz ktorý vidíte vyššie.',
	'GYM_SHOWSTATS' => 'Štatistika Cache',
	'GYM_SHOWSTATS_EXPLAIN' => 'Zadaním Áno vygenerujem štatistiky v zdrojovom kóde.<br/><b>Poznámka :</b> Doba trvania je doba potrebná na vybudovanie stránky. Tento krok sa neopakuje pri výpise z cache.',
	'GYM_CRITP_CACHE' => 'Zakódujem názvy súborov v cache',
	'GYM_CRITP_CACHE_EXPLAIN' => 'Pre bezpečnosť, je istejšie ak sú súbory v cache zakódovaná, toto môže byť užitočné ak sa kontrolujú nezabezpečené súbory pri ladení.<br/><b>Poznámka :</b> Táto voľba sa bude týkať všetkých typov súborov vo vyrovnávacej pamäti.',

	'GYM_MODREWRITE' => 'Prepisovanie URL',
	'GYM_MODREWRITE_EXPLAIN' => 'V tomto nastavení si môžete nastaviť rôzne možnosti prepisovania URL. Pamätajte, že toto nastavenie sa môže vyradiť v závislosti na nastavení v zadaní <b>Prepísanie</b>.',
	'GYM_MODREWRITE_ON' => 'Aktivujem prepisovanie URL',
	'GYM_MODREWRITE_ON_EXPLAIN' => 'Zadaním Áno sa aktivuje prepisovanie linkov URL.<br /><b>Poznámka :</b> Pre toto zadanie musíte používať server Apache zo zavedeným modulom mod_rewrite, alebo server IIS zo spusteným modulom ISAPI_Rewrite ktorý musíte správne nastaviť a v súbore .htaccess prepísať pravidlá (alebo httpd.ini na IIS).',
	'GYM_ZERO_DUPE_ON' => 'Aktivujem Zero Duplicate',
	'GYM_ZERO_DUPE_ON_EXPLAIN' => 'Zadaním Áno sa aktivuje Zero Duplicate v module pre linky.<br /><b>Poznámka :</b> Presmerovanie sa vytvorí pri (pretvorení) cache len v tejto verzii.',
	'GYM_MODRTYPE' => 'Prepisovanie typov URL',
	'GYM_MODRTYPE_EXPLAIN' => 'Tieto nastavenia sú zrušené ak sa používa SEO v phpBB mód rewrite (tento sa automaticky detekuje).<br/>Dajú sa nastaviť štyri úrovne prepisovanie URL: Žiadne, Základné, Zmiešané a Rozšírené :<br/><ul><li><b>Žiadne :</b> Neprepíše URL;<br></li><li><b>Základné :</b>Základné URL prepíše všetky linky, ale neinjektuje žiadne názvy;<br></li><li><b>Zmiešané :</b> Fórum a tituly kategórií injektuje v URL, ale tituly tém zostávajú staticky prepísané;<br></li><li><b>Rozšírené :</b> Všetky tituly injektuje v URL;</li></ul>',

	'GYM_GZIP' => 'GUNZIP',
	'GYM_GZIP_EXPLAIN' => 'V tomto nastavení si môžete nastaviť rôzne možnosti gunzip. Pamätajte si, že toto nastavenie môže byť vyradené z prevádzky v závislosti na nastavení v zadaní <b>Prepísanie</b>.%1$s',
	'GYM_GZIP_FORCED' => '<br/><b style="color:red;">Poznámka :</b> Gun-zip kompresia, je aktivovaná v konfigurácii phpBB. Je teda vynútená v module.',
	'GYM_GZIP_CONFIGURABLE' => '<br/><b style="color:red;">Poznámka :</b> Ak Gun-zip kompresia, nie je aktivovaná pri konfigurácii phpBB. Môžete nastaviť nižšie nastavenia, tak ako potrebujete.',
	'GYM_GZIP_ON' => 'Aktivujem gunzip',
	'GYM_GZIP_ON_EXPLAIN' => 'Tým že sa aktivuje gunzip kompresia na výstupe, tak sa tým môže výrazne znížiť množstvo dát prenášaných do prehliadača, a tým aj čas potrebný na prenos celého obsahu.',
	'GYM_GZIP_EXT' => 'Prípona Gunzip',
	'GYM_GZIP_EXT_EXPLAIN' => 'V tomto zadaní sa môžete rozhodnúť či použiem. Gz priponu v module URL. Tento postup platí iba, ak sú aktivované gunzip a prepisovanie URL.',
	'GYM_GZIP_LEVEL' => 'Úroveň kompresie Gunzip',
	'GYM_GZIP_LEVEL_EXPLAIN' => 'Číslo medzi 1 a 9, 9 je pre zadanie kompresie. Ale nemá veľký zmysel zadať vyšiu kompresiu ako je 6.<br /><b>Poznámka :</b> Táto voľba sa bude týkať všetkých typov výstupu.',

	'GYM_LIMIT' => 'Limity',
	'GYM_LIMIT_EXPLAIN' => 'V tomto zadaní sa môžete nastaviť limit aplikovania pri vytváraní výstupu: počet výstupných url, v SQL cyklus ako je (počet naraz dotazovaných položiek) a doba zavedenia položiek v zozname.<br/>Pamätajte si, že toto nastavenie môže byť vyradené z prevádzky v závislosti na nastavení v zadaní <b>Prepísanie</b>.',
	'GYM_URL_LIMIT' => 'Obmedzenie položiek',
	'GYM_URL_LIMIT_EXPLAIN' => 'Maximálny počet položiek na výstup.',
	'GYM_SQL_LIMIT' => 'Cyklus SQL',
	'GYM_SQL_LIMIT_EXPLAIN' => 'Ide o všetky typy výstupu, s výnimkou html, dopyt v SQL je rozdelený v niekoľkých zoznamoch aby sa mohlo vypísať veľké množstvo položiek, bez toho by bolo spustenie dopytu príliš ťažké.<br/>V tomto nastavení zadajte počet vyžiadaných položiek naraz. Počet vyžiadaných v SQL bude počet položiek, evidovaných v zozname a bude rozdelený do tohoto cyklu.',
	'GYM_TIME_LIMIT' => 'Časové limity',
	'GYM_TIME_LIMIT_EXPLAIN' => 'V tomto nastavení ide o nastavenie limitu v dňoch. Maximálna doba pre vytvorené výstupné zoznamy položiek. Toto zadanie môže byť veľmi užitočné pre menšiu záťaž servera na veľkých databázach. Zadaním 0 je bez obmedzenia',

	'GYM_SORT' => 'Triedenie',
	'GYM_SORT_EXPLAIN' => 'V tomto nastavení môžete si určiť, ako bude zoradený výstup.<br/>Pamätajte si, že toto nastavenie môže byť vyradené z prevádzky v závislosti na nastavení v zadaní <b>Prepísanie</b>.',
	'GYM_SORT_TYPE' => 'Predvolené zoradenie',
	'GYM_SORT_TYPE_EXPLAIN' => 'Všetky vytvorené linky sa zoraďujú podľa poslednej aktivite v prevolenom režime a to je (Zostupne). <br /> Môžete si nastaviť na vzostupne napríklad, ak chcete uľahčiť Vyhľadávačom nájsť odkazy na starý obsah.<br/>Pamätajte si, že toto nastavenie môže byť vyradené z prevádzky v závislosti na nastavení v zadaní <b>Prepísanie</b>.',

	'GYM_PAGINATION' => 'Stránkovanie',
	'GYM_PAGINATION_EXPLAIN' => 'V tomto nastavení si môžete nastaviť rôzne možnosti stránkovania. Pamätajte si, že toto nastavenie môže byť vyradené z prevádzky v závislosti na nastavení v zadaní <b>Prepísanie</b>.',
	'GYM_PAGINATION_ON' => 'Aktivujem Stránkovanie',
	'GYM_PAGINATION_ON_EXPLAIN' => 'V tomto zadaní sa môžete rozhodnúť pre výstup stránkovania linkov (ak sú k dispozícii) uvedených položiek. Ale napríklad modul môže aj dodatočne vytvoriť linky na témy vo fóre.',
	'GYM_LIMITDOWN' => 'Stránkovanie: Dolný Limit',
	'GYM_LIMITDOWN_EXPLAIN' => 'Sem zadajte, koľko strán bude stránkovaných, spustí sa od prvej vytvorenej stránky.',
	'GYM_LIMITUP' => 'Pagination: Horný Limit',
	'GYM_LIMITUP_EXPLAIN' => 'Sem zadajte, koľko strán bude stránkovaných, spustí sa od poslednej vytvorenej stránky.',

	'GYM_OVERRIDE' => 'Prepísanie',
	'GYM_OVERRIDE_EXPLAIN' => 'Mapovania stránok GYM je plne modulárny. Každý výstup typu (Google, RSS, ...) používa vlastné výstupné moduly zodpovedajúce typu položky v zozname. Napríklad, prvý modul je pre všetky typy výstupov modulu fóra, zoznamu položiek z fóra.<br/> Obsahuje veľa možností, ako napríklad prepisovanie URL, ukladanie do cache, gunzip kompresiu atd ..., tieto možnosti sa opakujú v niekoľkých úrovniach GYM mapovania stránok v ACP. Toto vám umožní používať rôzne nastavenia pre rovnaké možnosti v závislosti od typu výstupu a výstupnného modulu. Ale môže nastať aj situácia, že by ste radšej, napríklad aktivoval prepisovanie URL na všetkých moduloch mapovania GYM naraz to znamená (všetky typy výstupov a všetky moduly).<br/> Takže toto vám umožní prepísanie nastavení mnohých typov nastavení. <br/>Prenášaný proces vychádza z najvyššej úrovne nastavenia (Hlavná konfigurácia) na výstupnej úrovni typu (Google, RSS ...) a končí na najnižšej úrovni: výstupné moduly (fórum, album, ...)<br/>Nastavenie prepísania môže mať tri hodnoty :<br/><ul><li><b>Komplexné :</b> Budú použité Hlavné nastavenia;<br></li><li><b>Typ Výstupu :</b> Výstupný typ použije nastavenia pre jeho moduly;<br></li><li><b>Modul :</b> Tak tu sa použijú najnižšie dostupné nastavenia, napríklad, jeden prvý modul, ak nie je nastavený, výstup typu jeden a tak ďalej až do globálneho nastavenia, ak je k dispozícii.</li></ul>',
	'GYM_OVERRIDE_ON' => 'Aktivujem Hlavné Prepísania',
	'GYM_OVERRIDE_ON_EXPLAIN' => 'V tomto zadaní si môžete aktivovať hlavné prepísanie. Deaktivovaním sa všetky nastavenie prepíšu na typ "modul".',
	'GYM_OVERRIDE_MAIN' => 'Základná Predvolba',
	'GYM_OVERRIDE_MAIN_EXPLAIN' => 'Nastavenie prejde na hladinu pre iné typy nastavení modulov aby sa dali použiť.',
	'GYM_OVERRIDE_CACHE' => 'Základné Cache',
	'GYM_OVERRIDE_CACHE_EXPLAIN' => 'Zadanie pre nadradenú úroveň nastavení, volieb ukladania do medzipamäte.',
	'GYM_OVERRIDE_GZIP' => 'Základné Gunzip',
	'GYM_OVERRIDE_GZIP_EXPLAIN' => 'Zadanie pre nadradenú úroveň nastavení, volieb gunzip.',
	'GYM_OVERRIDE_MODREWRITE' => 'Základné Prepisovanie URL',
	'GYM_OVERRIDE_MODREWRITE_EXPLAIN' => 'Zadanie pre nadradenú úroveň nastavení, zvoleného prepisovania URL.',
	'GYM_OVERRIDE_LIMIT' => 'Základné Limity',
	'GYM_OVERRIDE_LIMIT_EXPLAIN' => 'Zadanie pre nadradenú úroveň nastavení, zvolených limitov.',
	'GYM_OVERRIDE_PAGINATION' => 'Základné Stránkovanie',
	'GYM_OVERRIDE_PAGINATION_EXPLAIN' => 'Zadanie pre nadradenú úroveň nastavení, volieb stránkovania.',
	'GYM_OVERRIDE_SORT' => 'Základné Triedenie',
	'GYM_OVERRIDE_SORT_EXPLAIN' => 'Zadanie pre nadradenú úroveň nastavení, volieb triedenia.',

	// Mod rewrite
	'GYM_MODREWRITE_ADVANCED' => 'Rozšírené',
	'GYM_MODREWRITE_MIXED' => 'Zmiešané',
	'GYM_MODREWRITE_SIMPLE' => 'Základné',
	'GYM_MODREWRITE_NONE' => 'Žiadne',

	// Sorting
	'GYM_ASC' => 'Vzostupne',
	'GYM_DESC' => 'Zostupne',

	// Other
	// robots.txt
	'GYM_CHECK_ROBOTS' => 'Preverenie blokovania súboru robots.txt',
	'GYM_CHECK_ROBOTS_EXPLAIN' => 'Skontroluje a aplikujte pravidlá robots.txt (ak existuje) v zozname URL. Modul robots.txt automaticky potvrdí aktualizácie. <br/>Táto voľba je veľmi vhodná pre import XML a TXT, keď si nemôžete byť istí konzistenciov zoznamu URL. <br/> <br/> <u> Poznámka</u> :<br/>Táto voľba navrhne ďalšie spracovanie zdrojového súboru a sa odporúča použiť, keď je aktivovaná medzipamäť.',
	// summarize method
	'GYM_METHOD_CHARS' => 'Podľa písmen',
	'GYM_METHOD_WORDS' => 'Podľa slov',
	'GYM_METHOD_LINES' => 'Podľa riadkov',
));
?>
