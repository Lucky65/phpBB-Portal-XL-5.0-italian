<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_google.php 134 2009-11-02 11:13:45Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
* Ελληνική μετάφραση από diastasi (thraki.info) & phpbbgr.com
*/
/**
*
* gym_google [Greek]
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
	'GOOGLE_MAIN' => 'Ρυθμίσεις Google Sitemaps',
	'GOOGLE_MAIN_EXPLAIN' => 'Κύριες ρυθμίσεις για τη μονάδα Google sitemap.<br/>Εξορισμού θα εφαρμοστούν σε όλες τις μονάδες Google sitemaps.',
	// Linking setup
	'GOOGLE_LINKS_ACTIVATION' => 'Δεσμοί Δ.Συζήτησης',
	'GOOGLE_LINKS_MAIN' => 'Κύριοι δεσμοί',
	'GOOGLE_LINKS_MAIN_EXPLAIN' => 'Προβολή ή όχι sitemap στο υποσέλιδο.<br/>Αυτή η λειτουργία απαιτεί να είναι ενεργή η προβολή κύριων δεσμών στις γενικές ρυθμίσεις.',
	'GOOGLE_LINKS_INDEX' => 'Δεσμοί στο Ευρετήριο',
	'GOOGLE_LINKS_INDEX_EXPLAIN' => 'Προβολή ή όχι δεσμών sitemap για κάθε Δ.Συζήτηση του ευρετηρίου. Οι δεσμοί αυτοί προστίθενται κάτω από την περιγραφή της Δ.Συζήτησης.<br/>Η λειτουργία αυτή απαιτεί οι δεσμοί στο ευρετήριο να είναι ενεργοί στις κύριες ρυθμίσεις.',
	'GOOGLE_LINKS_CAT' => 'Δεσμοί στη σελίδα Δ.Συζήτησης',
	'GOOGLE_LINKS_CAT_EXPLAIN' => 'Προβολή ή όχι δεσμών sitemap της τρέχουσας Δ.Συζήτησης. Οι δεσμοί αυτοί προστίθενται κάτω από τον τίτλο της Δ.Συζήτησης.<br/>Η λειτουργία αυτή απαιτεί οι δεσμοί στή σελίδα Δ.Συζήτησης να είναι ενεργοί στις κύριες ρυθμίσεις.',
	// Reset settings
	'GOOGLE_ALL_RESET' => '<b>Ολες</b> οι μονάδες Google sitemaps',
	'GOOGLE_URL' => 'Google Sitemaps URL',
	'GOOGLE_URL_EXPLAIN' => 'Δώστε το πλήρες URL της αρχικής sitemap π.χ. http://www.example.com/paradeigma/ εαν το sitemap.php είναι εγκατεστημένο στο http://www.example.com/paradeigma/.<br/>Αυτή η επιλογή είναι χρήσιμη όταν το phpBB δεν είναι εγκατεστημένο στο ριζικό κατάλογο του domain αλλά εσείς θέλετε να περιλάβετε δεσμούς από το ριζικό κατάλογο του domain στο Google sitemaps.',
	'GOOGLE_PING' => 'Google Ping',
	'GOOGLE_PING_EXPLAIN' => 'Κάνει Ping στη Google κάθε φορά που ανανεώνεται το sitemap.',
	'GOOGLE_THRESHOLD' => 'Κατώφλι Sitemaps',
	'GOOGLE_THRESHOLD_EXPLAIN' => 'Το Sitemap σε μια Δ.Συζήτηση θα εμφανιστεί μόλις ο αριθμός των δημοσιεύσεων υπερβεί αυτή την τιμή.',
	'GOOGLE_PRIORITIES' => 'Ρυθμίσεις προτεραιότητας',
	'GOOGLE_DEFAULT_PRIORITY' => 'Εξορισμού προτεραιότητα',
	'GOOGLE_DEFAULT_PRIORITY_EXPLAIN' => 'Η Εξορισμού προτεραιότητα για URL που περιλαμβάνονται σε όλα τα sitemaps. Θα χρησιμοποιηθεί εκτός εαν γίνουν δυνατές επιπλέον επιλογές από τη μονάδα (πρέπει να είναι ένας αριθμός μεταξύ 0.0 &amp; 1.0 )',
	'GOOGLE_XSLT' => 'Στυλ XSLT',
	'GOOGLE_XSLT_EXPLAIN' => 'Ενεργοποιεί το στυλ XSL για να δημιουργηθεί Google sitemaps ορατό για χρήστες με δεσμούς κλπ. Αυτό θα μπορεί να γίνει μόνο εάν διαγράψετε τη Λανθάνουσα μνήμη Google sitemaps χρησιμοποιώντας το δεσμό Συντήρηση πιο πάνω.',
	'GOOGLE_LOAD_PHPBB_CSS' => 'Φόρτωση phpBB CSS',
	'GOOGLE_LOAD_PHPBB_CSS_EXPLAIN' => 'Το GYM sitemap χρησιμοποιεί το σύστημα προτύπων phpBB3. Τα XSL στυλ που χρησιμοποιούνται για να δημιουργήσουν html είναι συμβατά με το στύλ phpBB3.<br/>Με αυτό, μπορείτε να εφαρμόσετε τα phpBB CSS στα στυλ XSL αντί για τα εξορισμού. Με αυτό τον τρόπο όλα τα θέματα, φόντα, χρώματα και εικόνες θα χρησιμοποιηθούν για να δημιουργηθούν τα Google sitemap.<br/>Αυτό θα έχει αποτέλεσμα όταν σβήσετε τη Λανθάνουσα μνήμη RSS στο μενού "Συντήρηση".<br/>Αν το αρχείο στυλ Google sitemaps δεν βρεθεί στο στυλ, το εξορισμού στυλ (βασισμένο στο prosilver) θα χρησιμοποιηθεί.<br/>Μη δοκιμάσετε να χρησιμοποιήσετε τα πρότυπα prosilver με άλλο στυλ γιατί το CSS δεν ταιριάζει.',
	// Auth settings
	'GOOGLE_AUTH_SETTINGS' => 'Ρυθμίσεις Εξουσιοδήτησης',
	'GOOGLE_ALLOW_AUTH' => 'Εξουσιοδότηση',
	'GOOGLE_ALLOW_AUTH_EXPLAIN' => 'Ενεργοποιεί την εξουσιοδότηση για τα Sitemaps. Ενεργό, οι συνδεμένοι χρήστες και τα bots θα μπορούν να πλοηγηθούν σε πριβέ sitemaps αν έχουν τα κατάλληλα δικαιώματα.',
	'GOOGLE_CACHE_AUTH' => 'Λανθ. μνήμη πριβέ sitemaps',
	'GOOGLE_CACHE_AUTH_EXPLAIN' => 'Μπορείτε να απενεργοποιήσετε τη λανθ.μνήμη για μη Δημόσια sitemaps όταν επιτρέπεται.<br/> Η λανθ. μνήμη πριβέ sitemaps αυξάνει τον αριθμό των αρχείων που δημιουργούνται. Αυτό δεν είναι πρόβλημα, αλλά μπορείτε να επιλέξετε αν θέλετε να γίνεται μόνο στα Δημόσια sitemap.',
));
?>
