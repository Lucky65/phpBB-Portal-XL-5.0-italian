<?php
/**
*
* @author Tobi Schaefer http://www.tas2580.de/
*
* @package acp
* @version $Id: acp_kb.php,v 1.1.1.1 2009/05/15 05:14:29 damysterious Exp $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/
class acp_kb_info
{
	function module()
	{		
		return array(
			'filename'	=> 'acp_kb',
			'title'		=> 'KB_NAME',
			'version'	=> '0.2.9',
			'modes'		=> array(
				'main'		=> array(	'title'	=> 'CATEGORIES', 'auth'	=> 'acl_a_categorie_kb',	'cat'	=> array('ACP_BOARD_CONFIGURATION'), ),
				'config'	=> array(	'title'	=> 'KB_CONFIG', 'auth'	=> 'acl_a_config_kb',	'cat'	=> array('ACP_BOARD_CONFIGURATION'), ),
				'types'		=> array(	'title'	=> 'TYPES', 'auth'		=> 'acl_a_types_kb',	'cat'	=> array('ACP_BOARD_CONFIGURATION'), ),
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