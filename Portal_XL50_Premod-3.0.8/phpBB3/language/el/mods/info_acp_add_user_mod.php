<?php
/** 
*
* acp_add_user [Greek]
*
* @author David Lewis (Highway of Life) http://phpbbacademy.com
*
* @package acp
* @version $Id: info_acp_add_user_mod.php 31M 2007-08-05 01:14:00Z (local) $
* @copyright (c) 2007 Star Trek Guide Group
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
	'ACP_ACCOUNT_ADDED'			=> 'Ο λογαριασμός μέλους έχει δημιουργηθεί. Το μέλος  μπορεί τώρα να συνδεθεί  με το όνομα μέλους και τον κωδικό πρόσβασης που στέλνονται στη διεύθυνση ηλεκτρονικού ταχυδρομείου που προσθέσατε.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Ο λογαριασμός μέλους έχει δημιουργηθεί.. Εντούτοις, οι ρυθμίσεις τις Δ. Συζήτησης  απαιτεί το μέλος να ενεργοποιήσει τον λογαριασμό του.<br />Ένα κλειδί ενεργοποίησης έχει αποσταλεί στην ηλεκτρονική διεύθυνση που προσθέσατε για το μέλος.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Ο λογαριασμός μέλους έχει δημιουργηθεί.. Εντούτοις, οι ρυθμίσεις τις Δ. Συζήτησης  απαιτεί η ενεργοποιήσει τον λογαριασμό να γίνει από τον Διαχειριστή.<br />Ένα ηλεκτρονικό ταχυδρομείο έχει αποσταλεί στον Διαχειριστή  και το μέλος θα ενημερωθεί μόλις γίνει ενεργοποίηση του λογαριασμού του',
	'ACP_ADD_USER'				=> 'Προσθήκη μέλους',
	'ACP_ADD_USER_ACCOUNT'		=> 'Προσθήκη λογαριασμού μέλους',
	'ACP_ADMIN_ACTIVATE'		=> 'Ένα ηλεκτρονικό ταχυδρομείο θα αποσταλεί σε έναν Διαχειριστή για την ενεργοποίηση του λογαριασμού, εναλλακτικά μπορείτε να ελέγξετε ότι έχετε ενεργοποιήσει το το κουτί λογαριασμού για άμεση ενεργοποίηση του λογαριασμού. Το μέλος θα λάβει ένα ηλεκτρονικό ταχυδρομείο που περιέχει τις λεπτομέρειες σύνδεσης του λογαριασμού.',
	'ACP_EMAIL_ACTIVATE'		=> 'Μόλις δημιουργηθεί ο λογαριασμός το μέλος θα λάβει ένα ηλεκτρονικό ταχυδρομείο που περιέχει έναν σύνδεσμο ενεργοποίησης για να ενεργοποιήσει του λογαριασμού',
	'ACP_INSTANT_ACTIVATE'		=> 'Ο λογαριασμός θα ενεργοποιηθεί αμέσως. Το μέλος θα λάβει ένα ηλεκτρονικό ταχυδρομείο με τις λεπτομέρειες σύνδεσης του λογαριασμού.',
	
	'ADD_USER'					=> 'Προσθήκη μέλους',
	'ADD_USER_EXPLAIN'			=> 'Δημιουργήστε έναν νέο λογαριασμό μέλους. Εάν οι ρυθμίσεις ενεργοποίησής σας είναι σε ενεργοποίηση μόνο από Διαχειριστή, θα έχετε την επιλογή να ενεργοποιήσετε το αμέσως αμέσως.',
	'ADD_USER_MOD_INSTALLED'	=> 'Προσθήκη μέλους MOD έκδοση %s  που είναι εγκατεστημένη<br />Παρακαλώ να βεβαιωθείτε ότι έχετε ορίσει  <em>user_add</em> στα δικαιώματα Διαχειριστή, ποια μέλη θα έχουν πρόσβαση σε αυτή την μονάδα.',
	'ADD_USER_MOD_UPDATED'		=> 'Προσθήκη μέλους MOD αναβάθμιση σε έκδοση  %s',
	'ADMIN_ACTIVATE'			=> 'Ενεργοποίηση λογαριασμού μέλους',
	
	'EDIT_USER_GROUPS'			=> '%sΠατήστε εδώ για να επεξεργαστείτε  την ομάδα του μέλους%s',
	
	'CONTINUE_EDIT_USER'		=> '%1$sΠατήστε εδώ για διαχείριση του/της %2$s’s προφίλ%3$s', // e.g.: Πατήστε εδώ για διαχείριση Joe’s προφίλ.
	'LOG_USER_ADDED'			=> '<strong>Το νέο μέλος δημιουργήθηκε</strong><br />» %s',
	
	'acl_a_add_user'			=> array('lang' => 'Μπορεί να δημιουργήσει λογαριασμό νέου μέλους', 'cat' => 'user_group'),
));

?>