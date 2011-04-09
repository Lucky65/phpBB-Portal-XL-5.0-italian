<?php
/**
*
* @name portal_groups.php
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_groups.php,v 1.0 2009/11/12 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('groups');

// grab user count of groups
$sql = 'SELECT group_id
	FROM ' . USER_GROUP_TABLE . '
		WHERE user_pending <> 1
			ORDER BY group_id';
$result = $db->sql_query($sql);

$groups_count = array();
while ($row = $db->sql_fetchrow($result))
{
	$groups_count[] = $row['group_id'];
}
$db->sql_freeresult($result);
$total_groups_count = sizeof($groups_count);

// get group info
$sql_where = " WHERE group_name <> 'GUESTS'";

// do we need the coppa group?
if (!$config['coppa_enable'])
{
	$sql_where .= " AND group_name <> 'REGISTERED_COPPA'";
}

$sql = 'SELECT *
	FROM ' . GROUPS_TABLE . '
	' . $sql_where . '
	ORDER BY group_name';
$result = $db->sql_query($sql);

// get results
if ($group_row = $db->sql_fetchrow($result))
{
	if (!$group_row)
	{
		trigger_error('NO_GROUP');
	}
	
	do
	{
		if ($group_row['group_type'] == GROUP_HIDDEN && !$auth->acl_gets('a_group', 'a_groupadd', 'a_groupdel'))
		{
			continue;
		}
		
		// count the groups users
		if ($total_groups_count)
		{
			$user_count = 0;
			for ($i = 0; $i < $total_groups_count; $i++)
			{
	            if ($group_row['group_id'] == $groups_count[$i])
	            {
					$user_count++;
	            }
			}
		}
		
		switch ($group_row['group_type'])
		{
			case GROUP_OPEN:
				$group_row['l_group_type'] = 'OPEN';
			break;

			case GROUP_CLOSED:
				$group_row['l_group_type'] = 'CLOSED';
			break;

			case GROUP_HIDDEN:
				$group_row['l_group_type'] = 'HIDDEN';

				// Check for membership or special permissions
				if (!$auth->acl_gets('a_group', 'a_groupadd', 'a_groupdel') && $group_row['user_id'] != $user->data['user_id'])
				{
					trigger_error('NO_GROUP');
				}
			break;

			case GROUP_SPECIAL:
				$group_row['l_group_type'] = 'SPECIAL';
			break;

			case GROUP_FREE:
				$group_row['l_group_type'] = 'FREE';
			break;
		}

		// Country Flags Version 3.0.6
		$flag_country = $flag_code = $flag_img = $flag_img_src = '';
		if ($group_row['group_country_flag'])
		{
			if (isset($flags[$group_row['group_country_flag']]))
			{
				$flag_country = $flags[$group_row['group_country_flag']]['country'];
				$flag_code = $flags[$group_row['group_country_flag']]['code'];
			}

			$flag_text = $flags[$group_row['group_country_flag']]['country'] . ' (' . $flags[$group_row['group_country_flag']]['code'] . ')';
			$flag_img = (!empty($flags[$group_row['group_country_flag']]['image'])) ? '<img src="' . $config['country_flags_path'] . '/' . $flags[$group_row['group_country_flag']]['image'] . '" alt="' . $flag_text . '" title="' . $flag_text . '" /><br />' : '';
			$flag_img_src = (!empty($flags[$group_row['group_country_flag']]['image'])) ? $config['country_flags_path'] . '/' . $flags[$group_row['group_country_flag']]['image'] : '';
		}
		else
		{
			$flag_country = $flag_code = $flag_img = $flag_img_src = '';
		}
		// Country Flags Version 3.0.6

		$rank_title = $rank_img = $rank_img_src = '';
		if ($group_row['group_rank'])
		{
			if (isset($ranks['special'][$group_row['group_rank']]))
			{
				$rank_title = $ranks['special'][$group_row['group_rank']]['rank_title'];
			}
			$rank_img = (!empty($ranks['special'][$group_row['group_rank']]['rank_image'])) ? '<img src="' . $config['ranks_path'] . '/' . $ranks['special'][$group_row['group_rank']]['rank_image'] . '" alt="' . $ranks['special'][$group_row['group_rank']]['rank_title'] . '" title="' . $ranks['special'][$group_row['group_rank']]['rank_title'] . '" /><br />' : '';
			$rank_img_src = (!empty($ranks['special'][$group_row['group_rank']]['rank_image'])) ? $config['ranks_path'] . '/' . $ranks['special'][$group_row['group_rank']]['rank_image'] : '';
		}
		else
		{
			$rank_title = '';
			$rank_img = '';
			$rank_img_src = '';
		}

		$avatar_img = ($group_row['group_avatar']) ? get_user_avatar($group_row['group_avatar'], $group_row['group_avatar_type'], $group_row['group_avatar_width'], $group_row['group_avatar_height'], 'GROUP_AVATAR', true) : '<img src="' . $phpbb_root_path . 'images/avatars/no_avatar.png" width="' . $group_row['group_avatar_width'] . '" height="' . $group_row['group_avatar_height'] . '" alt="" style="vertical-align: middle;" />';
		//$avatar_img = ($group_row['group_avatar']) ? get_user_avatar($group_row['group_avatar'], $group_row['group_avatar_type'], $group_row['group_avatar_width'], $group_row['group_avatar_height'], 'GROUP_AVATAR', true) : '<img src="' . $phpbb_root_path . 'styles/' . $user->theme['theme_path'] . '/theme/images/no_avatar.gif" width="' . $group_row['group_avatar_width'] . '" height="' . $group_row['group_avatar_height'] . '" alt="" style="vertical-align: middle;" />';
		$group_name = ($group_row['group_type'] == GROUP_SPECIAL) ? $user->lang['G_' . $group_row['group_name']] : $group_row['group_name'];
		$u_group = append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=group&amp;g=' . $group_row['group_id']);
		$s_bot_group = ($group_row['group_name'] == 'BOTS') ? true : false;
		get_user_rank($group_row['group_rank'], (($user_id == ANONYMOUS) ? false : $ranks['special'][$group_row['group_rank']]['rank_image']), $rank_title, $rank_img, $rank_img_src);

		$template->assign_block_vars('group_row', array(
			'GROUP_NAME'	=> $group_name,
			'GROUP_RANK'	=> $rank_title,
			'GROUP_DESC'	=> generate_text_for_display($group_row['group_desc'], $group_row['group_desc_uid'], $group_row['group_desc_bitfield'], $group_row['group_desc_options']),
			'GROUP_COLOR'	=> $group_row['group_colour'],
			'GROUP_TYPE'	=> $user->lang['GROUP_IS_' . $group_row['l_group_type']],
			'GROUP_COUNT'	=> number_format($user_count),
			'AVATAR_IMG'	=> $avatar_img,
			'RANK_TITLE'	=> $rank_title,
			'RANK_IMG'		=> $rank_img,
			'RANK_IMG_SRC'	=> $rank_img_src,			
			'S_BOT_GROUP'	=> $s_bot_group,
			'U_GROUP'		=> $u_group,
		));
	}
	while ($group_row = $db->sql_fetchrow($result));

	$db->sql_freeresult($result);
}

// Output the page
page_header($config['sitename'] . ' : ' . $user->lang['GROUPS']);

$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['GROUPS'],
	'U_VIEW_FORUM'  => append_sid("{$phpbb_root_path}portal/portal_groups.$phpEx")
));

$template->set_filenames(array(
	'body' => 'portal/portal_groups_body.html',
));

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?>