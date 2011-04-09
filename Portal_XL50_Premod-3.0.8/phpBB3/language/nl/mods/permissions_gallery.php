<?php
/**
*
* permissions_gallery [Nederlands]
*
* @package phpBB Gallery
* @version $Id: permissions_gallery.php 1303 2009-08-26 16:07:18Z nickvergessen $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang['permission_cat']['gallery'] = 'phpBB Gallery';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_gallery_manage'		=> array('lang' => 'Kan de phpBB Galerie aanpassingen beheren', 'cat' => 'gallery'),
	'acl_a_gallery_albums'		=> array('lang' => 'Kan albums en permissies toevoegen/bewerken', 'cat' => 'gallery'),
	'acl_a_gallery_import'		=> array('lang' => 'Kan de importeerfunctie gebruiken', 'cat' => 'gallery'),
	'acl_a_gallery_cleanup'		=> array('lang' => 'Kan de phpBB Galerie opruimen', 'cat' => 'gallery'),
));
?>