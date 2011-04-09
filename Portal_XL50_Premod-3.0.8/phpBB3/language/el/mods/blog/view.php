<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: view.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Μετάφραση Μάνος Πασχαλάκης
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'AVERAGE_OF_RATING'				=> 'Μέσος όρος της %s βαθμολογίας',
	'AVERAGE_OF_RATINGS'			=> 'Μέσος όρος των %s βαθμολογιών',

	'CLICK_HERE_SHOW_POST'			=> 'Πατήστε εδώ για να εμφανίσετε την ανάρτηση.',
	'CNT_COMMENTS'					=> '%s Σχόλια',
	'COMMENTS'						=> 'Σχόλια',

	'DELETED_REPLY_SHOW'			=> 'Αυτό το σχόλιο έχει διαγραφεί.  Πατήστε εδώ για να εμφανίσετε το σχόλιο.',

	'LAST_VISIT_BLOGS'				=> 'Αναρτήσεις Blog μετά από την τελευταία σας επίσκεψη',

	'MY_RATING'						=> 'Η βαθμολογία μου',

	'NO_DELETED_BLOGS'				=> 'Δεν υπάρχουν διεγραμμένες αναρτήσεις blog από αυτόν τον χρήστη.',
	'NO_DELETED_BLOGS_SORT_DAYS'	=> 'Δεν διεγραμμένες αναναρτήσεις στο blog από τον αυτόν χρήστη τις τελευταίες %s.',

	'ONE_COMMENT'					=> '1 Σχόλιο',

	'POSTED_BY_FOE'					=> 'Αυτή η ανάρτηση έγινε από από τον %s που είναι επί του παρόντος στην λίστα αυτών που αγνοείτε.',

	'RANDOM_BLOG'					=> 'Τυχαία ανάρτηση Blog',
	'RATE_ME'						=> '%1$s από %2$s',
	'RECENT_COMMENTS'				=> 'Πρόσφατα σχόλια',
	'REMOVE_RATING'					=> 'Επαναφορά βαθμολογίας',
	'REPLY_SHOW_NO_JS'				=> 'Πρέπει να ενεργοποιήσετε την Javascript για να δείτε αυτή την ανάρτηση.',
	'REPORTED'						=> 'Αυτό το μήνυμα έχει αναφερθεί.  Πατήστε εδώ για να κλείσετε την αναφορά.',
	'REPORTED_SHORT'				=> 'Αναφέρθηκε',

	'SUBCATEGORIES'					=> 'Υποκατηγορίες',
	'SUBCATEGORY'					=> 'Υποκατηγορία',

	'TOTAL_NUMBER_OF_BLOGS'			=> 'Συνολο αναρτήσεων',
	'TOTAL_NUMBER_OF_REPLIES'		=> 'Σύνολο σχολιών',

	'UNAPPROVED'					=> 'Αυτό το μήνυμα χρειάζετε έγκριση.  Πατήστε εδώ για να το εγκρίνετε.',
));

?>