<?php
/**
*
* prime_post_revisions [Greek]
*
* @package language
* @version $Id: prime_post_revisions.php,v 1.2.0 2008/07/21 13:45:00 primehalo Exp $
* @copyright (c) 2007-2008 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
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
//
// Some characters you may want to copy&paste:
// â€™ Â» â€œ â€ â€¦
//

$lang = array_merge($lang, array(
	// Viewing posts
	'PRIME_POST_REVISIONS_VIEW'				=> 'Προβολή ιστορικού δημοσιεύσεων.',	// Text for the link to view the revision history

	// Viewing revisions
	'PRIME_POST_REVISIONS_VIEWING'			=> 'Προβολή ιστορικού δημοσιεύσεων',
	'PRIME_POST_REVISIONS_VIEWING_EXPLAIN'	=> 'Αυτή η σελίδα δείχνει όλες τις εκδόσεις  ξεκινώντας από την τρέχον έκδοση.',
	'PRIME_POST_REVISIONS_TITLE'			=> 'Προβολή ιστορικού δημοσιεύσεων: %s',	// The %s is the post title
	'PRIME_POST_REVISIONS_FIRST'			=> 'Αυθεντική δημοσίευση: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_FINAL'			=> 'Τρέχων δημοσίευση: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_COUNT'			=> 'Έκδοση %d: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_INFO'				=> 'Επεξεργάστηκε από %1$s και  %2$s.',
	'PRIME_POST_REVISIONS_NO_SUBJECT'		=> '[καμία περιγραφή]',	

	// Delete a revision
	'PRIME_POST_REVISIONS_DELETE'			=> 'Διαγραφή έκδοσης',
	'PRIME_POST_REVISIONS_DELETE_CONFIRM'	=> 'Είστε σίγουρος ότι θέλετε να διαγράψατε αυτήν την έκδοση ?',
	'PRIME_POST_REVISIONS_DELETE_DENIED'	=> 'Πρέπει να έχετε τα δικαιώματα για να διαγράψετε αυτήν την έκδοση.',
	'PRIME_POST_REVISIONS_DELETE_FAILED'	=> 'Ένα λάθος προέκυψε κατά την διαγραφή αυτής της έκδοσης.',
	'PRIME_POST_REVISIONS_DELETE_SUCCESS'	=> 'Η έκδοση διαγράφτηκε επιτυχώς.',
	'PRIME_POST_REVISIONS_DELETE_INVALID'	=> 'Δεν έχετε επιλέξει την έκδοση δημοσίευσης για διαγραφή.',

	// Delete all revisions
	'PRIME_POST_REVISIONS_DELETES'			=> 'Διαγραφή όλων των εκδόσεων.',
	'PRIME_POST_REVISIONS_DELETES_CONFIRM'	=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε όλες τις εκδόσεις?',
	'PRIME_POST_REVISIONS_DELETES_DENIED'	=> 'Πρέπει να έχετε τα δικαιώματα για να διαγράψετε τις εκδόσεις.',
	'PRIME_POST_REVISIONS_DELETES_FAILED'	=> 'Ένα λάθος προέκυψε κατά την διαγραφή αυτών των εκδόσεων.',
	'PRIME_POST_REVISIONS_DELETES_SUCCESS'	=> 'Η εκδόσεις διαγράφτηκαν επιτυχώς.',
	'PRIME_POST_REVISIONS_DELETES_INVALID'	=> 'Δεν έχετε επιλέξει εκδόσεις δημοσιεύσεων για διαγραφή.',
));

?>