<?php
/**
*
* install [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: arcade_install.php 681 2008-12-16 16:36:54Z JRSweets $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'CAT_INSTALL'							=> 'Inštalovať',
	'CAT_OVERVIEW'							=> 'Prehľad',
	'CAT_UNINSTALL'							=> 'Odinštalovať',
	'CAT_UPDATE'							=> 'Aktualizovať',
	'CAT_VERIFY'							=> 'Overenie',

	'DONE'									=> 'Hotovo',
	'DUPLICATE_AUTH_FOUND'					=> '%s bol nájdený %sx',

	'FILES_REQUIRED'						=> 'Súbory a adresáre',
	'FILES_REQUIRED_EXPLAIN'				=> '<strong>Povinné</strong> - Aby správne fungovala Arkáda v phpBB musia byť spristupnené a zapisovatelné určité súbory a adresáre. Ak sa zobrazí "Nemôžem nájsť", musíte vytvoriť zodpovedajúci súbor alebo adresár. Ak sa zobrazí "nie je Zapisovateľný" musíte zmeniť oprávnenia k súboru alebo adresáru, aby sa Arkáda dala zapisovať do phpBB.',
	'FOUND'									=> 'Najdené',

	'GPL'									=> 'General Public License',

	'INSTALL_CONGRATS'						=> 'Gratulujeme!',
	'INSTALL_CONGRATS_EXPLAIN'				=> '
		<p>Teraz ste úspešne nainštalovali Arkádu %1$s do phpBB.</p>
		<p>Kliknutím na tlačitko nižšie sa dostanete do správy Ovládacieho panela (ACP). Niekedy to trvá nejaký čas, aby sa preskúmali možnosti, ktoré máte k dispozícii</p><p><strong>Prosím teraz vymažte, premenujte alebo presunte inštalačný adresár pred použitím vášho fóra. Ak tento adresár je stále prítomný, bude pristupný len Administrátorský Ovladací Panel (ACP).</strong></p>',
	'INSTALL_INTRO'							=> 'Vitajte v phpBB a inštalácii Arkády',
	'INSTALL_INTRO_BODY'					=> 'S touto možnosťou, je možné inštalovať Arkádu do databázy phpBB.',
	'INSTALL_LOGIN'							=> 'Pokračovať v ACP',
	'INSTALL_PANEL'							=> 'Inštalačný panel Arkády phpBB',
	'INSTALL_START'							=> 'Štart inštalácie',
	'INSTALL_TEST'							=> 'Otestovať znovu',
	'INST_ERR'								=> 'Nastala chyba pri inštalácii',
	'INST_ERR_AUTH'							=> 'Nemáte oprávnenie na použitie tohto skriptu.<br /><br />Upozorňujeme pre použitie tohoto skriptu musia byť splnené tieto požiadavky. Najprv musíte byť prihlásený na webe a musíte byť užívateľ typu zriaďovateľa. Ak ste prihlásený a ste zakladateľ potom máte chybné nastavenia cookies v acp. Prosím skontrolujte si nastavenie v doméne cookie. Ako stránky URL <strong>http://www.example.com</strong> potom cookie domény by mali byť <strong>.example.com</strong>.',
	'INST_ERR_FATAL'						=> 'Kritická chyba inštalácie',
	'INST_ERR_FATAL_DB'						=> 'Nastala fatálna a neodstrániteľné chyba v databáze. Toto sa stáva ak užívateľ nemá príslušné oprávnenie na <code>VYTVORENIA TABULIEK</code> alebo <code>VLOŽENIE</code> dát, atď. Ďalšie informácie môžu byť uvedené nižšie. Obráťte sa na svojho poskytovateľa hostingu v prvom stupni, alebo fórum podpory phpBB pre ďalšiu pomoc.',
	'INST_SQL_RESULTS'						=> 'Výkaz SQL je Hotový',

	'MODULE_ACP'							=> 'Modul ACP',
	'MODULE_MCP'							=> 'Modul MCP',
	'MODULE_UCP'							=> 'Modul UCP',

	'NEXT_STEP'								=> 'Pokračovať na ďalší krok',
	'NOT_FOUND'								=> 'Nemôžem nájsť',

	'OVERVIEW_BODY'							=> 'Vitajte v Arkáde pre phpBB!<br /><br />Arkáda obsahuje široké rozhranie a priateľské prostredie s plnov podporov.<br /><br />Tento inštalačný systém vás prevedie inštaláciou Arkády do phpBB, aktualizuje Arkádu na najnovšiu verziu v phpBB, odinštalluje Arkádu z phpBB alebo preverí či je Arkáda správne nainštalovaná v phpBB. Ak si chcete prečítať licenciu Arkády alebo sa dozvedieť viac o podpore alebo pridať váš názor o Arkáde, prosím, vyberte si príslušné voľby zo stránky ponuky. Ak chcete pokračovať, vyberte zodpovedajúcu záložku vyššie.',

	'PHPBB_VERSION_REQD'					=> 'phpBB verzia >= %s',
	'PHP_CURL_SUPPORT'						=> 'Nastavenie inštalácie PHP <var>curl</var>',
	'PHP_CURL_SUPPORT_EXPLAIN'				=> '<strong>Voliteľné</strong> - Toto nastavenie je voliteľné, ale odporúča sa, aby knižnice boli nainštalované na serveri, ak chcete sťahovať hry cez modul Arkády v ACP phpBB.',
	'PHP_SETTINGS'							=> 'verzia phpBB a nastavenie PHP',
	'PHP_SETTINGS_EXPLAIN'					=> '<strong>Požiadavky</strong> - Musí byť nainštalovaná aspoň verzia %s ak by ste chcel preinštalovať Arkádu v phpBB.',
	'PHP_URL_FOPEN_SUPPORT'					=> 'Povolenie pre nastavenie PHP <var>allow_url_fopen</var>',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'			=> '<strong>Voliteľné</strong> - Toto nastavenie je voliteľné, ale odporúča sa, aby bolo povolené, ak chcete sťahovať hry cez modul Arkády v ACP phpBB.',

	'REQUIREMENTS_EXPLAIN'					=> 'Pred plnou inštaláciou Arkády do phpBB sa vykonali testy konfigurácie, aby sa zabezpečila, inštalácia Arkády do phpBB. Uistite sa prosím a prečítajte si dôkladne výsledky pred tým ako budete pokračovať. Ak budete chcieť pokračovať ďaľej mali by ste zabezpečiť, aby tieto testy boli v správnom kontexte bez vykazovania chýb.',
	'REQUIREMENTS_TITLE'					=> 'Inštalačná kompatibilita',

	'STAGE_INSTALL'							=> 'Inštalovať',
	'STAGE_INSTALL_ARCADE'					=> 'Inštalácia Arkády do phpBB',
	'STAGE_INSTALL_ARCADE_EXPLAIN'			=> 'Tabuľky databázy, moduly, oprávnenia a údaje použité Arkádov v phpBB boli úspešne vytvorené.',
	'STAGE_INTRO'							=> 'Úvod',
	'STAGE_REQUIREMENTS'					=> 'Požiadavky',
	'STAGE_UNINSTALL'						=> 'Odinštalovanie',
	'STAGE_UNINSTALL_ARCADE'				=> 'Odinštalovanie Arkády z phpBB',
	'STAGE_UNINSTALL_ARCADE_EXPLAIN'		=> 'Databázové tabuľky, moduly, oprávnenia a údaje použité Arkádov v phpBB boli odstránené z databázy. Pre dokončenie odinštalácie musíte ,amuálne spätne urobiť úpravy vo všetkých súboroch a odstrániť všetky súbory Arkády z vášho servera.',
	'STAGE_UPDATE'							=> 'Aktualizovanie',
	'STAGE_UPDATE_ARCADE'					=> 'Aktualizácia Arkády v phpBB',
	'STAGE_UPDATE_ARCADE_EXPLAIN'			=> 'Arkáda v PhpBB bola aktualizovaná na najnovšiu verziu.',
	'STAGE_VERIFY'							=> 'Overenie',
	'SUB_INTRO'								=> 'Úvod',
	'SUB_LICENSE'							=> 'Licencia',
	'SUB_SUPPORT'							=> 'Podpora',
	'SUPPORT_BODY'							=> 'Plná podpora sa poskytuje zadarmo pre aktuálnu stabilnú alebo vývojovú verziu Arkády pre phpBB. To zahŕňa:</p><ul><li>installation</li><li>configuration</li><li>technical questions</li><li>problems relating to potential bugs in the software</li><li>updating from older versions to the latest version</li></ul><p>Odporúčam všetkým užívateľom ktorý používajú stále staršie verzie Arkády v phpBB, aby si aktualizovali svoju inštaláciu na najnovšu verziu Arkády.</p><h2>Tu získate pomoc</h2><p><a href="http://www.jeffrusso.net/forum/viewforum.php?f=20">Hlavná Tvorba webu</a><br /><a href="http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=685225">phpBB.com Témy Zlepšenia</a><br />Užívateľská príručka (tá bude v Arkáde ACP phpBB)<br /><br />',

	'UNAVAILABLE'							=> 'Nedostupné',
	'UNINSTALL_CONGRATS_EXPLAIN'			=> '
		<p>Arkáda %1$s bola úspešne odinštalovaná z phpBB.</p>
		<p>Kliknutím na tlačitko nižšie sa dostanete do správy vášho Administrátorskeho Ovládacieho Panelu (ACP).</p><p><strong>Prosím, teraz vymažte, premenujte alebo presunte inštalačný adresár pred prejdením do vašeho fóra. Ak tento adresár bude stále prítomný, dostanete sa len do Administrátorského Ovládacieho Panelu (ACP).</strong></p>',
	'UNINSTALL_INTRO'						=> 'Vitajte v phpBB pri Odinštalovaní Arkády',
	'UNINSTALL_INTRO_BODY'					=> 'Cez toto nastavenie je možné odinštalovať Arkádu z databázy phpBB',
	'UNINSTALL_START'						=> 'Štart odinštalovania',
	'UNWRITABLE'							=> 'nie je Zapisovatelný',
	'UPDATE_CONGRATS_EXPLAIN'				=> '
		<p>Aktualizácia Arkády %1$s v phpbb prebehla úspešne.</p>
		<p>Kliknutím na tlačitko nižšie sa dostanete do správy vášho Administrátorskeho Ovládacieho Panelu (ACP).</p><p><strong>Prosím, teraz vymažte, premenujte alebo presunte inštalačný adresár pred prejdením do vašeho fóra. Ak tento adresár bude stále prítomný, dostanete sa len do Administrátorského Ovládacieho Panelu (ACP).</strong></p>',
	'UPDATE_INTRO'							=> 'Vítajte pri Inštalácii Aktualizácie Arkády do phpBB',
	'UPDATE_INTRO_BODY'						=> 'Cez toto nastavenie je možné aktualizovať Arkádu v phpBB Arcade na najnovšiu verziu.',
	'UPDATE_START'							=> 'Start update',

	'VERIFY_ALL_FILES'						=> 'Všetky súbory som našiel',
	'VERIFY_ALL_FILES_EDITED'				=> 'Všetky súbory sú editovateľné',
	'VERIFY_ALL_MODULES'					=> 'Všetky moduly boli nájdená',
	'VERIFY_ALL_PERMISSIONS'				=> 'Všetky oprávnenia boli nájdené',
	'VERIFY_ALL_TABLES'						=> 'Všetky tabuľky boli nájdené',
	'VERIFY_ARCADE_INSTALLATION'			=> 'Overenie inštalácie arkády',
	'VERIFY_ARCADE_INSTALLATION_EXPLAIN'	=> 'Toto je výsledok kontroly, či v arkáde je všetko správne nainštalované.',
	'VERIFY_CONGRATS_EXPLAIN'				=> '
		<p>Overenie inštalácia Arkády %1$s v phpBB prebehlo úspešne.</p>
		<p>Kliknutím na tlačitko nižšie sa dostanete do správy vášho Administrátorskeho Ovládacieho Panelu (ACP).</p><p><strong>Prosím, teraz vymažte, premenujte alebo presunte inštalačný adresár pred prejdením do vašeho fóra. Ak tento adresár bude stále prítomný, dostanete sa len do Administrátorského Ovládacieho Panelu (ACP).</strong></p>',
	'VERIFY_DUPLICATE_ARCADE_PERMISSIONS'	=> 'Kontrola, existencie duplicitných oprávnení v Arkáde',
	'VERIFY_DUPLICATE_PERMISSIONS'			=> 'Kontrola, existencie duplicitných oprávnení v phpBB',
	'VERIFY_ERRORS'							=> 'Výsledok!',
	'VERIFY_ERRORS_EXPLAIN'					=> '
		<p>Máte nainštalovanú v phpBB Arkádu %1$s.</p>
		<p>Kliknutím na tlačitko nižšie po odstránení závad, sa vykoná nové overenie inštalácie.</p><p><strong>Prosím skontrolujte si chyby ktoré sú dole uvedené.</strong></p>',
	'VERIFY_FILES_EDITED'					=> 'Kontrola aditovania súborov',
	'VERIFY_FILES_EXIST'					=> 'Kontrola existencie súborov',
	'VERIFY_FOUND_DUPLICATE_PERMISSIONS'	=> 'Duplikáty autorských hodnôt môžu spôsobiť problém s povoleniami, nasledujúci duplikát autorských hodnôt bol nájdení v %s tabuľky:<br />%s',
	'VERIFY_INTRO'							=> 'Vitajte pri Overení inštalácie Arkády v phpBB',
	'VERIFY_INTRO_BODY'						=> 'Cez toto zadanie je možné overiť, či je Arkáda správne nainštalovaná na vašom serveri v phpBB.',
	'VERIFY_MISSING_FILES'					=> 'Nasledujúce súbory chýbajú:<br />%s',
	'VERIFY_MISSING_FILES_EDITED'			=> 'Zdá sa, že tieto súbory nemožno upravovať:<br />%s',
	'VERIFY_MISSING_MODULES'				=> 'Tieto moduly chýbajú:<br />%s',
	'VERIFY_MISSING_PERMISSIONS'			=> 'Nasledujúce povolenia chýbajú:<br />%s',
	'VERIFY_MISSING_TABLES'					=> 'V nasledujúcich tabuľkách chýbajú:<br />%s',
	'VERIFY_MODULES'						=> 'Kontrola, existencie všetkých modulov',
	'VERIFY_NO_DUPLICATE_PERMISSIONS'		=> 'Nenašiel som žiadne duplicitné oprávnenia',
	'VERIFY_OTHER_DB_DATA'					=> 'Kontrola iných dát db',
	'VERIFY_PERMISSIONS'					=> 'Kontrola, existencie všetkých oprávnení',
	'VERIFY_TABLES_EXIST'					=> 'Kontrola, existencie tabuliek',
	'VERIFY_TABLE_ALTERED'					=> '%s tabuľky sú správne zmenené',
	'VERIFY_TABLE_NOT_ALTERED'				=> 'Nasledujúce stĺpce chýbajú %s tabuľka:<br />%s',
	'VERSION'								=> 'Verzia',

	'WELCOME_INSTALL'						=> 'Vítajte pri Inštalácii Arkády do phpBB',
	'WRITABLE'								=> 'a je Zapisovateľné',
));

?>
