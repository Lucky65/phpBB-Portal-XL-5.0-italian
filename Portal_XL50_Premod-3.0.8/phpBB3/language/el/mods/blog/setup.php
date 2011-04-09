<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: setup.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
	'ALREADY_INSTALLED'				=> 'Έχετε εγκαταστήσει το User Blog Mod.<br /><br />Πατήστε %sεδώ%s για να επιστρέψετε στην κύρια σελίδα του blog.',
	'ALREADY_UPDATED'				=> 'Έχετε εγκατεστημένη την τελευταία έκδοση του User Blog Mod.<br /><br />Πατήστε %sεδώ%s για να επιστρέψετε στην κύρια σελίδα του blog.',

	'BACKUP_NOTICE'					=> 'Βεβαιωθείτε ότι αντιγράψατε ΌΛΑ τα δεδομένα από ΑΜΦΟΤΕΡΑ φόρα ΠΡΙΝ επιχειρήσετε την αναβάθμιση.  Εάν οτιδήποτε πάει λάθος κατά την διαδικασία αναβάθμισης και δεν μπορείτε να επαναφέρετε τα δεδομένα μπορεί όλα να χαθούν όλα.',

	'CLEANUP'						=> 'Καθαρισμός',
	'CLEANUP_COMPLETE'				=> 'Οι πίνακες καθαρίστηκαν με επιτυχία.',
	'CONVERTED_BLOG_IDS_MISSING'	=> 'Τα id των blog που μετατρέπονται δεν βρέθηκαν στην cache.  Παρακαλώ κάνετε επαναφορά αντιγράφου των δεδομένων στην βάση και δοκιμάστε πάλι την αναβάθμιση.',
	'CONVERT_COMPLETE'				=> 'Η διαδικασία μετατροπής ολοκληρώθηκε με επιτυχία.',
	'CONVERT_FOES'					=> 'Μετατροπή εχθρών',
	'CONVERT_FOES_EXPLAIN'			=> 'Μετατρέπει τα μέλη weblog_blocked σε εχθρούς.',
	'CONVERT_FRIENDS'				=> 'Μετατροπή φίλων',
	'CONVERT_FRIENDS_EXPLAIN'		=> 'Μετατρέπει τα μέλη σε weblog_friends σε φίλους.',

	'DB_TABLE_NOT_EXIST'			=> 'Ο πίνακας %s δεν υπάρχει στην επιλεγμένη βάση δεδομένων.',

	'FINAL'							=> 'Τέλος',

	'INDEX_COMPLETE'				=> 'Έγινε ευρετηριασμός των blogs των απαντήσεων για την μηχανή αναζήτησης.',
	'INSTALL_BLOG_DB'				=> 'Εγκατάσταση User Blog Mod',
	'INSTALL_BLOG_DB_CONFIRM'		=> 'Θέλετε σίγουρα να εγκαταστήσετε την ενότητα βάσης δεδομένων για αυτό το mod;',
	'INSTALL_BLOG_DB_FAIL'			=> 'Η εγκατάσταση του User Blog Mod απέτυχε.<br />Παρακαλώ αναφέρετε τα παρακάτω σφάλματα στην EXreaction:<br />',
	'INSTALL_BLOG_DB_SUCCESS'		=> 'Έχετε εγκαταστήσει με επιτυχία την ενότητα βάσης δεδομένων για το User Blog mod.<br /><br />Πατήστε %sεδώ%s για να επιστρέψετε στην κύρια σελίδα του blog.',

	'LIMIT_EXPLAIN'					=> 'Αριθμός των θεμάτων που θα γίνουν σε κάθε φορά.  Εάν ορίσετε σε πολύ υψηλό μπορεί να ξανακάνετε αυτήν την ολική αναβάθμιση, αλλά, αλλά όσο μικρότερο είναι ορισμένο αυτό, τόσο περισσότερο θα διαρκέσει η αναβάθμιση.',
	'LIMIT_INCORRECT'				=> 'Θα πρέπει να δώσετε ένα όριο το λιγότερο 1.  Συνιστάται να χρησιμοποιείτε 100 γι αυτό, αλλά πιθανόν όχι περισσότερο από 1000, εξαρτάται από τις ρυθμίσεις του PHP.',

	'NEXT_PART'						=> 'Προχωρήστε στο επόμενο βήμα',
	'NOT_INSTALLED'					=> 'Πρέπει να έχετε εγκατεστημένο το User Blog Mod πριν χρησιμοποιήσετε το σενάριο εντολών αναβάθμισης.',
	'NO_STAGE'						=> 'Δεν έχετε δώσει κάποιο στάδιο για εργασία.',

	'PRE_UPGRADE_COMPLETE'			=> 'Όλα τα βήματα προ-μετατροπής ολοκληρώθηκαν με επιτυχία. Τώρα μπορείτε να ξεκινήσετε την παρούσα διαδικασία μετατροπής. Παρακαλώ σημειώστε ότι μπορεί να χρειαστεί να το κάνετε χειροκίνητα και να ρυθμίσετε διάφορα πράγματα μετά την αυτόματη μετατροπή, ιδίως έλεγχο των προσδιορισμένων δικαιωμάτων.',

	'REINDEX'						=> 'Επανασυγχρονισμός ευρετηρίου',
	'RESYNC'						=> 'Επανασυγχρονισμός',
	'RESYNC_COMPLETE'				=> 'Το User Blog Mod επανασυγχρονίστηκε.',
	'RETURN_LAST_STEP'				=> 'Πατήστε εδώ για να επιστρέψετε στο προηγούμενο βήμα.',

	'SCHEMA_NOT_EXIST'				=> 'Το αρχείο εγκατάστασης schema της βάσης δεδομένων δεν βρέθηκε.  Παρακαλώ μεταφορτώστε ένα νέο αντίγραφο αυτού MOD και επαναφορτώστε όλα τα απαραίτητα αρχεία του.  Εάν αυτό δεν διορθώσει το πρόβλημα, επικοινωνήστε με EXreaction.',
	'SEARCH_BREAK_CONTINUE_NOTICE'	=> 'Ενότητα %1$s από %2$s, βήμα %3$s από %4$s ολοκληρώθηκε, αλλά υπάρχουν και άλλες ενότητες και/ή βήματα που πρέπει να ολοκληρωθούν πριν ολοκληρωθούν όλα.<br />Πατήστε συνέχεια παρακάτω εάν δεν μεταφερθείτε αυτόματα στην επόμενη σελίδα.',
	'SUCCESS'						=> 'Επιτυχία',
	'SUCCESSFULLY_UPDATED'			=> 'Το User Blog Mod αναβαθμίστηκε σε %1$s.<br /><br />Πατήστε %2$sεδώ%3$s  για να επιστρέψετε στην κύρια σελίδα του blog.',

	'TRUNCATE_TABLES'				=> 'Διαγραφή των πινάκων που υπάρχουν στην βάση',
	'TRUNCATE_TABLES_EXPLAIN'		=> 'Αυτό θα διαγράψει όλα τα δεδομένα για το User Blog Mod που υπάρχουν στους πίνακες στην βάση δεδομένων.  Εάν επιλέξετε όχι τα νέα δεδομένα θα προστεθούν επίσης στα blog και απαντήσεις που υπάρχουν ήδη.',

	'UNINSTALL_BLOG_DB'				=> 'Απεγκατάσταση User Blog Mod',
	'UNINSTALL_BLOG_DB_CONFIRM'		=> 'Θέλετε σίγουρα να διαγράψετε τα δεδομένα του User Blog Mod;<br /><br /><strong>Εάν το κάνετε αυτό θα ΌΛΑ τα δεδομένα του User Blog Mod θα χαθούν.</strong>',
	'UNINSTALL_BLOG_DB_SUCCESS'		=> 'Τα δεδομένα του User Blog Mod διαγράφηκαν από την δάση δεδομένων.  Για να ολοκληρωθεί η διαγραφή του User Blog Mod θα πρέπει να να αναιρέσετε όλες τις αλλαγές και να διαγράψετε κάθε αρχείο που προσθέσετε κατά την εγκατάσταση.',
	'UPDATE_INSTRUCTIONS'			=> 'Αναβάθμιση',
	'UPDATE_INSTRUCTIONS_CONFIRM'	=> 'Βεβαιωθείτε πρώτα ότι διαβάσατε τις οδηγίες αναβάθμισης στην ενότητα του ιστορικού του στο κύριο έγγραφο εγκατάστασης του MOD  <b>πριν</b> το κάνετε αυτό.<br /><br />Είστε έτοιμος για την αναβάθμιση του User Blog Mod;',
	'UPGRADE_BLOGS'					=> 'Αναβάθμιση Blogs',
	'UPGRADE_BREAK_CONTINUE_NOTICE'	=> 'Στάδιο %1$s, ενότητα %2$s από %3$s, βήμα %4$s από %5$s ολοκληρώθηκε, αλλά υπάρχουν και άλλες ενότητες και/ή βήματα των οποίων η ολοκλήρωση απαιτείται πριν ολοκληρωθεί η μετατροπή σε αυτό το στάδιο.<br />Πατήστε συνέχεια παρακάτω εάν δεν μεταφερθείτε αυτόματα στην επόμενη σελίδα.',
	'UPGRADE_COMPLETE'				=> 'Η διαδικασία αναβάθμισης ολοκληρώθηκε με επιτυχία!<br />Παρακαλώ βεβαιωθείτε ότι πήρατε αντίγραφα της ολοκληρωμένης μετατροπής και ελέγξτε τις ρυθμίσεις και τα δεδομένα που μετατράπηκαν για να να βεβαιωθείτε ότι όλα είναι σωστά.',
	'UPGRADE_LIST'					=> 'Αναβάθμιση λίστας',
	'UPGRADE_PHP'					=> 'Χρησιμοποιείτε μια μή συμβατή έκδοση PHP. Πρέπει να έχετε την έκδοση PHP 5.1.0 ή νεώτερη για να χρησιμοποιήσετε αυτό το MOD.',
	'UPGRADE_REPLIES'				=> 'Αναβάθμιση απαντήσεων',

	'WELCOME_MESSAGE'				=> 'Καλώς ήρθατε στο User Blog Mod!

Ανακοίνωση έκδοσης:
http://lithiumstudios.org/forum/viewtopic.php?f=41&t=433

Υποστήριξη από τον δημιουργό θα παρέχεται μόνον σε lithiumstudios.org.

Εάν έχετε κάποιο σχόλιο ή χρειάζεστε υποστήριξη γράψτε σε αυτό το φόρουμ:
http://www.lithiumstudios.org/forum/viewforum.php?f=57

Παρακαλώ ελέγξτε το φόρουμ User Blog Mod για πληροφορίες πριν ρωτήσετε για υποστήριξη.
http://www.lithiumstudios.org/forum/viewforum.php?f=41',
	'WELCOME_SUBJECT'				=> 'Καλώς ήρθατε στο User Blog Mod!',
));

?>