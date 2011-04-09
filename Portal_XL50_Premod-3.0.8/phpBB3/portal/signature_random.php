<?php 
/*
*
* @name signature_random.php
* @package phpBB3 Portal XL Premod
* @version $Id: signature_random.php, v 1.1 2009/09/20 damysterious Exp $
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
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

global $db, $auth, $user, $template;
global $phpbb_root_path, $phpEx, $config, $portal_config;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

/*
* Get user information
*/
$user_id = $user->data['user_id'];
$username = $user->data['username'];

$sql = 'SELECT *
	FROM ' . USERS_TABLE . '
	WHERE ' . (($username) ? "username_clean = '" . $db->sql_escape(utf8_clean_string($username)) . "'" : "user_id = $user_id");
$result = $db->sql_query($sql);
$sig_member = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

$user_avatar = get_user_avatar($sig_member['user_avatar'], $sig_member['user_avatar_type'], $sig_member['user_avatar_width'], $sig_member['user_avatar_height']);
$rank_title = $rank_img = '';
get_user_rank($sig_member['user_rank'], $sig_member['user_posts'], $rank_title, $rank_img, $rank_img_src);
$username = $sig_member['username'];
$user_id = (int) $sig_member['user_id'];
$colour = $sig_member['user_colour'];

$now = getdate(time() + $sig_member['timezone'] + $sig_member['dst'] - date('Z'));
$birthday_list .= (($birthday_list != '') ? ', ' : '') . $sig_member['username'];
$birthday_list .= (($birthday_list != '') ? ', ' : '') . $sig_member['user_birthday'];
if ($age = (int) substr($sig_member['user_birthday'], -4))
{
	$birthday_list .= ' (' . ($now['year'] - $age) . ')';
}

/*
* Last visit date/time
*/
$s_last_visit = ($user->data['user_id'] != ANONYMOUS) ? $user->format_date($user->data['session_last_visit']) : '';
$db->sql_freeresult($result);

/*
* Returns board language definitions
*/
$sig_welcomeback 		= $user->lang['SIG_WELCOME_BACK'];
$sig_rank 				= $user->lang['SIG_RANK'];
$sig_user 				= $user->lang['SIG_USER'];
$sig_posts 				= $user->lang['SIG_POSTS'];
$sig_memberfor 			= $user->lang['SIG_MEMBER_FOR'];
$sig_postpercentage 	= $user->lang['SIG_POST_PERCENTAGE'];
$sig_lastvisited 		= $user->lang['SIG_LAST_VISITED'];
$sig_age 				= $user->lang['SIG_AGE'];
$sig_days 				= $user->lang['SIG_DAYS'];

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

// Set font
$font = 'signature_arial.ttf';

/*
* Define random processing of signature
*/
$picksig = rand(1,3); 

if ( $picksig == 1 ) 
{ 
  /*
  * Processing the image
  */
  // $image = "../portal/images/signatures/signature01.png"; 
  $image = $folder.$files[$rand_sigimg];
  $img = imagecreatefrompng($image); 

  /*
  * Set font colors
  */
  $color = array(
	 "WHITE" 	=> imagecolorallocate($img, 204, 204, 204),
	 "BLACK" 	=> imagecolorallocate($img, 0, 0, 0),
	 "GRAY" 	=> imagecolorallocate($img, 80, 80, 80),
	 "RED" 		=> imagecolorallocate($img, 255, 0, 0),
	 "BLUE" 	=> imagecolorallocate($img, 51, 0, 153),
	 "PINK" 	=> imagecolorallocate($img, 255, 135, 255),
	 "VIOLET" 	=> imagecolorallocate($img, 153, 51, 255),
	 "CYAN" 	=> imagecolorallocate($img, 0, 204, 255),
	 "LIME" 	=> imagecolorallocate($img, 0, 255, 153),
	 "GREEN" 	=> imagecolorallocate($img, 0, 153, 0)
  );
  $colornames = array("WHITE", "GRAY", "RED", "BLUE", "PINK", "VIOLET", "CYAN", "LIME", "GREEN");
  
  /*
  * Returns board variables
  */
  $regdate 			= $sig_member['user_regdate']; 
  $sig_memberdays 	= max(1, round( ( time() - $regdate ) / 86400 )); 
  $posts_per_day 	= round($sig_member['user_posts'] / $sig_memberdays); 
  $posts 			= $sig_member['user_posts']; 
  $username 		= $sig_member['username']; 
  $userrank 		= $rank_title;
  $total_posts 		= $config['num_posts']; 
  $last_visit_time 	= $user->format_date($sig_member['user_lastvisit']); 
  $percentage 		=  round(( $total_posts ) ? min(100, ($sig_member['user_posts'] / $total_posts) * 100) : 0); 

  /*
  * Processing the text overlay
  */
  imagettftext($img, 10, 0, 105, 18, $color["BLACK"], $font, "$sig_welcomeback $username");
  imagettftext($img, 7, 0, 105, 29, $color[$colornames[rand(0, 8)]], $font, "$sig_rank $userrank");
  imagettftext($img, 7, 0, 105, 41, $color["BLACK"], $font, "$sig_posts $posts");
  imagettftext($img, 7, 0, 195, 41, $color["BLACK"], $font, "$sig_memberfor $sig_memberdays $sig_days");
  imagettftext($img, 7, 0, 105, 52, $color[$colornames[rand(0, 8)]], $font, "$sig_postpercentage $percentage %");
  imagettftext($img, 7, 0, 105, 64, $color["BLACK"], $font, "$sig_lastvisited $last_visit_time");
  
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
} 
else if ( $picksig == 2 ) 
{ 
  /*
  * Processing the image
  */
  //$image = "../portal/images/signatures/signature02.png"; 
  $image = $folder.$files[$rand_sigimg];
  $img = imagecreatefrompng($image); 

  /*
  * Set font colors
  */
  $color = array(
	 "WHITE" 	=> imagecolorallocate($img, 204, 204, 204),
	 "BLACK" 	=> imagecolorallocate($img, 0, 0, 0),
	 "GRAY" 	=> imagecolorallocate($img, 80, 80, 80),
	 "RED" 		=> imagecolorallocate($img, 255, 0, 0),
	 "BLUE" 	=> imagecolorallocate($img, 51, 0, 153),
	 "PINK" 	=> imagecolorallocate($img, 255, 135, 255),
	 "VIOLET" 	=> imagecolorallocate($img, 153, 51, 255),
	 "CYAN" 	=> imagecolorallocate($img, 0, 204, 255),
	 "LIME" 	=> imagecolorallocate($img, 0, 255, 153),
	 "GREEN" 	=> imagecolorallocate($img, 0, 153, 0)
  );
  $colornames = array("WHITE", "GRAY", "RED", "BLUE", "PINK", "VIOLET", "CYAN", "LIME", "GREEN");
  
  /*
  * Returns board variables
  */
  $regdate 			= $sig_member['user_regdate']; 
  $sig_memberdays 	= max(1, round( ( time() - $regdate ) / 86400 )); 
  $posts_per_day 	= round($sig_member['user_posts'] / $sig_memberdays); 
  $posts 			= $sig_member['user_posts']; 
  $username 		= $sig_member['username']; 
  $userrank 		= $rank_title;
  $total_posts 		= $config['num_posts']; 
  $last_visit_time 	= $user->format_date($sig_member['user_lastvisit']); 

  /*
  * Processing the text overlay
  */
  imagettftext($img, 10, 0, 105, 18, $color["BLACK"], $font, "$sig_welcomeback $username");
  imagettftext($img, 7, 0, 105, 29, $color[$colornames[rand(0, 8)]], $font, "$sig_rank $userrank");
  imagettftext($img, 7, 0, 105, 41, $color["BLACK"], $font, "$sig_age $birthday_list");
  imagettftext($img, 7, 0, 105, 52, $color[$colornames[rand(0, 8)]], $font, "$sig_memberfor $sig_memberdays $sig_days");
  imagettftext($img, 7, 0, 105, 64, $color["BLACK"], $font, "$sig_lastvisited $last_visit_time");
  
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
}
else if ( $picksig == 3 ) 
{ 
  /*
  * Processing the image
  */
  //$image = "../portal/images/signatures/signature03.png"; 
  $image = $folder.$files[$rand_sigimg];
  $img = imagecreatefrompng($image); 

  /*
  * Set font colors
  */
  $color = array(
	 "WHITE" 	=> imagecolorallocate($img, 204, 204, 204),
	 "BLACK" 	=> imagecolorallocate($img, 0, 0, 0),
	 "GRAY" 	=> imagecolorallocate($img, 80, 80, 80),
	 "RED" 		=> imagecolorallocate($img, 255, 0, 0),
	 "BLUE" 	=> imagecolorallocate($img, 51, 0, 153),
	 "PINK" 	=> imagecolorallocate($img, 255, 135, 255),
	 "VIOLET" 	=> imagecolorallocate($img, 153, 51, 255),
	 "CYAN" 	=> imagecolorallocate($img, 0, 204, 255),
	 "LIME" 	=> imagecolorallocate($img, 0, 255, 153),
	 "GREEN" 	=> imagecolorallocate($img, 0, 153, 0)
  );
  $colornames = array("WHITE", "GRAY", "RED", "BLUE", "PINK", "VIOLET", "CYAN", "LIME", "GREEN");
  
  /*
  * Returns board variables
  */
  $regdate 			= $sig_member['user_regdate']; 
  $sig_memberdays 	= max(1, round( ( time() - $regdate ) / 86400 )); 
  $posts_per_day 	= round($sig_member['user_posts'] / $sig_memberdays); 
  $posts 			= $sig_member['user_posts']; 
  $username 		= $sig_member['username']; 
  $userrank 		= $rank_title;
  $total_posts 		= $config['num_posts']; 
  $last_visit_time 	= $user->format_date($sig_member['user_lastvisit']); 
  $percentage 		= round(( $total_posts ) ? min(100, ($sig_member['user_posts'] / $total_posts) * 100) : 0); 

  /*
  * Processing the text overlay
  */
  imagettftext($img, 10, 0, 105, 18, $color["GREEN"], $font, "$sig_welcomeback $username");
  imagettftext($img, 7, 0, 105, 29, $color[$colornames[rand(0, 8)]], $font, "$sig_rank $userrank");
  imagettftext($img, 7, 0, 105, 41, $color["BLACK"], $font, "$sig_memberfor $sig_memberdays $sig_days");
  imagettftext($img, 7, 0, 105, 52, $color["GREEN"], $font, "$sig_posts $posts");
  imagettftext($img, 7, 0, 250, 52, $color["GREEN"], $font, "$sig_postpercentage $percentage %");
  imagettftext($img, 7, 0, 105, 64, $color["BLACK"], $font, "$sig_lastvisited $last_visit_time");
  
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
} 

?> 