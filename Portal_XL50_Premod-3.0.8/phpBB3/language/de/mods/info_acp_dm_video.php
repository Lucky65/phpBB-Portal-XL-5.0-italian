<?php
/**
*
* info_acp_dm_video [German]
*
* @package language
* @version $Id: info_acp_dm_video.php 207 2009-12-17 12:22:54Z femu $
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
	'ACP_DMV_CONFIG'				=> 'Konfiguration',
	'ACP_DMV_CONFIG_EXPLAIN'		=> 'Hier kannst du einige Grundeinstellungen für dein DM Video vornehmen',
	'ACP_DMV_DM_VIDEO'				=> 'DM Video',
	'ACP_DMV_DM_VIDEO_CAT'			=> 'DM Video Kategorien',
	'ACP_DMV_EDIT'					=> 'Videos bearbeiten',
	'ACP_DMV_EDIT_EXPLAIN'			=> 'Hier kannst du die vorhandenen Videos bearbeiten.<br />Durch klicken des Titels, wird das Video in einem seperaten Fenster geöffnet.',
	'ACP_DMV_MANAGE_CATEGORIES'		=> 'Kategorien',
	'ACP_DMV_RELEASE'				=> 'Videos freigeben',
	'ACP_DMV_RELEASE_EXPLAIN'		=> 'Hier kannst du neue Videos freigeben.<br />Durch Klicken des Titels, wird das Video in einem seperaten Fenster geöffnet, damit du es vor der Freigabe prüfen kannst.',
	'ACP_DMV_RELEASE_EDIT'			=> 'Videos freigeben',
	'ACP_DMV_RELEASE_EDIT_EXPLAIN'	=> 'Hier kannst du die noch nicht freigegebenen Videos freigeben.<br />Durch Klicken des Titels, wird das Video in einem seperaten Fenster geöffnet.',
	'ACP_DMV_REPORTED'				=> 'Gemeldete Videos',
	'ACP_DMV_REPORTED_EXPLAIN'		=> 'Hier kannst du gemeldete Videos löschen oder auch wieder freigeben.<br />Durch Klicken des Titels, wird das Video in einem seperaten Fenster geöffnet, damit du es vorab selbst prüfen kannst.',
	'ACP_DMV_REPORTED_EDIT'			=> 'Bearbeite gemeldete Videos',
	'ACP_DMV_REPORTED_EDIT_EXPLAIN'	=> 'Hier findest du die Videos, die von den User als defekt gemeldet wurden.<br />Durch Klicken des Titels, wird das Video in einem seperaten Fenster geöffnet.<br />So kannst du dir das Video nochmal anschauen, ob es auch wirklich defekt ist.',
	'ALL_VIDEOS'					=> 'Alle Videos',
	
	'DMV_ADD'						=> 'Hinzufügen',
	'DMV_APPROVAL'					=> 'Aktiviert',
	'DMV_APPROVAL_EXPLAIN'			=> 'Lege fest, ob das Video für die Benutzer zu sehen ist, oder nicht',
	'DMV_CAT_DELETE'				=> 'Hier kannst du eine Kategorie löschen.',
	'DMV_CAT_DELETE_DONE'			=> 'Kategorie erfolgreich gelöscht',
	'DMV_CAT_EDIT'					=> 'Hier kannst du eine Kategorie ändern.',
	'DMV_CAT_EDIT_DONE'				=> 'Kategorie erfolgreich geändert',
	'DMV_CAT_NAME'					=> 'Kategorie',
	'DMV_CAT_NAME_EMPTY'			=> 'Du musst einen Namen für die Kategorie eintragen.',
	'DMV_CAT_NAME_EXPLAIN'			=> 'Kategorie, in der sich das Video befindet',
	'DMV_CAT_NEW'					=> 'Hier kannst du eine Kategorie anlegen.',
	'DMV_CAT_NEW_DONE'				=> 'Kategorie erfolgreich angelegt',
	'DMV_CAT_SELECT'				=> 'Hier kannst du Kategorien anlegen, bearbeiten oder löschen.',
	'DMV_CLICK'						=> 'hier',
	'DMV_CONFIG_ACP_PAGE'			=> 'Anzahl Videos pro Seite (ACP)',
	'DMV_CONFIG_ACP_PAGE_EXPLAIN'	=> 'Die Anzahl Videos pro Seite fest, die auf der Administartorenseite angezeigt werden sollen',
	'DMV_CONFIG_ANNOUNCE_SETTINGS'	=> 'Ankündigungseinstellungen',
	'DMV_CONFIG_ANNOUNCE_ENABLE'	=> 'Neue Videos ankündigen',
	'DMV_CONFIG_ANNOUNCE_ENABLE_EX'	=> 'Setze hier Ja, wenn neue Videos in einem bestimmten Forum angekündigt werden sollen',
	'DMV_CONFIG_ANNOUNCE_FORUM'		=> 'Wähle ein Forum',
	'DMV_CONFIG_ANNOUNCE_FORUM_EX'	=> 'Wähle hier ein Forum aus, in dem du neue Videos ankündigen willst',
	'DMV_CONFIG_ANNOUNCE_TITLE'		=> '[NEU] %1$s',
	'DMV_CONFIG_ANNOUNCE_MSG'		=> 'Hallo Zusammen,

es gibt ein neues Video!

Titel: <strong>%1$s</strong>
Author: <strong>%2$s</strong>
Länge: <strong>%3$s</strong>

<strong>Klicke %4$s, um dir das Video anzusehen!<strong>

Viel Spaß dabei!',
	'DMV_CONFIG_COMMENT'			=> 'Anzahl Kommentare pro Seite (Benutzeransicht)',
	'DMV_CONFIG_COMMENT_EXPLAIN'	=> 'Die Anzahl Kommentare pro Seite fest, die auf der Benutzerseite angezeigt werden sollen',
	'DMV_CONFIG_COPY_EMAIL'			=> 'Copyright Info Email Adresse',
	'DMV_CONFIG_COPY_EMAIL_EXPLAIN'	=> 'Email Adresse, an die Verletzungen eines Copyrights gemeldet werden können, z.B. rechteverletzung@deinedomain.de',
	'DMV_CONFIG_COPY_SHOW'			=> 'Anzeige für die Copyright Info Email Adresse',
	'DMV_CONFIG_COPY_SHOW_EXPLAIN'	=> 'Wie die Email Adresse in der Copyright Hinweiszeile angezeigt werden soll, z.B. Rechteverletzung at Deindomain Dot De',
	'DMV_CONFIG_MAIN_SETTINGS'		=> 'Basiseinstellungen',
	'DMV_CONFIG_NEWEST'				=> 'Anzahl der neuesten Videos',
	'DMV_CONFIG_NEWEST_EXPLAIN'		=> 'Die Anzahl der Videos, die als neueste Videos ausgegeben werden sollen',
	'DMV_CONFIG_PM_SETTINGS'		=> 'PN Einstellungen',
	'DMV_CONFIG_PM_FROM_ID'			=> 'Benutzer ID von',
	'DMV_CONFIG_PM_FROM_ID_EX'		=> 'Benutzer ID von der die persönliche Nachricht über neue Videos kommt',
	'DMV_CONFIG_PM_TO_ID'			=> 'Benutzer ID an',
	'DMV_CONFIG_PM_TO_ID_EX'		=> 'Benutzer ID an die die persönliche Nachricht über neue Videos gesendet wird',
	'DMV_CONFIG_POINTS_SETTINGS'	=> 'Punkte Einstellungen',
	'DMV_CONFIG_POINTS_EXPLAIN'		=> 'Du hast den Ultimate Points Mod installiert. Du kannst daher für das Einstellen von neuen Videos Punkte vergeben (diese werden beim Löschen eines Videos auch wieder abgezogen).',
	'DMV_CONFIG_POINTS_INACTIVE'	=> 'Du hast zwar den Ultimate Points Mod installiert, ihn aber <strong>deaktiviert</strong>. Wenn du den UPS aktiviert hättest, könntest du für das Einstellen von neuen Videos Punkte vergeben.',
	'DMV_CONFIG_POINTS_ENABLE'		=> 'Punkte für neue Videos aktivieren',
	'DMV_CONFIG_POINTS_ENABLE_EX'	=> 'Aktivere, wenn du Punkte für das Einstellen von neuen Videos vergeben willst',
	'DMV_CONFIG_POINTS_VALUE'		=> 'Punkte pro Video',
	'DMV_CONFIG_POINTS_VALUE_EX'	=> 'Gib hier die Punkte pro eingestelltem Video ein. Diese Punkte werden erst nach dem Freischalten des Videos vergeben (und beim Löschen auch wieder abgezogen)',
	'DMV_CONFIG_TOP_VIEWS'			=> 'Anzahl Videos für Top XX (gesehen)',
	'DMV_CONFIG_TOP_VIEWS_EXPLAIN'	=> 'Die Anzahl der Videos, die für die Top XX nach "am meisten angesehen" ausgegeben werden sollen',
	'DMV_CONFIG_TOP_RATE'			=> 'Anzahl Videos für die Top XX (bewertet)',
	'DMV_CONFIG_TOP_RATE_EXPLAIN'	=> 'Die Anzahl der Videos, die für die Top XX nach "nach Bewertung" ausgegeben werden sollen',
	'DMV_CONFIG_UPDATED'			=> 'Die Konfiguration wurde erfolgreich aktualisiert',
	'DMV_CONFIG_USER_PAGE'			=> 'Anzahl Videos pro Seite (Benutzerseite)',
	'DMV_CONFIG_USER_PAGE_EXPLAIN'	=> 'Die Anzahl Videos pro Seite fest, die auf der Benutzerseite angezeigt werden sollen',
	'DMV_CREATE_CAT'				=> 'Kategorie anlegen',
	'DMV_DELETE'					=> 'Löschen',
	'DMV_DELETED'					=> 'Der Eintrag wurde erfolgreich gelöscht',
	'DMV_DELETED_CAT'				=> 'Die ausgewählte Kategorie wurde gelöscht.',
	'DMV_DELETED_CAT_NOT'			=> 'Die ausgewählte Kategorie wurde <strong>nicht</strong> gelöscht.',
	'DMV_DELETE_HAS_FILES'			=> 'Es sind noch Dateien in diesem Verzeichnis gelistet!<br />Bitte lösche diese zuerst oder verschiebe sie in eine andere Kategroie!',
	'DMV_CAT_NOT_EXISTS'			=> 'Die Kategorie existiert nicht',
	'DMV_DELETE_SUB_CATS'			=> 'Bitte lösche oder verschiebe erst die Unterkategorien.',
	'DMV_DEL_CAT'					=> 'Kategorie wirklich löschen',
	'DMV_DEL_DELETED_SUBS'			=> 'Die Unterkategorien wurden gelöscht.',
	'DMV_DEL_DELETED_VIDEOS'		=> 'Die Videos wurden gelöscht.',
	'DMV_DEL_DM_VIDEOS'				=> 'Videos löschen',
	'DMV_DEL_MOVED_SUBS'			=> 'Die Unterkategorien wurden nach %s verschoben.',
	'DMV_DEL_MOVED_VIDEOS'			=> 'Die Videos wurden nach %s verschoben.',
	'DMV_DEL_SUBS'					=> 'Unterkategorien löschen',
	'DMV_DEL_SUBS_TO'				=> 'Unterkategorien verschieben nach',
	'DMV_DEL_SUBS_YES'				=> 'Unterkategorien mit der Kategorie löschen',
	'DMV_DEL_VIDEOS_TO'				=> 'Videos verschieben nach',
	'DMV_DEL_VIDEOS_YES'			=> 'Video mit der Kategorie löschen',
	'DMV_DM_VIDEO_ACP_CATSD'		=> 'Bist du sicher, daß du die gewählte Kategorie löschen willst?',
	'DMV_DM_VIDEO_ACP_CATSE'		=> 'Kategorie ändern',
	'DMV_DM_VIDEO_ACP_CATSN'		=> 'Kategorie erstellen',
	'DMV_DM_VIDEO_INDEX'			=> 'DM Video',
	'DMV_DURATION'					=> 'Dauer des Videos',
	'DMV_DURATION_EXPLAIN'			=> 'Die Dauer des Videos. Format: 5:00 min.',
	'DMV_MULTI'						=> '%d Videos',
	'DMV_NEED_DATA'					=> 'Es werden zumindest der Titel und die URL benötigt',
	'DMV_NEED_TITLE'				=> 'Du musst einen Titel eingeben',
	'DMV_NEED_URL'					=> 'Du musst eine URL eingeben',
	'DMV_NEW_CAT'					=> 'Neue Kategorie anlegen',
	'DMV_NEW_CAT_DESC'				=> 'Kategoriebeschreibung',
	'DMV_NEW_CAT_DESC_EXPLAIN'		=> 'BB-Code, Smiles und Links werden automatisch erkannt',
	'DMV_NEW_CAT_NAME'				=> 'Kategoriename',
	'DMV_NEW_CAT_PARENT'			=> 'übergeordnete Kategorie',
	'DMV_NEW_VIDEOS'				=> 'Benachrichtigen über neue Videos',
	'DMV_NEW_VIDEOS_EXPLAIN'		=> 'Wenn aktiviert, wird im Header eine Nachricht angezeigt.',
	'DMV_NO_PARENT'					=> 'keine übergeordnete Kategorie',
	'DMV_NO_RELEASE'				=> 'Es gibt keine Videos zum freigeben',
	'DMV_NO_REPORTS'				=> 'Es gibt keine gemeldeten Videos',
	'DMV_NO_SUBCAT'					=> 'keine Unterkategorien angelegt',
	'DMV_PAGINATION'				=> 'Einträge %1$s bis %2$s Gesamt %3$s Seite: %4$s',
	'DMV_PM_FROM_ERROR'				=> 'Die gewählte <strong>Benutzer ID von</strong> exisitiert nicht!',
	'DMV_PM_TO_ERROR'				=> 'Die gewählte <strong>Benutzer ID an</strong> exisitiert nicht!',
	'DMV_REALY_DELETE'				=> 'Bist du sicher, daß du diesen Eintrag löschen willst?',
	'DMV_REMOVE_INSTALL'			=> 'Bitte lösche das Installationsverzeichnis <strong>install</strong>',
	'DMV_REPORTED'					=> 'Fehlerhaftes Video',
	'DMV_REPORTED_EXPLAIN'			=> 'Setze hier nein, wenn du die Meldung zurücksetzen willst',
	'DMV_SINGER'					=> 'Name des Künstlers',
	'DMV_SINGER_EXPLAIN'			=> 'Der Name des Künstler, Interpreten, etc.',
	'DMV_SINGLE'					=> '1 Video',
	'DMV_SONGTEXT'					=> 'Beschreibung',
	'DMV_SONGTEXT_EXPLAIN'			=> 'Die Beschreibung des Videos',
	'DMV_SORT_APPROVAL'				=> 'Aktivierung',
	'DMV_SORT_ARTIST'				=> 'Künstler',
	'DMV_SORT_ASC'					=> 'Aufsteigend',
	'DMV_SORT_CAT'					=> 'Kategorie',
	'DMV_SORT_DESC'					=> 'Absteigend',
	'DMV_SORT_DIRECTION'			=> 'Sortierrichting',
	'DMV_SORT_FROMNAME'				=> 'eingestellt von',
	'DMV_SORT_KEYS'					=> 'Sortiere nach ',
	'DMV_SORT_TITLE'				=> 'Titel',
	'DMV_SUB_CATS'					=> 'Unterkategorien',
	'DMV_TITLE'						=> 'Der Titel des Videos',
	'DMV_TITLE_EXPLAIN'				=> 'Der Titel des Songs oder die Überschrift des Videos',
	'DMV_UPDATED'					=> 'Der Eintrag wurde erfolgreich aktualisiert.',
	'DMV_URL'						=> 'URL zum Video',
	'DMV_URL_EXPLAIN'				=> 'Der embedded Code von YouTube, MyVideo, etc. Das darf kein  direkter Link sein!',
	'DMV_USERNAME'					=> 'Eingestellt von',
	'DMV_VIDEO_IMG'					=> 'Bild Link',
	'DMV_VIDEO_IMG_EXPLAIN'			=> 'Gib hier einen Link zu einem Bild zum Video ein. Die Größe des Bildes sollte 250 x 250px nicht überschreiten! Bitte stelle sicher, daß der Link verfügbar ist und bleibt!',
	'LOG_USER_VIDEO_ADDED'			=> 'Hat Video <strong>%s</strong> hinzugefügt',
	'LOG_USER_VIDEO_EDITED'			=> 'Hat Video Nr. <strong>%s</strong> bearbeitet',
	'LOG_USER_VIDEO_DELETED'		=> 'Hat Video Nr. <strong>%s</strong> gelöscht',
	'LOG_USER_COMMENT_ADDED'		=> 'Hat Video <strong>%s</strong> kommentiert',
	'LOG_USER_COMMENT_EDITED'		=> 'Hat Kommentar Nr. <strong>%s</strong> bearbeitet',
	'LOG_USER_COMMENT_DELETED'		=> 'Hat Kommentar Nr. <strong>%s</strong> gelöscht',
	'LOG_USER_VIDEO_RATE'			=> 'Hat Video <strong>%s</strong> bewertet',
	'LOG_USER_VIDEO_RATE_EDITED'	=> 'Hat Video Nr. <strong>%s</strong> Bewertung bearbeitet',
	'LOG_USER_VIDEO_REPORTED'		=> 'Hat Video Nr. <strong>%s</strong> gemeldet',

	'LOG_ADMIN_VIDEO_UPDATED'		=> 'Hat Video <strong>%s</strong> aktualisiert',
	'LOG_ADMIN_VIDEO_DELETED'		=> 'Hat Video <strong>%s</strong> gelöscht',
	'LOG_ADMIN_VIDEO_REP_UPDATED'	=> 'Hat gemeldetes Video <strong>%s</strong> aktualisiert',
	'LOG_ADMIN_VIDEO_REP_DELETED'	=> 'Hat gemeldetes Video <strong>%s</strong> gelöscht',
	'LOG_ADMIN_VIDEO_REL_UPDATED'	=> 'Hat Video <strong>%s</strong> freigegeben',
	'LOG_ADMIN_VIDEO_REL_DELETED'	=> 'Hat Video <strong>%s</strong> nicht freigegeben und gelöscht',
	'LOG_ADMIN_VIDEO_CONFIG_UPDATED' => 'Hat Video Konfiguration aktualisiert',
	'LOG_ADMIN_VIDEO_CAT_ADDED'		=> 'Hat neue Video Kategorie <strong>%s</strong> hinzugefügt',
	'LOG_ADMIN_VIDEO_CAT_UPDATED'	=> 'Hat Video Kategorie <strong>%s</strong> aktualisiert',
	'LOG_ADMIN_VIDEO_CAT_DELETED'	=> 'Hat Video Kategorie <strong>%s</strong> gelöscht',
));

?>