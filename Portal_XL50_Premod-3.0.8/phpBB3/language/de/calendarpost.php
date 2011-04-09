<?php
/**
*
* calendarpost [German/Deutsch] german_translation thomas.d thomas@rhsmk.de
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
	'ALL_DAY'					=> 'Ganzt&auml;giger Termin',
	'ALLOW_GUESTS'				=> 'Erlaube Mitgliedern G&auml;ste zu diesem Event mitzubringen',
	'ALLOW_GUESTS_ON'			=> 'Mitglieder k&ouml;nnen G&auml;ste zu diesem Event mitbringen.',
	'ALLOW_GUESTS_OFF'			=> 'Mitglieder d&uuml;rfen keine G&auml;ste zu diesem Event mitbringen.',
	'AM'						=> 'AM',	
	'CALENDAR_POST_EVENT'		=> 'Neuer Termin',
	'CALENDAR_EDIT_EVENT'		=> 'Termin bearbeiten',
	'CALENDAR_TITLE'			=> 'Kalender',
	'DELETE_EVENT'				=> 'Termin l&ouml;schen',
	'DELETE_ALL_EVENTS'			=> 'Alle Vorkommnisse dieses Events l&ouml;schen',
	'EMPTY_EVENT_MESSAGE'		=> 'Du musst einen Text eingeben, wenn du einen Termin anlegst.',
	'EMPTY_EVENT_SUBJECT'		=> 'Du musst einen Betreff eingeben, wenn du einen Termin anlegst.',
	'END_DATE'					=> 'Ende Datum',
	'END_RECURRING_EVENT_DATE'	=> 'Wann wird dieses Event enden?',
	'END_TIME'					=> 'Terminende',
	'EVENT_ACCESS_LEVEL'			=> 'Wer darf diesen Termin sehen?',
	'EVENT_ACCESS_LEVEL_GROUP'		=> 'Gruppe',
	'EVENT_ACCESS_LEVEL_PERSONAL'	=> 'Privat',
	'EVENT_ACCESS_LEVEL_PUBLIC'		=> '&Ouml;ffentlich',
	'EVENT_CREATED_BY'			=> 'Termin angelegt von',
	'EVENT_DELETED'				=> 'Der Termin wurde gel&ouml;scht.',
	'EVENT_EDITED'				=> 'Der Termin wurde ge&auml;ndert.',
	'EVENT_GROUP'				=> 'Welche Gruppe darf diesen Termin sehen?',
	'EVENT_STORED'				=> 'Der Termin wurde angelegt.',
	'EVENT_TYPE'				=> 'Termin-Typ',
	'EVERYONE'					=> 'Alle',
	'FREQUENCEY_LESS_THAN_1'	=> 'Wiederkehrende Ereignisse m&uuml;ssen eine Frequenz gr&ouml;sser/gleich 1 haben',
	'FROM_TIME'					=> 'Von',
	'INVITE_INFO'				=> 'Eingeladen',
	'LOGIN_EXPLAIN_POST_EVENT'	=> 'Du musst angemeldet sein, um Termine hinzuzuf&uuml;gen, zu bearbeiten oder zu l&ouml;schen.',
	'MESSAGE_BODY_EXPLAIN'		=> 'Text hier eingeben, nicht mehr als <strong>%d</strong> Zeichen.',
	'NEGATIVE_LENGTH_EVENT'		=> 'Der Termin kann nicht enden bevor er begonnen hat!',
	'NEVER'						=> 'Niemals',
	'NEW_EVENT'					=> 'Neuer Termin',
	'NO_EVENT'					=> 'Der Termin existiert nicht!',
	'NO_EVENT_TYPES'			=> 'Der Admin hat noch keine Termin-Typen erstellt, es k&ouml;nnen noch keine Termine angelegt werden.',
	'NO_GROUP_SELECTED'			=> 'Es wurden keine Gruppen f&uuml;r dieses Event ausgew&auml;hlt.',
	'NO_POST_EVENT_MODE'		=> 'Keine Post-Methode angelegt.',
	'PM'						=> 'PM',
	'RECURRING_EVENT'			=> 'Wiederkehrendes Event',
	'RECURRING_EVENT_TYPE'		=> 'Wie soll das n&auml;chste Event berechnet werden?',
	'RECURRING_EVENT_TYPE_EXPLAIN'	=> 'Tipp: Die Auswahl beginnt mit einem Buchstaben welche den Abstand ausdr&uuml;ckt: J - J&auml;hrlich, M - Monatlich, W - W&ouml;chentlich, T - Jeden Tag',
	'RECURRING_EVENT_FREQ'		=> 'Wie oft soll dieses Event stattfinden?',
	'RECURRING_EVENT_FREQ_EXPLAIN'	=> 'Dieser Wert representiert [J] in der Auswahl von oben',
	'RECURRING_EVENT_CASE_1'    => 'J: [Xten] Tag vom [Monatsname] alle [J] Jahr(e)',
	'RECURRING_EVENT_CASE_2'    => 'J: [Xten] [Wochenendname] vom [Monatsname] alle [J] Jahr(e)',
	'RECURRING_EVENT_CASE_3'    => 'J: [Xten] [Wochenendname] von den ganzen Wochen im [Monatsname] alle [J] Jahr(e)',
	'RECURRING_EVENT_CASE_4'    => 'J: [Xten] vom letzten [Wochenendname] vom [Monatsname] alle [J] Jahr(e)',
	'RECURRING_EVENT_CASE_5'    => 'J: [Xten] vom letzten [Wochenendname] von den ganzen Wochen im [Monatsname] alle [J] Jahr(e)',
	'RECURRING_EVENT_CASE_6'    => 'M: [Xten] Tag vom Monat, alle [J] Monat(e)',
	'RECURRING_EVENT_CASE_7'    => 'M: [Xten] [Wochenendname] vom Monat alle [J] Monat(e)',
	'RECURRING_EVENT_CASE_8'    => 'M: [Xten] [Wochenendname] von den ganzen Wochen im Monat alle [J] Monat(e)',
	'RECURRING_EVENT_CASE_9'    => 'M: [Xten] vom letzten [Wochenendname] im Monat alle [J] Monat(e)',
	'RECURRING_EVENT_CASE_10'    => 'M: [Xten] vom letzten [Wochenendname] von den ganzen Wochen im Monat alle [J] Monat(e)',
	'RECURRING_EVENT_CASE_11'    => 'W: [Wochenendname] alle [J] Woche(n)',
	'RECURRING_EVENT_CASE_12'    => 'T: alle [J] Tag(e)',
	'RETURN_CALENDAR'			=> '%sZur&uuml;ck zum Kalender%s',
	'START_DATE'				=> 'Beginn Datum',
	'START_TIME'				=> 'Beginn Zeit',
	'TO_TIME'					=> 'Bis',
	'TRACK_RSVPS'				=> 'Teilnahme',
	'TRACK_RSVPS_ON'			=> 'Teilnahmefunktion ist aktiviert.',
	'TRACK_RSVPS_OFF'			=> 'Teilnahmefunktion ist deaktiviert.',
	'USER_CANNOT_DELETE_EVENT'	=> 'Du hast leider keine Berechtigung, Termine zu l&ouml;schen.',
	'USER_CANNOT_EDIT_EVENT'	=> 'Du hast leider keine Berechtigung, Termine zu bearbeiten.',
	'USER_CANNOT_POST_EVENT'	=> 'Du hast leider keine Berechtigung, Termine anzulegen.',
	'USER_CANNOT_VIEW_EVENT'	=> 'Du hast leider keine Berechtigung, Termine anzusehen',
	'VIEW_EVENT'				=> '%sAngelegten Termin ansehen%s',
	'WEEK'						=> 'Woche',
	'ZERO_LENGTH_EVENT'			=> 'Ein Termin kann nicht zur gleichen Zeit beginnen und enden!',

));

?>
