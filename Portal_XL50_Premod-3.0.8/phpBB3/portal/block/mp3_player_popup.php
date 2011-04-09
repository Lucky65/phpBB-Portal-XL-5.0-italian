<?php
/**
*
* @name mp3_player_popup.php
* @package phpBB3 Portal XL 5.0
* @version $Id: mp3_player_popup.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include_once($phpbb_root_path . 'includes/functions.' . $phpEx);
include_once($phpbb_root_path . 'includes/functions_display.' . $phpEx);

global $portal_config, $config, $phpbb_root_path, $db, $user, $template, $phpEx;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}
	
	global $userdata;

	$one_song = '';
	$position = 'LEFT';
	$music ='';
	$music_list = '';
	$song_list[] = '';

	$mp3_path = ($phpbb_root_path . 'portal/mp3/music/');

	mt_srand((double)microtime()*1000000);

	$handle=opendir($phpbb_root_path . 'portal/mp3/media');

	if( !$handle) echo 'Check to see if you added the mp3 directory!';
	$i = 0;
	$music_list = $mp3_path;
	
	while (false!==($file = readdir($handle)))
	{
  	if (eregi(".mp3", $file) || eregi(".Mp3", $file) || eregi("m3u", $file)) 
    {
	    $file .= "$file ";
			$music_list .= $file;
			$music_list .= $mp3_path;
			$song_list[$i++] = $mp3_path . $file;
    }
	}
	closedir($handle);

 	$upload_dir = ($phpbb_root_path . 'portal/mp3/media/');
	
page_header($config['sitename'] . ' : ' . $user->lang['MEDIA_PLAYER_VERSION']);

$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['MEDIA_PLAYER_VERSION'],
));

	$template->assign_vars(array(
		'U_UPLOAD_DIR'    			=> $upload_dir,
		'L_MEDIA_UPLOAD'   			=> sprintf($user->lang['MEDIA_UPLOAD']),
		'L_MEDIA_PLAYER_POPUP' 	 	=> sprintf($user->lang['MEDIA_PLAYER_POPUP']),
		'L_MEDIA_PLAYER_VERSION'	=> sprintf($user->lang['MEDIA_PLAYER_VERSION']),
		'PATH'            			=> ($phpbb_root_path . 'portal/mp3'),
		'U_MEDIA_PLAYER'   			=> ($phpbb_root_path . 'portal/block/mp3_player_popup.php'),
		
		'PORTAL'					=> (defined('PORTAL')) ? true : false,
		'PORTAL_INDEX_PAGE'			=> ($portal_config['portal_index_layout']) ? true : false,
	 ));

	$template->set_filenames(array(
		'body' => 'portal/block/mp3_player_popup.html')
	);

page_footer();

?>