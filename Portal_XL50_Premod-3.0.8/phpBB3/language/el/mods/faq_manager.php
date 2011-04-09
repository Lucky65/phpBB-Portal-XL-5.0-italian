<?php
/**
*
* @package phpBB3 FAQ Manager [Greek]
* @copyright (c) 2007 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translated by diastasi (thraki.info) & phpbb2.gr
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_FAQ_MANAGER'			=> 'Διαχειριστής FAQ (ερωταπαντησεων)',

	'BACKUP_LOCATION_NO_WRITE'	=> 'Αδυναμία δημιουργίας αρχείου backup.  Παρακαλώ ελέγξτε τις προσβάσεις καταλόγων στο store/faq_backup/ και κάθε κατάλογο ή αρχείο μέσα σε αυτό.',
	'BAD_FAQ_FILE'				=> 'Το αρχείο που προσπαθείτε να επεξεργαστήτε δεν είναι αρχείο FAQ.',

	'CAT_ALREADY_EXISTS'		=> 'Υπάρχει ήδη μία κατηγορία με αυτό το όνομα.',
	'CATEGORY_NOT_EXIST'		=> 'Η κατηγορία που ζητήσατε δεν υπάρχει.',
	'CREATE_CATEGORY'			=> 'Δημιουργία κατηγορίας',
	'CREATE_FIELD'				=> 'Δημιουργία πεδίου',

	'DELETE_CAT'				=> 'Διαγραφή κατηγορίας',
	'DELETE_CAT_CONFIRM'		=> 'Θέλετε να διαγράψετε αυτή την κατηγορία?  Θα διαγραφούν επίσης όλα τα πεδία της κατηγορίας!',
	'DELETE_VAR'				=> 'Διαγραφή πεδίου',
	'DELETE_VAR_CONFIRM'		=> 'Θέλετε να διαγράψετε αυτό το πεδίο?',

	'FAQ_CAT_LIST'				=> 'Εδώ μπορείται να δείτε και να επεξεργαστείτε κατηγορίες.',
	'FAQ_EDIT_SUCCESS'			=> 'Το FAQ ενημερώθηκε επιτυχώς.',
	'FAQ_FILE_NOT_EXIST'		=> 'Το αρχείο που προσπαθείτε να επεξεργαστήτε δεν υπάρχει.',
	'FAQ_FILE_NO_WRITE'			=> 'Αδυναμία ενημέρωσης αρχείου.  Ελέγξτε τις άδειες του αρχείου που προσπαθείτε να επεξεργαστήτε.',
	'FAQ_FILE_SELECT'			=> 'Επιλέξτε αρχείο για επεξεργασία.',

	'LANGUAGE'					=> 'Γλώσσα',
	'LOAD_BACKUP'				=> 'Φόρτωση Backup',

	'NAME'						=> 'Ονομα',
	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Δεν επιτρέπετε να επεξεργαστήτε αρχεία από τον κατάλογο γλώσσας.',
	'NO_FAQ_FILES'				=> 'Μη διαθέσιμα αρχεία FAQ.',
	'NO_FAQ_VARS'				=> 'Δεν υπάρχουν μεταβλητές FAQ στο αρχείο.',

	'VAR_ALREADY_EXISTS'		=> 'Υπάρχει ήδη πεδίο με αυτό το όνομα.',
	'VAR_NOT_EXIST'				=> 'Η μεταβλητή που ζητάτε δεν υπάρχει.',
));

?>