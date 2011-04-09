<?php
/**
*
* gallery_ucp [Greek]
*
* @package phpBB Gallery
* @version $Id: gallery_ucp.php 126 2009-06-09 14:52:22Z diastasi $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
* (http://thraki.info) diastasi
*
**/

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

$lang = array_merge($lang, array(
	'ALBUMS'						=> 'Αλμπουμ',
	'ALBUM_DESC'					=> 'Περιγραφή',
	'ALBUM_NAME'					=> 'Όνομα',
	'ALBUM_PARENT'					=> 'Κύριο άλμπουμ',
	'ATTACHED_SUBALBUMS'			=> 'προσάρτηση υπό-άλμπουμ',

	'CREATE_PERSONAL_ALBUM'			=> 'Δημιουργία προσωπικού άλμπουμ',
	'CREATE_SUBALBUM'					=> 'δημιουργία υπό-άλμπουμ',
	'CREATE_SUBALBUM_EXP'				=> 'Μπορείτε να συνδέσετε ένα νέο υπό-άλμπουμ με την προσωπική σας γκαλερί.',
	'CREATED_SUBALBUM'				=> 'Το υπό-άλμπουμ δημιουργήθηκε επιτυχώς ',

	'DELETE_ALBUM'					=> 'Διαγραφή άλμπουμ',
	'DELETE_ALBUM_CONFIRM'			=> 'Διαγραφή άλμπουμ, μαζί με όλα τα προσαρμοσμένα υπό-άλμπουμ και εικόνες?',
	'DELETED_ALBUMS'				=> 'Το άλμπουμ διαγράφηκε επιτυχώς',

	'EDIT'							=> 'Επεξεργασία',
	'EDIT_ALBUM'					=> 'επεξεργαστείτε αυτό το άλμπουμ',
	'EDIT_SUBALBUM'					=> 'Επεξεργασία υπό-άλμπουμ',
	'EDIT_SUBALBUM_EXP'				=> 'Μπορείτε να επεξεργαστείτε το άλμπουμ εδώ.',
	'EDITED_SUBALBUM'				=> 'Η επεξεργασία του άλμπουμ έγινε επιτυχώς',

	'GOTO'							=> 'Πήγαινε σε',

	'MANAGE_SUBALBUMS'					=> 'διαχείριση των υπό-άλμπουμ σας',
	'MISSING_ALBUM_NAME'			=> 'Παρακαλώ προσθέστε ένα όνομα για το άλμπουμ',

	'NEED_INITIALISE'				=> 'Δεν έχετε προσωπικό άλμπουμ ακόμη.',
	'NO_ALBUM_STEALING'				=> 'Δεν σας επιτρέπετε να διαχειριστείτε άλμπουμ άλλων μελών.',
	'NO_FAVORITES'					=> 'Δεν έχετε κανένα αγαπημένο.',
	'NO_MORE_SUBALBUMS_ALLOWED'		=> 'Ήδη έχετε δημιουργήσει τον μέγιστο αριθμό υπό-άλμπουμ στο προσωπικό σας άλμπουμ',
	'NO_PARENT_ALBUM'				=> '&laquo;-- κανένας γονέας',
	'NO_PERSALBUM_ALLOWED'			=> 'Δεν έχετε δικαιώματα για να δημιουργήσετε ένα άλμπουμ',
	'NO_PERSONAL_ALBUM'					=> 'Δεν έχετε προσωπικό άλμπουμ ακόμη. Εδώ μπορείτε να δημιουργήσετε ένα προσωπικό άλμπουμ, με μερικά υπό-άλμπουμ.<br />Στα προσωπικά άλμπουμ μόνο ο ιδρυτής μπορεί να φορτώσει φωτογραφίες.',
	'NO_SUBALBUMS'					=> 'κανένα υπό-άλμπουμ',
	'NO_SUBSCRIPTIONS'				=> 'Δεν παρακολουθείτε καμία εικόνα.',

	'PARSE_BBCODE'					=> 'ανάλυση bbcodes',
	'PARSE_SMILIES'					=> 'ανάλυση smiles',
	'PARSE_URLS'					=> 'ανάλυση συνδέσμων',
	'PERSONAL_ALBUM'					=> 'προσωπικό άλμπουμ',

	'REMOVE_FROM_FAVORITES'			=> 'Διαγραφή από τα αγαπημένα',

	'UNSUBSCRIBE'					=> 'σταματήστε παρακολούθηση',

	'YOUR_FAVORITE_IMAGES'			=> 'Εδώ μπορείτε να δείτε τις εικόνες σας στα αγαπημένα. Μπορείτε να τις διαγράψετε εάν δεν σας αρέσουν άλλο.',
	'YOUR_SUBSCRIPTIONS'			=> 'Εδώ βλέπετε τα άλμπουμ και τις εικόνες που παίρνετε ειδοποίηση.',

	'VIEWEXIFS_DEFAULT'				=> 'Προβολή Exif-Data από προεπιλογή',
	
	'WATCH_CHANGED'					=> 'Οι ρυθμίσεις αποθηκεύθηκαν',
	'WATCH_COM'						=> 'Παρακολούθηση σχολιασμένων εικόνων εξ ορισμού',
	'WATCH_FAVO'					=> 'Παρακολούθηση αγαπημένων εικόνων εξ ορισμού',
	'WATCH_NOTE'					=> 'Αυτή η ρύθμιση εφαρμόζετε μόνο για νέες εικόνες.  Όλες οι υπόλοιπες εικόνες θα πρέπει να προστεθούν   στην ρύθμιση "παρακολούθηση εικόνας".',
	'WATCH_OWN'						=> 'Παρακολούθηση εικόνων σας εξ ορισμού',
));

?>