<?php
/**
*
* info_ucp_gallery [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package phpBB Gallery
* @version $Id: info_ucp_gallery.php 849 2008-12-30 01:06:17Z nickvergessen $
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

$lang = array_merge($lang, array(
	'UCP_GALLERY'						=> 'Galéria',
	'UCP_GALLERY_FAVORITES'				=> 'Správa obľúbených',
	'UCP_GALLERY_PERSONAL_ALBUMS'		=> 'Správa osobných albumov',
	'UCP_GALLERY_SETTINGS'				=> 'Osobité nastavenia',
	'UCP_GALLERY_WATCH'					=> 'Správa odberov',
));

?>