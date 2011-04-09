<?php
/**
*
* permissions_calendar [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @author alightner
*
* @package phpBB Calendar
* @version CVS/SVN: $Id: $
* @copyright (c) 2009 alightner
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Adding new category
$lang['permission_cat']['kalendár'] = 'Kalendár';

// Adding new permission set
$lang['permission_type']['kalendár_'] = 'Nastavenie Oprávnení';


// User Permissions
$lang = array_merge($lang, array(
	'acl_u_calendar_view_events'	=> array('lang' => 'Môže prezerať udalosti', 'cat' => 'kalendár'),
	'acl_u_calendar_create_events'	=> array('lang' => 'Môže vytvárať udalosti', 'cat' => 'kalendár'),
	'acl_u_calendar_edit_events'	=> array('lang' => 'Môže upravovať udalosti', 'cat' => 'kalendár'),
	'acl_u_calendar_delete_events'	=> array('lang' => 'Môže vymazať udalosti', 'cat' => 'kalendár'),
	'acl_u_calendar_create_public_events'	=> array('lang' => 'Môže vytvoriť verejné podujatia', 'cat' => 'kalendár'),
	'acl_u_calendar_create_group_events'	=> array('lang' => 'Môže vytvoriť skupinu udalostí', 'cat' => 'kalendár'),
	'acl_u_calendar_create_private_events'	=> array('lang' => 'Môžu vytvárať súkromné udalostí', 'cat' => 'kalendár'),
	'acl_u_calendar_nonmember_groups'	=> array('lang' => 'Môže vytvárať, upravovať a udalostí pre skupiny, ktoré nie sú členmi', 'cat' => 'kalendár'),
	'acl_u_calendar_track_rsvps'	=> array('lang' => 'Môže vytvárať udalosti, sledovanie prezentácii', 'cat' => 'kalendár'),
	'acl_u_calendar_allow_guests'	=> array('lang' => 'Môže vytvárať udalosti, s hosťami mimo povolenia', 'cat' => 'kalendár'),
	'acl_u_calendar_view_headcount'	=> array('lang' => 'Môže si prezerať hlavné body  udalosti vytvorené ďalšími užívateľmi', 'cat' => 'kalendár'),
	'acl_u_calendar_view_detailed_rsvps'	=> array('lang' => 'Môže si prezerať podrobne udalosti vytvorené ďalšími užívateľmi', 'cat' => 'kalendár'),
	'acl_u_calendar_create_recurring_events'	=> array('lang' => 'Môže vytvoriť opakované udalosti', 'cat' => 'kalendár'),

));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_calendar_edit_other_users_events'	=> array('lang' => 'Môže upravovať udalosti vytvorené iným uživateľom', 'cat' => 'kalendár'),
	'acl_m_calendar_delete_other_users_events'	=> array('lang' => 'Môže vymazať udalosti vytvorené iným uživateľom', 'cat' => 'kalendár'),
	'acl_m_calendar_edit_other_users_rsvps'	=> array('lang' => 'Môže editovať odpovede vytvorené iným užívateľm', 'cat' => 'kalendár'),
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_calendar'				=> array('lang' => 'Môže prestavovať nastavenie kalendára a typy udalosti', 'cat' => 'kalendár'),
));

?>
