<?php
/** 
*
* @package acp
* @version $Id: acp_announcements_centre.php,v 1.1.1.1 2009/05/15 05:14:29 damysterious Exp $ 
* @copyright (c) 2007 lefty74 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/
class acp_announcements_centre_info
{
	function module()
	{
		global $user;

		$user->add_lang('mods/announcement_centre');

		return array(
			'filename'	=> 'acp_announcements_centre',
			'title'		=> 'ACP_ANNOUNCEMENTS_CENTRE',
			'version'	=> '1.0.2',
			'modes'		=> array(
			'default'		=> array('title' => 'ACP_ANNOUNCEMENTS_CENTRE', 'auth' => 'acl_a_board', 'cat' => array('ACP_DOT_MODS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}


?>