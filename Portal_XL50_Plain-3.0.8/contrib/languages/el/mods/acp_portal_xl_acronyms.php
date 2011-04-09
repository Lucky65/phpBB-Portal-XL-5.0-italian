<?php
/** 
*
* @name portal_acronyms.php [Greek]
* @package phpBB3 Portal XL Premod
* @version $Id: portal_acronyms.php,v 1.15 2008/09/29 17:56:14 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
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
	'TITLE' 					=> 'Διαχείριση ακρωνύμων και συντμήσεων ',
	'TITLE_EXPLAIN'				=> 'Εδώ μπορείτε να προσθέσετε/επεξεργαστείτε/διαγράψετε ακρώνυμα. Ακρώνυμα και αρχικά είναι συντμήσεις, όπως <strong>NATO</strong>, <strong>laser</strong>, και <strong>IBM</strong>, τα οποία χρησιμοποιούν αρχικά ή κομμάτια των λέξεων για να περιγράψουν μια φράση ή ένα όνομα. Τα ακρώνυμα και αρχικά συνήθως προφέρονται με τρόπο που είναι διαφορετικός από την πλήρη φράση στην οποία αναφέρονται, όπως τα ονόματα των μεμονωμένων γραμμάτων (as in <em><strong>IBM</strong></em>), όπως μια λέξη (as in <em><strong>NATO</strong></em>), ή όπως συνδυασμός αυτών (as in <em><strong>IUPAC</strong></em>). Μπορείτε να προσθέσετε όσα ακρώνυμα θέλετε.',
 
	'PORTAL_ACRONYMS_EDIT_HEADER'	=> 'Προσθέστε ή επεξεργαστείτε ένα Ακρώνυμο',
	'ACP_MANAGE_ACRONYM'			=> 'Προσθέστε ή διαχειριστείτε Ακρώνυμο',
	'ACP_ACRONYM_EXPLAIN'			=> 'Διαχειριστείτε Ακρώνυμο',
	'ADD_ACRONYM'					=> 'Προσθέστε Ακρώνυμο',
	'DESCRIPTION'					=> 'Ακρώνυμο',
	'DESCRIPTION_INFO'				=> 'Φράση ακρώνυμου',
	'DESCRIPTION_EXPLAIN'			=> 'Εμφάνιση φράσης για το πιο πάνω ακρώνυμου.',
	'MUST_SELECT_ACRONYM'			=> 'Επιλέξτε  Ακρώνυμο',
	'ACRONYM'						=> 'Ακρώνυμα στην βάση',
	'ACRONYM_INFO'					=> 'Ακρώνυμα',
	'ACRONYM_EXPLAIN'				=> 'Τα αρχικά γράμματα των λέξεων ή των μερών λέξης των ακρωνύμων σας πηγαίνουν εδώ',
	'ACRONYM_ADDED'					=> 'Το ακρώνυμο προστέθηκε επιτυχώς',
	'ACRONYM_DISABLE_EXPLAIN2'		=> 'Μπορείτε να ενεργοποιήσετε ή απενεργοποιήσετε την προβολή του  Block στο φόρουμ : ',
	'ACRONYM_REMOVED'				=> 'Το ακρώνυμο διαγράφηκε επιτυχώς',
	'ACRONYM_UPDATED'				=> 'Το ακρώνυμο επεξεργάστηκε επιτυχώς',
	'RESET_ACRONYM' 				=> 'Επαναφορά',
	'BLOCK_ACRONYM_SETTINGS'		=> 'Γενικές ρυθμίσεις ακρωνύμων',
	'ACRONYM_ALLOW'					=> 'Ενεργοποίηση ακρωνύμων',
	'ACRONYM_ACTIVE'				=> 'Επιτρέπονται ακρώνυμα',
	'ACRONYM_ACTIVE_EXPLAIN'		=> 'Ενεργοποίηση ακρωνύμων στο φόρουμ Ναι/Όχι?',	
	'ACRONYM_URL'					=> 'Σύνδεσμος',
	'ACRONYM_URL_INFO'				=> 'Δεσμός που θα παραπέμπεται',
	'ACRONYM_URL_EXPLAIN'			=> 'Προσθέστε εδώ δεσμό που θα παραπέμπει το ακρώνυμο.',
));

?>