<?PHP

/** 
*
* @mod package		Download Mod 6
* @file				dl_install.php 2 2009/10/23 OXPUS
* @copyright		(c) 2008 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @copyright        (c) 2009, 2011 luckylab.eu - update translation on 2011/02/08
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/*
* [ italian ] language file for Download MOD 6
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

$lang = array_merge($lang, array(
	'DOWNLOAD_MOD'						=> 'Download MOD',

	'INSTALL_DOWNLOAD_MOD'				=> 'Installazione Mod Download',
	'INSTALL_DOWNLOAD_MOD_CONFIRM'		=> 'Qui puoi installare il mod Download per il tuo forum.<br />Clicca sul pulsante per continuare.',
	'UPDATE_DOWNLOAD_MOD'				=> 'Aggiornamento Mod Downloads',
	'UPDATE_DOWNLOAD_MOD_CONFIRM'		=> 'Qui puoi aggiornare il mod Download per il tuo forum.<br />Clicca sul pulsante per continuare.',
	'UNINSTALL_DOWNLOAD_MOD'			=> 'Disinstallazione Mod Download',
	'UNINSTALL_DOWNLOAD_MOD_CONFIRM'	=> 'Qui puoi disinstallare completamente il mod Download per il tuo forum.<br />Clicca sul pulsante per continuare.',
));

?>