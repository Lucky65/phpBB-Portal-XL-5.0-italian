<?php
/**
*
* gallery_mcp [Greek]
*
* @package phpBB Gallery
* @version $Id: gallery_mcp.php 126 2009-06-09 14:52:22Z diastasi $
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
	'CHOOSE_ACTION'					=> 'Επιλέξτε την επιθυμητή ρύθμιση',

	'GALLERY_MCP_MAIN'				=> 'Κύρια',
	'GALLERY_MCP_QUEUE'				=> 'Ουρά',
	'GALLERY_MCP_QUEUE_DETAIL'		=> 'Λεπτομέρειες εικόνας',
	'GALLERY_MCP_REPORTED'			=> 'Αναφορά εικόνας',
	'GALLERY_MCP_REPO_DONE'			=> 'Κλείσιμο αναφοράς',
	'GALLERY_MCP_REPO_OPEN'			=> 'Άνοιγμα αναφοράς',
	'GALLERY_MCP_REPO_DETAIL'		=> 'Λεπτομέρειες αναφοράς',
	'GALLERY_MCP_UNAPPROVED'		=> 'Εικόνες σε αναμονή έγκρισης',
	'GALLERY_MCP_APPROVED'			=> 'Εγκεκριμένες εικόνες',
	'GALLERY_MCP_LOCKED'			=> 'Κλειδωμένες εικόνες',
	'GALLERY_MCP_VIEWALBUM'			=> 'Προβολή άλμπουμ',

	'IMAGE_REPORTED'				=> 'Αυτή η εικόνα έχει αναφερθεί.',
	'IMAGE_UNAPPROVED'				=> 'Αυτή η εικόνα περιμένει έγκριση.',

	'MODERATE_ALBUM'				=> 'Συντονιστείτε άλμπουμ',

	'QUEUE_A_APPROVE'				=> 'Έγκριση εικόνας',
	'QUEUE_A_APPROVE2'				=> 'Έγκριση εικόνας?',
	'QUEUE_A_APPROVE2_CONFIRM'		=> 'Είστε σίγουρος, ότι θέλετε να εγκρίνετε αυτή την εικόνα?',
	'QUEUE_A_DELETE'				=> 'Διαγραφή εικόνας',
	'QUEUE_A_DELETE2'				=> 'Διαγραφή εικόνας?',
	'QUEUE_A_DELETE2_CONFIRM'		=> 'Είστε σίγουρος, ότι θέλετε να διαγράψετε αυτή την εικόνα?',
	'QUEUE_A_LOCK'					=> 'Κλείδωμα εικόνας',
	'QUEUE_A_LOCK2'					=> 'Κλείδωμα εικόνας?',
	'QUEUE_A_LOCK2_CONFIRM'			=> 'Είστε σίγουρος, ότι θέλετε αυτή η εικόνα να κλειδωθεί?',
	'QUEUE_A_MOVE'					=> 'Μετακίνηση εικόνας',
	'QUEUE_A_UNAPPROVE'				=> 'Απόρριψη εικόνας',
	'QUEUE_A_UNAPPROVE2'			=> 'Απόρριψη εικόνας?',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> 'Είστε σίγουρος, ότι θέλετε να απορρίψετε αυτή την εικόνα?',

	'QUEUE_STATUS_0'				=> 'Αυτή η εικόνα περιμένει έγκριση.',
	'QUEUE_STATUS_1'				=> 'Αυτή η εικόνα έχει εγκριθεί.',
	'QUEUE_STATUS_2'				=> 'Αυτή η εικόνα έχει κλειδωθεί.',

	'QUEUES_A_APPROVE'				=> 'Έγκριση εικόνων',
	'QUEUES_A_APPROVE2'				=> 'Έγκριση εικόνων?',
	'QUEUES_A_APPROVE2_CONFIRM'		=> 'Είστε σίγουρος, ότι θέλετε να εγκρίνετε αυτές τις εικόνες?',
	'QUEUES_A_DELETE'				=> 'Διαγραφή εικόνων',
	'QUEUES_A_DELETE2'				=> 'Διαγραφή εικόνων?',
	'QUEUES_A_DELETE2_CONFIRM'		=> 'Είστε σίγουρος, ότι θέλετε να διαγράψετε αυτές τις εικόνες?',
	'QUEUES_A_LOCK'					=> 'Κλείδωμα εικόνων',
	'QUEUES_A_LOCK2'				=> 'Κλείδωμα εικόνων?',
	'QUEUES_A_LOCK2_CONFIRM'		=> 'Είστε σίγουρος, ότι θέλετε να κλειδώσετε αυτές τις εικόνες?',
	'QUEUES_A_MOVE'					=> 'Μετακίνηση εικόνων',
	'QUEUES_A_UNAPPROVE'			=> 'Απόρριψη εικόνων',
	'QUEUES_A_UNAPPROVE2'			=> 'Απόρριψη εικόνων?',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> 'Είστε σίγουρος,  ότι θέλετε να απορρίψετε αυτές τις εικόνες?',

	'REPORT_A_CLOSE'				=> 'Κλείσιμο αναφοράς',
	'REPORT_A_CLOSE2'				=> 'Κλείσιμο αναφοράς?',
	'REPORT_A_CLOSE2_CONFIRM'		=> 'Είστε σίγουρος,  είστε σίγουρος ότι θέλετε να κλείσετε αυτή την αναφορά?',
	'REPORT_A_DELETE'				=> 'Διαγραφή αναφοράς',
	'REPORT_A_DELETE2'				=> 'Διαγραφή αναφοράς?',
	'REPORT_A_DELETE2_CONFIRM'		=> 'Είστε σίγουρος, είστε σίγουρος ότι θέλετε να διαγράψετε αυτή την αναφορά?',
	'REPORT_A_OPEN'					=> 'Άνοιγμα αναφοράς',
	'REPORT_A_OPEN2'				=> 'Άνοιγμα αναφοράς?',
	'REPORT_A_OPEN2_CONFIRM'		=> 'Είστε σίγουρος, ότι θέλετε να ανοίξετε αυτή την αναφορά?',

	'REPORT_STATUS_1'				=> 'Αυτή η αναφορά είναι πρέπει να αναθεωρηθεί.',
	'REPORT_STATUS_2'				=> 'Αυτή η αναφορά έχει κλείσει',

	'REPORTS_A_CLOSE'				=> 'Κλείσιμο αναφοράς',
	'REPORTS_A_CLOSE2'				=> 'Κλείσιμο αναφορά?',
	'REPORTS_A_CLOSE2_CONFIRM'		=> 'Είστε σίγουρος, ότι θέλετε να κλείσετε αυτή την αναφορά?',
	'REPORTS_A_DELETE'				=> 'Διαγραφή αναφοράς',
	'REPORTS_A_DELETE2'				=> 'Διαγραφή αναφοράς?',
	'REPORTS_A_DELETE2_CONFIRM'		=> 'Είστε σίγουρος,  ότι θέλετε να διαγράψετε αυτή την αναφορά?',
	'REPORTS_A_OPEN'				=> 'Άνοιγμα αναφοράς',
	'REPORTS_A_OPEN2'				=> 'Άνοιγμα αναφοράς?',
	'REPORTS_A_OPEN2_CONFIRM'		=> 'Είστε σίγουρος, ότι θέλετε να ανοίξετε αυτή την αναφορά',

	'REPORT_MOD'					=> 'Επεξεργάσθηκε από',
	'REPORTED_IMAGES'				=> 'Αναφερόμενες εικόνες',
	'REPORTER'						=> 'Μέλος αναφοράς',
	'REPORTER_AND_ALBUM'			=> 'Μέλος αναφοράς  & Άλμπουμ',

	'WAITING_APPROVED_IMAGE'		=> array(
		0			=> 'Δεν έχει εγκριθεί καμία εικόνα.',
		1			=> 'Συνολικά υπάρχει <span style="font-weight: bold;">1</span> εγκεκριμένη εικόνα.',
		2			=> 'Συνολικά υπάρχουν <span style="font-weight: bold;">%s</span> εγκεκριμένες εικόνες.',
	),
	'WAITING_LOCKED_IMAGE'			=> array(
		0			=> 'Δεν υπάρχουν κλειδωμένες εικόνες.',
		1			=> 'Συνολικά υπάρχει <span style="font-weight: bold;">1</span> κλειδωμένη εικόνα.',
		2			=> 'Συνολικά υπάρχουν <span style="font-weight: bold;">%s</span> κλειδωμένες εικόνες.',
	),
	'WAITING_REPORTED_DONE'			=> array(
		0			=> 'Καμία αναφορά δεν αναθεωρήθηκε.',
		1			=> 'Συνολικά υπάρχει <span style="font-weight: bold;">1</span> αναφορά αναθεωρημένη.',
		2			=> 'Συνολικά υπάρχουν <span style="font-weight: bold;">%s</span> αναφορές αναθεωρημένες.',
	),
	'WAITING_REPORTED_IMAGE'		=> array(
		0			=> 'Δεν υπάρχουν αναφορές προς αναθεώρηση.',
		1			=> 'Συνολικά υπάρχει <span style="font-weight: bold;">1</span> αναφορά προς αναθεώρηση.',
		2			=> 'Συνολικά υπάρχουν <span style="font-weight: bold;">%s</span> αναφορές προς αναθεώρηση.',
	),
	'WAITING_UNAPPROVED_IMAGE'		=> array(
		0			=> 'Δεν υπάρχουν εικόνες προς έγκριση.',
		1			=> 'Συνολικά υπάρχει <span style="font-weight: bold;">1</span> εικόνα σε αναμονή προς έγκριση.',
		2			=> 'Συνολικά υπάρχουν <span style="font-weight: bold;">%s</span> εικόνες σε αναμονή προς έγκριση.',
	),
));

?>