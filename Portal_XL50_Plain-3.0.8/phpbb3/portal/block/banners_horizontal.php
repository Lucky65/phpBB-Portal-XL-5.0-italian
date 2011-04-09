<?php
/*
*
* @name banners_horizontal.php
* @package phpBB3 Portal XL 5.0
* @version $Id: banners_horizontal.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
		FROM " . PORTAL_BANNER_HO_TABLE . "
		ORDER BY RAND()
		LIMIT 1";
$result = $db->sql_query($sql);
while ($row = $db->sql_fetchrow($result))
{
	$i = 0;
	do

	{
	$template->assign_block_vars('banners_ho', array(
        'ROW_NUMBER' 			=> $i + '1',	
		'BANNERS_URL' 			=> $row['banners_url'],
		'BANNERS_IMG' 			=> '<div style="margin:2px;"><img src="' . $row['banners_img_hor'] . '" width="400" height="60" alt="' . $row['banners_description'] . '" title="' . $row['banners_description'] . '" /></div>',
		'BANNERS_DESCRIPTION' 	=> $row['banners_description'],		
		));
		$i++;
	}
	while ( $row = $db->sql_fetchrow($result) );
	$db->sql_freeresult($result);
}

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/banners_horizontal.html',
	));

?>