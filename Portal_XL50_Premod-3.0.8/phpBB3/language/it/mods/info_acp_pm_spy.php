<?php
/**
*
* acp [Italian]
*
* @package disclaimer
* @version 1.0.0
* @copyright (c) 2008 david63
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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

$lang = array_merge($lang, array(
	'ACP_PM_SPY'			=> 'Gestione Messaggi Privati',
	'AUTHOR_IP'				=> 'Autore IP',
	'DATE'					=> 'Data',
	'DELETE_PMS'			=> 'Cancella messaggio',
	'NO_PM_SELECTED'		=> 'Nessun messaggio selezionato',
	'PM_BOX'				=> 'Stato messaggi',
	'PM_SPY_READ'			=> 'Elenco messaggi privati',
	'PM_SPY_READ_EXPLAIN'	=> 'Questo è l’elenco di tutti messaggi privati del tuo forum.',
	'TO'					=> 'A',
	'TOTAL_USERS'			=> 'Totale utenti',
	'PM_COUNT'				=> 'N. messaggi',

	'INSTALL_NOT_DELETED'	=> 'Il file di installazione per questo mod non è stato cancellato',

	'PM_HOLDBOX'			=> 'Conservato',	
	'PM_INBOX'				=> 'Letto',
	'PM_NOBOX'				=> 'Non letto',
	'PM_OUTBOX'				=> 'In uscita',
	'PM_SAVED'				=> 'Salvato',
	'PM_SENTBOX'			=> 'Inviato',

	'SORT_FROM'				=> 'Da',
	'SORT_TO'				=> 'A',
	'SORT_BCC'				=> 'Per conoscenza',
	'SORT_PM_BOX'			=> 'MP in uscita',
	
	'LOG_PM_SPY'			=> '<strong>I messaggi sono stati cancellati dalla gestione messaggi privati</strong><br />',
	'acl_a_pm_spy'          => '<strong>Può gestire i messaggi privati</strong><br />',
));

// Install
$lang = array_merge($lang, array(
	'NO_FOUNDER'				=> 'Non sei autorizzato ad installare questo mod - devi essere un amministratore.',
	'INSTALL_PM_SPY'			=> 'Installazione gestione messaggi privati',
	'COMPLETE'					=> 'Installazione completa ...',
));

?>