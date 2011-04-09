<?php
/**
*
* calendar [Slovak]
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

$lang = array_merge($lang, array(
	'ALL_DAY'				=> 'Zadanie bolo vytvorené',
	'AM'					=> 'Doobeda',
	'CALENDAR_TITLE'		=> 'Kalendár',
	'CALENDAR_NUMBER_ATTEND'=> 'Počet ľudí ktorých prinesiete do tejto udalosti',
	'CALENDAR_NUMBER_ATTEND_EXPLAIN'=> '(zadajte 1 pre seba)',
	'CALENDAR_RESPOND'		=> 'Prosím zapíš sa Áno, Nie, Možno',
	'CALENDAR_WILL_ATTEND'	=> 'Chcete sa zúčastniť tejto udalosti?',
	'COL_HEADCOUNT'			=> 'Počet',
	'COL_WILL_ATTEND'		=> 'Chcete sa Súčastniť?',
	'COMMENTS'				=> 'Komentár',
	'DAY'					=> 'Dnes',
	'DAY_OF'                => 'Prehľad denných udalosti<br/>',
	'DELETE_ALL_EVENTS'		=> 'Vymažem všetky výskyty z tejto udalosti.',
	'DETAILS'				=> 'Detaily',
	'EDIT'					=> 'Edit.',
	'EDIT_ALL_EVENTS'		=> 'Upraviť všetky výskyty tejto udalosti.',
	'EVENT_CREATED_BY'		=> 'Udalosť Pridal',
	'EVERYONE'				=> 'Pre Každého',
	'FROM_TIME'				=> 'Od',
	'HOW_MANY_PEOPLE'		=> 'Celkový počet ľudí',
	'INVALID_EVENT'			=> 'Udalosť, ktorú sa pokúšate zobraziť, neexistuje.',
	'INVITE_INFO'			=> 'Pozvaný',
	'OCCURS_EVERY'			=> 'Ukáže sa maximálne',
	'RECURRING_EVENT_CASE_1_STR'    => '%1$s Deň %4$s - maximálne %5$s Rok/y',
	'RECURRING_EVENT_CASE_2_STR'    => '%3$s %2$s of %4$s - maximálne %5$s Rok/y',
	'RECURRING_EVENT_CASE_3_STR'    => '%3$s %2$s  týždňa v %4$s - maximálne %5$s Rok/y',
	'RECURRING_EVENT_CASE_3b_STR'    => '%2$s prvéj čiasti týždňa v %4$s - maximálne %5$s Rok/y',
	'RECURRING_EVENT_CASE_4_STR'    => '%3$s od posledného %2$s of %4$s - maximálne %5$s Rok/y',
	'RECURRING_EVENT_CASE_5_STR'    => '%3$s od posledného %2$s  týždňa v %4$s - maximálne %5$s Rok/y',
	'RECURRING_EVENT_CASE_5b_STR'    => '%2$s posledný týždeň v %4$s - maximálne %5$s Rok/y',
	'RECURRING_EVENT_CASE_6_STR'    => '%1$s Day mesiaca - maximálne %5$s Mesiac/e',
	'RECURRING_EVENT_CASE_7_STR'    => '%3$s %2$s mesiaca - maximálne %5$s Mesiac/e',
	'RECURRING_EVENT_CASE_8_STR'    => '%3$s %2$s  týždňa mesiaca - maximálne %5$s Mesiac/e',
	'RECURRING_EVENT_CASE_8b_STR'    => '%2$s prvéj čiasti týždňa mesiaca - maximálne %5$s Mesiac/e',
	'RECURRING_EVENT_CASE_9_STR'    => '%3$s od posledného %2$s mesiaca - maximálne %5$s Mesiac/e',
	'RECURRING_EVENT_CASE_10_STR'    => '%3$s od posledného %2$s  týždňa mesiaca - maximálne %5$s Mesiac/e',
	'RECURRING_EVENT_CASE_10b_STR'    => '%2$s časť týždňa v mesiaci - maximálne %5$s Mesiac/e',
	'RECURRING_EVENT_CASE_11_STR'    => '%2$s - maximálne %5$s Týždeň(ne)',
	'RECURRING_EVENT_CASE_12_STR'    => 'Every %5$s  Deň/ní',
	'LOCAL_DATE_FORMAT'		=> '%1$s %2$s, %3$s',
	'MAYBE'					=> 'Možno',
	'MONTH'					=> 'Mesiac',
	'MONTH_OF'				=> 'Mesiac ',
	'MY_EVENTS'				=> 'Moje Udalosti',
	'NEW_EVENT'				=> 'Nová Udalosť',
	'NO_EVENTS_TODAY'		=> 'Na tento deň nie sú naplánované žiadne podujatia.',
	'PAGE_TITLE'			=> 'Kalendár',
	'PM'					=> 'Poobede',
	'PRIVATE_EVENT'			=> 'Táto akcia je súkromná. Musíte byť pozvaní a prihlásení ak si chcete pozrieť túto udalosť.',
	'TO_TIME'				=> 'Do',
	'UPCOMING_EVENTS'		=> 'Pripravované akcie',
	'USER_CANNOT_VIEW_EVENT'=> 'Nemáte povolenie na zobrazenie tejto udalosti.',
	'WATCH_CALENDAR_TURN_ON'	=> 'Sledovať kalendár',
	'WATCH_CALENDAR_TURN_OFF'	=> 'Zastaviť sledovanie kalendára',
	'WATCH_EVENT_TURN_ON'	=> 'Sledovať túto akciu',
	'WATCH_EVENT_TURN_OFF'	=> 'Zastaviť sledovanie tejto udalosti',
	'WEEK'					=> 'Týždeň',
	'WEEK_OF'				=> 'Týždeň ',
	'ZEROTH_FROM'			=> 'Od 0 ',
	
	// Portal XL additions
	'CAL_AM'				=> 'Doobeda',
	'CAL_PM'				=> 'Poobede',
    'VIEW_PREVIOUS_MONTH'   => 'Zobraziť predchádzajúci mesiac',
    'VIEW_NEXT_MONTH'       => 'Zobraziť budúci mesiac',
	'NO_EVENT'				=> 'Žiadna udalosť existuje.',
	
	'numbertext'			=> array(
		'0'		=> '0th',
		'1'		=> '1st',
		'2'		=> '2nd',
		'3'		=> '3rd',
		'4'		=> '4th',
		'5'		=> '5th',
		'6'		=> '6th',
		'7'		=> '7th',
		'8'		=> '8th',
		'9'		=> '9th',
		'10'	=> '10th',
		'11'	=> '11th',
		'12'	=> '12th',
		'13'	=> '13th',
		'14'	=> '14th',
		'15'	=> '15th',
		'16'	=> '16th',
		'17'	=> '17th',
		'18'	=> '18th',
		'19'	=> '19th',
		'20'	=> '20th',
		'21'	=> '21st',
		'22'	=> '22nd',
		'23'	=> '23rd',
		'24'	=> '24th',
		'25'	=> '25th',
		'26'	=> '26th',
		'27'	=> '27th',
		'28'	=> '28th',
		'29'	=> '29th',
		'30'	=> '30th',
		'31'	=> '31st',
		'n'		=> 'nth' ),
));

// Portal XL additions
$lang = array_merge($lang, array(
		'CAL_AM'            	=> 'Doobeda',
		'CAL_PM'            	=> 'Poobede',
    'VIEW_PREVIOUS_MONTH'   => 'Zobraziť predchádzajúci mesiac',
    'VIEW_NEXT_MONTH'       => 'Zobraziť budúci mesiac',
    'NO_EVENT'				=> 'Žiadna udalosť existuje.',
));

?>
