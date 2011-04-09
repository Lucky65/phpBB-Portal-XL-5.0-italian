<?php
/**
*
* mcp [Slovak]
*
* @package language
* @version $Id: mcp.php,v 1.83 2010/01/05 23:00:00 phpbb3.sk Exp $
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
	'ACTION'				=> 'Činnosť',
	'ACTION_NOTE'			=> 'Činnosť/Poznámka',
	'ADD_FEEDBACK'			=> 'Pridať odozvu',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ak chcete toto nahlásiť, vyplňte prosím tento formulár. Používajte iba obyčajný text; HTML, Značky, atď. nie sú povolené.',
	'ADD_WARNING'			=> 'Pridať upozornenie',
	'ADD_WARNING_EXPLAIN'	=> 'Ak chcete poslať upozornenie tomuto užívateľovi, vyplňte prosím tento formulár. Používajte iba obyčajný text; HTML, Značky, atď. nie sú povolené.',
	'ALL_ENTRIES'			=> 'Všetky príspevky',
	'ALL_NOTES_DELETED'		=> 'Úspešne vymazané všetky poznámky užívateľa',
	'ALL_REPORTS'			=> 'Všetky nahlásenia',
	'ALREADY_REPORTED'	=> 'Tento príspevok už bol nahlásený',
	'ALREADY_REPORTED_PM'	=> 'Táto súkromná správa už bola ohlásená moderátorom.',
	'ALREADY_WARNED'		=> 'Tomuto príspevku už bolo zaslané upozornenie',
	'APPROVE'				=> 'Schváliť',
	'APPROVE_POST'			=> 'Schváliť príspevok',
	'APPROVE_POST_CONFIRM'	=> 'Ste si istý, že chcete schváliť tento príspevok?',
	'APPROVE_POSTS'			=> 'Schváliť príspevky',
	'APPROVE_POSTS_CONFIRM'	=> 'Ste si istý, že chcete schváliť vybrané príspevky?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Nemôžete presunúť tému do zadaného fóra. Už je v ňom',
	'CANNOT_WARN_ANONYMOUS'	=> 'Nemôžete varovať anonymného užívateľa',
	'CANNOT_WARN_SELF'		=> 'Nemôžete varovať sami seba',
	'CAN_LEAVE_BLANK'		=> 'Toto môže byť ponechané nevyplnené',
	'CHANGE_POSTER'			=> 'Zmeniť prispievateľa',
	'CLOSE_REPORT'			=> 'Ukončiť nahlásenie',
	'CLOSE_REPORT_CONFIRM'	=> 'Ste si istý, že chcete ukončiť vybrané nahlásenie?',
	'CLOSE_REPORTS'			=> 'Ukončiť nahlásenie',
	'CLOSE_REPORTS_CONFIRM'	=> 'Ste si istý, že chcete ukončiť vybrané nahlásenie?',
	'CLOSE_PM_REPORT'		=> 'Zavrieť nahlásenie správy',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Naozaj chcete uzatvoriť toto hlásenie?',
	'CLOSE_PM_REPORTS'		=> 'Zavrieť nahlásenie správ',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Naozaj chcete uzatvoriť vybrané hlásenia?',

  'DELETE_PM_REPORT'			=> 'Odstrániť hlásenia o súkromnej správe',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Naozaj chcete odstrániť vybrané hlásenia?',
	'DELETE_PM_REPORTS'			=> 'Odstrániť hlásenia o súkromných správach',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Naozaj chcete odstrániť vybrané hlásenia?',
	'DELETE_POSTS'			=> 'Vymazať príspevky',
	'DELETE_POSTS_CONFIRM'	=> 'Ste si istý, že chcete vymazať tieto príspevky?',
	'DELETE_POST_CONFIRM'	=> 'Ste si istý, že chcete vymazať tento príspevok?',
	'DELETE_REPORT'			=> 'Vymazať nahlásenie',
	'DELETE_REPORT_CONFIRM'	=> 'Ste si istý, že chcete vymazať vybrané nahlásenie?',
	'DELETE_REPORTS'		=> 'Vymazať nahlásenie',
	'DELETE_REPORTS_CONFIRM'	=> 'Ste si istý, že chcete vymazať vybrané nahlásenia?',
	'DELETE_SHADOW_TOPIC'		=> 'Zmazať tieňovú tému',
	'DELETE_TOPICS'			=> 'Vymazať vybrané témy',
	'DELETE_TOPICS_CONFIRM'	=> 'Ste si istý, že chcete vymazať tieto témy?',
	'DELETE_TOPIC_CONFIRM'	=> 'Ste si istý, že chcete vymazať túto tému?',
	'DISAPPROVE'			=> 'Zamietnuť',
	'DISAPPROVE_REASON'		=> 'Dôvod zamietnutia',
	'DISAPPROVE_POST'		=> 'Zamietnuť príspevok',
	'DISAPPROVE_POST_CONFIRM'	=> 'Ste si istý, že chcete zamietnuť vybraný príspevok?',
	'DISAPPROVE_POSTS'		=> 'Zamietnuť príspevky',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Ste si istý že chcete zamietnuť vybrané príspevky?',
	'DISPLAY_LOG'			=> 'Zobraziť príspevky od predchádzajúceho',
	'DISPLAY_OPTIONS'		=> 'Zobraziť možnosti',

	'EMPTY_REPORT'		=> 'Musíte vložiť popis, keď ste vybrali tento dôvod',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Prosím uvedomte si, že jedna alebo viac tém bolo odobraných z databáze, pretože boli prázdne alebo sa stali prázdnymi.',

	'FEEDBACK'			=> 'Odozva',
	'FORK'					=> 'Skopírovať',
	'FORK_TOPIC'			=> 'Skopírovať tému',
	'FORK_TOPIC_CONFIRM'	=> 'Ste si istý, že chcete skopírovať túto tému?',
	'FORK_TOPICS'			=> 'Skopírovať vybrané témy',
	'FORK_TOPICS_CONFIRM'	=> 'Ste si istý, že chcete skopírovať vybrané témy?',
	'FORUM_DESC'			=> 'Popis',
	'FORUM_NAME'			=> 'Názov fóra',
	'FORUM_NOT_EXIST'		=> 'Vybrané fórum neexistuje',
	'FORUM_NOT_POSTABLE'	=> 'Do vybraného fóra nemôžete prispievať',
	'FORUM_STATUS'			=> 'Stav fóra',
	'FORUM_STYLE'			=> 'Štýl fóra',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globálne oznámenie',

	'IP_INFO'				=> 'Informácie o IP',
	'IPS_POSTED_FROM'		=> 'Z tejto IP adresy užívateľ posielal tento príspevok',

	'LATEST_LOGS'				=> 'Posledných 5 prihlásení ',
	'LATEST_REPORTED'			=> 'Posledných 5 nahlásení',
	'LATEST_REPORTED_PMS'		=> 'Posledných 5 nahlásených SS',
	'LATEST_UNAPPROVED'			=> 'Posledných 5 príspevkov čaká na schválenie',
	'LATEST_WARNING_TIME'		=> 'Posledné vydané varovanie',
	'LATEST_WARNINGS'			=> 'Posledných 5 varovaní',
	'LEAVE_SHADOW'				=> 'Ponechať tieňovú tému v starom fóre',
	'LIST_REPORT'				=> '1 nahlásenie',
	'LIST_REPORTS'				=> '%d nahlásení',
	'LOCK'						=> 'Zamknúť',
	'LOCK_POST_POST'			=> 'Zamknúť príspevok',
	'LOCK_POST_POST_CONFIRM'	=> 'Ste si istý, že chcete zabrániť úpravám tohto príspevku?',
	'LOCK_POST_POSTS'		    => 'Zamknúť vybrané príspevky',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Ste si istý, že chcete zabrániť úpravám vybraných príspevkov?',
	'LOCK_TOPIC_CONFIRM'		=> 'Ste si istý, že chcete zamknúť túto tému?',
	'LOCK_TOPICS'				=> 'Zamknúť vybrané témy',
	'LOCK_TOPICS_CONFIRM'		=> 'Ste si istý, že chcete zamknúť tieto témy?',
	'LOGS_CURRENT_TOPIC'		=> 'Zobrazené prihlásenia:',
	'LOGIN_EXPLAIN_MCP'			=> 'Pre moderovanie tohto fóra sa musíte prihlásiť.',
	'LOGVIEW_VIEWTOPIC'			=> 'Zobraziť tému',
	'LOGVIEW_VIEWLOGS'			=> 'Zobraziť zápisy v téme',
	'LOGVIEW_VIEWFORUM'			=> 'Zobraziť fórum',
// AdvancedBlockMOD 1.0.3						
	'LOGVIEW_DNSBLLOOKUP'		=> 'Lookup blacklist',
// AdvancedBlockMOD 1.0.3						
	'LOOKUP_ALL'				=> 'Hľadať všetky IP',
	'LOOKUP_IP'					=> 'Hľadať IP',

	'MARKED_NOTES_DELETED'		=> 'Úspešne odobrané všetky vyznačené poznámky užívateľa',

	'MCP_ADD'					=> 'Pridať upozornenie',

	'MCP_BAN'					=> 'Udeliť BAN',
	'MCP_BAN_EMAILS'			=> 'BAN E-mailu',
	'MCP_BAN_IPS'				=> 'BAN IP adries',
	'MCP_BAN_USERNAMES'			=> ' BAN prihlasovacieho mena',

	'MCP_LOGS'						=> 'Zápisy/úpravy moderátora',
	'MCP_LOGS_FRONT'				=> 'Hlavná strana',
	'MCP_LOGS_FORUM_VIEW'			=> 'Zápisy/úpravy fóra',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Zápisy/úpravy témy',

	'MCP_MAIN'					=> 'Hlavné',
	'MCP_MAIN_FORUM_VIEW'			=> 'Zobraziť fórum',
	'MCP_MAIN_FRONT'				=> 'Hlavná strana',
	'MCP_MAIN_POST_DETAILS'			=> 'Detaily príspevku',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Zobraziť tému',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Vytvoriť oznámenie',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Ste si istý, že chcete túto tému zmeniť na oznámenie?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Vytvoriť oznámenie',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Ste si istý, že chcete zmeniť vybrané témy na oznámenia?',
	'MCP_MAKE_GLOBAL'				=> 'Vytvoriť globálne oznámenie',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Ste si istý, že chcete túto tému zmeniť na globálne oznámenie?',
	'MCP_MAKE_GLOBALS'				=> 'Vytvoriť globálne oznámenie',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Ste si istý, že chcete vybrané témy zmeniť na globálne oznámenia?',
	'MCP_MAKE_STICKY'				=> 'Vytvoriť Dôležité',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Ste si istý, že chcete zmeniť túto tému na Dôležité?',
	'MCP_MAKE_STICKIES'				=> 'Vytvoriť Dôležité',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Ste si istý, že chcete zmeniť vybrané témy na Dôležité?',
	'MCP_MAKE_NORMAL'				=> 'Vytvoriť Štandardnú tému',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Ste si istý, že chcete zmeniť túto tému na Štandardnú tému?',
	'MCP_MAKE_NORMALS'				=> 'Vytvoriť Štandardné témy',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Ste si istý, že chcete zmeniť vybraná témy na Štandardné témy?',

	'MCP_NOTES'						=> 'Poznámky užívateľa',
	'MCP_NOTES_FRONT'				=> 'Hlavná stránka',
	'MCP_NOTES_USER'				=> 'Detaily užívateľa',

	'MCP_POST_REPORTS'				=> 'Nahlásenia na tento príspevok',
	
	'MCP_PM_REPORTS'				=> 'Nahlásené SS',
	'MCP_PM_REPORT_DETAILS'			=> 'Podrobnosti hlásenia',
	'MCP_PM_REPORTS_CLOSED'			=> 'Uzavreté hlásenia SS',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Toto je zoznam všetkých nahlásených súkromných správ, ktoré už boli vyriešené.',
	'MCP_PM_REPORTS_OPEN'			=> 'Otvorené hlásenia SS',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Toto je zoznam všetkých nahlásených súkromných správ, ktoré sú stále k&nbsp;vybaveniu.',

	'MCP_REPORTS'					=> 'Nahlásené príspevky',
	'MCP_REPORT_DETAILS'			=> 'Detaily nahlásenia',
	'MCP_REPORTS_CLOSED'			=> 'Uzavreté nahlásenia',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Toto je zoznam všetkých nahlásených príspevkov, ktoré boli už vyriešené.',
	'MCP_REPORTS_OPEN'				=> 'Nevyriešené nahlásenia',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Toto je zoznam všetkých nahlásených príspevkov, ktoré ešte neboli vyriešené',

	'MCP_QUEUE'								=> 'Moderovanie čakajúcich',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Schváliť detaily',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Príspevky čakajúce na schválenie',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Toto je zoznam všetkých príspevkov, které vyžadujú schválenie predtým, než budú viditeľné pre užívateľov',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Témy čakajúce na schválenie',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Toto je zoznam všetkých tém, které vyžadujú schválenie predtým, než budú viditeľné pre užívateľov',

	'MCP_VIEW_USER'			=> 'Zobraziť varovanie určitého užívateľa',

	'MCP_WARN'				=> 'Varovanie',
	'MCP_WARN_FRONT'		=> 'Hlavná stránka',
	'MCP_WARN_LIST'			=> 'Zoznam varovaní',
	'MCP_WARN_POST'			=> 'Varovať za určitý príspevok',
	'MCP_WARN_USER'			=> 'Varovať užívateľa',

	'MERGE_POSTS'			=> 'Zlúčiť príspevky',
	'MERGE_POSTS_CONFIRM'	=> 'Ste si istý, že chcete zlúčiť vybrané príspevky?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Týmto formulárom môžete zlúčiť vybrané príspevky do inej témy. Tieto príspevky budú zobrazené ako keby ich užívatelia odoslali do novej témy.<br />Prosím, vložte id cieľovej témy alebo kliknite na tlačidlo "Vybrať" a vyhľadajte ho',
	'MERGE_TOPIC_ID'		=> 'ID cieľového fóra',
	'MERGE_TOPICS'			=> 'Zlúčiť témy',
	'MERGE_TOPICS_CONFIRM'	=> 'Ste si istý, že chcete zlúčiť vybraté témy?',
	'MODERATE_FORUM'		=> 'Moderovať fórum',
	'MODERATE_TOPIC'		=> 'Moderovať tému',
	'MODERATE_POST'			=> 'Moderovať príspevok',
	'MOD_OPTIONS'			=> 'Možnosti moderátora',
	'MORE_INFO'				=> 'Ďalšie informácie',
	'MOST_WARNINGS'			=> 'Užívatelia s najväčším počtom varovaní',
	'MOVE_TOPIC_CONFIRM'	=> 'Ste si istý, že chcete presunúť tému do nového fóra?',
	'MOVE_TOPICS'			=> 'Presunúť vybrané témy',
	'MOVE_TOPICS_CONFIRM'	=> 'Ste si istý, že chcete presunúť vybrané témy do nového fóra?',

	'NOTIFY_POSTER_APPROVAL'=> 'Upozorniť autora o schválení?',
	'NOTIFY_POSTER_DISAPPROVAL' => 'Upozorniť autora o neschválení?',
	'NOTIFY_USER_WARN'		=> 'Upozorniť užívateľa o varovaní?',
	'NOT_MODERATOR'			=> 'Nie ste moderátorom tohto fóra',
	'NO_DESTINATION_FORUM'	=> 'Prosím vyberte nejaké fórum ako cieľové',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Tento cieľ cesty nie je dostupný.',
	'NO_ENTRIES'			=> 'Tento užívateľ sa neprihlásil',
	'NO_FEEDBACK'			=> 'Neexistuje žiadna odozva na tohto užívateľa',
	'NO_FINAL_TOPIC_SELECTED'	=> 'Musíte vybrať cieľovú tému pre zlúčenie príspevkov',
	'NO_MATCHES_FOUND'		=> 'Nič nenájdené',
	'NO_POST'				=> 'Musíte vybrať príspevok, aby mohol byť užívateľ varovaný za príspevok',
	'NO_POST_REPORT'		=> 'Táto téma nebola nahlásená',
	'NO_POST_SELECTED'		=> 'Musíte vybrať minimálne jeden príspevok pre vykonanie tejto činnosti',
	'NO_REASON_DISAPPROVAL'	=> 'Prosím udajte dôvod k neschváleniu',
	'NO_REPORT'						=> 'Nebolo nájdené žiadne nahlásenie',
	'NO_REPORTS'					=> 'Žiadne nahlásenia',
	'NO_REPORT_SELECTED'			=> 'Musíte vybrať najmenej jedno nahlásenie pre vykonanie tejto činnosti.',
	'NO_TOPIC_ICON'			=> 'Žiadne',
	'NO_TOPIC_SELECTED'		=> 'Musíte vybrať minimálne jednu tému pre vykonanie tejto činnosti',
	'NO_TOPICS_QUEUE'				=> 'Žiadne témy',

	'ONLY_TOPIC'			=> 'Iba témy “%s”',
	'OTHER_USERS'			=> 'Užívatelia prispievajúci z tejto IP',
	
	'PM_REPORT_CLOSED_SUCCESS'	=> 'Hlásenie o súkromnej správe bolo uzatvorené.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Hlásenie o súkromnej správe bolo odstranené.',
	'PM_REPORTED_SUCCESS'		=> 'Súkromná správa bola nahlásená a poslaná moderátorom na vybavenie.',
	'PM_REPORT_TOTAL'			=> 'Celkovo je nahlásená <strong>1</strong> sukromá správa.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Vybrané oznámenie SS bolo úspešne uzatvorené.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Vybrané oznámenie SS bolo úspešne vymazané.',
	'PM_REPORTS_TOTAL'			=> 'Celkovo je nahlásených <strong>%d</strong> sukromých správ.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'V tejto chvíli nie je nahlásená žiadna súkromná správa.',
	'PM_REPORT_DETAILS'			=> 'Podrobnosti nahlásenia',

	'POSTER'				=> 'Autor',
	'POSTS_APPROVED_SUCCESS'=> 'Vybraté príspevky boli schválené',
	'POSTS_DELETED_SUCCESS'	=> 'Vybraté príspevky boli úspešne odstránené z databázy',
	'POSTS_DISAPPROVED_SUCCESS'=> 'Vybraté príspevky neboli schválené',
	'POSTS_LOCKED_SUCCESS'	=> 'Vybraté príspevky boli úspešne zamknuté',
	'POSTS_MERGED_SUCCESS'	=> 'Vybraté príspevky boli zlúčené',
	'POSTS_UNLOCKED_SUCCESS'=> 'Vybraté príspevky boli úspešne odomknuté',
	'POSTS_PER_PAGE'		=> 'Príspevkov na stranu',
	'POSTS_PER_PAGE_EXPLAIN'=> '(Pre zobrazenie všetkých príspevkov nastavte 0)',
	'POST_APPROVED_SUCCESS'	=> 'Vybraté príspevky boli schválené',
	'POST_DELETED_SUCCESS'	=> 'Vybratý príspevok bol úspešne odstránený z databázy',
	'POST_DISAPPROVED_SUCCESS'	=> 'Vybratá téma nebola schválená',
	'POST_LOCKED_SUCCESS'	=> 'Príspevok úspešne zamknutý',
	'POST_NOT_EXIST'		=> 'Príspevok, ktorý požadujete, neexistuje',
	'POST_REPORTED_SUCCESS'	=> 'Tento príspevok bol úspešne nahlásený',
	'POST_UNLOCKED_SUCCESS'	=> 'Príspevok úspešne odomknutý',

	'READ_USERNOTES'		=> 'Poznámky užívateľa',
	'READ_WARNINGS'			=> 'Varovanie užívateľa',
	'REPORTER'				=> 'Oznamovateľ',
	'REPORTED'		       	=> 'Nahlásené',
	'REPORTED_BY'				=> 'Nahlásené od',
	'REPORTED_ON_DATE'			=> 'on',
	'REPORTS_CLOSED_SUCCESS'	=> 'Vybraté nahlásenia boli úspešne uzavreté.',
	'REPORTS_DELETED_SUCCESS'	=> 'Vybraté nahlásenia boli úspešne zmazané.',
	'REPORTS_TOTAL'			=> 'Celkovo je tu <strong>%d</strong> nahlásení',
	'REPORTS_ZERO_TOTAL'	=> 'Nie sú žiadne nahlásenia',
	'REPORT_CLOSED'			=> 'Toto nahlásenie bolo už uzavreté.',
	'REPORT_CLOSED_SUCCESS'	=> 'Vybraté nahlásenie bolo úspešne uzavreté.',
	'REPORT_DELETED_SUCCESS'	=> 'Vybraté nahlásenie bolo úspešne zmazané.',
	'REPORT_DETAILS'		=> 'Detaily nahlásenia',
	'REPORT_MESSAGE'		=> 'Nahlásiť túto správu',
	'REPORT_MESSAGE_EXPLAIN'=> 'Použite tento formulár pre nahlásenie vybranej správy administrátorovi fóra. Nahlásenie by malo byť použité hlavne, ak správa porušuje pravidlá fóra. <strong>Ak správu nahlásite, uvidia ju moderátori fóra.</strong>',
	'REPORT_NOTIFY'			=> 'Upozorni ma',
	'REPORT_NOTIFY_EXPLAIN'	=> 'Informovať ma keď sa nahlásenie rieši',
	'REPORT_POST_EXPLAIN'	=> 'Použite tento formulár pre nahlásenie vybraného príspevku administrátorovi fóra. Nahlásenie by malo byť použité hlavne, ak príspevok porušuje pravidlá fóra.',
	'REPORT_REASON'			=> 'Dôvod nahlásenia',
	'REPORT_TIME'			=> 'Čas nahlásenia',
	'REPORT_TOTAL'			=> 'Celkom je tu <strong>1</strong> nahlásení',
	'RESYNC'				=> 'Resynchronizácia',
	'RETURN_MESSAGE'		=> '%s Späť na správu%s',
	'RETURN_NEW_FORUM'		=> '%s Choď na nové fórum%s',
	'RETURN_NEW_TOPIC'		=> '%s Choď na novú tému%s',
	'RETURN_PM'					=> '%sVrátit sa do súkromných správ%s',
	'RETURN_POST'			=> '%s Späť na príspevok%s',
	'RETURN_QUEUE'			=> '%s Späť do fronty%s',
	'RETURN_REPORTS'		=> '%s Späť na nahlásenia%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sSpäť na tému%s',

	'SEARCH_POSTS_BY_USER'	=> 'Hľadanie podľa autora',
	'SELECT_ACTION'			=> 'Vybrať požadovanú činnosť',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Prosím vyberte fórum kde si prajete,aby sa toto globálne oznámenie malo zobrazovať.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Jedna alebo viac z vybratých tém sú globálne oznámenia. Prosím vyberte fórum, kde si prajete, aby sa zobrazovali.',
	'SELECT_MERGE'						=> 'Vybrať pre zlúčenie',
	'SELECT_TOPICS_FROM'				=> 'Vybrať témy z',
	'SELECT_TOPIC'			=> 'Vybrať tému',
	'SELECT_USER'			=> 'Vybrať užívateľa',
	'SORT_ACTION'			=> 'Prihlásenie',
	'SORT_DATE'				=> 'Dátum',
	'SORT_IP'				=> 'IP adresa',
	'SORT_WARNINGS'			=> 'Varovania',
	'SPLIT_AFTER'			=> 'Rozdeliť tému od vybratého príspevku dopredu',
	'SPLIT_FORUM'			=> 'Zobrazenie nových tém',
	'SPLIT_POSTS'			=> 'Rozdeliť vybraté príspevky',
	'SPLIT_SUBJECT'			=> 'Nový predmet témy',
	'SPLIT_TOPIC_ALL'		=> 'Rozdeliť tému od vybratého príspevku',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Ste si istý, že chcete rozdeliť túto tému?',
	'SPLIT_TOPIC_BEYOND'	=> 'Rozdeliť tému od vybraného príspevku',
	'SPLIT_TOPIC_BEYOND_CONFIRM'	=> 'Ste si istý, že chcete rozdeliť túto tému do vybraných príspevkov?',
	'SPLIT_TOPIC_EXPLAIN'	=> 'Týmto formulárom môžete rozdeliť tému na dve, buď vybraním jednotlivých príspevkov alebo rozdelením od vybratého príspevku',
	'THIS_PM_IP'				=> 'IP pre túto súkromnú správu',

	'THIS_POST_IP'			=> 'IP adresa tohto príspevku',
	'TOPICS_APPROVED_SUCCESS'	=> 'Vybrané témy boli schválené',
	'TOPICS_DELETED_SUCCESS'=> 'Vybrané témy boli úspešne odstránené z databázy',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'Vybrané témy neboli schválené',
	'TOPICS_FORKED_SUCCESS'	=> 'Vybraté témy boli úspešne skopírované',
	'TOPICS_LOCKED_SUCCESS'	=> 'Vybraté témy boli zamknuté',
	'TOPICS_MOVED_SUCCESS'	=> 'Vybraté témy boli úspešne presunuté',
	'TOPICS_RESYNC_SUCCESS'	=> 'Vybrané témy boli resynchronizované',
	'TOPICS_TYPE_CHANGED'		=> 'Typy tém boli úspešne zmenené.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Vybraté témy boli odomknuté',
	'TOPIC_APPROVED_SUCCESS'	=> 'Vybratá téma bola schválená',
	'TOPIC_DELETED_SUCCESS'	=> 'Vybratá téma bola úspešne odstránená z databázy',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Vybratá téma nebola schválená',
	'TOPIC_FORKED_SUCCESS'	=> 'Vybratá téma bola úspešne skopírovaná',
	'TOPIC_LOCKED_SUCCESS'	=> 'Vybratá téma bola zamknutá',
	'TOPIC_MOVED_SUCCESS'	=> 'Vybratá téma bola úspešne presunutá',
	'TOPIC_NOT_EXIST'		=> 'Vybratá téma neexistuje',
	'TOPIC_RESYNC_SUCCESS'	=> 'Vybratá téma bola resynchronizovaná',
	'TOPIC_SPLIT_SUCCESS'	=> 'Vybratá téma bolo úspešne rozdelená',
	'TOPIC_TIME'			=> 'Čas témy',
	'TOPIC_TYPE_CHANGED'	=> 'Typ témy bol úspešne zmenený.',
	'TOPIC_UNLOCKED_SUCCESS'=> 'Vybratá téma bola odomknutá',
	'TOTAL_WARNINGS'		=> 'Celkový počet varovaní',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Celkom je tu <strong>%d</strong> príspevkov čakajúcich na schválenie',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Nie sú tu žiadne príspevky čakajúce na schválenie',
	'UNAPPROVED_POST_TOTAL'			=> 'Celkom je tu <strong>1</strong> príspevok čakajúci na schválenie',
	'UNLOCK'						=> 'Odomknúť',
	'UNLOCK_POST'					=> 'Odomknúť príspevok',
	'UNLOCK_POST_EXPLAIN'			=> 'Povoliť editovanie',
	'UNLOCK_POST_POST'				=> 'Odomknúť príspevok',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Ste si istý, že chcete povoliť editovanie príspevku?',
	'UNLOCK_POST_POSTS'				=> 'Odomknúť vybrané príspevky',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Ste si istý, že chcete povoliť editovanie vybraných príspevkov?',
	'UNLOCK_TOPIC'					=> 'Odomknúť tému',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Ste si istý, že chcete odomknúť túto tému?',
	'UNLOCK_TOPICS'					=> 'Odomknúť vybrané témy',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Ste si istý, že chcete odomknúť všetky vybraté témy?',
	'USER_CANNOT_POST'				=> 'Nemôžete prispievať do tohto fóra',
	'USER_CANNOT_REPORT'			=> 'Nemôžete nahlásiť príspevok v tomto fóre',
	'USER_FEEDBACK_ADDED'			=> 'Odozva užívateľa pridaná',
	'USER_WARNING_ADDED'			=> 'Užívateľ bol úspešne varovaný',

	'VIEW_DETAILS'			=> 'Zobraziť detaily',
	'VIEW_PM'						=> 'Zobraziť súkromnú správu',
	'VIEW_POST'				=> 'Zobraziť príspevok',

	'WARNED_USERS'			=> 'Varovaní užívatelia',
	'WARNED_USERS_EXPLAIN'	=> 'Toto je zoznam užívateľov so starými varovaniami, ktoré im boli dané',
	'WARNING_PM_BODY'		=> 'Nasledujúca správa je varovanie, ktoré Vám bolo dané od administrátora alebo moderátora tejto webovej stránky.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Varovanie fóra vydané',
	'WARNING_POST_DEFAULT'	=> 'Toto je varovanie týkajúce sa odosielania: %s',
	'WARNINGS_ZERO_TOTAL'	=> 'Neexistujú žiadne varovania',

	'YOU_SELECTED_TOPIC'	=> 'Vybrali ste tému číslo %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Správa obsahuje odkaz na nelegálny alebo pirátsky software.',
			'SPAM'		=> 'Správa je napísana v zámere reklamy stránky alebo iného produktu.',
			'OFF_TOPIC'	=> 'Ohlásená správa je mimo témy.',
			'OTHER'		=> 'Ohlásená správa nezodpovedá do žiadnej kategórie, prosím, použite na to informačné pole.'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Príspevok obsahuje odkaz na nelegálny alebo kradnutý software',
			'SPAM'		=> 'Nahlásená správa mala za účel iba propagáciu webovej stránky alebo iného produktu',
			'OFF_TOPIC'	=> 'Nahlásený správa je off-topic',
			'OTHER'		=> 'Nahlásený správa sa nedá zaradiť do žiadnej z kategórií, využite pole pre ďalšie informácie'
		)
	),
));

?>