<?php
/**
*
* Knowledge Base [Greek - El]
* @author Tobi Schaefer http://www.tas2580.de/
*
* english translation by RedTrinity
*
* @package language
* @version $Id: kb.php, v 0.2.8 2008/07/08 18:14:44 tas2580 Exp $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
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



$lang = array_merge($lang, array(
	'ARTICLE_DETAIL'		=> 'Λεπτομέρειες Άρθρων',
	'ARTICLE_REPORTED'		=> 'Το άρθρο έχει αναφερθεί',
	'DISPLAY_ON_INDEX'		=> 'Προβολή στην κύρια κατηγορία',
	'DISPLAY_ON_INDEX_DESC'	=> '',
	'DELETED'				=> 'Η προσθήκη έχει διαγραφή',
	'MCP_REPORT_TITLE'		=> 'Αναφερόμενα άρθρα',
	'MCP_REPORT_EXPLAIN'	=> '',
	'REALY_DELETE'			=> 'Είστε σίγουρος ότι θέλετε να διαγράψετε την προσθήκη?',
	'VIEW_REPORTS_OLD'		=> 'Προβολή κλειστών αναφορών',
	'VIEW_REPORTS_NEW'		=> 'Προβολή ανοιχτών αναφορών',
	'SHOW_ARTICLE'			=> 'Προβολή άρθρου',
	'SORT_ORDER'			=> 'Ταξινόμηση ανά',
	'SORT_ORDER_DESC'		=> 'Ταξινόμηση των άρθρων στις κατηγορίες',
	'SUB_CATGEGORIES'		=> 'Υπό-κατηγορίες',
	'SEARCH_CATEGORIE'		=> 'Αναζήτηση κατηγορίας',
	'ACP_TYPES'				=> 'Τύποι άρθρων',
	'ACP_TYPES_DESC'		=> 'Εδώ μπορείτε να προσθέσετε και να επεξεργαστείτε τους τύπους άρθρων',
	'ACP_CATEGORIE'			=> 'Κατηγορία',
	'ACP_CATEGORIE_DESC'	=> 'Εδώ μπορείτε να προσθέσετε και να επεξεργαστείτε τις Κατηγορίες της Βάσης Γνώσεων.',
	'ACP_CONFIG'			=> 'Ρυθμίσεις',
	'ACP_CONFIG_DESC'		=> 'Εδώ μπορείτε να επεξεργαστείτε τις Ρυθμίσεις της Βάσης Γνώσεων.',
	'ARTICLE_ACTIVATED'		=> 'Επιτυχής προσθήκη άρθρου!',
	'ARTICLE_DELETED'		=> 'Επιτυχής διαγραφή άρθρου!',
	'ARTICLE_ADDED'			=> 'Το άρθρο προστέθηκε αλλά για να εμφανιστεί στην Βάση Γνώσεων πρέπει να ελεγχθεί.',
	'ARTICLE_HISTORY'		=> 'Ιστορικό Άρθρου',
	'ARTICLE_ADD'			=> 'Προσθήκη άρθρου',
	'ARTICLE_TITLE'			=> 'Τίτλος',
	'ARTICLE_DESCRIPTION'	=> 'Περιγραφή',
	'ARTICLE'				=> 'Άρθρα',
	'ARTICLE_TYPES'			=> 'Τύποι Άρθρων',
	'ARTICLE_TYPES_DESC'	=> 'Σε ποιο τύπο άρθρων θέλετε να ψάξετε; Χρησιμοποιήστε το &lt;strg&gt; για να επιλέξετε πάνω από έναν τύπο, για αναζήτηση σε όλα μην επιλέξετε κανέναν τύπο.',
	'ARTICLE_CONT'			=> 'Άρθρο στην βάση',
	'ARTICLE_DEL'			=> 'Θέλετε σίγουρα να διαγράψετε αυτό το άρθρο;',
	'ARTICLE_EDIT'			=> 'Επεξεργασία άρθρου',
	'ARTICLE_EDITED'		=> 'Επιτυχής επεξεργασία άρθρου!',
	'ARTICLE_DEACTIVATED'	=> 'Κλειδωμένο άρθρο',
	'ARTICLE_POSTET'		=> 'Το άρθρο δημοσιεύθηκε',
	'AKTIVATE'				=> 'Ενεργοποίηση',

	'BACK_ARTICLE'			=> 'Πίσω στο άρθρο',
	'BACK_KB'				=> 'Πίσω στην Βάση Γνώσεων',
	'BACK_TO_ARTICLE'		=> 'Πατήστε %sεδώ%s για να δείτε το άρθρο.',
	'BACK_TO_POSTING'		=> 'Πατήστε %sεδώ%s για να επιστρέψετε στην προηγούμενη σελίδα.',
	'BACK_TO_KB'			=> 'Πατήστε %sεδώ%s για να επιστρέψετε στην Βάση Γνώσεων.',
	'BACK_TO_LOG'			=> 'Πατήστε %sεδώ%s για να επιστρέψετε στην στο ιστορικό.',



	'CATEGORIE'				=> 'Κατηγορία',
	'CHANGED_AT'			=> 'Αλλαγή σε',
	'CONT_CAT'				=> 'Κατηγορίες',
	'CATEGORIES'			=> 'κατηγορίες',
	'CATEGORIES_DESC'		=> 'Σε ποια κατηγορία θέλετε να ψάξετε; Χρησιμοποιήστε το &lt;strg&gt; για να επιλέξετε πάνω από μια κατηγορία, για αναζήτηση σε όλες της κατηγορίες μην επιλέξετε τίποτα.',
	'CAT_NOT_EMPTY'			=> 'Η κατηγορία δεν είναι άδεια!',
	'CAT_NAME'				=> 'Όνομα κατηγορίας',
	'CAT_NAME_DESC'			=> 'Το όνομα της κατηγορίας',
	'CAT_IMAGE'				=> 'Εικόνα κατηγορίας',
	'CAT_IMAGE_DESC'		=> 'Εισάγετε τον δεσμό για την εικόνα της κατηγορίας.',
	'CAT_DECRIPTION_DESC'		=> 'Προσθέστε μια περιγραφή για την κατηγορία',
	'CAT_MAIN'				=> 'Κύρια κατηγορία',
	'CAT_SELECT_MAIN'		=> 'Επιλέξτε μια κύρια κατηγορία',
	'CAT_ADDED'				=> 'Η κατηγορία προστέθηκε',
	'CAT_DELETED'			=> 'Η κατηγορία διαγράφτηκε.',
	'CAT_UPDATED'			=> 'Η κατηγορία ενημερώθηκε.',
	'CAT_REALY_DELETE'		=> 'Θέλετε σίγουρα να διαγράψετε την κατηγορία;',
	'CAT_CREATE_NEW'		=> 'Νέα κατηγορία',
	'DESCRIPTION'			=> 'Περιγραφή',


	'FIENAME'				=> 'Όνομα αρχείου',
	'FOUND_IN'				=> 'Βρέθηκε στο',
	'INDEX_POSTS'			=> 'Άρθρα στην κεντρική σελίδα',
	'INDEX_POSTS_DESC'		=> 'Πόσα άρθρα να εμφανίζονται στην κεντρική σελίδα;',
	'KB_NAME'				=> 'Βάση Γνώσεων',
	'KB_NAME_DESC'			=> 'Το όνομα της Βάσης Γνώσεων',
	'KB_DECRIPTION_DESC'	=> 'Εισάγετε μια περιγραφή για την Βάση Γνώσεων.',
	'KBASE'					=> 'Βάση Γνώσεων',
	'KB_DESCRIPTION'		=> 'Αν γράψετε κάποιο άρθρο μπορείτε να το δείτε και να το υποβάλετε για έγκριση από το τέλος της σελίδας. Αν εγκριθεί, το άρθρο θα εμφανιστεί στην Βάση γνώσεων. ',

	'LOG_TITEL'				=> 'Ιστορικό Άρθρου',
	'LOG_DESCRIPTION'		=> 'Εδώ μπορείτε να δείτε την ώρα που επεξεργάσθηκε το άρθρο και από ποιο μέλος.',
	'LOG_DELETED'			=> 'Το ιστορικό του άρθρου διαγράφτηκε.',

	'MAINCAT_DESC'			=> 'Εδώ μπορείτε να δημιουργήσετε κύριες κατηγορίες, Στης οποίες μπορείτε να δημιουργήσετε υποκατηγορίες για τα άρθρα σας.',

	'MODE'					=> 'Μέθοδος',
	'MODE_DESC'				=> 'Ποια μέθοδο θέλετε να χρησιμοποιήσετε για την δημ. συζήτηση;',
	'MODE_MODERN'			=> 'Μοντέρνα',
	'MODE_CLASSIC'			=> 'Κλασική',
	'NO_ARTICLE'			=> 'Το άρθρο δεν υπάρχει!',
	'NEED_INPUT'			=> 'Εισάγετε έναν τίτλο και κείμενο για το άρθρο!',
	'ARTICLE_NEW'			=> 'Μη εγκεκριμένα άρθρα',
	'ARTICLE_NEW_DESC'		=> 'Τα ακόλουθα δεν έχουν δημοσιευτεί ακόμα ή είναι κλειδωμένα',
	'NAME'					=> 'Όνομα κατηγορίας',
	'NEED_NAME'				=> 'Δώστε ένα όνομα για την κατηγορία',
	'ARTICLE_NEWEST'		=> 'Το νεότερο άρθρο είναι το ',
	'NO_TYPE'				=> 'Κανένας τύπος',
	'POST_FORUM'			=> 'Δ. Συζήτηση για την αναφορά στο άρθρο',
	'POST_TEMPLATE'			=> 'Πρότυπο δημοσίευσης',
	'POST_MESSAGE'			=> 'Κείμενο δημοσίευσης',
	'POST_USER'				=> 'ID Μέλους',
	'POST_NORMAL'			=> 'Κανονικό',
	'POST_TOPIC_GLOBAL'		=> 'Γενική Ανακοίνωση',
	'POST_TOPIC_AS'			=> 'Δημοσίευση ως',
	'POST_TOPIC_AS_DESC'	=> 'Τι είδους θέματος θέλετε να δημιουργηθεί;',
	'POST_USER_DESC'		=> 'Το ID του μέλους που θα φαίνεται στις δημοσιεύσεις',
	'POST_SUBJECT'			=> 'Τίτλος Θέματος',
	'POST_SUBJECT_DESC'		=> 'Ο τίτλος του θέματος που θα δημιουργηθεί',
	'POST_FORUM_DESC'		=> 'Εισάγετε την ταυτότητα του φόρουμ ID από του φόρουμ  στο οποίο μια αναφορά για το άρθρο πρόκειται να δημιουργηθεί, αφήστε "0" για κανένα',
	'POST_MESSAGE_DESC'		=> '{TITLE} = ΄Τίτλος άρθρου <br />{DESCRIPTION} = Περιγραφή άρθρου<br />{POST_TIME} = Ώρα υποβολής<br />{TYPE} = Τύπος άρθρου<br />{SUB_CAT} = Κατηγορία<br />{URL} = ΔΕΣΜΟΣ για το άρθρο<br />{AUTHOR} = Συγγραφέας άρθρου<br />{AUTHOR_ID} = ID-Μέλους του συγγραφέα.',
	'RELASED'				=> 'Δημιουργήθηκε την',
	'READ_MORE'				=> 'Εμφάνιση όλων των %s άρθρων',


	'SEARCH_KEYWORDS_DESC'	=> 'Εδώ μπορείτε να ψάξετε στην Βάση Γνώσεων.',
	'SHOW_EDITS'			=> 'Εμφάνιση αναθεωρήσεων',
	'SHOW_EDITS_DESC'		=> 'Να φαίνεται οι αναθεωρήσεις στο άρθρο;',
	'TYPE'					=> 'Τύπος άρθρου',
	'TYPE_DESC'				=> 'Δώστε ένα όνομα για τον τύπο άρθρου',
	'TYPE_ADDED'			=> 'Επιτυχής προσθήκη τύπου',
	'TYPE_UPDATED'			=> 'Επιτυχής διαγραφή τύπου',

	'NO_SUBCAT_IN_MAINCAT'	=> 'Δεν μπορείτε να δημιουργήσετε υποκατηγορίες στην κεντρική σελίδα!',
	'CAT_TYPE'				=> 'Τύπος κατηγορίας',
	'CAT_TYPE_DESC'			=> 'Επιλέξτε έναν τύπο κατηγορίας',
	'IN_INDEX'				=> 'Στην αρχική',
	'CAT_SUB'				=> 'Υποκατηγορία',

	'CACHE_TIME'			=> 'Χρόνος λανθάνουσας μνήμης',
	'CACHE_TIME_DESC'		=> 'Ο χρόνος για εκείνους τους τύπους και τις κατηγορίες που θα εναποθηκευθούν',
	'SECONDS'				=> 'Δευτερόλεπτα',
	'ACTIVATE_TYPES'		=> 'Ενεργοποίηση τύπος άρθρων?',
	'ACTIVATE_TYPES_DESC'	=> 'Μπορείτε να δώσετε έναν τύπο για τα άρθρα?',
	'UPDATE_POST'			=> 'Ανανέωση δημοσίευσης',
	'UPDATE_POST_DESC'		=> 'Να ενημερώνετε και η δημοσίευση για το άρθρο όταν το άρθρο ενημερωθεί?',
	'POST_UPDATE_MESSAGE'	=> 'Το άρθρο ανανεώθηκε',
	'POST_ID'				=> 'ID της δημοσίευσης',
	'ARTICLE_ADDED_AKTIV'	=> 'Το άρθρο υποβλήθηκε στην βάση και ενεργοποιήθηκε',
	'SHOW_POST_EDIT'		=> 'Εμφάνιση επεξεργασιών',
	'SHOW_POST_EDIT_DESC'	=> 'Να φαίνονται οι επεξεργασίες στην δημοσίευση;',

	'PRINT_TOPIC'			=> 'Εκτύπωση άρθρου',
	'HITS'								=> 'Προβολές',
	'ON'							=> 'Την',
	
	// Portal XL Additions
	'LATEST_TOPICS'			=> 'Τελευταία άρθρα',	


));

?>