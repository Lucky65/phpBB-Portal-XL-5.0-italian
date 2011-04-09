<?php
/** 
*
* @name acp_portal_forumadds.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_forumadds.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/

class acp_portal_forumadds_info
{
	function module()
	{		
		return array(
			'filename'	=> 'acp_portal_forumadds',
			'title'		=> 'ACP_PORTAL_FORUMADDS',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'forumadds'		=> array('title' => 'ACP_MANAGE_ADDS', 'auth' => 'acl_a_portal', 'cat' => array('ACP_PORTAL')),
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