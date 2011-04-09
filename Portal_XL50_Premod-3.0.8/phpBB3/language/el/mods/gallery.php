<?php

/**
*
* gallery [Greek]
*
* @package phpBB Gallery
* @version $Id: gallery.php 1242 2009-07-12 07:47:57Z nickvergessen $
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
	'ALBUM'								=> 'Άλμπουμ',
	'ALBUM_IS_CATEGORY'				=> 'Το άλμπουμ που προσπαθείτε να προσπελάσετε είναι άλμπουμ κατηγορία..<br />Δεν μπορείτε να φορτώσετε εικόνες σε μια κατηγορία.',
	'ALBUM_LOCKED'					=> 'Κλειδωμένο',
	'ALBUM_NAME'					=> 'Όνομα άλμπουμ',
	'ALBUM_NOT_EXIST'					=> 'Αυτό το Άλμπουμ δεν υπάρχει',
	'ALBUM_PERMISSIONS'					=> ' Άλμπουμ Δικαιώματα',
	'ALBUM_REACHED_QUOTA'				=> 'Αυτό το Άλμπουμ έχει φθάσει στον μέγιστο αριθμό εικόνων. Δεν μπορείτε να ανεβάσετε άλλες. Παρακαλώ ελάτε σε επαφή με τον διαχειριστή για περισσότερες πληροφορίες.',
	'ALBUM_UPLOAD_NEED_APPROVAL'		=> 'Η εικόνα σας ανέβηκε επιτυχώς.<br /><br />Το χαρακτηριστικό γνώρισμα  Έγκρισης εικόνας είναι ενεργοποιημένο και έτσι θα πρέπει πρώτα να εγκριθεί από έναν διαχειριστή ή συντονιστεί πριν δημοσιευθεί',
	'ALBUM_UPLOAD_SUCCESSFUL'			=> 'Η εικόνα σας ανέβηκε επιτυχώς',
	'ALBUMS_MARKED'					=> 'Ολα τα άλμπουμ σημειώθηκαν διαβασμένα.',
	'ALL'							=> 'Ολα',
	'ALL_IMAGES'					=> 'Όλες τις εικόνες',
	'ALLOWED_FILETYPES'				=> 'Επιτρεπόμενοι τύποι αρχείων',
	'APPROVE'						=> 'Εγκρίνετε ',
	'APPROVE_IMAGE'					=> 'Έγκριση εικόνας',

	//@todo
	'ALBUM_COMMENT_CAN'					=> '<strong>Μπορείς</strong> να δημοσιεύσεις σχόλιο στην εικόνα σε αυτό  το Άλμπουμ',
	'ALBUM_COMMENT_CANNOT'				=> '<strong>Δεν μπορείς</strong> να δημοσιεύσεις σχόλιο στην εικόνα σε αυτό  το Άλμπουμ',
	'ALBUM_DELETE_CAN'					=> '<strong>Μπορείς</strong> να διαγράψεις τις εικόνες και τα σχόλιά σου σε αυτό το Άλμπουμ',
	'ALBUM_DELETE_CANNOT'				=> '<strong>Δεν μπορείς</strong> να διαγράψεις τις εικόνες και τα σχόλιά σου σε αυτό το Άλμπουμ',
	'ALBUM_EDIT_CAN'					=> '<strong>Μπορείς</strong> να επεξεργαστείς τις εικόνες και τα σχόλιά σου σε αυτό το Άλμπουμ',
	'ALBUM_EDIT_CANNOT'					=> '<strong>Δεν μπορείς</strong> να επεξεργαστείς τις εικόνες και τα σχόλιά σου σε αυτό το Άλμπουμ',
	'ALBUM_RATE_CAN'					=> '<strong>Μπορείς</strong> να βαθμολογήσεις εικόνες σε αυτό το Άλμπουμ',
	'ALBUM_RATE_CANNOT'					=> '<strong>Δεν μπορείς</strong> να βαθμολογήσεις εικόνες σε αυτό το Άλμπουμ',
	'ALBUM_UPLOAD_CAN'					=> '<strong>Μπορείς</strong> να ανεβάσεις νέες εικόνες σε αυτό το Άλμπουμ',
	'ALBUM_UPLOAD_CANNOT'				=> '<strong>Δεν μπορείς</strong> να ανεβάσεις νέες εικόνες σε αυτό το Άλμπουμ',
	'ALBUM_VIEW_CAN'					=> '<strong>Μπορείς</strong> να κάνεις προβολή σε αυτό το Άλμπουμ',
	'ALBUM_VIEW_CANNOT'					=> '<strong>Δεν μπορείς</strong> να κάνεις προβολή σε αυτό το Άλμπουμ',

	'BAD_UPLOAD_FILE_SIZE'				=> 'Το αρχείο προς ανέβασμα είναι πάρα πολύ μεγάλο',
	'BROWSING_ALBUM'				=> 'Μέλη που βλέπουν το άλμπουμ: %1$s',
	'BROWSING_ALBUM_GUEST'			=> 'Μέλος που βλέπει  το άλμπουμ: %1$s και  %2$d επισκέπτης',
	'BROWSING_ALBUM_GUESTS'			=> 'Μέλη που βλέπουν το άλμπουμ: %1$s και %2$d επισκέπτες',

	'CHANGE_IMAGE_STATUS'			=> 'Αλλαγή κατάστασης εικόνας',
	'CLICK_RETURN_ALBUM'				=> 'Πατήστε %sΕδώ%s για να επιστρέψετε στο Άλμπουμ',
	'CLICK_RETURN_IMAGE'				=> 'Πατήστε %sΕδώ%s για να επιστρέψετε στην εικόνα',
	'COMMENT'							=> 'Σχόλιο',
	'COMMENT_IMAGE'					=> 'Αποστολή ενός σχολίου σε μια εικόνα στο άλμπουμ %s',
	'COMMENT_LENGTH'				=> 'Προσθέστε το σχόλιο εδώ, δεν μπορεί να περιέχει περισσότερους από <strong>%d</strong> χαρακτήρες.',
	'COMMENT_ON'					=> 'Σχόλια ανοιχτό',
	'COMMENT_STORED'					=> 'Η προσθήκη του σχόλιου σας έγινε επιτυχώς.',
	'COMMENT_TOO_LONG'					=> 'Το σχόλιό σας είναι μεγάλο',
	'COMMENTS'							=> 'Σχόλια',
	'CONTEST_COMMENTS_STARTS'		=> 'Σχόλια σε εικόνες στον διαγωνισμό επιτρέπονται από %s.',
	'CONTEST_ENDED'					=> 'Ο διαγωνισμός τελείωσε την %s.',
	'CONTEST_ENDS'					=> 'Ο διαγωνισμός τελειώνει %s.',
	'CONTEST_RATING_STARTED'		=> 'Η αξιολόγηση για τον διαγωνισμό άρχισε την %s.',
	'CONTEST_RATING_STARTS'			=> 'Η αξιολόγηση για τον διαγωνισμό αρχίζει την %s.',
	'CONTEST_RATING_ENDED'			=> 'Η αξιολόγηση για τον διαγωνισμό τελείωσε την %s.',
	'CONTEST_RATING_HIDDEN'			=> 'Κρυφό',
	'CONTEST_RESULT'				=> 'Διαγωνισμός',
	'CONTEST_RESULT_1'				=> 'Νικητής',
	'CONTEST_RESULT_2'				=> 'Δεύτερος',
	'CONTEST_RESULT_3'				=> 'Τρίτος',
	'CONTEST_RESULT_HIDDEN'			=> 'Η αξιολόγηση για τις εικόνες είναι κρυφή, μέχρι το τέλος του διαγωνισμού την %s.',
	'CONTEST_STARTED'				=> 'Ο διαγωνισμός άρχισε την %s.',
	'CONTEST_STARTS'				=> 'Ο διαγωνισμός αρχίζει την %s.',
	'CONTEST_USERNAME'				=> '<strong>Διαγωνισμός</strong>',
	'CONTEST_USERNAME_LONG'			=> '<strong>Διαγωνισμός</strong> » Το όνομα χρήστη είναι κρυφό, μέχρι το τέλος του διαγωνισμού την %s.',
	'CONTEST_WINNERS_OF'			=> 'Νικητής διαγωνισμού του "%s"',

	'DELETE_COMMENT'				=> 'Διαγραφή σχόλιου?',
	'DELETE_COMMENT2'				=> 'Διαγραφή σχόλιου?',
	'DELETE_COMMENT2_CONFIRM'		=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε αυτό το σχόλιο?',
	'DELETE_IMAGE'					=> 'Διαγραφή',
	'DELETE_IMAGE2'					=> 'Διαγραφή εικόνας?',
	'DELETE_IMAGE2_CONFIRM'			=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε την εικόνα?',
	'DELETED_COMMENT'				=> 'Το σχόλιο διαγράφηκε',
	'DELETED_COMMENT_NOT'			=> 'Το σχόλιο δεν διαγράφηκε',
	'DELETED_IMAGE'					=> 'Η εικόνα διαγράφηκε',
	'DELETED_IMAGE_NOT'				=> 'Η εικόνα δεν διαγράφηκε',
	'DESC_TOO_LONG'					=> 'Η περιγραφή σας είναι υπερβολικά μεγάλη',
	'DESCRIPTION_LENGTH'			=> 'Προσθέστε την περιγραφή εδώ, δεν μπορεί να περιέχει περισσότερους από  <strong>%d</strong> χαρακτήρες.',
	'DETAILS'						=> 'Λεπτομέρειες',
	'DONT_RATE_IMAGE'				=> 'Μην αξιολογήσετε εικόνα',

	'EDIT_COMMENT'					=> 'Επεξεργασία σχολίων',
	'EDIT_IMAGE'					=> 'Επεξεργασία',
	'EDITED_TIME_TOTAL'				=> 'Τελευταία επεξεργασία από %s την %s; έχει επεξεργαστεί %d φορές συνολικά',
	'EDITED_TIMES_TOTAL'			=> 'Τελευταία επεξεργασία από %s την %s; έχει επεξεργαστεί %d φορές συνολικά',

	'FAVORITE_IMAGE'				=> 'Προσθήκη στα αγαπημένα',
	'FAVORITED_IMAGE'				=> 'Η εικόνα προστέθηκε στα αγαπημένα.',
	'FILE'									=> 'Αρχείο',
	'FILETYPE_MIMETYPE_MISMATCH'	=> 'Ο τύπος αρχείου του "<strong>%1$s</strong>" δεν ταιριάζει με το mime-type (%2$s).',
	'FILETYPES_GIF'					=> 'gif',
	'FILETYPES_JPG'					=> 'jpg',
	'FILETYPES_PNG'					=> 'png',

	'IMAGE'								=> 'Εικόνα',
	'IMAGE_#'						=> '1 εικόνα',
	'IMAGE_ALREADY_REPORTED'		=> 'Έχει γίνει ήδη αναφορά εικόνας.',
	'IMAGE_BBCODE'					=> 'Εικόνα BBCode',
	'IMAGE_DAY'						=> '%.2f εικόνες ανά ημέρα',
	'IMAGE_DESC'					=> 'Περιγραφή εικόνας',
	'IMAGE_LOCKED'					=> 'Συγνώμη, αυτή η εικόνα είναι κλειδωμένη. Δεν μπορείτε να υποβάλετε σχόλια πλέον.',
	'IMAGE_NAME'					=> 'Όνομα εικόνας',
	'IMAGE_NOT_EXIST'				=> 'Η εικόνα δεν υπάρχει',
	'IMAGE_PCT'						=> '%.2f%% από όλες τις εικόνες',
	'IMAGE_STATUS'					=> 'Κατάσταση',
	'IMAGE_URL'						=> 'Εικόνας-Δεσμός',
	'IMAGES_#'						=> '%s εικόνες',
	'IMAGES_REPORTED_SUCCESSFULLY'		=> 'Η εικόνα έχει αναφερθεί',
	'IMAGES_UPDATED_SUCCESSFULLY'		=> 'Η πληροφορίες της εικόνας σας ενημερώθηκαν επιτυχώς',
	'INVALID_USERNAME'				=> 'Το όνομα μέλους είναι άκυρο',

	'LAST_COMMENT'					=> 'Τελευταίο σχόλιο',
	'LAST_IMAGE'					=> 'Τελευταία εικόνα',
	'LOGIN_EXPLAIN_UPLOAD'			=> 'Πρέπει να συνδεθείτε για να φορτώσετε εικόνες σε αυτήν την γκαλερί.',
	'LOOP_EXP'						=> 'Εάν φορτώνετε περισσότερα από ένα αρχεία, μπορείτε να περιλάβετε <span style="font-weight: bold;">{NUM}</span> στον τίτλο εικόνας και την περιγραφή εικόνας.<br />
										It counts through the images, starting on the value you entered. Example: "Image {NUM}" addes up to "Image 1", "Image 2", etc.',

	'MARK_ALBUMS_READ'				=> 'Σημείωσε τα άλμπουμ διαβασμένα',
	'MAX_FILE_SIZE'					=> 'Μέγιστο μέγεθος αρχείου (σε ψηφιολέξεις)',
	'MAX_HEIGHT'					=> 'Μέγιστο ύψος εικόνας (σε εικονοστοιχεία )',
	'MAX_WIDTH'						=> 'Μέγιστο πλάτος εικόνας  (σε εικονοστοιχεία )',
	'MISSING_COMMENT'				=> 'Δεν εισαγάγατε κανένα μήνυμα',
	'MISSING_MODE'					=> 'Τρόπος που επιλέγεται κανένας',
	'MISSING_REPORT_REASON'			=> 'Πρέπει να προσθέσετε τον λόγο για τον οποίο  αναφέρετε την εικόνα.',
	'MISSING_SLIDESHOW_PLUGIN'		=> 'Δεν βρέθηκε slideshow-plugin. Επικοινωνήστε με τον διαχειριστή για πληροφορίες',
	'MISSING_SUBMODE'				=> 'Υπό-τρόπος που επιλέγεται κανένας',
	'MISSING_USERNAME'				=> 'Δεν εισαγάγατε κανένα όνομα μέλους',
	'MOVE_TO_ALBUM'					=> 'Μετακίνηση στο άλμπουμ',
	'MOVE_TO_PERSONAL'				=> 'Μετακίνηση σε προσωπικό άλμπουμ',
	'MOVE_TO_PERSONAL_MOD'			=> 'Εάν δώσετε εδώ "Ναι", η εικόνα μετακινείται στο άλμπουμ του χρήστη. Εάν ο χρήστης δεν έχει άλμπουμ τότε δημιουργείται αυτόματα.',
	'MOVE_TO_PERSONAL_EXPLAIN'		=> 'Εάν δώσετε εδώ "Ναι", η εικόνα μετακινείται στο άλμπουμ σας. Εάν δεν έχετε δημιουργήσει τότε θα δημιουργηθεί αυτόματα.',

	'NEW_COMMENT'					=> 'Νέο Σχόλιο',
	'NEW_IMAGES'					=> 'Νέες εικόνες',
	'NEWEST_PGALLERY'				=> 'Η νεώτερη προσωπική γκαλερί %s',
	'NO_ALBUMS'						=> 'Αυτή η γκαλερί δεν έχει κανένα άλμπουμ ',	
	'NO_COMMENTS'					=> 'Δεν υπάρχουν σχόλια',
	'NO_IMAGES'						=> 'Δεν υπάρχουν εικόνες',
	'NO_IMAGES_FOUND'				=> 'Καμία εικόνα δεν βρέθηκε.',
	'NO_NEW_IMAGES'					=> 'Καμία νέα εικόνα',
	'NO_IMAGES_LONG'				=> 'Δεν υπάρχουν εικόνες σε αυτό το άλμπουμ.',
	'NOT_ALLOWED_FILE_TYPE'					=> 'Μη επιτρεπτός τύπος αρχείου',
	'NOT_RATED'						=> 'μη βαθμολογημένη',

	'ORDER'							=> 'Ταξινόμηση',
	'ORIG_FILENAME'					=> 'Πάρτε το όνομα αρχείου ως εικόνα-όνομα (το εισαγόμενο-πεδίο δεν έχει καμία λειτουργία)',
	'OUT_OF_RANGE_VALUE'			=> 'Η τιμή είναι από τη σειρά',

	'PERSONAL_ALBUMS'					=> 'Προσωπικά άλμπουμ ',
	'POST_COMMENT'						=> 'Υποβολή σχόλιου',
	'POST_COMMENT_RATE_IMAGE'		=> 'Δημοσιεύστε ένα σχόλιο και αξιολογήστε την εικόνα',
	'POSTER'							=> 'Συγγραφέας',

	'RANDOM_IMAGES'					=> 'Τυχαίες εικόνες',
	'RATE_IMAGE'					=> 'Αξιολόγηση εικόνας',
	'RATE_STRING'					=> '%1$s (%2$s Αξιολόγηση)', // 1.μέσος όρος αξιολογήσεων 2.αριθ. αξιολογήσεων
	'RATES_COUNT'					=> 'Αξιολογήσεις',
	'RATES_STRING'					=> '%1$s (%2$s Αξιολογήσεις)',
	'RATING'						=> 'Βαθμολογία',
	'RATING_SUCCESSFUL'				=> 'Η εικόνα σας βαθμολογήθηκε επιτυχώς.',
	'READ_REPORT'					=> 'Ανάγνωση μήνυμα αναφοράς',
	'RECENT_COMMENTS'				=> 'Πρόσφατα σχόλια',
	'RECENT_IMAGES'					=> 'Πρόσφατες εικόνες',
	'REPORT_IMAGE'					=> 'Αναφορά εικόνας',
	'RETURN_ALBUM'					=> '%sΕπιστροφή στο άλμπουμ που επισκεφθήκατε τελευταίο%s',
	'ROTATE_IMAGE'					=> 'Πριστροφή εικόνας',
	'ROTATE_LEFT'					=> '90Â° αριστερά',
	'ROTATE_NONE'					=> 'καμία',
	'ROTATE_RIGHT'					=> '90Â° δεξιά',
	'ROTATE_UPSIDEDOWN'				=> '180Â° αναρτημένη ανάποδα',


	'SEARCH_ALBUM'					=> 'Αναζήτηση στο άλμπουμβ€¦',
	'SEARCH_ALBUMS'					=> 'Αναζήτηση σε άλμπουμ',
	'SEARCH_ALBUMS_EXPLAIN'			=> 'Επιλέξτε το/τα άλμπουμ στα οποία θα γίνει η αναζήτηση. Τα υποάλμπουμ θα αναζητηθούν αυτόματα εάν δεν απενεργοποιήσετε το “αναζήτηση υποάλμπουμ“.',
	'SEARCH_COMMENTS'				=> 'Μόνο σχόλια',
	'SEARCH_CONTEST'				=> 'Νικητές διαγωνισμών',
	'SEARCH_IMAGE_COMMENTS'			=> 'Ονόματα εικόνων, περιγραφές και σχόλια',
	'SEARCH_IMAGE_VALUES'			=> 'Ονόματα εικόνων και περιγραφές',
	'SEARCH_IMAGENAME'				=> 'Μόνο Ονόματα εικόνων',
	'SEARCH_RANDOM'					=> 'Τυχαίες εικόνες',
	'SEARCH_RECENT'					=> 'Πρόσφατες εικόνες',
	'SEARCH_RECENT_COMMENTS'		=> 'Πρόσφατα σχόλια',
	'SEARCH_SUBALBUMS'				=> 'Αναζήτηση υποάλμπουμ',
	'SEARCH_TOPRATED'				=> 'Περισσότερο αξιολογημένες εικόνες',
	'SEARCH_USER_IMAGES'			=> 'Αναζήτηση εικόνων χρήστη',
	'SEARCH_USER_IMAGES_OF'			=> 'Εικόνες από %s',
	'SHOW_PERSONAL_ALBUM_OF'		=> 'Εμφάνιση προσωπικού άλμπουμ από %s',
	'SLIDE_SHOW'					=> 'Προβολή διαφάνειας',
	'SLIDE_SHOW_HIGHSLIDE'			=> 'Για να ξεκινήσει η προβολή διαφάνειας, πατήστε το όνομα εικόνας και μετά πατήστε  το "παίξε"-εικονίδιο:',
	'SLIDE_SHOW_LYTEBOX'			=> 'Για να ξεκινήσει η προβολή διαφάνειας, πατήστε στο όνομα εικόνας:',
	'SLIDE_SHOW_SHADOWBOX'			=> 'Για να ξεκινήσει η προβολή διαφάνειας, πατήστε στα ονόματα εικόνων:',

	'SORT_ASCENDING'			=> 'Αύξουσα',
	'SORT_DEFAULT'					=> 'Προεπιλογή',
	'SORT_DESCENDING'			=> 'Φθίνουσα',
	'STATUS'					=> 'Θέση',
	'SUBALBUMS'						=> 'Υπό-άλμπουμ',
	'SUBALBUM'						=> 'Υπό-άλμπουμ',

	'THUMBNAIL_SIZE'			=> 'Μέγεθος μικρογραφίας (σε εικονοστοιχεία )',
	'TOTAL_COMMENTS_OTHER'			=> 'Συνολικά σχόλια <strong>%d</strong>',
	'TOTAL_COMMENTS_ZERO'			=> 'Συνολικά σχόλια <strong>0</strong>',
	'TOTAL_IMAGES'					=> 'Σύνολο εικόνων',
	'TOTAL_PGALLERIES_OTHER'		=> 'Συνολικές προσωπικές γκαλερί <strong>%d</strong>',
	'TOTAL_PGALLERIES_SHORT'		=> '%d προσωπικές γκαλερί ',
	'TOTAL_PGALLERIES_ZERO'			=> 'Συνολικές προσωπικές γκαλερί <strong>0</strong>',

	'UNFAVORITE_IMAGE'				=> 'διαγραφή από τα αγαπημένα',
	'UNFAVORITED_IMAGE'				=> 'Η εικόνα διαγράφηκε από τα αγαπημένα.',
	'UNFAVORITED_IMAGES'			=> 'Η εικόνες διαγράφτηκαν από τα αγαπημένα.',
	'UNLOCK_IMAGE'					=> 'Ξεκλείδωμα εικόνας',
	'UNWATCH_ALBUM'					=> 'Μη παρακολούθηση άλμπουμ',
	'UNWATCH_IMAGE'					=> 'Μη παρακολούθηση εικόνας',
	'UNWATCHED_ALBUM'				=> 'Δεν θα ενημερώνεστε πλέον για  νέες εικόνες σε αυτό το άλμπουμ.',
	'UNWATCHED_ALBUMS'				=> 'Δεν θα ενημερώνεστε πλέον για  νέες εικόνες σε αυτά τα άλμπουμ.',
	'UNWATCHED_IMAGE'				=> 'Δεν θα ενημερώνεστε πλέον για  νέο σχόλιο σε αυτό το άλμπουμ.',
	'UNWATCHED_IMAGES'				=> 'Δεν θα ενημερώνεστε πλέον για  νέα σχόλια σε αυτά τα άλμπουμ.',
	'UPLOAD_IMAGE'						=> 'Φόρτωση εικόνας',
	'UPLOAD_IMAGE_SIZE_TOO_BIG'			=> 'Οι διαστάσεις της εικόνας σας είναι υπερβολικά μεγάλες',
	'UPLOAD_NO_FILE'					=> 'Πρέπει να εισάγετε την διαδρομή και ένα όνομα αρχείου',
	'UPLOADED_BY_USER'				=> 'Φορτώθηκε από',
	'UPLOADED_ON_DATE'				=> 'Φορτώθηκε',
	'USER_NEARLY_REACHED_QUOTA'			=> 'Δεν επιτρέπεται να φορτώσετε παραπάνω από %s εικόνες, αλλά ήδη φορτώσατε %s εικόνες. Γιαυτό εμφανίζονται μόνο %s .',
	'USER_REACHED_QUOTA'				=> 'Καλύψατε το όριο εικόνων σας. Δεν μπορείτε να φορτώσετε άλλες. Παρακαλούμε επικοινωνήστε με την διαχειριστή για περεταίρω πληροφορίες.',
	'USERNAME_BEGINS_WITH'			=> 'Ονομα χρήστη ξεκινά με',
	'USERS_PERSONAL_ALBUMS'				=> 'Προσωπικά Άλμπουμ μελών',

	'VIEW_ALBUM'					=> 'Εμφάνιση Άλμπουμ',
	'VIEW_ALBUM_IMAGE'				=> '1 εικόνα',
	'VIEW_ALBUM_IMAGES'				=> '%s εικόνες',
	'VIEW_IMAGE'					=> 'Εμφάνιση εικόνας',
	'VIEW_LATEST_IMAGE'			=> 'Εμφάνιση τελευταίας εικόνας',
	'VIEW_SEARCH_RECENT'			=> 'Προβολή πρόσφατων εικόνων',
	'VIEW_SEARCH_RANDOM'			=> 'Προβολή τυχαίων εικόνων',
	'VIEW_SEARCH_COMMENTED'			=> 'Προβολή πρόσφατων σχολίων',
	'VIEW_SEARCH_CONTESTS'			=> 'Προβολή νικητών διαγωνισμών',
	'VIEW_SEARCH_TOPRATED'			=> 'Προβολή περισσότερο αξιολογημένων εικόνων',
	'VIEW_SEARCH_SELF'				=> 'Προβολή των εικόνων σας',
	'VIEWING_ALBUM'					=> 'Προβολή άλμπουμ %s',
	'VIEWING_IMAGE'					=> 'Προβολή εικόνων του άλμπουμ %s',
	'VIEWS'							=> 'Εμφανίσεις',

	'WATCH_ALBUM'					=> 'Παρακολούθηση άλμπουμ',
	'WATCH_IMAGE'					=> 'Παρακολούθηση εικόνας',
	'WATCHING_ALBUM'				=> 'Εσείς θα ενημερώνεστε τώρα σχετικά με τις νέες εικόνες στο άλμπουμ.',
	'WATCHING_IMAGE'				=> 'Εσείς θα ενημερώνεστε τώρα σχετικά με νέα σχόλια σε αυτήν την εικόνα.',

	'YOUR_COMMENT'					=> 'Το σχόλιο σας',
	'YOUR_PERSONAL_ALBUM'			=> 'Το Προσωπικό σας Άλμπουμ',
	'YOUR_RATING'					=> 'Η βαθμολογία σας',
));

?>