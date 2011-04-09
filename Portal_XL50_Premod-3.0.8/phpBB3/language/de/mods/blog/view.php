<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: view.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $ 
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* German translation Version 1.0.7 by FatFreddy (http://www.mebitco.de)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'AVERAGE_OF_RATING'				=> 'Durchschnitt aus %s Bewertung',
	'AVERAGE_OF_RATINGS'			=> 'Durchschnitt aus %s Bewertungen',

	'CLICK_HERE_SHOW_POST'			=> 'Hier klicken um den Beitrag zu zeigen.',
	'CNT_COMMENTS'					=> '%s Kommentare',
	'COMMENTS'						=> 'Kommentare',

	'DELETED_REPLY_SHOW'			=> 'Dieser Kommentar ist soft deleted.  Klicke hier, um den Kommentar zu zeigen.',

	'LAST_VISIT_BLOGS'				=> 'Blogeintr&auml;ge seit dem letzten Besuch',  
	
	'MY_RATING'						=> 'Meine Bewertung',

	'NO_DELETED_BLOGS'				=> 'Von diesem Nutzer gibt es keine gel&ouml;schten Blogeintr&auml;ge.',
	'NO_DELETED_BLOGS_SORT_DAYS'	=> 'Von diesem Nutzer gibt es keine Beitr&auml;ge, die in den letzten %s gel&ouml;scht wurden.',

	'ONE_COMMENT'					=> '1 Kommentar',

	'POSTED_BY_FOE'					=> 'Dieser Eintrag ist von %s, der momentan auf deiner Ignorierliste steht.',

	'RANDOM_BLOG'					=> 'zuf&auml;lliger Blogeintrag',
	'RATE_ME'						=> '%1$s von %2$s',
	'RECENT_COMMENTS'				=> 'neueste Kommentare',
	'REMOVE_RATING'					=> 'Bewertung zur&uuml;cksetzen',
	'REPLY_SHOW_NO_JS'				=> 'Du mu&szlig;t Javascript aktivieren um diesen Beitrag zu sehen.',
	'REPORTED'						=> 'Dieser Beitrag wurde gemeldet.  Klicke hier, um die Meldung zu schlie&szlig;en.',
	'REPORTED_SHORT'				=> 'Reported',

	'SUBCATEGORIES'					=> 'Unterkategorien',
	'SUBCATEGORY'					=> 'Unterkategorie',

	'TOTAL_NUMBER_OF_BLOGS'			=> 'Eintr&auml;ge insgesamt',
	'TOTAL_NUMBER_OF_REPLIES'		=> 'Kommentare insgesamt',

	'UNAPPROVED'					=> 'Dieser Eintrag mu&szlig; freigegeben werden. Klicke hier, um diesen Eintrag freizugeben.',
));

?>