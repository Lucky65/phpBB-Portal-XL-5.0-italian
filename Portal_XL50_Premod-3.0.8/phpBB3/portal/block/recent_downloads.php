<?php
/*
*
* @name recent_downloads.php
* @package phpBB3 Portal XL Premod
* @version $Id: recent_downloads.php,v 1.1.1.1 2009/05/15 05:16:42 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

/**
*/
$limit_downloads = $portal_config['portal_attachments_number']; // number of files allowed to show, set in portal's ACP
//$allow_recent_title_limit = $portal_config['portal_recent_title_limit'];
$allow_recent_title_limit = 50;

/*
* include and create the main class
*/
$user->data['dl_enable_desc'] = false;
$user->data['dl_enable_rule'] = false;

include($phpbb_root_path . 'dl_mod/classes/class_dl_cache.' . $phpEx);
include($phpbb_root_path . 'dl_mod/classes/class_dlmod.' . $phpEx);

$dl_mod = new dlmod();

$sql = 'SELECT d.*, c.cat_name, c.auth_view, c.auth_dl 
	FROM ' . DOWNLOADS_TABLE . '  d,
		' . DL_CAT_TABLE . ' c
	WHERE c.id = d.cat
		AND d.approve = 1
		AND d.broken = 0
	ORDER BY RAND() DESC';
	if ($limit_downloads <> 0)
	{
		$result = $db->sql_query_limit($sql, $limit_downloads);
	} else {
		$result = $db->sql_query($sql);
	}

	while($row = $db->sql_fetchrow($result))
	{
		$cat = $row['cat'];
		$cat_auth = array();
		$cat_auth = $dl_mod->dl_cat_auth($cat);
	
		if ($cat_auth['auth_dl'] || $row['auth_dl'] || ($auth->acl_get('a_') && $user->data['is_registered']))
		{
			$size_lang = ($row['file_size'] >= 1048576) ? $user->lang['MB'] : (($row['file_size'] >= 1024) ? $user->lang['KB'] : $user->lang['BYTES']);
			$file_size = $row['file_size'];
			$file_size_kb = number_format($file_size / 1024, 2);
			$replace = str_replace(array('_','.rar','.zip','.jpg','.gif','.png','.RAR','.ZIP','.JPG','.GIF','.PNG','.','-'), ' ', $row['description']);
			$ShortFileName = character_limit($replace, $allow_recent_title_limit);
			
			if ($portal_config['portal_acronyms_allow'] == true)
			{
				$phpEx = substr(strrchr(__FILE__, '.'), 1);
				include_once($phpbb_root_path . 'portal/includes/functions_acronym.' . $phpEx);
				$row['long_desc'] = acronym_pass($row['long_desc']);
			}

			/*
			* prepare the download for display of long descriptions
			*/
			$long_description = $row['long_desc'];
			$long_desc_uid = $row['long_desc_uid'];
			$long_desc_bitfield = $row['long_desc_bitfield'];
			$long_desc_flags = $row['long_desc_flags'];
			$longdescription = generate_text_for_display($long_description, $long_desc_uid, $long_desc_bitfield, $long_desc_flags);

			$template->assign_block_vars('recent_dl', array(
				'L_KLICKS' 				=> $user->lang['DL_KLICKS'],
				'L_OVERALL_KLICKS' 		=> $user->lang['DL_OVERALL_KLICKS'],
				'L_DL_FILE_SIZE' 		=> $user->lang['DL_FILE_SIZE'].'<br />'. $user->lang['DL_KB'],
				'L_CATEGORY'			=> $user->lang['DL_CAT_NAME'],
				
				'TITLE'	 				=> $ShortFileName,
				'FULL_TITLE'			=> censor_text($row['description']),
				'CAT_NAME' 				=> $row['cat_name'],
				'LONG_DESCRIPTION' 		=> censor_text($longdescription),
				'FILE_SIZE' 			=> $file_size_kb . ' ' . $size_lang,
				'FILE_KLICKS' 			=> $row['klicks'],
				'FILE_OVERALL_KLICKS' 	=> $row['overall_klicks'],
				'U_CAT_LINK' 			=> ($cat_auth['auth_view'] || $row['auth_view']) ? append_sid("{$phpbb_root_path}downloads.$phpEx", 'cat=' . $row['cat']) : '',
				'MINI_IMG' 				=> $dl_mod->mini_status_file($row['cat'], $row['id']),
				'U_DL_DETAIL'			=> append_sid("{$phpbb_root_path}downloads.$phpEx", 'view=detail&amp;df_id=' . $row['id'])
			));
		}
	}
	$db->sql_freeresult($result);
	
$template->assign_vars(array(
	'S_DISPLAY_RECENT_DL'	=> true)
);


// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/recent_downloads.html',
   ));

?>