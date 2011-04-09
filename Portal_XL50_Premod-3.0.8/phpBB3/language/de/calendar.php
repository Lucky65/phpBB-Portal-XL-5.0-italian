<?php
/**
*
* calendar [German/Deutsch] german_translation JohnGF webmaster@flash-out.com/ thomas.d thomas@rhsmk.de
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ALL_DAY'				=> 'Ganzt&auml;giger Termin',
	'AM'					=> 'vormittags',	
	'CALENDAR_TITLE'		=> 'Kalender',
	'CALENDAR_NUMBER_ATTEND'=> 'Die Anzahl der Personen, die Du zum Meeting mitbringst',
	'CALENDAR_NUMBER_ATTEND_EXPLAIN'=> '(gebe 1 f&uuml;r Dich selber ein)',
	'CALENDAR_RESPOND'		=> 'Bitte registriere Dich hier',
	'CALENDAR_WILL_ATTEND'	=> 'Willst Du an diesem Event teilnehmen?',
	'COL_HEADCOUNT'			=> 'Anzahl',
	'COL_WILL_ATTEND'		=> 'Beobachten?',
	'COMMENTS'				=> 'Kommentare',
	'DAY'					=> 'Tag',
	'DAY_OF'				=> 'Tag ',	
	'DELETE_ALL_EVENTS'		=> 'Alle Vorkommen dieses Ereignisses l&ouml;schen.',
	'DETAILS'				=> 'Details',
	'EDIT'					=> 'Bearbeiten',
	'EDIT_ALL_EVENTS'		=> 'Alle Vorkommen dieses Ereignisses bearbeiten.',
	'EVENT_CREATED_BY'		=> 'Termin angelegt von',
	'EVERYONE'				=> 'Alle',
	'FROM_TIME'				=> 'Von',
	'HOW_MANY_PEOPLE'		=> 'Wieviele Personen',
	'INVALID_EVENT'			=> 'Der Termin den du ansehen m&ouml;chtest, exisiert nicht.',
	'INVITE_INFO'			=> 'Invited',
	'OCCURS_EVERY'			=> 'Kommt jeden',
	'RECURRING_EVENT_CASE_1_STR'    => '%1$s Tag vom %4$s - alle %5$s Jahr(e)',
	'RECURRING_EVENT_CASE_2_STR'    => '%3$s %2$s vom %4$s - alle %5$s Jahr(e)',
	'RECURRING_EVENT_CASE_3_STR'    => '%3$s %2$s der ganzen Wochen vom %4$s - alle %5$s Jahr(e)',
	'RECURRING_EVENT_CASE_3b_STR'    => '%2$s von der ersten Teilwoche vom %4$s - alle %5$s Jahr(e)',
	'RECURRING_EVENT_CASE_4_STR'    => '%3$s am letzten %2$s vom %4$s - alle %5$s Jahr(e)',
	'RECURRING_EVENT_CASE_5_STR'    => '%3$s am letzten %2$s der ganzen Wochen vom %4$s - alle %5$s Jahr(e)',
	'RECURRING_EVENT_CASE_5b_STR'    => '%2$s von der letzten Teilwoche vom %4$s - alle %5$s Jahr(e)',
	'RECURRING_EVENT_CASE_6_STR'    => '%1$s Tag des Monats - alle %5$s Jahr(e)',
	'RECURRING_EVENT_CASE_7_STR'    => '%3$s %2$s vom Monat - alle %5$s Monat(e)',
	'RECURRING_EVENT_CASE_8_STR'    => '%3$s %2$s von den vollen Wochen - alle %5$s Monat(e)',
	'RECURRING_EVENT_CASE_8b_STR'    => '%2$s von der ersten Teilwoche - alle %5$s Monat(e)',
	'RECURRING_EVENT_CASE_9_STR'    => '%3$s vom letzten %2$s vom Monat - alle %5$s Monat(e)',
	'RECURRING_EVENT_CASE_10_STR'    => '%3$s vom letzten %2$s von den vollen Wochen - alle %5$s Monat(e)',
	'RECURRING_EVENT_CASE_10b_STR'    => '%2$s von der letzten Teilwoche - alle %5$s Monat(e)',
	'RECURRING_EVENT_CASE_11_STR'    => '%2$s - alle %5$s Woche(n)',
	'RECURRING_EVENT_CASE_12_STR'    => 'Alle %5$s Tag(e)',
	'LOCAL_DATE_FORMAT'		=> '%1$s %2$s, %3$s',
	'MAYBE'					=> 'Vielleicht',
	'MONTH'					=> 'Monat',
	'MONTH_OF'				=> 'Monat ',
	'MY_EVENTS'				=> 'My Events',
	'NEW_EVENT'				=> 'Neuer Termin',
	'NO_EVENTS_TODAY'		=> 'Im Kalender stehen f&uuml;r heute keine Termine.',
	'PAGE_TITLE'			=> 'Kalender',
	'PM'					=> 'nachmittags',	
	'PRIVATE_EVENT'			=> 'Dieser Termin ist privat. Du musst eingeladen und angemeldet sein, um ihn anzusehen.',
	'TO_TIME'				=> 'bis',
	'UPCOMING_EVENTS'		=> 'Anstehende Termine',
	'USER_CANNOT_VIEW_EVENT'=> 'Du hast leider keine Berechtigung, diesen Termin anzusehen.',
	'USER_CANNOT_VIEW_EVENT'=> 'Du hast nicht ben&ouml;tigten Berechtigungen um dieses Event sehen zu k&ouml;nnen.',
	'WATCH_CALENDAR_TURN_ON'	=> 'Den Kalender beobachten',
	'WATCH_CALENDAR_TURN_OFF'	=> 'Den Kalender nicht mehr beobachten',
	'WATCH_EVENT_TURN_ON'	=> 'Das Event beobachten',
	'WATCH_EVENT_TURN_OFF'	=> 'Das Event nicht mehr beobachten',
	'WEEK'					=> 'Woche',
	'WEEK_OF'				=> 'Woche ',
	'ZEROTH_FROM'			=> '0. von ',
	// Portal XL additions
	'CAL_AM'				=> 'AM',
	'CAL_PM'				=> 'PM',
    'VIEW_PREVIOUS_MONTH'   => 'View previous month',
    'VIEW_NEXT_MONTH'       => 'View next month',
	'NO_EVENT'				=> 'No event does exist.',
	'numbertext'			=> array(
		'0'		=> '0.',
		'1'		=> '1.',
		'2'		=> '2.',
		'3'		=> '3.',
		'4'		=> '4.',
		'5'		=> '5.',
		'6'		=> '6.',
		'7'		=> '7.',
		'8'		=> '8.',
		'9'		=> '9.',
		'10'	=> '10.',
		'11'	=> '11.',
		'12'	=> '12.',
		'13'	=> '13.',
		'14'	=> '14.',
		'15'	=> '15.',
		'16'	=> '16.',
		'17'	=> '17.',
		'18'	=> '18.',
		'19'	=> '19.',
		'20'	=> '20.',
		'21'	=> '21.',
		'22'	=> '22.',
		'23'	=> '23.',
		'24'	=> '24.',
		'25'	=> '25.',
		'26'	=> '26.',
		'27'	=> '27.',
		'28'	=> '28.',
		'29'	=> '29.',
		'30'	=> '30.',
		'31'	=> '31.',
		'n'		=> 'n.' ),
));

// Portal XL additions
$lang = array_merge($lang, array(
		'CAL_AM'            	=> 'AM',
		'CAL_PM'            	=> 'PM',
		'VIEW_PREVIOUS_MONTH'   => 'Zeige letzten Monat',
		'VIEW_NEXT_MONTH'       => 'Zeige n&auml;chsten Monat',
		'NO_EVENT'            	=> 'Es existiert kein Event.',
));

?>