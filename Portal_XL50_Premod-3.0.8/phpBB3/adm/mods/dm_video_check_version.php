<?php
/**
*
* @package version check
* @version $Id: dm_video_check_version.php 133 2009-08-06 06:44:40Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package mod_version_check
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class dm_video_check_version
{
	function version()
	{
		global $config;

		return array(
			'author'	=> 'femu',
			'title'		=> 'DM Video',
			'tag'		=> 'dm_video',
			'version'	=> '1.0.5',
			'file'		=> array('die-muellers.org', 'updatecheck', 'dm_video.xml'),
		);
	}
}

?>