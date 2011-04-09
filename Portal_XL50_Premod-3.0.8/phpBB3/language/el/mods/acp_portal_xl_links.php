<?php
/** 
*
* @name acp_portal_xl_links.php [Greek-El]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_links.php,v 1.5 2008/02/27 17:52:25 damysterious Exp $
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
	'TITLE' 					=> 'Διαχείριση δεσμών',
	'TITLE_EXPLAIN'				=> 'Από εδώ μπορείτε να δημιουργήσετε/επεξεργαστείτε/διαγράψετε έναν δεσμό. Αυτό το block μπορεί να ενεργοποιηθεί/απενεργοποιηθεί από <strong>Portal</strong> -> <strong>Γενικά</strong> -> <strong>Block δεσμών</strong>. Τα εικονίδια που χρησιμοποιούνται σε αυτό το μενού βρίσκονται στον φάκελο /portal/images/icon_links/. Προτεινόμενο μέγεθος εικονιδίων 16x16px. Προσθέστε όσα εικονίδια θέλετε αλλά να έχετε υπόψη ότι η προεπισκόπηση τους θα παραμορφώσει το παράθυρο Διαθέσιμων mini εικονιδίων κατά την επεξεργασία ή την προσθήκη κάποιου δεσμού.<br /> Η διαδρομή είναι σχετική με το φάκελο root της κοινότητας, π.χ. "http://www.ησελίδασας.com/" για εξωτερικό δεσμό.',
 
	'PORTAL_LINKS_EDIT_HEADER'	=> 'Επεξεργασία δεσμού',
	'ACP_LINKS_EXPLAIN'			=> 'Διαχείριση δεσμών που εμφανίζονται στην αρχική σελίδα',
	'ACP_PORTAL_LINKS'			=> 'Διαχείριση δεσμών',
	'ACTION'					=> 'Ενέργεια',
	'ADD_URL'					=> 'Προσθήκη δεσμού',		
	'ADMIN'						=> 'Διαχειριστής',			
	'ALL'						=> 'Όλοι',
	'GUESTS'					=> 'Επισκέπτες',
	'LINKS_ADDED'				=> 'Επιτυχής προσθήκη δεσμού',
	'LINKS_REMOVED'				=> 'Επιτυχής διαγραφή δεσμού',			
	'LINKS_UPDATED'				=> 'Επιτυχής ενημέρωση δεσμού',
	'MOD'						=> 'Συντονιστής',
	'MUST_SELECT_LINKS'			=> 'Επιλογή',
	'NAME_LINK'					=> 'Όνομα δεσμού',
	'NAME_URL_EXPLAIN'			=> 'Όνομα δεσμού που θα εμφανίζεται στο block της αρχικής σελίδας',
	'NONE'						=> 'Να μην εμφανίζετε',
	'REG'						=> 'Εγγεγραμμένοι',
	'RESET_LINKS'				=> 'Διαγραφή',		
	'STAFF'						=> 'Ομάδα',
	'URL_EXPLAIN'				=> 'Δεσμός ανοιχτού παραθύρου',
	'URL_EXPLAIN_2'				=> 'Ο δεσμός μπορεί να δοθεί ως: <br>index.php για εσωτερικό δεσμό, <br>http://google.com για εξωτερικό δεσμό',		
	'URL_IMG'					=> 'Διεύθυνση εικονιδίου που θα εμφανίζεται στα blocks δεσμών',	
	'URL_IMG_2'					=> 'Mini εικονίδιο',		
	'URL_IMG_EXPLAIN'			=> 'Διεύθυνση της εικόνας που θα εμφανίζεται στο block δεσμών',
	'URL_IMG_EXPLAIN2'			=> 'Πατήστε την επιλεγμένη εικόνα',		
	'URL_LINK'					=> 'Διεύθυνση δεσμού',
	'VIEW_BY'					=> 'Ορατά από',
	'VIEW_BY_EXPLAIN'			=> 'Ορίζει ποιος μπορεί να δει τον δεσμό στην αρχική σελίδα',	
	'LINKS_FNAME_INFO'		    => 'Διαθέσιμα mini εικονίδια',	
	'LINKS_FNAME_I_EXPLAIN'		=> 'Προεπισκόπηση των διαθέσιμων mini εικονιδίων από τα οποία μπορείτε να επιλέξετε (τα εικονίδια βρίσκονται στον φάκελο /portal/images/icon_menu/ αν θέλε να προσθέσετε και άλλα). Προτεινόμενο μέγεθος εικονιδίων 16x16px.',	
	'LINKS_FNAME_I_CHOSEN'		=> 'Επιλεγμένη mini εικόνα.',	
		
   ));

?>
