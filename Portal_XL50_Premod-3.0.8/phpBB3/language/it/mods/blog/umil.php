<?php
/**
*
* @package phpBB3 User Blog
* @version $Id$
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/13
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
	'ADDING_FIRST_BLOG'					=> 'Aggiungi la prima voce blog',

	'FIXING_MAX_POLL_OPTIONS'			=> 'Fissa le opzioni massime sondaggio',
	'FIXING_MISSING_STYLES'				=> 'Reimposta tutti gli stili che non esistono più.',

	'INSTALLING_ARCHIVE_PLUGIN'			=> 'Installa archivio plugin',

	'SETTING_DEFAULT_PERMISSIONS'		=> 'Configurazione permessi ai valori predefiniti',
	'SUCCESSFULLY_UPDATED_UMIL_RETURN'	=> 'Hai correttamente aggiornato alla versione 1.0.7.  A causa del nuovo sistema di installazione per la versione 1.0.8 e oltre, è necessario completare il processo di aggiornamento in corso <a href="%s">qui</a>.',

	'USER_BLOG_MOD'						=> 'Mod blog utente',
	'USE_OLD_UPDATE_SCRIPT'				=> 'Le versioni precedenti alla 0.9.0 possono essere aggiornate usando questo metodo, è necessario utilizzare lo script precedente per il primo aggiornamento, puoi tornare a questo script per fare qualsiasi ulteriore aggiornamento.<br />Il precedente aggiornamento è localizzato <a href="%s">qui</a>.',
));

?>