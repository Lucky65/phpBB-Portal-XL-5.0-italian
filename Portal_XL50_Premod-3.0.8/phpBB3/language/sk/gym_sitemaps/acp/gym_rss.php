<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_rss.php 134 2009-11-02 11:13:45Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_rss [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'RSS_MAIN' => 'Nastavenie zdrojov RSS',
	'RSS_MAIN_EXPLAIN' => 'Toto sú hlavné nastavenia pre kanály modulu RSS. <br/> Môžu sa použiť na všetky novinky v závislosti na vašom nastavení v zadaní <b>Prepísanie</b> RSS.',
	// Linking setup
	'RSS_LINKS_ACTIVATION' => 'Prepojenie Fóra',
	'RSS_LINKS_MAIN' => 'Hlavné odkazy',
	'RSS_LINKS_MAIN_EXPLAIN' => 'Zobrazím, <b>Zdroje RSS a Zoznam RSS</b> odkaz sa zobrazí dole v lište stránky.<br/>Táto funkcia vyžaduje, aby zobrazenie linkov bolo aktívne v Hlavnom nastavení.',
	'RSS_LINKS_INDEX' => 'Odkazy na index',
	'RSS_LINKS_INDEX_EXPLAIN' => 'Zobrazím, odkaz <b>Zdroje RSS</b> každého fóra na indexe fóra. Tento odkaz sa vloží pod popis fóra.<br/>Táto funkcia vyžaduje, aby zobrazenie linkov bolo aktívne v Hlavnom nastavení.',
	'RSS_LINKS_CAT' => 'Odkazy na stránku fóra',
	'RSS_LINKS_CAT_EXPLAIN' => 'Zobrazím, odkaz <b>Zdroje RSS</b> súčasného fóra. Tento odkaz sa vloží pod názov fóra.<br/>Táto funkcia vyžaduje, aby zobrazenie linkov bolo aktívne v Hlavnom nastavení.',
	// Reset settings
	'RSS_ALL_RESET' => 'Všetky moduly RSS',
	// Limits
	'RSS_LIMIT_GEN' => 'Hlavné limity',
	'RSS_LIMIT_SPEC' => 'Limity RSS',
	'RSS_URL_LIMIT_LONG' => 'Limit Dlhé Zdroje',
	'RSS_URL_LIMIT_LONG_EXPLAIN' => 'Počet položiek zobrazených v Dlhých zdrojoch bez obsahu, pre toto nastavenie musia byť v <b>Nastavení Obsahu</b> povolené <b>Dlhé Zdroje</b> RSS.',
	'RSS_SQL_LIMIT_LONG' => 'Dĺžka cyklov v SQL',
	'RSS_SQL_LIMIT_LONG_EXPLAIN' => 'Ide o cyklus v čase požadovaných položiek, pre dĺhé Zdroje bez obsahu.',
	'RSS_URL_LIMIT_SHORT' => 'Limit Krátke Zdroje',
	'RSS_URL_LIMIT_SHORT_EXPLAIN' => 'Počet položiek zobrazených ako krátke zdroje bez obsahu, pre toto nastavenie musia byť v <b>Nastavení Obsahu</b> povolené <b>Krátke zdroje</b> RSS.',
	'RSS_SQL_LIMIT_SHORT' => 'Krátky cyklus v SQL',
	'RSS_SQL_LIMIT_SHORT_EXPLAIN' => 'Ide o cyklus v čase pre krátke Zdroje bez obsahu.',
	'RSS_URL_LIMIT_MSG' => 'Predvolený limit obsahu',
	'RSS_URL_LIMIT_MSG_EXPLAIN' => 'Počet položiek v predvolenom nastavení zobrazené ako zdroje s obsahom, pre toto nastavenie musia byť v <b>Nastavení Obsahu</b> povolené <b>Položky s obsahom</b>.',
	'RSS_SQL_LIMIT_MSG' => 'Cyklus obsahu v SQL',
	'RSS_SQL_LIMIT_MSG_EXPLAIN' => 'Ide o cyklus v čase požadovaných položiek, pre zdroje s obsahom.',
	// Basic settings
	'RSS_SETTINGS' => 'Základné nastavenia',
	'RSS_C_INFO' => 'Informácia o autorských právach',
	'RSS_C_INFO_EXPLAIN' => 'Informácie o autorských právach sa uvedie v zdrojoch RSS. Štandardne je to názov stránky phpBB.',
	'RSS_SITENAME' => 'Názov stránky',
	'RSS_SITENAME_EXPLAIN' => 'Názov stránky sa zobrazí v zdrojoch RSS. Štandardne je to názov stránky phpBB.',
	'RSS_SITE_DESC' => 'Popis stránky',
	'RSS_SITE_DESC_EXPLAIN' => 'Názov stránky sa zobrazí v zdrojoch RSS. Štandardne je to popis stránky phpBB.',
	'RSS_LOGO_URL' => 'Logo stránky',
	'RSS_LOGO_URL_EXPLAIN' => 'Obrázok, ktorý chcete použiť ako logo v zdrojoch RSS, obrázky sú v adresáry: gym_sitemaps/images/.',
	'RSS_IMAGE_URL' => 'RSS logo',
	'RSS_IMAGE_URL_EXPLAIN' => 'Obrázok, ktorý chcete použiť ako logo RSS zdroja RSS, obrázky sú v adresáry: gym_sitemaps/images/.',
	'RSS_LANG' => 'Jazyk RSS',
	'RSS_LANG_EXPLAIN' => 'Jazyk ako hlavný jazyk v zdrojoch RSS. Štandardne je to predvolený jazyk phpBB.',
	'RSS_URL' => 'URL pre zdroje RSS',
	'RSS_URL_EXPLAIN' => 'Sem zadajte úplnú adresu URL vášho súboru gymrss.php file, napríklad http://www.example.com/eventual_dir/ ak gymrss.php je inštalovaný v http://www.example.com/eventual_dir/.<br/>Táto možnosť je užitočná, keď phpBB nie je nainštalované v roote doméney a chcete mať zoznam adries z úrovni domény pre súboe gymrss.php.',
	// Auth settings
	'RSS_AUTH_SETTINGS' => 'Povolenie nastavenia',
	'RSS_ALLOW_AUTH' => 'Autorizácia',
	'RSS_ALLOW_AUTH_EXPLAIN' => 'Aktivované povolenie pre zdroje RSS, umožňuje, prihláseným užívateľom prezerať si súkromné zdroje a zobrazenie položiek z privátnych zdrojov, ak budú mať k tomu zadané povolenia.',
	'RSS_CACHE_AUTH' => 'Súkromné zdroje v Cache',
	'RSS_CACHE_AUTH_EXPLAIN' => 'V tomto zadani môžete vypnúť ak je umožnené cache na neverejné zdroje.<br/> Medzipamäť súkromných zdrojov zvýši počet súborov vo vyrovnávacej pamäti. To by nemal byť problém, ale tu sa môžete rozhodnúť, že sa cache použije iba pre verejné zdroje.',
	'RSS_NEWS_UPDATE' => 'Aktualizácia nových zdrojov',
	'RSS_NEWS_UPDATE_EXPLAIN' => 'Ak sú aktivované, nové zdroje, môžete si nastaviť vlastný čas v hodinách pre všetky nové zdroje. Použtím 0 alebo, prázdne sa zadanie deaktivuje a použije sa miesto toho predvolená pravidelná aktualizácia.',
	'RSS_ALLOW_NEWS' => 'Povoliť Nové Zdroje',
	'RSS_ALLOW_NEWS_EXPLAIN' => 'Takzvané nové zdroje je voliteľný mod, ktorý zadrží uvedené prvé položky bez následných odpovedí. To je ďalší kanál, ktorý nebude v rozpore s ostatnými. Toto je užitočné, ak napríklad chcete odoslať zdroje fórá ako Novinky do Google.',
	'RSS_ALLOW_SHORT' => 'Povoliť Krátke Zdroje',
	'RSS_ALLOW_SHORT_EXPLAIN' => 'Povolím použiť Krátke zdroje RSS.',
	'RSS_ALLOW_LONG' => 'Povoliť Dlhé Zdroje',
	'RSS_ALLOW_LONG_EXPLAIN' => 'Povolím použiť Dlhé zdroje RSS.',
	// Notifications
	'RSS_NOTIFY' => 'Oznámenie',
	'RSS_YAHOO_NOTIFY' => 'Oznámenie pre Yahoo',
	'RSS_YAHOO_NOTIFY_EXPLAIN' => 'Aktivuje Yahoo! Upozorním na aktualizáciu zdrojov RSS.<br/> Toto sa netýka všeobecného zdroja (RSS.xml).<br/>Zakaždým, keď sa v cache zdroje aktualizujú, bude oznámenie zaslané na Yahoo!<br/><u>Poznámka : </u>Musí byť zadany váš klúč AppID v Yahoo! ktory sa zadáva nižšie pre odoslanie ohlásenia.',
	'RSS_YAHOO_APPID' => 'Yahoo! AppID',
	'RSS_YAHOO_APPID_EXPLAIN' => 'Sem zadajte klúč AppID Yahoo!. Ak ho ešte nemáte, prosím navštívte <a href="http://api.search.yahoo.com/webservices/register_application"><b>túto stránku Yahoo!</b></a>.<br/><u>Poznámka :</u>Tu sa budete musieť zaregistrovat pred tým ako získate AppID Yahoo!.',
	// Styling
	'RSS_STYLE' => 'Štýl Rss',
	'RSS_XSLT' => 'Dizajn XSLT',
	'RSS_XSLT_EXPLAIN' => 'RSS zdroje môžu byť štylizované použitím <a href="http://www.w3schools.com/xsl/xsl_transformation.asp"><b>XSL-Transforáciov Tabulky Štýlu ktorú najdete PO KLIKNUTÍ TU</b></a>.',
	'RSS_FORCE_XSLT' => 'Pritlačiť Dizajn',
	'RSS_FORCE_XSLT_EXPLAIN' => 'Musí sa pre prehliadače, vytvoriť trik aby sa lepšie využilo xlst. Toto zadanie pridaná niekoľko priestorových znakov na začiatok kódu XML. <br/> FF 2 a IE7 vyhľadá prvých 500 znakov a potom sa rozhodnú či ich použijú pre RSS, alebo nie ako ich súkromnú manipuláciu',
	'RSS_LOAD_PHPBB_CSS' => 'Zavedenie CSS phpBB',
	'RSS_LOAD_PHPBB_CSS_EXPLAIN' => 'Modul mapa stránok GYM používa šablóny phpBB3. XSL slúži na vytvorenie html výstupov ktoré sú kompatibilné zo štýlmi phpBB3.<btr/>Vďaka tomu môže štýly XSL aplikovať kaskádové v phpBB namiesto defaultne predvolených. Všetky zmeny, ako napríklad zmena pozadia, farby fontu, či obrázkov, sa potom použijú vo výstupnom štýle RSS.<br/>Zmeny sa však prejavia až po prečistení cache RSS cez zadanie "Údržba".<br/>Ak nebudú v danom štýle k dispozícii súbory štýlu RSS, bude použitý defaultný štýl (vždy prítomný, založený na prosilver).<br/>Nesnažte sa používať šablóny prosilver s iných štýloch, s najväčšou pravdepodobnosťou nebudú kompatibilné s nastavením v CSS.',
	// Content
	'RSS_CONTENT' => 'Nastavenie obsahu',
	'RSS_CONTENT_EXPLAIN' => 'V tomto nastavení si môžete nastaviť rôzne filtrovanie obsahu a možnosti formátovania. <br/>Tieto nastavenia môžu byť použité na všetky moduly RSS, v závislosti na vašom nastavení v zadaní <b>Prepísanie</b> RSS.',
	'RSS_ALLOW_CONTENT' => 'Povoliť Obsah Položky',
	'RSS_ALLOW_CONTENT_EXPLAIN' => 'V tomto zadaní si môžete vybrať obsah správ, ktoré majú byť úplne alebo čiastočne zobrazené v zdrojoch RSS. <br/><b>Poznámka :</b> Táto možnosť znamená trochu viac práce pre server. Limituje menší výstup obsahu ako je nastavený.',
	'RSS_SUMARIZE' => 'Výťah z položky',
	'RSS_SUMARIZE_EXPLAIN' => 'V tomto zadaní môžete zosumarizovať obsah správy ktorá bude uložená v zdrojoch.<br/> Limit stanovuje maximálne množstvo viet, slov alebo písmen, v závislosti na zvolenej metóde nižšie. Zadaním 0 sa realizuje všetko.',
	'RSS_SUMARIZE_METHOD' => 'Spôsob výťahu',
	'RSS_SUMARIZE_METHOD_EXPLAIN' => 'Môžete si vybrať medzi tromi rôznymi spôsobmi pre obmedzenie obsahu správ v zdrojoch RSS.<br/> Podľa počtu riadkov, podľa počtu slov a počtu znakov. BBcode tagy a slová, nebude rozdeľovať.',
	'RSS_ALLOW_PROFILE' => 'Zobrazenie profilu',
	'RSS_ALLOW_PROFILE_EXPLAIN' => 'Môže byť pridaný do zdroja RSS aj Názov autora.',
	'RSS_ALLOW_PROFILE_LINKS' => 'Odkaz profilu',
	'RSS_ALLOW_PROFILE_LINKS_EXPLAIN' => 'Ak názov autora je zaradený vo výstupu, môžete sa rozhodnúť, či ho zobrazím v zodpovedajúcom profile phpBB.',
	'RSS_ALLOW_BBCODE' => 'Povoliť BBcode',
	'RSS_ALLOW_BBCODE_EXPLAIN' => 'Komu si vybrať či zobrazím, vo výstupe použité BBCode.',
	'RSS_STRIP_BBCODE' => 'Vypnúť BBcodes',
	'RSS_STRIP_BBCODE_EXPLAIN' => 'V tomto zadaní si môžete nastaviť, ktoré BBCode nebudú použité.<br/>Jednoduchý formát : <br/><ul><li> <u>Čiarkami oddelený zoznam bbcode :</u> Odstrániť značky BBCode, ale obsah ponechá. <br/><u>Príklad :</u> <b>img,b,quote</b> <br/> V tomto príklade zvýraznenie img, quote a BBCode nebude analyzované, značky BBcode budú vymazané, ale obsah vnútri BBcode bude zachovaný.</li><li> <u>Čiarkou oddelený zoznam bbcode s nastavenov dvojbodkov :</u> Odstráni značky BBcode a rozhodne o ich obsahu. <br/><u>Príklad :</u> <b>img:1,b:0,quote,code:1</b> <br/> V tomto príklade BBCode img a img odkaz bude odstránený, zvýraznenie neviem spracovať a tučný text bude zachovaný, citovanie nie je potrebné analyzovať, a jeho obsah bude zachovaný, kód BBCode a jeho obsah bude z výstupu vymazaný.</ul>Filter bude fungovať, aj keď BBCode nie je zadané. Ale odstráni značky kódu a obsah img väzby z výstupu napríklad.<br/>Filtrovanie nastane pred sumarizáciov.<br/> Parameter zmení "všetko" (všetky: 0 alebo všetky: 1. oddelí značky BBcode z obsahu) toto spracuje všetko naraz.',
	'RSS_ALLOW_LINKS' => 'Aktívne odkazy',
	'RSS_ALLOW_LINKS_EXPLAIN' => 'Povolim, použiť odkazy v obsahu položiek.<br/> Deaktivovaním budú linky a e-maily zahrnuté v obsahu, ale nebude možné na ne kliknúť.',
	'RSS_ALLOW_EMAILS' => 'E-maily',
	'RSS_ALLOW_EMAILS_EXPLAIN' => 'Povolim, vybrať si tvar e-mailu vo výstupe "email AT domain DOT com" namiesto "email@domain.com" v obsahu položiek.',
	'RSS_ALLOW_SMILIES' => 'Smajlíky',
	'RSS_ALLOW_SMILIES_EXPLAIN' => 'Zobrazím, smajlíky v obsahu.',
	'RSS_NOHTML' => 'Filter HTML',
	'RSS_NOHTML_EXPLAIN' => 'Použiem filter html v zdrojoch RSS. Ak ativujete túto možnosť, zdroj rss bude obsahovať iba holý text.',
	// Old URL handling
	'RSS_1XREDIR' => 'Použiem GYM 1x prepísanie URL',
	'RSS_1XREDIR_EXPLAIN' => 'Aktivácia GYM 1x prerpisanie detekovaných URL. Modul bude zobrazovať voliteľné zdroje z predpokladanou novou URL pre požadované zdroje.<br/><u>Poznámka :</u><br/>Táto možnosť vyžaduje kompatibilitu rewriterules ako je vysvetlené v inštalačnom súbore.',
));
?>