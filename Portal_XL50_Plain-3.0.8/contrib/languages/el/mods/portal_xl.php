<?php
/** 
*
* @name portal_xl.php [Greek-el]
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbbgr.com:
* (http://phpbbgr.com/team/)
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
// ’ » “ ” …
//
global $config, $user;

$lang = array_merge($lang, array(
	// general definitions
	'PORTAL'			=> 'Αρχική σελίδα',
	'PORTAL_INDEX'		=> 'Αρχική & Δ. Συζήτηση',
	'ANNOUNCMENTS'		=> 'Ανακοινώσεις',
	'NEWS'			    => 'Νέα',
	'POLL'			    => 'Ψηφοφορίες',
	'NO_POLL'			=> 'Καμία διαθέσιμη ψηφοφορία',
	'READ_FULL'			=> 'Εμφάνιση όλων',
	'NO_NEWS'			=> 'Δεν υπάρχουν νέα',
	'POSTED_BY'			=> 'Συγγραφέας',
	'COMMENTS'			=> 'Σχόλια',
	'VIEW_COMMENTS'		=> 'Δείτε σχόλια',
	'POST_REPLY'		=> 'Γράψτε το σχόλιο σας',
	'CLOCK'				=> 'Ρολόι',
	'TOPIC_VIEWS'		=> 'Επισκέψεις',
	'FORUMS'		    => 'Δ. Συζητήσεις',
	'EXPAND'		    => 'Ανάπτυξη',
	'COLLAPSE'		    => 'Σύμπτυξη',
	'INVERT'		    => 'Αναστροφή',
	'LEFTCOL'		    => 'Δεξί +/-',
	'RIGHTCOL'		    => 'Αριστερό +/-',

	// who is online
	'WIO_TOTAL'			=> 'Συνολικά',
	'WIO_REGISTERED'	=> 'Εγγεγραμμένοι',
	'WIO_HIDDEN'		=> 'Με απόκρυψη',
	'WIO_GUEST'			=> 'Επισκέπτες',
	//'RECORD_ONLINE_USERS'=> 'Προβολή εγγραφών: <strong>%1$s</strong><br />%2$s',

	// welcome
	'WELCOME'			=> 'Καλώς ήρθατε',
	
	// mp3 player
	'MEDIA_PLAYER'			=> 'Media player',
	'MEDIA_PLAYER_POPUP'	=> 'Media player',
	'MEDIA_UPLOAD'			=> 'Φόρτωση  media',
	'MEDIA_PLAYER_VERSION'	=> 'Media Player v.2.5',

	// user menu
	'USER_MENU'			=> 'Μενού μέλους',
	'UM_LOG_ME_IN'		=> 'Αυτόματη εγγραφή',
	'UM_HIDE_ME'		=> 'Απόκρυψη σύνδεσης',
	'UM_MAIN_SUBSCRIBED'=> 'Παρακολούθηση',
	'UM_BOOKMARKS'		=> 'Σελιδοδείκτες',

	// statistic
	'ST_NEW'				=> 'Νέα(ες)',
	'ST_NEW_POSTS'			=> 'Δημοσίευση(εις)',
	'ST_NEW_TOPICS'			=> 'Θέμα(τα)',
	'ST_NEW_ANNS'			=> 'Ανακοίνωση(εις)',
	'ST_NEW_STICKYS'		=> 'Σημείωση(σεις)',
	'ST_TOP'				=> 'Σύνολο',
	'ST_TOP_ANNS'			=> 'Ανακοινώσεων',
	'ST_TOP_STICKYS'		=> 'Σημειώσεων',
	'ST_TOT_ATTACH'			=> 'Συνημμένων',
	'ST_TOT_FILES'			=> 'Αρχείων',
	'ST_PORTAL_STARTDATE'	=> 'Ημερομηνία έναρξης',
	
	'FILES_ATTACHMENTS'		=> 'Στατιστικά Συνημμένων ',
	'FILES_PER_DAY'			=> 'Συνημμένα ανά μέρα',
	'FILES_PER_POST'		=> 'Συνημμένα ανά δημοσίευση',
	'FILES_PER_TOPIC'		=> 'Συνημμένα ανά θέμα',
	'FILES_PER_USER'		=> 'Συνημμένα ανά μέλος',

	// visit counter
	'ST_TOT_VISIT'				=> 'Επισκέψεις',
	'ST_LAT_VISIT'				=> 'Η IP σας',

	// attachments
	'TOP_COUNT'         		=> 'Μεταφορτώσεις',
	'TOP_DATE'         			=> 'Την',
	'TOP_FILENAME'         		=> 'Αρχεία',
	'TOP_FILESIZE'         		=> 'Μέγεθος',
	'TOP_TEL'         			=> 'Κορυφαία αρχεία',
	'TOP_X'         			=> 'Φορές',
	'VIEW_TOPIC_ATTACHMENTS' 	=> 'Σύνολο συνημμένων',

	// search
	'SH'		=> 'πάμε',
	'SH_SITE'	=> 'Δ. συζητήσεις',
	'SH_POSTS'	=> 'δημοσιεύσεις',
	'SH_AUTHOR'	=> 'συγγραφέας',
	'SH_ENGINE'	=> 'μηχανές αναζήτησης',
	'SH_ADV'	=> 'προηγμένη αναζήτηση',
	
	// recent
	'RECENT_TOPIC'		=> 'Θέματα',
	'RECENT_ANN' 		=> 'Ανακοινώσεις',
	'RECENT_HOT_TOPIC' 	=> 'Απαντήσεις',
	'LAST_REPLIED'      => 'Τελ. Απάντηση',
   	'BY'            	=> 'Από',
   	'ON'            	=> 'Την',

	// random member
	'RND_MEMBER'	=> 'Τυχαίο μέλος',
	'RND_JOIN'		=> 'Συνένωση',
	'RND_POSTS' 	=> 'Δημοσιεύσεις',
	'RND_OCC' 		=> 'Επάγγελμα',
	'RND_FROM' 		=> 'Τοποθεσία',
	'RND_WWW' 		=> 'Ιστοσελίδα',

	// random banners
	'RND_B_BANNERS'	=> 'Τυχαίοι σύνδεσμοι', // Κανονικά banners (88x31) on portal
	'RND_H_BANNERS'	=> 'Τυχαίο Banner', // Οριζόντια banners ( ) on portal
	'RND_V_BANNERS'	=> 'Τυχαίο Banner', // Κάθετα  banners (130x600) on portal
	
	// random member
	'GOOGLE_ADDS'		=> 'Διαφημίσεις',
	'GOOGLE_ADDS_TXT'	=> 'Βάλτε εδώ τις διαφημίσεις σας!',

	// most poster
	'MOST_POSTER' => 'Κορυφαίοι συγγραφείς',

	// links
	'LINKS' => 'Σύνδεσμοι',

	// latest members
	'LATEST_MEMBERS' => 'Τελευταία μέλη',

	// make donation
	'DONATION' 		=> 'Δωρεά',
	'DONATION_TEXT' => 'είναι μια σελίδα που προσφέρει αφιλοκερδώς της υπηρεσίες της. Οποιοσδήποτε θέλει να στηρίξει την σελίδα μπορεί να το κάνει βοηθώντας ώστε να πληρωθούν τα έξοδα του κεντρικού υπολογιστή κλπ.',
	'PAY_MSG'		=> 'Μετά την επιλογή του ποσού από το μενού πατήστε στο  εικονίδιο του PayPal ώστε να μεταβείτε σε αυτό και να ολοκληρώσετε την δωρεά.',
	'PAY_ITEM' 		=> 'Δωρεά', // paypal item
	'CURRENCY_MSG' 	=> 'Επιλέξτε Νόμισμα: ',
	'AMOUNT_MSG' 	=> 'Επιλέξτε το ποσό που θέλετε να κάνετε δωρεά: ',
	'CLICK_MSG' 	=> 'Πατήστε για δωρεά',

	// main menu
	'M_MENU' 		=> 'Μενού',
	'M_CONTENT' 	=> 'Περιεχόμενα',
	'M_ACP' 		=> 'ΠΕΔ',
	'M_MCP' 		=> 'ΠΕΣ', // short name
	'M_HELP' 		=> 'Βοήθεια',
	'M_BBCODE' 		=> 'BBCode FAQ',
	'M_TERMS' 		=> 'Κανόνες χρήσης',
	'M_PRV' 		=> 'Όροι Εγγραφής',
	'M_SEARCH' 		=> 'Αναζήτηση',

	// link us
	'LINK_US' 		=> 'Σύνδεση με εμάς',
	'LINK_US_TXT' 	=> ' Μπορείτε  να προσθέσετε στην ιστοσελίδα σας έναν σύνδεσμο προς το <strong>%s</strong>. Χρησιμοποιήστε τον ακόλουθο HTML κώδικα:',

	// friends
	'FRIENDS'				=> 'Φίλοι',
	'FRIENDS_OFFLINE'		=> 'Ανενεργοί',
	'FRIENDS_ONLINE'		=> 'Ενεργοί',
	'NO_FRIENDS'			=> 'Δεν υπάρχουν ενεργοί φίλοι',
	'NO_FRIENDS_OFFLINE'	=> 'Κανένας φίλος ανενεργός',
	'NO_FRIENDS_ONLINE'		=> 'Κανένας φίλος ενεργός',
	
	// last bots
	'LAST_VISITED_BOTS'		=> 'Τελευταία %s bots',
	
	// wordgraph
   	'WORDGRAPH'				=> 'Wordgraph',
   
	// change style
   	'BOARD_STYLES'			=> 'Στυλ σελίδας',
   	'VIEW_STYLES'			=> 'Προβολή Στυλ',
   	'TOTAL_STYLES'			=> 'Διαθέσιμα Στυλ',
   	'STYLE_SELECT'			=> 'Επιλέξτε Στυλ',
	
	// team
	'NO_ADMINISTRATORS// last visitors_P'	=> 'Κανένας διαχειριστής',
	'NO_MODERATORS_P'		=> 'Κανένας συντονιστής',

	// chatbox
    'CHAT'                  => 'Συνομιλία',
	'VIEWING_CHAT'          => 'Εμφάνιση συνομιλίας',
	'CHAT_EXPLAIN'			=> 'Κέντρο συνομιλίας',

	// weather
    'PORTAL_WEATHER'         => 'Καιρός',

	// syndicate
    'PORTAL_SYNDICATE'       => 'Syndicate',

	// navx
    'PORTAL_NAVX'            => 'Πλοήγηση-X',

	// last visitors
    'L_LAST_VISIT' 			=> 'Τελευταία επίσκεψη',

   	// Visit Counter
   	'VISIT_COUNTER_1' 		=> 'Αυτή η σελίδα έχει δεχθεί συνολικά <b>%d</b> επισκέψεις από την %s',
	'VISIT_COUNTER_2'		=> 'Αυτή η σελίδα έχει δεχθεί συνολικά <b>%d</b> επισκέψεις από την Δευτέρα 16 Μαρτίου 2007',
	'VISIT_COUNTER_3'		=> 'Σε αυτήν την σελίδα έχουν προβληθεί <b>%d</b> υπό-σελίδες από την  %s',
   	'VISIT_COUNTER' 		=> 'Μετρητής Επισκέψεων',

   	// gallery
   	'L_GALLERY'         	=> 'Γκαλερί εικόνων',

   	// forum categories
	'FCATEGORIES'			=> 'Δ. συζητήσεις',

	// actual topics scroll block
	'RECENT_ACTUAL_TOPIC'		=> 'Θέματα',
	'RECENT_ACTUAL_ANN' 		=> 'Ανακοινώσεις',
	'RECENT_ACTUAL_HOT_TOPIC' 	=> 'Κορυφαία Θέματα',
    'RECENT_ACTUAL_ANN_NO'      => 'Λυπούμαστε, δεν βρέθηκαν ανακοινώσεις',
	 	
   	// similar topics
	'SIMILAR_TOPICS'			=> 'Συναφή θέματα',
	
   	// downloads
	'L_DOWNLOADS'				=> 'Μεταφορτώσεις',

   	// jumpbox RC4
	'RETURN_TO_SEARCH_ADV'	    => 'Προηγμένη Αναζήτηση',
	'RETURN_TO'					=> 'Επιστροφή στο ',
	
   	// php info
	'PHP_INFO_EXPLAIN'			=> 'Πληροφορίες Διακομιστή',
	'DATABASE_SERVER_INFO'		=> 'Διακομιστής Βάσης',
	'GZIP_COMPRESSION'			=> 'Συμπίεση GZip',
	'OFF'						=> 'Ανενεργή',
	'ON'						=> 'Ενεργή',
	'OS_INFO'					=> 'Λειτουργικό σύστημα',
	'PHP_INFO'					=> 'Σύνθεση σεναρίου',
	'WEBSERVER_INFO'			=> 'Τύπος Διακομιστή',
	
    //Last Visit MOD
	'LAST_VISITS'				=> 'Τελευταίοι επισκέπτες',
	'NO_LASTVISIT_USERS' 		=> 'Κανένα ενεργό μέλος',
	
	'GUEST_VISITS_TOTAL'			=> '%d επισκέπτες',
	'GUEST_VISITS_ZERO_TOTAL'	=> '0 επισκέπτες',
	'GUEST_VISIT_TOTAL'			=> '%d επισκέπτης',

	'HIDDEN_VISITS_TOTAL'		=> '%d με απόκρυψη και ',
	'HIDDEN_VISITS_ZERO_TOTAL'	=> '0 με απόκρυψη και ',
	'HIDDEN_VISIT_TOTAL'		=> '%d με απόκρυψη και ',

	'LASTVISIT_VISITS_TOTAL'		=> 'Συνολικά <strong>%d</strong> μέλη έχουν συνδεθεί τις τελευταίες 24 ώρες :: ',
	'LASTVISIT_VISITS_ZERO_TOTAL'	=> '<strong>Κανένα</strong> συνδεδεμένο μέλος σήμερα :: ',
	'LASTVISIT_VISIT_TOTAL'			=> 'Συνολικά <strong>%d</strong> μέλη συνδεδεμένα σήμερα :: ',
	
	'REG_VISITS_TOTAL'			=> '%d εγγεγραμμένοι, ',
	'REG_VISITS_ZERO_TOTAL'		=> '0 εγγεγραμμένοι, ',
	'REG_VISIT_TOTAL'			=> '%d εγγεγραμμένο, ',

    // quotes
	'QUOTES_INFO'			    => 'Παράθεση της ημέρας',

    // partners
	'PARTNERS_INFO'			    => 'Συνεργάτες',

    // scroll message
    'SCROLL_MESSAGE' 			=> 'Κυλιόμενο μήνυμα',

    // crawler linker
    'CRAWLER_LINKS_TOTAL' 		=> 'Crawler σύνολο συνδέσμων',
    'CRAWLER_LINKS' 			=> 'Crawler Ανατροφοδοτήσεις',

    // portal mods
	'MODS_DATABASE'				=> 'Βάση δεδομένων Mods',
	'MODS_DATABASE_EXPLAIN'		=> 'Εδώ μπορείτε να διαχειριστείτε την βάση δεδομένων των Mods. Μπορείτε να προσθέσετε, επεξεργαστείτε  ή να διαγράψετε Mods από την βάση δεδομένων σας.',
	'MOD_ADD'					=> 'Προσθήκη Mod',
	'MOD_ADDED'					=> 'Το νέο Mod προστέθηκε επιτυχώς.',
	'MOD_DELETED'				=> 'Το Mod διαγράφηκε επιτυχώς .',
	'MOD_EDIT'					=> 'Επεξεργασία Mods',
	'MOD_EDIT_EXPLAIN'			=> 'Εδώ μπορείτε να προσθέσετε ή να επεξεργαστείτε ένα ήδη υπάρχων  καταχώρηση Mod. Το όνομα και ο αριθμός έκδοσης απαιτείται. Μπορείτε  επίσης να εισαγάγετε τις λεπτομέρειες όπου το mod μπορεί να μεταφορτωθεί, και πού το ίδιο mod μπορεί να βρεθεί.',
	'BOT_NAME'					=> 'Bot όνομα',
	'BOT_NAME_EXPLAIN'			=> 'Χρησιμοποιείτε  μόνο πληροφοριακά.',
	'MOD_NAME_TAKEN'			=> 'Ο τίτλος είναι ήδη σε χρήση στη βάση δεδομένων Mods και δεν μπορεί να χρησιμοποιηθεί πάλι.',
	'MOD_UPDATED'				=> 'Το υπάρχων  Mod ενημερώθηκε επιτυχώς.',
	'ERR_MOD_NO_MATCHES'		=> 'Πρέπει να προσθέσετε τουλάχιστον τον τίτλο του mod και τον αριθμό έκδοσης mod για αυτήν την καταχώρηση του mod.',
	'NO_MOD'					=> 'Δεν βρέθηκε κανένα mod με τη διευκρινισμένη ταυτότητα ID.',
	'MOD_TITLE'					=> 'Mod Τίτλος',
	'MOD_VERSION'				=> 'Έκδοση',
	'MOD_VERSION_TYPE'			=> 'Τύπος έκδοσης',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Beta, Alpha, Dev ή RC*',
	'MOD_DESC'					=> 'Περιγραφή',
	'MOD_AUTHOR'				=> 'Συγγραφέας',
	'MOD_URL'					=> 'Τοποθεσία',
	'MOD_VISIT_WEBSITE'				=> 'URL συνδέσμου όπου δημοσιεύεται το Mod',
	'MOD_DOWNLOAD_MOD'				=> 'URL συνδέσμου που το  Mod μπορεί να μεταφορτωθεί',
	'MOD_LIST_MOD'					=> '1 Mod εγκατεστημένο',
	'MOD_LIST_MODS'					=> '%s Mods εγκατεστημένα',
	'SORT_MOD_TITLE'			=> 'SORT_MOD_TITLE',
	'SORT_MOD_VERSION'			=> 'SORT_MOD_VERSION',
	'SORT_MOD_AUTHOR'			=> 'SORT_MOD_AUTHOR',
   	'VIEWING_PORTAL'			=> 'Επισκόπηση portal',
	'DOWNLOAD_MOD'				=> 'Μεταφόρτωση',

	// Portal Pages
  	'PAGES_LIST_TITLE' 			=> 'Σελίδες portal',
  	'PAGES_NOT_EXIST' 			=> 'Αυτή η σελίδα δεν υπάρχει.',
  	'PAGES_NONE_EXIST' 			=> 'Δεν υπάρχουν σελίδες.',
  	'PAGES_QUERY_FAILED' 		=> 'Αδυναμία σύνδεσης σελίδων.',
  	'PAGES_VIEW_FULL' 			=> 'Επισκόπηση σελίδας portal',

	// Boardwide definitions for RSS 2 links
  	'RSS_FEED_FORUM' 			=> 'RSS 2 Feed Forum',
  	'RSS_FEED_ATTACHMENTS' 		=> 'RSS 2 Feed Attachments',

	// corrected/added since 0.4B5 
	'NO_ANNOUNCEMENTS'			=> 'Δεν υπάρχουν ανακοινώσεις',
	'FILEBASE_TITLE_VISIT'		=> 'Μετάβαση στα αρχεία',
   	'LAST_ON' 			        => 'Τελευταία επίσκεψη', // ajax userinfo	
  	'RSS_FEEDS' 				=> 'RSS Syndication',

	// corrected/added since RC1
	'OPEN_CLOSE_COLUMNS'		=> 'Ανοίξτε/Κλείστε όλες τις στήλες',

	// corrected/added since RC2 below
	'ACRONYM'					=> 'Ακρώνυμα',
	'ACRONYMS'					=> 'Ακρώνυμα και συντμήσεις',
	'ACRONYM_TOTAL'				=> 'Σύνολο ακρωνύμων στην βάση μας',
	'ACRONYM_REPLACEMENT'		=> 'Αντικατάσταση ακρωνύμων',
	'ACRONYM_URL'				=> 'Ακρώνυμου σύνδεσμος',	
	'TOTAL_FILES_COUNT'			=> 'Σύνολο αρχείων στην βάση μας',
	'ST_TOT_ACTIVE_POSTERS'		=> 'Ενεργοί συγγραφείς',
	'ST_TOT_ATTACH_SIZE'		=> 'Μεγέθους συνημμένων',
	'ST_TOT_FILES_SIZE'			=> 'Μεγέθους αρχείων',
	'ST_TOT_ACRONYM'			=> 'Ακρωνύμων',
	'ST_TOT_FLAGS'				=> 'Σημαιών',
	'ST_TOT_PICTURES'			=> 'Εικόνων',
	'ST_TOT_KB_ARTICLES'		=> 'Άρθρων Β. Γνώσεων',
	'ST_TOT_POSTS'				=> 'Δημοσιεύσεων',
	'ST_TOT_TOPICS'				=> 'Θεμάτων',
	'ST_TOT_CHAT_USERS'			=> 'Μελών στην συνομιλία',	

	 // gender statistics
	'USER_GENDERS'				=> 'Γένος μελών',
	'USERS_WITH_GENDER'			=> 'Μέλη που έχουν δηλώσει το γένος τους',
	'MALE_FEMALE_RATIO'			=> 'Αναλογία ανδρών/γυναικών',
	'MALE_COUNT'				=> 'Άνδρες μέλη',
	'FEMALE_COUNT'				=> 'Γυναίκες μέλη',

	'IMG_SIZE_ALTERED'			=> 'Το μέγεθος εικόνας μπορεί να αλλάξει για να ταιριάξει στο παράθυρο.<br /> Πατήστε την εικόνα για να ανοίξει σε κανονικό μέγεθος.',
	'RETURN_PORTAL'				=> '%sΕπιστροφή στην σελίδα portal %s',
	'KB_RECENT_ARTICLES'		=> 'Πρόσφατα θέματα Βάσης Γνώσεων',
    'FILEBASE_TITLE'		        => 		'Βάση αρχείων',

    // corrected/added since RC3 below
    'IMPORTANT_NEWS'         => 'Γενική Ανακοίνωση',
    'TOTAL_NEWS'            => 'Σύνολο Νέων',
    'TOTAL_ANNOUNCEMENTS'      => 'Σύνολο Ανακοινώσεων',
   	'NO_PICS'					=> 'Καμία εικόνα διαθέσιμη',

       // corrected/added since RC4 below
       // Recent Topics
       'RECENT_SHOWING_POSTS'      => 'Εμφάνιση δημοσιεύσεων',
       'RECENT_SELECT_MODE'      => 'Επιλέξτε μέθοδο',
       'RECENT_TOPICS'            => 'Πρόσφατες δημοσιεύσεις',
       'RECENT_TODAY'            => 'Σήμερα',
       'RECENT_YESTERDAY'         => 'Χθες',
       'RECENT_LAST24'            => 'Τελευταίες 24 ώρες',
       'RECENT_LASTWEEK'         => 'Τελευταία εβδομάδα',
       'RECENT_DAYS'            => 'Ημέρες',
       'RECENT_LASTXDAYS'         => 'Τελευταίες  %s ημέρες',
       'RECENT_LAST'            => 'Τελευταίες',
       'RECENT_FIRST'            => 'ξεκίνησε  %s',
       'RECENT_FIRST_POSTER'      => ' από %s',
       'RECENT_SELECT_MODE'      => 'Επιλέξτε μέθοδο:',
       'RECENT_SHOWING_POSTS'      => 'Εμφάνιση δημοσιεύσεων:',
       'RECENT_TITLE_ONE'         => '<font size=4>%s</font> topic %s', // %s = topics; %s = sort method
       'RECENT_TITLE_MORE'         => '<font size=4>%s</font> topics %s', // %s = topics; %s = sort method
       'RECENT_TITLE_TODAY'      => 'από σήμερα',
       'RECENT_TITLE_YESTERDAY'   => ' από χθες',
       'RECENT_TITLE_LAST24'      => ' από τις τελευταίες 24 ώρες',
       'RECENT_TITLE_WEEK'         => ' από την τελευταία εβδομάδα',
       'RECENT_TITLE_LASTXDAYS'   => ' από τις τελευταίες  %s ημέρες', // %s = days
       'RECENT_NO_TOPICS'         => 'Δεν βρέθηκαν πρόσφατα θέματα.',
       'RECENT_WRONG_MODE'         => 'Έχετε επιλέξει λάθος μέθοδο.',
       'RECENT_CLICK_RETURN'      => 'Πατήστε %sεδώ%s για να επιστρέψετε στην σελίδα με τις πρόσφατες δημοσιεύσεις.',
       'TOTAL_RECENT_TOPICS'      => '%s πρόσφατα θέματα βρέθηκαν',
	// corrected/added since 0.2 
	'NO_IMPORTANT_NEWS'			=> 'Καμία ανακοίνωση',
	'GOOGLE_BACK_TO_ENGLISH'	=> 'Επιστροφή',
	'FORUM_STYLE'				=> 'Δ. Συζήτησης στυλ',
	'BACK_TO_TOP'			    => 'Κορυφή',
	'BACK_TO_BOTTOM'		    => 'Κάτω',
	
	// bbCode tags
   	'BBCODETAGS'				=> 'bbCode Ετικέτες',
   
	// change language
   	'BOARD_LANGUAGE'			=> 'Δ. Συζήτησης γλώσσας',
   	'VIEW_LANGUAGE'				=> 'Προβολή γλωσσών',
    'TOTAL_LANGUAGE'			=> 'Διαθέσιμες γλώσσες',
    'LANGUAGE_SELECT'          	=> 'Επιλογή γλώσσας',
	
    // portal i18n widgets/blocks
   'WIDG_EDIT_TEXT'         => 'Επεξεργασία',
   'WIDG_CLOSE_TEXT'         => 'Κλείσιμο',
   'WIDG_EXTENT_TEXT'         => 'Επέκταση',
   'WIDG_COLLAPSE_TEXT'      => 'Σύμπτυξη',
   'WIDG_CANCEL_TEXT'          => 'Αλλαγή',
   'WIDG_EDIT'               => 'Επεξεργασία μπλοκ',
   'WIDG_CLOSE'            => 'Κλείσιμο μπλοκ',
   'WIDG_REMOVE'            => 'Διαγραφή μπλοκ?',
   'WIDG_CANCEL'            => 'Ακύρωση επεξεργασίας',
   'WIDG_EXTENT'            => 'Επέκταση μπλοκ',
   'WIDG_COLLAPSE'            => 'Σύμπτυξη  μπλοκ', 
   
   // Highslide JS
   'HIGHSLIDE_LOADINGTEXT'      => 'Εκτελείται φόρτωση...',
   'HIGHSLIDE_LOADINGTITLE'   => 'Πατήστε για αλλαγή',
   'HIGHSLIDE_FOCUSTITLE'      => 'Πατήστε για να το φέρετε μπροστά',
   'HIGHSLIDE_FULLEXPANDTITLE'   => 'Ανάπτυξη σε ολόκληρο το μέγεθος',
   'HIGHSLIDE_FULLEXPANDTEXT'   => 'Ολόκληρο μέγεθος',
   'HIGHSLIDE_CREDITSTEXT'      => 'Δημιουργία από <i>Highslide JS</i>',
   'HIGHSLIDE_CREDITSTITLE'   => 'Πηγαίνετε στην ιστοσελίδα του Highslide JS',
   'HIGHSLIDE_PREVIOUSTEXT'   => 'Προηγούμενο',
   'HIGHSLIDE_PREVIOUSTITLE'   => 'Προηγούμενο (βέλος αριστερά)',
   'HIGHSLIDE_NEXTTEXT'      => 'Επόμενο',
   'HIGHSLIDE_NEXTTITLE'      => 'Επόμενο (βέλος δεξιά)',
   'HIGHSLIDE_MOVETITLE'      => 'Κίνηση',
   'HIGHSLIDE_MOVETEXT'      => 'Κίνηση',
   'HIGHSLIDE_CLOSETEXT'      => 'Κλείσιμο',
   'HIGHSLIDE_CLOSETITLE'      => 'Κλείσιμο (esc)',
   'HIGHSLIDE_RESIZETITLE'      => 'Αλλαγή μεγέθους',
   'HIGHSLIDE_PLAYTEXT'      => 'Αναπαραγωγή',
   'HIGHSLIDE_PLAYTITLE'      => 'Αναπαραγωγή slideshow (spacebar)',
   'HIGHSLIDE_PAUSETEXT'      => 'Παύση',
   'HIGHSLIDE_PAUSETITLE'      => 'Παύση slideshow (spacebar)',
   'HIGHSLIDE_NUMBER'         => 'Εικόνα %1 από %2',
   'HIGHSLIDE_RESTORETITLE'   => 'Πατήστε για να κλείσει η εικόνα, πατήστε και σύρετε για να μετακινηθείτε. Χρησιμοποιήστε τα βέλη για επόμενο προηγούμενο.',  	

	// 06-10-2009 new entries portal pages
	'TOTAL_PAGE_PAGES'		    => 'Σύνολο σελίδων',	
	'FRONTPAGE'                => 'Αρχική σελίδα',
	'BOOKMARKS'                => 'Διαχείριση αγαπημένων',
	'SUBSCRIPTION'             => 'Διαχείριση συνδρομών',
	'DRAFTS'                   => 'Διαχείριση προχείρων',
	'ATTACHMENTS'              => 'Διαχείριση συνημμένων',
	
	'UPROFILE'                 => 'Επεξεργασία προφίλ',
	'SIGNATURE'                => 'Επεξεργασία υπογραφής',
	'AVATAR'                   => 'Επεξεργασία υπογραφής',
	'ACCOUNT'                  => 'Επεξεργασία λογαριασμού',
	
	'GLOBALSETTINGS'           => 'Επεξεργασία γενικών ρυθμίσεων',
	'POSTINDEFAULT'            => 'Επεξεργασία δημοσίευσης προεπιλογή',
	'DISPLAYOPTIONS'           => 'Επεξεργασία ρυθμίσεων προβολής',
	
	'COMPOSEPMMESSAGESG'       => 'Σύνθεση ΠΜ μηνύματος',
	'MANAGEPMDRAFTS'           => 'Διαχείριση ΠΜ πρόχειρα',
	'INBOX'                    => 'Εισερχόμενα',
	'OUTBOX'                   => 'Εξερχόμενα',
	'SENDMESSAGEBOX'           => 'Απεσταλμένα',
	'UNREADMESSAGES'           => 'Μη αναγνωσμένα',
	'RULEFOLDERSETTING'        => 'Κανόνες &amp; Φάκελοι',
	
	'EDITMEMBERSHIP'           => 'Επεξεργασία σύνθεσης',
	'MANAGEGROUPS'             => 'Διαχείριση ομάδων',
	
	'MANAGEFRIENDS'            => 'Διαχείριση φίλων',
	'MANAGEFOES'               => 'Διαχείριση εχθρών',
	
	'PRIVATE_MESSAGES'     	   => 'Προσωπικά μηνύματα',
	'POST_TOPIC_INFO'     	   => 'Δημοσιεύσεις &amp; Θέματα',
	'GROUPS_INFO'  			   => 'Ομάδες μελών',
	'OVERVIEW_INFO' 		   => 'Επισκόπηση',
	'FRIENDS_FOES'			   => 'Φίλοι &amp; Εχθροί',
	'ADMIN'			   		   => 'Διαχείριση',
	'PROFILE_INFO'     	       => 'Ρυθμίσεις &amp; Προφίλ',
	'ACPANEL'     	       	   => 'ΠΕΔ',
	
   // Naviagtion pop-up menu entries      
   'LOGIN_PORTAL_INFO'          => 'Για να συνδεθείτε θα πρέπει να εγγραφείτε πρώτα. Πρέπει να γνωρίζετε ότι για να χρησιμοποιήσετε τις περισσότερες από τις λειτουργίες αυτής της ιστοσελίδας θα χρειαστεί να καταχωρίσετε ορισμένα στοιχεία  Ο διαχειριστής μπορεί να δώσει επίσης, πρόσθετα δικαιώματα στα εγγεγραμμένα μέλη. Παρακαλώ   βεβαιωθείτε ότι διαβάζετε τις ανακοινώσεις και τις σημειώσεις κατά την περιήγησή σας στην ιστοσελίδα.',
   'LOGIN_MORE_PORTAL_INFO'   => 'Περισσότερες πληροφορίες σύνδεσης...',
   'LOGOUT_PORTAL_INFO'      => 'Να επισκέπτεστε την ιστοσελίδα όσο πιο συχνά μπορείτε, διότι ίσως υπάρχουν αλλαγές και προσθήκες σε αυτό το διάστημα. Ευχαριστούμε για την επίσκεψή σας ' . $config['sitename'] . ', και ελπίζουμε να προσθέσετε την ιστοσελίδα μας στα αγαπημένα!',
   'LOGOUT_MORE_PORTAL_INFO'   => 'Περισσότερες πληροφορίες αποσύνδεσης...',
   // Reset closed/deleted blocks to default state
   'PORTAL_RESET_BLOCKS'      => 'Επαναφορά μπλοκ',
   'PORTAL_WIDGET_STATES'      => 'Πρόσθετα',
   'PORTAL_OPEN_COLUMNS'      => 'Δείτε όλες τις στήλες',
   'PORTAL_CLOSE_COLUMNS'      => 'Απόκρυψη όλων των στηλών',
   'PORTAL_OPEN_MENUS'          => 'Εμφάνιση πρόσθετων μπλοκ',
   'PORTAL_CLOSE_MENUS'      => 'Απόκρυψη πρόσθετων μπλοκ',
	// Viewtopic user information dropdown		
	'USERS_INFORMATION'			=> 'Μέλους πληροφορίες',

	// Paypal Currencies
	'PAYPAL_CURRENCY_GBP'		=> 'Pounds Sterling (GBP)',
	'PAYPAL_CURRENCY_USD'		=> 'U.S. Dollars (USD)',
	'PAYPAL_CURRENCY_EUR'		=> 'Euros (EUR)',
	'PAYPAL_CURRENCY_AUD'		=> 'Australian Dollars (AUD)',
	'PAYPAL_CURRENCY_CAD'		=> 'Canadian Dollars (CAD)',
	'PAYPAL_CURRENCY_CZK'		=> 'Czech Koruna (CZK)',
	'PAYPAL_CURRENCY_DKK'		=> 'Danish Kroner (DKK)',
	'PAYPAL_CURRENCY_HKD'		=> 'Hong Kong Dollars (HKD)',
	'PAYPAL_CURRENCY_HUF'		=> 'Hungarian Forint (HUF)',
	'PAYPAL_CURRENCY_NZD'		=> 'New Zealand Dollars (NZD)',
	'PAYPAL_CURRENCY_NOK'		=> 'Norwegian Kroner (NOK)',
	'PAYPAL_CURRENCY_PLN'		=> 'Polish Zlotych (PLN)',
	'PAYPAL_CURRENCY_SGD'		=> 'Singapore Dollars (SGD)',
	'PAYPAL_CURRENCY_SEK'		=> 'Swedish Kronor (SEK)',
	'PAYPAL_CURRENCY_CHF'		=> 'Swiss Francs (CHF)',
	'PAYPAL_CURRENCY_JPY'		=> 'Yen (JPY)',
 	// bbCodes page		
    'NO_BBCODES'       			=> 'Κανένα bbCodes δεν είναι εγκατεστημένο σε αυτή την Δ. Συζήτηση.',
    'BBCODES_TITLE'    			=> 'bbCodes Λίστα',
    'BBCODE_ID'       			=> '#',
    'BBCODE_DISPLAY'       		=> 'Ενεργό',
    'BBCODE_CODE'     			=> 'bbCode ετικέτα',
    'BBCODE_TPL'     			=> 'bbCode html',
    'BBCODE_HELP'     			=> 'bbCode γραμμή βοηθείας',
    'BBCODE_ICON'     			=> 'Εικονίδιο',
	'BBCODE_COUNT'	  			=> '1 bbCode εγκατεστημένο',
	'BBCODE_COUNT'   			=> '%s bbCodes εγκατεστημένα',
	/**
	* DO NOT REMOVE or CHANGE (text translation is allowed)!
	*/
	'PORTAL_COPY' 			=> '&copy; 2007, 2009 Portal XL Group, the original insane crazy Portal for phpBB3',
	'PORTAL_VERSION' 		=> 'Portal XL 5.0 ~ ',
	));

?>