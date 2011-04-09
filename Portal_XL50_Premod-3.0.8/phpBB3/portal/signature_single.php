<?php 
/*
*
* @name signature_single.php
* @package phpBB3 Portal XL Premod
* @version $Id: signature_single.php, v 1.1 2009/09/20 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/

/**
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

global $db, $auth, $user, $template;
global $phpbb_root_path, $phpEx, $config, $portal_config;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

$display_online_list = true;

if ($config['load_online'] && $config['load_online_time'] && $display_online_list)
{
	$logged_visible_online = $logged_hidden_online = $guests_online = $prev_user_id = 0;
	$prev_session_ip = $reading_sql = '';

	if (!empty($_REQUEST['f']))
	{
		$f = request_var('f', 0);

		// Do not change this (it is defined as _f_={forum_id}x within session.php)
		$reading_sql = " AND s.session_page LIKE '%\_f\_={$f}x%'";

	}

	// Get number of online guests
	if (!$config['load_online_guests'])
	{
		if ($db->sql_layer === 'sqlite')
		{
			$sql = 'SELECT COUNT(session_ip) as num_guests
				FROM (
					SELECT DISTINCT s.session_ip
						FROM ' . SESSIONS_TABLE . ' s
						WHERE s.session_user_id = ' . ANONYMOUS . '
							AND s.session_time >= ' . (time() - ($config['load_online_time'] * 60)) . 
							$reading_sql .
				')';
		}
		else
		{
			$sql = 'SELECT COUNT(DISTINCT s.session_ip) as num_guests
				FROM ' . SESSIONS_TABLE . ' s
				WHERE s.session_user_id = ' . ANONYMOUS . '
					AND s.session_time >= ' . (time() - ($config['load_online_time'] * 60)) . 
				$reading_sql;
		}
		$result = $db->sql_query($sql);
		$guests_online = (int) $db->sql_fetchfield('num_guests');
		$db->sql_freeresult($result);
	}

	$sql = 'SELECT u.username, u.user_id, u.user_type, u.user_allow_viewonline, u.user_colour, s.session_ip, s.session_viewonline
		FROM ' . USERS_TABLE . ' u, ' . SESSIONS_TABLE . ' s
		WHERE s.session_time >= ' . (time() - (intval($config['load_online_time']) * 60)) . 
			$reading_sql .
			((!$config['load_online_guests']) ? ' AND s.session_user_id <> ' . ANONYMOUS : '') . '
			AND u.user_id = s.session_user_id 
		ORDER BY u.username ASC, s.session_ip ASC';
	$result = $db->sql_query($sql);
	
	$display_online_list = true;
	$prev_session_ip = $reading_sql = '';
	
	while ($row = $db->sql_fetchrow($result))
	{ 
		// User is logged in and therefore not a guest
		if ($row['user_id'] != ANONYMOUS)
		{
			// Skip multiple sessions for one user
			if ($row['user_id'] != $prev_user_id)
			{
			  if ($row['user_allow_viewonline'] && $row['session_viewonline'])
			  {
				  $logged_visible_online++;
			  }
			  else
			  {
				  $logged_hidden_online++;
			  }
			  
			  // User is logged in and therefor not a guest 
			  if ( $row['session_logged_in'] ) 
			  { 
				// Skip multiple sessions for one user 
				if ($row['session_ip'] != $prev_session_ip) 
				{ 
					  $display_online_list++; 
				} 
			  } 
			}
			
			$prev_user_id = $row['user_id'];
			
		}
		else
		{
		  // Skip multiple sessions for one user
		  if ($row['session_ip'] != $prev_session_ip)
		  {
			  $guests_online++;
		  }
		}

		$prev_session_ip = $row['session_ip'];
	} 
	$total_online_users = $logged_visible_online + $logged_hidden_online + $display_online_list + $guests_online;
	
}
$db->sql_freeresult($result);

/*
* Random image processing
*/
// Images directory
$folder = $phpbb_root_path . 'portal/images/signatures/';

// Space seperated list of extensions, you probably won't have to change this.
$exts = 'jpg jpeg png gif';

$files = array(); $i = -1;
if ('' == $folder) $folder = './';

  $handle = opendir($folder);
  $exts = explode(' ', $exts);
  while (false !== ($file = readdir($handle))) 
  {
	foreach($exts as $ext) 
	{
	  if (preg_match('/\.'.$ext.'$/i', $file, $test)) 
	{
	  $files[] = $file;
	  ++$i;
	}
  }
}
closedir($handle);
mt_srand((double)microtime()*1000000);
$rand_sigimg = mt_rand(0, $i);

/*
* Processing the image
*/
$image = $folder.$files[$rand_sigimg];
$img = imagecreatefrompng($image);

// Set font
$font = 'signature_arial.ttf';

/*
* Set font colors
*/
$color = array(
   "WHITE" 	=> imagecolorallocate($img, 204, 204, 204),
   "BLACK" 	=> imagecolorallocate($img, 0, 0, 0),
   "GRAY" 	=> imagecolorallocate($img, 80, 80, 80),
   "RED" 	=> imagecolorallocate($img, 255, 0, 0),
   "BLUE" 	=> imagecolorallocate($img, 51, 0, 153),
   "PINK" 	=> imagecolorallocate($img, 255, 135, 255),
   "VIOLET" => imagecolorallocate($img, 153, 51, 255),
   "CYAN" 	=> imagecolorallocate($img, 0, 204, 255),
   "LIME" 	=> imagecolorallocate($img, 0, 255, 153),
   "GREEN" 	=> imagecolorallocate($img, 0, 153, 0)
);
$colornames = array("WHITE", "GRAY", "RED", "BLUE", "PINK", "VIOLET", "CYAN", "LIME", "GREEN");

/*
* Returns board variables
*/
$version = $config['version']; 
$portal_version = $portal_config['portal_version']; 
$sitename = $config['sitename']; 
$total_users = $config['num_users']; 
$total_posts = $config['num_posts']; 
$total_topics = $config['num_topics'];
$newest_userdata = $config['newest_username']; 
$newest_user = $config['newest_username']; 

/*
* Returns the IPv4 address of the Internet host specified by hostname. 
*/
$domain = gethostbyname($_SERVER['REMOTE_ADDR']);
/*
* Returns the host name of the Internet host specified by ip_address. 
*/
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

/*
* Returns board language definitions
*/
$sig_statfor = $user->lang['SIG_STATISTICS_FOR'];
$sig_phpbbversion = $user->lang['SIG_PHPBB_VERSION'];
$sig_portalxlversion = $user->lang['SIG_PORTALXL_VERSION'];
$sig_members = $user->lang['SIG_MEMBERS'];
$sig_online = $user->lang['SIG_ONLINE'];
$sig_domain = $user->lang['SIG_DOMAIN'];
$sig_totalposts = $user->lang['SIG_TOTAL_POSTS'];
$sig_postsin = $user->lang['SIG_POSTS_IN'];
$sig_topics = $user->lang['SIG_TOPICS'];
$sig_newestmember = $user->lang['SIG_NEWEST_MEMBER'];

/*
* Processing the text overlay
*/
imagettftext($img, 10, 0, 105, 19, $color[$colornames[rand(0, 8)]], $font, "$sig_statfor $sitename");
imagettftext($img, 7, 0, 105, 30, $color["BLACK"], $font, "$sig_phpbbversion $version");
imagettftext($img, 7, 0, 233, 30, $color["BLACK"], $font, "$sig_portalxlversion $portal_version");
imagettftext($img, 7, 0, 105, 40, $color["BLACK"], $font, "$sig_members $total_users  -");
imagettftext($img, 7, 0, 195, 40, $color[$colornames[rand(0, 8)]], $font, " $sig_online $total_online_users");
imagettftext($img, 7, 0, 255, 40, $color["BLACK"], $font, "   $sig_domain $domain");
imagettftext($img, 7, 0, 105, 50, $color["BLACK"], $font, "$sig_totalposts $total_posts   $sig_postsin $total_topics   $sig_topics");
imagettftext($img, 7, 0, 105, 60, $color["BLACK"], $font, "$sig_newestmember $newest_user");

/*
* Send the content type header so the image is displayed properly
*/
header("Content-Type: image/png"); 

/*
* Send the image to the browser
*/
imagepng($img); 

/*
* Destroy the image to free up the memory
*/
imagedestroy ($img); 
  
?>