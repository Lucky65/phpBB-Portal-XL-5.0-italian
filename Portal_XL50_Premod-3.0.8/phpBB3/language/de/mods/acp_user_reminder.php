<?php
/** 
*
* acp_user_reminder [Deutsch]
*
* @package language
* @version $Id: acp_user_reminder.php 228 2009-05-21 10:09:57Z lefty74 $
* @copyright (c) 2008 lefty74
* @translation  by Plati
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


/**
* DO NOT CHANGE
*/
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

// Announcement  settings
$lang = array_merge($lang, array(
	'TITLE'											=> 'User Reminder',
	'TITLE_EXPLAIN'									=> 'Hier hast du die Möglichkeit, deine Mitglieder per Mail zu erinnern, die sich nicht aktiv am Forum beteiligen',

	//Configuration text
	'GENERAL_CONFIGURATION' 						=> 'Allgemeine Konfiguration',
	'CATEGORY_CONFIGURATION' 						=> 'Kategorie Konfiguration',
	'LOGGING_CONFIGURATION' 						=> 'Logging Konfiguration',
	'USER_REMINDER_ENABLE'							=> 'Automatische Erinnerung aktivieren',
	'USER_REMINDER_ENABLE_EXPLAIN'					=> 'Haupteinstellung um die automatische Erinnerung zu aktivieren/deaktivieren. Weiter unten kannst du Einstellungen zur automatischen / manuellen Erinnerung vornehmen',
	'USER_REMINDER_BCC_EMAIL_ADDRESS'				=> 'Blind copy Email Addresse',
	'USER_REMINDER_BCC_EMAIL_ADDRESS_EXPLAIN'		=> 'Trage hier eine Email Addresse ein die von einer Erinnerungsmail eine blind copy geschickt bekommt. Lass das Feld frei, um diese Funktion auszuschalten.',
	'USER_REMINDER_IGNORE_NO_EMAIL'					=> 'Ignoriere Mitglieder, die keine Informationen per E-Mail von Administratoren erhalten möchten',
	'USER_REMINDER_IGNORE_NO_EMAIL_EXPLAIN'			=> '"Ja" überschreibt die Einstellung im persönlichen Bereich eines Mitglieds, dass er/sie keine Informationen per E-Mail von Administratoren erhalten möchte',
	'USER_REMINDER_PROTECTED_USERS'					=> 'Geschützte Mitglieder',
	'USER_REMINDER_PROTECTED_USERS_EXPLAIN'			=> 'Eine Liste der user_id’s welche geschützt sind und keine Erinnerungen erhalten. Du kannst den Erinnerungsschutz auch im Geschützte Mitglieder Bereich entfernen.<br /><br />WICHTIG! Beim Hinzufügen von user id’s beachten, daß diese mit einem Komma getrennt werden. ',
	'USER_REMINDER_PROTECTED_GROUPS'				=> 'Protected Groups',
	'USER_REMINDER_PROTECTED_GROUPS_EXPLAIN'		=> 'Selektiere hier die Gruppen welche geschützt sind und keine Erinnerungen erhalten.<br /><br />WICHTIG! Du kannst den Erinnerungsschutz der Benutzer in diesen Gruppen <b>nicht</b> im Geschützte Mitglieder Bereich entfernen. Dies kann nur hier durch deselektieren der Gruppe erfolgen.<br /><br />Um alle Gruppen zu deselektieren, einfach auf <em>Keine Gruppen selektiert</em> gehen.',
	'USER_REMINDER_DELETE_CHOICE'					=> 'Auswahl, wenn Mitglieder gelöscht werden sollen',
	'USER_REMINDER_DELETE_CHOICE_EXPLAIN'			=> 'Wenn du Mitglieder löschen möchtest, wähle hier wie sie gelöscht werden sollen',
	'USER_REMINDER_ZERO_POSTER_ENABLE'				=> 'Erinnere Nullposter',
	'USER_REMINDER_ZERO_POSTER_DAYS'				=> 'Anzahl der Tage nach der Registrierung, nach der eine Erinnerung gesendet werden soll',
	'USER_REMINDER_ZERO_POSTER_DAYS_EXPLAIN'		=> 'Wenn automatisch gesetzt ist, wird nach x Tagen nach der Registrierung eine Erinnerungsmail versendet',
	'USER_REMINDER_INACTIVE_ENABLE'					=> 'Erinnere inaktive Mitglieder',
	'USER_REMINDER_INACTIVE_DAYS'					=> 'Anzahl der Tage nach dem letzten Login, nach dem eine Erinnerung gesendet werden soll. Die Anzahl der Mitgliedsbeiträge ist in den Klammern angegeben.',
	'USER_REMINDER_INACTIVE_DAYS_EXPLAIN'			=> 'Wenn automatisch gesetzt ist, wird nach x Tagen nach dem letzten Login eine Erinnerungsmail versendet',
	'USER_REMINDER_NOT_LOGGED_IN_ENABLE'			=> 'Erinnere aktivierte aber nie eingeloggte Mitglieder',
	'USER_REMINDER_NOT_LOGGED_IN_DAYS'				=> 'Anzahl der Tage nach der Aktivierung, nach der an nie eingeloggte Mitglieder eine Erinnerung gesendet werden soll',
	'USER_REMINDER_NOT_LOGGED_IN_DAYS_EXPLAIN'		=> 'Wenn automatisch gesetzt ist, wird nach x Tagen nach der Aktivierung eine Erinnerungsmail versendet',
	'USER_REMINDER_INACTIVE_STILL_ENABLE'			=> 'Erinnere Mitglieder ein zweites Mal',
	'USER_REMINDER_INACTIVE_STILL_ENABLE_EXPLAIN'	=> 'Wenn keine Reaktion auf eine frühere Erinnerung folgt, wird dem Mitglied eine zweite Erinnerungsmail geschickt.  Die Anzahl der Mitgliedsbeiträge ist in den Klammern angegeben.',
	'USER_REMINDER_USERS_PER_PAGE'					=> 'Benutzer pro Seite',
	'USER_REMINDER_USERS_PER_PAGE_EXPLAIN'			=> 'Anzahl der Benutzer die pro Seite angezeigt werden. Beim Wert 0 wird der Bordwert der Themen pro Seite genommen, i.e. %d.',
	'USER_REMINDER_LOGGING_OPTIONS'					=> 'Logging der folgenden Möglichkeiten',
	'USER_REMINDER_LOGGING_OPTIONS_EXPLAIN'			=> 'Selektiere welche der folgenden Aktionen geloggt werden.',
	'USER_REMINDER_LOG_OPT_SCRIPT'					=> 'Ausführung des automatischen Reminder script',
	'USER_REMINDER_LOG_OPT_USERS_REACT'				=> 'Benutzer die auf Erinnerungen reagieren, d.h. dessen Erinnerungen löschen',
	'USER_REMINDER_LOG_OPT_AUTO_EMAILS'				=> 'Logging der automatischen emails an Benutzer',
	'USER_REMINDER_INACTIVE_STILL_OPTIONS'			=> 'Zweite Erinnerung basiert auf',
	'USER_REMINDER_INACTIVE_STILL_OPTIONS_EXPLAIN'	=> 'Basis für die zweite Erinnerung, z.B. wenn Nullposter angeklickt ist, wird die zweite Erinnerung nur an die Nullposter geschickt. Wenn keine Boxen angeklickt sind ist es dasselbe als wenn alle Boxen angeklickt sind.',
	'USER_REMINDER_INACTIVE_STILL_DAYS'				=> 'Anzahl der Tage nach der ersten Erinnerung, nach denen eine zweite verschickt wird',
	'USER_REMINDER_INACTIVE_STILL_DAYS_EXPLAIN'		=> 'Wenn automatisch gesetzt ist, wird nach x Tagen nach dem Versand einer ersten Erinnerungsmail von oben eine zweite Erinnerung versendet. Wenn oben mehr als eine Möglichkeit angeklickt ist, wird die zweite Erinnerungsmail nach x Tagen nach dem Versand der ersten gesendet, z.B. wenn Nullposter und inaktive Mitglieder angeklickt sind, wird die zweite Erinnerung x Tage nach der ersten von den beiden Erinnerungen gesendet.',

	'YES'			=> 'Ja',
	'NO'			=> 'Nein',
	'MANUAL'		=> 'Manuell',
	'AUTOMATIC'		=> 'Automatisch',
	
	'UR_NONE_SELECTED'		=> 'Keine Gruppen selektiert',
	
	// Titles and Explanations of the ACP sections
	'ZERO_POSTS_TITLE'				=> 'Nullposter',
	'ZERO_POSTS_TITLE_EXPLAIN'		=> 'Hier findest du eine Liste von Mitgliedern, die noch keine Beiträge geschrieben haben und sich vor mehr als %d Tagen registriert haben. Du kannst auch sehen, ob ein Mitglied bereits Erinnerungen erhalten hat. Von hier kannst du Nullpostern eine Erinnerungsmail schicken oder diese Erinnerungen mittels des Auswahlfeldes löschen',
	'INACTIVE_TITLE'				=> 'Inaktive Mitglieder',
	'INACTIVE_TITLE_EXPLAIN'		=> 'Hier findest du eine Liste von Mitgliedern, die sich seit mehr als %d Tagen nicht mehr eingeloggt haben. Du kannst auch sehen, ob ein Mitglied bereits Erinnerungen erhalten hat. Von hier kannst du inaktiven Mitgliedern eine Erinnerungsmail schicken oder diese Erinnerungen mittels des Auswahlfeldes löschen',
	'NOT_LOGGED_IN_TITLE'			=> 'Aktivierte aber nie eingeloggte Mitglieder',
	'NOT_LOGGED_IN_TITLE_EXPLAIN'	=> 'Hier findest du eine Liste von Mitgliedern, die ihren Account aktiviert haben, sich nach der Aktivierung jedoch nie eingeloggt haben. Du kannst auch sehen, ob ein Mitglied bereits Erinnerungen erhalten hat. Von hier kannst du nie eingeloggten Mitgliedern eine solche Erinnerungsmail schicken oder diese Erinnerungen mittels des Auswahlfeldes löschen',
	'INACTIVE_STILL_TITLE'			=> 'Zweite Erinnerungen',
	'INACTIVE_STILL_TITLE_EXPLAIN'	=> 'Hier findest du eine Liste von Mitgliedern, die auf die erste an sie versandte Erinnerungsmail nicht reagiert haben (Nullposter, inaktive oder nicht eingeloggte Mitglieder). Diese Erinnerung wurde vor mehr als %d Tagen an sie versandt. Von hier kannst du eine zweite Erinnerungsmail verschicken oder diese zweiten Erinnerungen mittels des Auswahlfeldes löschen',
	'PROTECTED_USERS_TITLE'			=> 'Geschützte Mitglieder',
	'PROTECTED_USERS_TITLE_EXPLAIN'	=> 'Hier findest du eine Liste von Mitgliedern, die von Erinnerungen geschützt sind. Von hier kannst du alle Erinnerungen als auch den Erinnerungsschutz selbst entfernen. Für Mitglieder in geschützten Gruppen kann der Erinnerungsschutz nur von der Konfigurationsseite entfernt werden.',
	'NON_EMAIL_RECEIVERS_EXPLAIN'	=> '(x) kennzeichnet Mitglieder, die die Einstellung ’Administratoren dürfen mir Informationen per E-Mail schicken:’ auf "Nein" gesetzt haben',
	'USERS_IN_GROUP_EXPLAIN'		=> '[x] kennzeichnet Mitglieder aus einer geschützten Gruppe. Die Entferne Erinnerungsschutz option wird das Mitglied nicht von dieser Liste entfernen!',

	// Row Titles
	'USER_POSTS'		=> 'Beiträge',
	'USER_LASTVISIT'	=> 'Letzte Anmeldung',
	'USER_REGDATE'		=> 'Registrierung',
	'REMINDED_POSTS'			=> 'Als Nullposter <br /> erinnert',
	'REMINDED_INACTIVE'			=> 'Als inaktiv <br /> erinnert',
	'REMINDED_NOT_LOGGED_IN'	=> 'Als nicht eingeloggt <br /> erinnert',
	'REMINDED_INACTIVE_STILL'	=> 'Zum zweiten Mal <br /> erinnert',


	'TIME_SPENT'	=> 'vor %d Tag(en)',
	'TOTAL_USERS'	=> '%1$s von %2$s Benutzern ',
	'TOTAL_USERS_PCT'	=> '(%.2f%% aller Benutzer)',

	'NO_USERS_FOUND'	=> 'Keine Mitglieder gefunden',	
	
	//ACP Config confirmation
	'USER_UPDATED'			=> 'User Reminder Vorgang erfolgreich durchgeführt',	
	'NO_USER_UNPROTECTED'	=> 'Kein Erinnerungsschutz entfernt. <br/>Nur Mitglieder in geschützten Gruppen wurden selektiert.',
	'ERROR_USER_UPDATED'	=> 'Keine Erinnerungsmails versandt.<br/>Deine Auswahl beinhaltete nur Mitglieder, denen keine Erinnerung geschickt werden kann',	
	'USERS_DELETED'			=> 'Mitglied(er) gelöscht',	
	'ERROR_USERS_DELETED'	=> 'Die folgenden Mitglied(er) konnten nicht gelöscht werden:<br/> %s',	

	'UR_TOO_MANY_CHARS'		=> 'Es wurde versuch %d Buchstaben zu speichern. Ein Maximum von 255 Buchstaben kann gespeichert werden. Solltest Du mehr als 255 Buchstaben benötigen bestehe die Möglichkeit einen neue Gruppe zu kreieren um vor Erinnerungen zu schützen.',

	'ERROR_EMAIL_CONFIRM_OPERATION' 	=> 'Bitte beachte, dass sich in deiner Auswahl Mitglieder befinden, mit denen dieser Vorgang bereits ausgeführt wurde.<br/>',	
	'ERROR_NOEMAIL_CONFIRM_OPERATION' 	=> 'In deiner Auswahl befinden sich Mitglieder, die gewählt haben, keine Informationen per E-Mail von Administratoren zu erhalten. Diesen werden keine Erinnerungsmails geschickt.<br/>',	
	'DELETE_USER_CONFIRM_OPERATION' 	=> 'Du hast die Auswahl getroffen, Mitglieder zu löschen. <strong>Bitte beachte, dass dieser Vorgang nicht mehr rückgängig gemacht werden kann.</strong><br/>',	
	'EMAIL_DELETED_USERS' 				=> 'Email an die gelöschten Mitglieder senden?',	

	'USER_REMINDER_CONFIG_UPDATED'	=> 'User Reminder Konfiguration erfolgreich aktualisiert',

	//selection options
	'DISPLAY_CHOICE'	=> 'Zeige',
	'REMINDER'			=> 'Sende Erinnerungsmail',
	'CLEAR'				=> 'Lösche Erinnerung',	
	'CLEAR_ALL'			=> 'Lösche all Erinnerungen',	
	'PROTECT_USER'		=> 'Schütze vor Erinnerungen',
	'DELETE_USER'		=> 'Lösche Mitglied',
	'UNPROTECT_USER'	=> 'Entferne Erinnerungsschutz',
	'ALL'				=> 'Alle',
	'REMINDED'			=>	'Erinnerte',
	'NOT_REMINDED'		=> 'Nicht Erinnerte',
	'REMINDER_DATE'		=> 'Erinnerungs Datum',
	
	//install vars
	'UR_CONFIG_FIELDS_UPDATED_CREATED'	=>	'Konfig Felder erstellt/updated',
	'UR_INSTALL_COMPLETE'				=> 	'<strong>User Reminder Installation komplett. Bitte lösche diesen Ordner (/install)!!</strong>',
	'UR_DELETE_COMPLETE'				=> 	'<strong>User Reminder De-Installation komplett. Bitte lösche diesen Ordner (/install)!!	</strong>',
	'UR_INSTALL_RETURN'					=> 	'<br /><br /><br />%sHier%s klicken um zurück zum Board Index zurückzukehren.',
	'UR_CONFIGS_CREATED'				=> 	'User Reminder Konfig Felder wurden kreiert.',
	'UR_USER_FIELDS_ADDED'				=>	'Benutzerfelder hinzugefügt und indexed',
	'UR_USER_FIELDS_DELETED'			=>	'Benutzerfelder gelöscht',
	'UR_BACKUP_WARN'					=> 	'Vor der Installation daran denken einen backup der Datenbank zu machen!!!',
	'UR_INSTALL_DESC'					=> 	'Diese Installationdatei erstellt die Datenbank felder und entsprechenden Module. <br />Um weite:',
	'UR_NEW_INSTALL'					=> 	'New Installation',
	'UR_UPGRADE_DESC'					=> 	'This installation file will upgrade/delete the Database table/fields and add/remove the appropriate module. <br />To proceed please click on the appropriate action below:',
	'UR_UPGRADE'				=> 	'Upgrade to %s',
	'UR_UP_TO_DATE'			=> 	'Version %s is currently installed on your system which is the latest up-to-date version',

	'UR_INSTALL_REDIRECT'	=> 	'Please wait while you are being redirected to complete the installation.',
	'UR_UNINSTALL_REDIRECT'	=> 	'Please wait while you are being redirected to complete the deletion.',
	'UR_UNINSTALL'			=> 	'Uninstall',

	'UR_MODULE_ADDED'			=> 	'User Reminder Module has been (re)added.',
	'UR_TABLE_CONFIG_DELETE'	=> 	'User Reminder Config fields deleted   <br />',
	'UR_MODULE_DELETED'			=> 	'User Reminder Module has been deleted   <br />',

));

?>