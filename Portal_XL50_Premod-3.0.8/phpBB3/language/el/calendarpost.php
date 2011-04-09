<?php
/**
*
* calendarpost [Greek-el]
*
* @author alightner
*
* @package phpBB Calendar
* @version CVS/SVN: $Id: $
* @copyright (c) 2009 alightner
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbb2.gr:
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ALL_DAY'					=> 'Όλης της ημέρας γεγονότα',
	'ALLOW_GUESTS'				=> 'Επιτρέπεται στα μέλη να προσκαλούν   επισκέπτες σε αυτό το γεγονός?',
	'ALLOW_GUESTS_ON'			=> 'Επιτρέπεται στα μέλη να προσκαλούν   επισκέπτες σε αυτό το γεγονός.',
	'ALLOW_GUESTS_OFF'			=> 'Δεν επιτρέπεται στα μέλη να προσκαλούν   επισκέπτες σε αυτό το γεγονός.',
	'AM'						=> 'π.μ.',
	'CALENDAR_POST_EVENT'			=> 'Δημιουργία νέου γεγονότος',
	'CALENDAR_EDIT_EVENT'			=> 'Επεξεργασία γεγονότος',
	'CALENDAR_TITLE'			=> 'Ημερολόγιο',
	'DELETE_EVENT'				=> 'Διαγραφή γεγονότος',	
	'DELETE_ALL_EVENTS'			=> 'Διαγράψτε όλες τις εμφανίσεις σε αυτό το γεγονός',	
	'EMPTY_EVENT_MESSAGE'			=> 'Πρέπει να βάλετε ένα μήνυμα όταν προσθέτετε γεγονότα.',
	'EMPTY_EVENT_SUBJECT'			=> 'Πρέπει να βάλετε ένα θέμα όταν προσθέτετε γεγονότα.',
	'END_DATE'				=> 'Ημερομηνία τέλους',
	'END_RECURRING_EVENT_DATE'	=> 'Πότε θα τελειώσει αυτό το γεγονός?',	
	'END_TIME'				=> 'Ώρα τέλους',
	'EVENT_ACCESS_LEVEL'			=> 'Ποιος μπορεί να δει αυτό το γεγονός;',
	'EVENT_ACCESS_LEVEL_GROUP'		=> 'Ομάδα',
	'EVENT_ACCESS_LEVEL_PERSONAL'		=> 'Προσωπικό',
	'EVENT_ACCESS_LEVEL_PUBLIC'		=> 'Κοινό',
	'EVENT_CREATED_BY'			=> 'Το γεγονός καταχωρήθηκε από τον',
	'EVENT_DELETED'				=> 'Επιτυχής διαγραφή γεγονότος.',
	'EVENT_EDITED'				=> 'Επιτυχής επεξεργασία γεγονότος.',
	'EVENT_GROUP'				=> 'Ποια ομάδα μπορεί να δει αυτό το γεγονός;',
	'EVENT_STORED'				=> 'Επιτυχής δημιουργία γεγονότος.',
	'EVENT_TYPE'				=> 'Τύπος γεγονότος',
	'EVERYONE'				=> 'Όλοι',
	'FREQUENCEY_LESS_THAN_1'	=> 'Επαναλαμβανόμενα γεγονότα πρέπει να έχει συχνότητα μεγαλύτερη ή ίση με 1',
	'FROM_TIME'				=> 'Από',
	'INVITE_INFO'				=> 'Καλεσμένος',
	'LOGIN_EXPLAIN_POST_EVENT'		=> 'Πρέπει να συνδεθείτε για να δημιουργήσετε/επεξεργαστείτε/διαγράψετε γεγονότα.',
	'MESSAGE_BODY_EXPLAIN'			=> 'Βάλτε το μήνυμα σας εδώ, δεν μπορεί να περιέχει παραπάνω από <strong>%d</strong> χαρακτήρες.',
	'NEGATIVE_LENGTH_EVENT'			=> 'Το γεγονός δεν μπορεί να τελειώσει πριν αρχίσει.',
	'NEVER'						=> 'Ποτέ',	
	'NEW_EVENT'				=> 'Νέο γεγονός',
	'NO_EVENT'				=> 'Το ζητούμενο γεγονός δεν υπάρχει.',
	'NO_EVENT_TYPES'			=> 'Ο Διαχειριστής της κοινότητας δεν έχει ορίσει τύπους γεγονότων για το ημερολόγιο. Η δημιουργία γεγονότων ημερολογίου έχει απενεργοποιηθεί.',
	'NO_GROUP_SELECTED'			=> 'Δεν υπάρχουν ομάδες που έχουν επιλεγεί για το γεγονός αυτής της ομάδας.',
	
	'NO_POST_EVENT_MODE'			=> 'Δεν ορίστηκε μέθοδος δημοσίευσης.',
	'PM'						=> 'PM',
	'RECURRING_EVENT'			=> 'Επαναλαμβανόμενο γεγονός',
	'RECURRING_EVENT_TYPE'		=> 'Πως θα πρε΄πει να υπολογιστεί το επόμενο γεγονός?',
	'RECURRING_EVENT_TYPE_EXPLAIN'	=> 'Συμβουλή οι επιλογές αρχίζουν με ένα γράμμα για να οριστούν: A - Ετήσια, M - Μηνιαία, W - Εβδομαδιαία, D - Ημερήσια',
	'RECURRING_EVENT_FREQ'		=> 'Πόσο συχνά πρέπει να συμβεί αυτό το γεγονός?',
	'RECURRING_EVENT_FREQ_EXPLAIN'	=> 'Αυτή η τιμή αντιπροσωπεύει το  [Y] στην πιο πάνω επιλογή',
	'RECURRING_EVENT_CASE_1'    => 'A: [Xth] Ημέρα του  [Month Name] κάθε [Y] Χρόνο(α)',
	'RECURRING_EVENT_CASE_2'    => 'A: [Xth] [Weekday Name] από [Month Name] κάθε [Y] Χρόνο(α)',
	'RECURRING_EVENT_CASE_3'    => 'A: [Xth] [Weekday Name] πλήρες εβδομάδα [Month Name] every [Y] Year(s)',
	'RECURRING_EVENT_CASE_4'    => 'A: [Xth] την τελευταία [Weekday Name] από [Month Name] κάθε [Y] Χρόνο(α)',
	'RECURRING_EVENT_CASE_5'    => 'A: [Xth] τελευταία[Weekday Name] από όλες τις εβδομάδες [Month Name] κάθε [Y] Χρόνο(α)',
	'RECURRING_EVENT_CASE_6'    => 'M: [Xth] Ημέρα του μήνα κάθε [Y] Μήνα(ες)',
	'RECURRING_EVENT_CASE_7'    => 'M: [Xth] [Weekday Name] από κάθε μήνα [Y] Μήνα(ες)',
	'RECURRING_EVENT_CASE_8'    => 'M: [Xth] [Weekday Name] όλων των εβδομάδων του μήνα κάθε [Y] Μήνα(ες)',
	'RECURRING_EVENT_CASE_9'    => 'M: [Xth] τελευταία  [Weekday Name] του κάθε μήνα [Y] Μήνας(ες)',
	'RECURRING_EVENT_CASE_10'    => 'M: [Xth] την τελευταία [Weekday Name] όλων των εβδομάδων του μήνα [Y] Μήνας(ες)',
	'RECURRING_EVENT_CASE_11'    => 'W: [Weekday Name] κάθε [Y] Εβδομάδα(ες)',
	'RECURRING_EVENT_CASE_12'    => 'D: Κάθε [Y] Ημέρα(ες)',

	'RETURN_CALENDAR'			=> '%sΕπιστροφή στο ημερολόγιο%s',
	'START_DATE'				=> 'Ημερομηνία έναρξης',
	'START_TIME'				=> 'Ώρα έναρξης',
	'TO_TIME'				=> 'Έως',
	'TRACK_RSVPS'				=> 'Track attendance',
	'TRACK_RSVPS_ON'			=> 'Attendance tracking είναι ενεργοποιημένο.',
	'TRACK_RSVPS_OFF'			=> 'Attendance tracking είναι απενεργοποιημένο.',	
	'USER_CANNOT_DELETE_EVENT'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα για να διαγράψετε γεγονότα.',
	'USER_CANNOT_EDIT_EVENT'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα για να επεξεργαστείτε γεγονότα.',
	'USER_CANNOT_POST_EVENT'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα για να δημιουργήσετε γεγονότα.',
	'USER_CANNOT_VIEW_EVENT'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα για να δείτε γεγονότα.',
	'VIEW_EVENT'				=> '%sΔείτε τα γεγονότα σας%s',
	'WEEK'					=> 'Εβδομάδα',
	'ZERO_LENGTH_EVENT'			=> 'Το γεγονός δεν μπορεί να τελειώνει την ώρα που αρχίζει.',
));

?>