<?php
/*
*
* @name center_random_video.php
* @package phpBB3 Portal XL Premod
* @version $Id: center_random_video.php,v 1.0.0 2010/05/30 damysterious Exp $
*
* @copyright (c) 2007, 2010  Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

/*
* Start session management
*/
if (!function_exists('generate_unapproved'))
{
	$dm_video_path = (defined('DM_VIDEO_ROOT_PATH')) ? DM_VIDEO_ROOT_PATH : 'dm_video/';
	$user->add_lang('mods/dm_video');
	include($phpbb_root_path . $dm_video_path . 'common.' . $phpEx);
}

/*
* Begin block script here
*/
$is_authorised = ($auth->acl_get('u_dm_video_view') || $auth->acl_get('a_dm_video_view')) ? true : false;

if ($is_authorised == true )
{
	$url = '';

	$sql = 'SELECT COUNT(video_id) as total_number
		FROM ' . DM_VIDEO_TABLE . '
		LIMIT 1';
	$result = $db->sql_query($sql);
	$total_number = (int) $db->sql_fetchfield('total_number');

	if ($total_number > 0 || $total_number != '');
	{
		$sql = 'SELECT *
			FROM ' . DM_VIDEO_TABLE . '
			WHERE video_approval = 1
			ORDER BY RAND() LIMIT 1';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$url 		= $row['video_url'];
			$title 		= $row['video_title'];
			$singer 	= $row['video_singer'];
		}
		$db->sql_freeresult($result);
	}

	$template->assign_block_vars('random_video', array(
		'TITLE' 		=> $title,
		'URL' 			=> htmlspecialchars_decode($url),
		'SINGER' 		=> $singer,
	));

	// Set the filename of the template you want to use for this file.
	$template->set_filenames(array(
	   'body'      		=> 'portal/block/center_random_video.html'
	));
}

?>