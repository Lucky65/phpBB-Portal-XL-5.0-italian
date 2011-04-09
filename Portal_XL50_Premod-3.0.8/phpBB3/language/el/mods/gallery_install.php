<?php
/**
*
* install [Greek-El]
*
* @package language
* @version $Id: gallery_install.php 1 2008-11-08 23:57:03Z nickvergessen $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbb2.gr:
* (http://phpbb2.gr/team/) diastasi
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
	'AFTER_INSTALL_GOTO'				=> 'Πήγαινε στο %sGallery%s',

	'EXAMPLE_ALBUM1'					=> 'Η πρώτη σας κατηγορία',
	'EXAMPLE_ALBUM2'					=> 'Το πρώτο σας άλμπουμ',
	'EXAMPLE_ALBUM2_DESC'				=> 'Περιγραφή για το πρώτο σας άλμπουμ.',
	'EXAMPLE_DESC'						=> 'Ευχαριστούμε για την εγκατάσταση του phpBB Gallery v%s aka. &quot;DB-Bird&quot;.<br />'
											. 'Αυτό είναι μόνο ένα παράδειγμα-εικόνας, μπορείτε να την διαγράψετε.',
	'EXAMPLE_DESC_UID'					=> '1vrbfkfh',

	'INSTALLER_CHMOD'					=> 'Έλεγχος δικαιωμάτων CHMOD',
	'INSTALLER_CHMOD_EXPLAIN'			=> 'Ο ακόλουθος φάκελος χρειάζεται CHMOD 777, για να μπορέσει το άλμπουμ να λειτουργήσει.',
	'INSTALLER_CHMOD_UNWRITABLE'		=> 'Μη εγγράψιμο',
	'INSTALLER_CHMOD_WRITABLE'			=> 'Εγγράψιμο',

	'INSTALLER_CONVERT'					=> 'Μετατροπή',
	'INSTALLER_CONVERT_NOTE'			=> 'Μετατροπή MOD σε v%s',
	'INSTALLER_CONVERT_PREFIX'			=> 'Πρόθεμα της εγκατάστασης του phpBB2',
	'INSTALLER_CONVERT_SUCCESSFUL'		=> 'Η μετατροπή του MOD σε v%s έγινε επιτυχώς.<br />Τώρα μπορείτε να αντιγράψετε τις  εικόνες-αρχεία από το album/upload και album/upload/cache από το εγκατεστημένο phpbb2  στους αντίστοιχους του phpBB3.<br />Τώρα μπορείτε να διαγράψετε  τον φάκελο install_gallery.',
	'INSTALLER_CONVERT_UNSUCCESSFUL'	=> 'Η μετατροπή του MOD σε  v%s  <strong>δεν έγινε </strong> επιτυχώς.',
	'INSTALLER_CONVERT_UNSUCCESSFUL2'	=> 'Εσείς πρέπει να προσθέσετε το πρόθεμα της  δικιά  σας εγκατάστασης του phpBB2.',
	'INSTALLER_CONVERT_WELCOME'			=> 'Καλώς ήρθατε στο μενού μετατροπής',
	'INSTALLER_CONVERT_WELCOME_NOTE'	=> 'Εάν επιλέξετε να κάνετε μετατροπή το  MOD, πρέπει να προσπαθήσετε να αντιγράψετε τα αρχεία από την παλαιά εγκατάσταση του phpBB2 σας.',

	'INSTALLER_DELETE'					=> 'Διαγραφή',
	'INSTALLER_DELETE_NOTE'				=> 'διαγραφή',
	'INSTALLER_DELETE_BBCODE'			=> 'Επιλογή BBCode',
	'INSTALLER_DELETE_SUCCESSFUL'		=> 'Επιτυχής διαγραφή του MOD.<br />Τώρα διαγράψτε όλα τα αρχεία.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> '<strong>Δεν</strong> μπορεί να γίνει διαγραφή του MOD.',
	'INSTALLER_DELETE_WELCOME'			=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε την γκαλερί',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'Εάν επιλέξετε να διαγράψετε το MOD, θα πρέπει να διαγράψετε όλες τις εισαγωγές στην βάση δεδομένων κατά την εγκατάστασηby.',

	'INSTALLER_INTRO'					=> 'Πληροφορίες',
	'INSTALLER_INTRO_WELCOME'			=> 'Καλώς ήρθατε στην εγκατάσταση του MOD',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Επιλέξτε τι θα θέλατε να κάνετε.',

	'INSTALLER_INSTALL'					=> 'Εγκατάσταση',
	'INSTALLER_INSTALL_MENU'			=> 'Μενού εγκατάστασης',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'Η εγκατάσταση του MOD v%s έγινε επιτυχώς.<br />Τώρα μπορείτε να διαγράψετε τον φάκελο install_gallery',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'Η εγκατάσταση του MOD v%s  <strong>δεν έγινε</strong> επιτυχώς.',
	'INSTALLER_INSTALL_VERSION'			=> 'Εγκατάσταση MOD v%s',
	'INSTALLER_INSTALL_WELCOME'			=> 'Καλώς ήρθατε στο μενού εγκατάστασης',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Εάν επιλέξετε να εγκαταστήσετε το  MOD, όλοι οι πίνακες από προηγούμενες εκδόσεις θα διαγραφούν.',

	'INSTALLER_UPDATE'					=> 'Αναβάθμιση',
	'INSTALLER_UPDATE_MENU'				=> 'Μενού αναβάθμισης',
	'INSTALLER_UPDATE_NOTE'				=> 'Αναβάθμιση  MOD από v%s σε v%s',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'Η αναβάθμιση του  MOD από v%s σε  v%s έγινε επιτυχώς.<br />Τώρα μπορείτε να διαγράψετε τον φάκελο install_gallery',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'Η αναβάθμιση του  MOD από v%s σε  v%s  <strong>δεν έγινε</strong> επιτυχώς.',
	'INSTALLER_UPDATE_VERSION'			=> 'Αναβάθμιση του  MOD από v',
	'INSTALLER_UPDATE_WELCOME'			=> 'Καλώς ήρθατε στο  μενού αναβάθμισης',
	
	'MISSING_PARENT_MODULE'				=> 'Η μονάδα λείπει  #%s ώς μονάδα γονέας για "%s".',
	'MODULES_ADVICE_SELECT'				=> 'Προτεινόμενη είναι "%s"',
	'MODULES_CREATE_PARENT'				=> 'Δημιουργήστε την τυπική-ενότητα γονέων',
	'MODULES_MODULE_ID'					=> 'Ταυτότητα',
	'MODULES_MODULE_NAME'				=> 'Όνομα',
	'MODULES_PARENT_SELECT'				=> 'Επιλέξτε μονάδα γονέα. Übergeordnetes Modul auswählen',
	'MODULES_SELECT_4ACP'				=> 'Επιλέξτε μονάδα γονέα  για τον  "πίνακα ελέγχου διαχειριστή "',
	'MODULES_SELECT_4UCP'				=> ' Επιλέξτε μονάδα γονέα  για τον "πίνακα ελέγχου μελών"',
	'MODULES_SELECT_NONE'				=> 'καμία μονάδα γονέας',

	'WARNING'							=> 'Προσοχή',
));

?>