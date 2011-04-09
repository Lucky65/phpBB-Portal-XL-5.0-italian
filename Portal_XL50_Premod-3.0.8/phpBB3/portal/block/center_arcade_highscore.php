<?php
/*
*
* @name center_arcade_highscore.php
* @package phpBB3 Portal XL 5.0
* @version $Id: center_arcade_highscore.php,v 1.0 2009/11/02 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Begin block script here
*/

/**
* Only include once
*/
if (!function_exists('arcade_cache'))
{
	include_once($phpbb_root_path . 'includes/arcade/arcade_common.' . $phpEx);
	include_once($phpbb_root_path . 'includes/arcade/arcade_constants.' . $phpEx);
}

/*
* Start session management
*/
// Initialize arcade auth
$auth_arcade->acl($user->data);
// Initialize arcade class
$arcade = new arcade(false);

$number_of_score = $arcade->config['stat_items_per_page'];

/**
* 
*/
if (!$auth_arcade->acl_getc_global('c_list'))
{
		$template->assign_block_vars('high_scorerow_no', array(
			'LOGIN_VIEWARCADE' 		=> $user->lang['LOGIN_VIEWARCADE']
		));
}
else
{
	$template->assign_var('S_USER_STATS', true);

	$score_order = ($game_data['game_scoretype'] == SCORETYPE_HIGH) ? 'DESC' : 'ASC';
	
	$sql_array = array(
		'SELECT'	=> 's.*, p.*, g.*, u.user_id, u.user_colour, u.username, u.user_avatar_type, u.user_avatar, u.user_avatar_width, u.user_avatar_height',

		'FROM'		=> array(
			ARCADE_SCORES_TABLE	=> 's',
		),

		'LEFT_JOIN'	=> array(
			array(
				'FROM'	=> array(ARCADE_GAMES_TABLE => 'g'),
				'ON'	=> 's.game_id = g.game_id'
			),
			array(
				'FROM'	=> array(ARCADE_PLAYS_TABLE => 'p'),
				'ON'	=> 's.game_id = p.game_id AND s.user_id = p.user_id'
			),
			array(
				'FROM'	=> array(USERS_TABLE => 'u'),
				'ON'	=> 's.user_id = u.user_id'
			),
		),

		'WHERE'		=> 's.game_id = s.game_id',

		'ORDER_BY'	=> 's.score ' . $score_order . ', s.score_date ASC',
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query_limit($sql, $number_of_score);
	$best_user = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	$result = $db->sql_query_limit($sql, $arcade->config['stat_items_per_page'], $start);
	$position = ($start > 0 ) ? $start : 0;
	$actual_position = ($start > 0 ) ? $start : 0;
	$lastscore = 0;
	while ($row = $db->sql_fetchrow($result))
	{
		$actual_position++;
		if ($lastscore != $row['score'])
		{
			$position = $actual_position;
		}
		$lastscore = $row['score'] ;

		$comment_display = generate_text_for_display($row['comment_text'], $row['comment_uid'], $row['comment_bitfield'], $row['comment_options']);
		$template->assign_block_vars('high_scorerow', array(
            'GAME_NAME'     => $row['game_name'],
            'U_GAME_PLAY'   => append_sid("{$phpbb_root_path}arcade.$phpEx", "mode=play&amp;g={$row['game_id']}"),
            'GAME_IMAGE'    => ($row['game_image']) ? $phpbb_root_path . "arcade.$phpEx?img=" . $row['game_image'] : '',
			
			'POS' 			=> $position,
			'USERNAME' 		=> $arcade->get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
			'SCORE' 		=> $arcade->number_format($row['score']),
			'COMMENT' 		=> ($comment_display != '') ? $comment_display : '&nbsp;',
			'DATE' 			=> $user->format_date($row['score_date']),
			'TOTAL_PLAYS' 	=> $arcade->number_format($row['total_plays']),
			'TOTAL_TIME' 	=> $arcade->time_format($row['total_time'])
			));
	}
	$db->sql_freeresult($result);
}

$template->assign_vars(array(
    'U_ARCADE' 		=> append_sid("{$phpbb_root_path}arcade.$phpEx"),
	'S_IN_ARCADE'	=> false
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/arcade_highscore.html',
	));

?>