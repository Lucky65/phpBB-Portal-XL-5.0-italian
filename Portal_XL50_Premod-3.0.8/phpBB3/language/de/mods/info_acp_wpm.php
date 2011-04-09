<?php
/**
*
* groups [Deutsch]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 DualFusion - 2008 ..::Frans::..
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @deutsches update by woipi
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
	'ACP_WELCOME_PM'			=> 'Willkommens-PN beim ersten Login',
	'ACP_WPM_SETTINGS'			=> 'Willkommens-PN Einstellungen',

	'LOG_WPM_SETTINGS_UPDATED'	=> '<strong>Willkommens-PN Einstellungen ge&auml;ndert</strong>',

	'WPM_ALREADY_INSTALLED'	=> 'Willkommens-PN ist bereits installiert!',
	'WPM_BOARD_CONTACT'		=> 'Boardkontakt',
	'WPM_BOARD_EMAIL'		=> 'Board-E-Mail',
	'WPM_BOARD_SIG'			=> 'Signatur des Boards',
	'WPM_CPF_VARS'			=> 'Benutzer-Profil-Felder Variablen',
	'WPM_ENABLE'			=> 'Aktiviere Willkommens PN',
	'WPM_ENABLE_EXPLAIN'	=> 'Du kannst diesen Mod jederzeit aus- und anschalten.',
	'WPM_ERROR_EMPTY'		=> 'Feld <strong>%s</strong> darf nicht leer sein',
	'WPM_ERROR_USER'		=> 'Unbekannter Benutzername <strong>%s</strong> im Benutzernamen-Feld',
	'WPM_ERROR_DB'			=> 'Es ist ein Problem w&auml;hrend des Updates aufgetaucht <strong>%s</strong>',
	'WPM_INSTALLED'			=> 'Welcome PM wurde erfolgreich installiert!',
	'WPM_NOTIFY'			=> 'Benachrichtigung',
	'WPM_NOTIFY_EXPLAIN'	=> 'Benachrichtige Benutzer &uuml;ber neue PN, wenn Du denkst, dass sie bisher keine Notiz genommen haben.',
	'WPM_PREDEFINED_VARS'	=> 'Vordefinierte Variablen',
	'WPM_SENDER'			=> 'Name des Senders',
	'WPM_SITE_NAME'			=> 'Site Name',
	'WPM_SITE_DESC'			=> 'Site Beschreibung',
	'WPM_SUBJECT_EXPLAIN'	=> 'Der Titel der Nachicht die gesendet wird.',
	'WPM_TITLE'				=> 'Willkommens-Nachricht beim ersten Login',
	'WPM_TITLE_EXPLAIN'		=> 'Erlaubt Dir eine individuelle Private Nachricht zu erstellen. Diese Nachricht wird an alle neuen Benutzer gesendet, wenn sie sich das erste Mal einloggen.',
	'WPM_UPDATED'			=> 'Willkommens-PN Einstellungen ge&auml;ndert',
	'WPM_USERNAME'			=> 'Benutzername',
	'WPM_USERNAME_EXPLAIN'	=> 'Der Name des Benutzers der die PN "sendet".',
	'WPM_USER_ID'			=> 'Benutzer- ID',
	'WPM_USER_IP'			=> 'Benutzer- IP',
	'WPM_USER_EMAIL'		=> 'Benutzer- Email',
	'WPM_USER_REGDATE'		=> 'Registrationstag',
	'WPM_USER_LANG_EN'		=> 'Sprache (ENGLISH)',
	'WPM_USER_LANG_LOCAL'	=> 'Sprache (LOCAL)',
	'WPM_USER_TZ'			=> 'Zeitzone',
	'WPM_VAR_NAME'			=> 'Name',
	'WPM_VAR_VAR'			=> 'Variable',
	'WPM_VAR_EXAMPLE'		=> 'Beispiel',
));
?>