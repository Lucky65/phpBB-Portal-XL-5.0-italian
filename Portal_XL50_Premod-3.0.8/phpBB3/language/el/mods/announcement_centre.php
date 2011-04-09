<?php
/** 
*
* acp_announcements_centre [Greek]
*
* @package language
* @version $Id: announcement_centre.php 111 2008-07-15 18:49:37Z lefty74 $ 
* @copyright (c) 2007 lefty74
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translated by diastasi (thraki.info) & phpbb2.gr
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


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

// Announcement  settings
$lang = array_merge($lang, array(
	'TITLE'									=> 'Κέντρο ανακοινώσεων ΠΕΔ',
	'TITLE_EXPLAIN'							=> 'Η φόρμα σας επιτρέπει να γράψετε τις ανακοινώσεις σας. Μπορείτε επίσης να επιλέξετε ποιός θα βλάπει τις ανακοινώσεις. Εναλλακτικά μπορείτε να έχετε ανακοινώσεις για επισκέπτες.',
	'ANNOUNCEMENTS'							=> 'Ρυθμίσεις ανακοινώσεων',
	'ANNOUNCEMENT_ENABLE'					=> 'Προβολή ανακοινώσεων',
	'ANNOUNCEMENT_SHOW'						=> 'Προβολή ανακοινώσεων σε',
	'ANNOUNCEMENT_SHOW_INDEX'				=> 'Προβολή ανακοινώσεων μόνο στο Ευρετ. Δ. Συζήτησης.',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS'			=> 'Προβολή γενεθλίων σαν ανακοινώσεις',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS_EXPLAIN'	=> 'Προβολή τρέχοντων γενεθλίων (με ενεργά τα γενέθλια) ως ανακοινώσεις (με προτεραιότητα στο κείμενο ανακοινώσεων)',
	'ANNOUNCEMENT_SHOW_GROUP'				=> 'Επιλογή ομάδας/ομάδων που θα βλέπουν ανακοινώσεις',
	'ANNOUNCEMENT_SHOW_GROUP_EXPLAIN'		=> 'Εφαρμόζεται μόνο αν προβάλλονται οι ανακοινώσεις σε ομάδες',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR'			=> 'Προβολή άβαταρ σε ανακοινώσεις γενεθλίων',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR_EXPLAIN'	=> 'Επίσης προβάλλει το άβαταρ των μελών που γιορτάζουν',
	'ANNOUNCEMENT_DRAFT_PREVIEW'			=> 'Πρόχειρη προεπισκόπιση ανακοινώσεων',
	'ANNOUNCEMENT_TITLE'					=> 'Τίτλος ανακοίνωσης',
	'ANNOUNCEMENT_TITLE_EXPLAIN'			=> 'Προσωποποιήστε τον τίτλο του μπλοκ ανακοινώσεων εδώ <br/>Αφήστε κενό για χρήση προεπιλεγμένης μεταβλητής γλώσσας',
	'ANNOUNCEMENT_DRAFT'					=> 'Πρόχειρο ανακοίνωσης',
	'ANNOUNCEMENT_DRAFT_EXPLAIN'			=> 'Γράψτε πρόχειρα το κείμενο της ανακοίνωσης σας',
	'ANNOUNCEMENT_TEXT'						=> 'Κείμενο ανακοίνωσης',
	'ANNOUNCEMENT_TEXT_EXPLAIN'				=> 'Γράψτε εδώ το κείμενο της ανακοίνωσης σας',
	'ANNOUNCEMENT_ENABLE_GUESTS'			=> 'Προβολή διαφορετική ανακοίνωση σε επισκέπτες',
	'ANNOUNCEMENT_ENABLE_GUESTS_EXPLAIN'	=> 'Προβάλλει διαφορετικές ανακοινώσεις στους επισκέπτες εκτός εάν επιλεγεί να προβάλλεται η ίδια σε όλους',
	'ANNOUNCEMENT_TITLE_GUESTS'				=> 'Τίτλος ανακοίνωσης επισκεπτών',
	'ANNOUNCEMENT_TITLE_GUESTS_EXPLAIN'		=> 'Προσωποποιήστε τον τίτλο του μπλοκ ανακοινώσεων επισκεπτών εδώ <br/>φήστε κενό για χρήση προεπιλεγμένης μεταβλητής γλώσσας',
	'ANNOUNCEMENT_TEXT_GUESTS'				=> 'Κείμενο ανακοίνωσης επισκεπτών',
	'ANNOUNCEMENT_TEXT_GUESTS_EXPLAIN'		=> 'Γράψτε εδώ το κείμενο της ανακοίνωσης σας',
	'ACP_ANNOUNCEMENTS_CENTRE'				=> 'Κέντρο ανακοινώσεων',

	'COPY_TO_ANNOUNCEMENT_SHORT'			=> 'Αντιγραφή σε κείμενο ανακοινώσεων',
	'COPY_TO_GUEST_ANNOUNCEMENT_SHORT'		=> 'Αντιγραφή σε κείμενο επισκεπτών',
	'COPY_TO_ANNOUNCEMENT'					=> 'Αντιγραφή σε κείμενο γενικών ανακοινώσεων',
	'COPY_TO_GUEST_ANNOUNCEMENT'			=> 'Αντιγραφή σε κείμενο ανακοινώσεων επισκεπτών',

	'YES'			=> 'Ναι',
	'NO'			=> 'Οχι',
	'GUESTS'		=> 'Επισκέπτες',
	'EVERYONE'		=> 'Ολοι',
	'GROUPS'		=> 'Ομάδες',
));

?>