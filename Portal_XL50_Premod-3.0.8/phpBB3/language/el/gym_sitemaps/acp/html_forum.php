<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: html_forum.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
* Ελληνική μετάφραση από diastasi (thraki.info) & phpbbgr.com
*/
/**
*
* html_forum [Greek]
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
	'HTML_FORUM' => 'Μονάδα HTML Δ.Συζήτησης',
	'HTML_FORUM_EXPLAIN' => 'Εδώ είναι οι ρυθμίσεις για τη μονάδα HTML Δ.Συζήτησης.<br/> Κάποιες μπορεί να αγνοηθούν αναλόγως με τις ρυθμίσεις αγνόησης HTML.',
	'HTML_FORUM_EXCLUDE' => 'Εξαίρεση Δ.Συζητήσεων',
	'HTML_FORUM_EXCLUDE_EXPLAIN' => 'Εξαιρέστε κάποιες Δ.Συζητήσεις από την καταχώρηση στη λίστα.<br /><u>Σημείωση :</u> Αν μείνει κενό, όλες οι Δ.Συζητήσεις θα προστεθούν.',
	'HTML_FORUM_ALLOW_NEWS' => 'Νέα Δ.Συζητήσεων',
	'HTML_FORUM_ALLOW_NEWS_EXPLAIN' => 'Η σελίδα Νέων Δ.Συζητήσεων προβάλει τις τελευταίες δημοσιεύσεις από ένα η περισσότερα θέματα και προέρχονται από τις Δ.Συζητήσεις που θα επιλέξετε παρακάτω.',
	'HTML_FORUM_ALLOW_CAT_NEWS' => 'Νέα Κατηγορίας Δ.Συζητήσεων',
	'HTML_FORUM_ALLOW_CAT_NEWS_EXPLAIN' => 'Ενεργοποιήστε ή όχι τις σελίδες νέων ανά Δ.Συζήτηση. Οταν ενεργοποιηθεί, κάθε μη εξαιρούμενη Δ.Συζήτηση θα έχει μία σελίδα Νέων για τα θέματα της.',
	'HTML_FORUM_NEWS_IDS' => 'Νέα από ποιές Δ.Συζητήσεις',
	'HTML_FORUM_NEWS_IDS_EXPLAIN' => 'Εδώ επιλέγετε μία ή περισσότερες Δ.Συζητήσεις, ακόμη και πριβέ, σαν πηγή για την κύρια σελίδα Νέων.<br /><u>Σημείωση</u> :<br />Αν μείνει κενό, όλες οι Δ.Συζητήσεις θα προστεθούν.',
	'HTML_FORUM_LTOPIC' => 'Προαιρετική λίστα τελευταίων ενεργών θεμάτων',
	'HTML_FORUM_INDEX_LTOPIC' => 'Προβολή στα Περιεχόμενα της Δ.Συζήτησης',
	'HTML_FORUM_INDEX_LTOPIC_EXPLAIN' => 'Προβολή ή όχι των τελευταίων ενεργών θεμάτων στα Περιεχόμενα της Δ.Συζήτησης.<br/>Δώστε τον αριθμό των θεμάτων που θα προβάλονται ή 0 για να απενεργοποιηθεί.',
	'HTML_FORUM_CAT_LTOPIC' => 'Προβολή  στα Περιεχόμενα Κατηγοριών Δ.Συζήτησης',
	'HTML_FORUM_CAT_LTOPIC_EXPLAIN' => 'Προβολή ή όχι των τελευταίων ενεργών θεμάτων στα Περιεχόμενα κάθε Δ.Συζήτησης.<br/>Δώστε τον αριθμό των θεμάτων που θα προβάλονται ή 0 για να απενεργοποιηθεί.',
	'HTML_FORUM_NEWS_LTOPIC' => 'Προβολή στα Νέα της Δ.Συζήτησης',
	'HTML_FORUM_NEWS_LTOPIC_EXPLAIN' => 'Προβολή ή όχι των τελευταίων ενεργών θεμάτων στη σελίδα Νέων της Δ.Συζήτησης.<br/>Δώστε τον αριθμό των θεμάτων που θα προβάλονται ή 0 για να απενεργοποιηθεί.',
	'HTML_FORUM_CAT_NEWS_LTOPIC' => 'Προβολή  στα Νέα Κατηγοριών Δ.Συζήτησης',
	'HTML_FORUM_CAT_NEWS_LTOPIC_EXPLAIN' => 'Προβολή ή όχι των τελευταίων ενεργών θεμάτων στη σελίδα Νέων κάθε Δ.Συζήτησης.<br/>Δώστε τον αριθμό των θεμάτων που θα προβάλονται ή 0 για να απενεργοποιηθεί.',
	'HTML_FORUM_LTOPIC_PAGINATION' => 'Σελιδοποίηση τελευταίων ενεργών θεμάτων',
	'HTML_FORUM_LTOPIC_PAGINATION_EXPLAIN' => 'Προβολή ή όχι σελιδοποίησης για τη λίστα των τελευταίων ενεργών θεμάτων.',
	'HTML_FORUM_LTOPIC_EXCLUDE' => 'Εξαίρεση τελευταίων ενεργών θεμάτων',
	'HTML_FORUM_LTOPIC_EXCLUDE_EXPLAIN' => 'Εδώ μπορείτε να εξαιρέσετε μία ή περισσότερες Δ.Συζητήσεις από τη λίστα τελευταίων ενεργών θεμάτων.<br /><u>Σημείωση :</u> Αν μείνει κενό, όλες οι Δ.Συζητήσεις θα προστεθούν.',
	// Pagination
	'HTML_FORUM_PAGINATION' => 'Σελιδοποίηση Περιεχομένων Δ.Συζήτησης',
	'HTML_FORUM_PAGINATION_EXPLAIN' => 'Ενεργοποιήστε ή όχι τη σελιδοποίηση για τα Περιεχόμενα Δ.Συζήτησης. Ενεργοποιήστε το όταν θέλετε να προβάλεται πάνω από μία σελίδες και να βλέπετε όλα τα θέματα σε κάθε σελίδα Περιεχομένων Δ.Συζητήσεων.',
	'HTML_FORUM_PAGINATION_LIMIT' => 'Θέματα ανά σελίδα',
	'HTML_FORUM_PAGINATION_LIMIT_EXPLAIN' => 'Εάν η σελιδοποίηση Περιεχομένων Δ.Συζήτησης είναι ενεργή, τότε εδώ ορίστε πόσα θέματα να προβάλονται σε κάθε σελίδα.',
	// Content
	'HTML_FORUM_CONTENT' => 'Ρυθμίσεις περιεχομένων Δ.Συζήτησης',
	'HTML_FORUM_FIRST' => 'Ταξινόμηση Περιεχομένων',
	'HTML_FORUM_FIRST_EXPLAIN' => 'Τα Περιεχόμενα μπορούν να ταξινομηθούν κατά νεώτερη ή παλαιότερη ημερομηνία δημοσίευσης. Αυτό σημαίνει ότι μπορείτε να χρησιμοποιήσετε το πότε πρωτοδημιουργήθηκε το θέμα ή πότε απαντήθηκε τελευταία για να κάνετε την ταξινόμηση.',
	'HTML_FORUM_NEWS_FIRST' => 'Ταξινόμηση Νέων',
	'HTML_FORUM_NEWS_FIRST_EXPLAIN' => 'Οι σελίδες νέων μπορούν να ταξινομηθούν κατά νεώτερη ή παλαιότερη ημερομηνία δημοσίευσης. Αυτό σημαίνει ότι μπορείτε να χρησιμοποιήσετε το πότε πρωτοδημιουργήθηκε το θέμα ή πότε απαντήθηκε τελευταία για να κάνετε την ταξινόμηση.',
	'HTML_FORUM_LAST_POST' => 'Προβολή τελευταίας δημοσίευσης',
	'HTML_FORUM_LAST_POST_EXPLAIN' => 'Προβολή ή όχι πληροφοριών της τελευταίας δημοσίευσης του θέματος.',
	'HTML_FORUM_POST_BUTTONS' => 'Προβολή πλήκτρων δημοσίευσης',
	'HTML_FORUM_POST_BUTTONS_EXPLAIN' => 'Προβολή ή όχι πλήκτρων δημοσίευσης όπως Απάντηση, Επεξεργασία, κλπ...',
	'HTML_FORUM_RULES' => 'Προβολή κανόνων Δ.Συζήτησης',
	'HTML_FORUM_RULES_EXPLAIN' => 'Προβολή ή όχι των κανόνων στα Νέα και τα Περιεχόμενα Δ.Συζήτησης.',
	'HTML_FORUM_DESC' => 'Προβολή περιγραφής Δ.Συζήτησης',
	'HTML_FORUM_DESC_EXPLAIN' => 'Προβολή ή όχι της περιγραφής στα Νέα και τα Περιεχόμενα Δ.Συζήτησης.',
	// Reset settings
	'HTML_FORUM_RESET' => 'Μονάδα HTML Δ.Συζήτησης',
	'HTML_FORUM_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές μονάδας HTML Δ.Συζήτησης.',
	'HTML_FORUM_MAIN_RESET' => 'Κύριο HTML Δ.Συζήτησης',
	'HTML_FORUM_MAIN_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές στην κύρια καρτέλα "Ρυθμίσεις HTML" της μονάδας HTML Δ.Συζήτησης.',
	'HTML_FORUM_CONTENT_RESET' => 'Νέα HTML Δ.Συζήτησης',
	'HTML_FORUM_CONTENT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές Νέων της μονάδας HTML Δ.Συζήτησης.',
	'HTML_FORUM_CACHE_RESET' => 'Λανθάνουσα μνήμη HTML Δ.Συζήτησης',
	'HTML_FORUM_CACHE_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές Λανθάνουσας μνήμης της μονάδας HTML Δ.Συζήτησης.',
	'HTML_FORUM_MODREWRITE_RESET' => 'URL rewriting HTML Δ.Συζήτησης',
	'HTML_FORUM_MODREWRITE_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές URL rewriting της μονάδας HTML Δ.Συζήτησης.',
	'HTML_FORUM_GZIP_RESET' => 'Συμπίεση Gunzip HTML Δ.Συζήτησης',
	'HTML_FORUM_GZIP_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές συμπίεσης Gunzip της μονάδας HTML Δ.Συζήτησης.',
	'HTML_FORUM_LIMIT_RESET' => 'Ορια HTML Δ.Συζήτησης',
	'HTML_FORUM_LIMIT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές ορίων της μονάδας HTML Δ.Συζήτησης.',
	'HTML_FORUM_SORT_RESET' => 'Ταξινόμηση HTML Δ.Συζήτησης',
	'HTML_FORUM_SORT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές ταξινόμησης της μονάδας HTML Δ.Συζήτησης.',
	'HTML_FORUM_PAGINATION_RESET' => 'Σελιδοποίηση',
	'HTML_FORUM_PAGINATION_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές σελιδοποίησης της μονάδας HTML Δ.Συζήτησης.',
));
?>