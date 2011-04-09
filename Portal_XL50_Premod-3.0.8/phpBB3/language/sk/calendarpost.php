<?php
/**
*
* calendarpost [Slovak]
*
* @author alightner
*
* @package phpBB Calendar
* @version CVS/SVN: $Id: $
* @copyright (c) 2009 alightner
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
//
// Some characters you may want to copy&paste:

$lang = array_merge($lang, array(
	'ALL_DAY'					=> 'Všetky Udalosti Dňa',
	'ALLOW_GUESTS'				=> 'Umožním členom priniesť si hosťa do tejto udalosti',
	'ALLOW_GUESTS_ON'			=> 'Členovia budú mať povolené priniesť si hosťa do tejto udalosti.',
	'ALLOW_GUESTS_OFF'			=> 'Členovia nemajú povolené priniesť si hosťa do tejto udalosti.',
	'AM'						=> 'Poobede',
	'CALENDAR_POST_EVENT'		=> 'Vytvoriť Novú Udalosť',
	'CALENDAR_EDIT_EVENT'		=> 'Upravenie Udalosti',
	'CALENDAR_TITLE'			=> 'Kalendár',
	'DELETE_EVENT'				=> 'Vymazať udalosť',
	'DELETE_ALL_EVENTS'			=> 'Vymazať všetky výskyty z tejto udalosti',
	'EMPTY_EVENT_MESSAGE'		=> 'Musíte zadať správu ak chcete odoslať udalosť.',
	'EMPTY_EVENT_SUBJECT'		=> 'Musíte zadať námet ak chcete odoslať udalosť.',
	'END_DATE'					=> 'Dátum Ukončenia',
	'END_RECURRING_EVENT_DATE'	=> 'Kedy bude táto udalosť ukončená?',
	'END_TIME'					=> 'Čas Ukončenia',
	'EVENT_ACCESS_LEVEL'			=> 'Kdo môže vidieť túto udalosť?',
	'EVENT_ACCESS_LEVEL_GROUP'		=> 'Skupina',
	'EVENT_ACCESS_LEVEL_PERSONAL'	=> 'Osobný',
	'EVENT_ACCESS_LEVEL_PUBLIC'		=> 'Verejný',
	'EVENT_CREATED_BY'			=> 'Udalosť odoslal p',
	'EVENT_DELETED'				=> 'Táto udalosť bola úspešne vymazaná.',
	'EVENT_EDITED'				=> 'Táto udalosť bola úspešne upravená.',
	'EVENT_GROUP'				=> 'Ktorá skupina môže vidieť túto udalosť?',
	'EVENT_STORED'				=> 'Táto udalosť bola úspešne vytvorená.',
	'EVENT_TYPE'				=> 'Typ Udalosti',
	'EVERYONE'					=> 'Pre Každého',
	'FREQUENCEY_LESS_THAN_1'	=> 'Opakujúce sa udalosti musia mať frekvenciu vyššiu ako 1',
	'FROM_TIME'					=> 'Od',
	'INVITE_INFO'				=> 'Pozvaný',
	'LOGIN_EXPLAIN_POST_EVENT'	=> 'Musíte byť prihlásený ak chcete prídať, upraviť alebo vymazať udalosť.',
	'MESSAGE_BODY_EXPLAIN'		=> 'Zadajte vašu správu, ale nesmie obsahovať najviac ako <strong>%d</strong> znakov.',
	'NEGATIVE_LENGTH_EVENT'		=> 'Udalosť neviem ukončiť predtým, ako sa pustí.',
	'NEVER'						=> 'Nikdy',
	'NEW_EVENT'					=> 'Nová Udalosť',
	'NO_EVENT'					=> 'Požadovaná udalosť už neexistuje.',
	'NO_EVENT_TYPES'			=> 'Administrátor stránky nenastavil žiadne typy udalostí pre tento kalendár. Alebo vytvorený kalendár udalostí bol deaktivovaný.',
	'NO_GROUP_SELECTED'			=> 'Nie sú vybrané žiadne udalosti pre túto skupinu.',
	'NO_POST_EVENT_MODE'		=> 'Nie je tu žiadny typ príspevku.',
	'PM'						=> 'Doobeda',
	'RECURRING_EVENT'			=> 'Opakujúce sa udalosti',
	'RECURRING_EVENT_TYPE'		=> 'Ako by sa mala táto udalosť praktizovať?',
	'RECURRING_EVENT_TYPE_EXPLAIN'	=> 'Tip: Začínajú písmeno je označenie ich frekvencie: A - Ročne, M - Mesačne, W - Týždenne, D - Denne',
	'RECURRING_EVENT_FREQ'		=> 'Ako často by sa táto udalosť mala ukázať?',
	'RECURRING_EVENT_FREQ_EXPLAIN'	=> 'Táto hodnota predstavuje vo voľbe vyššie [Y]',
	'RECURRING_EVENT_CASE_1'    => 'A: [Xth] Dní [Month Name] maximálne [Y] Rok/y',
	'RECURRING_EVENT_CASE_2'    => 'A: [Xth] [Weekday Name]  [Month Name] maximálne [Y] Rok/y',
	'RECURRING_EVENT_CASE_3'    => 'A: [Xth] [Weekday Name]  týždňa v [Month Name] maximálne [Y] Rok/y',
	'RECURRING_EVENT_CASE_4'    => 'A: [Xth] od posledného [Weekday Name]  [Month Name] maximálne [Y] Rok/y',
	'RECURRING_EVENT_CASE_5'    => 'A: [Xth] od posledného [Weekday Name]  týždňa v [Month Name] maximálne [Y] Rok/y',
	'RECURRING_EVENT_CASE_6'    => 'M: [Xth] Day mesiaca maximálne [Y] Mesiac/e',
	'RECURRING_EVENT_CASE_7'    => 'M: [Xth] [Weekday Name] mesiaca maximálne [Y] Mesiac/e',
	'RECURRING_EVENT_CASE_8'    => 'M: [Xth] [Weekday Name]  týždňa mesiaca maximálne [Y] Mesiac/e',
	'RECURRING_EVENT_CASE_9'    => 'M: [Xth] od posledného [Weekday Name] mesiaca maximálne [Y] Mesiac/e',
	'RECURRING_EVENT_CASE_10'    => 'M: [Xth] od posledného [Weekday Name]  týždňa mesiaca maximálne [Y] Mesiac/e',
	'RECURRING_EVENT_CASE_11'    => 'W: [Weekday Name] maximálne [Y] Týždeň(ne)',
	'RECURRING_EVENT_CASE_12'    => 'D: Maximáne [Y] Deň/ní',

	'RETURN_CALENDAR'			=> '%sVrátim sa späť do kalendára%s',
	'START_DATE'				=> 'Dátum Spustenia',
	'START_TIME'				=> 'Čas Spustenia',
	'TO_TIME'					=> 'Do',
	'TRACK_RSVPS'				=> 'Návštevnosť',
	'TRACK_RSVPS_ON'			=> 'Prezencia sledovania je povolená.',
	'TRACK_RSVPS_OFF'			=> 'Prezencia sledovania nie je povolená.',
	'USER_CANNOT_DELETE_EVENT'	=> 'Nemáte oprávnenie na vymazanie tejto udalostí.',
	'USER_CANNOT_EDIT_EVENT'	=> 'Nemáte oprávnenie na upravovanie udalostí.',
	'USER_CANNOT_POST_EVENT'	=> 'Nemáte oprávnenie na vytvorenie udalostí.',
	'USER_CANNOT_VIEW_EVENT'	=> 'Nemáte oprávnenie pre zobrazenie tejto udalostí.',
	'VIEW_EVENT'				=> '%sZobrazím vašu predloženú udalosť%s',
	'WEEK'						=> 'Týždeň',
	'ZERO_LENGTH_EVENT'			=> 'Udalosť nemôžem ukončiť súčasne ako sa spúšťa.',

));

?>
