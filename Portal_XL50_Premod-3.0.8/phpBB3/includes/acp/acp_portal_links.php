<?php
/** 
*
* @name acp_portal_links.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_links.php,v 1.1.1.1 2009/05/15 05:14:21 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_portal_links
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $portal_config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mods/acp_portal_xl_links');
		$this->tpl_name = 'portal_xl/acp_portal_links';
		$this->page_title = 'ACP_PORTAL_LINKS';

		// Set up general vars
		$action = request_var('action', '');
		$action = (isset($_POST['edit'])) ? 'edit' : $action;
		$action = (isset($_POST['add'])) ? 'add' : $action;
		$action = (isset($_POST['save'])) ? 'save' : $action;
		$links_id = request_var('id', 0);
		$links_order = request_var('id', 0);
        $ord = request_var('ord',0);
        $ord2 = request_var('ord2',0);
        $id = request_var('id',0);
        $id2 = request_var('id2',0);		
		$table = PORTAL_LINKS_TABLE;		

		switch ($action)
		{	

		case 'save':
                $links_id     	= request_var('id', '', true);		
				$links_img 		= request_var('links_img', '', true);
				$links_name 	= request_var('links_name', '', true);
				$links_url 		= request_var('links_url', '', true);
				$links_view 	= request_var('links_view', '', true);
				$links_order 	= request_var('links_order', '', true);
				
        $sqlnews = 'SELECT MAX(links_order) as total_links_order
               FROM ' . PORTAL_LINKS_TABLE . '
               WHERE links_order ';
                    $resultnews = $db->sql_query($sqlnews);
                    $total_links_order = (int) $db->sql_fetchfield('total_links_order');
                    $db->sql_freeresult($resultnews);
                    if($links_order) { $links_order = $links_order; } 
					else 
					{
                    $links_order = $total_links_order + 1;           
                    } 					
				
				$sql_ary 		= array(
					'links_id'      => $links_id, 
					'links_img'		=> $links_img,
                    'links_name'	=> $links_name,
					'links_url'		=> $links_url,
                    'links_view'	=> $links_view,
                    'links_order'	=> $links_order,					
				);

				if ($links_id)
				{
				    $sql = 'UPDATE ' . PORTAL_LINKS_TABLE  . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE links_id = $links_id";
				    $message = $user->lang['LINKS_UPDATED'];
				}
				else
				{
				     $sql = 'INSERT INTO ' . PORTAL_LINKS_TABLE  . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				     $message = $user->lang['LINKS_ADDED'];
				}
				$db->sql_query($sql);

				$cache->destroy('menu');

				trigger_error($message . adm_back_link($this->u_action));

			break;

			case 'delete':
				if ($links_id)
				{
					$sql = 'DELETE FROM ' . PORTAL_LINKS_TABLE . "
						WHERE links_id = $links_id";
					$db->sql_query($sql);

					$cache->destroy('menu');

					trigger_error($user->lang['LINKS_REMOVED'] . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang['MUST_SELECT_LINKS'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

			break;

			case 'edit':
			case 'add':
			
				$sql = "SELECT *
					FROM $table
					ORDER BY links_name ASC";
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
 				          if ($action == 'edit' && $links_id == $row['links_id'])
					{
						$links_img = $row;
						$links_name = $row;
						$links_url = $row;
						$links_view = $row;
						$links_order = $row;						
					}
				}
				$db->sql_freeresult($result);
				
				/*
				* Get all icons we need from their directory
				*/
				if ($dir = opendir($phpbb_root_path . 'portal/images/icon_links')) {
					$links_images = array();
					while (($file = readdir($dir)) !== false) {
						if (preg_match('#^[^&\'"<>]+\.(?:gif|png|jpe?g)$#i', $file)) {
							$links_images[$file] = array(
								'file'	=> $file,
								'name'	=> ucfirst(str_replace('_', ' ', preg_replace('#^(.*)\..*$#', '\1', $file))),
							);
						}
    				}
    				closedir($dir);
					asort($links_images);
				}
				
				foreach ($links_images as $linksimages)
				{
						$template->assign_block_vars('file_name', array(
							'S_LINKS_IMG' 		=> $linksimages['file'],
							'S_LINKS_IMG_NAME' 	=> $linksimages['name'],
							));
				}				
				unset($links_images);

				/*
				* Get all icons for preview we need from their directory
				*/
				if ($dir = opendir($phpbb_root_path . 'portal/images/icon_links')) {
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
        					'S_BLOCK_FILE_ICON'  => '<img src="' . $phpbb_root_path . 'portal/images/icon_links/' . $images['file'] . '" title="' . $images['name'] . '" height="15" width="15" alt="' . $images['name'] . '" />'
							));
				}				
				unset($imagescontent);
				
				$template->assign_vars(array(
					'S_EDIT'	 	=> true,
					'U_BACK'	 	=> $this->u_action,
					'U_ACTION'	 	=> $this->u_action . '&amp;id=' . $links_id,
					'LINKS_ORDER' 	=> (isset($links_order['links_order'])) ? $links_order['links_order'] : '',					
					'LINKS_IMG'	 	=> (isset($links_img['links_img'])) ? $links_img['links_img'] : '',
					'LINKS1_IMG'	=> $row['links_img'],
					'S_IMAGE_FILE'	=> $row['links_img'],
					'LINKS_NAME'	=> (isset($links_name['links_name'])) ? $links_name['links_name'] : '',
					'LINKS_URL'	 	=> (isset($links_url['links_url'])) ? $links_url['links_url'] : '',
					'LINKS_VIEW'	=> (isset($links_view['links_view'])) ? $links_view['links_view'] : ''	)
				);
				return;
			break;
			
            case 'move_down':
            case 'move_up':

            $sql = 'UPDATE ' . PORTAL_LINKS_TABLE  . ' SET links_order=' . $ord .' + '. $ord2 .' - links_order WHERE links_id = ' . $id .' OR links_id = ' . $id2 . '';
            if( !($result = $db->sql_query($sql)) )
            $db->sql_query($sql); 
            $cache->destroy('links_order');	
			break;
		}			
		
		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action)
		);

		$sql = 'SELECT *
			FROM ' . PORTAL_LINKS_TABLE  . '
			ORDER BY links_order ASC ';
		$result = $db->sql_query($sql);
		{
			$nb_menu = 0 ;		
			while ( $row = $db->sql_fetchrow($result) )		
             {
                $links_block[$nb_menu]['links_id'] 		=  $row['links_id'] ;
                $links_block[$nb_menu]['links_order'] 	=  $row['links_order'] ;
                $links_block[$nb_menu]['links_view'] 	=  $row['links_view'] ;
                $links_block[$nb_menu]['links_url'] 	=  $row['links_url'] ;
                $links_block[$nb_menu]['links_name'] 	=  $row['links_name'] ;
                $links_block[$nb_menu]['links_img'] 	=  $row['links_img'] ;;					
                $nb_menu ++ ;
             }
			for ( $portal_links_block = 0 ; $portal_links_block < $nb_menu ; $portal_links_block ++)	
			$template->assign_block_vars('links', array(				
				'LINKS_ORDER'   =>  $links_block[$portal_links_block]['links_order'],
				'LINKS_VIEW'    =>  $links_block[$portal_links_block]['links_view'],
				'LINKS_URL'     =>  $links_block[$portal_links_block]['links_url'],				
				'MEU_NAME'      =>  $links_block[$portal_links_block]['links_name'],
				'LINKS_IMG'     =>  $links_block[$portal_links_block]['links_img'],	
				'S_IMAGE_FILE'	=>  $links_block[$portal_links_block]['links_img'],
                'U_MOVE_UP'     =>  $this->u_action . '&amp;action=move_up&amp;idnone=' . $links_block[$portal_links_block]['links_id']."&amp;id2="  . $links_block[$portal_links_block - 1]['links_id'] . "&amp;id=" .  $links_block[$portal_links_block]['links_id']. "&amp;ord=" .  $links_block[$portal_links_block]['links_order'] . "&amp;ord2=" .  $links_block[$portal_links_block - 1]['links_order'],
                'U_MOVE_DOWN'   =>  $this->u_action . '&amp;action=move_down&amp;idnone=' . $links_block[$portal_links_block]['links_id']."&amp;id2="  . $links_block[$portal_links_block + 1]['links_id']  . "&amp;id=" .  $links_block[$portal_links_block]['links_id'] . "&amp;ord=" .  $links_block[$portal_links_block]['links_order'] . "&amp;ord2=" .  $links_block[$portal_links_block + 1]['links_order'],				
                'U_DELETE'     	=>  $this->u_action . '&amp;action=delete&amp;id2=' . $links_block[$portal_links_block]['links_id']."&amp;id="  . $links_block[$portal_links_block]['links_id'],
                'U_EDIT'        =>  $this->u_action . '&amp;action=edit&amp;id2=' . $links_block[$portal_links_block]['links_id']."&amp;id="  . $links_block[$portal_links_block]['links_id'])					
            );	
		}
		$db->sql_freeresult($result);
	}
}

?>
