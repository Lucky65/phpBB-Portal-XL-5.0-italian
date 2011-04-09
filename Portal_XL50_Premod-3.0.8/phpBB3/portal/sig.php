<?php
/*
*
* @name sig.php
* @package phpBB3 Portal XL Premod
* @version $Id: sig.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
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

global $phpEx, $db, $config, $phpbb_root_path, $portal_config, $user;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

list($width, $height, $type) = @getimagesize($user->data['user_avatar']);

switch ( $type )
{
  case 1:
  $avatar = imagecreatefromgif($user->data['user_avatar']);
  break;
  case 2:
  $avatar = imagecreatefromjpeg($user->data['user_avatar']);
  break;
  case 3:
  $avatar = imagecreatefrompng($user->data['user_avatar']);
  break;
}

if ( isset($_GET['bg']) )
{
  list($bg_width, $bg_height, $bg_type) = @getimagesize($_GET['bg']);

  switch ( $bg_type )
  {
	case 1:
	$bg_img = imagecreatefromgif($_GET['bg']);
	break;
	case 2:
	$bg_img = imagecreatefromjpeg($_GET['bg']);
	break;
	case 3:
	$bg_img = imagecreatefrompng($_GET['bg']);
	break;
  }
}

$this_img = imagecreatetruecolor(468, 60);

if ( isset($bg_width) && isset($bg_height) && isset($bg_img) )
{
  imagecopymerge($this_img, $bg_img, 0, 0, 0, 0, $bg_width, $bg_height, 100);
}

imagealphablending($this_img, TRUE);

// Set font
$font = 'signature_arial.ttf';

$color = imagecolorallocate($this_img, 0, 0, 0);
$bg = imagecolorallocatealpha($this_img, rand(200, 250), rand(200, 250), rand(200, 250), 50);

imagefill($this_img, 0, 0, $bg);

if ( isset($width) && isset($height) )
{
  imagecopymerge($this_img, $avatar, 468 - $width, 0, 0, 0, $width, $height, 100);
}

imagefilledrectangle($this_img, 0, 0, 467, 59, $bg);

imagettftext($this_img, 10, 0, 4, 13, $color, $font, $config['sitename'] . ' (' . $user->lang['SIG_WELCOME_BACK'] . ' ' .$user->data['username'] . '!)');
imagettftext($this_img, 8, 0, 4, 27, $color, $font, 'Portal XL ~ ' . $portal_config['portal_version']);
imagettftext($this_img, 8, 0, 116, 27, $color, $font, ' @ phpBB ' . $config['version']);
imagettftext($this_img, 8, 0, 220, 27, $color, $font, ' @ ' . $config['cookie_domain']);
imagettftext($this_img, 8, 0, 4, 41, $color, $font, $user->lang['SIG_POSTS']. ' ' . $config['num_posts'] . '     | ' . $user->lang['SIG_TOPICS_CAPS'] . ' ' . $config['num_topics'] . '     | ' . $user->lang['SIG_MEMBERS'] . ' ' . $config['num_users'] . '     | ' . $user->lang['SIG_NEWEST_MEMBER'] . ' ' . $config['newest_username']);
imagettftext($this_img, 8, 0, 4, 55, $color, $font, $config['site_desc']);

imagerectangle($this_img, 0, 0, 467, 59, $color);
  
// send the content type header so the image is displayed properly
header('Content-Type: image/gif');

// send the image to the browser
imagegif($this_img);

// destroy the image to free up the memory
imagedestroy($this_img); 

?>