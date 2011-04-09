<?php
/**
*
* @package ACP
* @version $Id: functions_acp_dm_video.php 202 2009-12-17 08:40:11Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the select categories list
function make_cat_select($select_id = false, $ignore_id = false, $dm_video = false, $ignore_acl = false, $ignore_nonpost = false, $ignore_emptycat = true, $only_acl_post = false, $return_array = false)
{
	global $db, $user, $auth;

	// No permissions yet
	$acl = ($ignore_acl) ? '' : (($only_acl_post) ? 'f_post' : array('f_list', 'a_forum', 'a_forumadd', 'a_forumdel'));

	// This query is the same as the jumpbox query
	$sql = 'SELECT cat_id, cat_name, parent_id, left_id, right_id
		FROM ' . DM_VIDEO_CATS_TABLE . '
		ORDER BY left_id ASC';
	$result = $db->sql_query($sql, 600);

	$right = 0;
	$padding_store = array('0' => '');
	$padding = '';
	$forum_list = ($return_array) ? array() : '';

	//----------------------------------------------------------------------------------------
	// Sometimes it could happen that forums will be displayed here not be displayed within the index page
	// This is the result of forums not displayed at index, having list permissions and a parent of a forum with no permissions.
	// If this happens, the padding could be "broken"
	//----------------------------------------------------------------------------------------

	while ($row = $db->sql_fetchrow($result))
	{
		if ($row['left_id'] < $right)
		{
			$padding .= '&nbsp; &nbsp;';
			$padding_store[$row['parent_id']] = $padding;
		}
		else if ($row['left_id'] > $right + 1)
		{
			$padding = (isset($padding_store[$row['parent_id']])) ? $padding_store[$row['parent_id']] : '';
		}

		$right = $row['right_id'];
		$disabled = false;

		if (((is_array($ignore_id) && in_array($row['cat_id'], $ignore_id)) || $row['cat_id'] == $ignore_id) || ($dm_video))
		{
			$disabled = true;
		}

		if ($return_array)
		{
			$selected = (is_array($select_id)) ? ((in_array($row['cat_id'], $select_id)) ? true : false) : (($row['cat_id'] == $select_id) ? true : false);
			$forum_list[$row['cat_id']] = array_merge(array('padding' => $padding, 'selected' => ($selected && !$disabled), 'disabled' => $disabled), $row);
		}
		else
		{
			$selected = (is_array($select_id)) ? ((in_array($row['cat_id'], $select_id)) ? ' selected="selected"' : '') : (($row['cat_id'] == $select_id) ? ' selected="selected"' : '');
			$forum_list .= '<option value="' . $row['cat_id'] . '"' . (($disabled) ? ' disabled="disabled" class="disabled-option"' : $selected) . '>' . $padding . $row['cat_name'] . '</option>';
		}
	}
	$db->sql_freeresult($result);
	unset($padding_store);

	return $forum_list;
}

// Get the category details
function get_cat_info($cat_id)
{
	global $db;

	$sql = 'SELECT *
		FROM ' . DM_VIDEO_CATS_TABLE . "
		WHERE cat_id = $cat_id";
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	if (!$row)
	{
		trigger_error("Cat #$cat_id does not exist", E_USER_ERROR);
	}

	return $row;
}

// Get the category branch
function get_cat_branch($cat_id, $type = 'all', $order = 'descending', $include_cat = true)
{
	global $db;

	switch ($type)
	{
		case 'parents':
			$condition = 'a1.left_id BETWEEN a2.left_id AND a2.right_id';
		break;

		case 'children':
			$condition = 'a2.left_id BETWEEN a1.left_id AND a1.right_id';
		break;

		default:
			$condition = 'a2.left_id BETWEEN a1.left_id AND a1.right_id OR a1.left_id BETWEEN a2.left_id AND a2.right_id';
		break;
	}

	$rows = array();

	$sql = 'SELECT a2.*
		FROM ' . DM_VIDEO_CATS_TABLE . ' a1
		LEFT JOIN ' . DM_VIDEO_CATS_TABLE . " a2 ON ($condition)
		WHERE a1.cat_id = $cat_id
		ORDER BY a2.left_id " . (($order == 'descending') ? 'ASC' : 'DESC');
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		if (!$include_cat && $row['cat_id'] == $cat_id)
		{
			continue;
		}

		$rows[] = $row;
	}
	$db->sql_freeresult($result);

	return $rows;
}

?>