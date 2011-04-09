<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_html.php 134 2009-11-02 11:13:45Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_html [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'HTML_MAIN' => 'Nastavenia HTML',
	'HTML_MAIN_EXPLAIN' => 'Toto je hlavné nastavenie pre HTML modul. <br/> Nastavenia môľe byť použité pre všetky moduly HTML v závislosti na nastavení v zadaní <b>Prepísanie</b>.',
	// Linking setup
	'HTML_LINKS_ACTIVATION' => 'Prepojenie fóra',
	'HTML_LINKS_MAIN' => 'Hlavné odkazy',
	'HTML_LINKS_MAIN_EXPLAIN' => 'Zobrazím, <b>Novinky</b> na mapy, odkaz sa zobrazí dole v lište stránky.<br/>Táto funkcia vyžaduje, aby zobrazenie linkov bolo aktívne v Hlavnom nastavení.',
	'HTML_LINKS_INDEX' => 'Odkazy na indexe',
	'HTML_LINKS_INDEX_EXPLAIN' => 'Zobrazím, odkazy <b>Novinky a Mapa stránok</b> každého fóra na indexe fóra. Tieto odkazy sa vkladajú pod popis fóra.<br/>Táto funkcia vyžaduje, aby zobrazenie linkov na indexe, bolo aktívne v Hlavnom nastavení.',
	'HTML_LINKS_CAT' => 'Odkazy na stránke fóra',
	'HTML_LINKS_CAT_EXPLAIN' => 'Zobrazím, odkazy na <b>Novinky a Mapa stránok</b>. Tieto odkazy sa zobrazia pod titulom zadanéj kategórie.<br/>Táto funkcia vyžaduje, aby zobrazenie linkov stránky fóra, bolo aktívne v Hlavnom nastavení.',
	// Reset settings
	'HTML_ALL_RESET' => 'Všetky moduly HTML',
	// Limits
	'HTML_RSS_NEWS_LIMIT' => 'Linit stránky hlavných noviniek',
	'HTML_RSS_NEWS_LIMIT_EXPLAIN' => 'Počet položiek zobrazených na úvodnej stránke, získaných od nastavenia zdrojov RSS pre novú hlavnú stránku.', 
	'HTML_MAP_TIME_LIMIT' => 'Časový limit pre hlavný modul mapy',
	'HTML_MAP_TIME_LIMIT_EXPLAIN' => 'Limit v dňoch. Maximálny vek položiek, ktorý bude vzatý do úvahy pri vytváraní modulu hlavnej stránke mapy. Toto zadanie môže byť veľmi užitočné pre nižšie zaťaženie servera na veľkých databázach. Zadanim 0 je bez obmedzenia',
	'HTML_CAT_MAP_TIME_LIMIT' => 'Časový limit pre kategóriu mapy',
	'HTML_CAT_MAP_TIME_LIMIT_EXPLAIN' => 'Limit v dňoch. Maximálny vek položiek, ktorý bude vzatý do úvahy pri vytváraní modulu kategórií Mapa stránok. Toto zadanie môže byť veľmi užitočné pre nižšie zaťaženie servera na veľkých databázach. Zadanim 0 je bez obmedzenia',
	'HTML_NEWS_TIME_LIMIT' => 'Časový limit pre novinky',
	'HTML_NEWS_TIME_LIMIT_EXPLAIN' => 'Limit v dňoch. Maximálny vek položiek, ktorý bude vzatý do úvahy pri vytváraní modulu stránky noviniek. Toto zadanie môže byť veľmi užitočné pre nižšie zaťaženie servera na veľkých databázach. Zadanim 0 je bez obmedzenia',
	'HTML_CAT_NEWS_TIME_LIMIT' => 'Časový limit pre kategórie noviniek',
	'HTML_CAT_NEWS_TIME_LIMIT_EXPLAIN' => 'Limit v dňoch. Maximálny vek položiek, ktorý bude vzatý do úvahy pri vytváraní modulu kategórii noviniek. Toto zadanie môže byť veľmi užitočné pre nižšie zaťaženie servera na veľkých databázach. Zadanim 0 je bez obmedzenia',
	// sort
	'HTML_MAP_SORT_TITLE' => 'Triedenie máp',
	'HTML_NEWS_SORT_TITLE' => 'Triedenie noviniek',
	'HTML_CAT_SORT_TYPE' => 'Triedenie kategórií máp',
	'HTML_CAT_SORT_TYPE_EXPLAIN' => 'Na základe rovnakého princípu ako je vyššie, týka sa to modulu kategórii mapy stránok, napríklad mapa fóra pre HTML modul fóra.',
	'HTML_NEWS_SORT_TYPE' => 'Triedenie stránok noviniek',
	'HTML_NEWS_SORT_TYPE_EXPLAIN' => 'Na základe rovnakého princípu ako je vyššie, týka sa to modulu stránky noviniek, napríklad stránka noviniek fóra pre HTML modul fóra.',
	'HTML_CAT_NEWS_SORT_TYPE' => 'Triedenie kategórií stránok noviniek',
	'HTML_CAT_NEWS_SORT_TYPE_EXPLAIN' => 'Na základe rovnakého princípu ako je vyššie, týka sa to modulu kategórie stránky noviniek, napríklad stránka noviniek fóra pre HTML modul fóra.',
	'HTML_PAGINATION_GEN' => 'Hlavné stránkovanie',
	'HTML_PAGINATION_SPEC' => 'Stránkovanie modulov',
	'HTML_PAGINATION' => 'Stránkovanie stránok máp',
	'HTML_PAGINATION_EXPLAIN' => 'V tomto zadani aktivovaním stránkovania stránok mapy stránok, sa môžete rozhodnúť použiť jednu, alebo viac stránok v mape stránkach.',
	'HTML_PAGINATION_LIMIT' => 'Položiek na stránke',
	'HTML_PAGINATION_LIMIT_EXPLAIN' => 'Ak je aktivované stránkovanie mapy stránok, tak si môžete zadať, koľko položiek sa zobrazí na stránke.',
	'HTML_NEWS_PAGINATION' => 'Stránkovanie noviniek',
	'HTML_NEWS_PAGINATION_EXPLAIN' => 'Ak je aktivované stránkovanie stránok noviniek, tak tu sa môžete rozhodnúť či sa použie jedna, alebo viac stránok na stránke noviniek.',
	'HTML_NEWS_PAGINATION_LIMIT' => 'Noviniek na stránke',
	'HTML_NEWS_PAGINATION_LIMIT_EXPLAIN' => 'Ak je aktivované stránkovanie, môžete si vybrať, koľko správ sa zobrazí na stránke.',
	'HTML_ITEM_PAGINATION' => 'Stránkovanie položiek',
	'HTML_ITEM_PAGINATION_EXPLAIN' => 'V tomto zadaní sa môžete rozhodnúť pre výstup stránkovania linkov (ak sú k dispozícii) pre uvedené položky. Napríklad modul môže dodatočne vytvoriť linky stránok tém fóra.',
	// Basic settings
	'HTML_SETTINGS' => 'Hlavné nastavenia',
	'HTML_C_INFO' => 'Informácie o autorských právach',
	'HTML_C_INFO_EXPLAIN' => 'Zobrazí informácie o autorovi na stránkach mapy noviniek. Štandardne je to názov v záhlavý webu phpBB. Táto informácia bude použitá len ak máte nainštalovaný SEO mód v phpBB.',
	'HTML_SITENAME' => 'Názov stránky',
	'HTML_SITENAME_EXPLAIN' => 'Názov fóra je zobrazený na stránkach mapy noviniek. Štandardne je názov v záhlavý webu phpBB.',
	'HTML_SITE_DESC' => 'Popis stránky',
	'HTML_SITE_DESC_EXPLAIN' => 'Popis stránky je zobrazený na stránkach mapy a novinky. Štandardne je popis v záhlavý phpBB.',
	'HTML_LOGO_URL' => 'Logo stránky',
	'HTML_LOGO_URL_EXPLAIN' => 'Obrázok, ktorý chcete použiť ako logo v informačnom kanály RSS, je v adresáry gym_sitemaps/images/.',
	'HTML_URL' => 'HTML URL',
	'HTML_URL_EXPLAIN' => 'Zadajte úplnú adresu URL svojho súboru do map.php, napríklad: http://www.vase forum.com/eventual_dir/adresar ak je map.php inde nainštalovaný.<br/>Táto možnosť je tu pre prípad, ak bol uložený súbor map.php inde, ako v roote fóra phpBB.',
	'HTML_RSS_NEWS_URL' => 'Hlavná stránka zdroj noviniek RSS',
	'HTML_RSS_NEWS_URL_EXPLAIN' => 'Sem zadajte úplnú adresu URL pre kanál RSS, ktorý chcete zobraziť na úvodnej stránke, napríklad: http://www.vase forum.com/gymrss.php?news&amp;digest a zobrazí všetky novinky zo všetkých RSS inštalovaných modulov na hlavnej stránke HTML v stránke noviniek.<br />Môžete použiť kanal RSS 2.0 ako zdroj pre túto stránku.',
	'HTML_STATS_ON_NEWS' => 'Zobrazenie štatistiky fóra na stránkach noviniek',
	'HTML_STATS_ON_NEWS_EXPLAIN' => 'Komu zobrazím, štatistiku fóra na stránkach noviniek.',
	'HTML_STATS_ON_MAP' => 'Zobrazenie štatistiky fóra máp',
	'HTML_STATS_ON_MAP_EXPLAIN' => 'Komu zobrazím, štatistiku fóra na stránke máp.',
	'HTML_BIRTHDAYS_ON_NEWS' => 'Zobrazenie narodenín na stránkach noviniek',
	'HTML_BIRTHDAYS_ON_NEWS_EXPLAIN' => 'Komu zobrazím, narodeniny na stránkach noviniek.',
	'HTML_BIRTHDAYS_ON_MAP' => 'Zobrazenie narodenín na stránke máp',
	'HTML_BIRTHDAYS_ON_MAP_EXPLAIN' => 'Komu zobrazím, narodeniny na stránkach máp.',
	'HTML_DISP_ONLINE' => 'Zobrazenie uživateľov online',
	'HTML_DISP_ONLINE_EXPLAIN' => 'Komu zobrazím, zoznam uživateľov ktorý sú online v Mapa stránok a Novinky.',
	'HTML_DISP_TRACKING' => 'Aktivovať sledovanie',
	'HTML_DISP_TRACKING_EXPLAIN' => 'Komu povolím, v položke sledovanie (prečítané / neprečítané).',
	'HTML_DISP_STATUS' => 'Aktivovať stav',
	'HTML_DISP_STATUS_EXPLAIN' => 'Komu povolím, meniť stav položiek (Oznámenia, Lepenie, Uzamknutie atď ... ).',
	// Cache
	'HTML_CACHE' => 'Cache',
	'HTML_CACHE_EXPLAIN' => 'V tomto zadani si môžete definovať rôzne nastavenia medzipamäte pre mód HTML. Cache HTML je oddelená od ostatných druhov prepravy ako (Google a RSS). Tento modul používa štandardnú medzipamäť phpBB.<br/>Teda volby nemôžu byť zdedené z hlavnej úrovne, to znamená že len verejne viditeľný obsah bude vkladaný do pamäte cache. Toto nastavenie však môže byť prenesené do HTML modulov v závislosti na nastavení v zadaní <b>Prepísanie</b> HTML.<br/><br/>Cache je rozdelené do dvoch typov, jeden pre každý kolónu vo výstupe: Hlavná kolóna, ktora obsahuje mapy a novinky, a jeden voliteľný modul, ktorý napríklad, môže byť použitý pre pridanie poslednej aktívnej témy ako výpis z HTML modulu fóra.',
	'HTML_MAIN_CACHE_ON' => 'Aktivujem hlavnú kolónu medzipamäte',
	'HTML_MAIN_CACHE_ON_EXPLAIN' => 'V tomto zadaní môžete aktivovať mapovanie stránky a novinky kolónu medzipamäte.',
	'HTML_OPT_CACHE_ON' => 'Aktivujem voliteľnú kolónu medzipamäte',
	'HTML_OPT_CACHE_ON_EXPLAIN' => 'V tomto zadaní môžete aktivovať voliteľnú kolónu medzipamäte.',
	'HTML_MAIN_CACHE_TTL' => 'Hlavné cache doba trvania',
	'HTML_MAIN_CACHE_TTL_EXPLAIN' => 'Maximálny počet hodín pre hlavnú kolónu, ako budú použité súbory aktualizované v medzipamäti. Každý súbor v cache bude aktualizovaný vždy ak si ho bude niekto prezerať, tak o túto dobu sa jeho čas predĺži.',
	'HTML_OPT_CACHE_TTL' => 'Voliteľná kolóna cache doba trvania',
	'HTML_OPT_CACHE_TTL_EXPLAIN' => 'Maximálny počet hodín pre voliteľnú kolónu, ako budú použité súbory aktualizované v medzipamäti. Každý súbor v cache bude aktualizovaný vždy ak si ho bude niekto prezerať, tak o túto dobu sa jeho čas predĺži.',
	// Auth settings
	'HTML_AUTH_SETTINGS' => 'Povolenie nastavenia',
	'HTML_ALLOW_AUTH' => 'Autorizácia',
	'HTML_ALLOW_AUTH_EXPLAIN' => 'Aktivované povolenie pre Mapu stránok a Novinky sa umožní, prihláseným užívateľom prezerať súkromný obsah a zobrazenie položiek z privátnej sekcii, ak budú mať k tomu zadané povolenia.',
	'HTML_ALLOW_NEWS' => 'Aktivácia noviniek',
	'HTML_ALLOW_NEWS_EXPLAIN' => 'Každý modul môže obsahovať stránku noviniek s výpisom posledných X aktívnych položiek s ich obsahom, ktoré môžu byť filtrované. Pre fórum, novinky fóra, stránka je všeobecná zobrazujúca 10 posledných tém z prispevku, ako výťah prichádzajúceho výberu z verejných alebo súkromných fór.',
	'HTML_ALLOW_CAT_NEWS' => 'Aktivácia kategórií noviniek',
	'HTML_ALLOW_CAT_NEWS_EXPLAIN' => 'Zadanie je na základe rovnakých princípov ako modul stránka noviniek, každý modul môže mať kategóriu stránku novinky.',
	// Content
	'HTML_NEWS' => 'Nastavenie noviniek',
	'HTML_NEWS_EXPLAIN' => 'V týchto nastaveniach si môžete nastaviť rôzne filtrovanie obsahu a možnosti formátovania noviniek. <br/>Tieto nastavenia sa dajú použiť na všetky moduly HTML v závislosti na nastavení v zadaní <b>Prepísanie</b> HTML.',
	'HTML_NEWS_CONTENT' => 'Nastavenie obsahu noviniek',
	'HTML_SUMARIZE' => 'Výťah z položky',
	'HTML_SUMARIZE_EXPLAIN' => 'V tomto zadaní môžete zosumarizovať obsah správy ktorá bude uložená v Novinkách.<br/> Limit stanovuje maximálne množstvo viet, slov alebo písmen, v závislosti na zvolenej metóde nižšie. Zadaním 0 sa realizuje všetko.',
	'HTML_SUMARIZE_METHOD' => 'Spôsob výťahu',
	'HTML_SUMARIZE_METHOD_EXPLAIN' => 'Môžete si vybrať medzi tromi rôznymi spôsobmi pre obmedzenie obsahu správ v zdrojoch RSS.<br/> Podľa počtu riadkov, podľa počtu slov a počtu znakov. BBcode tagy a slová, nebude rozdeľovať.',
	'HTML_ALLOW_PROFILE' => 'Zobrazenie profilu',
	'HTML_ALLOW_PROFILE_EXPLAIN' => 'Komu zobrazím, položku, názov autora môže byť pridaný k požadovanému výstupu.',
	'HTML_ALLOW_PROFILE_LINKS' => 'Odkaz profilu',
	'HTML_ALLOW_PROFILE_LINKS_EXPLAIN' => 'Komu zobrazím, ak je autor príspevku zahrnutý vo výstupe, môžete sa rozhodnúť či bude uvedený v phpBB odkaz na profil autora.',
	'HTML_ALLOW_BBCODE' => 'Povoliť BBcode',
	'HTML_ALLOW_BBCODE_EXPLAIN' => 'Komu zobrazím, vo výstupe použité BBCode.',
	'HTML_STRIP_BBCODE' => 'Vypnúť BBcodes',
	'HTML_STRIP_BBCODE_EXPLAIN' => 'V tomto zadaní si môžete nastaviť, ktoré BBCode nebudú použité.<br/>Jednoduchý formát : <br/><ul><li> <u>Čiarkou oddelený zoznam BBcode :</u> Odstráni značky BBCode, ale obsah ponechá. <br/><u>Príklad :</u> <b>img,b,quote</b> <br/> V tomto príklade zvýraznenie img, quote a BBCode nebude analyzované, značky BBcode budú vymazané, ale obsah vnútri BBcode bude zachovaný.</li><li> <u>Čiarkou oddelený zoznam bbcode s nastavenov dvojbodkov :</u> Odstráni značky BBcode a rozhodne o ich obsahu. <br/><u>Príklad:</u> <b>img:1,b:0,quote,code:1</b> <br/> V tomto príklade BBCode img a img odkaz bude odstránený, zvýraznenie neviem spracovať a tučný text bude zachovaný, citovanie nie je potrebné analyzovať, a jeho obsah bude zachovaný, kód BBCode a jeho obsah bude z výstupu vymazaný.</ul>Filter bude fungovať, aj keď BBCode nie je zadané. Ale odstráni značky kódu a obsah img väzby z výstupu napríklad.<br/>Filtrovanie nastane pred sumarizáciov.<br/> Parameter zmení "všetko" (všetky: 0 alebo všetky: 1. oddelí značky BBcode z obsahu) toto spracuje všetko naraz.',
	'HTML_ALLOW_LINKS' => 'Aktívne odkazy',
	'HTML_ALLOW_LINKS_EXPLAIN' => 'Komu povolim, použiť odkazy v obsahu položiek.<br/> Deaktivovaním budú linky a e-maily zahrnuté v obsahu, ale nebude možné na ne kliknúť.',
	'HTML_ALLOW_EMAILS' => 'E-maily',
	'HTML_ALLOW_EMAILS_EXPLAIN' => 'Komu povolim, vybrať si tvar e-mailu vo výstupe "email AT domain DOT com" namiesto "email@domain.com" v obsahu položiek.',
	'HTML_ALLOW_SMILIES' => 'Smajlíky',
	'HTML_ALLOW_SMILIES_EXPLAIN' => 'Komu zobrazím, smajlíky v obsahu.',
	'HTML_ALLOW_SIG' => 'Podpisy',
	'HTML_ALLOW_SIG_EXPLAIN' => 'Komu zobrazím, podpisy užívateľov v obsahu.',
	'HTML_ALLOW_MAP' => 'Aktivácia modulu máp',
	'HTML_ALLOW_MAP_EXPLAIN' => 'V tomto zadaní si môžete aktivovať, modul Mapa stránok.',
	'HTML_ALLOW_CAT_MAP' => 'Aktivácia modulu kategórie máp',
	'HTML_ALLOW_CAT_MAP_EXPLAIN' => 'V tomto zadaní si môžete aktivovať, modul Kategórie máp.',
));
?>
