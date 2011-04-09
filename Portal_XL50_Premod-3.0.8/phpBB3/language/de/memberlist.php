<?php
/**
*
* memberlist [Deutsch — Du]
*
* @package language
* @version $Id: memberlist.php 471 2010-07-29 18:41:22Z philippk $
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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Am meisten aktiv in Forum',
	'ACTIVE_IN_TOPIC'		=> 'Am meisten aktiv in Thema',
	'ADD_FOE'				=> 'Zu den ignorierten Mitgliedern hinzufügen',
	'ADD_FRIEND'			=> 'Zu den Freunden hinzufügen',
	'AFTER'					=> 'Nach dem',

	'ALL'					=> 'Alle',

	'BEFORE'				=> 'Vor dem',

	'CC_EMAIL'				=> 'Eine Kopie dieser E-Mail an mich senden.',
	'CONTACT_USER'			=> 'Kontaktdaten',

	'DEST_LANG'				=> 'Sprache',
	'DEST_LANG_EXPLAIN'		=> 'Wähle — sofern verfügbar — eine passende Sprache aus, in der der Empfänger die Nachricht erhalten soll.',

	'EMAIL_BODY_EXPLAIN'	=> 'Diese Nachricht wird als reiner Text verschickt, verwende daher kein HTML oder BBCode. Als Antwort-Adresse für die E-Mail wird deine E-Mail-Adresse angegeben.',
	'EMAIL_DISABLED'		=> 'Leider wurden alle E-Mail-Funktionen deaktiviert.',
	'EMAIL_SENT'			=> 'Die E-Mail wurde gesendet.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Diese Nachricht wird als reiner Text verschickt, verwende daher kein HTML oder BBCode. Hinweise zu dem Thema werden der Nachricht automatisch hinzugefügt. Als Antwort-Adresse für die E-Mail wird deine E-Mail-Adresse angegeben.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Du musst eine gültige E-Mail-Adresse für den Empfänger angeben.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Du musst eine Nachricht angeben, die versendet werden soll.',
	'EMPTY_MESSAGE_IM'		=> 'Du musst eine Nachricht angeben, die versendet werden soll.',
	'EMPTY_NAME_EMAIL'		=> 'Du musst den Namen des Empfängers angeben.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Du musst einen Betreff für die E-Mail angeben.',
	'EQUAL_TO'				=> 'Entspricht',

	'FIND_USERNAME_EXPLAIN'	=> 'Benutze dieses Formular, um nach Mitgliedern zu suchen. Es müssen nicht alle Felder ausgefüllt werden. Verwende ein * als Platzhalter für teilweise Übereinstimmungen. Verwende das Format <kbd>JJJJ-MM-TT</kbd> (z.&nbsp;B. <samp>2002-01-01</samp>), um Datumswerte anzugeben. Benutze die Kontrollkästchen, um mehrere Benutzer auszuwählen (mehrere Benutzer werden abhängig vom Formular akzeptiert) und wähle dann „Markierte auswählen“.',
	'FLOOD_EMAIL_LIMIT'		=> 'Du kannst derzeit keine weitere E-Mail versenden. Bitte versuche es später erneut.',

	'GROUP_LEADER'			=> 'Gruppenleiter',

	'HIDE_MEMBER_SEARCH'	=> 'Das Suchformular ausblenden',

	'IM_ADD_CONTACT'		=> 'Kontakt hinzufügen',
	'IM_AIM'				=> 'Bitte beachte, dass du AOL Instant Messenger installiert haben musst, um diese Funktion zu nutzen.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Anwendung herunterladen',
	'IM_ICQ'				=> 'Bitte beachte, dass die Benutzer den Empfang unverlangter Nachrichten deaktiviert haben können.',
	'IM_JABBER'				=> 'Bitte beachte, dass die Benutzer den Empfang unverlangter Nachrichten deaktiviert haben können.',
	'IM_JABBER_SUBJECT'		=> 'Dies ist eine automatische Nachricht, bitte beantworte sie nicht. Nachricht von Benutzer %1$s auf %2$s.',
	'IM_MESSAGE'			=> 'Deine Nachricht',
	'IM_MSNM'				=> 'Bitte beachte, dass du Windows Live Messenger installiert haben musst, um diese Funktion zu nutzen.',
	'IM_MSNM_BROWSER'		=> 'Dein Browser unterstützt diese Funktion nicht.',
	'IM_MSNM_CONNECT'		=> 'Es besteht keine Verbindung zu Windows Live Messenger.\nUm fortzufahren, muss eine Verbindung zu Windows Live Messenger bestehen.',
	'IM_NAME'				=> 'Dein Name',
	'IM_NO_DATA'			=> 'Es gibt keine passenden Kontaktdaten für diesen Benutzer.',
	'IM_NO_JABBER'			=> 'Direkter Kontakt zu Jabber-Benutzern wird auf diesem Board nicht unterstützt. Du benötigst einen installierten Jabber-Client auf deinem Rechner, um den Benutzer kontaktieren zu können.',
	'IM_RECIPIENT'			=> 'Empfänger',
	'IM_SEND'				=> 'Nachricht senden',
	'IM_SEND_MESSAGE'		=> 'Nachricht senden',
	'IM_SENT_JABBER'		=> 'Deine Nachricht an %1$s wurde erfolgreich gesendet.',
	'IM_USER'				=> 'Eine Instant Message senden',

	'LAST_ACTIVE'				=> 'Letzte Aktivität',
	'LESS_THAN'					=> 'Weniger als',
	'LIST_USER'					=> '1 Mitglied',
	'LIST_USERS'				=> '%d Mitglieder',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Du musst registriert und angemeldet sein, um die Liste der Team-Mitglieder anzuschauen.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Du musst registriert und angemeldet sein, um auf die Mitgliederliste zuzugreifen.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Du musst registriert und angemeldet sein, um nach Mitgliedern zu suchen.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Du musst registriert und angemeldet sein, um Profile anzuschauen.',

	'MORE_THAN'				=> 'Mehr als',

	'NO_EMAIL'				=> 'Du bist nicht berechtigt, eine E-Mail an diesen Benutzer zu senden.',
	'NO_VIEW_USERS'			=> 'Du bist nicht berechtigt, die Mitgliederliste oder Profile anzusehen.',

	'ORDER'					=> 'Sortierung',
	'OTHER'					=> 'Anderes Zeichen',

	'POST_IP'				=> 'Erstellt von IP/Domain',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Name des Empfängers',
	'RECIPIENT'				=> 'Empfänger',
	'REMOVE_FOE'			=> 'Aus der Liste der ignorierten Mitglieder entfernen',
	'REMOVE_FRIEND'			=> 'Aus der Liste der Freunde entfernen',

	'SEARCH_USER_POSTS'		=> 'Beiträge des Mitglieds anzeigen',
	'SELECT_MARKED'			=> 'Markierte auswählen',
	'SELECT_SORT_METHOD'	=> 'Sortierung auswählen',
	'SEND_AIM_MESSAGE'		=> 'AIM-Nachricht senden',
	'SEND_ICQ_MESSAGE'		=> 'ICQ-Nachricht senden',
	'SEND_IM'				=> 'Instant Message senden',
	'SEND_JABBER_MESSAGE'	=> 'Jabber-Nachricht senden',
	'SEND_MESSAGE'			=> 'Nachricht',
	'SEND_MSNM_MESSAGE'		=> 'WLM-Nachricht senden',
	'SEND_YIM_MESSAGE'		=> 'YIM-Nachricht senden',
	'SORT_EMAIL'			=> 'E-Mail',
	'SORT_LAST_ACTIVE'		=> 'Letzte Aktivität',
	'SORT_POST_COUNT'		=> 'Beitragszahl',

	'USERNAME_BEGINS_WITH'	=> 'Benutzername fängt an mit',
	'USER_ADMIN'			=> 'Benutzer administrieren',
	'USER_BAN'				=> 'Sperren',
	'USER_FORUM'			=> 'Benutzer-Statistik',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Bislang wurde keine Erinnerung versendet',
		1		=> '%1$d Erinnerung versendet<br />» %2$s',
		2		=> '%1$d Erinnerungen versendet<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Anwesenheit im Board',

	'VIEWING_PROFILE'		=> 'Profil von %s',
	'VISITED'				=> 'Letzte Anmeldung',

	'WWW'					=> 'Website',
));

// -- User achievements 0.0.2
$lang = array_merge($lang, array(
	'ACHIEVE'            	=> 'Benutzerleistungen',
	'40_POSTS'            	=> 'Erreichte 40 Beitr&auml;ge',
	'80_POSTS'            	=> 'Erreichte 80 Beitr&auml;ge',
	'160_POSTS'            	=> 'Erreichte 160 Beitr&auml;ge',
	'240_POSTS'            	=> 'Erreichte 240 Beitr&auml;ge',
	'480_POSTS'            	=> 'Erreichte 480 Beitr&auml;ge',
	'600_POSTS'            	=> 'Erreichte 600 Beitr&auml;ge',
	'1000_POSTS'         	=> 'Erreichte 1000 Beitr&auml;ge',
	'2000_POSTS'         	=> 'Erreichte 2000 Beitr&auml;ge',
	'3000_POSTS'         	=> 'Erreichte &uuml;ber 3000 Beitr&auml;ge',
	'TOPIC_VIEWS_500'      	=> 'Machte ein Thema mit &uuml;ber 500 Sichtungen',
	'TOPIC_VIEWS_1000'      => 'Machte ein Thema mit &uuml;ber 1000 Sichtungen',
	'TOPIC_VIEWS_10000'     => 'Machte ein Thema mit &uuml;ber 10000 Sichtungen',
	'TOPIC_REPLIES_25'      => 'Machte ein Thema mit &uuml;ber 25 Antworten',
	'TOPIC_REPLIES_50'      => 'Machte ein Thema mit &uuml;ber 50 Antworten',
	'TOPIC_REPLIES_100'     => 'Machte ein Thema mit &uuml;ber 100 Antworten',
	'TOPIC_REPLIES_500'     => 'Machte ein Thema mit &uuml;ber 500 Antworten',
	'HAS_ATTACHED'         	=> 'Lud eine Datei hoch',
	'HAS_POLL'            	=> 'Machte eine Abstimmung',
	'UP_AVATAR'            	=> 'Besitzt einen Avatar',
	'FRIEND_5'            	=> 'Erreichte 5 Freunde',
	'FRIEND_10'            	=> 'Erreichte 10 Freunde',
	'FRIEND_20'            	=> 'Erreichte 20 Freunde',
	'FRIEND_50'            	=> 'Erreichte 50 Freunde',
	'JOIN_30'            	=> 'War mindestens f&uuml;r 30 Tag',
	'JOIN_60'            	=> 'War mindestens f&uuml;r 60 Tag',
	'JOIN_365'            	=> 'War mindestens f&uuml;r ein Jahr',
	'POST_PER_DAY_5'      	=> 'Postete 5+ mal am Tag',
	'POST_PER_DAY_10'      	=> 'Postete 10+ mal am Tag',
	'POST_PER_DAY_20'      	=> 'Postete 20+ mal am Tag',
	'VOTED_POLL'         	=> 'W&auml;hlte bei einer Abstimmung',
	'CREATED_TOPIC_10'      => 'Erstellte 10 Themen',
	'CREATED_TOPIC_20'      => 'Erstellte 20 Themen',
	'CREATED_TOPIC_50'      => 'Erstellte 50 Themen',
	'TOTAL_REACH'         	=> 'total erreicht',
	'TROPHY'            	=> 'Leistungstroph&auml;en',
	'TOTAL_POST_REACH'      => 'Total Betragsziele erreicht :',
	'TOPIC_CREATE'         	=> 'Themen Erstellungsziele erreicht :',
	'TOPIC_VIEW'         	=> 'Themen Betrachtungsziele erreicht :',
	'TOPIC_REPLIES'         => 'Themen Antwortziele erreicht :',
	'RANDOM_GOALS'         	=> 'Total Wahlweiseziele erreicht :',
	'MEMBER_GOALS'         	=> 'Total Mitgliederziele erreicht :',
	'FRIEND_GOALS'         	=> 'Total Freundeziele erreicht :',
	'JOIN_GOALS'         	=> 'Total Beitr&auml;ge pro Tag Ziele erreicht :',
	'NONE_YET'            	=> '<strong>Dieser Benutzer erreichte nicht das Minimum bei 10 Zielen um eine Troph&auml;e zu erreichen!</strong>',
 ));

// Friend list on member view by DaMysterious
$lang = array_merge($lang, array(
	'LIST_FRIEND'     		=> '1 Freund',
	'LIST_FRIENDS'			=> '%d Freunde',
	'FRIEND_LIST'			=> 'Freundesliste',
	'FRIEND_AVATAR'			=> 'Avatar',
	'FRIEND_COUNTRY'		=> 'Land',
	'ONLINE_FRIENDS'		=> 'Freunde on-line',
	'OFFLINE_FRIENDS'		=> 'Freunde off-line',
	'VIEW_ALL'				=> 'Zeige alle',
	'NO_FRIEND'				=> 'Keinen Benutzer ausgew&auml;hlt!',
	'TOTAL_FRIENDS'			=> 'Freunde insgesamt',
));

?>