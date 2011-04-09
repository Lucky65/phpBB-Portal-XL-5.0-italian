<?php
/*
*
* @name banners_vertical.php
* @package phpBB3 Portal XL 5.0
* @version $Id: banners_vertical.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	$sql = "SELECT *
		FROM " . PORTAL_BANNER_VE_TABLE . "
		ORDER BY RAND()
		LIMIT 1";
$result = $db->sql_query($sql);
while ($row = $db->sql_fetchrow($result))
{
	$i = 0;
	do

	{
	$template->assign_block_vars('banners_ve', array(
        'ROW_NUMBER' 			=> $i + '1',	
		'BANNERS_URL' 			=> $row['banners_url'],
		'BANNERS_IMG' 			=> '<img src="' . $row['banners_img_ver'] . '" width="120" height="600" alt="' . $row['banners_description'] . '" title="' . $row['banners_description'] . '" />',
		'BANNERS_DESCRIPTION' 	=> $row['banners_description'],		
		));
		$i++;
	}
	while ( $row = $db->sql_fetchrow($result) );
	$db->sql_freeresult($result);
}

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/banners_vertical.html',
	));

?>