<?php

/** 
*
* @mod package		Download Mod 6
* @file				dl_footer.php 16 2011/02/13 OXPUS
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

if (sizeof($index) || $cat)
{
	/*
	* check and create link if we must approve downloads
	*/
	$total_approve = $dl_mod->count_dl_approve();
	if ($total_approve)
	{
		$approve_string = ($total_approve == 1) ? $user->lang['DL_APPROVE_OVERVIEW_ONE'] : $user->lang['DL_APPROVE_OVERVIEW'];
		$template->assign_block_vars('approve', array(
			'L_APPROVE_DOWNLOADS' => sprintf($approve_string, $total_approve),
			'U_APPROVE_DOWNLOADS' => append_sid("{$phpbb_root_path}downloads.$phpEx?view=modcp", "action=approve"))
		);
	}

	/*
	* check and create link if we must approve comments
	*/
	$total_comment_approve = $dl_mod->count_comments_approve();
	if ($total_comment_approve)
	{
		$approve_comment_string = ($total_comment_approve == 1) ? $user->lang['DL_APPROVE_OVERVIEW_ONE_COMMENT'] : $user->lang['DL_APPROVE_OVERVIEW_COMMENTS'];
		$template->assign_block_vars('approve_comments', array(
			'L_APPROVE_COMMENTS' => sprintf($approve_comment_string, $total_comment_approve),
			'U_APPROVE_COMMENTS' => append_sid("{$phpbb_root_path}downloads.$phpEx?view=modcp", "action=capprove"))
		);
	}

	/*
	* check and create link if user have permissions to view statistics
	*/
	$stats_view = $dl_mod->stats_perm();
	if ($stats_view)
	{
		$template->assign_var('S_STATS_VIEW_ON', true);
	}

	$template->assign_var('S_FOOTER_NAV_ON', true);

	/*
	* create overall mini statistics
	*/
	if ($config['dl_show_footer_stat'])
	{
		$total_size		= $dl_mod->get_dl_overall_size();
		$total_dl		= $dl_mod->get_sublevel_count();
		$total_extern	= sizeof($dl_mod->all_files(0, '', 'ASC', "AND extern = 1", 0, true, 'id'));

		$physical_limit	= $config['dl_physical_quota'];
		$total_size		= ($total_size > $physical_limit) ? $physical_limit : $total_size;

		$physical_limit	= $dl_mod->dl_size($physical_limit, 2);

		if ($total_dl && $total_size)
		{
			$total_size = $dl_mod->dl_size($total_size, 2);

			$template->assign_block_vars('total_stat', array(
				'TOTAL_STAT' => sprintf($user->lang['DL_TOTAL_STAT'], $total_dl, $total_size, $physical_limit, $total_extern))
			);
		}
	}

	/*
	* create the overall dl mod jumpbox
	*/
	$dl_jumpbox = '<form method="post" id="dl_jumpbox" action="' . append_sid("{$phpbb_root_path}downloads.$phpEx?sort_by=$sort_by&amp;order=$order").'" onsubmit="if(this.options[this.selectedIndex].value == -1){ return false; }">';
	$dl_jumpbox .= "\n<fieldset>" . $user->lang['JUMP_TO'] . ': <select name="cat" onchange="if(this.options[this.selectedIndex].value != -1){ forms[\'dl_jumpbox\'].submit() }">';
	$dl_jumpbox .= '<option value="-1">'.$user->lang['DL_CAT_NAME'].'</option>';
	$dl_jumpbox .= '<option value="-1">----------</option>';
	$dl_jumpbox .= $dl_mod->dl_dropdown(0, 0, $cat, 'auth_view');
	$dl_jumpbox .= '</select>&nbsp;<input type="submit" value="'.$user->lang['GO'].'" class="button2" /></fieldset></form>';

	if ($config['dl_user_traffic_once'])
	{
		$l_can_download_again = $user->lang['DL_CAN_DOWNLOAD_TRAFFIC_FOOTER'];
	}
	else
	{
		$l_can_download_again = '';
	}

	/*
	* load footer template and send default values
	*/
	$template->set_filenames(array(
		'dl_footer' => 'dl_mod/dl_footer.html')
	);

	$template->assign_vars(array(
		'L_DL_GREEN_EXPLAIN'	=> ($config['dl_traffic_off']) ? $user->lang['DL_GREEN_EXPLAIN_T_OFF'] : $user->lang['DL_GREEN_EXPLAIN'],
		'L_DL_WHITE_EXPLAIN'	=> ($config['dl_traffic_off']) ? $user->lang['DL_WHITE_EXPLAIN_T_OFF'] : $user->lang['DL_WHITE_EXPLAIN'],
		'L_DL_GREY_EXPLAIN'		=> ($config['dl_traffic_off']) ? $user->lang['DL_GREY_EXPLAIN_T_OFF'] : $user->lang['DL_GREY_EXPLAIN'],
		'L_DL_RED_EXPLAIN'		=> sprintf((($config['dl_traffic_off']) ? $user->lang['DL_RED_EXPLAIN_T_OFF'] : $user->lang['DL_RED_EXPLAIN']), $config['dl_posts']),
		'L_CAN_DOWNLOAD_AGAIN'	=> $l_can_download_again,

		'DL_MOD_RELEASE'		=> sprintf($user->lang['DL_MOD_VERSION'], $config['dl_mod_version']),

		'IMG_NEW_DL'			=> $user->img('dl_file_new', $user->lang['DL_NEW']),
		'IMG_EDIT_DL'			=> $user->img('dl_file_edit', $user->lang['DL_EDIT']),
		'IMG_BLUE'				=> $user->img('dl_blue', $user->lang['DL_BLUE_EXPLAIN_FOOT']),
		'IMG_GREEN'				=> $user->img('dl_green', $user->lang['DL_GREEN_EXPLAIN']),
		'IMG_WHITE'				=> $user->img('dl_white', $user->lang['DL_WHITE_EXPLAIN']),
		'IMG_GREY'				=> $user->img('dl_grey', $user->lang['DL_GREY_EXPLAIN']),
		'IMG_RED'				=> $user->img('dl_red', sprintf($user->lang['DL_RED_EXPLAIN_ALT'], $config['dl_posts'])),
		'IMG_YELLOW'			=> $user->img('dl_yellow', $user->lang['DL_YELLOW_EXPLAIN']),

		'S_DL_JUMPBOX'			=> $dl_jumpbox,
		'S_DL_TRANSLATION'		=> (isset($user->lang['DL_TRANSLATION'])) ? true : false,

		'U_STATS'				=> append_sid("{$phpbb_root_path}downloads.$phpEx?view=stat"),
		'U_CONFIG'				=> append_sid("{$phpbb_root_path}downloads.$phpEx?view=user_config"),
		'U_TODOLIST'			=> append_sid("{$phpbb_root_path}downloads.$phpEx?view=todo"),
		'U_OVERALL_VIEW'		=> append_sid("{$phpbb_root_path}downloads.$phpEx?view=overall"),
	));

	if ($config['dl_show_footer_stat'] && !$config['dl_traffic_off'])
	{
		if ($user->data['is_registered'])
		{
			if ($config['dl_overall_traffic'] - $config['dl_remain_traffic'] <= 0)
			{
				$overall_traffic = $dl_mod->dl_size($config['dl_overall_traffic']);
	
				$template->assign_block_vars('no_remain_traffic', array(
					'NO_OVERALL_TRAFFIC' => sprintf($user->lang['DL_NO_MORE_REMAIN_TRAFFIC'], $overall_traffic))
				);
			}
			else
			{
				$remain_traffic		= $config['dl_overall_traffic'] - $config['dl_remain_traffic'];
	
				$remain_text_out	= $user->lang['DL_REMAIN_OVERALL_TRAFFIC'] . '<b>' . $dl_mod->dl_size($remain_traffic, 2) . '</b>';
	
				$template->assign_block_vars('remain_traffic', array(
					'REMAIN_TRAFFIC' => $remain_text_out)
				);
	
				$user_traffic		= ($user->data['user_traffic'] > $remain_traffic) ? $remain_traffic : $user->data['user_traffic'];
	
				$user_traffic_out	= $dl_mod->dl_size($user_traffic, 2);
	
				$template->assign_block_vars('userdata', array(
					'ACCOUNT_TRAFFIC' => ($user->data['user_id'] <> ANONYMOUS) ? sprintf($user->lang['DL_ACCOUNT'], $user_traffic_out) : '')
				);
			}
		}

		if (!$user->data['is_registered'] || ($auth->acl_get('a_') && $user->data['is_registered']))	
		{
			if ($config['dl_overall_guest_traffic'] - $config['dl_remain_guest_traffic'] <= 0)
			{
				$overall_guest_traffic = $dl_mod->dl_size($config['dl_overall_guest_traffic']);
	
				$template->assign_block_vars('no_remain_guest_traffic', array(
					'NO_OVERALL_GUEST_TRAFFIC' => sprintf($user->lang['DL_NO_MORE_REMAIN_GUEST_TRAFFIC'], $overall_guest_traffic))
				);
			}
			else
			{
				$remain_guest_traffic	= $config['dl_overall_guest_traffic'] - $config['dl_remain_guest_traffic'];
	
				$remain_guest_text_out	= $user->lang['DL_REMAIN_OVERALL_GUEST_TRAFFIC'] . '<b>' . $dl_mod->dl_size($remain_guest_traffic, 2) . '</b>';
	
				$template->assign_block_vars('remain_guest_traffic', array(
					'REMAIN_GUEST_TRAFFIC' => $remain_guest_text_out)
				);
			}
		}
	}
	else
	{
		$template->assign_var('S_HIDE_FOOTER_DATA', true);
	}

	if ($config['dl_traffic_off'])
	{
		$template->assign_var('S_DL_TRAFFIC_OFF', true);
	}

	if ($config['dl_show_footer_legend'] && (!($view == 'search' && $submit) && !(in_array($view, array('user_config', 'todo', 'stat', 'upload', 'comment', 'bug_tracker'))) || $cat))
	{
		$template->assign_var('S_FOOTER_LEGEND', true);
	}

	if ($config['dl_todo_link_onoff'])
	{
		$template->assign_var('S_TODO_LINK', true);
	}

	if ($config['dl_uconf_link_onoff'])
	{
		$template->assign_var('S_U_CONFIG_LINK', true);
	}

	/*
	* display the page and return after this
	*/
	$template->assign_display('dl_footer');
}

?>