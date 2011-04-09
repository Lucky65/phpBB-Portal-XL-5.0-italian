<?php

/**
*
* @package - Contact Board admin
* @version $Id: info_acp_contact.php 1.0.1 2009-12-01 RMcGirr83 $
* @copyright (c) 2009 RMcGirr83 http://rmcgirr83.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbb2.gr:
* (http://phpbb2.gr/team/)
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
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(

	// ACP entries
	'LOG_CONTACT_CONFIG_UPDATE'		=> '<strong>Ενημέρωση ρυθμίσεων Φόρμας Επικοινωνίας Διαχειριστή</strong>',
	
	// General config options
	// Only needed to remove module from previous version installs
	'ACP_CONTACT_ADMIN_SETTINGS'	=> 'Φόρμα Επικοινωνίας Διαχειριστή',	
	
	'ACP_CONTACT_SETTINGS_EXPLAIN'	=> 'Αυτή είναι η σελίδα διαμόρφωσης για την "φόρμα επικοινωνίας" mod από RMcGirr83 και τον eviL&lt;3. Η κύρια σελίδα ρυθμίσεων της φόρμας επικοινωνίας περιέχει τις γενικές ρυθμίσεις και τις ρυθμίσεις της συνόδου του bot επικοινωνίας και συσχετίζεται μόνο με της Κοινότητας δημοσιεύσεις και Προσωπικών μηνυμάτων μεθόδους επικοινωνίας.',

	'ACP_CONTACT_CONFIG'			=> 'Ρυθμίσεις',
	'ACP_CAT_CONTACT'				=> 'Φόρμα Επικοινωνίας Διαχειριστή',	
	'CONTACT_CONFIG_SAVED'			=> 'Η ρυθμίσεις της Φόρμας Επικοινωνίας Διαχειριστή έχουν ενημερωθεί',
	'CONTACT_VERSION'				=> 'Έκδοση:',
	'CONTACT_ENABLE'				=> ' Ενεργοποίηση Φόρμα Επικοινωνίας Διαχειριστή MOD',
	'CONTACT_ENABLE_EXPLAIN'		=> 'Ενεργοποίηση ή απενεργοποίηση του mod σε γενικό επίπεδο.',

	'CONTACT_ACP_CONFIRM'				=> 'Ενεργοποίηση κώδικα οπτικής επιβεβαίωσης',
	'CONTACT_ACP_CONFIRM_EXPLAIN'		=> 'Εάν ενεργοποιήσετε αυτήν την επιλογή, τα μέλη θα πρέπει να εισάγουν μια οπτική επιβεβαίωση για να στείλουν το μήνυμα.<br />Αυτό είναι προς αποφυγή αυτόματων μηνυμάτων. Σημείωση: αυτό ισχύει μόνο για την σελίδα της φόρμας επικοινωνίας.  Δεν επηρεάζει άλλες ρυθμίσεις  του κώδικα οπτικής επιβεβαίωσης.',
	'CONTACT_ATTACHMENTS'				=> 'Συνημμένα επιτρέπονται',
	'CONTACT_ATTACHMENTS_EXPLAIN'		=> 'Σε περίπτωση που τα συνημμένα επιτρέπονται στις δημοσιεύσεις  και τα προσωπικά μηνύματα στην Δ. Συζήτηση.<br />Οι επεκτάσεις που επιτρέπονται είναι οι ίδιες όπως και στην Δ. Συζήτηση.<br /><span style="color:red;">Δεν ισχύει για τη μέθοδο επικοινωνίας μέσω  “Ηλεκτρονικό Ταχυδρομείο”.</span>',
	'CONTACT_BBCODES'					=> 'BBcodes επιτρέπονται',
	'CONTACT_BBCODES'				=> 'Επιτρέψτε bbcodes',
	'CONTACT_BBCODES_EXPLAIN'		=> 'Εάν ενεργοποιηθεί θα επιτρέπεται η χρήση bbcodes.',
	'CONTACT_CONFIRM_GUESTS'		=> 'Οπτική επιβεβαίωση μόνον για επισκέπτες',
	'CONTACT_CONFIRM_GUESTS_EXPLAIN'	=> 'Εάν ενεργοποιήσετε αυτήν την ρύθμιση, ο κώδικας επιβεβαίωσης θα εμφανίζεται μόνο στους επισκέπτες (εάν έχει ενεργοποιηθεί).',
	'CONTACT_ENABLE'				=> 'Ενεργοποίηση φόρμας επικοινωνίας',
	'CONTACT_ENABLE_EXPLAIN'		=> 'Εάν έχει απενεργοποιηθεί, η σελίδα επικοινωνίας δεν εμφανίζεται και κατά της επίσκεψη στον σύνδεσμο θα εμφανίζεται ένα λάθος, επίσης δεν θα είναι ορατή στην κεφαλίδα της κοινότητας.',	
	'CONTACT_FOUNDER'				=> 'Επικοινωνία μόνο με ιδρυτικά μέλη κοινότητας',
	'CONTACT_FOUNDER_EXPLAIN'		=> 'Εάν έχει οριστεί, μόνον ιδρυτικά μέλη κοινότητας θα λαμβάνουν ειδοποιήσεις μηνύματος ηλεκτρονικού ταχυδρομείου ή προσωπικών μηνυμάτων.',
	'CONTACT_GENERAL_SETTINGS'		=> 'Ρυθμίσεις σελίδας φόρμας επικοινωνίας',
	'CONTACT_MAX_ATTEMPTS'			=> 'Αριθμός μέγιστων προσπαθειών επιβεβαίωσης',
	'CONTACT_MAX_ATTEMPTS_EXPLAIN'	=> 'Πόσο συχνά μπορούν  τα μέλη να προσπαθήσουν να προσθέσουν την σωστή εικόνα του κώδικα επιβεβαίωσης; Προσθέστε 0 χωρίς όριο προσπαθειών.',
	'CONTACT_METHOD'				=> 'Μέθοδος επικοινωνίας',
	'CONTACT_METHOD_EXPLAIN'		=> 'Πως θέλετε να είναι σε θέση να επικοινωνούν τα μέλη.',
	'CONTACT_REASONS'				=> 'Λόγος επικοινωνίας',
	'CONTACT_REASONS_EXPLAIN'		=> 'Πληκτρολογήστε λόγους για την επικοινωνία, διαχωρισμένους σε ξεχωριστές γραμμές. Εάν δεν θέλετε να χρησιμοποιήσετε αυτό το χαρακτηριστικό, αφήστε αυτό το πεδίο κενό.',
	'CONTACT_SMILIES'				=> 'Επιτρέψτε εικονίδια',
	'CONTACT_SMILIES_EXPLAIN'		=> 'Εάν είναι ενεργοποιημένο και επιτρέπεται η χρήση bbcodes, θα επιτρέπεται η χρήση εικονιδίων. Αυτή η ρύθμιση δεν έχει αποτέλεσμα, εάν δεν επιτρέπονται bbcodes.',
	'CONTACT_URLS'						=> 'Σύνδεσμοι επιτρέπονται',
	'CONTACT_URLS_EXPLAIN'				=> 'Εάν είναι ενεργοποιημένο και επιτρέπεται η χρήση bbcodes, τότε θα επιτρέπετε και η χρησιμοποίηση συνδέσμων.<br /><span style="color:red;">Δεν ισχύει για τη μέθοδο επικοινωνίας μέσω  “Ηλεκτρονικό Ταχυδρομείο”.</span>',
	// Bot config options
	'CONTACT_BOT_FORUM'				=> 'Ρυθμίσεις bot κοινότητας',
	'CONTACT_BOT_FORUM_EXPLAIN'		=> 'Επιλέξτε την Δ. Συζήτηση, στην οποία το bot επικοινωνίας θα εμφανίσει το μήνυμα, εάν η μέθοδος επικοινωνίας έχει τεθεί σε “Δημοσίευση στην Δ. Συζήτηση”.',
	'CONTACT_BOT_POSTER'			=> 'Bot ως συγγραφέας',
	'CONTACT_BOT_POSTER_EXPLAIN'	=> 'Εάν έχει οριστεί, τα προσωπικά μηνύματα θα φαίνονται ότι προέρχονται από το χρήστη που έχει επιλεγεί πιο πάνω με βάση τις ρυθμίσεις Μέλος bot επικοινωνίας. Εάν έχει επιλεγεί “Κανένας” τότε το Bot δεν θα χρησιμοποιείται ως συγγραφέας και οι δημοσιεύσεις και τα προσωπικά μηνύματα, θα δημοσιεύονται με βάση τις πληροφορίες που έχουν εισαχθεί στην φόρμα επικοινωνίας.',
	'CONTACT_BOT_SETTINGS'			=> 'Ρυθμίσεις bot επικοινωνίας',
	'CONTACT_BOT_USER'				=> 'Μέλος bot επικοινωνίας',
	'CONTACT_BOT_USER_EXPLAIN'		=> 'Προσθέστε την ταυτότητα του μέλους που θα χρησιμοποιείτε, ποιος θα είναι ο συγγραφέας της δημοσίευσης Δ. Συζήτησης, εάν η μέθοδος επικοινωνίας έχει τεθεί σε “Δημοσίευση στην Δ. Συζήτηση” ή “Προσωπικό μήνυμα”.',
	'CONTACT_USERNAME_CHK'			=> 'Έλεγχος ονόματος μέλους',
	'CONTACT_USERNAME_CHK_EXPLAIN'	=> 'Εάν θέσετε αυτό ναι, το όνομα μελών που εγγράφονται θα ελέγχονται σε σύγκριση με εκείνα στη βάση δεδομένων.  Εάν ένα παρόμοιο όνομα βρεθεί θα παρουσιαστεί στο μέλος ένα λάθος και θα του ζητηθεί ένα διαφορετικό όνομα μέλους.',
	'CONTACT_EMAIL_CHK'				=> 'Έλεγχος Ε-μαιλ',
	'CONTACT_EMAIL_CHK_EXPLAIN'		=> 'Εάν θέσετε αυτό ναι, το Ε-μαιλ μελών που εγγράφονται θα ελέγχονται σε σύγκριση με εκείνα στη βάση δεδομένων.  Εάν ένα παρόμοιο Ε-μαιλ βρεθεί θα παρουσιαστεί στο μέλος ένα λάθος και θα του ζητηθεί ένα διαφορετικό Ε-μαιλ.',

	// Contact methods
	'CONTACT_METHOD_EMAIL'			=> 'Μήνυμα ηλεκτρονικού ταχυδρομείου',
	'CONTACT_METHOD_PM'				=> 'Προσωπικό μήνυμα',
	'CONTACT_METHOD_POST'			=> 'Δημοσίευση στην Δ. Συζήτηση',
	
	// Contact posters...user bot
	'CONTACT_POST_NEITHER'			=> 'Κανένας',
	'CONTACT_POST_GUEST'			=> 'Μόνον επισκέπτες',
	'CONTACT_POST_ALL'				=> 'Όλοι',			
	
	// UMIL stuff
	'ACP_CONTACT_TITLE'				=> 'Φόρμας Επικοινωνίας Διαχειριστή',
	'ACP_CONTACT_TITLE_EXPLAIN'		=> 'Ένας χώρος για τους επισκέπτες και τα μέλη να επικοινωνήσουν με τους Διαχειριστές της Δ. Συζήτηση',
	'CONTACT_UPDATED'				=> 'Ενημέρωση εγγραφών βάσης δεδομένων',
	'CONTACT_INSTALLED'				=> 'Εγκατάσταση εγγραφών βάσης δεδομένων',	
	
	// Log entries
	'LOG_CONFIG_CONTACT_ADMIN'		=> '<strong>Εναλλακτική σελίδα ρυθμίσεων Φόρμας Επικοινωνίας Διαχειριστή μοντ</strong>',
	'LOG_CONTACT_BOT_INVALID'		=> '<strong>Η  Φόρμας Επικοινωνίας Διαχειριστή  μοντ  bot έχει επιλέξει μια άκυρη ταυτότητα μέλους:</strong><br />Μέλους ταυτότητα %1$s',
	'LOG_CONTACT_FORUM_INVALID'		=> '<strong>Η  Φόρμας Επικοινωνίας Διαχειριστή  μοντ  Δ. Συζήτησης έχει επιλέξει μια άκυρη ταυτότητα Δ. Συζήτησης</strong><br /> Δ. Συζήτησης ID %1$s',
	'LOG_CONTACT_NONE'				=> '<strong>Οι διαχειριστές δεν επιτρέπουν στα μέλη να επικοινωνήσουν μαζί τους %1$s μέσω της Φόρμας Επικοινωνίας Διαχειριστή  μοντ</strong>',	
	
));

?>