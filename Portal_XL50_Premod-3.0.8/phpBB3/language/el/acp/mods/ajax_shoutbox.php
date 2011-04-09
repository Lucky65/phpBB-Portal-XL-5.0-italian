<?php
/**
*
* Module info ajax shoutbox [Greek]
*
* @package language
* @version $Id: ajax_shoutbox.php 253 2008-02-16 13:50:55Z paul $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* translated by Diastasi (thraki.info) & phpbb2.gr
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
	'ACP_SHOUTBOX_SETTINGS'				=> 'Ρυθμίσεις Ajax shoutbox',
	'ACP_SHOUTBOX_SETTINGS_EXPLAIN'     => 'Εδώ θα βρείτε κάποιες βασικές ρυθμίσεις του ajax shoutbox.',
	'ACP_SHOUTBOX_OVERVIEW'             => 'Επισκόπηση Ajax shoutbox',

	// Overview
	'AS_OVERVIEW'			=> 'Επισκόπηση MOD',
	'AS_OVERVIEW_EXPLAIN'	=> 'Εδώ θα δείτε κάποια στατιστικά σχετικά με το Ajax Shoutbox.<br />
	Εάν βρείτε κάποιο bug, ή θέλετε να ζητήσετε κάποια προσθήκη, επισκεφθείτε το <a href="http://www.paulsohier.nl/ajax">trac</a>.<br />
	Πρίν το αναφέρετε, ελεγξτε εάν το bug ή η προσθήκη έχει ήδη αναφερθεί. <br />
	Πληροφορίες, κατάσταση ανάπτυξης και άλλα πολλά μπορούν επίσης να βρεθούν στο trac.<br />
	Οι προσβάσεις για το shoutbox μπορούν να βρεθούν στη σελίδα προσβάσεων, και μετά δείτε τις προσβάσεις ομάδων ή χρηστών.',

	
	'AS_STATS'      => 'Στατιστικά Shoutbox',
	'NUMBER_SHOUTS' => 'Συνολικός αριθμός μηνυμάτων',
	'AS_VERSION'    => 'Εκδοση Shoutbox',
	'AS_OPTIONS'    => 'Επιλογές Shoutbox',
	'PURGE_AS'      => 'Διαγραφή όλων των μηνυμάτων',
	
	'UNABLE_CONNECT'    => 'Δεν μπόρεσα να συνδεθώ με το διακομιστή ελέγχου έκδοσης. Πήρα αυτό το σφάλμα: %s',
	'NEW_VERSION'       => 'Η έκδοση του ajax shoutbox δεν είναι ενημερωμένη. Η έκδοση σας είναι η %1$s, ή νέα είναι η %2$s. Διαβάστε <a href="%3$s">αυτό</a> για περισσότερες πληροφορίες',
	
	
	// Configuration
	'AS_PRUNE_TIME'				=> 'Χρόνος διαγραφής',
	'AS_PRUNE_TIME_EXPLAIN'		=> 'Ο Χρόνος μετά τον οποίο τα μηνύματα θα διαγράφονται αυτόματα. Οταν ο μέγιστος αριθμός δημοσιεύσεων είαι ενεργοποιημένος, η ρύθμιση αυτή θα αγνοηθεί. Δώστε 0 για απενεργοποίηση',
	'AS_MAX_POSTS'				=> 'Μέγιστος αριθμός μηνυμάτων',
	'AS_MAX_POSTS_EXPLAIN'		=> 'Ο μέγιστος αριθμός μηνυμάτων. Δώστε 0 για απενεργοποίηση. Εάν η ρύθμιση είναι ενεργοποιημένη, θα <strong>αγνοήσει</strong> τη ρύθμιση διαγραφής!',
	
	'AS_FLOOD_INTERVAL'         => 'Ορίο αναμονής',
	'AS_FLOOD_INTERVAL_EXPLAIN' => 'Ο ελάχιστος χρόνος μεταξύ 2 μηνυμάτων για τους χρήστες. Δώστε 0 για απενεργοποίηση.',
	
	'AS_IE_NR'				=> 'Αριθμός μηνυμάτων',
	'AS_IE_NR_EXPLAIN'		=> 'Ο αριθμός μηνυμάτων στον internet explorer. Σύμφωνα με κάποια IE bugs, δεν πρέπει να δώσετε πολύ μέγάλη τιμή.',
	'AS_NON_IE_NR'			=> 'Αριθμός μηνυμάτων',
	'AS_NON_IE_NR_EXPLAIN'	=> 'Ο αριθμός μηνυμάτων σε άλλους πλοηγούς.',
));
?>