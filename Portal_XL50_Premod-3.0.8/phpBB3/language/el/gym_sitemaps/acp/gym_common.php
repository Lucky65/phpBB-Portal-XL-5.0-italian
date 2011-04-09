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
	// Main
	'ALL' => 'Ολα',
	'MAIN' => 'GYM Sitemaps',
	'MAIN_MAIN_RESET' => 'Γενικές επιλογές GYM sitemaps',
	'MAIN_MAIN_RESET_EXPLAIN' => 'Επαναφέρει όλες τις κύριες ρυθμίσεις GYM στις αρχικές τιμές.',
	// Linking setup
	'GYM_LINKS_ACTIVATION' => 'Δεσμοί Δ.Συζητήσεων',
	'GYM_LINKS_MAIN' => 'Κυρίως δεσμοί',
	'GYM_LINKS_MAIN_EXPLAIN' => 'Προβολή ή όχι δεσμών για την κυρίως σελίδα του GYM στο footer : Αρχική Sitemap, κυρίως ανατροδοτήσεις RSS και λίστα σελίδων ανατροφοδοτήσεων, κυρίως χάρτης και σελίδα νέων.',
	'GYM_LINKS_INDEX' => 'Δεσμοί στο Ευρετήριο',
	'GYM_LINKS_INDEX_EXPLAIN' => 'Προβολή ή όχι δεσμών για τις σελίδες GYM για κάθε Δ.Συζήτηση στο Ευρετ. Δ.Συζήτησης. Οι δεσμοί αυτοί μπαίνουν κάτω από τη περιγραφή της Δ.Συζήτησης.',
	'GYM_LINKS_CAT' => 'Δεσμοί στη σελίδα Δ.Συζήτησης',
	'GYM_LINKS_CAT_EXPLAIN' => 'Προβολή ή όχι δεσμών για τις σελίδες GYM στη σελίδα Δ.Συζήτησης. Αυτοί οι δεσμοί μπαίνουν κάτω από τον τίτλο της Δ.Συζήτησης.',
	// Google sitemaps
	'GOOGLE' => 'Google',
	// Reset settings
	'GOOGLE_MAIN_RESET' => 'Γενικές ρυθμίσεις Google Sitemap',
	'GOOGLE_MAIN_RESET_EXPLAIN' => 'Επαναφέρει όλες τις κύριες ρυθμίσεις Google Sitemap στις αρχικές τιμές.',
	// RSS feeds
	'RSS' => 'RSS',
	'RSS_ALTERNATE' => 'Εναλλακτικοί δεσμοί RSS',
	'RSS_ALTERNATE_EXPLAIN' => 'Προβολή ή όχι εναλλακτικών δεσμών RSS στη μπάρα πλοήγησης του browser',
	'RSS_LINKING_TYPE' => 'Τύπος δεσμού RSS',
	'RSS_LINKING_TYPE_EXPLAIN' => 'Ο τύπος της τροφοδότησης για προβολή στις σελίδες του φόρουμ.<br/>Μπορεί να οριστεί σε :<br/><b>&bull; Τροφοδοτήσεις Νέων με ή χωρίς περιεχόμενο</b><br/>Τα στοιχεία να προβάλλονται ανα ημερομηνία δημιουργίας, με ή χωρίς περιεχόμενο,<br/><b>&bull; Απλές τροφοδοτήσεις με ή χωρίς περιεχόμενο</b><br/>Τα στοιχεία να προβάλλονται κατά ημέρα τελευταίας ενέργειας, με ή χωρίς περιεχόμενο.<br/>Αυτό επηρεάζει μόνο τον προβαλλόμενο δεσμό, όχι τις τροφοδοτήσεις που είναι διαθέσιμες.',
	'RSS_LINKING_NEWS' => 'Τροφοδοτήσεις νέων',
	'RSS_LINKING_NEWS_DIGEST' => 'Τροφοδοτήσεις Νέων με περιεχόμενο',
	'RSS_LINKING_REGULAR' => 'Κανονικές τροφοδοτήσεις',
	'RSS_LINKING_REGULAR_DIGEST' => 'Κανονικές τροφοδοτήσεις με περιεχόμενο',
	// Reset settings
	'RSS_MAIN_RESET' => 'Γενικές ρυθμίσεις RSS',
	'RSS_MAIN_RESET_EXPLAIN' => 'Επαναφέρει όλες τις κύριες ρυθμίσεις RSS στις αρχικές τιμές.',
	'YAHOO' => 'Yahoo',
	// HTML
	'HTML_MAIN_RESET' => 'Γενικές επιλογές HTML',
	'HTML_MAIN_RESET_EXPLAIN' => 'Επαναφορά όλων των περιεχομένων HTML και κύριων επιλογών ΝΕΩΝ στις αρχικές τιμές.',
	'HTML' => 'Html',

	// GYM authorisation array
	'GYM_AUTH_ADMIN' => 'Διαχειριστής',
	'GYM_AUTH_GLOBALMOD' => 'Καθολικοί συντονιστές',
	'GYM_AUTH_REG' => 'Συνδεμένοι',
	'GYM_AUTH_GUEST' => 'Επισκέπτες',
	'GYM_AUTH_ALL' => 'Ολοι',
	'GYM_AUTH_NONE' => 'Κανένας',
	// XSLT
	'GYM_STYLE' => 'Στυλ',

	// Cache status
	'SEO_CACHE_FILE_TITLE' => 'Κατάσταση Λανθάνουσας μνήμης',
	'SEO_CACHE_STATUS' => 'Αρχείο Λανθάνουσας μνήμης ρυθμισμένο σε: <b>%s</b>',
	'SEO_CACHE_FOUND' => 'Βρέθηκε Αρχείο Λανθάνουσας μνήμης.',
	'SEO_CACHE_NOT_FOUND' => 'Δεν βρέθηκε Αρχείο Λανθάνουσας μνήμης.',
	'SEO_CACHE_WRITABLE' => 'Το Αρχείο Λανθάνουσας μνήμης είναι εγγράψιμο.',
	'SEO_CACHE_UNWRITABLE' => 'Το Αρχείο Λανθάνουσας μνήμης <b>ΔΕΝ</b> είναι εγγράψιμο.  Παρακαλώ αλλάξτε το CHMOD του φακέλου cache σε 0777.',
	
	// Mod Rewrite type
	'ACP_SEO_SIMPLE' => 'Απλό',
	'ACP_SEO_MIXED' => 'Μεσαίο',
	'ACP_SEO_ADVANCED' => 'Προχωρημένο',
	'ACP_PHPBB_SEO_VERSION' => 'Εκδοση',
	'ACP_SEO_SUPPORT_FORUM' => 'Φορουμ υποστήριξης',
	'ACP_SEO_RELEASE_THREAD' => 'Θέμα διαθεσιμότητας GYM',
	'ACP_SEO_REGISTER_TITLE' => 'Καταχώριση',
	'ACP_SEO_REGISTER_UPDATE' => 'ειδοποιήθηκε για αναβάθμιση',
	'ACP_SEO_REGISTER_MSG' => 'Ισως θέλετε να %1$s για να %2$s',

	// Maintenance
	'GYM_MAINTENANCE' => 'Συντήρηση',
	'GYM_MODULE_MAINTENANCE' => 'Συντήρηση %1$',
	'GYM_MODULE_MAINTENANCE_EXPLAIN' => 'Εδώ μπορείτε να διεχειριστείτε τα αρχεία λανθάνουσας μνήμης που χρησιμοποιούνται από τις μονάδες %1$s.<br/> Υπάρχουν δύο τύποι: Ο ένας χρησιμοποιείται να αποθηκεύσει τα δεδομένα που εξάγονται στις δημόσιες σελίδες, και ο άλλος χρησιμοποιείται να παράγει το ACP κάθε μονάδας. Μπορείτε να διαγράψετε τη λανθάνουσα μνήμη του ACP της μονάδας εαν τσεκάρετε την επιλογή διαγραφής λανθάνουσας μνήμης. Εξορισμού εππιλογή είναι να καθαριστεί το περιεχόμενο της λανθάνουσας μνήμης των επιλεγμένων μονάδων.',
	'GYM_CLEAR_CACHE' => 'Εκκαθάριση Λανθάνουσας μνήμης %1$s',
	'GYM_CLEAR_CACHE_EXPLAIN' => 'Εδώ μπορείτε να διαγράψετε τα αρχεία λανθάνουσας μνήμης για την μονάδα %1$s. Αυτά τα αρχεία περιλαμβάνουν δεδομένα που χρησιμοποιούνται για την κατασκευή της εξόδου %1$s.<br/>Μπορεί να είναι χρήσιμο εαν θέλετε να εξαναγκάσετε την ενημέρωση της λανθάνουσας μνήμης.',
	'GYM_CLEAR_ACP_CACHE' => 'Εκκαθάριση ACP %1$s',
	'GYM_CLEAR_ACP_CACHE_EXPLAIN' => 'Μπορείτε να επιλέξετε να διαγραφεί λανθάνουσα μνήμη εγκατάστασης του ACP %1$s. Αυτά τα αρχεία περιέχουν δεδομένα χρήσιμα για την κατασκευή του ACP %1$s.<br/>Μπορεί να είναι χρήσιμο να ενεργοποιήσετε νέες επιλογές που ίσως προστέθηκαν στις μονάδες για τον τύπο εξόδου.',
	'GYM_CACHE_CLEARED' => 'Επιτυχής εκκαθάριση λανθάνουσας μνήμης στο : ',
	'GYM_CACHE_NOT_CLEARED' => 'Ενα σφάλμα παρουσιάστηκε καθώς διαγραφόταν η λανθάνουσα μνήμη, ελέξτε τις προσβάσεις των φακέλων (CHMOD 0666 ή 0777).<br/>Ο φάκελος που έχει ρυθμιστεί για λανθάνουσα μνήμη είναι ο : ',
	'GYM_FILE_CLEARED' => 'Διαγράφηκαν Αρχείο/α: ',
	'GYM_CACHE_ACCESSED' => 'Ο φάκελος λανθάνουσας μνήμης προσπελάστηκε επιτυχώς, αλλά κανένα αρχείο δε διαγράφηκε: ',
	'MODULE_CACHE_CLEARED' => 'Η Λανθάνουσα μνήμη μονάδας ACP καθαρίστηκε με επιτυχία, εάν φορτώσετε μία μονάδα, το ACP της θα εμφανιστεί τώρα.',
	
	// set defaults
	'GYM_SETTINGS' => 'Ρυθμίσεις',
	'GYM_RESET_ALL' => 'Επαναφορά όλων',
	'GYM_RESET_ALL_EXPLAIN' => 'Εάν επιλέξετε, όλες οι παραπάνω επιλογές θα επανέλθουν στις εξορισμού.',
	'GYM_RESET' => 'Επαναφορά ρυθμίσεων %1$s',
	'GYM_RESET_EXPLAIN' => 'Παρακάτω μπορείτε να επαναφέρετε τη διαμόρφωση μονάδας %1$s, είτε όλη τη μονάδα μονομιάς ή μόνο συγκεκριμένο σετ μονάδας.',

	'GYM_INSTALL' => 'Εγκατάσταση',
	'GYM_MODULE_INSTALL' => 'Εγκαθιστά τη μονάδα %1$s',
	'GYM_MODULE_INSTALL_EXPLAIN' => 'Παρακάτω μπορείτε να ενεργοποιήσετε/απενεργοποιήσετε τη μονάδα %1$s.<br/>Εαν μόλις φορτώσατε μια μονάδα, πρέπει να την ενεργοποιήσετε πριν την χρήση της.<br/>Αν δε μπορείτε να δείτε τη νέα μονάδα, διαγραψτε τη λανθάνουσα μνήμη μονάδων ACP στη σελίδα Συντήρησης.',

	// Titles
	'GYM_MAIN' => 'Ρυθμίσεις GYM Sitemaps',
	'GYM_MAIN_EXPLAIN' => 'Αυτές είναι κοινές ρυθμίσεις για όλους τους τύπους εξόδων και όλες τις μονάδες.<br/> Εφαρμόζονται σε όλους τους τύπους εξόδων (html, RSS, Google sitemaps, Yahoo! url list) ή/και σε όλες τις μονάδες ανάλογα με τις ρυθμίσεις αγνόησης.',
	'MAIN_MAIN' => 'Ανασκόπηση GYM Sitemaps',
	'MAIN_MAIN_EXPLAIN' => 'Το GYM sitemaps είναι μία πολύ ευέλικτη και ολοκληρωμένη μονάδα phpBB για Μηχανές Αναζήτησης. Επιτρέπει τη δημιουργία Google sitemaps, Τροφοδοσίας RSS 2.0, URL λίστες Yahoo και περιεχόμενα html για τη Δ.Συζήτηση ή κάθε άλλο σημείο της ιστοσελίδας σας χάρη στις μονάδες του.<br/><br/> κάθε τύπος εξόδου (Google, RSS, html & Yahoo) μπορεί να τραβήξει στοιχεία για προβολή από κάθε εφαρμογή εγκατεστημένη στην ιστοσελίδα σας (Δ.Συζήτηση, γκαλερί κλπ...) χρησιμοποιώντας μια αποκλειστική μονάδα.<br/>Μπορείτε να ενεργοποιήσετε/απενεργοποιήσετε μονάδες χρησιμοποιώντας το δεσμό "Εγκατάσταση" στο ACP κάθε τύπου εξόδου. Κάθε μονάδα έχει τις δικές σου σελίδες διαμόρφωσης.<br/><br/>Σιγουρευτείτε οτι επιλέξατε το %1$s, υποστήριξη παρέχεται στο %2$s.<br/>Γενική υποστήριξη SEO και συζητήσεων θα βρείτε στο %3$s<br/>%4$s<br/>Φιλικά ;-)',

	'GYM_GOOGLE' => 'Google Sitemaps',
	'GYM_GOOGLE_EXPLAIN' => 'Αυτές οι ρυθμίσεις είναι κοινές για όλες τις μονάδες Google sitemaps (forum, custom etc ...).<br/> Η εφαρμογή τους εξαρτάται από τις ρυθμίσεις ανγόησης για αυτό τον τύπο εξόδου καθώς και τις Γενικές.',
	'GYM_RSS' => 'Ανατροφοδοτήσεις RSS',
	'GYM_RSS_EXPLAIN' => 'Αυτές οι ρυθμίσεις είναι κοινές για όλες τις μονάδες RSS (forum, custom etc ...).<br/> Η εφαρμογή τους στα RSS εξαρτάται από τις ρυθμίσεις ανγόησης για αυτό τον τύπο εξόδου καθώς και τις Γενικές.',
	'GYM_HTML' => 'Περιεχόμενα HTML',
	'GYM_HTML_EXPLAIN' => 'Αυτές οι ρυθμίσεις είναι κοινές για όλες τις μονάδες HTML (forum, custom etc ...).<br/> Μπορούν να εφαρμοστούν σε όλες τις μονάδες HTML ανάλογα με τις ρυθμίσεις αγνόησης για αυτό τον τύπο εξόδου και τις κύριες.',
	'GYM_MODULES_INSTALLED' => 'Ενεργή/ές Μονάδα/ες',
	'GYM_MODULES_UNINSTALLED' => 'Μη Ενεργή/ές Μονάδα/ες',

	// Overrides
	'GYM_OVERRIDE_GLOBAL' => 'Γενικό',
	'GYM_OVERRIDE_OTYPE' => 'Τύπος εξόδου',
	'GYM_OVERRIDE_MODULE' => 'Μονάδα',
	
	// override messages
	'GYM_OVERRIDED_GLOBAL' => 'η επιλογή αγνοείται στο πρώτο επίπεδο (Γενικές ρυθμίσεις)',
	'GYM_OVERRIDED_OTYPE' => 'η επιλογή αγνοείται στο επίπεδο τύπου εξόδου',
	'GYM_OVERRIDED_MODULE' => 'η επιλογή αγνοείται στο επίπεδο μονάδων',
	'GYM_OVERRIDED_VALUE' => 'η τιμή που λαμβάνεται υπόψη είναι : ',
	'GYM_OVERRIDED_VALUE_NOTHING' => 'Κανένα',
	'GYM_COULD_OVERRIDE' => 'η επιλογή μπορεί να αγνοηθεί αλλά δεν αγνοείται.',

	// Overridable / common options
	'GYM_CACHE' => 'Λανθάνουσα μνήμη',
	'GYM_CACHE_EXPLAIN' => 'Εδώ ρυθμίζετε διάφορες επιλογές λανθάνουσας μνήμης. Θυμηθήτε ότι οι επιλογές αυτές μπορεί να αγνοηθούν ανάλογα από τις ρυθμίσεις αγνόησης.',
	'GYM_MOD_SINCE' => 'Ενεργοποίηση τροποποιημένων από',
	'GYM_MOD_SINCE_EXPLAIN' => 'Η μονάδα θα ρωτήσει τον πλοηγό αν έχει την τελευταία έκδοση της σελίδας στην προσωρινή του μνήμη πριν ξαναστείλει τα περιεχόμενα της.<br /><u>Σημείωση :</u> Η επιλογή αυτή αφορά όλους τους τύπους εξόδων.',
	'GYM_CACHE_ON' => 'Ενεργοποίηση Λανθάνουσας μνήμης',
	'GYM_CACHE_ON_EXPLAIN' => 'Μπορείτε να ενεργοποιήσετε /απενεργοποιήσετε τη λανθάνουσα μνήμη για αυτή τη μονάδα.',
	'GYM_CACHE_FORCE_GZIP' => 'Υποχρεωτική συμπίεση Λανθάνουσας μνήμης',
	'GYM_CACHE_FORCE_GZIP_EXPLAIN' => 'Σας επιτρέπει να επιβάλετε συμπίεση gunzip για αρχεία λανθάνουσας μνήμης παρά τις ρυθμίσεις gunzip. Αυτό βοηθάει εάν έχετε πρόβλημα χώρου αλλά επιβαρύνει τον σερβερ να αποσυμπιέζει το αρχείο πριν σταλεί στον πλοηγό.',
	'GYM_CACHE_MAX_AGE' => 'Διαρκεια Λανθάνουσας μνήμης',
	'GYM_CACHE_MAX_AGE_EXPLAIN' => 'Μέγιστος αριθμός ωρών που θα χρησιμοποιηθεί η λανθάνουσα μνήμη πριν ανανεωθεί. Κάθε αρχείο λανθάνουσας μνήμης θα ανανεωθεί κάθε φορά που κάποιος πλοηγηθεί μόλις περάσει αυτό το χρονικό όριο όταν ή αυτόματη αναδημιουργία λανθ. μνήμης είναι ενεργοποιημένη. Εαν δεν είναι ενεργή, λανθ. μνήμη θα δημιουργηθεί κατα απαίτηση μέσω ACP.',
	'GYM_CACHE_AUTO_REGEN' => 'Αυτόματη ανανέωση Λανθάνουσας μνήμης',
	'GYM_CACHE_AUTO_REGEN_EXPLAIN' => 'Εαν ενεργοποήσετε την αυτόματη ανανέωση μνήμης, οι έξοδοι θα ανανεώνονται όταν λήξει το χρονικό όριο. Σε αντίθετη περίπτωση πρέπει να το κάνετε χειροκίνητα στο δεσμό Συντήρησης πιο πάνω, για να δείτε νέους δεσμούς στη λίστα.',
	'GYM_SHOWSTATS' => 'Στατιστικά Λανθάνουσας μνήμης',
	'GYM_SHOWSTATS_EXPLAIN' => 'Εξοδος ή όχι των στατιστικών του κώδικα πηγής.<br /><u>Σημείωση :</u> Η διάρκεια είναι ο χρόνος που χρειάζεται να δημιουργηθεί η σελίδα. Το βήμα αυτό δεν επαναλαμβάνεται όταν γίνεται εγγραφή από την λανθάνουσα μνήμη.',
	'GYM_CRITP_CACHE' => 'Κωδικοποίηση αρχείων Λανθάνουσας μνήμης',
	'GYM_CRITP_CACHE_EXPLAIN' => 'Κωδικοποίηση των αρχείων λανθ. μνήμης ή όχι. Είναι ασφαλέστερο να είναι κωδικοποιημένα, αλλά είναι πιο εύκολο να μείνουν ακωδικοποίητα ώστε να μπορείτε να τα ελέγξετε σε περίπτωση σφαλμάτων.<br /><u>Σημείωση :</u> Η επιλογή αυτή αφορά όλους τους τύπους αρχείων λανθ. μνήμης.',

	'GYM_MODREWRITE' => 'URL rewriting',
	'GYM_MODREWRITE_EXPLAIN' => 'Εδώ ρυθμίζετε διάφορες επιλογές URL rewriting. Θυμηθήτε ότι οι επιλογές αυτές μπορεί να αγνοηθούν ανάλογα από τις ρυθμίσεις αγνόησης.',
	'GYM_MODREWRITE_ON' => 'Ενεργοποίηση URL rewriting',
	'GYM_MODREWRITE_ON_EXPLAIN' => 'Ενεργοποιεί το URL rewriting για τους δεσμούς μονάδας.<br /><u>Σημείωση :</u> ΠΡΕΠΕΙ να χρησιμοποιείται σερβερ Apache με φορτωμένη τη μονάδα mod_rewrite ή έναν IIS σερβερ που τρέχει τη μονάδα isapi_rewrite ΚΑΙ να ρυθμίσετε σωστά τους κανόνες rewrite της μονάδας στο αρχείο .htaccess (ή httpd.ini με IIS ).',
	'GYM_ZERO_DUPE_ON' => 'Ενεργοποίηση Zero Duplicate',
	'GYM_ZERO_DUPE_ON_EXPLAIN' => 'Ενεργοποιεί το Zero Duplicate για τους δεσμούς της μονάδας.<br /><u>Σημείωση :</u> Οι ανακατευθύνσεις θα γίνουν μόνο όταν (επανα)δημιουργηθεί η λανθάνουσα μνήμη σε αυτή την έκδοση.',
	'GYM_MODRTYPE' => 'Τύπος URL rewriting',
	'GYM_MODRTYPE_EXPLAIN' => 'Αυτές οι επιλογές αγνοούνται με τη χρήση του phpBB SEO mod rewrite (αυτόματη αναγνώριση ).<br/>Τέσσερα επίπεδα από url rewriting μπορύν να ρυθμιστούν εδώ: Κανένα, Απλό, Μικτό και Προχωρημένο :<br/><ul><li><b>Κανένα :</b> Δε γίνεται URL rewriting <br></li><li><b>Απλό :</b>Στατικό URL rewriting για όλους τους δεσμούς, καμία ενσωμάτωση τίτλου;<br></li><li><b>Μικτό :</b> Τίτλοι Δ.Συζητήσεων και κατηγοριών ενσωματώνονται στους δεσμούς URL, άλλα οι τίτλοι θεμάτων παραμένουν στατικά rewritten;<br></li><li><b>Προχωρημένο :</b> Ολοι οι τίτλοι ενσωματώνονται στους δεσμούς URL;</li></ul>',

	'GYM_GZIP' => 'Συμπίεση GUNZIP',
	'GYM_GZIP_EXPLAIN' => 'Εδώ ρυθμίζετε διάφορες επιλογές συμπίεσης gunzip. Θυμηθήτε ότι οι επιλογές αυτές μπορεί να αγνοηθούν ανάλογα από τις ρυθμίσεις αγνόησης.%1$s',
	'GYM_GZIP_FORCED' => '<br/><b style="color:red;">Σημείωση :</b> Η συμπίεση Gun-zip είναι ενεργοποιημένη στο phpBB config. Γιαυτό επιβάλεται στη μονάδα.',
	'GYM_GZIP_CONFIGURABLE' => '<br/><b style="color:red;">Σημείωση :</b> Η συμπίεση Gun-zip ΔΕΝ είναι ενεργοποιημένη στο phpBB config. Μπορείτε να ρυθμίσετε τις παρακάτω επιλογές όπως θέλετε.',
	'GYM_GZIP_ON' => 'Ενεργοποίηση gunzip',
	'GYM_GZIP_ON_EXPLAIN' => 'Ενεργοποιεί τη συμπίεση gunzip της εξόδου. Μειώνει σημαντικά την ποσότητα των δεδομένων που στέλνεται στον πλοηγό και άρα και ο χρόνος που χρειάζεται να σταλούν.',
	'GYM_GZIP_EXT' => 'Κατάληξη αρχείου Gunzip',
	'GYM_GZIP_EXT_EXPLAIN' => 'Μπορείτε να επιλέξετε αν χρησιμοποιηθεί η κατάληγη .gz ή όχι στους δεσμούς της μονάδας. Αυτό εφαρμόζεται μόνο όταν η συμπίεση gunzip και το URL rewriting είναι ενεργοποιημένα.',
	'GYM_GZIP_LEVEL' => 'Επίπεδο συμπίεσης Gunzip',
	'GYM_GZIP_LEVEL_EXPLAIN' => 'Ακέραιος αριθμός μεταξύ του 1 και του 9, με το 9 να πετυχαίνει τη μεγαλύτερη συμπίεση. Συνήθως δε χρειάζεται να πάτε πάνω από 6.<br /><u>Σημείωση :</u> Η επιλογή αυτή αφορά όλους τους τύπους εξόδων.',

	'GYM_LIMIT' => 'Ορια',
	'GYM_LIMIT_EXPLAIN' => 'Εδώ θέτετε το όριο που θα εφαρμοστεί όταν δημιουργείται έξοδος : Αριθμός δεσμών που θα εξαχθούν, κύκλος SQL (αριθμός στοιχείων που θα αναζητηθούν σε μία φορά) και ηλικία στοιχείων που θα μπουν στη λίστα.<br/>Θυμηθήτε ότι οι επιλογές αυτές μπορεί να αγνοηθούν ανάλογα από τις ρυθμίσεις αγνόησης.',
	'GYM_URL_LIMIT' => 'Ορια στοιχείου',
	'GYM_URL_LIMIT_EXPLAIN' => 'Ο μέγιστος αριθμός στοιχείων για έξοδο.',
	'GYM_SQL_LIMIT' => 'Κύκλος SQL',
	'GYM_SQL_LIMIT_EXPLAIN' => 'Για όλους τους τύπους εξόδων, εκτός html, οι αναζητήσεις SQL χωρίζονται για να δημιουργήσουν λίστες μεγάλου όγκου στοιχείων χωρίς να τρέχουν βαριές αναζητήσεις.<br/>Ορίστε εδώ το μέγεθος στοιχείων για αναζήτηση σε μία φορά. Ο αριθμός αναζητήσεων SQL θα είναι ο αριθμός των στοιχείων σε λίστα δια του κύκλου αυτού.',
	'GYM_TIME_LIMIT' => 'Ορια χρόνου',
	'GYM_TIME_LIMIT_EXPLAIN' => 'Οριο σε ημέρες. Η μεγαλύτερη ηλικία στοιχείων που λαμβάνονται υπόψη όταν δημιουργείται λίστα εξόδου. Είναι χρήσιμο για ελάφρυνση του σερβερ σε μεγάλες βάσεις δεδομένων. Δώστε 0 για κανένα όριο',

	'GYM_SORT' => 'Ταξινόμηση',
	'GYM_SORT_EXPLAIN' => 'Εδώ επιλέγετε πως να ταξινομήσετε την έξοδο.<br/>Θυμηθήτε ότι οι επιλογές αυτές μπορεί να αγνοηθούν ανάλογα από τις ρυθμίσεις αγνόησης.',
	'GYM_SORT_TYPE' => 'Εξορισμού ταξινόμηση',
	'GYM_SORT_TYPE_EXPLAIN' => 'Ολοι οι εξαγόμενοι δεσμοί ταξινομούνται εξορισμού σύμφωνα με την τελευταία δραστηριότητα (Φθίνουσα). <br /> Μπορείτε να επιλέξετε για παράδειγμα Αύξουσα αν θέλετε οι μηχανές αναζήτησης να βρίσκουν ευκολότερα παλιά θέματα.<br/>Θυμηθήτε ότι οι επιλογές αυτές μπορεί να αγνοηθούν ανάλογα από τις ρυθμίσεις αγνόησης.',

	'GYM_PAGINATION' => 'Σελιδοποίηση',
	'GYM_PAGINATION_EXPLAIN' => 'Εδώ ρυθμίζετε διάφορες επιλογές σελιδοποίησης. Θυμηθήτε ότι οι επιλογές αυτές μπορεί να αγνοηθούν ανάλογα από τις ρυθμίσεις αγνόησης.',
	'GYM_PAGINATION_ON' => 'Ενεργοποίηση σελιδοποίησης',
	'GYM_PAGINATION_ON_EXPLAIN' => 'Εδώ αποφασίστε να εξάγετε σελιδοποιημένους δεσμούς (όταν είναι διαθέσιμοι) για τα στοιχεία στη λίστα. Για παράδειγμα, η μονάδα μπορεί να παράγει επίσης δεσμούς για τις σελίδες θεμάτων της Δ.Συζήτησης.',
	'GYM_LIMITDOWN' => 'Σελιδοποίηση: Κατώτερο όριο',
	'GYM_LIMITDOWN_EXPLAIN' => 'Εισάγετε το πόσες σελιδοποιημένες σελίδες, αρχίζοντας από την πρώτη, θα εξαχθούν.',
	'GYM_LIMITUP' => 'Σελιδοποίηση: Ανώτερο όριο',
	'GYM_LIMITUP_EXPLAIN' => 'Εισάγετε το πόσες σελιδοποιημένες σελίδες, αρχίζοντας από την τελευταία, θα εξαχθούν.',

	'GYM_OVERRIDE' => 'Αγνόηση',
	'GYM_OVERRIDE_EXPLAIN' => 'Το GYM sitemaps λειτουργεί πλήρως βάσει μονάδων. Κάθε τύπος εξόδου (Google, RSS ...) χρησιμοποιεί τη δική του μονάδα εξόδου που αντιστοιχεί στον τύπο του στοιχείου που θα εξαχθεί. Για παράδειγμα, Η πρώτη μονάδα για όλους τους τύπους εξόδου είναι η μονάδα Δ.Συζήτησης.Δηλαδή εξάγει σε λίστα στοιχεία από τη Δ.Συζήτηση.<br/> Πολλές επιλογές, όπως το URL rewriting, λανθάνουσα μνήμη, συμπίεση gunzip κλπ..., επαναλαμβάνονται σε πολλά επίπεδα του ACP του GYM sitemaps. Αυτό σας επιτρέπει να χρησιμοποιήσετε διάφορες ρυθμίσεις για την ίδια επιλογή ανάλογα με τον τύπο και τη μονάδα εξόδου. Μπορεί όμως να θέλετε , για παράδειγμα, να ενεργοποιήσετε το URL rewriting για όλη τη μονάδα GYM sitemaps με μιάς (για όλους τους τύπους εξόδων και όλες τις μονάδες).<br/> Αυτό μπορούν να κάνουν οι ρυθμίσεις αγνόησης με πολλούς συνδυασμούς ρυθμίσεων. <br/>Η σειρά της διαδικασίας πηγαίνει από το ανώτερο επίπεδο ρυθμίσεων (Γενικές ρυθμίσεις) στο επίπεδο εξόδου (Google, RSS ...) και τελειώνει στο κατώτατο επίπεδο : Τις μονάδες εξόδου (Δ.Συζήτηση, Αλμπουμ ...)<br/>Οι Ρυθμίσεις Αγνόησης μπορούν να πάρουν 3 τιμές :<br/><ul><li><b>Γενικές :</b> Η Γενική ρύθμιση θα χρησιμοποιηθεί,<br></li><li><b>Τύπος Εξόδου :</b> Θα χρησιμοποιηθούν οι ρυθμίσεις τύπων εξόδου για τις μονάδες του,<br></li><li><b>Μονάδα :</b> Η κατώτερη διαθέσιμη ρύθμιση θα χρησιμοποιηθεί, π.χ. πρώτα της μονάδας, κι αν αυτή δεν έχει ρυθμιστεί, ο τύπος εξόδου και ούτω καθεξής, μέχρι να φτάσει στη Γενική ρύθμιση αν είναι διαθέσιμη.</li></ul>',
	'GYM_OVERRIDE_ON' => 'Ενεργοποίηση Γενικής αγνόησης',
	'GYM_OVERRIDE_ON_EXPLAIN' => 'Εδώ ενεργοποιείτε/απενεργοποιείτε τη Γενική αγνόηση. Απενεργοποιώντας είναι το ίδιο σαν να ρυθμίσετε όλες τις αγνοήσεις σε "Μονάδα", αφήνοντας τις ρυθμίσεις αγνόησης του τύπου εξόδου να ρυθμίσει την αγνόηση μονάδας.',
	'GYM_OVERRIDE_MAIN' => 'Εξορισμού αγνόηση',
	'GYM_OVERRIDE_MAIN_EXPLAIN' => 'Ορίστε επίπεδο αγνόησης για ότι άλλους τύπους ρυθμίσεων μπορεί να χρησιμοποιήσει μία μονάδα.',
	'GYM_OVERRIDE_CACHE' => 'Αγνόηση Λανθάνουσας μνήμης',
	'GYM_OVERRIDE_CACHE_EXPLAIN' => 'Τι επίπεδο αγνόησης να ρυθμίσετε για την επιλογή λανθάνουσας μνήμης.',
	'GYM_OVERRIDE_GZIP' => 'Αγνόηση συμπίεσης Gunzip',
	'GYM_OVERRIDE_GZIP_EXPLAIN' => 'Τι επίπεδο αγνόησης να ρυθμίσετε για την επιλογή συμπίεσης gunzip.',
	'GYM_OVERRIDE_MODREWRITE' => 'Αγνόηση URL Rewriting',
	'GYM_OVERRIDE_MODREWRITE_EXPLAIN' => 'Τι επίπεδο αγνόησης να ρυθμίσετε για την επιλογή URL rewriting.',
	'GYM_OVERRIDE_LIMIT' => 'Αγνόηση ορίων',
	'GYM_OVERRIDE_LIMIT_EXPLAIN' => 'Τι επίπεδο αγνόησης να ρυθμίσετε για την επιλογή ορίων.',
	'GYM_OVERRIDE_PAGINATION' => 'Αγνόηση Σελιδοποίησης',
	'GYM_OVERRIDE_PAGINATION_EXPLAIN' => 'Τι επίπεδο αγνόησης να ρυθμίσετε για την επιλογή σελιδοποίησης.',
	'GYM_OVERRIDE_SORT' => 'Αγνόηση ταξινόμησης',
	'GYM_OVERRIDE_SORT_EXPLAIN' => 'Τι επίπεδο αγνόησης να ρυθμίσετε για την επιλογή ταξινόμησης.',

	// Mod rewrite
	'GYM_MODREWRITE_ADVANCED' => 'Για προχωρημένους',
	'GYM_MODREWRITE_MIXED' => 'Μικτό',
	'GYM_MODREWRITE_SIMPLE' => 'Απλό',
	'GYM_MODREWRITE_NONE' => 'Κανένα',

	// Sorting
	'GYM_ASC' => 'Αύξουσα',
	'GYM_DESC' => 'Φθίνουσα',

	// Other
	// robots.txt
	'GYM_CHECK_ROBOTS' => 'Ελεγχος εξαιρέσεων robots.txt',
	'GYM_CHECK_ROBOTS_EXPLAIN' => 'Ελέγξτε κι εφαρμόστε τις εξαιρέσεις στο robots.txt, εάν υπάρχουν. Το mod θα λαβει αυτόματα υπόψη τις τυχόν αλλαγές που θα κάνετε στο αρχείο robots.txt.<br/> Αυτή η επιλογή βοηθά στις εισαγωγές XML και TXT, όταν δεν είστε σίγουροι αν τα μη επιτρεπόμενα URL περιλαμβάνονται στη πηγαία λιστα.<br/><u>Σημείωση :</u><br/>Αυτή η επιλογή απαιτεί μια πιό βαριά εισαγωγή απο το αρχείο πηγής αρα συστήνεται να έχετε ενεργοποιημένη τη λανθάνουσα μνήμη όταν τη χρησιμοποιείτε.',
	// summarize method
	'GYM_METHOD_CHARS' => 'Ανά χαρακτήρα',
	'GYM_METHOD_WORDS' => 'Ανά λέξη',
	'GYM_METHOD_LINES' => 'Ανά γραμμή',
));
?>