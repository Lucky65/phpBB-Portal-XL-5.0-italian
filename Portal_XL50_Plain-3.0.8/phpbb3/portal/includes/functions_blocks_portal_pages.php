<?php
/*
*
* @name functions_blocks_portal_pages.php
* @package phpBB3 Portal XL
* @version $Id: functions_blocks_portal_pages.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* initalise some global variables
*/
global $portal_config, $config, $phpbb_root_path, $phpEx, $db, $portal_page_block_view, $bbcode_bitfield, $portal_page;

$top_page_title = $bottom_page_title = $right_page_title = $left_page_title = $center_page_title = array();

/*
* get all blocks from database an put into portal's template 
*/
function portal_page_template($info)
{
    global $template;
    // set template filename
    $template->set_filenames(array('name' => 'portal/block/' . $info));
    // Return templated data
    return $template->assign_display('name');
}

		/**
		* get all block data
		*/
		$sql = "SELECT *
        FROM  " . PORTAL_PAGES_TABLE . " 
			WHERE " . $db->sql_in_set('page_view', $portal_page_block_view) . "
			AND page_disable = 0
		ORDER by page_order ASC";
        $result = $db->sql_query($sql);

        $T = $L = $C = $R = $B = 0;

        while ($row = $db->sql_fetchrow($result))
        {
              $portal_get_page_id 			= $row['page_id'];
              $portal_get_page_index 		= $row['page_index'];
              $portal_get_page_title 		= $row['page_title'];
              $portal_get_page_position 	= $row['page_position'];
              $portal_get_page_view 		= $row['page_view'];
              $portal_get_page_alias 		= $row['page_alias'];
              $portal_get_page_img 			= $row['page_img'];
			  $portal_get_page_content		= $row['page_content'];

        if($portal_get_page_title != '')
            {
                switch($portal_get_page_position)
                {
                   case '1':
                      {               
						$left_page_title[$L] 		= $portal_get_page_title;
						$left_page_index[$L] 		= $portal_get_page_index;
						$left_page_id[$L]       	= $portal_get_page_id;
						$left_page_alias[$L] 	 	= $portal_get_page_alias;
						$left_page_img[$L] 	 		= $portal_get_page_img;
						$left_page_content[$L]		= $portal_get_page_content;
						$L++;
                   break;
                      }
                   case '2' :
                      {
						$center_page_title[$C]    	= $portal_get_page_title;
						$center_page_index[$C]    	= $portal_get_page_index;
						$center_page_id[$C]     	= $portal_get_page_id;
						$center_page_alias[$C]  	= $portal_get_page_alias;
						$center_page_img[$C]  		= $portal_get_page_img;
						$center_page_content[$C]	= $portal_get_page_content;
						$C++;
                   break;
                      }
                   case '3':
                      {
						$right_page_title[$R]     	= $portal_get_page_title;
						$right_page_index[$R]     	= $portal_get_page_index;
						$right_page_id[$R]      	= $portal_get_page_id;
						$right_page_alias[$R]   	= $portal_get_page_alias;
						$right_page_img[$R]   		= $portal_get_page_img;
						$right_page_content[$R]		= $portal_get_page_content;
						$R++;
                   break;
                      }
                   case '4' :
                       {
						$top_page_title[$T] 	 	= $portal_get_page_title;
						$top_page_index[$T] 	 	= $portal_get_page_index;
						$top_page_id[$T] 	  	 	= $portal_get_page_id;
						$top_page_alias[$T] 	 	= $portal_get_page_alias;
						$top_page_img[$T] 	 		= $portal_get_page_img;
						$top_page_content[$T]		= $portal_get_page_content;
						$T++;
                       break;
                       }
                   case '5' :
                      {
						$bottom_page_title[$B] 		= $portal_get_page_title;
						$bottom_page_index[$B] 	    = $portal_get_page_index;
						$bottom_page_id[$B] 	 	= $portal_get_page_id;
						$bottom_page_alias[$B]   	= $portal_get_page_alias;
						$bottom_page_img[$B]   		= $portal_get_page_img;
						$bottom_page_content[$B]	= $portal_get_page_content;
						$B++;
                   break;
                       }
					   
                   default:
                 }
			} 					
		}
        $db->sql_freeresult($result);

		if($top_page_title !='') 
		{
			foreach ($top_page_title as $block => $value)
			{
			$template->assign_block_vars('top_page_files', array(
				'TOP_BLOCKS'      		=> portal_page_template($value),
				'TOP_BLOCK_ID'    		=> $top_page_id[$block],
				'TOP_BLOCK_INDEX'  		=> $top_page_index[$block],
				'TOP_BLOCKS_ALIAS' 		=> $top_page_alias[$block],
				'TOP_BLOCKS_CONTENT'	=> htmlspecialchars_decode(smilies_pass(censor_text($top_page_content[$block]))),
				'TOP_BLOCKS_IMG'		=> ($top_page_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $top_page_img[$block] . '" title="' . $top_page_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'U_PAGES' 				=> append_sid("{$phpbb_root_path}portal_pages.$phpEx?page=" . $top_page_id[$block]),
				));
			} 
		}

		if($left_page_title !='') 
		{
			foreach ($left_page_title as $block => $value)
			{
			$template->assign_block_vars('left_page_files', array(
				'LEFT_BLOCKS'       	=> portal_page_template($value),
				'LEFT_BLOCK_ID'     	=> $left_page_id[$block],
				'LEFT_BLOCK_INDEX'  	=> $left_page_index[$block],
				'LEFT_BLOCKS_ALIAS' 	=> $left_page_alias[$block],
				'LEFT_BLOCKS_CONTENT'	=> htmlspecialchars_decode(smilies_pass(censor_text($left_page_content[$block]))),
				'LEFT_BLOCKS_IMG'		=> ($left_page_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $left_page_img[$block] . '" title="' . $left_page_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'U_PAGES' 				=> append_sid("{$phpbb_root_path}portal_pages.$phpEx?page=" . $left_page_id[$block]),
				));
			} 
		}

		if($center_page_title !='') 
		{
			foreach ($center_page_title as $block => $value)
			{
				if ($portal_page['enable_bbcode'] !== '0')
				{
					include_once($phpbb_root_path . 'includes/bbcode.' . $phpEx);
					$bbcode = new bbcode(base64_encode($bbcode_bitfield));
					$bbcode->bbcode_second_pass($center_page_content[$block], $portal_page['enable_bbcode'], $portal_page['enable_smilies']);
		
					// Always process smilies after parsing bbcodes
					$page_content = smilie_text($center_page_content[$block]);
		
					// Parse the message and subject
					$page_content = censor_text($page_content);
					
					// show embedded smilies
					$page_content = smilies_pass($page_content);
					
/*
					if ($portal_config['portal_acronyms_allow'] == true)
					{
						include_once($phpbb_root_path . 'portal/includes/functions_acronym.' . $phpEx);
						$page_content = acronym_pass($page_content);
					}
*/
				}

		    $template->assign_block_vars('center_page_files', array(
		        'CENTER_BLOCKS'      	=> portal_page_template($value),
				'CENTER_BLOCK_ID'    	=> $center_page_id[$block],
				'CENTER_BLOCK_INDEX'  	=> $center_page_index[$block],
				'CENTER_BLOCKS_ALIAS' 	=> $center_page_alias[$block],
				'CENTER_BLOCKS_CONTENT'	=> htmlspecialchars_decode($page_content),
				'CENTER_BLOCKS_IMG'		=> ($center_page_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $center_page_img[$block] . '" title="' . $center_page_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'U_PAGES' 				=> append_sid("{$phpbb_root_path}portal_pages.$phpEx?page=" . $center_page_id[$block]),
			    ));
			}
		}

		if($right_page_title !='') 
		{
			foreach ($right_page_title as $block => $value)
			{
			$template->assign_block_vars('right_page_files', array(
				'RIGHT_BLOCKS'      	=> portal_page_template($value),
				'RIGHT_BLOCK_ID'    	=> $right_page_id[$block],
				'RIGHT_BLOCK_INDEX'  	=> $right_page_index[$block],
				'RIGHT_BLOCKS_ALIAS' 	=> $right_page_alias[$block],
				'RIGHT_BLOCKS_CONTENT'	=> htmlspecialchars_decode(smilies_pass(censor_text($right_page_content[$block]))),
				'RIGHT_BLOCKS_IMG'		=> ($right_page_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $right_page_img[$block] . '" title="' . $right_page_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'U_PAGES' 				=> append_sid("{$phpbb_root_path}portal_pages.$phpEx?page=" . $right_page_id[$block]),
				));
			} 
		}

		if ($bottom_page_title !='') 
		{
			foreach ($bottom_page_title as $block => $value)
			{
			$template->assign_block_vars('bottom_page_files', array(
				'BOTTOM_BLOCKS'   		=> portal_page_template($value),
				'BOTTOM_BLOCK_ID'    	=> $bottom_page_id[$block],
				'BOTTOM_BLOCK_INDEX'  	=> $bottom_page_index[$block],
				'BOTTOM_BLOCKS_ALIAS' 	=> $bottom_page_alias[$block],
				'BOTTOM_BLOCKS_CONTENT'	=> htmlspecialchars_decode(smilies_pass(censor_text($bottom_page_content[$block]))),
				'BOTTOM_BLOCKS_IMG'		=> ($bottom_page_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $bottom_page_img[$block] . '" title="' . $bottom_page_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'U_PAGES' 				=> append_sid("{$phpbb_root_path}portal_pages.$phpEx?page=" . $bottom_page_id[$block]),
				));
			}
		}
?>