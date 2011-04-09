<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: google_forum.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
* Ελληνική μετάφραση από diastasi (thraki.info) & phpbbgr.com
*/
/**
*
* google_forum [Greek]
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
	'GOOGLE_FORUM' => 'Sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_EXPLAIN' => 'Εδώ είναι οι ρυθμίσεις για τη μονάδα Google sitemap Δ.Συζητήσεων.<br/> Κάποιες μπορεί να αγνοηθούν αναλόγως με τις Κύριες και Google sitemaps ρυθμίσεις αγνόησης.',
	'GOOGLE_FORUM_SETTINGS' => 'Ρυθμίσεις sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_SETTINGS_EXPLAIN' => 'Οι παρακάτω ρυθμίσεις αφορούν αποκλειστικά τη μονάδα Google Sitemaps Δ.Συζητήσεων.',
	'GOOGLE_FORUM_STICKY_PRIORITY' => 'Προτεραιότητα Σημειώσεων',
	'GOOGLE_FORUM_STICKY_PRIORITY_EXPLAIN' => 'Προτεραιότητα Σημειώσεων (πρέπει να είναι ένας αριθμός μεταξύ 0.0 &amp; 1.0 ).',
	'GOOGLE_FORUM_ANNOUCE_PRIORITY' => 'Προτεραιότητα Ανακοινώσεων',
	'GOOGLE_FORUM_ANNOUCE_PRIORITY_EXPLAIN' => 'Προτεραιότητα Ανακοινώσεων (πρέπει να είναι ένας αριθμός μεταξύ 0.0 &amp; 1.0 ).',
	'GOOGLE_FORUM_GLOBAL_PRIORITY' => 'Προτεραιότητα Γενικών Ανακοινώσεων',
	'GOOGLE_FORUM_GLOBAL_PRIORITY_EXPLAIN' => 'Προτεραιότητα Γενικών Ανακοινώσεων (πρέπει να είναι ένας αριθμός μεταξύ 0.0 &amp; 1.0 ).',
	'GOOGLE_FORUM_EXCLUDE' => 'Εξαίρεση Δ.Συζητήσεων',
	'GOOGLE_FORUM_EXCLUDE_EXPLAIN' => 'Εξαιρέστε κάποιες Δ.Συζητήσεις από την καταχώρηση στα Google Sitemaps.<br />Δώστε το ID τους για να εξαιρεθούν, χωρισμένες με κόμμα : π.χ. 1,5,8.<br /><u>Σημείωση :</u> Αν το πεδίο μείνει κενό, όλες οι Δ.Συζητήσεις θα προστεθούν.',
	// Reset settings
	'GOOGLE_FORUM_RESET' => 'Μονάδα Sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_RESET_EXPLAIN' => 'Επαναφορά όλων των επιλογών της μονάδας Sitemaps Δ.Συζητήσεων στις προεπιλεγμένες τιμές.',
	'GOOGLE_FORUM_MAIN_RESET' => 'Κύριο Sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_MAIN_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές στη καρτέλα "ρυθμίσεις Sitemaps Δ.Συζητήσεων" (κύριο) της μονάδας Sitemaps Δ.Συζητήσεων.',
	'GOOGLE_FORUM_CACHE_RESET' => 'Λανθάνουσα μνήμη Sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_CACHE_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές λανθάνουσας μνήμης Sitemaps Δ.Συζητήσεων.',
	'GOOGLE_FORUM_MODREWRITE_RESET' => 'URL rewriting Sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_MODREWRITE_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές URL rewriting Sitemaps Δ.Συζητήσεων.',
	'GOOGLE_FORUM_GZIP_RESET' => 'Gunzip Sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_GZIP_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές Συμπίεσης Gunzip Sitemaps Δ.Συζητήσεων.',
	'GOOGLE_FORUM_LIMIT_RESET' => 'Ορια Sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_LIMIT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές ορίων Sitemaps Δ.Συζητήσεων.',
	'GOOGLE_FORUM_SORT_RESET' => 'Ταξινόμηση Sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_SORT_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές ταξινόμησης Sitemaps Δ.Συζητήσεων.',
	'GOOGLE_FORUM_PAGINATION_RESET' => 'Σελιδοποίηση Sitemaps Δ.Συζητήσεων',
	'GOOGLE_FORUM_PAGINATION_RESET_EXPLAIN' => 'Επαναφορά σε προεπιλεγμένες όλες τις επιλογές σελιδοποίησης Sitemaps Δ.Συζητήσεων.',
));
?>
