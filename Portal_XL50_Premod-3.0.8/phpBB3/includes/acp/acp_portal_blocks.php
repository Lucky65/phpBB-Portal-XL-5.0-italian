<?php
/** 
*
* @name acp_portal_blocks.php
* @package phpBB3 Portal XL
* @version $Id: acp_portal_blocks.php,v 1.2 2009/10/17 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_portal_blocks 
{
    var $u_action;
	
    function main($id, $im_portal_block)
    {
        global $db, $user, $auth, $template, $cache;
        global $portal_config, $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
        $user->add_lang('mods/acp_portal_xl_blocks');
        $this->tpl_name = 'portal_xl/acp_portal_blocks';
        $this->page_title = 'ACP_MANAGE_BLOCKS';
		
        $error = $notify = array();
        $action = request_var('action', '');    
		$action = (isset($_POST['add'])) ? 'add' : ((isset($_POST['save'])) ? 'save' : (isset($_POST['edit'])) ? 'edit' : $action);

		$block_id = request_var('id', 0);       
        $ord = request_var('ord',0);
        $ord2 = request_var('ord2',0);
        $id = request_var('id',0);
        $id2 = request_var('id2',0);
        $colid = request_var('colid',0);
        $table = PORTAL_BLOCK_TABLE;		

        switch ($action)
        {

        case 'save':
                $block_alias            = request_var('block_alias','',true);
                $block_name             = request_var('block_name','',true);                
                $block_disable          = request_var('block_disable', '', true);
                $block_position         = request_var('block_position', '', true);              
                $block_last_position    = request_var('block_last_position', '', true);              
                $block_order            = request_var('block_order', '', true);
				$block_view 			= request_var('block_view', '', true);
				$block_img 				= request_var('block_img', '', true);
				$block_content 		  	= request_var('block_content', '', true);
				
                   $sqlblock = 'SELECT MAX(block_order) as total_order
                            FROM ' . PORTAL_BLOCK_TABLE . '
                            WHERE block_position = ' . $block_position .'';
                                $resultnews = $db->sql_query($sqlblock);
                                $total_block_order = (int) $db->sql_fetchfield('total_order');
                                $db->sql_freeresult($resultnews);
                                $insert = $total_block_order + 1;

                    $sql_ary = array(
                    'block_alias'           => $block_alias,
                    'block_name'            => $block_name,                 
                    'block_order' 			=> ($block_id) ? $block_order : $insert,
                    'block_disable'         => $block_disable,
                    'block_position'        => $block_position,                     
                    'block_last_position'   => $block_last_position,                     
                    'block_view'        	=> $block_view,                     
                    'block_img'        		=> $block_img,                     
                    'block_content'        	=> $block_content                     
                
                );
                if ($block_id)
                {               
                $sql = 'UPDATE ' . PORTAL_BLOCK_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE block_id = $block_id";

                    $message = $user->lang['BLOCK_UPDATED'];
                }
                else
                {
                     $sql = 'INSERT INTO ' . PORTAL_BLOCK_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
                     $message = $user->lang['BLOCK_ADDED'];
                }
                $db->sql_query($sql);
                $cache->destroy('sql', $table);
                
                trigger_error($message . adm_back_link($this->u_action));

            break;

            case 'edit':
            case 'add':
            
                $sql = 'SELECT *
                    FROM ' . PORTAL_BLOCK_TABLE . '
                    ORDER BY   block_id ';
                $result = $db->sql_query($sql);

                while ($row = $db->sql_fetchrow($result))
                {
                if ($action == 'edit' && $block_id == $row['block_id'])
                    {
                    $block_alias            = $row;
                    $block_name             = $row;                     
                    $block_position         = $row;                     
                    $block_disable          = $row;
                    $block_order            = $row;          
                    $block_view             = $row;					          
                    $block_img              = $row;					          
                    $block_content          = $row;					          
                    }
                }
                $db->sql_freeresult($result);

				/*
				* Get all icons we need from their directory
				*/
				if ($dir = opendir($phpbb_root_path . 'portal/images/icon_block')) {
					$block_images = array();
					while (($file = readdir($dir)) !== false) {
						if (preg_match('#^[^&\'"<>]+\.(?:gif|png|jpe?g)$#i', $file)) {
							$block_images[$file] = array(
								'file'	=> $file,
								'name'	=> ucfirst(str_replace('_', ' ', preg_replace('#^(.*)\..*$#', '\1', $file))),
							);
						}
    				}
    				closedir($dir);
					asort($block_images);
				}

				foreach ($block_images as $images)
				{
						$template->assign_block_vars('file_name', array(
							'S_BLOCK_IMG' 		=> $images['file'],
							'S_BLOCK_IMG_NAME' 	=> $images['name'],
							));
				}				
				unset($block_images);

				/*
				* Get all icons for preview we need from their directory
				*/
				if ($dir = opendir($phpbb_root_path . 'portal/images/icon_block')) {
					$imagescontent = array();
					while (($file = readdir($dir)) !== false) {
						if (preg_match('#^[^&\'"<>]+\.(?:gif|png|jpe?g)$#i', $file)) {
							$imagescontent[$file] = array(
								'file'	=> $file,
								'name'	=> ucfirst(str_replace('_', ' ', preg_replace('#^(.*)\..*$#', '\1', $file))),
							);
						}
    				}
    				closedir($dir);
					asort($imagescontent);
				}
				
				foreach ($imagescontent as $images)
				{
						$template->assign_block_vars('img_file_name_icon', array(
         					'S_BLOCK_FILE_NAME'  => $images['name'],
							'S_BLOCK_FILE_ICON'  => '<img src="' . $phpbb_root_path . 'portal/images/icon_block/' . $images['file'] . '" title="' . $images['name'] . '" height="15" width="15" alt="' . $images['name'] . '" />'
							));
				}				
				unset($imagescontent);

				/*
				* Get all html we need from their directory
				*/
				if ($dir = opendir($phpbb_root_path . 'styles/'.$user->theme['theme_path'].'/template/portal/block')) {
					$block_html = array();
					while (($file = readdir($dir)) !== false) {
        				if (preg_match('#^[^&\'"<>]+\.(?:html)$#i', $file)) {
							$block_html[$file] = array(
								'file'	=> $file,
								'name'	=> ucfirst(str_replace('_', ' ', preg_replace('#^(.*)\..*$#', '\1', $file))),
							);
						}
    				}
    				closedir($dir);
					asort($block_html);
				}
				
				foreach ($block_html as $html)
				{
					$template->assign_block_vars('block_name', array(
							'S_BLOCK_HTML' 		=> $html['file'],
							'S_BLOCK_HTML_NAME' => $html['name'],
						));
				}				
				unset($block_html);

                $template->assign_vars(array(
                    'S_EDIT'        => true,
                    'U_BACK'        => $this->u_action,
                    'U_ACTION'      => $this->u_action . '&amp;id=' . $block_id,
                    'BLOCK_ALIAS'   => (isset($block_alias['block_alias'])) ? $block_alias['block_alias'] : '',             
                    'BLOCK_HTML'    => (isset($block_name['block_name'])) ? $block_name['block_name'] : '',                 
                    'BLOCK_ORDER'   => (isset($block_order['block_order'])) ? $block_order['block_order'] : '',                 
                    'BLOCK_POS'     => (isset($block_position['block_position'])) ? $block_position['block_position'] : '',                 
                    'BLOCK_DISABLE' => (isset($block_disable['block_disable'])) ? $block_disable['block_disable'] : '',
                    'BLOCK_VIEW'    => (isset($block_view['block_view'])) ? $block_view['block_view'] : '',
                    'BLOCK_IMG'     => (isset($block_img['block_img'])) ? $block_img['block_img'] : '',
                    'BLOCK_CONTENT' => (isset($block_content ['block_content'])) ? $block_content ['block_content'] : '',
					));

                return;
            break;

            case 'delete':

				$block_id = request_var('id', 0);

				if (!$block_id)
				{
					trigger_error($user->lang['MUST_SELECT_BLOCK'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				if (confirm_box(true))
				{
					$sql = 'SELECT block_name
						FROM ' . PORTAL_BLOCK_TABLE . "
						WHERE block_id = $block_id";
					$result = $db->sql_query($sql);
					$deleted_block_name = $db->sql_fetchfield('block_name');
					$db->sql_freeresult($result);

					$sql = 'DELETE FROM ' . PORTAL_BLOCK_TABLE . "
						WHERE block_id = $block_id";
					$db->sql_query($sql);

					$cache->destroy('sql', $table);

					add_log('admin', $user->lang['BLOCK_REMOVED'], $deleted_block_name);

					trigger_error($user->lang['BLOCK_REMOVED'] . adm_back_link($this->u_action));
				}
				else
				{
					confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
						'id'		=> $block_id,
						'action'	=> 'delete',
					)));
				}
 
            break;
			
            case'move_left':
            case'move_bottom_direct':			 
			 
               $sql = "SELECT MAX(block_order) as block_order FROM $table WHERE block_position = $colid + 1  " ;
               if( !($result = $db->sql_query($sql)) )
               {
                   message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
                   }
                   while ( $row = $db->sql_fetchrow($result) )
                   {
                       $max_order = $row['block_order'] ;
                   }
					$colnew = $colid + 1 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET block_position = $colnew , block_order = $ordernew WHERE block_id = $id " ;
              if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_right':
			case'move_top_direct':

               $sql = "SELECT MAX(block_order) as block_order FROM $table WHERE block_position = $colid - 1  " ;
				if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
					}
				while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['block_order'] ;
					}
					$colnew = $colid - 1 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET block_position = $colnew , block_order = $ordernew WHERE block_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_bottom':
            case'move_left_direct':
			
               $sql = "SELECT MAX(block_order) as block_order FROM $table WHERE block_position = $colid - 2  " ;
               if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
					}
				while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['block_order'] ;
					}
					$colnew = $colid - 2 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET block_position = $colnew , block_order = $ordernew WHERE block_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_center_bottom':
               $sql = "SELECT MAX(block_order) as block_order FROM $table WHERE block_position = $colid + 3  " ;
				if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
					}
              while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['block_order'] ;
					}
					$colnew = $colid + 3 ;
					$ordernew = $max_order + 1;
				$sql = "UPDATE $table SET block_position = $colnew , block_order = $ordernew WHERE block_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_center_top':
			case'move_right_direct':
               $sql = "SELECT MAX(block_order) as block_order FROM $table WHERE block_position = $colid + 2  " ;
               if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
					}
				while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['block_order'] ;

					}
					$colnew = $colid + 2 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET block_position = $colnew , block_order = $ordernew WHERE block_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_bottom_top':
               $sql = "SELECT MAX(block_order) as block_order FROM $table WHERE block_position = $colid - 3  " ;
				if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query portal structure information", "", __LINE__, __FILE__, $sql);
					}
				while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['block_order'] ;
					}
					$colnew = $colid - 3 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET block_position = $colnew , block_order = $ordernew WHERE block_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;			
                       
            case 'disable':
                       $sql = 'SELECT *
                            FROM ' . PORTAL_BLOCK_TABLE . '
                            ORDER BY   block_id ';
                            $result = $db->sql_query($sql);
                            $db->sql_freeresult($result);   
                       $sql = "UPDATE $table
                            SET block_disable = $block_id, block_disable = 0
                            WHERE " . $db->sql_in_set('block_id', $block_id);
                                if( !($result = $db->sql_query($sql)) )             
                                    $db->sql_query($sql);               
                                    $cache->destroy('sql', $table);

            break;

            case 'enable':
                       $sql = 'SELECT *
                            FROM ' . PORTAL_BLOCK_TABLE . '
                            ORDER BY   block_id ';
                            $result = $db->sql_query($sql);
                            $db->sql_freeresult($result);   
                       $sql = "UPDATE $table
                            SET block_disable = $block_id, block_disable = 1
                            WHERE " . $db->sql_in_set('block_id', $block_id);
                                if( !($result = $db->sql_query($sql)) )             
                                $db->sql_query($sql);               
                                $cache->destroy('sql', $table);
            break;

            case 'move_down':
            case 'move_up':

            $sql = "UPDATE $table SET block_order = $ord + $ord2 - block_order WHERE block_id = $id OR block_id = $id2 ";
            if( !($result = $db->sql_query($sql)) )
            $db->sql_query($sql); 
            $cache->destroy('sql', $table);
			
			break;
			
			case 'editcolumn':
			
 			if ($action == 'editcolumn')
			{
				$config_left_width 	= $portal_config['portal_left_collumn_width'];
				$config_right_width = $portal_config['portal_right_collumn_width'];						
			}
				
				$template->assign_vars(array(
					'S_EDIT_COLUMN'			=> true,
					'U_BACK'				=> $this->u_action,					
					'U_ACTION_EDIT_COLUMN'	=> $this->u_action . '&amp;action=editcolumn',
					'LEFT_WIDTH'			=> (isset($portal_config['portal_left_collumn_width'])) ? $portal_config['portal_left_collumn_width'] : '',					
					'RIGHT_WIDTH'			=> (isset($portal_config['portal_right_collumn_width'])) ? $portal_config['portal_right_collumn_width'] : '',
					'LEFT_COLLUMN_ACTIVE'	=> (isset($portal_config['portal_left_column'])) ? $portal_config['portal_left_column'] : '',					
					'RIGHT_COLLUMN_ACTIVE'	=> (isset($portal_config['portal_right_column'])) ? $portal_config['portal_right_column'] : '',
					'PORTAL_LAYOUT_ACTIVE'	=> (isset($portal_config['portal_layout'])) ? $portal_config['portal_layout'] : ''
				));					

            break;				
						
			case 'savecolumn':
		
				$config_left_width 		= request_var('portal_left_collumn_width','', true);
				$config_right_width 	= request_var('portal_right_collumn_width','', true);
				$config_left_active 	= request_var('portal_left_column','', true);
				$config_right_active 	= request_var('portal_right_column','', true);
				$config_index_layout 	= request_var('portal_layout','', true);
							
 				if ($action == 'savecolumn')
				{
				$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_left_width . ' WHERE config_name = "portal_left_collumn_width"');
				$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_right_width . ' WHERE config_name = "portal_right_collumn_width"');
				$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_left_active . ' WHERE config_name = "portal_left_column"');
				$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_right_active . ' WHERE config_name = "portal_right_column"');
				$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_index_layout . ' WHERE config_name = "portal_layout"');

				$message = $user->lang['CONFIG_UPDATED'];
				}
				$db->sql_query($sql);
								
				$cache->destroy('portal_config');
				trigger_error($message . adm_back_link($this->u_action));
				
				$template->assign_vars(array(
					'S_SAVE_COLUMN'			=> true,
					'U_BACK'				=> $this->u_action,					
					'U_ACTION_SAVE_COLUMN'	=> $this->u_action . '&amp;action=savecolumn',
					'LEFT_WIDTH'			=> (isset($portal_config['portal_left_collumn_width'])) ? $portal_config['portal_left_collumn_width'] : '',					
					'RIGHT_WIDTH'			=> (isset($portal_config['portal_right_collumn_width'])) ? $portal_config['portal_right_collumn_width'] : '',
					'LEFT_COLLUMN_ACTIVE'	=> (isset($portal_config['portal_left_column'])) ? $portal_config['portal_left_column'] : '',					
					'RIGHT_COLLUMN_ACTIVE'	=> (isset($portal_config['portal_right_column'])) ? $portal_config['portal_right_column'] : '',
					'PORTAL_LAYOUT_ACTIVE'	=> (isset($portal_config['portal_layout'])) ? $portal_config['portal_layout'] : ''
					));					
				
			break;			
						
        }
                            
        $template->assign_vars(array(   
            'U_ACTION'      => $this->u_action)
        );

        $sql = 'SELECT *
            FROM ' . PORTAL_BLOCK_TABLE . '
            ORDER BY block_position, block_order ASC';
        $result = $db->sql_query($sql);
        
        // position left
        $block_position = 1;
                       $sql_left = "SELECT MAX(block_order) as last_order
                            FROM $table WHERE block_position = $block_position";
                                $result_left = $db->sql_query($sql_left);
                                $last_block_left = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_left);

        // position center
        $block_position = 2;
                       $sql_center = "SELECT MAX(block_order) as last_order
                            FROM $table WHERE block_position = $block_position";
                                $result_center = $db->sql_query($sql_center);
                                $last_block_center = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_center);								
	
        // position right
        $block_position = 3;
                       $sql_right = "SELECT MAX(block_order) as last_order
                            FROM $table WHERE block_position = $block_position";
                                $result_right = $db->sql_query($sql_right);
                                $last_block_right = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_right);
        
        // position top
        $block_position = 4;
                       $sql_top = "SELECT MAX(block_order) as last_order
                            FROM $table WHERE block_position = $block_position";
                                $result_top = $db->sql_query($sql_top);
                                $last_block_top = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_top);
     
        // position bottom
        $block_position = 5;
                       $sql_bottom = "SELECT MAX(block_order) as last_order
                            FROM $table WHERE block_position = $block_position";
                                $result_bottom = $db->sql_query($sql_bottom);
                                $last_block_bottom = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_bottom);

		$nb_portal_block = 0 ;								
			while ( $row = $db->sql_fetchrow($result) )
             {  
                $portal_block[$nb_portal_block]['block_id'] =  $row['block_id'] ;
                $portal_block[$nb_portal_block]['block_order'] =  $row['block_order'] ;
                $portal_block[$nb_portal_block]['block_alias'] =  $row['block_alias'] ;
                $portal_block[$nb_portal_block]['block_name'] =  $row['block_name'] ;
                $portal_block[$nb_portal_block]['block_disable'] =  $row['block_disable'] ;
                $portal_block[$nb_portal_block]['block_position'] =  $row['block_position'] ;
                $portal_block[$nb_portal_block]['block_edit'] =  $row['block_edit'] ;
                $portal_block[$nb_portal_block]['block_view'] =  $row['block_view'] ;
                $portal_block[$nb_portal_block]['block_img'] =  $row['block_img'] ;
                $portal_block[$nb_portal_block]['block_content'] =  $row['block_content'] ;
                $nb_portal_block ++ ;
             }
			for ( $im_portal_block = 0 ; $im_portal_block < $nb_portal_block ; $im_portal_block ++)

            $template->assign_block_vars('block', array(
                'BLOCK_TOTAL_CENTER'    =>  $last_block_center, 
                'BLOCK_TOTAL_BOTTOM'    =>  $last_block_bottom,     
                'BLOCK_TOTAL_TOP'       =>  $last_block_top,  
                'BLOCK_TOTAL_LEFT'      =>  $last_block_left, 
                'BLOCK_TOTAL_RIGHT'     =>  $last_block_right,          
                'BLOCK_ID'              =>  $portal_block[$im_portal_block]['block_order'],
                'BLOCK_ALIAS'           =>  $portal_block[$im_portal_block]['block_alias'],
                'BLOCK_HTML'            =>  $portal_block[$im_portal_block]['block_name'],
                'BLOCK_DISABLE_IMG'     =>  $portal_block[$im_portal_block]['block_disable'],
                'BLOCK_POS'             =>  $portal_block[$im_portal_block]['block_position'],
                'BLOCK_EDIT'            =>  $portal_block[$im_portal_block]['block_edit'],
                'BLOCK_VIEW'            =>  $portal_block[$im_portal_block]['block_view'],
                'BLOCK_IMG'             =>  $portal_block[$im_portal_block]['block_img'],
                'BLOCK_CONTENT'         =>  $portal_block[$im_portal_block]['block_content'],

                'U_DELETE'              =>  $this->u_action . '&amp;action=delete&amp;id2=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'],			
                'U_MOVE_UP'             =>  $this->u_action . '&amp;action=move_up&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id2="  . $portal_block[$im_portal_block - 1]['block_id'] . "&amp;id=" .  $portal_block[$im_portal_block]['block_id']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'] . "&amp;ord2=" .  $portal_block[$im_portal_block - 1]['block_order'],		
                'U_MOVE_DOWN'           =>  $this->u_action . '&amp;action=move_down&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id2="  . $portal_block[$im_portal_block + 1]['block_id']  . "&amp;id=" .  $portal_block[$im_portal_block]['block_id'] . "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'] . "&amp;ord2=" .  $portal_block[$im_portal_block + 1]['block_order'],
                'U_MOVE_RIGHT'          =>  $this->u_action . '&amp;action=move_left&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],
                'U_MOVE_LEFT'           =>  $this->u_action . '&amp;action=move_right&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],
                'U_MOVE_BOTTOM'         =>  $this->u_action . '&amp;action=move_bottom&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],
                'U_MOVE_CENTER_BOTTOM'  =>  $this->u_action . '&amp;action=move_center_bottom&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],
                'U_MOVE_CENTER_TOP'    	=>  $this->u_action . '&amp;action=move_center_top&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],
                'U_MOVE_TOP'    		=>  $this->u_action . '&amp;action=move_bottom_top&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],
                'U_MOVE_TOP'    		=>  $this->u_action . '&amp;action=move_bottom_top&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],	
                'U_MOVE_TOP_DIRECT' 	=>  $this->u_action . '&amp;action=move_top_direct&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],
                'U_MOVE_BOTTOM_DIRECT' 	=>  $this->u_action . '&amp;action=move_bottom_direct&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],
                'U_MOVE_RIGHT_DIRECT' 	=>  $this->u_action . '&amp;action=move_right_direct&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],	
                'U_MOVE_LEFT_DIRECT' 	=>  $this->u_action . '&amp;action=move_left_direct&amp;idnone=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'].'&amp;colid='.$portal_block[$im_portal_block]['block_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['block_order'],					
                'U_DISABLE'             =>  $this->u_action . "&amp;action=disable&amp;idnone=".$portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'],
                'U_ENABLE'              =>  $this->u_action . "&amp;action=enable&amp;idnone=".$portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'],
                'BLOCK_DISABLE'         => ($portal_block[$im_portal_block]['block_disable']) ? sprintf($user->lang['DISABLE'])  : sprintf($user->lang['ENABLE']) ,
                'U_EDIT'                =>  $this->u_action . '&amp;action=edit&amp;id2=' . $portal_block[$im_portal_block]['block_id']."&amp;id="  . $portal_block[$im_portal_block]['block_id'])				
				
            );			

			$template->assign_block_vars('portal_column', array(
				'LEFT_WIDTH'			=> 	$portal_config['portal_left_collumn_width'],
				'RIGHT_WIDTH'			=> 	$portal_config['portal_right_collumn_width'],				
				'LEFT_COLLUMN_ACTIVE'	=> 	$portal_config['portal_left_column'],
				'RIGHT_COLLUMN_ACTIVE'	=> 	$portal_config['portal_right_column'],
				'PORTAL_LAYOUT_ACTIVE'	=>  $portal_config['portal_layout'],

				'U_EDIT_COLUMN'			=> 	$this->u_action . '&amp;action=editcolumn'
				));

			$db->sql_freeresult($result);			

    }
}

?>