<?php

/** 
*
* @mod package		Download Mod 6
* @file				downloads.php 49 2011/02/13 OXPUS
* @copyright		(c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/*
* connect to phpBB
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/bbcode.' . $phpEx);

/*
* session management
*/
$user->session_begin();
$auth->acl($user->data);
$user->setup();

/*
* init and get various values
*/
$submit		= request_var('submit', '');
$preview	= request_var('preview', '');
$cancel		= request_var('cancel', '');
$confirm	= request_var('confirm', '');
$delete		= request_var('delete', '');
$cdelete	= request_var('cdelete', '');
$save		= request_var('save', '');
$post		= request_var('post', '');
$view		= request_var('view', '');
$show		= request_var('show', '');
$order		= request_var('order', '');
$action		= request_var('action', '');
$save		= request_var('save', '');
$goback		= request_var('goback', '');
$edit		= request_var('edit', '');
$bt_show	= request_var('bt_show', '');
$move		= request_var('move', '');
$fmove		= request_var('fmove', '');
$lock		= request_var('lock', '');
$sort		= request_var('sort', '');
$code		= request_var('code', '');
$sid		= request_var('sid', '');

$df_id		= request_var('df_id', 0);
$cat		= request_var('cat', 0);
$new_cat	= request_var('new_cat', 0);
$cat_id		= request_var('cat_id', 0);
$fav_id		= request_var('fav_id', 0);
$dl_id		= request_var('dl_id', 0);
$dlo		= request_var('dlo', 0);
$start		= request_var('start', 0);
$sort_by	= request_var('sort_by', 0);
$rate_point	= request_var('rate_point', 0);
$del_file	= request_var('del_file', 0);
$bt_filter	= request_var('bt_filter', -1);
$modcp		= request_var('modcp', 0);

$file_option	= request_var('file_ver_opt', 0);
$file_version	= request_var('file_version', 0);
$file_ver_del	= request_var('file_ver_del', array(0));

$dl_mod_is_active = true;
$dl_mod_link_show = true;
$dl_mod_is_active_for_admins = false;

if (!$config['dl_active'])
{
	if ($config['dl_off_now_time'])
	{
		$dl_mod_is_active = false;
	}
	else
	{
		$curr_time = (date('H', time()) * 60) + date('i', time());
		$off_from = (substr($config['dl_off_from'], 0, 2) * 60) + (substr($config['dl_off_from'], -2));
		$off_till = (substr($config['dl_off_till'], 0, 2) * 60) + (substr($config['dl_off_till'], -2));

		if ($curr_time >= $off_from && $curr_time < $off_till)
		{
			$dl_mod_is_active = false;
		}
	}
}

if (!$dl_mod_is_active && $auth->acl_get('a_') && $config['dl_on_admins'])
{
	$dl_mod_is_active = true;
	$dl_mod_is_active_for_admins = true;
}

if (!$dl_mod_is_active && $config['dl_off_hide'])
{
	$dl_mod_link_show = false;
}

if ($view != 'bug_tracker')
{
	if ($dl_mod_is_active_for_admins)
	{
		$template->assign_var('S_DL_MOD_OFFLINE_ADMINS', true);
	}
	else
	{
		if (!$dl_mod_is_active && $dl_mod_link_show)
		{
			trigger_error($user->lang['DL_OFF_MESSAGE']);
		}
	
		if (!$dl_mod_is_active)
		{
			redirect(append_sid("{$phpbb_root_path}index.$phpEx"));
		}
	}	
}

/*
* redirect to details or rating íf needed
*/
if ($cat && $df_id && ($view == 'detail' && $action != 'rate'))
{
	redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=$view&cat=$cat&df_id=$df_id&dlo=$dlo"));
}

/*
* include and create the main class
*/
include($phpbb_root_path . 'dl_mod/classes/class_dl_cache.' . $phpEx);
include($phpbb_root_path . 'dl_mod/classes/class_dlmod.' . $phpEx);

/*
* set the right values for comments
*/
if (!$action)
{
	if ($post)
	{
		$view = 'comment';
		$action = 'post';
	}

	if ($show)
	{
		$view = 'comment';
		$action = 'view';
	}

	if ($save)
	{
		$view = 'comment';
		$action = 'save';
	}

	if ($delete)
	{
		$view = 'comment';
		$action = 'delete';
	}

	if ($edit)
	{
		$view = 'comment';
		$action = 'edit';
	}
}

/*
* wanna have smilies ;-)
*/
if ($action == 'smilies')
{
	include($phpbb_root_path . '/includes/functions_posting.'.$phpEx);
	generate_smilies('window', 0);
	exit;
}

/*
* get the needed index
*/
$index = array();

switch ($view)
{
	case 'overall':
	case 'load':
	case 'detail':
	case 'comment':
	case 'upload':
	case 'modcp':
	case 'bug_tracker':

		$index = $dl_mod->full_index();
	break;

	default:

		$index = ($cat) ? $dl_mod->index($cat) : $dl_mod->index();
}

/*
* Build the navigation and check the permissions for the user
*/
$nav_string = array();
$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx");
$nav_string['name'][] = $user->lang['DL_CAT_TITLE'];

if ($dl_id || $df_id)
{
	$file_id = ($df_id) ? $df_id : $dl_id;

	$sql = 'SELECT cat, description FROM ' . DOWNLOADS_TABLE . "
		WHERE id = $file_id";
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$cat_id = (!$cat_id) ? $row['cat'] : $cat_id;
	$description = $row['description'];
	$db->sql_freeresult($result);
}
else
{
	$description = $user->lang['DL_DOWNLOAD'];
}

if ($cat_id)
{
	$cat_auth = $dl_mod->user_auth($cat_id, 'auth_view');

	if (!$cat_auth)
	{
		trigger_error($user->lang['DL_NO_PERMISSION']);
	}

	$tmp_nav = array();	
	$dl_mod->dl_nav($cat_id, 'url', $tmp_nav);

	if (isset($tmp_nav['link']))
	{
		for ($i = sizeof($tmp_nav['link']) - 1; $i >= 0; $i--)
		{
			$nav_string['link'][] = $tmp_nav['link'][$i];
			$nav_string['name'][] = $tmp_nav['name'][$i];
		}	
	}
}

switch ($view)
{
	case 'overall':
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=overall");
		$nav_string['name'][] = $user->lang['DL_OVERVIEW'];
	break;
	case 'detail':
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail&amp;df_id=$df_id");
		$nav_string['name'][] = $user->lang['DL_DETAIL'] . ': ' . $description;
	break;
	case 'comment':
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail&amp;df_id=$df_id");
		$nav_string['name'][] = $user->lang['DL_DETAIL'] . ': ' . $description;
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=comment&amp;df_id=$df_id&amp;cat_id=$cat_id&amp;action=view");
		$nav_string['name'][] = $user->lang['DL_COMMENTS'];
	break;
	case 'upload':
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?cat=$cat_id");
		$nav_string['name'][] = $index[$cat_id]['cat_name'];
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=upload&amp;cat_id=$cat_id");
		$nav_string['name'][] = $user->lang['DL_UPLOAD'];
	break;
	case 'modcp':
		if ($action == 'edit')
		{
			$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail&amp;df_id=$df_id");
			$nav_string['name'][] = $user->lang['DL_DETAIL'] . ': ' . $description;
			$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=modcp&amp;action=$action&amp;cat_id=$cat_id&amp;df_id=$df_id");
			$nav_string['name'][] = $user->lang['DL_EDIT_FILE'];
		}
		else if (!$fmove && $cat_id)
		{
			$tmp_nav = array();	
			$dl_mod->dl_nav($cat_id, 'url', $tmp_nav);
		
			for ($i = sizeof($tmp_nav['link']) - 1; $i >= 0; $i--)
			{
				$nav_string['link'][] = $tmp_nav['link'][$i];
				$nav_string['name'][] = $tmp_nav['name'][$i];
			}	
		}

		if ($action == 'approve')
		{
			$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=modcp&amp;action=approve");
			$nav_string['name'][] = $user->lang['MCP'] . ' <strong>&#8249;</strong> ' . $user->lang['DOWNLOADS'] . ' ' . $user->lang['DL_APPROVE'];
		}
		else if ($action == 'capprove')
		{
			$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=modcp&amp;action=capprove");
			$nav_string['name'][] = $user->lang['MCP'] . ' <strong>&#8249;</strong> ' . $user->lang['DL_APPROVE_COMMENTS'];
		}
		else if ($action != 'edit')
		{
			if (!$cat_id)
			{
				$cat_id = '';
			}
			$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=modcp&amp;cat_id=$cat_id");
			$nav_string['name'][] = $user->lang['MCP'];
		}
	break;
	case 'bug_tracker':
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=bug_tracker&amp;df_id=$df_id");
		$nav_string['name'][] = $user->lang['DL_BUG_TRACKER'];
	break;
	case 'stat':
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=stat");
		$nav_string['name'][] = $user->lang['DL_STATS'];
	break;
	case 'user_config':
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=user_config");
		$nav_string['name'][] = $user->lang['DL_CONFIG'];
	break;
	case 'search':
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=search");
		$nav_string['name'][] = $user->lang['SEARCH'];
	break;
	case 'todo':
		$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=todo");
		$nav_string['name'][] = $user->lang['DL_MOD_TODO'];

		if ($action == 'edit')
		{
			$nav_string['link'][] = append_sid("{$phpbb_root_path}downloads.$phpEx?view=todo", 'action=edit');
			$nav_string['name'][] = $user->lang['DL_EDIT_FILE'];
		}
	break;
	default:
		if ($cat)
		{
			$tmp_nav = array();
			$dl_mod->dl_nav($cat, 'url', $tmp_nav);

			for ($i = sizeof($tmp_nav['link']) - 1; $i >= 0; $i--)
			{
				$nav_string['link'][] = $tmp_nav['link'][$i];
				$nav_string['name'][] = $tmp_nav['name'][$i];
			}	
		}
}

for ($i = 0; $i < sizeof($nav_string['link']); $i++)
{
	$template->assign_block_vars('dl_nav', array(
		'L_DOWNLOAD'	=> $nav_string['name'][$i], 
		'U_DOWNLOAD'	=> $nav_string['link'][$i],
	));
}

if ($view != 'load' && $view != 'broken')
{
	$sql_where = '';

	if (!$user->data['is_registered'])
	{
		$sql = 'SELECT session_id FROM ' . SESSIONS_TABLE . '
			WHERE session_user_id = 1';
		$result = $db->sql_query($sql);

		$guest_sids = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$guest_sids[] = $row['session_id'];
		}
		$db->sql_freeresult($result);
		
		$sql_where = ' AND ' . $db->sql_in_set('session_id', $guest_sids, true);
	}

	$sql = 'DELETE FROM ' . DL_HOTLINK_TABLE . '
		WHERE user_id = ' . $user->data['user_id'] . "
			$sql_where";
	$db->sql_query($sql);
}

/*
* create todo list
*/
if ($view == 'todo')
{
	$todo_access_ids = $dl_mod->full_index(0, 0, 0, 2);
	$total_todo_ids = sizeof($todo_access_ids);

	if ($action == 'edit')
	{
		if ($total_todo_ids > 0 && $user->data['is_registered'])
		{
			include($phpbb_root_path . 'dl_mod/includes/dl_todo.' . $phpEx);
		}
		else
		{
			trigger_error($user->lang['DL_NO_PERMISSION'], E_USER_WARNING);
		}
	}
	else
	{
		$dl_todo = array();
		$dl_todo = $dl_mod->get_todo();
	
		page_header($user->lang['DL_MOD_TODO']);
	
		$template->set_filenames(array(
			'body' => 'dl_mod/dl_todo_body.html')
		);
	
		$template->assign_vars(array(
			'L_DESCRIPTION'	=> $user->lang['DL_FILE_DESCRIPTION'],
			'L_DL_TOP'		=> $user->lang['DL_CAT_TITLE'],
			'L_DL_TODO'		=> $user->lang['DL_MOD_TODO'],
			'U_TODO_EDIT'	=> append_sid("{$phpbb_root_path}downloads.$phpEx?view=todo", 'action=edit'),
			'U_DL_TOP'		=> append_sid("{$phpbb_root_path}downloads.$phpEx"))
		);

		if ($total_todo_ids > 0 && $user->data['is_registered'])
		{
			$template->assign_var('S_TODO_EDIT', true);
		}
	
		if (isset($dl_todo['file_name'][0]) && sizeof($dl_todo['file_name']))
		{
			for ($i = 0; $i < sizeof($dl_todo['file_name']); $i++)
			{
				$template->assign_block_vars('todolist_row', array(
					'FILENAME'		=> $dl_todo['file_name'][$i],
					'FILE_LINK'		=> $dl_todo['file_link'][$i],
					'HACK_VERSION'	=> $dl_todo['hack_version'][$i],
					'TODO'			=> $dl_todo['todo'][$i])
				);
			}
		}
		else
		{
			$template->assign_var('S_NO_TODOLIST', true);
		}
	}
}

/*
* handle reported broken download
*/
if ($view == 'broken' && $df_id && $cat_id && ($user->data['is_registered'] || (!$user->data['is_registered'] && $config['dl_report_broken'])))
{
	if ($config['dl_report_broken_vc'])
	{
		$code_match = false;

		include($phpbb_root_path . 'includes/captcha/captcha_factory.' . $phpEx);
		$captcha = phpbb_captcha_factory::get_instance($config['captcha_plugin']);
		$captcha->init(CONFIRM_POST);

		$s_hidden_fields = $error = array();

		if ($confirm == 'code')
		{
			if (!check_form_key('dl_report'))
			{
				trigger_error('FORM_INVALID');
			}

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
	            $s_hidden_fields = array_merge($s_hidden_fields, $captcha->get_hidden_fields());
	            $code_match = false;
	        }
		}
		else if (!$captcha->is_solved()) 
		{
			add_form_key('dl_report');

			page_header();
	
			$template->set_filenames(array(
				'body' => 'dl_mod/dl_report_code_body.html')
			);

			$s_hidden_fields = array_merge($s_hidden_fields, array(
				'cat_id' => $cat_id,
				'df_id' => $df_id,
				'view' => 'broken',
				'confirm' => 'code'
			));

			$template->assign_vars(array(
				'MESSAGE_TITLE'		=> $user->lang['DL_BROKEN'],
				'MESSAGE_TEXT'		=> $user->lang['DL_REPORT_CONFIRM_CODE'],

				'S_CONFIRM_ACTION'	=> append_sid("{$phpbb_root_path}downloads.$phpEx"),
				'S_HIDDEN_FIELDS'	=> build_hidden_fields($s_hidden_fields),
	            'S_CONFIRM_CODE'	=> true,
	            'CAPTCHA_TEMPLATE'	=> $captcha->get_template(),
			));

			page_footer();
		}
	}

	if ($config['dl_report_broken_vc'] && !$code_match)
	{
		trigger_error('DL_REPORT_BROKEN_VC_MISMATCH');
	}
	else
	{
		$sql = 'UPDATE ' . DOWNLOADS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
			'broken' => true)) . ' WHERE id = ' . (int) $df_id;
		$db->sql_query($sql);

		$processing_user = $dl_mod->dl_auth_users($cat_id, 'auth_mod');

		$report_notify_text = request_var('report_notify_text', '');
		$report_notify_text = ($report_notify_text) ? sprintf($user->lang['DL_REPORT_NOTIFY_TEXT'], $report_notify_text) : '';

		$sql = 'SELECT user_email, username, user_lang FROM ' . USERS_TABLE . '
			WHERE ' . $db->sql_in_set('user_id', explode(', ', $processing_user)) . '
				OR user_type = ' . USER_FOUNDER . '
			GROUP BY user_email, username, user_lang';
		$result = $db->sql_query($sql);

		include($phpbb_root_path . 'includes/functions_messenger.' . $phpEx);
		$messenger = new messenger();

		while ($row = $db->sql_fetchrow($result))
		{
			$username = (!$user->data['is_registered']) ? $user->lang['DL_A_GUEST'] : $user->data['username']; 

			$messenger->template('downloads_report_broken', $row['user_lang']);
			$messenger->to($row['user_email'], $row['username']);

			$messenger->assign_vars(array(
				'BOARD_EMAIL' => $config['board_email_sig'],
				'SITENAME' => $config['sitename'],
				'REPORTER' => $username,
				'REPORT_NOTIFY_TEXT' => $report_notify_text,
				'USERNAME' => $row['username'],
				'U_DOWNLOAD' => generate_board_url() . "/downloads.$phpEx?view=detail&cat_id=$cat_id&df_id=$df_id")
			);

			$messenger->send(NOTIFY_EMAIL);
		}
		$messenger->save_queue();
	}

	redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&df_id=$df_id&cat_id=$cat_id"));
}

/*
* reset reported broken download if allowed
*/
if ($view == 'unbroken' && $df_id && $cat_id)
{
	$cat_auth = array();
	$cat_auth = $dl_mod->dl_cat_auth($cat_id);

	if ($index[$cat_id]['auth_mod'] || $cat_auth['auth_mod'] || ($auth->acl_get('a_') && $user->data['is_registered']))
	{
		$sql = 'UPDATE ' . DOWNLOADS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
			'broken' => 0)) . ' WHERE id = ' . (int) $df_id;
		$db->sql_query($sql);
	}

	redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&df_id=$df_id&cat_id=$cat_id"));
}

/*
* set favorite for the choosen download
*/
if ($view == 'fav' && $df_id && $cat_id && $user->data['is_registered'])
{
	$sql = 'SELECT COUNT(fav_dl_id) AS total FROM ' . DL_FAVORITES_TABLE . '
		WHERE fav_dl_id = ' . (int) $df_id . '
			AND fav_user_id = ' . $user->data['user_id'];
	$result = $db->sql_query($sql);
	$fav_check = $db->sql_fetchfield('total');
	$db->sql_freeresult($result);

	if (!$fav_check)
	{
		$sql = 'INSERT INTO ' . DL_FAVORITES_TABLE . ' ' . $db->sql_build_array('INSERT', array(
			'fav_dl_id'		=> (int) $df_id,
			'fav_dl_cat'	=> (int) $cat_id,
			'fav_user_id'	=> $user->data['user_id']));
		$db->sql_query($sql);
	}

	redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&df_id=$df_id&cat_id=$cat_id"));
}

/*
* drop favorite for the choosen download
*/
if ($view == 'unfav' && $fav_id && $df_id && $cat_id && $user->data['is_registered'])
{
	$sql = 'DELETE FROM ' . DL_FAVORITES_TABLE . '
		WHERE fav_id = ' . (int) $fav_id . '
			AND fav_dl_id = ' . (int) $df_id . '
			AND fav_user_id = ' . $user->data['user_id'];
	$db->sql_query($sql);

	redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&df_id=$df_id&cat_id=$cat_id"));
}

/*
* open the bug tracker, if choosen and possible
*/
if ($view == 'bug_tracker')
{
	if ($user->data['is_registered'])
	{
		$bug_tracker = $dl_mod->bug_tracker();
		if ($bug_tracker)
		{
			$inc_module = true;
			page_header($user->lang['DL_BUG_TRACKER']);
			include($phpbb_root_path . 'dl_mod/includes/dl_bug_tracker.' . $phpEx);
		}
		else
		{
			$view = '';
		}
	}
	else
	{
		$view = '';
	}
}

/*
* No real hard work until here? Must at least run one of the default modules?
*/
$inc_module = false;
if ($view == 'stat')
{
	/*
	* getting some stats
	*/
	$inc_module = true;
	page_header($user->lang['DL_STATS']);
	include($phpbb_root_path . 'dl_mod/includes/dl_stats.' . $phpEx);
}
else if ($view == 'user_config')
{
	/*
	* drop choosen favorites
	*/
	$fav_ids = (isset($_POST['fav_id'])) ? $_POST['fav_id'] : array();

	if ($action == 'drop' && sizeof($fav_ids))
	{
		$sql_fav_ids = array();
		for ($i = 0; $i < sizeof($fav_ids); $i++)
		{
			$sql_fav_ids[] = intval($fav_ids[$i]);
		}

		$sql = 'DELETE FROM ' . DL_FAVORITES_TABLE . '
			WHERE ' . $db->sql_in_set('fav_id', $sql_fav_ids) . '
				AND fav_user_id = ' . $user->data['user_id'];
		$db->sql_query($sql);

		$action = '';
		$submit = '';
		$fav_ids = array();
	}

	/*
	* display the user config for the downloads
	*/
	$inc_module = true;
	page_header($user->lang['DL_CONFIG']);
	include($phpbb_root_path . 'dl_mod/includes/dl_user_config.' . $phpEx);
}
else if ($view == 'detail')
{
	$cat_auth = array();
	$cat_auth = $dl_mod->dl_cat_auth($cat_id);

	if (!$auth->acl_get('a_') && !$cat_auth['auth_mod'])
	{
		$modcp = 0;
	}

	/*
	* default entry point for download details
	*/
	$dl_files = array();
	$dl_files = $dl_mod->all_files(0, '', 'ASC', '', $df_id, $modcp, '*');

	/*
	* check the permissions
	*/
	$check_status = array();
	$check_status = $dl_mod->dl_status($df_id);
	if (!$dl_files['id'])
	{
		trigger_error('DL_NO_PERMISSION');
	}

	/*
	* save rating into database after submitting
	*/
	if ($submit && $action == 'rate')
	{
		if (!check_form_key('dl_rating'))
		{
			trigger_error('FORM_INVALID');
		}

		$rate_user_id = $user->data['user_id'];
		$rate_point = round($rate_point, 2);

		$sql = 'INSERT INTO ' . DL_RATING_TABLE . ' ' . $db->sql_build_array('INSERT', array(
			'dl_id'			=> $df_id,
			'user_id'		=> $rate_user_id,
			'rate_point'	=> $rate_point));
		$db->sql_query($sql);

		$sql = 'SELECT AVG(rate_point) AS rating FROM ' . DL_RATING_TABLE . "
			WHERE dl_id = $df_id
			GROUP BY dl_id";
		$result = $db->sql_query($sql);
		$new_rating = ceil($db->sql_fetchfield('rating'));
		$db->sql_freeresult($result);

		$sql = 'UPDATE ' . DOWNLOADS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
			'rating' => $new_rating)) . " WHERE id = $df_id";
		$db->sql_query($sql);

		$view = 'detail';
		$action = '';
		$submit = '';
		$cancel = '';

		if ($dlo == 1)
		{
			redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=overall"));
		}
		else if ($dlo == 2 && $df_id)
		{
			redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&df_id=$df_id"));
		}
		else if (!$dlo)
		{
			redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "cat=$cat&start=$start"));
		}
	}

	$inc_module = true;
	page_header($user->lang['DOWNLOADS'] . ' - ' . $dl_files['description']);
	include($phpbb_root_path . 'dl_mod/includes/dl_details.' . $phpEx);
}
else if ($view == 'search')
{
	/*
	* open the search for downloads
	*/
	$inc_module = true;
	page_header($user->lang['SEARCH'].' '.$user->lang['DOWNLOADS']);
	include($phpbb_root_path . 'dl_mod/includes/dl_search.' . $phpEx);
}
else if ($view == 'popup')
{
	/*
	* display the popup for a new or changed download
	*/
	$gen_simple_header = TRUE;
	page_header();

	$template->set_filenames(array(
		'body' => 'ucp_pm_popup.html')
	);

	$template->assign_vars(array(
		'L_CLOSE_WINDOW' => $user->lang['CLOSE_WINDOW'],
		'MESSAGE' => sprintf($user->lang['NEW_DOWNLOAD'], '<a href="javascript:jump_to_inbox(\'' . append_sid("{$phpbb_root_path}downloads.$phpEx") . '\');">', '</a>'))	
	);

	page_footer();

	exit;
}
else if ($view == 'load')
{
	/*
	* check for hotlinking
	*/
	$hotlink_disabled = false;
	$sql_where = '';

	if ($config['dl_prevent_hotlink'])
	{
		$hotlink_id = request_var('hotlink_id', '');

		if (!$hotlink_id)
		{
			$hotlink_disabled = true;
		}
		else
		{
			if (!$user->data['is_registered'])
			{
				$sql_where = " AND session_id = '" . $user->data['session_id'] . "' ";
			}

			$sql = 'SELECT COUNT(hotlink_id) AS total FROM ' . DL_HOTLINK_TABLE . '
				WHERE user_id = ' . $user->data['user_id'] . "
					AND hotlink_id = '" . $hotlink_id . "'
					$sql_where";
			$result = $db->sql_query($sql);
			$total_hotlinks = $db->sql_fetchfield('total');
			$db->sql_freeresult($result);

			if ($total_hotlinks <> 1)
			{
				$hotlink_disabled = true;
			}
		}

		if ($hotlink_disabled)
		{
			if ($config['dl_hotlink_action'])
			{
				redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&df_id=$df_id"));
			}
			else
			{
				trigger_error('DL_HOTLINK_PERMISSION');
			}
		}
	}

	if ($config['dl_download_vc'])
	{
			if (!$user->data['is_registered'])
			{
				$sql_where = " AND session_id = '" . $user->data['session_id'] . "' ";
			}

			$sql = 'SELECT code FROM ' . DL_HOTLINK_TABLE . '
				WHERE user_id = ' . $user->data['user_id'] . "
					AND hotlink_id = 'dlvc'
					$sql_where";
			$result = $db->sql_query($sql);
			$row_code = $db->sql_fetchfield('code');
			$db->sql_freeresult($result);
			
			if ($row_code != $code)
			{
				trigger_error('DL_VC_PERMISSION');
			}
	}

	/*
	* THE basic function to get the download!
	*/
	$dl_file = array();
	$dl_file = $dl_mod->all_files(0, '', 'ASC', '', $df_id, $modcp, '*');

	$cat_id = ($modcp) ? $cat_id : $dl_file['cat'];

	if ($modcp && $cat_id)
	{
		$cat_auth = array();
		$cat_auth = $dl_mod->dl_cat_auth($cat_id);

		if (!$auth->acl_get('a_') && !$cat_auth['auth_mod'])
		{
			$modcp = 0;
		}
	}
	else
	{
		$modcp = 0;
	}
		
	/*
	* check the permissions
	*/
	$check_status = array();
	$check_status = $dl_mod->dl_status($df_id);
	$status = $check_status['auth_dl'];
	$cat_auth = array();
	$cat_auth = $dl_mod->dl_cat_auth($cat_id);

	if ($modcp)
	{
		$check_status['auth_dl'] = TRUE;
	}

	$browser = $dl_mod->dl_client();

	if ($check_status['auth_dl'] && $dl_file['id'])
	{
		/*
		* fix the mod and admin auth if needed
		*/
		if (!$dl_file['approve'])
		{
			if ((($cat_auth['auth_mod'] || $index[$cat_id]['auth_mod']) && !$auth->acl_get('a_')) || ($auth->acl_get('a_') && $user->data['is_registered']))
			{
				$status = TRUE;
			}
		}

		if (!$config['dl_traffic_off'])
		{
			if ($user->data['is_registered'])
			{
				if ($config['dl_overall_traffic'] - $config['dl_remain_traffic'] < $dl_file['file_size'])
				{
					$status = false;
				}
			}
			else
			{
				if ($config['dl_overall_guest_traffic'] - $config['dl_remain_guest_traffic'] < $dl_file['file_size'])
				{
					$status = false;
				}
			}
		}
			
		/*
		* Antispam-Modul
		*
		* Block downloads for users who must have at least the given number of posts to download a file
		* and tries to download after spamming in the forum more than the needed number of posts in the last 24 hours	
		*/
		if ($user->data['user_posts'] >= $config['dl_posts'] && !$dl_file['extern'] && !$dl_file['free'] && $config['dl_antispam_posts'] && $config['dl_antispam_hours'])
		{
			$sql = 'SELECT COUNT(post_id) AS total_posts FROM ' . POSTS_TABLE . '
				WHERE poster_id = ' . $user->data['user_id'] . '
					AND post_time >= ' . (time() - ($config['dl_antispam_hours'] * 3600));
			$result = $db->sql_query($sql);
			$post_count = $db->sql_fetchfield('total_posts');
			$db->sql_freeresult($result);

			if ($post_count >= $config['dl_antispam_posts'])
			{
				$status = false;
			}
		}

		// Prepare correct file for download
		if ($file_version)
		{
			$sql = 'SELECT ver_file_name, ver_real_file, ver_file_size FROM ' . DL_VERSIONS_TABLE . '
				WHERE ver_id = ' . $file_version;
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$dl_file_name = $row['ver_file_name'];
			$dl_real_file = $row['ver_real_file'];
			$dl_file_size = $row['ver_file_size'];
			$db->sql_freeresult($result);

			if (!$dl_file_name)
			{
				trigger_error('DL_NO_ACCESS');
			}
			else
			{
				if ($dl_file['extern'])
				{
					$dl_file['file_name'] = $dl_file_name;
				}
				else
				{
					$dl_file['file_name'] = $dl_file_name;
					$dl_file['real_file'] = $dl_real_file;
					$dl_file['file_size'] = $dl_file_size;
				}
			}			
		}
		
		/*
		* update all statistics
		*/
		if ($status)
		{
			$sql = 'UPDATE ' . DOWNLOADS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
				'klicks'			=> $dl_file['klicks'] + 1,
				'overall_klicks'	=> $dl_file['overall_klicks'] + 1,
				'last_time'			=> time(),
				'down_user'			=> $user->data['user_id'])) . " WHERE id = $df_id";
			$db->sql_query($sql);

			if ($user->data['is_registered'] && !$dl_file['free'] && !$dl_file['extern'] && !$config['dl_traffic_off']) 
			{
				$count_user_traffic = true;

				if ($config['dl_user_traffic_once'])
				{
					$sql = 'SELECT COUNT(dl_id) AS total FROM ' . DL_NOTRAF_TABLE . '
						WHERE user_id = ' . $user->data['user_id'] . '
							AND dl_id = ' . $dl_file['id'];
					$result = $db->sql_query($sql);
					$still_count = $db->sql_fetchfield('total');
					$db->sql_freeresult($result);

					if ($still_count)
					{
						$count_user_traffic = false;
					}
				}

				if ($count_user_traffic)
				{
					$user->data['user_traffic'] -= $dl_file['file_size'];

					$sql = 'UPDATE ' . USERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
						'user_traffic' => $user->data['user_traffic'])) . ' WHERE user_id = ' . $user->data['user_id']; 
					$db->sql_query($sql);

					if ($config['dl_user_traffic_once'])
					{
						$sql = 'INSERT INTO ' . DL_NOTRAF_TABLE . ' ' . $db->sql_build_array('INSERT', array(
							'user_id'	=> $user->data['user_id'],
							'dl_id'		=> $dl_file['id'])); 
						$db->sql_query($sql);
					}
				}
			}

			if (!$dl_file['extern'] && !$config['dl_traffic_off'])
			{
				$remain_traffic = ($user->data['is_registered']) ? 'dl_remain_traffic' : 'dl_remain_guest_traffic';

				$new_remain = $config[$remain_traffic] + $dl_file['file_size'];

				$sql = 'UPDATE ' . DL_REM_TRAF_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
					'config_value' => $new_remain)) . " WHERE config_name = '$remain_traffic'";
				$db->sql_query($sql);

				$sql = 'SELECT cat_traffic_use FROM ' . DL_CAT_TRAF_TABLE . "
					WHERE cat_id = $cat_id";
				$result = $db->sql_query($sql);
				$cat_traffic_use = $db->sql_fetchfield('cat_traffic_use') + $dl_file['file_size'];
				$db->sql_freeresult($result);

				$sql = 'UPDATE ' . DL_CAT_TRAF_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
					'cat_traffic_use' => $cat_traffic_use)) . " WHERE cat_id = $cat_id";
				$db->sql_query($sql);
			}

			if ($index[$cat_id]['statistics'])
			{
				if ($index[$cat_id]['stats_prune'])
				{
					$stat_prune = $dl_mod->dl_prune_stats($cat_id, $index[$cat_id]['stats_prune']);
				}

				$sql = 'INSERT INTO ' . DL_STATS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
					'cat_id'		=> $cat_id,
					'id'			=> $df_id,
					'user_id'		=> $user->data['user_id'],
					'username'		=> $user->data['username'],
					'traffic'		=> $dl_file['file_size'],
					'direction'		=> 0,
					'user_ip'		=> $user->data['session_ip'],
					'browser'		=> $browser,
					'time_stamp'	=> time()));
				$db->sql_query($sql);
			}
		}

		/*
		* not it is time and we are ready to rumble: send the file to the user client to download it there!
		*/
		if ($dl_file['extern'])
		{
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: ".str_replace('&amp;', '&', $dl_file['file_name']));
		}
		else if ($status)
		{
		 	$dl_file_url = $phpbb_root_path . $config['dl_download_dir'] . $index[$cat_id]['cat_path'] . $dl_file['real_file'];

			$dl_file_size = sprintf("%u", @filesize($dl_file_url));

			$mem_limit = ini_get('memory_limit');
			
			$last = strlen($mem_limit) - 1;
			$max_mem_limit = (int)$mem_limit;

			switch($mem_limit{$last})
			{
				case 'G':
					$max_mem_limit *= 1024;
				case 'M':
					$max_mem_limit *= 1024;
				case 'K':
					$max_mem_limit *= 1024;
			}

			if ($dl_file_size > $max_mem_limit || $config['dl_method'] == 3)
			{
				header("Content-Disposition: attachment; filename=" . $dl_file['file_name']);
				header("Content-Type: application/octet-stream");
				header("Content-Description: File Transfer");
				header("Content-Length: " . $dl_file_size);
				header("Cache-Control: ");
				header("Pragma: ");
				header("Connection: close");

				$fp = fopen($dl_file_url, "rb");
				while (!feof($fp))
				{
				    echo fread($fp, 4096);
				}
				fclose($fp);
			}
			else
			{
				if ($config['dl_method'] == 1)
				{
					header("Content-Type: application/octet-stream");
					header("Content-Disposition: attachment; filename=\"" . $dl_file['file_name'] . "\"");
					readfile($dl_file_url);
				}
				else if ($config['dl_method'] == 2)
				{
					$size = sprintf("%u", @filesize($dl_file_url));

					header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
					header("Content-Type: application/octet-stream");
					header("Content-Length: ".$size);
					header("Content-Transfer-Encoding: binary");
					header("Content-Disposition: attachment; filename=\"" . $dl_file['file_name'] . "\"");

					if ($size > $config['dl_method_quota'])
					{
						$dl_mod->readfile_chunked($dl_file_url);
					}
					else
					{
						readfile($dl_file_url);
					}
				}
			}
		}
		else
		{
			trigger_error('DL_NO_ACCESS');
		}		
	}
	else
	{
		trigger_error('DL_NO_ACCESS');
	}

	exit;
}
else if ($view == 'comment')
{
	/*
	* check general permissions
	*/
	if (!$dl_mod->cat_auth_comment_read($cat_id))
	{
		trigger_error('DL_NO_PERMISSION');
	}

	$cat_auth = array();
	$cat_auth = $dl_mod->dl_cat_auth($cat_id);

	if (!$cat_auth['auth_view'] && !$index[$cat_id]['auth_view'] && !$auth->acl_get('a_'))
	{
			trigger_error('DL_NO_PERMISSION');
	}

	/*
	* redirect to download details if comments are disabled for this category
	*/
	if (!$index[$cat_id]['comments'])
	{
		$view = 'detail';
		$action = '';
	}

	/*
	* redirect to comments list if comment editing was canceled
	*/
	if ($goback)
	{
		$view = 'comment';
		$action = 'view';
		$cancel = '';
	}

	/*
	* someone cancel a job? list the list again and again...
	*/
	if ($cancel && $action == 'delete')
	{
		$action = 'view';
	}

	/*
	* take the message if entered
	*/
	$comment_text = utf8_normalize_nfc(request_var('message', '', true));

	/*
	* check permissions to manage comments
	*/
	$sql = 'SELECT user_id FROM ' . DL_COMMENTS_TABLE . "
		WHERE id = $df_id
			AND dl_id = $dl_id
			AND approve = " . true . "
			AND cat_id = $cat_id";
	$result = $db->sql_query($sql);
	$row_user = $db->sql_fetchfield('user_id');
	$db->sql_freeresult($result);

	$allow_manage = 0;
	if ($row_user == $user->data['user_id'] || $cat_auth['auth_mod'] || $index[$cat_id]['auth_mod'] || ($auth->acl_get('a_') && $user->data['is_registered']))
	{
		$allow_manage = TRUE;
	}

	$deny_post = 0;
	if (!$dl_mod->cat_auth_comment_post($cat_id))
	{
		$allow_manage = 0;
		$deny_post = TRUE;
	}

	/*
	* open the comments view for this download if allowed
	*/
	if ($action)
	{
		$inc_module = true;
		$page_title = $user->lang['DL_COMMENTS'];
		include($phpbb_root_path . 'dl_mod/includes/dl_comments.' . $phpEx);
	}
	else
	{
		if ($df_id)
		{
			redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&df_id=$df_id"));
		}
		else if ($cat_id)
		{
			redirect(append_sid("{$phpbb_root_path}downloads.$phpEx", "cat=$cat_id"));
		}
		else
		{
			redirect(append_sid("{$phpbb_root_path}downloads.$phpEx"));
		}
	}
}
else if ($view == 'upload')
{
	$cat_auth = array();
	$cat_auth = $dl_mod->dl_cat_auth($cat_id);

	$physical_size = $dl_mod->read_dl_sizes($phpbb_root_path . $config['dl_download_dir']);
	if ($physical_size >= $config['dl_physical_quota'])
	{
		trigger_error('DL_BLUE_EXPLAIN');
	}

	if (($config['dl_stop_uploads'] && !$auth->acl_get('a_')) || !sizeof($index) || (!$cat_auth['auth_up'] && !$index[$cat_id]['auth_up'] && !$auth->acl_get('a_')))
	{
		trigger_error('DL_NO_PERMISSION');
	}

	$inc_module = true;
	page_header($user->lang['DL_UPLOAD']);
	include($phpbb_root_path . 'dl_mod/includes/dl_upload.' . $phpEx);
}
else if ($view == 'modcp')
{
	$deny_modcp = 0;

	if (($action == 'edit' || $action == 'save') && $config['dl_edit_own_downloads'])
	{
		$sql = 'SELECT add_user FROM ' . DOWNLOADS_TABLE . "
			WHERE id = $df_id";
		$result = $db->sql_query($sql);
		$add_user = $db->sql_fetchfield('add_user');
		$db->sql_freeresult($result);

		if ($add_user == $user->data['user_id'])
		{
			$own_edit = true;
		}
		else
		{
			$own_edit = false;
		}
	}
	else
	{
		$own_edit = false;
	}

	if (isset($own_edit) && $own_edit == true)
	{
		$access_cat[0] = $cat_id;
		$deny_modcp = 0;
	}
	else
	{
		$access_cat = array();
		$access_cat = $dl_mod->full_index(0, 0, 0, 2);

		if (!sizeof($access_cat) && !$auth->acl_get('a_'))
		{
			$deny_modcp = TRUE;
		}
	}

	$cat_auth = array();
	$cat_auth = $dl_mod->dl_cat_auth($cat_id);

	if (!$cat_id && !$cat_auth['auth_mod'] && !isset($index[$cat_id]['auth_mod']) && !$auth->acl_get('a_'))
	{
		$deny_modcp = TRUE;
	}

	if ($deny_modcp)
	{
		$view = '';
		$action = '';
	}
	else
	{
		if ($cancel && $file_option == 3)
		{
			redirect(append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "&amp;df_id=$df_id"));
		}

		$action = ($move) ? 'move' : $action;
		$action = ($delete) ? 'delete' : $action;
		$action = ($cdelete) ? 'cdelete' : $action;
		$action = ($lock) ? 'lock' : $action;
		$action = ($cancel) ? 'manage' : $action;

		$action = (!$action) ? 'manage' : $action;

		if ((isset($own_edit) && $own_edit == true) && $action != 'edit' && $action != 'save' && (!$auth->acl_get('a_') || $deny_modcp))
		{
			$view = '';
			$action = '';
		}
		else
		{
			$dl_id = (isset($_POST['dlo_id'])) ? $_POST['dlo_id'] : array();
	
			if ($fmove && ($auth->acl_get('a_') && $user->data['is_registered']))
			{
				if ($fmove == 'ABC')
				{
					$sql = 'SELECT id FROM ' . DOWNLOADS_TABLE . "
						WHERE cat = $cat_id
						ORDER BY description ASC";
					$result = $db->sql_query($sql);
				}
				else	
				{
	
					$sql = 'SELECT sort FROM ' . DOWNLOADS_TABLE . "
						WHERE id = $df_id";
					$result = $db->sql_query($sql);
					$sort = $db->sql_fetchfield('sort');
					$db->sql_freeresult($result);

					$sql_move = ($fmove == 1) ? $sort + 15 : $sort - 15;

					$sql = 'UPDATE ' . DOWNLOADS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
						'sort' => $sql_move)) . " WHERE id = $df_id";
					$db->sql_query($sql);
	
					$sql = 'SELECT id FROM ' . DOWNLOADS_TABLE . "
						WHERE cat = $cat_id
						ORDER BY sort ASC";
					$result = $db->sql_query($sql);
				}
	
				$i = 10;
	
				while($row = $db->sql_fetchrow($result))
				{
					$sql_sort = 'UPDATE ' . DOWNLOADS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
						'sort' => $i)) . ' WHERE id = ' . $row['id'];
					$db->sql_query($sql_sort);
					$i += 10;
				}
	
				$db->sql_freeresult($result);
	
				$action = 'manage';
			}

			$fmove = '';

			$inc_module = true;
			include($phpbb_root_path . 'dl_mod/includes/dl_modcp.' . $phpEx);
		}
	}
}

/*
* sorting downloads
*/
if ($config['dl_sort_preform'])
{
	$sort_by = 0;
	$order = 'ASC';
}
else
{
	$sort_by = (!$sort_by) ? $user->data['user_dl_sort_fix'] : $sort_by;
	$order = (!$order) ? (($user->data['user_dl_sort_dir']) ? 'DESC' : 'ASC') : $order;
}

switch ($sort_by)
{
	case 1:
		$sql_sort_by = 'description';
		break;
	case 2:
		$sql_sort_by = 'file_name';
		break;
	case 3:
		$sql_sort_by = 'klicks';
		break;
	case 4:
		$sql_sort_by = 'free';
		break;
	case 5:
		$sql_sort_by = 'extern';
		break;
	case 6:
		$sql_sort_by = 'file_size';
		break;
	case 7:
		$sql_sort_by = 'change_time';
		break;
	case 8:
		$sql_sort_by = 'rating';
		break;
	default:
		$sql_sort_by = 'sort';
}

$sql_order = ($order == 'DESC') ? 'DESC' : 'ASC';

if (!$config['dl_sort_preform'] && $user->data['user_dl_sort_opt'])
{
	$template->assign_var('S_SORT_OPTIONS', true);

	$s_sort_by = '<select name="sort_by" onchange="forms[\'dl_mod\'].submit()">';
	$s_sort_by .= '<option value="0">'.$user->lang['DL_DEFAULT_SORT'].'</option>';
	$s_sort_by .= '<option value="1">'.$user->lang['DL_FILE_DESCRIPTION'].'</option>';
	$s_sort_by .= '<option value="2">'.$user->lang['DL_FILE_NAME'].'</option>';
	$s_sort_by .= '<option value="3">'.$user->lang['DL_KLICKS'].'</option>';
	$s_sort_by .= '<option value="4">'.$user->lang['DL_FREE'].'</option>';
	$s_sort_by .= '<option value="5">'.$user->lang['DL_EXTERN'].'</option>';
	$s_sort_by .= '<option value="6">'.$user->lang['DL_FILE_SIZE'].'</option>';
	$s_sort_by .= '<option value="7">'.$user->lang['LAST_UPDATED'].'</option>';
	$s_sort_by .= '<option value="8">'.$user->lang['DL_RATING'].'</option>';
	$s_sort_by .= '</select>';
	$s_sort_by = str_replace('value="'.$sort_by.'">', 'value="'.$sort_by.'" selected="selected">', $s_sort_by);

	$s_order = '<select name="order" onchange="forms[\'dl_mod\'].submit()">';
	$s_order .= '<option value="ASC">'.$user->lang['ASCENDING'].'</option>';
	$s_order .= '<option value="DESC">'.$user->lang['DESCENDING'].'</option>';
	$s_order .= '</select>';
	$s_order = str_replace('value="'.$order.'">', 'value="'.$order.'" selected="selected">', $s_order);
}
else
{
	$s_sort_by = '';
	$s_order = '';
}

/*
* create download overall view
*/
if ($view == 'overall' && sizeof($index))
{
	page_header($user->lang['DOWNLOADS'] . ' ' . $user->lang['DL_OVERVIEW']);

	$sql = 'SELECT dl_id, user_id FROM ' . DL_RATING_TABLE;
	$result = $db->sql_query($sql);

	$ratings = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$ratings[$row['dl_id']][] = $row['user_id'];
	}
	$db->sql_freeresult($result);

	$template->set_filenames(array(
		'body' => 'dl_mod/dl_overview_body.html')
	);

	$template->assign_vars(array(
		'L_DESCRIPTION'		=> $user->lang['DL_FILE_DESCRIPTION'],
		'L_DL_CAT'			=> $user->lang['DL_CAT_NAME'],
		'L_DL_FILES'		=> $user->lang['DL_CAT_FILES'],
		'L_DESCRIPTION'		=> $user->lang['DL_FILE_DESCRIPTION'],
		'L_STATUS'			=> $user->lang['DL_INFO'],
		'L_KLICKS'			=> $user->lang['DL_KLICKS'],
		'L_OVERALL_KLICKS'	=> $user->lang['DL_OVERALL_KLICKS'],
		'L_SIZE'			=> $user->lang['DL_FILE_SIZE'],
		'L_NAME'			=> $user->lang['DL_NAME'],
		'L_TOP'				=> $user->lang['BACK_TO_TOP'],
		'L_SORT_BY'			=> $user->lang['SORT_BY'],
		'L_ORDER'			=> $user->lang['DL_ORDER'],
		'L_RATING'			=> $user->lang['DL_RATING'],
		'L_DOWNLOADS'		=> $user->lang['DOWNLOADS'],
		'L_GO'				=> $user->lang['GO'],
		'L_GOTO_PAGE'		=> $user->lang['GOTO_PAGE'],

		'S_SORT_BY'			=> $s_sort_by,
		'S_ORDER'			=> $s_order,
		'S_FORM_ACTION'		=> append_sid("{$phpbb_root_path}downloads.$phpEx?view=overall"),

		'U_DL_INDEX'		=> append_sid("{$phpbb_root_path}downloads.$phpEx"),

		'PAGE_NAME'			=> $user->lang['DOWNLOADS'] . ' ' . $user->lang['DL_OVERVIEW'])
	);

	$dl_files = array();
	$dl_files = $dl_mod->all_files(0, '', '', '', 0, 0, '*');

	$total_files = 0;

	if (sizeof($dl_files))
	{
		for ($i = 0; $i < sizeof($dl_files); $i++)
		{
			$cat_id = $dl_files[$i]['cat'];
			$cat_auth = array();
			$cat_auth = $dl_mod->dl_cat_auth($cat_id);
			if ($cat_auth['auth_view'] || $index[$cat_id]['auth_view'] || ($auth->acl_get('a_') && $user->data['is_registered']))
			{
				$total_files++;
			}
		}
	}

	if ($total_files > $config['topics_per_page'])
	{
		$pagination = generate_pagination(append_sid("{$phpbb_root_path}downloads.$phpEx", "view=overall", "sort_by=$sort_by&amp;order=$order"), $total_files, $config['topics_per_page'], $start, true);

		$template->assign_vars(array(
			'PAGINATION' => $pagination)
		);
	}

	$sql_sort_by = ($sql_sort_by == 'sort') ? 'cat, sort' : $sql_sort_by;

	$dl_files = array();
	$dl_files = $dl_mod->all_files(0, '', '', ' ORDER BY ' . $sql_sort_by . ' ' . $sql_order . ' LIMIT ' . $start . ', ' . $config['topics_per_page'], 0, 0, 'cat, id, description, desc_uid, desc_bitfield, desc_flags, hack_version, extern, file_size, klicks, overall_klicks, rating');

	if (sizeof($dl_files))
	{
		for ($i = 0; $i < sizeof($dl_files); $i++)
		{
			$cat_id = $dl_files[$i]['cat'];
			$cat_auth = array();
			$cat_auth = $dl_mod->dl_cat_auth($cat_id);
			if ($cat_auth['auth_view'] || $index[$cat_id]['auth_view'] || ($auth->acl_get('a_') && $user->data['is_registered']))
			{
				$cat_name = $index[$cat_id]['cat_name'];
				$cat_name = str_replace('&nbsp;&nbsp;|', '', $cat_name);
				$cat_name = str_replace('___&nbsp;', '', $cat_name);
				$cat_view = $index[$cat_id]['nav_path'];

				$file_id = $dl_files[$i]['id'];
				$mini_file_icon = $dl_mod->mini_status_file($cat_id, $file_id);

				$description = $dl_files[$i]['description'];
				$desc_uid = $dl_files[$i]['desc_uid'];
				$desc_bitfield = $dl_files[$i]['desc_bitfield'];
				$desc_flags = $dl_files[$i]['desc_flags'];
				$description = censor_text($description);
				$description = generate_text_for_display($description, $desc_uid, $desc_bitfield, $desc_flags);

				$dl_link = append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$file_id");

				$hack_version = '&nbsp;'.$dl_files[$i]['hack_version'];

				$dl_status = array();
				$dl_status = $dl_mod->dl_status($file_id);
				$status = $dl_status['status'];

				if ($dl_files[$i]['extern'])
				{
					$file_size = $user->lang['DL_NOT_AVAILIBLE'];
				}
				else
				{
					$file_size = $dl_mod->dl_size($dl_files[$i]['file_size'], 2);
				}

				$file_klicks = $dl_files[$i]['klicks'];
				$file_overall_klicks = $dl_files[$i]['overall_klicks'];

				$rating_points = $dl_files[$i]['rating'];

				$u_rating_link = '';
				if (($rating_points == 0 || !@in_array($user->data['user_id'], $ratings[$file_id])) && $user->data['is_registered'])
				{
					$u_rating_link = append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "action=rate&amp;df_id=$file_id&amp;dlo=1");
				}

				if (isset($ratings[$file_id]))
				{
					$rating_count_text = '&nbsp;[ '.sizeof($ratings[$file_id]).' ]';
				}
				else
				{
					$rating_count_text = '';
				}

				$template->assign_block_vars('downloads', array(
					'CAT_NAME'				=> $cat_name,
					'DESCRIPTION'			=> $mini_file_icon.$description,
					'FILE_KLICKS'			=> $file_klicks,
					'FILE_OVERALL_KLICKS'	=> $file_overall_klicks,
					'FILE_SIZE'				=> $file_size,
					'HACK_VERSION'			=> $hack_version,
					'RATING_IMG'			=> $dl_mod->rating_img($rating_points),
					'RATINGS'				=> $rating_count_text,
					'STATUS'				=> $status,

					'U_CAT_VIEW'			=> $cat_view,
					'U_RATING'				=> $u_rating_link,
					'U_DL_LINK'				=> $dl_link)
				);
			}
		}
	}
}

/*
* default user entry. redirect to index or category
*/
if (empty($view) && !$inc_module)
{
	$view = 'view';

	if (!$cat)
	{
		$template->set_filenames(array(
			'body' => 'dl_mod/view_dl_cat_body.html')
		);

		if ($user->data['user_dl_sub_on_index'])
		{
			$template->assign_var('S_SUB_ON_INDEX', true);
		}
	}
	else
	{
		$cat_auth = array();
		$cat_auth = $dl_mod->dl_cat_auth($cat);
		$index_auth = array();
		$index_auth = $dl_mod->full_index($cat);

		if (!$cat_auth['auth_view'] && !$index_auth[$cat]['auth_view'] && !$auth->acl_get('a_'))
		{
			redirect(append_sid("{$phpbb_root_path}downloads.$phpEx"));
		}

		$template->set_filenames(array(
			'body' => 'dl_mod/downloads_body.html')
		);

		$sql = "SELECT dl_id, user_id FROM " . DL_RATING_TABLE;
		$result = $db->sql_query($sql);

		$ratings = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$ratings[$row['dl_id']][] = $row['user_id'];
		}
		$db->sql_freeresult($result);
	}

	$path_dl_array = array();

	page_header($user->lang['DOWNLOADS']);

	$user_id = $user->data['user_id'];
	$username = $user->data['username'];
	$user_traffic = $user->data['user_traffic'];

	$sql = 'SELECT c.parent, d.cat, d.id, d.change_time, d. description, d.change_user, u.username
		FROM ' . DOWNLOADS_TABLE . ' d, ' . USERS_TABLE . ' u, ' . DL_CAT_TABLE . ' c
		WHERE d.change_user = u.user_id
			AND d.approve = ' . true . '
			AND d.cat = c.id
		ORDER BY cat, change_time DESC, id DESC';
	$result = $db->sql_query($sql);

	$last_dl = array();
	$last_id = 0;

	while ($row = $db->sql_fetchrow($result))
	{
		if ($row['cat'] != $last_id)
		{
			$last_id = $row['cat'];
			$last_dl[$last_id]['change_time'] = $row['change_time'];
			$last_dl[$last_id]['parent'] = $row['parent'];
			$last_dl[$last_id]['desc'] = $row['description'];
			$last_dl[$last_id]['user'] = ($row['username'] == '') ? $user->lang['GUEST'] : $row['username'];
			$last_dl[$last_id]['time'] = $user->format_date($row['change_time']);
			$last_dl[$last_id]['link'] = append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&amp;df_id=" . $row['id']);
			$last_dl[$last_id]['user_link'] = append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=viewprofile&amp;u=" . $row['change_user']);
		}
	}
	$db->sql_freeresult($result);

	if (count($index) > 0)
	{
		foreach(array_keys($index) as $cat_id)
		{
			$parent_id = (isset($index[$cat_id]['parent'])) ? $index[$cat_id]['parent'] : 0;
			$cat_name = (isset($index[$cat_id]['cat_name'])) ? $index[$cat_id]['cat_name'] : '';
			$cat_desc = (isset($index[$cat_id]['description'])) ? $index[$cat_id]['description'] : '';
			$cat_view = (isset($index[$cat_id]['nav_path'])) ? $index[$cat_id]['nav_path'] : '';
			$cat_uid = (isset($index[$cat_id]['desc_uid'])) ? $index[$cat_id]['desc_uid'] : '';
			$cat_bitfield = (isset($index[$cat_id]['desc_bitfield'])) ? $index[$cat_id]['desc_bitfield'] : '';
			$cat_flags = (isset($index[$cat_id]['desc_flags'])) ? $index[$cat_id]['desc_flags'] : '';
			$cat_sublevel = (isset($index[$cat_id]['sublevel'])) ? $index[$cat_id]['sublevel'] : '';
			$cat_icon = $index[$cat_id]['cat_icon'];

			if ($cat_desc)
			{
				$cat_desc = censor_text($cat_desc);
				$cat_desc = generate_text_for_display($cat_desc, $cat_uid, $cat_bitfield, $cat_flags);
			}

			$mini_icon = array();
			$mini_icon = $dl_mod->mini_status_cat($cat_id, $cat_id);

			if ($mini_icon[$cat_id]['new'] && !$mini_icon[$cat_id]['edit'])
			{
				$mini_cat_icon = $user->img('dl_new');
			}
			else if (!$mini_icon[$cat_id]['new'] && $mini_icon[$cat_id]['edit'])
			{
				$mini_cat_icon = $user->img('dl_edit');
			}
			else if ($mini_icon[$cat_id]['new'] && $mini_icon[$cat_id]['edit'])
			{
				$mini_cat_icon = $user->img('dl_new_edit');
			}
			else
			{
				$mini_cat_icon = $user->img('dl_default');
			}

			$temp_config_pages = $config['posts_per_page'];
			$config['posts_per_page'] = $config['dl_links_per_page'];
			$cat_pages = (isset($index[$cat_id]['total'])) ? topic_generate_pagination($index[$cat_id]['total'], append_sid("{$phpbb_root_path}downloads.$phpEx?cat=$cat_id")) : '';
			$config['posts_per_page'] = $temp_config_pages;

			$last_dl_time = $dl_mod->find_latest_dl($last_dl, $cat_id, $cat_id, array());
			$last_cat_id = (isset($last_dl_time['cat_id'])) ? $last_dl_time['cat_id'] : 0;

			if (isset($last_dl[$cat_id]['change_time']) && isset($last_dl_time['change_time']))
			{
				if ($last_dl[$cat_id]['change_time'] > $last_dl_time['change_time'])
				{
					$last_cat_id = $cat_id;
				}
			}

			if ($cat)
			{
				$template->set_filenames(array(
					'subcats' => 'dl_mod/view_dl_subcat_body.html')
				);

				$block = 'subcats';

				$template->assign_var('S_SUBCATS', true);
			}
			else
			{
				$block = 'downloads';
			}

			$template->assign_block_vars($block, array(
				'MINI_IMG' => $mini_cat_icon,
				'SUBLEVEL' => $cat_sublevel,
				'CAT_DESC' => $cat_desc,
				'CAT_NAME' => $cat_name,
				'CAT_ICON' => $cat_icon,
				'CAT_PAGES' => $cat_pages,
				'CAT_DL' => ((isset($index[$cat_id]['total'])) ? $index[$cat_id]['total'] : 0) + $dl_mod->get_sublevel_count($cat_id),
				'CAT_LAST_DL' => (isset($last_dl[$last_cat_id]['desc'])) ? $last_dl[$last_cat_id]['desc'] : '',
				'CAT_LAST_USER' => (isset($last_dl[$last_cat_id]['user'])) ? $last_dl[$last_cat_id]['user'] : '',
				'CAT_LAST_TIME' => (isset($last_dl[$last_cat_id]['time'])) ? $last_dl[$last_cat_id]['time'] : '',
				'U_CAT_VIEW' => $cat_view,
				'U_CAT_LAST_LINK' => (isset($last_dl[$last_cat_id]['link'])) ? $last_dl[$last_cat_id]['link'] : '',
				'U_CAT_LAST_USER' => (isset($last_dl[$last_cat_id]['user_link'])) ? $last_dl[$last_cat_id]['user_link'] : '')
			);

			$cat_subs = (isset($cat_sublevel['cat_path'])) ? $cat_sublevel['cat_path'] : '';

			if ($cat_subs)
			{
				$template->assign_block_vars($block.'.sub', array());
	
				for ($j = 0; $j < sizeof($cat_subs); $j++)
				{
					$sub_id = $cat_sublevel['cat_id'][$j];
					$mini_icon = array();
					$mini_icon = $dl_mod->mini_status_cat($sub_id, $sub_id);
	
					if ($mini_icon[$sub_id]['new'] && !$mini_icon[$sub_id]['edit'])
					{
						$mini_cat_icon = $user->img('dl_new');
					}
					else if (!$mini_icon[$sub_id]['new'] && $mini_icon[$sub_id]['edit'])
					{
						$mini_cat_icon = $user->img('dl_edit');
					}
					else if ($mini_icon[$sub_id]['new'] && $mini_icon[$sub_id]['edit'])
					{
						$mini_cat_icon = $user->img('dl_new_edit');
					}
					else
					{
						$mini_cat_icon = $user->img('dl_default');
					}
	
					if (isset($cat_sublevel['description'][$j]) && $cat_sublevel['description'][$j] != '')
					{
						$subcat_desc = censor_text($cat_sublevel['description'][$j]);
						$subcat_desc = generate_text_for_display($subcat_desc, $cat_sublevel['desc_uid'][$j], $cat_sublevel['desc_bitfield'][$j], $cat_sublevel['desc_flags'][$j]);
					}
					else
					{
						$subcat_desc = '';
					}

					$template->assign_block_vars($block.'.sub.sublevel_row', array(
						'L_SUBLEVEL' => $cat_sublevel['cat_name'][$j],
						'SUBLEVEL_COUNT' => $cat_sublevel['total'][$j] + $dl_mod->get_sublevel_count($cat_sublevel['cat_id'][$j]),
						'SUBLEVEL_DESC' => $subcat_desc,
						'M_SUBLEVEL' => $mini_cat_icon,
						'M_SUBLEVEL_ICON' => $cat_sublevel['cat_icon'][$j],
						'U_SUBLEVEL' => $cat_sublevel['cat_path'][$j])
					);
				}
			}

			if ($cat)
			{
				$template->assign_var('S_SUBCAT_BOX', true);

				$template->assign_display('subcats');
			}
		}
	}
	else
	{
		$template->assign_var('S_NO_CATEGORY', true);
	}

	if ($cat)
	{
		$index_cat = array();
		$index_cat = $dl_mod->full_index($cat);
		$total_downloads = (isset($index_cat[$cat]['total'])) ? $index_cat[$cat]['total'] : 0;

		if ($total_downloads)
		{
			$pagination = generate_pagination(append_sid("{$phpbb_root_path}downloads.$phpEx?cat=$cat", "sort_by=$sort_by&amp;order=$order"), $total_downloads, $config['dl_links_per_page'], $start, true). '&nbsp;';

			$template->assign_vars(array(
				'PAGINATION' => $pagination,
				'PAGE_NUMBER' => ($total_downloads > $config['dl_links_per_page']) ? sprintf($user->lang['PAGE_OF'], (floor($start / $config['dl_links_per_page']) + 1), ceil( $total_downloads / $config['dl_links_per_page'])) : '')
			);
		}

		if (isset($index_cat[$cat]['rules']) && $index_cat[$cat]['rules'] != '')
		{
			$cat_rule = $index_cat[$cat]['rules'];
			$cat_rule_uid = (isset($index_cat[$cat]['rule_uid'])) ? $index_cat[$cat]['rule_uid'] : '';
			$cat_rule_bitfield = (isset($index_cat[$cat]['rule_bitfield'])) ? $index_cat[$cat]['rule_bitfield'] : '';
			$cat_rule_flags = (isset($index_cat[$cat]['rule_flags'])) ? $index_cat[$cat]['rule_flags'] : '';
			$cat_rule = censor_text($cat_rule);
			$cat_rule = generate_text_for_display($cat_rule, $cat_rule_uid, $cat_rule_bitfield, $cat_rule_flags);

			$template->assign_var('S_CAT_RULE', true);
		}

		if ($dl_mod->user_auth($cat, 'auth_mod'))
		{
			$template->assign_var('S_MODCP', true);
		}

		$physical_size = $dl_mod->read_dl_sizes($phpbb_root_path . $config['dl_download_dir']);
		if ($physical_size < $config['dl_physical_quota'] && (!$config['dl_stop_uploads']) || ($auth->acl_get('a_') && $user->data['is_registered']))
		{
			if ($dl_mod->user_auth($cat, 'auth_up'))
			{
				$template->assign_var('S_DL_UPLOAD', true);
			}
		}

		if (!$config['dl_traffic_off'])
		{
			$cat_traffic = $index_cat[$cat]['cat_traffic'] - $index_cat[$cat]['cat_traffic_use'];

			if ($index_cat[$cat]['cat_traffic'] && $cat_traffic > 0)
			{
				$cat_traffic = ($cat_traffic > $config['dl_overall_traffic']) ? $config['dl_overall_traffic'] : $cat_traffic;
				$cat_traffic = $dl_mod->dl_size($cat_traffic);
	
				$template->assign_var('S_CAT_TRAFFIC', true);
			}
		}
		else
		{
			unset($cat_traffic);
		}
	}

	$i = 0;

	if ($cat && $total_downloads)
	{
		$dl_files = array();
		$dl_files = $dl_mod->files($cat, $sql_sort_by, $sql_order, $start, $config['dl_links_per_page'], 'id, description, desc_uid, desc_bitfield, desc_flags, hack_version, extern, file_size, klicks, overall_klicks, rating, long_desc, long_desc_uid, long_desc_bitfield, long_desc_flags');

		if ($dl_mod->cat_auth_comment_read($cat))
		{
			$sql = 'SELECT COUNT(dl_id) AS total_comments, id FROM ' . DL_COMMENTS_TABLE . "
				WHERE cat_id = $cat
					AND approve = " . true . "
				GROUP BY id";
			$result = $db->sql_query($sql);

			$comment_count = array();
			while ($row = $db->sql_fetchrow($result))
			{
				$comment_count[$row['id']] = $row['total_comments'];
			}
			$db->sql_freeresult($result);
		}

		for ($i = 0; $i < count($dl_files); $i++)
		{
			$file_id = $dl_files[$i]['id'];
			$mini_file_icon = $dl_mod->mini_status_file($cat, $file_id);

			$description = $dl_files[$i]['description'];
			$file_url = append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&amp;df_id=" . $file_id);

			$hack_version = '&nbsp;'.$dl_files[$i]['hack_version'];

			$long_desc_uid = $dl_files[$i]['long_desc_uid'];
			$long_desc_bitfield = $dl_files[$i]['long_desc_bitfield'];
			$long_desc_flags = $dl_files[$i]['long_desc_flags'];

			$desc_uid = $dl_files[$i]['desc_uid'];
			$desc_bitfield = $dl_files[$i]['desc_bitfield'];
			$desc_flags = $dl_files[$i]['desc_flags'];

			$description = censor_text($description);
			$description = generate_text_for_display($description, $desc_uid, $desc_bitfield, $desc_flags);

			$long_desc = $dl_files[$i]['long_desc'];
			if (intval($config['dl_limit_desc_on_index']) && strlen($long_desc) > intval($config['dl_limit_desc_on_index']))
			{
				$long_desc = substr($long_desc, 0, intval($config['dl_limit_desc_on_index'])) . ' [...]';
			}
			$long_desc = censor_text($long_desc);
			$long_desc = generate_text_for_display($long_desc, $long_desc_uid, $long_desc_bitfield, $long_desc_flags);

			$dl_status = array();
			$dl_status = $dl_mod->dl_status($file_id);
			$status = $dl_status['status'];

			if ($dl_files[$i]['extern'])
			{
				$file_size = $user->lang['DL_NOT_AVAILIBLE'];
			}
			else
			{
				$file_size = $dl_mod->dl_size($dl_files[$i]['file_size'], 2);
			}

			$file_klicks = $dl_files[$i]['klicks'];
			$file_overall_klicks = $dl_files[$i]['overall_klicks'];

			if ($cat)
			{
				$rating_points = $dl_files[$i]['rating'];

				$l_rating_text = $u_rating_text = '';
				if ((!$rating_points || !@in_array($user->data['user_id'], $ratings[$file_id])) && $user->data['is_registered'])
				{
					$l_rating_text = $user->lang['DL_KLICK_TO_RATE'];
					$u_rating_text = append_sid("{$phpbb_root_path}downloads.$phpEx", "view=detail&amp;action=rate&amp;df_id=$file_id&amp;dlo=2&amp;start=$start");
				}

				if (isset($ratings[$file_id]))
				{
					$rating_count_text = '&nbsp;[ '.sizeof($ratings[$file_id]).' ]';
				}
				else
				{
					$rating_count_text = '';
				}
			}

			$template->assign_block_vars('downloads', array(
				'DESCRIPTION' => $description,
				'MINI_IMG' => $mini_file_icon,
				'HACK_VERSION' => $hack_version,
				'LONG_DESC' => $long_desc,
				'RATING_IMG' => $dl_mod->rating_img($rating_points),
				'RATINGS' => $rating_count_text,
				'L_RATING' => $l_rating_text,
				'U_RATING' => $u_rating_text,
				'STATUS' => $status,
				'FILE_SIZE' => $file_size,
				'FILE_KLICKS' => $file_klicks,
				'FILE_OVERALL_KLICKS' => $file_overall_klicks,
				'U_FILE' => $file_url)
			);

			if ($index_cat[$cat]['comments'] && $dl_mod->cat_auth_comment_read($cat))
			{
				if (isset($comment_count[$file_id]))
				{
					$template->assign_block_vars('downloads.comments', array(
						'L_COMMENT_POST' => ($dl_mod->cat_auth_comment_post($cat)) ? $user->lang['DL_POST_COMMENT'] : '',
						'L_COMMENT_SHOW' => $user->lang['DL_VIEW_COMMENTS'],
						'BREAK' => ($dl_mod->cat_auth_comment_post($cat)) ? '<br />' : '',
						'U_COMMENT_POST' => ($dl_mod->cat_auth_comment_post($cat)) ? append_sid("{$phpbb_root_path}downloads.$phpEx", "view=comment&amp;action=post&amp;cat_id=$cat&amp;df_id=$file_id") : '',
						'U_COMMENT_SHOW' => append_sid("{$phpbb_root_path}downloads.$phpEx", "view=comment&amp;action=view&amp;cat_id=$cat&amp;df_id=$file_id"))
					);
				}
				else if ($dl_mod->cat_auth_comment_post($cat))
				{
					$template->assign_block_vars('downloads.comments', array(
						'L_COMMENT_POST' => $user->lang['DL_POST_COMMENT'],
						'U_COMMENT_POST' => append_sid("{$phpbb_root_path}downloads.$phpEx", "view=comment&amp;action=post&amp;cat_id=$cat&amp;df_id=$file_id"))
					);
				}
				else
				{
					$template->assign_block_vars('downloads.comments', array());
				}
			}
		}
	}

	if ($i)
	{
		$template->assign_var('S_DOWNLOAD_ROWS', true);

		if ($index_cat[$cat]['comments'] && $dl_mod->cat_auth_comment_read($cat))
		{
			$sql = 'SELECT COUNT(dl_id) AS total_comments, id FROM ' . DL_COMMENTS_TABLE . "
				WHERE cat_id = $cat
					AND approve = " . true . "
				GROUP BY id";
			$result = $db->sql_query($sql);

			$comment_count = array();
			while ($row = $db->sql_fetchrow($result))
			{
				$comment_count[$row['id']] = $row['total_comments'];
			}
			$db->sql_freeresult($result);

			$template->assign_block_vars('comment_header', array(
				"L_COMMENTS" => $user->lang['DL_COMMENTS'])
			);
		}
	}

	if ($cat && !$total_downloads)
	{
		$template->assign_var('S_EMPTY_CATEGORY', true);
	}

	$template->assign_vars(array(
		'L_INFO' => $user->lang['DL_INFO'],
		'L_NAME' => $user->lang['DL_NAME'],
		'L_DL_CAT' => $user->lang['DL_CAT_NAME'],
		'L_DL_FILES' => $user->lang['DL_CAT_FILES'],
		'L_DESCRIPTION' => $user->lang['DL_FILE_DESCRIPTION'],
		'L_SIZE' => $user->lang['DL_FILE_SIZE'],
		'L_KLICKS' => $user->lang['DL_KLICKS'],
		'L_OVERALL_KLICKS' => $user->lang['DL_OVERALL_KLICKS'],
		'L_RATING' => $user->lang['DL_RATING'],
		'L_SORT_BY' => $user->lang['SORT_BY'],
		'L_ORDER' => $user->lang['DL_ORDER'],
		'L_DL_TOP' => $user->lang['DL_CAT_TITLE'],
		'L_LAST' => $user->lang['LAST_UPDATED'],
		'L_GO' => $user->lang['GO'],
		'L_NO_CATEGORY' => $user->lang['DL_NO_CATEGORY_INDEX'],
		'L_EMPTY_CATEGORY' => $user->lang['DL_EMPTY_CATEGORY'],
		'L_GOTO_PAGE' => $user->lang['GOTO_PAGE'],

		'S_SORT_BY' => $s_sort_by,
		'S_ORDER' => $s_order,
		'CAT_RULE' => (isset($cat_rule)) ? $cat_rule : '',
		'CAT_TRAFFIC' => (isset($cat_traffic)) ? sprintf($user->lang['DL_CAT_TRAFFIC_MAIN'], $cat_traffic) : '',
		'DL_MODCP' => (isset($total_downloads) && $total_downloads <> 0 && $dl_mod->user_auth($cat, 'auth_mod')) ? sprintf($user->lang['DL_MODCP_MOD_AUTH'], '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=modcp", "cat_id=$cat").'">', '</a>') : '',
		'T_DL_CAT' => (isset($index[$cat]['cat_name']) && $cat) ? $index[$cat]['cat_name'] : $user->lang['DL_CAT_NAME'],
		'DL_UPLOAD' => '[ <a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=upload", "cat_id=$cat").'">' . $user->lang['DL_UPLOAD'] . '</a> ]',

		'U_DOWNLOADS' => append_sid("{$phpbb_root_path}downloads.$phpEx") . (($cat) ? '?cat=' . $cat : ''),
		'U_DL_SEARCH' => (sizeof($index) || $cat) ? '[ <a href="' . append_sid("{$phpbb_root_path}downloads.$phpEx", "view=search") . '">' . $user->lang['DL_SEARCH_DOWNLOAD'] . '</a> ]' : '',
	));
}

$view_check = array('comment', 'detail', 'load', 'modcp', 'overall', 'popup', 'search', 'stat', 'todo', 'upload', 'user_config', 'view', 'broken', 'unbroken', 'fav', 'unfav', 'bug_tracker');
if (!in_array($view, $view_check))
{
	trigger_error('DL_NO_PERMISSION');
}

$template->assign_vars(array(
	'U_HELP_POPUP' => "{$phpbb_root_path}dl_help.$phpEx?sid=" . $user->data['session_id'] . "&help_key=",
));

/*
* include the mod footer
*/
include($phpbb_root_path . 'dl_mod/includes/dl_footer.' . $phpEx);

/*
* include the phpBB footer
*/
page_footer();

?>