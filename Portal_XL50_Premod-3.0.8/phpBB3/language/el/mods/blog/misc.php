<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: misc.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'ALREADY_SUBSCRIBED'		=> 'Είστε ήδη συνδρομητής σε αυτό το Blog.',

	'BLOG_USER_NOT_PROVIDED'	=> 'Πρέπει να δώσετε το  user_id ή το blog_id του θέματος που θέλετε να γίνεται συνδρομητής.',

	'NOT_ALLOWED_CHANGE_VOTE'	=> 'Δεν επιτρέπετε να αλλάξετε την ψήφο σας.',
	'NOT_SUBSCRIBED'			=> 'Δεν είστε συνδρομητής',

	'RESYNC_BLOG'				=> 'Συγχρονισμός Blog',
	'RESYNC_BLOG_CONFIRM'		=> 'Είστε σίγουρος/η οτι θέλετε να επανασυγχρονίσετε όλα τα δεδομένα του blog?  Αυτό μπορεί να πάρει λίγο χρόνο.',
	'RESYNC_BLOG_SUCCESS'		=> 'Το User Blog Mod έχει συγχρονιστεί επιτυχώς.',

	'SEARCH_BLOG_ONLY'			=> 'Αναζήτηση μόνο στα Blogs',
	'SEARCH_BLOG_TITLE_ONLY'	=> 'Αναζήτηση μόνο στους τίτλους',
	'SEARCH_TITLE_MSG'			=> 'Αναζήτηση σε Τίτλους και Μηνύματα',
	'SUBSCRIBE_BLOG_CONFIRM'	=> 'Πως μπορείτε να λαμβάνετε ειδοποιήσεις όταν υπάρχει μια νέα απάντηση/ανάρτηση σε αυτό το blog?',
	'SUBSCRIBE_BLOG_TITLE'		=> 'Συνδρομή Blog',
	'SUBSCRIPTION_ADDED'		=> 'Η συνδρομή στο blog έχει προστεθεί με επιτυχία.',
	'SUBSCRIPTION_REMOVED'		=> 'Η συνδρομή σας έχει αφαιρεθεί με επιτυχία',

	'UNSUBSCRIBE_BLOG_CONFIRM'	=> 'Είστε σίγουροι ότι θέλετε να αφαιρέσετε την συνδρομή σας από αυτό το blog?',
	'UNSUBSCRIBE_USER_CONFIRM'	=> 'Είστε σίγουροι ότι θέλετε να αφαιρέσετε την συνδρομή σας από αυτόν τον χρήστη?',
));

?>