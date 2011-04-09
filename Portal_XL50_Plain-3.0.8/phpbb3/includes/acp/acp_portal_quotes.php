<?php
/** 
*
* @name acp_portal_menu.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_quotes.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_portal_quotes
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $portal_config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mods/acp_portal_xl_quotes');
		$this->tpl_name = 'portal_xl/acp_portal_quotes';
		$this->page_title = 'ACP_PORTAL_QUOTES';

		// Set up general vars
		$action = request_var('action', '');
		$action = (isset($_POST['edit'])) ? 'edit' : $action;
		$action = (isset($_POST['add'])) ? 'add' : $action;
		$action = (isset($_POST['save'])) ? 'save' : $action;
		$quote_id = request_var('id', 0);

		switch ($action)
		{

		case 'save':

                $quote_id 	= request_var('id', '', true);
				$quote 		= request_var('quote', '', true);
				$author 	= request_var('author', '', true);

				$sql_ary = array(
                    'quote_id'			=> $quote_id,
					'quote'				=> $quote,
					'quote_author'		=> $author
				);

				if ($quote_id)
				{
				    $sql = 'UPDATE ' . PORTAL_QUOTE_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE quote_id = $quote_id";
				    $message = $user->lang['QUOTE_UPDATED'];
				}
				else
				{
				     $sql = 'INSERT INTO ' . PORTAL_QUOTE_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				     $message = $user->lang['QUOTE_ADDED'];
				}
				$db->sql_query($sql);

				$cache->destroy('quote');

				trigger_error($message . adm_back_link($this->u_action));

			break;

			case 'delete':

				// Ok, we want to delete a quote
				if ($quote_id)
				{
					$sql = 'DELETE FROM ' . PORTAL_QUOTE_TABLE . "
						WHERE quote_id = $quote_id";
					$db->sql_query($sql);

					$cache->destroy('quote');

					trigger_error($user->lang['QUOTE_REMOVED'] . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang['MUST_SELECT_QUOTE'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

			break;

			case 'edit':
			case 'add':

				$sql = 'SELECT *
					FROM ' . PORTAL_QUOTE_TABLE . '
					ORDER BY   quote ASC, quote_author ASC';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{

 				          if ($action == 'edit' && $quote_id == $row['quote_id'])

					{
						$quote = $row;
						$author = $row;
					}
				}
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'S_EDIT'		=> true,
					'U_BACK'		=> $this->u_action,
					'U_ACTION'	=> $this->u_action . '&amp;id=' . $quote_id,
					'QUOTE'		=> (isset($quote['quote'])) ? $quote['quote'] : '',
					'AUTHOR'		=> (isset($author['quote_author'])) ? $author['quote_author'] : '')
				);


				return;

			break;
		}

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action)
		);

		$sql = 'SELECT *
			FROM ' . PORTAL_QUOTE_TABLE . '
			ORDER BY quote_id ASC , quote ASC , quote_author ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$template->assign_block_vars('quote', array(

				'QUOTE'		=> 	$row['quote'],
				'AUTHOR'		=> 	$row['quote_author'],
				'U_EDIT'		=> 	$this->u_action . '&amp;action=edit&amp;id=' . $row['quote_id'],
				'U_DELETE'	=> 	$this->u_action . '&amp;action=delete&amp;id=' . $row['quote_id'])

			);
		}
	}
}

?>
