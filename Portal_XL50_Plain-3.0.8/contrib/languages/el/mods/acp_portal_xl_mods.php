<?php
/** 
*
* @name acp_portal_xl_mods.php [Greek-El]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_mods.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
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
	'TITLE' 					=> 'Διαχείριση Βάσης Μονάδων',
	'TITLE_EXPLAIN'				=> 'Από εδώ μπορείτε να διατηρείτε την Βάση των Μονάδων σας, να δημιουργήσετε/επεξεργαστείτε/διαγράψετε καταχωρήσεις Μονάδων.',
 
	'PORTAL_MOD_EDIT_HEADER'	=> 'Προσθήκη ή επεξεργασία μονάδας',
	'ACP_MANAGE_MOD'			=> 'Προσθήκη ή επεξεργασία μονάδων',
	'ACP_MOD_EXPLAIN'			=> 'Διαχείριση μονάδων',
	'ADD_MOD'					=> 'Προσθήκη μονάδας',
	'DISABLE'					=> '<b>Block ενεργοποιημένο</b>',
	'DISABLE_BLOCK'				=> 'Ενεργοποίηση',
	'ENABLE'					=> '<b>Block απενεργοποιημένο</b>',
	'ENABLE_BLOCK'				=> 'Απενεργοποίηση',
	'MUST_SELECT_MOD'			=> 'Επιλεγμένες Μονάδες',
	'MOD'						=> 'Μονάδες στην βάση',
	'MOD_INFO'					=> 'Μονάδα',
	'MOD_EXPLAIN'				=> 'Εδώ βάζετε το κείμενο της Μονάδας σας',
	'MOD_ADDED'					=> 'επιτυχής προσθήκη Μονάδας',
	'MOD_DISABLE'				=> '<b>Ενεργοποίηση</b>',
	'MOD_DISABLE_EXPLAIN'		=> '<b>Ενεργοποίηση:</b><br>Εμφάνιση block στην αρχική σελίδα.',
	'MOD_DISABLE_EXPLAIN2'		=> 'Μπορείτε να ενεργοποιήσετε ή απενεργοποιήσετε την εμφάνιση του Block στην δημ. συζήτηση : ',
	'MOD_REMOVED'				=> 'Επιτυχής διαγραφή Μονάδας',
	'MOD_UPDATED'				=> 'Επιτυχής επεξεργασία Μονάδας',
	'RESET_MOD' 				=> 'Επαναφορά',
	'MOD_EDIT'					=> 'Επεξεργασία μονάδων',
	'MOD_EDIT_EXPLAIN'			=> 'Εδώ μπορείτε να προσθέσετε ή να επεξεργαστείτε μια καταχώρηση ήδη υπάρχουσας Μονάδας. Ο Τίτλος και η έκδοση είναι υποχρεωτικά. Μπορείτε επίσης να προσθέσετε πληροφορίες για το που μπορεί να βρεθεί και να μεταφορτωθεί η μονάδα.',
	'MOD_TITLE'					=> 'Τίτλος Μονάδας',
	'MOD_TITLE_EXPLAIN'			=> 'Σύντομος τίτλος της Μονάδας.',
	'MOD_VERSION'				=> 'Έκδοση',
	'MOD_VERSION_EXPLAIN'		=> 'Η έκδοση της π.χ. 0.4B5',
	'MOD_VERSION_TYPE'			=> 'Τύπος έκδοσης',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Alpha, Beta, Dev ή RC*',
	'MOD_DESC'					=> 'Περιγραφή',
	'MOD_DESC_EXPLAIN'			=> 'Η περιγραφή της Μονάδας. Μια καθαρή περιγραφή συνήθως μπορεί να βρεθεί στην περιγραφή της εγκατάστασης της Μονάδας.',
	'MOD_AUTHOR'				=> 'Δημιουργός',
	'MOD_AUTHOR_EXPLAIN'		=> 'Το όνομα του δημιουργού της μονάδας, βάλτε άγνωστος αν δεν το γνωρίζετε',
	'MOD_URL'					=> 'Διεύθυνση',
	'MOD_URL_EXPLAIN'			=> 'Ορίστε τον δεσμό για την σελίδα της Μονάδας (δεσμός για την -περιγραφή ή το -θέμα της μονάδας).',
	'MOD_DOWNLOAD'				=> 'Μεταφόρτωση',
	'MOD_DOWNLOAD_EXPLAIN'		=> 'Ορίστε τον δεσμό από τον οποίο είναι δυνατόν να μεταφορτώσετε την Μονάδα (απευθείας δεσμός για μεταφόρτωση).',

));

?>
