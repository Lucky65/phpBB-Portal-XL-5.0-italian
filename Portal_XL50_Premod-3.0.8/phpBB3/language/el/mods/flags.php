<?php
/** 
*
* flags [Greek-El]
*
* @package language
* @version $Id: flags.php,v 1.8 2008/05/01 14:18:09 damysterious Exp $
* @copyright (c) 2007 nedka (Nguyen Dang Khoa) 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbb2.gr:
* (http://phpbb2.gr/groupcp.php?g=322&sid=7acc2b540cebf07b063274dde036a3ac)
* Athanasios Ziouzios Panagioths Mixas Konstantakelhs Panagioths
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

// Country Flags
$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'		=> 'Εδώ μπορείτε να προσθέσετε, να επεξεργαστείτε, να δείτε και να διαγράψετε σημαίες κρατών. Το κάθε κράτος πρέπει να έχει τον κώδικα κράτους του.',
	'ADD_FLAG'				=> 'Προσθήκη νέας σημαίας κράτους',

	'FLAG_ADDED'			=> 'Επιτυχής προσθήκη σημαίας κράτους.',
	'FLAG_CODE'				=> 'Κωδικός κράτους',
	'FLAG_COUNTRY'			=> 'Όνομα κράτους',
	'FLAG_IMAGE'			=> 'Εικόνα σημαίας κράτους',
	'FLAG_IMAGE_EXPLAIN'	=> 'Εδώ μπορείτε να αντοστοιχίσετε μια μικρή εικόνα σε μία σημαία κράτους. Ο φάκελος είναι σχετικός με τον root φάκελο του phpBB, π.χ. <samp>images/flags</samp>',
	'FLAG_REMOVED'			=> 'Επιτυχής διαγραφή σημαίας κράτους.',
	'FLAG_UPDATED'			=> 'Επιτυχής ενημέρωση σημαίας κράτους.',

	'MUST_SELECT_FLAG'		=> 'Πρέπει να επιλέξετε μια σημαία κράτους.',

	'NO_FLAG'				=> 'Δεν έχει οριστεί σημαία κράτους',
	'NO_FLAG_CODE'			=> 'Δεν έχετε ορίσει κωδικό κράτους για αυτήν την σημαία.',
	'NO_FLAG_COUNTRY'		=> 'Δεν έχετε ορίσει όνομα κράτους για αυτήν την σημαία.',
	'NO_UPDATE_FLAGS'		=> 'Επιτυχής διαγραφή σημαίας κράτους. Οι λογαριασμοί όμως των μελών ή της ομάδας μελών που χρησιμοποιούν αυτήν την σημαία δεν ενημερώθηκε. Πρέπει να ορίστε χειροκίνητα την σημαία κράτους για αυτούς τους λογαριασμούς.',

	'TOTAL_USERS'			=> 'Συνολικά μέλη',

	'USER_FLAG_UPDATED'		=> 'Ενημέρωση σημαίας κράτους του μέλους.',
));

?>
