<?php
/**
*
* permissions_gallery [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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

$lang['permission_cat']['gallery'] = 'Galéria phpBB';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_gallery_manage'		=> array('lang' => 'Môže nastavovať a upravovať Galériu v phpBB',	'cat' => 'gallery'),
	'acl_a_gallery_albums'		=> array('lang' => 'Môže pridávať, upravovať albumy a povolenia',		'cat' => 'gallery'),
	'acl_a_gallery_import'		=> array('lang' => 'Môže použiť import - funkcií',				'cat' => 'gallery'),
	'acl_a_gallery_cleanup'		=> array('lang' => 'Môže prečistiť Galériu v phpBB',			'cat' => 'gallery'),
));
?>