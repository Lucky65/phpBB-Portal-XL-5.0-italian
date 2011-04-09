<?php
/**
*
* @package DM Video
* @version $Id: index.php 216 2009-12-20 13:44:46Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/message_parser.' . $phpEx);

// Some mod related variables and includes
$dm_video_path = (defined('DM_VIDEO_ROOT_PATH')) ? DM_VIDEO_ROOT_PATH : 'dm_video/';
include($phpbb_root_path . $dm_video_path . 'common.' . $phpEx);

// Do the session handling
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/dm_video');

// Main template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_VIDEO'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// Check authorisation
$is_authorised = ($auth->acl_get('u_dm_video_view')) ? true : false;

if (!$is_authorised)
{
	trigger_error('NOT_AUTHORISED');
}

// Check mode
$mode = request_var('mode', '');

// Check for unapproved videos
if ( $auth->acl_get('a_dm_video_release') )
{
	generate_unapproved();
}

// Check for reported videos
if ( $auth->acl_get('a_dm_video_report') )
{
	generate_reported();
}

// Create the category list
$cat_id = 0;
generate_cat_list((int) $cat_id);

// Create latest XX videos
generate_latest_videos();

// Create random video
$random_show_id = $random_cat_id = '';

$sql_array = array(
    'SELECT'    => 'COUNT(video_id) AS check_number',

    'FROM'      => array(
        DM_VIDEO_TABLE => 'v'
    ),
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);

$row = $db->sql_fetchrow($result);

if ($row['check_number'] > 0);
{
	switch ($db->sql_layer)
	{
		case 'postgres':
			$order_by = 'RANDOM()';
		break;

		case 'mssql':
		case 'mssql_odbc':
			$order_by = 'NEWID()';
		break;
        
		default:
			$order_by = 'RAND()';
		break;
	}

	$sql_array = array(
		'SELECT'    => 	'*',

		'FROM'      => 	array(
			DM_VIDEO_TABLE  => 	'v'
		),

		'WHERE'     => 	'video_approval = 1',

		'ORDER_BY'  => 	$order_by
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query_limit($sql, 1);
	
	while ($row = $db->sql_fetchrow($result))
	{
		$random_show_id	= (int) $row['video_id'];
		$random_cat_id 	= (int) $row['video_cat_id'];

		$template->assign_vars(array(
			'S_RANDOM_EXIST'	=> true,
			'U_SHOW_RANDOM' 	=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $random_show_id . "&amp;c=" . (int) $random_cat_id),
		));
	}
	$db->sql_freeresult($result);

}

// Links to call the Top XX and random video
$template->assign_vars(array(
	'TOPTEN_RATING'	=> sprintf($user->lang['DMV_RATES'], (string) $dmv_config['top_ratings']),
	'TOPTEN_HITS'	=> sprintf($user->lang['DMV_HITS'], (string) $dmv_config['top_views']),
	'U_TOPTEN_HITS'	=> append_sid("{$phpbb_root_path}{$dm_video_path}topten.$phpEx", "mode=hits"),
	'U_TOPTEN_RATE'	=> append_sid("{$phpbb_root_path}{$dm_video_path}topten.$phpEx", "mode=rating"),
	'U_ACTION'		=> append_sid("{$phpbb_root_path}{$dm_video_path}searchvideo.$phpEx"),
	'U_SHOW_ALL'	=> append_sid("{$phpbb_root_path}{$dm_video_path}all_videos.$phpEx"),
));

// Copyright notice
$template->assign_vars(array(
	'DMV_COPY_NOTE'	=> sprintf($user->lang['DMV_COPY_NOTE'], (string) $dmv_config['copyright_email'], (string) $dmv_config['copyright_show']),
));

// Header information
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . $user->lang['DMV_INDEX']);

// Template file to use
$template->set_filenames(array(
	'body' => $dm_video_path . 'index_body.html'
));

// Footer information
page_footer();

?>