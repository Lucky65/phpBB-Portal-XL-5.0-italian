<?php
/**
*
* permissions_gallery [Greek]
*
* @package phpBB Gallery
* @version $Id: permissions_gallery.php 1303 2009-08-26 16:07:18Z nickvergessen $
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

$lang['permission_cat']['gallery'] = 'phpBB Gallery';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_gallery_manage'		=> array('lang' => 'Μπορεί να διαχειριστεί τις ρυθμίσεις της γκαλερί phpBB Gallery', 'cat' => 'gallery'),
	'acl_a_gallery_albums'		=> array('lang' => 'Μπορεί να προσθέσει/επεξεργαστεί άλμπουμ και δικαιώματα', 'cat' => 'gallery'),
	'acl_a_gallery_import'		=> array('lang' => 'Μπορεί να χρησιμοποιήσει την λειτουργία εισαγωγής', 'cat' => 'gallery'),
	'acl_a_gallery_cleanup'		=> array('lang' => 'Μπορεί να καθαρίσει την γκαλερί phpBB Gallery', 'cat' => 'gallery'),
));
?>