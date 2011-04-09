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
	'TITLE' 					=> 'Διαχείριση RSS Feed',
	'TITLE_EXPLAIN'				=> 'From this form you can maintain your RSS Feed\'s Database, create/edit/delete rivers of news Feed\'s from here to show on portal\'s page.',
 
	'PORTAL_FEED_EDIT_HEADER'	=> 'Προσθήκη ή επεξεργασία feed',
	'ACP_MANAGE_FEED'			=> 'Προσθήκη ή επεξεργασία feed',
	'ACP_FEED_EXPLAIN'			=> 'Διαχείριση Feed',
	'ADD_FEED'					=> 'Προσθήκη Feed',
	'DISABLE'					=> '<b>Το Block είναι ενεργοποιημένο</b>',
	'DISABLE_BLOCK'				=> 'Ενεργοποίηση',
	'ENABLE'					=> '<b>Το Block είναι απενεργοποιημένο</b>',
	'ENABLE_BLOCK'				=> 'Απενεργοποίηση',
	'MUST_SELECT_FEED'			=> 'Πρέπει να επιλέξετε κάποιο Feed',
	'FEED_SHOW'					=> 'Show Yes/No?',
	'VISIT_FEED'				=> 'Εγγραφή στο feed',
	'FEED_INFO'					=> 'Feed',
	'FEED_EXPLAIN'				=> 'Κειμενο για το Feed σας πηγαίνει εδώ',
	'FEED_ADDED'				=> 'Επιτυχής προσθήκη Feed',
	'FEED_REMOVED'				=> 'Επιτυχής διαγραφή Feed',
	'FEED_UPDATED'				=> 'Επιτυχής επεξεργασία Feed',
	'RESET_FEED' 				=> 'Επαναφορά',
	'FEED_EDIT'					=> 'Επεξεργασία Feed\'s',
	'FEED_EDIT_EXPLAIN'			=> 'Εδώ μπορείτε να προσθέσετε ή να επεξεργαστείτε ένα ήδη υπάρχον Feed. Ο τίτλος και η έκδοση είναι απαραίτητα. Μπορείτε επίσης να προσθέσετε λεπτομέρειες για το από που μπορεί να μεταφορτωθεί το Feed ή που μπορεί να βρεθεί.',
	'FEED_TITLE'				=> 'Τίτλος Feed',
	'FEED_TITLE_EXPLAIN'		=> 'Σύντομος αλλά αντιπροσοπευτικός τίτλος για το Feed.',
	'FEED_NAME'					=> 'Σύντομο όνομα Feed',
	'FEED_URL'					=> 'Δεσμός Feed',
	'FEED_URL_EXPLAIN'			=> 'Δηλώστε μια σελίδα για αυτό το feed (δεσμός για την -περιγραφή ή -θέμα του feed).',
	'FEED_POSITIONS'			=> 'Position',
	'FEED_POSITION'				=> 'Show this feed on which position?',
	'FEED_POSITION_EXPLAIN'		=> 'Specify on wich side of the RSS block this entry will appear.',
	'LEFT'						=> 'Left',
	'RIGHT'						=> 'Right',
	'NOT_SET'					=> 'Not set',
	'FEED_CACHE_TIME'			=> 'Cache time',
	'FEED_CACHE_TIME_EXPLAIN'	=> 'Maximum age of the cache file for a feed before it is updated, in seconds (default is 1 hour = 60 minutes = 3600 seconds).',
	'CACHE_TIME'				=> 'seconds',
	'FEED_ITEMS_LIMIT'			=> 'Items limit',
	'FEED_ITEMS_LIMIT_EXPLAIN'	=> 'Maximum items/rows to show for a single feed.',
	'ITEMS_LIMIT'				=> 'rows',
	'FEED_RANDOM_LIMIT'			=> 'Random limit',
	'FEED_RANDOM_LIMIT_EXPLAIN'	=> 'Maximum feeds to randomize in the block.',
	'RANDOM_LIMIT'				=> 'feeds',
	'BLOCK_FEED_SETTINGS'		=> 'General feeds settings',

));

?>
