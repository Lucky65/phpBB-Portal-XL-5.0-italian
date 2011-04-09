<?php
/**
*
* info_acp_gallery [Greek]
*
* @package phpBB Gallery
* @version $Id: info_acp_gallery.php 1291 2009-08-18 19:26:42Z nickvergessen $
* @version $Id: info_acp_gallery.php 126 2009-06-09 14:52:22Z diastasi $
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
	'ACP_GALLERY_ALBUM_MANAGEMENT'		=> 'Διαχείριση άλμπουμ',
	'ACP_GALLERY_ALBUM_PERMISSIONS'				=> 'Προσβάσεις Γκαλερί',
	'ACP_GALLERY_ALBUM_PERMISSIONS_COPY'=> 'Copy permissions',	
	'ACP_GALLERY_CLEANUP'						=> 'Καθαρισμός Γκαλερί',
	'ACP_GALLERY_CONFIGURE_GALLERY'				=> 'Ρυθμίσεις Γκαλερί',
	'ACP_GALLERY_LOGS'					=> 'Καταγραφή γκαλερί',
	'ACP_GALLERY_LOGS_EXPLAIN'			=> 'Καταγράφει τις ενέργειες των συντονιστών στην γκαλερί, όπως εγκρίσεις, απαγορεύσεις, κλειδώματα, ξεκλειδώματα, διαγραφές εικόνων, κ.α..',
	'ACP_GALLERY_MANAGE_ALBUMS'					=> 'Διαχείριση Γκαλερί',
	'ACP_GALLERY_OVERVIEW'						=> 'Επισκόπηση',
	'ACP_IMPORT_ALBUMS'							=> 'Εισαγωγή εικόνων',
	
	'GALLERY'									=> 'Γκαλερί',
	'GALLERY_EXPLAIN'							=> 'Γκαλερί Εικόνων',
	'GALLERY_HELPLINE_ALBUM'			=> 'Εικόνα Γκαλερί: [album]image_id[/album], με αυτό το BBCode προσθέτετε μία εικόνα της Γκαλερί στην δημοσίευση σας.',	

	// A little line where you can give yourself some credits on the translation.
	//'GALLERY_TRANSLATION_INFO'			=> 'English "phpBB Gallery"-Translation by <a href="http://www.flying-bits.org/">nickvergessen</a>',
	'GALLERY_TRANSLATION_INFO'			=> '',	
	
	'IMAGES'							=> 'Εικόνες',
	'IMG_BUTTON_UPLOAD_IMAGE'   				=> 'Φόρτωση εικόνας',

	'PERSONAL_ALBUM'							=> 'Προσωπικό άλμπουμ',
	'PHPBB_GALLERY'								=> 'phpBB Γκαλερί',

	'TOTAL_IMAGES_OTHER'						=> 'Σύνολο εικόνων <strong>%d</strong>',
	'TOTAL_IMAGES_ZERO'							=> 'Σύνολο  εικόνων <strong>0</strong>',
));

?>