<?php
/** 
*
* @name acp_portal_blocks.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_blocks.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/

class acp_portal_blocks_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_portal_blocks',
			'title'		=> 'ACP_PORTAL_BLOCKS',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'blocks'    => array('title' => 'ACP_MANAGE_BLOCKS', 'auth' => 'acl_a_portal', 'cat' => array('ACP_PORTAL')),
				
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