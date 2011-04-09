<?php
/**
* calendar [Greek - El]
*
* @author alightner
*
* @package phpBB Calendar
* @version CVS/SVN: $Id: $
* @copyright (c) 2009 alightner
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Σφάλματα';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Δικαιώματα σφαλμάτων';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Μπορεί να δει αναφορές λαθών', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Μπορεί να κάνει αναφορά λαθών', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Adding new category
$lang['permission_cat']['calendar'] = 'Ημερολόγιο';

// Adding new permission set
$lang['permission_type']['calendar_'] = 'Προσβάσεις ημερολογίου';


// User Permissions
$lang = array_merge($lang, array(
	'acl_u_calendar_view_events'	=> array('lang' => 'Μπορεί να δει γεγονότα', 'cat' => 'calendar'),
	'acl_u_calendar_create_events'	=> array('lang' => 'Μπορεί να καταχωρίσει γεγονότα', 'cat' => 'calendar'),
	'acl_u_calendar_edit_events'	=> array('lang' => 'Μπορεί να επεξεργαστεί γεγονότα', 'cat' => 'calendar'),
	'acl_u_calendar_delete_events'	=> array('lang' => 'Μπορεί να διαγράψει γεγονότα', 'cat' => 'calendar'),
	'acl_u_calendar_create_public_events'	=> array('lang' => 'Μπορεί να δημιουργήσει δημόσια γεγονότα', 'cat' => 'calendar'),
	'acl_u_calendar_create_group_events'	=> array('lang' => 'Μπορεί να δημιουργήσει ομάδες γεγονότων', 'cat' => 'calendar'),
	'acl_u_calendar_create_private_events'	=> array('lang' => 'Μπορεί να δημιουργήσει προσωπικά γεγονότα', 'cat' => 'calendar'),
	'acl_u_calendar_nonmember_groups'	=> array('lang' => 'Μπορεί να δημιουργήσει / επεξεργαστεί γεγονότα από ομάδες που δεν του ανήκουν ', 'cat' => 'calendar'),
	'acl_u_calendar_track_rsvps'	=> array('lang' => 'Μπορεί να δημιουργήσει γεγονότα με παρακολούθηση κομματιών', 'cat' => 'calendar'),
	'acl_u_calendar_allow_guests'	=> array('lang' => 'Μπορεί να δημιουργήσει γεγονότα επιτρέποντας τους επισκέπτες', 'cat' => 'calendar'),
	'acl_u_calendar_view_headcount'	=> array('lang' => 'Μπορεί να δει τον μετρητή του αριθμού των γεγονότων που δημιουργούνται από άλλα μέλη', 'cat' => 'calendar'),
	'acl_u_calendar_view_detailed_rsvps'	=> array('lang' => 'Μπορεί να δει λεπτομέρειες rsvps για γεγονότα από άλλα μέλη', 'cat' => 'calendar'),
	'acl_u_calendar_create_recurring_events'	=> array('lang' => 'Μπορεί να δημιουργήσει επαναλαμβανόμενα γεγονότα', 'cat' => 'calendar'),

));
// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_calendar_edit_other_users_events'	=> array('lang' => 'Μπορεί να επεξεργαστεί γεγονότα άλλων μελών', 'cat' => 'calendar'),
	'acl_m_calendar_delete_other_users_events'	=> array('lang' => 'Μπορεί να διαγράψει γεγονότα άλλων μελών', 'cat' => 'calendar'),
	'acl_m_calendar_edit_other_users_rsvps'	=> array('lang' => 'Μπορεί να επεξεργαστεί τις απαντήσεις που δημιουργούνται από άλλα μέλη', 'cat' => 'calendar'),
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_calendar'				=> array('lang' => 'Μπορεί να διαχειριστεί τις ρυθμίσεις ημερολογίου και να προσθέσει τύπους', 'cat' => 'calendar'),
));

?>