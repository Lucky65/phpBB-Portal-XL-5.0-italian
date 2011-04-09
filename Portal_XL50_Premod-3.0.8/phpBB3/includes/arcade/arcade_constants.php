<?php
/**
*
* @package arcade
* @version $Id: arcade_constants.php 802 2009-07-01 16:22:57Z JRSweets $
* @copyright (c) 2008 http://www.JeffRusso.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

define('ACL_ARCADE_GROUPS_TABLE',		$table_prefix . 'acl_arcade_groups');
define('ACL_ARCADE_OPTIONS_TABLE',		$table_prefix . 'acl_arcade_options');
define('ACL_ARCADE_ROLES_DATA_TABLE',	$table_prefix . 'acl_arcade_roles_data');
define('ACL_ARCADE_ROLES_TABLE',		$table_prefix . 'acl_arcade_roles');
define('ACL_ARCADE_USERS_TABLE',		$table_prefix . 'acl_arcade_users');
define('ARCADE_ACCESS_TABLE',			$table_prefix . 'arcade_access');
define('ARCADE_CATS_TABLE',				$table_prefix . 'arcade_categories');
define('ARCADE_CONFIG_TABLE',			$table_prefix . 'arcade_config');
define('ARCADE_DOWNLOAD_TABLE',			$table_prefix . 'arcade_download');
define('ARCADE_GAMES_TABLE',			$table_prefix . 'arcade_games');
define('ARCADE_FAVS_TABLE', 			$table_prefix . 'arcade_favorites');
define('ARCADE_PLAYS_TABLE',			$table_prefix . 'arcade_plays');
define('ARCADE_RATING_TABLE', 			$table_prefix . 'arcade_game_rating');
define('ARCADE_SESSIONS_TABLE', 		$table_prefix . 'arcade_sessions');
define('ARCADE_SCORES_TABLE', 			$table_prefix . 'arcade_scores');
define('ARCADE_ERRORS_TABLE', 			$table_prefix . 'arcade_errors');
define('ARCADE_REPORTS_TABLE', 			$table_prefix . 'arcade_reports');

define('ARCADE_ERROR_UNKNOWN', 0);
define('ARCADE_ERROR_SESSION', 1);
define('ARCADE_ERROR_GAMETYPE', 2);
define('ARCADE_ERROR_TIME', 3);
define('ARCADE_ERROR_IBPROV3', 4);
define('ARCADE_ERROR_FILEMISSING', 5);

define('ARCADE_CAT_DISPLAY_BOTH', 0);
define('ARCADE_CAT_DISPLAY_NAME', 1);
define('ARCADE_CAT_DISPLAY_IMAGE', 2);

define('SCORETYPE_HIGH', 0);
define('SCORETYPE_LOW', 1);

define('ARCADE_CAT', 0);
define('ARCADE_CAT_GAMES', 1);
define('ARCADE_LINK', 2);

define('ARCADE_FLAG_LINK_TRACK', 1);

define('ARCADE_GUEST_NONE', 0);
define('ARCADE_GUEST_VIEW', 1);
define('ARCADE_GUEST_PLAY', 2);

define('LIMIT_PLAY_TYPE_NONE', 0);
define('LIMIT_PLAY_TYPE_POSTS', 1);
define('LIMIT_PLAY_TYPE_DAYS', 2);
define('LIMIT_PLAY_TYPE_BOTH', 3);

define('ARCADE_FAV_ID', -1);
define('ARCADE_SEARCH_ID', -2);
define('ARCADE_PLAY_ID', -3);

define('ARCADE_ORDER_ACP', '0');
define('ARCADE_ORDER_FIXED', 'f');
define('ARCADE_ORDER_INSTALLDATE', 'd');
define('ARCADE_ORDER_NAME', 'n');
define('ARCADE_ORDER_PLAYS', 'p');
define('ARCADE_ORDER_RATING', 'r');
define('ARCADE_ORDER_ASC', 'a');
define('ARCADE_ORDER_DESC', 'd');

define('AMOD_GAME', 1);
define('IBPRO_GAME', 2);
define('V3ARCADE_GAME', 3);
define('IBPROV3_GAME', 4);
define('IBPRO_ARCADELIB_GAME', 5);
define('NOSCORE_GAME', 6);
define('AR_GAME', 7);

define('ARCADE_COOKIE_TIME', 72000);

define('ARCADE_FREE', -1);
define('CASH_MOD', 1);
define('POINTS_SYSTEM', 2);
define('SIMPLE_POINTS_SYSTEM', 3);
define('ULTIMATE_POINTS_SYSTEM', 4);

define('ARCADE_REPORT_SCORING', 1);
define('ARCADE_REPORT_PLAYING', 2);
define('ARCADE_REPORT_DOWNLOADING', 3);
define('ARCADE_REPORT_OTHER', 4);

define('ARCADE_REPORT_OPEN', 0);
define('ARCADE_REPORT_CLOSE', 1);

?>