<?php
/**
*
* groups [Italian]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 DualFusion - 2008 ..::Frans::..
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_WELCOME_PM'			=> 'Messaggio di benvenuto',
	'ACP_WPM_SETTINGS'			=> 'Configurazione messaggio di benvenuto',

	'LOG_WPM_SETTINGS_UPDATED'	=> '<strong>Configurazione messaggio di benvenuto</strong>',

	'WPM_ALREADY_INSTALLED'	=> 'Il messaggio di benvenuto è già installato sul tuo database!',
	'WPM_BOARD_CONTACT'		=> 'Contatto forum',
	'WPM_BOARD_EMAIL'		=> 'Email forum',
	'WPM_BOARD_SIG'			=> 'Firma del forum',
	'WPM_CPF_VARS'			=> 'Personalizza variabili campi profilo',
	'WPM_ENABLE'			=> 'Attiva WPM',
	'WPM_ENABLE_EXPLAIN'	=> 'Puoi attivare/disattivare questo mod in ogni momento.',
	'WPM_ERROR_EMPTY'		=> 'Il campo <strong>%s</strong> non può essere vuoto',
	'WPM_ERROR_USER'		=> 'Nome utente sconosciuto <strong>%s</strong> nel campo nome utente',
	'WPM_ERROR_DB'			=> 'Si è verificato un problema durante l’aggiornamento <strong>%s</strong>',
	'WPM_INSTALLED'			=> 'Messaggio di benvenuto installato con successo sul tuo database!',
	'WPM_NOTIFY'			=> 'Notifica',
	'WPM_NOTIFY_EXPLAIN'	=> 'Per notificare un messaggio ai nuovi utenti, se pensi che che essi non lo notino.',
	'WPM_PREDEFINED_VARS'	=> 'Variabili predefinite',
	'WPM_SENDER'			=> 'Nome del mittente',
	'WPM_SITE_NAME'			=> 'Nome sito',
	'WPM_SITE_DESC'			=> 'Descrizione sito',
	'WPM_SUBJECT_EXPLAIN'	=> 'L’oggetto del messaggio che gli utenti ricevono.',
	'WPM_TITLE'				=> 'Messaggio di benvenuto al primo login',
	'WPM_TITLE_EXPLAIN'		=> 'Permette di creare una personalizzazione di un messaggio privato. Questo messaggio potrà essere inviato ai nuovi utenti quando effettueranno il primo login.',
	'WPM_UPDATED'			=> 'Messaggio di benvenuto',
	'WPM_USERNAME'			=> 'Nome utente',
	'WPM_USERNAME_EXPLAIN'	=> 'Il nome dell’utente che "invia" il messaggio.',
	'WPM_USER_ID'			=> 'ID utente',
	'WPM_USER_IP'			=> 'IP utente',
	'WPM_USER_EMAIL'		=> 'Email utente',
	'WPM_USER_REGDATE'		=> 'Data registrazione',
	'WPM_USER_LANG_EN'		=> 'Lingua (ITALIANO)',
	'WPM_USER_LANG_LOCAL'	=> 'Linguaggio (LOCALE)',
	'WPM_USER_TZ'			=> 'Fuso orario',
	'WPM_VAR_NAME'			=> 'Nome',
	'WPM_VAR_VAR'			=> 'Variabile',
	'WPM_VAR_EXAMPLE'		=> 'Eesempio',
));
?>