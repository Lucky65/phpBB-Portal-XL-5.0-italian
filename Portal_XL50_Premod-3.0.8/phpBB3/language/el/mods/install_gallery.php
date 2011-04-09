<?php
/**
*
* install_gallery [Greek]
*
* @package phpBB Gallery
* @version $Id: install_gallery.php 126 2009-06-09 14:52:22Z diastasi $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
* (http://thraki.info) diastasi
*
**/

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

$lang = array_merge($lang, array(
	'BBCODES_NEEDS_REPARSE'		=> 'Το BBCode πρέπει να επαναδημιουργηθεί.',

	'CAT_CONVERT'				=> 'Μετατροπή phpBB2',
	'CAT_CONVERT_TS'			=> 'Μετατροπή TS Gallery',
	'CAT_UNINSTALL'				=> 'phpBB Γκαλερί απεγκατάσταση',

	'CHECK_TABLES'				=> 'Ελεγχος πινάκων',
	'CHECK_TABLES_EXPLAIN'		=> 'Οι παρακάτω πίνακες πρέπει να υπάρχουν ώστε να μετατραπούν.',

	'CONVERT_SMARTOR_INTRO'		=> 'Μετατροπέας από „Album-MOD“ με το smartor σε „phpBB Gallery“',
	'CONVERT_SMARTOR_INTRO_BODY'	=> 'Με τον μετατροπέα αυτόν, μετατρέπετε τα άλμπουμ σας, εικόνες, αξιολογήσεις και σχόλια από <a href="http://www.phpbb.com/community/viewtopic.php?f=16&t=74772">Album-MOD</a> με το Smartor (δοκιμασμένο v2.0.56) και <a href="http://www.phpbbhacks.com/download/5028">Full Album Pack</a> (δοκιμασμένο v1.4.1) σε Γκαλερι phpBB.<br /><br /><strong>Σημείωση:</strong> Τα  <strong>δικαιώματα</strong>  <strong>δεν θα αντιγραφούν</strong>.',
	'CONVERT_TS_INTRO'			=> 'Μετατροπέας από „TS Gallery“ σε „phpBB Gallery“',
	'CONVERT_TS_INTRO_BODY'		=> 'Με τον μετατροπέα αυτόν, μετατρέπετε τα άλμπουμ σας, εικόνες, αξιολογήσεις και σχόλια από <a href="http://www.phpbb.com/community/viewtopic.php?f=70&t=610509">TS Gallery</a> (δοκιμασμένο v0.2.1) σε Γκαλερι phpBB.<br /><br /><strong>Σημείωση:</strong> Τα  <strong>δικαιώματα</strong>  <strong>δεν θα αντιγραφούν</strong>.',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Η μετατροπή από την γκαλερί σας σε Γκαλερί phpbb v%s ήταν επιτυχής.<br />Παρακαλώ βεβαιωθείτε ότι οι ρυθμίσεις μεταφέρθηκαν σωστά πριν ενεργοποιήσετε ξανά το φόρουμ σας διαγράφοντας τον φάκελλο εγκατάστασης.<br /><br /><strong>Σημείωση: Τα δικαιώματα δεν αντιγράφηκαν.</strong><br /><br />Επίσης πρέπει να καθαρίσετε την Β.Δεδομένων σας από κατάλοιπα σβησμένων εικόνων. Αυτό γίνεται στο ".MODs > phpBB Γκαλερί > Καθαρισμός Γκαλερί".',

	'CONVERTED_ALBUMS'			=> 'Τα άλμπουμ έχουν αντιγραφεί επιτυχώς.',
	'CONVERTED_COMMENTS'		=> 'Τα σχόλια έχουν αντιγραφεί επιτυχώς.',
	'CONVERTED_IMAGES'			=> 'Οι εικόνες έχουν αντιγραφεί επιτυχώς.',
	'CONVERTED_MISC'			=> 'Διάφορα πράγματα μετατράπηκαν.',
	'CONVERTED_PERSONALS'		=> 'Τα προσωπικά έλμπουμ έχουν αντιγραφεί επιτυχώς.',
	'CONVERTED_RATES'			=> 'Οι αξιολογήσεις έχουν αντιγραφεί επιτυχώς.',
	'CONVERTED_RESYNC_ALBUMS'	=> 'Επανασυγχρονισμός στατιστικών άλμπουμ.',
	'CONVERTED_RESYNC_COMMENTS'	=> 'Επανασυγχρονισμός σχολίων.',
	'CONVERTED_RESYNC_COUNTS'	=> 'Επανασυγχρονισμός μετρητών εικόνων.',
	'CONVERTED_RESYNC_RATES'	=> 'Επανασυγχρονισμός αξιολογήσεων.',

	'FILE_DELETE_FAIL'				=> 'Το αρχείο δεν διαγράφηκε, πρέπει να το διαγράψετε χειροκίνητα',
	'FILE_STILL_EXISTS'				=> 'Το αρχείο υπάρχει ακόμη',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Απαραίτητο</strong> - Για να λειτουργήσει σωστά η γκαλερί πρέπει να μπορεί να έχει πρόσβαση/δικαίωμα εγγραφής σε συγκεκριμένους φακέλους ή αρχεία. Εάν δείτε "Μη εγγράψιμο" πρέπει να αλλάξετε τα δικαιώματα του φακέλου ή αρχείου για να επιτραπεί στο phpBB να κάνει εγγραφές σε αυτό.',
	'FILES_DELETE_OUTDATED'			=> 'Διαγραφή παλαιών αρχείων',
	'FILES_DELETE_OUTDATED_EXPLAIN'	=> 'Οταν κάνετε κλικ για διαγραφή αρχείων, δεν θα μπορέσουν να επαναφερθούν!<br /><br />Σημείωση:<br />Εάν έχετε άλλες γλώσσες και στύλ εγκατεστημένα, διαγράψτε τα αρχεία αυτά με το χέρι.',
	'FILES_OUTDATED'				=> 'Παλαιά αρχεία',
	'FILES_OUTDATED_EXPLAIN'		=> '<strong>Πεπαλαιωμένα</strong> - Για να αποτρέψετε προσπάθειες hacking, διαγράψτε τα παρακάτω αρχεία.',
	'FOUND_INSTALL'					=> 'Διπλή εγκατάσταση',
	'FOUND_INSTALL_EXPLAIN'			=> '<strong>Διπλή εγκατάσταση</strong> - Μία άλλη εγκατάσταση της γκαλερί έχει βρεθεί.! Εάν συνεχίσετε θα αντικαταστήσετε όλα τα υπάρχων δεδομένα. Όλα τα αλμπουμ, εικόνες και σχόλια θα διαγραφούν! <strong>Για αυτό μια %1$αναβάθμιση%2$s συνιστάται.</strong>',
	'FOUND_VERSION'					=> 'Η ακόλουθη έκδοση έχει βρεθεί',
	'FOUNDER_CHECK'					=> 'Εσείς είστε ο "Ιδρυτής" αυτής της Δ. Συζήτησης',
	'FOUNDER_NEEDED'				=> 'Πρέπει να είστε ο "Ιδρυτής" αυτής της Δ. Συζήτησης!',
	
	'INSTALL_CONGRATS_EXPLAIN'	=> '<p>Εχετε εγκαταστήσει επιτυχώς τη Γκαλερί phpBB v%s.<br/><br/><strong> Παρακαλώ διαγράψτε, μετακινήστε ή μετονομάστε τον φάκελο εγκατάστασης πρίν χρησιμοποιήσετε το φόρουμ σας. Εαν ο φάκελος αυτός συνεχίσει να υπάρχει, θα έχετε πρόσβαση μόνο στον πίνακα Διαχείρισης (ΠΕΔ).</strong></p>',
	'INSTALL_INTRO_BODY'		=> 'Με την επιλογή αυτή εγκαθιστάτε τη Γκαλερί phpBB στο φόρουμ σας.',

	'GOTO_GALLERY'				=> 'Πήγαινε στη Γκαλερί phpBB',
	'GOTO_INDEX'				=> 'Πήγαινε στο ευρετήριο Δ.Συζήτησης',

	'MISSING_CONSTANTS'			=> 'Πριν τρέξετε την εφαρμογή εγκατάστασης, πρέπει να ανεβάσετε τα επεξεργασμένα αρχεία σας, ειδικά το includes/constants.php.',
	'MODULES_CREATE_PARENT'		=> 'Δημιουργία γονικής στάνταρντ μονάδας',
	'MODULES_PARENT_SELECT'		=> 'Επιλογή γονικής μονάδας',
	'MODULES_SELECT_4ACP'		=> 'Επιλογή γονικής μονάδας για "Πίνακα ελέγχου Διαχειριστή"',
	'MODULES_SELECT_4LOG'		=> 'Επιλέξτε γονική μονάδα για τις "Καταγραφές Γκαλερί"',
	'MODULES_SELECT_4MCP'		=> 'Επιλογή γονικής μονάδας για "Πίνακα ελέγχου Συντονιστή"',
	'MODULES_SELECT_4UCP'		=> 'Επιλογή γονικής μονάδας για "Πίνακα ελέγχου Μέλους"',
	'MODULES_SELECT_NONE'		=> 'καμία γονική μονάδα',

	'NO_INSTALL_FOUND'			=> 'Δεν βρέθηκε εγκατάσταση!',	
	
	'OPTIONAL_EXIFDATA'				=> 'Function "exif_read_data" exists',
	'OPTIONAL_EXIFDATA_EXP'			=> 'The exif-module is not loaded or installed.',
	'OPTIONAL_EXIFDATA_EXPLAIN'		=> 'If the function exists, the exif data of the images are displayed on the imagepage.',
	'OPTIONAL_IMAGEROTATE'			=> 'Function "imagerotate" exists',
	'OPTIONAL_IMAGEROTATE_EXP'		=> 'You should update your GD Version, which is currently "%s".',
	'OPTIONAL_IMAGEROTATE_EXPLAIN'	=> 'If the function exists, you can rotate images while uploading and editing them.',

	'PAYPAL_DEV_SUPPORT'				=> '</p><div class="errorbox">
	<h3>Author Notes</h3>
	<p>Creating, maintaining and updating this MOD required/requires a lot of time and effort, so if you like this MOD and have the desire to express your thanks through a donation, that would be greatly appreciated. My Paypal ID is <strong>nickvergessen@gmx.de</strong>, or contact me for my mailing address.<br /><br />The suggested donation amount for this MOD is 25,00€ (but any amount will help).</p><br />
	<a href="http://www.flying-bits.org/go/paypal"><input type="submit" value="Make PayPal-Donation" name="paypal" id="paypal" class="button1" /></a>
</div><p>',

	'PHP_SETTINGS'				=> 'PHP settings',
	'PHP_SETTINGS_EXP'			=> 'These PHP settings and configurations are required for installing and running the gallery.',
	'PHP_SETTINGS_OPTIONAL'		=> 'Optional PHP settings',
	'PHP_SETTINGS_OPTIONAL_EXP'	=> 'These PHP settings are <strong>NOT</strong> required for normal usage, but will give some extra features.',
	
	'REQ_GD_LIBRARY'			=> 'Η βιβλιοθήκη GD είναι εγκατεστημένη',
	'REQUIREMENTS_EXPLAIN'		=> 'Πριν προχωρήσετε με την πλήρη εγκατάσταση το phpBB θα εκτελέσει κάποιες δοκιμές στην διαμόρφωση του διακομιστή σας και στα αρχεία για να βεβαιωθεί ότι μπορεί να εγκατασταθεί και να λειτουργήσει σωστά η γκαλερί. Διαβάστε προσεκτικά τα αποτελέσματα των δοκιμώνκαι μην προχωρήσετε εάν οι δοκιμές δεν επιτύχουν.',

	'STAGE_ADVANCED_EXPLAIN'	=> 'Επιλέξτε τη γονική μονάδα για τις μονάδες της γκαλερί. Σε κανονικές συνθήκες δε χρειάζεται να τις αλλάξετε.',
	'STAGE_COPY_TABLE'			=> 'Αντιγραφή πινάκων βάσης',
	'STAGE_COPY_TABLE_EXPLAIN'	=> 'Οι πίνακες βάσης για τα άλμπουμ και τα στοιχεία του χρήστη έχουν ίδιο όνομα στη TS Gallery και τη γκαλερί phpBB. Δημιουργούμε ένα αντίγραφο για να μπορεί να γίνει η μετατροπή.',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Οι πίνακες βάσης που χρησιμοποιούνται από τη γκαλερί phpBB έχουν δημιουργηθεί και ενημερωθεί με κάποια αρχικά δεδομένα. Προχωρήστε στην επόμενη οθόνη για την ολοκλήρωση της εγκατάστασης γκαλερί.',
	'STAGE_DELETE_TABLES'			=> 'Clean database',
	'STAGE_DELETE_TABLES_EXPLAIN'	=> 'Τα δεδομένα στην βάση για το Gallery-MOD έχουν διαγραφεί. Προχωρήστε στην επόμενη οθόνη για να ολοκληρώσετε την απεγκατάσταση phpBB Γκαλερί.',
	'SUPPORT_BODY'				=> 'Πλήρης υποστήριξη παρέχεται για την έκδοση αυτή της γκαλερί phpBB εντελώς δωρεάν. Περιλαμβάνεται:</p><ul><li>εγκατάσταση</li><li>ρύθμιση</li><li>τεχνικές ερωτήσεις</li><li>προβλήματα με τυχόν σφάλματα λογισμικού</li><li>αναβάθμιση από εκδόσεις Release Candidate (RC) σε τελευταίες σταθερές εκδόσεις</li><li>μετατροπή από Smartor Album-MOD για phpBB 2.0.x σε γκαλερί για phpBB3</li><li>μετατροπή από TS Gallery σε γκαλερί phpBB</li></ul><p>Η χρήση των εκδόσεων Beta προτείνεται  περιορισμένα. Εαν υπάρχουν αναβαθμίσεις, προτείνεται να αναβαθμίζετε γρήγορα.</p><p>Η υποστήριξη παρέχεται στα παρακάτω φόρουμ</p><ul><li><a href="http://www.flying-bits.org/">flying-bits.org - MOD-Autor nickvergessen\'s board</a></li><li><a href="http://www.phpbb.de/">phpbb.de</a></li><li><a href="http://www.phpbb.com/">phpbb.com</a></li></ul><p>',

	'TABLE_ALBUM'				=> 'ο πίνακας περιλαμβάνει τις εικόνες',
	'TABLE_ALBUM_CAT'			=> 'ο πίνακας περιλαμβάνει τα άλμπουμ',
	'TABLE_ALBUM_COMMENT'		=> 'ο πίνακας περιλαμβάνει τα σχόλια',
	'TABLE_ALBUM_CONFIG'		=> 'ο πίνακας περιλαμβάνει τη διαμόρφωση',
	'TABLE_ALBUM_RATE'			=> 'ο πίνακας περιλαμβάνει τις αξιολογήσεις',
	'TABLE_EXISTS'				=> 'υπάρχει',
	'TABLE_MISSING'				=> 'λείπει',
	'TABLE_PREFIX_EXPLAIN'		=> 'Prefix της εγκατάστασης phpBB2',

	'UNINSTALL_INTRO'					=> 'Καλώς ήρθατε στην απεγκατάσταση',
	'UNINSTALL_INTRO_BODY'				=> 'Με αυτήν την επιλογή, είναι δυνατών να απεγκαταστήσετε την phpBB Gallery από την Δ. Συζήτησή σας.<br /><br /><strong>ΠΡΟΣΟΧΗ: Όλα τα άλμπουμ,  εικόνες και σχόλια θα διαγραφούν οριστικά!</strong>',
	'UNINSTALL_REQUIREMENTS'			=> 'Απαίτηση',
	'UNINSTALL_REQUIREMENTS_EXPLAIN'	=> 'Πριν γίνει η οριστική διαγραφή από το phpBB θα γίνουν ορισμένες δοκιμές για να διαπιστωθεί ότι έχετε όλα τα δικαιώματα για να απεγκαταστήσετε την phpBB γκαλερί.',
	'UNINSTALL_START'					=> 'Απεγκατάσταση',
	'UNINSTALL_FINISHED'				=> 'Η απεγκατάσταση έχει σχεδόν τελειώσει',
	'UNINSTALL_FINISHED_EXPLAIN'		=> 'Απεγκαταστήσατε την phpBB γκαλερί επιτυχώς.<br/><br/><strong>Τώρα το μόνο που μένει να είναι να κάνετε ανάποδα τα βήματα από το install.xml και να διαγράψετε τα αρχεία της γκαλερί. Στην συνέχεια δεν θα υπάρχει η γκαλερί στην Δ. Συζήτησή σας. </strong>',

	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Εδώ μπορείτε να ενημερώσετε την έκδοση της  phpBB γκαλερί.',

	'VERSION_NOT_SUPPORTED'		=> 'Συγνώμη, αλλά η ενημέρωσή σας από  < 0.2.0 δεν υποστηρίζεται από αυτήν την έκδοση εγκατάστασης.',
));

?>