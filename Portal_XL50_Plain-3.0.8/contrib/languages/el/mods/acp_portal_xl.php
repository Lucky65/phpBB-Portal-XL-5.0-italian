<?php
/** 
*
* @name acp_portal_xl.php [Greek - El]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
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

$lang = array_merge($lang, array(

 'ACP_PORTAL_INFO'     			=> 'Portal - Διαχείριση',
 'ACP_PORTAL_INFO_EXPLAIN'   			=> 'Ευχαριστούμε που επιλέξατε το Portal XL 5.0 portal. Οι ρυθμίσεις του Portal στο Πίνακα διαχείρισης έγιναν από τον DaMysterious 2007. Σε αυτό μπορείτε να ρυθμίζετε το portal στην σελίδα σας. Οι σελίδες εδώ θα σας δώσουν μια γενική εικόνα όλων των ρυθμίσεων του portal. Οι δεσμοί στην αριστερή πλευρά σας επιτρέπουν να ρυθμίσετε κάθε ένα στοιχείο του portal.<br />
    <div class="successbox">
	<h3>Author Notes</h3>
	<p>Creating, maintaining and updating this MOD required/requires a lot of time and effort.<br />
	   If you appreciate PortalXL and feel the desire to express your thanks through a donation this would be greatly appreciated.<br /> 
	   PortalXL\'s Paypal ID is <strong>portalxl@xs4all.nl</strong>, or visit our special PortalXL donation page <a href="http://www.portalxl.nl/PORTAL_XL_Paypal_Donation.html" target="_blank">here</a>.<br /><br />
	   The suggested minimum donation amount for this MOD is Euro 25.00 (any higher amount will help more).<br />
	   If you are a registered user of the portalxl.nl forum, please leave your forum name/alias as comment so your level can be raised up in exchange.</p>
	</div><p>',

	// announcements

 'ACP_PORTAL_ANNOUNCE_INFO'   		=> 'Portal - Ανακοινώσεις',
 'ACP_PORTAL_ANNOUNCE_SETTINGS'    => 'Ρυθμίσεις ανακοινώσεων',
 'ACP_PORTAL_ANNOUNCE_SETTINGS_EXPLAIN'  => 'Εδώ μπορείτε να αλλάζετε τις πληροφορίες των ανακοινώσεων και μερικές ακόμα επιλογές.',
 'PORTAL_ANNOUNCMENTS'      	=> 'Εμφάνιση block ανακοινώσεων',
 'PORTAL_ANNOUNCMENTS_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_NUMBER_OF_ANNOUNCMENTS'    	=> 'Πλήθος ανακοινώσεων στο Portal',
 'PORTAL_NUMBER_OF_ANNOUNCMENTS_EXPLAIN'  => 'Βάλτε 0 για απεριόριστες',
 'PORTAL_ANNOUNCMENTS_DAY'     	=> 'Μέρες προβολής των ανακοινώσεων',
 'PORTAL_ANNOUNCMENTS_DAY_EXPLAIN'   	=> 'Αυτή η τιμή μετρά τους χαρακτήρες που θα επιτραπούν για να εμφανιστούν. Βάλτε 0 για απεριόριστο',
 'PORTAL_ANNOUNCMENTS_LENGTH'    	=> 'Μέγιστο πλάτος ανακοινώσεων',
 'PORTAL_ANNOUNCMENTS_LENGTH_EXPLAIN'  	=> 'Βάλτε 0 για απεριόριστο',
 'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM'   	=> 'Ταυτότητα δ. συζήτησης των γενικών ανακοινώσεων',
 'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM_EXPLAIN' => 'Η δ. συζήτηση από την οποία θα προέρχονται τα άρθρα (ΠΡΕΠΕΙ να καθορίστε μια ταυτότητα φόρουμ),  χωρίστε τες με κόμμα, π.χ. 1,2,5. Μην αφήσετε αυτό το πεδίο κενό, 0 είναι προαπαιτούμενο',

	// news
 'ACP_PORTAL_NEWS_INFO'     		=> 'Portal - Νέα',
 'ACP_PORTAL_NEWS_SETTINGS'     	=> 'Ρυθμίσεις νέων',
 'ACP_PORTAL_NEWS_SETTINGS_EXPLAIN'  	=> 'Εδώ μπορείτε να αλλάζετε τις πληροφορίες των νέων και μερικές ακόμα επιλογές.',
 'PORTAL_NEWS'        	=> 'Εμφάνιση block νέων',
 'PORTAL_NEWS_EXPLAIN'      => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_SHOW_ALL_NEWS'      	=> 'Εμφάνιση όλων των δημοσιεύσεων σε αυτήν την δημ. συζήτηση',
 'PORTAL_SHOW_ALL_NEWS_EXPLAIN'    	=> 'Να εμπεριέχονται οι σημειώσεις, οι ανακοινώσεις και οι Γενικές ανακοινώσεις;',
 'PORTAL_NUMBER_OF_NEWS'     	=> 'Πλήθος άρθρων Νέων στο Portal',
 'PORTAL_NUMBER_OF_NEWS_EXPLAIN'   	=> 'Βάλτε 0 για απεριόριστα',
 'PORTAL_NEWS_LENGTH'      	=> 'Μέγιστο πλάτος άρθρου νέων.',
 'PORTAL_NEWS_LENGTH_EXPLAIN'    	=> 'Αυτή η τιμή μετρά τους χαρακτήρες που θα επιτραπούν για να εμφανιστούν. Βάλτε 0 για απεριόριστο',
 'PORTAL_NEWS_FORUM'      	=> 'Ταυτότητα δ. συζήτησης των νέων',
 'PORTAL_NEWS_FORUM_EXPLAIN'    		=> 'Η δ. συζήτηση από την οποία θα προέρχονται τα άρθρα (ΠΡΕΠΕΙ να καθορίστε μια ταυτότητα φόρουμ),  χωρίστε τες με κόμμα, π.χ. 1,2,5. Μην αφήσετε αυτό το πεδίο κενό, 0 είναι προαπαιτούμενο',

	// recent topics
 'ACP_PORTAL_RECENT_INFO'     	=> 'Portal - Πρόσφατα θέματα',	
 'ACP_PORTAL_RECENT_SETTINGS'     => 'Ρυθμίσεις προσφάτων θεμάτων',	
 'ACP_PORTAL_RECENT_SETTINGS_EXPLAIN'  	=> 'Εδώ μπορείτε να αλλάζετε τις πληροφορίες των προσφάτων θεμάτων και μερικές ακόμα επιλογές.',
 'PORTAL_RECENT'     			=> 'Εμφάνιση block πρόσφατων θεμάτων',
 'PORTAL_RECENT_EXPLAIN'     	=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Αυτά τα τρία tabs στο πάνω κεντρικό block περιλαμβάνουν τις Ανακοινώσεις, τα Κορυφαία Θέματα, τα Θέματα και τα Ελεύθερα Downloads. Επιλέγοντας "<strong>Όχι</strong>" μπορείτε να απενεργοποιήσετε όλο το block.',
 'PORTAL_MAX_TOPIC'       	=> 'Όριο προσφάτων ανακοινώσεων/κορυφαίων θεμάτων',
 'PORTAL_MAX_TOPIC_EXPLAIN'     => 'Βάλτε 0 για απεριόριστο',
 'PORTAL_RECENT_TITLE_LIMIT'     	=> 'Όριο χαρακτήρων για τις επικεφαλίδες των πρόσφατων θεμάτων',
 'PORTAL_RECENT_TITLE_LIMIT_EXPLAIN'   => 'Βάλτε 0 για απεριόριστο',
 
	// paypal
 'ACP_PORTAL_PAYPAL_INFO'     	=> 'Portal - Paypal',	
 'ACP_PORTAL_PAYPAL_SETTINGS'     => 'Ρυθμίσεις Paypal',
 'ACP_PORTAL_PAYPAL_SETTINGS_EXPLAIN'  	=> 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες για τον λογαριασμό σας στο Paypal.',
 'PORTAL_PAY_C_BLOCK'      	=> 'Εμφάνιση κεντρικού block του PayPal',
 'PORTAL_PAY_C_BLOCK_EXPLAIN'     => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_PAY_S_BLOCK'      	=> 'Εμφάνιση μικρού block του PayPal',
 'PORTAL_PAY_S_BLOCK_EXPLAIN'     => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_PAY_ACC'       	=> 'Λογαριασμός Paypal που θα χρησιμοποιηθεί',
 'PORTAL_PAY_ACC_EXPLAIN'      => 'Εισάγετε την διευθ. αλληλογραφίας που χρησιμοποιείτε στο Paypal. π.χ. xxx@xxx.com',

	// last member
 'ACP_PORTAL_MEMBERS_INFO'    		=> 'Portal - Τελευταία μέλη',
 'ACP_PORTAL_MEMBERS_SETTINGS'    => 'Ρυθμίσεις τελευταίων μελών',
 'ACP_PORTAL_MEMBERS_SETTINGS_EXPLAIN'  	=> 'Εδώ μπορείτε να αλλάζετε τις πληροφορίες των τελευταίων μελών και μερικές ακόμα επιλογές.',
 'PORTAL_LATEST_MEMBERS'     	=> 'Εμφάνιση block τελευταίων μελών',
 'PORTAL_LATEST_MEMBERS_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_MAX_LAST_MEMBER'     	=> 'Πλήθος εμφανιζόμενων τελευταίων μελών',
 'PORTAL_MAX_LAST_MEMBER_EXPLAIN'    => 'Βάλτε 0 για απεριόριστο',
 
	// bots
 'ACP_PORTAL_BOTS_INFO'     	=> 'Portal - Επισκέψεις Bots',
 'ACP_PORTAL_BOTS_SETTINGS'     => 'Ρυθμίσεις επισκέψεων Bots',
 'ACP_PORTAL_BOTS_SETTINGS_EXPLAIN'  	=> 'Εδώ μπορείτε να αλλάζετε τις πληροφορίες των επισκέψεων Bots και μερικές ακόμα επιλογές.',
 'PORTAL_LOAD_LAST_VISITED_BOTS'    	=> 'Εμφάνιση block επισκέψεων bots',
 'PORTAL_LOAD_LAST_VISITED_BOTS_EXPLAIN'  => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_LAST_VISITED_BOTS_NUMBER'   	=> 'Πόσα bots να εμφανίζονται',
 'PORTAL_LAST_VISITED_BOTS_NUMBER_EXPLAIN' => 'Βάλτε 0 για απεριόριστο',
 
	// polls 
 'ACP_PORTAL_POLLS_INFO'     	=> 'Portal - Ψηφοφορίες',	
 'ACP_PORTAL_POLLS_SETTINGS'     => 'Ρυθμίσεις ψηφοφοριών',
 'ACP_PORTAL_POLLS_SETTINGS_EXPLAIN'  	=> 'Εδώ μπορείτε να αλλάζετε τις πληροφορίες των ψηφοφοριών και μερικές ακόμα επιλογές.',
 'PORTAL_POLL_TOPIC'       	=> 'Εμφάνιση block ψηφοφοριών',
 'PORTAL_POLL_TOPIC_EXPLAIN'     => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_POLL_TOPIC_ID'      	=> 'Εμφάνιση ψηφοφορίας από το θέμα (βάλτε την ταυτότητα του)',
 'PORTAL_POLL_TOPIC_ID_EXPLAIN'    	=> 'Η Ταυτότητα θέματος (αριθμός θέματος) που περιέχει την ψηφοφορία που θέλετε να εμφανίσετε, βάλτε το 0 (μην αφήνετε το πεδίο κενό) για καμία.',
 'PORTAL_POLL_FORUM_ID'      	=> 'Εμφάνιση ψηφοφορίας από την δ. συζήτηση (βάλτε την ταυτότητα της)',
 'PORTAL_POLL_FORUM_ID_EXPLAIN'    	=> 'Η Ταυτότητα της δ. συζήτησης (αριθμός δημ. συζήτησης) που περιέχει την ψηφοφορία που θέλετε να εμφανίσετε, βάλτε το 0 (μην αφήνετε το πεδίο κενό) για καμία.',
 'PORTAL_POLL_POST_ID'      	=> 'Εμφάνιση ψηφοφορίας από την δημοσίευση (βάλτε την ταυτότητα της)',
 'PORTAL_POLL_POST_ID_EXPLAIN'    	=> 'Η Ταυτότητα της δημοσίευσης (αριθμός δημοσίευσης) που περιέχει την ψηφοφορία που θέλετε να εμφανίσετε, βάλτε το 0 (μην αφήνετε το πεδίο κενό) για καμία.',

	// most poster
 'ACP_PORTAL_MOST_POSTER_INFO'    => 'Portal - Κορυφαίοι συγγραφείς',
 'ACP_PORTAL_MOST_POSTER_SETTINGS'   => 'Ρυθμίσεις κορυφαίων συγγραφών',
 'ACP_PORTAL_MOST_POSTER_SETTINGS_EXPLAIN' => 'Εδώ μπορείτε να αλλάζετε τις πληροφορίες των κορυφαίων συγγραφών και μερικές ακόμα επιλογές.',
 'PORTAL_TOP_POSTERS'     		=> 'Εμφάνιση block Κορυφαίων συγγραφών',
 'PORTAL_TOP_POSTERS_EXPLAIN'     => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_MAX_MOST_POSTER'     	=> 'Πόσοι κορυφαίοι συγγραφείς να εμφανίζονται',
 'PORTAL_MAX_MOST_POSTER_EXPLAIN'    => 'Βάλτε 0 για απεριόριστο',

	// left and right column width 
 'ACP_PORTAL_COLLUMN_WIDTH_INFO'    => 'Portal - Πλάτος στηλών',
 'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'     => 'Ρυθμίσεις πλάτους αριστερής και δεξιάς στήλης',	
 'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN' => 'Εδώ μπορείτε να αλλάζετε τις ρυθμίσεις πλάτους αριστερής και δεξιάς στήλης.',
 'PORTAL_LEFT_COLLUMN_WIDTH'     	=> 'Πλάτος αριστερής στήλης',
 'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'   => 'Το πλάτος της αριστερής στήλης σε pixel, προτείνεται 180',
 'PORTAL_RIGHT_COLLUMN_WIDTH'     => 'Πλάτος δεξιάς στήλης',
 'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'   => 'Το πλάτος της δεξιάς στήλης σε pixel, προτείνεται 180',
 
	// attachments 
 'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO'   		=> 'Portal - Συνημμένα',
 'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'  		=> 'Ρυθμίσεις συνημμένων',
 'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXPLAIN'  => 'Εδώ μπορείτε να αλλάζετε τις πληροφορίες των συνημμένων και μερικές ακόμα επιλογές.',
 'PORTAL_ATTACHMENTS'     				=> 'Εμφάνιση block συνημμένων',
 'PORTAL_ATTACHMENTS_EXPLAIN'     		=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_ATTACHMENTS_NUMBER'     			=> 'Όριο εμφανιζόμενων συνημμένων',
 'PORTAL_ATTACHMENTS_NUMBER_EXPLAIN'     	=> 'Βάλτε 0 για απεριόριστο',

	// general 
 'ACP_PORTAL_SWITCHES_INFO'     	=> 'Portal - Επιλογές Block',
 'ACP_PORTAL_SWITCHES_SETTINGS'    => 'Γενικές ρυθμίσεις block',
 'ACP_PORTAL_SWITCHES_SETTINGS_EXPLAIN'  => 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες που θα εμφανίζονται μαζί με άλλες επιλογές.',
 'PORTAL_GOOGLE_S_BLOCK'     	=> 'Μικρό block διαφημίσεων',
 'PORTAL_GOOGLE_S_BLOCK_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Ορισμένο από πριν block μεγέθους 120x240 Google και Partner block, με όνομα αρχείου <strong>google_adds.html</strong>.',
 'PORTAL_GOOGLE_C_BLOCK'     	=> 'Κεντρικό block διαφημίσεων',
 'PORTAL_GOOGLE_C_BLOCK_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Ορισμένο από πριν block μεγέθους 234x60 Google και Partner block, με όνομα αρχείου <strong>google_adds_portal.html</strong>.',
 'PORTAL_FORUM_BLOCK'     		=> 'Κεντρικό block Δ. Συζήτησης',
 'PORTAL_FORUM_BLOCK_EXPLAIN'     => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Κεντρικό block Δημ. Συζήτησης στην Αρχική Σελίδα βασισμένο στην σελίδα του phpBB.',
 'PORTAL_ADVANCED_STAT'     		=> 'Block προηγμένων στατιστικών',
 'PORTAL_ADVANCED_STAT_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_LEADERS'     			=> 'Block Συντονιστών/Ομάδων',
 'PORTAL_LEADERS_EXPLAIN'     	=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_CLOCK'     				=> 'Block ρολογιού',
 'PORTAL_CLOCK_EXPLAIN'     		=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_LINK_US'     			=> 'Σύνδεση με εμάς block',
 'PORTAL_LINK_US_EXPLAIN'     	=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Πληροφορίες για να επιτρέπετε σε άλλους να βάζουν έναν σύνδεσμο της σελίδας σας σε αυτούς αντιγράφοντας τον παρεχόμενο κώδικα html που περιέχει και ένα banner διαστάσεων 88x31.',
 'PORTAL_LINKS'     				=> 'Block συνδέσμων',
 'PORTAL_LINKS_EXPLAIN'     		=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Η προσθήκη νέου ή η αλλαγή κάποιου ήδη υπάρχων συνδέσμου πρέπει να γίνει χειροκίνητα για αυτό το block, το όνομα αρχείου είναι το <strong>links.html</strong>.',
 'PORTAL_WELCOME'     			=> 'Κεντρικό block καλωσορίσματος',
 'PORTAL_WELCOME_EXPLAIN'     	=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_RANKS'     			 => 'Κεντρικό block βαθμών',
 'PORTAL_RANKS_EXPLAIN'     		=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Αυτά τα τρία tabs στο κάτω μέρος του κεντρικού block περιλαμβάνουν τα: Wordgraph, Βαθμοί, Συνημμένα και Κεντρικό block Δημ. Συζήτησης. Επιλέγοντας "<strong>Όχι</strong>" μπορείτε να απενεργοποιήσετε όλο το block.',
 'PORTAL_MAX_ONLINE_FRIENDS'     	=> 'Όριο εμφανιζομένων ενεργών φίλων',
 'PORTAL_MAX_ONLINE_FRIENDS_EXPLAIN'   => 'Εδώ ορίζετε πόσοι φίλοι θα εμφανίζονται σαν ενεργοί στο block του portal (η βασική τιμή είναι 8).',
 'PORTAL_MAINMENU_NORMAL'     	=> 'Πλοηγός νορμάλ',
 'PORTAL_MAINMENU_NORMAL_EXPLAIN'  		=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Αυτό το μενού παίρνει τα δεδομένα του από το <strong>Portal - Διαχείριση Μενού</strong> για να εμφανίσει σε αυτό το block.',
 'PORTAL_MAINMENU_DHTML'     	=> 'DHTML Πλοηγός',
 'PORTAL_MAINMENU_DHTML_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Για να προσθέσετε νέα ή να αλλάξετε κάποια επιλογή για αυτό το block η επεξεργασία του αρχείου <strong>main_menu_dhtml.html</strong> ίσως είναι απαραίτητη.',

 // wordgraph
 'ACP_PORTAL_WORDGRAPH_INFO'					=> 'Portal - Wordgraph',
 'ACP_PORTAL_WORDGRAPH_SETTINGS'    => 'Ρυθμίσεις Wordgraph',	
 'ACP_PORTAL_WORDGRAPH_SETTINGS_EXPLAIN'  => 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες για το Wordgraph μαζί με άλλες επιλογές.',
 'PORTAL_WORDGRAPH'     			=> 'Εμφάνιση block wordgraph',
 'PORTAL_WORDGRAPH_EXPLAIN'     	=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_WORD_GRAPH_MAX_WORDS'    => 'Πόσες λέξεις να εμφανίζονται',
 'PORTAL_WORD_GRAPH_MAX_WORDS_EXPLAIN'  => 'Βάλτε 0 για απεριόριστες',
 'PORTAL_WORD_GRAPH_WORD_COUNTS'    => 'Να περιλαμβάνεται το πλήθος των εμφανίσεων',
 'PORTAL_WORD_GRAPH_WORD_COUNTS_EXPLAIN'  => 'Να εμφανίζεται το πλήθος των εμφανίσεων μιας λέξης π.χ. (25) Ναι/Όχι;',
 'PORTAL_WORD_GRAPH_RATIO'    		=> 'Λόγος που χρησιμοποιείται για την διάσταση του μεγέθους λέξης',
 'PORTAL_WORD_GRAPH_RATIO_EXPLAIN'   => 'Αλλαγή του μεγέθους (μεγαλύτερη/μικρότερη) των λέξεων (η βασική τιμή είναι 4). Αυτή η τιμή είναι σχετική με το πλήθος των εμφανιζομένων λέξεων. Όσο περισσότερες λέξεις τόσο μεγαλύτερη τιμή μπορείτε να διαλέξετε για να εμφανίζονται μεγαλύτερες.',

/* not in use at moment
 'PORTAL_WORD_GRAPH_MAX_SIZE'    	=> 'Μέγιστο μέγεθος γραμματοσειράς σε εικονοστοιχεία ',
 'PORTAL_WORD_GRAPH_MAX_SIZE_EXPLAIN'   => 'Μέγιστη τιμή του μεγέθους γραμματοσειράς για τις λέξεις μέσα στο wordgraph.',
 'PORTAL_WORD_GRAPH_MIN_SIZE'    	=> 'Ελάχιστο μέγεθος γραμματοσειράς σε εικονοστοιχεία',
 'PORTAL_WORD_GRAPH_MIN_SIZE_EXPLAIN'   => 'Ελάχιστη τιμή του μεγέθους γραμματοσειράς για τις λέξεις μέσα στο wordgraph .',
*/

	// random 
 'ACP_PORTAL_RANDOM_INFO'     	=> 'Portal - Τυχαίο',
 'ACP_PORTAL_RANDOM_SETTINGS'    	=> 'Ρυθμίσεις τυχαίου banners/blocks',
 'ACP_PORTAL_RANDOM_SETTINGS_EXPLAIN'  	=> 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες για τα τυχαία banners/blocks μαζί με άλλες επιλογές.',
 'PORTAL_RAN_HO_BLOCK'     		=> 'Κεντρικό block τυχαίου banner (μέγιστο μέγεθος 386x60 pix)',
 'PORTAL_RAN_HO_BLOCK_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_RAN_VE_BLOCK'     		=> 'Κατακόρυφο block τυχαίου banner (μέγιστο μέγεθος 130x600 pix)',
 'PORTAL_RAN_VE_BLOCK_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_RAN_LI_BLOCK'     		=> 'Block τυχαίων συνδέσμων banner (μέγιστο μέγεθος 88x31 pix)',
 'PORTAL_RAN_LI_BLOCK_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι; <br /> Αυτό το μενού παίρνει τα δεδομένα του από το <strong>Διαχείριση συνεργατών</strong> για να τα εμφανίσει σε αυτό το block.',
 'PORTAL_RANDOM_MEMBER'     		=> 'Block τυχαίου μέλους',
 'PORTAL_RANDOM_MEMBER_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',

	// welcome message
 'ACP_PORTAL_WELCOME_INFO'     	=> 'Portal - Καλώς ήρθατε',
 'ACP_PORTAL_WELCOME_SETTINGS'    	=> 'Ρυθμίσεις καλωσορίσματος',
 'ACP_PORTAL_WELCOME_TXT_SETTINGS'   	=> 'Ρυθμίσεις κειμένου καλωσορίσματος',
 'ACP_PORTAL_WELCOME_SETTINGS_EXPLAIN'  	=> 'Εδώ μπορείτε να αλλάξετε το μήνυμα καλωσορίσματος μαζί με άλλες επιλογές.',
 'PORTAL_WELCOME_INTRO'     	 => 'Μήνυμα καλωσορίσματος για επισκέπτες',
 'PORTAL_WELCOME_INTRO_EXPLAIN'    => 'Αλλάξτε το μήνυμα καλωσορίσματος για τους επισκέπτες (κείμενο μόνο). 2000 χαρακτήρες μέγιστο (επιτρέπετε κώδικας html)! Το κείμενο που υπερβαίνει αυτό το όριο θα διαγράφετε αυτόματα.',
 'PORTAL_WELCOME_BACK'      => 'Μήνυμα καλωσορίσματος για μέλη',
 'PORTAL_WELCOME_BACK_EXPLAIN'    => 'Αλλάξτε το μήνυμα καλωσορίσματος για τα μέλη (κείμενο μόνο). 2000 χαρακτήρες μέγιστο (επιτρέπετε κώδικας html)! Το κείμενο που υπερβαίνει αυτό το όριο θα διαγράφετε αυτόματα.',

	// chatbox
 'ACP_PORTAL_SHOUTBOX_INFO'					=> 'Portal - Παράθυρο Ομιλίας',
 'ACP_PORTAL_SHOUTBOX_SETTINGS'				=> 'Ρυθμίσεις Παράθυρου Ομιλίας',
 'ACP_PORTAL_SHOUTBOX_SETTINGS_HC'			=> 'Ρυθμίσεις ύψους και χρώματος του παραθύρου ομιλίας στο block του portal',
 'ACP_PORTAL_SHOUTBOX_SETTINGS_HCB'			=> 'Ρυθμίσεις ύψους και χρώματος του παραθύρου ομιλίας για το μεγάλο block',
 'ACP_PORTAL_SHOUTBOX_SETTINGS_EXPLAIN'		=> 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες για το παράθυρο ομιλίας και άλλες επιλογές. Το κείμενο θα περικόπτετε αν υπερβαίνει τους 600 χαρακτήρες εξ ορισμού.',
 'PORTAL_SHOUTBOX'     			=> 'Εμφάνιση block παραθύρου ομιλίας',
 'PORTAL_SHOUTBOX_EXPLAIN'     	=> 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_SHOUTBOX_NUMBER'     	=> 'Πόσα μηνύματα να εμφανίζονται',
 'PORTAL_SHOUTBOX_NUMBER_EXPLAIN'    => 'Βάλτε 0 για απεριόριστες, οποιαδήποτε άλλη τιμή θα εμφανίσει τις τελευταίες χ απαντήσεις στο portal και την σελίδα Ομιλίας',
 'PORTAL_SHOUTBOX_SESSION_TIME'    => 'Επιτρεπτός χρόνος σύνδεσης',
 'PORTAL_SHOUTBOX_SESSION_TIME_EXPLAIN'  => 'Ορίστε μια τιμή μεταξύ 0 και 999 δευτερολέπτων μετά το πέρας των οποίων η σύνδεση θα κλείνει, η βασική τιμή είναι 300 δευτερόλεπτα',
 'PORTAL_SHOUTBOX_DEFAULT_DELAY'    => 'Χρόνος ενημέρωσης',
 'PORTAL_SHOUTBOX_DEFAULT_DELAY_EXPLAIN'  => 'Ορίστε μια τιμή μεταξύ 0 και 999 δευτερολέπτων μετά το πέρας των οποίων το παράθυρο ομιλίας θα ενημερώνετε αυτόματα, η βασική τιμή είναι 15 δευτερόλεπτα',

	// weather
 'ACP_PORTAL_WEATHER_INFO'				 => 'Portal - Καιρός',
 'ACP_PORTAL_WEATHER_SETTINGS'			 => 'Ρυθμίσεις καιρού',
 'ACP_PORTAL_WEATHER_SETTINGS_GER'			=> 'Ρυθμίσεις καιρού από την γερμανική σελίδα wetter.com',
 'ACP_PORTAL_WEATHER_SETTINGS_ALT'			=> 'Ρυθμίσεις καιρού για άλλες σελίδες καιρού',
 'ACP_PORTAL_WEATHER_SETTINGS_EXPLAIN'	 => 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες για τον καιρό καθώς και άλλες μεταβλητές. Η βασική σελίδα είναι η γερμανική wetter.com. Μπορείτε να βάλετε οποιαδήποτε σελίδα καιρού θέλετε αλλάζοντας τον δεσμό στο styles/prosilver/template/portal/block/weather.html, ή συμπληρώνοντας τα επιπλέον πεδία παρακάτω. Μπορείτε να βάλετε έως τρεις συνδέσμους για άλλες σελίδες καιρού.',
 'PORTAL_WEATHER'     		 => 'Εμφάνιση block καιρού',
 'PORTAL_WEATHER_EXPLAIN'      => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_WEATHER_GER'     		=> 'Εμφάνιση block καιρού για την γερμανική σελίδα wetter.com',
 'PORTAL_WEATHER_GER_EXPLAIN'     => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',
 'PORTAL_WEATHER_ZIPCODE'     	=> 'Εισάγετε το ΤΚ σας',
 'PORTAL_WEATHER_ZIPCODE_EXPLAIN'    => 'Εδώ βάζετε το τοπικό σας ταχ. κώδικα για να προβάλετε την καιρό της περιοχής σας από την γερμανική σελίδα wetter.com',
 'PORTAL_WEATHER_ALTERNATE_URL'    	=> 'Ο εναλλακτικός σας δεσμός καιρού',
 'PORTAL_WEATHER_ALTERNATE_URL_EXPLAIN'  => 'Εδώ βάλτε τον ακριβή δεσμό για τον καιρό της περιοχής σας. Αφήστε το κενό για να μην εμφανιστεί τίποτα',
 'PORTAL_WEATHER_ALTERNATE_URL1'    => 'Ο εναλλακτικός σας δεσμός καιρού',
 'PORTAL_WEATHER_ALTERNATE_URL1_EXPLAIN'  => 'Εδώ βάλτε τον ακριβή δεσμό για τον καιρό της περιοχής σας. Αφήστε το κενό για να μην εμφανιστεί τίποτα',
 'PORTAL_WEATHER_ALTERNATE_URL2'    => 'Ο εναλλακτικός σας δεσμός καιρού',
 'PORTAL_WEATHER_ALTERNATE_URL2_EXPLAIN'  => 'Εδώ βάλτε τον ακριβή δεσμό για τον καιρό της περιοχής σας. Αφήστε το κενό για να μην εμφανιστεί τίποτα',
 
	// syndication
 'ACP_PORTAL_SYNDICATE_INFO'				 => 'Portal - RSS / RDF Δημοσιεύσεις',
 'ACP_PORTAL_SYNDICATE_INFO_SETTINGS'			=> 'Αλλάξτε τις ρυθμίσεις RSS δημοσιεύσεων',
 'ACP_PORTAL_SYNDICATE_INFO_SETTINGS_EXPLAIN'	=> 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες σας για τις RSS δημοσιεύσεις σας μαζί με άλλες επιλογές.',
 'PORTAL_SYNDICATE'     		 => 'Εμφάνιση block RSS δημοσιεύσεων',
 'PORTAL_SYNDICATE_EXPLAIN'     => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',

	// Portal Index
 'ACP_PORTAL_INDEX_INFO'				  => 'Portal - Ευρετήριο',
 'ACP_PORTAL_INDEX_INFO_LAYOUT'	 		=> 'Εμφάνιση των blocks στο ευρετήριο κοινότητας/δημ. συζήτησης',
 'ACP_PORTAL_INDEX_INFO_LAYOUT_EXPLAIN'		=> 'Εμφάνιση αυτής της σελίδας Ναι/Όχι;',
 'ACP_PORTAL_INDEX_INFO_SETTINGS'			 => 'Αλλαγή ρυθμίσεων των blocks κοινότητας/δημ. συζήτησης',
 'ACP_PORTAL_INDEX_INFO_COLUMN_SETTINGS'	 => 'Αλλαγή ρυθμίσεων της στήλης κοινότητας/δημ. συζήτησης ',
 'ACP_PORTAL_INDEX_INFO_SETTINGS_EXPLAIN'	 => 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες για την περιήγηση των ευρετηρίων κοινότητας/δημ. συζήτησης, τα ευρετήρια αυτά έχουν συγχωνευτεί εδώ. Αλλάζοντας τις ρυθμίσεις εδώ έχει σαν αποτέλεσμα την αλλαγή στην διάταξη της κοινότητας/δημ. συζήτησης.',
 'PORTAL_INDEX_LEFT'     		=> 'Εμφάνιση μενού πλοήγησης στα αριστερά',
 'PORTAL_INDEX_LEFT_EXPLAIN'     => 'Εμφάνιση του μενού πλοήγησης στα αριστερά Ναι/Όχι;',
 'PORTAL_INDEX_LEFT_COLLUMN_WIDTH'   => 'Πλάτος αριστερής στήλης',
 'PORTAL_INDEX_LEFT_COLLUMN_WIDTH_EXPLAIN' => 'Εδώ αλλάζετε το πλάτος της αριστερής στήλης σε pixel, προτεινόμενη τιμή το 180',
 'PORTAL_INDEX_RIGHT'     		=> 'Εμφάνιση μενού πλοήγησης στα δεξιά',
 'PORTAL_INDEX_RIGHT_EXPLAIN'     => 'Εμφάνιση του μενού πλοήγησης στα δεξιά Ναι/Όχι;',
 'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH'   => 'Πλάτος δεξιάς στήλης',
 'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH_EXPLAIN' => 'Εδώ αλλάζετε το πλάτος της δεξιάς στήλης σε εικονοστοιχεία, προτεινόμενη τιμή το 180',

	// change style
 'ACP_PORTAL_BOARD_STYLE_INFO'				=> 'Αλλαγή στυλ σελίδας',
 'ACP_PORTAL_BOARD_STYLE_SETTINGS'			=> 'Ρυθμίσεις αλλαγής στυλ σελίδας',
 'ACP_PORTAL_BOARD_STYLE_SETTINGS_EXPLAIN'	=> 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες σας για τα στυλ στης σελίδας σας μαζί με άλλες επιλογές.',

	// media player
 'ACP_PORTAL_MEDIA_INFO'      => 'Portal - media player',
 'ACP_PORTAL_MEDIA_INFO_EXPLAIN'    => 'Εδώ μπορείτε να αλλάξετε τις πληροφορίες για τον media player και άλλες επιλογές',
 'PORTAL_MEDIA_PLAYER'      => 'Εμφάνιση του media player στο portal;',
 'PORTAL_MEDIA_PLAYER_EXPLAIN'    => 'Εμφάνιση αυτού του block στο portal Ναι/Όχι;',

	// picture gallery
 'ACP_PORTAL_GALLERY_INFO'   		=> 'Portal γκαλερί εικόνων',
 'ACP_PORTAL_GALLERY_INFO_EXPLAIN' 			=> 'Πληροφορίες γκαλερί εικόνων αλλαγής και ορισμένες συγκεκριμένες επιλογές.',
 'PORTAL_PICTURE_GALLERY'    		=> 'Εμφάνιση γκαλερί εικόνων?',
 'PORTAL_PICTURE_GALLERY_EXPLAIN' 			=> 'Εμφάνιση block Νια/Όχι?',

	// scroll message
 'ACP_PORTAL_SCROLL_MESSAGE_INFO'   			=> 'Κυλιόμενο μήνυμα',
 'ACP_PORTAL_SCROLL_MESSAGE_INFO_EXPLAIN' 			=> 'Η ανοικτή ετικέτα δεν είναι ένα καθορισμένος τύπος στοιχείου της HTML που προκαλεί την κύλιση του κειμένου στη οθόνη για να κυλίεται από τα δεξιά προς τα αριστερά. Το προεπιλεγμένο πλάτος του MARQUEE στοιχείου είναι ανάλογο του πλάτους του αρχικού στοιχείου.',
 'PORTAL_SCROLL_MESSAGE_DISPLAY'    		=> 'Εμφάνιση κυλιόμενου μηνύματος;',
 'PORTAL_SCROLL_MESSAGE_DISPLAY_EXPLAIN' 			=> 'Εμφάνιση του block Ναι/Όχι;',
 'PORTAL_SCROLL_MESSAGE_MARQUEE'    		=> 'Εμφάνιση εφέ κύλισης;',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_EXPLAIN' 			=> 'Εμφάνιση Ναι/Όχι;',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR'   => 'Χρώμα κειμένου',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR_EXPLAIN'	=> 'Επιτρέπονται HEX ή ονομασίες χρωμάτων όπως #ffffff για λευκό ή όνομα χρώματος όπως violet. Βασική τιμή το #ff0000 ',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE'   	=> 'Μέγεθος κειμένου',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE_EXPLAIN' 	=> 'Το μέγεθος του κειμένου σε εικονοστοιχεία. Τιμή εξ ορισμού 10px.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION'   	=> 'Κατεύθυνση κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION_EXPLAIN' 	=> 'Η κατεύθυνση κύλισης για το κείμενο. Αυτή η τιμή ελέγχει την κατεύθυνση της κύλισης. Οι επιτρεπόμενες τιμές <strong>left</strong>, <strong>right</strong>, <strong>up</strong> και <strong>down</strong> καθορίζουν το σημείο του block απο όπου θα αρχίζει η κύλιση.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED'   		=> 'Ποσό κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED_EXPLAIN' 		=> 'Αυτή η τιμή ελέγχει το ποσό κίνησης (σε εικονοστοιχεία ) μεταξύ των διαδοχικών εμφανίσεων που δίνει την εντύπωση κίνησης.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN'   		=> 'Στοίχιση κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN_EXPLAIN' 		=> 'Αυτή η τιμή μπορεί να πάρει μια από τις μεταβλητές top, middle και bottom. Ελέγχει τον προσδιορισμό θέσης του κιβωτίου επίδειξης σκηνών σχετικά με το τρέχον κείμενο ακριβώς με τον ίδιο τρόπο όπως οι ετικέτες εικόνων που ευθυγραμμίζουν τις ιδιότητες.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR'   	=> 'Συμπεριφορά κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR_EXPLAIN' 	=> 'Αυτή η τιμή ορίζει την συμπεριφορά του εμφανιζόμενου κειμένου. Υπάρχουν τρεις επιτρεπόμενες τιμές. Η κύλιση του κειμένου ξεκινάει μόλις κατέβει η σελίδα, όχι μόλις ο χρήστης κυλίσει πρώτα το κείμενο που βλέπει. <br /><br />Επιλογές: <br /><strong>κύλιση</strong> το κείμενο κυλίεται στην οθόνη και μετά εμφανίζεται από την άλλη άκρη όταν έχει εξαφανιστεί τελείς από την πρώτη. Αυτή είναι η προεπιλεγμένη συμπεριφορά του κειμένου. <br /><strong>εμπόδιο</strong> αυτό μοιάζει με την κύλιση μόνο που όταν το κείμενο φτάσει την μια πλευρά του κουτιού, εξαφανίζεται και ξεκινά από την αρχική του θέση στο κουτί. Αν η εμφάνιση δεν επαναλαμβάνεται τότε το κείμενο μένει σταθερό στην τελευταία του θέση. <br /><strong>εναλλακτικό</strong> το κείμενο "ταλαντώνεται" μεταξύ των άκρων του κουτιού.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR'   		=> 'Χρώμα φόντου κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR_EXPLAIN' 		=> 'Αυτή η τιμή ορίζει το χρώμα του φόντου του εμφανιζόμενου κουτιού.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT'   		=> 'Ύψος κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT_EXPLAIN' 		=> 'Αυτή η τιμή ορίζει το ύψος του εμφανιζόμενου κουτιού.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH'   		=> 'Πλάτος κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH_EXPLAIN' 		=> 'Αυτή η τιμή ορίζει το πλάτος του εμφανιζόμενου κουτιού.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE'   		=> 'Οριζόντιο διάστημα κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE_EXPLAIN' 		=> 'Αυτή η τιμή ορίζει το οριζόντιο διάστημα γύρω από το εμφανιζόμενο κουτί.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE'   		=> 'Κατακόρυφο διάστημα κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE_EXPLAIN' 		=> 'Αυτή η τιμή ορίζει το κατακόρυφο διάστημα γύρω από το εμφανιζόμενο κουτί.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP'   		=> 'Βρόχος κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP_EXPLAIN' 		=> 'Αυτή η τιμή ορίζει τον αριθμό των εμφανίσεων του κυλιώμενου μηνύματος. Οι τιμές -1 και άπειρες σημαίνουν επ\' αόριστο κλήση.',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY'   	=> 'Καθυστέρηση κύλισης',
 'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY_EXPLAIN' 	=> 'Αυτή η τιμή ορίζει την καθυστέρηση (σε milliseconds) μεταξύ των ολοκληρωμένων εμφανίσεων που δίνει την εντύπωση κίνησης.',
 'PORTAL_SCROLL_MESSAGE_INTRO' 						=> 'Κείμενο κύλισης',
 'PORTAL_SCROLL_MESSAGE_INTRO_EXPLAIN'   => 'Εδώ μπορείτε να προσθέσετε/αλλάξετε το κυλιόμενο κείμενο. Επιτρέπονται έως 1000 χαρακτήρες, html κώδικας, τα cookies είναι ενεργοποιημένα! Το κείμενο που υπερβαίνει αυτό το όριο θα διαγράφετε αυτόματα.',
 'ACP_PORTAL_SCROLL_MESSAGE_TXT_SETTINGS'   	=> 'Κυλιόμενο Κείμενο',

	// meta tags
 'ACP_PORTAL_METATAGS_INFO'   			=> 'Μετα Ετικέτες',
 'ACP_PORTAL_METATAGS_INFO_EXPLAIN' 			=> 'Καλώς ήρθατε στην διαχείριση των Μετα ετικετών. Αυτές οι ετικέτες σας επιτρέπουν να δίνεται μια περιγραφή της σελίδας σας στις μηχανές αναζήτησης για να τους επιτρέψετε βάλουν σε κατηγορία την σελίδα σας.<br/ >Γι΄ αυτό, πρέπει να προσέξετε.<br/ >Πέρα από την επιλογή αυτή, αυτές οι ετικέτες επιτρέπουν και άλλες επιλογές όπως αυτόματη προώθηση σε ένα άλλο URL.',
 'PORTAL_META_REDIRECT_URL_TIME'   		=> 'Χρόνος προώθησης (δευτ)',
 'PORTAL_META_REDIRECT_URL_TIME_EXPLAIN'   => 'Ορίζει μια καθυστέρηση σε δευτερόλεπτα πριν ο περιηγητής(browser) προωθήσει αυτόματα το έγγραφο στο δεδομένο URL. Ο αριθμός πριν από το URL είναι η καθυστέρηση σε δευτερόλεπτα που ο περιηγητής(browser) θα "παγώσει" πριν πραγματοποιηθεί η προώθηση. Αφήστε κενό για <strong>Καμία</strong> αυτόματη προώθηση!',
 'PORTAL_META_REDIRECT_URL_ADRESS'   	=> 'Διεύθυνση προώθησης (URL)',
 'PORTAL_META_REDIRECT_URL_ADRESS_EXPLAIN'  => 'Ορίζει ένα URL όπου ο περιηγητής(browser) αυτόματα προωθεί το έγγραφο αμέσως μετά από τον καθορισμένο χρόνο προώθησης. Αφήστε κενό για <strong>Καμία</strong> αυτόματη προώθηση!',
 'PORTAL_META_REFRESH'   				=> 'META Ανανέωση',
 'PORTAL_META_REFRESH_EXPLAIN'  			=> 'Ορίζει μια καθυστέρηση σε δευτερόλεπτα πριν ο περιηγητής(browser) αυτόματα ανανεώσει το έγγραφο. Ο αριθμός είναι η καθυστέρηση σε δευτερόλεπτα που ο περιηγητής(browser) θα "παγώσει" πριν πραγματοποιηθεί η ανανέωση. Βάλτε έναν αριθμό σε δευτερόλεπτα. Αφήστε κενό για <strong>Καμία</strong> αυτόματη ανανέωση!',
 'PORTAL_META_PRAGMA'   					=> 'META Pragma',
 'PORTAL_META_PRAGMA_EXPLAIN'  				=> 'Απαγορεύστε την εγγραφή της σελίδας στην λανθάνουσα μνήμη του περιηγητή(browser).<br/ >- Για να χρησιμποιήσετε αυτό το tag, βάλτε <i>no-cache</i>, αν όχι, αφήστε κενό.',
 'PORTAL_META_KEYWORDS'   				=> 'Μετα Λέξεις Κλειδιά',
 'PORTAL_META_KEYWORDS_EXPLAIN'  			=> 'Λειτουργία: Υποδείξτε στις μηχανές αναζήτησης τις λέξεις κλειδιά που σχετίζονται με την σελίδα σας.<br />- Μέγιστος αριθμός χαρακτήρων: 1000 ή 100 λέξεις κλειδιά.<br/ >- Στον αριθμό χαρακτήρων, μην ξεχνάτε να μετράτε τα <a href="accent.htm">γράμματα που προφέρονται</a> όταν θα κωδικοποιηθούν σε HTML. Για παράδειγμα το γράμμα "à", κωδικοποιείται σε &amp&agrave; στην HTML μετράει για οκτώ χαρακτήρες.<br />- Δεν πρέπει να ορίσετε την ίδια λέξη κλειδί πολλές φορές (δεν αρέσει στις μηχανές αναζήτησης).<br />- Οι λέξεις κλειδιά χωρίζονται από κόμμα, ένα κενό ή ένα κόμμα και ένα κενό, είναι επιλογή σας.',
 'PORTAL_META_DESCRIPTION'   			=> 'META Περιγραφή',
 'PORTAL_META_DESCRIPTION_EXPLAIN'  		=> 'Περιγραφή της σελίδας σας.<br />- Μέγιστος αριθμός χαρακτήρων: 200<br />- Αποφεύγεται προφορές, σε συγκεκριμένες μηχανές δεν μετράν.',
 'PORTAL_META_AUTHOR'   					=> 'Μέτα Συγγραφέας',
 'PORTAL_META_AUTHOR_EXPLAIN'  				=> 'Επιτρέπει την αναγνώριση του ιδιοκτήτη της σελίδας.<br/ >- Βάλε το όνομα με μικρά γράμματα (πεζά), ακολουθούμενο από το επώνυμο σε κεφαλαία γράμματα.<br/ >- Αν επιθυμείτε, μπορείτε να βάλετε πολλούς ιδιοκτήτες που το όνομα θα χωρίζεται με κόμμα.',
 'PORTAL_META_IDENTIFIER_URL'   			=> 'Μετα προσδιορισμού-σύνδεσμος',
 'PORTAL_META_IDENTIFIER_URL_EXPLAIN'  		=> 'Κάνει δυνατό τον ορισμό του URL.<br />- Βάλτε το URL της Αρχικής σας Σελίδας.<br />- Πρέπει να ορίσετε μόνο ένα URL.',
 'PORTAL_META_REPLY_TO'   				=> 'META Απάντηση-σε',
 'PORTAL_META_REPLY_TO_EXPLAIN'  			=> 'Επιτρέπει να καθοριστεί το email του διαχειριστή (webmaster).<br/ > Είναι καλύτερα να βάλετε μόνο μια διεύθυνση.',
 'PORTAL_META_REVISIT_AFTER'   			=> 'META Ξανά επίσκεψη-μετά',
 'PORTAL_META_REVISIT_AFTER_EXPLAIN'  		=> 'Επιτρέπει τον καθορισμό με το spider (robot της μηχανής) της δημιουργίας καταλόγου της σελίδας σας βάση του αριθμού των ημερών που θα εισαχθούν. - 15 μέρες" ή "30 μέρες" είναι ο καλύτερος συνδυασμός.',
 'PORTAL_META_CATEGORY'   				=> 'META Κατηγορία',
 'PORTAL_META_CATEGORY_EXPLAIN'  			=> 'Επιτρέπει τον καθορισμό της κατηγορίας της σελίδας σας. Χρησιμοποιείται από συγκεκριμένες μηχανές που επιτρέπουν ταξινόμηση κατα κατηγορία.',
 'PORTAL_META_COPYRIGHT'   				=> 'Μετα Πνευματικά δικαιώματα',
 'PORTAL_META_COPYRIGHT_EXPLAIN'  			=> 'Τυπικά ένα μη επαγγελματικό σχόλιο για τα πνευματικά δικαιώματα .<br /> - Μπορείτε να περιλάβετε στα Πνευματικά δικαιώματα, μάρκες, πατέντες, ή άλλες πληροφορίες που αφορούν την περιουσία σας.',
 'PORTAL_META_GENERATOR'   				=> 'META Γεννήτρια',
 'PORTAL_META_GENERATOR_EXPLAIN'  			=> 'Τυπικά το όνομα και ο αριθμός έκδοσης ενός εργαλείου δημοσίευσης που χρησιμοποιείται για να δημιουργήσει την σελίδα.<br/ >- Μπορεί να χρησιμοποιηθεί από προγραμματιστές για να εισχωρήσει στην αγορά εργαλείων. <br / >- Ίδιες ετικέττες με τον εκδότη μετα.',
 'PORTAL_META_ROBOTS'   					=> 'META Robots',
 'PORTAL_META_ROBOTS_EXPLAIN'  				=> 'Ελέγχει τα robots των μηχανών αναζήτησης σε μια ανά-σελίδα βάση.<br/ >- <strong>all</strong> = Το bot ελέγχει όλη την σελίδα (προεπιλογή)<br />- <strong>none</strong> = Το bot δεν ελέγχει την σελίδα<br />- <strong>index</strong> = Η σελίδα σας μπαίνει σε κατάλογο<br />- <strong>noindex</strong> = Η σελίδα σας δεν \είναι σε κατάλογο αλλά το bot θα ακολουθήσει τον σύνδεσμο της σελίδας σας<br />- <strong>follow</strong> = Το bot σημειώνει τον σύνδεσμο στην σελίδα σας για έπειτα έλεγχο.<br />- <strong>nofollow</strong> = Το bot δεν βάζει σε κατάλογο τον σύνδεσμο στην σελίδα σας.<br />- <strong>noodp</strong> = Opting Out of Open Directory Listings για Webmasters (Live Search Microsoft). Αυτό λέει στο bot της MSN search να μην χρησιμοποιήσει το DMOZ site snippet, μόνο η MSN αγνοεί το περιεχόμενο ODP της σελίδας σας.',
 'PORTAL_META_DISTRIBUTION'   			=> 'Μετα Διανομή',
 'PORTAL_META_DISTRIBUTION_EXPLAIN'  		=> 'Υπάρχουν τρεις κατηγορίες κατοχύρωσης του περιεχομένου της σελίδας σας:<br/ >- <strong>Global</strong> (σε ολόκληρο το web)<br/ >- <strong>Local</strong> (για την τοπική IP της σελίδας σας)<br/ >- <strong>IU</strong> (Εσωτερική Χρήση, όχι για δημόσια κατοχύρωση).',
 'PORTAL_META_CREATION_YEAR'   			=> 'META Έτος-yyyy',
 'PORTAL_META_CREATION_YEAR_EXPLAIN'  		=> 'Έτος δημιουργίας της σελίδας σας π.χ. 2005.',
 'PORTAL_META_CREATION_MONTH'   			=> 'Μετα Μήνας-Δημιουργίας-mm',
 'PORTAL_META_CREATION_MONTH_EXPLAIN'  		=> 'Μήνας δημιουργίας της σελίδας σας π.χ. 03.',
 'PORTAL_META_CREATION_DAY'   			=> 'Μετα Ημερομηνία-Δημιουργία -dd',
 'PORTAL_META_CREATION_DAY_EXPLAIN'  		=> 'Μετα δημιουργίας της σελίδας σας π.χ. 23.',
 'PORTAL_META_REVISION_YEAR'   			=> 'META Ημερομηνία Ανανέωσης-yyyy',
 'PORTAL_META_REVISION_YEAR_EXPLAIN'  		=> 'Έτος δημιουργίας της σελίδας σας π.χ. 2007.',
 'PORTAL_META_REVISION_MONTH'   			=> 'Μετα Μήνας Ανανέωσης-mm',
 'PORTAL_META_REVISION_MONTH_EXPLAIN'  		=> 'Μήνας δημιουργίας της σελίδας σας π.χ. 08.',
 'PORTAL_META_REVISION_DAY'   			=> 'META Ημερομηνία Ανανέωσης-dd',
 'PORTAL_META_REVISION_DAY_EXPLAIN'  		=> 'Μέρα δημιουργίας της σελίδας σας π.χ. 21.',

	// other
 'ACP_PORTAL_OTHER_INFO'     	=> 'Portal - Άλλες ρυθμίσεις',
 'ACP_PORTAL_OTHER_SETTINGS'    	=> 'Άλλες ρυθμίσεις portal',
 'ACP_PORTAL_OTHER_SETTINGS_EXPLAIN'  	=> 'Εδώ μπορείτε να αλλάξετε τις άλλες πληροφορίες για την σελίδα σας μαζί με άλλες επιλογές.',
 'PORTAL_MAX_LASTVISITS'     		=> 'Όριο εμφανιζόμενων τελευταίων μελών σε σύνδεση',
 'PORTAL_MAX_LASTVISITS_EXPLAIN'   	=> 'Το όριο στους εμφανιζόμενους συνδεδεμένους στο block του portal "Συνδεδεμένα μέλη" (εξ ορισμού5).',
 'PORTAL_ACT_RECENT_HOT_TOPICS'    => 'Εμφάνιση ενεργών θεμάτων (κυλιόμενο);',
 'PORTAL_ACT_RECENT_HOT_TOPICS_EXPLAIN' 	=> 'Εμφάνιση αυτού του block Ναι/Όχι;',
 'PORTAL_ACT_RECENT_TOPICS'    	=> 'Εμφάνιση προσφάτων θεμάτων (κυλιόμενο);',
 'PORTAL_ACT_RECENT_TOPICS_EXPLAIN' 		=> 'Εμφάνιση αυτού του block Ναι/Όχι;',
 'PORTAL_ANNOUNCE_IMPORTANT'    	=> 'Εμφάνιση σημαντικών ανακοινώσεων;',
 'PORTAL_ANNOUNCE_IMPORTANT_EXPLAIN' 		=> 'Εμφάνιση αυτού του block Ναι/Όχι;',
 'PORTAL_DONWLOADS'    			=> 'Εμφάνιση μεταφορτώσεων;',
 'PORTAL_DONWLOADS_EXPLAIN' 				=> 'Εμφάνιση αυτού του block Ναι/Όχι;',
 'PORTAL_FORUMLIST'    			=> 'Εμφάνιση Δ. Συζήτησης;',
 'PORTAL_FORUMLIST_EXPLAIN' 				=> 'Εμφάνιση αυτού του block Ναι/Όχι; <br /> Εμφανίζει τις Δημ. Συζητήσεις της κοινότητας σε ένα block σαν λίστα.',
 'PORTAL_PHPINFO'    				=> 'Εμφάνιση πληροφοριών PHP;',
 'PORTAL_PHPINFO_EXPLAIN' 					=> 'Εμφάνιση αυτού του block Ναι/Όχι;',
 'PORTAL_QUOTES'    				=> 'Εμφάνιση ρητών;',
 'PORTAL_QUOTES_EXPLAIN' 					=> 'Εμφάνιση αυτού του block Ναι/Όχι;',

 'PORTAL_DRAG_DROP'    			=> 'Επιλογή "Drag and Drop" αρχικής σελίδας',
 'PORTAL_DRAG_DROP_EXPLAIN'  			=> 'Ενεργοποίηση / απενεργοποίηση της λειτουργίας "Drag and Drop" στα blocks του portal / index Ναι/Όχι;',

 'PORTAL_RAN_H_BLOCK'      	=> '<b>Τροποποιημένες ρυθμίσεις portal</b>',
 'CONFIG_UPDATED'								=> 'Επιτυχής ενημέρωση ρυθμίσεων.',
 'VIEWING_PORTAL'								=> 'Βλέπει την αρχική σελίδα',
   
   // corrected/added since RC2 below
   'PORTAL_PICTURE_RESIZE'						=> 'Αυτόματη προσαρμογή μεθέθους εικόνας (σε pixel)',
   'PORTAL_PICTURE_RESIZE_EXPLAIN'				=> 'Αλλαγή μεγέθους εικόνας με χρήση του img tag στις δημοσιεύσεις που έχουν επιλεγεί ως Νέα στην Αρχική σελίδα.',
     // corrected/added since RC5 below
	'ACP_COUNTER_SETTINGS_EXPLAIN'	=> 'Ρυθμίσεις για  τα κινούμενα ψηφία  παρακολούθησης IP του μετρητή',
	'ACP_COUNTER_DIGITS_SETTINGS'	=> 'Ρυθμίσεις ψηφίων μετρητή',
	'ACP_COUNTER_DISPLAY_SETTINGS'	=> 'Ρυθμίσεις εμφάνισης μετρητή',
	'ACP_COUNTER_IP_SETTINGS'		=> 'Ρυθμίσεις μετρητή απαγόρευσης  IP',

	'COUNTER_DIGITS_PATH'				=> 'Διαδρομή ψηφίων',
	'COUNTER_DIGITS_PATH_EXPLAIN'		=>'Διαδρομή των ψηφίων  στον βασικό κατάλογο του  phpBB σας,  π.χ. <samp>images/counter/digits</samp>',
	'COUNTER_DIGITS_ANI_PATH'			=> 'Διαδρομή εφέ ψηφίων',
	'COUNTER_DIGITS_ANI_PATH_EXPLAIN'	=> 'Διαδρομή των εφέ ψηφίων  στον βασικό κατάλογο του  phpBB σας,  π.χ.. <samp>images/counter/digits_ani</samp>',
	'COUNTER_DIGITS_NUMBER'				=> 'Αριθμός ψηφίων',
	'COUNTER_DIGITS_NUMBER_EXPLAIN'		=> 'Αριθμός ψηφίων που θα θέλατε να εμφανίζονται στον μετρητή σας.',
	'COUNTER_DIGITS_WIDTH'				=> 'Πλάτος ψηφίων',
	'COUNTER_DIGITS_WIDTH_EXPLAIN'		=> 'Πλάτος από τα ψηφία',
	'COUNTER_DIGITS_HEIGHT'				=> 'Ύψος ψηφίων',
	'COUNTER_DIGITS_HEIGHT_EXPLAIN'		=> 'Ύψος από τα ψηφία',
	'COUNTER_DISPLAY_IMAGE'				=> 'Εμφάνιση σαν εικόνα',
	'COUNTER_DISPLAY_NONE'				=> 'Να μην εμφανίζετε',
	'COUNTER_DISPLAY_STATS'				=> 'Εμφάνιση στατιστικών μετρητή',
	'COUNTER_DISPLAY_STATS_EXPLAIN'		=> 'Επιτρέψτε την εμφάνιση πληροφοριών των στατιστικών για το μετρητή',
	'COUNTER_DISPLAY_TEXT'				=> 'Εμφάνιση σαν κείμενο',
	'COUNTER_BLOCK_IP'					=> 'Επιτρέψτε απαγόρευση IP',
	'COUNTER_BLOCK_IP_EXPLAIN'			=> 'Επιτρέψτε  παρακολούθηση/απαγόρευση IP διευθύνσεων από τον μετρητή. Αυτή η ρύθμιση  θα κάνει τον μετρητή σας να δουλεύει σωστά: τα πατήματα δεν θα αυξηθούν εάν οποιοιδήποτε μέλη κάνουν ανανέωση τον πλοηγό τους στο χρονικό όριο που θα θέσετε ποιο κάτω.',
	'COUNTER_BLOCK_TIME'				=> 'IP χρόνος απαγόρευσης',
	'COUNTER_BLOCK_TIME_EXPLAIN'		=> 'Αριθμός σε δευτερόλεπτα που ο μετρητής  παρακολουθεί/απαγορεύει  κάθε IP διεύθυνση.',
	'COUNTER_IP_LOGFILE'				=> 'IP αρχείο ιστορικού',
	'COUNTER_IP_LOGFILE_EXPLAIN'		=> 'Διαδρομή του αρχείου ιστορικού IP στον βασικό κατάλογο του  phpBB σας, π.χ. <samp>images/counter/ip.txt</samp>. Απαιτείται εάν εσείς ενεργοποιήσετε  την ρύθμιση Επιτρέπετε απαγόρευσης IP.',

	'SELECT_COUNTER_DISPLAY_MODE'			=> 'Μέθοδος εμφάνισης μετρητή',
  'SELECT_COUNTER_DISPLAY_MODE_EXPLAIN'   => 'Επιλογή μεθόδου εμφάνισης μετρητή. <br /><strong>Σημείωση</strong>: Πρέπει <strong>πάντα</strong> να πατήσετε/ενεργοποιήσετε <strong>Εμφάνιση σαν εικόνα</strong> ή <strong>Εμφάνιση σαν κείμενο</strong>, πριν αποθηκεύσετε τις ρυθμίσεις ποιο κάτω.', 

  'PORTAL_SHOW_LAST_NEWS'               	=> 'Μέθοδος ταξινόμησης Νέων στο Portal',
  'PORTAL_SHOW_LAST_NEWS_EXPLAIN'       	=> 'Ναι = Τελευταία δημοσίευση/απάντηση πρώτη <br />Όχι = Πρώτο θέμα πρώτο.',
 
  

	// corrected/added since 0.2
        'PORTAL_SHOW_TOOL_TIPS'                    => 'Φόρουμ εργαλεία πινάκων',
        'PORTAL_SHOW_TOOL_TIPS_EXPLAIN'            => 'Προβολή φόρουμ εργαλεία πινάκων Ναι/Όχι?',


	// pagination 
    'ACP_PORTAL_ANNOUNCE_PAG_SETTINGS' => 'Ρυθμίσεις σελιδοποίησης Ανακοινώσεων',
    'ACP_PORTAL_NEWS_PAG_SETTINGS'     => 'Ρυθμίσεις σελιδοποίησης Νέων',

    'PORTAL_PAG_REPOSITORY'            => 'Αποθήκευση Άρθρων',
    'PORTAL_PAG_REPOSITORY_EXPLAIN'    => 'Προβολή Σελιδοποίησης Ναι/Όχι? <br /><br />Εάν ενεργοποιηθεί οι αριθμοί σελίδας άρθρων θα εμφανίζονται κάτω από το τελευταίο άρθρο στο μπλοκ.',
    'PORTAL_PAG_PERMISSIONS'           => 'Προσβάσεις σελιδοποίησης',
    'PORTAL_PAG_PERMISSIONS_EXPLAIN'   => 'Να επιτρέπονται προσβάσεις Ναι/Όχι?',
    'PORTAL_PAG_SHOW_ALL'              => 'Προβολή όλων των τύπων μηνυμάτων',
    'PORTAL_PAG_SHOW_ALL_EXPLAIN'      => 'Προβολή όλων των μηνυμάτων Ναι/Όχι? <br /><br />Όλοι οι τύποι των άρθρων όπως ανακοινώσεις, Γενικές ανακοινώσεις, σημειώσεις και απλά θα μετρηθούν στον τομέα των νέων. Ο τομέας ανακοινώσεων θα μετρήσει μόνο τις απλές και γενικές ανακοινώσεις.',

));

?>