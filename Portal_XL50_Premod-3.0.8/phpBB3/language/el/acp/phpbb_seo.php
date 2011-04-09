<?php
/** 
*
* phpbb_seo [Greek]
*
* @package phpbb_seo
* @version $Id: phpbb_seo.php, 2007/08/30 13:48:48 fds Exp $
* @copyright (c) 2007 phpBB SEO
*
* Ελληνική μετάφραση από την ομάδα του phpbb2.gr:
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
$lang = array_merge($lang, array(
	// ACP Main CAT
	'ACP_CAT_PHPBB_SEO'	=> 'phpBB SEO',
	'ACP_MOD_REWRITE'	=> 'Ρυθμίσεις URL Rewriting',
	// ACP sub Cat
	'ACP_PHPBB_SEO_CLASS'	=> 'ρυθμίσεις κλάσης phpBB SEO',
	'ACP_PHPBB_SEO_CLASS_EXPLAIN'	=> 'Μπορείτε εδώ να αλλάξετε πολλές επιλογές του phpBB SEO mod rewrite.<br/>Οι διάφορες εξ ορισμού επιλογές όπως περιορισμοί και καταλήξεις πρέπει να ρυθμιστούν στο phpbb_seo_class.php, αφού οι αλλαγές δημιουργούν αλλαγές και στο .htaccess και πιθανώς ανάλογες ανακατευθύνσεις.%s',
	'ACP_PHPBB_SEO_VERSION' => 'Έκδοση',
	'ACP_SEO_SUPPORT_FORUM' => 'Φόρουμ Υποστήριξης',
	// ACP sub Cat
	'ACP_FORUM_URL'	=> 'Διαχείριση URL φόρουμ',
	'ACP_FORUM_URL_EXPLAIN'		=> 'Μπορείτε εδώ να δείτε τι υπάρχει στο αρχείο λανθάνουσα μνήμη που περιλαμβάνει τον τίτλο της συζήτησης που θα ενσωματωθεί στις διευθύνσεις URL. <br/>Συζητήσεις με πράσινο χρώμα είναι στην λανθάνουσα μνήμη, ενώ με κόκκινο δεν είναι ακόμη.<br/><br/><b style="color:red">Σημείωση</b><ul><b>κάποιος-τίτλος-fxx/</b> θα ανακατευθύνεται πάντα σωστά με το Zero Duplicate αλλα δεν θα ανακατευθύνεται στην περίπτωση που αλλαχθεί το <b>κάποιος-τίτλος/</b> to <b>κάτι-άλλο/</b>.<br/> Σε αυτή την περίπτωση, το <b>κάποιος-τίτλος/</b> θα χειριστεί σαν συζήτηση που δεν υπάρχει εάν δεν κάνετε τις ανάλογες ανακατευθύνσεις.</ul>',
	'ACP_NO_FORUM_URL'	=> '<b>Απενεργοποιημένη Διαχείριση URL συζητήσεων<b><br/>Η Διαχείριση διευθύνσεων URL συζήτησης είναι διαθέσιμη μόνο σε Προχωρημένη ή Μικτή λειτουργία και μόνο όταν ή λανθάνουσα μνήμη για τα URL των συζητήσεων είναι ενεργοποιημένη.<br/>URL συζητήσεων που έχουν ρυθμιστεί θα μείνουν ενεργά σε Προχωρημένη ή Μικτή λειτουργία.',
	// ACP sub Cat
	'ACP_HTACCESS'	=> '.htaccess',
	'ACP_HTACCESS_EXPLAIN'	=> 'Το εργαλείο αυτό θα σας βοηθήσει να δημιουργήσετε το δικό σας αρχείο .htacess.<br/>Η έκδοση που σας προτείνεται βασίζεται στις ρυθμίσεις του phpbb_seo/phpbb_seo_class.php .<br/>Μπορείτε να αλλάξετε τις τιμές $seo_ext και $seo_static πριν εγκαταστήσετε το .htaccess και να πάρετε προσωποποιημένες δ/νσεις URLs.<br/>Μπορείτε για παράδειγμα να χρησιμοποιήσετε .htm αντί για .html, \'μήνυμα\' αντί για \'δημοσίευση\' \'ομάδα-του-φόρουμ\' αντί για \'ομάδα\' κλπ.<br/>Αν τα επεξεργαστείτε ενώ ήδη έχουν καταχωρηθεί στο SE, θα χρειαστεί προσωποποιημένες ανακατευθύνσεις.<br/>Οι εξ ορισμού ρυθμίσεις είναι πολύ καλές, οπότε μπορείτε να παρακάμψετε αυτό το βήμα χωρίς ανησυχία.<br/>Είναι όμως η καλύτερη ώρα να τις κάνετε γιατί κάνοντας τις μετά θα χρειαστεί προσωποποιημένες ανακατευθύνσεις.<br/>Εξ ορισμού το παρακάτω .htaccess θα αντιγραφεί στον ριζικό κατάλογο του domain (δηλ. οπου κατευθύνει το www.example.com).<br/>Εάν το phpBB είναι εγκατεστημένο σε υποκατάλογο, επιλέγοντας το περισσότερες επιλογές προσθέτει την επιλογή να αντιγραφεί στον κατάλογο phpBB.',
	'SEO_HTACCESS_RBASE'	=> 'Τοποθεσία .htaccess',
	'SEO_HTACCESS_RBASE_EXPLAIN' => 'Να τοποθετήσω το .htaccess στον κατάλογο phpBB?<br/>Η Ρύθμιση RewriteBase επιτρέπει το .htaccess του φόρουμ να μπει στον φάκελο του. Είναι συνήθως πιο βολικό να μπει το .htaccess στο ριζικό του domain ακόμη κι αν το phpBB είναι εγκατεστημένο σε υποκατάλογο, αλλά εσείς μπορεί να προτιμάτε να τοποθετηθεί στον κατάλογο του φόρουμ.',
	'SEO_HTACCESS_SLASH'	=> 'RegEx Δεξί Slash',
	'SEO_HTACCESS_SLASH_EXPLAIN'	=> 'Αναλόγως τον πάροχο που χρησιμοποιείτε, μπορεί να πρέπει να βγει ή να μπει το slash ("/") στην αρχή του δεξιού μέρους κάθε rewriterules. Αυτό το slash χρησιμοποιείται εξ ορισμού όταν το .htaccess είναι στο ριζικό επίπεδο. Το αντίθετο όταν το phpBB θα εγκατασταθεί σε υποκατάλογο και θέλετε να χρησιμοποιηθεί ένα .htaccess στον ίδιο φάκελο.<br/>Οι εξ ορισμού ρυθμίσεις συνήθως λειτουργούν, αλλά αν δεν γίνει έτσι, επαναδημιουργήστε ένα .htaccess πιέζοντας το πλήκτρο "Επαναδημιουργία".',
	'SEO_HTACCESS_WSLASH'	=> 'RegEx Αριστερό Slash',
	'SEO_HTACCESS_WSLASH_EXPLAIN'	=> 'Αναλόγως τον πάροχο που χρησιμοποιείτε, μπορεί να πρέπει να μπει ένα slash ("/") στην αρχή του αριστερού μέρους κάθε rewriterules. Αυτό το slash ("/") ποτέ δε χρησιμοποιείται εξ ορισμού.<br/>Οι εξ ορισμού ρυθμίσεις συνήθως λειτουργούν, αλλά αν δεν γίνει έτσι, επαναδημιουργήστε ένα .htaccess πιέζοντας το πλήκτρο "Επαναδημιουργία".',
	'SEO_MORE_OPTION'	=> 'Περισσότερες Επιλογές',
	'SEO_MORE_OPTION_EXPLAIN' => 'Εάν το πρώτο προτεινόμενο .htaccess δεν λειτουργήσει.<br/>Βεβαιωθείτε ότι το mod_rewrite είναι ενεργοποιημένο στον κεντρικό υπολογιστή σας.<br/>Κατόπιν, σιγουρευτείτε ότι το βάλατε στο σωστό φάκελο, και ότι κάποιο άλλο δεν αντικρούεται.<br/>Εάν κι αυτά δεν λειτουργήσουν πιέστε το πλήκτρο "επιπλέον επιλογές".',
	'SEO_HTACCESS_SAVE' => 'Αποθήκευση .htaccess',
	'SEO_HTACCESS_SAVE_EXPLAIN' => 'Εάν επιλεγεί ένα αρχείο .htaccess θα δημιουργηθεί με την ενσωμάτωση στο φάκελο phpbb_seo/cache/. Ειναι έτοιμο με τις τελευταίες σας ρυθμίσεις, αλλά πρέπει να το τοποθετήσετε στο σωστό φάκελο.',
'SEO_HTACCESS_ROOT_MSG'=> 'Μόλις είστε έτοιμοι, επιλέξτε τον κώδικα .htaccess, και επικολλήστε τον σε ένα αρχείο .htaccess ή χρησιμοποιήστε το "Αποθήκευση .htaccess" παρακάτω.<br/> Αυτό το .htaccess πρέπει να χρησιμοποιηθεί στο ριζικό κατάλογο του domain, που στη περίπτωση σας είναι εκεί που το <u>%1$s</u> σας οδηγεί στο FTP σας.<br/><br/>Μπορείτε να δημιουργήσετε ένα .htaccess που θα χρησιμοποιηθεί σε υπό-φάκελλο phpBB χρησιμοποιώντας το "Περισσότερες επιλογές" παρακάτω.',
'SEO_HTACCESS_FOLDER_MSG' => 'Μόλις είστε έτοιμοι, επιλέξτε τον κώδικα .htaccess, και επικολλήστε τον σε ένα αρχείο .htaccess ή χρησιμοποιήστε το "Αποθήκευση .htaccess" παρακάτω.<br/> Αυτό το .htaccess πρέπει να χρησιμοποιηθεί στο φάκελο που εγκαταστάθηκε το phpBB, που στη περίπτωση σας είναι εκεί που το <u>%1$s</u> οδηγεί στο FTP σας.',
	'SEO_HTACCESS_CAPTION' => 'Περιγραφή',
	'SEO_HTACCESS_CAPTION_COMMENT' => 'Σχόλια',
	'SEO_HTACCESS_CAPTION_STATIC' => 'Στατικά σημεία, επεξεργαζόμενα στο phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_DELIM' => 'Περιορισμοί, επεξεργαζόμενοι στο  phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SUFFIX' => 'Καταλήξεις, επεξεργαζόμενες στο phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SLASH' => 'Προαιρετικά slashes',
	'SEO_SLASH_DEFAULT'	=> 'Εξ ορισμού',
	'SEO_SLASH_ALT'		=> 'Εναλλακτικό',
	'SEO_MOD_TYPE_ER'	=> 'Ο τύπος mod rewrite δεν έχει σωστά ρυθμιστεί στο phpbb_seo/phpbb_seo_class.php.', 
	'SEO_SHOW'		=> 'Προβολή',
	'SEO_HIDE'		=> 'Απόκρυψη',
	'SEO_SELECT_ALL'	=> 'Επιλογή όλων',
	// Install
	'SEO_INSTALL_PANEL'	=> 'Εγκατάσταση phpBB SEO',
	'SEO_ERROR_INSTALL'	=> 'Κατά την εγκατάσταση δημιουργήθηκε ένα σφάλμα. Προτείνουμε να απεγκαταστήσετε πριν ξαναδοκιμάσετε.',
	'SEO_ERROR_INSTALLED'	=> 'Η μονάδα %s είναι ήδη εγκατεστημένη.',
	'SEO_ERROR_ID'	=> 'Η μονάδα %1$ δεν έχει ID.',
	'SEO_ERROR_UNINSTALLED'	=> 'Η μονάδα %s είναι ήδη απεγκατεστημένη.',
	'SEO_ERROR_INFO'	=> 'Πληροφορίες:',
	'SEO_FINAL_INSTALL_PHPBB_SEO'	=> 'Συνδεθείτε στο ACP',
	'SEO_FINAL_UNINSTALL_PHPBB_SEO'	=> 'Επιστροφή στην Αρχική Δ. Συζήτησης',
	'CAT_INSTALL_PHPBB_SEO'	=> 'Εγκατάσταση',
	'CAT_UNINSTALL_PHPBB_SEO'	=> 'Απεγκατάσταση',
	'SEO_OVERVIEW_TITLE'	=> 'Επισκόπηση phpBB SEO Mod rewrite',
	'SEO_OVERVIEW_BODY'	=> 'Καλώς ήλθατε στην Δημόσια έκδοση του %1$s phpBB3 SEO mod rewrite %2$s.</p><p>Παρακαλώ διαβάστε <a href="%3$s" title="Check the release thread" target="_phpBBSEO"><b>τις πληροφορίες έκδοσης</b></a> για περισσότερες πληροφορίες</p><p><strong style="text-transform: uppercase;">Σημείωση:</strong> Πρέπει ήδη να έχετε κάνει τις απαραίτητες αλλαγές κώδικα και να ανεβάσετε όλα τα νέα αρχεία πριν προχωρήσετε με την εγκατάσταση.</p><p>Ο οδηγός εγκατάστασης θα σας βοηθήσει με τη διαδικασία εγκατάστασης του πίνακα ελέγχου διαχείρισης phpBB3 SEO mod rewrite. Θα σας επιτρέψει την ακριβή επιλογή στάνταρ phpBB rewritten URL για καλύτερα αποτελέσματα στις μηχανές αναζήτησης</p>.',
	'CAT_SEO_PREMOD'	=> 'phpBB SEO Premod',
	'SEO_PREMOD_TITLE'	=> 'Επισκόπηση phpBB SEO Premod',
	'SEO_PREMOD_BODY'	=> 'Καλώς ήλθατε στην Δημόσια έκδοση του phpBB SEO Premod.</p><p>Παρακαλώ διαβάστε <a href="http://www.phpbb-seo.com/boards/phpbb-seo-premod/seo-url-premod-vt1549.html" title="Check the release thread" target="_phpBBSEO"><b>τις πληροφορίες έκδοσης</b></a> για περισσότερες πληροφορίες</p><p><strong style="text-transform: uppercase;">Note:</strong> Θα επιλέξετε μεταξύ των τριών phpBB3 SEO mod rewrites.<br/><br/><b>Τα τρία διαφορετικά στάνταρ URL rewriting που υπάρχουν:</b><ul><li><a href="http://www.phpbb-seo.com/boards/simple-seo-url/simple-phpbb3-seo-url-vt1566.html" title="More details about the Simple mod"><b>The Simple mod</b></a>,</li><li><a href="http://www.phpbb-seo.com/boards/mixed-seo-url/mixed-phpbb3-seo-url-vt1565.html" title="More details about the Mixed mod"><b>The Mixed mod</b></a>,</li><li><a href="http://www.phpbb-seo.com/boards/advanced-seo-url/advanced-phpbb3-seo-url-vt1219.html" title="More details about the Advanced mod"><b>Advanced</b></a>.</li></ul>Η επιλογή είναι σημαντική, προτείνουμε να ανακαλύψετε πλήρως τις δυνατότητες SEO αυτού του premod πριν τις λειτουργήσετε στην ιστοσελίδα σας.<br/>Ειναι τόσο απλό στην εγκατάσταση όσο και το phpBB3, αρκεί να ακολουθήσετε τη διαδικασία.<br/><br/>
	<p>Απαιτήσεις γισ URL rewriting :</p>
	<ul>
		<li>Apache server (linux OS) με μονάδα mod_rewrite.</li>
		<li>IIS server (windows OS) με μονάδα isapi_rewrite, αλλά πρέπει να τροποποιήσετε τα rewriterules στο αρχείο httpd.ini</li>
	</ul>
	<p>Μόλις εγκατασταθεί πρέπει να πάτε στο ACP να ρυθμίσετε και να ενεργοποιήσετε το mod.</p>',
	'SEO_LICENCE_TITLE'	=> 'ΑΝΤΑΠΟΔΟΤΙΚΗ ΔΗΜΟΣΙΑ ΑΔΕΙΑ',
	'SEO_LICENCE_BODY'	=> 'Το phpBB SEO mod rewrites κυκλοφορεί κατόπιν RPL αδείας που δηλώνει ότι δεν μπορείτε να αφαιρέσετε τους τίτλους phpBB SEO.<br/>Για περισσότερες πληροφορίες σχετικά με δυνατές εξαιρέσεις, παρακαλώ επικοινωνήστε με έναν Διαχειριστή phpBB SEO (πρωτεύοντα SeO ή dcz).',
	'SEO_PREMOD_LICENCE'	=> 'Το phpBB SEO mod rewrites και το Zero duplicate που περιλαμβάνεται στο Premod κυκλοφορεί κατόπιν RPL αδείας που δηλώνει ότι δεν μπορείτε να αφαιρέσετε τους τίτλους phpBB SEO.<br/>Για περισσότερες πληροφορίες σχετικά με δυνατές εξαιρέσεις, παρακαλώ επικοινωνήστε με έναν Διαχειριστή phpBB SEO (πρωτεύοντα SeO ή dcz).',
	'SEO_SUPPORT_TITLE'	=> 'Υποστήριξη',
	'SEO_SUPPORT_BODY'	=> 'Πλήρης υποστήριξη θα δωθεί στο <a href="%1$s" title="Visit the %2$s SEO URL forum" target="_phpBBSEO"><b>%2$s SEO URL forum</b></a>. Θα δίνουμε απαντήσεις σε γενικές ερωτήσεις ρύθμισης, εγκατάστασης και υποστήριξη λύσης κοινών προβλημάτων.</p><p>Επισκεφθείτε το <a href="http://www.phpbb-seo.com/boards/" title="SEO Forum" target="_phpBBSEO"><b>Search Engine Optimization forums</b></a>.</p><p>You should <a href="http://www.phpbb-seo.com/boards/profile.php?mode=register" title="Register to phpBB SEO" target="_phpBBSEO"><b>register</b></a>, log in and <a href="%3$s" title="Be notified about updates" target="_phpBBSEO"><b>εγγραφείτε στο νήμα έκδοσης</b></a> για να ειδοποιείστε με mail για τυχόν αναβαθμίσεις.',
	'SEO_PREMOD_SUPPORT_BODY'	=> 'Πλήρης υποστήριξη θα δωθεί στο <a href="http://www.phpbb-seo.com/boards/phpbb-seo-premod-vf61/" title="Visit the phpBB SEO Premod forum" target="_phpBBSEO"><b>phpBB SEO Premod forum</b></a>. We will provide answers to general setup questions, configuration problems, and support for determining common problems.</p><p>Be sure to visit our <a href="http://www.phpbb-seo.com/boards/" title="SEO Forum" target="_phpBBSEO"><b>Search Engine Optimization forums</b></a>.</p><p>You should <a href="http://www.phpbb-seo.com/boards/profile.php?mode=register" title="Register to phpBB SEO" target="_phpBBSEO"><b>register</b></a>, log in and <a href="http://www.phpbb-seo.com/boards/viewtopic.php?t=1549&watch=topic" title="Be notified about updates" target="_phpBBSEO"><b>εγγραφείτε στο νήμα έκδοσης</b></a> για να ειδοποιείστε με mail για τυχόν αναβαθμίσεις.',
	'SEO_INSTALL_INTRO'		=> 'Καλώς ήλθατε στον οδηγό εγκατάστασης phpBB SEO',
	'SEO_INSTALL_INTRO_BODY'	=> '<p>Πρόκειται να εγκαταστήσετε το %1$s phpBB SEO mod rewrite %2$s. Αυτο το εργαλείο θα ενεργοποιήσει τον πίνακα ελέγχου phpBB SEO mod rewrite control panel στο phpBB ACP.</p><p>Μόλις εγκατασταθεί, πρέπει να πάτε στο ΑCP για ρύθμιση κι ενεργοποίηση του mod.</p>
	<p><strong>Note:</strong> Εάν αυτή είναι ή πρώτη φορά που δοκιμάζετε αυτό το mod, προτείνουμε να δοκιμάσετε τα διάφορα στανταρ URL που μπορεί να παράγει αυτό το mod σε τοπικό επίπεδο πριν την τοποθέτηση online. Με αυτό τον τρόπο δεν θα δείχνετε καθημερινά διαφορετικά URL στις μηχανές αναζήτησης καθώς δοκιμάζετε. Έτσι δεν θα δείτε μετά από ένα μήνα ότι καταχωρήσατε άσχετες διευθύνσεις. Η υπομονή είναι το παν στο SEO κι ακόμη κι αν το zero duplicate κάνει την ανακατεύθυνση HTTP πολύ εύκολη, δε θα χρειαστεί να ανακατευθύνετε όλο το φόρουμ τόσο συχνά.</p><br/>
	<p>Απαιτήσεις :</p>
	<ul>
		<li>Apache server (linux OS) με μονάδα mod_rewrite.</li>
		<li>IIS server (windows OS) με μονάδα isapi_rewrite, αλλά πρέπει να τροποποιήσετε τα rewriterules στο αρχείο httpd.ini</li>
	</ul>',
	'SEO_INSTALL'		=> 'Εγκατάσταση',
	'UN_SEO_INSTALL_INTRO'		=> 'Καλώς ήλθατε στον οδηγό απεγκατάστασης phpBB SEO',
	'UN_SEO_INSTALL_INTRO_BODY'	=> '<p>Πρόκειται να απεγκαταστήσετε το %1$s phpBB SEO mod rewrite %2$s ACP module.</p>
	<p><strong>Note:</strong> Αυτό δεν πρόκειται να απενεργοποιήσει το URL rewriting στο φόρουμ σας όσο τα αρχεία phpBB είναι τροποποιημένα.</p>',
	'UN_SEO_INSTALL'		=> 'Απεγκατάσταση',
	'SEO_INSTALL_CONGRATS'			=> 'Συγχαρητήρια!',
	'SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Εγκαταστήσατε επιτυχώς το %1$s phpBB3 SEO mod rewrite %2$s. Πρέπει να πάτε τώρα στο phpBB ACP και να προχωρήσετε με τις ρυθμίσεις rewrite.<p>
	<p>Στην νέα κατηγορία phpBB SEO, θα μπορέσετε να :</p>
	<h2>Ρυθμίσετε και ενεργοποιήσετε το URL rewriting</h2>
		<p>Εδώ θα μπορέσετε να επιλέξετε πως θα φαίνονται τα URL σας. Οι επιλογές zero duplicate θα μπορούν να ρυθμιστούν επίσης από εδώ μετά την εγκατάσταση.</p>
	<h2>Επιλέξετε με ακρίβεια τα URL του φόρουμ</h2>
		<p>Χρησιμοποιώντας τη Μικτή ή την Προχωρημένη λειτουργία, θα μπορέσετε να αποσυνδέσετε τα URL του φόρουμ από τους τίτλους τους και να επιλέξετε για χρήση οποιαδήποτε λέξη θέλετε στον τίτλο</p>
	<h2>Δημιουργία προσωποποιημένου .htaccess</h2>
	<p>Μόλις ρυθμίσετε τις παραπάνω επιλογές, θα μπορέσετε να δημιουργήσετε ένα προσωποποιημένο .htaccess σε λίγο χρόνο και να το αποθηκεύσετε απευθείας στον διακομιστή.</p>',
	'UN_SEO_INSTALL_CONGRATS'	=> 'Η μονάδα phpBB SEO ACP έχει αφαιρεθεί.',
	'UN_SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Έχετε επιτυχώς απεγκαταστήσει το %1$s phpBB3 SEO mod rewrite %2$s.<p>
	<p>Αυτό δεν θα απενεργοποιήσει το URL rewriting στο φόρουμ σας όσο τα τα αρχεία phpBB είναι ακόμη τροποποιημένα.</p>',
	'SEO_VALIDATE_INFO'	=> 'Πληροφορίες Εγκυρότητας :',
	// Security
	'SEO_LOGIN'		=> 'Το φόρουμ απαιτεί να είστε εγγεγραμμένος και να έχετε συνδεθεί για να δείτε αυτή τη σελίδα.',
	'SEO_LOGIN_ADMIN'	=> 'Το φόρουμ απαιτεί να έχετε συνδεθεί ως Διαχειριστής για να δείτε αυτή τη σελίδα.<br/>Η σύνοδος έχει καταστραφεί για λόγους ασφάλειας.',
	'SEO_LOGIN_FOUNDER'	=> 'Το φόρουμ απαιτεί να έχετε συνδεθεί ως Ιδρυτής για να δείτε αυτή τη σελίδα.',
	'SEO_LOGIN_SESSION'	=> 'Ο έλεγχος συνόδου απέτυχε.<br/>Οι ρυθμίσεις δεν έχουν τροποποιηθεί.<br/>Η σύνοδος έχει καταστραφεί για λόγους ασφάλειας.',
	// Cache status
	'SEO_CACHE_FILE_TITLE'	=> 'Κατάσταση αρχείου Προσωρινής μνήμης',
	'SEO_CACHE_STATUS'	=> 'Ο φάκελος προσωρινής μνήμης ρυθμίστηκε σαν : <b>%s</b>',
	'SEO_CACHE_FOUND'	=> 'Ο φάκελος προσωρινής μνήμης βρέθηκε.',
	'SEO_CACHE_NOT_FOUND'	=> 'Ο φάκελος προσωρινής μνήμης δεν βρέθηκε.',
	'SEO_CACHE_WRITABLE'	=> 'Ο φάκελος προσωρινής μνήμης είναι εγγράψιμος.',
	'SEO_CACHE_UNWRITABLE'	=> 'Ο φάκελος προσωρινής μνήμης δεν είναι εγγράψιμος. Πρέπει να αλλάξετε το CHMOD σε 0777.',
	'SEO_CACHE_FORUM_NAME'	=> 'Όνομα Δ. Συζήτησης',
	'SEO_CACHE_URL_OK'	=> 'Η URL έχει καταχωρηθεί στη προσωρινή μνήμη',
	'SEO_CACHE_URL_NOT_OK'	=> 'Η URL αυτής της Δ. Συζήτησης δεν έχει καταχωρηθεί στη προσωρινή μνήμη',
	'SEO_CACHE_URL'		=> 'Τελική URL',
	'SEO_CACHE_MSG_OK'	=> 'Το αρχείο προσωρινής μνήμης έχει αλλάξει επιτυχώς.',
	'SEO_CACHE_MSG_FAIL'	=> 'Παρουσιάστηκε ένα σφάλμα κατά την αλλαγή του αρχείου προσωρινής μνήμης.',
	'SEO_CACHE_UPDATE_FAIL'	=> 'Η URL που δώσατε δεν μπορεί να χρησιμοποιηθεί, η προσωρινή μνήμη έμεινε ως έχει.',
	// Seo advices
	'SEO_ADVICE_DUPE'	=> 'Εντοπίστηκε διπλή εγγραφή για τον σύνδεσμο της Δ. Συζήτησης : <b>%1$s</b>.<br/>Δεν θα αλλαχθεί μέχρι να κάνετε τις αλλαγές που πρέπει.',
	'SEO_ADVICE_RESERVED'	=> 'Εντοπίστηκε μια καταχώρηση σε αναμονή (χρησιμοποιείται από άλλες URL, όπως προφίλ χρηστών) για τη URL της Δ. Συζήτησης : <b>%1$s</b>.<br/>Δεν θα αλλαχθεί μέχρι να κάνετε τις αλλαγές που πρέπει.',
	'SEO_ADVICE_LENGTH'	=> 'Η προσωρινή URL είναι μεγάλη.<br/>Χρησιμοποιήστε μια μικρότερη',
	'SEO_ADVICE_DELIM'	=> 'Η προσωρινή URL περιλαμβάνει οροθέτηση SEO και ID.<br/>Ρυθμίστε μια γνήσια.',
	'SEO_ADVICE_WORDS'	=> 'Η προσωρινή URL περιλαμβάνει πολλές λέξεις.<br/>Ρυθμίστε την καλύτερα.',
	'SEO_ADVICE_DEFAULT'	=> 'Η τελική URL, μετά την μορφοποίηση, είναι η προκαθορισμένη.<br/>Ρυθμίστε μία γνήσια.',
	'SEO_ADVICE_START'	=> 'Οι URL των Δ. Συζητήσεων δεν μπορούν να τελειώνουν σε παραμέτρους σελιδοποίησης.<br/>Γιαυτό θα αφαιρεθούν από αυτήν που καταχωρήσατε.',
	'SEO_ADVICE_DELIM_REM'	=> 'Καταχωρημένες URL Δ. Συζητήσεων δεν μπορούν να τελειώνουν σε οριοθετητές.<br/>Γιαυτό θα αφαιρεθούν από αυτήν που καταχωρήσατε.',
	// Mod Rewrite type
	'ACP_SEO_SIMPLE'	=> 'Απλό',
	'ACP_SEO_MIXED'		=> 'Μικτό',
	'ACP_SEO_ADVANCED'	=> 'Προχωρημένο',
	'ACP_ULTIMATE_SEO_URL'	=> 'Ultimate SEO URL',
	// URL Sync
	'SYNC_REQ_SQL_REW' => 'You must activate SQL Rewriting to use this script !',
	'SYNC_TITLE' => 'URL Synchronization',
	'SYNC_WARN' => 'Attention, do not stop the script until it ends, and back up your db before you use it!',
	'SYNC_COMPLETE' => 'Synchronization completed !',
	'SYNC_RESET_COMPLETE' => 'Reset completed !',
	'SYNC_PROCESSING' => '<b>Processing, please wait ...</b><br/><br/><b>%1$s%%</b> have been processed. <br/>So far, <b>%2$s</b> items have been processed.<br/><b>%3$s</b> items in total, <b>%4$s</b> are processed at a time.<br/>Speed : <b>%5$s item/s.</b><br/>Time spent for this cycle : <b>%6$ss</b><br/>Estimated time left : <b>%7$s minute(s)</b>',
	'SYNC_ITEM_UPDATED' => '<b>%1$s</b> items have been updated',
	'SYNC_TOPIC_URLS' => 'Start topic URLs synchronization',
	'SYNC_RESET_TOPIC_URLS' => 'Reset all topic URLs',
	'SYNC_TOPIC_URL_NOTE' => 'You just activated the SQL Rewriting option, you should now synchronize all your topics URLs by going to %sthis page%s if you did not already.<br/>This will not change any of your current URLs<br/><b style="color:red">Please note :</b><br/><em>You should only synchronize your topics URLs once you have fully set up your url standard. It’s not a drama if you change your url standard after your synchronized topic URLs, but you should do it again each time you do.<br/>It’s not a drama either if you don’t, your topic URLs would in such case be updated upon each topic visit in case the topic URL would be empty or not matching your current standard.</em>',
	// phpBB SEO Class option
	'url_rewrite' => 'Ενεργοποίηση URL rewriting',
	'url_rewrite_explain' => 'Μόλις ρυθμίσετε τις παρακάτω επιλογές, και δημιουργήσετε ενα προσωποποιημένο .htaccess, θα μπορέσετε να ενεργοποιήσετε το URL rewriting και να ελέγξετε εάν τα δημιουργημένα URL λειτουργούν κανονικά. Εάν δείτε σφάλματα 404, είναι κατά πάσα πιθανότητα προβλήματα .htaccess, δοκιμάστε κάποιες απο τις επιλογές εργαλείων .htaccess για δημιουργία νέου.',
	'modrtype' => 'Τύπος URL rewriting',
	'modrtype_explain' => 'To phpBB SEO premod είναι συμβατό με τα τρία phpBB SEO mod rewrite.<br/>Το <a href="http://www.phpbb-seo.com/boards/simple-seo-url/simple-phpbb3-seo-url-vt1566.html" title="Περισσότερες λεπτομέρειες για το απλό mod"><b>Απλό</b></a>,το <a href="http://www.phpbb-seo.com/boards/mixed-seo-url/mixed-phpbb3-seo-url-vt1565.html" title="Περισσότερες λεπτομέρειες για το Μικτό mod"><b>Μικτό</b></a> και το <a href="http://www.phpbb-seo.com/boards/advanced-seo-url/advanced-phpbb3-seo-url-vt1219.html" title="Περισσότερες λεπτομέρειες για το Προχωρημένο mod"><b>Προχωρημένο</b></a> .<br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Τροποποιώντας την επιλογή αυτή θα αλλαχθούν όλα τα URL στην ιστοσελίδα σας.<br/>Το να το κάνετε σε ήδη καταχωρημένη ιστοσελίδα θέλει πολλή σκέψη και προσοχή, όση θα δίνατε κι αν μεταφέρατε την ιστοσελίδα σας σε άλλο κεντρικό υπολογιστή.<br/>Για αυτά αποφασίστε εάν θα το κάνετε ή όχι.</ul>',
	'profile_inj' => 'Προσθήκη Προφίλ και ομάδων',
	'profile_inj_explain' => 'Εδώ μπορείτε να προσθέσετε ονόματα χρηστών, ομάδων και σελίδες μηνυμάτων (προαιρετικά δείτε παρακάτω) στις URL τους αντί για το εξορισμού στατικό rewriting, <b>phpBB/nickname-uxx.html</b> αντι για <b>phpBB/memberxx.html</b>.<br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Η αλλαγή της επιλογής απαιτεί και ενημέρωση του .htaccess</ul>',
	'profile_vfolder' => 'Προφίλ εικονικού φακέλου',
	'profile_vfolder_explain' => 'Εδώ μπορείτε να προσωμοιώσετε μια δομή φακέλου για τις σελίδες προφίλ και μηνυμάτων χρηστών (προαιρετικά δείτε παρακάτω), <b>phpBB/nickname-uxx/(topics/)</b> ή <b>phpBB/memberxx/(topics/)</b> αντί για <b>phpBB/nickname-uxx(-topics).html</b> και <b>phpBB/memberxx(-topics).html</b>.<br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Αφαίρεση ID προφίλ υπερβαίνει αυή τη ρύθμιση.<br/>Η αλλαγή της επιλογής απαιτεί και ενημέρωση του .htaccess</ul>',
	'profile_noids' => 'Αφαίρεση ID προφίλ',
	'profile_noids_explain' => 'Όταν ενεργοποιηθεί η προσθήκη προφίλ και ομάδων, μπορείτε εδώ να χρησιμοποιήσετε <b>example.com/phpBB/member/nickname</b> αντί για το εξορισμού <b>example.com/phpBB/nickname-uxx.html</b>. Η phpBB χρησιμοποιεί μία έξτρα, αλλά ελαφρύτερη, αναζήτηση SQL σε τέτοιες σελίδες χωρίς το id του μέλους.<br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Ειδικοί χαρακτήρες δεν χρησιμοποιούνται το ίδιο σε όλους τους πλοηγούς. Ο FF αποκωδικοποιεί πάντα (<a href="http://www.php.net/urlencode">urlencode()</a>), και φαίνεται να χρησιμοποιεί πρώτα τα Latin1, ενώ ο IE και ο Opera δεν το κάνουν. Για προχωρημένη κωδικοποίηση, παρακαλώ διαβάστε το αρχείο εγκατάστασης.<br/>Η αλλαγή της επιλογής απαιτεί και ενημέρωση του .htaccess</ul>',
	'rewrite_usermsg' => 'rewriting σελίδων κοινής αναζήτησης και μηνυμάτων χρηστών',
	'rewrite_usermsg_explain' => 'Αυτή η επιλογή ισχύει εάν δώσατε δημόσια πρόσβαση στις σελίδες αναζήτησης και προφίλ.<br/> Χρησιμοποιώντας την επιλογή έχετε μεγαλύτερη χρήση λειτουργιών αναζήτησης και φυσικά επιβαρύνετε τον κεντρικό υπολογιστή.<br/> Ο τύπος URL rewriting (με ή χωρίς ID) ακολουθεί αυτό που ρυθμίστηκε για τα προφίλ και τις ομάδες.<br/><b>phpBB/messages/nickname/topics/</b> VS <b>phpBB/nickname-uxx-topics.html</b> VS <b>phpBB/memberxx-topics.html</b>.<br/>Επιπλέον η επιλογή θα ενεργοποιήσει το rewriting της σελίδας κοινής αναζήτησης, όπως ενεργά θέματα, αναπάντητες δημοσιέυσεις και σελίδες νέων.<br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Αφαίρεση ID απο αυτούς τους δεσμούς θα επιφέρει τους ίδιους περιορισμούς με τα προφίλ χρηστών.<br/>Η αλλαγή της επιλογής απαιτεί και ενημέρωση του .htaccess</ul>',
	'rewrite_files' => 'Attachment Rewriting',
	'rewrite_files_explain' => 'Activate phpBB Attachment Rewriting. Can be of a great help if you have many attached images worth being indexed. Files of course must be downloadable by bots for this to have a meaning SEOwise.<br/><br/><b style="color:red">Please Note :</b><br/><em>Make sure you have the required RewriteRule (# PHPBB FILES ALL MODES) in your .htaccess when you activate this option</em>',
	'rem_sid' => 'Αφαίρεση SID',
	'rem_sid_explain' => 'Το SID θα αφαιρεθεί από το 100% των URLs περνώντας από το phpbb_seo class, για επισκέπτες και bots.<br/>Αυτό εξασφαλίζει ότι τα bots δεν θα δουν τα SID στη Δ. Συζήτηση, URL θεμάτων και δημοσιεύσεων, Αλλά οι επισκέπτες που δεν αποδέχονται cookies πιθανώς να δημιουργήσουν περισσότερες από μια συνεδρίες.<br/>To Zero duplicate http 301 ανακατευθύνει εξορισμού δεσμούς με SID για επισκέπτες και Bots.',
	'rem_hilit' => 'Αφαίρεση Έντονων Προβολών',
	'rem_hilit_explain' => 'Οι έντονες προβολές θα αφαιρεθούν από το 100% of the URLs περνώντας από το phpbb_seo class, για επισκέπτες και bots.<br/>Αυτό εξασφαλίζει ότι τα bots δεν θα δουν έντονες προβολές στη Δ. Συζήτηση, URL θεμάτων και δημοσιεύσεων.<br/>Το Zero duplicate αυτόματα θα ακολουθήσει αυτή τη ρύθμιση, π.χ. http 301 ανακατευθύνει εξορισμού δεσμούς με έντονες προβολές για επισκέπτες και Bots.',
	'rem_small_words' => 'Αφαίρεση μικρών λέξεων',
	'rem_small_words_explain' => 'Επιτρέπει την αφαίρεση λέξεων μικρότερων από τρία γράμματα στίς rewritten URL.<br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Το φίλτρο θα αλλάξει πολλούς δεσμούς στην ιστοσελίδα σας.<br/>Αν και το zero duplicate mod θα ελέγξει όλες τις απαραίτητες ανακατευθύνσεις όταν αλλάξετε την επιλογή, Το να το κανετε σε ήδη καταχωρημένη ιστοσελίδα θέλει πολλή σκέψη και προσοχή, όση θα δίνατε κι αν μεταφέρετε την ιστοσελίδα σας σε άλλο κεντρικό υπολογιστή<br/>Για αυτό αποφασίστε εάν θα το κάνετε ή όχι.</ul>',
	'virtual_folder' => 'Εικονικός φάκελος',
	'virtual_folder_explain' => 'Επιτρέπει την προσθήκη URL της Δ. Ζυζήτησης σαν εικονικό φάκελο στα URL θεμάτων.<br/><u>Παράδειγμα :</u><ul style="margin-left:20px"><b>forum-title-fxx/topic-title-txx.html</b> VS <b>topic-title-txx.html</b><br/>για URL θέματος.</ul><br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Η επιλογή προσθήκης εικονικού φακέλου μπορεί να αλλάξει τους δεσμούς όλης της ιστοσελίδας σας πολύ εύκολα.<br/>Το να το κάνετε σε ήδη καταχωρημένη ιστοσελίδα θέλει πολλή σκέψη και προσοχή, όση θα δίνατε κι αν μεταφέρετε την ιστοσελίδα σας σε άλλο σερβερ.<br/>Γιαυτο αποφασίστε εαν θα το κάνετε ή όχι.</ul>',
	'virtual_root' => 'Εικονικό Root',
	'virtual_root_explain' => 'Αν το phpBB έχει εγκατασταθεί σε υποκατάλογο (π.χ. phpBB3/), μπορείτε να προσωμοιώσετε μια εγκατάσταση root για τους rewritten δεσμούς.<br/><u>Παράδειγμα :</u><ul style="margin-left:20px"><b>phpBB3/forum-title-fxx/topic-title-txx.html</b> VS <b>forum-title-fxx/topic-title-txx.html</b><br/>για ένα URL θέματος.</ul><br/>Αυτό μπορεί να μικρύνει λιγο τα URL, ειδικά εαν χρησιμοποιείτε την επιλογή "Εικονικός Φάκελος". Οι ατροποποίητοι δεσμοί θα συνεχίσουν να φαίνονται και να λειτουργούν στον φάκελο phpBB.<br/><br/><b style="color:red">Σημείωση :</b><br/><ul style="margin-left:20px">Η χρήση της επιλογής απαιτεί τη ύπαρξη μιας αρχικής σελίδας του forum index (όπως forum.html).<br/> Η επιλογή μπορεί να αλλάξει τους δεσμούς όλης της ιστοσελίδας σας πολύ εύκολα.<br/>Το να το κάνετε σε ήδη καταχωρημένη ιστοσελίδα θέλει πολλή σκέψη και προσοχή, όση θα δίνατε κι αν μεταφέρετε την ιστοσελίδα σας σε άλλο σερβερ.<br/>Για αυτό αποφασίστε εάν θα το κάνετε ή όχι.</ul>',
	'cache_layer' => 'Προσωρινή μνήμη URL Δ. Συζητήσεων',
	'cache_layer_explain' => 'Ενεργοποιεί τη προσωρινή μνήμη για τα URL Δ. Συζητήσεων κι επιτρέπει το διαχωρισμό τίτλων Δ. Συζητήσεων από τις URL<br/><u>Παράδειγμα :</u><ul style="margin-left:20px"><b>forum-title-fxx/</b> VS <b>any-title-fxx/</b><br/>για URL Δ.Συζήτησης.</ul><br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Η επιλογή αυτή επιτρέπει την αλλαγή των URL των Δ.Συζητήσεων, γιαυτό και πολλών URL θεμάτων αν χρησιμοποιείτε την επιλογή Εικονικού Φακέλου.<br/>Τα URL θεματων θα ανακατευθύνονται πάντα σωστά με το Zero Duplicate.<br/>Θα γίνεται το ίδιο με τις URL Δ. Συζητήσεων όσο κρατάτε οριοθέτες και ID, δείτε παρακάτω.</ul>',
	'rem_ids' => 'Αφαίρεση ID Δ. Συζήτησης',
	'rem_ids_explain' => 'Απαλαχθείτε από τα ΙD και τους οριοθέτες των συνδέσμων Δ. Συζητήσεων. Εφαρμόζεται μόνο όταν είναι ενεργοποιημένη η προσωρινή μνήμη URL Δ. Συζητήσεων.<br/><u>Παράδειγμα :</u><ul style="margin-left:20px"><b>any-title-fxx/</b> VS <b>any-title/</b><br/>για URL Δ.Συζήτησης.</ul><br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Η επιλογή επιτρέπει την αλλαγή των URL Δ. Συζήτησης, γιαυτό και πολλών URL θεμάτων αν χρησιμοποιείτε την επιλογή Εικονικού Φακέλου.<br/>Τα URL θεμάτων θα ανακατευθύνονται πάντα σωστά με το Zero Duplicate.<br/><u>Δεν θα γίνεται το ίδιο με τα URL Δ. Συζητήσεων :</u><br/><ul style="margin-left:20px"><b>any-title-fxx/</b> θα ανακατευθύνεται πάντα σωστά με το Zero Duplicate αλλά δεν θα γίνεται αν επεξεργαστείτε το <b>any-title/</b> σε <b>something-else/</b>.<br/> Σε τέτοια περίπτωση, το <b>any-title/</b> θα χρησιμοποιηθεί σαν Δ. Συζήτηση που δεν υπάρχει.<br/>Για αυτό αποφασίστε εάν θα το κάνετε ή όχι, όμως μπορεί να αποδειχθεί ιδιαίτερα χρήσιμο.</ul></ul>',
	// copytrights
	'copyrights' => 'Copyrights',
	'copyrights_img' => 'Δεσμός Εικόνας',
	'copyrights_img_explain' => 'Εδώ επιλέξτε αν θα εμφανίζεται ο δεσμός phpBB SEO copyright σαν εικόνα ή σαν δεσμός κειμένου.',
	'copyrights_txt' => 'Δεσμός κειμένου',
	'copyrights_txt_explain' => 'Εδώ επιλέγετε το κείμενο που θα χρησιμοποιηθεί στον δεσμό phpBB SEO copyright. Αφήστε κενό για το εξορισμού.',
	'copyrights_title' => 'Τίτλος δεσμού',
	'copyrights_title_explain' => 'Εδώ επιλέγετε το κείμενο που θα χρησιμοποιηθεί σαν τίτλος δεσμού phpBB SEO copyright. Αφήστε κενό για το εξορισμού.',
	// Zero duplicate
	// Options 
	'ACP_ZERO_DUPE_OFF' => 'Κλειστό',
	'ACP_ZERO_DUPE_MSG' => 'Δημοσίευση',
	'ACP_ZERO_DUPE_GUEST' => 'Επισκέπτης',
	'ACP_ZERO_DUPE_ALL' => 'Ολα',
	'zero_dupe' =>'Zero duplictate',
	'zero_dupe_explain' => 'Η ακόλουθη ρύθμιση αφορά το Zero duplicate, μπορείτε να το τροποποιήσετε ανάλογα με τις ανάγκες σας.<br/>Δεν χρειάζεται καμία ενημέρωση του .htacess.',
	'zero_dupe_on' => 'Ενεργοποίηση Zero duplictate',
	'zero_dupe_on_explain' => 'Επιτρέπει την ενεργοποίηση και απενεργοποίηση των ανακατευθύνσεων του Zero duplicate.',
	'zero_dupe_strict' => 'Αυστηρός τρόπος',
	'zero_dupe_strict_explain' => 'Όταν ενεργοποιείται, το zero dupe θα ελέγξει εάν η ζητούμενη URL ταιριάζει ακριβώς με την παρακολουθούμενη.<br/>Αν επιλέξετε Κλειστό, Το zero dupe θα επιβεβαίωση αν ή παρακολουθούμενη url είναι το πρώτο μέρος της ζητούμενης.<br/>Το ζητούμενο είναι να γίνει εύκολο να χρησιμοποιήσετε mods που μπορεί να μην είναι συμβατά με το zero dupe προσθέτοντας GET vars.',
	'zero_dupe_post_redir' => 'Ανακατευθύνσεις δημοσιεύσεων',
	'zero_dupe_post_redir_explain' => 'Η επιλογή θα αποφασίσει πως θα διαχειριστεί τους δεσμούς δημοσιεύσεων. Μπορεί να πάρει τέσσερις  τιμές :<ul style="margin-left:20px"><li><b>&nbsp;off</b>, μην ανακατευθύνσιε δεσμούς δημοσιεύσεων, σε οποιαδήποτε περίπτωση,</li><li><b>&nbsp;post</b>, βεβαιώσου ότι postxx.html χρησιμοποιείται για δεσμό δημοσίευσης,</li><li><b>&nbsp;guest</b>, ανακατευθύνει τους επισκέπτες αν χρειάζεται στον αντίστοιχο δεσμό δημοσίευσης παρά στο postxx.html, και σιγουρέψου ότι το postxx.html χρησιμοποιείται για συνδεδεμένα μέλη,<li><b>&nbsp;all</b>, ανακατεύθυνε αν χρειάζεται στον συγκεκριμένο δεσμό δημοσίευσης.</li></ul><br/><b style="color:red">Σημείωση</b><br/><ul style="margin-left:20px">Αφήνοντας το <b>postxx.html</b> σα δεσμό δεν ενοχλέι το SEO αρκεί να κρατήσετε το "disallow on post urls" στο αρχείο robots.txt.<br/>Η ανακατεύθυνση όλων θα παράγει τις περισσότερες ανακατευθύνσεις που γίνεται.<br/>Αν ανακατευθύνετε τα postxx.html σε όλες τις περιπτώσεις, δηλ. σημαίνει ότι ένα μήνυμα που θα δημοσιευθεί σε ένα θέμα και μετά μεταφερθεί σε ένα άλλο θα δείχνει το δεσμό του να αλλάζει, το οποίο με το zero duplicate mod δεν θα είναι επιβλαβές, αλλά ο προηγούμενος δεσμός στη δημοσίευση δε θα κατευθύνει σε αυτό πια.</ul>.',
	// no duplicate
	'no_dupe' => 'Κανένα Διπλότυπο',
	'no_dupe_on' => 'Ενεργοποίηση κανενός διπλότυπου',
	'no_dupe_on_explain' => 'Το "κανένα διπλότυπο" mod αντικαθιστά τις URL δημοσιεύσεων με τις αντίστοιχες URL θεμάτων (με σελιδοποίηση).<br/>Δεν προσθέτει στην SQL, απλά κάνει LEFT JOIN σε μία αναζήτηση που ήδη γίνεται. Αυτό σημαίνει επιπλέον δουλειά αλλά δεν θα είναι επιβαρυντικό για τον κεντρικό υπολογιστή.',
));
?>