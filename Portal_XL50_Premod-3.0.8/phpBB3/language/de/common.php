<?php
/**
*
* common [Deutsch — Du]
*
* @package language
* @version $Id: common.php 519 2010-11-17 21:44:17Z pyramide $
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und http://www.phpbb.de/go/ubersetzerteam
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
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'Deutsche Übersetzung durch <a href="http://www.phpbb.de/">phpBB.de</a>',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|j. M Y|', // 1. Jan 2007 (ggf. mit relativen Angaben)
	'USER_LANG'			=> 'de',

	'1_DAY'			=> '1 Tag',
	'1_MONTH'		=> '1 Monat',
	'1_YEAR'		=> '1 Jahr',
	'2_WEEKS'		=> '2 Wochen',
	'3_MONTHS'		=> '3 Monate',
	'6_MONTHS'		=> '6 Monate',
	'7_DAYS'		=> '7 Tage',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'Dein Benutzerkonto wurde bereits aktiviert.',
	'ACCOUNT_DEACTIVATED'			=> 'Dein Benutzerkonto wurde manuell deaktiviert und kann nur durch einen Administrator reaktiviert werden.',
	'ACCOUNT_NOT_ACTIVATED'			=> 'Dein Benutzerkonto ist noch nicht aktiviert worden.',
	'ACP'							=> 'Administrations-Bereich',
	'ACTIVE'						=> 'aktiv',
	'ACTIVE_ERROR'					=> 'Der angegebene Benutzername ist derzeit inaktiv. Wenn du weiterhin Probleme bei der Aktivierung deines Benutzerkontos hast, wende dich bitte an die Board-Administration.',
	'ADMINISTRATOR'					=> 'Administrator',
	'ADMINISTRATORS'				=> 'Administratoren',
	'AGE'							=> 'Alter',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> 'Erlaubt',
	'ALL_FILES'						=> 'Alle Dateien',
	'ALL_FORUMS'					=> 'Alle Foren',
	'ALL_MESSAGES'					=> 'Alle Nachrichten',
	'ALL_POSTS'						=> 'Alle Beiträge',
	'ALL_TIMES'						=> 'Alle Zeiten sind %1$s %2$s',
	'ALL_TOPICS'					=> 'Alle Themen',
	'AND'							=> 'und', // PM-Verwaltung
	'ARE_WATCHING_FORUM'			=> 'Du wirst über neue Beiträge in diesem Forum informiert.',
	'ARE_WATCHING_TOPIC'			=> 'Du wirst über neue Beiträge in diesem Thema informiert.',
	'ASCENDING'						=> 'Aufsteigend',
	'ATTACHMENTS'					=> 'Dateianhänge',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'Die Bild-Datei, die du versucht hast anzuhängen, ist ungültig.',
	'AUTHOR'						=> 'Autor',
	'AUTH_NO_PROFILE_CREATED'		=> 'Die Erstellung eines Mitgliederprofils ist gescheitert.',
	'AVATAR_DISALLOWED_CONTENT'		=> 'Die hochgeladene Datei wurde abgewiesen, da sie als möglicher Angriffsversuch identifiziert wurde.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'Die Datei kann nicht angezeigt werden, da die Dateierweiterung %s nicht erlaubt ist.',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'Der ausgewählte Avatar konnte nicht hochgeladen werden, da die lokale Datei ungültig oder beschädigt zu sein scheint.',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'Die hochgeladene Avatar-Datei ist leer.',
	'AVATAR_INVALID_FILENAME'		=> '%s ist ein ungültiger Dateiname.',
	'AVATAR_NOT_UPLOADED'			=> 'Der Avatar konnte nicht hochgeladen werden.',
	'AVATAR_NO_SIZE'				=> 'Die Breite oder die Höhe des verlinkten Avatars konnte nicht ermittelt werden. Bitte gib sie manuell an.',
	'AVATAR_PARTIAL_UPLOAD'			=> 'Die ausgewählte Datei wurde nur unvollständig hochgeladen.',
	'AVATAR_PHP_SIZE_NA'			=> 'Die Avatar-Datei ist zu groß.<br />Die durch PHP in der php.ini festgelegte maximale Größe konnte nicht ermittelt werden.',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'Die Avatar-Datei ist zu groß, sie darf maximal %1$d %2$s groß sein.<br />Dieser Wert ist in der php.ini festgelegt und kann nicht überschrieben werden.',
	'AVATAR_URL_INVALID'			=> 'Die angegebene URL ist ungültig.',
	'AVATAR_URL_NOT_FOUND'			=> 'Die angegebene Datei konnte nicht gefunden werden.',
	'AVATAR_WRONG_FILESIZE'			=> 'Der Avatar muss zwischen 0 und %1d %2s groß sein.',
	'AVATAR_WRONG_SIZE'				=> 'Der hochgeladene Avatar ist %5$d Pixel breit und %6$d Pixel hoch. Avatare müssen mindestens %1$d Pixel breit und %2$d Pixel hoch, aber dürfen maximal %3$d Pixel breit und %4$d Pixel hoch sein.',

	'BACK_TO_TOP'			=> 'Nach oben',
	'BACK_TO_PREV'			=> 'Zurück zur vorherigen Seite',
	'BAN_TRIGGERED_BY_EMAIL'=> 'Deine E-Mail-Adresse wurde gesperrt.',
	'BAN_TRIGGERED_BY_IP'	=> 'Deine IP-Adresse wurde gesperrt.',
	'BAN_TRIGGERED_BY_USER'	=> 'Dein Benutzername wurde gesperrt.',
	'BBCODE_GUIDE'			=> 'BBCode-Anleitung',
	'BCC'					=> 'BCC',
	'BIRTHDAYS'				=> 'Geburtstage',
	'BOARD_BAN_PERM'		=> 'Du wurdest auf diesem Board <strong>dauerhaft</strong> gesperrt.<br /><br />Bitte kontaktiere die %2$sBoard-Administration%3$s, um weitere Informationen zu erhalten.',
	'BOARD_BAN_REASON'		=> 'Für die Sperre angegebener Grund: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'Du wurdest auf diesem Board bis zum <strong>%1$s</strong> gesperrt.<br /><br />Bitte kontaktiere die %2$sBoard-Administration%3$s, um weitere Informationen zu erhalten.',
	'BOARD_DISABLE'			=> 'Dieses Board ist leider derzeit nicht verfügbar.',
	'BOARD_DISABLED'		=> 'Dieses Board ist derzeit deaktiviert.',
	'BOARD_UNAVAILABLE'		=> 'Dieses Board ist leider vorübergehend nicht verfügbar, bitte versuche es in einigen Minuten erneut.',
	'BROWSING_FORUM'		=> 'Mitglieder in diesem Forum: %1$s',
	'BROWSING_FORUM_GUEST'	=> 'Mitglieder in diesem Forum: %1$s und %2$d Gast',
	'BROWSING_FORUM_GUESTS'	=> 'Mitglieder in diesem Forum: %1$s und %2$d Gäste',
	'BYTES'					=> 'Bytes',

	'CANCEL'				=> 'Abbrechen',
	'CHANGE'				=> 'Ändern',
	'CHANGE_FONT_SIZE'		=> 'Ändere Schriftgröße',
	'CHANGING_PREFERENCES'	=> 'Ändert Board-Einstellungen',
	'CHANGING_PROFILE'		=> 'Ändert sein Profil',
	'CLICK_VIEW_PRIVMSG'	=> '%sZu deinem Posteingang%s',
	'COLLAPSE_VIEW'			=> 'Zusammenklappen',
	'CLOSE_WINDOW'			=> 'Fenster schließen',
	'COLOUR_SWATCH'			=> 'Farbpalette',
	'COMMA_SEPARATOR'		=> ', ',	// Used in pagination of ACP & prosilver, use localised comma if appropriate, eg: Ideographic or Arabic
	'CONFIRM'				=> 'Bestätigen',
	'CONFIRM_CODE'			=> 'Bestätigungscode',
	'CONFIRM_CODE_EXPLAIN'	=> 'Gib den Code genau so ein, wie du ihn siehst; Groß- und Kleinschreibung wird nicht unterschieden.',
	'CONFIRM_CODE_WRONG'	=> 'Der eingegebene Bestätigungscode ist fehlerhaft.',
	'CONFIRM_OPERATION'		=> 'Bist du dir sicher, dass du diesen Vorgang durchführen möchtest?',
	'CONGRATULATIONS'		=> 'Glückwünsche an',
	'CONNECTION_FAILED'		=> 'Die Verbindung ist gescheitert!',
	'CONNECTION_SUCCESS'	=> 'Die Verbindung war erfolgreich!',
	'COOKIES_DELETED'		=> 'Alle Cookies des Boards wurden erfolgreich gelöscht.',
	'CURRENT_TIME'			=> 'Aktuelle Zeit: %s',

	'DAY'					=> 'Tag',
	'DAYS'					=> 'Tage',
	'DELETE'				=> 'Löschen',
	'DELETE_ALL'			=> 'Alle löschen',
	'DELETE_COOKIES'		=> 'Alle Cookies des Boards löschen',
	'DELETE_MARKED'			=> 'Markierte löschen',
	'DELETE_POST'			=> 'Beitrag löschen',
	'DELIMITER'				=> 'Trennzeichen',
	'DESCENDING'			=> 'Absteigend',
	'DISABLED'				=> 'Deaktiviert',
	'DISPLAY'				=> 'Anzeigen',
	'DISPLAY_GUESTS'		=> 'Gäste anzeigen',
	'DISPLAY_MESSAGES'		=> 'Nachrichten der letzten Zeit anzeigen',
	'DISPLAY_POSTS'			=> 'Beiträge der letzten Zeit anzeigen',
	'DISPLAY_TOPICS'		=> 'Themen der letzten Zeit anzeigen',
	'DOWNLOADED'			=> 'Heruntergeladen',
	'DOWNLOADING_FILE'		=> 'Lade Datei herunter',
	'DOWNLOAD_COUNT'		=> '%d-mal heruntergeladen',
	'DOWNLOAD_COUNTS'		=> '%d-mal heruntergeladen',
	'DOWNLOAD_COUNT_NONE'	=> 'Noch nie heruntergeladen',
	'VIEWED_COUNT'			=> '%d-mal betrachtet',
	'VIEWED_COUNTS'			=> '%d-mal betrachtet',
	'VIEWED_COUNT_NONE'		=> 'Noch nie betrachtet',

	'EDIT_POST'							=> 'Ändere Beitrag',
	'EMAIL'								=> 'E-Mail', // Short form for EMAIL_ADDRESS
	'EMAIL_ADDRESS'						=> 'E-Mail-Adresse',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'Probleme beim Mailversand in <strong>Zeile %1$s</strong>. Antwort: %2$s.',
	'EMPTY_SUBJECT'						=> 'Du musst einen Betreff angeben, wenn du ein neues Thema erstellen möchtest.',
	'EMPTY_MESSAGE_SUBJECT'				=> 'Du musst einen Betreff angeben, wenn du eine neue Nachricht verfassen möchtest.',
	'ENABLED'							=> 'Aktiviert',
	'ENCLOSURE'							=> 'Texterkennungszeichen',
	'ERR_CHANGING_DIRECTORY'			=> 'Das Verzeichnis konnte nicht gewechselt werden.',
	'ERR_CONNECTING_SERVER'				=> 'Fehler beim Verbindungsaufbau zum Server.',
	'ERR_JAB_AUTH'						=> 'Die Anmeldung am Jabber-Server war nicht erfolgreich.',
	'ERR_JAB_CONNECT'					=> 'Es konnte keine Verbindung zum Jabber-Server aufgebaut werden.',
	'ERR_UNABLE_TO_LOGIN'				=> 'Der angegebene Benutzername oder das angegebene Passwort ist falsch.',
	'ERR_UNWATCHING'					=> 'Beim Versuch, das Thema nicht mehr zu beobachten, ist ein Fehler aufgetreten.',
	'ERR_WATCHING'						=> 'Beim Versuch, das Thema zu beobachten, ist ein Fehler aufgetreten.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'Der angegebene phpBB-Pfad scheint ungültig zu sein.',
	'EXPAND_VIEW'						=> 'Ansicht erweitern',
	'EXTENSION'							=> 'Dateierweiterung',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'Die Dateierweiterung <strong>%s</strong> wurde deaktiviert und kann nicht länger angezeigt werden.',

	'FAQ'					=> 'FAQ',
	'FAQ_EXPLAIN'			=> 'Häufig gestellte Fragen',
	'FILENAME'				=> 'Dateiname',
	'FILESIZE'				=> 'Größe',
	'FILEDATE'				=> 'Dateidatum',
	'FILE_COMMENT'			=> 'Dateikommentar',
	'FILE_NOT_FOUND'		=> 'Die angegebene Datei konnte nicht gefunden werden.',
	'FIND_USERNAME'			=> 'Nach einem Mitglied suchen',
	'FOLDER'				=> 'Ordner',
	'FORGOT_PASS'			=> 'Ich habe mein Passwort vergessen',
	'FORM_INVALID'			=> 'Das übermittelte Formular war ungültig. Versuche erneut, das Formular abzusenden.',
	'FORUM'					=> 'Forum',
	'FORUMS'				=> 'Foren',
	'FORUMS_MARKED'			=> 'Alle Foren wurden als gelesen markiert.',
	'FORUM_CAT'				=> 'Kategorie',
	'FORUM_INDEX'			=> 'Foren-Übersicht',
	'FORUM_LINK'			=> 'Forums-Link',
	'FORUM_LOCATION'		=> 'Aktuelle Tätigkeit',
	'FORUM_LOCKED'			=> 'Forum gesperrt',
	'FORUM_RULES'			=> 'Forumsregeln',
	'FORUM_RULES_LINK'		=> 'Die Forumsregeln lesen',
	'FROM'					=> 'von',
	'FSOCK_DISABLED'		=> 'Dieser Vorgang kann nicht abgeschlossen werden, da die <var>fsockopen</var>-Funktion deaktiviert wurde oder weil der angegebene Server nicht gefunden werden konnte.',

	'FTP_FSOCK_HOST'				=> 'FTP-Server',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'FTP-Server, auf dem sich deine Website befindet.',
	'FTP_FSOCK_PASSWORD'			=> 'FTP-Passwort',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Passwort zu deinem FTP-Benutzernamen.',
	'FTP_FSOCK_PORT'				=> 'FTP-Port',
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'Port, der für die Verbindung zu deinem Server benutzt wird.',
	'FTP_FSOCK_ROOT_PATH'			=> 'Pfad zur phpBB-Installation',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Pfad zu deiner phpBB-Installation vom Root-Verzeichnis aus.',
	'FTP_FSOCK_TIMEOUT'				=> 'FTP-Timeout',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'Zeit in Sekunden, die das System auf eine Antwort deines Servers warten wird.',
	'FTP_FSOCK_USERNAME'			=> 'FTP-Benutzername',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'Benutzername, der für die Anmeldung an deinem Server verwendet wird.',

	'FTP_HOST'					=> 'FTP-Server',
	'FTP_HOST_EXPLAIN'			=> 'FTP-Server, auf dem sich deine Website befindet.',
	'FTP_PASSWORD'				=> 'FTP-Passwort',
	'FTP_PASSWORD_EXPLAIN'		=> 'Passwort zu deinem FTP-Benutzernamen.',
	'FTP_PORT'					=> 'FTP-Port',
	'FTP_PORT_EXPLAIN'			=> 'Port, der für die Verbindung zu deinem Server benutzt wird.',
	'FTP_ROOT_PATH'				=> 'Pfad zur phpBB-Installation',
	'FTP_ROOT_PATH_EXPLAIN'		=> 'Pfad zu deiner phpBB-Installation vom Root-Verzeichnis aus.',
	'FTP_TIMEOUT'				=> 'FTP-Timeout',
	'FTP_TIMEOUT_EXPLAIN'		=> 'Zeit in Sekunden, die das System auf eine Antwort deines Servers warten wird.',
	'FTP_USERNAME'				=> 'FTP-Benutzername',
	'FTP_USERNAME_EXPLAIN'		=> 'Benutzername, der für die Anmeldung an deinem Server verwendet wird.',

	'GENERAL_ERROR'				=> 'Allgemeiner Fehler',
	'GB'						=> 'GB',
	'GIB'						=> 'GiB',
	'GO'						=> 'Los',
	'GOTO_PAGE'					=> 'Gehe zu Seite',
	'GROUP'						=> 'Gruppe',
	'GROUPS'					=> 'Gruppen',
	'GROUP_ERR_TYPE'			=> 'Es wurde ein ungültiger Gruppentyp ausgewählt.',
	'GROUP_ERR_USERNAME'		=> 'Es wurde kein Gruppenname angegeben.',
	'GROUP_ERR_USER_LONG'		=> 'Gruppennamen dürfen nicht länger als 60 Zeichen sein. Der angegebene Gruppenname ist zu lang.',
	'GUEST'						=> 'Gast',
	'GUEST_USERS_ONLINE'		=> 'Es sind %d Gäste online',
	'GUEST_USERS_TOTAL'			=> '%d Gäste',
	'GUEST_USERS_ZERO_ONLINE'	=> 'Es sind 0 Gäste online',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 Gäste',
	'GUEST_USER_ONLINE'			=> 'Es ist %d Gast online',
	'GUEST_USER_TOTAL'			=> '%d Gast',
	'G_ADMINISTRATORS'			=> 'Administratoren',
	'G_BOTS'					=> 'Bots',
	'G_GUESTS'					=> 'Gäste',
	'G_REGISTERED'				=> 'Registrierte Benutzer',
	'G_REGISTERED_COPPA'		=> 'Registrierte COPPA-Benutzer',
	'G_GLOBAL_MODERATORS'		=> 'Globale Moderatoren',
	'G_NEWLY_REGISTERED'		=> 'Kürzlich registrierte Benutzer',

	'HIDDEN_USERS_ONLINE'			=> '%d unsichtbare Mitglieder online',
	'HIDDEN_USERS_TOTAL'			=> '%d unsichtbare',
	'HIDDEN_USERS_TOTAL_AND'		=> '%d unsichtbare und ',
	'HIDDEN_USERS_ZERO_ONLINE'		=> '0 unsichtbare Mitglieder online',
	'HIDDEN_USERS_ZERO_TOTAL'		=> '0 unsichtbare',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 unsichtbare und ',
	'HIDDEN_USER_ONLINE'			=> '%d unsichtbares Mitglied online',
	'HIDDEN_USER_TOTAL'				=> '%d unsichtbarer',
	'HIDDEN_USER_TOTAL_AND'			=> '%d unsichtbarer und ',
	'HIDE_GUESTS'					=> 'Gäste ausblenden',
	'HIDE_ME'						=> 'Meinen Online-Status während dieser Sitzung verbergen',
	'HOURS'							=> 'Stunden',
	'HOME'							=> 'Startseite',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'ICQ-Status',
	'IF'						=> 'Wenn',
	'IMAGE'						=> 'Bild',
	'IMAGE_FILETYPE_INVALID'	=> 'Der Grafikdateityp %d wird für den MIME-Typ %s nicht unterstützt.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Fehlerhafter Grafikdateityp: Dateiendung %1$s erwartet, aber Endung %2$s erhalten.',
	'IN'						=> 'in',
	'INDEX'						=> 'Foren-Übersicht',
	'INFORMATION'				=> 'Information',
	'INTERESTS'					=> 'Interessen',
	'INVALID_DIGEST_CHALLENGE'	=> 'Ungültiger Digest Challenge.',
	'INVALID_EMAIL_LOG'			=> '<strong>%s</strong> ist vermutlich eine ungültige E-Mail-Adresse.',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'			=> 'Deine IP-Adresse %1$s wurde gesperrt, da sie auf der schwarzen Liste steht. Details findest du unter <a href="%2$s">%2$s</a>.',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> 'Registriert',
	'JUMP_PAGE'				=> 'Gib die Nummer der Seite an, zu der du gehen möchtest.',
	'JUMP_TO'				=> 'Gehe zu',
	'JUMP_TO_PAGE'			=> 'Klicke, um auf Seite … zu gehen',

	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'							=> 'Letzter Beitrag',
	'LAST_UPDATED'						=> 'Letzte Aktualisierung',
	'LAST_VISIT'						=> 'Letzter Besuch',
	'LDAP_NO_LDAP_EXTENSION'			=> 'Die LDAP-Erweiterung steht nicht zur Verfügung.',
	'LDAP_NO_SERVER_CONNECTION'			=> 'Es konnte keine Verbindung zum LDAP-Server aufgebaut werden.',
	'LDAP_SEARCH_FAILED'				=> 'Beim Durchsuchen des LDAP-Verzeichnisses ist ein Fehler aufgetreten.',
	'LEGEND'							=> 'Legende',
	'LOCATION'							=> 'Wohnort',
	'LOCK_POST'							=> 'Beitrag sperren',
	'LOCK_POST_EXPLAIN'					=> 'verhindert Änderungen',
	'LOCK_TOPIC'						=> 'Thema sperren',
	'LOGIN'								=> 'Anmelden',
	'LOGIN_CHECK_PM'					=> 'Melde dich an, um deine Privaten Nachrichten zu prüfen.',
	'LOGIN_CONFIRMATION'				=> 'Bestätigung der Anmeldung',
	'LOGIN_CONFIRM_EXPLAIN'				=> 'Um einen Brute-Force-Angriff auf Benutzerkonten zu verhindern, musst du nach einer bestimmten Zahl von fehlerhaften Anmeldungen einen Bestätigungscode angeben. Der Code wird im unten stehenden Bild angezeigt. Wenn du nur über ein eingeschränktes Sehvermögen verfügst oder aus einem anderen Grund den Code nicht lesen kannst, kontaktiere bitte die %sBoard-Administration%s.', // unused
	'LOGIN_ERROR_ATTEMPTS'				=> 'Du hast die maximal zulässige Zahl von Anmeldeversuchen überschritten. Du musst nun deinen Benutzernamen und dein Passwort erneut eingeben sowie eine Sicherheitsabfrage beantworten.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Du wurdest nicht durch Apache authentifiziert.',
	'LOGIN_ERROR_PASSWORD'				=> 'Du hast ein fehlerhaftes Passwort angegeben. Bitte prüfe dein Passwort und versuche es erneut. Wenn du weiterhin auf Probleme stößt, wende dich bitte an die %sBoard-Administration%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> 'Als dieses Board aktualisiert wurde, konnte dein Passwort nicht konvertiert werden. Bitte %sfordere ein neues Passwort an%s. Wenn du weiterhin Probleme beim Zugriff auf dieses Board hast, wende dich bitte an die %sBoard-Administration%s.',
	'LOGIN_ERROR_USERNAME'				=> 'Du hast einen fehlerhaften Benutzernamen angegeben. Bitte prüfe deinen Benutzernamen und versuche es erneut. Wenn du weiterhin auf Probleme stößt, wende dich bitte an die %sBoard-Administration%s.',
	'LOGIN_FORUM'						=> 'Um in diesem Forum einen Beitrag anzusehen oder zu erstellen, musst du das Foren-Passwort eingeben.',
	'LOGIN_INFO'						=> 'Du musst in diesem Forum registriert sein, um dich anmelden zu können. Die Registrierung ist in wenigen Augenblicken erledigt und ermöglicht dir, auf weitere Funktionen zuzugreifen. Die Board-Administration kann registrierten Benutzern auch zusätzliche Berechtigungen zuweisen. Beachte bitte unsere Nutzungsbedingungen und die verwandten Regelungen, bevor du dich registrierst. Bitte beachte auch die jeweiligen Forenregeln, wenn du dich in diesem Board bewegst.',
	'LOGIN_VIEWFORUM'					=> 'Um Beiträge in diesem Forum anzusehen, musst du auf diesem Board registriert und angemeldet sein.',
	'LOGIN_EXPLAIN_EDIT'				=> 'Um Beiträge in diesem Forum zu ändern, musst du registriert und angemeldet sein.',
	'LOGIN_EXPLAIN_VIEWONLINE'			=> 'Um die Wer-ist-online-Liste anzusehen, musst du auf diesem Board registriert und angemeldet sein.',
	'LOGOUT'							=> 'Abmelden',
	'LOGOUT_USER'						=> 'Abmelden [ %s ]',
	'LOG_ME_IN'							=> 'Mich bei jedem Besuch automatisch anmelden',

	'MARK'					=> 'Markieren',
	'MARK_ALL'				=> 'Alle markieren',
	'MARK_FORUMS_READ'		=> 'Alle Foren als gelesen markieren',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> 'Moderations-Bereich',
	'MEMBERLIST'			=> 'Mitglieder',
	'MEMBERLIST_EXPLAIN'	=> 'Zeigt eine vollständige Liste aller Mitglieder an',
	'MERGE'					=> 'Zusammenführen',
	'MERGE_POSTS'			=> 'Beiträge verschieben',
	'MERGE_TOPIC'			=> 'Thema zusammenführen',
	'MESSAGE'				=> 'Nachricht',
	'MESSAGES'				=> 'Nachrichten',
	'MESSAGE_BODY'			=> 'Nachrichtentext',
	'MINUTES'				=> 'Minuten',
	'MODERATE'				=> 'Moderieren',
	'MODERATOR'				=> 'Moderator',
	'MODERATORS'			=> 'Moderatoren',
	'MONTH'					=> 'Monat',
	'MOVE'					=> 'Verschieben',
	'MSNM'					=> 'WLM',

	'NA'						=> 'n/a',
	'NEWEST_USER'				=> 'Unser neuestes Mitglied: <strong>%s</strong>',
	'NEW_MESSAGE'				=> 'Neue Nachricht',
	'NEW_MESSAGES'				=> 'Neue Nachrichten',
	'NEW_PM'					=> '<strong>%d</strong> neue Nachricht',
	'NEW_PMS'					=> '<strong>%d</strong> neue Nachrichten',
	'NEW_POST'					=> 'Neuer Beitrag',	// Not used anymore
	'NEW_POSTS'					=> 'Neue Beiträge',	// Not used anymore
	'NEXT'						=> 'Nächste',		// Used in pagination
	'NEXT_STEP'					=> 'Weiter',
	'NEVER'						=> 'Niemals',
	'NO'						=> 'Nein',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'Du darfst diese Gruppe nicht verwalten.',
	'NOT_AUTHORISED'			=> 'Du hast keine Berechtigung, diesen Bereich zu betreten.',
	'NOT_WATCHING_FORUM'		=> 'Du wirst nicht mehr über neue Beiträge in diesem Forum informiert.',
	'NOT_WATCHING_TOPIC'		=> 'Du wirst nicht mehr über neue Beiträge in diesem Thema informiert.',
	'NOTIFY_ADMIN'				=> 'Bitte informiere die Board-Administration oder den Webmaster.',
	'NOTIFY_ADMIN_EMAIL'		=> 'Bitte informiere die Board-Administration oder den Webmaster: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'		=> 'Du hast keine Berechtigung, auf diese Datei zuzugreifen.',
	'NO_ACTION'					=> 'Keine Aktion angegeben.',
	'NO_ADMINISTRATORS'			=> 'Es existieren keine Administratoren.',
	'NO_AUTH_ADMIN'				=> 'Ein Zugriff auf den Administrations-Bereich ist nicht möglich, da du keine administrativen Berechtigungen hast.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'Du kannst deine Anmeldung nicht mit einem anderen Benutzerkonto bestätigen.',
	'NO_AUTH_OPERATION'			=> 'Du hast keine ausreichende Berechtigung, um diesen Vorgang durchzuführen.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Verbindung zum SMTP-Server kann nicht hergestellt werden: %1$s : %2$s.',
	'NO_BIRTHDAYS'				=> 'Heute hat kein Mitglied Geburtstag',
	'NO_EMAIL_MESSAGE'			=> 'Die E-Mail-Nachricht ist leer.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'Der Antwort-Code des Servers konnte nicht empfangen werden.',
	'NO_EMAIL_SUBJECT'			=> 'Es wurde kein Betreff für die E-Mail angegeben.',
	'NO_FORUM'					=> 'Das von dir ausgewählte Forum existiert nicht.',
	'NO_FORUMS'					=> 'Dieses Board hat keine Foren.',
	'NO_GROUP'					=> 'Die von dir ausgewählte Benutzergruppe existiert nicht.',
	'NO_GROUP_MEMBERS'			=> 'Diese Gruppe hat derzeit keine Mitglieder.',
	'NO_IPS_DEFINED'			=> 'Keine IP-Adressen oder Hostnamen festgelegt.',
	'NO_MEMBERS'				=> 'Es wurden keine Mitglieder gefunden, die den Suchkriterien entsprechen.',
	'NO_MESSAGES'				=> 'Keine Nachrichten',
	'NO_MODE'					=> 'Kein Modus angegeben.',
	'NO_MODERATORS'				=> 'Es existieren keine Moderatoren.',
	'NO_NEW_MESSAGES'			=> 'Keine neuen Nachrichten',
	'NO_NEW_PM'					=> '<strong>0</strong> neue Nachrichten',
	'NO_NEW_POSTS'				=> 'Keine neuen Beiträge',	// Not used anymore
	'NO_ONLINE_USERS'			=> '0 Mitglieder',
	'NO_POSTS'					=> 'Keine Beiträge',
	'NO_POSTS_TIME_FRAME'		=> 'Für den ausgewählten Zeitraum existieren keine Beiträge in diesem Thema.',
	'NO_FEED_ENABLED'			=> 'Auf diesem Board sind keine Feeds verfügbar.',
	'NO_FEED'					=> 'Der angeforderte Feed ist nicht verfügbar.',
	'NO_SUBJECT'				=> 'Kein Betreff vorhanden',								// Used for posts having no subject defined but displayed within management pages.
	'NO_SUCH_SEARCH_MODULE'		=> 'Das angegebene Such-Backend existiert nicht.',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Keine unterstützte Authentifizierungs-Methode vorhanden.',
	'NO_TOPIC'					=> 'Das von dir ausgewählte Thema existiert nicht.',
	'NO_TOPIC_FORUM'			=> 'Das von dir ausgewählte Thema oder Forum existiert nicht mehr.',
	'NO_TOPICS'					=> 'In diesem Forum gibt es keine Themen oder Beiträge.',
	'NO_TOPICS_TIME_FRAME'		=> 'Für den ausgewählten Zeitraum existieren keine Themen in diesem Forum.',
	'NO_UNREAD_PM'				=> '<strong>0</strong> ungelesene Nachrichten',
	'NO_UNREAD_POSTS'			=> 'Keine ungelesenen Beiträge',
	'NO_UPLOAD_FORM_FOUND'		=> 'Ein Datei-Upload wurde angestoßen, aber es wurde kein gültiges Upload-Formular gefunden.',
	'NO_USER'					=> 'Der von dir ausgewählte Benutzer existiert nicht.',
	'NO_USERS'					=> 'Die von dir ausgewählten Benutzer existieren nicht.',
	'NO_USER_SPECIFIED'			=> 'Es wurde kein Benutzername angegeben.',

	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> 'Kein Beitrag in der Warteschlange',		// 0
		1			=> '1 Beitrag in der Warteschlange',		// 1
		2			=> '%d Beiträge in der Warteschlange',		// 2+
	),

	'OCCUPATION'				=> 'Tätigkeit',
	'OFFLINE'					=> 'Offline',
	'ONLINE'					=> 'Online',
	'ONLINE_BUDDIES'			=> 'Freunde online',
	'ONLINE_USERS_TOTAL'		=> 'Insgesamt sind <strong>%d</strong> Besucher online: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'Insgesamt sind <strong>0</strong> Besucher online: ',
	'ONLINE_USER_TOTAL'			=> 'Insgesamt ist <strong>%d</strong> Besucher online: ',
	'OPTIONS'					=> 'Optionen',

	'PAGE_OF'					=> 'Seite <strong>%1$d</strong> von <strong>%2$d</strong>',
	'PASSWORD'					=> 'Passwort',
	'PIXEL'						=> 'px',
	'PLAY_QUICKTIME_FILE'		=> 'Gebe QuickTime-Datei wieder',
	'PM'						=> 'PN',
	'PM_REPORTED'				=> 'Meldung zu dieser Nachricht anzeigen',
	'POSTING_MESSAGE'			=> 'Erstellt eine Nachricht in %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'Erstellt eine Private Nachricht',
	'POST'						=> 'Beitrag',
	'POST_ANNOUNCEMENT'			=> 'Bekanntmachung',
	'POST_STICKY'				=> 'Wichtig',
	'POSTED'					=> 'Verfasst',
	'POSTED_IN_FORUM'			=> 'in',
	'POSTED_ON_DATE'			=> 'am',
	'POSTS'						=> 'Beiträge',
	'POSTS_UNAPPROVED'			=> 'Mindestens ein Beitrag in diesem Thema wurde noch nicht freigegeben.',
	'POST_BY_AUTHOR'			=> 'von',
	'POST_BY_FOE'				=> 'Dieser Beitrag wurde von <strong>%1$s</strong>, einem von dir ignorierten Mitglied, erstellt. %2$sDiesen Beitrag anzeigen%3$s.',
	'POST_DAY'					=> '%.2f Beiträge pro Tag',
	'POST_DETAILS'				=> 'Beitrags-Details',
	'POST_NEW_TOPIC'			=> 'Ein neues Thema erstellen',
	'POST_PCT'					=> '%.2f%% aller Beiträge',
	'POST_PCT_ACTIVE'			=> '%.2f%% der Beiträge des Benutzers',
	'POST_PCT_ACTIVE_OWN'		=> '%.2f%% deiner Beiträge',
	'POST_REPLY'				=> 'Antwort erstellen',
	'POST_REPORTED'				=> 'Meldung zu diesem Beitrag anzeigen',
	'POST_SUBJECT'				=> 'Betreff des Beitrags',
	'POST_TIME'					=> 'Erstellungsdatum',
	'POST_TOPIC'				=> 'Neues Thema erstellen',
	'POST_UNAPPROVED'			=> 'Dieser Beitrag wartet auf Freigabe',
	'PREVIEW'					=> 'Vorschau',
	'PREVIOUS'					=> 'Vorherige',		// Used in pagination
	'PREVIOUS_STEP'				=> 'Zurück',
	'PRIVACY'					=> 'Datenschutzrichtlinie',
	'PRIVATE_MESSAGE'			=> 'Private Nachricht',
	'PRIVATE_MESSAGES'			=> 'Private Nachrichten',
	'PRIVATE_MESSAGING'			=> 'Private Nachrichten',
	'PROFILE'					=> 'Persönlicher Bereich',

	'READING_FORUM'				=> 'Liest Themen in %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'Liest eine globale Bekanntmachung',
	'READING_LINK'				=> 'Folgt dem Forums-Link %s',
	'READING_TOPIC'				=> 'Liest Thema in %s',
	'READ_PROFILE'				=> 'Profil',
	'REASON'					=> 'Grund',
	'RECORD_ONLINE_USERS'		=> 'Der Besucherrekord liegt bei <strong>%1$s</strong> Besuchern, die am %2$s gleichzeitig online waren.',
	'REDIRECT'					=> 'Weiterleiten',
	'REDIRECTS'					=> 'Aufrufe insgesamt',
	'REGISTER'					=> 'Registrieren',
	'REGISTERED_USERS'			=> 'Mitglieder:',
	'REG_USERS_ONLINE'			=> 'Es sind %d Mitglieder und ',
	'REG_USERS_TOTAL'			=> '%d registrierte, ',
	'REG_USERS_TOTAL_AND'		=> '%d registrierte und ',
	'REG_USERS_ZERO_ONLINE'		=> 'Es sind 0 Mitglieder und ',
	'REG_USERS_ZERO_TOTAL'		=> '0 registrierte, ',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 registrierte und ',
	'REG_USER_ONLINE'			=> 'Es ist %d Mitglied und ',
	'REG_USER_TOTAL'			=> '%d registrierter, ',
	'REG_USER_TOTAL_AND'		=> '%d registrierter und ',
	'REMOVE'					=> 'Löschen',
	'REMOVE_INSTALL'			=> 'Bitte lösche, verschiebe oder benenne das Installations-Verzeichnis „install“ um, bevor du das Board benutzt. Solange dieses Verzeichnis existiert, ist nur der Administrations-Bereich zugänglich.',
	'REPLIES'					=> 'Antworten',
	'REPLY_WITH_QUOTE'			=> 'Mit Zitat antworten',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Beantwortet eine globale Bekanntmachung',
	'REPLYING_MESSAGE'			=> 'Beantwortet eine Nachricht in %s',
	'REPORT_BY'					=> 'Gemeldet von',
	'REPORT_POST'				=> 'Diesen Beitrag melden',
	'REPORTING_POST'			=> 'Meldet einen Beitrag',
	'RESEND_ACTIVATION'			=> 'Die Aktivierungs-E-Mail erneut senden',
	'RESET'						=> 'Zurücksetzen',
	'RESTORE_PERMISSIONS'		=> 'Berechtigungen wiederherstellen',
	'RETURN_INDEX'				=> '%sZurück zur Foren-Übersicht%s',
	'RETURN_FORUM'				=> '%sZurück zum zuletzt besuchten Forum%s',
	'RETURN_PAGE'				=> '%sZurück zur vorherigen Seite%s',
	'RETURN_TOPIC'				=> '%sZurück zum zuletzt besuchten Thema%s',
	'RETURN_TO'					=> 'Zurück zu',
	'FEED'						=> 'Feed',
	'FEED_NEWS'					=> 'Neuigkeiten',
	'FEED_TOPICS_ACTIVE'		=> 'Aktive Themen',
	'FEED_TOPICS_NEW'			=> 'Neue Themen',
	'RULES_ATTACH_CAN'			=> 'Du <strong>darfst</strong> Dateianhänge in diesem Forum erstellen.',
	'RULES_ATTACH_CANNOT'		=> 'Du darfst <strong>keine</strong> Dateianhänge in diesem Forum erstellen.',
	'RULES_DELETE_CAN'			=> 'Du <strong>darfst</strong> deine Beiträge in diesem Forum löschen.',
	'RULES_DELETE_CANNOT'		=> 'Du darfst deine Beiträge in diesem Forum <strong>nicht</strong> löschen.',
	'RULES_DOWNLOAD_CAN'		=> 'Du <strong>darfst</strong> Dateianhänge in diesem Forum herunterladen.',
	'RULES_DOWNLOAD_CANNOT'		=> 'Du darfst <strong>keine</strong> Dateianhänge in diesem Forum herunterladen.',
	'RULES_EDIT_CAN'			=> 'Du <strong>darfst</strong> deine Beiträge in diesem Forum ändern.',
	'RULES_EDIT_CANNOT'			=> 'Du darfst deine Beiträge in diesem Forum <strong>nicht</strong> ändern.',
	'RULES_LOCK_CAN'			=> 'Du <strong>darfst</strong> deine Themen in diesem Forum sperren.',
	'RULES_LOCK_CANNOT'			=> 'Du darfst deine Themen in diesem Forum <strong>nicht</strong> sperren.',
	'RULES_POST_CAN'			=> 'Du <strong>darfst</strong> neue Themen in diesem Forum erstellen.',
	'RULES_POST_CANNOT'			=> 'Du darfst <strong>keine</strong> neuen Themen in diesem Forum erstellen.',
	'RULES_REPLY_CAN'			=> 'Du <strong>darfst</strong> Antworten zu Themen in diesem Forum erstellen.',
	'RULES_REPLY_CANNOT'		=> 'Du darfst <strong>keine</strong> Antworten zu Themen in diesem Forum erstellen.',
	'RULES_VOTE_CAN'			=> 'Du <strong>darfst</strong> an Abstimmungen in diesem Forum teilnehmen.',
	'RULES_VOTE_CANNOT'			=> 'Du darfst an Abstimmungen in diesem Forum <strong>nicht</strong> teilnehmen.',

	'SEARCH'					=> 'Suche',
	'SEARCH_MINI'				=> 'Suche…',
	'SEARCH_ADV'				=> 'Erweiterte Suche',
	'SEARCH_ADV_EXPLAIN'		=> 'Zeigt die erweiterten Suchoptionen an',
	'SEARCH_KEYWORDS'			=> 'Suche nach Wörtern',
	'SEARCHING_FORUMS'			=> 'Durchsucht das Forum',
	'SEARCH_ACTIVE_TOPICS'		=> 'Aktive Themen',
	'SEARCH_FOR'				=> 'Suche nach',
	'SEARCH_FORUM'				=> 'Forum durchsuchen…',
	'SEARCH_NEW'				=> 'Neue Beiträge',
	'SEARCH_POSTS_BY'			=> 'Suche Beiträge von',
	'SEARCH_SELF'				=> 'Eigene Beiträge',
	'SEARCH_TOPIC'				=> 'Thema durchsuchen…',
	'SEARCH_UNANSWERED'			=> 'Unbeantwortete Themen',
	'SEARCH_UNREAD'				=> 'Ungelesene Beiträge',
	'SECONDS'					=> 'Sekunden',
	'SELECT'					=> 'Auswählen',
	'SELECT_ALL_CODE'			=> 'Alles auswählen',
	'SELECT_DESTINATION_FORUM'	=> 'Wähle bitte ein Zielforum aus',
	'SELECT_FORUM'				=> 'Wähle ein Forum aus',
	'SEND_EMAIL'				=> 'E-Mail senden',					// Used for submit buttons
	'SEND_EMAIL_USER'			=> 'E-Mail senden an',				// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX
	'SEND_PRIVATE_MESSAGE'		=> 'Private Nachricht senden',
	'SETTINGS'					=> 'Einstellungen',
	'SIGNATURE'					=> 'Signatur',
	'SKIP'						=> 'Zum Inhalt',
	'SMTP_NO_AUTH_SUPPORT'		=> 'Der SMTP-Server unterstützt keine Authentifizierung.',
	'SORRY_AUTH_READ'			=> 'Du hast keine Berechtigung, dieses Forum zu lesen.',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'Du hast keine Berechtigung, diesen Dateianhang herunterzuladen.',
	'SORT_BY'					=> 'Sortiere nach',
	'SORT_JOINED'				=> 'Registrierungsdatum',
	'SORT_LOCATION'				=> 'Wohnort',
	'SORT_RANK'					=> 'Rang',
	'SORT_POSTS'				=> 'Beiträge',
	'SORT_TOPIC_TITLE'			=> 'Betreff des Themas',
	'SORT_USERNAME'				=> 'Benutzername',
	'SPLIT_TOPIC'				=> 'Thema teilen',
	'SQL_ERROR_OCCURRED'		=> 'Beim Laden der Seite ist ein SQL-Fehler aufgetreten. Bitte kontaktiere die %sBoard-Administration%s, falls dieses Problem fortlaufend auftritt.',
	'STATISTICS'				=> 'Statistik',
	'START_WATCHING_FORUM'		=> 'Forum beobachten',
	'START_WATCHING_TOPIC'		=> 'Thema beobachten',
	'STOP_WATCHING_FORUM'		=> 'Forum nicht mehr beobachten',
	'STOP_WATCHING_TOPIC'		=> 'Thema nicht mehr beobachten',
	'SUBFORUM'					=> 'Unterforum',
	'SUBFORUMS'					=> 'Unterforen',
	'SUBJECT'					=> 'Betreff',
	'SUBMIT'					=> 'Absenden',

	'TERMS_USE'			=> 'Nutzungsbedingungen',
	'TEST_CONNECTION'	=> 'Verbindung testen',
	'THE_TEAM'			=> 'Das Team',
	'TIME'				=> 'Zeit',

	'TOO_LARGE'						=> 'Der angegebene Wert ist zu groß.',
	'TOO_LARGE_MAX_RECIPIENTS'		=> 'Die Zahl, die als <strong>Maximale Anzahl zulässiger Empfänger pro Privater Nachricht</strong> angegeben wurde, ist zu groß.',

	'TOO_LONG'						=> 'Der angegebene Wert ist zu lang.',

	'TOO_LONG_AIM'					=> 'Der angegebene AIM-Webname ist zu lang.',
	'TOO_LONG_CONFIRM_CODE'			=> 'Der angegebene Bestätigungscode ist zu lang.',
	'TOO_LONG_DATEFORMAT'			=> 'Das angegebene Datums-Format ist zu lang.',
	'TOO_LONG_ICQ'					=> 'Die angegebene ICQ-Nummer ist zu lang.',
	'TOO_LONG_INTERESTS'			=> 'Die angegebenen Interessen sind zu lang.',
	'TOO_LONG_JABBER'				=> 'Die angegebene Jabber-ID ist zu lang.',
	'TOO_LONG_LOCATION'				=> 'Der angegebene Wohnort ist zu lang.',
	'TOO_LONG_MSN'					=> 'Die angegebene WLM-Adresse ist zu lang.',
	'TOO_LONG_NEW_PASSWORD'			=> 'Das angegebene Passwort ist zu lang.',
	'TOO_LONG_OCCUPATION'			=> 'Die angegebene Tätigkeit ist zu lang.',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'Die angegebene Bestätigung des Passworts ist zu lang.',
	'TOO_LONG_USER_PASSWORD'		=> 'Das angegebene Passwort ist zu lang.',
	'TOO_LONG_USERNAME'				=> 'Der angegebene Benutzername ist zu lang.',
	'TOO_LONG_EMAIL'				=> 'Die angegebene E-Mail-Adresse ist zu lang.',
	'TOO_LONG_EMAIL_CONFIRM'		=> 'Die angegebene Bestätigung der E-Mail-Adresse ist zu lang.',
	'TOO_LONG_WEBSITE'				=> 'Die angegebene Website-Adresse ist zu lang.',
	'TOO_LONG_YIM'					=> 'Die angegebene Yahoo!-ID ist zu lang.',

	'TOO_MANY_VOTE_OPTIONS'			=> 'Du hast versucht, für zu viele Optionen zu stimmen.',

	'TOO_SHORT'						=> 'Der angegebene Wert ist zu kurz.',

	'TOO_SHORT_AIM'					=> 'Der angegebene AIM-Webname ist zu kurz.',
	'TOO_SHORT_CONFIRM_CODE'		=> 'Der angegebene Bestätigungscode ist zu kurz.',
	'TOO_SHORT_DATEFORMAT'			=> 'Das angegebene Datums-Format ist zu kurz.',
	'TOO_SHORT_ICQ'					=> 'Die angegebene ICQ-Nummer ist zu kurz.',
	'TOO_SHORT_INTERESTS'			=> 'Die angegebenen Interessen sind zu kurz.',
	'TOO_SHORT_JABBER'				=> 'Die angegebene Jabber-ID ist zu kurz.',
	'TOO_SHORT_LOCATION'			=> 'Der angegebene Wohnort ist zu kurz.',
	'TOO_SHORT_MSN'					=> 'Die angegebene WLM-Adresse ist zu kurz.',
	'TOO_SHORT_NEW_PASSWORD'		=> 'Das angegebene Passwort ist zu kurz.',
	'TOO_SHORT_OCCUPATION'			=> 'Die angegebene Tätigkeit ist zu kurz.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'Die angegebene Bestätigung für das Passwort ist zu kurz.',
	'TOO_SHORT_USER_PASSWORD'		=> 'Das angegebene Passwort ist zu kurz.',
	'TOO_SHORT_USERNAME'			=> 'Der angegebene Benutzername ist zu kurz.',
	'TOO_SHORT_EMAIL'				=> 'Die angegebene E-Mail-Adresse ist zu kurz.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'Die angegebene Bestätigung der E-Mail-Adresse ist zu kurz.',
	'TOO_SHORT_WEBSITE'				=> 'Die angegebene Website-Adresse ist zu kurz.',
	'TOO_SHORT_YIM'					=> 'Die angegebene Yahoo!-ID ist zu kurz.',

	'TOO_SMALL'						=> 'Der angegebene Wert ist zu klein.',
	'TOO_SMALL_MAX_RECIPIENTS'		=> 'Die Zahl, die als <strong>Maximale Anzahl zulässiger Empfänger pro Privater Nachricht</strong> angegeben wurde, ist zu klein.',

	'TOPIC'				=> 'Thema',
	'TOPICS'			=> 'Themen',
	'TOPICS_UNAPPROVED'	=> 'Mindestens ein Thema in diesem Forum wurde noch nicht freigegeben.',
	'TOPIC_ICON'		=> 'Themen-Symbol',
	'TOPIC_LOCKED'		=> 'Dieses Thema ist gesperrt. Du kannst keine Beiträge editieren oder weitere Antworten erstellen.',
	'TOPIC_LOCKED_SHORT'=> 'Thema gesperrt',
	'TOPIC_MOVED'		=> 'Verschobenes Thema',
	'TOPIC_REVIEW'		=> 'Die letzten Beiträge des Themas',
	'TOPIC_TITLE'		=> 'Titel des Themas',
	'TOPIC_UNAPPROVED'	=> 'Dieses Thema wurde nicht freigegeben.',
	'TOTAL_ATTACHMENTS'	=> 'Dateianhang',
	'TOTAL_LOG'			=> '1 Protokoll-Eintrag',
	'TOTAL_LOGS'		=> '%d Protokoll-Einträge',
	'TOTAL_NO_PM'		=> '0 Private Nachrichten insgesamt',
	'TOTAL_PM'			=> '1 Private Nachricht insgesamt',
	'TOTAL_PMS'			=> '%d Private Nachrichten insgesamt',
	'TOTAL_POSTS'		=> 'Beiträge insgesamt',
	'TOTAL_POSTS_OTHER'	=> 'Beiträge insgesamt: <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> 'Beiträge insgesamt: <strong>0</strong>',
	'TOPIC_REPORTED'	=> 'Dieser Beitrag wurde gemeldet',
	'TOTAL_TOPICS_OTHER'=> 'Themen insgesamt: <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'Themen insgesamt: <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> 'Mitglieder insgesamt: <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> 'Mitglieder insgesamt: <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'Aufgefangene PHP-Fehler: %s',

	'UNABLE_GET_IMAGE_SIZE'	=> 'Die Größe des Bildes konnte nicht ermittelt werden.',
	'UNABLE_TO_DELIVER_FILE'=> 'Die Datei kann nicht übertragen werden.',
	'UNKNOWN_BROWSER'		=> 'Unbekannter Browser',
	'UNMARK_ALL'			=> 'Alle Markierungen entfernen',
	'UNREAD_MESSAGES'		=> 'Ungelesene Nachrichten',
	'UNREAD_PM'				=> '<strong>%d</strong> ungelesene Nachricht',
	'UNREAD_PMS'			=> '<strong>%d</strong> ungelesene Nachrichten',
	'UNREAD_POST'			=> 'Ungelesener Beitrag',
	'UNREAD_POSTS'			=> 'Ungelesene Beiträge',
	'UNWATCHED_FORUMS'			=> 'Du beobachtest die ausgewählten Foren nicht mehr.',
	'UNWATCHED_TOPICS'			=> 'Du beobachtest die ausgewählten Themen nicht mehr.',
	'UNWATCHED_FORUMS_TOPICS'	=> 'Du beobachtest die ausgewählten Elemente nicht mehr.',
	'UPDATE'				=> 'Aktualisiere',
	'UPLOAD_IN_PROGRESS'	=> 'Die Datei wird derzeit hochgeladen.',
	'URL_REDIRECT'			=> 'Wenn dein Browser keine META-Weiterleitung unterstützt, %sklicke hier, um auf die nächste Seite weitergeleitet zu werden%s.',
	'USERGROUPS'			=> 'Gruppen',
	'USERNAME'				=> 'Benutzername',
	'USERNAMES'				=> 'Benutzernamen',
	'USER_AVATAR'			=> 'Benutzeravatar',
	'USER_CANNOT_READ'		=> 'Du kannst keine Beiträge in diesem Forum lesen.',
	'USER_POST'				=> '%d Beitrag',
	'USER_POSTS'			=> '%d Beiträge',
	'USERS'					=> 'Benutzer',
	'USE_PERMISSIONS'		=> 'Berechtigungen des Benutzers testen',

	'USER_NEW_PERMISSION_DISALLOWED'	=> 'Leider bist du nicht berechtigt, diese Funktion zu nutzen. Du hast dich vermutlich erst vor kurzem registriert und musst dich noch mehr im Board beteiligen, damit du diese Funktion nutzen kannst.',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',	// Used in date format dropdown, eg: "Today, 13:37 / 01 Jan 2007, 13:37" ... to join a relative date with calendar date
	'VIEWED'					=> 'Zugriffe',
	'VIEWING_FAQ'				=> 'Betrachtet die häufig gestellten Fragen (FAQ)',
	'VIEWING_MEMBERS'			=> 'Betrachtet die Mitgliederliste',
	'VIEWING_ONLINE'			=> 'Betrachtet „Wer ist online?“',
	'VIEWING_MCP'				=> 'Befindet sich im Moderations-Bereich',
	'VIEWING_MEMBER_PROFILE'	=> 'Betrachtet das Profil eines Mitglieds',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Betrachtet Private Nachrichten',
	'VIEWING_REGISTER'			=> 'Registriert sich',
	'VIEWING_UCP'				=> 'Befindet sich im persönlichen Bereich',
	'VIEWS'						=> 'Zugriffe',
	'VIEW_BOOKMARKS'			=> 'Lesezeichen anzeigen',
	'VIEW_FORUM_LOGS'			=> 'Protokoll-Einträge anzeigen',
	'VIEW_LATEST_POST'			=> 'Neuester Beitrag',
	'VIEW_NEWEST_POST'			=> 'Erster ungelesener Beitrag',
	'VIEW_NOTES'				=> 'Notizen zu diesem Benutzer',
	'VIEW_ONLINE_TIME'			=> 'basierend auf den aktiven Besuchern der letzten Minute',
	'VIEW_ONLINE_TIMES'			=> 'basierend auf den aktiven Besuchern der letzten %d Minuten',
	'VIEW_TOPIC'				=> 'Thema anzeigen',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Bekanntmachung: ',
	'VIEW_TOPIC_GLOBAL'			=> 'Globale Bekanntmachung: ',
	'VIEW_TOPIC_LOCKED'			=> 'Gesperrt: ',
	'VIEW_TOPIC_LOGS'			=> 'Protokoll anzeigen',
	'VIEW_TOPIC_MOVED'			=> 'Verschoben: ',
	'VIEW_TOPIC_POLL'			=> 'Umfrage: ',
	'VIEW_TOPIC_STICKY'			=> 'Wichtig: ',
	'VISIT_WEBSITE'				=> 'Besuche Website',

	'WARNINGS'			=> 'Verwarnungen',
	'WARN_USER'			=> 'Benutzer verwarnen',
	'WELCOME_SUBJECT'	=> 'Willkommen auf %s',
	'WEBSITE'			=> 'Website',
	'WHOIS'				=> 'Whois',
	'WHO_IS_ONLINE'		=> 'Wer ist online?',
	'WRONG_PASSWORD'	=> 'Du hast ein fehlerhaftes Passwort angegeben.',

	'WRONG_DATA_ICQ'			=> 'Die angegebene Nummer ist keine gültige ICQ-Nummer.',
	'WRONG_DATA_JABBER'			=> 'Die angegebene ID ist keine gültige Jabber-ID.',
	'WRONG_DATA_LANG'			=> 'Die von dir ausgewählte Sprache ist nicht gültig.',
	'WRONG_DATA_WEBSITE'		=> 'Die Adresse der Website muss eine gültige URL inklusive des Protokolls sein. Zum Beispiel http://www.phpbb.de/.',
	'WROTE'						=> 'hat geschrieben',

	'YEAR'				=> 'Jahr',
	'YEAR_MONTH_DAY'	=> '(JJJJ-MM-TT)',
	'YES'				=> 'Ja',
	'YIM'				=> 'YIM',
	'YOU_LAST_VISIT'	=> 'Dein letzter Besuch: %s',
	'YOU_NEW_PM'		=> 'Eine neue Private Nachricht wartet auf dich in deinem Posteingang.',
	'YOU_NEW_PMS'		=> 'Neue Private Nachrichten warten auf dich in deinem Posteingang.',
	'YOU_NO_NEW_PM'		=> 'Es warten keine neuen Privaten Nachrichten auf dich.',

	'datetime'			=> array(
		'TODAY'		=> 'Heute',
		'TOMORROW'	=> 'Morgen',
		'YESTERDAY'	=> 'Gestern',
		'AGO'		=> array(
			0		=> 'vor weniger als einer Minute',
			1		=> 'vor %d Minute',
			2		=> 'vor %d Minuten',
			60		=> 'vor 1 Stunde',
		),

		'Sunday'	=> 'Sonntag',
		'Monday'	=> 'Montag',
		'Tuesday'	=> 'Dienstag',
		'Wednesday'	=> 'Mittwoch',
		'Thursday'	=> 'Donnerstag',
		'Friday'	=> 'Freitag',
		'Saturday'	=> 'Samstag',

		'Sun'		=> 'So',
		'Mon'		=> 'Mo',
		'Tue'		=> 'Di',
		'Wed'		=> 'Mi',
		'Thu'		=> 'Do',
		'Fri'		=> 'Fr',
		'Sat'		=> 'Sa',

		'January'	=> 'Januar',
		'February'	=> 'Februar',
		'March'		=> 'März',
		'April'		=> 'April',
		'May'		=> 'Mai',
		'June'		=> 'Juni',
		'July'		=> 'Juli',
		'August'	=> 'August',
		'September' => 'September',
		'October'	=> 'Oktober',
		'November'	=> 'November',
		'December'	=> 'Dezember',

		'Jan'		=> 'Jan',
		'Feb'		=> 'Feb',
		'Mar'		=> 'Mär',
		'Apr'		=> 'Apr',
		'May_short'	=> 'Mai',	// Short representation of "May". May_short used because in English the short and long date are the same for May.
		'Jun'		=> 'Jun',
		'Jul'		=> 'Jul',
		'Aug'		=> 'Aug',
		'Sep'		=> 'Sep',
		'Oct'		=> 'Okt',
		'Nov'		=> 'Nov',
		'Dec'		=> 'Dez',
	),

	'tz'				=> array(
		'-12'	=> 'UTC - 12 Stunden',
		'-11'	=> 'UTC - 11 Stunden',
		'-10'	=> 'UTC - 10 Stunden',
		'-9.5'	=> 'UTC - 9:30 Stunden',
		'-9'	=> 'UTC - 9 Stunden',
		'-8'	=> 'UTC - 8 Stunden',
		'-7'	=> 'UTC - 7 Stunden',
		'-6'	=> 'UTC - 6 Stunden',
		'-5'	=> 'UTC - 5 Stunden',
		'-4.5'	=> 'UTC - 4:30 Stunden',
		'-4'	=> 'UTC - 4 Stunden',
		'-3.5'	=> 'UTC - 3:30 Stunden',
		'-3'	=> 'UTC - 3 Stunden',
		'-2'	=> 'UTC - 2 Stunden',
		'-1'	=> 'UTC - 1 Stunde',
		'0'		=> 'UTC',
		'1'		=> 'UTC + 1 Stunde',
		'2'		=> 'UTC + 2 Stunden',
		'3'		=> 'UTC + 3 Stunden',
		'3.5'	=> 'UTC + 3:30 Stunden',
		'4'		=> 'UTC + 4 Stunden',
		'4.5'	=> 'UTC + 4:30 Stunden',
		'5'		=> 'UTC + 5 Stunden',
		'5.5'	=> 'UTC + 5:30 Stunden',
		'5.75'	=> 'UTC + 5:45 Stunden',
		'6'		=> 'UTC + 6 Stunden',
		'6.5'	=> 'UTC + 6:30 Stunden',
		'7'		=> 'UTC + 7 Stunden',
		'8'		=> 'UTC + 8 Stunden',
		'8.75'	=> 'UTC + 8:45 Stunden',
		'9'		=> 'UTC + 9 Stunden',
		'9.5'	=> 'UTC + 9:30 Stunden',
		'10'	=> 'UTC + 10 Stunden',
		'10.5'	=> 'UTC + 10:30 Stunden',
		'11'	=> 'UTC + 11 Stunden',
		'11.5'	=> 'UTC + 11:30 Stunden',
		'12'	=> 'UTC + 12 Stunden',
		'12.75'	=> 'UTC + 12:45 Stunden',
		'13'	=> 'UTC + 13 Stunden',
		'14'	=> 'UTC + 14 Stunden',
		'dst'	=> '[ Sommerzeit ]',
	),

	'tz_zones'	=> array(
		'-19'	=> '[UTC - 199] Pluto Time',
		'-12'	=> '[UTC - 12] Baker Island Time',
		'-11'	=> '[UTC - 11] Niue Time, Samoa Standard Time',
		'-10'	=> '[UTC - 10] Hawaii-Aleutian Standard Time, Cook Island Time',
		'-9.5'	=> '[UTC - 9:30] Marquesas Islands Time',
		'-9'	=> '[UTC - 9] Alaska Standard Time, Gambier Island Time',
		'-8'	=> '[UTC - 8] Pacific Standard Time',
		'-7'	=> '[UTC - 7] Mountain Standard Time',
		'-6'	=> '[UTC - 6] Central Standard Time',
		'-5'	=> '[UTC - 5] Eastern Standard Time',
		'-4.5'	=> '[UTC - 4:30] Venezuelan Standard Time',
		'-4'	=> '[UTC - 4] Atlantic Standard Time',
		'-3.5'	=> '[UTC - 3:30] Newfoundland Standard Time',
		'-3'	=> '[UTC - 3] Amazon Standard Time, Central Greenland Time',
		'-2'	=> '[UTC - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time',
		'-1'	=> '[UTC - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time',
		'0'		=> '[UTC] Westeuropäische Zeit, Greenwich Mean Time',
		'1'		=> '[UTC + 1] Mitteleuropäische Zeit, West African Time',
		'2'		=> '[UTC + 2] Osteuropäische Zeit, Central African Time',
		'3'		=> '[UTC + 3] Moscow Standard Time, Eastern African Time',
		'3.5'	=> '[UTC + 3:30] Iran Standard Time',
		'4'		=> '[UTC + 4] Gulf Standard Time, Samara Standard Time',
		'4.5'	=> '[UTC + 4:30] Afghanistan Time',
		'5'		=> '[UTC + 5] Pakistan Standard Time, Yekaterinburg Standard Time',
		'5.5'	=> '[UTC + 5:30] Indian Standard Time, Sri Lanka Time',
		'5.75'	=> '[UTC + 5:45] Nepal Time',
		'6'		=> '[UTC + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time',
		'6.5'	=> '[UTC + 6:30] Cocos Islands Time, Myanmar Time',
		'7'		=> '[UTC + 7] Indochina Time, Krasnoyarsk Standard Time',
		'8'		=> '[UTC + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time',
		'8.75'	=> '[UTC + 8:45] Southeastern Western Australia Standard Time',
		'9'		=> '[UTC + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time',
		'9.5'	=> '[UTC + 9:30] Australian Central Standard Time',
		'10'	=> '[UTC + 10] Australian Eastern Standard Time, Vladivostok Standard Time',
		'10.5'	=> '[UTC + 10:30] Lord Howe Standard Time',
		'11'	=> '[UTC + 11] Solomon Island Time, Magadan Standard Time',
		'11.5'	=> '[UTC + 11:30] Norfolk Island Time',
		'12'	=> '[UTC + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time',
		'12.75'	=> '[UTC + 12:45] Chatham Islands Time',
		'13'	=> '[UTC + 13] Tonga Time, Phoenix Islands Time',
		'14'	=> '[UTC + 14] Line Island Time',
		'19'	=> '[UTC + 199] Mercury Time',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'j. M Y, H:i'			=> '1. Jan 2007, 13:57',
		'D j. M Y, H:i'			=> 'Mo 1. Jan 2007, 13:57',
		'j. F Y, H:i'			=> '1. Januar 2007, 13:57',
		'l j. F Y, H:i'			=> 'Montag 1. Januar 2007, 13:57',
		'd.m.Y, H:i'			=> '01.01.2007, 13:57',
		'|j. M Y| H:i'			=> 'Heute, 13:57 / 1. Jan 2007 13:57',
		'|j. F Y| H:i'			=> 'Heute, 13:57 / 1. Januar 2007 13:57',
		'|d.m.Y| H:i'			=> 'Heute, 13:57 / 01.01.2007 13:57',
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D j. M Y, H:i', // Mo 1. Jan 2007, 13:57

));

/*
* Portal XL related language definitions
*/

// Portal
$lang = array_merge($lang, array(
	'PORTAL_MODS'         => 'Mods Datenbank',   
));

// [img] Resize Width Images
$lang = array_merge($lang, array(
   'IMG_CLICK_HERE'   => 'Klicke hier, um das Bild in voller Gr&ouml;sse zu sehen!',
));

// Event Calendar
$lang = array_merge($lang, array(
   'CALENDAR'      => 'Kalender',
   // minical short day names   
   'mini_datetime'   => array(
		'Su'      => 'So',
		'Mo'      => 'Mo',
		'Tu'      => 'Di',
		'We'      => 'Mi',
		'Th'      => 'Do',
		'Fr'      => 'Fr',
		'Sa'      => 'Sa',
   ),
));

// Animate Digits IP Tracking Counter
$lang = array_merge($lang, array(
   'COUNTER'          	=> 'Besucherz&auml;hler',
   'COUNTER_STARTDATE' 	=> 'gez&auml;hlt von %s',
   'HITS_PER_DAY'      	=> 'Treffer pro Tag',
   'HITS_PER_HOUR'      => 'Treffer pro Stunde',
   'HITS_PER_MONTH'   	=> 'Treffer pro Monat',
   'HITS_PER_USER'      => 'Treffer pro User',
   'HITS_PER_WEEK'      => 'Treffer pro Woche',
   'HITS_PER_YEAR'      => 'Treffer pro Jahr',
   'IP_TRACKING_NO'    	=> '[No IP Tracking]',
   'IP_TRACKING_YES'    => '[IP Tracking]',
));

// Knowledge Base
$lang = array_merge($lang, array(
   'KNOWLEDGE_BASE'   => 'Wissensbank',
   'KBASE'            => 'Wissensbank',
));

// Anti Bot Question
$lang = array_merge($lang, array(
   'AB_QUESTION_EXPLAIN'   => 'Dies ist die Frage, die ein Benutzer zum registrieren beantworten muss.',
));

// start Thank Post MOD
$lang = array_merge($lang, array(
   'REMOVE_THANKS'        => 'Entferne Deinen Dank f&uuml;r ',
   'THANK_POST1'         => 'DANKE ',
   'THANK_POST2'         => '\'s Beitrag',
   'THANK_TEXT_1'        => 'Folgende ',
   'THANK_TEXT_2'        => 'Benutzer m&ouml;chten sich f&uuml;r den Beitrag von: ',
   'THANK_TEXT_2pl'      => 'Benutzer w&uuml;rden sich gerne bedanken:',
   'THANK_GENDER_F'      => 'bedanken:',
   'THANK_GENDER_M'      => 'bedanken:',
   'THANK_GENDER_U'      => 'bedanken:',
   'RECEIVED'            => 'empfangen',
   'THANKS'            	 => 'DANKE',
   'GIVEN'               => 'gegeben',
   'TP_UPDATED'          => 'Dein Danke Beitrags-Mod wurde erfolgreich installiert!',
));
// end Thank Post MOD

// Posts per day
$lang = array_merge($lang, array(
   'POSTS_PER_DAY_OTHER'   => 'Artikel pro Tag: <strong>%.2f</strong>',
   'POSTS_PER_DAY_ZERO'    => 'Artikel pro Tag: <strong>0</strong>',
));

// Announcements Centre
$lang = array_merge($lang, array(
   'ANNOUNCEMENT_TITLE_GUESTS'  => 'Guest Announcements local',
   'ANNOUNCEMENT_TITLE'         => 'Site Announcements local',
));

// Portal FAQ
$lang = array_merge($lang, array(
   'FAQ_PORTAL'            => 'Portal FAQ',
   'FAQ_PORTAL_EXPLAIN'    => 'Portal oft gestellte Fragen',
));

// Rules page
$lang = array_merge($lang, array(
   'RULES_PAGE'            => 'Boardregeln',
   'RULES'                 => 'Regeln',
));

// Similar Topics 1.0.0
$lang = array_merge($lang, array(
   'SIMILAR_TOPICS'         => '&Auml;hnliche Beitr&auml;ge',
));

/*
* Welcome PM on First Login (WPM)
* By DualFusion
*/
$lang = array_merge($lang, array(
   'ACP_WELCOME_PM'        => 'Willkommens PN beim erstem Login',
   'LOG_CONFIG_WELCOME_PM' => '<strong>&Auml;ndere Willkommens PN Einstellungen</strong>',
));
/* End WPM */         
   
//-- mod : Contact board administration ------------------------------------------------------------
//-- add
$lang = array_merge($lang, array(
   'CONTACT_BOARD_ADMIN'      	 => 'Kontaktiere die Board Administration',
   'CONTACT_BOARD_ADMIN_SHORT'   => 'Kontakt',
));
//-- fin mod : Contact board administration --------------------------------------------------------

// start mod view or mark unread posts
$lang = array_merge($lang, array(
   'LOGIN_EXPLAIN_VIEWUNREADS'   => 'Du musst eingeloggt sein, um die ungelesene Beitragsliste lesen zu k&ouml;nnen',
   'MARK_PM_UNREAD'         	 => 'PN als ungelesen markieren',
   'MARK_POST_UNREAD'         	 => 'Beitrag als ungelesen markieren',
   'NO_UNREADS'            		 => 'Du hast keine ungelesenen Beitr&auml;ge',
   'PM_MARKED_UNREAD'         	 => 'PN als ungelesen markieren',
   'POST_MARKED_UNREAD'      	 => 'Beitrag als ungelesen markieren',
   'RETURN_INBOX'            	 => 'Zur&uuml;ck zum Posteingang',
   'VIEW_UNREAD_PMS'         	 => 'Ungelesene PNs anschauen',
   'VIEW_UNREADS'            	 => 'Ungelesene Beitr&auml;ge anschauen',
));
// end mod view or mark unread posts

// Character Countdown
$lang = array_merge($lang, array(
	'CHARACTERS_COUNT_DOWN'		=> 'Eingef&uuml;gte Zeichen:',
));

// www.phpBB-SEO.com SEO TOOLKIT BEGIN - TITLE
$lang['Page'] = 'Seite ';
// www.phpBB-SEO.com SEO TOOLKIT END - TITLE
// www.phpBB-SEO.com SEO TOOLKIT BEGIN -> GYM Sitemaps
$lang = array_merge($lang, array(
   'GYM_LINKS' 				=> 'Links',
   'GYM_LINK' 				=> 'Link',
   'GYM_RSS_SLIDE_START'    => 'Scroller starten',
   'GYM_RSS_SLIDE_STOP'    	=> 'Scroller stoppen',
   'GYM_RSS_SOURCE' 		=> 'Quelle',
));
// www.phpBB-SEO.com SEO TOOLKIT END -> GYM Sitemaps
// www.phpBB-SEO.com SEO TOOLKIT BEGIN - Related Topics
$lang['RELATED_TOPICS'] = '&Auml;hnliche Themen';
// www.phpBB-SEO.com SEO TOOLKIT END - Related Topics
	
// Radio Mod
$lang = array_merge($lang, array(
	'RADIO' => 'Radio',
));

// phpbb Calendar Version 0.1.0
$lang = array_merge($lang, array(
   'VIEWING_CALENDAR'         => 'Betrachtet Kalender',
   'VIEWING_CALENDAR_DAY'     => 'Betrachtet Kalendertag',
   'VIEWING_CALENDAR_EVENT'   => 'Betrachtet Kalenderevent',
   'VIEWING_CALENDAR_MONTH'   => 'Betrachtet Kalendermonat',
   'VIEWING_CALENDAR_WEEK'    => 'Betrachtet Kalenderwoche',
   'EDITING_CALENDAR_EVENT'   => 'Bearbeitet Kalenderevent',
   'CREATING_CALENDAR_EVENT'  => 'Erstellt Kalenderevent',
));

// Country Flags Version 3.0.6
$lang = array_merge($lang, array(
	'COUNTRY'			=> 'Land',
	'COUNTRY_FLAGS'		=> 'Landesfahne',
	'TOO_SHORT_FLAG'	=> 'Du musst eine Landesfahne ausw&auml;hlen',
	'GROUP_FLAG'		=> 'Landesfahne f&uuml;r Gruppen',
	'SELECT_FLAG'		=> 'W&auml;hle Deine Landesfahne',
	'SORT_FLAG'			=> 'Landesfahne',
	'USER_FLAG'			=> 'Fahne des Benutzers',
));

// -- Gender MOD 1.0.1
$lang = array_merge($lang, array(
   'GENDER'           => 'Geschlecht',
   'GENDER_EXPLAIN'   => 'Bitte w&auml;hle hier dein Geschlecht aus.',
   'GENDER_X'         => 'Nicht angegeben',
   'GENDER_M'         => 'M&auml;nnlich',
   'GENDER_F'         => 'Weiblich',
));

// Google Search
$lang = array_merge($lang, array(
	'SEARCH_GOOGLE' 	=> 'Google search?',
));

// phpBB AJAX Chat
$lang = array_merge($lang, array(
	'SHOUTBOX'		=> 'Chatbox',
	'CHAT_LABEL'	=> 'In Chatbox',
	'CHAT_TITLE'	=> 'Online',
	'CHAT_WINDOW'	=> 'Chatbox Windowed',
));

// AdvancedBlockMOD 1.0.3						
$lang = array_merge($lang, array(
	'WRONG_TIMEZONE'	=> 'Du hast eine fehlerhafte Zeitzone angegeben. Bitte bleibe auf der Erde!',
));

// Mod_Share_On by JesusADS
$lang = array_merge($lang, array(
	'SHARE_ON'				=> 'Share on ...',
	'SHARE_FACEBOOK'		=> 'Facebook',
	'SHARE_TWITTER'			=> 'Twitter',
	'SHARE_ORKUT'			=> 'Orkut',
	'SHARE_DIGG'			=> 'Digg',
	'SHARE_MYSPACE'			=> 'MySpace',
	'SHARE_DELICIOUS'		=> 'Delicious',
	'SHARE_TECHNORATI'		=> 'Technorati',

	'SHARE_ON_FACEBOOK'		=> 'Share on Facebook',
	'SHARE_ON_TWITTER'		=> 'Share on Twitter',
	'SHARE_ON_ORKUT'		=> 'Share on Orkut',
	'SHARE_ON_DIGG'			=> 'Share on Digg',
	'SHARE_ON_MYSPACE'		=> 'Share on MySpace',
	'SHARE_ON_DELICIOUS'	=> 'Share on Delicious',
	'SHARE_ON_TECHNORATI'	=> 'Share on Technorati',
));

// Toplist MOD 2.0.0RC3						
$lang = array_merge($lang, array(
    'VIEWING_TOPLIST'       => 'Viewing the Top Sites',
));

?>