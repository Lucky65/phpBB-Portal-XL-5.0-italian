<?php
/** 
*
* contact [Greek]
*
* @package	language
* @version	1.0.8a 12/07/09
* @copyright(c) 2009 RMcGirr83
* @copyright (c) 2007 eviL3
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(


	// teh form
	'CONTACT_BOT_ERROR'				=> 'Δεν μπορείτε να χρησιμοποιήσετε την φόρμα επικοινωνίας προς το παρόν, διότι υπάρχει κάποιο λάθος στις ρυθμίσεις. Ένα μήνυμα ηλεκτρονικού ταχυδρομείου στάλθηκε στον ιδρυτή της κοινότητας.',
	'CONTACT_BOT_NONE'				=> 'Το μέλος %1$s προσπάθησε να χρησιμοποιήσει την μονάδα φόρμα επικοινωνίας σε %2$s για να στείλει %3$s, αλλά δεν υπάρχουν διαχειριστές που να το επιτρέπουν αυτό %3$s στα μέλη.' . "\n\n" . 'Παρακαλώ μεταβείτε στην διαμόρφωση Bot επικοινωνίας στον ΠΕΔ για την Δ. Συζήτηση %4$s και επιλέξτε την ρύθμιση “ιδρυτικό μέλος”.' . "\n\n" . 'Η μονάδα έχει απενεργοποιηθεί',
	'CONTACT_BOT_SUBJECT'			=> 'Σφάλμα μονάδας φόρμας επικοινωνίας',
	'CONTACT_BOT_USER_MESSAGE'		=> 'Το μέλος %1$s προσπάθησε να χρησιμοποιήσει την μονάδα φόρμα επικοινωνίας σε %2$s, αλλά το μέλος που έχει επιλεγεί στις ρυθμίσεις είναι εσφαλμένο.' . "\n\n" . 'Παρακαλώ επισκεφθείτε την Δ. Συζήτηση %3$s και επιλέξτε στον ΠΕΔ ένα διαφορετικό μέλος ως διαχειριστή στην φόρμα επικοινωνίας.' . "\n\n" . 'Η μονάδα έχει απενεργοποιηθεί',
	'CONTACT_BOT_FORUM_MESSAGE'		=> 'Το μέλος που έχετε επιλέξει %1$s προσπάθησε να χρησιμοποιήσει την μονάδα φόρμα επικοινωνίας σε %2$s, αλλά η Δ. Συζήτηση που έχει επιλεγεί στις ρυθμίσεις είναι λάθος.' . "\n\n" . 'Παρακαλώ επισκεφθείτε την Δ. Συζήτηση %3$s και επιλέξτε στον ΠΕΔ μια Δ. Συζήτηση ως διαχειριστή στην φόρμα επικοινωνίας.' . "\n\n" . 'Η μονάδα έχει απενεργοποιηθεί',
	'CONTACT_CONFIRM'				=> 'Επιβεβαιώστε',
	'CONTACT_INSTALLED'				=> 'Η μονάδα “φόρμα επικοινωνίας” έχει εγκατασταθεί επιτυχώς.',

	'CONTACT_MAIL_DISABLED'			=> 'Δεν μπορείτε να χρησιμοποιήσετε την φόρμα επικοινωνίας προς το παρόν, διότι είναι απενεργοποιημένη.',
	'CONTACT_MSG_SENT'				=> 'Το μήνυμά σας έχει αποσταλεί με επιτυχία',
	'CONTACT_MSG_BODY_EXPLAIN'		=> '<br /><span>Παρακαλώ χρησιμοποιήστε την φόρμα επικοινωνίας <strong><em>μόνον</em></strong> εάν δεν υπάρχει άλλος τρόπος επικοινωνίας μαζί μας.<br /><br /><span style="text-align:center;"><strong>Η διεύθυνση IP σας καταγράφεται και οποιαδήποτε προσπάθεια κατάχρησης θα τιμωρηθεί.</strong></span></span>',
	'CONTACT_NO_NAME'				=> 'Δεν εισαγάγατε ένα όνομα.',
	'CONTACT_NO_EMAIL'				=> 'Δεν εισαγάγατε μια ηλεκτρονική διεύθυνση.',
	'CONTACT_NO_MSG'				=> 'Δεν εισαγάγατε ένα μήνυμα.',
	'CONTACT_NO_SUBJ'				=> 'Δεν εισαγάγατε μια περιγραφή',
	'CONTACT_OUTDATED'				=> 'Η βάση δεδομένων για την φόρμα επικοινωνίας δεν έχει ενημερωθεί ακόμη. Παρακαλώ περιμένετε μέχρι να γίνει η ενημέρωση από τον διαχειριστή.',
	'CONTACT_OUTDATED'			    => 'Η βάση δεδομένων για την Φόρμα Επικοινωνίας Διαχειριστή δεν έχει ακόμη ενημερωθεί. Παρακαλώ περιμένετε μέχρι να γίνει ενημέρωση από τον διαχειριστή.',
	'CONTACT_REASON'				=> 'Λόγος',
	'CONTACT_TEMPLATE'				=> '<strong>Όνομα:</strong> %1$s' . "\n" . '<strong>Διεύθυνση ηλεκτρονικού ταχυδρομείου:</strong> %2$s' . "\n" . '<strong>IP:</strong> %3$s' . "\n" . '<strong>Ημερομηνία:</strong> %4$s' . "\n" . '<strong>Περιγραφή:</strong> %5$s' . "\n" . '<strong>Λόγος:</strong> %6$s' . "\n" . '<strong>Έχει εισάγει το ακόλουθο μήνυμα στην φόρμα επικοινωνίας:</strong>' . "\n" . '%7$s',
	'CONTACT_TEMPLATE_NO_REASON'	=> '<strong>Όνομα:</strong> %1$s' . "\n" . '<strong>Ε-μαιλ</strong> %2$s' . "\n" . '<strong>IP:</strong> %3$s' . "\n" . '<strong>Ημερομηνία:</strong> %4$s' . "\n" . '<strong>Θέμα:</strong> %5$s' . "\n\n" . '<strong>Έχει εισέλθει το ακόλουθο μήνυμα στην φόρμα επικοινωνίας:</strong>' . "\n" . '%6$s',
	'CONTACT_TITLE'				    => 'Φόρμα Επικοινωνίας Διαχειριστή',
	'CONTACT_TOO_MANY'				=> 'Έχετε υπερβεί το μέγιστο αριθμό προσπαθειών επιβεβαίωσης επικοινωνίας  για αυτήν την σύνοδο. Παρακαλώ προσπαθήστε πάλι αργότερα.',
	'CONTACT_UNINSTALLED'			=> 'Η μονάδα “φόρμα επικοινωνίας” απεγκαταστάθηκε με επιτυχία.',
	'CONTACT_UPDATED'				=> 'Η μονάδα “φόρμα επικοινωνίας” έχει ενημερώθηκε στην έκδοση %s με επιτυχία.',
	
	'CONTACT_YOUR_NAME'				=> 'Το όνομά σας',
	'CONTACT_YOUR_NAME_EXPLAIN'		=> 'Παρακαλώ εισάγετε το όνομά σας, έτσι ώστε το μήνυμα να έχει μια ταυτότητα.',
	'CONTACT_YOUR_EMAIL'			=> 'Η ηλεκτρονική σας διεύθυνση',
	'CONTACT_YOUR_EMAIL_EXPLAIN'	=> 'Παρακαλώ εισάγετε μια έγκυρη ηλεκτρονική διεύθυνση, έτσι ώστε να μπορέσουμε να έρθουμε σε επικοινωνία μαζί σας.',
	'CONTACT_YOUR_EMAIL_CONFIRM'	=> 'Επιβεβαιώστε',
	'CONTACT_YOUR_EMAIL_CONFIRM_EXPLAIN'	=> 'Παρακαλώ επιβεβαιώστε την ηλεκτρονική σας διεύθυνση.',	

	'RETURN_CONTACT'				=> '%sΕπιστροφή στην σελίδα φόρμας επικοινωνίας%s',
	'URL_UNAUTHED'		=> 'Δεν μπορείτε να δημοσιεύσετε συνδέσμους, παρακαλώ διαγράψτε τους ή αλλάξτε την ονομασία τους:<br /><em>%1$s</em>',
));

?>