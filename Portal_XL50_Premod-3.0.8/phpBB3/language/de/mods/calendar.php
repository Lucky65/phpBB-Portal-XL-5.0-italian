<?php
/**
*
* calendar [German/Deutsch] german_translation thomas.d thomas@rhsmk.de
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
    '12_HOURS'								=> '12 Stunden',
    '24_HOURS'								=> '24 Stunden',
    'AUTO_POPULATE_EVENT_FREQUENCY'			=> 'Automatisch wiederkehrende Events',
    'AUTO_POPULATE_EVENT_FREQUENCY_EXPLAIN'	=> 'Wie oft (in Tagen) sollten die wiederkehrenden Events im Kalender angezeigt werden? Bemerke wenn du dies auf 0 setzt, werden die wiederkehrenden Events im Kalender gar nicht angezeigt.',
    'AUTO_POPULATE_EVENT_LIMIT'				=> 'Automatisches Anzeigelimit',
    'AUTO_POPULATE_EVENT_LIMIT_EXPLAIN'		=> 'Wie lange im vorhinein willst du die wiederkehrenden Events anzeigen lassen? In anderen Worten, willst du die wiederkehrenden Events 30, 45 Tage oder noch fr&uuml;her im Kalender anzeigen lassen?',
    'AUTO_PRUNE_EVENT_FREQUENCY'			=> 'Automatisches L&ouml;schen alter Termine',
    'AUTO_PRUNE_EVENT_FREQUENCY_EXPLAIN'	=> 'Wie h&auml;ufig (in Tagen) sollen alte Termine vom Kalender gel&ouml;scht werden? Wenn du 0 w&auml;hlst, werden alte Termine nicht gel&ouml;scht, du musst sie manuell entfernen.',
    'AUTO_PRUNE_EVENT_LIMIT'				=> 'Begrenzung automatisches L&ouml;schen',
    'AUTO_PRUNE_EVENT_LIMIT_EXPLAIN'		=> 'Nach wie vielen Tagen soll der Termin der L&ouml;schliste hinzugef&uuml;gt werden? Z.B., sollen alle Termine 0, 30 oder 45 Tage erhalten bleiben?',
    'CALENDAR_ETYPE_NAME'					=> 'Name Termin-Typ',
    'CALENDAR_ETYPE_COLOR'					=> 'Farbe Termin-Typ',
    'CALENDAR_ETYPE_ICON'					=> 'Icon URL Termin-Typ',
    'CALENDAR_SETTINGS_EXPLAIN'				=> 'Kalender-Einstellungen',
    'CHANGE_EVENTS_TO'						=> '&Auml;ndere alle Termine dieses Typs zu',
    'CLICK_PLUS_HOUR'						=> 'Verschiebe ALLE Events um eine Stunde.',
    'CLICK_PLUS_HOUR_EXPLAIN'				=> 'Es ist dir m&ouml;glich alle Events im Kalender um +/- eine Stunde zu verschieben, dies ist hilfreich wenn du die Tageslicht Zeiteinstellungen zur&uuml;cksetzen willst. Achtung! Wenn du auf einen Link um das Event zu verschieben klickst, gehen alle &Auml;nderungen die du oben durchgef&uuml;hrt hast verloren. Bitte sende deine &Auml;nderungen bevor du das Event um +/- eine Stunde verschiebst.',
    'COLOR'									=> 'Farbe',
    'CREATE_EVENT_TYPE'						=> 'Neuer Termin-Typ',
    'DATE_FORMAT'							=> 'Datumsformat',
    'DATE_FORMAT_EXPLAIN'					=> 'Probiere &quot;M d, Y&quot;',
    'DATE_TIME_FORMAT'						=> 'Datums- und Zeitformat',
    'DATE_TIME_FORMAT_EXPLAIN'				=> 'Probiere &quot;M d, Y h:i a&quot; oder &quot;M d, Y H:i&quot;',
    'DELETE'								=> 'L&ouml;schen',
    'DELETE_ALL_EVENTS'						=> 'L&ouml;sche alle Termine dieses Typs',
    'DELETE_ETYPE'							=> 'L&ouml;sche Termin-Typ',
    'DELETE_ETYPE_EXPLAIN'					=> 'Sicher, dass du diesen Termin-Typ l&ouml;schen willst?',
    'DELETE_LAST_EVENT_TYPE'				=> 'Warnung: Das ist der letzte Termin-Typ!',
    'DELETE_LAST_EVENT_TYPE_EXPLAIN'		=> 'Wenn dieser Termin-Typ gel&ouml;scht wird, gibt es keinen Termin mehr! Erst wenn ein neuer Termin-Typ angelegt wurde, k&ouml;nnen wieder Termine eingetragen werden.',
    'DISPLAY_12_OR_24_HOURS'				=> 'Anzeige Zeit-Format',
    'DISPLAY_12_OR_24_HOURS_EXPLAIN'		=> 'Sollen die Zeiten im 12-Stunden-Format mit AM/PM oder im 24-Stunden-Format angezeigt werden? Dies betrifft nicht die Anzeige beim Benutzer - diese wird in deren Profil eingestellt. Dies betrifft nur die Pulldown-Menus der Zeiten-Auswahl beim Anlegen/Bearbeiten von Terminen und Zeit-Felder bei der Tagesansicht.',
    'DISPLAY_HIDDEN_GROUPS'					=> 'Zeige versteckte Gruppen',
    'DISPLAY_HIDDEN_GROUPS_EXPLAIN'			=> 'Sollen Benutzer versteckte Benutzergruppen sehen und zu Terminen einladen k&ouml;nnen? Wenn diese Option deaktiviert ist, k&ouml;nnen nur (Gruppen-)Administratoren Mitglieder versteckter Gruppen sehen bzw. zu Terminen einladen.',
	'DISPLAY_NAME'							=> 'Angezeigter Name (kann LEER sein)',
    'DISPLAY_EVENTS_ONLY_1_DAY'				=> 'Zeige Events nur 1 Tag',
    'DISPLAY_EVENTS_ONLY_1_DAY_EXPLAIN'		=> 'Zeige Events nur an dem Tag an dem es stattfindet (ignoriere Ende).',
    'DISPLAY_FIRST_WEEK'					=> 'Zeige aktuelle Woche',
    'DISPLAY_FIRST_WEEK_EXPLAIN'			=> 'Soll die aktuelle Woche auf dem Forum-Index angezeigt werden?',
    'DISPLAY_NEXT_EVENTS'					=> 'Zeige die n&auml;chsten Termine',
    'DISPLAY_NEXT_EVENTS_EXPLAIN'			=> 'Wieviele Termine sollen auf dem Index angezeigt werden? Diese Option wird ignoriert, wenn die Anzeige der aktuellen Woche aktiviert ist.',
    'DISPLAY_TRUNCATED_SUBJECT'				=> 'Betreff abk&uuml;rzen',
    'DISPLAY_TRUNCATED_SUBJECT_EXPLAIN'		=> 'Lange Bezeichnungen im Betreff ben&ouml;tigen viel Platz im Kalender. Wie viele Zeichen sollen im Betreff des Termins angezeigt werden? (0 eingeben, wenn die Anzahl nicht beschr&auml;nkt werden soll)',
    'EDIT'									=> 'Bearbeiten',
    'EDIT_ETYPE'							=> 'Termin-Typ bearbeiten',
    'EDIT_ETYPE_EXPLAIN'					=> 'W&auml;hle aus, wie dieser Termin-Typ angezeigt wird',
    'FIRST_DAY'								=> 'Erster Tag',
    'FIRST_DAY_EXPLAIN'						=> 'Welcher Tag ist der erste Wochentag?',
    'FULL_NAME'								=> 'Voller Name',
    'FRIDAY'								=> 'Freitag',
    'ICON_URL'								=> 'URL f&uuml;r Icon',
    'MANAGE_ETYPES'							=> 'Verwaltung Termin-Typen',
    'MANAGE_ETYPES_EXPLAIN'					=> 'Termin-Typen helfen den Kalender zu organisieren. Du kannst hier Termin-Typen hinzuf&uuml;gen, bearbeiten oder l&ouml;schen.',
    'MINUS_HOUR'							=> 'Move all events minus (-) one hour',
    'MONDAY'								=> 'Montag',
    'NO_EVENT_TYPE_ERROR'					=> 'Termin-Typ nicht gefunden',
    'PLUS_HOUR'								=> 'Verschiebe alle Events um Plus (+) eine Stunde',
    'PLUS_HOUR_CONFIRM'						=> 'Bist du sicher, dass du alle Events um %1$s Stunden verschieben willst?',
    'PLUS_HOUR_SUCCESS'						=> 'Alle Events erfolgreich um %1$s Stunden verschoben.',
    'SATURDAY'								=> 'Samstag',
    'SUNDAY'								=> 'Sonntag',
    'TIME_FORMAT'							=> 'Zeitformat',
    'TIME_FORMAT_EXPLAIN'					=> 'Try &quot;h:i a&quot; or &quot;H:i&quot;',
    'THURSDAY'								=> 'Donnerstag',
    'TUESDAY'								=> 'Dienstag',
    'USER_CANNOT_MANAGE_CALENDAR'			=> 'Du hast leider keine Berechtigung, die Kalender-Einstellungen oder Termin-Typen zu verwalten',
    'WEDNESDAY'								=> 'Mittwoch',

));

?>
