<?php
/** 
*
* @name acp_portal_xl_blocks.php [Greek-El]
* @package phpBB3 Portal XL 5.0 5.0
* @version $Id: acp_portal_xl_blocks.php,v 1.5 2008/02/27 17:52:25 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL 5.0 Group
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
// ’ » “ ” …
//
$lang = array_merge($lang, array(
	'TITLE_BLOCKS' 							=> 'Διαχείριση Block',
	'TITLE_BLOCKS_EXPLAIN'						=> 'Από εδώ μπορείτε να δημιουργήσετε/επεξεργαστείτε/διαγράψετε Blocks και στοιχεία του Block στην <strong>αρχική σελίδα</strong> σας.<br /> Το block μπορεί να μετακινηθεί προς κάθε κατεύθυνση. Υπάρχουν διαθέσιμες πέντε στήλες για να θέσετε το Block σας μέσα, κορυφή, αριστερά, κέντρο, δεξιά και κάτω. Οι θέσεις των blocks παρακάτω έχουν την ίδια ταξινόμηση όπως θα τα δείτε στην αρχική σας σελίδα. Και τα δύο μέρη από την διαχείριση των block χρησιμοποιούν τα ίδια blocks το ένα εκτός από το άλλο, έτσι εσείς είστε σε θέση να δείτε με μια διαφορετική ματιά και να αισθανθείτε το Portal και το index/viewforum.',
 	'TITLE_BLOCKS_COLUMN_EXPLAIN'				=> 'Ρυθμίσεις πλάτους αριστερής και δεξιάς στήλης αρχικής σελίδας. Εδώ μπορείτε να αλλάξετε το πλάτος της αριστερής και της δεξιάς σας στήλης της αρχικής σας σελίδας.',

	'TITLE_BLOCKS_INDEX' 				=> 'Διαχείριση βλοκ στο index/viewforum/viewtopic',
	'TITLE_BLOCKS_INDEX_EXPLAIN'		=> 'Από εδώ μπορείτε να δημιουργήσετε/επεξεργαστείτε/διαγράψετε Blocks και στοιχεία του Block στο index/viewforum/viewtopic της ιστοσελίδας σας.<br /> Το block μπορεί να μετακινηθεί προς κάθε κατεύθυνση. Υπάρχουν διαθέσιμες πέντε στήλες για να θέσετε το Block σας μέσα, κορυφή, αριστερά, κέντρο, δεξιά και κάτω. Οι θέσεις των blocks παρακάτω έχουν την ίδια ταξινόμηση όπως θα τα δείτε στην αρχική σας σελίδα. Και τα δύο μέρη από την διαχείριση των block  χρησιμοποιούν τα ίδια blocks το ένα εκτός από το άλλο, έτσι εσείς είστε σε θέση να δείτε με μια διαφορετική ματιά και να αισθανθείτε  το Portal και το  index/viewforum.',
 	'TITLE_BLOCKS_INDEX_COLUMN_EXPLAIN'	=> 'Ρυθμίσεις πλάτους αριστερής και δεξιάς στήλης αρχικής σελίδας. Εδώ μπορείτε να αλλάξετε το πλάτος της αριστερής και της δεξιάς σας στήλης στο index/viewforum/viewtopic της σελίδας σας.',

	'TITLE_PAGES' 						=> 'Διαχείριση σελίδων portal',
	'TITLE_PAGES_EXPLAIN'				=> 'Εδώ μπορείτε να δημιουργήσετε/επεξεργαστείτε/μεταφέρετε/διαγράψετε σελίδες και Στοιχεία Σελίδων στην επισκόπηση σελίδων του portal σας. Μπορείτε να μεταφέρετε την σελίδα σας σε οποιονδήποτε φάκελο. Υπάρχουν πέντε στήλες διαθέσιμες για να θέσετε την σελίδα σας  επάνω, αριστερά, κέντρο, δεξιά και κάτω. Οι θέσεις των διαφορετικών σελίδων έχουν κατωτέρω την ίδια ρύθμιση, δεδομένου ότι θα δείτε στο portal σελίδες σελίδα σας.',
  	'TITLE_PAGES_COLUMN_EXPLAIN'		=> 'Αριστερές και δεξιές τοποθετήσεις πλάτους στηλών. Εδώ μπορείτε να αλλάξετε τις αριστερές και δεξιές πληροφορίες πλάτους στηλών στο portal\'s κύρια σελίδα.',

	'BLOCK_EDIT_HEADER'					=> 'Επεξεργασία/Δημιουργία block',
	'BLOCK_EDIT_HEADER_MAIN'			=> 'Κύρια διαχείριση block',
	'BLOCK_COLUMN_SETTINGS'				=> 'Πλάτος στήλης',
	'BLOCK_EDIT_COLUMN_SETTINGS'		=> 'Επεξεργασία/Αλλαγή πλάτους στήλης',

	'ADD_BLOCK'							=> 'Προσθήκη Block ',
	'CANCEL'							=> 'Ακύρωση',	
	'PIXEL'								=> 'Εικονοστοιχεία',
	'BLOCK_ACTIV'						=> 'Ενεργοποίηση Block',
	'BLOCK_ACTIVE'						=> 'Ενεργοποίηση',
	'BLOCK_ACTIV_EXPLAIN'				=> 'Εμφάνιση αυτού του block Ναι/Όχι;',	
	'BLOCK_CENTRE'						=> 'Δεν διατίθεται',
	'BLOCK_HTML'						=> 'Αρχείο Html',
	'BLOCK_HTML_EXPLAIN'				=> 'Επιλέξτε ένα υπάρχον block (*.html αρχείο) για να χρησιμοποιήσετε.',		
	'BLOCK_NAME'						=> 'Όνομα block',
	'BLOCK_NAME_EXPLAIN'				=> 'Μοναδικό όνομα για το block σας. Αυτό το όνομα θα χρησιμοποιείτε για να εμφανίζεται στο block στην αρχική σελίδα.',	
	'BLOCK_ORD'							=> 'Ταξινόμηση:',	
	'BLOCK_ORDER'						=> 'Ταξινόμηση:',
	'BLOCK_POS'							=> 'Θέση',
	'BLOCK_REMOVED'						=> 'Επιτυχής διαγραφή block',
	'BLOCK_UPDATED'						=> 'Επιτυχής ανανέωση',
	'BLOCK_ADDED'						=> 'Επιτυχής προσθήκη',
	'BLOCK_CENTER'						=> 'Κέντρο',	
	'BLOCK_BOTTOM'						=> 'Κάτω',
	'BLOCK_DISABLE_EX'					=> 'Επιτυχής απενεργοποίηση block',	
	'BLOCK_RIGHT'						=> 'Δεξιά',
	'BLOCK_LEFT'						=> 'Αριστερά',
	'BLOCK_TOP'						  => 'Κορυφή',
	'BLOCK_NAME_EDIT'					=> 'Επεξεργασία block:',
	'BLOCK_ORD'							=> 'Ταξινόμηση:',	
	'BLOCK_ORD_EXPLAIN'					=> 'Επιλέγεται την θέση που θα μπει το block σας. Δυνατές επιλογές κορυφή, αριστερά, κέντρο, δεξιά και κάτω.',	
	'BLOCK_POSITION'					=> 'Τελευταία θέση',	
	'BLOCK_POSITION_EXPLAIN'			=> 'Επιλέξετε την επάνω στήλη',	
	'DISABLE_BLOCK'						=> 'Ενεργοποίηση',
	'ENABLE_BLOCK'						=> 'Απενεργοποίηση',
	'ICON_DELETE'						=> 'Επιτρέπεται η διαγραφή των block σας, τα ήδη υπάρχοντα δεν μπορούν να διαγραφούν.',
	'ICON_EDIT'							=> 'Επιτρέπεται η επεξεργασία των block σας, τα ήδη υπάρχοντα δεν μπορούν να επεξεργαστούν.',
	'ICON_MOVE_BOTTOM'					=> 'Μετακίνηση του block απευθείας στην πιο κάτω στήλη',
	'ICON_MOVE_BOTTOM_DIRECT'			=> 'Μετακίνηση του block απευθείας στην κάτω στήλη',	
	'ICON_MOVE_DOWN'					=> 'Μετακίνηση του block μια θέση κάτω',
	'ICON_MOVE_LEFT'					=> 'Μετακίνηση του block μια θέση αριστερά',	
	'ICON_MOVE_LEFT_DIRECT'				=> 'Μετακίνηση του block απευθείας στην πιο αριστερή στήλη',	
	'ICON_MOVE_RIGHT'					=> 'Μετακίνηση του block μια θέση δεξιά',
	'ICON_MOVE_RIGHT_DIRECT'			=> 'Μετακίνηση του block απευθείας στην δεξιά στήλη',	
	'ICON_MOVE_TOP'						=> 'Μετακίνηση του block στην επάνω στήλη',
	'ICON_MOVE_TOP_DIRECT'				=> 'Μετακίνηση του block απευθείας στην κορυφαία στήλη',
	'ICON_MOVE_UP'						=> 'Μετακίνηση του block επάνω μια θέση',
	'OPEN_ICON_PREVIEW'					=> 'Άνοιγμα επισκόπησης εικονιδίων',	
	'CLOSE_ICON_PREVIEW'				=> 'Κλείσιμο επισκόπησης εικονιδίων',
	'MUST_SELECT_BLOCK'					=> 'Σφάλμα επιλογής',
	'OFFLIGNE'							=> 'Το block είναι απενεργοποιημένο, για ενεργοποίηση πατήστε το εικονίδιο',
	'ONLIGNE'							=> 'Το block είναι ενεργοποιημένο, για απενεργοποίηση πατήστε το εικονίδιο',
	'RESET_INCLUDE_BLOCK'				=> 'Διαγραφή',
	'SUBMIT_INCLUDE_BLOCK'				=> 'Αποθήκευση',
	'PERMISSION' 						=> 'Δικαιώματα πρόσβασης block',
	'PERMISSION_EXPLAIN' 				=> 'Ορίζετε ποιος μπορεί να δει το block:',
	'ADMIN'								=> 'Διαχειριστής',			
	'ALL'								=> 'Όλοι',
	'GUESTS'							=> 'Επισκέπτες',
	'MOD'								=> 'Συντονιστής',
	'NONE'								=> 'Να μην εμφανίζετε',
	'REG'								=> 'Εγγεγραμμένοι',
	'STAFF'								=> 'Ομάδα',
	'URL_IMG_EXPLAIN'					=> 'Δεσμός εικόνας που θα εμφανίζεται στους δεσμούς του Μενού',
	'URL_IMG_EXPLAIN2'					=> 'Πατήστε την επιλεγμένη εικόνα',		
	'BLOCK_FNAME_INFO'		  		=> 'Διαθέσιμα μίνι εικονίδια',	
	'BLOCK_FNAME_I_EXPLAIN'				=> 'Προεπισκόπηση των διαθέσιμων μίνι εικονιδίων από τα οποία μπορείτε να επιλέξετε (τα εικονίδια βρίσκονται στον φάκελο /portal/images/icon_menu/ αν θέλε να προσθέσετε και άλλα). Προτεινόμενο μέγεθος εικονιδίων 16x16px.',	
	'BLOCK_FNAME_I_CHOSEN'				=> 'Επιλεγμένη μίνι εικόνα.',	
    'CONFIG_UPDATED'					=> 'Επιτυχής ενημέρωση ρυθμίσεων.',
    'CONFIG_ADDED'						=> 'Επιτυχής προσθήκη ρυθμίσεων.',

	'DELETE'							=> 'Διαγραφή block',
	'EDIT'								=> 'Επεξεργασία block',
	'MOVE_BOTTOM'						=> 'Μετακίνηση ένα βήμα προς τα κάτω στη χαμηλότερη στήλη',
	'MOVE_BOTTOM_DIRECT'				=> ' Μετακίνηση προς τα κάτω άμεσα προς την κατώτατη στήλη',	
	'MOVE_DOWN'							=> 'Μετακίνηση κάτω το block μια γραμμή',
	'MOVE_LEFT'							=> 'Μετακίνηση  της στήλης προς αριστερά',	
	'MOVE_LEFT_DIRECT'					=> 'Μετακίνηση της στήλης άμεσα προς αριστερά',	
	'MOVE_RIGHT'						=> 'Μετακίνηση  της στήλης προς δεξιά',
	'MOVE_RIGHT_DIRECT'					=> 'Μετακίνηση της στήλης άμεσα προς δεξιά',	
	'MOVE_TOP'							=> 'Μετακίνηση επάνω ένα βήμα στην ανώτερη στήλη ',
	'MOVE_TOP_DIRECT'					=> 'Μετακίνηση  επάνω άμεσα προς την κορυφαία στήλη',
	'MOVE_UP'							=> 'Μετακίνηση επάνω μια γραμμή',	

	'BLOCK_CONTENT'						=> 'Περιεχόμενο',	
	'BLOCK_CONTENT_EXPLAIN'				=> 'Το περιεχόμενο από το προσαρμοσμένο  block πηγαίνει εδώ. <br /><br /> Εάν χρησιμοποιείτε αυτόν τον τομέα για να προσαρμόσετε το portal block πρέπει να επιλέξετε <strong>blank_custom_block.html</strong> σαν αρχείο HTML από την αναδυόμενο ρύθμιση για να εμφανιστεί το περιεχόμενο σε ένα  block. <strong>blank_custom_block.html</strong> μπορεί να επιλεχτεί τόσο συχνά όσο χρειάζεστε.',
	
   'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Portal μέγεθος στήλης',
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Ρυθμίσεις πλάτους στήλης δεξιά και αριστερά',	
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'Here you can change your left and right column width information of portals page.',
	
   'PORTAL_LEFT_COLLUMN_WIDTH'                 	=> 'Αριστερό πλάτος στηλών',
   'PORTAL_LEFT_COLLUMN_ACTIVE'                 => 'Αριστερή στήλη ενεργή',
   'PORTAL_LEFT_COLLUMN_ACTIVE_EXPLAIN'         => 'Επιτρέψτε/θέστε εκτός λειτουργία την αριστερής στήλη στη σελίδα portal Ναι/Όχι?',
   'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => 'Εδώ μπορείτε να αλλάξετε το πλάτος της αριστερής στήλης στη σελίδα portal σε pixel, προτεινόμενη τιμή 180',
   
   'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Δεξιό πλάτος στηλών',
   'PORTAL_RIGHT_COLLUMN_ACTIVE'                => 'Δεξιά στήλη ενεργή',
   'PORTAL_RIGHT_COLLUMN_ACTIVE_EXPLAIN'        => ' Ενεργοποιήστε/απενεργοποιήστε την  λειτουργία της δεξιάς στήλης στη σελίδα portal  Ναι/Όχι?',
   'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => 'Εδώ μπορείτε να αλλάξετε το πλάτος της δεξιάς στήλης στη σελίδα portal σε εικονοστοιχεία, προτεινόμενη τιμή 180',
   
   'PORTAL_LAYOUT'                 				=> 'Portal Layout',
   'PORTAL_LAYOUT_ACTIVE'                		=> 'Display column layout on portal',
   'PORTAL_LAYOUT_EXPLAIN'        				=> 'Αυτός ο κύριος διακόπτης είναι σε θέση να ενεργοποιήσει/απενεργοποιήσει τις στήλες δεξιά και αριστερά  με ένα πάτημα, χωρίς να χρησιμοποιήσετε τις ρυθμίσεις κατωτέρω, η κεντρική στήλη θα ταξινομηθεί πάλι. <br /> Ενεργοποιήστε/απενεργοποιήστε Ναι/Όχι?',

   'PORTAL_INDEX_LAYOUT'                 		=> 'Index Layout',
   'PORTAL_INDEX_LAYOUT_ACTIVE'                	=> 'Display column layout on index/viewforum/viewtopic',
   'PORTAL_INDEX_LAYOUT_EXPLAIN'        		=> 'Αυτός ο κύριος διακόπτης είναι σε θέση να ενεργοποιήσει/απενεργοποιήσει τις στήλες δεξιά και αριστερά  με ένα πάτημα, χωρίς να χρησιμοποιήσετε τις ρυθμίσεις κατωτέρω, η κεντρική στήλη θα ταξινομηθεί πάλι. <br /> Ενεργοποιήστε/απενεργοποιήστε Ναι/Όχι?',
   
   'PORTAL_PAGES_LAYOUT'                 		=> 'Διάταξη σελίδας',
   'PORTAL_PAGES_LAYOUT_ACTIVE'                	=> 'Εμφάνιση διάταξης στηλών στη σελίδα portal',
   'PORTAL_PAGES_LAYOUT_EXPLAIN'        		=> 'Αυτός ο κύριος διακόπτης είναι σε θέση να ενεργοποιήσει/απενεργοποιήσει τις στήλες δεξιά και αριστερά  με ένα πάτημα, χωρίς να χρησιμοποιήσετε τις ρυθμίσεις κατωτέρω, η κεντρική στήλη θα ταξινομηθεί πάλι. <br /> Ενεργοποιήστε/απενεργοποιήστε Ναι/Όχι?',

   'PORTAL_PAGES_PAGE_ACTIVE'        			=> 'Single page display',
   'PORTAL_PAGES_PAGE_ACTIVE_EXPLAIN'        	=> 'This switch is able to switch on/off the single page view option. If set to Yes one single page will be shown instead of the known column lay-out. If more than one page is created using block "Portal pages" they will be grouped together and paginated. You will be able to view pages page by page. All other blocks are closed out here. <br /> Enable/Disable Yes/No?',
   'PORTAL_PAGES_PAGE_ACTIVE_NUMBER'        	=> 'Active page',
   'PORTAL_PAGES_PAGE_ACTIVE_NUMBER_EXPLAIN'    => 'Specify a page ID here. This page will be displayed in first position. Combination of centre column and block name "Portal pages" will be count in only. All other blocks will be ignored. Do not leave this field empty, 0 is required than. Pages will be paginated if more than one is available.',
   'PAGES_PAGE_ACTIVE'        					=> 'Singel page active',
   'PAGES_PAGE_ACTIVE_NUMBER'        			=> 'Single page active block ID',
   'BLOCK_EDIT_PAGES_SETTINGS'        		    => 'Single page options',
  
   
));

?>
