<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: install.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
* Ελληνική μετάφραση από diastasi (thraki.info) & phpbbgr.com
*/
/**
*
* install [Greek]
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
	// Install
	'SEO_INSTALL_PANEL'	=> 'Πίνακας εγκατάστασης Gym Sitemaps &amp; RSS ',
	'CAT_INSTALL_GYM_SITEMAPS' => 'Εγκατάσταση GYM Sitemaps',
	'CAT_UNINSTALL_GYM_SITEMAPS' => 'Απεγκατάσταση GYM Sitemaps',
	'CAT_UPDATE_GYM_SITEMAPS' => 'Αναβάθμιση GYM Sitemaps',
	'SEO_ERROR_INSTALL'	=> 'Σφάλμα κατά την εγκατάσταση. Εάν θέλετε να ξαναπροσπαθήσετε, απεγκαταστήστε πρώτα.',
	'SEO_ERROR_INSTALLED'	=> 'Η μονάδα %s είναι ήδη εγκατεστημένη.',
	'SEO_ERROR_ID'	=> 'Η μονάδα %1$ δεν έχει ID.',
	'SEO_ERROR_UNINSTALLED'	=> 'Η μονάδα %s είναι ήδη απεγκατεστημένη.',
	'SEO_ERROR_INFO'	=> 'Πληροφορίες :',
	'SEO_FINAL_INSTALL_GYM_SITEMAPS'	=> 'Σύνδεση στον ΠΕΔ',
	'SEO_FINAL_UPDATE_GYM_SITEMAPS'	=> 'Σύνδεση στον ΠΕΔ',
	'SEO_FINAL_UNINSTALL_GYM_SITEMAPS'	=> 'Επιστροφή στη Δ.Συζήτηση',
	'SEO_OVERVIEW_TITLE'	=> 'Επισκόπηση GYM sitemaps &amp; RSS',
	'SEO_OVERVIEW_BODY'	=> '<p>Καλωσήλθατε στον εγκαταστάτη phpBB SEO GYM sitemaps &amp; RSS %1$s .</p><p>Παρακαλώ διαβάστε το <a href="%3$s" title="Check the release thread" target="_phpBBSEO"><b>the release thread</b></a> για περισσότερες πληροφορίες</p><p><strong style="text-transform: uppercase;">Note:</strong> Πρέπει να κάνετε τις απαραίτητες αλλαγές στα αρχεία και να φορτώσετε να νέα αρχεία πρίν προχωρήσετε στην εγκατάσταση.</p><p>Ο εγκαταστάτης θα σας οδηγήσει στην εγκατάσταση του πίνακα ελέγχου GYM sitemaps &amp; RSS στον ΠΕΔ. Θα σας βοηθήσει στη δημιουργία αποτελεσματικού Google Sitemaps και RSS ανατροφοδότησης. Ο σχεδιασμός του με μονάδες σας επιτρέπει να δημιουργήσετε φιλικά Google Sitemaps και ανατροφοτήσεις RSS για κάθε εφαρμογή php/SQL που βρίσκεται στην ιστοσελίδα σας. Για υποστήριξη επισκεφθείτε το <a href="%3$s" title="Support forum" target="_phpBBSEO"><b>support forum</b></a> για κάθε πρόβλημα που αφορά το GYM Siteamps &amp; RSS module.</p> ',
	'CAT_SEO_PREMOD'	=> 'GYM Sitemaps &amp; RSS',
	'SEO_INSTALL_INTRO'		=> 'Καλωσήλθατε στον εγκαταστάτη phpBB SEO GYM sitemaps &amp; RSS.',
	'SEO_INSTALL_INTRO_BODY'	=> '<p>Πρόκειται να εγκαταστήσετε το mod %1$s %2$s . Το εργαλείο αυτό θα ενεργοποιήση τον πίνακα ελέγχου GYM Sitemaps &amp; RSS στον ΠΕΔ.</p><p>Μόλις εγκατασταθεί, πρέπει να πάτε στον ΠΕΔ και να κάνετε τις απαραίτητες ρυθμίσεις.</p>
	<p><strong>Note:</strong>Εαν είναι η πρώτη φορά που το εγκαθιστάτε, δοκιμάστε τις διάφορες ρυθμίσεις τοπικά πριν το ανεβάσετε online.</p><br/>
	<p>Requirements :</p>
	<ul>
		<li>Apache server (Linux OS) with mod_rewrite for the URL rewriting features of the module.</li>
		<li>IIS server (Windows OS) with isapi_rewrite for the URL rewriting features of the module, but you will need to adapt the rewriterules in the httpd.ini</li>
	</ul>',
	'SEO_INSTALL'		=> 'Εγκατάσταση',
	'UN_SEO_INSTALL_INTRO'		=> 'Καλωσήλθατε στην απεγκατάσταση του GYM Sitemaps &amp; RSS',
	'UN_SEO_INSTALL_INTRO_BODY'	=> '<p>Πρόκειται να απεγκαταστήσετε το mod %1$s %2$s .</p>
	<p><strong>Σημείωση:</strong> Τα Sitemaps και οι ανατροφοδοτήσεις θα πάψουν να υπάρχουν μετά της απεγκατάσταση της μονάδας.</p>',
	'UN_SEO_INSTALL'		=> 'Απεγκατάσταση',
	'SEO_INSTALL_CONGRATS'		=> 'Συγχαρητήρια!',
	'SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Εχετε εγκαταστήσει επιτυχώς το  %1$s %2$s . Πηγαίνετε στον ΠΕΔ του phpBB και ρυθμίστε τις μονάδες του mod.<p>
	<p>Θα εμφανιστεί στην Κατηγορία phpBB SEO ; μεταξύ άλλων θα μπορείτε να :</p>
	<h2>Ρυθμίσετε το Google Sitemaps και ανατροφοδοτήσεις RSS </h2>
	<p>Τα Google sitemaps και οι ανατροφοδοτήσεις RSS υποστηρίζουν διαμόρφωση στυλ XSLt , τα phpBB’s CSS θα προσαρμοστούν χωρίς ούτε μία γραμμή κώδικα.</p>
	<p>Τα Google sitemaps οι ανατροφοδοτήσεις RSS θα αναγνωρίσουν αυτόματα τις ρυθμίσεις phpBB SEO mod rewrites. Η χρήση άλλου mod URL rewriting mod γίνεται παιχνίδι.</p>
	<h2>Δημιουργία προσωποποιημένου .htaccess</h2>
	<p>Με το phpBB SEO mod rewrite και μόλις ρυθμίσετε τις παραπάνω επιλογές, θα μπορέσετε να δημιουργήσετε ένα προσωποποιημένο .htaccess γρήγορα και να το αποθηκεύσετε στον σέρβερ σας.</p><br/><h3>Αναφορά εγκατάστασης :</h3>',
	'UN_SEO_INSTALL_CONGRATS'	=> 'Η μονάδα GYM Sitemaps &amp; RSS στον ΠΕΔ έχει αφαιρεθεί.',
	'UN_SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Εχετε πλήρως απεγκαταστήσει το  %1$s %2$s .<p>
	<p> Τα Google sitemaps και οι ανατροφοδοτήσεις RSS δεν υπάρχουν πλέον.</p>',
	'SEO_VALIDATE_INFO'	=> 'Πληροφορίες πιστοποίησης :',
	'SEO_LICENCE_TITLE'	=> 'GNU LESSER GENERAL PUBLIC LICENSE',
	'SEO_LICENCE_BODY'	=> 'The phpBB SEO GYM Sitemaps &amp; RSS is released under the GNU LESSER GENERAL PUBLIC LICENSE.',
	'SEO_SUPPORT_TITLE'	=> 'Υποστήριξη',
	'SEO_SUPPORT_BODY'	=> 'Πλήρης υποστήριξη δίνεται στο <a href="%1$s" title="Visit the %2$s forum" target="_phpBBSEO"><b>%2$s forum</b></a>. Παρέχουμε απαντήσεις σε προβήματα και απορίες εγκατάστασης, ρυθμίσης, και υποστηρίζουμε τυχόν προβλήματα.</p><p>Επισκεφθείτε το <a href="http://www.phpbb-seo.com/boards/" title="SEO Forum" target="_phpBBSEO"><b>Search Engine Optimization forums</b></a>.</p><p>Πρέπει να εγγραφείτε <a href="http://www.phpbb-seo.com/boards/profile.php?mode=register" title="Register to phpBB SEO" target="_phpBBSEO"><b>register</b></a>, να συνδεθείτε και <a href="%3$s" title="Be notified about updates" target="_phpBBSEO"><b>και να εγγραφείτε στο θέμα εκδόσεων</b></a> για να ενημερώνεστε με mail σε κάθε αναβάθμιση.',
	// Security
	'SEO_LOGIN'		=> 'Το φόρουμ αυτό απαιτεί να είστε συνδεμένοι για να δείτε αυτή τη σελίδα.',
	'SEO_LOGIN_ADMIN'	=> 'Το φόρουμ αυτό απαιτεί να είστε συνδεμένοι για να δείτε αυτή τη σελίδα.<br/>Η σύνοδος σας έχει διακοπεί για λόγους ασφαλείας.',
	'SEO_LOGIN_FOUNDER'	=> 'Το φόρουμ αυτό απαιτεί να είστε συνδεμένοι σαν ιδρυτής για να δείτε αυτή τη σελίδα.',
	'SEO_LOGIN_SESSION'	=> 'Αποτυχία ελέγχου συνόδου.<br/>Οι ρυθμίσεις δεν αλλάχθηκαν.<br/>Η σύνοδος σας έχει διακοπεί για λόγους ασφαλείας.',
	// Cache status
	'SEO_CACHE_FILE_TITLE'	=> 'Κατάσταση αρχείου λανθάνουσας μνήμης',
	'SEO_CACHE_STATUS'	=> 'Ο φάκελος λανθάνουσας μνήμης είναι ο : <b>%s</b>',
	'SEO_CACHE_FOUND'	=> 'Ο φάκελος λανθάνουσας μνήμης βρέθηκε.',
	'SEO_CACHE_NOT_FOUND'	=> 'Ο φάκελος λανθάνουσας μνήμης δεν βρέθηκε.',
	'SEO_CACHE_WRITABLE'	=> 'Ο φάκελος λανθάνουσας μνήμης είναι εγγράψιμος.',
	'SEO_CACHE_UNWRITABLE'	=> 'Ο φάκελος λανθάνουσας μνήμης ελιναι μη εγγράψιμος. Πρέπει να αλλάξετε το CHMOD σε 0777.',
	'SEO_CACHE_FORUM_NAME'	=> 'Ονομα Δ.Συζήτησης',
	'SEO_CACHE_URL_OK'	=> 'Ο δεσμός URL προστέθηκε στην λανθάνουσα μνήμη',
	'SEO_CACHE_URL_NOT_OK'	=> 'Ο δεσμός URL δεν προστέθηκε στην λανθάνουσα μνήμη',
	'SEO_CACHE_URL'		=> 'Τελικός URL',
	'SEO_CACHE_MSG_OK'	=> 'Το αρχείο λανθάνουσας μνήμης ανανεώθηκε επιτυχώς.',
	'SEO_CACHE_MSG_FAIL'	=> 'Σφάλμα κατά την ανανέωση του αρχείου λανθάνουσας μνήμης.',
	'SEO_CACHE_UPDATE_FAIL'	=> 'Ο δεσμός που δώσατε δεν μπορεί να χρησιμοποιηθή, ή λανθάνουσα μνήμη έμεινε απείραχτη.',
	// Update
	'UPDATE_SEO_INSTALL_INTRO'		=> 'Καλωσήλθατε στην αναβάθμιση του phpBB SEO GYM sitemaps &amp; RSS .',
	'UPDATE_SEO_INSTALL_INTRO_BODY'	=> '<p>Πρόκειται να αναβαθμίσετε τη μονάδα %1$s σε %2$s. Ο οδηγός αυτός θα αναβαθμίσει τη ΒΔ του phpBB.<br/>Οι ρυθμίσεις σας δεν πρόκειται να πειραχθούν.</p>
	<p><strong>Σημείωση:</strong> Ο οδηγός αυτός δεν θα αναβαθμίσει τα φυσικά αρχεία GYM Sitemaps &amp; RSS .<br/><br/>Για να αναβαθμήσετε από όλες τις εκδόσεις 2.0.x (phpBB3) <b>πρέπει</b> να φορτώσετε όλα τα αρχεία στο φάκελο <b>root/</b> στο phpBB/ ftp directory, και να κάνετε τις απαραίτητες αλλαγές (directory phpBB/styles/, .html, .js and .xsl).<br/><br/> <b>Μπορείτε</b> να επανεκκινήσετε τον οδηγό εγκατάστασης όποτε θέλετε, για παράδειγμα εαν δεν έχετε ανεβάσει τα αρχεία ή δεν κάνατε τις αλλαγές που πρέπει στα αρχεία phpBB.</p>',
	'UPDATE_SEO_INSTALL'		=> 'Αναβάθμιση',
	'SEO_ERROR_NOTINSTALLED'	=> 'Το GYM Sitemaps &amp; RSS δεν εγκαταστάθηκε!',
	'SEO_UPDATE_CONGRATS_EXPLAIN'	=> '<p>Εχετε επιτυχώς αναβαθμίσει το %1$s σε %2$s.<p>
	<p><strong>Note:</strong> Ο οδηγός αυτός δεν αναβαθμίζει τα φυσικά αρχεία GYM Sitemaps &amp; RSS.</p><br/><b>Παρακαλώ</b> κάντε τις παρακάτω αλλαγές στα αρχεία.<br/><h3>Αναφορά αναβάθμισης :</h3>',
));
?>