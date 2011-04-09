<?php
/** 
*
* @name acp_portal_acronyms.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_acronyms.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/

/**
* @package acp
*/
class acp_portal_acronyms
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $portal_config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mods/acp_portal_xl_acronyms');
		$this->tpl_name = 'portal_xl/acp_portal_acronyms';
		$this->page_title = 'ACP_PORTAL_ACRONYMS';

		// Set up general vars
		$action = request_var('action', '');
		$action = (isset($_POST['edit'])) ? 'edit' : $action;
		$action = (isset($_POST['add'])) ? 'add' : $action;
		$action = (isset($_POST['save'])) ? 'save' : $action;
		$acronym_id = request_var('id', 0);

		switch ($action)
		{
			case 'editacronyms':
			
 			if ($action == 'editacronyms')
			{
				$config_acronyms_allow = request_var('portal_acronyms_allow','', true);
			}
				
				$template->assign_vars(array(
					'S_EDIT_ACRONYM'			=> true,
					'U_BACK'					=> $this->u_action,					
					'U_ACTION_EDIT_COLUMN'		=> $this->u_action . '&amp;action=editacronyms',
					'ACRONYM_ALLOW'				=> (isset($portal_config['portal_acronyms_allow'])) ? $portal_config['portal_acronyms_allow'] : '',					
				));					

            break;				
						
			case 'saveacronyms':
		
				$config_acronyms_cache_time = request_var('portal_acronyms_allow','', true);
								
 				if ($action == 'saveacronyms')
				{
				$db->sql_query('UPDATE ' . PORTAL_CONFIG_TABLE . ' SET config_value = ' . $config_acronyms_cache_time . ' WHERE config_name = "portal_acronyms_allow"');

				$message = $user->lang['CONFIG_UPDATED'];
				}
				$db->sql_query($sql);
								
				$cache->destroy('portal_config');
				trigger_error($message . adm_back_link($this->u_action));
				
				$template->assign_vars(array(
					'S_SAVE_ACRONYMS'		=> true,
					'U_BACK'				=> $this->u_action,					
					'U_ACTION_SAVE_COLUMN'	=> $this->u_action . '&amp;action=saveacronyms',
					'ACRONYM_ALLOW'			=> (isset($portal_config['portal_acronyms_allow'])) ? $portal_config['portal_acronyms_allow'] : '',					
					));					
				
			break;			

			case 'save':

                $acronym_id 	= request_var('id', '', true);
				$acronym 		= request_var('acronym', '', true);
				$description 	= request_var('description', '', true);
				$acronym_url 	= request_var('acronym_url', '', true);

				$sql_ary = array(
                    'acronym_id'		=> $acronym_id,
					'acronym'			=> $acronym,
					'description'		=> $description,
					'acronym_url'		=> $acronym_url
				);

				if ($acronym_id)
				{
				    $sql = 'UPDATE ' . PORTAL_ACRONYMS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE acronym_id = $acronym_id";
				    $message = $user->lang['ACRONYM_UPDATED'];
				}
				else
				{
				     $sql = 'INSERT INTO ' . PORTAL_ACRONYMS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				     $message = $user->lang['ACRONYM_ADDED'];
				}
				$db->sql_query($sql);

				$cache->destroy('acronym');

				trigger_error($message . adm_back_link($this->u_action));

			break;

			case 'delete':

				// Ok, we want to delete a acronym
				if ($acronym_id)
				{
					$sql = 'DELETE FROM ' . PORTAL_ACRONYMS_TABLE . "
						WHERE acronym_id = $acronym_id";
					$db->sql_query($sql);

					$cache->destroy('acronym');

					trigger_error($user->lang['ACRONYM_REMOVED'] . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang['MUST_SELECT_ACRONYM'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

			break;

			case 'edit':
			case 'add':

				$sql = 'SELECT *
					FROM ' . PORTAL_ACRONYMS_TABLE . '
					ORDER BY  acronym ASC, description ASC';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{

 				          if ($action == 'edit' && $acronym_id == $row['acronym_id'])

					{
						$acronym = $row;
						$description = $row;
						$acronym_url = $row;
					}
				}
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'S_EDIT'		=> true,
					'U_BACK'		=> $this->u_action,
					'U_ACTION'		=> $this->u_action . '&amp;id=' . $acronym_id,
					'ACRONYM'		=> (isset($acronym['acronym'])) ? $acronym['acronym'] : '',
					'DESCRIPTION'	=> (isset($description['description'])) ? $description['description'] : '',
					'ACRONYM_URL'	=> (isset($acronym_url['acronym_url'])) ? $acronym_url['acronym_url'] : '')
				);


				return;

			break;
		}

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action)
		);

		$sql = 'SELECT *
			FROM ' . PORTAL_ACRONYMS_TABLE . '
			ORDER BY acronym ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$template->assign_block_vars('acronym', array(

				'ACRONYM'		=> 	$row['acronym'],
				'DESCRIPTION'	=> 	$row['description'],
				'ACRONYM_URL'	=>  $row['acronym_url'],
				'U_EDIT'		=> 	$this->u_action . '&amp;action=edit&amp;id=' . $row['acronym_id'],
				'U_DELETE'		=> 	$this->u_action . '&amp;action=delete&amp;id=' . $row['acronym_id'])
			);
		}

			$active = ($portal_config['portal_acronyms_allow'] == '1') ? $user->lang['YES'] : (($portal_config['portal_acronyms_allow'] == '0') ? $user->lang['NO'] : $user->lang['GUEST']);
		
			$template->assign_block_vars('portal_column', array(
				'ACRONYM_SHOW'			=>  $active,
				'U_EDIT_ACRONYM'		=> 	$this->u_action . '&amp;action=editacronyms'
				));

			$db->sql_freeresult($result);			
	}
}

?>
