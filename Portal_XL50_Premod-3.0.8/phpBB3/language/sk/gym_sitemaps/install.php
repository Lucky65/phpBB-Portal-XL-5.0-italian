<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: install.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* install [Slovak]
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
	// Install
	'SEO_INSTALL_PANEL'	=> 'Inštalačný Panel Mapy stránok GYM a RSS',
	'CAT_INSTALL_GYM_SITEMAPS' => 'Inštalácia Mapy stránok GYM',
	'CAT_UNINSTALL_GYM_SITEMAPS' => 'Odinštalovanie Mapy stránok GYM',
	'CAT_UPDATE_GYM_SITEMAPS' => 'Aktualizovanie Mapy stránok GYM',
	'SEO_ERROR_INSTALL'	=> 'Došlo k chybe pri inštalácii. Ak chcete znova skúsiť inštaláciu, musite prvú inštaláciu odinštalovať.',
	'SEO_ERROR_INSTALLED'	=> 'Modul %s už je nainštalovaný.',
	'SEO_ERROR_ID'	=> 'Modul %1$ nemá žiadne ID.',
	'SEO_ERROR_UNINSTALLED'	=> 'Modul %s je odinštalovaný.',
	'SEO_ERROR_INFO'	=> 'Informácia :',
	'SEO_FINAL_INSTALL_GYM_SITEMAPS'	=> 'Prihlásenie do ACP',
	'SEO_FINAL_UPDATE_GYM_SITEMAPS'	=> 'Prihlásenie do ACP',
	'SEO_FINAL_UNINSTALL_GYM_SITEMAPS'	=> 'Späť na index fóra',
	'SEO_OVERVIEW_TITLE'	=> 'Prehľad mapovania stránok GYM a RSS',
	'SEO_OVERVIEW_BODY'	=> '<p>Vítajte v inštalácii mapovaní stránok v phpBB SEO GYM a RSS %1$s.</p><p>Prosím skontrolujte si <a href="%3$s" title="Prejdem na stránku uvoľnenej verzie" target="_phpBBSEO"><b>túto stránku</b></a> kde získate viac informácií</p><p><strong style="text-transform: uppercase;">Pozor:</strong> Musíte mať už vykonané všetky požadované zmeny kódov a nahrané všetky nové súbory predtým než budete pokračovať v inštalovaní.</p><p>Tento inštalačný systém vás prevedie celým procesom inštalácie GYM sitemaps a RSS administrátorskeho panela (ACP). Umožní vám vytvárať efektívne a Optimalizovatelné Vyhľadávače Stránok Google a kanálov RSS. Jeho modulárny dizajn vám umožní vytvárať mapy stránok Google a RSS kanály pre akékoľvek php / SQL aplikácie nainštalované na vašej stránke, pomocou špecializovaných plug-inov. Navštívte <a href="%3$s" title="Podopora na fóre" target="_phpBBSEO"><b>podoporu na fóre</b></a> kde najdete čokoľvek čo sa týka GYM Siteamps a RSS modulu.</p> ',
	'CAT_SEO_PREMOD'	=> 'Mapy stránok a RSS',
	'SEO_INSTALL_INTRO'		=> 'Vítajte v inštalácii mapovaní stránok v phpBB SEO GYM a RSS.',
	'SEO_INSTALL_INTRO_BODY'	=> '<p>Toto je úvod pre nainštalovanie módu %1$s %2$s. Táto inštalačná pomôcka aktivuje v phpBB administrátorský panel (ACP) Mapy stránok GYM a RSS.</p><p>Akonáhle bude mód nainštalovaný, prejdite do ACP a zadajte si vhodné nastavenia.</p>
	<p><strong>Pozor:</strong> Ak prvýkrát, inštalujete tento mód, tak veľmi doporučujeme, aby ste si našiel čas pre otestovanie rôznych funkcií modulu na lokálnom alebo súkromnom testovacom serveri pred spustením na živom fóre.</p><br/>
	<p>Požiadavky :</p>
	<ul>
		<li>Apache server (Linux OS) na mod_rewrite pre prepísanie cez URL funkcií modulu.</li>
		<li>IIS server (Windows OS) na isapi_rewrite pre prepísanie cez URL funkcií modulu, ale v tomto prípade budete musieť upraviť, prepísať pravidlá v httpd.ini</li>
	</ul>',
	'SEO_INSTALL'		=> 'Inštalovať',
	'UN_SEO_INSTALL_INTRO'		=> 'Vitajte pri odinštalovan GYM Sitemaps a RSS',
	'UN_SEO_INSTALL_INTRO_BODY'	=> '<p>Chystáte sa odinštalovať mód %1$s %2$s.</p>
	<p><strong>´Pozor:</strong> Mapovanie stránok a kanály už nebudú dostupné po odinštalovaní modulu.</p>',
	'UN_SEO_INSTALL'		=> 'Odinštalovať',
	'SEO_INSTALL_CONGRATS'		=> 'Gratulujem!',
	'SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Inštalácia %1$s %2$s módu prebehla úspešne. Prejdite v phpBB do ACP a môžete pokračovať v nastavení tohoto módu.<p>
	<p>Tu sú zobrazené Kategórie v phpBB SEO; a  mnoho iných vecí ktoré budete potrebovať :</p>
	<h2>Správne nastavte Mapu stránok Google a kanály RSS</h2>
	<p>Google mapa a RSS kanály podporuje pokročilé nastavenia XSL, phpBB CSS dokonca na tieto úpravy, nemusite upravit ani jediný riadok kódu.</p>
	<p>Google mapa a RSS kanál automaticky detekuje prepísanie módom phpBB SEO a ich nastavenia, použitím módu na prepisovanie iných URL je takto zjednodušené.</p>
	<h2>Vytvorenie zosobnenia .htaccess</h2>
	<p>S módom prepisaný phpBB SEO budete musieť nastaviť uvedené volby, ďalej potom môžete vytvárať vlastné. Htaccess a uložiť ich rýchlo priamo na server.</p><br/><h3>Správa o Nainštalovaní :</h3>',
	'UN_SEO_INSTALL_CONGRATS'	=> 'GYM Sitemaps a RSS ACP modul bol odstránený.',
	'UN_SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Teraz ste úspešne odinstaloval %1$s %2$s mód.<p>
	<p> Nie sú k dispozícii už žiadne ďalšie mapy stránok Google a RSS kanály.</p>',
	'SEO_VALIDATE_INFO'	=> 'Validačné Info :',
	'SEO_LICENCE_TITLE'	=> 'GNU LESSER GENERAL PUBLIC LICENSE',
	'SEO_LICENCE_BODY'	=> 'SEO phpBB GYM Sitemaps a RSS je vydávaný ako licencia GNU LESSER GENERAL PUBLIC LICENSE.',
	'SEO_SUPPORT_TITLE'	=> 'Podpora',
	'SEO_SUPPORT_BODY'	=> 'Plnú podporu najdete tu <a href="%1$s" title="Navštívte %2$s fórum" target="_phpBBSEO"><b>%2$s fórum</b></a>. Poskytneme odpovede na väčšinu otázok, týkajúcich sa konfiguračných problémov a pomoci pre odhaľovanie bežných problémov.</p><p>Určite navštívte naše <a href="http://www.phpbb-seo.com/boards/" title="SEO Fórum" target="_phpBBSEO"><b>Search Engine Optimization (Optimalizacia pre vyhledávače) fóra</b></a>.</p><p>Mali by ste sa tu <a href="http://www.phpbb-seo.com/boards/profile.php?mode=register" title="Registrovať na phpBB SEO" target="_phpBBSEO"><b>zaregistrovať</b></a>, a prihlásiť sa na fóre, <a href="%3$s" title="Upozorniť na aktualizácie" target="_phpBBSEO"><b>k vláknu o vydaniach</b></a> a tak byť informovaný emailom na každú aktualizáciu.',
	// Security
	'SEO_LOGIN'		=> 'Musite byť zaregistrovaný a prihlásený aby ste si mohli prezerať túto stránku.',
	'SEO_LOGIN_ADMIN'	=> 'Fórum vyžaduje, aby ste sa prihlásili ako administrátor pre zobrazenie tejto stránky. <br/>Táto relícia bola vymazaná z bezpečnostných dôvodov.',
	'SEO_LOGIN_FOUNDER'	=> 'Fórum vyžaduje, aby ste sa prihlásil ako zakladateľ pre zobrazenie tejto stránky.',
	'SEO_LOGIN_SESSION'	=> 'Kontrola relácie neuspela. <br/>Nastavenia nebude nahradené. <br/>Táto relácia bola vymazaná z bezpečnostných dôvodov.',
	// Cache status
	'SEO_CACHE_FILE_TITLE'	=> 'Stav súboru vo vyrovnávacej pamäte',
	'SEO_CACHE_STATUS'	=> 'Adresár vyrovnávacej pamäte je nastavený : <b>%s</b>',
	'SEO_CACHE_FOUND'	=> 'Adresár vyrovnávacej pamäte bol úspešne nájdený.',
	'SEO_CACHE_NOT_FOUND'	=> 'Adresár vyrovnávacej pamäte nebol nájdený.',
	'SEO_CACHE_WRITABLE'	=> 'Adresár vyrovnávacej pamäte je zapisovateľný.',
	'SEO_CACHE_UNWRITABLE'	=> 'V adresári vyrovnávacej pamäte nie je povolený zápis. Musíte nataviť atribút adresára na 0777.',
	'SEO_CACHE_FORUM_NAME'	=> 'Názov Fóra',
	'SEO_CACHE_URL_OK'	=> 'Odkaz URL bol uložený do vyrovnávacej pamäte',
	'SEO_CACHE_URL_NOT_OK'	=> 'Tento URL odkaz nebol uložený do vyrovnávacej pamäte',
	'SEO_CACHE_URL'		=> 'Finálna URL',
	'SEO_CACHE_MSG_OK'	=> 'Vyrovnávacia pamäť bola úspešne aktualizovaná.',
	'SEO_CACHE_MSG_FAIL'	=> 'Nastala chyba pri aktualizácii súboru vyrovnávacej pamäte.',
	'SEO_CACHE_UPDATE_FAIL'	=> 'Odkaz URL, ktorý požadujete, sa nedá použiť. Vyrovnávacia pamäť nebude aktualizovaná.',
	// Update
	'UPDATE_SEO_INSTALL_INTRO'		=> 'Vítajte pri aktualizovaní phpBB SEO GYM sitemaps a RSS.',
	'UPDATE_SEO_INSTALL_INTRO_BODY'	=> '<p>Chystáte sa aktualizovať %1$s modul na %2$s. Tento skript aktualizuje databázu phpBB.<br/>Vaše súčasné nastavenie nebude ovplyvnené.</p>
	<p><strong>Pozor:</strong> Tento skript neaktualizuje fyzické súbory GYM Sitemaps a RSS.<br/><br/>Aktualizácia sa vykoná na všetkých verziach 2.0.x (phpBB3) <b>musia</b> sa aktualizovať všetky súbory v <b>roote/</b> vášho phpBB priamo cez ftp, ak sú urobené manuálne zmeny v kódoch implementované v súboroch vzorov (adresára phpBB/styles/, .html, .js a .xsl) sa pridajú z modulom.<br/><br/>Môžete kedykoľvek <b>reštartovať</b> skript aktualizácie, napríklad, ak ste si nahrať požadované súbory, alebo jednoducho zobraziť úpravenia kódu zmenené pre súbory phpBB3.</p>',
	'UPDATE_SEO_INSTALL'		=> 'Aktualizovať',
	'SEO_ERROR_NOTINSTALLED'	=> 'Mód GYM Sitemaps a RSS nie je nainštalovaný!',
	'SEO_UPDATE_CONGRATS_EXPLAIN'	=> '<p>Aktualizácia %1$s na %2$s prebehla úspešne.<p>
	<p><strong>Pozor:</strong> Tento skript neaktualizuje fyzické súbory GYM Sitemaps a RSS.</p><br/><b>Prosím,</b> vykonajte zmeny uvedených kódov.<br/><h3>Správa o aktualizácii :</h3>',
));
?>