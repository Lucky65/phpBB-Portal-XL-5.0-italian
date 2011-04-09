<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: misc.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
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
	'ALREADY_SUBSCRIBED'		=> 'Už ste zaradený.',

	'BLOG_USER_NOT_PROVIDED'	=> 'Musíte zadať ID užívateľa alebo ID blogu položky, ktorú chcete prihlásiť do sledovania.',

	'NOT_ALLOWED_CHANGE_VOTE'	=> 'Nie je povolené zmeniť už zadané hlasovanie.',
	'NOT_SUBSCRIBED'			=> 'Nie ste prihlásený.',

	'RESYNC_BLOG'				=> 'Synchronizovať Blog',
	'RESYNC_BLOG_CONFIRM'		=> 'Ste si istí, mám obnoviť synchronizáciov všetky dáta na blogu? Výkon môže chvíľu trvať.',
	'RESYNC_BLOG_SUCCESS'		=> 'Uživateľský Blog bol úspešne resynchronizovaný.',

	'SEARCH_BLOG_ONLY'			=> 'Hľadať len Blogy',
	'SEARCH_BLOG_TITLE_ONLY'	=> 'Hľadať len názvy',
	'SEARCH_TITLE_MSG'			=> 'Hľadať názvy správ',
	'SUBSCRIBE_BLOG_CONFIRM'	=> 'Ako odošlem oznámenie, keď je pridaná nová reakcia do tohto blogu?',
	'SUBSCRIBE_BLOG_TITLE'		=> 'Sledovanie Blogu',
	'SUBSCRIPTION_ADDED'		=> 'Sledovanie bolo úspešne pridané.',
	'SUBSCRIPTION_REMOVED'		=> 'Sledovanie bolo úspešne odstránené',

	'UNSUBSCRIBE_BLOG_CONFIRM'	=> 'Ste si istí, mám vás odstrániť zo sledovania tohto blogu?',
	'UNSUBSCRIBE_USER_CONFIRM'	=> 'Ste si istí, mám odstrániť z vášho zadania zchválenie príspevkov od tohto užívateľa?',
));

?>