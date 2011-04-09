<?php
/*
*
* @name google_translate.php
* @package phpBB3 Portal XL Premod
* @version $Id: google_translate.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Create main board url
*/
$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($config['script_path']));
$viewtopic = ($script_name != '') ? $script_name . '/viewtopic.' . $phpEx : 'viewtopic.'. $phpEx;
$index = ($script_name != '') ? $script_name . '/portal.' . $phpEx : 'portal.'. $phpEx;
$server_name = trim($config['server_name']);
$server_protocol = ($config['cookie_secure']) ? 'https://' : 'http://';
$server_port = ($config['server_port'] <> 80) ? ':' . trim($config['server_port']) . '/' : '/';

$index_url = $server_protocol . $server_name . $server_port . $index;
$viewtopic_url = $server_protocol . $server_name . $server_port . $viewtopic;

// Assign specific vars
$template->assign_vars(array(
	'GOOGLE_TRANSLATE_URL'		=> $index_url,
	'GOOGLE_BACK_TO_ENGLISH'	=> $user->lang['GOOGLE_BACK_TO_ENGLISH'],
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/google_translate.html',
	));

?>