<?php
/**
*
* @package phpBB3 User Blog
* @version $Id$
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
	'ADDING_FIRST_BLOG'					=> 'Προσθήκη της πρώτης ανάρτησης του Blog',

	'FIXING_MAX_POLL_OPTIONS'			=> 'Καθορίζοντας ανώτατες επιλογές ψηφοφορίας',
	'FIXING_MISSING_STYLES'				=> 'Επαναρυθμίζοντας οποιαδήποτε στυλ που δεν υπάρχουν πλέον.',

	'INSTALLING_ARCHIVE_PLUGIN'			=> 'Εγκατάσταση του αρχείου Plugin',

	'SETTING_DEFAULT_PERMISSIONS'		=> 'Θέτοντας άδειες προεπιλογής',
	'SUCCESSFULLY_UPDATED_UMIL_RETURN'	=> 'Εχετε αναβαθμίσει την έδοση του Blog στην 1.0.7 με επιτυχία.  Λόγω του νέου συστήματος εγκατάστασης από την έκδοση 1.0.8 και μετά, πρέπει να ολοκληρώσετε την διαδικασία αναβάθμισης πηγαίνοντας <a href="%s">εδώ</a>.',

	'USER_BLOG_MOD'						=> 'User Blog Mod',
	'USE_OLD_UPDATE_SCRIPT'				=> 'Εκδόσεις πριν την 0.9.0 δεν μπορούν να αναβαθμιστούν χρησιμοποιώντας αυτή την μέθοδο, πρέπει να χρησιμοποιήσετε το παλιό script αναβάθμισης πρώτα, μετά επιστρέψτε εδώ για τις επόμενες αναβαθμίσεις.<br />Το παλιό script αναβάθμισης βρίσκεται <a href="%s">εδώ</a>.',
));

?>