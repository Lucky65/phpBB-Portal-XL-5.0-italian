<?php
/**
*
* info_ucp_gallery [Greek]
*
* @package phpBB Gallery
* @version $Id: info_ucp_gallery.php 126 2009-06-09 14:52:22Z diastasi $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
* (http://thraki.info) diastasi
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
	'UCP_GALLERY'						=> 'Γκαλερί',
	'UCP_GALLERY_FAVORITES'				=> 'Διαχείριση αγαπημένων',
	'UCP_GALLERY_PERSONAL_ALBUMS'		=> 'Διαχείριση προσωπικών άλμπουμ',
	'UCP_GALLERY_SETTINGS'				=> 'Προσωπικές ρυθμίσεις',
	'UCP_GALLERY_WATCH'					=> 'Διαχείριση παρακολουθήσεων',
));

?>