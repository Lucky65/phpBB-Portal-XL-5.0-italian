<?php
/** 
*
* @name acp_portal_banners_ho.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_banners_ho.php,v 1.3 2009/10/18 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_portal_banners_ho
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $portal_config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mods/acp_portal_xl_banners');
		$this->tpl_name = 'portal_xl/acp_portal_banners_ho';
		$this->page_title = 'ACP_PORTAL_BANNERS_HO';

		// Set up general vars
		$action = request_var('action', '');
		$action = (isset($_POST['edit'])) ? 'edit' : $action;
		$action = (isset($_POST['add'])) ? 'add' : $action;
		$action = (isset($_POST['save'])) ? 'save' : $action;
		$banners_id = request_var('id', 0);

		switch ($action)
		{

		case 'save':

                $banners_id 			= request_var('id', '', true);
				$banners_img_hor 		= request_var('banners_img_hor', '', true);
				$banners_description 	= request_var('banners_description', '', true);				
				$banners_url 			= request_var('banners_url', '', true);

				$sql_ary = array(
                    'banners_id'			=> $banners_id,
					'banners_img_hor'		=> $banners_img_hor,
					'banners_description'	=> $banners_description,					
					'banners_url'			=> $banners_url
				);

				if ($banners_id)
				{
				    $sql = 'UPDATE ' . PORTAL_BANNER_HO_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE banners_id = $banners_id";
				    $message = $user->lang['BANNERS_UPDATED'];
				}
				else
				{
				     $sql = 'INSERT INTO ' . PORTAL_BANNER_HO_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				     $message = $user->lang['BANNERS_ADDED'];
				}
				$db->sql_query($sql);

				$cache->destroy('banners');

				trigger_error($message . adm_back_link($this->u_action));

			break;

			case 'delete':

				// Ok, they want to delete their quote
				if ($banners_id)
				{
					$sql = 'DELETE FROM ' . PORTAL_BANNER_HO_TABLE . "
						WHERE banners_id = $banners_id";
					$db->sql_query($sql);

					$cache->destroy('banners');

					trigger_error($user->lang['BANNERS_REMOVED'] . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang['MUST_SELECT_BANNERS'] . adm_back_link($this->u_action), E_USER_WARNING);
				}
			break;

			case 'edit':
			case 'add':

				$sql = 'SELECT *
					FROM ' . PORTAL_BANNER_HO_TABLE . '
					ORDER BY   banners_url ASC';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{

 				          if ($action == 'edit' && $banners_id == $row['banners_id'])

					{
						$banners_url = $row;
						$banners_img_hor = $row;
						$banners_description = $row;						
					}
				}
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'S_EDIT'				=> true,
					'U_BACK'				=> $this->u_action,
					'U_ACTION'				=> $this->u_action . '&amp;id=' . $banners_id,
					'BANNERS_URL'			=> (isset($banners_url['banners_url'])) ? $banners_url['banners_url'] : '',
					'BANNERS_DESCRIPTION'	=> (isset($banners_description['banners_description'])) ? $banners_description['banners_description'] : '',					
					'BANNERS_IMG'			=> (isset($banners_img_hor['banners_img_hor'])) ? $banners_img_hor['banners_img_hor'] : '')
				);

				return;

			break;
		}

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action)
		);

		$sql = 'SELECT *
			FROM ' . PORTAL_BANNER_HO_TABLE . '
			ORDER BY banners_id ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$template->assign_block_vars('banners', array(

				'BANNERS_URL'			=> 	$row['banners_url'],
				'BANNERS_IMG' 			=> '<div style="margin:2px;"><img src="../' . $row['banners_img_hor'] . '" width="200" height="30" alt="' . $row['banners_description'] . '" title="' . $row['banners_description'] . '" /></div>',
				'BANNERS_DESCRIPTION'	=> 	$row['banners_description'],				
				'U_EDIT'				=> 	$this->u_action . '&amp;action=edit&amp;id=' . $row['banners_id'],
				'U_DELETE'				=> 	$this->u_action . '&amp;action=delete&amp;id=' . $row['banners_id'])

			);
		}

		$db->sql_freeresult($result);

	}
}

?>
