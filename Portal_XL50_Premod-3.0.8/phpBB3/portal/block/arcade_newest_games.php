<?php
/*
*
* @name arcade_newest_games.php
* @package phpBB3 Portal XL 5.0
* @version $Id: arcade_newest_games.php,v 1.0 2009/11/02 damysterious Exp $
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
		$template->assign_block_vars('newest_games_no', array(
			'LOGIN_VIEWARCADE' 		=> $user->lang['LOGIN_VIEWARCADE']
		));
}
else
{
    $sql_array = array(
        'SELECT'    => 'g.game_name, g.game_plays, g.game_id, g.game_image, g.game_installdate',

        'FROM'        => array(
            ARCADE_GAMES_TABLE    => 'g',
        ),

		'ORDER_BY'	=> 'g.game_installdate DESC'
    );
    $sql = $db->sql_build_query('SELECT', $sql_array);
    $result = $db->sql_query_limit($sql, $number_of_score);

    $newest_game = $db->sql_fetchrowset($result);
    $db->sql_freeresult($result);

    for ($i = 0; $i < count($newest_game); $i++) 
    { 
		$template->assign_block_vars('newest_games', array(
			'U_GAME_PLAY' 		=> append_sid("{$phpbb_root_path}arcade.$phpEx", "mode=play&amp;g=" . $newest_game[$i]['game_id']),
			'GAME_IMAGE' 		=> ($newest_game[$i]['game_image'] != '') ? $phpbb_root_path . "arcade.$phpEx?img=" . $newest_game[$i]['game_image'] : '',
			'GAME_IMAGE_ALT'	=> $newest_game[$i]['game_name'],
			'GAME_NAME' 		=> ($newest_game[$i]['game_plays'] == 1) ? sprintf($user->lang['ARCADE_STATS_PLAY'], $newest_game[$i]['game_name'], $arcade->number_format($newest_game[$i]['game_plays'])) : sprintf($user->lang['ARCADE_STATS_PLAYS'], $newest_game[$i]['game_name'], $arcade->number_format($newest_game[$i]['game_plays'])),
		));
    }
}

$template->assign_vars(array(
    'U_ARCADE' 		=> append_sid("{$phpbb_root_path}arcade.$phpEx"),
	'S_IN_ARCADE'	=> false
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/arcade_newest_games.html',
	));

?>