<?php
/*
*
* @name portal_pages_blocks.php
* @package phpBB3 Portal XL 4.0
* @version $Id: portal_pages_blocks.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
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

/**
* initalise some global variables
*/
global $db, $auth, $user, $template, $SID, $_SID;
global $phpbb_root_path, $phpEx, $config, $portal_config;

	$sql = 'SELECT page_view
			FROM ' . PORTAL_PAGES_TABLE;
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

	$portal_page_block_view = array();
	$portal_page_block_view[] = ($row['page_view'] == 1) ? 1 : 1; // all can view 
	$portal_page_block_view[] = ($user->data['is_registered']) ? 2 : 1; // registered can view 
	$portal_page_block_view[] = ($user->data['group_id'] == 4) ? 3 : 1; // moderator can view   
	$portal_page_block_view[] = ($user->data['group_id'] == 5) ? 4 : 1; // administrator can view
	$portal_page_block_view[] = ($user->data['user_id'] == 1) ? 5 : 1; // guest can view  

	$portal_page_block_view = array_unique($portal_page_block_view);

	/**
	* automatic block switches since RC1!
	*/
	$sql_portal_blocks = 'SELECT page_title
				  	  	  FROM ' . PORTAL_PAGES_TABLE . '
				      	  WHERE ' . $db->sql_in_set('page_view', $portal_page_block_view) . "
				      	  AND page_disable = 0 
				      	  ORDER BY page_id ASC";
	$result_portal_blocks = $db->sql_query($sql_portal_blocks);
	while ($row_portal_blocks = $db->sql_fetchrow($result_portal_blocks))
	{
		if (preg_match('#([^.]+)\.#', $row_portal_blocks['page_title'], $pagesMatch))
		if (file_exists($phpbb_root_path . 'portal/block/'.$pagesMatch[1].'.'.$phpEx))
		include_once($phpbb_root_path . 'portal/block/'.$pagesMatch[1].'.'.$phpEx);
	}
	$db->sql_freeresult($result);

	/**
	* Generate logged in/logged out status
	*/
	if ($user->data['user_id'] != ANONYMOUS)
	{
		$u_login_logout = append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=logout', true, $user->session_id);
		$l_login_logout = sprintf($user->lang['LOGOUT_USER'], $user->data['username']);
	}
	else
	{
		$u_login_logout = append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=login');
		$l_login_logout = $user->lang['LOGIN'];
	}

	// The following assigns all _common_ variables that may be used at any point in a template.
	$template->assign_vars(array(
		'PORTAL_WELCOME_INTRO'				=> htmlspecialchars_decode(sprintf(smilies_pass($portal_config['portal_welcome_intro']))),
		'PORTAL_WELCOME_BACK'				=> htmlspecialchars_decode(sprintf(smilies_pass($portal_config['portal_welcome_back']))),

		'L_PORTAL_VERSION'					=> $user->lang['PORTAL_VERSION'],
		'L_PORTAL_SYNDICATE'				=> $user->lang['PORTAL_SYNDICATE'],
		'U_PORTAL'							=> append_sid("{$phpbb_root_path}portal.$phpEx"),
		'U_PORTAL_PAGES'					=> append_sid("{$phpbb_root_path}portal_pages.$phpEx"),
        'U_PORTAL_MODS'        				=> append_sid("{$phpbb_root_path}portal/portal_mods.$phpEx"),
        'U_PORTAL_ACRONYM'        			=> append_sid("{$phpbb_root_path}portal/portal_acronyms.$phpEx"),
        'U_SYNDICATE_FORUM'    				=> append_sid("{$phpbb_root_path}portal/syndicate.$phpEx"),
        'U_SYNDICATE_FILES'    				=> append_sid("{$phpbb_root_path}portal/syndicate_attachments.$phpEx"),

		'PORTAL_PICTURE_RESIZE'  			=> $portal_config['portal_picture_resize'],

		'SITENAME'						=> $config['sitename'],
		'SITE_DESCRIPTION'				=> $config['site_desc'],
		'SCRIPT_NAME'					=> str_replace('.' . $phpEx, '', $user->page['page_name']),
		'LAST_VISIT_DATE'				=> sprintf($user->lang['YOU_LAST_VISIT'], $s_last_visit),
		'LAST_VISIT_YOU'				=> $s_last_visit,
		'CURRENT_TIME'					=> sprintf($user->lang['CURRENT_TIME'], $user->format_date(time(), false, true)),

		'S_USER_NEW_PRIVMSG'			=> $user->data['user_new_privmsg'],
		'S_USER_UNREAD_PRIVMSG'			=> $user->data['user_unread_privmsg'],

		'SID'					=> $SID,
		'_SID'					=> $_SID,
		'SESSION_ID'			=> $user->session_id,
		'ROOT_PATH'				=> $phpbb_root_path,

		'U_LOGIN_LOGOUT'		=> $u_login_logout,
		'L_LOGIN_LOGOUT'		=> $l_login_logout,

		'L_INDEX'				=> $user->lang['FORUM_INDEX'],

		'U_PRIVATEMSGS'			=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=pm&amp;folder=inbox'),
		'U_RETURN_INBOX'		=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=pm&amp;folder=inbox'),
		'U_POPUP_PM'			=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=pm&amp;mode=popup'),
		'UA_POPUP_PM'			=> addslashes(append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=pm&amp;mode=popup')),
		'U_MEMBERLIST'			=> append_sid("{$phpbb_root_path}memberlist.$phpEx"),
		'U_VIEWONLINE'			=> ($auth->acl_gets('u_viewprofile', 'a_user', 'a_useradd', 'a_userdel')) ? append_sid("{$phpbb_root_path}viewonline.$phpEx") : '',
		'U_LOGIN_LOGOUT'		=> $u_login_logout,
		'U_INDEX'				=> append_sid("{$phpbb_root_path}index.$phpEx"),
		'U_SEARCH'				=> append_sid("{$phpbb_root_path}search.$phpEx"),
		'U_REGISTER'			=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=register'),
		'U_PROFILE'				=> append_sid("{$phpbb_root_path}ucp.$phpEx"),
		'U_MODCP'				=> append_sid("{$phpbb_root_path}mcp.$phpEx", false, true, $user->session_id),
		'U_FAQ'					=> append_sid("{$phpbb_root_path}faq.$phpEx"),
		'U_SEARCH_SELF'			=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=egosearch'),
		'U_SEARCH_NEW'			=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=newposts'),
		'U_SEARCH_UNANSWERED'	=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=unanswered'),
		'U_SEARCH_ACTIVE_TOPICS'=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=active_topics'),
		'U_DELETE_COOKIES'		=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=delete_cookies'),
		'U_TEAM'				=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=leaders'),
		'U_RESTORE_PERMISSIONS'	=> ($user->data['user_perm_from'] && $auth->acl_get('a_switchperm')) ? append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=restore_perm') : '',

		'S_USER_LOGGED_IN'		=> ($user->data['user_id'] != ANONYMOUS) ? true : false,
		'S_AUTOLOGIN_ENABLED'	=> ($config['allow_autologin']) ? true : false,
		'S_BOARD_DISABLED'		=> ($config['board_disable']) ? true : false,
		'S_REGISTERED_USER'		=> $user->data['is_registered'],
		'S_IS_BOT'				=> $user->data['is_bot'],
		'S_USER_PM_POPUP'		=> $user->optionget('popuppm'),
		'S_USER_BROWSER'		=> (isset($user->data['session_browser'])) ? $user->data['session_browser'] : $user->lang['UNKNOWN_BROWSER'],
		'S_USERNAME'			=> $user->data['username'],
		'S_CONTENT_DIRECTION'	=> $user->lang['DIRECTION'],
		'S_CONTENT_FLOW_BEGIN'	=> ($user->lang['DIRECTION'] == 'ltr') ? 'left' : 'right',
		'S_CONTENT_FLOW_END'	=> ($user->lang['DIRECTION'] == 'ltr') ? 'right' : 'left',
		'S_CONTENT_ENCODING'	=> 'UTF-8',
		'S_DISPLAY_SEARCH'		=> (!$config['load_search']) ? 0 : (isset($auth) ? ($auth->acl_get('u_search') && $auth->acl_getf_global('f_search')) : 1),
		'S_DISPLAY_PM'			=> ($config['allow_privmsg'] && $user->data['is_registered'] && ($auth->acl_get('u_readpm') || $auth->acl_get('u_sendpm'))) ? true : false,
		'S_DISPLAY_MEMBERLIST'	=> (isset($auth)) ? $auth->acl_get('u_viewprofile') : 0,
		'S_REGISTER_ENABLED'	=> ($config['require_activation'] != USER_ACTIVATION_DISABLE) ? true : false,

		'T_THEME_PATH'			=> "{$phpbb_root_path}styles/" . $user->theme['theme_path'] . '/theme',
		'T_TEMPLATE_PATH'		=> "{$phpbb_root_path}styles/" . $user->theme['template_path'] . '/template',
		'T_IMAGESET_PATH'		=> "{$phpbb_root_path}styles/" . $user->theme['imageset_path'] . '/imageset',
		'T_IMAGESET_LANG_PATH'	=> "{$phpbb_root_path}styles/" . $user->theme['imageset_path'] . '/imageset/' . $user->data['user_lang'],
		'T_IMAGES_PATH'			=> "{$phpbb_root_path}images/",
		'T_SMILIES_PATH'		=> "{$phpbb_root_path}{$config['smilies_path']}/",
		'T_AVATAR_PATH'			=> "{$phpbb_root_path}{$config['avatar_path']}/",
		'T_AVATAR_GALLERY_PATH'	=> "{$phpbb_root_path}{$config['avatar_gallery_path']}/",
		'T_ICONS_PATH'			=> "{$phpbb_root_path}{$config['icons_path']}/",
		'T_RANKS_PATH'			=> "{$phpbb_root_path}{$config['ranks_path']}/",
		'T_UPLOAD_PATH'			=> "{$phpbb_root_path}{$config['upload_path']}/",
		'T_STYLESHEET_LINK'		=> (!$user->theme['theme_storedb']) ? "{$phpbb_root_path}styles/" . $user->theme['theme_path'] . '/theme/stylesheet.css' : "{$phpbb_root_path}style.$phpEx?sid=$user->session_id&amp;id=" . $user->theme['style_id'] . '&amp;lang=' . $user->data['user_lang'],
		'T_STYLESHEET_NAME'		=> $user->theme['theme_name'],

		'SITE_LOGO_IMG'			=> $user->img('site_logo')
		));

?>