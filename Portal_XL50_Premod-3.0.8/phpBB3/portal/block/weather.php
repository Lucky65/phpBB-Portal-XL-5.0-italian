<?php
/** 
*
* @name weather.php
* @package phpBB3 Portal XL 5.0
* @version $Id: weather.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Start session management
*/

/*
* Begin block script here
*/
$weather_zipcode = $portal_config['portal_weather_zipcode'];
$weather_alternate_url = $portal_config['portal_weather_alternate_url'];
$weather_alternate_url1 = $portal_config['portal_weather_alternate_url1'];
$weather_alternate_url2 = $portal_config['portal_weather_alternate_url2'];

$user_zip = $user->data['user_from'];
preg_match ("/^[0-9]{5}/", $user_zip, $zip_code );

	$template->assign_vars(array(
		'LOCATION_ZIP'				=> ($zip_code[0]) ? $zip_code[0] : $weather_zipcode,
		'L_WEATHER'					=> $user->lang['PORTAL_WEATHER'],
		'WEATHER_ALTERNATE_URL'		=> sprintf(htmlspecialchars_decode($weather_alternate_url)),
		'WEATHER_ALTERNATE_URL1'	=> sprintf(htmlspecialchars_decode($weather_alternate_url1)),
		'WEATHER_ALTERNATE_URL2'	=> sprintf(htmlspecialchars_decode($weather_alternate_url2)),
		));
	
// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/weather.html',
	));

?>