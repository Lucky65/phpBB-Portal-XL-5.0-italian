<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_common.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
* Ελληνική μετάφραση από diastasi (thraki.info) & phpbbgr.com
*/
/**
*
* gym_common [Greek]
*
*/
/**
* DO NOT CHANGE
*/
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
	'RSS_AUTH_SOME_USER' => '<b><u>Προσοχή :</u></b>Αυτό το στοιχείο προσωποποιήθηκε σύμφωνα με εξουσιοδότηση του <b>%s</b>.<br/>Κάποια από τα στοιχεία δεν θα είναι ορατά εάν δε συνδεθείτε.',
	'RSS_AUTH_THIS_USER' => '<b><u>Προσοχή :</u></b>Αυτό το στοιχείο προσωποποιήθηκε σύμφωνα με εξουσιοδότηση του <b>%s</b>.<br/>Δεν θα είναι ορατό εαν δε συνδεθείτε.',
	'RSS_AUTH_SOME' => '<b><u>Προσοχή :</u></b>Αυτό το στοιχείο δεν είναι δημόσιο.<br/>Κάποια από τα στοιχεία δε θα είναι ορατά αν δε συνδετείτε.',
	'RSS_AUTH_THIS' => '<b><u>Προσοχή :</u></b>Αυτό το στοιχείο δεν είναι δημόσιο.<br/>Δεν θα είναι ορατό εαν δε συνδεθείτε.',
	'RSS_CHAN_LIST_TITLE' => 'Λίστα Καναλιού',
	'RSS_CHAN_LIST_DESC' => 'Αυτό το κανάλι περιέχει τις διαθέσιμες τροφοδοσίες RSS.',
	'RSS_CHAN_LIST_DESC_MODULE' => 'Αυτή η λίστα καναλιού περιέχει τις διαθέσιμες τροφοδοσίες RSS για : %s.',
	'RSS_ANNOUCES_DESC' => 'Αυτή η τροφοδοσία περιέχει όλες τις ανακοινώσεις του : %s',
	'RSS_ANNOUNCES_TITLE' => 'Ανακοινώσεις από : %s',
	'GYM_LAST_POST_BY' => 'Τελευταία δημοσίευση από ',
	'GYM_FIRST_POST_BY' => 'Δημοσίευση από ',
	'GYM_LINK' => 'Δεσμός',
	'GYM_SOURCE' => 'Πηγή',
	'GYM_RSS_SOURCE' => 'Πηγή',
	'RSS_MORE' => 'περισσότερα',
	'RSS_CHANNELS' => 'Κανάλια',
	'RSS_CONTENT' => 'Σύνοψη',
	'RSS_SHORT' => 'Σύντομη λίστα',
	'RSS_LONG' => 'Εκτενής λίστα',
	'RSS_NEWS' => 'Νέα',
	'RSS_NEWS_DESC' => 'Τελευταία νέα από',
	'RSS_REPORTED_UNAPPROVED' => 'Το στοιχείο αυτό είναι σε αναμονή για έγκριση.',

	'GYM_HOME' => 'Αρχική σελίδα',
	'GYM_FORUM_INDEX' => 'Ευρετήριο Δ.Συζήτησης',
	'GYM_LASTMOD_DATE' => 'Ημερομηνία τελευταίας τροποποίησης',
	'GYM_SEO' => 'Βελτιστοποίηση Μηχανής Αναζήτησης',
	'GYM_MINUTES' => 'λεπτό/λεπτά',
	'GYM_SQLEXPLAIN' => 'Αναφορά εξήγησης SQL',
	'GYM_SQLEXPLAIN_MSG' => 'Συνδεμένος ως Διαχειριστής, μπορείτε να ελέγξετε το %s για αυτή τη σελίδα.',
	'GYM_BOOKMARK_THIS' => 'Βάλτε στα αγαπημένα',
	// Errors
	'GYM_ERROR_404' => 'Η σελίδα δεν υπάρχει ή δεν είναι ενεργοποιημένη',
	'GYM_ERROR_404_EXPLAIN' => 'Ο σέρβερ δεν βρήκε καμία σελίδα που αναφέρεται στον δεσμό που δώσατε.',
	'GYM_ERROR_401' => 'Δεν επιτρέπεται να δείτε αυτή τη σελίδα.',
	'GYM_ERROR_401_EXPLAIN' => 'Η σελίδα είναι προσβάσιμη μόνο σε συνδεμένους χρήστες με την κατάλληλη εξουσιοδότηση.',
	'GYM_LOGIN' => 'Δεν επιτρέπεται να δείτε αυτή τη σελίδα.',
	'GYM_LOGIN_EXPLAIN' => 'Πρέπει να συνδεθείτε για να δείτε αυτή τη σελίδα.',
	'GYM_TOO_FEW_ITEMS' => 'Η σελίδα δεν υπάρχει',
	'GYM_TOO_FEW_ITEMS_EXPLAIN' => 'Η σελίδα δεν έχει αρκετά στοιχεία για να προβληθεί.',
	'GYM_TOO_FEW_ITEMS_EXPLAIN_ADMIN' => 'Η πηγή της σελίδας είναι ή άδεια ή δεν περιλαμβάνει αρκετά στοιχεία (λιγότερα από τη ρύθμιση κατωφλίου στον ΠΕΔ) για να εμφανιστεί.<br/>Μία κεφαλίδα 404 Not Found στέλνεται για να ενημερώσει τις μηχανές αναζήτησης να απομονώσουν αυτόν τον δεσμό.',

	'GOOGLE_SITEMAP' => 'Sitemap',
	'GOOGLE_SITEMAP_OF' => 'Sitemap του',
	'GOOGLE_MAP_OF' => 'Sitemap του %1$s',
	'GOOGLE_SITEMAPINDEX' => 'Αρχική Sitemap',
	'GOOGLE_NUMBER_OF_SITEMAP' => 'Αριθμός Sitemaps σε αυτό το Google SitemapIndex',
	'GOOGLE_NUMBER_OF_URL' => 'Αριθμός Δεσμών URL σε αυτό το Google Sitemap',
	'GOOGLE_SITEMAP_URL' => 'Δεσμός URL Sitemap',
	'GOOGLE_CHANGEFREQ' => 'Αλλαγή συχνότητας',
	'GOOGLE_PRIORITY' => 'Προτεραιότητα',

	'RSS_FEED' => 'Τροφοδοσία RSS',
	'RSS_FEED_OF' => 'Ανατροφοδότηση RSS του %1$s',
	'RSS_2_LINK' => 'Δεσμός τροφοδοσίας RSS 2.0',
	'RSS_UPDATE' => 'Ενημέρωση',
	'RSS_LAST_UPDATE' => 'Τελευταία ενημέρωση',
	'RSS_SUBSCRIBE_POD' => '<h2>Προσθέστε στους σελιδοδείκτες σας αυτή την τροφοδοσία τώρα!</h2>Με τις προτιμόμενες υπηρεσίες.',
	'RSS_SUBSCRIBE' => 'Για χειροκινητη συνδρομή τροφοδοσίας RSS, ακολουθήστε τον παρακάτω δεσμό :',
	'RSS_ITEM_LISTED' => 'Ενα στοιχείο στη λίστα.',
	'RSS_ITEMS_LISTED' => 'στοιχεία στη λίστα.',
	'RSS_VALID' => 'Εγκυρη τροφοδοσία RSS 2.0',

	// Old URL handling
	'RSS_1XREDIR' => 'Αυτή η τροφοδοσία RSS μετακινήθηκε',
	'RSS_1XREDIR_MSG' => 'Αυτή η τροφοδοσία RSS μετακινήθηκε, θα την βρείτε χρησιμοποιώντας αυτόν το δεσμό',
	// HTML sitemaps
	'HTML_MAP' => 'Περιεχόμενα',
	'HTML_MAP_OF' => 'Περιεχόμενα του %1$s',
	'HTML_MAP_NONE' => 'Κανένα Περιεχόμενο',
	'HTML_NO_ITEMS' => 'Κανένα στοιχείο',
	'HTML_NEWS' => 'Νέα',
	'HTML_NEWS_OF' => 'Νέα του %1$s',
	'HTML_NEWS_NONE' => 'Κανένα νέο',
	'HTML_PAGE' => 'Σελίδα',
	'HTML_MORE' => 'Περισσότερα',
	// Forum
	'HTML_FORUM_MAP' => 'Περιεχόμενα Δ.Συζήτησης',
	'HTML_FORUM_NEWS' => 'Νέα Δ.Συζήτησης',
	'HTML_FORUM_GLOBAL_MAP' => 'Λίστα Γενικών ανακοινώσεων',
	'HTML_FORUM_GLOBAL_NEWS' => 'Γενικές ανακοινώσεις',
	'HTML_FORUM_ANNOUNCE_MAP' => 'Λίστα ανακοινώσεων',
	'HTML_FORUM_ANNOUNCE_NEWS' => 'Ανακοινώσεις',
	'HTML_FORUM_STICKY_MAP' => 'Λίστα σημειώσεων',
	'HTML_FORUM_STICKY_NEWS' => 'Σημειώσεις',
	'HTML_LASTX_TOPICS_TITLE' => 'Τελευταία %1$s ενεργά θέματα',
));
?>
