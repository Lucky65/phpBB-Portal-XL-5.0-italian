<?php
/*
*
* @name functions_blocks_portal.php
* @package phpBB3 Portal XL 5.0
* @version $Id: functions_blocks_portal.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
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
global $portal_config, $config, $phpbb_root_path, $phpEx, $db, $portal_block_view;

$top_block_name = $bottom_block_name = $right_block_name = $left_block_name = $center_block_name = array();

/**
* get all blocks from database an put into portal's template 
*/
function portal_block_template($info)
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
		$sql = 'SELECT *
				FROM ' . PORTAL_BLOCK_TABLE . '
				WHERE ' . $db->sql_in_set('block_view', $portal_block_view) . "
				AND block_index = 0 
				AND block_disable = 0 
				ORDER BY block_order ASC";
		$result = $db->sql_query($sql);

        $T = $L = $C = $R = $B = 0;

        while ($row = $db->sql_fetchrow($result))
        {
              $portal_get_block_id 			= $row['block_id'];
              $portal_get_block_index 		= $row['block_index'];
              $portal_get_block_name 		= $row['block_name'];
              $portal_get_block_position 	= $row['block_position'];
              $portal_get_block_view 		= $row['block_view'];
              $portal_get_block_alias 		= $row['block_alias'];
              $portal_get_block_img 		= $row['block_img'];
			  $portal_get_block_content		= $row['block_content'];
			  
        if($portal_get_block_name != '')
            {
                switch($portal_get_block_position)
                {
                   case '1':
                      {               
						$left_block_name[$L] 		= $portal_get_block_name;
						$left_block_index[$L] 		= $portal_get_block_index;
						$left_block_id[$L]       	= $portal_get_block_id;
						$left_block_alias[$L] 	 	= $portal_get_block_alias;
						$left_block_img[$L] 	 	= $portal_get_block_img;
						$left_block_content[$L]		= $portal_get_block_content;
						$L++;
                   break;
                      }
                   case '2' :
                      {
						$center_block_name[$C]    	= $portal_get_block_name;
						$center_block_index[$C]    	= $portal_get_block_index;
						$center_block_id[$C]     	= $portal_get_block_id;
						$center_block_alias[$C]  	= $portal_get_block_alias;
						$center_block_img[$C]  		= $portal_get_block_img;
						$center_block_content[$C]	= $portal_get_block_content;
						$C++;
                   break;
                      }
                   case '3':
                      {
						$right_block_name[$R]     	= $portal_get_block_name;
						$right_block_index[$R]     	= $portal_get_block_index;
						$right_block_id[$R]      	= $portal_get_block_id;
						$right_block_alias[$R]   	= $portal_get_block_alias;
						$right_block_img[$R]   		= $portal_get_block_img;
						$right_block_content[$R]	= $portal_get_block_content;
						$R++;
                   break;
                      }
                   case '4' :
                       {
						$top_block_name[$T] 	 	= $portal_get_block_name;
						$top_block_index[$T] 	 	= $portal_get_block_index;
						$top_block_id[$T] 	  	 	= $portal_get_block_id;
						$top_block_alias[$T] 	 	= $portal_get_block_alias;
						$top_block_img[$T] 	 		= $portal_get_block_img;
						$top_block_content[$T]		= $portal_get_block_content;
						$T++;
                       break;
                       }
                   case '5' :
                      {
						$bottom_block_name[$B] 		= $portal_get_block_name;
						$bottom_block_index[$B] 	= $portal_get_block_index;
						$bottom_block_id[$B] 	 	= $portal_get_block_id;
						$bottom_block_alias[$B]   	= $portal_get_block_alias;
						$bottom_block_img[$B]   	= $portal_get_block_img;
						$bottom_block_content[$B]	= $portal_get_block_content;
						$B++;
                   break;
                       }
					   
                   default:
                 }
			} 	
		}
        $db->sql_freeresult($result);

		if($top_block_name !='') 
		{
			foreach ($top_block_name as $block => $value)
			{
			$template->assign_block_vars('top_block_files', array(
				'TOP_BLOCKS'      		=> portal_block_template($value),
				'TOP_BLOCK_ID'    		=> $top_block_id[$block],
				'TOP_BLOCK_INDEX'  		=> $top_block_index[$block],
				'TOP_BLOCKS_ALIAS' 		=> $top_block_alias[$block],
				'TOP_BLOCKS_IMG'		=> ($top_block_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $top_block_img[$block] . '" title="' . $top_block_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'TOP_BLOCKS_CONTENT'	=> htmlspecialchars_decode(smilies_pass(censor_text($top_block_content[$block]))),
				));
			} 
		}

		if($left_block_name !='') 
		{
			foreach ($left_block_name as $block => $value)
			{
			$template->assign_block_vars('left_block_files', array(
				'LEFT_BLOCKS'       	=> portal_block_template($value),
				'LEFT_BLOCK_ID'     	=> $left_block_id[$block],
				'LEFT_BLOCK_INDEX'  	=> $left_block_index[$block],
				'LEFT_BLOCKS_ALIAS' 	=> $left_block_alias[$block],
				'LEFT_BLOCKS_IMG'		=> ($left_block_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $left_block_img[$block] . '" title="' . $left_block_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'LEFT_BLOCKS_CONTENT'	=> htmlspecialchars_decode(smilies_pass(censor_text($left_block_content[$block]))),
				));
			} 
		}

		if($center_block_name !='') 
		{
			foreach ($center_block_name as $block => $value)
			{
		    $template->assign_block_vars('center_block_files', array(
		        'CENTER_BLOCKS'      	=> portal_block_template($value),
				'CENTER_BLOCK_ID'    	=> $center_block_id[$block],
				'CENTER_BLOCK_INDEX'  	=> $center_block_index[$block],
				'CENTER_BLOCKS_ALIAS' 	=> $center_block_alias[$block],
				'CENTER_BLOCKS_IMG'		=> ($center_block_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $center_block_img[$block] . '" title="' . $center_block_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'CENTER_BLOCKS_CONTENT'	=> htmlspecialchars_decode(smilies_pass(censor_text($center_block_content[$block]))),
			    ));
			}
		}

		if($right_block_name !='') 
		{
			foreach ($right_block_name as $block => $value)
			{
			$template->assign_block_vars('right_block_files', array(
				'RIGHT_BLOCKS'      	=> portal_block_template($value),
				'RIGHT_BLOCK_ID'    	=> $right_block_id[$block],
				'RIGHT_BLOCK_INDEX'  	=> $right_block_index[$block],
				'RIGHT_BLOCKS_ALIAS' 	=> $right_block_alias[$block],
				'RIGHT_BLOCKS_IMG'		=> ($right_block_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $right_block_img[$block] . '" title="' . $right_block_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'RIGHT_BLOCKS_CONTENT'	=> htmlspecialchars_decode(smilies_pass(censor_text($right_block_content[$block]))),
				));
			} 
		}

		if ($bottom_block_name !='') 
		{
			foreach ($bottom_block_name as $block => $value)
			{
			$template->assign_block_vars('bottom_block_files', array(
				'BOTTOM_BLOCKS'   		=> portal_block_template($value),
				'BOTTOM_BLOCK_ID'    	=> $bottom_block_id[$block],
				'BOTTOM_BLOCK_INDEX'  	=> $bottom_block_index[$block],
				'BOTTOM_BLOCKS_ALIAS' 	=> $bottom_block_alias[$block],
				'BOTTOM_BLOCKS_IMG'		=> ($bottom_block_img[$block]) ? '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $bottom_block_img[$block] . '" title="' . $bottom_block_alias[$block] . '" height="12" width="12" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_block/blank.gif'. '" height="12" width="12" />',
				'BOTTOM_BLOCKS_CONTENT'	=> htmlspecialchars_decode(smilies_pass(censor_text($bottom_block_content[$block]))),
				));
			}
		}
?>