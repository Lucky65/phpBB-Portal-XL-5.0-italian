<?php
/** 
*
* @name acp_portal_partners.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_banners.php,v 1.3 2009/10/18 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_portal_banners
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $portal_config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mods/acp_portal_xl_banners');
		$this->tpl_name = 'portal_xl/acp_portal_banners';
		$this->page_title = 'ACP_PORTAL_BANNERS';

		// Set up general vars
		$action = request_var('action', '');
		$action = (isset($_POST['edit'])) ? 'edit' : $action;
		$action = (isset($_POST['add'])) ? 'add' : $action;
		$action = (isset($_POST['save'])) ? 'save' : $action;
		$partners_id = request_var('id', 0);

		switch ($action)
		{

		case 'save':

                $partners_id 			= request_var('id', '', true);
				$partners_img 			= request_var('partners_img', '', true);
				$partners_description 	= request_var('partners_description', '', true);				
				$partners_url 			= request_var('partners_url', '', true);

				$sql_ary = array(
                    'partners_id'			=> $partners_id,
					'partners_img'			=> $partners_img,
					'partners_description'	=> $partners_description,					
					'partners_url'			=> $partners_url
				);

				if ($partners_id)
				{
				    $sql = 'UPDATE ' . PORTAL_PARTNERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE partners_id = $partners_id";
				    $message = $user->lang['PARTNERS_UPDATED'];
				}
				else
				{
				     $sql = 'INSERT INTO ' . PORTAL_PARTNERS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				     $message = $user->lang['PARTNERS_ADDED'];
				}
				$db->sql_query($sql);

				$cache->destroy('partners');

				trigger_error($message . adm_back_link($this->u_action));

			break;

			case 'delete':

				// Ok, they want to delete their quote
				if ($partners_id)
				{
					$sql = 'DELETE FROM ' . PORTAL_PARTNERS_TABLE . "
						WHERE partners_id = $partners_id";
					$db->sql_query($sql);

					$cache->destroy('partners');

					trigger_error($user->lang['PARTNERS_REMOVED'] . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang['MUST_SELECT_PARTNERS'] . adm_back_link($this->u_action), E_USER_WARNING);
				}
			break;

			case 'editdisplay':
			
 			if ($action == 'editdisplay')
			{
				$config_partners_display_value 	= $portal_config['portal_partners_display_value'];
			}
				
				$template->assign_vars(array(
					'S_EDIT_DISPLAY'		=> true,
					'U_BACK'				=> $this->u_action,					
					'U_ACTION_EDIT_COLUMN'	=> $this->u_action . '&amp;action=editdisplay',
					'DISPLAY_VALUE'			=> (isset($portal_config['portal_partners_display_value'])) ? $portal_config['portal_partners_display_value'] : '')
				);					

            break;				

			case 'savedisplay':
		
				$config_partners_display_value 	= request_var('portal_partners_display_value','', true);
								
 				if ($action == 'savedisplay')
				{
				$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_partners_display_value . ' WHERE config_name = "portal_partners_display_value"');

				$message = $user->lang['CONFIG_UPDATED'];
				}
				$db->sql_query($sql);
								
				$cache->destroy('portal_config');
				trigger_error($message . adm_back_link($this->u_action));
				
				$template->assign_vars(array(
					'S_EDIT_DISPLAY'		=> true,
					'U_BACK'				=> $this->u_action,					
					'U_ACTION_SAVE_DISPLAY'	=> $this->u_action . '&amp;action=savedisplay',
					'DISPLAY_VALUE'			=> (isset($portal_config['portal_partners_display_value'])) ? $portal_config['portal_partners_display_value'] : '',					
					));					
				
			break;			

			case 'edit':
			case 'add':

				$sql = 'SELECT *
					FROM ' . PORTAL_PARTNERS_TABLE . '
					ORDER BY   partners_url ASC';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{

 				          if ($action == 'edit' && $partners_id == $row['partners_id'])

					{
						$partners_url = $row;
						$partners_img = $row;
						$partners_description = $row;						
					}
				}
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'S_EDIT'				=> true,
					'U_BACK'				=> $this->u_action,
					'U_ACTION'				=> $this->u_action . '&amp;id=' . $partners_id,
					'PARTNERS_URL'			=> (isset($partners_url['partners_url'])) ? $partners_url['partners_url'] : '',
					'PARTNERS_DESCRIPTION'	=> (isset($partners_description['partners_description'])) ? $partners_description['partners_description'] : '',					
					'PARTNERS_IMG'			=> (isset($partners_img['partners_img'])) ? $partners_img['partners_img'] : '')
				);

				return;

			break;
		}

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action)
		);

		$sql = 'SELECT *
			FROM ' . PORTAL_PARTNERS_TABLE . '
			ORDER BY partners_id ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$template->assign_block_vars('partners', array(

				'PARTNERS_URL'			=> 	$row['partners_url'],
				'PARTNERS_IMG' 			=> '<div style="margin:2px;"><img src="../' . $row['partners_img'] . '" width="88" height="31" alt="' . $row['partners_description'] . '" title="' . $row['partners_description'] . '" /></div>',
				'PARTNERS_DESCRIPTION'	=> 	$row['partners_description'],				
				'U_EDIT'				=> 	$this->u_action . '&amp;action=edit&amp;id=' . $row['partners_id'],
				'U_DELETE'				=> 	$this->u_action . '&amp;action=delete&amp;id=' . $row['partners_id'])

			);
		}

			$template->assign_block_vars('portal_partners_display_value', array(
				'DISPLAY_VALUE'		=> 	$portal_config['portal_partners_display_value'],
				'U_EDIT_DISPLAY'	=> 	$this->u_action . '&amp;action=editdisplay'
				));

		$db->sql_freeresult($result);

	}
}

?>
