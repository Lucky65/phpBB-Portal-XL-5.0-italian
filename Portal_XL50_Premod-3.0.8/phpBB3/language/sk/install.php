<?php
/**
*
* install [Slovak]
*
* @package language
* @version $Id: install.php,v 1.131 2010/01/05 23:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
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
	'ADMIN_CONFIG'				=> 'Administrátorská konfigurácia',
	'ADMIN_PASSWORD'			=> 'Heslo administrátora',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Heslo administrátora pre potvrdenie',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Heslo musí mať minimálne 6 a maximálne 30 znakov.',
	'ADMIN_TEST'				=> 'Test administrátorských nastavení',
	'ADMIN_USERNAME'			=> 'Užívateľské meno administrátora',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Meno musí mať minimálne 3 a maximálne 20 znakov.',
	'APP_MAGICK'				=> 'Podpora Imagemagick [ Prílohy ]',
	'AUTHOR_NOTES'				=> 'Poznámka autora<br />» %s',
	'AVAILABLE'					=> 'Dostupné',
	'AVAILABLE_CONVERTORS'		=> 'Dostupné konvertory',

	'BEGIN_CONVERT'				=> 'Začať konverziu',
	'BLANK_PREFIX_FOUND'		=> 'Testovanie tabuliek ukázalo platnú inštaláciu bez použitia predpony tabuliek.',
	'BOARD_NOT_INSTALLED'			=> 'Nebola nájdená žiadna inštalácia',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Pre uskutočnenie prechodu musíte mať nainštalovanú východziu verziu phpBB3. Pre úspešný prechod je dôležité, aby bola stará aj nová inštalácia v rovnakej databáze. Teraz prosím <a href="%s">pokračujte v prvej inštalácii phpBB3</a>.',

	'CATEGORY'					=> 'Kategória',
	'CACHE_STORE'				=> 'Typ cache',
	'CACHE_STORE_EXPLAIN'		=> 'Fyzický priestor pre cache-ovanie dát, preferovaný je systém súborov.',
	'CAT_CONVERT'				=> 'Konvertovať',
	'CAT_INSTALL'				=> 'Inštalácia',
	'CAT_OVERVIEW'				=> 'Prehľad',
	'CAT_UPDATE'				=> 'Update',
	'CHANGE'					=> 'Zmeniť',
	'CHECK_TABLE_PREFIX'		=> 'Prosím skontrolujte Vašu predponu tabuliek a akciu opakujte.',
	'CLEAN_VERIFY'				=> 'Čistenie a overovanie konečnej štruktúry',
	'CLEANING_USERNAMES'      	=> 'Prečisťujem užívateľské mená',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> je čisté užívateľské meno pre:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Na vašom starom fóre boli nájdené kolidujúce užívateľské mená. Pre dokončenie inštalácie zmažte alebo premenujte jedného z nich tak, aby neboli dve zhodné mená v databáze.',
	'COLLIDING_USER'			=> '» užívateľské ID: <strong>%d</strong> užívateľské meno: <strong>%s</strong> (%d príspevkov)',
	'CONFIG_CONVERT'			=> 'Prenesenie konfigurácie',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Nebolo možné vytvoriť súbor s konfiguráciou. Alternatívne spôsoby pre vytvorenie tohto súboru sú uvedené nižšie',
	'CONFIG_FILE_WRITTEN'		=> 'Konfigurácia bola úspešne zapísaná, môžete pokračovať v inštalácii.',
	'CONFIG_PHPBB_EMPTY'		=> 'Konfiguračná premenná phpBB3 “%s” je prázdna.',
	'CONFIG_RETRY'				=> 'Opakovať',
	'CONTACT_EMAIL_CONFIRM'		=> 'Potvrďte kontaktnú emailovú adresu',
	'CONTINUE_CONVERT'			=> 'Pokračovať v prenose',
	'CONTINUE_CONVERT_BODY'		=> 'Bol detekovaný predchádzajúci pokus o prechod na inú verziu. Teraz si môžete vybrať medzi novým pokusom alebo pokračovaním v predchádzajúcom.',
	'CONTINUE_LAST'				=> 'Pokračovať posledným príkazom',
	'CONTINUE_OLD_CONVERSION'	=> 'Pokračovať v predchádzajúcom pokuse',
	'CONVERT'					=> 'Preniesť',
	'CONVERT_COMPLETE'			=> 'Prenášanie je hotové',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Práve ste úspešne uskutočnili prechod Vášho fóra na verziu phpBB3. Teraz sa môžete prihlásiť a <a href="../">vstúpiť do svojho fóra</a>. Skôr než zmažete zložku /install uistite sa, že všetky dáta boli prenesené v poriadku. Nezabudnite, že podpora pre phpBB3 je dostupná na internete formou <a href="http://www.phpbb.com/support/documentation/3.0/">Užívateľskej príručky</a> alebo prostredníctvom <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">fóra podpory.</a>, prípadne cez sk <a href="http://www.phpbb3.sk">podpory.</a>',
	'CONVERT_INTRO'				=> 'Vitajte v phpBB Univerzálny Konvertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Odtiaľto môžete importovať dáta z iných (inštalovaných) systémov pre fóra. Zoznam dole uvádza všetky momentálne dostupné moduly pre prechod. Pokiaľ konvertor z verzie, ktorú hľadáte, nie je v zozname, skúste navštíviť naše stránky, kde môžu byť ďalšie moduly dostupné k stiahnutiu.',
	'CONVERT_NEW_CONVERSION'	=> 'Nová konverzia',
	'CONVERT_NOT_EXIST'			=> 'Zvolený konvertor neexistuje',
	'CONVERT_OPTIONS'			=> 'Možnosti',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informácie, ktoré ste vložili boli overené. Pre spustenie prechodu na novú verziu stlačte tlačítko, ktoré sa nachádza nižšie',
	'CONV_ERR_FATAL'					=> 'Kritické zlyhanie konvertovania',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload je povolený na starom fóre. Vypnete prosím túto možnosť a skontrolujte či existuje platná zložka pre upload. Potom skopírujte všetky prílohy do tejto, z webu prístupnej zložky. Keď to urobíte reštartujte konvertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nie sú dostupné žiadne konfiguračné informácie pre prechod.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nie je možné získať informácie o prístupe na fórum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nedá sa získať kategória.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nedá sa získať nastavenie fóra.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nedá sa získať prístu k (nedá sa čítať) “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nedajú sa získať oprávnenia skupín.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Bola zistená nestálosť v tabuľke skupín add_bots() - musíte pridať všetky špeciálne skupiny, pokiaľ to budete robiť ručne.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nedá sa vložiť bot do tabuľky užívateľov.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nedá sa vložiť bot do tabuľky botov.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nedá sa vložiť užívateľ do user_group tabuľky.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Chyba v parseri správ',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Poznámka pre vývojárov: musíte špecifikovať $convertor[\'avatar_path\'] pre použitie %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Relatívna cesta k zdrojovému fóru nebola špecifikovaná.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Poznámka pre vývojárov: musíte špecifikovať $convertor[\'avatar_gallery_path\'] pre použitie %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Skupina “%1$s” nebola nájdená v %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Poznámka pre vývojárov: musíte špecifikovať $convertor[\'ranks_path\'] pre použitie %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Poznámka pre vývojárov: musíte špecifikovať $convertor[\'smilies_path\'] pre použitie %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Poznámka pre vývojárov: musíte špecifikovať $convertor[\'upload_dir\'] pre použitie %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nedajú sa vložiť/aktualizovať nastavenia oprávnení.',
	'CONV_ERROR_PM_COUNT'				=> 'Nedá sa vybrať zložka pre súčet súkromných správ.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nedá sa vložiť nové fórum nahradzujúce starú kategóriu.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nedá sa vložiť nové fórum nahradzujúce staré fórum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nedajú sa získať informácie o oprávneniach užívateľov.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Zlá skupina “%1$s” definovaná v %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Táto stránka zhromažďuje všetky dáta nutné pre prístup k zdrojovému fóru. Vyplňte údaje databázy starého fóra, konvertor nebude v pôvodnej databáze nič meniť. Zdrojové fórum by malo byť vypnuté pre zaistenie konzistentného prechodu.',
	'CONV_SAVED_MESSAGES'				=> 'Uložené správy',

	'COULD_NOT_COPY'			=> 'Nedá sa skopírovať súbor <strong>%1$s</strong> do <strong>%2$s</strong><br /><br />Skontrolujte či cieľová zložka existuje a či je zapisovateľná',
	'COULD_NOT_FIND_PATH'		=> 'Nedá sa nájsť cesta k bývalému fóru. Skontrolujte vaše nastavenia a skúste znovu.<br />» Zadaná cesta bola %s',

	'DBMS'						=> 'Typ databázy',
	'DB_CONFIG'					=> 'Konfigurácia databázy',
	'DB_CONNECTION'				=> 'Prepojenie  na databázu',
	'DB_ERR_INSERT'				=> 'Chyba pri spracovávaní <code>INSERT</code> príkazu',
	'DB_ERR_LAST'				=> 'Chyba pri spracovávaní <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Chyba pri vykonávaní <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Chyba pri vykonávaní <var>query_first</var>, %s (“%s”)',
	'DB_ERR_SELECT'				=> 'Chyba pri priebehu <code>SELECT</code> príkazu',
	'DB_HOST'					=> 'Server databázy',
	'DB_HOST_EXPLAIN'			=> 'DSN je skratka pre názov zdroja dát a je relevantná len pre inštalácie ODBC. Na PostgreSQL, použite localhost pripojenie k lokálnemu serveru cez socket UNIX a 127.0.0.1 pre pripojenie cez TCP.',
	'DB_NAME'					=> 'Meno databázy',
	'DB_PASSWORD'				=> 'Heslo databázy',
	'DB_PORT'					=> 'Port servera databázy',
	'DB_PORT_EXPLAIN'			=> 'Nechajte toto políčko prázdne, pokiaľ je port iný, ako je štandartný.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Je nám ľúto, ale aktualizačný skript nevie aktualizovať verzie phpBB staršie ako “%1$s”. V tejto chvíli máte nainštalovanú verziu “%2$s”. Aktualizujte postupne na staršiu verziu pred použitím tohto skriptu. Ak potrebujete pomoc, obráťte sa na pomoc v diskusnom fóre na phpBB3.sk, phpBB.cz alebo phpBB.com.',
	'DB_USERNAME'				=> 'Užívateľské meno databázy',
	'DB_TEST'					=> 'Otestovať pripojenie',
	'DEFAULT_LANG'				=> 'Východzí jazyk fóra',
	'DEFAULT_PREFIX_IS'			=> 'Východzia predpona databázových tabuliek pre %1$s je <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Nebola zadaná žiadna hodnota pre premennú test_file v konvertore. Pokiaľ ste užívateľ tohto konvertoru, mali by ste toto nahlásiť autorovi tohto modulu. Pokiaľ ste autor tohto modulu musíte špecifikovať súbor, ktorý existuje v zdrojovom fóre, pre overenie cesty k nemu.',
	'DIRECTORIES_AND_FILES'		=> 'Nastavenia adresárov a súborov',
	'DISABLE_KEYS'				=> 'Vypnutie kláves',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Podpora vzdialené pripojenie na FTP [ Inštalácia ]',
	'DLL_GD'					=> 'Podpora GD grafiky [ Vizuálne overovanie ]',
	'DLL_MBSTRING'				=> 'Podpora Multi-byte znakov',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ cez ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL s MySQLi rozšírením',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Podpora XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Podpora kompresie typu zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Stiahnuť konfiguračný súbor',
	'DL_CONFIG_EXPLAIN'			=> 'Môžete stiahnuť celý konfiguračný súbor (config.php) do vášho počítača. Budete potom musieť súbor ručne nahrať na server a prepísať už existujúci prázdny konfiguračný súbor v základnej zložke phpBB3. Nezabudnite, že je potrebné nahrať súbor ASCII prenosom (pozrite dokumentáciu vášho FTP klienta, pokiaľ si nie ste istý čo robíte). Ako náhle nahráte súbor config.php, kliknite na "Hotovo" pre postup na ďalší krok.',
	'DL_DOWNLOAD'				=> 'Stiahnuť',
	'DONE'						=> 'Hotovo',

	'ENABLE_KEYS'				=> 'Znovu povolujem klávesy. Toto môže chvíľku trvať',

	'FILES_OPTIONAL'			=> 'Voliteľné súbory a adresáre',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Povinné</strong> - Tieto súbory, adresáre, alebo oprávnenia nie sú potrebné. Inštalačné postupy sa pokúsia použiť rôzne iné metódy pre dosiahnutie rovnakého výsledku aj bez ich existencie alebo možnosti zapisovať do týchto súborov. Napriek tomu prítomnosť týchto adresárov, súborov a oprávnení urýchli inštalačný proces.',
	'FILES_REQUIRED'			=> 'Súbory a adresáre',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Povinné</strong> - phpBB potrebuje mať povolenie pre zapisovanie do týchto súborov, alebo zložiek. Pokiaľ je vypísané "Nenájdené", musíte daný súbor, alebo zložku vytvoriť. Pokiaľ je vypísané "Nemôžem zapisovať", musíte zmeniť atribúty pre zápis do daného súboru, alebo zložky, aby do nich phpBB mohlo zapisovať.',
	'FILLING_TABLE'				=> 'Naplňujem tabuľku <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Naplňovanie tabuliek',
	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB ďalej nepodporuje databázy Firebird/Interbase staršie verzie ako 2.1. Aktualizujte vašu databázu Firebird na verziu minimálne 2.1.0 pred pokračováním v aktualizacii fóra.',
	'FINAL_STEP'				=> 'Spracovať posledný krok',
	'FORUM_ADDRESS'				=> 'Adresa fóra',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Toto je http adresa vášho bývalého fóra',
	'FORUM_PATH'				=> 'Cesta k fóru',
	'FORUM_PATH_EXPLAIN'		=> 'Toto je <strong>relatívna</strong> cesta na disku k vášmu bývalému fóru <strong>so základnými zložkami phpBB inštalácie</strong>',
	'FOUND'						=> 'Nájdené',
	'FTP_CONFIG'				=> 'Preniesť konfiguráciu pomocou FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB zistilo prítomnosť FTP modulu na tomto serveri. Môžete sa pokúsiť preniesť súbor config.php touto metódou, ak chcete. Budete musieť zadať nižšie požadovaná informácie. Nezabudnite, že užívateľské meno a heslo sú tie k vášmu serveru! (spýtajte sa vášho poskytovateľa hostingu ak si nie ste istý aké to sú)',
	'FTP_PATH'					=> 'FTP cesta',
	'FTP_PATH_EXPLAIN'			=> 'Toto je cesta zo základnej zložky k adresáru phpBB, napríklad www_root/phpBB3/',
	'FTP_UPLOAD'				=> 'Nahrať',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Základné nastavenia',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Teraz, keď inštalácia potvrdila, že je možné nainštalovať phpBB na váš server, musíte zadať niekoľko dôležitých údajov. Pokiaľ neviete ako sa pripojiť k databáze, kontaktujte vášho poskytovateľa hostingových služieb (v prvej rade) alebo kontaktujte fórum podpory phpBB. Dôkladne skontrolujte všetky dáta skôr ako ich odošlete.',
	'INSTALL_CONGRATS'			=> 'Gratulujeme',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Práve ste úspešne nainštalovali phpBB %1$s. Odtiaľto máta dve možnosti ako naložiť so&nbsp; svojím fórom:</p>
		<h2>Previesť existujúce fórum na phpBB3</h2>
		<p>phpBB je schopné previesť dáta zo starších verzií phpBB 2.0.x alebo iných systémov do phpBB3. Pokiaľ máte existujúce fórum, ktoré chcete previesť, <a href="%2$s">pokračujte na konvertor</a>.</p>
		<h2>Spustiť vaše fórum!</h2>
		<p>Kliknutím na tlačítko nižšie sa dostanete do administrácie phpBB (ACP). Urobte si chvíľu čas a porozhliadnite sa, aké možnosti vám phpBB3 ponúka. Online podpora je dostupná cez <a href="http://www.phpbb.com/support/documentation/3.0/">Dokumentáciu</a> a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpBB.com fórum(Anglicky)</a> alebo <a href="http://phpbb3.sk/">phpBB3.sk fórum (slovensky)</a>, taktiež si pozrite <a href="%3$s">README</a> pre ďalšie informácie.</p><p><strong>Teraz prosím zmažte, presuňte alebo premenujte zložku install. Pokiaľ táto zložka nebude odstránená, bude funkčná len administrácia fóra (ACP).</strong></p>',
	'INSTALL_INTRO'				=> 'Vitajte v inštalácii',

	'INSTALL_INTRO_BODY'		=> 'Tento postup vám pomôže s inštaláciou phpBB3 na váš server.</p><p>Aby ste mohli pokračovať, budete potrebovať vaše nastavenie databázy. Ak neviete vaše nastavenia databázy, prosím kontaktujte váš webhosting a spýtajte sa ich. Nemôžete bez nich pokračovať. Potrebujete:</p>

	<ul>
		<li>Druh databázy - databáza, ktorú budete používať.</li>
		<li>Databázový server alebo DSN - adresa databázového serveru.</li>
		<li>Port databázového serveru - port k pripojeniu na databázu (vo väčšine prípadov ho nebude treba).</li>
		<li>Názov databázy - názov databázy uloženej na serveri.</li>
		<li>Užívateľské meno a heslo databázy - prístupové údaje ku databáze.</li>
	</ul>
	
	<p><strong>Poznámka:</strong> pokiaľ inštalujete a používate SQLite, mali by ste zadať úplnú cestu k databáze do DSN poľa a nechať pole pre meno a heslo prázdne. Z bezpečnostných dôvodov by ste mali zaistiť, že súbor databázy bude uložený na mieste, ktoré nie je prístupné z webu.</p>

	<p>phpBB3 môžete spustiť na týchto databázach:</p>
	<ul>
		<li>MySQL 3.23 or above (MySQLi supported)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 or above (directly or via ODBC)</li>
		<li>MS SQL Server 2005 or above (native)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Len databázy, ktoré sú podporované na vašom serveri budú zobrazené.',
	'INSTALL_INTRO_NEXT'		=> 'Pre spustenie inštalácie stlačte tlačítko umiestnené nižšie.',
	'INSTALL_LOGIN'				=> 'Prihlásenie',
	'INSTALL_NEXT'				=> 'Ďalší krok',
	'INSTALL_NEXT_FAIL'			=> 'Niektoré skúšky zlyhali a mali by ste odstrániť tieto problémy pred prechodom na ďalší krok. Pokiaľ tak neurobíte, môže zlyhať celá inštalácia.',
	'INSTALL_NEXT_PASS'			=> 'Všetky základné skúšky boli úspešné a môžete pokračovať na ďalší krok inštalácie. Pokiaľ ste zmenili akékoľvek oprávnenia, moduly atď. môžete ich teraz, ak chcete, nastaviť späť.',
	'INSTALL_PANEL'				=> 'Inštalačný panel',
	'INSTALL_SEND_CONFIG'		=> 'Bohužiaľ phpBB nemohlo zapísať nastavenia priamo do konfiguračného súboru. Toto môže byť spôsobené tým, že tento súbor neexistuje, alebo phpBB nemá dostatočné oprávnenia pre zápis. Ďalej bude uvedený zoznam možností, ako dokončiť inštaláciu tohto súboru.',
	'INSTALL_START'				=> 'Začať inštaláciu',
	'INSTALL_TEST'				=> 'Otestovať znovu',
	'INST_ERR'					=> 'Inštalačná chyba',
	'INST_ERR_DB_CONNECT'		=> 'Nemôžem sa pripojiť k databáze so zadaným menom a heslom. Pozri správu o chybe.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Databázový súbor, ktorý ste zvolili je v zložkách fóra. Mali by ste ho uložiť do adresára, ktorý nie je prístupný z webu.',
	'INST_ERR_DB_NO_ERROR'		=> 'Žiadna chybová správa',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Verzia databázy MySQL, ktorá je inštalovaná na tomto stroji, je nekompatibilná s možnosťou "MySQL s rozšírením MySQLi", ktorú ste vybrali. Skúste zvoliť možnosť "MySQL".',
	'INST_ERR_DB_NO_SQLITE'		=> 'Verzia rozšírenia SQLite, ktorú máte nainštalovanú, je príliš zastaralá a je potrebné ju aktualizovať aspoň na verziu 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Verzia databázy Oracle, ktorá je inštalovaná na tomto stroji, vyžaduje nastavenie parametru <var>NLS_CHARACTERSET</var> na <var>UTF8</var>. Buď aktualizujte vašu inštaláciu na verziu 9.2+ alebo zmeňte tento parameter.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Verzia databázy Firebird, ktorá je inštalovaná na tomto serveri, je staršia ako 2.1. Aktualizujte na novšiu verziu.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Databáza, ktorú ste zvolili pre Firebird má veľkosť stránky menšiu než 8192. Musíte zvoliť databázu, ktorá má stránku väčšiu ako táto hodnota.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Databáza, ktorú ste zvolili, nebola vytvorená v kódovaní <var>UNICODE</var> alebo <var>UTF8</var>. Skúste inštalovať do databázy, ktorá má kódovanie <var>UNICODE</var> alebo <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'Nezadali ste meno databázy',
	'INST_ERR_EMAIL_INVALID'	=> 'Emailová adresa, ktorú ste vložili nie je platná',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Zadané e-mailové adresy sa nezhodujú',
	'INST_ERR_FATAL'			=> 'Fatálna chyba inštalácie',
	'INST_ERR_FATAL_DB'			=> 'Objavila sa veľmi závažná a nezvratná databázová chyba. Toto môže byť spôsobené tým, že daný užívateľ nemá príslušné práva vytvárať tabuľky - <code>CREATE TABLES</code> alebo vkladať - <code>INSERT</code> dáta atď. Podrobné informácie môžu byť uvedené nižšie. Najskôr skontaktujte vášho poskytovateľa hostingu alebo fórum podpory phpBB pre ďalšiu pomoc.',
	'INST_ERR_FTP_PATH'			=> 'Nedá sa zmeniť na danú zložku, skontrolujte zadanú cestu.',
	'INST_ERR_FTP_LOGIN'		=> 'Nedá sa prihlásiť k FTP serveru, skontrolujte užívateľské meno a heslo.',
	'INST_ERR_MISSING_DATA'		=> 'Musíte vyplniť všetky polia v tejto časti',
	'INST_ERR_NO_DB'			=> 'Nedá sa načítať PHP modul pre vybraný druh databázy',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Zadané heslá sa nezhodujú.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Heslo je príliš dlhé. Heslo môže mať maximálne 30 znakov.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Heslo je príliš krátke. Heslo musí mať minimálne 6 znakov.',
	'INST_ERR_PREFIX'			=> 'Tabuľky so zvolenou predponou už v databáze existujú, zvoľte prosím inú.',
	'INST_ERR_PREFIX_INVALID'	=> 'Zvolená predpona tabuliek je neplatná. Skúste inú a vynechajte znaky ako je pomlčka',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Predpona tabuliek je príliš dlhá. Maximálna dĺžka je %d znakov.',
	'INST_ERR_USER_TOO_LONG'	=> 'Užívateľské meno je príliš dlhé. Užívateľské meno môže mať maximálne 20 znakov.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Užívateľské meno je príliš krátke. Užívateľské meno musí mať minimálne 2 znaky.',
	'INVALID_PRIMARY_KEY'		=> 'Neplatný primárny kľúč: %s',
	
	'LONG_SCRIPT_EXECUTION'      => 'Berte na vedomie, že toto môže chvíľu trvať... Prosím, nezastavujte skript, pokiaľ sa neukončí.',
	
	// mbstring
	'MBSTRING_CHECK'						=> 'Kontrola rozšírenia <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Povinné</strong> - <samp>mbstring</samp> je rozšírenie PHP, ktoré poskytuje funkcie prácu multibytovými reťazcami. Niektoré súčasti mbstring nie sú kompatibilné s phpBB a musia byť vypnuté.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Preťažovanie funkcie',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> musí byť nastavené na 0 alebo 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Zakódovanie priehľadných znakov',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> musí byť nastavené na 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Preklad vstupných HTTP znakov',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> musí byť nastavené na <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Preklad výstupných HTTP znakov',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> musí byť nastavené na <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Prosím skontrolujte či táto zložka existuje a či má webserver právo na zápis do nej a skúste znovu:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Prosím skontrolujte či tieto zložky existujú a či má webserver právo na zápis do nich a skúste znovu:<br />»<strong>%s</strong>',

  'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Schéma vašej MySQL databázy pre phpBB je neaktuálna. phpBB detekovalo schému pre MySQL 3.x/4.x, ale server používa MySQL %2$s.<br /><strong>Ak budete pokračovať s aktualizáciou, musíte aktualizovať najprv schému.</strong><br /><br />Pozrite sa na <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">článok v databáze phpBB.com o aktualizácií</a>. Pokiaľ narazíte na problém, obráťte sa na <a href="http://www.phpbb.com/community/viewforum.php?f=46">fórum podpory phpBB.com</a> alebo <a href="http://www.pcforum.sk/redakcne-systemy-vf77.html">túto podporu</a>.',

	'NAMING_CONFLICT'			=> 'Konflikt v názvoch: %s a %s sú oba aliasy<br /><br />%s',
	'NEXT_STEP'					=> 'Pokračovať na ďalší krok',
	'NOT_FOUND'					=> 'Nebolo nájdené',
	'NOT_UNDERSTAND'			=> 'Nie je zrozumiteľné %s #%d, tabuľka %s (“%s”)',
	'NO_CONVERTORS'				=> 'Nie sú dostupné žiadne konvertory k použitiu',
	'NO_CONVERT_SPECIFIED'		=> 'Nebol zvolený žiaden konvertor',
	'NO_LOCATION'				=> 'Nie je možné určiť umiestnenie. Ak viete, že je Imagemagick nainštalovaný, môžete neskôr upraviť umiestnenie v administrácii',
	'NO_TABLES_FOUND'			=> 'Neboli nájdené žiadne tabuľky.',

  'OVERVIEW_BODY'				=> 'Vitajte v phpBB3!<br /><br />phpBB™ je najrozšírenejšie, voľne šíriteľné riešenie pre fóra . phpBB3 je posledný inštalačný balíček phpBB od roku 2000. Rovnako ako predchodcovia, phpBB3 je bohaté na funkcie, užívateľsky priateľské, a plne podporované phpBB tímom. phpBB3 výborne vylepšuje to, čo robilo phpBB2 populárnym, a pridáva bežné, žiadané funkcie, ktoré neboli prezentované v predchádzajúcich verziách. Veríme, že prevýši vaše očakávania.<br /><br />Táto inštalačná príručka vás prevedia inštaláciou phpBB3, aktualizáciou na najnovšiu verziu phpBB3 z poslednej RC verzie, tak isto ako prekonvertovaním z iných diskusných systémov (vrátane phpBB2). Pre viac informácií, doporučujeme prečítať <a href="../docs/INSTALL.html">inštalačnú príručku</a>.<br /><br />Pre prečítanie phpBB3 licencie, alebo získanie podpory, prosím vyberte patričnú funkciu z bočného menu. Pre pokračovanie, prosím zvoľte vhodnú záložku.',

	'PCRE_UTF_SUPPORT'				=> 'Podpora PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>nebude</strong> fungovať pokiaľ vaša inštalácia PHP nie je kompilovaná s podporou UTF-8 v rozšírení PCRE',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP funkcia getimagesize() je dostupná',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Povinné</strong> - Pre správne fungovanie phpBB je potrebné, aby funkcia getimagesize bola dostupná.',
	'PHP_OPTIONAL_MODULE'			=> 'Voliteľné moduly',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Voliteľné</strong> - Tieto moduly a aplikácie sú voliteľné, nepotrebujete ich pre bezprostredný chod phpBB 3.0, ale ak ich máte, poskytnú vám mnoho nových špeciálnych funkcií.',
	'PHP_SUPPORTED_DB'				=> 'Podporované typy databáz',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Povinné</strong> - Musí byť povolené využívať aspoň jeden typ databázy kompatibilný s Vašim PHP. Pokiaľ nie je ani jeden typ databázy ukázaný ako aktívny, kontaktujte prosím administrátora vášho webhostingu alebo si prezrite odpovedajúcu dokumentáciu PHP pre ďalšie informácie.',
	'PHP_REGISTER_GLOBALS'			=> 'Nastavenie PHP <var>register_globals</var> je vypnuté',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB bude fungovať aj keď je toto nastavenie zapnuté, ale pokiaľ je to možné je doporučené toto nastavenie vypnúť z bezpečnostných dôvodov.',
	'PHP_SAFE_MODE'					=> 'Bezpečnostný mód',
	'PHP_SETTINGS'					=> 'Verzia PHP a nastavenia',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Povinné</strong> - Verzia PHP na Vašom serveri nesmie byť staršia ako 4.3.3 pre nainštalovanie phpBB. Ak je nižšie zobrazený <var>bezpečnostný mód</var>, vaša inštalácia PHP má tento mód zapnutý. Toto môže priniesť určité obmedzenia pri vzdialenej administrácii a podobných funkciách.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP nastavenia <var>allow_url_fopen</var> je zapnuté',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Voliteľné</strong> - Toto nastavenie je voliteľné, ale ak je vypnuté, niektoré funkcie, ako napríklad vzdialené avatary, nebudú fungovať. ',
	'PHP_VERSION_REQD'				=> 'PHP verzia >= 4.3.3',
	'POST_ID'						=> 'ID príspevku',
	'PREFIX_FOUND'					=> 'Sken tabuliek ukázal, že na serveri už je platná inštalácia s predponami tabuliek <strong>%s</strong>.',
	'PREPROCESS_STEP'				=> 'Spúšťam prípravné funkcie/overenia',
	'PRE_CONVERT_COMPLETE'			=> 'Všetky prípravné kroky pred konvertovaním boli úspešne dokončené. Teraz môžete začať s prechodom.',
	'PROCESS_LAST'					=> 'Spracovávam posledné príkazy',

	'REFRESH_PAGE'				=> 'Aktualizujte stránku pre pokračovanie v prechode',
	'REFRESH_PAGE_EXPLAIN'		=> 'Pokiaľ je nastavené na áno, konvertor aktualizuje stránku pre pokračovanie v prechode po skončený tohto kroku. Pokiaľ je toto vaše prvé konvertovanie pre testovacie účely a zistenie všetkých chýb vopred, doporučujeme nastaviť na nie.',
  'REQUIREMENTS_TITLE'		=> 'Kompatibilita servera',
	'REQUIREMENTS_EXPLAIN'		=> 'Pred prevedením inštalácie inštalátor skontroluje nastavenia na Vašom serveri pre bezproblémový chod inštalácie a neskôr aj celého systému phpBB. Prosím, prečítajte si pozorne výsledky všetkých testov a pokračujte v inštalácii až keď server prejde všetkými testami. Pokiaľ chcete využívať aj funkcie uvedené u voliteľných testov, uistite sa, že server úspešné prešiel aj cez tieto testy.',
	'RETRY_WRITE'				=> 'Znovu sa pokúšam zapísať konfiguračný súbor',
	'RETRY_WRITE_EXPLAIN'		=> 'Pokiaľ si prajete môžete zmeniť prístupové práva k súboru config.php, aby do neho phpBB mohlo zapisovať. Pokiaľ to spravíte môžete kliknúť na Skúsiť znovu a opakovať pokus. Nezabudnite navrátiť pôvodné nastavenia súboru config.php po skončení inštalácie.',

	'SCRIPT_PATH'				=> 'Cesta ku skriptom',
	'SCRIPT_PATH_EXPLAIN'		=> 'Cesta k phpBB relatívne k názvu domény',
	'SELECT_LANG'				=> 'Vyberte jazyk',
	'SERVER_CONFIG'				=> 'Nastavenie serveru',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Vyhľadávací index nebol prekonvertovaný',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Váš starý vyhľadávací index nebol prekonvertovaný. Vyhľadávanie bude vždy vypisovať prázdne výsledky. Pre jeho obnovenie prejdite do Ovládacieho panelu fóra, zvoľte záložku Správa a zvoľte možnosť Vytvoriť nový index.',
	'SOFTWARE'					=> 'Systém fóra',
	'SPECIFY_OPTIONS'			=> 'Špecifikujte možnosti prenosu',
	'STAGE_ADMINISTRATOR'		=> 'Konfiguračné detaily',
	'STAGE_ADVANCED'			=> 'Pokročilé nastavenia',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Tieto nastavenia zmeňte iba v prípade, ak viete, že budete potrebovať iné pre chod fóra. Pokiaľ si nie ste istý, kľudne pokračujte. Tieto nastavenia sa dajú neskôr zmeniť cez Administračný panel fóra.',
	'STAGE_CONFIG_FILE'			=> 'Konfiguračný súbor',
	'STAGE_CREATE_TABLE'		=> 'Vytvoriť databázové tabuľky',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Tabuľky, ktoré využíva phpBB 3.0 boli úspešne vytvorené a boli do nich vložené základné dáta. Pokračujte na ďalší krok pre dokončenie inštalácie phpBB.',
	'STAGE_DATABASE'			=> 'Nastavenia databázy',
	'STAGE_FINAL'				=> 'Zakončenie inštalácie',
	'STAGE_INTRO'				=> 'Úvod',
	'STAGE_IN_PROGRESS'			=> 'Konvertovanie spustené',
	'STAGE_REQUIREMENTS'		=> 'Požiadavky',
	'STAGE_SETTINGS'			=> 'Nastavenia',
	'STARTING_CONVERT'			=> 'Zahajujem proces konvertovania',
	'STEP_PERCENT_COMPLETED'	=> 'Krok <strong>%d</strong> z <strong>%d</strong>',
	'SUB_INTRO'					=> 'Úvod',
	'SUB_LICENSE'				=> 'Licencia',
	'SUB_SUPPORT'				=> 'Podpora',
	'SUCCESSFUL_CONNECT'		=> 'Úspešne pripojené',
  'SUPPORT_BODY'				=> 'Plná podpora bude poskytovaná pre aktuálnu stabilnú verziu phpBB3, zdarma. To obsahuje:</p><ul><li>inštaláciu</li><li>nastavenie</li><li>technické otázky</li><li>vysvetlenie problémov k potentencionálnym chybám v software</li><li>aktualizácia z nestabilných verzií (RC) na najnovšie verzie</li><li>konverziou z phpBB 2.0.x na phpBB3</li><li>konverziou z iných diskusných systémov na phpBB3 (prosím pozrite na <a href="http://www.phpbb.com/community/viewforum.php?f=65">Convertors Forum</a>)</li></ul><p>Doporučujeme užívateľom bežiacich na RC verziách phpBB3, aby nahradili staré súbory novou verziou.</p><h2>MODy / Štýly</h2><p>Pri problémoch s MODmi, prosím píšte do <a href="http://www.phpbb.com/community/viewforum.php?f=81">Modifications Forum</a>.<br />Pri problémoch so štýlmi, templatmi a sadami obrázkov, prosím píšte do <a href="http://www.phpbb.com/community/viewforum.php?f=80">Styles Forum</a>.<br /><br />Ak vaša otázka vyžaduje špeciálnu prílohu, prosím pošlite priamo do sekcie aj prílohu.</p><h2>Obdržanie podpory</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB uvítací balíček</a><br /><a href="http://www.phpbb.com/support/">Support Section</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Príručka pre rýchly štart</a><br /><br />Pre zaistenie najnovšej verzie <a href="http://www.phpbb.com/support/">začiarknite náš mailing zoznam</a>?<br /><br />',
  'SYNC_FORUMS'				=> 'Začína synchronizácia fór',
	'SYNC_POST_COUNT'			=> 'Synchronizovanie počtu príspevkov',
	'SYNC_POST_COUNT_ID'		=> 'Synchronizovanie počtu príspevkov od <var>záznamu</var> %1$s do %2$s.',
	'SYNC_TOPICS'				=> 'Začína synchronizácia tém',
	'SYNC_TOPIC_ID'				=> 'Synchronizujú sa témy od topic_id %1$s do %2$s',

	'TABLES_MISSING'			=> 'Nedajú sa nájsť tieto tabuľky<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Predpona tabuliek v databáze',
	'TABLE_PREFIX_SAME'			=> 'Predpona tabuliek musí byť rovnaká ako je použitá softvérom z ktorého prenášate fórum.<br />» Zvolená predpona tabuliek bola %s',
	'TESTS_PASSED'				=> 'Konfigurácia bola úspešná',
	'TESTS_FAILED'				=> 'Konfigurácia bola neúspešná',

	'UNABLE_WRITE_LOCK'			=> 'Nedá sa zapísať uzamykací súbor',
	'UNAVAILABLE'				=> 'Nedostupné',
	'UNWRITABLE'				=> 'Nezapisovateľné',
	'UPDATE_TOPICS_POSTED'		=> 'Generujem informácie o odoslaných témach',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Objavila sa chyba počas generovania informácii o odoslaných témach. Môžete sa pokúsiť opakovať tento krok cez administráciu (ACP) po skončení konvertovania.',
	'VERIFY_OPTIONS'			=> 'Kontrolujem nastavenia konverzie',
	'VERSION'					=> 'Verzia',

	'WELCOME_INSTALL'			=> 'Vitajte v Inštalácii phpBB3',
	'WRITABLE'					=> 'Zapisovateľné',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Všetky súbory sú zhodné s najnovšou verziou phpBB. Teraz sa <a href="../ucp.php?mode=login">prihláste na svoje fórum</a> a skontrolujte, či všetko funguje ako má. Nezabudnite zmazať, premenovať alebo presunúť zložku install/! Budeme radi, keď nám <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">zašlete anonymné štatistické dáta</a> o vašom serveri a nastavení vašej inštalácie, ktoré použijeme na zlepšenie budúcich verzií phpBB',
	'ARCHIVE_FILE'				=> 'Zdrojový súbor vo vnútri archívu',

	'BACK'		=> 'Späť',
	'BINARY_FILE'		=> 'Binárny súbor',
	'BOT'            	=> 'Bot',
	
	'CHANGE_CLEAN_NAMES'         	=> 'Systém, ktorý kontroluje užívateľské mená nemôže byť použitý ak sa vyskytnú duplicitný užívatelia. Je niekoľko užívateľov, ktorí majú rovnaké meno pri porovnávaní novou metódou. Musíte zmazať alebo premenovať týchto užívateľov, aby ste sa uistili, že každé užívateľské meno používa len jeden človek. Potom budete môcť pokračovať.',
	'CHECK_FILES'					=> 'Skontrolovať súbory',
	'CHECK_FILES_AGAIN'				=> 'Skontrolovať súbory znovu',
	'CHECK_FILES_EXPLAIN'			=> 'Počas tohto kroku budú porovnané všetky súbory s aktualizačnými - toto môže chvíľu trvať, pokiaľ je to prvá kontrola súborov.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Podľa databázy máte nainštalovanú najnovšiu verziu. Môžete pokračovať kontrolou všetkých súborov, aby ste sa uistili či naozaj odpovedajú najnovšej verzii',
	'CHECK_UPDATE_DATABASE'			=> 'Pokračovať v aktualizácii',
	'COLLECTED_INFORMATION'			=> 'Informácie o súbore',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Nižšie uvedený zoznam ukazuje informácie o súboroch, ktoré potrebujú zaktualizovať. Prečítajte si poznámku pre každým súborom, aby ste vedeli čo znamená a čo musíte urobiť pre správnu aktualizáciu.',
	'COLLECTING_FILE_DIFFS'			=> 'Zhromažďujem rozdiely medzi súbormi',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Teraz by ste sa mail <a href="../ucp.php?mode=login">prihlásiť na svoje fórum</a> a skontrolovať či všetko funguje ako má. nezabudnite zmazať, premenovať alebo presunúť zložku install/!',
	'CONTINUE_UPDATE_NOW'			=> 'Pokračovať v procese aktualizácie',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Pokračovať v procese aktualizácie teraz',					// Zobrazí po nahratí súborov, pre zistenie či nie je proces aktualizácie ukončený
	'CURRENT_FILE'					=> 'Začiatok súčasného pôvodného súboru',
	'CURRENT_VERSION'				=> 'Súčasná verzia',

	'DATABASE_TYPE'						=> 'Typ databázy',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Aktualizačný súbor databázy v inštalačnej zložke je starý. Uistite sa, že ste nahrali najnovšiu verziu tohto súboru.',
	'DELETE_USER_REMOVE'            	=> 'Zmazať užívateľov aj príspevky',
	'DELETE_USER_RETAIN'            	=> 'Zmazať užívateľov, ale nechať príspevky',
	'DESTINATION'						=> 'Cieľový súbor',
	'DIFF_INLINE'						=> 'Na riadku',
	'DIFF_RAW'							=> 'Nespracované zjednotené rozdiely',
	'DIFF_SEP_EXPLAIN'					=> 'Koniec súčasného pôvodného súboru / Začiatok nového aktualizovaného súboru',
	'DIFF_SIDE_BY_SIDE'					=> 'Vedľa seba',
	'DIFF_UNIFIED'						=> 'Zjednotené rozdiely',
	'DO_NOT_UPDATE'						=> 'Neaktualizovať tento súbor',
	'DONE'								=> 'Hotovo',
	'DOWNLOAD'							=> 'Stiahnuť',
	'DOWNLOAD_AS'						=> 'Stiahnuť ako',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Stiahnuť archív upravených súborov (odporúčané)',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Stiahnuť archív upravených súborov',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Po stiahnutí tento archív rozbaľte. Nájdete upravené súbory, ktoré musíte nahrať do základnej zložky phpBB. Prosím nahrajte súbory na ich správne miesto. Po nahraní súborov ich znovu skontrolujte stlačením nasledujúceho tlačítka.',

  'DOWNLOAD_CONFLICTS'							=> 'Stiahnúť konflikty v tomto súbore',
	'DOWNLOAD_CONFLICTS_EXPLAIN'			=> 'Hľadajte výskyt &lt;&lt;&lt;, tieto znaky znamenajú konflikt v súbore',

	'ERROR'		=> 'Chyba',
	'EDIT_USERNAME'   => 'Upraviť užívateľské meno',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Súbor už je v najnovšej verzii',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Súbor nemôže byť zmenený',
	'FILE_USED'						=> 'Informácie použité z',
	'FILES_CONFLICT'				=> 'Konfliktné súbory',
	'FILES_CONFLICT_EXPLAIN'		=> 'Nasledujúce súbory boli upravené a nie sú rovnaké ako súbory z predchádzajúcej verzie. phpBB zistilo, že tieto súbory spôsobujú konflikt, keď sa ich pokúsi o ich zlúčenie. Preskúmajte tieto konflikty a skúste ich vyriešiť ručne alebo pokračujte v prechode zvolením metódy pre zlúčenie súborov. Pokiaľ spracujete konflikt ručne, po úpravách skontrolujte súbory znovu. Môžete tiež zvoliť preferovanú metódu zlúčenia pre každý súbor zvlášť. Prvá zlúči oba súbory do jedného, kde konfliktné riadky budú nahradené tými z nového súboru a riadky zo starého súboru budú zmazané, druhá naopak použije riadky zo starého súboru.',
	'FILES_MODIFIED'				=> 'Upravené súbory',
	'FILES_MODIFIED_EXPLAIN'		=> 'Nasledujúce súbory boli upravené a nie sú rovnaké ako súbory z predchádzajúcej verzie. Aktualizovaný súbor bude výsledok vašich úprav a nového súboru.',
	'FILES_NEW'						=> 'Nové súbory',
	'FILES_NEW_EXPLAIN'				=> 'Nasledujúce súbory zatiaľ neexistujú vo vašej inštalácii. Tieto súbory budú pridané do inštalácie.',
	'FILES_NEW_CONFLICT'			=> 'Nové konfliktné súbory',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Nasledujúce súbory sú nové v poslednej verzii, ale rovnaký súbor s rovnakým menom už vo vašej inštalácii existuje. Tento súbor bude nahradený novým.',
	'FILES_NOT_MODIFIED'			=> 'Neupravené súbory',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Nasledujúce súbory neboli upravené a sú rovnaké ako súbory v predchádzajúcej verzii. Budú prepísané aktuálnymi.',
	'FILES_UP_TO_DATE'				=> 'Už aktualizované súbory',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Tieto súbory sú už v aktuálnej verzii a preto nemusia byť zaktualizované.',
	'FTP_SETTINGS'					=> 'Nastavenia FTP',
	'FTP_UPDATE_METHOD'				=> 'Nahrať cez FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Aktualizačné súbory nie sú kompatibilné s vašou nainštalovanou verziou. Vy máte nainštalovanú verziu %1$s a súbory sú určené pre prechod phpBB z verzie %2$s na %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Aktualizačné súbory sú neúplné',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Aktualizácia bola úspešná. Teraz môžete pokračovať v aktualizačnom procese.',
	
	'KEEP_OLD_NAME'      => 'Ponechať užívateľské meno',

	'LATEST_VERSION'		=> 'Posledná verzia',
	'LINE'					=> 'Riadok',
	'LINE_ADDED'			=> 'Pridané',
	'LINE_MODIFIED'			=> 'Upravené',
	'LINE_REMOVED'			=> 'Odstránené',
	'LINE_UNMODIFIED'		=> 'Neupravené',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Pre aktualizáciu vašej inštalácie sa musíte najskôr prihlásiť.',

	'MAPPING_FILE_STRUCTURE'	=> 'Pre uľahčenie nahrávania sú tu súbory umiestnené ako vo vašej inštalácii phpBB.',
	
  'MERGE_MODIFICATIONS_OPTION'	=> 'Zlúčiť úpravy a modifikácie',
  
  'MERGE_NO_MERGE_NEW_OPTION'	=> 'Nezlučovať - použiť nový súbor',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Nezlučovať - použiť v súčasnosti inštalovaný súbor',
	'MERGE_MOD_FILE_OPTION'		=> 'Zlúčiť rozdiely (zahodit nový phpBB kód v konflikte)',
	'MERGE_NEW_FILE_OPTION'		=> 'Zlúčiť rozdiely (zahodit kód zo starého súboru v konflikte)',
	'MERGE_SELECT_ERROR'		=> 'Režimy zlúčenia súborov spôsobujúcich konflikty nie sú vybrané správne.',
	'MERGING_FILES'				=> 'Spájanie rozdielov',
	'MERGING_FILES_EXPLAIN'		=> 'Práve sa zbierajú informácie o konečných zmenách súborov.<br /><br />Počkajte pokiaľ phpBB dokončí jednotlivé úkony.',

	'NEW_FILE'						=> 'Koniec nového aktualizované súboru',
	'NEW_USERNAME'               	=> 'Nové užívateľské meno',
	'NO_AUTH_UPDATE'				=> 'Nemáte oprávnenie pre aktualizáciu',
	'NO_ERRORS'						=> 'Bez chýb',
	'NO_UPDATE_FILES'				=> 'Neaktualizujem nasledujúce súbory',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Nasledujúce súbory sú nové alebo upravené, ale zložka, kde sú bežne umiestnené, nebola vo vašej inštalácii nájdená. Pokiaľ tento zoznam obsahuje súbory, ktoré nepatria do zložiek language/ alebo styles/, je možné, že ste zmenili štruktúru adresárov a že aktualizácia nebude kompletná.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nebola nájdená zložka pre aktualizáciu, uistite sa, že ste nahrali zodpovedajúce aktualizačné súbory.<br /><br />Na vašom fóre <strong>nepoužívate</strong> poslednú verziu phpBB. Aktualizácie sú dostupné pre vašu verziu phpBB %1$s, prosím navštívte <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> pre stiahnutie správneho balíčku pre aktualizáciu z verzie %2$s na verziu %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Používate najnovšiu verziu phpBB. Nie je potrebné spúšťať aktualizáciu. Pokiaľ chcete skontrolovať integritu súborov, nahrajte najskôr zodpovedajúce aktualizačné súbory.',
	'NO_UPDATE_INFO'				=> 'Informácie o aktualizačných súboroch neboli nájdené.',
	'NO_UPDATES_REQUIRED'			=> 'Žiadne úpravy nie sú potrebné',
	'NO_VISIBLE_CHANGES'			=> 'Žiadne viditeľné zmeny',
	'NOTICE'						=> 'Upozornenie',
	'NUM_CONFLICTS'					=> 'Počet konfliktov',
	'NUMBER_OF_FILES_COLLECTED'		=> 'V súčasnosti tvoria rozdiely o&nbsp;%1$d z %2$d získaných súborov.<br />Počkajte kým sa ukončí získavanie súborov.',

	'OLD_UPDATE_FILES'		=> 'Aktualizačné súbory sú staré. Súbory, ktoré boli nájdené, sú určené pre prechod z phpBB %1$s na phpBB %2$s, ale posledná verzia phpBB je %3$s.',
	
  'PACKAGE_UPDATES_TO'				=> 'Tento balík sa aktualizuje na verziu',
	'PERFORM_DATABASE_UPDATE'			=> 'Uskutočniť aktualizáciu databázy',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Nižšie nájdete odkaz na aktualizačný skript pre databázu. Aktualizácia databázy môže chvíľu trvať, nezastavte ju ak bude vyzerať, že úplne zamrzla. Po dokončení aktualizácie sledujte pokyny pre dokončenie aktualizačného procesu.',
	'PREVIOUS_VERSION'					=> 'Predchádzajúca verzia',
	'PROGRESS'							=> 'Priebeh',

	'RESULT'					=> 'Výsledok',
	'RUN_DATABASE_SCRIPT'		=> 'Aktualizovať moju databázu teraz',

	'SELECT_DIFF_MODE'			=> 'Zvoľte spôsob zobrazenia rozdielu',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Vybrať formát archívu na stiahnutie',
	'SELECT_FTP_SETTINGS'		=> 'Vybrať nastavenia FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Ukáž rozdiely/konflikty',
	'SHOW_DIFF_FINAL'			=> 'Zobraziť výsledný súbor',
	'SHOW_DIFF_MODIFIED'		=> 'Zobraziť rozdiely po zlúčení',
	'SHOW_DIFF_NEW'				=> 'Zobraziť obsah súboru',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Zobraziť rozdiely',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Zobraziť rozdiely',
	'SOME_QUERIES_FAILED'		=> 'Niektoré overenia zlyhali, príkazy a chyby sú vypísané nižšie',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Toto pravdepodobne nie je nič vážne, aktualizácia bude pokračovať. Ak ju aj napriek tomu nebude možné dokončiť, vyhľadajte nápovedu na našich fórach. V <a href="../docs/README.html">README</a> nájdete postup pre získanie ďalšej podpory.',
	'STAGE_FILE_CHECK'			=> 'Skontrolovať súbory',
	'STAGE_UPDATE_DB'			=> 'Aktualizovať databázu',
	'STAGE_UPDATE_FILES'		=> 'Aktualizovať súbory',
	'STAGE_VERSION_CHECK'		=> 'Skontrolovať verziu',
	'STATUS_CONFLICT'			=> 'Upravený súbor spôsobujúci konflikt',
	'STATUS_MODIFIED'			=> 'Upravený súbor',
	'STATUS_NEW'				=> 'Nový súbor',
	'STATUS_NEW_CONFLICT'		=> 'Konfliktný nový súbor',
	'STATUS_NOT_MODIFIED'		=> 'Neupravený súbor',
	'STATUS_UP_TO_DATE'			=> 'Už aktualizovaný súbor',

	'TOGGLE_DISPLAY'			=> 'Zobraziť/skryť zoznam súborov',
	'TRY_DOWNLOAD_METHOD'		=> 'Môžete skúsiť stiahnuť archív upravených súborov.<br />Táto možnosť funguje vždy a je doporučeným postupom pri inštalácii.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Try this method now',


	'UPDATE_COMPLETED'				=> 'Aktualizácia je hotová',
	'UPDATE_DATABASE'				=> 'Aktualizovať databázu',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Počas nasledujúceho kroku bude databáza aktualizovaná.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Aktualizácia databázovej schémy',
	'UPDATE_FILES'					=> 'Aktualizovať súbory',
	'UPDATE_FILES_NOTICE'			=> 'Uistite sa, že ste aktualizovali aj súbory fóra, tento súbor aktualizuje len databázu.',
	'UPDATE_INSTALLATION'			=> 'Aktualizovať inštaláciu phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Týmto nástrojom sa dá aktualizovať vaša inštalácia phpBB na najnovšiu verziu.<br />počas procesu bude skontrolovaná integrita všetkých súborov. Budete mať možnosť si prehliadnuť všetky rozdiely a súbory pred aktualizáciou.<br /><br />Samotné úpravy súborov môžu byť uskutočnené dvoma spôsobmi.</p><h2>Ručná aktualizácia</h2><p>Pokiaľ zvolíte len tento spôsob, stiahnete len upravené súbory pre fórum, aby ste sa mohli uistiť, že nestratíte zmeny uskutočnené na fóre. Po stiahnutí tohto balíčku budete musieť ručne nahrať všetky súbory na server a umiestniť ich do zodpovedajúcich zložiek. Po skončení nahrávania budete môcť znovu skontrolovať integritu súborov, aby ste si overili, že ste súbory nahrali správne. Pokiaľ boli všetky správne nahrané, budete presmerovaný na aktualizačný skript databázy.</p><h2>Automatická aktualizácia cez FTP</h2><p>Tento spôsob je podobný prvému, ale nebudete musieť stiahnuť súbory a ručne ich nahrať. Toto systém uskutoční automaticky. Aby ste mohli využiť tento spôsob, budete musieť poznať prístupové údaje k FTP. Po nahraní bude znova prevedená kontrola integrity. Pokiaľ sú súbory v poriadku budete presmerovaný na aktualizačný skript databázy.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Oznámenie o vydaní</h1>

		<p>Prosím prečítajte si <a href="%1$s" title="%1$s"><strong>oznámenie o vydaní pre najnovšiu verziu</strong></a> predtým ako budete pokračovať v aktualizačnom procese, pretože sa môžete dozvedieť užitočné informácie. Bude to obsahovať odkazy na stiahnutie ako ja záznam zmien.</p>

		<br />

		<h1>Ako aktualizovať vašu inštaláciu s automatickým aktualizačným balíčkom</h1>

		<p>Doporučený spôsob aktualizácie vašej inštalácie vypísaný tu je platný len pre automatický aktualizačný balíček (Automatic Update Package). Môžete tiež aktualizovať vašu inštaláciu s použitím metód vypísaných v dokumente INSTALL.html. Kroky pre automatickú aktualizáciu phpBB sú:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Choďte na <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">stránku so súbormi na stiahnutie na phpBB.com</a> a stiahnite archív automatického aktualizačného balíčku "Automatic Update Package".<br /><br /></li>
			<li>Rozbaľte archív.<br /><br /></li>
			<li>Nahrajte celú rozbalenú zložku install do základnej zložky vášho phpBB fóra (tá kde sa nachádza súbor config.php).<br /><br /></li>
		</ul>

		<p>Akonáhle budú súbory nahrané, phpBB sa vypne pre bežných užívateľov na dobu pokiaľ bude zložka install, ktorú si nahral prítomná v základnej zložke phpBB.<br /><br />
		<strong><a href="%2$s" title="%2$s">Terez spustite aktualizačný proces zadaním cesty ku zložke install do vášho prehliadača</a>.</strong><br />
		<br />
		Budete prevedený cez aktualizačný proces. Budete upozornený, keď bude aktualizácia hotová.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Bola detekovaná neúplná aktualizácia</h1>

		<p>phpBB detekovalo neúplnú automatickú aktualizáciu. Prosím skontrolujte či ste nasledovali všetky kroky aktualizačného nástroja. Nižšie nájdete priamy odkaz na pokračovanie v inštalácii alebo prejdete priamo do inštalačného adresára.</p>
	',
	'UPDATE_METHOD'					=> 'Metóda aktualizácie',
	'UPDATE_METHOD_EXPLAIN'			=> 'Teraz máte možnosť zvoliť si preferovaný spôsob nahrávania súborov. Pokiaľ použijete nahrávanie cez FTP, budete musieť zadať údaje k FTP na vašom serveri. Týmto spôsobom budú súbory automaticky presunuté na svoje umiestnenie a zálohy budú vytvorené pridaním .bak na koniec súboru. Pokiaľ zvolíte stiahnuť upravené súbory, budete ich musieť neskôr ručne rozbaliť a nahrať na server.',
	'UPDATE_REQUIRES_FILE'         	=> 'Aktualizačný nástroj vyžaduje, aby bol prítomný nasledujúci súbor: %s',
  'UPDATE_SUCCESS'				=> 'Aktualizácia prebehla úspešne',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Všetky súbory boli úspešne aktualizované. Nasledujúci krok zahrňuje poslednú kontrolu súborov pre uistenie sa, že aktualizácia prebehla správne.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Aktualizácia čísla verzie a optimalizácia databázových tabuliek',
	'UPDATING_DATA'					=> 'Aktualizácia dát',
	'UPDATING_TO_LATEST_STABLE'		=> 'Aktualizácia databázy na poslednú stabilnú verziu',
	'UPDATED_VERSION'				=> 'Aktualizovaná verzia',
	'UPGRADE_INSTRUCTIONS'			=> 'Novinka - <strong>verzia %1$s</strong> je k dispozícii. Prečítajte si, prosím, <a href="%2$s" title="%2$s"><strong>oznámenie o vydaní</strong></a> ak sa chcete dozvedieť o tom čo ponúka a ako aktualizovať.',
	'UPLOAD_METHOD'					=> 'Metóda uploadu',

	'UPDATE_DB_SUCCESS'				=> 'Aktualizácia databázy prebehla úspešne.',
	'USER_ACTIVE'               	=> 'Aktívny užívateľ',
  'USER_INACTIVE'               	=> 'Neaktívny užívateľ',

	'VERSION_CHECK'				=> 'Kontrola verzie',
	'VERSION_CHECK_EXPLAIN'		=> 'Skontrolujte, či požívate najnovšiu verziu.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Vaša verzia phpBB nie je aktuálna. Prosím pokračujte k aktualizačnému procesu.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Vaša verzia phpBB nie je aktuálna.<br />Nižšie nájdete odkaz na oznámenie o&nbsp;vydaní poslednej verzie vrátane inštrukcií k&nbsp;prevedeniu aktualizácie.',
	'VERSION_UP_TO_DATE'		=> 'Vaša verzia phpBB je aktuálna a nie sú dostupné žiadne aktualizácie pre túto verziu. Ak však napriek tomu máte záujem, môžete skontrolovať integritu súborov.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Používate zastaralú verziu phpBB.',
  'VERSION_UP_TO_DATE_ACP'	=> 'Vaša verzia phpBB je aktuálna a nie sú dostupné žiadne aktualizácie pre túto verziu. Nepotrebujete aktualizovať vašu inštaláciu.',
	'VIEWING_FILE_CONTENTS'		=> 'Zobrazenie obsahov súborov',
	'VIEWING_FILE_DIFF'			=> 'Zobrazenie rozdielov súborov',

	'WRONG_INFO_FILE_FORMAT'	=> 'Zlý formát info súboru',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Ďakujeme, vedenie fóra',
	'CONFIG_SITE_DESC'				=> 'Tu bude krátky popis vášho fóra',
	'CONFIG_SITENAME'				=> 'vaša_doména.sk',

	'DEFAULT_INSTALL_POST'			=> 'Toto je príklad ako budú vyzerať príspevky vo vašom phpBB3 fóre. Môžete upraviť alebo zmazať tento príspevok, alebo rovno celú tému, alebo dokonca celé toto fórum, pretože sa zdá, že všetko funguje ako má!',

	'FORUMS_FIRST_CATEGORY'			=> 'Vaša prvá kategória',
	'FORUMS_TEST_FORUM_DESC'		=> 'Popis vášho prvého fóra.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Vaše prvé fórum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrátor',
	'REPORT_WAREZ'					=> 'Príspevok obsahuje odkaz na nelegálny alebo pirátsky softvér.',
	'REPORT_SPAM'					=> 'Nahlásený príspevok mal za účel propagovať inú webovú stránku alebo produkt.',
	'REPORT_OFF_TOPIC'				=> 'Nahlásený príspevok je mimo tému.',
	'REPORT_OTHER'					=> 'Nahlásený príspevok nezapadá do žiadnej z kategórii, prosím vyplňte pole pre ďalšie informácie.',

	'SMILIES_ARROW'					=> 'Šípka',
	'SMILIES_CONFUSED'				=> 'Zmätený',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Plačúci',
	'SMILIES_EMARRASSED'			=> 'Hanblivý',
	'SMILIES_EVIL'					=> 'Zlý',
	'SMILIES_EXCLAMATION'			=> 'Výkričník',
	'SMILIES_GEEK'					=> 'Týpek',
	'SMILIES_IDEA'					=> 'Nápad',
	'SMILIES_LAUGHING'				=> 'Smejúci sa',
	'SMILIES_MAD'					=> 'Nahnevaný',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutrálny',
	'SMILIES_QUESTION'				=> 'Otáznik',
	'SMILIES_RAZZ'					=> 'Vyplazujúci jazyk',
	'SMILIES_ROLLING_EYES'			=> 'Krútiaci očami',
	'SMILIES_SAD'					=> 'Smutný',
	'SMILIES_SHOCKED'				=> 'Šokovaný',
	'SMILIES_SMILE'					=> 'Usmiaty',
	'SMILIES_SURPRISED'				=> 'Prekvapený',
	'SMILIES_TWISTED_EVIL'			=> 'Zvrátený',
	'SMILIES_UBER_GEEK'				=> 'Bradatý týpek',
	'SMILIES_VERY_HAPPY'			=> 'Veľmi šťastný',
	'SMILIES_WINK'					=> 'Žmurk',

	'TOPICS_TOPIC_TITLE'			=> 'Vitajte v phpBB3',
));

?>
