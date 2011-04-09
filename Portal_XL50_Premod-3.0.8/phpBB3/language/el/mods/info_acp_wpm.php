<?php
/**
*
* groups [Greek]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 DualFusion - 2008 ..::Frans::..
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbb2.gr:
* (http://phpbb2.gr/team/)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_WELCOME_PM'			=> 'Καλώς ορίσατε ΠΜ κατά την πρώτη σύνδεση',
	'ACP_WPM_SETTINGS'			=> 'Καλώς ορίσατε ΠΜ Ρυθμίσεις',

	'LOG_WPM_SETTINGS_UPDATED'	=> '<strong>Εναλλακτικές ρυθμίσεις Καλώς ορίσατε ΠΜ </strong>',

	'WPM_ALREADY_INSTALLED'	=> 'Το Καλώς ορίσατε ΠΜ έχει εγκατασταθεί στην βάση δεδομένων σας!',
	'WPM_BOARD_CONTACT'		=> 'Ιστοσελίδα επικοινωνία',
	'WPM_BOARD_EMAIL'		=> 'Ιστοσελίδας ηλεκτρονικό ταχυδρομείο',
	'WPM_BOARD_SIG'			=> 'Υπογραφή ιστοσελίδας',
	'WPM_CPF_VARS'			=> 'Προσαρμοσμένα πεδία προφίλ μεταβλητές',
	'WPM_ENABLE'			=> 'Ενεργοποίηση WPM',
	'WPM_ENABLE_EXPLAIN'	=> 'Μπορείτε να ενεργοποιήσετε / απενεργοποιήσετε αυτό το mod ανά πάσα στιγμή.',
	'WPM_ERROR_EMPTY'		=> 'Το πεδίο <strong>%s</strong> δεν πρέπει να είναι κενό',
	'WPM_ERROR_USER'		=> 'Άγνωστο όνομα μέλους <strong>%s</strong> στο πεδίο όνομα μέλους',
	'WPM_ERROR_DB'			=> 'Ένα πρόβλημα εμφανίστηκε κατά την ενημέρωση <strong>%s</strong>',
	'WPM_INSTALLED'			=> 'Το Καλώς ορίσατε ΠΜ εγκαταστάθηκε επιτυχώς στην βάση δεδομένων σας!',
	'WPM_NOTIFY'			=> 'Ειδοποίηση',
	'WPM_NOTIFY_EXPLAIN'	=> 'Να ενημερώνει τα μέλη, ότι υπάρχουν νέα ΠΜ εάν νομίζετε ότι δεν μπορεί να τα παρατηρήσει.',
	'WPM_PREDEFINED_VARS'	=> 'Προκαθορισμένες μεταβλητές',
	'WPM_SENDER'			=> 'Όνομα αποστολέα',
	'WPM_SITE_NAME'			=> 'Όνομα ιστοσελίδας',
	'WPM_SITE_DESC'			=> 'Ιστοσελίδας περιγραφή',
	'WPM_SUBJECT_EXPLAIN'	=> 'Ο τίτλος του μηνύματος που το μέλος θα λάβει.',
	'WPM_TITLE'				=> 'Καλώς ορίσατε ΠΜ κατά την πρώτη σύνδεση',
	'WPM_TITLE_EXPLAIN'		=> 'Σας επιτρέπει να δημιουργήσετε ένα προσωπικό μήνυμα. Αυτό το μήνυμα θα σταλεί σε όλους τους νέα μέλη όταν αυτά να συνδεθείτε.',
	'WPM_UPDATED'			=> 'Οι ρυθμίσεις του Καλώς ορίσατε ΠΜ ενημερώθηκαν',
	'WPM_USERNAME'			=> 'Όνομα μέλους',
	'WPM_USERNAME_EXPLAIN'	=> 'Το όνομα του μέλους που θα "στείλει" το μήνυμα.',
	'WPM_USER_ID'			=> 'Μέλους ID',
	'WPM_USER_IP'			=> 'Μέλους IP',
	'WPM_USER_EMAIL'		=> 'Μέλους Ε-Μαιλ',
	'WPM_USER_REGDATE'		=> 'Ημερομηνία εγγραφή',
	'WPM_USER_LANG_EN'		=> 'Γλώσσα (Ελληνικά',
	'WPM_USER_LANG_LOCAL'	=> 'Γλώσσα (Τοπικά)',
	'WPM_USER_TZ'			=> 'Ζώνη ώρας ',
	'WPM_VAR_NAME'			=> 'Όνομα',
	'WPM_VAR_VAR'			=> 'Μεταβλητές',
	'WPM_VAR_EXAMPLE'		=> 'Παράδειγμα',
));
?>