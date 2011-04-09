<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: rss_forum.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
* Ελληνική μετάφραση από diastasi (thraki.info) & phpbbgr.com
*/
/**
*
* rss_forum [Greek]
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
	'RSS_FORUM' => 'Μονάδα RSS',
	'RSS_FORUM_EXPLAIN' => 'Αυτές είναι οι ρυθμίσεις για τη μονάδα τροφοδοσίας RSS.<br/> Κάποιες μπορεί να αγνοηθούν αναλόγως με τις Κύριες και RSS ρυθμίσεις αγνόησης.',
	'RSS_FORUM_ALTERNATE' => 'Εναλλακτικοί δεσμοί RSS',
	'RSS_FORUM_ALTERNATE_EXPLAIN' => 'Προβολή ή όχι εναλλακτικών δεσμών RSS στην μπάρα πλοήγησης του browser',
	'RSS_FORUM_EXCLUDE' => 'Εξαιρέσεις Δ.Συζητήσεων',
	'RSS_FORUM_EXCLUDE_EXPLAIN' => 'Μπορείτε να εξαιρέσετε καποιες Δ.Συζητήσεις απο την τροφοδοσία RSS.<br />Δώστε το ID τους για να εξαιρεθούν, χωρισμένες με κόμμα : π.χ. 1,5,8.<br /><u>Σημείωση :</u> Αν το πεδίο μείνει άδειο, όλες οι Δ.Συζητήσεις θα περιληφθούν.',
	// Content
	'RSS_FORUM_CONTENT' => 'Ρυθμίσεις Περιεχομένου Δ.Συζήτησης',
	'RSS_FORUM_FIRST' => 'Πρώτο μήνυμα',
	'RSS_FORUM_FIRST_EXPLAIN' => 'Προβολή ή όχι του δεσμού της πρώτης δημοσίευσης για όλα τα θέματα στη τροφοδοσία RSS.<br/> Εξορισμού, μόνο η τελευταία δημοσίευση του θέματος θα περιληφθεί. Η προβολή του πρώτου σημαίνει επιπλέον φορτίο για τον Διακομιστή.',
	'RSS_FORUM_LAST' => 'Τελευταίο μήνυμα',
	'RSS_FORUM_LAST_EXPLAIN' => 'Προβολή ή όχι του τελευταίου μηνύματος για όλα τα θέματα που περιλαμβάνονται στην τροφοδοσία RSS.<br/>  Εξορισμού, μόνο η τελευταία δημοσίευση του θέματος θα περιληφθεί. Η επιλογή είναι χρήσιμη εάν θέλετε να προβάλετε μόνο το δεσμό του πρώτου μηνύματος στις τροφοδοσίες RSS.<br/>Σημείωση: Ρυθμίζοντας το πρωτο μήνυμα σε ΝΑΙ και το τελευταίο μήμυμα σε ΟΧΙ είναι σαν να δημιουργείτε τροφοδοσία νέων.',
	'RSS_FORUM_RULES' => 'Προβολή κανόνων Δ.Συζήτησης',
	'RSS_FORUM_RULES_EXPLAIN' => 'Προβολή ή όχι των κανόνων Δ.Συζήτησης στα τροφοδοσίες RSS.',
	// Reset settings
	'RSS_FORUM_RESET' => 'Μονάδα RSS Δ.Συζητησης',
	'RSS_FORUM_RESET_EXPLAIN' => 'Επαναφορά όλως των επιλογών της μονάδας RSS στις προεπιλεγμένες τιμές.',
	'RSS_FORUM_MAIN_RESET' => 'Κύριο RSS Δ.Συζητήσεων',
	'RSS_FORUM_MAIN_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές στη καρτέλα "ρυθμίσεις τροφοδοσίας RSS" (κύριο) της μονάδας RSS.',
	'RSS_FORUM_CONTENT_RESET' => 'Περιεχόμενα RSS Δ.Συζητήσεων',
	'RSS_FORUM_CONTENT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές περιεχομένου για τη μονάδα RSS.',
	'RSS_FORUM_CACHE_RESET' => 'Λανθάνουσα μνήμη RSS Δ.Συζητήσεων',
	'RSS_FORUM_CACHE_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές λανθάνουσας μνήμης για τη μονάδα RSS.',
	'RSS_FORUM_MODREWRITE_RESET' => 'URL rewriting RSS Δ.Συζητήσεων',
	'RSS_FORUM_MODREWRITE_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές URL rewriting για τη μονάδα RSS.',
	'RSS_FORUM_GZIP_RESET' => 'Gunzip RSS Δ.Συζητήσεων',
	'RSS_FORUM_GZIP_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές Συμπίεσης Gunzip για τη μονάδα RSS.',
	'RSS_FORUM_LIMIT_RESET' => 'Ορια RSS Δ.Συζητήσεων',
	'RSS_FORUM_LIMIT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές ορίων για τη μονάδα RSS.',
	'RSS_FORUM_SORT_RESET' => 'Ταξινόμηση RSS Δ.Συζητήσεων',
	'RSS_FORUM_SORT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές ταξινόμησης για τη μονάδα RSS.',
	'RSS_FORUM_PAGINATION_RESET' => 'Σελιδοποίηση RSS Δ.Συζητήσεων',
	'RSS_FORUM_PAGINATION_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές σελιδοποίησης για τη μονάδα RSS.',
));
?>
