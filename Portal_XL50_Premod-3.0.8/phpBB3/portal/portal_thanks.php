<?php
/*
*
* @name portal_thanks.php
* @package phpBB3 Portal XL Premod
* @version $Id: portal_thanks.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
* @some code borrowed from thanks.php,v 0.2.0 2007/04/21 23:56:31 geoffreak Exp $
*
* UPDATE `phpbb_users` SET `user_thanked` = '0', `user_thanked_others` = '0';
*/

/**
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit; 
}

global $db, $user; 

// create an array of all users
$sql = 'SELECT *
	FROM ' . USERS_TABLE;
$result = $db->sql_query($sql);
$users = array();
while ($row = $db->sql_fetchrow($result))
{
	if ((!isset($row['user_thanked']) || !isset($row['user_thanked_others'])) && $user->data['user_type'] == USER_FOUNDER)
	{
		install_thanks();
	}
	$users[$row['user_id']] = array( 
		'username' 			=> $row['username'], 
		'user_id'	 		=> $row['user_id'], 
		'user_colour' 		=> $row['user_colour'], 
		'user_gender' 		=> (isset($row['user_gender'])) ?  $row['user_gender'] : false,
		'thanks_give'		=> (isset($row['user_thanked_others'])) ? $row['user_thanked_others'] : 0,
		'thanks_receive'	=> (isset($row['user_thanked'])) ? $row['user_thanked'] : 0,
	);
}
$db->sql_freeresult($result);

// Do stuff based on header variables
// Two variables are needed to avoid accidental refresh errors
if (isset($_REQUEST['thanks']) && !isset($_REQUEST['rthanks'])) 
{
	insert_thanks(request_var('thanks', 0), $user->data['user_id']);
}
if (isset($_REQUEST['rthanks']) && !isset($_REQUEST['thanks']))
{
	delete_thanks(request_var('rthanks', 0), $user->data['user_id']);
}

// create an array of all thanks info
$sql = 'SELECT *
	FROM ' . PORTAL_THANKS_TABLE;
$result = $db->sql_query($sql);
$thankers = array();
$i = 0;
while ($row = $db->sql_fetchrow($result))
{
	$thankers[$i] = array(  
		'user_id' => $row['user_id'], 
		'post_id' => $row['post_id'], 
	);
	$i++;
}
$db->sql_freeresult($result);

function install_thanks()
{
	global $db, $user; 
	$sql = 'SELECT *
		FROM ' . POSTS_TABLE;
	$result = $db->sql_query($sql);
	$posts_arr = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$posts_arr[$row['poster_id']][] = $row['post_id'];
	}
	$db->sql_freeresult($result);
	
	$sql = 'SELECT *
		FROM ' . USERS_TABLE;
	$result = $db->sql_query($sql);
	$users_thanked = array();
	$users_thanked_others = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$users_thanked[$row['user_id']] = 0;
		$users_thanked_others[$row['user_id']] = 0;
	}
	$db->sql_freeresult($result);
	
	$sql = 'ALTER TABLE `' . USERS_TABLE . '` ADD `user_thanked` INT NOT NULL DEFAULT 0 ;';
	$db->sql_query($sql);
	$sql = 'ALTER TABLE `' . USERS_TABLE . '` ADD `user_thanked_others` INT NOT NULL DEFAULT 0 ;';
	$db->sql_query($sql);

	foreach ($users_thanked as $this_user_id => $thanks_count)
	{
		if (isset($posts_arr[$this_user_id]) && is_array($posts_arr[$this_user_id]))
		{
			foreach ($posts_arr[$this_user_id] as $key2 => $this_post_id)
			{
				foreach ($thankers as $key => $values)
				{
					if ($values['post_id'] == $this_post_id)
					{
						$users_thanked[$this_user_id]++;
					}
				}
			}
		}
		foreach ($thankers as $key => $values)
		{
			if ($values['user_id'] == $this_user_id)
			{
				$users_thanked_others[$this_user_id]++;
			}
		}
		$sql = 'UPDATE ' . USERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
			'user_thanked'			=> $users_thanked[$this_user_id],
			'user_thanked_others'	=> $users_thanked_others[$this_user_id],
		)) . " WHERE user_id = $this_user_id";
		$db->sql_query($sql);
	}
	$sql2 = 'INSERT INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
		'config_name'	=> 'portal_thanks_version',
		'config_value'	=> '1.0.0',
	));
	$db->sql_query($sql2);
	trigger_error($user->lang['TP_UPDATED']);
}

// Output thanks list
function get_thanks($post_id)
{
	global $db, $users, $poster_id, $thankers;
	$return = '';
    $user_list = array();
	foreach($thankers as $key => $value)
	{
		if ($thankers[$key]['post_id'] == $post_id && $thankers[$key]['user_id'] != $poster_id)
		{
			$user_list[ strtolower( $users[$thankers[$key]['user_id']]['username'] ) ] = array( 
				'username' => $users[$thankers[$key]['user_id']]['username'], 
				'user_id' => $users[$thankers[$key]['user_id']]['user_id'], 
				'user_colour' => $users[$thankers[$key]['user_id']]['user_colour'], 
			);
		}
	}
	ksort($user_list);
	$i = 0;
	foreach($user_list as $key => $value)
	{
		if ($i > 0)
		{
			$return .= ', ';
		}
		$i++;
		$return .= get_username_string('full', $value['user_id'], $value['username'], $value['user_colour'], $value['username']);
	}
	$return = ($return == '') ? false : $return;
	return $return;
}

function get_thanks_number($post_id)
{
	global $db, $thankers;
	$i = 0;
	foreach($thankers as $key => $value)
	{
		if ($thankers[$key]['post_id'] == $post_id)
		{
			$i++;
		}
	}
	return $i;
}

// add a user to the thanks list
function insert_thanks($post_id, $user_id)
{
	global $db, $users;
	if ($user_id != ANONYMOUS)
	{	
		$post_id = request_var('p', 0);
		$user_id = request_var('from_id', 0);

		$sql = 'SELECT *
			FROM ' . PORTAL_THANKS_TABLE . "
			WHERE post_id = $post_id 
				AND user_id = $user_id
			LIMIT 1";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		
		$to_id = request_var('to_id', 0);
		$from_id = request_var('from_id', 0);
		if (empty($row) && !empty($to_id))
		{
			$sql2 = 'INSERT INTO ' . PORTAL_THANKS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
				'post_id'	=> $post_id,
				'user_id'	=> $from_id
			));
			$db->sql_query($sql2);
			
			$users[$user_id]['thanks_give'] += 1;
			$users[$to_id]['thanks_receive'] += 1;
			$sql1 = 'UPDATE ' . USERS_TABLE . ' 
				SET user_thanked_others = ' . $users[$user_id]['thanks_give'] . "
				WHERE user_id = $user_id";
			$db->sql_query($sql1);
				
			$sql3 = 'UPDATE ' . USERS_TABLE . ' 
				SET user_thanked = ' . $users[$to_id]['thanks_receive'] . "
				WHERE user_id = $to_id";
			$db->sql_query($sql3);
		}
	}
}

// remove a user's thanks
function delete_thanks($post_id, $user_id)
{
	global $db, $user, $users;
	if ($user_id != ANONYMOUS)
	{
		$post_id = request_var('p', 0);
		$user_id = request_var('from_id', 0);

		$sql = 'SELECT *
			FROM ' . PORTAL_THANKS_TABLE . "
			WHERE post_id = $post_id 
				AND user_id = $user_id
			LIMIT 1";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		$to_id = request_var('to_id', 0);
		if (!empty($row) && !empty($to_id))
		{
			$sql = "DELETE FROM " . PORTAL_THANKS_TABLE . "
				WHERE post_id = $post_id AND user_id = " . $user_id;
			$db->sql_query($sql);
			$users[$user_id]['thanks_give'] -= 1;
			$users[$to_id]['thanks_receive'] -= 1;
			$sql1 = 'UPDATE ' . USERS_TABLE . ' 
				SET user_thanked_others = ' . $users[$user_id]['thanks_give'] . "
				WHERE user_id = $user_id";
			$sql3 = 'UPDATE ' . USERS_TABLE . ' 
				SET user_thanked = ' . $users[$to_id]['thanks_receive'] . "
				WHERE user_id = $to_id";
			$db->sql_query($sql1);
			$db->sql_query($sql3);
		}
	}
}

// display the text/image saying either to add or remove thanks
function get_thanks_text($post_id)
{
	global $db, $user, $postrow, $phpbb_root_path;
	if (already_thanked($post_id, $user->data['user_id']))
	{
		$postrow = array_merge($postrow, array(
			'THANK_ALT'		=> $user->lang['REMOVE_THANKS'],
			'THANK_ALT2'	=> $user->lang['THANK_POST2'],
			'THANKS_IMG'	=> "{$phpbb_root_path}styles/" . $user->theme['imageset_path'] . "/imageset/" . $user->data['user_lang'] . "/thanks_remove.gif",
		));
		return;
	}
	$postrow = array_merge($postrow, array(
		'THANK_ALT'		=> $user->lang['THANK_POST1'],
		'THANK_ALT2'	=> $user->lang['THANK_POST2'],
		'THANKS_IMG'	=> "{$phpbb_root_path}styles/" . $user->theme['imageset_path'] . "/imageset/" . $user->data['user_lang'] . "/thanks_posts.gif",
	));
	return;
}

// change the variable sent via the link to avoid odd errors
function get_thanks_link($post_id)
{
	global $db, $user;
	if (already_thanked($post_id, $user->data['user_id']))
	{
		return 'rthanks';
	}
	return 'thanks';
}

// check if the user has already thanked that post
function already_thanked($post_id, $user_id)
{
	global $db, $thankers;
	$thanked = false;
	foreach($thankers as $key => $value)
	{
		if ($thankers[$key]['post_id'] == $post_id && $thankers[$key]['user_id'] == $user_id)
		{
			$thanked = true;
		}
	}
	return $thanked;
}

// check gender in applicable
function get_gender($user_id)
{
	global $users, $user;
	if ($user_id == ANONYMOUS || $users[$user_id]['user_gender'] == false)
	{
		return $user->lang['THANK_GENDER_U'];
	}
	else if ($users[$user_id]['user_gender'] == 1)
	{
		return $user->lang['THANK_GENDER_M'];
	}
	else if ($users[$user_id]['user_gender'] == 2)
	{
		return $user->lang['THANK_GENDER_F'];
	}
	return $user->lang['THANK_GENDER_U'];
}

// gets the number of users that have thanked the poster
function get_user_count($user_id, $receive)
{
	global $users;
	if ($receive)
	{
		return $users[$user_id]['thanks_receive'];
	}
	else
	{
		return $users[$user_id]['thanks_give'];
	}
}

// stuff goes here to avoid over-editing viewtopic.php
function output_thanks($user_id)
{
	global $db, $user, $poster_id, $postrow, $row, $phpEx, $topic_data, $phpbb_root_path;
	if (!empty($postrow))
	{
		$forum_id = (isset($forum_id)) ? $forum_id : 0;
		$number = get_thanks_number($row['post_id']) . ' ';
		$pl_text = $user->lang['THANK_TEXT_2pl'];
		if ($number == 1)
		{
			$pl_text = $user->lang['THANK_TEXT_2'];
			$number = '';
		}
		get_thanks_text($row['post_id']);
		$postrow = array_merge($postrow, array(
			'THANKS_GENDER' 		=> ' ' . get_gender($user_id),
			'THANKS'				=> get_thanks($row['post_id']),
			'THANKS_LINK'			=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", "p=" . $row['post_id'] . "&amp;" . get_thanks_link($row['post_id']) . "=" . $row['post_id'] . "&amp;to_id=" . $poster_id . "&amp;from_id=" . $user->data['user_id'] . "#p" . $row['post_id']),
//			'THANKS_LINK'			=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'p=' . $row['post_id']) . (($topic_data['topic_type'] == POST_GLOBAL) ? '&amp;f=' . $forum_id : '') . '&amp;' . get_thanks_link($row['post_id']) . '=' . $row['post_id'] . '&amp;to_id=' . $poster_id . '#p' . $row['post_id'],
			'THANK_TEXT'			=> $user->lang['THANK_TEXT_1'] . ' ' . $number . $pl_text . ' ',
			'POSTER_RECEIVE_COUNT'	=> get_user_count($poster_id, true),
			'POSTER_GIVE_COUNT'		=> get_user_count($poster_id, false),
			'S_IS_OWN_POST'			=> ($user->data['user_id'] == $poster_id) ? true : false,
		));
	}
}

?>