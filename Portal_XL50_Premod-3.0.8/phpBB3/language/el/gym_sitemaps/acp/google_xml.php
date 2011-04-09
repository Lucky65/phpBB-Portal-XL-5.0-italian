<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: google_xml.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
* Ελληνική μετάφραση από diastasi (thraki.info) & phpbbgr.com
*/
/**
*
* google_xml [Greek]
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
	'GOOGLE_XML' => 'XML Sitemap',
	'GOOGLE_XML_EXPLAIN' => 'Εδω είναι οι παράμετροι για τη μονάδα XML Google sitemap. Μπορεί να περιλάβει πλήρως τη λιστα των δεσμών URL από ένα αρχείο xml (δεσμός ανά σειρά) στο GYM sitemaps και να χρησιμοποιήσει όλες τις δυνατότητες όπως στυλ XSL και Λανθάνουσα μνήμη.<br/> Κάποιες ρυθμίσεις μπορεί να αγνοηθούν αναλόγως με τις Κύριες κι ρυθμίσεις Google sitemaps αγνόησης.<br/>Κάθε αρχείο xml που προστίθεται στη φάκελο gym_sitemaps/sources/ θα ληφθεί υπόψιν μόλις σβήσετε τη λανθάνουσα μνήμη μονάδας ACP, χρησιμοποιώντας το δεσμό Συντήρησης παραπάνω.<br/> Κάθε αρχείο xml λίστας δεσμών πρέπει να αποτελείται από ενα πλήρες URL ανά γραμμή και πρέπει να ακολουθεί μία βασική αρχή για την ονομασία αρχείων : <b>google_</b>xml_file_name<b>.xml</b>.<br />Μια καταχώρηση θα δημιουργηθεί στην αρχική σελίδα Sitemap με URL <b>example.com/sitemap.php?xml=xml_file_name</b> or <b>example.com/xml-xml_file_name.xml</b> όταν γίνει url rewrite.<br/> Το όνομα του αρχείου πηγής πρέπει να περιλαμβάνει αλφαριθμητικούς χαρακτήρες (0-9a-z) συν διαχωριστές "_" και "-".<br/><u style="color:red;">Σημείωση :</u><br/> Είναι καλό να λειτουργείτε τη λανθάνουσα μνήμη για τα sitemap της μονάδας αυτής για να αποφύγετε επιζήμια ενσωμάτωση μεγάλων αρχείων xml.',
	// Main
	'GOOGLE_XML_CONFIG' => 'Ρυθμίσεις XML Sitemap',
	'GOOGLE_XML_CONFIG_EXPLAIN' => 'Κάποιες ρυθμίσεις μπορεί να αγνοηθούν αναλόγως με τις Κύριες κι ρυθμίσεις Google sitemaps αγνόησης.',
	'GOOGLE_XML_RANDOMIZE' => 'Τυχαία εμφάνιση',
	'GOOGLE_XML_RANDOMIZE_EXPLAIN' => 'Μπορείτε να παρετε τυχαία URL απο το αρχείο xml. λλάζοντας τη σειρά σε συχνή βάση βοηθά λιγάκι την ανάγνωση του φορουμ απο τα bots. Η επιλογή είναι χρήσιμη όταν για παράδειγμα περιορίσετε τους δεσμούς σε 1000 ενώ το αρχείο xml εχει 5000, σε αυτή την περίπτωση όλοι οι δεσμοί θα εμφανιστουν στο sitemap.<br/><u>Σημείωση :</u><br/>TΗ επιλογή αυτή απαιτεί την ανάκτηση από το αρχείο πηγής, συνιστάται να χρησιμοποιείται όταν είναι ενεργοποιημένη η Λανθάνουσα μνήμη.',
	'GOOGLE_XML_UNIQUE' => 'Ελεγχος διπλοεγγραφής',
	'GOOGLE_XML_UNIQUE_EXPLAIN' => 'Ενεργοποιήστε για να είστε σίγουροι ότι εάν κάποιοι δεσμοί URL εμφανίζονται πρεισσότερο από μία φορά σε ένα αρχείο πηγής xml, θα εμφανιστεί μόνο μία φορά στο sitemap.<br/><u>Σημείωση :</u><br/>Η επιλογή αυτή απαιτεί την ανάκτηση από το αρχείο πηγής, συνιστάται να χρησιμοποιείται όταν είναι ενεργοποιημένη η Λανθάνουσα μνήμη.',
	'GOOGLE_XML_FORCE_LASTMOD' => 'Τελευταία τροποποίηση',
	'GOOGLE_XML_FORCE_LASTMOD_EXPLAIN' => 'Μπορείτε να επιβάλετε την ημερομηνία τελευταίας τροποποίησης βασισμένο στον κύκλο διάρκειας λανθάνουσας μνήμης ( ακόμη κι αν δεν είναι ενεργοποιημένη) για όλα τα URL στο sitemap. Η μονάδα θα υπολογίσει προτεραιότητες και θα αλλάξει συχνότητες βάση αυτής της ημερομηνίας. Αλλιως θα χρησιμοποιηθούν οι τελευταίες τροποποιήσεις, αλλαγές συχνότητας και ρυθμίσεις προτεραιότητας από το αρχείο πηγής xml, ή καμία προσάρτηση σε περίπτωση που δεν έχει το αρχείο πηγής.<br/><u>Σημείωση :</u><br/>Η επιλογή αυτή απαιτεί την ανάκτηση από το αρχείο πηγής, συνιστάται να χρησιμοποιείται όταν είναι ενεργοποιημένη η Λανθάνουσα μνήμη.',
	'GOOGLE_XML_FORCE_LIMIT' => 'Οριο Εξαναγκασμού',
	'GOOGLE_XML_FORCE_LIMIT_EXPLAIN' => 'Με αυτό μπορείτε να είστε σίγουροι ότι στο sitemap δεν θα εμφανιστούν παραπάνω σετ URL από το ανώτατο όριο.<br/><u>Σημείωση :</u><br/>Η επιλογή αυτή απαιτεί την πλήρη ανάκτηση από το αρχείο πηγής, συνιστάται να χρησιμοποιείται όταν είναι ενεργοποιημένη η Λανθάνουσα μνήμη.',
	// Reset settings
	'GOOGLE_XML_RESET' => 'Μονάδα XML Sitemap',
	'GOOGLE_XML_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές στη καρτέλα "ρυθμίσεις XML Sitemap" (κύριο) της μονάδας XML Sitemap.',
	'GOOGLE_XML_MAIN_RESET' => 'Ρυθμίσεις XML Sitemap',
	'GOOGLE_XML_MAIN_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές στη καρτέλα "ρυθμίσεις XML Sitemap" (κύριο) της μονάδας XML Sitemap.',
	'GOOGLE_XML_CACHE_RESET' => 'Λανθάνουσα μνήμη XML Sitemaps',
	'GOOGLE_XML_CACHE_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές λανθάνουσας μνήμης για τη μονάδα XML Sitemap.',
	'GOOGLE_XML_GZIP_RESET' => 'Συμπίεση Gunzip XML Sitemaps',
	'GOOGLE_XML_GZIP_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές Συμπίεσης Gunzip για τη μονάδα XML Sitemap.',
	'GOOGLE_XML_LIMIT_RESET' => 'Ορια XML Sitemap',
	'GOOGLE_XML_LIMIT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές ορίων της μονάδας XML Sitemap.',
));
?>
