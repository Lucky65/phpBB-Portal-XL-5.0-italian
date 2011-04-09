<?php
/** 
*
* @name acp_portal_xl_newsfeeds.php [Greek-El]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_newsfeeds.php,v 1.5 2008/02/27 17:52:25 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
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

$lang = array_merge($lang, array(   
	'TITLE' 					=> 'Διαχείριση RSS Feed',
	'TITLE_EXPLAIN'				=> 'Εδώ μπορείτε να διαχειριστείτε τα δικά σας RSS Feed\'s στην βάση, δημιουργήσετε / επεξεργαστείτε / διαγράψετε νέα από τα  Feed\'s που θα εμφανίζονται στην σελίδα του portal\'s .',
 
	'PORTAL_FEED_EDIT_HEADER'	=> 'Προσθήκη ή επεξεργασία feed',
	'ACP_MANAGE_FEED'			=> 'Προσθήκη ή επεξεργασία feed',
	'ACP_FEED_EXPLAIN'			=> 'Διαχείριση Feed',
	'ADD_FEED'					=> 'Προσθήκη Feed',
	'DISABLE'					=> '<b>Το Block είναι ενεργοποιημένο</b>',
	'DISABLE_BLOCK'				=> 'Ενεργοποίηση',
	'ENABLE'					=> '<b>Το Block είναι απενεργοποιημένο</b>',
	'ENABLE_BLOCK'				=> 'Απενεργοποίηση',
	'MUST_SELECT_FEED'			=> 'Πρέπει να επιλέξετε κάποιο Feed',
	'FEED'					    => 'Προβολή Ναι/Όχι?',
	'VISIT_FEED'				=> 'Εγγραφή στο feed',
	'FEED_INFO'					=> 'Feed',
	'FEED_EXPLAIN'				=> 'Κείμενο για το Feed σας πηγαίνει εδώ',
	'FEED_ADDED'				=> 'Επιτυχής προσθήκη Feed',
	'FEED_REMOVED'				=> 'Επιτυχής διαγραφή Feed',
	'FEED_UPDATED'				=> 'Επιτυχής επεξεργασία Feed',
	'RESET_FEED' 				=> 'Επαναφορά',
	'FEED_EDIT'					=> 'Επεξεργασία Feed\'s',
	'FEED_EDIT_EXPLAIN'			=> 'Εδώ μπορείτε να προσθέσετε ή να επεξεργαστείτε ένα ήδη υπάρχον Feed. Ο τίτλος και η έκδοση είναι απαραίτητα. Μπορείτε επίσης να προσθέσετε λεπτομέρειες για το από που μπορεί να μεταφορτωθεί το Feed ή που μπορεί να βρεθεί.',
	'FEED_TITLE'				=> 'Τίτλος Feed',
	'FEED_TITLE_EXPLAIN'		=> 'Σύντομος αλλά αντιπροσοπευτικός τίτλος για το Feed.',
	'FEED_SHOW'					=> 'Σύντομο όνομα Feed',
	'FEED_URL'					=> 'Δεσμός Feed',
	'FEED_URL_EXPLAIN'			=> 'Δηλώστε μια σελίδα για αυτό το feed (δεσμός για την -περιγραφή ή -θέμα του feed).',
	'FEED_POSITIONS'			=> 'Θέση',
	'FEED_POSITION'				=> 'Προβολή των feed σε αυτή την θέση?',
	'FEED_POSITION_EXPLAIN'		=> 'Specify on wich side of the RSS block this entry will appear.',
	'LEFT'						=> 'Αριστερά',
	'RIGHT'						=> 'Δεξιά',
	'NOT_SET'					=> 'Δεν έχει ορισθεί',
	'FEED_CACHE_TIME'			=> 'Χρόνος λανθάνουσας μνήμης',
	'FEED_CACHE_TIME_EXPLAIN'	=> 'Μέγιστη ηλικία του αρχείου λανθάνουσας μνήμης για μια ροή δεδομένων πριν από την ενημέρωση, σε δευτερόλεπτα (προεπιλογή είναι 1 ώρα = 60 λεπτά = 3600 δευτερόλεπτα).',
	'CACHE_TIME'				=> 'δευτερόλεπτα',
	'FEED_ITEMS_LIMIT'			=> 'Όριο αντικειμένων',
	'FEED_ITEMS_LIMIT_EXPLAIN'	=> 'Μέγιστος αριθμός αντικειμένων/γραμμών που θα προβάλλονται για ένα μόνο feed.',
	'ITEMS_LIMIT'				=> 'γραμμές',
	'FEED_RANDOM_LIMIT'			=> 'Τυχαίο όριο',
	'FEED_RANDOM_LIMIT_EXPLAIN'	=> 'Όριο feeds που θα εμφανίζονται τυχαία στο μπλοκ.',
	'RANDOM_LIMIT'				=> 'feeds',
	'BLOCK_FEED_SETTINGS'		=> 'Γενικές ρυθμίσεις feeds',

));

?>