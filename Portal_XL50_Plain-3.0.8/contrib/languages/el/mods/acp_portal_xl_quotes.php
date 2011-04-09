<?php
/** 
*
* @name acp_portal_xl_quotes.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_quotes.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbbgr.com:
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(   
	'TITLE' 					=> 'Διαχείριση εδαφίων',
	'TITLE_EXPLAIN'				=> 'Από αυτήν την μορφή,  μπορείτε να δημιουργήσετε/επεξεργαστείτε/διαγράψετε παραθέσεις. Μπορείτε να προσθέσετε όσες παραθέσεις θέλετε  για να εμφανίζονται στο block, όμως το όριο για την τυχαία παράθεση που θα εμφανίζετε έχει τεθεί 1.',
 
	'PORTAL_QUOTES_EDIT_HEADER'	=> 'Προσθήκη ή επεξεργασία μιας παράθεσης',
	'ACP_MANAGE_QUOTE'			=> 'Προσθήκη ή επεξεργασία παραθέσεων',
	'ACP_QUOTE_EXPLAIN'			=> 'Διαχείριση παραθέσεων',
	'ADD_QUOTE'					=> 'Προσθήκη παράθεσης',
	'AUTHOR'					=> 'Συγγραφέας',
	'AUTHOR_INFO'				=> 'Συγγραφέας',
	'AUTHOR_EXPLAIN'			=> 'Το όνομα του Συγγραφέας, βάλτε Άγνωστος αν δεν το ξέρετε.',
	'DISABLE'					=> '<b>Block ενεργοποιημένο</b>',
	'DISABLE_BLOCK'				=> 'Ενεργοποίηση',
	'ENABLE'					=> '<b>Block απενεργοποιημένο</b>',
	'ENABLE_BLOCK'				=> 'Απενεργοποίηση',
	'MUST_SELECT_QUOTE'			=> 'Επιλεγμένες παραθέσεις',
	'QUOTE'						=> 'Παραθέσεις στην βάση δεδομένων',
	'QUOTE_INFO'				=> 'Παράθεση',
	'QUOTE_EXPLAIN'				=> 'Εδώ βάζετε το κείμενο της παράθεσης',
	'QUOTE_ADDED'				=> 'Επιτυχής προσθήκη παράθεσης',
	'QUOTE_DISABLE'				=> '<b>Ενεργό</b>',
	'QUOTE_DISABLE_EXPLAIN'		=> '<b>Ενεργό :</b><br> Το block εμφανίζεται στην δημ. συζήτηση.',
	'QUOTE_DISABLE_EXPLAIN2'	=> 'Μπορείτε να επιτρέψετε ή να θέσετε εκτός λειτουργίας την επίδειξη  των Block στο φόρουμ: ',
	'QUOTE_REMOVED'				=> 'Επιτυχής διαγραφή παράθεσης',
	'QUOTE_UPDATED'				=> 'Επιτυχής επεξεργασία παράθεσης',
	'RESET_QUOTE' 				=> 'Επαναφορά',

));

?>
