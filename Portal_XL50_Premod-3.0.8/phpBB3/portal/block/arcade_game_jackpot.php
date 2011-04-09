<?php
/*
*
* @name arcade_game_jackpot.php
* @package phpBB3 Portal XL 5.0
* @version $Id: arcade_game_jackpot.php,v 1.0 2009/11/15 damysterious Exp $
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

/**
* Start session management
*/
// Initialize arcade auth
$auth_arcade->acl($user->data);
// Initialize arcade class
$arcade = new arcade(false);

$number_of_game_jackpot = $arcade->config['stat_items_per_page'];

/**
* 
*/
if (!$auth_arcade->acl_getc_global('c_list'))
{
		$template->assign_block_vars('game_jackpot_no', array(
			'LOGIN_VIEWARCADE' 		=> $user->lang['LOGIN_VIEWARCADE']
		));
}
else
{
    $sql_array = array(
        'SELECT'    => 'g.game_name, g.game_id, g.game_image, g.game_jackpot',

        'FROM'        => array(
            ARCADE_GAMES_TABLE    => 'g',
        ),
		
        'WHERE'     => 'g.game_jackpot > 0',

		'ORDER_BY'	=> 'g.game_jackpot DESC'
    );
    $sql = $db->sql_build_query('SELECT', $sql_array);
    $result = $db->sql_query_limit($sql, $number_of_game_jackpot);

    $game_jackpot = $db->sql_fetchrowset($result);
    $db->sql_freeresult($result);

    for ($i = 0; $i < count($game_jackpot); $i++) 
    { 
		$template->assign_block_vars('game_jackpot', array(
			'U_GAME_PLAY' 		=> append_sid("{$phpbb_root_path}arcade.$phpEx", "mode=play&amp;g=" . $game_jackpot[$i]['game_id']),
			'GAME_IMAGE' 		=> ($game_jackpot[$i]['game_image'] != '') ? $phpbb_root_path . "arcade.$phpEx?img=" . $game_jackpot[$i]['game_image'] : '',
			'GAME_IMAGE_ALT'	=> $game_jackpot[$i]['game_name'],
			'GAME_NAME' 		=> $game_jackpot[$i]['game_name'],
			'GAME_JACKPOT' 		=> $arcade->number_format($game_jackpot[$i]['game_jackpot']),
		));
    }
}

$template->assign_vars(array(
    'U_ARCADE' 		=> append_sid("{$phpbb_root_path}arcade.$phpEx"),
	'S_IN_ARCADE'	=> false
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/arcade_game_jackpot.html',
	));

?>