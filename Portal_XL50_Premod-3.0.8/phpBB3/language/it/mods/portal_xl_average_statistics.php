<?php
/** 
*
* @name portal_xl_average_statistics.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl_average_statistics.php,v 1.1.1.1 2009/05/15 05:16:04 damysterious Exp $
* @copyright (c) 2007, 2009  Portal XL Group
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
**/

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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TOPICS_PER_DAY_OTHER'	=> 'Argomenti del giorno: <strong>%d</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Argomenti del giorno: <strong>0</strong>',
	'POSTS_PER_DAY_OTHER'	=> 'Messaggi del giorno: <strong>%d</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Messaggi del giorno: <strong>0</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Utenti del giorno: <strong>%d</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Utenti del giorno: <strong>0</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Argomenti per utente: <strong>%d</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Argomenti per utente: <strong>0</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Messaggi per utente: <strong>%d</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Messaggi per utente: <strong>0</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Messaggi per argomento: <strong>%d</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Messaggi per argomento: <strong>0</strong>',
));
?>