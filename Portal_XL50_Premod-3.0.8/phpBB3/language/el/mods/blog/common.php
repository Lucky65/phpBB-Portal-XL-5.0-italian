<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: common.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Μετάφραση Μάνος Πασχαλάκης
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'AVAILABLE_FEEDS'				=> 'Διαθέσιμα Feeds',

	'BLOG'							=> 'Blog',
	'BLOGS'							=> 'Blogs',
	'BLOG_CONTROL_PANEL'			=> 'Πίνακας Ελέγχου του Blog',
	'BLOG_CREDITS'					=> 'Blogs powered by <a href="http://www.lithiumstudios.org/">User Blog Mod</a> &copy; EXreaction',
	'BLOG_DELETED_BY_MSG'			=> 'Η εγγραφή στο blog διεγράφη από %1$s στις %2$s.  Πατήστε <b>%3$sεδώ%4$s</b> για το επαναφέρετε.',
	'BLOG_DESCRIPTION'				=> 'Περιγραφή Blog',
	'BLOG_LINKS'					=> 'Παραθέσεις Blog',
	'BLOG_MCP'						=> 'Πίνακας Ελέγχου Συντονιστή Blog',
	'BLOG_NOT_EXIST'				=> 'Η ανάρτηση του blog που ζητήσατε δεν υπάρχει.',
	'BLOG_SEARCH_BACKEND_NOT_EXIST'	=> 'The Search backend was not found.  Please contact an administrator or moderator.',
	'BLOG_STATS'					=> 'Στατιστικά Blog',
	'BLOG_SUBJECT'					=> 'Θέμα Blog',
	'BLOG_TITLE'					=> 'Τίτλος Blog',

	'CATEGORIES'					=> 'Κατηγορίες',
	'CATEGORY'						=> 'Κατηγορία',
	'CATEGORY_DESCRIPTION'			=> 'Περιγραφή Κατηγορίας',
	'CATEGORY_NAME'					=> 'Όνομα Κατηγορίας',
	'CATEGORY_RULES'				=> 'Κανονισμοί Κατηγορίας',
	'CLICK_INSTALL_BLOG'			=> 'Πατήστε %sεδώ%s να εγκαταστήσετε το User Blog Mod',
	'CNT_BLOGS'						=> '%s blog εγγραφές',
	'CNT_REPLIES'					=> '%s απαντήσεις',
	'CNT_VIEWS'						=> 'Αναγνώστηκε %s φορές',
	'CONTINUE'						=> 'Συνέχεια',
	'CONTINUED'						=> 'Συνεχίζετε',

	'DELETE_BLOG'					=> 'Διαγραφή ανάρτησης του Blog',
	'DELETE_REPLY'					=> 'Διαγραφή σχολίου',

	'EDIT_BLOG'						=> 'Επεξεργασία ανάρτησης Blog',
	'EDIT_REPLY'					=> 'Επεξεργασία απάντησης',

	'FEED'							=> 'Feed',
	'FOE_PERMISSIONS'				=> 'Δικαιώματα Εχθρών',
	'FRIEND_PERMISSIONS'			=> 'Δικαιώματα Φίλων',

	'GUEST_PERMISSIONS'				=> 'Δικαιώματα Επισκεπτών',

	'LIMIT'							=> 'Όριο',

	'MUST_BE_FOUNDER'				=> 'Πρέπει να είστε ιδρυτής για να έχετε πρόσβαση σε αυτή τη σελίδα.',
	'MY_BLOG'						=> 'Το Blog μου',

	'NEW_BLOG'						=> 'Νέα ανάρτηση Blog',
	'NO_BLOGS'						=> 'Δεν υπάρχουν αναρτήσεις blog.',
	'NO_BLOGS_USER'					=> 'Ο χρήστης δεν έχει αναγράψει κανένα θέμα στο blog.',
	'NO_BLOGS_USER_SORT_DAYS'		=> 'Ο χρήστης δεν έχει αναρτήσει κανένα θέμα στο παρελθόν %s',
	'NO_CATEGORIES'					=> 'Δεν υπάρχουν κατηγορίες',
	'NO_CATEGORY'					=> 'Η επιλεγμένη κατηγορία δεν υπάρχει.',
	'NO_PERMISSIONS_READ'			=> 'Συγνώμη, αλλά δεν σας επιτρέπετε να διαβάσετε αυτό το blog.',
	'NO_REPLIES'					=> 'Δεν υπάρχουν σχόλια.',

	'ONE_BLOG'						=> '1 blog',
	'ONE_REPLY'						=> '1 σχόλιο',
	'ONE_VIEW'						=> 'Αναγνώστηκε 1 φορά',

	'PERMANENT_LINK'				=> 'Μόνιμο Link',
	'PLUGIN_TEMPLATE_MISSING'		=> 'Η προσθήκη από το template λείπει.',
	'POPULAR_BLOGS'					=> 'Δημοφιλείς αναρτήσεις στα Blog',
	'POST_A_NEW_BLOG'				=> 'Αναρτήστε ένα θέμα στο Blog',
	'POST_A_NEW_REPLY'				=> 'Αναρτήστε ένα σχόλιο',

	'RANDOM_BLOGS'					=> 'Τυχαίες εμφανίσεις Blog',
	'RECENT_BLOGS'					=> 'Πρόσφατες αναρτήσεις Blog',
	'REGISTERED_PERMISSIONS'		=> 'Δικαιώματα μελών',
	'BLOG_REPLIES'						=> 'Σχόλια',
	'REPLY'							=> 'Σχόλιο',
	'REPLY_COUNT'					=> 'Μετρητής σχολίων',
	'REPLY_DELETED_BY_MSG'			=> 'Αυτό το σχόλιο έχει διαγραφεί από %1$s στις %2$s.  Πατήστε <b>%3$sεδώ%4$s</b> για να επαναφέρετε αυτό το σχόλιο.',
	'REPLY_NOT_EXIST'				=> 'Η απάντηση δεν υπάρχει.',
	'REPORT_BLOG'					=> 'Αναφέρετε την ανάρτηση του Blog',
	'REPORT_REPLY'					=> 'Αναφέρετε το σχόλιο',
	'RETURN_BLOG_MAIN'				=> '%1$sΕπιστροφή στο %2$s\'s Blog%3$s',
	'RETURN_BLOG_OWN'				=> '%sΕπιστροφή στο δικό σας blog%s',
	'RETURN_MAIN'					=> 'Πατήστε %sεδώ%s για να επιστρέψετε στην κεντρική σελίδα του Blog',

	'SEARCH_BLOGS'					=> 'Αναζήτηση στα Blogs',
	'SUBSCRIBE'						=> 'Προσυπογράψτε',
	'SUBSCRIBE_BLOG'				=> 'Προσυπογράψτε σε αυτό το Blog',
	'SUBSCRIBE_USER'				=> 'Προσυπογράψτε σε αυτό το Blog του χρήστη/ων',
	'SUBSCRIPTION'					=> 'Συνδρομή',
	'SUBSCRIPTION_EXPLAIN'			=> 'Επιλέξτε πως θα θέλατε να ενημερώνεστε στο μέλλον για απαντήσεις σε αυτό το blog.',
	'SUBSCRIPTION_EXPLAIN_REPLY'	=> 'Αν είστε ήδη συνδρομητής σε αυτό το blog, οι τωρινές σας συνδρομές εμφανίζονται (και ότι επιλέξετε θα είναι η νέα σας συνδρομή).',

	'TOTAL_BLOG_ENTRIES'			=> 'Συνολικές αναρτήσεις Blog <strong>%s</strong>',

	'UNSUBSCRIBE'					=> 'Διακοπή συνδρομής',
	'UNSUBSCRIBE_BLOG'				=> 'Διακόψτε την συνδρομή σας από αυτό το Blog',
	'UNSUBSCRIBE_USER'				=> 'Διακοπή συνδρομής από αυτόν το χρήστη',
	'USERNAMES_BLOGS'				=> '%s\'s Blog',
	'USERNAMES_DELETED_BLOGS'		=> '%s\'s Διεγραμμένες Αναρτήσεις',
	'USER_BLOGS'					=> 'Blogs Χρήστη',
	'USER_BLOG_MOD_DISABLED'		=> 'Το User Blog Mod έχει απενεργοποιηθεί.',
	'USER_BLOG_RATINGS_DISABLED'	=> 'Το σύστημα βαθμολόγησης έχει απενεργοποιηθεί.',

	'VIEW_BLOG'						=> 'Δείτε το Blog',
	'VIEW_REPLY'					=> 'Δείτε την απάντηση',

	'WARNING'						=> 'Προειδοποίηση',
));

?>