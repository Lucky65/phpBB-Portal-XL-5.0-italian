<?php
/**
*
* @package acp
* @version $Id: acp_dnsbl.php,v 1.001 2009/05/13 Martin Truckenbrodt Exp $
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_dnsbl
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $db, $user, $auth, $template, $cache;
		global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;

		$user->add_lang('mods/dnsbl');

		$this->tpl_name = 'acp_dnsbl';
		$this->page_title = 'ACP_DNSBL';

		$form_key = 'acp_dnsbl';
		add_form_key($form_key);

		// Check the permission setting again
		if (!$auth->acl_get('a_board'))
		{
			trigger_error($user->lang['NO_AUTH_OPERATION'] . adm_back_link($this->u_action), E_USER_WARNING);
		}

		$action		= request_var('action', '');
		$update		= (isset($_POST['update'])) ? true : false;
		$dnsbl_id	= request_var('d', 0);

		$dnsbl_data = $errors = array();
		if ($update && !check_form_key($form_key))
		{
			$update = false;
			$errors[] = $user->lang['FORM_INVALID'];
		}

		// Major routines
		if ($update)
		{
			switch ($action)
			{
				case 'delete':

					$errors = delete_dnsbl($dnsbl_id);

					if (sizeof($errors))
					{
						break;
					}

					$auth->acl_clear_prefetch();
					$cache->destroy('sql', DNSBL_TABLE);

					trigger_error($user->lang['DNSBL_DELETED'] . adm_back_link($this->u_action));

				break;

				case 'edit':
					$dnsbl_data = array(
						'dnsbl_id'		=>	$dnsbl_id
					);

				// No break here

				case 'add':

					$dnsbl_data += array(
						'dnsbl_fqdn'		=> utf8_normalize_nfc(request_var('dnsbl_fqdn', '', true)),
						'dnsbl_lookup'		=> utf8_normalize_nfc(request_var('dnsbl_lookup', '', true)),
						'dnsbl_register'	=> request_var('dnsbl_register', 0),
						'dnsbl_weight'		=> request_var('dnsbl_weight', 0),
					);

					$errors = update_dnsbl_data($dnsbl_data);

					trigger_error($user->lang['DNSBL_ADDED_EDITED'] . adm_back_link($this->u_action));

				break;
			}
		}

		switch ($action)
		{
			case 'move_up':
			case 'move_down':

				if (!$dnsbl_id)
				{
					trigger_error($user->lang['NO_DNSBL'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				$sql = 'SELECT dnsbl_id, dnsbl_fqdn, left_id, right_id FROM ' . DNSBL_TABLE . '
					WHERE dnsbl_id = ' . $dnsbl_id;
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				if (!$row)
				{
					trigger_error($user->lang['NO_DNSBL'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				$move_dnsbl_fqdn = move_dnsbl_by($row, $action);

				if ($move_dnsbl_fqdn !== false)
				{
					add_log('admin', 'LOG_DNSBL_' . strtoupper($action), $row['dnsbl_fqdn'], $move_dnsbl_fqdn);
					$cache->destroy('sql', DNSBL_TABLE);
				}

			break;

			case 'add':
			case 'edit':

				// Show form to create/modify a dnsbl
				if ($action == 'edit')
				{
					$this->page_title = 'DNSBL_EDIT';
					$row = get_dnsbl_info($dnsbl_id);

					if (!$update)
					{
						$dnsbl_data = $row;
					}
					else
					{
						$dnsbl_data['left_id'] = $row['left_id'];
						$dnsbl_data['right_id'] = $row['right_id'];
					}
				}
				else
				{
					$this->page_title = 'DNSBL_CREATE';

					// Fill dnsbl data with default values
					if (!$update)
					{
						$dnsbl_data = array(
							'dnsbl_fqdn'		=> utf8_normalize_nfc(request_var('dnsbl_fqdn', '', true)),
							'dnsbl_lookup'		=> '',
							'dnsbl_register'	=> 0,
							'dnsbl_weight'		=> 0,
						);
					}
				}

				$dnsbl_weight_options = '';
				$dnsbl_weight_ary = array(WEIGHT_ZERO, WEIGHT_ONE, WEIGHT_TWO, WEIGHT_THREE, WEIGHT_FOUR, WEIGHT_FIVE);

				foreach ($dnsbl_weight_ary as $value)
				{
					$dnsbl_weight_options .= '<option value="' . $value . '"' . (($value == $dnsbl_data['dnsbl_weight']) ? ' selected="selected"' : '') . '>' . $value . '</option>';
				}

				$template->assign_vars(array(
					'S_DNSBL_EDIT'				=> true,
					'DNSBL_FQDN'				=> $dnsbl_data['dnsbl_fqdn'],
					'DNSBL_LOOKUP'				=> $dnsbl_data['dnsbl_lookup'],
					'DNSBL_REGISTER'			=> $dnsbl_data['dnsbl_register'],
					'S_DNSBL_REGISTER'			=> ($dnsbl_data['dnsbl_register']) ? true : false,
					'S_DNSBL_WEIGHT_OPTIONS'	=> $dnsbl_weight_options,
					'S_ERROR'					=> (sizeof($errors)) ? true : false,
					'S_ADD_ACTION'				=> ($action == 'add') ? true : false,
					'U_BACK'					=> $this->u_action,
					'U_EDIT_ACTION'				=> $this->u_action . "&amp;action=$action&amp;d=$dnsbl_id",
					'L_TITLE'					=> $user->lang[$this->page_title],
					'ERROR_MSG'					=> (sizeof($errors)) ? implode('<br />', $errors) : '',
				));

				return;

			break;

			case 'delete':

				if (!$dnsbl_id)
				{
					trigger_error($user->lang['NO_DNSBL'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				$sql = 'SELECT dnsbl_fqdn FROM ' . DNSBL_TABLE . '
					WHERE dnsbl_id= ' . $dnsbl_id;
				$result = $db->sql_query($sql);
				$dnsbl_data = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'S_DNSBL_DELETE'	=> true,
					'U_ACTION'			=> $this->u_action . "&amp;action=delete&amp;d=$dnsbl_id",
					'U_BACK'			=> $this->u_action,
					'DNSBL_FQDN'		=> $dnsbl_data['dnsbl_fqdn'],
					'S_ERROR'			=> (sizeof($errors)) ? true : false,
					'ERROR_MSG'			=> (sizeof($errors)) ? implode('<br />', $errors) : '')
				);

				return;
			break;
		}

		$sql = 'SELECT dnsbl_id, dnsbl_fqdn, dnsbl_weight, dnsbl_register FROM ' . DNSBL_TABLE . '
			ORDER BY left_id ASC';
		$result = $db->sql_query($sql);

		if ($row = $db->sql_fetchrow($result))
		{
			do
			{
				$url = $this->u_action . "&amp;d={$row['dnsbl_id']}";

				$template->assign_block_vars('dnsbl', array(
					'DNSBL_FQDN'		=> $row['dnsbl_fqdn'],
					'DNSBL_WEIGHT'		=> $row['dnsbl_weight'],
					'S_DNSBL_REGISTER'	=> ($row['dnsbl_register']) ? true : false,

					'U_MOVE_UP'			=> $url . '&amp;action=move_up',
					'U_MOVE_DOWN'		=> $url . '&amp;action=move_down',
					'U_EDIT'			=> $url . '&amp;action=edit',
					'U_DELETE'			=> $url . '&amp;action=delete',
				));
			}
			while ($row = $db->sql_fetchrow($result));
		}

		$db->sql_freeresult($result);

		$template->assign_vars(array(
			'ERROR_MSG'		=> (sizeof($errors)) ? implode('<br />', $errors) : '',
			'U_ACTION'		=> $this->u_action,

		));

	}

}

/**
* Get dnsbl details
*/
function get_dnsbl_info($dnsbl_id)
{
	global $db;
		$sql = 'SELECT *
		FROM ' . DNSBL_TABLE . "
		WHERE dnsbl_id = $dnsbl_id";
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	return $row;
}

/**
* Update dnsbl data
*/
function update_dnsbl_data(&$dnsbl_data)
{
	global $db, $user, $cache;

	$errors = array();

	if (!$dnsbl_data['dnsbl_fqdn'])
	{
		$errors[] = $user->lang['DNSBL_FQDN_EMPTY'];
	}

	// Unset data that are not database fields
	$dnsbl_data_sql = $dnsbl_data;

	// What are we going to do tonight Brain? The same thing we do everynight,
	// try to take over the world ... or decide whether to continue update
	// and if so, whether which groups and users we have to remove from which tables
	if (sizeof($errors))
	{
		return $errors;
	}

	if (!isset($dnsbl_data_sql['dnsbl_id']))
	{
		// no dnsbl_id means we're creating a new dnsbl
		unset($dnsbl_data_sql['type_action']);

		$sql = 'SELECT MAX(right_id) AS right_id
			FROM ' . DNSBL_TABLE;
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		$dnsbl_data_sql['left_id'] = $row['right_id'] + 1;
		$dnsbl_data_sql['right_id'] = $row['right_id'] + 2;

		$sql = 'INSERT INTO ' . DNSBL_TABLE . ' ' . $db->sql_build_array('INSERT', $dnsbl_data_sql);
		$db->sql_query($sql);

		$dnsbl_data['dnsbl_id'] = $db->sql_nextid();

		add_log('admin', 'LOG_DNSBL_ADD', $dnsbl_data['dnsbl_fqdn']);
	}
	else
	{
		// Setting the dnsbl id to the dnsbl id is not really received well by some dbs. ;)
		$dnsbl_id = $dnsbl_data_sql['dnsbl_id'];
		unset($dnsbl_data_sql['dnsbl_id']);

		$sql = 'UPDATE ' . DNSBL_TABLE . '
			SET ' . $db->sql_build_array('UPDATE', $dnsbl_data_sql) . '
			WHERE dnsbl_id = ' . $dnsbl_id;
		$db->sql_query($sql);

		// Add it back
		$dnsbl_data['dnsbl_id'] = $dnsbl_id;

		add_log('admin', 'LOG_DNSBL_EDIT', $dnsbl_data['dnsbl_fqdn']);
	}

	return $errors;
}

/**
* Remove complete dnsbl
*/
function delete_dnsbl($dnsbl_id)
{
	global $db, $user, $cache;

	$sql = 'SELECT dnsbl_fqdn, left_id, right_id FROM ' . DNSBL_TABLE . '
		WHERE dnsbl_id= ' . $dnsbl_id;
	$result = $db->sql_query($sql);
	$dnsbl_data = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	$errors = array();

	$sql = 'DELETE FROM ' . DNSBL_TABLE . "
		WHERE dnsbl_id = $dnsbl_id";
	$db->sql_query($sql);

	// Resync tree
	$diff = 2;
	$sql = 'UPDATE ' . DNSBL_TABLE . "
		SET right_id = right_id - $diff
		WHERE left_id < {$dnsbl_data['right_id']} AND right_id > {$dnsbl_data['right_id']}";
	$db->sql_query($sql);

	$sql = 'UPDATE ' . DNSBL_TABLE . "
		SET left_id = left_id - $diff, right_id = right_id - $diff
		WHERE left_id > {$dnsbl_data['right_id']}";
	$db->sql_query($sql);

	add_log('admin', 'LOG_DNSBL_DELETE', $dnsbl_data['dnsbl_fqdn']);

	return $errors;
}

/**
* Move dnsbl position by $steps up/down
*/
function move_dnsbl_by($dnsbl_row, $action = 'move_up')
{
	global $db;

	/**
	* Fetch all the siblings between the module's current spot
	* and where we want to move it to. If there are less than $steps
	* siblings between the current spot and the target then the
	* module will move as far as possible
	*/
	$sql = 'SELECT dnsbl_id, dnsbl_fqdn, left_id, right_id FROM ' . DNSBL_TABLE . '
		WHERE ' . (($action == 'move_up') ? "right_id < {$dnsbl_row['right_id']} ORDER BY right_id DESC" : "left_id > {$dnsbl_row['left_id']} ORDER BY left_id ASC");

	$result = $db->sql_query_limit($sql, 1);

	$target = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$target = $row;
	}
	$db->sql_freeresult($result);

	if (!sizeof($target))
	{
		// The dnsbl is already on top or bottom
		return false;
	}

	/**
	* $left_id and $right_id define the scope of the nodes that are affected by the move.
	* $diff_up and $diff_down are the values to substract or add to each node's left_id
	* and right_id in order to move them up or down.
	* $move_up_left and $move_up_right define the scope of the nodes that are moving
	* up. Other nodes in the scope of ($left_id, $right_id) are considered to move down.
	*/
	if ($action == 'move_up')
	{
		$left_id = $target['left_id'];
		$right_id = $dnsbl_row['right_id'];

		$diff_up = $dnsbl_row['left_id'] - $target['left_id'];
		$diff_down = $dnsbl_row['right_id'] + 1 - $dnsbl_row['left_id'];

		$move_up_left = $dnsbl_row['left_id'];
		$move_up_right = $dnsbl_row['right_id'];
	}
	else
	{
		$left_id = $dnsbl_row['left_id'];
		$right_id = $target['right_id'];

		$diff_up = $dnsbl_row['right_id'] + 1 - $dnsbl_row['left_id'];
		$diff_down = $target['right_id'] - $dnsbl_row['right_id'];

		$move_up_left = $dnsbl_row['right_id'] + 1;
		$move_up_right = $target['right_id'];
	}

	// Now do the dirty job
	$sql = 'UPDATE ' . DNSBL_TABLE . "
		SET left_id = left_id + CASE
			WHEN left_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
			ELSE {$diff_down}
		END,
		right_id = right_id + CASE
			WHEN right_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
			ELSE {$diff_down}
		END
		WHERE
			left_id BETWEEN {$left_id} AND {$right_id}
			AND right_id BETWEEN {$left_id} AND {$right_id}";

	$db->sql_query($sql);

	return $target['dnsbl_fqdn'];
}

?>