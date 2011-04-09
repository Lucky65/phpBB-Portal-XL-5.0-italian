<?PHP

/** 
*
* @mod package		Download Mod 6
* @file				dl_install.php 3 2009/10/23 OXPUS
* @copyright		(c) 2008 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/*
* [ german ] language file for Download MOD 6
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

	'INSTALL_DOWNLOAD_MOD'				=> 'Download MOD installieren',
	'INSTALL_DOWNLOAD_MOD_CONFIRM'		=> 'Hiermit installiert du die Download MOD in dein Forum.<br />Klicke auf den Button, um fortzufahren.',
	'UPDATE_DOWNLOAD_MOD'				=> 'Download MOD aktualisieren',
	'UPDATE_DOWNLOAD_MOD_CONFIRM'		=> 'Hiermit aktualisierst du die Download MOD in deinem Forum.<br />Klicke auf den Button, um fortzufahren.',
	'UNINSTALL_DOWNLOAD_MOD'			=> 'Download MOD entfernen',
	'UNINSTALL_DOWNLOAD_MOD_CONFIRM'	=> 'Hiermit kannst du die Download MOD aus deinem Forum entfernen.<br />Klicke auf den Button, um fortzufahren.',
));

?>