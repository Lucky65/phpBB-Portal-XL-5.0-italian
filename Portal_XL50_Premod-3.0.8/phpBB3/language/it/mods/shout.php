<?php
/** 
*
* shout [Italian]
*
* @package language
* @version $Id: shout.php 249 2008-02-16 13:08:57Z paul $
* @copyright (c) 2005 phpBB Group 
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
	'MISSING_DIV' 			=> 'Il div dello shoutbox non è stato trovato.',
	'NO_POST_GUEST'         => 'Gli ospiti possono scrivere messaggi.',
	'LOADING' 				=> 'Caricamento',
	'POST_MESSAGE'			=> 'Scrivi',
	'SENDING' 				=> 'Invia messaggio.',
	'MESSAGE_EMPTY'			=> 'Il messaggio è vuoto.',
	'XML_ER' 				=> 'Errore XML.',
	'NO_MESSAGE' 			=> 'Non ci sono messaggi.',
	'NO_AJAX' 				=> 'Non risulta ajax',
	'JS_ERR' 				=> 'Risulta un errore JavaScript. \nErrore:',
	'LINE' 					=> 'Linea',
	'FILE' 					=> 'File',
	'FLOOD_ERROR'	 		=> 'Errore flood',
	'POSTED' 				=> 'Messaggio inviato.',
	
	'NO_QUOTE' 				=> 'Non usare l’elenco, cita o codifica bbcode.',
	'SMILIES' 				=> 'Smilies', 
	'DEL_SHOUT' 			=> 'Sei sicuro di voler cancellare questo messaggio?',
	'NO_SHOUT_ID'	 		=> 'Id messaggio.',
	'MSG_DEL_DONE' 			=> 'Messaggio cancellato',
    'ONLY_ONE_OPEN'         => 'Puoi fare una sola modifica',
    'EDIT'                  => 'Modifica',
    'CANCEL'                => 'Cancella',
    'SENDING_EDIT'          => 'inviata modifica messaggio...',
    'EDIT_DONE'             => 'Messaggio modificato',
	
	'SHOUTBOX'				=> 'Shoutbox',
	
	'SERVER_ERR'			=> 'E’ stato riscontrato un problema durante la richiesta al server',
	
	// No permission errors
	'NO_SMILIE_PERM'    => 'Non sono permessi gli smilies',
	'NO_DELETE_PERM'    => 'Non è permessa la cancellazione dei messaggi',
	'NO_POST_PERM'		=> 'Non sono permessi l’invio di messaggi',
	'NO_EDIT_PERM'		=> 'Non puoi modificare questo messaggio',
	'NO_VIEW_PERM'      => 'Non ti è permessa la visualizzazione dello shoutbox',
	'NO_ADMIN_PERM'     => 'Nessun permesso di amministrazione trovato',
	
	// Installation
	'MOD_INSTALLED'     => 'Questa MOD è stata installata',
	'MOD_UPGRADED'		=> 'Questa MOD è stata aggiornata',
	'MOD_UPDATED'		=> 'Questa MOD è stata aggiornata',
	'NO_FOUNDER'        => 'Solo i fondatori possono eseguire questo file',
	'ONLY_UPGRADE'      => 'Questo file è valido solo per gli aggiornamenti da 1.0.x',
	'ONLY_INSTALL'      => 'Questo file è valido solo per le nuove installazioni',
	'ONLY_UPDATE'       => 'Questo file è valido solo per gli aggiornamenti',
	'ALREADY_UPTODATE'	=> 'Il database è già aggiornato.',
	
));
?>
