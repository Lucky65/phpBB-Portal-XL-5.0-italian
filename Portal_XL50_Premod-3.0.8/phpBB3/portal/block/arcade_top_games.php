<?php
/*
*
* @name arcade_top_games.php
* @package phpBB3 Portal XL 5.0
* @version $Id: arcade_top_games.php,v 1.0 2009/11/02 damysterious Exp $
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
		$template->assign_block_vars('top_games_no', array(
			'LOGIN_VIEWARCADE' 		=> $user->lang['LOGIN_VIEWARCADE']
		));
}
else
{
    $sql_array = array(
        'SELECT'    => 'g.game_id, g.game_name, g.game_image, g.game_highuser, g.game_highscore, g.game_highdate, g.cat_id, 
                        u.username, u.user_colour, u.user_id, u.user_type, u.user_website, u.user_avatar, u.user_avatar_type, u.user_country_flag',

        'FROM'        => array(
            ARCADE_GAMES_TABLE    => 'g',
        ),

        'LEFT_JOIN'    => array(
            array(
                'FROM'    => array(USERS_TABLE => 'u'),
                'ON'    => 'g.game_highuser = u.user_id'
            )
        ),

        'WHERE'        => 'g.game_highscore > 0',

        'ORDER_BY'    => 'g.game_highdate DESC'
    );
    $sql = $db->sql_build_query('SELECT', $sql_array);
    $result = $db->sql_query_limit($sql, $number_of_score);

    $top_game = $db->sql_fetchrowset($result);
    $db->sql_freeresult($result);

    for ($i = 0; $i < count($top_game); $i++) 
    { 
		// Country Flags Version 3.0.6
		if ($user->data['user_id'] != ANONYMOUS)
		{
			$flag_title = $flag_img = $flag_img_src = '';
			get_user_flag($top_game[$i]['user_country_flag'], $top_game[$i]['user_country'], $flag_title, $flag_img, $flag_img_src);
		}
		// Country Flags Version 3.0.6

        $template->assign_block_vars('top_games', array(    
            'GAME_NAME'     	=> $top_game[$i]['game_name'],
            'U_GAME_PLAY'   	=> append_sid("{$phpbb_root_path}arcade.$phpEx", "mode=play&amp;g={$top_game[$i]['game_id']}"),
            'GAME_IMAGE'    	=> ($top_game[$i]['game_image']) ? $phpbb_root_path . "arcade.$phpEx?img=" . $top_game[$i]['game_image'] : '',
            'GAME_USER'     	=> $arcade->get_username_string('full', $top_game[$i]['user_id'], $top_game[$i]['username'], $top_game[$i]['user_colour']),
      		'GAME_USER_COLOR' 	=> $user_colour,
 			'GAME_USER_AV'	    => get_user_avatar($top_game[$i]['user_avatar'], $top_game[$i]['user_avatar_type'], 15, 15, $top_game[$i]['username']),
	  		'FLAG_TITLE'		=> $flag_title,
	  		'FLAG_IMG'			=> $flag_img,
	  		'FLAG_IMG_SRC'		=> $flag_img_src,
            'SCORE_DATE'    	=> $user->format_date($top_game[$i]['game_highdate']),                            
            'U_GAME_USER'   	=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $top_game[$i]['user_id']),
            'GAME_SCORE'    	=> $arcade->number_format($top_game[$i]['game_highscore']),
			'GAME_DOWNLOAD'     => ($top_game[$i]['game_download_total'] == 1) ? sprintf($user->lang['ARCADE_GAME_DOWNLOAD_TOTAL'], $top_game[$i]['game_name'], $arcade->number_format($top_game[$i]['game_download_total'])) : sprintf($user->lang['ARCADE_GAME_DOWNLOAD_TOTALS'], $top_game[$i]['game_name'], $arcade->number_format($top_game[$i]['game_download_total'])),
			));
    }
}

$template->assign_vars(array(
    'U_ARCADE' 		=> append_sid("{$phpbb_root_path}arcade.$phpEx"),
	'S_IN_ARCADE'	=> false
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/arcade_top_games.html',
	));

?>