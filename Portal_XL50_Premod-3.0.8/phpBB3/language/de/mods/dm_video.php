<?php
/**
*
* dm_video [German]
*
* @package language
* @version $Id: dm_video.php 225 2009-12-22 13:52:33Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'DMV_ACTION'				=> 'Aktion',
	'DMV_ADD_VIDEO'				=> 'Ein neues Video hinzufügen',
	'DMV_ADDED'					=> 'Dein Video wurde erfolgreich hinzugefügt.<br />Allerdings wird es erst sichtbar, wenn es ein Administartor freigegeben hat.',
	'DMV_ADDED_ADMIN'			=> 'Dein Video wurde erfolgreich hinzugefügt.',
	'DMV_ALL_VIDEOS'			=> 'Zeige alle Videos',
	'DMV_ALL_VIDEOS_LIST'		=> 'Alle Videos',
	'DMV_ANNOUNCE_TITLE'		=> '[NEU] %1$s',
	'DMV_ANNOUNCE_MSG'			=> 'Hallo Zusammen,

es gibt ein neues Video!

Titel: <strong>%1$s</strong>
Author: <strong>%2$s</strong>
Länge: <strong>%3$s</strong>

<strong>Klicke %4$s, um dir das Video anzusehen!<strong>

Viel Spaß dabei!',
	'DMV_AUTHOR'				=> 'Eingestellt von',
	'DMV_BACK'					=> 'Zurück zur Übersicht',
	'DMV_BACK_LINK'				=> '<br /><br />Klicke %shier%s, um zur letzten Kategorie zurückzukehren',
	'DMV_BACK_LINK_COMMENT'		=> '<br /><br />Klicke %shier%s, um zu den Kommentaren des Videos zurückzukehren',
	'DMV_BACK_LINK2'			=> '<br /><br />Zurück zur letzten Kategorie',
	'DMV_BACK_LINK3'			=> '<br /><br />Klicke %shier%s, um zurückzukehren',
	'DMV_BACK_LINK4'			=> '<br /><br />Klicke %shier%s, um zum Index zurückzukehren',
	'DMV_BACK_VIDEO'			=> '%sZurück zur Video Übersicht%s',
	'DMV_CAT_NAME'				=> 'Kategorien',
	'DMV_CAT_NAME1'				=> 'Kategorie',
	'DMV_CLICK'					=> 'hier',
	'DMV_COMMENT'				=> 'Kommentare',
	'DMV_COMMENT_ADD'			=> 'Füge einen Kommentar zum Video hinzu',
	'DMV_COMMENT_ADDED'			=> 'Dein Kommentar wurde erfolgreich hinzugefügt',
	'DMV_COMMENT_DEL'			=> 'Kommentar löschen',
	'DMV_COMMENT_DEL_CONFIRM'	=> 'Bist du sicher, daß du deinen Kommentar löschen willst?',
	'DMV_COMMENT_DELETED'		=> 'Dein Kommentar wurde erfolgreich gelöscht',
	'DMV_COMMENT_EDIT'			=> 'Kommentar bearbeiten',
	'DMV_COMMENT_EDITED'		=> 'Dein Kommentar wurde erfolgreich aktualisiert',
	'DMV_COMMENT_EXPLAIN'		=> 'Hier kannst du einen Kommentar zu dem gesehenen Video abgeben. Bitte keine Romane!',
	'DMV_COMMENT_MULTI'			=> '%d Kommentare',
	'DMV_COMMENT_NEEDED'		=> 'Du musst schon einen Kommentar eingeben!',
	'DMV_COMMENT_NEW'			=> 'Neuer Kommentar',
	'DMV_COMMENT_NO_CC'			=> 'Noch keine Kommentare',
	'DMV_COMMENT_NONE'			=> 'Für dieses Video wurden noch keine Kommentare abgegeben.',
	'DMV_COMMENT_SHOW'			=> 'Die Kommentare für das Video %s',
	'DMV_COMMENT_SINGLE'		=> '1 Kommentar',
	'DMV_COPY_NOTE'				=> '<strong>Wichtiger Hinweis!</strong> Alle hier eingestellten Videos stammen von YouTube, MyVideo u.ä. Betreibern von Videoportalen. Das Copyright (Urheberrecht) liegt bei den jeweiligen Authoren bzw. deren Rechteinhabern. Sollte die Wiedergabe auf einer privaten Homepage wie der unseren untersagt sein, bitten wir um sofortige Mitteilung an <a href="mailto:%1$s">%2$s</a> mit einem entsprechenden Link, damit wir das Video aus unserer Liste entfernen können.',
	'DMV_COUNT'					=> 'Anzahl Videos',
	'DMV_DELETE_VIDEO'			=> 'Dein Video löschen',
	'DMV_DELETE_VIDEO_CONFIRM'	=> 'Bist du sicher, daß du dein Video löschen willst?',
	'DMV_DELETED_VIDEO'			=> 'Dein Video wurde erfolgreich gelöscht',
	'DMV_DURATION'				=> 'Dauer',
	'DMV_DURATION_EXPLAIN'		=> 'Gib hier die Dauer des Videos in folgendem Format ein: 5:00 min',
	'DMV_EDIT_VIDEO'			=> 'Dein Video bearbeiten',
	'DMV_EDITED'				=> 'Dein Video wurde erfolgreich aktualisiert',
	'DMV_FROM'					=> 'von',
	'DMV_HITS'					=> 'Die Top %s nach Ansichten',
	'DMV_IN'					=> 'in',
	'DMV_INDEX'					=> 'Index',
	'DMV_LAST_VIDEO'			=> 'Neuestes Video',
	'DMV_MOST_SEEN_VIDEOS'		=> 'Die beliebtesten Videos',
	'DMV_MULTI'					=> '%d Videos',
	'DMV_MULTI_VIEW'			=> 'Angesehen: <strong>%d</strong> mal',
	'DMV_NEED'					=> 'Felder mit (*) müssen ausgefüllt werden',
	'DMV_NEED_DATA'				=> 'Es müssen mindestens ein Titel und die URL eingegeben werden!',
	'DMV_NEED_TITLE'			=> 'Du musst einen Titel zum Video eingeben',
	'DMV_NEED_URL'				=> 'Du musst die URL zum Video eingeben!',
	'DMV_NEW_VIDEOS'			=> 'Es gibt neue ungeprüfte Videos. Klicke hier, um in dein ACP zu gelangen!',
	'DMV_NEW_VIDEOS_PM'			=> 'Hallo,<br /><br />es wurden neue Videos eingestellt, die du noch prüfen und freigeben musst.',
	'DMV_NEW_VIDEOS_PM_SUBJECT'	=> 'Es gibt neue ungeprüfte Videos!',	
	'DMV_NEWEST_VIDEOS'			=> 'Die neuesten Videos',
	'DMV_NO_CATS'				=> 'Keine Kategorien angelegt',
	'DMV_NO_OWN_VIDEOS'			=> 'Hat bisher keine Videos eingestellt',
	'DMV_NO_VIDEOS'				=> 'Keine Videos vorhanden',
	'DMV_NO_VIDEOS_IN_CAT'		=> 'In dieser Kategorie sind keine Videos vorhanden oder vorhandene Videos wurden noch nicht freigegeben.<br />Wenn die Kategrorie Unterkategorien hat, dann stelle dort in der passenden Kategorie dein neues Video rein!',
	'DMV_NOT_RELEASED'			=> 'Das letzte Video wurde noch nicht freigegeben!',
	'DMV_ON'					=> 'am',
	'DMV_OWN_MULTI'				=> 'Hat bisher <strong>%d</strong> Videos eingestellt',
	'DMV_OWN_SINGLE'			=> 'Hat bisher <strong>%d</strong> Video eingestellt',
	'DMV_OWN_VIDEO'				=> 'Videos eingestellt',
	'DMV_POST_VIDEO'			=> 'Neues Video in der aktuellen Kategorie einstellen',
	'DMV_POST_VIDEO_EXPLAIN'	=> 'Hier kannst du ein neues Video in der aktuellen Kategorie einstellen.<br />Fülle möglichst alle Felder aus (Titel und URL sind Pflicht!)',
	'DMV_RANDOM_VIDEO'			=> 'Zufälliges Video',
	'DMV_RANK'					=> 'Rang',
	'DMV_RATED_SUCCESSFUL'		=> '<strong>Deine Bewertung wurde erfolgreich hinzugefügt!</strong>',
	'DMV_RATES'					=> 'Die Top %s nach Bewertung',
	'DMV_RATING'				=> 'Bewerte das Video',
	'DMV_RATING_AVG'			=> 'Durchschnittlich',
	'DMV_RATING_BAD'			=> 'Schlecht',
	'DMV_RATING_GOOD'			=> 'Ganz gut',
	'DMV_RATING_GREAT'			=> 'Großartig',
	'DMV_RATING_LIST'			=> 'Bewertung',
	'DMV_RATING_NO'				=> 'Keine Bewertungen',
	'DMV_RATING_NOT_BAD'		=> 'Geht so',
	'DMV_RATING_NO_PERM'		=> 'Du darfst Videos nicht bewerten',
	'DMV_RATING_SELECT'			=> 'Bewertung auswählen',
	'DMV_RATING_SUM'			=> '%s Stimme mit %s Punkten bewertet',
	'DMV_RATING_SUMS'			=> '%s Stimmen und mit durchschnittlich %s Punkten bewertet',
	'DMV_RATING_TITLE'			=> 'Wähle deine Bewertung für %1$s von %2$s aus!',
	'DMV_RATING_VIDEO'			=> 'Deine Bewertung',
	'DMV_REPORT_VIDEO'			=> 'Melde ein defektes Video',
	'DMV_REPORTED_THANKS'		=> 'Vielen Dank, daß uns darüber informiert hast,<br />daß ein Video nicht funktioniert.',
	'DMV_REPORTED_VIDEOS'		=> 'Es gibt gemeldete Videos. Klicke hier, um in dein ACP zu gelangen!',
	'DMV_RETURN_MAIN'			=> 'Zurück zum Videomenü',
	'DMV_SEARCH'				=> 'Suche Video',
	'DMV_SEARCH_NO_RESULTS'		=> 'Leider konnten wir nichts mit deinem Suchbegriff finden.',
	'DMV_SEARCH_RESULTS'		=> 'Unten findest du die Ergebnisse deiner Suche nach <strong>%s</strong>',
	'DMV_SEARCH_RESULTS_HEADER'	=> 'Suchergebnisse',
	'DMV_SEARCH_STRING'			=> 'Gib hier den Suchbegriff ein',
	'DMV_SHOW_POPUP'			=> 'Video im PopUp Fenster ansehen',
	'DMV_SHOW_TOPTEN'			=> 'Zeige Top 10 Liste',
	'DMV_SHOW_VIDEO'			=> 'Du siehst gerade das Video',
	'DMV_SHOW_VIDEO_EXPLAIN'	=> 'Hier siehst du das gewünschte Video. Wenn der Einsteller einen Kommentar oder eine Beschreibung zum Video eingestellt hat, siehst du diesen auf der rechten Seite.',
	'DMV_SINGER'				=> 'Artist',
	'DMV_SINGER_EXPLAIN'		=> 'Gib hier den Namen des Artisten oder Sängers ein',
	'DMV_SINGLE'				=> '1 Video',
	'DMV_SINGLE_VIEW'			=> 'Angesehen: 1 mal',
	'DMV_SONGTEXT'				=> 'Beschreibung',
	'DMV_SONGTEXT_EXPLAIN'		=> 'Hier kannst du eine mehr oder weniger ausführlich Beschreibung deines Videos eingeben. Bitte <strong>keine</strong> Songtexte, da diese grundsätzlich dem Urheberrechtsschutz unterliegen! Der Text, den du hier eingibst erscheint dann rechts neben dem Video.',
	'DMV_SORT_ARTIST'			=> 'Künstler',
	'DMV_SORT_ASC'				=> 'Aufsteigend',
	'DMV_SORT_DATE'				=> 'Datum',
	'DMV_SORT_DESC'				=> 'Absteigend',
	'DMV_SORT_DIRECTION'		=> 'Sortierrichting',
	'DMV_SORT_FROMNAME'			=> 'eingestellt von',
	'DMV_SORT_KEYS'				=> 'Sortiere nach ',
	'DMV_SORT_RATING'			=> 'Bewertung',
	'DMV_SORT_TITLE'			=> 'Titel',
	'DMV_SORT_VIEWS'			=> 'Ansichten',
	'DMV_SUB_CAT'				=> 'Unterkategorie',
	'DMV_SUB_CATS'				=> 'Unterkategorien',
	'DMV_TITLE'					=> 'Titel',
	'DMV_TITLE_EXPLAIN'			=> 'Gib hier den Titel des Videos ein',
	'DMV_TOPTEN_HITS_EXPLAIN'	=> 'Hier siehst du die Top %s Videos gelistet nach der Anzahl der Ansichten',
	'DMV_TOPTEN_RATE_EXPLAIN'	=> 'Hier siehst du die Top %s Videos gelistet nach der Bewertung der Videos',
	'DMV_TOTAL_VIDEOS'			=> 'Videos insgesamt: %s',
	'DMV_URL'					=> 'URL zum Video',
	'DMV_URL_EXPLAIN'			=> 'Bitte gib hier den <strong>embedded Code</strong> (keinen direkten Link!) von YouTube, MyVideo oder anderen Video Providern ein. Bitte stelle sicher, daß das eingestellte Video nicht das Copyright des Authors verletzt! Solltest du ein eigenes Video haben, erstelle bei einem dieser Provider einen Account und platziere dein Video zuerst dort und füge dann hier wiederum den embbed Code dazu ein.',
	'DMV_VIDEO'					=> 'Videos',
	'DMV_VIDEO_COUNTER'			=> '%s Ansichten',
	'DMV_VIDEO_IMG'				=> 'Bild Link',
	'DMV_VIDEO_IMG_EXPLAIN'		=> 'Gib hier einen Link zu einem Bild zum Video ein. Die Größe des Bildes sollte 250 x 250px nicht überschreiten! Bitte stelle sicher, daß der Link verfügbar ist und bleibt! Und natürlich auch hier das Copyright beachten!',
	'DMV_VIDEO_RATES'			=> 'Bewertung',
	'DMV_VIDEO_VIEWS'			=> 'Angesehen',
	'DMV_VIEW_VIDEOS'			=> 'Schaut sich Videos an',

	// UMIL Installer strings
	'UMIL_DMV_INSERT_FIRST_FILL'		=> 'Die Tabllen der DM Video Modifikation wurden erfolgreich mit den Grundwerten befüllt.',
	'UMIL_DMV_REMOVE_CONFIG_ENTRIES'	=> 'Die Einträge in der Config Tabelle wurden erfolgreich entfernt',
	'UMIL_DMV_REMOVE_FORUM_ENTRIES'		=> 'Die Einträge in der Forums Tabelle wurden erfolgreich entfernt',
	'UMIL_DMV_NAME'						=> 'DM Video',
	'UMIL_DMV_NAME_EXPLAIN'				=> 'Diese Modifikation erlaubt es dir, deinen Benutzern eine Videoseite ala YouTube oder MyVideo zur Verfügung zu stellen.<br /><br />Wähle unten die gewünschte Aktion aus (die Voreinstellung ist normalerweise bereits richtig).<br /><br />Viel Spaß!',
	'UMIL_DMV_UPDATE_SUCCESFUL'			=> 'Die Tabellen wurden erfolgreich aktualisiert.',

	'ACP_DMV_DM_VIDEO'					=> 'DM Video',
	'ACP_DMV_CONFIG'					=> 'Konfiguration',
	'ACP_DMV_EDIT'						=> 'Videos bearbeiten',
	'ACP_DMV_MANAGE_CATEGORIES'			=> 'Kategorien',
	'ACP_DMV_RELEASE'					=> 'Videos freigeben',
	'ACP_DMV_REPORTED'					=> 'Gemeldete Videos',
));

?>