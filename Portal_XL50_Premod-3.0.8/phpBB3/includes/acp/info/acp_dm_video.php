<?php
/**
*
* @package DM Video
* @version $Id: acp_dm_video.php 202 2009-12-17 08:40:11Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @Create the modules in ACP
*/
class acp_dm_video_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_dm_video',
			'title'		=> 'ACP_DMV_DM_VIDEO',
			'version'	=> '1.0.5',
			'modes'		=> array(
				'video_config'		=> array('title' => 'ACP_DMV_CONFIG', 'auth' => 'acl_a_dm_video_config', 'cat' => array('ACP_DMV_DM_VIDEO')),
				'manage_categories'	=> array('title' => 'ACP_DMV_MANAGE_CATEGORIES', 'auth' => 'acl_a_dm_video_cats', 'cat' => array('ACP_DMV_DM_VIDEO')),
				'edit_videos'		=> array('title' => 'ACP_DMV_EDIT', 'auth' => 'acl_a_dm_video_edit', 'cat' => array('ACP_DMV_DM_VIDEO')),
				'release_videos'	=> array('title' => 'ACP_DMV_RELEASE', 'auth' => 'acl_a_dm_video_release', 'cat' => array('ACP_DMV_DM_VIDEO')),
				'reported_videos'	=> array('title' => 'ACP_DMV_REPORTED', 'auth' => 'acl_a_dm_video_report', 'cat' => array('ACP_DMV_DM_VIDEO')),
			),
		);
	}
}

?>