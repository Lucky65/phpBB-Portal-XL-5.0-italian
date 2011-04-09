<?php
/**
*
* info_acp_gallery_logs [Greek]
*
* @package phpBB Gallery
* @version $Id: info_acp_gallery_logs.php 126 2009-06-09 14:52:22Z diastasi $
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
	'LOG_ALBUM_ADD'							=> '<strong>Νέο άλμπουμ δημιουργήθηκε</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUM'					=> '<strong>Διαγράφηκε άλμπουμ</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUMS'					=> '<strong>Διαγραφή άλμπουμ και υποάλμπουμ</strong><br />» %s',
	'LOG_ALBUM_DEL_MOVE_ALBUMS'				=> '<strong>Διαγραφή άλμπουμ και μετακίνηση υποάλμπουμ</strong> σε %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES'				=> '<strong>Διαγραφή άλμπουμ και μετακίνηση εικόνων </strong> σε %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_ALBUMS'		=> '<strong>Διαγραφή άλμπουμ και υποάλμπουμ, μετακίνηση εικόνων</strong> σε %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_MOVE_ALBUMS'	=> '<strong>Διαγραφή άλμπουμ, μετακίνηση εικόνων</strong> σε %1$s <strong>και υποάλμπουμ</strong> σε %2$s<br />» %3$s',
	'LOG_ALBUM_DEL_IMAGES'					=> '<strong>Διαγραφή άλμπουμ και εικόνων</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_ALBUMS'			=> '<strong>Διαγραφή άλμπουμ, εικόνων και υποάλμπουμ</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_MOVE_ALBUMS'		=> '<strong>Διαγραφή άλμπουμ, εικόνων και μετακίνηση υποάλμπουμ</strong> σε %1$s<br />» %2$s',
	'LOG_ALBUM_EDIT'						=> '<strong>Λεπτομέρειες επεξεργασίας άλμπουμ</strong><br />» %s',
	'LOG_ALBUM_MOVE_DOWN'					=> '<strong>Μετακίνηση άλμπουμ</strong> %1$s <strong>κάτω από</strong> %2$s',
	'LOG_ALBUM_MOVE_UP'						=> '<strong>Μετακίνηση άλμπουμ</strong> %1$s <strong>πάνω από</strong> %2$s',
	'LOG_ALBUM_SYNC'						=> '<strong>Επανασυγχρονισμένο άλμπουμ</strong><br />» %s',

	'LOG_CLEAR_GALLERY'					=> 'Εκκαθαριση καταγραφής Γκαλερί',

	'LOG_GALLERY_APPROVED'				=> '<strong>Εγκεκριμένη εικόνα</strong><br />» %s',
	'LOG_GALLERY_COMMENT_DELETED'		=> '<strong>Διαγραφή σχολίων</strong><br />» %s',
	'LOG_GALLERY_COMMENT_EDITED'		=> '<strong>Επεξεργασμένα σχόλια</strong><br />» %s',
	'LOG_GALLERY_DELETED'				=> '<strong>Διεγραμμένη εικόνα</strong><br />» %s',
	'LOG_GALLERY_EDITED'				=> '<strong>επεξεργασμένη εικόνα</strong><br />» %s',
	'LOG_GALLERY_LOCKED'				=> '<strong>Κλειδωμένη εικόνα</strong><br />» %s',
	'LOG_GALLERY_MOVED'					=> '<strong>εικόνα μετακινήθηκε</strong><br />» από %1$s σε %2$s',
	'LOG_GALLERY_REPORT_CLOSED'			=> '<strong>Κλειστή αναφορά</strong><br />» %s',
	'LOG_GALLERY_REPORT_DELETED'		=> '<strong>Διεγραμμένη αναφορά</strong><br />» %s',
	'LOG_GALLERY_REPORT_OPENED'			=> '<strong>αναφορά ανοιξε ξανά</strong><br />» %s',
	'LOG_GALLERY_UNAPPROVED'			=> '<strong>Μη εγκεκριμένη εικόνα</strong><br />» %s',

	'LOGVIEW_VIEWALBUM'					=> 'Προβολή άλμπουμ',
	'LOGVIEW_VIEWIMAGE'					=> 'Προβολή εικόνας',
));

?>