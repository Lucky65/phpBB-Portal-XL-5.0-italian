<?php
/** 
*
* shout [Greek]
*
* @package language
* @version $Id: shout.php 249 2008-02-16 13:08:57Z paul $
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
	'MISSING_DIV' 			=> 'Δεβρέθηκε το shoutbox div.',
	'NO_POST_GUEST'         => 'Οι επισκέπτες δεν μπορούν να δημοσιεύσουν.',
	'LOADING' 				=> 'Φόρτωμα',
	'POST_MESSAGE'			=> 'Δημοσίευση μηνύματος',
	'SENDING' 				=> 'Αποστολή μηνύματος.',
	'MESSAGE_EMPTY'			=> 'Το μύνημα είναι κενό.',
	'XML_ER' 				=> 'σφάλμα XML.',
	'NO_MESSAGE' 			=> 'Δεν υπάρχουν μηνύματα.',
	'NO_AJAX' 				=> 'Κανένα ajax',
	'JS_ERR' 				=> 'Εμφανίστηκε ένα σφάλμα JavaScript. \nError:',
	'LINE' 					=> 'Γραμμή',
	'FILE' 					=> 'Αρχείο',
	'FLOOD_ERROR'	 		=> 'σφάλμα αναμονής',
	'POSTED' 				=> 'Μήνυμα δημοσιεύθηκε.',
	
	'NO_QUOTE' 				=> 'Μη χρησιμοποιείτε λίστα, παράθεση ή bbcode.',
	'SMILIES' 				=> 'Smilies', 
	'DEL_SHOUT' 			=> 'Θέλετε σίγουρα να διαγράψετε αυτή την κουβέντα?',
	'NO_SHOUT_ID'	 		=> 'Κανένα id κουβέντας.',
	'MSG_DEL_DONE' 			=> 'Μήνυμα διαγράφηκε',
    'ONLY_ONE_OPEN'         => 'Μπορείτε να έχετε μόνο 1 παράθυρο επεξεργασίας',
    'EDIT'                  => 'Επεξεργασία',
    'CANCEL'                => 'Ακυρο',
    'SENDING_EDIT'          => 'αποστολή επεξεργασμένης δημοσίευσης...',
    'EDIT_DONE'             => 'Το μήνυμα επεξεργάστηκε',
	
	'SHOUTBOX'				=> 'Shoutbox',
	
	'SERVER_ERR'			=> 'Παρουσιάστηκε ένα πρόβλημα κατά την επεξεργασία στο διακομιστή',
	
	// No permission errors
	'NO_SMILIE_PERM'    => 'Δεν επιτρέπετε να δημοσιεύετε smilies',
	'NO_DELETE_PERM'    => 'Δεν επιτρέπετε να διαγράφετε μηνύματα',
	'NO_POST_PERM'		=> 'Δεν επιτρέπετε να δημοσιεύετε μηνύματα',
	'NO_EDIT_PERM'		=> 'Δεν επιτρέπετε να επεξεργάζεστε μηνύματα',
	'NO_VIEW_PERM'      => 'Δεν επιτρέπετε να βλέπετε το shoutbox',
	'NO_ADMIN_PERM'     => 'Δεν βρέθηκαν προσβάσεις διαχειριστή',
	
	// Installation
	'MOD_INSTALLED'     => 'Το MOD έχει εγκατασταθεί',
	'MOD_UPGRADED'		=> 'Το MOD έχει αναβάθμιστεί',
	'MOD_UPDATED'		=> 'Το MOD έχει ανανεωθεί',
	'NO_FOUNDER'        => 'Μόνο ιδρυτές μπορούν να τρέξουν αυτό το αρχείο',
	'ONLY_UPGRADE'      => 'Το αρχείο χρησιμοποιείται μόνο για αναβαθμίσεις από 1.0.x',
	'ONLY_INSTALL'      => 'Το αρχείο χρησιμοποιείται μόνο για νέες εγκαταστάσεις',
	'ONLY_UPDATE'       => 'Το αρχείο χρησιμοποιείται μόνο για ανανεώσεις',
	'ALREADY_UPTODATE'	=> 'Η ΒΔ είναι πρόσφατα ενημερωμένη.',
	
));
?>
