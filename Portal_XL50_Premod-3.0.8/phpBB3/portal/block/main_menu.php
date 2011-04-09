<?php
/*
*
* @name main_menu.php
* @package phpBB3 Portal XL 5.0
* @version $Id: main_menu.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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

	$sql = "SELECT * FROM ". PORTAL_MENU_TABLE . " 
		WHERE menu_id  && menu_view != 0
		ORDER BY menu_order ASC "; 
		$result = $db->sql_query($sql);

	$portal_menu = array();
	 
	while( $row1 = $db->sql_fetchrow($result) )
	{
		$portal_menu[] = $row1;
	}	
	
	for ($i = 0; $i < count($portal_menu); $i++) 
	{ 	
	if($portal_menu[$i]['menu_view'] != 0 ) // none
	{
		if($portal_menu[$i]['menu_view'] == 1) // all
		{
			$template->assign_block_vars('portal_menu_row', array(
				'PORTAL_MENU_NAME' 		=> htmlspecialchars_decode($portal_menu[$i]['menu_name']),
//				'U_PORTAL_MENU_LINK' 	=> append_sid("{$phpbb_root_path}" . $portal_menu[$i]['menu_url']), 				
				'U_PORTAL_MENU_LINK'    => $portal_menu[$i]['menu_url'], 				
				'S_PORTAL_MENU_OPEN'    => ($portal_menu[$i]['menu_open']) ? true : false,			
				'PORTAL_MENU_ICON'		=> ($portal_menu[$i]['menu_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/' . $portal_menu[$i]['menu_img'] . '" height="16" width="16" align="absmiddle" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/blank.gif'. '" height="16" width="16" align="absmiddle" />',
				
			));							
		}
		else
		if($portal_menu[$i]['menu_view'] == 2) // guests
		{
			$template->assign_block_vars('portal_menu_row', array(
				'PORTAL_MENU_NAME' 		=> htmlspecialchars_decode($portal_menu[$i]['menu_name']),
//				'U_PORTAL_MENU_LINK' 	=> append_sid("{$phpbb_root_path}" . $portal_menu[$i]['menu_url']), 				
				'U_PORTAL_MENU_LINK'    => $portal_menu[$i]['menu_url'], 				
				'S_PORTAL_MENU_OPEN'    => ($portal_menu[$i]['menu_open']) ? true : false,			
				'PORTAL_MENU_ICON'		=> ($portal_menu[$i]['menu_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/' . $portal_menu[$i]['menu_img'] . '" height="16" width="16" align="absmiddle" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/blank.gif'. '" height="16" width="16" align="absmiddle" />',
			));				
		}		
		else
		if($portal_menu[$i]['menu_view'] == 3 && $user->data['is_registered']) // registered
		{
			$template->assign_block_vars('portal_menu_row', array(
				'PORTAL_MENU_NAME' 		=> htmlspecialchars_decode($portal_menu[$i]['menu_name']),
//				'U_PORTAL_MENU_LINK' 	=> append_sid("{$phpbb_root_path}" . $portal_menu[$i]['menu_url']), 				
				'U_PORTAL_MENU_LINK'    => $portal_menu[$i]['menu_url'], 				
				'S_PORTAL_MENU_OPEN'    => ($portal_menu[$i]['menu_open']) ? true : false,			
				'PORTAL_MENU_ICON'		=> ($portal_menu[$i]['menu_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/' . $portal_menu[$i]['menu_img'] . '" height="16" width="16" align="absmiddle" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/blank.gif'. '" height="16" width="16" align="absmiddle" />',
			));				
		}
		else   
		if($portal_menu[$i]['menu_view'] == 4 && $user->data['is_registered']) // staff
		{
			$template->assign_block_vars('portal_menu_row', array(
				'PORTAL_MENU_NAME' 		=> htmlspecialchars_decode($portal_menu[$i]['menu_name']),
//				'U_PORTAL_MENU_LINK' 	=> append_sid("{$phpbb_root_path}" . $portal_menu[$i]['menu_url']), 				
				'U_PORTAL_MENU_LINK'    => $portal_menu[$i]['menu_url'], 				
				'S_PORTAL_MENU_OPEN'    => ($portal_menu[$i]['menu_open']) ? true : false,			
				'PORTAL_MENU_ICON'		=> ($portal_menu[$i]['menu_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/' . $portal_menu[$i]['menu_img'] . '" height="16" width="16" align="absmiddle" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/blank.gif'. '" height="16" width="16" align="absmiddle" />',
			));				
		}
		else   
		if($portal_menu[$i]['menu_view'] == 5 && $user->data['is_registered'] && $user->data['group_id'] == 4) // moderator
		{
			$template->assign_block_vars('portal_menu_row', array(
				'PORTAL_MENU_NAME' 		=> htmlspecialchars_decode($portal_menu[$i]['menu_name']),
//				'U_PORTAL_MENU_LINK' 	=> append_sid("{$phpbb_root_path}" . $portal_menu[$i]['menu_url']), 				
				'U_PORTAL_MENU_LINK'    => $portal_menu[$i]['menu_url'], 				
				'S_PORTAL_MENU_OPEN'    => ($portal_menu[$i]['menu_open']) ? true : false,			
				'PORTAL_MENU_ICON'		=> ($portal_menu[$i]['menu_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/' . $portal_menu[$i]['menu_img'] . '" height="16" width="16" align="absmiddle" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/blank.gif'. '" height="16" width="16" align="absmiddle" />',
			));				
		}			
		else   
		if($portal_menu[$i]['menu_view'] == 6 && $user->data['is_registered'] && $user->data['group_id'] == 5) // admin
		{
			$template->assign_block_vars('portal_menu_row', array(
				'PORTAL_MENU_NAME' 		=> htmlspecialchars_decode($portal_menu[$i]['menu_name']),
//				'U_PORTAL_MENU_LINK' 	=> append_sid("{$phpbb_root_path}" . $portal_menu[$i]['menu_url']), 				
				'U_PORTAL_MENU_LINK'    => $portal_menu[$i]['menu_url'], 				
				'S_PORTAL_MENU_OPEN'    => ($portal_menu[$i]['menu_open']) ? true : false,			
				'PORTAL_MENU_ICON'		=> ($portal_menu[$i]['menu_img']) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/' . $portal_menu[$i]['menu_img'] . '" height="16" width="16" align="absmiddle" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/blank.gif'. '" height="16" width="16" align="absmiddle" />',
			));				
		}			

			// Set the filename of the template you want to use for this file.
			$template->set_filenames(array(
				'body' => 'portal/block/main_menu.html',
			));
	}		
    }	
	$db->sql_freeresult($result);

?>