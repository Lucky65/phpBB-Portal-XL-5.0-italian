<?php
/** 
*
* phpbb_seo [Slovak]
*
* @package phpbb_seo
* @version $Id: phpbb_seo.php, 2007/08/30 13:48:48 fds Exp $
* @copyright (c) 2007 phpBB SEO
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
	'ACP_CAT_PHPBB_SEO'	=> 'phpBB SEO',
	'ACP_MOD_REWRITE'	=> 'URL Prepísanie nastavenia',
	// ACP sub Cat
	'ACP_PHPBB_SEO_CLASS'	=> 'Skupina nastavení phpBB SEO',
	'ACP_PHPBB_SEO_CLASS_EXPLAIN'	=> 'V tomto zadaní môžete nastaviť rôzne voľby phpBB SEO "mod rewrite". <br/> Rôzne predvolené nastavenia ako oddeľovače a prípony je potrebné nastaviť priamo v phpbb_seo_class.php, je tu zahrnuta aj aktualizácia . htaccess a s najväčšou pravdepodobnosťou je nastavený na správne presmerovanie.%3$s',
	'ACP_PHPBB_SEO_VERSION' => 'Verzia',
	'ACP_PHPBB_SEO_MODE' => 'Mód',
	'ACP_SEO_SUPPORT_FORUM' => 'Fórum Podpora',
	// ACP sub Cat
	'ACP_FORUM_URL'	=> 'Nastavenie URL Fóra',
	'ACP_FORUM_URL_EXPLAIN'		=> 'V tomto zadaní môžete vidieť ktoré súbory obsahuje cache fóra, ako zavedaný titul a URL.<br/>To čo je v zelených farbách je v cache fóre, to čo je v červených farbách nie je v cache fóra.<br/><br/><b style="color:red">Prosím Pozor :</b><br/><em><b>každý-titul-fxx/</b> bude vždy vhodne presmerovaný ako Nultý Duplikát a bude v znakovej sade v ktorej bol upravený <b>každý-titul/</b> no <b>každý-inde/</b>.<br/> V týchto prípadoch bude zatial upravený, <b>každý-titul/</b> vo fore ako nejestvujúci pokial nezadáte vhodné presmerovanie.</em>',
	'ACP_NO_FORUM_URL'	=> '<b>URL správy fóra je zablokovaná<b><br/>Menežovanie URL fóra je dostupné len v rozšírenom a Zmiešanom režime keď je aktivované kešovanie.<br/>Nastavenia URL fóra zostane aktívne v pokročilom Zmiešanom režime.',
	// ACP sub Cat
	'ACP_HTACCESS'	=> '.htaccess',
	'ACP_HTACCESS_EXPLAIN'	=> 'Tento pomocný program vam pomôže vytvoriť váš .htacess.<br/>Táto verzia je podkladom navrhnutá pre nastavenie vášho phpbb_seo/phpbb_seo_class.php.<br/>Môžete editovať hodnoty v $seo_ext and $seo_static pred tým ako nainštalujete tento .htaccess zosobnenia odberu URL.<br/>Môžete si vybrať napríklad, použite .htm umiestnenie v .html a to umiestnenie  "správ" umiestnenie "prispevku" "tímu vašej siete" umiestnenie " tímu" a tak ďalej.<br/>Ak budete upravovať tieto zadania obsahované v SE, musíte presne zadať  presmerovanie.<br/>Všetky štandardné nastavenia nie sú zlé, tento krok môžete bez obáv preskočiť, ak chcete uprednostniť predvolené zadania.<br/>I keď teraz je najlepší čas, pre vykonanie znien, iste zaberie to určitý čas pokým sa prepíšu zadania.<br/>Aktualizovaný .htaccess bude v roote vášho fóra cez doménu (napr.: www.príklad.com).<br/>Ak phpBB je nainštalované v pod priečinku, označte Viac možností ktorá je dole a pridá voľbu aktualizovania v priečinku phpBB.',
	'SEO_HTACCESS_RBASE'	=> 'Umiestnenie .htaccess',
	'SEO_HTACCESS_RBASE_EXPLAIN' => 'Umiestnim .htaccess do priečinka v phpBB ?<br/>Prepísanie nastavení Bázy umožní pridať na fórum .htaccess do zložky. Toto je výhodnejšie ak . htaccess je v koreňovom adresári domény, dokonca aj ak phpBB je nainštalované v podzložke. Ale môžete dať prednosť tomu že priečinok bude umiestený vo fóre.',
	'SEO_HTACCESS_SLASH'	=> 'RegEx Right Slash',
	'SEO_HTACCESS_SLASH_EXPLAIN'	=> 'Závisí na konkrétnom hostiteľovi, ktorého používate, či budete musieť odstrábiť alebo pridať ("/") lomítko na začiatok pravej časti každého prepísania pravidiel. Toto lomítko je použité v predvolenom nastavení, keď .htaccess je umiestnené v úrovni rootu. Je to naopak v prípade, keď phpBB je umiestnené v pod-priečinku a budete chcieť použiť .htaccess v rovnakej zložke.<br/> Predvolené nastavenie by vo všeobecnosti malo fungovať, ale pokiaľ to nie je tak, stlačte tlačítko "Re-generovať" a regenerujte .htaccess.',
	'SEO_HTACCESS_WSLASH'	=> 'RegEx Left Slash',
	'SEO_HTACCESS_WSLASH_EXPLAIN'	=> 'Závisí na konkrétnom hostiteľovi, ktorého používate, či budete musieť pridať ("/") lomítko na začiatku ľavej časti každého prepísania pravidiel. Toto lomítko ("/") sa nikdy nepoužíva v predvolenom nastavení.<br/> Predvolené nastavenie by vo všeobecnosti malo fungovať, ale pokiaľ to nie je tak, stlačte tlačítko "Re-generovať" a regenerujte .htaccess.',
	'SEO_MORE_OPTION'	=> 'Viac Možností',
	'SEO_MORE_OPTION_EXPLAIN' => 'Ak prvý podnet .htaccess nefunguje.<br/>Preverte si mod_rewrite či je aktivovaný na vašom servery.<br/>Potom si overte, či aktualizácia je presmerovaná do pravého priečinku.<br/>Ak to nejde, stlačte tlačítko "Ďalšie Volby".',
	'SEO_HTACCESS_SAVE' => 'Uložiť .htaccess',
	'SEO_HTACCESS_SAVE_EXPLAIN' => 'Ak označíte, .htaccess súbor bude vygenerovaný v pozícii predlohy priečinku phpbb_seo/cache/. Tu bude pripravený pre odsúhlasenie vašich posledných nastavení a tie sa budú stále presúvať na správne miesto.',
	'SEO_HTACCESS_ROOT_MSG'	=> 'Ak ste pripravení, môžete vybrať tento .htaccess kód a prilepiť ho do súboru .htaccess alebo použite "Uložiť .htaccess" cez zadanie ktoré je dole.<br/> Táto položka .htaccess je použitá v roote, vo vašom prípade je to %1$s prevedenie cez vaš FTP.<br/><br/>Môžete vygenerovať a zmeniť .htaccess v phpBB z podadresára použitím volby "Viac možnosti" ktorá je dole.',
	'SEO_HTACCESS_FOLDER_MSG' => 'Ak ste pripravení, môžete vybrať tento .htaccess kód a prilepiť ho do súboru .htaccess alebo použite "Uložiť .htaccess" cez zadanie ktoré je dole.<br/> Táto položka .htaccess je použitá v roote nainštalovaného phpBB, vo vašom prípade je to %1$s prevedenie cez vaš FTP.',
	'SEO_HTACCESS_CAPTION' => 'Titulok',
	'SEO_HTACCESS_CAPTION_COMMENT' => 'Komentár',
	'SEO_HTACCESS_CAPTION_STATIC' => 'Statické časti, upravovateľné v phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_DELIM' => 'Editovateľné obmedzovače v phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SUFFIX' => 'Editovateľné prípony v phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SLASH' => 'Voliteľné lomítka',
	'SEO_SLASH_DEFAULT'	=> 'Predvolené',
	'SEO_SLASH_ALT'		=> 'Alternatívne',
	'SEO_MOD_TYPE_ER'	=> 'Mod typ rewrite nie je správne nastavený v phpbb_seo/phpbb_seo_class.php.', 
	'SEO_SHOW'		=> 'Zobraziť',
	'SEO_HIDE'		=> 'Skryť',
	'SEO_SELECT_ALL'	=> 'Vybrať všetko',
	// Install
	'SEO_INSTALL_PANEL'	=> 'Inštalačný panel phpBB SEO',
	'SEO_ERROR_INSTALL'	=> 'Nastala chyba v procese inštalácie. Odinštalovanie je bezpečnejšie, než opakovať inštaláciu.',
	'SEO_ERROR_INSTALLED'	=> 'Modul %s je už nainštalovaný.',
	'SEO_ERROR_ID'	=> 'Modul %1$ nemá ID.',
	'SEO_ERROR_UNINSTALLED'	=> 'Modul %s je už odinštalovaný.',
	'SEO_ERROR_INFO'	=> 'Informácia :',
	'SEO_FINAL_INSTALL_PHPBB_SEO'	=> 'Prihlásenie do ACP',
	'SEO_FINAL_UNINSTALL_PHPBB_SEO'	=> 'Vrátim sa späť na obsah fóra',
	'CAT_INSTALL_PHPBB_SEO'	=> 'Inštalácia',
	'CAT_UNINSTALL_PHPBB_SEO'	=> 'Odinštalovanie',
	'SEO_OVERVIEW_TITLE'	=> 'Prehľad phpBB SEO Ultimate SEO URL',
	'SEO_OVERVIEW_BODY'	=> 'Vitajte v našom verejnom vydaní %1$s phpBB3 SEO mod prepísania %2$s.</p><p>Prečítajte si prosím <a href="%3$s" title="Pozrite sa na vlákno" onclick="window.open(this.href); return false;"><b>uvoľnenia</b></a> pre viac informácií</p><p><strong style="text-transform: uppercase;">Upozornenie:</strong> Musíte už mať vykonané požadované zmeny kódov a nahralé všetky nové súbory, pred tým ako budete pokračovať v inštalácii.</p><p>Tento inštalačný systém vás prevedie procesom inštalácie phpBB3 mod rewrite SEO Ovládací Panel Administrátora. To vám umožní v phpBB presné prepísanie štandardných URL pre dosiahnutie čo najlepších výsledkoch vo vyhľadávačoch</p>.',
	'CAT_SEO_PREMOD'	=> 'Prehľad phpBB SEO Premod',
	'SEO_PREMOD_TITLE'	=> 'phpBB SEO Premod',
	'SEO_PREMOD_BODY'	=> 'Vitajte v našom verejnom vydaní phpBB SEO Premod.</p><p>Prečítajte si prosím  <a href="http://www.phpbb-seo.com/en/phpbb-seo-premod/seo-url-premod-t1549.html" title="Pozrite sa na vlákno" onclick="window.open(this.href); return false;"><b>uvolnenia</b></a> pre viac informácií</p><p><strong style="text-transform: uppercase;">Upozornenie:</strong> Budete mať možnosť zvoliť si medzi tromi phpBB3 SEO modmi prepisovača.<br/><br/><b>Sú k dispozícii tri rôzne normy prepisovania URL:</b><ul><li><a href="http://www.phpbb-seo.com/en/simple-seo-url/simple-phpbb-seo-url-t1566.html" title="Viac informácií o Jednoduchom móde"><b>Simple mod</b></a>,</li><li><a href="http://www.phpbb-seo.com/en/mixed-seo-url/mixed-phpbb-seo-url-t1565.html" title="Viac informácií o Zmiešanom móde"><b>Mixed mod</b></a>,</li><li><a href="http://www.phpbb-seo.com/en/advanced-seo-url/advanced-phpbb-seo-url-t1219.html" title="Viac informácií o Rozšírenom móde"><b>Advanced</b></a>.</li></ul>Táto voľba je veľmi dôležitá, odporúčame vám pozrieť si a plne si objastniť SEO funkcie tejto modifikácie predtým, než budete on-line.<br/>Modifikácia je rovnako jednoduchá ako inštalácia phpBB3, treba iba sledovať proces inštalácie.<br/><br/>
	<p>Požiadavky na prepisovanie URL :</p>
	<ul>
		<li>Server Apache (OS Linux) s modulom mod_rewrite.</li>
		<li>IIS server (Windows OS) s ISAPI_Rewrite modul, ale budete musieť prispôsobiť rewriterules v httpd.ini</li>
	</ul>
	<p>Po inštalácii, budete musieť prejsť do nastavenia Administrátorského panelu a aktivovoať mód.</p>',
	'SEO_LICENCE_TITLE'	=> 'RECIPROCAL PUBLIC LICENSE',
	'SEO_LICENCE_BODY'	=> 'phpBB SEO "mod rewrite (přepisovací mód)" modifikácie sú vydávané pod RPL licenciou, v ktorej je zakotvené, že nemôžete odstrániť alebo meniť phpBB SEO autorskej odkazy. <br/> Pre viac informácií o možných výnimkách, prosím, kontaktujte phpBB SEO administrátorov (prednostne SeO alebo DCZ).',
	'SEO_PREMOD_LICENCE'	=> 'phpBB SEO "mod rewrite (přepisovací mód)" a "Zero duplicate (Nulový duplikát)" modifikácie, ktoré sú obsiahnuté v tejto modifikácii, sú vydávané pod RPL licenciou, v ktorej je zakotvené, že nemôžete odstrániť alebo meniť phpBB SEO autorskej odkazy. < br /> Pre viac informácií o možných výnimkách, prosím, kontaktujte phpBB SEO administrátorov (prednostne SeO alebo DCZ).',
	'SEO_SUPPORT_TITLE'	=> 'Podpora',
	'SEO_SUPPORT_BODY'	=> 'Plná podpora je poskytovaná na <a href="%1$s" title="Návštívte %2$s fórum SEO URL" onclick="window.open(this.href); return false;"><b>%2$s fórum SEO URL</b></a>. Kde poskytneme odpovede na všeobecné otázky, nastavenia, problémy s konfiguráciou, a podpora pre stanovenie spoločných problémov.</p><p>Určite navštívte naše <a href="http://www.phpbb-seo.com/en/" title="SEO Fórum" onclick="window.open(this.href); return false;"><b>Vyhľadanie Optimalizácia fóra</b></a>.</p><p>Mali by ste<a href="http://www.phpbb-seo.com/en/ucp.php?mode=register" title="Zaregistrovať na phpBB SEO" onclick="window.open(this.href); return false;"><b>zaregistrovať</b></a>, prihlásiť <a href="%3$s" title="Chcete byť informovaný o aktualizáciách" onclick="window.open(this.href); return false;"><b>prihláste sa k odberu thread</b></a> ktorý bude oznámený meilom po každej aktualizácii.',
	'SEO_PREMOD_SUPPORT_BODY'	=> 'Plná podpora je poskytovaná na <a href="http://www.phpbb-seo.com/en/phpbb-seo-premod/seo-url-premod-t1549.html" title="Navštívte fórum phpBB SEO Premod " onclick="window.open(this.href); return false;"><b>fórum phpBB SEO Premod</b></a>. Kde poskytneme odpovede na všeobecné otázky, nastavenia, problémy s konfiguráciou, a podpora pre stanovenie spoločných problémov.</p><p>Určite navštívte naše <a href="http://www.phpbb-seo.com/en/" title="SEO Fórum" onclick="window.open(this.href); return false;"><b>Vyhľadanie Optimalizácia fóra</b></a>.</p><p>Mali by ste sa<a href="http://www.phpbb-seo.com/en/ucp.php?mode=register" title="Zaregistrovať na phpBB SEO" onclick="window.open(this.href); return false;"><b>zaregistrovať</b></a>, prihlásiť <a href="http://www.phpbb-seo.com/en/viewtopic.php?t=1549&watch=topic" title="Chcete byť informovaný o aktualizáciách" onclick="window.open(this.href); return false;"><b>prihláste sa k odberu</b></a> ktorý bude oznámený meilom po každej aktualizácii.',
	'SEO_INSTALL_INTRO'		=> 'Vitajte v phpBB SEO Sprievodca inštaláciou',
	'SEO_INSTALL_INTRO_BODY'	=> '<p>Chystáte sa nainštalovať %1$s phpBB SEO mod rewrite %2$s. Tento nástroj aktivuje inštaláciu phpBB SEO mod rewrite ako ovládací panel phpBB v ACP.</p><p>Once installed, you will need to go to the ACP to set up and activate the mod.</p>
	<p><strong>Upozornenie:</strong> Ak je to prvýkrát, môžete vyskúšať tento mod, odporúčame najsť si čas na test rôznych url štandardne tento mód a jeho výstup je nastavený na miestny alebo súkromný test Server. Týmto spôsobom nebude zobrazovať iné URL na roboty pri testovaní. Ak ich najde po mesiaci čo zistí potom, uprednostní rôzne iné adresy URL. Trpezlivosť je cnosť SEO je múdry, a to aj v prípade ak nie je žiadny duplikát HTTP tak vykoná presmerovanie veľmi jednoducho a presmeruje kedykoľvek všetky vaše URL fóra.</p><br/>
	<p>Požiadavky:</p>
	<ul>
		<li>Server Apache (OS Linux) s modulom mod_rewrite.</li>
		<li>IIS server (Windows OS) s ISAPI_Rewrite modul, ale budete musieť prispôsobiť rewriterules v httpd.ini</li>
	</ul>',
	'SEO_INSTALL'		=> 'Inštalovať',
	'UN_SEO_INSTALL_INTRO'		=> 'Vitajte v odinštalácii phpBB SEO',
	'UN_SEO_INSTALL_INTRO_BODY'	=> '<p>Chystáte sa odinštalovať %1$s phpBB SEO mod rewrite %2$s ACP module.</p>
	<p><strong>Upozornenie:</strong> Týmto, nedeaktivujete prepisovanie URL odkazov na vašom fóre, a to do tej doby ako odstránite "mod rewrite" z modifikovaných phpBB súborov.</p>',
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
	// Security
	'SEO_LOGIN'		=> 'Musite byť zaregistrovaný a prihlásený aby ste si mohli prezerať túto stránku.',
	'SEO_LOGIN_ADMIN'	=> 'Je nutné, aby ste bol prihlásený ako admin ak chcete zobraziť túto stránku.<br/> Vaša relácia bola zničená z bezpečnostných dôvodov.',
	'SEO_LOGIN_FOUNDER'	=> 'Je nutné, aby ste bol prihlásený ako zakladateľ, ak chcete prezerať túto stránku.',
	'SEO_LOGIN_SESSION'	=> 'Kontrola sekcii zlyhala. <br/>Nastavenie neboli ovplyvnené.<br/> Táto sekcia bola zničená z bezpečnostných dôvodov.',
	// Cache status
	'SEO_CACHE_FILE_TITLE'	=> 'Stav súboru Cache',
	'SEO_CACHE_STATUS'	=> 'Nakonfigurovaný priečinok cache je v: <b>%s</b>',
	'SEO_CACHE_FOUND'	=> 'Priečinok cache bol úspešne nájdený.',
	'SEO_CACHE_NOT_FOUND'	=> 'Priečinok cache som nenašel.',
	'SEO_CACHE_WRITABLE'	=> 'Priečinok cache je zapisovateľný.',
	'SEO_CACHE_UNWRITABLE'	=> 'Priečinok cache nie je zapisovateľný. Zmente jeho atribúty na 0777.',
	'SEO_CACHE_FORUM_NAME'	=> 'Názov fóra',
	'SEO_CACHE_URL_OK'	=> 'Cachovanie URL',
	'SEO_CACHE_URL_NOT_OK'	=> 'Toto URL Fóra nie je v cache',
	'SEO_CACHE_URL'		=> 'Základná URL',
	'SEO_CACHE_MSG_OK'	=> 'Súbor cache bol úspešne aktualizovaný.',
	'SEO_CACHE_MSG_FAIL'	=> 'Došlo k chybe pri aktualizácii cache.',
	'SEO_CACHE_UPDATE_FAIL'	=> 'Zadaná URL sa nedá použiť v cache sa nič nezmenilo.',
	// Seo advices
	'SEO_ADVICE_DUPE'	=> 'Bol zistený duplikát záznamu v názve URL na odkaz fóra : <b>%1$s</b>.<br/>Zostane nedotknutý, pokial ho nezaktualizujete.',
	'SEO_ADVICE_RESERVED'	=> 'Zistil som obsadenie (použité z iných adries URL, takých ako je užívateľský profil atď) v názve URL odkazu fóra : <b>%1$s</b>.<br/>Toto obsadenie zostane nedotknuté, pokial ho nezaktualizujete.',
	'SEO_ADVICE_LENGTH'	=> 'Odkaz URL v cache je príliš dlhý.<br/>Zadajte iný, kratší',
	'SEO_ADVICE_DELIM'	=> 'URL odkaz uložený vo vyrovnávacej pamäti obsahuje SEO oddeľovač ID. <br/>Zadajte radšej originál.',
	'SEO_ADVICE_WORDS'	=> 'URL odkaz uložený vo vyrovnávacej pamäti obsahuje príliš veľa slov. <br/>Zadajte radšej kratší.',
	'SEO_ADVICE_DEFAULT'	=> 'Finálna adresa URL je po sformatovaní bohužiaľ rovnaká ako Pôvodná.<br/>Zadajte radšej originál.',
	'SEO_ADVICE_START'	=> 'URL fóra nie je možné ukončiť s parametrom stránkovania. <br/>Preto bolo odstránené z vášho zadania.',
	'SEO_ADVICE_DELIM_REM'	=> 'Požadované URL odkazy fór nemôžu končiť oddeľovačom fóra. <br/>Preto boli odstránené z vášho zadania.',
	// Mod Rewrite type
	'ACP_SEO_SIMPLE'	=> 'Základný',
	'ACP_SEO_MIXED'		=> 'Zmiešaný',
	'ACP_SEO_ADVANCED'	=> 'Rozšírený',
	'ACP_ULTIMATE_SEO_URL'	=> 'Základný SEO URL',
	// URL Sync
	'SYNC_REQ_SQL_REW' => 'Musíte aktivovať prepísanie SQL použite tento skript !',
	'SYNC_TITLE' => 'Synchronizácia URL',
	'SYNC_WARN' => 'Pozor, nezastavujte tento skript, počkajte pokiaľ sa výkon neskončí, <br/>predtým ako použijete tento skript si zálohujte vašu databázu!',
	'SYNC_COMPLETE' => 'Synchronizácia bola uspešne skompletizovaná!',
	'SYNC_RESET_COMPLETE' => 'Vynulovanie je dokončené !',
	'SYNC_PROCESSING' => '<b>Pracujem, prosím čakaj ...</b><br/><br/><b>%1$s%%</b> bol spracovaný. <br/>Zatiaľ, boli <b>%2$s</b> položky spracované.<br/><b>%3$s</b> celkom z položiek, <b>%4$s</b> sú spracované.<br/>Rýchlosť : <b>%5$s item/s.</b><br/>Čas výkonu spracovania : <b>%6$ss</b><br/>Zostávajúci čas : <b>%7$s min.</b>',
	'SYNC_ITEM_UPDATED' => '<b>%1$s</b> položky boli aktualizované',
	'SYNC_TOPIC_URLS' => 'Spustím synchronizáciu URL tém',
	'SYNC_RESET_TOPIC_URLS' => 'Vynulujem všetky URL tém',
	'SYNC_TOPIC_URL_NOTE' => 'Bolo aktivované Prepisaním nastavenia SQL, teraz by ste mali synchronizovať URL všetkých vašich tém existulúcich na %stejto stránke%s.<br/>Týmto sa nezmenia niektoré vaše súčasné URL<br/><b style="color:red">Prosím pozor :</b><br/><em>Mali by ste synchronizovať len URL vašich tém, aby ste mal plne nastavený váš štandard url. Nie je to žiadna dráma ak sa zmení váš štandard url po vašej synchronizácii URL tém, ale mali by ste tento výkon zopakovať zakaždým, keď je na to čas.<br/>Pritom nie je žiadna dráma ani ak, vaše URL tém budú aktualizované po každej návšteve tém v prípade, že téma URL bola prázdna alebo nezodpovedá vašej bežnej norme.</em>',
	// phpBB SEO Class option
	'url_rewrite' => 'Aktivujem prepísanie URL',
	'url_rewrite_explain' => 'Akonáhle prestavíte nastavenia ktoré sú dole, a vygenerujete váš personalizovaný .htaccess, môžete aktivovať prepísanie URL ale skontrolujte si či vaše prepísané URL pracujú riadne. Ak dostanete hlášku o chybe 404, čo je najpravdepodobnejšie tak je nejaký problem v .htaccess, pokúste sa cez pomocné voľby určiť .htaccess a vygenerujte nový.',
	'modrtype' => 'Prepísanie typ URL',
	'modrtype_explain' => 'Sú tu tri typy prepísania nastavení pre mód phpBB SEO.<br/>Jeden <a href="http://www.phpbb-seo.com/en/simple-seo-url/simple-phpbb-seo-url-t1566.html" title="Tu nájdete viac detailov o Základnom móde" onclick="window.open(this.href); return false;"><b>Základný</b></a> jeden <a href="http://www.phpbb-seo.com/en/mixed-seo-url/mixed-phpbb-seo-url-t1565.html" title="Tu nájdete viac detailov o Zmiešanom móde" onclick="window.open(this.href); return false;"><b>Zmiešaný</b></a> a jeden <a href="http://www.phpbb-seo.com/en/advanced-seo-url/advanced-phpbb-seo-url-t1219.html" title="Tu nájdete viac detailov o Rozšírenom móde" onclick="window.open(this.href); return false;"><b>Rozšírený</b></a>.<br/><br/><b style="color:red">Prosim čítajte :</b><br/><em>Prestavením tohto nastavenia sa zmenia všetky URL vo vašej web stránke.<br/>Vykonaním sa už obsahovo web stránka môže považovať	rovnako, ako je jej ochrana pri častom presúvaní.<br/>Takže mali by ste radšej rozhodúť či to vykonate alebo nie.<br/>Zmením tohoto nastavenia sa musí aktualizovať .htaccess.</em>',
	'sql_rewrite' => 'Aktivujem Prepísanie SQL',
	'sql_rewrite_explain' => 'Toto nastavenie vám umožní vybrať url pre každú tému. Budete môcť správne nastaviť url témy, keď je odoslaná nová téma alebo keď je niektorá existujúca upravená. Avšak táto funkčnosť je limitovaná na fóre pre administrátorov a moderátorov.<br/><br/><b style="color:red">Prosím čítajte :</b><br/><em>Zapnutím tejto voľby sa nezmenia url tém. Existujúce URL budú uložené, ako sú zobrazené v databáze. Ale to nemusí byť v prípade, dovtedy, čo ste túto voľbu začali používať. V takomto prípade môžu byť personalizované adresy URL rovnako, ako keby neboli.<br/>Táto funkcia má tiež veľkú výhodu v utváraní prepisovania veľa URL, zvlášť ak sa používa virtuálna zložka, voľba v rozšírenom režime, aby bolo oveľa jednoduchšie získať prepísané url z ľubovoľnej stránky.</em>',
	'profile_inj' => 'Vložím doplnenie profilov a skupin',
	'profile_inj_explain' => 'Tu si môžete vybrať či sa budú vkladať prezývky, názvy skupín v užívateľských príspevkoch (voliteľné, pozri nižšie) v URL odkazoch namiesto pôvodného statického prepisovania, <b>phpBB/nickname-uxx.html</b> namiesto <b>phpBB/memberxx.html</b>.',
	'profile_vfolder' => 'Virtuálne adresáre profilov',
	'profile_vfolder_explain' => 'Tu môžete simulovať adresárovú štruktúru pre profily a užívateľské príspevky (voliteľné, pozri nižšie) v URL odkazoch, <b>phpBB/nickname-uxx/(topics/)</b> alebo <b>phpBB/memberxx/(topics/)</b> namiesto <b>phpBB/nickname-uxx(-topics).html</b> a <b>phpBB/memberxx(-topics).html</b>.<br/><br/><b style="color:red">Prosim čítajte</b><br/><em>Odstránenie ID profilu ruší toto nastavenie.<br/>Zmena tohto natavenie vyžaduje aktualizáciu .htaccess</em>',
	'profile_noids' => 'Odstránim ID profilu',
	'profile_noids_explain' => 'V prípade, že je aktivovaná injekcia profilov a skupín, môžete si vybrať medzi <b>example.com/phpBB/member/nickname</b> namiesto pôvodného zobrazenie <b>example.com/phpBB/nickname-uxx.html</b>. phpBB používa špeciálny, aj keď jednoduchý, SQL dotaz pre tento druh zobrazenie bez užívateľského ID.<br/><br/><b style="color:red">Prosím čítajte</b><br/><em>Špeciálne znaky nie sú spracované všetkými prehliadačmi rovnakým spôsobom. FF vždy používa (<a href="http://www.php.net/urlencode">urlencode()</a>), a ako sa zdá, primárne používa Latin1, ale IE a Opera nie. Pre pokročilé možnosti zakódovanie, prečítajte si prosím inštalačný súbor.<br/>Zmena tohto natavenie vyžaduje aktualizáciu .htaccess</em>',
	'rewrite_usermsg' => 'Prepíšem stránky pre bežné vyhľadávanie užívateľských príspevkov',
	'rewrite_usermsg_explain' => 'Táto voľba má zmysel ak chcete povoliť verejný prístup do profilov, ako aj do prehľadávania stránok.<br/> Použitím tejto voľby pravdepodobne spozorujete zvýšenú aktivitu používaním funkcie vyhľadávania a tým vyššiu záťaž servera.<br/> Prepisovanie URL odkazov (bez ID) sa bude riadiť nastavením pre profily a skupiny (pozrite si vyššie).<br/><b>phpBB/messages/nickname/topics/</b> versus <b>phpBB/nickname-uxx-topics.html</b> versus <b>phpBB/memberxx-topics.html</b>.<br/>Dodatočne táto voľba aktivuje prepisovanie klasické stránky vyhľadávania, rovnako tak ako aktívne a nezodpovedane témy a stránky s novými príspevkami.<br/><br/><b style="color:red">Prosím čítajte :</b><br/><em>Odstránenie ID bude znamenať rovnaké obmedzenia ako je vyššie popísané v užívateľskom profile.<br/>Zmena tohto natavenie vyžaduje aktualizáciu .htaccess</em>',
	'rewrite_files' => 'Zaistím prepísanie',
	'rewrite_files_explain' => 'Aktivácia phpBB Prílohy prepisovania. Môže byť veľmi užitočná, ak máte veľa cenných obrázkov. Súbory amozrejme musia ostať sťahovatelné pomocov robotov, tak aj toto je spôsob ich zabespečenia cez SEO.<br/><br/><b style="color:red">Prosím čítajte :</b><br/><em>Uistite sa, že máte nastavené požadované pravidlo prepísať (# SÚBORY VŠETKÝCH DRUHOV V PHPBB) vo vašom .htaccess, ak aktivujete túto možnosť</em>',
	'rem_sid' => 'Odstránim SID (ID relácie)',
	'rem_sid_explain' => 'SID bude týmto nastavením odstránené zo 100% URL odkazov cez phpbb_seo_class pre anonymných užívateľov, a robotov.<br/>Tak zaistíte, že roboti nezistia žiadne SID v URL odkazoch fór, tém a príspevkov, ale návštevníci, ktorí neprijmú cookies pravepodobne vytvoria viac ako jednu reláciu.<br/>Prednastavený "Nulový duplikát" presmeruje URL odkazy SID na http 301 pre anonymných užívateľov a robotov.',
	'rem_hilit' => 'Odstránim zvýraznenie',
	'rem_hilit_explain' => 'Zvýraznenie bude týmto nastavením odstránené zo 100% URL odkazov cez phpbb_seo_class pre anonymných užívateľov, a robotov.<br/>Tak zaistíte, že roboti neuvidia žiadne zvýraznenie v URL odkazoch fór, tém a príspevkov.<br/>Nulový duplikát" sa bude automaticky riadiť týmto nastavením pre anonymných užívateľov a robotov, napr URL odkazy zo zvýraznením presmeruje na http 301.',
	'rem_small_words' => 'Odstránim bezvýznamné znaky',
	'rem_small_words_explain' => 'Povolí odstránenie všetkých slov, v přepisovaných URL odkazoch, kratších ako 3 znaky.<br/><br/><b style="color:red">Prosím, čítajte</b><br/><em>Filtrovanie teoreticky zmení veľa URL odkazov vo vašej web stránke.<br/>Hoci by sa mal "Nulový duplikát" postarať o požadované presmerovanie, starostlivo zvážte aktiváciu alebo zmenu na už zaindexovanej stránke.<br/>Preto mente toto nastavenie minimálne.</em>',
	'virtual_folder' => 'Virtuálny Adresár',
	'virtual_folder_explain' => 'Povoli pridať URL fóra ako virtuálnu zložku v téme URL.<br/><br/><b>Napríklad :</b><br/><em><b>forum-title-fxx/topic-title-txx.html</b> versus <b>topic-title-txx.html</b> pre odkaz na URL témy..</em><br/><br/><b style="color:red">Prosím čítajte</b><br/><em>Vkložením virtuálneho adresára sa zmení veľa URL odkazov na vašom fóre.<br/>Ak už máte zaindexované fóru, mali by ste túto zmenu alebo aktiváciu zvážiť, pretože to bude mať vplyv na spätnú väzbu vo vyhľadávači.<br/>Preto mente toto nastavenie minimálne.<br/>Po zmene je nutné vykonať aktualizáciu .htaccess.</em>',
	'virtual_root' => 'Virtuálny Root',
	'virtual_root_explain' => 'Ak je phpBB nainštalované v podadresáry (napr. phpBB3/), môžete takto nasimulovať jeho umiestnenie v roote pre prepísanie linkov.<br/><br/><b>Napríklad :</b><br/><em><b>phpBB3/forum-title-fxx/topic-title-txx.html</b> versus <b>forum-title-fxx/topic-title-txx.html</b> URL odkaz na tému.</em><br/><br/>Toto môže byť užitočné pre skrátenie URL odkazov, najmä ak používate "Virtuálny Adresár". Neprepísané odkazy v adresáry phpBB budú naďalej viditeľné a funkčné.<br/><br/><b style="color:red">Prosím, čítajte :</b><br/><em>Použitie pre toto nastavenia vyžaduje "domovskú stránku" na index fóra (napr. forum.html).<br/> Táto voľba zmení všetky webové stránky odkazov URL vo vašom fóre.<br/>Ak už máte zaindexované fóru, mali by ste túto zmenu alebo aktiváciu zvážiť, pretože to bude mať vplyv na spätnú väzbu vo vyhľadávači.<br/>Preto mente toto nastavenie minimálne.<br/>Po zmene je nutné vykonať aktualizáciu .htaccess.</em>',
	'cache_layer' => 'Cachovanie URL fóra',
	'cache_layer_explain' => 'Zapne vyrovnávaciu pamäť pre URL odkazy fóra, tým sa umožní oddelovať názvy odkazov v URL<br/><br/><b>Príklad :</b><br/><em><b>forum-title-fxx/</b> verzus <b>any-title-fxx/</b> pre fórum URL.</em><br/><br/><b style="color:red">Prosím čítajte</b><br/><em>Táto voľba vám umožní zmeniť URL odkaz vášho fóra, a teda pravdepodobne aj ďalšie URL linky k témam, ak používate "Virtuálny Adresár".<br/>Odkazy URL na témy budú vždy správne presmerované s voľbou "Nulový Duplikát".<br/>To bude platiť aj pre URL odkazy fóra, ako dlho ponecháte oddeľovače a Idntifikátory, pozri nižšie.</em>',
	'rem_ids' => 'Odstránenie ID fór',
	'rem_ids_explain' => 'Odstráni IDčka a oddeľovače v URL odkazoch fór. Použite len v prípade, že máte aktivované "cachovanie URL fóra".<br/><br/><b>Príklad:</b><br/><em><b>any-title-fxx/</b> versus <b>any-title/</b> URL odkazu.</em><br/><br/><b style="color:red">Prosím čítajte</b><br/><em>Táto voľba vám umožní zmeniť URL odkaz vášho fóra, a teda pravdepodobne aj ďalšie URL linky k témam, ak používate "Virtuálny Adresár".<br/>Odkazy URL na témy budú  vždy správne presmerované s voľbou "Nulový Duplikát".<br/>To nebude platiť pre všetky prípady URL odkazov fóra:</b><br/><b>any-title-fxx/</b> budú vždy správne presmerované s voľbou "Nulový Duplikát", ale nestane sa tak v prípade, že upravíte <b>any-title/</b> na <b>something-else/</b>.<br/> V takomto prípade, <b>any-title/</b> sa teraz bude správať ako neexistujúce fórum.<br/>Dobre sa teda rozhodnite, či je táto voľba pre vás potrebná, ale z hľadiska SEO optimalizácie ide o dobrý krok..</em>',
	// copytrights
	'copyrights' => 'Autorské právo',
	'copyrights_img' => 'Link zobrazenie',
	'copyrights_img_explain' => 'Tu si môžete vybrať, akým spôsobom bude zobrazený phpBB SEO copyright link. Buď ako obrázkový alebo ako textový odkaz.',
	'copyrights_txt' => 'Link text',
	'copyrights_txt_explain' => 'Sem môžete zadať text ktorý sa použije ako spojený titul autorského práva  phpBB a SEO ako ukotvenie textu v riadku. Ak ponecháte pole zadania prázdne ostane predvolené nastavenie.',
	'copyrights_title' => 'Titul Linku',
	'copyrights_title_explain' => 'Tu si môžete vybrať text, ktorý bude použitý v phpBB SEO autorských linku ako titulok. Ak ponecháte pole zadania prázdne ostane predvolené nastavenie.',
	// Zero duplicate
	// Options 
	'ACP_ZERO_DUPE_OFF' => 'Vypnúť',
	'ACP_ZERO_DUPE_MSG' => 'Príspevok',
	'ACP_ZERO_DUPE_GUEST' => 'Návštevník',
	'ACP_ZERO_DUPE_ALL' => 'Všetko',
	'zero_dupe' =>'Nulový duplikát',
	'zero_dupe_explain' => 'Nasledujúce nastavenia sa týkajú Nulového duplikátu, môžete ich meniť podľa vašich potrieb.<br/>Nemusí nevyhnutne viesť k aktualizácii .htaccess.',
	'zero_dupe_on' => 'Aktivovať Nulový duplikát',
	'zero_dupe_on_explain' => 'Povolí aktiváciu a deaktivácia presmerovania s pomocou Nulového duplikátu.',
	'zero_dupe_strict' => 'Presný spôsob',
	'zero_dupe_strict_explain' => 'Ak je toto zadanie aktivované, Nulový duplikát skontroluje či požadovaný URL odkaz presne súhlasí s navštívenov témov. <br/> Ak je voľba vypnutá, Nulový duplikát skontroluje či navštívený URL odkaz je prvou časťou požadovaného URL odkazu. <br/>Je v záujme, aby presmerovanie fungovalo s módmi, ktoré by mohli rušiť "Nulový duplikát" pridaním GET premenných.',
	'zero_dupe_post_redir' => 'Presmerovanie príspevkov',
	'zero_dupe_post_redir_explain' => 'Táto voľba určí, ako zaobchádzať s odkazmi URL na príspevky; môžu sa zadať tieto hodnoty:<ul style="margin-left:20px"><li><b>&nbsp;vypnuté</b>, v žiadnom prípade nepresmerovať URL odkazy príspevkov ,</li><li><b>&nbsp;príspevok</b>, presvedčiť sa či postxx.html je použitý ako URL odkaz príspevku,</li><li><b>&nbsp;návštevník</b>, presmerovať návštevníkov, ak sa to vyžaduje, na URL odkaz zodpovedajúcej témy ako na postxx.html a presvedčiť sa či postxx.html je použitý pre prihlásených užívateľov,<li><b>&nbsp;všetko</b>, presmerovať všetko, ak sa to vyžaduje, na URL odkaz zodpovedajúcej témy.</li></ul><br/><b style="color:red">Prosím, prečítajte si</b><br/><ul style="margin-left:20px">Ponechanie <b>postxx.html</b> URL odkazov je bezpečné SEO rozhodnutia, ale len do tej doby, kým ponecháte "disallow" na URL odkazoch príspevkov ("/forum/post") vo vašom robots.txt.<br/>Presmerovanie všetkého pravepodobne spôsobí presmerovanie aj všetkého súvisiaceho.<br/>Presmerovanie postxx.html vo všetkých prípadoch tiež spôsobí, že správa, ktorá by bola odoslaná do vlákna a potom presunutá do iného, zmení jej odkaz URL. Vďaka "nulovému duplikátu" je to bezpečné SEO rozhodnutie, ale predchádzajúci link na príspevok nebude v takom prípade nikdy presmerovaný k novému. Čiže bude nefunkčný.</ul>.',
	// no duplicate
	'no_dupe' => 'Bez duplikátov',
	'no_dupe_on' => 'Aktivovať Bez duplikátov',
	'no_dupe_on_explain' => 'Mód Bez duplikátov nahrádza URL odkazy príspevkov, s príslušnými URL odkazmi tém (s pagination (strankovanie)). <br/>Nepridáva žiadny SQL, len vykoná naviac "LEFT JOIN" dopyt. To môže v niektorých prípadoch znamenať väčšiu záťaž servera, ale väčšinou by to nemal byť problém.',
));
?>
