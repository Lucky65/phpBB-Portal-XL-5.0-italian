<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: misc.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $ 
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
	'ALREADY_SUBSCRIBED'		=> 'Du hast die Beobachtung bereits aktiviert.',

	'BLOG_USER_NOT_PROVIDED'	=> 'Du must die User_id oder Blog_id des Objektes angeben, welches Du beobachten m&ouml;chtest.',

	'NOT_ALLOWED_CHANGE_VOTE'	=> 'Du kannst deine Abstimmung nicht &auml;ndern.',
	'NOT_SUBSCRIBED'			=> 'Du hast die Beobachtung nicht aktiviert.',

	'RESYNC_BLOG'				=> 'Blog synchronisieren',
	'RESYNC_BLOG_CONFIRM'		=> 'Bist Du sicher, da&szlig; Du all Blogdaten neu synchronisieren willst?  Dieser Vorgang kann eine Weile dauern.',
	'RESYNC_BLOG_SUCCESS'		=> 'Der User Blog Mod wurde erfolgreich neu synchronisiert.',

	'SEARCH_BLOG_ONLY'			=> 'nur Blogs durchsuchen',
	'SEARCH_BLOG_TITLE_ONLY'	=> 'nur Titel durchsuchen',
	'SEARCH_TITLE_MSG'			=> 'Titel und Text durchsuchen',
	'SUBSCRIBE_BLOG_CONFIRM'	=> 'Wie m&ouml;chtest Du &uuml;ber neue Kommentare zu diesem Blogeintrag informiert werden?',
	'SUBSCRIBE_BLOG_TITLE'		=> 'Blog beobachten',
	'SUBSCRIPTION_ADDED'		=> 'Du wirst &uuml;ber neue Eintr&auml;ge informiert.',
	'SUBSCRIPTION_REMOVED'		=> 'Du wirst nicht mehr &uuml;ber neue Eintr&auml;ge informiert.',

	'UNSUBSCRIBE_BLOG_CONFIRM'	=> 'Bist Du sicher, da&szlig; Du dieses Blog nicht mehr beobachten m&ouml;chtest?',
	'UNSUBSCRIBE_USER_CONFIRM'	=> 'Bist Du sicher, da&szlig; Du diesen User nicht mehr beobachten m&ouml;chtest?',
));

?>