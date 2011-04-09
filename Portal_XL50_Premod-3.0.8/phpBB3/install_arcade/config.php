<?php
/**
*
* @package arcade
* @version $Id: config.php 802 2009-07-01 16:22:57Z JRSweets $
* @copyright (c) 2008 http://www.JeffRusso.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* Mod installation script created for phpbb Arcade
* by JRSweets. This can easily be modifed for
* use with any mod.
* @copyright (c) 2008 http://www.JeffRusso.net
* Some config values so the script can be used for different mods.
* EDIT VALUES BELOW
*/

if (!defined('IN_INSTALL') || !defined('IN_PHPBB'))
{
	// Someone has tried to access the file direct. This is not a good idea, so exit
	exit;
}

$mod_config = array(
	'mod_title'					=> 'phpBB Arcade',
	'mod_version'				=> '1.0.RC9',
	'phpbb_version'				=> '3.0.5',
	'data_file'					=> 'schemas/arcade/schema_data.sql',
	'parent_module_remove'		=> array('ACP_ARCADE', 'ACP_CAT_ARCADE', 'ACP_ARCADE_MANAGE_ARCADE', 'ACP_CAT_ARCADE_CONFIGURATION', 'ACP_CAT_ARCADE_GAMES', 'ACP_CAT_ARCADE_UTILITIES', 'ACP_CAT_ARCADE_PERMISSION_ROLES', 'ACP_CAT_ARCADE_PERMISSIONS', 'ACP_CAT_ARCADE_PERMISSION_MASKS','UCP_ARCADE'),
	'module_remove'				=> array('arcade', 'arcade_manage', 'arcade_games', 'arcade_utilities', 'arcade_permission_roles', 'arcade_permissions'),
	'old_permission_options'	=> array('u_arcade_view', 'u_arcade_play', 'u_arcade_score', 'u_arcade_rate', 'u_arcade_comment', 'u_arcade_download', 'u_arcade_ignore_playcontrol'),
	'permission_options'		=> array(
		'local'		=> array(),
		'global'	=> array('a_cauth', 'a_arcade_settings', 'a_arcade_game', 'a_arcade_delete_game', 'a_arcade_cat', 'a_arcade_delete_cat', 'a_arcade_scores', 'a_arcade_utilities'),
	),
	'arcade_permission_options'	=> array(
		'local'		=> array('c_', 'c_list', 'c_view', 'c_play', 'c_score', 'c_rate', 'c_comment', 'c_report', 'c_download', 'c_ignorecontrol', 'c_resolution'),
		'global'	=> array(),
	),
	'mod_modules'				=> array(
		array(
			'parent_module_data'	=> array(
				'module_basename' 	=> '',
				'module_enabled'	=> '1',
				'module_display' 	=> '1',
				'parent_id' 		=> '0',
				'module_class' 		=> 'acp',
				'module_langname' 	=> 'ACP_CAT_ARCADE_CONFIGURATION',
				'module_mode' 		=> '',
				'module_auth' 		=> '',
			),
			'module_data'			=> array(
				array(
					'module_basename'	=> 'arcade',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_SETTINGS_GENERAL',
					'module_mode' 		=> 'settings',
					'module_auth' 		=> 'acl_a_arcade_settings',
				),
				array(
					'module_basename'	=> 'arcade',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_SETTINGS_GAME',
					'module_mode' 		=> 'game',
					'module_auth' 		=> 'acl_a_arcade_settings',
				),
				array(
					'module_basename'	=> 'arcade',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_SETTINGS_FEATURE',
					'module_mode' 		=> 'feature',
					'module_auth' 		=> 'acl_a_arcade_settings',
				),
				array(
					'module_basename'	=> 'arcade',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_SETTINGS_PAGE',
					'module_mode' 		=> 'page',
					'module_auth' 		=> 'acl_a_arcade_settings',
				),
				array(
					'module_basename'	=> 'arcade',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_SETTINGS_PATH',
					'module_mode' 		=> 'path',
					'module_auth' 		=> 'acl_a_arcade_settings',
				),
			),
		),
		array(
			'parent_module_data'	=> array(
				'module_basename' 	=> '',
				'module_enabled'	=> '1',
				'module_display' 	=> '1',
				'parent_id' 		=> '0',
				'module_class' 		=> 'acp',
				'module_langname' 	=> 'ACP_ARCADE_MANAGE_ARCADE',
				'module_mode' 		=> '',
				'module_auth' 		=> '',
			),
			'module_data'			=> array(
				array(
					'module_basename'	=> 'arcade_manage',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_MANAGE_ARCADE',
					'module_mode' 		=> 'manage',
					'module_auth' 		=> 'acl_a_arcade_cat'
				),
			),
		),
		array(
			'parent_module_data'	=> array(
				'module_basename' 	=> '',
				'module_enabled'	=> '1',
				'module_display' 	=> '1',
				'parent_id' 		=> '0',
				'module_class' 		=> 'acp',
				'module_langname' 	=> 'ACP_CAT_ARCADE_GAMES',
				'module_mode' 		=> '',
				'module_auth' 		=> '',
			),
			'module_data'			=> array(
				array(
					'module_basename'	=> 'arcade_games',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_ADD_GAMES',
					'module_mode' 		=> 'add_games',
					'module_auth' 		=> 'acl_a_arcade_game'
				),
				array(
					'module_basename'	=> 'arcade_utilities',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_UTILITIES_DOWNLOADS',
					'module_mode' 		=> 'downloads',
					'module_auth' 		=> 'acl_a_arcade_utilities'
				),
				array(
					'module_basename'	=> 'arcade_games',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_EDIT_GAMES',
					'module_mode' 		=> 'edit_games',
					'module_auth' 		=> 'acl_a_arcade_game'
				),
				array(
					'module_basename'	=> 'arcade_games',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_EDIT_SCORES',
					'module_mode' 		=> 'edit_scores',
					'module_auth' 		=> 'acl_a_arcade_scores'
				),
				array(
					'module_basename'	=> 'arcade_games',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_UNPACK_GAMES',
					'module_mode' 		=> 'unpack_games',
					'module_auth' 		=> 'acl_a_arcade_game'
				),
			),
		),
		array(
			'parent_module_data'	=> array(
				'module_basename' 	=> '',
				'module_enabled'	=> '1',
				'module_display' 	=> '1',
				'parent_id' 		=> '0',
				'module_class' 		=> 'acp',
				'module_langname' 	=> 'ACP_CAT_ARCADE_UTILITIES',
				'module_mode' 		=> '',
				'module_auth' 		=> '',
			),
			'module_data'			=> array(
				array(
					'module_basename'	=> 'arcade_utilities',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_UTILITIES_CREATE_INSTALL',
					'module_mode' 		=> 'create_install',
					'module_auth' 		=> 'acl_a_arcade_utilities'
				),
				array(
					'module_basename'	=> 'arcade_utilities',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_UTILITIES_DOWNLOAD_STATS',
					'module_mode' 		=> 'download_stats',
					'module_auth' 		=> 'acl_a_arcade_utilities'
				),
				array(
					'module_basename'	=> 'arcade_utilities',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_UTILITIES_ERRORS',
					'module_mode' 		=> 'errors',
					'module_auth' 		=> 'acl_a_arcade_utilities'
				),
				array(
					'module_basename'	=> 'arcade_utilities',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_UTILITIES_REPORTS',
					'module_mode' 		=> 'reports',
					'module_auth' 		=> 'acl_a_arcade_utilities'
				),
				array(
					'module_basename'	=> 'arcade_utilities',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_UTILITIES_USER_GUIDE',
					'module_mode' 		=> 'user_guide',
					'module_auth' 		=> ''
				),
			),
		),
		array(
			'parent_module_data'	=> array(
				'module_basename' 	=> '',
				'module_enabled'	=> '1',
				'module_display' 	=> '1',
				'parent_id' 		=> '0',
				'module_class' 		=> 'acp',
				'module_langname' 	=> 'ACP_CAT_ARCADE_PERMISSION_ROLES',
				'module_mode' 		=> '',
				'module_auth' 		=> '',
			),
			'module_data'			=> array(
				array(
					'module_basename'	=> 'arcade_permission_roles',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_CAT_ROLES',
					'module_mode' 		=> 'cat_roles',
					'module_auth' 		=> 'acl_a_cauth && acl_a_roles',
				),
			),
		),
		array(
			'parent_module_data'	=> array(
				'module_basename' 	=> '',
				'module_enabled'	=> '1',
				'module_display' 	=> '1',
				'parent_id' 		=> '0',
				'module_class' 		=> 'acp',
				'module_langname' 	=> 'ACP_CAT_ARCADE_PERMISSIONS',
				'module_mode' 		=> '',
				'module_auth' 		=> '',
			),
			'module_data'			=> array(
				array(
					'module_basename'	=> 'arcade_permissions',
					'module_enabled' 	=> '1',
					'module_display' 	=> '0',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_PERMISSION_TRACE',
					'module_mode' 		=> 'trace',
					'module_auth' 		=> 'acl_a_viewauth',
				),
				array(
					'module_basename'	=> 'arcade_permissions',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_CATEGORY_PERMISSIONS',
					'module_mode' 		=> 'setting_category_local',
					'module_auth' 		=> 'acl_a_cauth && (acl_a_authusers || acl_a_authgroups)',
				),
				array(
					'module_basename'	=> 'arcade_permissions',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_USERS_CATEGORY_PERMISSIONS',
					'module_mode' 		=> 'setting_user_local',
					'module_auth' 		=> 'acl_a_authgroups && acl_a_cauth',
				),
				array(
					'module_basename'	=> 'arcade_permissions',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_ARCADE_GROUPS_CATEGORY_PERMISSIONS',
					'module_mode' 		=> 'setting_group_local',
					'module_auth' 		=> 'acl_a_authusers && acl_a_cauth',
				),
			),
		),
		array(
			'parent_module_data'	=> array(
				'module_basename' 	=> '',
				'module_enabled'	=> '1',
				'module_display' 	=> '1',
				'parent_id' 		=> '0',
				'module_class' 		=> 'acp',
				'module_langname' 	=> 'ACP_CAT_ARCADE_PERMISSION_MASKS',
				'module_mode' 		=> '',
				'module_auth' 		=> '',
			),
			'module_data'			=> array(
				array(
					'module_basename'	=> 'arcade_permissions',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_VIEW_ARCADE_CATEGORY_PERMISSIONS',
					'module_mode' 		=> 'view_category_local',
					'module_auth' 		=> 'acl_a_viewauth',
				),
			),
		),
		array(
			'parent_module_data'	=> array(
				'module_basename' 	=> '',
				'module_enabled'	=> '1',
				'module_display' 	=> '1',
				'parent_id' 		=> '0',
				'module_class' 		=> 'ucp',
				'module_langname' 	=> 'UCP_ARCADE',
				'module_mode' 		=> '',
				'module_auth' 		=> '',
			),
			'module_data'			=> array(
				array(
					'module_basename'	=> 'arcade',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'ucp',
					'module_langname' 	=> 'UCP_ARCADE_SETTINGS',
					'module_mode' 		=> 'settings',
					'module_auth' 		=> ''
				),
				array(
					'module_basename'	=> 'arcade',
					'module_enabled' 	=> '1',
					'module_display' 	=> '1',
					'module_class' 		=> 'ucp',
					'module_langname' 	=> 'UCP_ARCADE_FAVORITES',
					'module_mode' 		=> 'favorites',
					'module_auth' 		=> ''
				),
			),
		),
	),
	// Schema Changes for install
	'schema_changes'=> array(
		'add_columns'		=> array(
			USERS_TABLE	=> array(
				'user_arcade_permissions'	=> array('MTEXT', ''),
				'user_arcade_perm_from'		=> array('UINT', 0),
				'user_arcade_pm'			=> array('TINT:1', 1),
				'games_per_page'			=> array('USINT', 0),
				'games_sort_dir'			=> array('VCHAR_UNI:1', 'a'),
				'games_sort_order'			=> array('VCHAR_UNI:1', 'n'),
			),
		),
	),
	// Schema Changes for uninstall
	'remove_schema_changes'	=> array(
		'drop_columns'		=> array(
			USERS_TABLE	=> array('user_arcade_permissions', 'user_arcade_perm_from', 'user_arcade_pm', 'games_per_page', 'games_sort_dir', 'games_sort_order'),
		),
	),
	// Schema Changes between versions
	'update_schema_changes'	=> array(
		// Change from version 0.1.0 to 0.2.0
		'0.2.0' => array(
			'drop_keys'		=> array(
				ARCADE_SCORES_TABLE	=> array('game_id', 'user_id'),
				ARCADE_RATING_TABLE	=> array('game_id', 'user_id'),
				ARCADE_FAVS_TABLE	=> array('user_id', 'game_id'),
			),
			'add_primary_keys'		=> array(
				ARCADE_SCORES_TABLE	=> array('game_id', 'user_id'),
				ARCADE_RATING_TABLE	=> array('game_id', 'user_id'),
				ARCADE_FAVS_TABLE	=> array('user_id', 'game_id'),
			),
			'add_columns'		=> array(
				USERS_TABLE	=> array(
					'user_arcade_pm'			=> array('TINT:1', 1),
					'games_per_page'			=> array('USINT', 0),
					'games_sort_dir'			=> array('VCHAR_UNI:1', 'a'),
					'games_sort_order'			=> array('VCHAR_UNI:1', 'n'),
				),
				ARCADE_ERRORS_TABLE	=> array(
					'error_ip'					=> array('VCHAR:40', ''),
				),
			),
		),
		// Change from version 0.2.0 to 0.3.0
		'0.3.0'	=> array(
			'change_columns'		=> array(
				ARCADE_GAMES_TABLE	=> array(
					'game_image'		=> array('VCHAR', ''),
					'game_desc'			=> array('TEXT', ''),
				),
			),
		),
		// Change from version 0.3.0 to 0.3.1
		'0.3.1'	=> array(
			'add_columns'		=> array(
				ARCADE_GAMES_TABLE	=> array(
					'game_download'		=> array('TINT:1', 1),
				),
				ARCADE_CATS_TABLE	=> array(
					'cat_download'		=> array('TINT:1', 1),
				),
			),
		),
		// Change from version 0.3.2 to 0.4.0
		'0.4.0'	=> array(
			'change_columns'		=> array(
				ARCADE_GAMES_TABLE	=> array(
					'game_highscore'	=> array('PDECIMAL:25', 0.00),
				),
				ARCADE_CATS_TABLE	=> array(
					'cat_last_play_score'	=> array('PDECIMAL:25', 0.00),
				),
				ARCADE_SCORES_TABLE	=> array(
					'score'	=> array('PDECIMAL:25', 0.00),
				),
				ARCADE_ERRORS_TABLE	=> array(
					'score'	=> array('PDECIMAL:25', 0.00),
				),
			),
		),
		// Change from version 0.4.1 to 0.4.2
		'0.4.2'	=> array(
			'add_columns'		=> array(
				ARCADE_GAMES_TABLE	=> array(
					'game_download_total'	=> array('UINT', 0),
					'game_name_clean'		=> array('VCHAR', ''),
				),
			),
		),
		// Change from version 0.4.2 to 0.4.3
		'0.4.3'	=> array(
			'add_columns'		=> array(
				ARCADE_DOWNLOAD_TABLE	=> array(
					'download_time'		=> array('TIMESTAMP', 0),
				),
			),
		),
		// Change from version 0.4.5 to 0.5.0
		'0.5.0'	=> array(
			'add_columns'		=> array(
				ARCADE_CATS_TABLE	=> array(
					'display_subcat_list'		=> array('BOOL', 1),
				),
				USERS_TABLE	=> array(
					'user_arcade_permissions'			=> array('MTEXT', ''),
					'user_arcade_perm_from'			=> array('UINT', 0),
				),
			),
		),
		// Change from version 0.6.0 to 0.6.1
		'0.6.1'	=> array(
			'add_columns'		=> array(
				ARCADE_GAMES_TABLE	=> array(
					'game_filesize'		=> array('UINT:20', 0),
				),
			),
		),
		// Change from version 1.0.RC1 to 1.0.RC2
		'1.0.RC2'	=> array(
			'add_columns'		=> array(
				ARCADE_CATS_TABLE	=> array(
					'cat_cost'		=> array('INT:11', 0),
					'cat_reward'	=> array('INT:11', 0),
				),
				ARCADE_GAMES_TABLE	=> array(
					'game_cost'			=> array('INT:11', 0),
					'game_reward'		=> array('INT:11', 0),
					'game_jackpot'		=> array('INT:11', 0),
				),
			),
		),
		// Change from version 1.0.RC2 to 1.0.RC3
		'1.0.RC3'	=> array(
			'add_columns'		=> array(
				ARCADE_CATS_TABLE	=> array(
					'cat_use_jackpot'		=> array('TINT:1', 0),
				),
				ARCADE_GAMES_TABLE	=> array(
					'game_use_jackpot'			=> array('TINT:1', 0),
				),
			),
			'change_columns'		=> array(
				ARCADE_GAMES_TABLE	=> array(
					'game_cost'		=> array('PDECIMAL:15', 0.00),
					'game_reward'	=> array('PDECIMAL:15', 0.00),
					'game_jackpot'	=> array('PDECIMAL:15', 0.00),
				),
				ARCADE_CATS_TABLE	=> array(
					'cat_cost'		=> array('PDECIMAL:15', 0.00),
					'cat_reward'	=> array('PDECIMAL:15', 0.00),
				),
			),
		),
		// Change from version 1.0.RC3 to 1.0.RC4
		'1.0.RC4'	=> array(
			'change_columns'		=> array(
				ARCADE_CATS_TABLE	=> array(
					'cat_last_play_game_name'		=> array('VCHAR_UNI', ''),
				),
			),
		),
		// Change from version 1.0.RC5 to 1.0.RC6
		'1.0.RC6'	=> array(
			'add_columns'		=> array(
				ARCADE_REPORTS_TABLE	=> array(
					'report_closed'		=> array('TINT:1', 0),
				),
			),
		),
		// Change from version 1.0.RC6 to 1.0.RC7
		'1.0.RC7'	=> array(
			'change_columns'		=> array(
				ARCADE_CATS_TABLE	=> array(
					'cat_use_jackpot'		=> array('TINT:1', 0),
				),
				ARCADE_GAMES_TABLE	=> array(
					'game_use_jackpot'			=> array('TINT:1', 0),
				),
			),
		),
		// Change from version 1.0.RC7 to 1.0.RC8
		'1.0.RC8'	=> array(
			'drop_keys'			=> array(
				ACL_ARCADE_OPTIONS_TABLE		=> array('auth_option'),
			),
			'add_unique_index'	=> array(
				ACL_ARCADE_OPTIONS_TABLE		=> array(
					'auth_option'		=> array('auth_option'),
				),
			),
		),
		// Change from version 1.0.RC8 to 1.0.RC9
		'1.0.RC9'	=> array(
			'add_columns'		=> array(
				ARCADE_CATS_TABLE	=> array(
					'cat_test'		=> array('BOOL', 0),
				),
			),
			'change_columns'		=> array(
				ARCADE_CATS_TABLE	=> array(
					'cat_use_jackpot'		=> array('BOOL', 0),
				),
				ARCADE_GAMES_TABLE	=> array(
					'game_use_jackpot'		=> array('BOOL', 0),
				),
			),
			'drop_columns'			=> array(
				ARCADE_SCORES_TABLE		=> array('total_time', 'total_plays'),
			),
		),

	),
	'update_permission_options' => array(
		'0.4.5'	=> array(
			'local'		=> array(),
			'global'	=> array('u_arcade_ignore_playcontrol'),
		),
		'0.5.0'	=> array(
			'local'		=> array(),
			'global'	=> array('a_cauth'),
		),
	),
	'update_arcade_permission_options' => array(
		'0.6.0'	=> array(
			'local'		=> array('c_popup'),
			'global'	=> array(),
		),
		'1.0.RC2'	=> array(
			'local'		=> array('c_playfree'),
			'global'	=> array(),
		),
		'1.0.RC4'	=> array(
			'local'		=> array('c_report'),
			'global'	=> array(),
		),
	),
);

$mod_config['install_check'] = array(
	'tables'		=> array(ACL_ARCADE_GROUPS_TABLE, ACL_ARCADE_OPTIONS_TABLE, ACL_ARCADE_ROLES_DATA_TABLE, ACL_ARCADE_ROLES_TABLE, ACL_ARCADE_USERS_TABLE, ARCADE_ACCESS_TABLE, ARCADE_CATS_TABLE, ARCADE_CONFIG_TABLE, ARCADE_DOWNLOAD_TABLE, ARCADE_GAMES_TABLE, ARCADE_FAVS_TABLE, ARCADE_PLAYS_TABLE, ARCADE_RATING_TABLE, ARCADE_SESSIONS_TABLE, ARCADE_SCORES_TABLE, ARCADE_ERRORS_TABLE, ARCADE_REPORTS_TABLE),
	'files' 		=> array(
		'core'			=> array(
			'arcade.php',
			'newscore.php',
			'viewgame.php',
			'adm/style/acp_arcade.html',
			'adm/style/acp_arcade_games.html',
			'adm/style/acp_arcade_manage.html',
			'adm/style/acp_arcade_permissions.html',
			'adm/style/acp_arcade_utilities.html',
			'adm/style/confirm_body_move_arcade_games.html',
			'arcade/images/1st.gif',
			'arcade/images/2nd.gif',
			'arcade/images/3rd.gif',
			'arcade/images/favorite.gif',
			'arcade/images/logo.png',
			'arcade/images/logo_transparent.png',
			'arcade/images/remove_favorite.gif',
			'arcade/images/star1.gif',
			'arcade/images/star2.gif',
			'includes/auth_arcade.php',
			'includes/acp/acp_arcade.php',
			'includes/acp/acp_arcade_games.php',
			'includes/acp/acp_arcade_manage.php',
			'includes/acp/acp_arcade_permissions.php',
			'includes/acp/acp_arcade_permission_roles.php',
			'includes/acp/acp_arcade_utilities.php',
			'includes/acp/auth_arcade.php',
			'includes/acp/info/acp_arcade.php',
			'includes/acp/info/acp_arcade_games.php',
			'includes/acp/info/acp_arcade_manage.php',
			'includes/acp/info/acp_arcade_permissions.php',
			'includes/acp/info/acp_arcade_permission_roles.php',
			'includes/acp/info/acp_arcade_utilities.php',
			'includes/arcade/arcade_admin_class.php',
			'includes/arcade/arcade_cache.php',
			'includes/arcade/arcade_class.php',
			'includes/arcade/arcade_common.php',
			'includes/arcade/arcade_constants.php',
			'includes/arcade/arcade_download.php',
			'includes/arcade/arcade_games.php',
			'includes/arcade/arcade_play.php',
			'includes/arcade/arcade_protect.php',
			'includes/arcade/arcade_reports.php',
			'includes/arcade/arcade_score.php',
			'includes/arcade/arcade_stats.php',
			'includes/arcade/arcade_viewonline.php',
			'includes/arcade/functions_files.php',
			'includes/arcade/functions_arcade.php',
			'includes/arcade/swfobject.js',
			'includes/arcade/scoretype/ibpro.php',
			'includes/arcade/scoretype/ibprov3.php',
			'includes/arcade/scoretype/v3arcade.php',
			'includes/ucp/ucp_arcade.php',
			'includes/ucp/info/ucp_arcade.php',
			'language/en/mods/arcade.php',
			'language/en/mods/help_arcade.php',
			'language/en/mods/info_acp_arcade.php',
			'language/en/mods/info_ucp_arcade.php',
			'language/en/mods/permissions_arcade.php',
		),
		'styles'			=> array(
			'prosilver'			=> array(
				'styles/prosilver/template/ucp_arcade_settings.html',
				'styles/prosilver/template/ucp_arcade_favorites.html',
				'styles/prosilver/template/arcade/arcade_download_body.html',
				'styles/prosilver/template/arcade/arcade_header_body.html',
				'styles/prosilver/template/arcade/arcade_index_body.html',
				'styles/prosilver/template/arcade/arcade_info_body.html',
				'styles/prosilver/template/arcade/arcade_jumpbox.html',
				'styles/prosilver/template/arcade/arcade_list_body.html',
				'styles/prosilver/template/arcade/arcade_login_cat.html',
				'styles/prosilver/template/arcade/arcade_online_body.html',
				'styles/prosilver/template/arcade/arcade_play_body.html',
				'styles/prosilver/template/arcade/arcade_reports_body.html',
				'styles/prosilver/template/arcade/arcade_score_body.html',
				'styles/prosilver/template/arcade/arcade_stats_body.html',
				'styles/prosilver/template/arcade/arcade_version_body.html',
				'styles/prosilver/theme/arcade.css',
			),
			'subsilver2'		=> array(
				'styles/subsilver2/template/ucp_arcade_settings.html',
				'styles/subsilver2/template/ucp_arcade_favorites.html',
				'styles/subsilver2/template/arcade/arcade_download_body.html',
				'styles/subsilver2/template/arcade/arcade_header_body.html',
				'styles/subsilver2/template/arcade/arcade_index_body.html',
				'styles/subsilver2/template/arcade/arcade_info_body.html',
				'styles/subsilver2/template/arcade/arcade_jumpbox.html',
				'styles/subsilver2/template/arcade/arcade_list_body.html',
				'styles/subsilver2/template/arcade/arcade_login_cat.html',
				'styles/subsilver2/template/arcade/arcade_online_body.html',
				'styles/subsilver2/template/arcade/arcade_play_body.html',
				'styles/subsilver2/template/arcade/arcade_reports_body.html',
				'styles/subsilver2/template/arcade/arcade_score_body.html',
				'styles/subsilver2/template/arcade/arcade_stats_body.html',
				'styles/subsilver2/template/arcade/arcade_version_body.html',
				'styles/subsilver2/theme/images/icon_mini_arcade.gif',
				'styles/subsilver2/theme/arcade.css',
			),
			'revolution'		=> array(
				'styles/revolution/template/arcade/arcade_header_body.html',
				'styles/revolution/template/arcade/arcade_stats_body.html',
				'styles/revolution/theme/arcade.css',
			),
			'prosilver Special Edition'		=> array(
				'styles/prosilver_se/template/arcade/arcade_header_body.html',
				'styles/prosilver_se/theme/arcade.css',
			),
		),
	),
	'edits'	=> array(
		'core'		=> array(
			'index.php' => array(
				'require($phpbb_root_path . \'includes/arcade/scoretype/ibpro.\'.$phpEx);',
				'require($phpbb_root_path . \'includes/arcade/scoretype/ibprov3.\'.$phpEx);',
			),
			'viewonline.php' => array(
				'case \'arcade\':',
				'include($phpbb_root_path . \'includes/arcade/arcade_viewonline.\' . $phpEx);',
			),
			'includes/acp/acp_styles.php' => array(
				'include($phpbb_root_path . \'includes/arcade/arcade_constants.\' . $phpEx);',
				'$cache->destroy(\'_arcade_cats\');',
			),
			'includes/auth.php' => array(
				'global $phpbb_root_path, $table_prefix, $phpEx;',
				'if (!defined(\'ACL_ARCADE_ROLES_DATA_TABLE\'))',
				'if (!class_exists(\'auth_arcade\'))',
			),
			'includes/functions.php' => array(
				'global $arcade;',
				'$user->add_lang(\'mods/arcade\');',
				'$template->assign_var(\'U_ARCADE\', append_sid("{$phpbb_root_path}arcade.$phpEx"));',
			),
			'includes/functions_user.php' => array(
				'if (!class_exists(\'arcade_admin\'))',
				'include($phpbb_root_path . \'includes/arcade/arcade_common.\' . $phpEx);',
				'global $arcade, $auth_arcade, $table_prefix;',
				'if (!isset($arcade))',
				'$arcade = new arcade_admin();',
				'$arcade->delete_user($user_id, $user_row[\'username\']);',
				'\'user_arcade_permissions\'',
				'WHERE " . $db->sql_in_set(\'cat_last_play_user_id\', $user_id_ary);',
			),
			'viewtopic.php' => array(
				'include($phpbb_root_path . \'includes/arcade/functions_arcade.\' . $phpEx);',
				'$user->add_lang(\'mods/arcade\');',
				'$postrow = array_merge($postrow, $arcade_data);',
			),
			'memberlist.php' => array(
				'include($phpbb_root_path . \'includes/arcade/functions_arcade.\' . $phpEx);',
				'$user->add_lang(\'mods/arcade\');',
				'$template->assign_vars($arcade_data);',
			),
			'ucp.php' => array(
				'include($phpbb_root_path . \'includes/arcade/arcade_constants.\' . $phpEx);',
				'include($phpbb_root_path . \'includes/auth_arcade.\' . $phpEx);',
				'include($phpbb_root_path . \'includes/acp/auth_arcade.\' . $phpEx);',
				'$auth_arcade_admin = new auth_arcade_admin();',
				'if (!$auth_arcade_admin->ghost_permissions($user_id, $user->data[\'user_id\']))',
			),
		),
		'styles'		=> array(
			'prosilver'		=> array(
				'styles/prosilver/template/overall_header.html' => array(
					'<li class="icon-ucp"><a href="{U_ARCADE}" title="{L_ARCADE_EXPLAIN}">{L_ARCADE}</a></li>',
					'<!-- INCLUDE arcade/arcade_info_body.html -->',
				),
				'styles/prosilver/template/viewtopic_body.html' => array(
					'<!-- IF postrow.S_HAS_HIGHSCORES --><dd><strong>{L_ARCADE_HIGHSCORES}:</strong> <a href="{postrow.U_ARCADE_STATS}">{postrow.TOTAL_HIGHSCORES}</a></dd><!-- ENDIF -->',
				),
				'styles/prosilver/template/memberlist_view.html' => array(
					'<!-- IF S_HAS_HIGHSCORES --><dt>{L_ARCADE_HIGHSCORES}:</dt> <dd>{TOTAL_HIGHSCORES} | <strong><a href="{U_ARCADE_STATS}">{L_ARCADE_VIEW_USERS_STATS}</a></strong></dd><!-- ENDIF -->',
				),
			),
			'subsilver2'	=> array(
				'styles/subsilver2/template/overall_header.html' => array(
					'<a href="{U_ARCADE}"><img src="{T_THEME_PATH}/images/icon_mini_arcade.gif" width="12" height="13" alt="*" />',
					'<!-- INCLUDE arcade/arcade_info_body.html -->',
				),
				'styles/subsilver2/template/viewtopic_body.html' => array(
					'<!-- IF postrow.S_HAS_HIGHSCORES --><br /><b>{L_ARCADE_HIGHSCORES}:</b> <a href="{postrow.U_ARCADE_STATS}">{postrow.TOTAL_HIGHSCORES}</a><!-- ENDIF -->',
				),
				'styles/subsilver2/template/memberlist_view.html' => array(
					'<td><b class="gen">{TOTAL_HIGHSCORES}</b><span class="genmed"><br /><a href="{U_ARCADE_STATS}">{L_ARCADE_VIEW_USERS_STATS}</a></span></td>',
				),
			),
			'revolution'	=> array(
				'styles/revolution/template/overall_header.html' => array(
					'<li class="icon-ucp"><a href="{U_ARCADE}" title="{L_ARCADE_EXPLAIN}">{L_ARCADE}</a></li>',
					'<!-- INCLUDE arcade/arcade_info_body.html -->',
				),
			),
			'prosilver Special Edition'	=> array(
				'styles/prosilver_se/template/overall_header.html' => array(
					'<li class="icon-ucp"><a href="{U_ARCADE}" title="{L_ARCADE_EXPLAIN}">{L_ARCADE}</a></li>',
					'<!-- INCLUDE arcade/arcade_info_body.html -->',
				),
			),
		),
	),
	'modules'		=> array(
		'acp' => array(
			'arcade_utilities' 			=> array('downloads', 'errors', 'create_install', 'download_stats'),
			'arcade_games'				=> array('edit_games', 'add_games', 'unpack_games'),
			'arcade'					=> array('settings', 'game', 'feature', 'page', 'path'),
			'arcade_manage'				=> array('manage'),
			'arcade_permission_roles'	=> array('cat_roles'),
			'arcade_permissions'		=> array('trace', 'setting_category_local', 'setting_user_local', 'setting_group_local'),
		),
		'ucp' => array(
			'arcade' => array('settings', 'favorites'),
		),
	),
	'alter_db' 		=> array(
		USERS_TABLE		=> array('user_arcade_permissions', 'user_arcade_perm_from', 'user_arcade_pm', 'games_per_page', 'games_sort_dir', 'games_sort_order'),
	),
);

?>