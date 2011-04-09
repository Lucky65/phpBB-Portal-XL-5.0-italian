<?php
/**
*
* @author Tobi Schäfer http://www.phpbb-seo.de/
*
* @package acp
* @version $Id: acp_impressum.php,v 1.1.1.1 2009/05/15 05:14:29 damysterious Exp $
* @copyright (c) 2008 SEO phpBB phpbb-seo.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/
class acp_impressum_info
{
	function module()
	{		
		return array(
			'filename'	=> 'acp_impressum',
			'title'		=> 'IMPRESSUM',
			'version'	=> '0.1.6',
			'modes'		=> array(
				'edit_impressum'	=> array(
				'title'		=> 'IMPRESSUM',
				'auth'		=> '',
				'cat'		=> array('ACP_BOARD_CONFIGURATION'),
				),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
	
	function update()
	{
	}
}

?>