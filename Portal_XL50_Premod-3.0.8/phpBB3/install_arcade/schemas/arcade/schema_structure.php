<?php
/**
*
* @package install
* @version $Id: schema_structure.php 802 2009-07-01 16:22:57Z JRSweets $
* @copyright (c) 2008 http://www.JeffRusso.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_INSTALL') || !defined('IN_PHPBB'))
{
	// Someone has tried to access the file direct. This is not a good idea, so exit
	exit;
}

$schema_data = array();

$schema_data['phpbb_acl_arcade_groups'] = array(
	'COLUMNS'		=> array(
		'group_id'			=> array('UINT', 0),
		'cat_id'			=> array('UINT', 0),
		'auth_option_id'	=> array('UINT', 0),
		'auth_role_id'		=> array('UINT', 0),
		'auth_setting'		=> array('TINT:2', 0),
	),
	'KEYS'			=> array(
		'group_id'		=> array('INDEX', 'group_id'),
		'auth_opt_id'	=> array('INDEX', 'auth_option_id'),
		'auth_role_id'	=> array('INDEX', 'auth_role_id'),
	),
);

$schema_data['phpbb_acl_arcade_options'] = array(
	'COLUMNS'		=> array(
		'auth_option_id'	=> array('UINT', NULL, 'auto_increment'),
		'auth_option'		=> array('VCHAR:50', ''),
		'is_global'			=> array('BOOL', 0),
		'is_local'			=> array('BOOL', 0),
		'founder_only'		=> array('BOOL', 0),
	),
	'PRIMARY_KEY'	=> 'auth_option_id',
	'KEYS'			=> array(
		'auth_option'		=> array('UNIQUE', 'auth_option'),
	),
);

$schema_data['phpbb_acl_arcade_roles'] = array(
	'COLUMNS'		=> array(
		'role_id'			=> array('UINT', NULL, 'auto_increment'),
		'role_name'			=> array('VCHAR_UNI', ''),
		'role_description'	=> array('TEXT_UNI', ''),
		'role_type'			=> array('VCHAR:10', ''),
		'role_order'		=> array('USINT', 0),
	),
	'PRIMARY_KEY'	=> 'role_id',
	'KEYS'			=> array(
		'role_type'			=> array('INDEX', 'role_type'),
		'role_order'		=> array('INDEX', 'role_order'),
	),
);

$schema_data['phpbb_acl_arcade_roles_data'] = array(
	'COLUMNS'		=> array(
		'role_id'			=> array('UINT', 0),
		'auth_option_id'	=> array('UINT', 0),
		'auth_setting'		=> array('TINT:2', 0),
	),
	'PRIMARY_KEY'	=> array('role_id', 'auth_option_id'),
	'KEYS'			=> array(
		'ath_op_id'			=> array('INDEX', 'auth_option_id'),
	),
);

$schema_data['phpbb_acl_arcade_users'] = array(
	'COLUMNS'		=> array(
		'user_id'			=> array('UINT', 0),
		'cat_id'			=> array('UINT', 0),
		'auth_option_id'	=> array('UINT', 0),
		'auth_role_id'		=> array('UINT', 0),
		'auth_setting'		=> array('TINT:2', 0),
	),
	'KEYS'			=> array(
		'user_id'			=> array('INDEX', 'user_id'),
		'auth_option_id'	=> array('INDEX', 'auth_option_id'),
		'auth_role_id'		=> array('INDEX', 'auth_role_id'),
	),
);

$schema_data['phpbb_arcade_access'] = array(
	'COLUMNS'		=> array(
		'cat_id'				=> array('UINT', 0),
		'user_id'				=> array('UINT', 0),
		'session_id'			=> array('CHAR:32', ''),
	),
	'PRIMARY_KEY'	=> array('cat_id', 'user_id', 'session_id'),
);

$schema_data['phpbb_arcade_categories'] = array(
	'COLUMNS'		=> array(
		'cat_id'						=> array('UINT', NULL, 'auto_increment'),
		'parent_id'						=> array('UINT', 0),
		'left_id'						=> array('UINT', 0),
		'right_id'						=> array('UINT', 0),
		'cat_parents'					=> array('MTEXT', ''),
		'cat_name'						=> array('STEXT_UNI', ''),
		'cat_desc'						=> array('TEXT_UNI', ''),
		'cat_desc_bitfield'				=> array('VCHAR:255', ''),
		'cat_desc_options'				=> array('UINT:11', 7),
		'cat_desc_uid'					=> array('VCHAR:8', ''),
		'cat_link'						=> array('VCHAR_UNI', ''),
		'cat_password'					=> array('VCHAR_UNI:40', ''),
		'cat_style'						=> array('USINT', 0),
		'cat_display'					=> array('USINT', 0),
		'cat_image'						=> array('VCHAR', ''),
		'cat_rules'						=> array('TEXT_UNI', ''),
		'cat_rules_link'				=> array('VCHAR_UNI', ''),
		'cat_rules_bitfield'			=> array('VCHAR:255', ''),
		'cat_rules_options'				=> array('UINT:11', 7),
		'cat_rules_uid'					=> array('VCHAR:8', ''),
		'cat_games_per_page'			=> array('TINT:4', 0),
		'cat_type'						=> array('TINT:4', 0),
		'cat_test'						=> array('BOOL', 0),
		'cat_status'					=> array('TINT:4', 0),
		'cat_games'						=> array('UINT', 0),
		'cat_plays'						=> array('UINT', 0),
		'cat_download'					=> array('TINT:1', 1),
		'cat_use_jackpot'				=> array('BOOL', 0),
		'cat_cost'						=> array('PDECIMAL:15', 0.00),
		'cat_reward'					=> array('PDECIMAL:15', 0.00),
		'cat_last_play_game_id'			=> array('UINT', 0),
		'cat_last_play_game_name'		=> array('VCHAR_UNI', ''),
		'cat_last_play_user_id'			=> array('UINT', 0),
		'cat_last_play_score'			=> array('PDECIMAL:25', 0.00),
		'cat_last_play_time'			=> array('TIMESTAMP', 0),
		'cat_last_game_installdate'		=> array('TIMESTAMP', 0),
		'cat_last_play_username'		=> array('VCHAR_UNI', ''),
		'cat_last_play_user_colour'		=> array('VCHAR:6', ''),
		'cat_flags'						=> array('TINT:4', 32),
		'display_subcat_list'			=> array('BOOL', 1),
		'display_on_index'				=> array('BOOL', 1),
	),
	'PRIMARY_KEY'	=> 'cat_id',
	'KEYS'			=> array(
		'left_right_id'				=> array('INDEX', array('left_id', 'right_id')),
		'cat_lastplay_game_id'		=> array('INDEX', 'cat_last_play_game_id'),
	),
);

$schema_data['phpbb_arcade_config'] = array(
	'COLUMNS'		=> array(
		'config_name'		=> array('VCHAR', ''),
		'config_value'		=> array('VCHAR_UNI', ''),
	),
	'PRIMARY_KEY'	=> 'config_name',
);

$schema_data['phpbb_arcade_errors'] = array(
	'COLUMNS'		=> array(
		'error_id'					=> array('UINT', NULL, 'auto_increment'),
		'user_id'					=> array('UINT', 0),
		'game_id'					=> array('UINT', 0),
		'score'						=> array('PDECIMAL:25', 0.00),
		'error_date'				=> array('TIMESTAMP', 0),
		'error_type'				=> array('TINT:1', 0),
		'game_type'					=> array('TINT:1', 0),
		'submitted_game_type'		=> array('TINT:1', 0),
		'played_time'				=> array('INT:11', 0),
		'error_ip'					=> array('VCHAR:40', ''),
	),
	'PRIMARY_KEY'	=> 'error_id',
);

$schema_data['phpbb_arcade_reports'] = array(
	'COLUMNS'		=> array(
		'report_id'					=> array('UINT', NULL, 'auto_increment'),
		'user_id'					=> array('UINT', 0),
		'game_id'					=> array('UINT', 0),
		'report_type'				=> array('TINT:1', 0),
		'report_desc'				=> array('TEXT_UNI', ''),
		'report_desc_bitfield'		=> array('VCHAR:255', ''),
		'report_desc_options'		=> array('UINT:11', 7),
		'report_desc_uid'			=> array('VCHAR:8', ''),
		'report_time'				=> array('INT:11', 0),
		'report_ip'					=> array('VCHAR:40', ''),
		'report_closed'				=> array('TINT:1', 0),
	),
	'PRIMARY_KEY'	=> 'report_id',
);

$schema_data['phpbb_arcade_favorites'] = array(
	'COLUMNS'		=> array(
		'user_id'			=> array('UINT', 0),
		'game_id'			=> array('UINT', 0),
	),
	'PRIMARY_KEY'	=> array('user_id', 'game_id'),
);

$schema_data['phpbb_arcade_games'] = array(
	'COLUMNS'		=> array(
		'game_id'				=> array('UINT', NULL, 'auto_increment'),
		'game_image'			=> array('VCHAR', ''),
		'game_desc'				=> array('TEXT', ''),
		'game_highscore'		=> array('PDECIMAL:25', 0.00),
		'game_highdate'			=> array('TIMESTAMP', 0),
		'game_highuser'			=> array('UINT', 0),
		'game_files'			=> array('MTEXT', ''),
		'game_name'				=> array('VCHAR', ''),
		'game_name_clean'		=> array('VCHAR', ''),
		'game_swf'				=> array('VCHAR', ''),
		'game_scorevar'			=> array('VCHAR', ''),
		'game_type'				=> array('TINT:1', 0),
		'game_width'			=> array('UINT:5', 550),
		'game_height'			=> array('UINT:5', 380),
		'game_installdate'		=> array('TIMESTAMP', 0),
		'game_filesize'			=> array('UINT:20', 0),
		'game_scoretype'		=> array('TINT:1', 0),
		'game_order'			=> array('UINT', 0),
		'game_plays'			=> array('UINT', 0),
		'game_votetotal'		=> array('UINT', 0),
		'game_votesum'			=> array('UINT', 0),
		'game_download_total'	=> array('UINT', 0),
		'game_download'			=> array('TINT:1', 1),
		'game_cost'				=> array('PDECIMAL:15', 0.00),
		'game_reward'			=> array('PDECIMAL:15', 0.00),
		'game_use_jackpot'		=> array('BOOL', 0),
		'game_jackpot'			=> array('PDECIMAL:15', 0.00),
		'cat_id'				=> array('UINT', 0),
	),
	'PRIMARY_KEY'	=> 'game_id',
);

$schema_data['phpbb_arcade_game_rating'] = array(
	'COLUMNS'		=> array(
		'game_id'			=> array('UINT', 0),
		'user_id'			=> array('UINT', 0),
		'game_rating'		=> array('UINT', 0),
		'rating_date'		=> array('TIMESTAMP', 0),
		'user_ip'			=> array('VCHAR:40', ''),
	),
	'PRIMARY_KEY'	=> array('game_id', 'user_id'),
);

$schema_data['phpbb_arcade_scores'] = array(
	'COLUMNS'		=> array(
		'game_id'				=> array('UINT', 0),
		'user_id'				=> array('UINT', 0),
		'score'					=> array('PDECIMAL:25', 0.00),
		'comment_text'			=> array('MTEXT', ''),
		'comment_bitfield'		=> array('VCHAR:255', ''),
		'comment_options'		=> array('UINT:11', 7),
		'comment_uid'			=> array('VCHAR:8', ''),
		'score_date'			=> array('TIMESTAMP', 0),
	),
	'PRIMARY_KEY'	=> array('game_id', 'user_id'),
);

$schema_data['phpbb_arcade_plays'] = array(
	'COLUMNS'		=> array(
		'game_id'				=> array('UINT', 0),
		'user_id'				=> array('UINT', 0),
		'total_time'			=> array('TIMESTAMP', 0),
		'total_plays'			=> array('UINT', 0),
	),
	'PRIMARY_KEY'	=> array('game_id', 'user_id'),
);

$schema_data['phpbb_arcade_sessions'] = array(
	'COLUMNS'		=> array(
		'session_id'		=> array('CHAR:32', ''),
		'game_id'			=> array('UINT', 0),
		'user_id'			=> array('UINT', 0),
		'game_type'			=> array('TINT:1', 0),
		'randchar1'			=> array('VCHAR:30', ''),
		'randchar2'			=> array('VCHAR:30', ''),
		'randgid1'			=> array('VCHAR:30', ''),
		'randgid2'			=> array('VCHAR:30', ''),
		'start_time'		=> array('TIMESTAMP', 0),
	),
	'PRIMARY_KEY'	=> 'session_id',
);

$schema_data['phpbb_arcade_download'] = array(
	'COLUMNS'		=> array(
		'user_id'			=> array('UINT', 0),
		'game_id'			=> array('UINT', 0),
		'total'				=> array('UINT', 0),
		'download_time'		=> array('TIMESTAMP', 0),
	),
	'PRIMARY_KEY'	=> array('user_id', 'game_id'),
);

?>