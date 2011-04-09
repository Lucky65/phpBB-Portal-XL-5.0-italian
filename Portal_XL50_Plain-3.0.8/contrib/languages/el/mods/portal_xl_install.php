<?PHP
/** 
*
* portal_xl_install.php [Greek-el]
*
* @package language for phpBB3 Portal XL
* @version $Id: portal_xl_install.php,v 1.0 2008/05/13 11:20:00 damysterious Exp $
* @copyright (c) 2008 DaMysterious
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
	// Portal XL Convert Procedure
	'PORTAL_CONVERT'				=> 'Μετατρέποντας Portal XL',
	'PORTAL_CONVERT_BASIC_FINISHED'	=> 'Οι πίνακες της βάσης δεδομένων είναι τώρα ενημερωμένοι για το νέο κείμενο λειτουργίες του phpBB 3.<br />Το σενάριο δεν θα μετατρέψει το κείμενο από μόνο του.<br /><br />Για να αποφευχθούν τα λάθη και οι δυσλειτουργίες “timeout” κατά την μετατροπή των κειμένων, το script θα κάνει μόνιμα επανεκκίνηση. Παρακαλώ μην κλείσετε το πρόγραμμα περιήγησης, μέχρι το σενάριο να ολοκληρώσει τη μετατροπή.<br /><br />Αλλά αν διακοπεί αυτή η διαδικασία, επανεκκινήστε ξανά τη δέσμη ενεργειών για να συνεχίσετε.<br /><br />Παρακαλώ να είστε υπομονετικοί, ενώ το σενάριο θα μετατρέψει το κείμενο, περιμένετε το μήνυμα της λήξης, επειδή επιπλέον, για τον αριθμό των κειμένων που πρέπει να μετατραπούν, η δέσμη ενεργειών μπορεί να πάρει μερικά λεπτά για να κάνει όλη τη δουλειά.',
	'PORTAL_CONVERT_DATABASE'		=> 'Μετατροπή της βάσης δεδομένων',
	'PORTAL_CONVERT_NOT_POSSIBLE'	=> '<strong>Η μετατροπή δεν είναι δυνατή!</strong><br /><br />Αυτή η έκδοση του Portal XL δεν μπορεί να μετατραπεί σε πύλη XL 4,0 Premod καθώς δεν φαίνεται να είναι σχετικά με τις συνιστάμενες καταστάσεις.<br /><br />Η θέση πρέπει να έχει ως ελάχιστο Portal XL <strong>Premod RC2</strong><br />Το τρέχον κείμενο μεταφέρει Portal XL <strong>%1$s</strong>.<br /><br />Εάν σας κάνει release την διενέργεια τουλάχιστον στο Portal XL Premod RC2, θα είστε σε θέση να ενημερώσετε κατόπιν.',
	'PORTAL_CONVERT_PROCEDURE'		=> 'Αυτή τη στιγμή %1$s γίνεται %2$ η ενημέρωση των δεδομένων.<br /><br />Παρακαλώ κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε ή μπορείτε να περιμένετε λίγο μέχρι την επανεκκίνηση.',
	'PORTAL_CONVERT_TODO'			=> 'Από εδώ για όλους τους υφιστάμενους πίνακες στην βάση δεδομένων με χρήση Portal XL 5,0 Plain, θα μετατρέπονται με την τελευταία ροή της εργασίας του Portal XL 4,0 Premod RC5.<br /><br />Για να ξεκινήσει η διαδικασία μετατροπής, κάντε κλικ στο κουμπί παρακάτω.<br /><br />Παρακαλώ να είστε υπομονετικοί, επειδή μπορεί να πάρει κάποιο χρόνο η όλη διαδικασία με τον αριθμό των μετατροπών να κάνει.',
	'PORTAL_FINAL_CONVERT_STEP'		=> 'Η μετατροπή όλων των υφιστάμενων πινάκων στη βάση δεδομένων με χρήση Portal XL τελείωσε.<br />Για να ολοκληρώσετε τη διαδικασία και την πλήρη χρήση του MOD, στο τέλος υπάρχει ένα τελευταίο βήμα που πρέπει να κάνετε. Κάντε κλικ στο παρακάτω κουμπί για να κάνετε αυτό το τελευταίο μέρος.',

	// Portal XL Installation Procedure
	'PORTAL_INSTALL'				=> 'Εγκατάσταση Portal XL',

	'PORTAL_INSTALL_EXPLAIN'		=> '<p>Καλώς ήρθατε στο Portal XL Installation Wizard<br />Αυτή είναι η εγκατάσταση του Portal XL. Η αρχική παράφρων τρελή πύλη σας για phpBB3.</p> 
	<p>Προκειμένου για να λειτουργήσει αυτή η εγκατάσταση με επιτυχία, κάντε τις ακόλουθες διαδικασίες που συνιστώνται:</p>
	<ul>
		<li>Βεβαιωθείτε ότι κάνατε αντίγραφο / upload του αρχείου από όλα τα περιεχόμενα του καταλόγου <strong><span style="color:#FF0000;">\root\</span></strong> στο phpBB 3.0 x root π.χ. <strong><span style="color:#FF0000;">\forum\</span></strong> μόνο (το κάνατε ήδη)!</li>
	</ul>
	<ul>
		<li><em><strong><span style="color:#009900;">Φάκελος δικαιωμάτων CHMOD</span></strong></em><br />
		<em>Μετά την εγκατάσταση θα πρέπει να ελέγξετε όλα τα CHMOD\'s αρχεία και καταλόγους για *NIX όπου σχετίζονται διακομιστές.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> μέσα σε</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> μέσα σε</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> μέσα σε</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	<p>Για να ξεκινήσει η εγκατάσταση επιλέξτε Ναι και πατήστε το κουμπί.</p>',
	
	'PORTAL_INSTALL_NEXT'			=> 'Οι πίνακες της βάσης δεδομένων δημιουργήθηκαν επιτυχώς.<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να εκτελέσετε το επόμενο βήμα για την εγγραφή των προεπιλεγμένων τιμών, σε αυτούς τους πίνακες.',
	'PORTAL_INSTALL_FINISHED'		=> 'Η εγκατάσταση του Portal XL τελείωσε',
	'PORTAL_INSTALL_INTRO'			=> 'Καλώς ήρθατε στην εγκατάσταση του Portal XL',

	'PORTAL_INSTALL_FINISHED_EXPLAIN'	=> '
		<p>Έχετε εγκαταστήσει επιτυχώς το Portal XL 5,0 %1$s. Από εδώ, έχετε αρκετές επιλογές ως προς το τι να κάνετε με το μόλις εγκατεστημένο Portal XL:</p>
		<p><strong style="text-transform: uppercase; font-size:13px; color: #FF0000;">Σημείωση:</strong></span><br /><br /><span style="font-size:13px; color: #FF0000;">Προτού προχωρήσουμε θα πρέπει να έχετε κάνει αντιγραφή / upload όλα τα περιεχόμενα μέσα από το Portal XL, κύριο αρχείο ευρετηρίου <strong>\root\</strong> στο root του φόρουμ σας.</span></p>
		<h2>Συνδεθείτε ζωντανά με το Portal XL!</h2>
		<p>Κάνοντας κλικ στο κουμπί παρακάτω θα σας πάει στον Πίνακα Ελέγχου (ACP). Κλέψτε λίγο χρόνο για να εξετάσετε τις επιλογές που έχετε στη διάθεσή σας. Να θυμάστε ότι η βοήθεια είναι διαθέσιμη σε απευθείας σύνδεση μέσω του <a href="http://www.portalxl.nl/forum/">Portal XL Home</a> και της <a href="http://www.portalxl.nl/forum/viewforum.php?f=1">τεχνικής υποστήριξης φόρουμ</a> για το Portal XL 4.0 Premod RC5, ή <a href="http://www.portalxl.nl/forum/viewforum.php?f=44"></a> για το Portal XL 5.0 Plain.</p><p><strong>Παρακαλώ τώρα διαγράψτε, μετακινήστε ή κάντε μετονομασία τον φάκελο “install”της εγκατάστασης, προτού χρησιμοποιήσετε τον πίνακά σας. Αν αυτός ο κατάλογος είναι ακόμη παρόν, μόνο η διοίκηση από τον Πίνακα Ελέγχου (ACP) θα είναι προσιτή.</strong></p>',

	'PORTAL_INSTALL_NOT_POSSIBLE'	=> '<strong>Η εγκατάσταση δεν είναι δυνατή!</strong><br /><br />Στο σενάριο βρέθηκε μια υπάρχουσα εγκατάσταση, οπότε δεν μπορείτε να χρησιμοποιήσετε την εγκατάσταση script ξανά.',

	'PORTAL_OVERVIEW_BODY'			=> 'Αυτή είναι η νεότερη <strong>Δωρεάν</strong> έκδοση του phpBB3 Portal XL η οποία είναι μια ευέλικτη και δυναμική λύση για την δικτυακή πύλη σας phpBB 3.0.x forum με πολλά μεγάλα και προηγμένα χαρακτηριστικά.<br /><br /> 
	Το Portal αυτό επιδιώκει να είναι ιδιαίτερα επεξεργάσιμο καθώς περιλαμβάνει ένα χρήσιμο ποσό των “addons”. Ταυτόχρονα, θα προσφέρει μια γρήγορη και αποτελεσματική εναλλακτική λύση σε άλλες σχετικές phpBB3 πύλες. Δεν υποστηρίζουμε ότι γινόμαστε ένα Portal ή ένα MOD αναφοράς για phpBB3 αλλά διατηρούμε για να είμαστε επαγγελματίες. Είμαστε για να διασκεδάζουμε στον ελεύθερο χρόνο μας “modding”, ακόμα και όταν προσπαθούμε να κάνουμε το καλύτερο δυνατό για να έχουμε μια επαγγελματική αναζήτηση ως ένα πακέτο με λίγα σφάλματα και χωρίς να χρειάζονται γνώσεις script που απαιτούνται από τον διαχειριστή.
	<p>Αξιοσημείωτα στοιχεία απελευθέρωσης phpBB3 Portal XL
	<ul>
		<li>Portal XL 5.0 RC4-Plain (26-02-2008 πρώτη προβολή Plain έκδοση από αίτημα χρήστη)</li>
		<li>Portal XL 5.0 Plain (12-04-2008)</li>
		<li>Portal XL 5.0 Plain 0.1 (31-05-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (31-10-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (01-06-2009) pbpBB 3.0.5</li>
		<li>Portal XL 5.0 Plain 0.2 (24-11-2009) pbpBB 3.0.6</li>
		<li>Portal XL 5.0 Plain 0.2 (02-03-2010) pbpBB 3.0.7</li>
		<li>Portal XL 5.0 Plain 0.2 (21-11-2010) pbpBB 3.0.8</li>
	</ul></p><br />Παρακαλώ, επιλέξτε από τις διαθέσιμες καρτέλες για το τι θέλετε να κάνετε.',
	
	'PORTAL_SQL_UPDATE_DONE'		=> '<strong>Έγινε δράση στη βάση δεδομένων:</strong><br />',
	'PORTAL_SUB_SUPPORT'			=> 'Γενική υποστήριξη του Portal',
	'PORTAL_SUPPORT_BODY'			=> 'Κατά τη διάρκεια της beta / δημόσια δοκιμή τύπου, περιορίζεται η υποστήριξη όπου θα είναι διαθέσιμη στο, <a href="http://www.portalxl.nl/forum/" target="_blank">damysterious.xs4all.nl</a>, αυτό είναι επίσης και η έκθεση για το δικτυακό Portal που σχετίζεται με σφάλματα. Λάβετε υπόψη ότι θα είναι περιορισμένη υποστήριξη, και ότι θα στηρίξει μόνο την τελευταία beta / δοκιμή τύπου, που έχει εγκατασταθεί με την υποστηριζόμενη phpBB3 έκδοση. <br /><br />Είμαστε σε θέση να γνωρίζουμε τι αλλάζει / modded με τις υπάρχουσες phpBB3 εγκαταστάσεις, δεν μπορούμε με κανένα τρόπο όμως να υποστηρίξουμε προσαρμοσμένες αλλαγές. Θυμηθείτε, η χρήση αυτού του πακέτου μπορεί να οδηγήσει το να χάσετε ήδη τον αλλαγμένο κωδικό ή να προστεθούν mods.',

	// Portal XL Update Procedure
	'PORTAL_UPDATE'					=> 'Ενημέρωση του Portal XL',
	'PORTAL_UPDATE_SUCCESS'			=> 'Συγχαρητήρια!<br />Η ενημέρωση των ρυθμίσεων της βάσης δεδομένων για το Portal XL τελείωσε.<br /><br />Μπορείτε τώρα να συνεχίσετε και να εγκαταστήσετε τα υπόλοιπα μέρη από την εγκατάσταση διδασκαλίας του Portal XL στο φόρουμ.<br /><br />Παρακαλώ διαγράψτε το φάκελο / install / από το root του φόρουμ σας, για να μπορέσει το φόρουμ να ενεργοποιηθεί και πάλι.',
	'PORTAL_UPDATE_BASIC_FINISHED'	=> 'Οι πίνακες της βάσης δεδομένων είναι τώρα ενημερωμένοι για το νέο κείμενο λειτουργίες του phpBB 3.<br />Το χειρόγραφο δεν θα μετατρέψει το κείμενο.<br /><br />Για να αποφευχθούν τα λάθη “timeout” και οι δυσλειτουργίες, κατά την μετατροπή των κειμένων, το script θα κάνει μόνιμα επανεκκίνηση. Παρακαλώ μην κλείσετε το πρόγραμμα περιήγησης, μέχρι το σενάριο να έχει ολοκληρώσει τη μετατροπή.<br /><br />Αλλά αν διακοπεί αυτή η διαδικασία, κάντε ξανά επανεκκίνηση τη δέσμη των ενεργειών για να συνεχίσετε.<br /><br />Παρακαλώ να είστε υπομονετικοί, ενώ το “script” θα μετατρέψει τα κείμενα και περιμένετε το μήνυμα της λήξης, επειδή επιπλέον για τον αριθμό των κειμένων που πρέπει να μετατραπούν, η δέσμη ενεργειών μπορεί να πάρει μερικά λεπτά για να ολοκληρωθεί.',
	'PORTAL_UPDATE_DATABASE'		=> 'Ενημέρωση βάσης δεδομένων για το Portal XL',
	'PORTAL_UPDATE_NOT_POSSIBLE'	=> '<strong>Η ενημέρωση δεν είναι δυνατή!</strong><br /><br />Αυτή η έκδοση του Portal XL δεν μπορεί να ενημερωθεί, καθώς φαίνεται να μην είναι στο συνιστάμενο μέρος.<br /><br />Το τρέχον κείμενο μεταφέρει την Portal XL 5,0 έκδοση <strong>%1$s</strong>',
	'PORTAL_UPDATE_PROCEDURE'		=> 'Αυτή τη στιγμή %1$s γίνεται %2$ η ενημέρωση των δεδομένων.<br /><br />Παρακαλώ κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε ή περιμένετε λίγο μέχρι την επανεκκίνηση.',
	'PORTAL_UPDATE_TODO'			=> 'Από εδώ σε όλη την υπάρχουσα βάση δεδομένων οι πίνακες βρίσκονται σε λειτουργία από το Portal XL και θα ενημερωθεί με την πιο πρόσφατη ροή της εργασίας.<br /><br />Για να ξεκινήσει η διαδικασία της ενημέρωσης, κάντε κλικ στο παρακάτω κουμπί.<br /><br />Παρακαλώ να είστε υπομονετικοί, ενώ τη διαδικασία μπορεί να διαρκέσει μερικά λεπτά εξαιτίας τού αριθμού των ενημερώσεων που κάνει.',
	'PORTAL_FINAL_UPDATE_STEP'		=> 'Οι υφιστάμενοι πίνακες του Portal XL είναι πλέον ενημερωμένοι.<br />Για να έχετε σωστά εμφανιζόμενα κείμενα στο φόρουμ σας της βάσης δεδομένων πρέπει να μετατραπούν τώρα<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε τώρα με τη μετατροπή.',

	// Portal XL Remove Database Entries Procedure
	'PORTAL_REMOVE'					=> 'Το Portal XL αφαιρέθηκε',
	'PORTAL_REMOVE_NOT_POSSIBLE'	=> '<strong>Η αφαίρεση δεν είναι δυνατή!</strong><br /><br />Η νέα έκδοση αυτού του Portal: <strong>%1$s</strong><br /><br />Το Portal XL πρέπει τουλάχιστον να έχει άφεση <strong>%1$s</strong>, για να είναι σε θέση να αφαιρέσει όλους τους πίνακες της βάσης δεδομένων.<br /><br />Παρακαλώ ενημερώστε το Portal χειροκίνητα για αυτή την έκδοση, για να μπορέσετε να χρησιμοποιήσετε αυτήν τη δέσμη ενεργειών ξανά.',
	'PORTAL_REMOVE_SUCCESS'			=> 'Συγχαρητήρια!<br />Η κατάργηση της βάσης δεδομένων από το Portal XL τελείωσε.<br /><br />Μπορείτε τώρα να προχωρήσετε στην άρση των υπολοίπων μερών του Portal XL από το φόρουμ σας.<br /><br />Παρακαλώ διαγράψτε το φάκελο / install / από το root του φόρουμ σας, για να μπορέσει το φόρουμ να ενεργοποιηθεί και πάλι.',

	'PORTAL_REMOVE_TODO'			=> 'Το Portal XL θα αφαιρεθεί από τη βάση δεδομένων σας, είναι πιο ασφαλή να διαγράψετε όλα τα αρχεία που σχετίζονται με το Portal XL, καθώς υπάρχουν αρχεία (σε σχέση με το root), εάν αυτό το βήμα ολοκληρωθεί:
	<ul>
		<li>στο φάκελο <span style="color:#009900;">/adm/style/</span> διαγράψτε όλα <span style="color:#FF0000;">acp_portal*.html</span>.</li>
		<li>στο φάκελο <span style="color:#009900;">/includes/acp/</span> διαγράψτε όλα <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>στο φάκελο <span style="color:#009900;">/includes/acp/info/</span> διαγράψτε όλα <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>στο φάκελο <span style="color:#009900;">/language/en/</span> διαγράψτε <span style="color:#FF0000;">portal.php</span></li>
		<li>στο φάκελο <span style="color:#009900;">/language/en/acp/</span> διαγράψτε όλα <span style="color:#FF0000;">portal_*.php</span></li>
		<li>στο φάκελο <span style="color:#009900;">/language/en/mods/</span> διαγράψτε <span style="color:#FF0000;">portal_xl_average_statistics.php</span></li>
		<li>διαγράψτε τον κύριο φάκελο <span style="color:#009900;">/portal/</span></strong></li>
		<li>διαγράψτε όλους <span style="color:#009900;">/portal/</span> τους φακέλους (το κάνουμε αυτό για κάθε εγκατεστημένο στυλ) υπό <span style="color:#009900;">/styles/stylename/template/</span></li>
		<li>αντικαταστήστε στο root <span style="color:#FF0000;">.htaccess</span> από το αρχικό phpBB 3.0.x, αφαιρέστε <span style="color:#FF0000;">portal.php</span>, <span style="color:#FF0000;">portal_pages.php</span> and <span style="color:#FF0000;">robots.txt</span>.</li>
		<li>συμπληρωματικά για τα παραπάνω, όλα τα εγκατεστημένα bbcodes θα διαγραφούν.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Σημείωση:</strong> Πριν προβεί εκ νέου και μεταφορτώσετε ένα πρωτότυπο phpBB 3.0.x διανομής να αντικαταστήσετε τα αρχεία που έχουν μεταβληθεί κατά τη χρήση του Portal XL, αλλά έχετε κατά νου, πριν μεταφορτώσετε τα πάντα, να βεβαιωθείτε ότι έχουν αφαιρεθεί από τον φάκελο <span style="color:#009900;">/install/</span> και το αρχείο <span style="color:#FF0000;">config.php</span> από το αρχικό phpBB 3.0.x πακέτο.</p>
	<p>Σας ευχαριστούμε για τη χρήση του Portal XL.</p><br /><br />',
	
	'PORTAL_SQL_REMOVE_DONE'		=> '<strong>Έγινε δράση στη βάση δεδομένων:</strong><br />',
	'PORTAL_FINAL_REMOVE_STEP'		=> 'Όλες οι υφιστάμενες εγγραφές της βάσης δεδομένων και χρήση από τους πίνακες του Portal XL έχουν αφαιρεθεί<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε ή να περιμένετε μερικά δευτερόλεπτα για να ανακατευθύνει αυτόματα στο επόμενο βήμα.',
	'REMOVE_DATABASE'				=> 'Προχωρήστε για διαγραφή',
	'STAGE_REMOVE_DB'				=> 'Αφαίρεση Database',

	// Portal XL CHMOD Directories
	'PORTAL_CHMOD'					=> 'Portal XL CHMOD',
	'PORTAL_CHMOD_NOT_POSSIBLE'		=> '<strong>CHMOD αδύνατο</strong><br /><br />Η νέα έκδοση αυτού του Portal: <strong>%1$s</strong><br /><br />Το Portal XL πρέπει τουλάχιστον να έχει άφεση <strong>%1$s</strong>, για να είναι σε θέση να "CHMOD" όλων των καταλόγων που χρησιμοποιούνται από Portal XL.<br /><br />Παρακαλώ ενημερώστε το Portal χειροκίνητα για αυτή την έκδοση, για να μπορέσετε να χρησιμοποιήσετε αυτήν τη δέσμη ενεργειών ξανά.',
	'PORTAL_CHMOD_SUCCESS'			=> 'Συγχαρητήρια!<br />CHMOD σε φακέλους και αρχεία που ήταν επιτυχής.',

	'PORTAL_CHMOD_TODO'				=> 'Portal XL οδηγός εγκατάστασης θα προσπαθήσει να γίνει CHMOD / μετονομασία στους παρακάτω καταλόγους ή αρχεία σας, για την προσχώρηση, εάν έχει χορηγηθεί για μια τέτοια διαδικασία, από την εταιρεία που φιλοξενεί:
	<ul>
		<li><em><strong><span style="color:#009900;">Φάκελος δικαιωμάτων CHMOD</span></strong></em><br />
		<em>Μετά την εγκατάσταση θα πρέπει να ελέγξετε όλες CHMOD σε αρχεία και καταλόγους για * NIX  που σχετίζονται διακομιστές.</em><br />
		Ο οδηγός θα προσπαθήσει να γίνει CHMOD καταλόγους που αναφέρονται παρακάτω, για εσάς.<br /><br />
		
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> μέσα σε</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0666</span> μέσα σε</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0777</span> μέσα σε</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li><br />
		<li><em><strong><span style="color:#009900;">Μετονομασία Directory </span></strong></em><br />
		<em>Μετά την εγκατάσταση θα πρέπει να ελέγξετε για να διαγράψετε, να μετονομάσετε ή να μετακινήσετε το φάκελο <strong>/install/</strong> στο διακομιστή σας, όταν είναι έτοιμα.</em><br />
		Ο οδηγός θα προσπαθήσει να μετονομάσει <strong>/install/</strong> σε <strong>/_install/</strong> για σας.<br /><br />
		</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Σημείωση:</strong> Ως συνήθως, πριν από τη διαδικασία έχετε πρόσφατα backup των αρχείων σας.</p><br /><br />',

	'PORTAL_CHMOD_DONE'			=> '<strong>Έγινε δράση στη βάση δεδομένων:</strong><br />',
	'PORTAL_FINAL_CHMOD_STEP'	=> 'Όλοι οι υπάρχοντες κατάλογοι και αρχεία που χρησιμοποιούνται από το Portal XL CHMOD.<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε ή να περιμένετε μερικά δευτερόλεπτα για να ανακατευθύνει αυτόματα στο επόμενο βήμα.',
	'PORTAL_CHMOD_FILES'		=> 'Συνεχίστε να γίνει CHMOD',

	'STAGE_CHMOD_FILES'			=> 'CHMOD σε δράση...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">Φάκελος δικαιωμάτων CHMOD</span></strong></em><br />
		<em>Μετά τις CHMOD δράσεις θα πρέπει να ελέγξετε όλα CHMOD σε αρχεία και καταλόγους για *NIX που σχετίζονται με διακομιστές.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> μέσα σε</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> μέσα σε</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	Αφού πατήσετε το κουμπί που δεν θα είναι σε θέση για πρόσβαση στην εγκατάσταση  πια, όπου αυτό οφείλεται στην μετονομασία του φακέλου <strong>/install/</strong> σε <strong>/_install/</strong>. Αν χρειαστεί ο εγκαταστάτης μετονομάστε ξανά το φάκελο <strong>/_install/</strong> από την πρόσβαση ή την μετονομασία άμεσα σε directory.<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε.',

	// Portal XL BBCODE Import
	'PORTAL_BBCODE'					=> 'Portal XL Custom bbCode',
	'PORTAL_BBCODE_NOT_POSSIBLE'		=> '<strong>Η προσθήκη δικών σας bbCodes δεν είναι δυνατή!</strong><br /><br />Η νέα έκδοση αυτού του Portal: <strong>%1$s</strong><br /><br />Το Portal XL πρέπει τουλάχιστον να έχει άφεση <strong>%1$s</strong>, για να είναι σε θέση τα BBCODE να χρησιμοποιούνται από όλους τους καταλόγους Portal XL.<br /><br />Παρακαλώ ενημερώστε το Portal χειροκίνητα για αυτή την έκδοση, για να μπορέσετε να χρησιμοποιήσετε αυτήν τη δέσμη ενεργειών ξανά.',
	'PORTAL_BBCODE_SUCCESS'			=> 'Συγχαρητήρια!<br />Η προσθήκη των προσαρμοσμένων bbCodes στη βάση δεδομένων ήταν επιτυχής.',

	'PORTAL_BBCODE_TODO'				=> 'Καλώς ήρθατε στο Portal XL custom bbCode Installation Wizard.<br /><br />To Portal XL θα εγκαταστήσει τα bbCodes στην προσαρμοσμένη βάση δεδομένων σας:
	<ul>
		<li><span style="color:#009900;">Εισάγετε spoiler: [spoiler]your text here[/spoiler]</span></li>
		<li><span style="color:#009900;">Εισάγετε iframe: [iframe]http://url.here[/iframe]</span></li>
		<li><span style="color:#009900;">Εισάγετε youtube: [youtube]videonumber[/youtube]</span></li>
		<li><span style="color:#009900;">Εισάγετε GVideo: [GVideo]videonumber[/GVideo]</span></li>
		<li><span style="color:#009900;">Εισάγετε myvideo: [myvideo]videonumber[/myvideo]</span></li>
		<li><span style="color:#009900;">Εισάγετε clipfish: [clipfish]videonumber[/clipfish]</span></li>
		<li><span style="color:#009900;">Εισάγετε myspace: [myspace]videonumber[/myspace]</span></li>
		<li><span style="color:#009900;">Εισάγετε gametrailers: [gametrailers]trailernumber[/gametrailers]</span></li>
		<li><span style="color:#009900;">Εισάγετε center: [center]your text[/center]</span></li>
		<li><span style="color:#009900;">Εισάγετε strike: [strike]your text[/strike]</span></li>
		<li><span style="color:#009900;">Εισάγετε bgcolor: [bgcolor=red]your text[/bgcolor]</span></li>
		<li><span style="color:#009900;">Εισάγετε hidden link: [hiddenlink=http//url.her]your text[/hiddenlink]</span></li>
		<li><span style="color:#009900;">Εισάγετε offtopic: [offtopic]your text[/offtopic]</span></li>
		<li><span style="color:#009900;">Εισάγετε marquee: [marquee=color here]your text[/marquee]</span></li>
		<li><span style="color:#009900;">Εισάγετε intended text: [tab=number here]your text[/tab]</span></li>
		<li><span style="color:#009900;">Εισάγετε align: [align=direction]your text[/align]</span></li>
		<li><span style="color:#009900;">Ευθυγραμμίστε Image Left: [img_l]http://img_url[/img_l]</span></li>
		<li><span style="color:#009900;">Ευθυγραμμίστε Image Right: [img_r]http://img_url[/img_r]</span></li>
		<li><span style="color:#009900;">Εισάγετε mailto: [mail=e-mail addres]e-mail addres[/mail]</span></li>
		<li><span style="color:#009900;">Εισάγετε spoiler center align: [spoil]your text here[/spoil]</span></li>
		<li><span style="color:#009900;">Εισάγετε spoiler left align: [spoil_l]your text here[/spoil_l]</span></li>
		<li><span style="color:#009900;">Εισάγετε horizontal ruler: [hr][/hr]</span></li>
		<li><span style="color:#009900;">Εισάγετε line break: [br][/br]</span></li>
		<li><span style="color:#009900;">Εισάγετε WMV: [wmv]http://wmv_url[/wmv]</span></li>
		<li><span style="color:#009900;">Εισάγετε super script: [sup]your text[/sup]</span></li>
		<li><span style="color:#009900;">Εισάγετε Flash video: [flash_i]your url[/flash_i]</span></li>
		<li><span style="color:#009900;">Εισάγετε stream: [stream]your url[/stream]</span></li>
		<li><span style="color:#009900;">Εισάγετε FLV: [flv]your url[/flv]</span></li>
		<li><span style="color:#009900;">Εισάγετε Real Media: [rm]your url[/rm]</span></li>
		<li><span style="color:#009900;">Εισάγετε MOV: [mov]your url[/mov]</span></li>
	</ul>
	<p><strong style="text-transform: uppercase;">Σημείωση:</strong> Ως συνήθως, πριν από τη διαδικασία έχετε πρόσφατα αντίγραφα ασφαλείας της βάσης δεδομένων σας.</p><br /><br />',

	'PORTAL_SQL_BBCODE_DONE'			=> '<strong>Έγινε δράση της βάσης δεδωμένων:</strong><br />',
	'PORTAL_FINAL_BBCODE_STEP'		=> 'Ενημέρωση των bbCodes στη βάση δεδομένων.<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε.',
	'BBCODE_DATABASE'				=> 'Προχωρήστε στο BBCODE',

	'STAGE_BBCODE_DB'				=> 'BBCODE σε δράση...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">Φάκελος δικαιώματα BBCODE</span></strong></em><br />
		<em>Μετά τις CHMOD δράσεις θα πρέπει να ελέγξετε όλα CHMOD σε αρχεία και καταλόγους για *NIX που σχετίζονται με διακομιστές.</em><br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">0644</span> μέσα σε</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">666</span> μέσα σε</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">755</span> μέσα σε</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	Αφού πατήσετε το κουμπί που δεν θα είναι σε θέση για πρόσβαση στην εγκαταστάτη πια, όπου αυτό οφείλεται στην μετονομασία του φακέλου <strong>/install/</strong> σε <strong>/_install/</strong>. Αν χρειαστεί ο εγκαταστάτης μετονομάστε ξανά το φάκελο <strong>/_install/</strong> από την πρόσβαση ή την μετονομασία άμεσα σε directory.<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε.',

   'PORTAL_FINAL_MODULE_STEP'		=> 'Ενημέρωση της βάσης δεδομένων στις ενότητες του πίνακα.<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε.',
   'PORTAL_FINAL_CONFIGFILE_STEP'	=> 'Ενημέρωση από το αρχείο config.php σας στο forum root του σετ.<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να συνεχίσετε.',
   'PORTAL_SQL_MODULE_DONE'			=> '<strong>Έγινε δράση στη βάση δεδομένων:</strong><br />',

   'STAGE_INSERT_DATA'				=> 'Τοποθετήστε τις προκαθορισμένες τιμές',
   'STAGE_POPULATE_DB'				=> 'Οι πίνακες της βάσης δεδομένων είναι διαθέσιμοι.<br /><br />Κάντε κλικ στο κουμπί παρακάτω για να συμπληρώσετε τους πίνακες δεδομένων.',
   'STAGE_CHMOD'					=> 'Aρχεία CHMOD',
   'STAGE_BBCODE'					=> 'Εισαγωγή BBcode',
   'STAGE_INSERT_MODULES'			=> 'Eισάγετε Ενότητες',
   'PORTAL_NOT_INSTALLED'			=> 'Δεν βρέθηκε η εγκατάσταση του Portal',
   'PORTAL_NOT_INSTALLED_EXPLAIN'	=> 'Η προεπιλεγμένη εγκατάσταση του Portal XL απαιτείται, παρακαλούμε <a href="%s">προχωρήστε με την πρώτη εγκατάσταση του Portal XL</a>.',

	// Portal XL version check
	'VERSION_CHECK'					=> 'Έλεγχος έκδοσης',
	'VERSION_CHECK_EXPLAIN'			=> 'Έλεγχοι για να δείτε αν η έκδοση του Portal XL σας είναι ήδη σε εξέλιξη.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Η εγκατάσταση είναι αναβαθμισμένη, δεν υπάρχουν διαθέσιμες ενημερωμένες εκδόσεις για την έκδοση του Portal XL. Δεν χρειάζεται να ενημερώσετε την εγκατάσταση.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Η έκδοση του Portal XL δεν είναι ενημερωμένη.<br />Παρακάτω θα βρείτε ένα σύνδεσμο με την ανακοίνωση για την αποδέσμευση της τελευταίας έκδοσης, καθώς και οδηγίες για το πώς να εκτελέσετε την ενημερωμένη έκδοση.',
	'CURRENT_VERSION'				=> 'Τρέχουσα έκδοση',
	'LATEST_VERSION'				=> 'Τελευταία έκδοση',
	'UPDATE_INSTRUCTIONS'			=> '
		<h2>Πώς να ενημερώσετε τα στοιχεία σας με την εγκατάσταση του τελευταίου πακέτου</h2>

		<p>Ο συνιστώμενος τρόπος ενημέρωσης της εγκατάστασης που αναφέρεται εδώ ισχύει μόνο για το τελευταίο πακέτο. Μπορείτε επίσης να ενημερώσετε την εγκατάσταση, χρησιμοποιώντας τις μεθόδους που αναφέρονται στο πλαίσιο του \ docs \ PORTAL_XL_INSTALL.html έγγραφο. Τα βήματα για την ενημέρωση Portal XL είναι:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Μεταβείτε στη <a href="http://www.portalxl.nl/forum/" title="http://www.portalxl.nl/forum/">σελίδα λήψεων του Portal XL</a> και κατεβάστε το αρχεία "Τελευταίο Πακέτο".<br /></li>
			<li>Εκβάλλετε το αρχείο.<br /></li>
			<li>Φορτώστε το πλήρες \ root \ φάκελο (διατηρούν τη δομή) στο phpBB root directory (όπου το αρχείο config.php).<br /></li>
			<li>Περιήγηση στο \ install \ index.php για να ξεκινήσει η εγκατάσταση script και επιλέξετε την καρτέλα "Ενημέρωση"<br /></li>
			<li>Ανανέωση της μνήμης cache και των στυλ (s), όταν γίνει!<br /></li>
		</ul>
	',

));
?>