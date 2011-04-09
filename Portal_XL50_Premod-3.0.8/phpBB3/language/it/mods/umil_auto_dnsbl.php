<?php
/** 
*
* @package Advanced Block Mod
* @version $Id: umil_auto_dnsbl.php, v 1.002 2009/05/13 Martin Truckenbrodt Exp$
* @copyright (c) 2009 phpBB Group 
* @copyright (c) 2010 luckylab.eu - translated for portal xl on 2010/04/10
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'INSTALL_ADVANCED_BLOCK_MOD'			=> 'Installa Mod blocco avanzato',
	'INSTALL_ADVANCED_BLOCK_MOD_CONFIRM'	=> 'Sei pronto per installare la Mod blocco avanzato?',

	'ADVANCED_BLOCK_MOD'					=> 'Mod blocco avanzato',
	'ADVANCED_BLOCK_MOD_EXPLAIN'			=> 'Funzioni Mod blocco avanzato per phpBB3',

	'UNINSTALL_ADVANCED_BLOCK_MOD'			=> 'Eliminazione Mod blocco avanzato',
	'UNINSTALL_ADVANCED_BLOCK_MOD_CONFIRM'	=> 'Sei pronto per disinstallare la Mod blocco avanzato? Tutte le configurazioni e i dati saranno salvati da questa Mod saranno eliminate!',
	'UPDATE_ADVANCED_BLOCK_MOD'				=> 'Aggiornamento Mod blocco avanzato',
	'UPDATE_ADVANCED_BLOCK_MOD_CONFIRM'		=> 'Sei pronto per aggiornare la Mod blocco avanzato?',
	'INSTALL_ADVANCED_BLOCK_MOD'			=> 'Installazione Mod blocco avanzato',
	'INSTALL_ADVANCED_BLOCK_MOD_CONFIRM'	=> 'Sei pronto per installare la Mod blocco avanzato',
	'INSTALL_ADVANCED_BLOCK_MOD'			=> 'Installa Mod blocco avanzato',
	'INSTALL_ADVANCED_BLOCK_MOD_CONFIRM'	=> 'Sei pronto per installare la Mod blocco avanzato?',

	'INSTALL_ADVANCED_BLOCK_MOD_LIST'			=> 'Installazione Blacklists Mod blocco avanzato ',
	'INSTALL_ADVANCED_BLOCK_MOD_LIST_CONFIRM'	=> 'Sei pronto per installare le Blacklists della Mod blocco avanzato?',

	'ADVANCED_BLOCK_MOD_LIST'					=> 'Blacklists Mod blocco avanzato',
	'ADVANCED_BLOCK_MOD_LIST_EXPLAIN'			=> 'Blacklists per Mod blocco avanzato',

	'UNINSTALL_ADVANCED_BLOCK_LIST_MOD'			=> 'Eliminazione Blacklists Mod blocco avanzato',
	'UNINSTALL_ADVANCED_BLOCK_LIST_MOD_CONFIRM'	=> 'Sei pronto per disinstallare le Blacklists della Mod blocco avanzato? ',
	'UPDATE_ADVANCED_BLOCK_MOD_LIST'			=> 'Aggiornamento Blacklists Mod blocco avanzato',
	'UPDATE_ADVANCED_BLOCK_MOD_LIST_CONFIRM'	=> 'Sei pronto per aggiornare le Blacklists della Mod blocco avanzato?',
	'INSTALL_ADVANCED_BLOCK_MOD_LIST'			=> 'Installazione Blacklists Mod blocco avanzato',
	'INSTALL_ADVANCED_BLOCK_MOD_LIST_CONFIRM'	=> 'Sei pronto per installare le Blacklists della Mod blocco avanzato?',
));

?>