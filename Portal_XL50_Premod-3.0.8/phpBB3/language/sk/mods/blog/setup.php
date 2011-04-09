<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: setup.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ALREADY_INSTALLED'				=> 'Máte nainštalovaný užívateľský blog.<br /><br />%sSem kliknite a vrátim sa na hlavnú stránku blogu%s.',
	'ALREADY_UPDATED'				=> 'Používate najnovšiu verziu užívateľského blogu.<br /><br />%sSem kliknite a vrátim sa na hlavnú stránku blogu%s.',

	'BACKUP_NOTICE'					=> 'Uistite sa, že ste si zálohovať všetky dáta z oboch fór PRED pokusom o aktualizáciu. Ak sa niečo stane počas procesu inovácie môžete o všetko prísť, preto si treba najprv vytvoriť zálohu.',

	'CLEANUP'						=> 'Prečistiť',
	'CLEANUP_COMPLETE'				=> 'Tabuľky boli úspešne vyčistené.',
	'CONVERTED_BLOG_IDS_MISSING'	=> 'Prestavaný ID blogu chýba v cache. Obnovte záložné dáta do databázy a potom skúste znova vykonať aktualizáciu.',
	'CONVERT_COMPLETE'				=> 'Proces premeny bol úspešne dokončený.',
	'CONVERT_FOES'					=> 'Zmena nepriateľov',
	'CONVERT_FOES_EXPLAIN'			=> 'Prevedie užívateľov v weblog_blocked k nepriateľom.',
	'CONVERT_FRIENDS'				=> 'Zmena Priateľov',
	'CONVERT_FRIENDS_EXPLAIN'		=> 'Prevedie užívateľov v weblog_friends k priateľom.',

	'DB_TABLE_NOT_EXIST'			=> '%s tabuľka chýba vo vybranej databáze.',

	'FINAL'							=> 'Dokončenie',

	'INDEX_COMPLETE'				=> 'Blogy a odpovede sú teraz indexované v systéme vyhľadávania.',
	'INSTALL_BLOG_DB'				=> 'Inštalácia Uživateľského Blogu',
	'INSTALL_BLOG_DB_CONFIRM'		=> 'Ste pripravení na inštaláciu tohto módu do databázy?',
	'INSTALL_BLOG_DB_FAIL'			=> 'Inštalácia Uživateľského Blogu zlyhala.<br />Ohláste nasledovné chyby do EXreaction:<br />',
	'INSTALL_BLOG_DB_SUCCESS'		=> 'Úspešne ste nainštalovali do databázy sekciu Uživateľského Blogu.<br /><br />%sSem kliknite a vrátim sa na hlavnú stránku blogu%s.',

	'LIMIT_EXPLAIN'					=> 'Počet položiek, ak nastavíte príliš vysoko budete musieť prerobiť celý upgrad.',
	'LIMIT_INCORRECT'				=> 'Musíte zadať limit aspoň 1. Odporúča sa použiť aspoň 100, ale nie viac ako 1000, v závislosti na nastavenia PHP.',

	'NEXT_PART'						=> 'Prejdite na ďalšiu časť',
	'NOT_INSTALLED'					=> 'Musíte mať nainštalovaný Uživateľský Blog pred spustením skriptu aktualizácie.',
	'NO_STAGE'						=> 'Nemáte zadanú fázu pre spracovanie.',

	'PRE_UPGRADE_COMPLETE'			=> 'Všetky kroky, boli úspešne ukončené. Teraz môžete začať vlastný proces konverzie. Upozorňujeme, že budete musieť manuálne nastaviť niekoľko vecí najmä kontrolu a nastavenie oprávnení.',

	'REINDEX'						=> 'Obnoviť Index',
	'RESYNC'						=> 'Resynchronizovať',
	'RESYNC_COMPLETE'				=> 'Uživateľský Blog bol úspešne Resynchronizovaný.',
	'RETURN_LAST_STEP'				=> 'Sem kliknite pre návrat na posledný krok.',

	'SCHEMA_NOT_EXIST'				=> 'Inštalačná schéma súboru chýba. Stiahnite si prosím aktuálnu kópiu tohto módu a aktualizujte všetky požadované súbory. Ak to problém nevyrieši, obráťte sa na EXreaction.',
	'SEARCH_BREAK_CONTINUE_NOTICE'	=> 'Oddiel %1$s z %2$s, Časť %3$s z %4$s je dokončená, ale je tu ešte viac oddielov a ich častí, ktoré musia byť nainštalované pred tým ako bude všetko hotové .<br />Kliknite dole na Pokračovať, ak nie ste automaticky presmerovaný do ďalšej stránky.',
	'SUCCESS'						=> 'Gratulujeme',
	'SUCCESSFULLY_UPDATED'			=> 'Užívateľský blog bol aktualizovaný na %1$s.<br /><br />%sSem kliknite a vrátim sa na hlavnú stránku blogu%s.',

	'TRUNCATE_TABLES'				=> 'Skrátenie existujúcich tabuliek',
	'TRUNCATE_TABLES_EXPLAIN'		=> 'Týmto dôjde k vymazaniu všetkých dát tabuliek v súčasnom Užívateľskom blogu.',

	'UNINSTALL_BLOG_DB'				=> 'Odinštalovanie Módu',
	'UNINSTALL_BLOG_DB_CONFIRM'		=> 'Ste si istí, mám odstrániť dáta Užívateľského blogu?<br /><br /><strong>Ak tak urobíte všetky údaje budú stratené.</strong>',
	'UNINSTALL_BLOG_DB_SUCCESS'		=> 'Dáta z databázy Užívateľského blogu boli odstránená. Ak chcete úplne odstrániť Užívateľský blog,  musíte vrátiť všetky zmeny do stavu pred inštaláciov a odstrániť všetky súbory, ktoré ste pridali počas inštalácie.',
	'UPDATE_INSTRUCTIONS'			=> 'Aktualizovať',
	'UPDATE_INSTRUCTIONS_CONFIRM'	=> 'Uistite sa, že si prečítať pokyny k inovácii v sekcii História MODU je to prvý Dokument <b>Pred</b> týmto výkonom.<br /><br/> Ste pripravení aktualizovať databázu pre Užívateľský blog?',
	'UPGRADE_BLOGS'					=> 'Aktualizácia Blogu',
	'UPGRADE_BREAK_CONTINUE_NOTICE'	=> 'Fáza %1$s, Sekcia %2$s z %3$s, Časť %4$s z %5$s je dokončená, ale je tu ešte viac oddielov a ich častí, ktoré musia byť nainštalované pred tým ako bude všetko hotové .<br />Kliknite dole na Pokračovať, ak nie ste automaticky presmerovaný do ďalšej stránky.',
	'UPGRADE_COMPLETE'				=> 'Proces inovácie bol úspešne dokončený!<br /> Prosim urobte si zálohu konverzie ale pred tým si skontrolujte či sú korektné údaje nastavenia.',
	'UPGRADE_LIST'					=> 'Aktualizácia Zoznam',
	'UPGRADE_PHP'					=> 'Máte spustenú nepodporovanú verziu PHP. Musíte mať spustenú verziu PHP 5.1.0 alebo vyššiu aby sa dala použiť táto modifikácia.',
	'UPGRADE_REPLIES'				=> 'Aktualizácia Reakcií',

	'WELCOME_MESSAGE'				=> 'Vitajte v Uživateľskom Blogu!

Uvolnené Témy:
http://lithiumstudios.org/forum/viewtopic.php?f=41&t=433

Podpora autora bude uvedená len v lithiumstudios.org.

Ak máte akékoľvek pripomienky alebo potrebujete podporu najdete ju v tomto fóre:
http://www.lithiumstudios.org/forum/viewforum.php?f=57

Skontrolujte, toto fórum týkajúceho sa Uživateľského Blodu pred požiadaním o pomoc.
http://www.lithiumstudios.org/forum/viewforum.php?f=41',
	'WELCOME_SUBJECT'				=> 'Vitajte v Uživateľskom Blogu!',
));

?>