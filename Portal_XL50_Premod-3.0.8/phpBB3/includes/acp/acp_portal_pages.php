<?php
/** 
*
* @name acp_portal_pages.php
* @package phpBB3 Portal XL
* @version $Id: acp_portal_pages.php,v 1.3 2009/10/17 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_portal_pages 
{
    var $u_action;
	
    function main($id, $im_portal_block)
    {
        global $db, $user, $auth, $template, $cache;
        global $portal_config, $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
        $user->add_lang('mods/acp_portal_xl_blocks');
        $this->tpl_name = 'portal_xl/acp_portal_pages';
        $this->page_title = 'ACP_MANAGE_PAGES';
		
        $error = $notify = array();
        $action = request_var('action', '');        
        $action = (isset($_POST['edit'])) ? 'edit' : $action;
        $action = (isset($_POST['save'])) ? 'save' : $action;
        $action = (isset($_POST['add'])) ? 'add' : $action;     
        $page_id = request_var('id', 0);       
        $ord = request_var('ord',0);
        $ord2 = request_var('ord2',0);
        $id = request_var('id',0);
        $id2 = request_var('id2',0);
        $colid = request_var('colid',0);
        $table = PORTAL_PAGES_TABLE;		

        switch ($action)
        {

        case 'save':
                $page_alias           = request_var('page_alias','',true);
                $page_title           = request_var('page_title','',true);                
                $page_disable         = request_var('page_disable', '', true);
                $page_position        = request_var('page_position', '', true);              
                $page_last_position   = request_var('page_last_position', '', true);              
                $page_order           = request_var('page_order', '', true);
				$page_view 			  = request_var('page_view', '', true);
				$page_img 			  = request_var('page_img', '', true);
				$page_content 		  = request_var('page_content', '', true);
				
                   $sqlblock = 'SELECT MAX(page_order) as total_order
                            FROM ' . PORTAL_PAGES_TABLE . '
                            WHERE page_position = ' . $page_position .'';
                                $resultnews = $db->sql_query($sqlblock);
                                $total_page_order = (int) $db->sql_fetchfield('total_order');
                                $db->sql_freeresult($resultnews);
                                $insert = $total_page_order + 1;

                    $sql_ary = array(
                    'page_alias'           	=> $page_alias,
                    'page_title'            => $page_title,                 
                    'page_order'           	=> ($page_id) ? $page_order : $insert,
                    'page_disable'         	=> $page_disable,
                    'page_position'        	=> $page_position,                     
                    'page_last_position '   => $page_last_position,                     
                    'page_view'        		=> $page_view,                     
                    'page_img'        		=> $page_img,                     
                    'page_content'        	=> $page_content                     
                
                );
                if ($page_id)
                {               
                $sql = 'UPDATE ' . PORTAL_PAGES_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE page_id = $page_id";

                    $message = $user->lang['BLOCK_UPDATED'];
                }
                else
                {
                     $sql = 'INSERT INTO ' . PORTAL_PAGES_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
                     $message = $user->lang['BLOCK_ADDED'];
                }
                $db->sql_query($sql);
                $cache->destroy('sql', $table);
                
                trigger_error($message . adm_back_link($this->u_action));

            break;

            case 'edit':
            case 'add':
            
                $sql = 'SELECT *
                    FROM ' . PORTAL_PAGES_TABLE . '
                    ORDER BY page_id ';
                $result = $db->sql_query($sql);

                while ($row = $db->sql_fetchrow($result))
                {
                if ($action == 'edit' && $page_id == $row['page_id'])
                    {
                    $page_alias            = $row;
                    $page_title            = $row;                     
                    $page_position         = $row;                     
                    $page_disable          = $row;
                    $page_order            = $row;          
                    $page_view             = $row;					          
                    $page_img              = $row;					          
                    $page_content          = $row;					          
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
                    'U_ACTION'      => $this->u_action . '&amp;id=' . $page_id,
                    'BLOCK_ALIAS'   => (isset($page_alias['page_alias'])) ? $page_alias['page_alias'] : '',             
                    'BLOCK_HTML'    => (isset($page_title['page_title'])) ? $page_title['page_title'] : '',                 
                    'BLOCK_ORDER'   => (isset($page_order['page_order'])) ? $page_order['page_order'] : '',                 
                    'BLOCK_POS'     => (isset($page_position['page_position'])) ? $page_position['page_position'] : '',                 
                    'BLOCK_DISABLE' => (isset($page_disable['page_disable'])) ? $page_disable['page_disable'] : '',
                    'BLOCK_VIEW'    => (isset($page_view['page_view'])) ? $page_view['page_view'] : '',
                    'BLOCK_IMG'     => (isset($page_img['page_img'])) ? $page_img['page_img'] : '',
                    'BLOCK_CONTENT' => (isset($page_content['page_content'])) ? $page_content['page_content'] : '',
					));

                return;
            break;

            case 'delete':

				$page_id = request_var('id', 0);

				if (!$page_id)
				{
					trigger_error($user->lang['MUST_SELECT_BLOCK'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				if (confirm_box(true))
				{
					$sql = 'SELECT page_title
						FROM ' . PORTAL_PAGES_TABLE  . "
						WHERE page_id = $page_id";
					$result = $db->sql_query($sql);
					$deleted_page_title = $db->sql_fetchfield('page_title');
					$db->sql_freeresult($result);

					$sql = 'DELETE FROM ' . PORTAL_PAGES_TABLE  . "
						WHERE page_id = $page_id";
					$db->sql_query($sql);

					$cache->destroy('sql', $table);

					add_log('admin', $user->lang['BLOCK_REMOVED'], $deleted_page_title);

					trigger_error($user->lang['BLOCK_REMOVED'] . adm_back_link($this->u_action));
				}
				else
				{
					confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
						'id'		=> $page_id,
						'action'	=> 'delete',
					)));
				}
 
            break;
			
            case'move_left':
            case'move_bottom_direct':			 
			 
               $sql = "SELECT MAX(page_order) as page_order FROM $table WHERE page_position = $colid + 1  " ;
               if( !($result = $db->sql_query($sql)) )
               {
                   message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
                   }
                   while ( $row = $db->sql_fetchrow($result) )
                   {
                       $max_order = $row['page_order'] ;
                   }
					$colnew = $colid + 1 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET page_position = $colnew , page_order = $ordernew WHERE page_id = $id " ;
              if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_right':
			case'move_top_direct':

               $sql = "SELECT MAX(page_order) as page_order FROM $table WHERE page_position = $colid - 1  " ;
				if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
					}
				while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['page_order'] ;
					}
					$colnew = $colid - 1 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET page_position = $colnew , page_order = $ordernew WHERE page_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_bottom':
            case'move_left_direct':
			
               $sql = "SELECT MAX(page_order) as page_order FROM $table WHERE page_position = $colid - 2  " ;
               if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
					}
				while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['page_order'] ;
					}
					$colnew = $colid - 2 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET page_position = $colnew , page_order = $ordernew WHERE page_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_center_bottom':
               $sql = "SELECT MAX(page_order) as page_order FROM $table WHERE page_position = $colid + 3  " ;
				if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
					}
              while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['page_order'] ;
					}
					$colnew = $colid + 3 ;
					$ordernew = $max_order + 1;
				$sql = "UPDATE $table SET page_position = $colnew , page_order = $ordernew WHERE page_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_center_top':
			case'move_right_direct':
               $sql = "SELECT MAX(page_order) as page_order FROM $table WHERE page_position = $colid + 2  " ;
               if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query structure portal information", "", __LINE__, __FILE__, $sql);
					}
				while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['page_order'] ;

					}
					$colnew = $colid + 2 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET page_position = $colnew , page_order = $ordernew WHERE page_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;
			
            case'move_bottom_top':
               $sql = "SELECT MAX(page_order) as page_order FROM $table WHERE page_position = $colid - 3  " ;
				if( !($result = $db->sql_query($sql)) )
					{
					message_die(CRITICAL_ERROR, "Could not query portal structure information", "", __LINE__, __FILE__, $sql);
					}
				while ( $row = $db->sql_fetchrow($result) )
					{
                       $max_order = $row['page_order'] ;
					}
					$colnew = $colid - 3 ;
					$ordernew = $max_order + 1;
               $sql = "UPDATE $table SET page_position = $colnew , page_order = $ordernew WHERE page_id = $id " ;
				if( !($result = $db->sql_query($sql)) )
					$db->sql_query($sql); 
					$cache->destroy('sql', $table);
            break;			
                       
            case 'disable':
                       $sql = 'SELECT *
                            FROM ' . PORTAL_PAGES_TABLE . '
                            ORDER BY   page_id ';
                            $result = $db->sql_query($sql);
                            $db->sql_freeresult($result);   
                       $sql = "UPDATE $table
                            SET page_disable = $page_id, page_disable = 0
                            WHERE " . $db->sql_in_set('page_id', $page_id);
                                if( !($result = $db->sql_query($sql)) )             
                                    $db->sql_query($sql);               
                                    $cache->destroy('sql', $table);

            break;

            case 'enable':
                       $sql = 'SELECT *
                            FROM ' . PORTAL_PAGES_TABLE . '
                            ORDER BY   page_id ';
                            $result = $db->sql_query($sql);
                            $db->sql_freeresult($result);   
                       $sql = "UPDATE $table
                            SET page_disable = $page_id, page_disable = 1
                            WHERE " . $db->sql_in_set('page_id', $page_id);
                                if( !($result = $db->sql_query($sql)) )             
                                $db->sql_query($sql);               
                                $cache->destroy('sql', $table);
            break;

            case 'move_down':
            case 'move_up':

            $sql = "UPDATE $table SET page_order = $ord + $ord2 - page_order WHERE page_id = $id OR page_id = $id2 ";
            if( !($result = $db->sql_query($sql)) )
            $db->sql_query($sql); 
            $cache->destroy('sql', $table);
			
			break;
			
			case 'editcolumn':
			
 			if ($action == 'editcolumn')
			{
				$config_left_width 		= $portal_config['portal_pages_left_collumn_width'];
				$config_right_width 	= $portal_config['portal_pages_right_collumn_width'];		
				$config_left_active 	= $portal_config['portal_pages_left_column'];
				$config_right_active 	= $portal_config['portal_pages_right_column'];
				$config_pages_layout 	= $portal_config['portal_pages_layout'];
			}
				
			$template->assign_vars(array(
				'S_EDIT_COLUMN'				=> true,
				'U_BACK'					=> $this->u_action,					
				'U_ACTION_EDIT_COLUMN'		=> $this->u_action . '&amp;action=editcolumn',
				'LEFT_WIDTH'				=> (isset($portal_config['portal_pages_left_collumn_width'])) ? $portal_config['portal_pages_left_collumn_width'] : '',					
				'RIGHT_WIDTH'				=> (isset($portal_config['portal_pages_right_collumn_width'])) ? $portal_config['portal_pages_right_collumn_width'] : '',
				'LEFT_COLLUMN_ACTIVE'		=> (isset($portal_config['portal_pages_left_column'])) ? $portal_config['portal_pages_left_column'] : '',					
				'RIGHT_COLLUMN_ACTIVE'		=> (isset($portal_config['portal_pages_right_column'])) ? $portal_config['portal_pages_right_column'] : '',
				'PAGES_LAYOUT_ACTIVE'		=> (isset($portal_config['portal_pages_layout'])) ? $portal_config['portal_pages_layout'] : '',
				'PAGES_PAGE_ACTIVE'			=> (isset($portal_config['portal_pages_page'])) ? $portal_config['portal_pages_page'] : '',
				'PAGES_PAGE_ACTIVE_NUMBER'	=> (isset($portal_config['portal_pages_page_number'])) ? $portal_config['portal_pages_page_number'] : ''
				));					

            break;				
						
			case 'savecolumn':
		
				$config_left_width 					= request_var('portal_pages_left_collumn_width','', true);
				$config_right_width 				= request_var('portal_pages_right_collumn_width','', true);
				$config_left_active 				= request_var('portal_pages_left_column','', true);
				$config_right_active 				= request_var('portal_pages_right_column','', true);
				$config_pages_layout 				= request_var('portal_pages_layout','', true);
				$config_portal_pages_page 			= request_var('portal_pages_page','', true);
				$config_portal_pages_page_number 	= request_var('portal_pages_page_number','', true);
							
 				if ($action == 'savecolumn')
				{
					$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_left_width . ' WHERE config_name = "portal_pages_left_collumn_width"');
					$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_right_width . ' WHERE config_name = "portal_pages_right_collumn_width"');
					$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_left_active . ' WHERE config_name = "portal_pages_left_column"');
					$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_right_active . ' WHERE config_name = "portal_pages_right_column"');
					$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_pages_layout . ' WHERE config_name = "portal_pages_layout"');
					$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_portal_pages_page . ' WHERE config_name = "portal_pages_page"');
					
					$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . '
						SET ' . $db->sql_build_array('UPDATE', array(
							'config_value' => (string) $config_portal_pages_page_number,
							)) . "
						WHERE config_name = 'portal_pages_page_number'");
					
				    $message = $user->lang['CONFIG_UPDATED'];
				}
				$db->sql_query($sql);
								
				$cache->destroy('portal_config');
				trigger_error($message . adm_back_link($this->u_action));
				
				$template->assign_vars(array(
					'S_SAVE_COLUMN'				=> true,
					'U_BACK'					=> $this->u_action,					
					'U_ACTION_SAVE_COLUMN'		=> $this->u_action . '&amp;action=savecolumn',
					'LEFT_WIDTH'				=> (isset($portal_config['portal_pages_left_collumn_width'])) ? $portal_config['portal_pages_left_collumn_width'] : '',					
					'RIGHT_WIDTH'				=> (isset($portal_config['portal_pages_right_collumn_width'])) ? $portal_config['portal_pages_right_collumn_width'] : '',
					'LEFT_COLLUMN_ACTIVE'		=> (isset($portal_config['portal_pages_left_column'])) ? $portal_config['portal_pages_left_column'] : '',					
					'RIGHT_COLLUMN_ACTIVE'		=> (isset($portal_config['portal_pages_right_column'])) ? $portal_config['portal_pages_right_column'] : '',
					'PAGES_LAYOUT_ACTIVE'		=> (isset($portal_config['portal_pages_layout'])) ? $portal_config['portal_pages_layout'] : '',
					'PAGES_PAGE_ACTIVE'			=> (isset($portal_config['portal_pages_page'])) ? $portal_config['portal_pages_page'] : '',
					'PAGES_PAGE_ACTIVE_NUMBER'	=> (isset($portal_config['portal_pages_page_number'])) ? $portal_config['portal_pages_page_number'] : ''
					));					
				
			break;			
						
        }
                            
        $template->assign_vars(array(   
            'U_ACTION'      => $this->u_action)
        );

        $sql = 'SELECT *
            FROM ' . PORTAL_PAGES_TABLE . '
            ORDER BY page_position, page_order ASC';
        $result = $db->sql_query($sql);
        
        // position left
        $page_position = 1;
                       $sql_left = "SELECT MAX(page_order) as last_order
                            FROM $table WHERE page_position = $page_position";
                                $result_left = $db->sql_query($sql_left);
                                $last_page_left = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_left);

        // position center
        $page_position = 2;
                       $sql_center = "SELECT MAX(page_order) as last_order
                            FROM $table WHERE page_position = $page_position";
                                $result_center = $db->sql_query($sql_center);
                                $last_page_center = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_center);								
	
        // position right
        $page_position = 3;
                       $sql_right = "SELECT MAX(page_order) as last_order
                            FROM $table WHERE page_position = $page_position";
                                $result_right = $db->sql_query($sql_right);
                                $last_page_right = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_right);
        
        // position top
        $page_position = 4;
                       $sql_top = "SELECT MAX(page_order) as last_order
                            FROM $table WHERE page_position = $page_position";
                                $result_top = $db->sql_query($sql_top);
                                $last_page_top = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_top);
     
        // position bottom
        $page_position = 5;
                       $sql_bottom = "SELECT MAX(page_order) as last_order
                            FROM $table WHERE page_position = $page_position";
                                $result_bottom = $db->sql_query($sql_bottom);
                                $last_page_bottom = (int) $db->sql_fetchfield('last_order');
                                $db->sql_freeresult($result_bottom);

		$nb_portal_block = 0 ;								
			while ( $row = $db->sql_fetchrow($result) )
             {  
                $portal_block[$nb_portal_block]['page_id'] =  $row['page_id'] ;
                $portal_block[$nb_portal_block]['page_order'] =  $row['page_order'] ;
                $portal_block[$nb_portal_block]['page_alias'] =  $row['page_alias'] ;
                $portal_block[$nb_portal_block]['page_title'] =  $row['page_title'] ;
                $portal_block[$nb_portal_block]['page_disable'] =  $row['page_disable'] ;
                $portal_block[$nb_portal_block]['page_position'] =  $row['page_position'] ;
                $portal_block[$nb_portal_block]['page_edit'] =  $row['page_edit'] ;
                $portal_block[$nb_portal_block]['page_view'] =  $row['page_view'] ;
                $portal_block[$nb_portal_block]['page_img'] =  $row['page_img'] ;
                $portal_block[$nb_portal_block]['page_content'] =  $row['page_content'] ;
				
                $nb_portal_block ++ ;
             }
			for ( $im_portal_block = 0 ; $im_portal_block < $nb_portal_block ; $im_portal_block ++)

            $template->assign_block_vars('block', array(
                'BLOCK_TOTAL_CENTER'    =>  $last_page_center, 
                'BLOCK_TOTAL_BOTTOM'    =>  $last_page_bottom,     
                'BLOCK_TOTAL_TOP'       =>  $last_page_top,  
                'BLOCK_TOTAL_LEFT'      =>  $last_page_left, 
                'BLOCK_TOTAL_RIGHT'     =>  $last_page_right,          
                'BLOCK_ID'              =>  $portal_block[$im_portal_block]['page_order'],
                'BLOCK_ALIAS'           =>  $portal_block[$im_portal_block]['page_alias'],
                'BLOCK_HTML'            =>  $portal_block[$im_portal_block]['page_title'],
                'BLOCK_DISABLE_IMG'     =>  $portal_block[$im_portal_block]['page_disable'],
                'BLOCK_POS'             =>  $portal_block[$im_portal_block]['page_position'],
                'BLOCK_EDIT'            =>  $portal_block[$im_portal_block]['page_edit'],
                'BLOCK_VIEW'            =>  $portal_block[$im_portal_block]['page_view'],
                'BLOCK_IMG'             =>  $portal_block[$im_portal_block]['page_img'],
                'BLOCK_CONTENT'         =>  $portal_block[$im_portal_block]['page_content'],
				
                'U_DELETE'              =>  $this->u_action . '&amp;action=delete&amp;id2=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'],			
                'U_MOVE_UP'             =>  $this->u_action . '&amp;action=move_up&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id2="  . $portal_block[$im_portal_block - 1]['page_id'] . "&amp;id=" .  $portal_block[$im_portal_block]['page_id']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'] . "&amp;ord2=" .  $portal_block[$im_portal_block - 1]['page_order'],		
                'U_MOVE_DOWN'           =>  $this->u_action . '&amp;action=move_down&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id2="  . $portal_block[$im_portal_block + 1]['page_id']  . "&amp;id=" .  $portal_block[$im_portal_block]['page_id'] . "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'] . "&amp;ord2=" .  $portal_block[$im_portal_block + 1]['page_order'],
                'U_MOVE_RIGHT'          =>  $this->u_action . '&amp;action=move_left&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],
                'U_MOVE_LEFT'           =>  $this->u_action . '&amp;action=move_right&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],
                'U_MOVE_BOTTOM'         =>  $this->u_action . '&amp;action=move_bottom&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],
                'U_MOVE_CENTER_BOTON'   =>  $this->u_action . '&amp;action=move_center_bottom&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],
                'U_MOVE_CENTER_TOP'    	=>  $this->u_action . '&amp;action=move_center_top&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],
                'U_MOVE_TOP'    		=>  $this->u_action . '&amp;action=move_bottom_top&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],
                'U_MOVE_TOP'    		=>  $this->u_action . '&amp;action=move_bottom_top&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],	
                'U_MOVE_TOP_DIRECT' 	=>  $this->u_action . '&amp;action=move_top_direct&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],
                'U_MOVE_BOTTOM_DIRECT' 	=>  $this->u_action . '&amp;action=move_bottom_direct&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],
                'U_MOVE_RIGHT_DIRECT' 	=>  $this->u_action . '&amp;action=move_right_direct&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],	
                'U_MOVE_LEFT_DIRECT' 	=>  $this->u_action . '&amp;action=move_left_direct&amp;idnone=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'].'&amp;colid='.$portal_block[$im_portal_block]['page_position']. "&amp;ord=" .  $portal_block[$im_portal_block]['page_order'],					
                'U_DISABLE'             =>  $this->u_action . "&amp;action=disable&amp;idnone=".$portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'],
                'U_ENABLE'              =>  $this->u_action . "&amp;action=enable&amp;idnone=".$portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'],
                'BLOCK_DISABLE'         => ($portal_block[$im_portal_block]['page_disable']) ? sprintf($user->lang['DISABLE'])  : sprintf($user->lang['ENABLE']) ,
                'U_EDIT'                =>  $this->u_action . '&amp;action=edit&amp;id2=' . $portal_block[$im_portal_block]['page_id']."&amp;id="  . $portal_block[$im_portal_block]['page_id'])				
				
            );			

			$template->assign_block_vars('portal_pages_column', array(
				'LEFT_WIDTH'				=> 	$portal_config['portal_pages_left_collumn_width'],
				'RIGHT_WIDTH'				=> 	$portal_config['portal_pages_right_collumn_width'],
				'LEFT_COLLUMN_ACTIVE'		=> 	$portal_config['portal_pages_left_column'],
				'RIGHT_COLLUMN_ACTIVE'		=> 	$portal_config['portal_pages_right_column'],
				'PAGES_LAYOUT_ACTIVE'		=>  $portal_config['portal_pages_layout'],
				'PAGES_PAGE_ACTIVE'			=>  $portal_config['portal_pages_page'],
				'PAGES_PAGE_ACTIVE_NUMBER'	=>  $portal_config['portal_pages_page_number'],
								
				'U_EDIT_COLUMN'			=> 	$this->u_action . '&amp;action=editcolumn'
				));

			$db->sql_freeresult($result);			

    }
}

?>