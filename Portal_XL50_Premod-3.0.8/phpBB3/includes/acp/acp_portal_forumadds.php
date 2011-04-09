<?php
/** 
*
* @name acp_portal_forumadds.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_forumadds.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_portal_forumadds
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $portal_config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mods/acp_portal_xl_forumadds');
		$this->tpl_name = 'portal_xl/acp_portal_forumadds';
		$this->page_title = $user->lang['ACP_PORTAL_ADDS'];

		// Set up general vars
		$action = request_var('action', '');
		$action = (isset($_POST['edit'])) ? 'edit' : $action;
		$action = (isset($_POST['add'])) ? 'add' : $action;
		$action = (isset($_POST['save'])) ? 'save' : $action;
		$adds_id = request_var('id', 0);

		switch ($action)
		{

		case 'save':
   				$adds_name				= request_var('adds_name', '', true);
   				$adds_code 				= request_var('adds_code', '', true);
   				$adds_show_forums 		= request_var('adds_show_forums', '', true);
   				$adds_show_all_forums  	= request_var('adds_show_all_forums', '', true);
   				$adds_active 			= request_var('adds_active', '', true);
   				$adds_views 			= request_var('adds_views', '', true);
   				$adds_max_views 		= request_var('adds_max_views', '', true);
   				$adds_position 			= request_var('adds_position', '', true);
				
				if (!$adds_name || !$adds_active || !$adds_views || !$adds_max_views || !$adds_position)
				{
					trigger_error($user->lang['NEED_VALUES'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				$sql_ary = array(
					'adds_name'				=> $adds_name,
					'adds_code'				=> $adds_code,
					'adds_show_forums'		=> $adds_show_forums,
					'adds_show_all_forums'	=> $adds_show_all_forums,
					'adds_active'			=> $adds_active,
					'adds_views'			=> $adds_views,
					'adds_max_views'		=> $adds_max_views,
					'adds_position'			=> $adds_position
				);

				if ($adds_id)
				{
				    $sql = 'UPDATE ' . PORTAL_FORUMADDS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE adds_id = $adds_id";
				    $message = $user->lang['UPDATED'];
				}
				else
				{
				     $sql = 'INSERT INTO ' . PORTAL_FORUMADDS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				     $message = $user->lang['ADDED'];
				}
				$db->sql_query($sql);

				$cache->destroy('adds_id');

				trigger_error($message . adm_back_link($this->u_action));

			break;

			case 'delete':

				// Ok, we want to delete a adds_id
				if (confirm_box(true))
				{
				
				if ($adds_id)
				{
					$sql = 'DELETE FROM ' . PORTAL_FORUMADDS_TABLE . "
						WHERE adds_id = $adds_id";
					$db->sql_query($sql);

					$cache->destroy('adds_id');

					trigger_error($user->lang['DELETED'] . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang['MUST_SELECT_ADDS'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				}
				else
				{
					confirm_box(false, $user->lang['REALY_DELETE'], build_hidden_fields(array(
						'adds_id'			=> $adds_id,
						'adds_action'		=> 'delete',
					)));
				}

			break;

			case 'edit':
			case 'add':

				$sql = 'SELECT *
					FROM ' . PORTAL_FORUMADDS_TABLE . '
					ORDER BY adds_name ASC';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{

 				    if ($action == 'edit' && $adds_id == $row['adds_id'])
					{
					
   						$adds_name				= $row;
   						$adds_code 				= $row;
   						$adds_show_forums 		= $row;
   						$adds_show_all_forums  	= $row;
   						$adds_active 			= $row;
   						$adds_views 			= $row;
   						$adds_max_views 		= $row;
   						$adds_position 			= $row;
					
					}
				}
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'S_EDIT'				=> true,
					'U_BACK'				=> $this->u_action,
					'U_ACTION'				=> $this->u_action . '&amp;id=' . $adds_id,
					
					'ADDS_POSITION_1' 		=> (($adds_position['adds_position'] == '1') ? 'selected' : '' ),
					'ADDS_POSITION_2' 		=> (($adds_position['adds_position'] == '2') ? 'selected' : '' ),
					'ADDS_POSITION_3' 		=> (($adds_position['adds_position'] == '3') ? 'selected' : '' ),
					'ADDS_POSITION_4' 		=> (($adds_position['adds_position'] == '4') ? 'selected' : '' ),
					'ADDS_ACTIV_1' 			=> (($adds_active['adds_active'] == '1') ? 'checked' : '' ),
					'ADDS_ACTIV_2' 			=> (($adds_active['adds_active'] == '2') ? 'checked' : '' ),
					'ADDS_ACTIV_3' 			=> (($adds_active['adds_active'] == '3') ? 'checked' : '' ),
					'ADDS_FORUM_1' 			=> (($adds_show_all_forums['adds_show_all_forums'] == '1') ? 'checked' : '' ),
					'ADDS_FORUM_2' 			=> (($adds_show_all_forums['adds_show_all_forums'] == '2') ? 'checked' : '' ),

					'ADDS_NAME'			    => (isset($adds_name['adds_name'])) ? $adds_name['adds_name'] : '',
					'ADDS_CODE'				=> (isset($adds_code['adds_code'])) ? $adds_code['adds_code'] : '',
					'ADDS_SHOW_FORUMS'		=> (isset($adds_show_forums['adds_show_forums'])) ? $adds_show_forums['adds_show_forums'] : '',
					'ADDS_SHOW_ALL_FORUMS'	=> (isset($adds_show_all_forums['adds_show_all_forums'])) ? $adds_show_all_forums['adds_show_all_forums'] : '',
					'ADDS_ACTIVE'			=> (isset($adds_active['adds_active'])) ? $adds_active['adds_active'] : '',
					'ADDS_VIEWS'			=> (isset($adds_views['adds_views'])) ? $adds_views['adds_views'] : '',
					'ADDS_MAX_VIEWS'		=> (isset($adds_max_views['adds_max_views'])) ? $adds_max_views['adds_max_views'] : '',
					'ADDS_POSITION'		    => (isset($adds_position['adds_position'])) ? $adds_position['adds_position'] : ''
					
					));

				return;

			break;
		}

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action)
		);

		$sql = 'SELECT *
			FROM ' . PORTAL_FORUMADDS_TABLE . '
			ORDER BY adds_name ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$all_forum = ($row['adds_show_all_forums'] == '1') ? $user->lang['YES'] : $user->lang['NO'];
			$active = ($row['adds_active'] == '1') ? $user->lang['YES'] : (($row['adds_active'] == '2') ? $user->lang['NO'] : $user->lang['GUEST']);
			$position = ($row['adds_position'] == '1') ? $user->lang['POSITION1'] : (($row['adds_position'] == '2') ? $user->lang['POSITION2'] : ($row['adds_position'] == '3') ? $user->lang['POSITION3'] : $user->lang['POSITION4']);
			
			$template->assign_block_vars('adds_desc', array(
				'ADDS_NAME'				=> $row['adds_name'],
				'ADDS_CODE'				=> $row['adds_code'],
				'ADDS_SHOW_FORUMS'		=> $row['adds_show_forums'],
				'ADDS_SHOW_ALL_FORUMS'	=> $all_forum,
				'ADDS_ACTIVE'  			=> $active,
				'ADDS_VIEWS'			=> $row['adds_views'],
				'ADDS_MAX_VIEWS'		=> $row['adds_max_views'],
				'ADDS_POSITION'		    => $position,
				'U_EDIT'			    => $this->u_action . '&amp;action=edit&amp;id=' . $row['adds_id'],
				'U_DELETE'			    => $this->u_action . '&amp;action=delete&amp;id=' . $row['adds_id']
				));
		}
	}
}

?>
