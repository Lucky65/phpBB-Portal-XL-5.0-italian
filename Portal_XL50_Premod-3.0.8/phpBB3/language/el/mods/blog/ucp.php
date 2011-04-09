<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: ucp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'BLOG_CSS'								=> 'Blog CSS',
	'BLOG_CSS_EXPLAIN'						=> 'Εδώ μπορείτε να εισάγετε κάποιον κώδικα CSS και να αλλάξετε το στυλ του δικού σας blog για να το κάνετε να εμφανίζεται όπως εσείς θέλετε.',
	'BLOG_INSTANT_REDIRECT'					=> 'Στιγμιαία ανακατεύθυνση',
	'BLOG_INSTANT_REDIRECT_EXPLAIN'			=> 'Αυτό θα κάνει το Blog μέλους Mod να ανακατευθύνει στιγμιαία στην επόμενη σελίδα αντί να εμφανίζει την σελίδα πληροφοριών.',
	'BLOG_STYLE'							=> 'Στυλ Blog',
	'BLOG_STYLE_EXPLAIN'					=> 'Επιλέξτε το στυλ που θέλετε να εμφανίζεται στο blog σας.<br />Αν το στύλ εμφανίζει ένα * μετά το όνομα μπορείτε να προσθέσετε τον δικό σας κώδικα CSS για να το τροποποιήσετε (εφόσον έχετε τα δικαιώματα).',

	'NONE'									=> 'Κανένα',
	'NO_PERMISSIONS'						=> 'Δεν μπορεί να διαβάσει ή να απαντήσει στις αναρτήσεις στο blog σας.',

	'REPLY_PERMISSIONS'						=> 'Μπορεί να διαβάσει και να απαντήσει στις αναρτήσεις στο blog σας.',
	'RESYNC_PERMISSIONS'					=> 'Επανασυγχρονισμός δικαιωμάτων',
	'RESYNC_PERMISSIONS_EXPLAIN'			=> 'Επιλέξτε αυτό εάν θέλετε να επανασγχρονίσετε όλα τα δικαιώματα αναρτήσεων του blog, ώστε να έχουν τα δικαιώματα που ορίσατε παραπάνω.',

	'SUBSCRIPTION_DEFAULT'					=> 'Προεπιλογή συνδρομής:',
	'SUBSCRIPTION_DEFAULT_EXPLAIN'			=> 'Επιλέξτε τι είδους συνδρομές θέλετε να λαμβάνετε εξ ορισμού, όταν κάποιος σχολιάσει μια ανάρτηση στο blog όπου έχετε κάνει μια ανάρτηση ή ένα σχόλιο.  Μπορείτε να ορίσετε αυτή την επιλογή για κάθε ανάρτηση που κάνετε επίσης.',

	'UCP_BLOG_PERMISSIONS_EXPLAIN'			=> 'Εδώ μπορείτε να αλλάξετε τα δικαιώματα του δικού σας Blog.<br />Σημειώστε οτι οι γενικές ρυθμίσεις του φόρουμ υπερκαλύπτουν τις ρυθμίσεις που θέτετε εδώ.',
	'UCP_BLOG_SETTINGS_EXPLAIN'				=> '',
	'UCP_BLOG_TITLE_DESCRIPTION_EXPLAIN'	=> 'Εδώ μπορείτε να ορίσετε τον τίτλο και την περιγραφή του blog σας.',
	'USER_PERMISSIONS_DISABLED'				=> 'Τα δικαιώματα του μέλους έχουν απενεργοποιηθεί από τους Διαχειριστές.',

	'VIEW_PERMISSIONS'						=> 'Μπορεί να διαβάζει αναρτήσεις στο blog σας.',
));

?>