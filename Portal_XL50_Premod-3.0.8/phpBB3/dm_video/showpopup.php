<?php
/**
*
* @package DM Video
* @version $Id: showpopup.php 211 2009-12-18 10:23:29Z femu $
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

// Set some variables
$video_id	= request_var('v', 0);

// Select some data for the template
$sql_array = array(
    'SELECT'    => '*',

    'FROM'      => array(
        DM_VIDEO_TABLE => 'v'
    ),

    'WHERE'     =>  'video_id = ' . (int) $video_id,
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);

$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

$video_title 	= (string) $row['video_title'];
$video_singer 	= (string) $row['video_singer'];
$video_url 		= (string) $row['video_url'];

// Send the variables to the template
$template->assign_vars(array(
	'VIDEO_TITLE' 	=> $video_title,
	'VIDEO_SINGER'	=> $video_singer,
	'VIDEO_URL'		=> htmlspecialchars_decode($row['video_url']),
	)
);
$db->sql_freeresult($result);

// Header information
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . censor_text($row['video_title']));

// Template file to use
$template->set_filenames(array(
   'body' => $dm_video_path . 'video_popup_body.html'
));

// Footer information
page_footer();

?>