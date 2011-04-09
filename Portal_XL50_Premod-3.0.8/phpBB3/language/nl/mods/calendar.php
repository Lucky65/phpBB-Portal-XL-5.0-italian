<?php
/**
*
* calendar [English]
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
    '12_HOURS'                        		=> '12 uur',
    '24_HOURS'                        		=> '24 uur',
    'AUTO_POPULATE_EVENT_FREQUENCY'			=> 'Auto Populate Recurring Events',
    'AUTO_POPULATE_EVENT_FREQUENCY_EXPLAIN'	=> 'How often (in days) should recurring events be populated in the calendar?  Note if you select 0, recurring events will never get added to the calendar.',
    'AUTO_POPULATE_EVENT_LIMIT'				=> 'Auto Populate Limits',
    'AUTO_POPULATE_EVENT_LIMIT_EXPLAIN'		=> 'How many days in advance do you want to populated with recurring events?  In other words, do you want to only see recurring events in the calendar for 30, 45, or more days before the event?',
    'AUTO_PRUNE_EVENT_FREQUENCY'			=> 'Auto Prune Past Events',
    'AUTO_PRUNE_EVENT_FREQUENCY_EXPLAIN'	=> 'How often (in days) should past events be pruned from the calendar?  Note if you select 0, past events will never be auto-pruned, you will have to delete them by hand.',
    'AUTO_PRUNE_EVENT_LIMIT'            	=> 'Automatische Opschoon Limiet',
    'AUTO_PRUNE_EVENT_LIMIT_EXPLAIN'      	=> 'Hoeveel dagen na een afgelopen gebeurtenis wil je dat een gebeurtenis wordt toegevoegd aan de volgende automatische opruimings lijst?  Met andere woorden, wil je dat alle gebeurtenissen blijven staan op de kalender voor 0, 30, of 45 dagen na de gebeurtenis?',
    'CALENDAR_ETYPE_NAME'               	=> 'Gebeurtenis Type Naam',
    'CALENDAR_ETYPE_COLOR'               	=> 'Gebeurtenis Type Kleur',
    'CALENDAR_ETYPE_ICON'               	=> 'Gebeurtenis Type Icoon URL',
    'CALENDAR_SETTINGS_EXPLAIN'            	=> 'Wijzig de kalender instellingen hier.',
    'CHANGE_EVENTS_TO'                  	=> 'Wijzig alle gebeurtenis van dit type naar',
    'CLICK_PLUS_HOUR'						=> 'Move ALL events by one hour.',
    'CLICK_PLUS_HOUR_EXPLAIN'				=> 'Being able to move all events in the calendar +/- one hour helps when you reset the boards daylight savings time setting.  Note clicking on the links to move the events will loose any changes you have made above.  Please submit the form to save your work before moving the events +/- one hour.',
    'COLOR'                           		=> 'Kleur',
    'CREATE_EVENT_TYPE'                  	=> 'Maak nieuwe gebeurtenis type',
    'DATE_FORMAT'							=> 'Date Format',
    'DATE_FORMAT_EXPLAIN'					=> 'Try &quot;M d, Y&quot;',
    'DATE_TIME_FORMAT'						=> 'Date and Time Format',
    'DATE_TIME_FORMAT_EXPLAIN'				=> 'Try &quot;M d, Y h:i a&quot; or &quot;M d, Y H:i&quot;',
    'DELETE'                        		=> 'Verwijder',
    'DELETE_ALL_EVENTS'                  	=> 'Verwijder alle bestanden gebeurtenis van dit typen',
    'DELETE_ETYPE'                     		=> 'Verwijder Gebeurtenis Type',
    'DELETE_ETYPE_EXPLAIN'               	=> 'Weet je het zeker dat je deze gebeurtenis type wilt verwijderen?',
    'DELETE_LAST_EVENT_TYPE'            	=> 'Waarschuwing: dit is de laatste gebeurtenis type.',
    'DELETE_LAST_EVENT_TYPE_EXPLAIN'      	=> 'Het verwijderen van deze gebeurtenis type zal alle gebeurtenissen verwijderen van je kalender. Het plaatsen van nieuwe gebeurtenissen zal uitgeschakeld worden tot er weer een nieuwe gebeurtenis type is gemaakt.',
    'DISPLAY_12_OR_24_HOURS'            	=> 'Toon Tijd Formaat',
    'DISPLAY_12_OR_24_HOURS_EXPLAIN'		=> 'Do you want to display the times in 12 hour mode with AM/PM or 24 hour mode?  This does not effect what format the times are displayed to the user - that is set in their profile.  This only effects the pulldown menu for time selection when creating/editing events and the timed headings on the view day calendar.',
    'DISPLAY_HIDDEN_GROUPS'					=> 'Laat verborgen groepen zien',
    'DISPLAY_HIDDEN_GROUPS_EXPLAIN'			=> 'Wil je dat gebruikers de mogelijkheid hebben om leden van verborgen groepen te inviteren? Als deze instelling niet is ingeschakeld kunnen alleen groepsbeheerders dit doen of de andere leden zien.',
    'DISPLAY_NAME'                     		=> 'Toon Naam (mag leeg zijn)',
    'DISPLAY_EVENTS_ONLY_1_DAY'				=> 'Display Events 1 Day',
    'DISPLAY_EVENTS_ONLY_1_DAY_EXPLAIN'		=> 'Display events only on the day they begin (ignore their end date/time).',
    'DISPLAY_FIRST_WEEK'               		=> 'Toon Deze Week',
    'DISPLAY_FIRST_WEEK_EXPLAIN'         	=> 'Wil je deze week getoond hebben op je forumoverzicht?',
    'DISPLAY_NEXT_EVENTS'               	=> 'Toon volgende gebeurtenis',
    'DISPLAY_NEXT_EVENTS_EXPLAIN'         	=> 'Stel het aantal in van de aankomende gebeurtenissen die getoond moeten worden op het forumoverzicht. Let op: deze optie wordt genegeerd als je ervoor hebt gekozen om de week kalender te tonen op het forumoverzicht.',
    'DISPLAY_TRUNCATED_SUBJECT'            	=> 'Verkort Onderwerp',
    'DISPLAY_TRUNCATED_SUBJECT_EXPLAIN'     => 'Lange namen in het onderwerp kunnen veel ruimte in nemen op de kalender. Hoeveel tekens wil je tonen in de titel op de kalender? (typ 0 als je niet wil dat titels ingekort worden)',
    'EDIT'                           		=> 'Wijzig',
    'EDIT_ETYPE'                     		=> 'Wijzig Gebeurtenis Type',
    'EDIT_ETYPE_EXPLAIN'               		=> 'Stel in op welke manier je deze gebeurtenis type wilt tonen.',
    'FIRST_DAY'                        		=> 'Eerste Dag',
    'FIRST_DAY_EXPLAIN'                  	=> 'Welke dag moet getoond worden als de eerste dag van een week?',
    'FULL_NAME'								=> 'Full Name',
    'FRIDAY'                        		=> 'Vrijdag',
    'ICON_URL'                        		=> 'URL voor een icoon',
    'MANAGE_ETYPES'                     	=> 'Beheer gebeurtenis Types',
    'MANAGE_ETYPES_EXPLAIN'               	=> 'Gebeurtenis types worden gebruikt om de kalender meer te organiseren, je kan hier gebeurtenis types toevoegen, wijzigen en verwijderen.',
    'MINUS_HOUR'							=> 'Move all events minus (-) one hour',
    'MONDAY'                        		=> 'Maandag',
    'NO_EVENT_TYPE_ERROR'               	=> 'Het is mislukt om de opgegeven gebeurtenis type te vinden.',
    'PLUS_HOUR'								=> 'Move all events plus (+) one hour',
    'PLUS_HOUR_CONFIRM'						=> 'Are you sure you want to move all the events by %1$s hour?',
    'PLUS_HOUR_SUCCESS'						=> 'Successfully moved all events by %1$s hour.',
    'SATURDAY'                        		=> 'Zaterdag',
    'SUNDAY'                        		=> 'Zondag',
    'TIME_FORMAT'							=> 'Time Format',
    'TIME_FORMAT_EXPLAIN'					=> 'Try &quot;h:i a&quot; or &quot;H:i&quot;',
    'THURSDAY'                        		=> 'Donderdag',
    'TUESDAY'                        		=> 'Dinsdag',
    'USER_CANNOT_MANAGE_CALENDAR'         	=> 'Je heb niet de juiste permissies om de kalender instellingen of gebeurtenis types te wijzigen.',
    'WEDNESDAY'                        		=> 'Woensdag',

));

?>
