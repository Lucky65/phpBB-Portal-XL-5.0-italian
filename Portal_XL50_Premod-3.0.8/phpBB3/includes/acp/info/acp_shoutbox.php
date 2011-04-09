<?php
/**
*
* @package acp
* @version $Id: acp_shoutbox.php,v 1.1.1.1 2009/05/15 05:14:29 damysterious Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_shoutbox_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_shoutbox',
			'title'		=> 'ACP_AS_MANAGEMENT',
			'version'	=> '1.0.1',
			'modes'		=> array(
				'overview'		=> array('title' => 'ACP_AS_OVERVIEW', 'auth' => 'acl_a_as_manage', 'cat' => array('ACP_CAT_DOT_MODS')),
				'settings'		=> array('title' => 'ACP_AS_SETTINGS', 'auth' => 'acl_a_as_manage', 'cat' => array('ACP_CAT_DOT_MODS')),
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