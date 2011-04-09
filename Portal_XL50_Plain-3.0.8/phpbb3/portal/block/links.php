<?php
/*
*
* @name links.php
* @package phpBB3 Portal XL 5.0
* @version $Id: links.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Start session management
*/
$user->add_lang('mods/portal_xl');	

/*
* Begin block script here
*/
	$sql = "SELECT * FROM ". PORTAL_LINKS_TABLE . " 
		WHERE links_id  && links_view != 0
		ORDER BY links_order ASC "; 
	if (!$result1 = $db->sql_query($sql))
	{
		message_die(GENERAL_ERROR, 'Could not query portal links information', '', __LINE__, __FILE__, $sql);
	}

	$portal_links = array();
	 
	while( $row1 = $db->sql_fetchrow($result1) )
	{
		$portal_links[] = $row1;
	}	
	
	for ($i = 0; $i < count($portal_links); $i++) 
	{ 	
	if($portal_links[$i]['links_view'] != 0 )
	{
		if($portal_links[$i]['links_view'] == 1)
		{
			$template->assign_block_vars('portal_links_row', array(
				'PORTAL_LINKS_NAME' 	=> $portal_links[$i]['links_name'],
				'U_PORTAL_LINKS_LINK' 	=> $portal_links[$i]['links_url'], 				
				'PORTAL_LINKS_ICON'		=> ($portal_links[$i]['links_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_links/' . $portal_links[$i]['links_img'] . '" height="10" width="10" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="10" width="10" />',
				
			));							
		}
		else
		if($portal_links[$i]['links_view'] == 2)
		{
			$template->assign_block_vars('portal_links_row', array(
				'PORTAL_LINKS_NAME' 	=> $portal_links[$i]['links_name'],
				'U_PORTAL_LINKS_LINK' 	=> $portal_links[$i]['links_url'], 				
				'PORTAL_LINKS_ICON'		=> ($portal_links[$i]['links_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_links/' . $portal_links[$i]['links_img'] . '" height="10" width="10" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="10" width="10" />',
			));				
		}		
		else
		if($portal_links[$i]['links_view'] == 3 && $user->data['is_registered'])
		{
			$template->assign_block_vars('portal_links_row', array(
				'PORTAL_LINKS_NAME' 	=> $portal_links[$i]['links_name'],
				'U_PORTAL_LINKS_LINK' 	=> $portal_links[$i]['links_url'], 				
				'PORTAL_LINKS_ICON'		=> ($portal_links[$i]['links_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_links/' . $portal_links[$i]['links_img'] . '" height="10" width="10" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="10" width="10" />',
			));				
		}
		else
		if($user->data['user_type'] == 3 && $user->data['is_registered'])
		{
			$template->assign_block_vars('portal_links_row', array(
				'PORTAL_LINKS_NAME' 	=> $portal_links[$i]['links_name'],
				'U_PORTAL_LINKS_LINK' 	=> $portal_links[$i]['links_url'],					
				'PORTAL_LINKS_ICON'		=> ($portal_links[$i]['links_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_links/' . $portal_links[$i]['links_img'] . '" height="10" width="10" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="10" width="10" />',
			));
		}		
		else   
		if($portal_links[$i]['links_view'] == 4 && $user->data['is_registered'])
		{
			$template->assign_block_vars('portal_links_row', array(
				'PORTAL_LINKS_NAME' 	=> $portal_links[$i]['links_name'],
				'PORTAL_LINKS_LINK' 	=> $portal_links[$i]['links_url'],				
				'PORTAL_LINKS_ICON'		=> ($portal_links[$i]['links_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_links/' . $portal_links[$i]['links_img'] . '" height="10" width="10" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="10" width="10" />',
			));				
		}
		else   
		if($portal_links[$i]['links_view'] == 5 && $user->data['is_registered'])
		{
			$template->assign_block_vars('portal_links_row', array(
				'PORTAL_LINKS_NAME' 	=> $portal_links[$i]['links_name'],
				'PORTAL_LINKS_LINK' 	=> $portal_links[$i]['links_url'],				
				'PORTAL_LINKS_ICON'		=> ($portal_links[$i]['links_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_links/' . $portal_links[$i]['links_img'] . '" height="10" width="10" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="10" width="10" />',
			));				
		}			
	}		
		}	
		if($user->data['user_type'] == 3) // admin only
		{
			$template->assign_vars(array(
				'U_ADMIN_LINK' => ($auth->acl_get('a_') && $user->data['is_registered']) ? append_sid("{$phpbb_root_path}adm/index.$phpEx", '', true, $user->session_id) : '',
				'ADMIN_LINKS_ICON' => $portal_links[0]['links_img'],
			));

	}

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/links.html',
	));

?>