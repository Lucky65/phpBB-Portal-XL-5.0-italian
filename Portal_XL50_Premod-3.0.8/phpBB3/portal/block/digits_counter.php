<?php
/*
*
* @name digits_counter.php
* @package phpBB3 Portal XL 5.0
* @version $Id: digits_counter.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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

/**
* Animate Digits IP Tracking Counter
*/
	global $config, $portal_config, $phpbb_root_path;

	include($phpbb_root_path . 'portal/includes/functions_digits_counter.' . $phpEx);
	$counter = new display_counter();

	// Counter display mode
	switch($portal_config['portal_counter_display_mode'])
	{
		case COUNTER_NONE:
			$counter = '';
		break;

		case COUNTER_IMAGE:
			$counter = $counter->create_output();
		break;

		case COUNTER_TEXT:
			$counter = $portal_config['portal_visit_counter'];
		break;
	}

	// Counter Statistics
	$portal_counter_hours = (time() - $config['board_startdate']) / 3600;
	$portal_counter_days = (time() - $config['board_startdate']) / 86400;
	$portal_counter_weeks = (time() - $config['board_startdate']) / 604800;
	$portal_counter_months = (time() - $config['board_startdate']) / 2592000;
	$portal_counter_years = (time() - $config['board_startdate']) / 31536000;

	$hits_per_user = sprintf('%.2f', $portal_config['portal_visit_counter'] / $config['num_users']);
	$hits_per_hour = sprintf('%.2f', $portal_config['portal_visit_counter'] / $portal_counter_hours);
	$hits_per_day = sprintf('%.2f', $portal_config['portal_visit_counter'] / $portal_counter_days);
	$hits_per_week = sprintf('%.2f', $portal_config['portal_visit_counter'] / $portal_counter_weeks);
	$hits_per_month = sprintf('%.2f', $portal_config['portal_visit_counter'] / $portal_counter_months);
	$hits_per_year = sprintf('%.2f', $portal_config['portal_visit_counter'] / $portal_counter_years);

	if ($hits_per_user > $portal_config['portal_visit_counter'])
	{
		$hits_per_user = $portal_config['portal_visit_counter'];
	}

	if ($hits_per_hour > $portal_config['portal_visit_counter'])
	{
		$hits_per_hour = $portal_config['portal_visit_counter'];
	}

	if ($hits_per_day > $portal_config['portal_visit_counter'])
	{
		$hits_per_day = $portal_config['portal_visit_counter'];
	}

	if ($hits_per_week > $portal_config['portal_visit_counter'])
	{
		$hits_per_week = $portal_config['portal_visit_counter'];
	}

	if ($hits_per_month > $portal_config['portal_visit_counter'])
	{
		$hits_per_month = $portal_config['portal_visit_counter'];
	}

	if ($hits_per_year > $portal_config['portal_visit_counter'])
	{
		$hits_per_year = $portal_config['portal_visit_counter'];
	}

// Assign index specific vars
$template->assign_vars(array(
	'COUNTER'				=> $counter,
	'COUNTER_STARTDATE'		=> sprintf($user->lang['COUNTER_STARTDATE'], $user->format_date($config['board_startdate'], false, true)),
	'IP_TRACKING_INFO'		=> ($portal_config['portal_counter_block_ip']) ? $user->lang['IP_TRACKING_YES'] : $user->lang['IP_TRACKING_NO'],

	'HITS_PER_USER'			=> $hits_per_user,
	'HITS_PER_HOUR'			=> $hits_per_hour,
	'HITS_PER_DAY'			=> $hits_per_day,
	'HITS_PER_WEEK'			=> $hits_per_week,
	'HITS_PER_MONTH'		=> $hits_per_month,
	'HITS_PER_YEAR'			=> $hits_per_year,

	'S_COUNTER'				=> ($portal_config['portal_counter_display_mode'] == COUNTER_NONE) ? false : true,
	'S_COUNTER_IMAGE'		=> ($portal_config['portal_counter_display_mode'] == COUNTER_IMAGE) ? true : false,
	'S_COUNTER_TEXT'		=> ($portal_config['portal_counter_display_mode'] == COUNTER_TEXT) ? true : false,
	'S_COUNTER_STATS'		=> ($portal_config['portal_counter_display_stats']) ? true : false,
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/digits_counter.html',
	));

?>