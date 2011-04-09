<?php
/**
*
* phpbb_seo [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package Ultimate SEO URL phpBB SEO
* @version $Id: acp_phpbb_seo.php 149 2009-11-10 11:10:00Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://www.opensource.org/licenses/rpl1.5.txt Reciprocal Public License 1.5
*
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
	// ACP Main CAT
	'ACP_CAT_PHPBB_SEO'	=> 'SEO phpBB',
	'ACP_MOD_REWRITE'	=> 'Prepisanie nastavenia URL',
	// ACP phpbb seo class
	'ACP_PHPBB_SEO_CLASS'	=> 'Kategórie nastavení SEO phpBB',
	'ACP_PHPBB_SEO_CLASS_EXPLAIN'	=> 'V tomto zadaní môžete nastaviť rôzne varianty SEO phpBB %1$s mód (%2$s).<br/> Tieto predvolené nastavenia, ako oddeľovače a prípony, musia byť v adresáry <b>phpbb_seo/includes/setup_phpbb_seo.php</b>, pretože zmena by znamenala pri aktualizícii .htaccess aj prepísanie väčšimu adries.%3$s',
	'ACP_PHPBB_SEO_VERSION' => 'Verzia',
	'ACP_PHPBB_SEO_MODE' => 'Režim',
	'ACP_SEO_SUPPORT_FORUM' => 'Podpora fóra',
	// ACP forum urls
	'ACP_FORUM_URL'	=> 'Fórum Správa URL',
	'ACP_FORUM_URL_EXPLAIN'		=> 'V tomto zadaní môžete vidieť ktoré súbory obsahuje cache fóra, ako zavedaný titul a URL.<br/> To čo je v zelených farbách je v cache fóre, to čo je v červených farbách nie je v cache fóra.<br/><br/><b style="color:red">Prosím, čítajte :</b><br/><em><b>každý-titul-fxx/</b> bude vždy vhodne presmerovaný ako Nultý Duplikát a bude v znakovej sade v ktorej bol upravený <b>každý-titul/</b> no <b>každý-inde/</b>.<br/> V týchto prípadoch bude zatial upravený, <b>každý-titul/</b> vo fore ako nejestvujúci pokial nezadáte vhodné presmerovanie.</em>',
	'ACP_NO_FORUM_URL'	=> '<b>URL správy fóra je zablokovaná<b><br/> Menežovanie URL fóra je dostupné len v rozšírenom a Zmiešanom režime keď je aktivované kešovanie.<br/> Nastavenia URL fóra zostane aktívne v pokročilom Zmiešanom režime.',
	// ACP .htaccess
	'ACP_HTACCESS'	=> '.htaccess',
	'ACP_HTACCESS_EXPLAIN'	=> 'Tento pomocný program vam pomôže vytvoriť váš .htacess.<br/> Táto verzia je podkladom navrhnutá pre nastavenie vášho phpbb_seo/phpbb_seo_class.php.<br/> Môžete editovať hodnoty v $seo_ext and $seo_static pred tým ako nainštalujete tento .htaccess zosobnenia odberu URL.<br/> Môžete si vybrať napríklad, použite .htm umiestnenie v .html a to umiestnenie  "správ" umiestnenie "prispevku" "tímu vašej siete" umiestnenie " tímu" a tak ďalej.<br/> Ak budete upravovať tieto zadania obsahované v SE, musíte presne zadať  presmerovanie.<br/> Všetky štandardné nastavenia nie sú zlé, tento krok môžete bez obáv preskočiť, ak chcete uprednostniť predvolené zadania.<br/> I keď teraz je najlepší čas, pre vykonanie znien, iste zaberie to určitý čas pokým sa prepíšu zadania.<br/> Aktualizovaný .htaccess bude v roote vášho fóra cez doménu (napr.: www.príklad.com).<br/> Ak phpBB je nainštalované v pod priečinku, označte Viac možností ktorá je dole a pridá voľbu aktualizovania v priečinku phpBB.',
	'SEO_HTACCESS_RBASE'	=> 'Umiestnenie .htaccess',
	'SEO_HTACCESS_RBASE_EXPLAIN' => 'Umiestnim .htaccess do priečinka v phpBB ?<br/> Prepísanie nastavení Bázy umožní pridať na fórum .htaccess do zložky. Toto je výhodnejšie ak . htaccess je v koreňovom adresári domény, dokonca aj ak phpBB je nainštalované v podzložke. Ale môžete dať prednosť tomu že priečinok bude umiestený vo fóre.',
	'SEO_HTACCESS_SLASH'	=> 'RegEx Right Slash',
	'SEO_HTACCESS_SLASH_EXPLAIN'	=> 'Závisí na konkrétnom hostiteľovi, ktorého používate, či budete musieť odstrábiť alebo pridať ("/") lomítko na začiatok pravej časti každého prepísania pravidiel. Toto lomítko je použité v predvolenom nastavení, keď .htaccess je umiestnené v úrovni rootu. Je to naopak v prípade, keď phpBB je umiestnené v pod-priečinku a budete chcieť použiť .htaccess v rovnakej zložke.<br/> Predvolené nastavenie by vo všeobecnosti malo fungovať, ale pokiaľ to nie je tak, stlačte tlačítko "Re-generovať" a regenerujte .htaccess.',
	'SEO_HTACCESS_WSLASH'	=> 'RegEx Left Slash',
	'SEO_HTACCESS_WSLASH_EXPLAIN'	=> 'Závisí na konkrétnom hostiteľovi, ktorého používate, či budete musieť pridať ("/") lomítko na začiatku ľavej časti každého prepísania pravidiel. Toto lomítko ("/") sa nikdy nepoužíva v predvolenom nastavení.<br/> Predvolené nastavenie by vo všeobecnosti malo fungovať, ale pokiaľ to nie je tak, stlačte tlačítko "Re-generovať" a regenerujte .htaccess.',
	'SEO_MORE_OPTION'	=> 'Viac Možností',
	'SEO_MORE_OPTION_EXPLAIN' => 'Ak prvý podnet .htaccess nefunguje.<br/> Preverte si mod_rewrite či je aktivovaný na vašom servery.<br/> Potom si overte, či aktualizácia je presmerovaná do pravého priečinku.<br/> Ak to nejde, stlačte tlačítko "Ďalšie Volby".',
	'SEO_HTACCESS_SAVE' => 'Uložiť .htaccess',
	'SEO_HTACCESS_SAVE_EXPLAIN' => 'Ak označíte, .htaccess súbor bude vygenerovaný v pozícii predlohy priečinku phpbb_seo/cache/. Tu bude pripravený pre odsúhlasenie vašich posledných nastavení a tie sa budú stále presúvať na správne miesto.',
	'SEO_HTACCESS_ROOT_MSG'	=> 'Ak ste pripravení, môžete vybrať tento .htaccess kód a prilepiť ho do súboru .htaccess alebo použite "Uložiť .htaccess" cez zadanie ktoré je dole.<br/> Táto položka .htaccess je použitá v roote, vo vašom prípade je to %1$s prevedenie cez vaš FTP.<br/><br/> Môžete vygenerovať a zmeniť .htaccess v phpBB z podadresára použitím volby "Viac možnosti" ktorá je dole.',
	'SEO_HTACCESS_FOLDER_MSG' => 'Ak ste pripravení, môžete vybrať tento .htaccess kód a prilepiť ho do súboru .htaccess alebo použite "Uložiť .htaccess" cez zadanie ktoré je dole.<br/> Táto položka .htaccess je použitá v roote nainštalovaného phpBB, vo vašom prípade je to %1$s prevedenie cez vaš FTP.',
	'SEO_HTACCESS_CAPTION' => 'Titulok',
	'SEO_HTACCESS_CAPTION_COMMENT' => 'Komentár',
	'SEO_HTACCESS_CAPTION_STATIC' => 'Statické časti, upravovateľné v phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_DELIM' => 'Editovateľné obmedzovače v phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SUFFIX' => 'Editovateľné prípony v phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SLASH' => 'Voliteľné lomítka',
	'SEO_SLASH_DEFAULT'	=> 'Predvolený',
	'SEO_SLASH_ALT'		=> 'Alternatívny',
	'SEO_MOD_TYPE_ER'	=> 'Mod typ rewrite nie je správne nastavený v phpbb_seo/phpbb_seo_class.php.', 
	'SEO_SHOW'		=> 'Zobraziť',
	'SEO_HIDE'		=> 'Skryť',
	'SEO_SELECT_ALL'	=> 'Vybrať všetko',
	// ACP extended
	'ACP_SEO_EXTENDED_EXPLAIN' => 'Rozšírené nastavenia módu SEO v phpBB.',
	'SEO_EXTERNAL_LINKS' => 'Externé odkazy',
	'SEO_EXTERNAL_LINKS_EXPLAIN' => 'Otvorím, alebo nie, externé odkazy v novom okne / záložke',
	'SEO_EXTERNAL_SUBDOMAIN' => 'Odkazy Pod domén',
	'SEO_EXTERNAL_SUBDOMAIN_EXPLAIN' => 'Otvorím, alebo nie, linky pod-domén (z domény vášho fóra), v novom okne / záložke ',
	'SEO_EXTERNAL_CLASSES' => 'Externá trieda CSS',
	'SEO_EXTERNAL_CLASSES_EXPLAIN' => 'V tomto zadaní môžete definovať určité triedy css, ktoré aktivujú nové okno linky. Bez  separovania, zoznam názvu skupin, napríklad: postlink,external',
	// Titles
	'SEO_PAGE_TITLES' => '<a href="http://www.phpbb-seo.com/en/phpbb-seo-toolkit/optimal-titles-t1289.html" title="Mód Optimálnych Titulov" onclick="window.open(this.href); return false;">Titul Stránky</a>',
	'SEO_APPEND_SITENAME' => 'Pripojím názov stránky k titulu stránky',
	'SEO_APPEND_SITENAME_EXPLAIN' => 'Pripojím, alebo nie, názov stránky k titulu stránky.<br/><b style="color:red;">Pozor :</b><br/> Táto možnosť vyžaduje, aby ste správne upravil všetky overall_header.html pre Optimal titles mod, nakoľko názov stránky sa môže opakovať v názvoch stránok inak',
	// Meta
	'SEO_META' => '<a href="http://www.phpbb-seo.com/en/phpbb-seo-toolkit/seo-dynamic-meta-tags-t1308.html" title="Prejdem na stránku Dynamickývh módov pre meta tagy" onclick="window.open(this.href); return false;">Meta tagy</a>',
	'SEO_META_TITLE' => 'Cieľový Názov',
	'SEO_META_TITLE_EXPLAIN' => 'Štandardný Cieľový titul, použitý na stránke. Neaktivovaním sa meta titul pridá ako prázdny',
	'SEO_META_DESC' => 'Cieľový popis',
	'SEO_META_DESC_EXPLAIN' => 'Štandardný Cieľový popis, používaný na stránke',
	'SEO_META_DESC_LIMIT' => 'Cieľový limit popisu',
	'SEO_META_DESC_LIMIT_EXPLAIN' => 'Limit slov pre Cieľový tag popisu',
	'SEO_META_BBCODE_FILTER' => 'Filter Bbcode',
	'SEO_META_BBCODE_FILTER_EXPLAIN' => 'Umŕtvi oddelený zoznam BBCode ktorý bude plne filtrovaný v meta tagoch. Ostatné budú jednoducho vyradené z činnosti a ich obsah môže byť meta tag.<br/> Predvolené BBCode sú filtrované : <b>img,url,flash,code</b>.<br/><b style="color:red;">Pozor: </b> <br/> Ne filtrovanie img, url a flash BBCode nie je dobrý nápad, rovnako ako vo väčšine prípadov niektorý iný kód. Všeobecne povedané, len obsah BBCode je zaujímavý cieľ pre tag',
	'SEO_META_KEYWORDS' => 'Cieľové klúčové slová',
	'SEO_META_KEYWORDS_EXPLAIN' => 'Predvolené Meta kľúčové slová, ktoré sa používajú na stránke nie sú zadefinované. Jednoducho zadajte zoznam kľúčových slov',
	'SEO_META_KEYWORDS_LIMIT' => 'Cieľový limit klúčových slov',
	'SEO_META_KEYWORDS_LIMIT_EXPLAIN' => 'Limit slov pre kľúčové slová Meta tag',
	'SEO_META_MIN_LEN' => 'Filter dľžky slov',
	'SEO_META_MIN_LEN_EXPLAIN' => 'Minimálny počet znakov v slove, ktoré majú byť zahrnuté do kľúčových slov Meta tag, iba slová zložené z viac slov ako je tento limit budú brané do úvahy',
	'SEO_META_CHECK_IGNORE' => 'Ignorujem filter slov',
	'SEO_META_CHECK_IGNORE_EXPLAIN' => 'Aktivujem, search_ignore_words.php pre vylúčenie kľúčových slov v meta tagoch',
	'SEO_META_LANG' => 'Cieľový jazyk',
	'SEO_META_LANG_EXPLAIN' => 'Použijem meta tag kódu jazyka',
	'SEO_META_COPY' => 'Cieľ autorské právo',
	'SEO_META_COPY_EXPLAIN' => 'Autorské právo používané v meta tagoch. Neaktivovaním meta tag ostane prázdny',
	'SEO_META_FILE_FILTER' => 'Filter Súborov',
	'SEO_META_FILE_FILTER_EXPLAIN' => 'Umŕtvenie oddelenie zoznamov fyzického skripta php súboru ktorý by nemal byť indexovaný (robots:noindex,follow). Príklad : ucp,mcp',
	'SEO_META_GET_FILTER' => '_GET filter',
	'SEO_META_GET_FILTER_EXPLAIN' => 'Umŕtvenie oddelenie, zoznam premenných _GET, ktoré by nemali byť indexované (robots:noindex,follow). Príklad : style,hilit,sid',
	'SEO_META_ROBOTS' => 'Cieľe Robotov',
	'SEO_META_ROBOTS_EXPLAIN' => 'Tag Cieľa Robotov hovorí robotom ako majú indexovať vaše stránky. Štandard je nastavený na "index,follow" (sledovať index). To umožňuje robotom indexovať v cache vaše stránky a ďalšie odkazy v nich.<br/> <b style="color:red;"> Upozornenie: </b> <br/> Tento tag je citlivý, ak ste použil "noindex", nebudú indexované žiadne stránky',
	'SEO_META_NOARCHIVE' => 'Noarchive Cieľe Robotov',
	'SEO_META_NOARCHIVE_EXPLAIN' => 'Noarchive Tag Cieľa Robotov hovorí robotom, či môžu, alebo nemôžu prejsť do cache stránky. To sa týka iba cache, nemá to žiadny vplyv na indexovanie SERP častí stránky.<br/> Môžete si z tohoto zoznamu fór vybrať, ktoré bude spravované "noarchive" pre meta roboty.<br/> Táto funkcia môže byť užitočná napríklad, keď sa roboty pokušajú otvoriť niektoré fórum, ale je uzavrete pre hostí. Pridaním do volby "noarchive", sa im zabráni v prístupe k hodnoteniu obsahu prostredníctvom cache search engine, zatiaľ čo fóra a témy budú naďalej pristupné v SERP (SERP je skratka označujúca pre počet výsledkov vyhľadávania vyhľadávačov na dotaz (kľúčových slov) zadaných užívateľom)',	
	// Install
	'SEO_INSTALL_PANEL'	=> 'Inštalačný panel phpBB SEO',
	'SEO_ERROR_INSTALL'	=> 'Vyskytla sa chyba počas inštalácie. Odporúčame odinštalovať a začať znova.',
	'SEO_ERROR_INSTALLED'	=> 'Modul %s je už nainštalovaný.',
	'SEO_ERROR_ID'	=> 'Modul %1$ nemá ID.',
	'SEO_ERROR_UNINSTALLED'	=> 'Modul %s bol už odinštalovaný.',
	'SEO_ERROR_INFO'	=> 'Informácia :',
	'SEO_FINAL_INSTALL_PHPBB_SEO'	=> 'Prihlásenie do ACP',
	'SEO_FINAL_UNINSTALL_PHPBB_SEO'	=> 'Návrat na obsah fóra',
	'CAT_INSTALL_PHPBB_SEO'	=> 'Inštalácia',
	'CAT_UNINSTALL_PHPBB_SEO'	=> 'Odinštalovanie',
	'SEO_OVERVIEW_TITLE'	=> 'Prehľad phpBB SEO Ultimate SEO URL',
	'SEO_OVERVIEW_BODY'	=> 'Vitajte v našej verejnej modifikácii %1$s phpBB3 SEO mod rewrite %2$s.</p><p>Prosím, prečítajte si informácie na <a href="%3$s" title="Skontrolujte zadanie" onclick="window.open(this.href); return false;"><b>o vydaní</b></a> a iné informácie</p><p><strong style="text-transform: uppercase;">Poznámka:</strong> Musíte mať už vykonané potrebné zmeny v kóde a nahrané všetky nové súbory predtým ako budete pokračovať v tejto inštalácii.</p><p>Tento inštalačný systém vás prevedie celým procesom inštalácie modifikácie SEO phpBB3 a prepisania ACP. Tým sa vám umožní bezpečne si zvoliť vašu techniku prepisovania URL odkazov v phpBB pre čo najlepšie výsledky vyhľadavacích motorov</p>.',
	'CAT_SEO_PREMOD'	=> 'phpBB SEO Premod',
	'SEO_PREMOD_TITLE'	=> 'phpBB SEO Premod overview',
	'SEO_PREMOD_BODY'	=> 'Vitajte v našej verejnej modifikácii phpBB SEO Premod.</p><p>Prosím, prečítajte si si informácie na <a href="http://www.phpbb-seo.com/en/phpbb-seo-premod/seo-url-premod-t1549.html" title="Skontrolujte zadanie" onclick="window.open(this.href); return false;"><b>o vydaní</b></a> a iné informácie</p><p><strong style="text-transform: uppercase;">Poznámka:</strong> Budete mať možnosť si zvoliť medzi 3 prepisovacímy módmy SEO phpBB3.<br/><br/><b> K dispozícii sú tri rôzne normy prepisovania URL :</b><ul><li><a href="http://www.phpbb-seo.com/en/simple-seo-url/simple-phpbb-seo-url-t1566.html" title="Viac informácií o Jednoduchom móde"><b>Jednoduchý mód</b></a>,</li><li><a href="http://www.phpbb-seo.com/en/mixed-seo-url/mixed-phpbb-seo-url-t1565.html" title="Viac informácií o Zmiešanom móde"><b>Zmiešaný mód</b></a>,</li><li><a href="http://www.phpbb-seo.com/en/advanced-seo-url/advanced-phpbb-seo-url-t1219.html" title="Viac informácií o Rozšírenom móde"><b>Advanced</b></a>.</li></ul>Táto voľba je veľmi dôležitá, odporúčame vám pozrieť sa na kompletné zistenie funkcií tejto modifikácii SEO predtým, než budete on-line.<br/> Táto predmodifikácia je rovnako jednoducha ako inštalácia phpBB3.<br/><br/>
	<p>Požiadavky pre prepisovanie URL :</p>
	<ul>
		<li>Server Apache (OS Linux) obsahujúci modul mod_rewrite.</li>
		<li>IIS server (windows OS) obsahujúci modul isapi_rewrite, ale budete musieť prispôsobiť pravidlá prepisovania v httpd.ini</li>
	</ul>
	<p>Po inštalácii, musíte aktivovať teda nastaviť mód v ACP.</p>',
	'SEO_LICENCE_TITLE'	=> 'RECIPROCAL PUBLIC LICENSE',
	'SEO_LICENCE_BODY'	=> 'SEO phpBB přepisovací mód modifikácia sú vydávaná pod RPL licenciou, v ktorej je zakotvené, že nemôžete odstrániť alebo meniť phpBB SEO autorskej odkazy.<br/> Pre viac informácií o možných výnimkách, prosím, kontaktujte phpBB SEO administrátorov (prednostne SeO alebo dcz).',
	'SEO_PREMOD_LICENCE'	=> 'SEO phpBB prepisovací mód a Nulový duplikát tejto modifikácie, sú vydávané pod RPL licenciou, v ktorej je zakotvené, že nemôžete odstrániť alebo meniť phpBB SEO autorské odkazy.<br/> Pre viac informácií o možných výnimkách, prosím, kontaktujte phpBB SEO administrátorov (prednostne SeO alebo dcz).',
	'SEO_SUPPORT_TITLE'	=> 'Podpora',
	'SEO_SUPPORT_BODY'	=> 'Plná podpora sa poskytuje na <a href="%1$s" title="Navštívte %2$s SEO URL fórum" onclick="window.open(this.href); return false;"><b>%2$s SEO URL fórum</b></a>. Radi vám pomôžeme s otázkami ohľadom všeobecného nastavenia, konfiguračných problémov av neposlednom rade aj s určením príčiny chýb. </ P> <p> Neváhajte a navštívte nás.</p><p>Určite navštívte našu stránku <a href="http://www.phpbb-seo.com/en/" title="SEO Fórum" onclick="window.open(this.href); return false;"><b>Fórum Motora Optimalizácie Vyhladávania</b></a>.</p><p>Mali by ste sa <a href="http://www.phpbb-seo.com/en/ucp.php?mode=register" title="Zaregistrovať na phpBB SEO" onclick="window.open(this.href); return false;"><b>register</b></a>, alebo sa prihlásiť <a href="%3$s" title="Aby ste bol informovaní o aktualizáciách" onclick="window.open(this.href); return false;"><b>a začať odoberať novinky z vlákna o vydaniach</b></a>.',
	'SEO_PREMOD_SUPPORT_BODY'	=> 'Plná podpora sa poskytuje na <a href="http://www.phpbb-seo.com/en/phpbb-seo-premod/seo-url-premod-t1549.html" title="Navštívte phpBB SEO Premod foróm" onclick="window.open(this.href); return false;"><b>phpBB SEO Premod fórum</b></a>. Radi vám pomôžeme s otázkami ohľadom všeobecného nastavenia, konfiguračných problémov av neposlednom rade aj s určením príčiny chýb.</p><p>Určite navštívte našu stránku <a href="http://www.phpbb-seo.com/en/" title="SEO Fórum" onclick="window.open(this.href); return false;"><b>Fórum Motora Optimalizácie Vyhladávania</b></a>.</p><p>Mali by ste sa <a href="http://www.phpbb-seo.com/en/ucp.php?mode=register" title="Zaregistrovať na phpBB SEO" onclick="window.open(this.href); return false;"><b>register</b></a>, alebo sa prihlásiť <a href="http://www.phpbb-seo.com/en/viewtopic.php?t=1549&watch=topic" title="Aby ste mohol byť informovaný o aktualizáciach" onclick="window.open(this.href); return false;"><b>a začať odoberať novinky z vlákna o vydaniach</b></a>.',
	'SEO_INSTALL_INTRO'		=> 'Vitajte v inštalácii SEO phpBB',
	'SEO_INSTALL_INTRO_BODY'	=> '<p>Chystáte sa nainštalovať %1$s phpBB prepisovací mód SEO %2$s. Tento inštalačný nástroj aktivuje v phpBB prepisovací mód SEO pre ACP.</p><p>Po inštalácii musíte v ACP mód nastaviť a aktivovať.</p>
	<p><strong>Poznámka: </strong> Ak ste novým užívateľom tohto módu, vřele vám odporúčame urobiť si čas a otestovať všetky aspekty zmien URL odkazov, a to najlepšie na súkromnom alebo lokálnom serveri. Týmto spôsobom zabránite nechcenej indexácii vašich stránok, aby ste po čase zistili, ze vyhľadávače majú zaindexované iné URL odkazy ako tie vaše teraz zvolenej. Trpezlivosť je jedna ruka so SEO optimalizáciou a to aj prípade použitia Nulového duplikátu, ktorý robí HTTP presmerovanie skutočne jednoduchým. Nie je vo vašom záujme, aby boli URL odkazy fór presmerovávané príliš často.</p><br/>
	<p>Požiadavky :</p>
	<ul>
		<li>Server Apache (OS Linux) obsahujúci modul mod_rewrite.</li>
		<li>IIS server (windows OS) obsahujúci modul isapi_rewrite, ale budete musieť prispôsobiť pravidlá prepisovania v httpd.ini</li>
	</ul>',
	'SEO_INSTALL'		=> 'Nainštalovať',
	'UN_SEO_INSTALL_INTRO'		=> 'Vitajte pri odinštalovaní SEO z phpBB',
	'UN_SEO_INSTALL_INTRO_BODY'	=> '<p>Chystáte sa odinštalovať %1$s prepisovací mód phpBB SEO %2$s.</p>
	<p><strong>Poznámka: </strong> Týmto, nedeaktivujete prepisovanie URL odkazov vo vašom fóre, a to do tej doby pokial neodstránite "mod rewrite" z modifikovaných súborov v phpBB.</p>',
	'UN_SEO_INSTALL'		=> 'Odinštalovať',
	'SEO_INSTALL_CONGRATS'			=> 'Blahoželáme!',
	'SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Teraz ste úspešne nainštalovali %1$s phpBB3 SEO mód prepisu %2$s. Teraz by ste mali prejsť do ACP v phpBB a pokračovať v nastavení módu rewrite.<p>
	<p>V novej kategórii phpBB SEO, budete môcť :</p>
	<h2>Nastaviť a aktivovať prepisovanie URL</h2>
		<p>Urobte si čas, toto je miesto, kde si vyberie, ako vaše adresy URL bude vyzerať. Voľby nulový duplikát budú tiež už zriadené tu pri inštalácii.</p>
	<h2>Opatrne vyberte URL odkaz vášho fóra</h2>
		<p>Použitím Zmiešaného alebo Rozšíreného módu, budete môcť odlíšiť URL odkaz fóra od jeho názvu a zvoliť svoje kľúčové slová, ktoré v ňom použijete</p>
	<h2>Vytvorenie personalizované .htaccess</h2>
	<p>Akonáhle budete mať nastavené vyššie uvedené možnosti, budete môcť vygenerovať váš .htaccess a zároveň uložiť priamo na váš server.</p>',
	'UN_SEO_INSTALL_CONGRATS'	=> 'Modul phpBB SEO ACP bol odstránený.',
	'UN_SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Úspešne bol odinštaôovaný %1$s phpBB3 SEO mod rewrite %2$s.<p>
	<p>Týmto, nedeaktivujete prepisovanie URL odkazov na vašom fóre, do tej doby pokial neodstránite "mod rewrite" z modifikovaných phpBB súborov.</p>',
	'SEO_VALIDATE_INFO'	=> 'Validácia Info :',
	'SEO_SQL_ERROR' => 'Chyba SQL error',
	'SEO_SQL_TRY_MANUALLY' => 'Užívateľ nemá zrejme dostatok práv na spustenie vyžadovaného SQL dotazu do databázy, spustite ručne (phpMyadmin) :',	
	// Security
	'SEO_LOGIN'		=> 'Musite byť zaregistrovaný a prihlásený aby ste si mohli prezerať túto stránku.',
	'SEO_LOGIN_ADMIN'	=> 'Je nutné, aby ste bol prihlásený ako admin ak chcete zobraziť túto stránku.<br/> Vaša relácia bola zničená z bezpečnostných dôvodov.',
	'SEO_LOGIN_FOUNDER'	=> 'Je nutné, aby ste bol prihlásený ako zakladateľ, ak chcete prezerať túto stránku.',
	'SEO_LOGIN_SESSION'	=> 'Kontrola sekcii zlyhala.<br/> Nastavenie neboli ovplyvnené.<br/> Táto sekcia bola zničený z bezpečnostných dôvodov.',
	// Cache status
	'SEO_CACHE_FILE_TITLE'	=> 'Stav súboru Cache',
	'SEO_CACHE_STATUS'	=> 'Nakonfigurovaný priečinok cache je v: <b>%s</b>',
	'SEO_CACHE_FOUND'	=> 'Priečinok cache bol úspešne nájdený.',
	'SEO_CACHE_NOT_FOUND'	=> 'Priečinok cache som nenašel.',
	'SEO_CACHE_WRITABLE'	=> 'Priečinok cache je zapisovateľný.',
	'SEO_CACHE_UNWRITABLE'	=> 'Priečinok cache nie je zapisovateľný. Zmente jeho atribúty na 0777.',
	'SEO_CACHE_INNER_UNWRITABLE' => 'Niektoré súbory v adresáry cache sa nedajú zapisovať, uistite sa, že mate správne nastavené atribúty pre súbor cache a všetky súbory v ňom.',
	'SEO_CACHE_FORUM_NAME'	=> 'Názov fóra',
	'SEO_CACHE_URL_OK'	=> 'Uchovanie URL',
	'SEO_CACHE_URL_NOT_OK'	=> 'Toto URL Fóra nie je v cache',
	'SEO_CACHE_URL'		=> 'Základná URL',
	'SEO_CACHE_MSG_OK'	=> 'Súbor cache bol úspešne aktualizovaný.',
	'SEO_CACHE_MSG_FAIL'	=> 'Došlo k chybe pri aktualizácii cache.',
	'SEO_CACHE_UPDATE_FAIL'	=> 'Zadaná adresa URL, sa nedá použiť, cache nebolo ovplyvnené 	.',
	// Seo advices
	'SEO_ADVICE_DUPE'	=> 'Bol zistený duplikát záznamu v názve URL na odkaz fóra : <b>%1$s</b>.<br/> Zostane nedotknutý, pokial ho nezaktualizujete.',
	'SEO_ADVICE_RESERVED'	=> 'Zistil som obsadenie (použité z iných adries URL, takých ako je užívateľský profil atď) v názve URL odkazu fóra : <b>%1$s</b>.<br/> Toto obsadenie zostane nedotknuté, pokial ho nezaktualizujete.',
	'SEO_ADVICE_LENGTH'	=> 'Odkaz URL v cache je príliš dlhý.<br/> Zadajte iný, kratší',
	'SEO_ADVICE_DELIM'	=> 'URL odkaz uložený vo vyrovnávacej pamäti obsahuje SEO oddeľovač ID.<br/> Zadajte radšej originál.',
	'SEO_ADVICE_WORDS'	=> 'URL odkaz uložený vo vyrovnávacej pamäti obsahuje príliš veľa slov.<br/> Zadajte radšej kratší.',
	'SEO_ADVICE_DEFAULT'	=> 'Finálna adresa URL je po sformatovaní bohužiaľ rovnaká ako Povodná.<br/> Zadajte radšej originál.',
	'SEO_ADVICE_START'	=> 'URL fóra nie je možné ukončiť s parametrom stránkovania.<br/> Preto bolo odstránené z vášho zadania.',
	'SEO_ADVICE_DELIM_REM'	=> 'Požadované URL odkazy fór nemôžu končiť oddeľovačom fóra.<br/> Preto boli odstránené z vášho zadania.',
	// Mod Rewrite type
	'ACP_SEO_SIMPLE'	=> 'Základný',
	'ACP_SEO_MIXED'		=> 'Zmiešaný',
	'ACP_SEO_ADVANCED'	=> 'Rozšírený',
	'ACP_ULTIMATE_SEO_URL'	=> 'Základný SEO URL',
	// URL Sync
	'SYNC_REQ_SQL_REW' => 'Musíte aktivovať SQL prepisovanie, použite na to tento skript !',
	'SYNC_TITLE' => 'Synchronizácia URL',
	'SYNC_WARN' => 'Pozor, nezastavujte tento skript, počkajte pokiaľ sa výkon neskončí, <br/>predtým ako použijete tento skript si zálohujte vašu databázu!',
	'SYNC_COMPLETE' => 'Synchronizácia bola uspešne skompletizovaná!',
	'SYNC_RESET_COMPLETE' => 'Resetovanie je dokončené !',
	'SYNC_PROCESSING' => '<b>Pracujem, prosím čakaj ...</b><br/><br/><b>%1$s%%</b> bol spracovaný. <br/>Zatiaľ, boli <b>%2$s</b> položky spracované.<br/><b>%3$s</b> celkom z položiek, <b>%4$s</b> sú spracované. <br/>Rýchlosť : <b>%5$s item/s.</b><br/>Čas výkonu spracovania : <b>%6$ss</b><br/>Zostávajúci čas : <b>%7$s min.</b>',
	'SYNC_ITEM_UPDATED' => '<b>%1$s</b> položky boli úspešne aktualizované',
	'SYNC_TOPIC_URLS' => 'Spustím synchronizáciu URL tém',
	'SYNC_RESET_TOPIC_URLS' => 'Vynulujem všetky URL tém',
	'SYNC_TOPIC_URL_NOTE' => 'Bolo aktivované Prepisaním nastavenia SQL, teraz by ste mali synchronizovať URL všetkých vašich tém existulúcich na %stejto stránke%s.<br/>Týmto sa nezmenia niektoré vaše súčasné URL<br/><b style="color:red">Prosím pozor :</b><br/><em> Mali by ste synchronizovať len URL vašich tém, aby ste mal plne nastavený váš štandard url. Nie je to žiadna dráma ak sa zmení váš štandard url po vašej synchronizácii URL tém, ale mali by ste tento výkon zopakovať zakaždým, keď je na to čas.<br/> Pritom nie je žiadna dráma ani ak, vaše URL tém budú aktualizované po každej návšteve tém v prípade, že téma URL bola prázdna alebo nezodpovedá vašej bežnej norme.</em>',
	// phpBB SEO Class option
	'url_rewrite' => 'Aktivujem prepísanie URL',
	'url_rewrite_explain' => 'Akonáhle prestavíte nastavebia ktoré sú dole, a vygenerujete váš personalizovaný .htaccess, môžete aktivovať prepísanie URL ale skontrolujte si či vaše prepísané URL pracujú riadne. Ak dostanete hlášku o chybe 404, čo je najpravdepodobnejšie tak je nejaký problem v .htaccess, pokúste sa cez pomocné voľby určiť .htaccess a vygenerujte nový.',
	'modrtype' => 'Prepísanie typ URL',
	'modrtype_explain' => 'Sú tu tri typy prepísania nastavení pre mód phpBB SEO.<br/> Jeden <a href="http://www.phpbb-seo.com/en/simple-seo-url/simple-phpbb-seo-url-t1566.html" title="Tu nájdete viac detailov o Základnom móde" onclick="window.open(this.href); return false;"><b>Základný</b></a> jeden <a href="http://www.phpbb-seo.com/en/mixed-seo-url/mixed-phpbb-seo-url-t1565.html" title="Tu nájdete viac detailov o Zmiešanom móde" onclick="window.open(this.href); return false;"><b>Zmiešaný</b></a> a jeden <a href="http://www.phpbb-seo.com/en/advanced-seo-url/advanced-phpbb-seo-url-t1219.html" title="Tu nájdete viac detailov o Rozšírenom móde" onclick="window.open(this.href); return false;"><b>Rozšírený</b></a>.<br/><br/><b style="color:red">Prosím, čítajte :</b><br/><em>Prestavením tohto nastavenia sa zmenia všetky URL vo vašej web stránke.<br/> Vykonaním sa už obsahovo web stránka môže považovať	rovnako, ako je jej ochrana pri častom presúvaní.<br/> Takže mali by ste radšej rozhodúť či to vykonate alebo nie.<br/> Zmením tohoto nastavenia sa musí aktualizovať .htaccess.</em>',
	'sql_rewrite' => 'Aktivujem Prepísanie SQL',
	'sql_rewrite_explain' => 'Toto nastavenie vám umožní vybrať url pre každú tému. Budete môcť správne nastaviť url témy, keď je odoslaná nová téma alebo keď je niektorá existujúca upravená. Avšak táto funkčnosť je limitovaná na fóre pre administrátorov a moderátorov.<br/><br/><b style="color:red">Prosím, čítajte :</b><br/><em> Aktivavaním tejto voľby sa nezmení url témy. Existujúce URL budú uložené, ako sú zobrazené v databáze. Ale to nemusí platiť v prípade, ak nebolo zadanie aktivavané pred tým, ako ste ho začali používať. V takomto prípade budú personalizované adresy URL rovnako, ako boli.<br/> Táto funkcia má veľkú výhodu pre zabezpečenie prepisovania veľkého množstva URL, zvlášť pri použití virtuálnej zložky voľba v rozšírenom režime, a aby bolo oveľa jednoduchšie získať prepísané url z ľubovoľnej stránky.</em>',
	'profile_inj' => 'Vložím doplnenie profilov a skupin',
	'profile_inj_explain' => 'Tu si môžete zvoliť či mám vkladať prezývky, názvy skupín a užívateľských príspevkov (voliteľné, pozri nižšie) v URL odkazoch namiesto pôvodného statického prepisovania, <b>phpBB/nickname-uxx.html</b> na <b>phpBB/memberxx.html</b>.',
	'profile_vfolder' => 'Použijem virtuálne adresáre profilov',
	'profile_vfolder_explain' => 'Tu môžete simulovať adresárovú štruktúru pre profily a užívateľské príspevky (voliteľné, pozri nižšie) v URL odkazoch, <b>phpBB/nickname-uxx/(topics/)</b> alebo <b>phpBB/memberxx/(topics/)</b> namiesto <b>phpBB/nickname-uxx(-topics).html</b> a <b>phpBB/memberxx(-topics).html</b>.<br/><br/><b style="color:red">Prosím, čítajte</b><br/><em> Odstránenie Profil ID prepíše nastavenia.<br/>Zmenou tejto voľby sa vyžaduje aktualizácia .htaccess</em>',
	'profile_noids' => 'Odstránim ID z profilu',
	'profile_noids_explain' => 'V prípade, že je aktivované vkladanie profilov a skupín, môžete si vybrať medzi <b>example.com/phpBB/member/nickname</b> namiesto pôvodného zobrazenia <b>example.com/phpBB/nickname-uxx.html</b>. phpBB používa špeciálne jednoduchý, SQL dotaz pre tento druh zobrazenie bez užívateľského ID .<br/><br/><b style="color:red">Prosím, čítajte</b><br/><em>Špeciálne znaky nie sú spracované všetkými prehliadačmi rovnakým spôsobom. FF vždy používa  (<a href="http://www.php.net/urlencode">urlencode()</a>), a ako sa zdá, primárne používa Latin1, ale IE a Opera nie. Pre pokročilé zakódovanie, prečítajte si inštalačný súbor.<br/>Zmenou tejto voľby sa vyžaduje aktualizácia .htaccess</em>',
	'rewrite_usermsg' => 'Prepíšem bežné vyhľadávania užívateľských príspevkov',
	'rewrite_usermsg_explain' => 'Toto nastavenie má zmysel v prípade, že máte povolený verejný prístup ako do profilov, tak do vyhľadávania. <br/>Použitím tejto voľby pravdepodobne spozorujete zvýšenú aktivitu používania funkcie vyhľadávania a tým vyššiu záťaž servera. <br/> Druh prepisovanie URL odkazov (s alebo bez ID) sa bude riadiť nastavením pre profily skupín a uživateľov (pozrite vyššie).<br/><b>phpBB/messages/nickname/topics/</b> verzus <b>phpBB/nickname-uxx-topics.html</b> verzus <b>phpBB/memberxx-topics.html</b>.<br/>Dodatočne táto voľba aktivuje prepisovanie klasickej stránky vyhľadávania, rovnako tak ako aktívne nezodpovedané temy a stránky s novými príspevkami.<br/><br/><b style="color:red">Prosím, čítajte :</b><br/><em>Odstránenie ID bude znamenať rovnaké obmedzenia ako je vyššie popísané v užívateľskom profile.<br/>Zmenou tejto voľby sa vyžaduje aktualizácia .htaccess</em>',
	'rewrite_files' => 'Zaistím Prepísanie',
	'rewrite_files_explain' => 'Aktivovaním Prílohy phpBB prepisovania, môže byť veľmi užitočné, ak máte veľa priložených obrázkov ktoré sú už zaindexované. Súbory na stiahnutie musia byť v ceste spracovania aby to malo zmysel pre SEOwise.<br/><br/><b style="color:red">Prosím, čítajte :</b><br/><em>Uistite sa, že máte požadované "Pravidlo Prepísania" RewriteRule v (# PHPBB FILES ALL MODES) vo vašom .htaccess, ak aktivujete túto možnosť</em>',
	'rem_sid' => 'Odstránim SID',
	'rem_sid_explain' => 'SID bude týmto nastavením odstránená zo 100% URL odkazov cez phpbb_seo_class pre anonymných užívateľov, aj robotov. <br/> Tak zaistíte, že ani roboti neuvidia žiadne SID v URL odkazoch fór, tém a príspevkov, a hosťom, ktorí neprijmú cookies vytvorí viac ako jednu reláciu. <br/>Nulový duplikát predvolbov presmeruje URL odkazy SID na http 301 pre anonymných užívateľov a robotov.',
	'rem_hilit' => 'Odstránim zvýraznenia (Highlights)',
	'rem_hilit_explain' => 'Zvýraznenie bude týmto nastavením odstránené zo 100% URL odkazov cez phpbb_seo_class pre anonymných užívateľov, ako aj robotov. <br/> Tak zaistíte, že roboti neuvidia žiadne zvýraznenie v URL odkazoch fór, tém a príspevkov. <br/> Nulový duplikát sa bude automaticky riadiť týmto nastavením pre anonymných užívateľov a robotov, napr URL odkaz zo zvýraznením sa presmeruje na http 301.',
	'rem_small_words' => 'Odstránim krátke slová',
	'rem_small_words_explain' => 'Povolí odstránenie všetkých slov, v přepisovaných URL odkazoch, kratších ako 3 znaky. <br/><b Style="color:red">Prosím, čítajte </b><br/><em>Filtrovanie teoreticky zmení veľa URL odkazov na vašom fóre. <br/>Hoci by sa mal Nulový duplikát postarať o požadované presmerovanie, starostlivo zvážte aktiváciu alebo zmenu na už zaindexovanej stránke. <br/>Snažte, sa preto meniť toto nastavenie minimálne.</em>',
	'virtual_folder' => 'Virtuálny Adresár',
	'virtual_folder_explain' => 'Povolím pridanie URL tém do virtuálneho adresára URL fóra.<br/><br/><b>Príklad :</b><br/><em><b>forum-title-fxx/topic-title-txx.html</b> verzus <b>topic-title-txx.html</b> pre URL fóra.</em><br/><br/><b style="color:red">Prosím, čítajte</b><br/><em>Vloženie do virtuálneho adresára zmení všetky vaše URL adresy webových stránok rýchlo a veľmi ľahko.<br/>Mali by ste túto zmenu alebo aktiváciu zvážiť, pretože to bude mať vplyv na spätnú väzbu pre vyhľadávače. <br/>Snažte, sa preto meniť toto nastavenie minimálne.<br/>Zmenou tejto voľby sa vyžaduje aktualizácia .htaccess.</em>',
	'virtual_root' => 'Virtuálny Root',
	'virtual_root_explain' => 'Ak je phpBB nainštalovaný v podadresáry (napr. phpBB3/), môžete takto nasimulovať jeho umiestnenie v roote.<br/><br/><b>Príklad :</b><br/><em><b>phpBB3/forum-title-fxx/topic-title-txx.html</b> verzus <b>forum-title-fxx/topic-title-txx.html</b> pre URL tém.</em><br/><br/>Toto môže byť užitočné pre skrátenie URL odkazov, najmä ak používate "Virtuálny Adresár". Neprepísané odkazy v adresáry phpBB budú naďalej viditeľné funkčné a budú pracovať v zložke phpBB.<br/><br/><b style="color:red">Prosím, čítajte :</b><br/><em>Používanie tohto nastavenia sa musí použiť domovská stránka ako index fóra (napr forum.html).<br/> Táto voľba zmení veľa URL odkazov vo vašom fóre.<br/>Ak už máte zaindexované fórum robotom, potom by ste mali túto zmenu alebo aktiváciu zvážiť, pretože bude mať vplyv na spätnú väzbu pre vyhľadávače. Snažte, sa preto meniť toto nastavenie minimálne.<br/>Zmenou tejto voľby sa vyžaduje aktualizácia .htaccess.</em>',
	'cache_layer' => 'Cachovanie URL fór',
	'cache_layer_explain' => 'Zapne vyrovnávaciu pamäť pre URL odkazy fóra a tým sa umožní ich oddeleniu z názvu URL odkazov<br/><br/><b>Príklad :</b><br/><em><b>forum-title-fxx/</b> verzus <b>any-title-fxx/</b> pre URL fóra.</em><br/><br/><b style="color:red">Prosím, čítajte</b><br/><em>Táto voľba vám umožní zmeniť URL odkaz vášho fóra, a teda pravdepodobne aj mnoho URL odkazov tém, ak používate Virtuálny Adresár. <br/>URL odkazy tém budú vždy správne presmerované s voľbou Nulový Duplikát. <br/>To bude platiť aj pre URL odkaz fóra, ak ponecháte oddeľovače a ID, pozrite sa nižšie.</em>',
	'rem_ids' => 'Odstránenie ID fór',
	'rem_ids_explain' => 'Odstráni ID a oddeľovače v odkazoch URL fór. Toto zadanie použite len v prípade, že máte aktivované "cachovanie URL fóra". <br/>Príklad :</b><br/><em><b>any-title-fxx/</b> verzus <b>any-title/</b> pre URL fóra.</em><br/><br/><b style="color:red">Prosím, čítajte :</b><br/>Táto voľba vám umožní zmeniť URL odkaz vášho fóra, a pravdepodobne aj mnoho iných URL odkazov na témy, ak používate Virtuálny Adresár. <br/> URL odkazy tém budú vždy správne presmerované s voľbou Nulový Duplikát. </br>Nebude to platiť vo všetkých prípadoch pre odkazy URL fór: <b> any-title-FXX / </b> budú vždy správne presmerované s voľbou Nulový Duplikát, ale nestane sa tak v prípade, že upravíte <b> any-title / </b> na <b> something-else / </b>.<br/> V takomto prípade, <b> any -title / </b> sa teraz bude správať ako neexistujúce fórum. <br/> Dobre sa teda rozhodnite, či je táto voľba pre vás potrebná, ale z hľadiska SEO optimalizácie ide o dobrý krok.</em>',
	// copytrights
	'copyrights' => 'Autorské právo',
	'copyrights_img' => 'Link obrázka',
	'copyrights_img_explain' => 'Môžete si vybrať, akým spôsobom bude zobrazený copyright linku SEO. Buď ako obrázkový alebo ako textový odkaz.',
	'copyrights_txt' => 'Link text',
	'copyrights_txt_explain' => 'Sem môžete zadať text ktorý sa použije ako spojený titul autorského práva  phpBB a SEO ako ukotvenie textu v riadku. Ak ponecháte pole zadania prázdne ostane predvolené nastavenie.',
	'copyrights_title' => 'Titul Linku',
	'copyrights_title_explain' => 'Sem môžete zadať text ktorý sa použije ako spojený titul autorského práva  phpBB a SEO. Ak ponecháte pole zadania prázdne ostane predvolené nastavenie.',
	// Zero duplicate
	// Options 
	'ACP_ZERO_DUPE_OFF' => 'Vypnúť',
	'ACP_ZERO_DUPE_MSG' => 'Umiestnenie',
	'ACP_ZERO_DUPE_GUEST' => 'Hostia',
	'ACP_ZERO_DUPE_ALL' => 'Všetko',
	'zero_dupe' =>'Nulový duplikát',
	'zero_dupe_explain' => 'Nasledujúce nastavenia sa týkajú Nulového duplikátu, v týchto zadaniach môžete meniť nastavenia podľa vašich potrieb. <br/> Zmena nastavení nemusí nevyhnutne viesť k aktualizácii .htacess.',
	'zero_dupe_on' => 'Aktivovat Nulový duplikát',
	'zero_dupe_on_explain' => 'Zadanie povoli aktiváciu alebo deaktivuje presmerovania pomocou Nulového duplikátu.',
	'zero_dupe_strict' => 'Presné spracovanie',
	'zero_dupe_strict_explain' => 'Ak je toto zadanie aktivované, tak Nulový duplikát skontroluje či požadovaná URL presne zodpovedá konkrétnej URL.<br/>Ak je zadanie vypnuté, tak Nulový duplikát len skontroluje či požadovaný odkaz URL je aspoň časťou požadovaného odkazu URL.<br/>Ide vlastne o to, aby presmerovanie fungovalo, sú módy, ktoré by mohli rušiť Nulový duplikát pridaním GET premenných, cez toto zadanie sa tomu zabráni.',
	'zero_dupe_post_redir' => 'Presmerovanie príspevkov',
	'zero_dupe_post_redir_explain' => 'V tomto zadaní, sa určí ako sa má zaobchádzať s URL; sú tu 4 zadania; <br/><b>&nbsp;vypnuté</b>, nepresmeruje URL odkazy príspevkov,<br/><b>&nbsp;zoradenie</b>, len sa uisti že sa používa postxx.html namiesto url,<br/><b>&nbsp;hostia</b>, presmeruje hosťov ak je to potrebné na URL zodpovedajúcej temy, pokial sa postxx.html nepresvedčí či sa nejedná o registrovaného uživateľa, postxx.html slúži len pre prihlásených používateľov,<br/><b>&nbsp;všetko</b>, vykoná v prípade potreby, presmerovanie na url témy.<br/><br/><b style="color:red">Prosím, čítajte</b><br/><em>Spracovanie cez <b>postxx.html</b> URL je bezpečné SEO riešenie, pokiaľ nezmeníte zakáz url vaších príspevkov v robots.txt.<br/>Presmerovanie všetkého pravepodobne spôsobí presmerovanie večšinu spracovaní url.<br/>Presmerovanie postxx.html vo všetkých prípadoch tiež spôsobí, že cesta správy ktorá bolo odoslaná sa potom presunie a bude ju vidieť, tým že sa zmení url, vďaka módu zero duplicate ostane v zadaní SEO bez poškodenia, ale v takomto prípade predchádzajúca linka k tomuto príspevku sa nepripojí.</em>',
	// no duplicate
	'no_dupe' => 'Bez duplikátov',
	'no_dupe_on' => 'Aktivovať Bez duplikátov',
	'no_dupe_on_explain' => 'Mód Bez duplikátov nahrádza odkazy príspevkov, s príslušnými URL zo strankovaných tém. <br/> Nepridáva žiadny SQL, len vykoná naviac LEFT JOIN dotaz. V niektorých prípadoch to môže znamenať väčšiu záťaž servera, ale väčšinou by to nemal byť problém.',
));
?>