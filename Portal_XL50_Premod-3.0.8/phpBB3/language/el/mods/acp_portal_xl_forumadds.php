<?php
/** 
*
* @name acp_portal_xl_forumadds.php [Greek-El]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_forumadds.php,v 1.5 2008/02/27 17:52:25 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
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

$lang = array_merge($lang, array(
	'TITLE' 				=> 'Διαχείριση Διαφημίσεων Δημ. Συζήτησης',
	'TITLE_EXPLAIN'			=> 'Εδώ μπορείτε να διαχειριστείτε τις διαφημίσεις που θα εμφανίζονται στην δημ. συζήτηση. Μπορείτε να προσθέσετε όσες διαφημίσεις θέλετε να εμφανίζονται στο κάθε θέμα, όλες οι εγγραφές θα εμφανίζονται με τυχαία σειρά.',

	'NEED_VALUES'  			=> 'Πρέπει να συμπληρώσετε <strong>όλα</strong> τα πεδία για να ενεργοποιηθεί η διαφήμιση.',
	'ADDED'  				=> 'Επιτυχής προσθήκη διαφήμισης στην βάση δεδομένων!',
	'UPDATED'  				=> 'Επιτυχής ενημέρωση διαφήμισης.',
	'DELETED' 	 			=> 'Επιτυχής διαγραφή διαφήμισης από την βάση δεδομένων!',
	'REALY_DELETE'  		=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε την διαφήμιση;',
	'MUST_SELECT_ADDS'		=> 'Επιλεγμένες διαφήμισης',
	
	'ADDS'  				=> 'Διαφήμιση',
	'NEW_AD' 				=> 'Προσθήκη διαφήμισης',
	'ADDS_NAME' 			=> 'Όνομα',
	'ADDS_NAME_DESC' 		=> 'Όνομα διαφήμισης.',
	'ADDS_CODE' 			=> 'Κώδικας Διαφήμισης',
	'ADDS_CODE_DESC' 		=> 'Κώδικας που θα χρησιμοποιηθεί στην διαφήμιση',
	'ADDS_FORUMS' 			=> 'Δημ. Συζητήσεις',
	'ADDS_FORUMS_DESC' 		=> 'Βάλτε το ID της δημ. συζήτησης ή των δημ. συζητήσεων που θα εμφανίζεται η διαφήμιση, πολλαπλές δημ. συζητήσεις πρέπει να χωρίζονται με κόμμα.',
	'ADDS_FORUMS_DESCALL' 	=> 'Εμφάνιση σε όλες της Δημ. Συζητήσεις;',
	'ADDS_ACTIVE' 			=> 'Ενεργό',
	'ADDS_ACTIVE_DESC' 		=> 'Προβολή διαφημίσεων; ',
	'YES' 					=> 'Ναι',
	'NO' 					=> 'Όχι',
	'GUEST' 				=> 'Επισκέπτες',
	'ADDS_VIEWS' 			=> 'Προβολές διαφημίσεων',
	'ADDS_ALL' 				=> 'Σε όλες τις δημ. συζητήσεις',
	'ADDS_SHOW' 			=> 'Στις δημ. συζητήσεις',
	'ADDS_VIEWS_DESC' 		=> 'Το πλήθος των εμφανίσεων αυτής της διαφήμισης',
	'ADDS_MAX_VIEWS' 		=> 'Μέγιστος αριθμός εμφανίσεων',
	'ADDS_MAX_VIEWS_DESC' 	=> 'Ο μέγιστος αριθμός εμφανίσεων που θα προβάλετε αυτή η διαφήμιση',         
	'POSITION' 				=> 'Θέση',
	'POSITION_DESC' 		=> 'Δε ποια θέση θα εμφανίζεται η διαφήμιση;',
	'POSITION1' 			=> 'Μετά την πρώτη δημοσίευση',
	'POSITION2' 			=> 'Μετά από κάθε δημοσίευση',
	'POSITION3' 			=> 'Πάνω από τις δημοσιεύσεις',
	'POSITION4' 			=> 'Κάτω από τις δημοσιεύσεις',
	'ADDS_IN_SYSTEM' 		=> 'Διαφημίσεις στην βάση δεδομένων',
	'ADDS_IN_SYSTEM_DESC' 	=> 'Μια λίστα των διαφημίσεων που είναι ήδη αποθηκευμένες στην βάση δεδομένων',
	'SHOW_IN_ALL_FORUMS' 	=> 'Εμφάνιση σε όλες της δημ. συζητήσεις;',
	'ADD_ADVERTISEMENT'		=> 'Προσθήκη διαφήμισης',		
	'RESET_ADDS'			=> 'Επαναφορά',		
	'ADD_ADDS'				=> 'Προσθήκη διαφήμισης',		

	));

?>
