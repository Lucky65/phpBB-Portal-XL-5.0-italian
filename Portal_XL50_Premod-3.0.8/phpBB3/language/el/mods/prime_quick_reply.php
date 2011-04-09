<?php
/**
*
* prime_quick_reply [English]
*
* @package language
* @version $Id: prime_quick_reply.php,v 1.0.0 2008/06/25 14:00:00 primehalo Exp $
* @copyright (c) 2008 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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

$lang = array_merge($lang, array(
	// Originally from posting.php, edited to fit
	'QUICK_REPLY_ATTACH_SIG'			=> 'Προσθήκη υπογραφής',
	'QUICK_REPLY_DISABLE_BBCODE'		=> 'Ανενεργό BBCode',
	'QUICK_REPLY_DISABLE_SMILIES'		=> 'Ανενεργά smilies',
	'QUICK_REPLY_DISABLE_MAGIC_URL'		=> 'Απενεργοποίηση URLs',
	'QUICK_REPLY_MORE_SMILIES'			=> 'Δες περισσότερα smilies',
	'QUICK_REPLY_NOTIFY_REPLY'			=> 'Ενημέρωση για απάντηση',
	'QUICK_REPLY_TOO_FEW_CHARS'			=> 'Το μήνυμα είναι πολύ μικρό.',

	// Custom
	'QUICK_REPLY_POST_REPLY'			=> 'Γρήγορης απάντησης',
	'QUICK_REPLY_SHOW_OPTIONS'			=> 'Προβολή επιλογών',
	'QUICK_REPLY_HIDE_OPTIONS'			=> 'Απόκρυψη επιλογών',
	'QUICK_REPLY_SHOW'					=> '[Προβολή]',
	'QUICK_REPLY_HIDE'					=> '[Απόκρυψη]',
	'QUICK_REPLY_QUOTE_LAST_POST'		=> 'Παράθεση',
	'QUICK_REPLY_DISPLAY_SUBJECT'		=> 'Προβολή θέματος',
	'QUICK_REPLY_DISPLAY_BBOCDES'		=> 'Προβολή BBCodes',
	'QUICK_REPLY_DISPLAY_SMILIES'		=> 'Προβολή smilies',

	// Admin
	'QUICK_REPLY_ADMIN_CATEGORY'		=> 'Γρήγορη απάντηση',
	'QUICK_REPLY_ADMIN_ENABLED'			=> 'Ενεργή Γρήγορη Απάντηση',
	'QUICK_REPLY_ADMIN_ENABLED_EXPLAIN'	=> 'Τοποθέτηση Γρήγορης απάντησης κάτω από θέμα.',
	'QUICK_REPLY_ADMIN_GUESTS'			=> 'Ενεργό για επισκέπτες',
	'QUICK_REPLY_ADMIN_GUESTS_EXPLAIN'	=> 'Επέτρεψε επισκέπτες να χρησιμοποιήσουν τη Γρ. Απάντηση.',
	'QUICK_REPLY_ADMIN_MEMORY'			=> 'Απομνημόνευση κατάστασης φόρμας',
	'QUICK_REPLY_ADMIN_MEMORY_EXPLAIN'	=> 'Απομνημόνευση αν ο χρήστης έχει τη φόρμα ορατή ή όχι.',
	'QUICK_REPLY_ADMIN_LAST_PAGE_ONLY'	=> 'Μόνο τελευταία σελίδα',
	'QUICK_REPLY_ADMIN_FORM'			=> 'Προβολή περιοχής φόρμας',
	'QUICK_REPLY_ADMIN_FORM_EXPLAIN'	=> 'Αν δεν προβάλλεται, οι χρήστες πρέπει να κάνουν κλικ για εμφάνιση.',
	'QUICK_REPLY_ADMIN_OPTIONS'			=> 'Προβολή επιλογών',
	'QUICK_REPLY_ADMIN_OPTIONS_EXPLAIN'	=> 'Αν δεν προβάλλεται, οι χρήστες πρέπει να κάνουν κλικ για εμφάνιση.',
	'QUICK_REPLY_ADMIN_SUBJECT'			=> 'Προβολή θέματος',
	'QUICK_REPLY_ADMIN_SUBJECT_EXPLAIN'	=> 'Αν δεν προβάλλεται, οι χρήστες πρέπει να κάνουν κλικ για εμφάνιση.',
	'QUICK_REPLY_ADMIN_BBCODES'			=> 'Προβολή BBCodes',
	'QUICK_REPLY_ADMIN_BBCODES_EXPLAIN'	=> 'Αν δεν προβάλλεται, οι χρήστες πρέπει να κάνουν κλικ για εμφάνιση.',
	'QUICK_REPLY_ADMIN_SMILIES'			=> 'Προβολή smilies',
	'QUICK_REPLY_ADMIN_SMILIES_EXPLAIN'	=> 'Αν δεν προβάλλεται, οι χρήστες πρέπει να κάνουν κλικ για εμφάνιση.',
	'QUICK_REPLY_ADMIN_MINIMUM'			=> 'Ελάχιστος αριθμός δημοσιεύσεων',
	'QUICK_REPLY_ADMIN_MINIMUM_EXPLAIN'	=> 'Απαιτείται ελάχιστος αριθμός δημοσιεύσεων.',

	// Used if Prime Multi-Quote is installed
	'QUICK_REPLY_QUOTE_SELECTED'		=> 'Παράθεση επιλεγμένου',
	'QUICK_REPLY_NO_QUOTES_SELECTED'	=> 'Δεν επιλέχθηκαν δημοσιεύσεις!',
));

?>