<?php
/** 
*
* @name acp_portal_blocks_index.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_blocks_index.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/

class acp_portal_blocks_index_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_portal_blocks_index',
			'title'		=> 'ACP_PORTAL_BLOCKS_INDEX',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'blocks_index'    => array('title' => 'ACP_MANAGE_INDEX_BLOCKS', 'auth' => 'acl_a_portal', 'cat' => array('ACP_PORTAL')),
				
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