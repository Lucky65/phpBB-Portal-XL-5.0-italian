<?php
/** 
*
* flags [Italian]
*
* @package language
* @version $Id: flags.php,v 1.003 2007/05/20 12:25:00 nedka Exp $
* @copyright (c) 2007 nedka (Nguyen Dang Khoa) 
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

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

// Country Flags
$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'		=> 'Utilizzando questo modulo è possibile aggiungere, modificare, visualizzare ed eliminare le bandiere nazionali. Ogni nome nazione deve avere il suo codice nazione.',
	'ADD_FLAG'				=> 'Aggiungi una nuova bandiera nazionale',

	'FLAG_ADDED'			=> 'La bandiera nazionale è stata eliminata.',
	'FLAG_CODE'				=> 'Codice nazione',
	'FLAG_COUNTRY'			=> 'Nome nazione',
	'FLAG_IMAGE'			=> 'Immagine nazione',
	'FLAG_IMAGE_EXPLAIN'	=> 'Utilizza questo per definire una piccola immagine associata alla bandiera nazionale. Il percorso è relativo alla root del tuo phpBB, es. <samp>images/flags</samp>',
	'FLAG_REMOVED'			=> 'La bandiera nazionale è stata cancellata.',
	'FLAG_UPDATED'			=> 'La bandiera nazionale è stata aggiornata.',

	'MUST_SELECT_FLAG'		=> 'Devi selezionare una bandiera nazionale.',

	'NO_FLAG'				=> 'Nessuna nazione assegnata',
	'NO_FLAG_CODE'			=> 'Non hai specificato un codine nazione per questa bandiera.',
	'NO_FLAG_COUNTRY'		=> 'Non hai specificato un nome per questa bandiera.',
	'NO_UPDATE_FLAGS'		=> 'La bandiera nazionale è stata cancellata. Tuttavia gli account utente o gruppi che utilizzano questo bandiera nazionale non sono stati aggiornati. Sarà necessario reimpostare manualmente la bandiera nazionale su questi account.',

	'TOTAL_USERS'			=> 'Totale utenti',

	'USER_FLAG_UPDATED'		=> 'Nazione utente aggiornata.',
));

?>