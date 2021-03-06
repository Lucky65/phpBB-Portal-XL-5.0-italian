<?php
/**
*
* arcade [Greek]
*
* @package language
* @version $Id: arcade.php 803 2009-07-01 17:55:12Z JRSweets $
* @copyright (c) 2008 JeffRusso.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Ελληνική μετάφραση από diastasi (thraki.info) και την ομάδα  του phpbb2.gr:
* (http://phpbb2.gr/team/)
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

//These are used through out the arcade
$lang = array_merge($lang, array(
	'AMOD_GAME'							=> 'Mod δραστηριότητας',
	'ARCADE'								=> 'Arcade',
	'ARCADE_ADD_FAV'						=> 'Προσθήκη στα αγαπημένα',
	'ARCADE_ADV_SEARCH'						=> 'Προχωρημένη αναζήτηση παιχνιδιού',
	'ARCADE_ALL_CATEGORIES'					=> 'Όλες τις κατηγορίες',
	'ARCADE_ALL_GAMES'						=> 'Ολα τα παιχνίδια',
	'ARCADE_BACK_BUTTON_ERROR'				=> 'Υπήρξαν ελλειπή δεδομένα για το παιχνίδι. Αυτό συνήθως συμβαίνει πιέζοντας το πλήκτρο Πίσω στον περιηγητή σας για να παίξεις.  Πίεσε καλύτερα τους δεσμούς μέσα στο arcade για να παίξεις πάλι. Εάν πρέπει να πατήσεις το πλήκτρο πίσω, τότε κάνε ανανέωση σελίδας μόλις πατήσεις πίσω.',
	'ARCADE_BALANCE'					=> 'Ισορροπία',
	'ARCADE_BEST_DATE_EXPLAIN' 				=> 'Το σκόρ καταγράφηκε τη <b>%s</b>.',
	'ARCADE_CATEGORIES'					=> 'Κατηγορίες',
	'ARCADE_CATEGORY'					=> 'Κατηγορία',
	'ARCADE_CAT_LOCKED'					=> 'Κλειδωμένο',
	'ARCADE_CAT_LOCKED_ERROR'				=> 'Η κατηγορία είναι κλειδωμένη. Δεν μπορείς να παίξεις τα παιχνίδια που περιέχει.',
	'ARCADE_CAT_TEST_MODE'					=> 'Η κατηγορία βρίσκεται σε λειτουργία δοκιμής.',
	'ARCADE_CHAMPION_PLAYED' 				=> 'Φορές παιξίματος',
	'ARCADE_CHAMPION_SPENT' 			=> 'Χρόνος παιξίματος',
	'ARCADE_CLICK_PLAY'					=> 'Κλίκ για παίξιμο!',
	'ARCADE_COMMENT'						=> 'Σχόλια',
	'ARCADE_COOKIE_ERROR'				=> 'Παρουσιάστηκε σφάλμα διαβάζοντας τα δεδομένα.  Έλεγξε αν έχεις ενεργοποιημένα τα cookies στόν περιηγητή σας.',
	'ARCADE_COST'							=> 'Κόστος',
	'ARCADE_CREATE'							=> 'Δημιούργησε',
	'ARCADE_DATE'							=> 'Ημ/νια',
	'ARCADE_DEFAULT'						=> 'Προεπιλογή',
	'ARCADE_DISABLE'						=> 'Αυτό το arcade είναι προσωρινά ανενεργό.',
	'ARCADE_DISABLED'						=> 'Το arcade είναι προσωρινά κλειστό.',
	'ARCADE_DOWNLOAD'						=> 'Μεταφόρτωστε',
	'ARCADE_DOWNLOAD_AS'					=> 'Μεταφορτώστε ως',
	'ARCADE_DOWNLOAD_AS_EXPLAIN'			=> 'Επέλεξε ένα τύπο μεταφόρτωσης για το αρχείο.',
	'ARCADE_DOWNLOAD_FORMAT'				=> 'Επέλεξε ένα τύπο μεταφόρτωσης για %s',
	'ARCADE_DOWNLOAD_GAME'					=> 'Μεταφορτώστε παιχνίδι',
	'ARCADE_DOWNLOAD_MISSING_FILES'			=> 'Σφάλμα κατά τη μεταφόρτωση.<br /><br />Επικοινώνησε με το διαχειριστή.',
	'ARCADE_DOWNLOAD_MISSING_FILES_DEBUG'	=> 'Ένα σφάλμα παρουσιάστηκε κατά την μεταφόρτωση<br /><br />Τα ακόλουθα αρχεία και/ή οι κατάλογοι λείπουν:<br /><strong>%s</strong>',
	'ARCADE_EDIT_GAME_QUICK'				=> 'Επεξεργασία Παιχνιδιού',
	'ARCADE_EDIT_SCORES_QUICK'				=> 'Επεξεργασία σκορ',
	'ARCADE_EXPLAIN'					=> 'Παίξε παιχνίδια στα arcade',
	'ARCADE_FAV'						=> 'Αγαπημένα μου',
	'ARCADE_FEELING_LUCKY'					=> 'Νιώθω τυχερός',
	'ARCADE_FIRST'						=> 'Πρώτη θέση',
	'ARCADE_FLASH_VERSION'				=> 'Πρέπει να υπάρχει Adobe Flash Player έκδοση %s η νεώτερη εγκατεστημένη.',
	'ARCADE_FREE'						=> 'Δωρεάν',
	'ARCADE_FULL_DONE' 					=> 'Ευχαριστούμε που παίξατε %s.<br /><br />%sΚάντε κλίκ γιά να παίξετε %s ξανά%s<br /><br />%sΚάντε κλίκ εδώ για να επιστρέψετε στο %s%s<br /><br />%sΚάντε κλίκ εδώ για να επιστρέψετε στο Arcade%s',
	'ARCADE_GAME'						=> 'Παιχνίδι',
	'ARCADE_GAMES'						=> 'Παιχνίδια',
	'ARCADE_GAMES_FILESIZE'				=> 'Μέγεθος: %s',
	'ARCADE_GAMES_PER_PAGE'				=> 'Παιχνίδια ανά σελίδα',
	'ARCADE_GAMES_SORT_DIR'				=> 'Σειρά κατεύθυνσης παιχνιδιών',
	'ARCADE_GAMES_SORT_FIXED'			=> 'Σταθερό',
	'ARCADE_GAMES_SORT_INSTALLDATE'		=> 'Ημ/νια Εγκατάστασης',
	'ARCADE_GAMES_SORT_NAME'			=> 'Όνομα',
	'ARCADE_GAMES_SORT_ORDER'			=> 'Σειρά εμφάνισης παιχνιδιών',
	'ARCADE_GAMES_SORT_PLAYS'			=> 'Παιξίματα',
	'ARCADE_GAMES_SORT_RATING'			=> 'Κατάταξη',
	'ARCADE_GAME_CHAMP' 					=> 'Πρωταθλητής παιχνιδιού',
	'ARCADE_GAME_CHAMPION' 				=> 'Πρωταθλητής',
	'ARCADE_GAME_CHAMPION_COMMENT' 		=> 'Σχόλια πρωταθλητή',
	'ARCADE_GAME_DESC' 				=> 'Περιγραφή',
	'ARCADE_GAME_DOWNLOAD_TOTAL'			=> '%s κατέβηκε %s φορά.',
	'ARCADE_GAME_DOWNLOAD_TOTALS'			=> '%s κατέβηκε %s φορές.',
	'ARCADE_GAME_FAVS'					=> 'Αγαπημένα παιχνίδια',
	'ARCADE_GAME_INFO'					=> 'Πληροφ. Παιχνιδιού',
	'ARCADE_GAME_NAME' 				=> 'Όνομα παιχνιδιού',
	'ARCADE_GAME_NO_SCORES'					=> 'Δεν υπάρχουν σκόρ γιά %s.  Άν θέλεις να παίξεις το παιχνίδι κάνε κλίκ <a href="%s">εδώ</a>.',
	'ARCADE_GAME_OPTIONS' 				=> 'Επιλογές Παιχνιδιού',
	'ARCADE_GAME_OVER' 					=> 'Τέλος Παιχνιδιού!',
	'ARCADE_GAME_RATE' 					=> 'Επιλέξτε κατάταξη παρακάτω',
	'ARCADE_GAME_RATE_ALREADY' 			=> 'Ήδη έχεις επιλέξει κατάταξη για το παιχνίδι.<br /> Κατέταξες το παιχνίδι σαν <b>%d</b>.<br />Μπορείς να αλλάξεις την κατάταξη παρακάτω.',
	'ARCADE_GAME_STATS' 					=> 'Στατιστικά παιχνιδιού',
	'ARCADE_GAME_STATS_INFO' 				=> 'Πληροφορίες. παιχνιδιού',
	'ARCADE_GUEST_FAVS'					=> 'Αν συνδεθείς θα μπορέσεις να έχεις πρόσβαση στα αγαπημένα σου παιχνίδια.',
	'ARCADE_HERE' 						=> 'εδώ',
	'ARCADE_HIGHSCORE'					=> 'Highscore',
	'ARCADE_HIGHSCORES'					=> 'Highscores',
	'ARCADE_HIGH_SCORE_SAVED' 			=> 'Είσαι ο νέος πρωταθλητής %s.  Το σκόρ σου %s νίκησε το παλιό σκόρ του %s.',
	'ARCADE_HIGH_SCORE_SAVED_NEW' 		=> 'Είσαι ο νέος πρωταθλητής %s.  Το σκόρ %s είναι το πρώτο αποθηκευμένο σκόρ για αυτό το παιχνίδι.',
	'ARCADE_IBPROV3_ERROR'				=> 'Τα δεδομένα που καταχωρήθηκαν για το σκόρ έχουν πρόβλημα.  Παρακαλώ παίξτε πάλι το παιχνίδι.  Αν δεις το μήνυμα πάνω από μιά φορά τότε επικοινώνησε με τόν Διαχειριστή του φόρουμ.',
	'ARCADE_INDEX'						=> 'Αρχική Arcade',
	'ARCADE_JACKPOT'					=> 'Τζακπότ',
	'ARCADE_LAST_PLAY'					=> 'Ο %s πέτυχε %s παίζοντας το %s ',
	'ARCADE_LAST_PLAY_TITLE'			=> 'Παίχθηκε τελευταία',
	'ARCADE_LATEST_HIGHSCORES' 			=> 'Νεώτερα highscores',
	'ARCADE_LEADERS'				=> 'Ομάδα Αrcade',
	'ARCADE_LEAST_DOWNLOADED' 				=> 'Λιγότερο κατεβασμένα παιχνίδια',
	'ARCADE_LEAST_DOWNLOADED_EXPLAIN' 		=> 'Ο αριθμός  λιγότερο κατεβασμένων παιχνιδιών που θα προβληθεί στη σελίδα στατιστικών',
	'ARCADE_LEAST_POPULAR' 					=> 'Λιγότερο δημοφιλή παιχνίδια',
	'ARCADE_LEAST_POPULAR_EXPLAIN'			=> 'Ο αριθμός λιγότερων δημοφιλέστερων παιχνιδιών που θα προβληθεί στη σελίδα στατιστικών',
	'ARCADE_LIMIT_PLAY_TYPE_DAYS'		=> 'Χρειάζεσαι συνολικά <strong>%s</strong> δημοσιεύσεις τις τελευταίες <strong>%s</strong> μέρες για να παίξεις παιχνίδια της κατηγορίας. Χρειάζονται <strong>%s</strong> ακόμη δημοσιεύσεις τίς τελευταίες <strong>%s</strong> μέρες πρίν παίξεις.',
	'ARCADE_LIMIT_PLAY_TYPE_POSTS'		=> 'Χρειάζεσαι συνολικά <strong>%s</strong> δημοσιεύσεις για να παίξεις παιχνίδια τής κατηγορίας. Μένουν ακόμη <strong>%s</strong> δημοσιεύσεις για να παίξεις.',
	'ARCADE_LINKS'						=> 'Σύνδεσμοι',
	'ARCADE_LOGIN_CAT'					=> 'Για προβολή ή παίξιμο παιχνιδιού στην κατηγορία εισάγετε κωδικό.',
	'ARCADE_LOGIN_EXPLAIN'				=> 'Συνδεθείτε για να χρησιμοποιήσετε τη λειτουργία του arcade.',
	'ARCADE_LONGEST_SCORE' 					=> 'Περισσότερο κρατήμενο σκορ',
	'ARCADE_MOST_DOWNLOADED' 				=> 'Πιο μεταφορτωμένα παιχνίδια',
	'ARCADE_MOST_DOWNLOADED_EXPLAIN'		=> 'Ο αριθμός δημοφιλέστερων παιχνιδιών που θα προβληθεί στη σελίδα στατιστικών',
	'ARCADE_MOST_POPULAR' 					=> 'Δημοφιλή παιχνίδια',
	'ARCADE_MOST_POPULAR_EXPLAIN' 			=> 'Ο αριθμός δημοφιλέστερων παιχνιδιών που θα προβληθεί στη σελίδα στατιστικών',
	'ARCADE_MY_STATS'						=> 'Οι στατιστικές μου',
	'ARCADE_NEWEST_GAMES' 				=> 'Νεώτερα παιχνίδια',
	'ARCADE_NEW_GAMES'					=> 'Κανένα εγκατεστημένο παιχνίδι',
	'ARCADE_NONE'						=> 'Κανένα',
	'ARCADE_NOSCORE_GAME'				=> 'To παιχνίδι δεν υποστηρίζει σκορ.',
	'ARCADE_NO_GAMES'					=> 'Δεν υπάρχουν εγκατεστημένα παιχνίδια στο arcade.',
	'ARCADE_NO_GAME_FAVS'				=> 'Δεν επέλεξες αγαπημένα παιχνίδια.',
	'ARCADE_NO_HIGHSCORE' 				=> 'Κανένα σκορ',
	'ARCADE_NO_HIGHSCORES'					=> 'Ο χρήστης δεν έχει σκορ.',
	'ARCADE_NO_ID_ERROR'					=> 'Για χρήση της λειτουργίας επιβάλετε η εισαγωγή ταυτότητας id.',
	'ARCADE_NO_LATEST_HIGHSCORES' 		=> 'Δεν υπάρχουν αποθηκευμένα highscores στο arcade.<br />Παίξε κάποια παιχνίδια.',
	'ARCADE_NO_NEW_GAMES'				=> 'Κανένα νέο εγκατεστημένο παιχνίδι',
	'ARCADE_NO_ORDER_TYPE_ERROR'			=> 'Η σειρά πληκτρολόγησης που χρησιμοποιήθηκε δεν υποστηρίζεται.',
	'ARCADE_NO_PLAYS'					=> 'Δεν παίχθηκαν παιχνίδια',
	'ARCADE_NO_POINTS'					=> 'Δεν έχεις αρκετούς %s για να παίξεις το παιχνίδι.',
	'ARCADE_NO_SCORE_SAVED' 			=> 'Δεν αποθηκεύτηκε, το σκόρ σου %s δεν νίκησες το παλαιότερο σκόρ %s.',
	'ARCADE_NO_TIMES_PLAYED'			=> 'Δεν παίχτηκε ακόμη',
	'ARCADE_NO_TOTAL_TYPE_ERROR'			=> 'Ο τρόπος πληκτρολόγησης που επιλέχθηκε δεν υποστηρίζεται.',
	'ARCADE_NO_VOTES'					=> 'Καμιά ψήφος ακόμη',
	'ARCADE_OFFLINE' 					=> 'Δεν παίζεται κανένα παιχνίδι.',
	'ARCADE_ONLINE' 					=> 'Ποιος παίζει?',
	'ARCADE_PERMISSIONS'				=> 'Δικαιώματα Arcade',
	'ARCADE_PERSONAL_BEST'				=> 'Καλύτερο προσωπικό',
	'ARCADE_PLAYED_GAMES_HIGHLIGHT'		=> 'Τα επιλεγμένα παιχνίδια δεν τα εχεις παίξει ακόμη',
	'ARCADE_PLAYED_NO_GAME'					=> 'Ο χρήστης δεν έχει παίξει αυτό το παιχνίδι.',
	'ARCADE_PLAYED_NO_GAMES'				=> 'Ο χρήστης δεν έχει παίξει παιχνίδι.',
	'ARCADE_PLAYS'						=> 'Παιξίματα',
	'ARCADE_PLAY_LINK'					=> 'Παίξε παιχνίδι',
	'ARCADE_POPUP_DONE' 				=> 'Ευχαριστούμε πού παίξατε %s.<br /><br />%sΚάντε κλίκ εδώ για να παίξετε %s ξανά%s<br /><br />%sΚάντε κλίκ εδώ για να κλήσεις το παράθυρο αυτό%s',
	'ARCADE_POPUP_HIGHUSER'					=> 'Σκορ για %s: %s (%s)',
	'ARCADE_POPUP_LINK'					=> 'Παίξε σε νέο παράθυρο',
	'ARCADE_POP_NO_HIGHSCORE' 			=> 'Κανένα highscore γιά %s',
	'ARCADE_QUICK_JUMP'					=> 'Γρήγορη Αναζήτηση',
	'ARCADE_RANK' 							=> 'Κατάταξη',
	'ARCADE_RATING_AVG' 					=> 'Έτσι κι έτσι',
	'ARCADE_RATING_BAD' 				=> 'Απαράδεκτο',
	'ARCADE_RATING_GREAT' 				=> 'Φοβερό',
	'ARCADE_REDIRECT'					=> 'Εάν δεν μεταφερθείς σύντομα κάνε κλίκ %sεδώ%s για να συνεχίσεις.',
	'ARCADE_REGISTER_MESSAGE_PLAY' 		=> 'Επειδή δεν είσαι μέλος ή δεν ε΄χετε συνδεθεί δεν μπορείς να παίξεις κανένα παιχνίδι.<br /><br />Αυτό το φόρουμ έχει <b>%s</b> εγκατεστημένα παιχνίδια και προσθέτουμε κάθε μέρα.<br />Αν θέλεις να χρησιμοποιήσεις το arcade κάνε εγγραφή.<br /><br />Η εγγραφή είναι δωρεάν και μπορεί να γίνει κάνοντας κλίκ %sεδώ%s.<br /><br />Αν θέλεις να συνδεθείς και να παίξεις κάνε κλίκ %sεδώ%s.',
	'ARCADE_REGISTER_MESSAGE_SCORE' 	=> 'Επειδή δεν είσαι μέλος ή δεν συνδεθεί το σκόρ σου δεν θα αποθηκευτεί.<br /><br />Αυτό το φόρουμ έχει <b>%s</b> εγκατεστημένα παιχνίδια και προσθέτουμε κάθε μέρα.<br />Αν θέλεις να χρησιμοποιήσεις το arcade κάνε εγγραφή.<br /><br />Η εγγραφή είναι δωρεάν και μπορεί να γίνει κάνοντας κλίκ %sεδώ%s.',
	'ARCADE_REMOVE_FAV'					=> 'Διαγραφή από αγαπημένα',
	'ARCADE_REPORT'					=> 'Θέμα αναφοράς παιχνιδιού στο arcade',
	'ARCADE_REPORTS_OPEN'					=> 'Υπάρχουν %s ανοικτές αναφορές παιχνιδιών.',
	'ARCADE_REPORT_ADDED'			=> 'Ευχαριστούμε για την αναφορά σχετικά με το <strong>%s</strong>.  Η αναφορά θα ληφθεί από τον διαχειριστή που θα λάβει τα απαραίτητα μέτρα.  Εαν χρειάζονται περαιτέρω λεπτομέρειες θα επικοινωνήσουμε μαζί σας.',
	'ARCADE_REPORT_BELOW'			=> 'Δώστε την αναφορά παρακάτω',
	'ARCADE_REPORT_DOWNLOADING'		=> 'Θέμα μεταφόρτωσης',
	'ARCADE_REPORT_GAME'					=> 'Αναφορά παιχνιδιού',
	'ARCADE_REPORT_OPEN'					=> 'Υπάρχουν %s ανοικτές αναφορές παιχνιδιών.',
	'ARCADE_REPORT_OTHER'			=> 'Αλλο...',
	'ARCADE_REPORT_PLAYING'			=> 'Θέμα παιξίματος',
	'ARCADE_REPORT_SCORING'			=> 'Θέμα σκορ',
	'ARCADE_REPORT_SUCCESS'			=> 'Η αναφορά λήφθηκε επιτυχώς',
	'ARCADE_REPORT_TYPE'			=> 'Επιλέξτε μία αιτία για αναφορά',
	'ARCADE_RESOLUTION' 				=> 'Επιλογή ανάλυσης',
	'ARCADE_RESOLUTION_AUTO'				=> 'Αυτόματο',
	'ARCADE_RESOLUTION_INCREASE'			=> 'Αύξηση',
	'ARCADE_RESOLUTION_REDUCE'				=> 'Μείωση',
	'ARCADE_REWARD'							=> 'Ανταμοιβή',
	'ARCADE_REWARD_MESSAGE'				=> 'Συγχαρητήρια!  Μόλις πήρες %s %s.  Αυτό κάνει το σύνολο σου %s σε %s.',
	'ARCADE_RULES_COMMENT_CAN'				=> '<strong>Μπορείς</strong> να σχολιάσεις στη κατηγορία',
	'ARCADE_RULES_COMMENT_CANNOT'				=> '<strong>Δε μπορείς</strong> να σχολιάσεις στη κατηγορία',
	'ARCADE_RULES_DOWNLOAD_CAN'				=> '<strong>Μπορείς</strong> να κατεβάσεις παιχνίδια στη κατηγορία',
	'ARCADE_RULES_DOWNLOAD_CANNOT'				=> '<strong>Δε μπορείς</strong> να κατεβάσεις παιχνίδια στη κατηγορία',
	'ARCADE_RULES_IGNORE_CONTROL_CAN'			=> '<strong>Μπορείς</strong> να αγνοήσεις όρια παιχνιδιού στη κατηγορία',
	'ARCADE_RULES_IGNORE_CONTROL_CANNOT'		=> '<strong>Δε μπορείς</strong> να αγνοήσεις όρια παιχνιδιού στη κατηγορία',
	'ARCADE_RULES_PLAY_CAN'					=> '<strong>Μπορείς</strong> να παίξεις παιχνίδια στη κατηγορία',
	'ARCADE_RULES_PLAY_CANNOT'				=> '<strong>Δε μπορείς</strong> να παίξεις παιχνίδια στη κατηγορία',
	'ARCADE_RULES_PLAY_FREE_CAN'				=> '<strong>Μπορείς</strong> να παίξεις παιχνίδια δωρεάν στη κατηγορία',
	'ARCADE_RULES_PLAY_FREE_CANNOT'				=> '<strong>Δε μπορείς</strong> να παίξεις παιχνίδια δωρεάν στη κατηγορία',
	'ARCADE_RULES_PLAY_POPUP_CAN'				=> '<strong>Μπορείς</strong> να παίξεις παιχνίδια σε νέο παράθυρο στη κατηγορία',
	'ARCADE_RULES_PLAY_POPUP_CANNOT'			=> '<strong>Δε μπορείς</strong> να παίξεις παιχνίδια σε νέο παράθυρο στη κατηγορία',	
	'ARCADE_RULES_RATE_CAN'						=> '<strong>Μπορείς</strong> να εκτιμήσεις παιχνίδια στη κατηγορία',
	'ARCADE_RULES_RATE_CANNOT'					=> '<strong>Δε μπορείς</strong> να εκτιμήσεις παιχνίδια στη κατηγορία',
	'ARCADE_RULES_REPORT_CAN'					=> '<strong>Μπορείς</strong> να αφαφέρεις παιχνίδια στην κατηγορία',
	'ARCADE_RULES_REPORT_CANNOT'				=> '<strong>Δεν</strong> μπορείς να αφαφέρεις παιχνίδια στην κατηγορία',
	'ARCADE_RULES_RESOLUTION_CAN'				=> '<strong>Μπορείς</strong> να αλλάξεις ανάλυση παιχνιδιού στη κατηγορία',
	'ARCADE_RULES_RESOLUTION_CANNOT'			=> '<strong>Δε μπορείς</strong> να αλλάξεις ανάλυση παιχνιδιού στη κατηγορία',
	'ARCADE_RULES_SCORE_CAN'					=> '<strong>Μπορείς</strong> να υποβάλεις σκόρ στη κατηγορία',
	'ARCADE_RULES_SCORE_CANNOT'					=> '<strong>Δε μπορείς</strong> να υποβάλεις σκόρ στη κατηγορία',
	'ARCADE_SCORE' 							=> 'Σκόρ',
	'ARCADE_SCORES' 						=> 'Σκόρ',
	'ARCADE_SCOREVAR_ERROR' 				=> 'Τα δεδομένα που δώθηκαν για το παιχνίδι είναι ελλειπή ή λάθος. Παρακαλώ ξαναπαίξτε το παιχνίδι. Εαν δείτε αυτό το μήνυμα πάνω από μία φορές επικοινωνήστε με τον διαχειριστή',
	'ARCADE_SCORE_COMMENT' 				=> 'Δώστε σχόλιο',
	'ARCADE_SCORE_COMMENT_BELOW'		=> 'Δώστε σχόλιο παρακάτω',
	'ARCADE_SCORE_ERROR'				=> 'Το σκορ του παιχνιδιού λείπει, δεν θα αποθηκευθεί κανένα σκορ. Εαν θέλετε να ξαναπαίξετε το %s κάντε κλικ %sεδω%s.',
	'ARCADE_SCORE_SAVED' 				=> 'Το σκόρ σου %s αποθηκεύτηκε.  Πάντως δεν νίκησες το σκόρ του %s.',
	'ARCADE_SEARCH'						=> 'Βρες παιχνίδια',
	'ARCADE_SEARCH_DESCRIPTION'			=> 'Δώσε κριτήρια για να αναζητήσεις παιχνίδια',
	'ARCADE_SEARCH_NEW_GAMES'			=> 'Νέα Παιχνίδια',
	'ARCADE_SEARCH_NO_MATCHES'			=> 'Δέ βρέθηκαν παιχνίδια με τα κριτήρια σου.  Ξαναπροσπαθήσε.',
	'ARCADE_SEARCH_RESULTS_FOR'			=> 'Αναζήτηση αποτελεσμάτων για %s',
	'ARCADE_SECOND'						=> 'Δεύτερη θέση',
	'ARCADE_SELECT_CATEGORY'				=> 'Επέλεξε κατηγορία',
	'ARCADE_SELECT_GAME'					=> 'Επέλεξε παιχνίδι',
	'ARCADE_SELECT_RATING' 				=> 'Επιλέξτε κατάταξη',
	'ARCADE_SELECT_STATS'					=> 'Επέλεξε παιχνίδι ή χρήστη',
	'ARCADE_SELECT_USER'					=> 'Επέλεξε χρήστη',
	'ARCADE_SEND_PM'					=> 'Αποστολή ΠΜ σε υπέρβαση highscore',
	'ARCADE_SEND_PM_UCP_EXPLAIN'		=> 'Θα σου σταλεί για ενημέρωση ένα ΠΜ όταν γίνει υπέρβαση σκορ.',
	'ARCADE_STATS'							=> 'Στατιστικά',
	'ARCADE_STATS_AVG'						=> 'Μέσος χρόνος',
	'ARCADE_STATS_BEST_DATE'				=> 'Ημερομηνία',
	'ARCADE_STATS_BEST_SCORE'				=> 'Σκορ',
	'ARCADE_STATS_PAGE_TITLE'				=> 'Στατιστικά Arcade',
	'ARCADE_STATS_PLAY' 					=> '%s παίχθηκε %s φορά.',
	'ARCADE_STATS_PLAYS'					=> '%s παίχθηκε %s φορές.',
	'ARCADE_STATS_SCORE_PAGE_TITLE'			=> 'Βλέποντας στατιστικές arcade για %s - %s',
	'ARCADE_STATS_TOTAL' 					=> 'Συνολικός χρόνος',
	'ARCADE_STATS_TOTAL_DOWNLOADS'			=> 'Συνολικές μεταφορτώσεις',
	'ARCADE_STATS_TOTAL_PLAYS' 				=> 'Συνολικά παιξίματα',
	'ARCADE_STATS_TOTAL_TIME' 				=> 'Συνολικός χρόνος',
	'ARCADE_STATS_USER_GAME_PAGE_TITLE'		=> 'Βλέποντας στατιστικές arcade για %s',
	'ARCADE_STATS_WIN' 						=> '%s έχει %s highscore.',
	'ARCADE_STATS_WINS' 					=> '%s έχει %s highscores.',
	'ARCADE_SUBCAT'						=> 'Υποκατηγορία',
	'ARCADE_SUBCATS'					=> 'Υποκατηγορίες',
	'ARCADE_SYNC_MODE_NOT_SUPPORTED'		=> 'Η ανάλυση που επιλέχθηκε δεν υποστηρίζεται.',
	'ARCADE_TEST_SCORE'						=> 'Το σκορ για το παιχνίδι θα έπρεπε να υποβληθεί ως <strong>%s</strong>, πάντως δεν θα αποθηκευθεί σκορ επειδή η κατηγορία είναι σε λειτουργία <strong>δοκιμής</strong>. Εαν θέλετε να παίξετε %s ξανά παρακαλώ κάντε κλικ %sεδώ%s. Εαν θέλετε να γυρίσετε στην κατηγορία κάντε κλικ %sεδώ%s.',
	'ARCADE_THIRD'						=> 'Τρίτη θέση',
	'ARCADE_TIMES_DOWNLOADED'			=> 'Κατέβηκε: %d φορές',
	'ARCADE_TIMES_PLAYED'				=> 'Παίχτηκε: %d φορές',
	'ARCADE_TIME_HELD' 						=> 'Ώρα κρατήμενο',
	'ARCADE_TOP_SCORES' 				=> 'Υψηλά σκόρ',
	'ARCADE_TOTAL_DOWNLOAD'				=> 'Υπήρξαν <b>%s</b> μεταφορτώσεις από το arcade.',
	'ARCADE_TOTAL_DOWNLOADS'			=> 'Υπήρξαν <b>%s</b> μεταφορτώσεις από το arcade.',
	'ARCADE_TOTAL_GAME'						=> 'Υπάρχουν <b>%s</b> εγκατεστημένα παιχνίδια.',
	'ARCADE_TOTAL_GAMES'					=> 'Υπάρχουν <b>%s</b> εγκατεστημένα παιχνίδια.',
	'ARCADE_TOTAL_PLAY'						=> 'Τα παιχνίδια στο arcade παίχτηκαν <b>%s</b> φορές σε σύνολο <b>%s</b>.',
	'ARCADE_TOTAL_PLAYS'					=> 'Τα παιχνίδια στο arcade παίχτηκαν <b>%s</b> φορές σε σύνολο <b>%s</b>.',
	'ARCADE_TYPE'							=> 'Τύπος',
	'ARCADE_TYPE_ERROR' 				=> 'Η καταχώρηση σκόρ δεν ταιριάζει με τον τύπο του παιχνιδιού.  Παρακαλώ ενημερώστε τον Διαχειριστή του φόρουμ.',
	'ARCADE_USER_FAV'					=> 'Αγαπημένα χρηστών',
	'ARCADE_USER_HIGHSCORES'				=> 'Δες τα σκόρ του χρήστη',
	'ARCADE_USER_INFO' 					=> 'Πληροφορίες Χρήστη',
	'ARCADE_USER_SCORES'					=> 'Δες όλα τα σκόρ του χρήστη',
	'ARCADE_USER_STATS' 					=> 'Στατιστικά χρήστη',
	'ARCADE_VIEW'							=> 'Προβολή',
	'ARCADE_VIEW_USERS_STATS'			=> 'Δες την κατάσταση arcade του χρήστη',
	'ARCADE_VOTE'							=> '%s ψήφισε, %s μέσος όρος',
	'ARCADE_VOTES'							=> '%s ψήφισε, %s μέσος όρος',
	'ARCADE_VOTES_NO'						=> 'Καμία ψήφος',
	'ARCADE_WELCOME' 					=> 'Καλώς ήρθατε στο arcade!',
	'ARCADE_WELCOME_CHAMP'				=> 'Ο %s είναι ο νέος πρωταθλητής %s !',
	'ARCADE_WELCOME_PLAYS' 				=> 'Παιγμένα Παιχνίδια',
	'ARCADE_WELCOME_SCORE'					=> 'Το σκορ του <b>%s</b> » %s.',
	'ARCADE_WELCOME_TIME' 				=> 'Χρόνος παιχνιδιού',
	'ARCADE_WELCOME_TIMEPLAYED' 		=> 'Χρόνος που παίχτηκε',
	'ARCADE_WELCOME_WINS'					=> 'Συνολικές νίκες',
	'ARCADE_ZERO_NEGATIVE_SCORE'			=> 'Το σκόρ σου για το παιχνίδι ήταν μηδέν (0) ή υπήρξε σφάλμα, και κανένα σκόρ δεν καταχωρείται. Εάν θέλεις να παίξεις πάλι κάνε κλίκ %sεδώ%s.',
	'AR_GAME'							=> 'Δωμάτιο Arcade',

	'CAT_RULES'							=> 'Κανόνες Κατηγορίας',
	'CAT_RULES_LINK_CLICK'				=> 'Κάντε κλίκ για προβολή κανόνων κατηγορίας',
	'CLOSE'									=> 'Κλείσιμο',

	'DOWNLOADING_GAME'					=> 'Κατεβάζοντας το παιχνίδι %s',
	'DOWNLOADING_GAME_LIST'				=> 'Μεταφόρτωση παιχνιδιού %s μέσω της λίστας μεταφόρτωσης arcade',
	'DOWNLOADING_LIST'					=> 'Προβολή λίστας μεταφόρτωσης arcade',

	'IBPROV3_GAME'							=> 'IBPROV3',
	'IBPRO_ARCADELIB_GAME'					=> 'IBPRO (arcadelib)',
	'IBPRO_GAME'							=> 'IBPRO',

	'LOGIN_VIEWARCADE'						=> 'Το φόρουμ επιβάλει να εγγραφείς και να συνδεθείτε για να δείτε τη κατηγορία.',

	'NEW_GAMES'							=> 'Νέα παιχνίδια',
	'NEW_GAMES_LOCKED'					=> 'Νέο παιχνίδι [Locked]',
	'NOSCORE_GAME'						=> 'Κανένα σκόρ',
	'NO_ARCADE_GAMES'					=> 'Δεν υπάρχουν εγκατεστημένα παιχνίδια στη κατηγορία.',
	'NO_CAT_ID'								=> 'Δεν επιλέχθηκε ή δεν υπάρχει κατηγορία.',
	'NO_GAME_ID'							=> 'Δεν επιλέχθηκε ή δεν υπάρχει το παιχνίδι.',
	'NO_NEW_GAMES'						=> 'Κανένα νέο παιχνίδι',
	'NO_NEW_GAMES_LOCKED'				=> 'Κανένα νέο παιχνίδι [Locked]',
	'NO_PERMISSION_ARCADE_COMMENT'		=> 'Δεν έχεις τα δικαιώματα να υποβάλεις σχόλια στην κατηγορία του arcade.  Αν πιστεύεις ότι είναι σφάλμα επικοινώνησε με το διαχειριστή τού φόρουμ.',
	'NO_PERMISSION_ARCADE_DOWNLOAD'		=> 'Δεν έχεις τα δικαιώματα να μεταφορτώσεις παιχνίδια της κατηγορίας από το arcade.  Αν πιστεύεις ότι είναι σφάλμα επικοινώνησε με το διαχειριστή τού φόρουμ.',
	'NO_PERMISSION_ARCADE_PLAY'			=> 'Δεν έχεις τα δικαιώματα να παίξεις στην κατηγορία του arcade.  Αν πιστεύεις ότι είναι σφάλμα επικοινώνησε με το διαχειριστή τού φόρουμ.',
	'NO_PERMISSION_ARCADE_PLAY_POPUP'	=> 'Δεν έχεις τα δικαιώματα να παίξεις παιχνίδια σε νέο παράθυρο στην κατηγορία του arcade.  Αν πιστεύεις ότι είναι σφάλμα επικοινώνησε με το διαχειριστή τού φόρουμ.',
	'NO_PERMISSION_ARCADE_RATE'			=> 'Δεν έχεις τα δικαιώματα να εκτιμήσεις παιχνίδια της κατηγορίας στο arcade.  Αν πιστεύεις ότι είναι σφάλμα επικοινώνησε με το διαχειριστή τού φόρουμ.',
	'NO_PERMISSION_ARCADE_REPORT'			=> 'Δεν έχεις τα δικαιώματα να αναφέρεις παιχνίδια της κατηγορίας.   Αν πιστεύεις ότι είναι σφάλμα επικοινώνησε με το διαχειριστή τού φόρουμ.',
	'NO_PERMISSION_ARCADE_SCORE'		=> 'Δεν έχεις τα δικαιώματα να υποβάλεις  το σκόρ σου στο arcade.  Αν πιστεύεις ότι είναι σφάλμα επικοινώνησε με το διαχειριστή τού φόρουμ.',
	'NO_PERMISSION_ARCADE_VIEW'			=> 'Δεν έχεις τα δικαιώματα να δεις την κατηγορία στο arcade.  Αν πιστεύεις ότι είναι σφάλμα επικοινώνησε με το διαχειριστή τού φόρουμ.',

	'OPEN'									=> 'Ανοιγμα',

	'PLAYING_GAME'						=> 'Παίζοντας στο arcade το %s',

	'RETURN_TO_ARCADE'						=> 'Επιστροφή στο arcade',

	'SEPARATOR_DECIMAL'						=> '.',
	'SEPARATOR_THOUSANDS'					=> ',',

	'TIME_DAY'								=> 'ημέρα',
	'TIME_DAYS'								=> 'ημέρες',
	'TIME_HOUR'								=> 'ώρα',
	'TIME_HOURS'							=> 'ώρες',
	'TIME_MINUTE'							=> 'λεπτό',
	'TIME_MINUTES'							=> 'λεπτά',
	'TIME_MONTH'							=> 'μήνας',
	'TIME_MONTHS'							=> 'μήνες',
	'TIME_SECOND'							=> 'δευτ.',
	'TIME_SECONDS'							=> 'δευτ.',
	'TIME_WEEK'								=> 'εβδομ.',
	'TIME_WEEKS'							=> 'εβδομ.',
	'TIME_YEAR'								=> 'χρόνος',
	'TIME_YEARS'							=> 'χρόνια',

	'V3ARCADE_GAME'							=> 'V3Arcade',
	'VIEWING_ARCADE'						=> 'Βλέποντας το arcade',
	'VIEWING_ARCADE_CAT'				=> 'Βλέποντας κατηγορία arcade %s',
	'VIEWING_ARCADE_FAVS'				=> 'Βλέποντας αγαπημένα arcade',
	'VIEWING_ARCADE_SEARCH'				=> 'Αναζητώντας παιχνίδια arcade',
	'VIEWING_ARCADE_STATS'				=> 'Βλέποντας στατιστικές arcade',
	'VIEWING_ARCADE_STATS_GAME'			=> 'Βλέποντας στατιστικές arcade για το παιχνίδι %s',
	'VIEWING_ARCADE_STATS_GAME_USER'		=> 'Βλέποντας στατιστικές arcade για το παιχνίδι %s με χρήστη %s',
	'VIEWING_ARCADE_STATS_USER'			=> 'Βλέποντας στατιστικές arcade για το χρήστη %s',
));

?>