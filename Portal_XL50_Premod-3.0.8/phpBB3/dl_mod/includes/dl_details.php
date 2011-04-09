<?php

/** 
*
* @mod package		Download Mod 6
* @file				dl_details.php 21 2011/02/10 OXPUS
* @copyright		(c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/*
* connect to phpBB
*/
if ( !defined('IN_PHPBB') )
{
	exit;
}

if ($cancel)
{
	$action = '';
}

$cat_id = $dl_files['cat'];

/*
* Forum rules?
*/
if (isset($index[$cat_id]['rules']) && $index[$cat_id]['rules'] != '')
{
	$cat_rule = $index[$cat_id]['rules'];
	$cat_rule_uid = (isset($index[$cat_id]['rule_uid'])) ? $index[$cat_id]['rule_uid'] : '';
	$cat_rule_bitfield = (isset($index[$cat_id]['rule_bitfield'])) ? $index[$cat_id]['rule_bitfield'] : '';
	$cat_rule_flags = (isset($index[$cat_id]['rule_flags'])) ? $index[$cat_id]['rule_flags'] : '';
	$cat_rule = censor_text($cat_rule);
	$cat_rule = generate_text_for_display($cat_rule, $cat_rule_uid, $cat_rule_bitfield, $cat_rule_flags);

	$template->assign_var('S_CAT_RULE', true);
}
else
{
	$cat_rule = '';
}

/*
* Cat Traffic?
*/
$cat_traffic = 0;

if (!$config['dl_traffic_off'])
{
	$cat_traffic = $index[$cat_id]['cat_traffic'] - $index[$cat_id]['cat_traffic_use'];
	
	if ($index[$cat_id]['cat_traffic'] && $cat_traffic > 0)
	{
		$cat_traffic = ($cat_traffic > $config['dl_overall_traffic']) ? $config['dl_overall_traffic'] : $cat_traffic;
		$cat_traffic = $dl_mod->dl_size($cat_traffic);
	
		$template->assign_var('S_CAT_TRAFFIC', true);
	}
}

/*
* Read the ratings for this little download
*/
$sql = 'SELECT dl_id, user_id FROM ' . DL_RATING_TABLE . "
	WHERE dl_id = $df_id";
$result = $db->sql_query($sql);

$ratings = 0;
$rating_access = TRUE;

while ($row = $db->sql_fetchrow($result))
{
	$ratings++;

	if ($user->data['user_id'] == $row['user_id'])
	{
		$rating_access = 0;
	}
}

$db->sql_freeresult($result);

if (!$user->data['is_registered'] || $user->data['user_id'] == ANONYMOUS)
{
	$rating_access = 0;
}

if (!$rating_access)
{
	if ($dlo == 1 && $action)
	{
		redirect(append_sid("{$phpbb_root_path}downloads.php?view=overall"));
	}
	else if (!$dlo && $action)
	{
		redirect(append_sid("{$phpbb_root_path}downloads.php?cat=$cat_id"));
	}

	$action = '';
}

$rating = $s_hidden_fields = '';

/*
* fetch last comment, if exists
*/
if ($index[$cat_id]['comments'] && $dl_mod->cat_auth_comment_read($cat_id))
{
	$s_hidden_fields = array(
		'cat_id'	=> $cat_id,
		'df_id'		=> $df_id,
		'view'		=> 'comment'
	);

	$template->assign_vars(array(
		'S_COMMENT_ACTION'			=> append_sid("{$phpbb_root_path}downloads.$phpEx"),
		'S_HIDDEN_COMMENT_FIELDS'	=> build_hidden_fields($s_hidden_fields))
	);

	$sql = 'SELECT * FROM ' . DL_COMMENTS_TABLE . "
		WHERE cat_id = $cat_id
			AND id = $df_id
			AND approve = " . true;
	$result = $db->sql_query($sql);
	$real_comment_exists = $db->sql_affectedrows($result);
	$db->sql_freeresult($result);

	if ($real_comment_exists)
	{
		$template->assign_var('S_VIEW_COMMENTS', true);
	}

	if ($config['dl_latest_comments'] && $real_comment_exists)
	{
		$template->assign_var('S_COMMENTS_ON', true);

		$sql = 'SELECT * FROM ' . DL_COMMENTS_TABLE . "
			WHERE cat_id = $cat_id
				AND id = $df_id
				AND approve = " . true . "
			ORDER BY comment_time DESC";
		$result = $db->sql_query_limit($sql, $config['dl_latest_comments']);
	
		while ($row = $db->sql_fetchrow($result))
		{
			$poster_id			= $row['user_id'];
			$poster				= $row['username'];

			$message			= $row['comment_text'];
			$com_uid			= $row['com_uid'];
			$com_bitfield		= $row['com_bitfield'];
			$com_flags			= $row['com_flags'];

			$message			= censor_text($message);
			$message			= generate_text_for_display($message, $com_uid, $com_bitfield, $com_flags);

			$comment_time		= $row['comment_time'];
			$comment_edit_time	= $row['comment_edit_time'];

			if($comment_time <> $comment_edit_time)
			{
				$edited_by = sprintf($user->lang['DL_COMMENT_EDITED'], $user->format_date($comment_edit_time));
			}
			else
			{
				$edited_by = '';
			}

			if ($poster_id == ANONYMOUS)
			{
				$poster_url = '';
			}
			else
			{
				$poster_url	= append_sid("{$phpbb_root_path}memberlist.$phpEx?mode=viewprofile", "u=$poster_id");
				$poster		= '<a href="'.$poster_url.'">'.$poster.'</a>';
			}

			$post_time = $user->format_date($comment_time);

			$template->assign_block_vars('comment_row', array(
				'EDITED_BY'	=> $edited_by,
				'POSTER'	=> $poster,
				'MESSAGE'	=> $message,
				'POST_TIME'	=> $post_time)
			);
		}
	}

	if ($dl_mod->cat_auth_comment_post($cat_id))
	{
		$s_hidden_fields = array(
			'cat_id'	=> $cat_id,
			'df_id'		=> $df_id,
			'view'		=> 'comment'
		);

		$template->assign_var('S_POST_COMMENT', true);

		$template->assign_vars(array(
			'S_COMMENT_POST_ACTION'	=> append_sid("{$phpbb_root_path}downloads.$phpEx"),
			'S_HIDDEN_POST_FIELDS'	=> build_hidden_fields($s_hidden_fields))
		);
	}
	$db->sql_freeresult($result);
}

/*
* generate page
*/
$template->set_filenames(array(
	'body' => 'dl_mod/view_dl_body.html')
);

$user_id = $user->data['user_id'];
$username = $user->data['username'];

/*
* prepare the download for displaying
*/
$description		= $dl_files['description'];
$desc_uid			= $dl_files['desc_uid'];
$desc_bitfield		= $dl_files['desc_bitfield'];
$desc_flags			= $dl_files['desc_flags'];
$description		= generate_text_for_display($description, $desc_uid, $desc_bitfield, $desc_flags);

$mini_icon			= $dl_mod->mini_status_file($cat_id, $df_id);

$hack_version		= '&nbsp;'.$dl_files['hack_version'];

$long_desc			= $dl_files['long_desc'];
$long_desc_uid		= $dl_files['long_desc_uid'];
$long_desc_bitfield	= $dl_files['long_desc_bitfield'];
$long_desc_flags	= $dl_files['long_desc_flags'];
$long_desc			= generate_text_for_display($long_desc, $long_desc_uid, $long_desc_bitfield, $long_desc_flags);

$file_status	= array();
$file_status	= $dl_mod->dl_status($df_id);

$status			= $file_status['status_detail'];
$file_name		= $file_status['file_detail'];
$file_load		= $file_status['auth_dl'];
$real_file		= $dl_files['real_file'];

if ($dl_files['extern'])
{
	$file_size_out = $user->lang['DL_NOT_AVAILIBLE'];

	if ($config['dl_shorten_extern_links'])
	{
		if (strlen($file_name) > $config['dl_shorten_extern_links'] && strlen($file_name) <= $config['dl_shorten_extern_links'] * 2)
		{
			$file_name = substr($file_name, strlen($file_name) - $config['dl_shorten_extern_links']);
		}
		else
		{
			$file_name = substr($file_name, 0, $config['dl_shorten_extern_links']) . '...' . substr($file_name, strlen($file_name) - $config['dl_shorten_extern_links']);
		}
	}
}
else
{
	$file_size_out = $dl_mod->dl_size($dl_files['file_size'], 2);
}

$file_klicks			= $dl_files['klicks'];
$file_overall_klicks	= $dl_files['overall_klicks'];

$cat_name = $index[$cat_id]['cat_name'];
$cat_view = $index[$cat_id]['nav_path'];
$cat_desc = $index[$cat_id]['description'];

$add_user		= $add_time = '';
$change_user	= $change_time = '';

$sql = 'SELECT username, user_id FROM ' . USERS_TABLE . '
	WHERE user_id = ' . $dl_files['add_user'];
$result = $db->sql_query($sql);

$row			= $db->sql_fetchrow($result);
$add_user		= ($row['user_id'] != '' || $row['user_id'] != ANONYMOUS) ? '<a href="'.append_sid("{$phpbb_root_path}memberlist.$phpEx?mode=viewprofile", "u=".$row['user_id']).'">'.$row['username'].'</a>' : $user->lang['GUEST'];
$add_time		= $user->format_date($dl_files['add_time']);

$db->sql_freeresult($result);

if ($dl_files['add_time'] != $dl_files['change_time'])
{
	$sql = 'SELECT username, user_id FROM ' . USERS_TABLE . '
		WHERE user_id = ' . $dl_files['change_user'];
	$result = $db->sql_query($sql);

	$row			= $db->sql_fetchrow($result);
	$change_user	= ($row['user_id'] != '' || $row['user_id'] != ANONYMOUS) ? '<a href="'.append_sid("{$phpbb_root_path}memberlist.$phpEx?mode=viewprofile", "u=".$row['user_id']).'">'.$row['username'].'</a>' : $user->lang['GUEST'];
	$change_time	= $user->format_date($dl_files['change_time']);

	$db->sql_freeresult($result);
}

$last_time_string		= ($dl_files['extern']) ? $user->lang['DL_LAST_TIME_EXTERN'] : $user->lang['DL_LAST_TIME'];
$last_time				= ($dl_files['last_time']) ? sprintf($last_time_string, $user->format_date($dl_files['last_time'])) : $user->lang['DL_NO_LAST_TIME'];

$hack_author_email		= $dl_files['hack_author_email'];
$hack_author			= ( $dl_files['hack_author'] != '' ) ? $dl_files['hack_author'] : 'n/a';
$hack_author_website	= $dl_files['hack_author_website'];
$hack_dl_url			= $dl_files['hack_dl_url'];

$test					= $dl_files['test'];
$require				= $dl_files['req'];
$todo					= $dl_files['todo'];
$todo_uid				= $dl_files['todo_uid'];
$todo_bitfield			= $dl_files['todo_bitfield'];
$todo_flags				= $dl_files['todo_flags'];
$todo					= generate_text_for_display($todo, $todo_uid, $todo_bitfield, $todo_flags);
$warning				= $dl_files['warning'];
$warn_uid				= $dl_files['warn_uid'];
$warn_bitfield			= $dl_files['warn_bitfield'];
$warn_flags				= $dl_files['warn_flags'];
$warning				= generate_text_for_display($warning, $warn_uid, $warn_bitfield, $warn_flags);

$mod_list				= $dl_files['mod_list'];

if ($mod_list)
{
	$mod_desc			= $dl_files['mod_desc'];
	$mod_desc_uid		= $dl_files['mod_desc_uid'];
	$mod_desc_bitfield	= $dl_files['mod_desc_bitfield'];
	$mod_desc_flags		= $dl_files['mod_desc_flags'];
	$mod_desc			= generate_text_for_display($mod_desc, $mod_desc_uid, $mod_desc_bitfield, $mod_desc_flags);
}

/*
* Hacklist
*/
if ($dl_files['hacklist'] && $config['dl_use_hacklist'])
{
	$template->assign_block_vars('hacklist', array(
		'HACK_AUTHOR'			=> ( $hack_author_email != '' ) ? '<a href="mailto:'.$hack_author_email.'">'.$hack_author.'</a>' : $hack_author,
		'HACK_AUTHOR_WEBSITE'	=> ( $hack_author_website != '' ) ? '<a href="'.$hack_author_website.'">'.$user->lang['WEBSITE'].'</a>' : 'n/a',
		'HACK_DL_URL'	=> ( $hack_dl_url != '' ) ? '<a href="' . $hack_dl_url . '">'.$user->lang['DL_DOWNLOAD'].'</a>' : 'n/a')
	);
}

/*
* MOD block
*/
if ($mod_list && $index[$cat_id]['allow_mod_desc'])
{
	$template->assign_var('S_MOD_LIST', true);

	if ($test)
	{
		$template->assign_block_vars('modlisttest', array('MOD_TEST' => $test));
	}

	if ($mod_desc)
	{
		$template->assign_block_vars('modlistdesc', array('MOD_DESC' => $mod_desc));
	}

	if ($warning)
	{
		$template->assign_block_vars('modwarning', array('MOD_WARNING' => $warning));
	}

	if ($require)
	{
		$template->assign_block_vars('modrequire', array('MOD_REQUIRE' => $require));
	}
}

if ($todo)
{
	$template->assign_var('S_MOD_TODO', true);
	$template->assign_block_vars('modtodo', array('MOD_TODO' => $todo));
}

/*
* Check for recurring downloads
*/
if ($config['dl_user_traffic_once'] && !$file_load && !$dl_files['free'] && !$dl_files['extern'] && ($dl_files['file_size'] > $user->data['user_traffic']) && !$config['dl_traffic_off'])
{
	$sql = 'SELECT * FROM ' . DL_NOTRAF_TABLE . '
		WHERE user_id = ' . $user->data['user_id'] . "
			AND dl_id = $df_id";
	$result = $db->sql_query($sql);
	$still_count = $db->sql_affectedrows($result);
	$db->sql_freeresult($result);

	if ($still_count)
	{
		$file_load = true;

		$template->assign_var('S_ALLOW_TRAFFICFREE_DOWNLOAD', true);
	}
}

/*
* Hotlink or not hotlink, that is the question :-P
* And we will check a broken download inclusive the visual confirmation here ...
*/
if ($file_load)
{
	if (!$dl_files['broken'] || ($dl_files['broken'] && !$config['dl_report_broken_lock']))
	{
		if ($config['dl_prevent_hotlink'])
		{
			$hotlink_id = md5($user->data['user_id'] . time() . $df_id . $user->data['session_id']);

			$sql = 'INSERT INTO ' . DL_HOTLINK_TABLE . ' ' . $db->sql_build_array('INSERT', array(
				'user_id'		=> $user->data['user_id'],
				'session_id'	=> $user->data['session_id'],
				'hotlink_id'	=> $hotlink_id));
			$db->sql_query($sql);
		}
		else
		{
			$hotlink_id = '';
		}

		if ($cat_auth['auth_mod'] || ($auth->acl_get('a_') && $user->data['is_registered']))
		{
			$modcp = ($modcp) ? 1 : 0;
		}
		else
		{
			$modcp = 0;
		}

		$error = array();

		$s_hidden_fields = array(
			'df_id'		=> $df_id,
			'modcp'		=> $modcp,
			'cat_id'	=> $cat_id,
			'hotlink_id'	=> $hotlink_id,
		);

		if (!$config['dl_download_vc'])
		{
			$s_hidden_fields = array_merge($s_hidden_fields, array('view' => 'load'));
		}
		else
		{
			$s_hidden_fields = array_merge($s_hidden_fields, array('view' => 'detail'));
		}

		$sql = 'SELECT v.ver_id, v.ver_change_time, v.ver_version, u.username FROM ' . DL_VERSIONS_TABLE . ' v
			LEFT JOIN ' . USERS_TABLE . ' u ON u.user_id = v.ver_change_user
			WHERE v.dl_id = ' . $df_id . '
			ORDER BY v.ver_version DESC, v.ver_change_time DESC';
		$result = $db->sql_query($sql);
		$total_releases = $db->sql_affectedrows($result);

		if ($total_releases)
		{
			$s_select_version = '<select name="file_version">';
			$s_select_version .= '<option value="0" selected="selected">' . $user->lang['DL_VERSION_CURRENT'] . '</option>';
		
			while ($row = $db->sql_fetchrow($result))
			{
				$ver_id			= $row['ver_id'];
				$ver_version	= $row['ver_version'];
				$ver_time		= $user->format_date($row['ver_change_time']);
				$ver_username	= ($row['username']) ? ' [ ' . $row['username'] . ' ]' : '';
		
				$s_select_version .= '<option value="' . $ver_id . '">' . $ver_version . ' - ' . $ver_time . $ver_username . '</option>';
			}

			$s_select_version .= '</select>';
		}
		else
		{
			$s_select_version = '<input type="hidden" name="file_version" value="0" />';
		}

		$db->sql_freeresult($result);
	
	
		$template->assign_block_vars('download_button', array(
			'S_HIDDEN_FIELDS'	=> build_hidden_fields($s_hidden_fields),
			'S_HOTLINK_ID'		=> $hotlink_id,
			'S_DL_WINDOW'		=> ($dl_files['extern'] && $config['dl_ext_new_window']) ? 'target="_blank"' : '',
			'S_DL_VERSION'		=> $s_select_version,
			'U_DOWNLOAD'		=> append_sid("{$phpbb_root_path}downloads.$phpEx"),
		));

		if ($config['dl_download_vc'])
		{
			$code_match = false;

			$template->assign_var('S_VC', true);

			include($phpbb_root_path . 'includes/captcha/captcha_factory.' . $phpEx);
			$captcha = phpbb_captcha_factory::get_instance($config['captcha_plugin']);
			$captcha->init(CONFIRM_POST);

	        if ($submit)
	        {
				$vc_response = $captcha->validate();
	
		        if ($vc_response)
		        {
		            $error[] = $vc_response;
		        }

		        if (!sizeof($error))
		        {
					$captcha->reset();
					$code_match = true;
		        }
		        else if ($captcha->is_solved())
		        {
		            $s_hidden_c_fields = $captcha->get_hidden_fields();
					$code_match = false;
		        }
			}

			if (!$captcha->is_solved() || !$code_match)
			{
				$template->assign_vars(array(
					'S_HIDDEN_FIELDS'	=> (isset($s_hidden_c_fields)) ? build_hidden_fields($s_hidden_c_fields) : '',
		            'S_CONFIRM_CODE'	=> true,
		            'CAPTCHA_TEMPLATE'	=> $captcha->get_template(),
				));
			}
		}
		else
		{
			$code_match = true;
		}

		if ($submit && $code_match)
		{
			$code = request_var('confirm_code', '');

			if ($code)
			{
				$sql = 'INSERT INTO ' . DL_HOTLINK_TABLE . ' ' . $db->sql_build_array('INSERT', array(
					'user_id'		=> $user->data['user_id'],
					'session_id'	=> $user->data['session_id'],
					'hotlink_id'	=> 'dlvc',
					'code'			=> $code));
				$db->sql_query($sql);
			}

			redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=load&amp;hotlink_id=$hotlink_id&amp;code=$code&amp;df_id=$df_id&amp;modcp=$modcp&amp;cat_id=$cat_id&file_version=$file_version"));
		}
	}
}

/*
* Display the link ro report the download as broken
*/
if ($config['dl_report_broken'] && !$dl_files['broken'])
{
	if ($user->data['is_registered'] || (!$user->data['is_registered'] && $config['dl_report_broken'] == 1))
	{
		$template->assign_block_vars('report_broken_dl', array(
			'U_BROKEN_DOWNLOAD' => append_sid("{$phpbb_root_path}downloads.$phpEx?view=broken", "df_id=$df_id&amp;cat_id=$cat_id"))
		);
	}
}

/*
* some permissions, please!
*/
$cat_auth = array();
$cat_auth = $dl_mod->dl_cat_auth($cat_id);

/*
* Second part of the report link
*/
if ($dl_files['broken'])
{
	if ($index[$cat_id]['auth_mod'] || $cat_auth['auth_mod'] || ($auth->acl_get('a_') && $user->data['is_registered']))
	{
		$template->assign_block_vars('dl_broken_mod', array(
			'U_REPORT' => append_sid("{$phpbb_root_path}downloads.$phpEx?view=unbroken", "df_id=$df_id&amp;cat_id=$cat_id"))
		);
	}

	if (!$config['dl_report_broken_message'] || ($config['dl_report_broken_lock'] && $config['dl_report_broken_message']))
	{
		$template->assign_var('S_DL_BROKEN_CUR', true);
	}
}

/*
* Send the values to the template to be able to read something *g*
*/
$template->assign_block_vars('downloads', array(
	'DESCRIPTION'			=> $description,
	'MINI_IMG'				=> $mini_icon,
	'HACK_VERSION'			=> $hack_version,
	'LONG_DESC'				=> $long_desc,
	'STATUS'				=> $status,
	'FILE_SIZE'				=> $file_size_out,
	'FILE_KLICKS'			=> $file_klicks,
	'FILE_OVERALL_KLICKS'	=> $file_overall_klicks,
	'FILE_NAME'				=> ($dl_files['extern']) ? $user->lang['DL_EXTERN'] : $file_name,
	'LAST_TIME'				=> $last_time,
	'ADD_USER'				=> ($add_user != '') ? sprintf($user->lang['DL_ADD_USER'], $add_time, $add_user) : '',
	'CHANGE_USER'			=> ($change_user != '') ? sprintf($user->lang['DL_CHANGE_USER'], $change_time, $change_user) : '')
);

/*
* Enabled Bug Tracker for this download category?
*/
if ($index[$cat_id]['bug_tracker'])
{
	$template->assign_block_vars('downloads.bug_tracker', array(
		'U_BUG_TRACKER'			=> append_sid("{$phpbb_root_path}downloads.$phpEx?view=bug_tracker", "df_id=$df_id"))
	);
}

/*
* Thumbnails? Okay, getting some thumbs, if they exists...
*/
if ($index[$cat_id]['allow_thumbs'] && $config['dl_thumb_fsize'] && $dl_files['thumbnail'])
{
	if (@file_exists($phpbb_root_path . 'dl_mod/thumbs/' . $dl_files['thumbnail']))
	{
		$template->assign_block_vars('downloads.thumbnail', array(
			'THUMBNAIL'		=> $phpbb_root_path . 'dl_mod/thumbs/' . $dl_files['thumbnail'])
		);
	}
}

/*
* Urgh, the real filetime..... Heavy information, very important :D
*/
if ($config['dl_show_real_filetime'] && !$dl_files['extern'])
{
	if (@file_exists($phpbb_root_path . $config['dl_download_dir'] . $index[$cat_id]['cat_path'] . $real_file))
	{
		$template->assign_block_vars('downloads.real_filetime', array(
			'REAL_FILETIME'		=> $user->format_date(@filemtime($phpbb_root_path . $config['dl_download_dir'] . $index[$cat_id]['cat_path'] . $real_file)))
		);
	}
}

/*
* Like to rate? Do it!
*/
$rating_points = $dl_files['rating'];

$u_rating_text = '';

if ((!$rating_points || $rating_access) && $user->data['is_registered'])
{
	$u_rating_text = append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "action=rate&amp;df_id=$df_id&amp;dlo=2");
}

if ($ratings)
{
	$rating_count_text = '&nbsp;[ '.$ratings.' ]';
}
else
{
	$rating_count_text = '';
}

$template->assign_vars(array(
	'RATING_IMG'	=> $dl_mod->rating_img($rating_points),
	'RATINGS'		=> $rating_count_text)
);

if ($action == 'rate' && $rating_access)
{
	$rating = '<select name="rate_point">';
	for ( $i = 1; $i <= 10; $i++ )
	{
		$rating .= '<option value="'.$i.'">'.$i.'</option>';
	}
	$rating .= '</select>';

	$s_hidden_fields_rate = array(
		'df_id'		=> $df_id,
		'cat'		=> $cat_id,
		'dlo'		=> $dlo,
		'view'		=> 'detail',
		'action'	=> 'rate',
		'start'		=> $start
	);

	$template->assign_var('S_RATING', true);

	add_form_key('dl_rating');

	$template->assign_vars(array(
		'RATING'				=> $rating,
		'S_HIDDEN_FIELDS_RATE'	=> build_hidden_fields($s_hidden_fields_rate))
	);
}
else if ($u_rating_text)
{
	$template->assign_block_vars('downloads.rating_view', array(
		'U_RATING' => $u_rating_text)
	);
}

/*
* Some user like to link to each favorite page, download, programm, friend, house friend... ahrrrrrrggggg...
*/
if ($user->data['is_registered'] && !$config['dl_disable_email'])
{
	$sql = 'SELECT fav_id FROM ' . DL_FAVORITES_TABLE . "
		WHERE fav_dl_id = $df_id
			AND fav_user_id = " . $user->data['user_id'];
	$result = $db->sql_query($sql);
	$fav_id = $db->sql_fetchfield('fav_id');
	$db->sql_freeresult($result);

	$template->assign_var('S_FAV_BLOCK', true);

	if ($fav_id)
	{
		$l_favorite = $user->lang['DL_FAVORITE_DROP'];
		$u_favorite = append_sid("{$phpbb_root_path}downloads.$phpEx?view=unfav", "df_id=$df_id&amp;cat_id=$cat_id&amp;fav_id=$fav_id");
	}
	else
	{
		$l_favorite = $user->lang['DL_FAVORITE_ADD'];
		$u_favorite = append_sid("{$phpbb_root_path}downloads.$phpEx?view=fav", "df_id=$df_id&amp;cat_id=$cat_id");
	}
}
else
{
	$l_favorite = '';
	$u_favorite = '';
}

$file_id	= $dl_files['id'];
$cat_id		= $dl_files['cat'];

/*
* Can we edit the download? Yes we can, or not?
*/
if ($dl_mod->user_auth($dl_files['cat'], 'auth_mod') || ($config['dl_edit_own_downloads'] && $dl_files['add_user'] == $user->data['user_id']))
{
	$template->assign_var('S_EDIT_BUTTON', true);
}

/*
* A little bit more values and strings for the template *bfg*
*/
$template->assign_vars(array(
	'FAVORITE'					=> $l_favorite,

	'EDIT_IMG'					=> $user->lang['DL_EDIT_FILE'],
	'CAT_RULE'					=> (isset($cat_rule)) ? $cat_rule : '',
	'CAT_TRAFFIC'				=> (isset($cat_traffic)) ? sprintf($user->lang['DL_CAT_TRAFFIC_MAIN'], $cat_traffic) : '',

	'S_DL_ACTION'				=> append_sid("{$phpbb_root_path}downloads.$phpEx"),

	'U_TOPIC'					=> append_sid("{$phpbb_root_path}viewtopic.$phpEx?t=" . $dl_files['dl_topic']),
	'U_EDIT'					=> append_sid("{$phpbb_root_path}downloads.$phpEx?view=modcp", "action=edit&amp;df_id=$file_id&amp;cat_id=$cat_id"),
	'U_FAVORITE'				=> $u_favorite,
	'U_DL_SEARCH'				=> '[ <a href="' . append_sid("{$phpbb_root_path}downloads.$phpEx?view=search") . '">' . $user->lang['DL_SEARCH_DOWNLOAD'] . '</a> ]',
));

if ($dl_files['dl_topic'])
{
	$template->assign_var('S_SHOW_TOPIC_LINK', true);
}

/**
* Custom Download Fields
* Taken from memberlist.php phpBB 3.0.7-PL1
*/
$dl_fields = array();
include($phpbb_root_path . 'includes/functions_dl_fields.' . $phpEx);
$cp = new custom_profile();
$dl_fields = $cp->generate_profile_fields_template('grab', $file_id);
$dl_fields = (isset($dl_fields[$file_id])) ? $cp->generate_profile_fields_template('show', false, $dl_fields[$file_id]) : array();

if (isset($dl_fields['row']) && sizeof($dl_fields['row']))
{
	$template->assign_var('S_DL_FIELDS', true);

	if (!empty($dl_fields['row']))
	{
		$template->assign_vars($dl_fields['row']);
	}

	if (!empty($dl_fields['blockrow']))
	{
		foreach ($dl_fields['blockrow'] as $field_data)
		{
			$template->assign_block_vars('custom_fields', $field_data);
		}
	}
}

/*
* The end... Yes? Yes!
*/

?>