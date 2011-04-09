<?php
/** 
*
* @name acp_portal_mods.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_mods.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_portal_mods
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $portal_config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mods/acp_portal_xl_mods');
		$this->tpl_name = 'portal_xl/acp_portal_mods';
		$this->page_title = 'ACP_PORTAL_MODS';

		// Set up general vars
		$action = request_var('action', '');
		$action = (isset($_POST['edit'])) ? 'edit' : $action;
		$action = (isset($_POST['add'])) ? 'add' : $action;
		$action = (isset($_POST['save'])) ? 'save' : $action;
		$mod_id	= request_var('id', 0);

		switch ($action)
		{

		case 'save':

   				$mod_title 			= request_var('mod_title', '', true);
   				$mod_version 		= request_var('mod_version', '', true);
   				$mod_version_type 	= request_var('mod_version_type', '', true);
   				$mod_desc  			= request_var('mod_desc', '', true);
   				$mod_url 			= request_var('mod_url', '', true);
   				$mod_author 		= request_var('mod_author', '', true);
   				$mod_download 		= request_var('mod_download', '', true);

				$sql_ary = array(
					'mod_title'			=> $mod_title,
					'mod_version'		=> $mod_version,
					'mod_version_type'	=> $mod_version_type,
					'mod_desc'			=> $mod_desc,
					'mod_url'			=> $mod_url,
					'mod_author'		=> $mod_author,
					'mod_download'		=> $mod_download
				);

				if ($mod_id)
				{
				    $sql = 'UPDATE ' . PORTAL_MODS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE mod_id = $mod_id";
				    $message = $user->lang['MOD_UPDATED'];
				}
				else
				{
				     $sql = 'INSERT INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				     $message = $user->lang['MOD_ADDED'];
				}
				$db->sql_query($sql);

				$cache->destroy('mod_desc');

				trigger_error($message . adm_back_link($this->u_action));

			break;

			case 'delete':

				// Ok, we want to delete a mod_desc
				if ($mod_id)
				{
					$sql = 'DELETE FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = $mod_id";
					$db->sql_query($sql);

					$cache->destroy('mod_desc');

					trigger_error($user->lang['MOD_REMOVED'] . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang['MUST_SELECT_MOD'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

			break;

			case 'edit':
			case 'add':

				$sql = 'SELECT *
					FROM ' . PORTAL_MODS_TABLE . '
					ORDER BY   mod_desc ASC, mod_author ASC';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{

 				    if ($action == 'edit' && $mod_id == $row['mod_id'])
					{
   						$mod_title 			= $row;
   						$mod_version 		= $row;
   						$mod_version_type 	= $row;
   						$mod_desc  			= $row;
   						$mod_url 			= $row;
   						$mod_author 		= $row;
   						$mod_download 		= $row;
					}
				}
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'S_EDIT'		=> true,
					'U_BACK'		=> $this->u_action,
					'U_ACTION'		=> $this->u_action . '&amp;id=' . $mod_id,
					
					'MOD_TITLE'			=> (isset($mod_title['mod_title'])) ? $mod_title['mod_title'] : '',
					'MOD_VERSION'		=> (isset($mod_version['mod_version'])) ? $mod_version['mod_version'] : '',
					'MOD_VERSION_TYPE'	=> (isset($mod_version_type['mod_version_type'])) ? $mod_version_type['mod_version_type'] : '',
					'MOD_DESC'			=> (isset($mod_desc['mod_desc'])) ? $mod_desc['mod_desc'] : '',
					'MOD_AUTHOR'		=> (isset($mod_author['mod_author'])) ? $mod_author['mod_author'] : '',
					'MOD_URL'			=> (isset($mod_url['mod_url'])) ? $mod_url['mod_url'] : '',
					'MOD_DOWNLOAD'		=> (isset($mod_download['mod_download'])) ? $mod_download['mod_download'] : ''
					));

				return;

			break;
		}

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action)
		);

		$sql = 'SELECT *
			FROM ' . PORTAL_MODS_TABLE . '
			ORDER BY mod_title ASC, mod_author ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$template->assign_block_vars('mod_desc', array(
				'MOD_TITLE'			=> $row['mod_title'],
				'MOD_VERSION'		=> $row['mod_version'],
				'MOD_VERSION_TYPE'	=> $row['mod_version_type'],
				'MOD_DESC'			=> $row['mod_desc'],
				'MOD_AUTHOR'		=> $row['mod_author'],
				'MOD_URL'			=> $row['mod_url'],
				'MOD_DOWNLOAD'		=> $row['mod_download'],
				'U_EDIT'			=> $this->u_action . '&amp;action=edit&amp;id=' . $row['mod_id'],
				'U_DELETE'			=> $this->u_action . '&amp;action=delete&amp;id=' . $row['mod_id']
				));
		}
	}
}

?>
