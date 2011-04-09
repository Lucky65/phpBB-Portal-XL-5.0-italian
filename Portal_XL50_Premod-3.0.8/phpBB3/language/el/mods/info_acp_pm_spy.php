<?php
/**
*
* acp [Greek-El]
*
* @package disclaimer
* @version 1.0.0
* @copyright (c) 2008 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbb2.gr:
* (http://phpbb3.gr/team/)
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
	'ACP_PM_SPY'			=> 'ΠΜ Spy',
	'AUTHOR_IP'				=> 'Συγγραφέα IP',
	'DATE'					=> 'Ημερομηνία',
	'DELETE_PMS'			=> 'Διαγραφή Π.Μ',
	'NO_PM_SELECTED'		=> 'Δεν επιλέχτηκαν ΠΜ',
	'PM_BOX'				=> 'ΠΜ γραμματοκιβώτιο',
	'PM_SPY_READ'			=> 'Λίστα προσωπικών μηνυμάτων',
	'PM_SPY_READ_EXPLAIN'	=> 'Εδώ είναι η λίστα όλων των προσωπικών μηνυμάτων του φόρουμ σας.',
	'TO'					=> 'Προς',
	'TOTAL_USERS'			=> 'Σύνολο μελών',
	'PM_COUNT'				=> 'Μετρητής μηνυμάτων',

	'INSTALL_NOT_DELETED'	=> 'Το αρχείο εγκατάστασης του μοντ δεν έχει διαγραφεί',

	'PM_HOLDBOX'			=> 'Κρατημένα',	
	'PM_INBOX'				=> 'Εισερχόμενα',
	'PM_NOBOX'				=> 'Κανένα στο γραμματοκιβώτιο',
	'PM_OUTBOX'				=> 'Εξερχόμενα',
	'PM_SAVED'				=> 'Αποθηκευμένα',
	'PM_SENTBOX'			=> 'Απεσταλμένα',

	'SORT_FROM'				=> 'Από',
	'SORT_TO'				=> 'Προς',
	'SORT_BCC'				=> 'BCC',
	'SORT_PM_BOX'			=> 'ΠΜ γραμματοκιβώτιο',
	
	'LOG_PM_SPY'			=> '<strong>΄ΠΜ που διαγράφτηκαν από το PM Spy</strong><br />',
));

// Install
$lang = array_merge($lang, array(
	'NO_FOUNDER'				=> 'Δεν είστε εξουσιοδοτημένος να εγκαταστήσετε αυτό το μοντ – πρέπει να έχετε δικαιώματα διαχειριστή.',
	'INSTALL_PM_SPY'			=> 'Εγκατάσταση PM Spy Mod',
	'COMPLETE'					=> 'Πλήρες εγκατάσταση...',
));

?>