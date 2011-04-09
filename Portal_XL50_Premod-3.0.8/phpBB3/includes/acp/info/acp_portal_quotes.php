<?php
/** 
*
* @name acp_portal_menu.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_quotes.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/

class acp_portal_quotes_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_portal_quotes',
			'title'		=> 'ACP_PORTAL_QUOTES',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'quotes'		=> array('title' => 'ACP_MANAGE_QUOTES', 'auth' => 'acl_a_portal', 'cat' => array('ACP_PORTAL')),
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
