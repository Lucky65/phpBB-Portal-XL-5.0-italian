<?php
/**
*
* @package phpBB3 FAQ Manager
* @copyright (c) 2007 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/05/16
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_FAQ_MANAGER'			=> 'Gestione FAQ',

	'BACKUP_LOCATION_NO_WRITE'	=> 'Impossibile salvare. Controlla i permessi della directory store/faq_backup/ e ogni directory con relativi files in essa contenuti.',
	'BAD_FAQ_FILE'				=> 'Il file che stai cercando di modificare non è file FAQ.',

	'CAT_ALREADY_EXISTS'		=> 'Una categoria con lo stesso nome esiste già',
	'CATEGORY_NOT_EXIST'		=> 'La categoria richiesta non esiste.',
	'CREATE_CATEGORY'			=> 'Crea categoria',
	'CREATE_FIELD'				=> 'Crea campo',

	'DELETE_CAT'				=> 'Cancella categoria',
	'DELETE_CAT_CONFIRM'		=> 'Sei sicuro di voler cancellare questa categoria?  Tutti i campi con relativa categoria verrano eliminati!',
	'DELETE_VAR'				=> 'Cancella campo',
	'DELETE_VAR_CONFIRM'		=> 'Sei sicuro di voler cancellare questo campo?',

	'FAQ_CAT_LIST'				=> 'Qui puoi vedere e modificare le categorie esistenti.',
	'FAQ_EDIT_SUCCESS'			=> 'La FAQ è stata aggiornata correttamente.',
	'FAQ_FILE_NOT_EXIST'		=> 'Il file che cerchi di modificare non esiste.',
	'FAQ_FILE_NO_WRITE'			=> 'Impossibile aggiornare il file.  Controlla i permessi del file che cerchi di modificare.',
	'FAQ_FILE_SELECT'			=> 'Seleziona il file da modificare.',

	'LANGUAGE'					=> 'Lingua',
	'LOAD_BACKUP'				=> 'Carica backup',

	'NAME'						=> 'Nome',
	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Non è consentito modificare files fuori dalla directory language.',
	'NO_FAQ_FILES'				=> 'Non sono disponibile files FAQ.',
	'NO_FAQ_VARS'				=> 'Non risultano variabili nel file FAQ.',

	'VAR_ALREADY_EXISTS'		=> 'Un campo con lo stesso nome siste già',
	'VAR_NOT_EXIST'				=> 'La variabile richiesta non esiste.',
));

?>