<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: google_txt.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
* Ελληνική μετάφραση από diastasi (thraki.info) & phpbbgr.com
*/
/**
*
* google_txt [Greek]
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
	'GOOGLE_TXT' => 'TXT Sitemap',
	'GOOGLE_TXT_EXPLAIN' => 'Εδω είναι οι παράμετροι για τη μονάδα TXT Google sitemap. Μπορεί να περιλάβει πλήρως τη λιστα των δεσμών URL από ένα αρχείο κειμένου (δεσμός ανά σειρά) στο GYM sitemaps και να χρησιμοποιήσει όλες τις δυνατότητες όπως στυλ XSL και Λανθάνουσα μνήμη.<br/> Κάποιες ρυθμίσεις μπορεί να αγνοηθούν αναλόγως με τις Κύριες και Google sitemaps ρυθμίσεις αγνόησης.<br/>Κάθε αρχείο κειμένου που προστίθεται στη φάκελο gym_sitemaps/sources/ θα ληφθεί υπόψιν μόλις σβήσετε τη λανθάνουσα μνήμη μονάδας ACP, χρησιμοποιώντας το δεσμό Συντήρησης παραπάνω.<br/> Κάθε αρχείο κειμένου λίστας δεσμών πρέπει να αποτελείται από ενα πλήρες URL ανά γραμμή και πρέπει να ακολουθεί μία βασική αρχή για την ονομασία αρχείων : <b>google_</b>txt_file_name<b>.txt</b>.<br />Μια καταχώρηση θα δημιουργηθεί στην αρχική σελίδα Sitemap με URL<b>example.com/sitemap.php?txt=txt_file_name</b> and <b>example.com/txt-txt_file_name.xml</b> όταν γίνει url rewrite.<br/> Το όνομα του αρχείου πηγής πρέπει να περιλαμβάνει αλφαριθμητικούς χαρακτήρες (0-9a-z) συν διαχωριστές "_" και "-".<br/><u style="color:red;">Σημείωση :</u><br/> Είναι καλό να λειτουργείτε τη λανθάνουσα μνήμη για τα sitemap της μονάδας αυτής για να αποφύγετε επιζήμια ενσωμάτωση μεγάλων αρχείων κειμένου.',
	// Main
	'GOOGLE_TXT_CONFIG' => 'Ρυθμίσεις TXT Sitemap',
	'GOOGLE_TXT_CONFIG_EXPLAIN' => 'Κάποιες ρυθμίσεις μπορεί να αγνοηθούν αναλόγως με τις Κύριες και Google sitemaps ρυθμίσεις αγνόησης.',
	'GOOGLE_TXT_RANDOMIZE' => 'Τυχαία εμφάνιση',
	'GOOGLE_TXT_RANDOMIZE_EXPLAIN' => 'Μπορείτε να παρετε τυχαία URL απο το αρχείο κειμένου. Αλλάζοντας τη σειρά σε συχνή βάση βοηθά λιγάκι την ανάγνωση του φορουμ απο τα bots. Η επιλογή είναι χρήσιμη όταν για παράδειγμα περιορίσετε τους δεσμούς σε 1000 ενώ το αρχείο κειμένου εχει 5000, σε αυτή την περίπτωση όλοι οι δεσμοί θα εμφανιστουν στο sitemap.',
	'GOOGLE_TXT_UNIQUE' => 'Ελεγχος διπλοεγγραφής',
	'GOOGLE_TXT_UNIQUE_EXPLAIN' => 'Ενεργοποιήστε για να είστε σίγουροι ότι κάποιοι δεσμοί που εμφανίζονται πάνω από μία φορά στο κείμενο θα εμφανιστούν μία φορά στο sitemap.',
	'GOOGLE_TXT_FORCE_LASTMOD' => 'Τελευταία τροποποίηση',
	'GOOGLE_TXT_FORCE_LASTMOD_EXPLAIN' => 'Μπορείτε να επιβάλετε την ημερομηνία τελευταίας τροποποίησης βασισμένο στον κύκλο διάρκειας λανθάνουσας μνήμης ( ακόμη κι αν δεν είνει ενεργοποιημένη) για όλα τα URL στο sitemap. Η μονάδα θα υπολογίσει προτεραιότητες και θα αλλάξει συχνότητες βάση αυτής της ημερομηνίας. Εξορισμού, δεν προστίθεται lastmod tag.',
	// Reset settings
	'GOOGLE_TXT_RESET' => 'Μονάδα TXT Sitemaps',
	'GOOGLE_TXT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές ταξινόμησης TXT Sitemaps.',
	'GOOGLE_TXT_MAIN_RESET' => 'Ρυθμίσεις TXT Sitemap',
	'GOOGLE_TXT_MAIN_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές στη καρτέλα "ρυθμίσεις TXT Sitemap" (κύριο) του TXT Sitemap.',
	'GOOGLE_TXT_CACHE_RESET' => 'Λανθάνουσα μνήμη TXT Sitemap',
	'GOOGLE_TXT_CACHE_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές λανθάνουσας μνήμης TXT Sitemap.',
	'GOOGLE_TXT_GZIP_RESET' => 'Συμπίεση Gunzip TXT Sitemap',
	'GOOGLE_TXT_GZIP_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές Συμπίεσης Gunzip TXT Sitemap.',
	'GOOGLE_TXT_LIMIT_RESET' => 'Ορια TXT Sitemap',
	'GOOGLE_TXT_LIMIT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές ορίων TXT Sitemap.',
));
?>
