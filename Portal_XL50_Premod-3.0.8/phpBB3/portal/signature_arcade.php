<?php
/*
*
* @name signature_arcade.php
* @package phpBB3 Portal XL Premod
* @version $Id: signature_arcade.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
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

if (file_exists($phpbb_root_path . 'includes/arcade/arcade_common.' . $phpEx))
{
	include($phpbb_root_path . 'includes/arcade/arcade_common.' . $phpEx);
	// Initialize arcade auth
	$auth_arcade->acl($user->data);
	// Initialize arcade class
	$arcade = new arcade(false);
}

header("Content-Type: image/PNG");
$userpass=$_GET['name'];
$user_id = $userpass;

/*
* The name of your website
*/
$sitename = $config['sitename'];

/*
* Define random processing of signature
*/
$picksig = rand(1,2); 

/*
* Assigns stats variables to display in image
*/
$total_games = sizeof($arcade->games);
$userdata = $arcade->get_user_info($user_id);
$userwins = $arcade->number_format($userdata['total_wins']);
$timeplayed = $arcade->time_format($userdata['total_time']);
$username = $userdata['username'];
$gamesplayed = $userdata['total_plays'];

// Determines which banner to use.
if ( $picksig == 1 ) 
{
  /*
  * Default Banner
  */
  $image = ImageCreateFrompng($phpbb_root_path . 'portal/images/signatures/arcade/arcade_default.png');

  /*
  * Set font colors
  */
  $color = array(
	 "WHITE" 	=> imagecolorallocate($image, 204, 204, 204),
	 "BLACK" 	=> imagecolorallocate($image, 0, 0, 0),
	 "GRAY" 	=> imagecolorallocate($image, 80, 80, 80),
	 "RED" 		=> imagecolorallocate($image, 255, 0, 0),
	 "BLUE" 	=> imagecolorallocate($image, 51, 0, 153),
	 "PINK" 	=> imagecolorallocate($image, 255, 135, 255),
	 "VIOLET" 	=> imagecolorallocate($image, 153, 51, 255),
	 "CYAN" 	=> imagecolorallocate($image, 0, 204, 255),
	 "LIME" 	=> imagecolorallocate($image, 0, 255, 153),
	 "GREEN" 	=> imagecolorallocate($image, 0, 153, 0)
  );
  $colornames = array("WHITE", "GRAY", "RED", "BLUE", "PINK", "VIOLET", "CYAN", "LIME", "GREEN");

  /*
  * Set font
  */
  $font = 'signature_acmesa.ttf';
  $font2 = 'signature_acmesab.ttf';
  
  /*
  * Font sizes
  */
  $fontSize = "8";
  $fontSize2 = "16";
  $fontSize3 = "12";
  $fontSize4 = "14";
  $fontRotation = "0";
 
  /*
  * Returns board language definitions
  */
  $sig_timeplayed 		= $user->lang['SIG_TIMEPLAYED'];
  $sig_userwins 		= $user->lang['SIG_USERWINS'];
  $sig_totalgames 		= $user->lang['SIG_TOTALGAMES'];
  $sig_gamesplayed 		= $user->lang['SIG_GAMESPLAYED'];

  /*
  * Returns arcade variables
  */
  $str_timeplayed = $sig_timeplayed . $timeplayed;
  $str_userwins = $sig_userwins . $userwins;
  $str_totalgames = $sig_totalgames . $total_games;
  $str_username = $username;
  $str_gamesplayed = $sig_gamesplayed . $gamesplayed;

  /*
  * Processing the text overlay
  */
  imagettftext($image, $fontSize, $fontRotation, 90, 90, $color["WHITE"], $font, $str_timeplayed);
  imagettftext($image, $fontSize3, $fontRotation, 25, 70, $color["WHITE"], $font, $str_userwins);
  imagettftext($image, $fontSize2, $fontRotation, 300, 20, $color["WHITE"], $font, $str_totalgames);
  imagettftext($image, $fontSize2, $fontRotation, 160, 52, $color[$colornames[rand(0, 8)]], $font, $str_username);
  imagettftext($image, $fontSize3, $fontRotation, 300, 70, $color["WHITE"], $font, $str_gamesplayed);
  imagettftext($image, $fontSize4, $fontRotation, 10, 22, $color[$colornames[rand(0, 8)]], $font2, $sitename);
  
  /*
  * Send the content type header so the image is displayed properly
  */
  header("Content-Type: image/PNG");
  
  /*
  * Send the image to the browser
  */
  ImagePng ($image);
  
  /*
  * Destroy the image to free up the memory
  */
  imagedestroy($image);
}
else if ( $picksig == 2 ) 
{
  /*
  * Custom Banner
  */
  $image = ImageCreateFromPNG($phpbb_root_path . 'portal/images/signatures/arcade/arcade_custom.png');
  
  /*
  * Set font colors
  */
  $color = array(
	 "WHITE" 	=> imagecolorallocate($image, 204, 204, 204),
	 "BLACK" 	=> imagecolorallocate($image, 0, 0, 0),
	 "GRAY" 	=> imagecolorallocate($image, 80, 80, 80),
	 "RED" 		=> imagecolorallocate($image, 255, 0, 0),
	 "BLUE" 	=> imagecolorallocate($image, 51, 0, 153),
	 "PINK" 	=> imagecolorallocate($image, 255, 135, 255),
	 "VIOLET" 	=> imagecolorallocate($image, 153, 51, 255),
	 "CYAN" 	=> imagecolorallocate($image, 0, 204, 255),
	 "LIME" 	=> imagecolorallocate($image, 0, 255, 153),
	 "GREEN" 	=> imagecolorallocate($image, 0, 153, 0)
  );
  $colornames = array("WHITE", "GRAY", "RED", "BLUE", "PINK", "VIOLET", "CYAN", "LIME", "GREEN");
  
  /*
  * Set font
  */
  $font = 'signature_acmesa.ttf';
  
  /*
  * Font sizes
  */
  $fontSize = "8";
  $fontSize2 = "16";
  $fontSize3 = "12";
  $fontRotation = "0";
  
  /*
  * Return the stats to the image
  */
  $str_timeplayed = $timeplayed;
  $str_userwins = $userwins;
  $str_totalgames = $total_games;
  $str_username = $username;
  $str_gamesplayed = $gamesplayed;
  
  /*
  * Processing the text overlay
  */
  imagettftext($image, $fontSize, $fontRotation, 300, 90, $color["WHITE"], $font, $str_timeplayed);
  imagettftext($image, $fontSize3, $fontRotation, 325, 70, $color["WHITE"], $font, $str_userwins);
  imagettftext($image, $fontSize2, $fontRotation, 430, 20, $color["WHITE"], $font, $str_totalgames);
  imagettftext($image, $fontSize2, $fontRotation, 220, 22, $color[$colornames[rand(0, 8)]], $font, $str_username);
  imagettftext($image, $fontSize3, $fontRotation, 455, 70, $color["WHITE"], $font, $str_gamesplayed);
  
  /*
  * Send the content type header so the image is displayed properly
  */
  header("Content-Type: image/PNG");
  
  /*
  * Send the image to the browser
  */
  ImagePng ($image);
  
  /*
  * Destroy the image to free up the memory
  */
  imagedestroy($image);
}
?>