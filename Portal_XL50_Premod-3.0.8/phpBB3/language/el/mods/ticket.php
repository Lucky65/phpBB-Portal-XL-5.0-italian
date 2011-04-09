<?php
/**
* //SupportTicket System
* ticket [Greek-El]
*
* @package language
* @version $Id: ticket.php,v 1.5 2008/07/17 22:50:49 damysterious Exp $
* @copyright (c) 2008 Mahony; 2008 Mahony
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbb2.gr:
* (http://phpbb2.gr/groupcp.php?g=322&sid=7acc2b540cebf07b063274dde036a3ac)
* Athanasios Ziouzios Panagioths Mixas Konstantakelhs Panagioths
*
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
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//
//
$lang = array_merge($lang, array(
	'CST_SUPPORT_TICKET'			=> 'Βοηθός υποστήριξης',

	'STS_ERRMESSAGE'				=> 'Δεν εισάγατε τίτλο για την δημοσίευση σας. Παρακαλώ πατήστε στο πλήκτρο Πίσω του περιηγητή σας και διορθώστε το!',
	'STS_PHPBBVERSION'				=> 'Η έκδοση σας phpBB:',
	'STS_PHPBBTYPE'					=> 'Ο τύπος phpBB3:',
	'STS_STANDARD'					=> 'Απλό phpBB3 (με την ονομασία Vanilla Olympus (phpBB 3.0.x) )',
	'STS_PREMOD'					=> 'phpBB με εγκατεστημένα MODs (όπως  Portal XL 5)',
	'STS_ANDDIST'					=> 'Άλλη διαδρομή του phpBB',
	'STS_MODS'						=> 'Έχετε MODs (Μονάδες) εγκατεστημένα στην δημ. συζήτηση σας;',
	'STS_MODS_SHORT'				=> 'Εγκατεστημένα MODs:',
	'STS_YES'						=> 'Ναι',
	'STS_NO'						=> 'Όχι',
	'STS_KNOWLEDGE'					=> 'Η εμπειρία σας στο phpBB:',
	'STS_BEGINNER'					=> 'Αρχάριος',

	'STS_BASICKNOW'					=> 'Βασική γνώση',
	'STS_EXTENDED'					=> 'Καλή γνώση',
	'STS_PROFI'						=> 'Πολύ καλή γνώση',
	'STS_BEFOREERR'					=> 'Τι κάνατε πριν παρουσιαστεί το πρόβλημα;',

	'STS_BOARDLINK'					=> 'Δεσμός για την σελίδα σας:',
	'STS_SELFSOLUTION'				=> 'Τι δοκιμάσατε ήδη για την επίλυση τους προβλήματός σας;',
	'STS_PHPVER'					=> 'Έκδοση PHP:',
	'STS_SQLVER'					=> 'Έκδοση MySQL:',
	'STS_HEAD_MSG'					=> 'Περιγραφή και Μήνυμα',

	'STS_OPTIONAL'					=> 'δεν απαιτείται',
	'STS_HEAD'						=> 'Αυτή η φόρμα σας βοηθάει να μας δώσετε όσες περισσότερο γίνεται λεπτομερείς πληροφορίες για να σας βοηθήσουμε. <br />Σας παρακαλούμε συμπληρώστε όσο περισσότερα πεδία μπορείτε. <br />Μόνο με αυτές της πληροφορίες θα μπορέσουμε να σας βοηθήσουμε όσο το δυνατόν καλύτερα και πιο γρήγορα!',
));
//SupportTicket System

?>