<?php
/**
*
* prime_trash_bin_2 [Greek]
*
* @package language
* @version $Id: prime_trash_bin_2.php,v 1.0.5 2008/08/23 17:01:00 primehalo Exp $
* @copyright (c) 2007 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @ translated by diastasi (thraki.info) and phpbbgr.com
*/

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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

//Logs
$lang = array_merge($lang, array(
	// Overwrite
	'LOG_TOPIC_DELETED'		=> '<strong>Μόνιμα διεγραμμένο θέμα</strong><br />» %s',
	'LOG_DELETE_TOPIC'		=> '<strong>Μόνιμα διεγραμμένο θέμα</strong><br />» %s',
	'LOG_DELETE_POST'		=> '<strong>Μόνιμα διεγραμμένη δημοσίευση</strong><br />» %s',

	// New
	'LOG_TOPIC_STIFLED'		=> '<strong>Διεγραμμένο θέμα</strong><br />» %1$s',
	'LOG_TOPIC_TRASHED'		=> '<strong>Διεγραμμένο θέμα στον Κάδο Ανακύκλωσης</strong><br />» %1$s',
	'LOG_TOPIC_UNSTIFLED'	=> '<strong>Επαναφερόμενο θέμα</strong><br />» %1$s',

	'LOG_POST_STIFLED'		=> '<strong>Διεγραμμένη δημοσίευση</strong><br />» %1$s',
	'LOG_POST_TRASHED'		=> '<strong>Διεγραμμένη δημοσίευση στον Κάδο Ανακύκλωσης</strong><br />» %1$s',
	'LOG_POST_UNSTIFLED'	=> '<strong>Επαναφερόμενη δημοσίευση</strong><br />» %1$s',
));

$lang = array_merge($lang, array(
	'LOG_TOPIC_STIFLED_2'	=> $lang['LOG_TOPIC_STIFLED'] . '<br />» » <strong>Αιτία:</strong> %2$s',
	'LOG_TOPIC_TRASHED_2'	=> $lang['LOG_TOPIC_TRASHED'] . '<br />» » <strong>Αιτία:</strong> %2$s',
	'LOG_TOPIC_UNSTIFLED_2'	=> $lang['LOG_TOPIC_UNSTIFLED'] . '<br />» » <strong>Αιτία:</strong> %2$s',

	'LOG_POST_STIFLED_2'	=> $lang['LOG_POST_STIFLED'] . '<br />» » <strong>Αιτία:</strong> %2$s',
	'LOG_POST_TRASHED_2'	=> $lang['LOG_POST_TRASHED'] . '<br />» » <strong>Αιτία:</strong> %2$s',
	'LOG_POST_UNSTIFLED_2'	=> $lang['LOG_POST_UNSTIFLED'] . '<br />» » <strong>Αιτία:</strong> %2$s',
));


// Administration
$lang = array_merge($lang, array(
	'PRIME_FAKE_DELETE'					=> 'Διαγραφές θέματος',
	'PRIME_FAKE_DELETE_EXPLAIN'			=> 'Ορίζει πως διαγράφονται τα θέματα.',
	'PRIME_FAKE_DELETE_DISABLE'			=> 'Μόνιμη διαγραφή θέματος',
	'PRIME_FAKE_DELETE_ENABLE'			=> 'Κράτησε θέμα και σημείωσε το ως διεγραμμένο',
	'PRIME_FAKE_DELETE_AUTO_TRASH'		=> 'Μετακίνηση θέματος στον Κάδο Ανακύκλωσης',
	'PRIME_FAKE_DELETE_SHADOW_ON'		=> 'Μετακίνηση στον Κάδο Ανακύκλωσης με σκιά',
	'PRIME_FAKE_DELETE_SHADOW_OFF'		=> 'Μετακίνηση στον Κάδο Ανακύκλωσης χωρίς σκιά',

	'PRIME_TRASH_FORUM'					=> 'Δ. Συζήτηση Κάδου Ανακύκλωσης',
	'PRIME_TRASH_FORUM_EXPLAIN'			=> 'Εάν επιλεγεί, κατά τη διαγραφή ενός θέματος θα μετακινηθεί σε αυτή τη Δ. Συζήτηση. Διαγράφοντας ένα θέμα από τον Κάδο ανακύκλωσης θα διαγραφεί μόνιμα.',
	'PRIME_TRASH_FORUM_DISABLE'			=> 'Μη χρήση του Κάδου Ανακύκλωσης',
	'PRIME_TRASH_FORUM_DIVIDER'			=> '---------------------------',
	'PRIME_NO_TRASH_FORUM_ERROR'		=> 'Πρέπει επιλέξετε μία Δ. Συζήτηση σαν Κάδο Ανακύκλωσης όταν επιλέξετε την απιλογή "%s" ',

	'PRIME_FOREVER_WHEN_DELETE_USER'	=> 'Μόνιμη διαγραφή δημοσιεύσεων',
));

// Moderation
$lang = array_merge($lang, array(

	// Topics - Deleting
	'PRIME_DELETE_TOPIC_REASON'			=> 'Δώστε έναν λόγο για τη διαγραφή',
	'PRIME_DELETE_TOPIC_FOREVER'		=> 'Μόνιμη διαγραφή του θέματος',
	'PRIME_DELETE_TOPICS_FOREVER'		=> 'Μόνιμη διαγραφή των θεμάτων',
	'PRIME_DELETE_TO_TRASH_BIN'			=> 'Μετακίνηση θέματος στον Κάδο Ανακύκλωσης',
	'PRIME_DELETE_TOPIC_FOREVER_DENIED'	=> 'Δε μπορείτε να διαγράψετε μόνιμα θέματα σε αυτή τη Δ. Συζήτηση.',
	'PRIME_DELETE_TOPIC_MIX_NOTICE'		=> 'Σημείωση: Κάθε θέμα που έχει σημειωθεί σαν διεγραμμένο δεν θα επηρρεαστεί.',

	// Topics - Deleted
	'PRIME_DELETED_TOPIC_SUCCESS'		=> 'Το επιλεγμένο θέμα σημειώθηκε επιτυχώς σαν διεγραμμένο.',
	'PRIME_DELETED_TOPICS_SUCCESS'		=> 'Τα επιλεγμένα θέματα σημειώθηκαν επιτυχώς σαν διεγραμμένα.',
	'PRIME_DELETED_TOPIC_FAILURE'		=> 'Το επιλεγμένο θέμα ΔΕΝ σημειώθηκε σαν διεγραμμένο.',
	'PRIME_DELETED_TOPICS_FAILURE'		=> 'Τα επιλεγμένα θέματα ΔΕΝ σημειώθηκαν σαν διεγραμμένα.',

	// Topics - Deleted to Trash Bin
	'PRIME_TRASHED_TOPIC_SUCCESS'		=> 'Το επιλεγμένο θέμα μετακινήθηκε στον Κάδο Ανακύκλωσης.',
	'PRIME_TRASHED_TOPICS_SUCCESS'		=> 'Τα επιλεγμένα θέματα μετακινήθηκαν στον Κάδο Ανακύκλωσης.',
	'PRIME_TRASHED_TOPIC_FAILURE'		=> 'Το επιλεγμένο θέμα ΔΕΝ μετακινήθηκε στον Κάδο Ανακύκλωσης.',
	'PRIME_TRASHED_TOPICS_FAILURE'		=> 'Τα επιλεγμένα θέματα ΔΕΝ μετακινήθηκαν στον Κάδο Ανακύκλωσης.',
	'PRIME_GO_TO_TRASH_BIN'				=> '%sΠήγαινε στον Κάδο Ανακύκλωσης%s',

	// Topics - Undeleting
	'PRIME_UNDELETE_TOPICS'				=> 'Επαναφορά',
	'PRIME_UNDELETE_TOPIC_REASON'		=> 'Δώστε έναν λόγο για επαναφορά',
	'PRIME_UNDELETE_TOPIC_CONFIRM'		=> 'Θέλετε να επαναφέρετε το θέμα?',
	'PRIME_UNDELETE_TOPICS_CONFIRM'		=> 'Θέλετε να επαναφέρετε τα θέματα?',
	'PRIME_UNDELETE_TOPICS_UNNEEDED'	=> 'Τα επιλεγμένα θέματα δεν μπορούν να επαναφερθούν.',


	// Topics - Undeleted
	'PRIME_UNDELETED_TOPIC_SUCCESS'		=> 'Το επιλεγμένο θέμα επανήλθε επιτυχώς.',
	'PRIME_UNDELETED_TOPICS_SUCCESS'	=> 'Τα επιλεγμένα θέματα επανήλθαν επιτυχώς.',
	'PRIME_UNDELETED_TOPIC_FAILURE'		=> 'Το επιλεγμένο θέμα ΔΕΝ επανήλθε.',
	'PRIME_UNDELETED_TOPICS_FAILURE'	=> 'Τα επιλεγμένα θέματα ΔΕΝ επανήλθαν.',

	// Posts - Deleting
	'PRIME_DELETE_POST_REASON'			=> 'Δώστε έναν λόγο για διαγραφή',
	'PRIME_DELETE_POST_FOREVER'			=> 'Μόνιμη διαγραφή δημοσίευσης',
	'PRIME_DELETE_POSTS_FOREVER'		=> 'Μόνιμη διαγραφή δημοσιεύσεων',
	'PRIME_DELETE_POST_FOREVER_DENIED'	=> 'Δε μπορείτε να διαγράψετε μόνιμα δημοσιεύσεις σε αυτή τη Δ. Συζήτηση.',
	'PRIME_DELETE_POST_MIX_NOTICE'		=> 'Σημείωση: Κάθε δημοσίευση που έχει σημειωθεί σαν διεγραμμένη δεν θα επηρρεαστεί.',

	// Posts - Deleted
	'PRIME_DELETED_POST_SUCCESS'		=> 'Η επιλεγμένη δημοσίευση σημειώθηκε επιτυχώς σαν διεγραμμένη.',
	'PRIME_DELETED_POSTS_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις σημειώθηκαν επιτυχώς σαν διεγραμμένες.',
	'PRIME_DELETED_POST_FAILURE'		=> 'Η επιλεγμένη δημοσίευση ΔΕΝ σημειώθηκε σαν διεγραμμένη.',
	'PRIME_DELETED_POSTS_FAILURE'		=> 'Οι επιλεγμένες δημοσιεύσεις ΔΕΝ σημειώθηκαν σαν διεγραμμένες.',

	// Posts - Undeleting
	'PRIME_UNDELETE_POST'				=> 'Επαναφορά δημοσίευσης',
	'PRIME_UNDELETE_POSTS'				=> 'Επαναφορά δημοσιεύσεων',
	'PRIME_UNDELETE_POST_REASON'		=> 'Δώστε έναν λόγο για επαναφορά',
	'PRIME_UNDELETE_POST_CONFIRM'		=> 'Θέλετε να επαναφέρετε τη δημοσίευση?',
	'PRIME_UNDELETE_POSTS_CONFIRM'		=> 'Θέλετε να επαναφέρετε τις δημοσιεύσεις?',
	'PRIME_UNDELETE_POSTS_UNNEEDED'		=> 'Οι επιλεγμένες δημοσιεύσεις ΔΕΝ μπορούν να επαναφερθούν.',

	// Posts - Undeleted
	'PRIME_UNDELETED_POST_SUCCESS'		=> 'Η επιλεγμένη δημοσίευση επανήλθε επιτυχώς.',
	'PRIME_UNDELETED_POSTS_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις επανήλθαν επιτυχώς.',
	'PRIME_UNDELETED_POST_FAILURE'		=> 'Η επιλεγμένη δημοσίευση ΔΕΝ επανήλθε.',
	'PRIME_UNDELETED_POSTS_FAILURE'		=> 'Οι επιλεγμένες δημοσιεύσεις ΔΕΝ επανήλθαν.',

));

?>