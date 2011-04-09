<?php
/**
*
* calendar [Greek-el]
*
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

/*** DO NOT CHANGE*/
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
	'ALL_DAY'				=> 'Γεγονότα ημέρας',
	'AM'					=> 'ΠΜ',
	'CALENDAR_TITLE'		=> 'Ημερολόγιο',
	'CALENDAR_NUMBER_ATTEND'=> 'Ο αριθμός των ατόμων που σας φέρνουν σε αυτό το γεγονός',
	'CALENDAR_NUMBER_ATTEND_EXPLAIN'=> '(προσθέστε 1 για τον εαυτό σας)',
	'CALENDAR_RESPOND'		=> 'Παρακαλώ εγγραφείτε εδώ',
	'CALENDAR_WILL_ATTEND'	=> 'Θα παρακολουθήσουν αυτό το γεγονός?',
	'COL_HEADCOUNT'			=> 'Μετρητής',
	'COL_WILL_ATTEND'		=> 'Θα παραστεί?',
	'COMMENTS'				=> 'Σχόλια',
	'DAY'					=> 'Ημέρα',
	'DAY_OF'				=> 'Ημέρα από ',
	'DELETE_ALL_EVENTS'		=> 'Διαγράψτε όλες τις εμφανίσεις του σε αυτό το γεγονός.',
	'DETAILS'				=> 'Λεπτομέρειες',
	'EDIT'					=> 'Επεξεργασία',
	'EDIT_ALL_EVENTS'		=> 'Επεξεργαστείτε όλες τις εμφανίσεις του σε αυτό το γεγονός.',
	'EVENT_CREATED_BY'		=> 'Το γεγονός δημοσιεύθηκε από',
	'EVERYONE'				=> 'Ο καθένας',
	'FROM_TIME'				=> 'Από',
	'HOW_MANY_PEOPLE'		=> 'Γρήγορη μέτρηση',
	'INVALID_EVENT'			=> 'Το γεγονός που προσπαθείτε να δείτε δεν υπάρχει.',
	'INVITE_INFO'			=> 'Προσκεκλημένος',
	'OCCURS_EVERY'			=> 'Εμφανίζεται κάθε',
	'RECURRING_EVENT_CASE_1_STR'    => '%1$s Ημέρα από %4$s - κάθε %5$s Χρόνο(α)',
	'RECURRING_EVENT_CASE_2_STR'    => '%3$s %2$s από %4$s - κάθε %5$s Χρόνο(α)',
	'RECURRING_EVENT_CASE_3_STR'    => '%3$s %2$s όλης της εβδομάδας %4$s - κάθε %5$s Χρόνο(α)',
	'RECURRING_EVENT_CASE_3b_STR'    => '%2$s στο πρώτο μέρος της εβδομάδας  %4$s - κάθε %5$s Χρόνο(α)',
	'RECURRING_EVENT_CASE_4_STR'    => '%3$s την τελευταία  %2$s από %4$s - κάθε %5$s Χρόνο(α)',
	'RECURRING_EVENT_CASE_5_STR'    => '%3$s από την τελευταία %2$s ολόκληρης της εβδομάδας σε %4$s - κάθε %5$s Χρόνο(α)',
	'RECURRING_EVENT_CASE_5b_STR'    => '%2$s στο τέλος της εβδομάδος σε %4$s - κάθε %5$s Χρόνο(α)',
	'RECURRING_EVENT_CASE_6_STR'    => '%1$s Ημέρα του μήνα - κάθε %5$s Μήνα(ες)',
	'RECURRING_EVENT_CASE_7_STR'    => '%3$s %2$s του μήνα – κάθε %5$s Μήνα(ες)',
	'RECURRING_EVENT_CASE_8_STR'    => '%3$s %2$s όλων των εβδομάδων του μήνα – κάθε %5$s Μήνα(ες)',
	'RECURRING_EVENT_CASE_8b_STR'    => '%2$s την πρώτη εβδομάδα του μήνα - κάθε %5$s Μήνα(ες)',
	'RECURRING_EVENT_CASE_9_STR'    => '%3$s την τελευταία %2$s του μήνα - κάθε %5$s Μήνα(ες)',
	'RECURRING_EVENT_CASE_10_STR'    => '%3$s από την τελευταία %2$s από όλες τις εβδομάδες του μήνα – κάθε %5$s μήνα(ες)',
	'RECURRING_EVENT_CASE_10b_STR'    => '%2$s από το τελευταίο μέρος του μήνα - κάθε %5$s Μήνα(ες)',
	'RECURRING_EVENT_CASE_11_STR'    => '%2$s - κάθε %5$s Εβδομάδα(ες)',
	'RECURRING_EVENT_CASE_12_STR'    => 'Κάθε %5$s Ημέρα(ες)',
	'LOCAL_DATE_FORMAT'		=> '%1$s %2$s, %3$s',
	'MAYBE'					=> 'Μπορεί',
	'MONTH'					=> 'Μήνας',
	'MONTH_OF'				=> 'Μήνας από ',
	'MY_EVENTS'				=> 'τα γεγονότα μου',
	'NEW_EVENT'				=> 'Νέο γεγονός',
	'NO_EVENTS_TODAY'		=> 'Δεν υπάρχουν προγραμματισμένες εκδηλώσεις για αυτή την ημέρα.',
	'PAGE_TITLE'			=> 'Ημερολόγιο',
	'PM'					=> 'ΜΜ',
	'PRIVATE_EVENT'			=> 'Αυτό το γεγονός είναι προσωπικό. Πρέπει να έχετε πρόσκληση και να συνδεθείτε για να δείτε αυτό το γεγονός.',
	'TO_TIME'				=> 'Προς',
	'UPCOMING_EVENTS'		=> 'Τρέχον γεγονότα',
	'USER_CANNOT_VIEW_EVENT'=> 'Δεν έχετε δικαίωμα να δείτε αυτό το γεγονός.',
	'WATCH_CALENDAR_TURN_ON'	=> 'Παρακολούθηση ημερολογίου',
	'WATCH_CALENDAR_TURN_OFF'	=> 'Σταματήστε παρακολούθηση ημερολογίου',
	'WATCH_EVENT_TURN_ON'	=> 'Παρακολούθηση γεγονότος',
	'WATCH_EVENT_TURN_OFF'	=> 'Σταματήστε παρακολούθηση γεγονότος',
	'WEEK'					=> 'Εβδομάδα',
	'WEEK_OF'				=> 'Εβδομάδα του ',
	'ZEROTH_FROM'			=> '0th από ',
	// Portal XL additions
	'CAL_AM'				=> 'ΠΜ',
	'CAL_PM'				=> 'ΜΜ',
    'VIEW_PREVIOUS_MONTH'   => 'Προβολή προηγούμενου μήνα',
    'VIEW_NEXT_MONTH'       => 'Προβολή επόμενου μήνα',
	'NO_EVENT'				=> 'Δεν υπάρχουν γεγονότα.',
	'numbertext'			=> array(
		'0'		=> '0th',
		'1'		=> '1st',
		'2'		=> '2nd',
		'3'		=> '3rd',
		'4'		=> '4th',
		'5'		=> '5th',
		'6'		=> '6th',
		'7'		=> '7th',
		'8'		=> '8th',
		'9'		=> '9th',
		'10'	=> '10th',
		'11'	=> '11th',
		'12'	=> '12th',
		'13'	=> '13th',
		'14'	=> '14th',
		'15'	=> '15th',
		'16'	=> '16th',
		'17'	=> '17th',
		'18'	=> '18th',
		'19'	=> '19th',
		'20'	=> '20th',
		'21'	=> '21st',
		'22'	=> '22nd',
		'23'	=> '23rd',
		'24'	=> '24th',
		'25'	=> '25th',
		'26'	=> '26th',
		'27'	=> '27th',
		'28'	=> '28th',
		'29'	=> '29th',
		'30'	=> '30th',
		'31'	=> '31st',
		'n'		=> 'nth' ),
));

// Portal XL additions
$lang = array_merge($lang, array(
		'CAL_AM'            	=> 'ΠΜ',
		'CAL_PM'            	=> 'ΜΜ',
		'VIEW_PREVIOUS_MONTH'   => 'Προβολή προηγούμενου μήνα',
		'VIEW_NEXT_MONTH'       => 'Προβολή επόμενου μήνα',
		'NO_EVENT'           	=> 'Κανένα γεγονός δεν υπάρχει.',
));


?>
