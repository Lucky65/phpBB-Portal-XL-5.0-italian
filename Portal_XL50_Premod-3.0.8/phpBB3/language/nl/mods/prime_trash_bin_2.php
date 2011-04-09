<?php
/**
*
* prime_trash_bin_2 [Dutch]
*
* @package language
* @version $Id: prime_trash_bin_2.php,v 1.0.5 2008/08/23 17:01:00 primehalo Exp $
* @copyright (c) 2007 Ken F. Innes IV
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

//Logs
$lang = array_merge($lang, array(
	// Overwrite
	'LOG_TOPIC_DELETED'		=> '<strong>Topic definitief verwijderd</strong><br />» %s',
	'LOG_DELETE_TOPIC'		=> '<strong>Topic definitief verwijderd</strong><br />» %s',
	'LOG_DELETE_POST'		=> '<strong>Post definitief verwijderd</strong><br />» %s',

	// New
	'LOG_TOPIC_STIFLED'		=> '<strong>Verwijderd topic</strong><br />» %1$s',
	'LOG_TOPIC_TRASHED'		=> '<strong>Verwijderd topic naar de prullenbak</strong><br />» %1$s',
	'LOG_TOPIC_UNSTIFLED'	=> '<strong>Hersteld topic</strong><br />» %1$s',

	'LOG_POST_STIFLED'		=> '<strong>Verwijderd post</strong><br />» %1$s',
	'LOG_POST_TRASHED'		=> '<strong>Verwijderd post naar de prullenbak</strong><br />» %1$s',
	'LOG_POST_UNSTIFLED'	=> '<strong>Hersteld post</strong><br />» %1$s',
));

$lang = array_merge($lang, array(
	'LOG_TOPIC_STIFLED_2'	=> $lang['LOG_TOPIC_STIFLED'] . '<br />» » <strong>Reden:</strong> %2$s',
	'LOG_TOPIC_TRASHED_2'	=> $lang['LOG_TOPIC_TRASHED'] . '<br />» » <strong>Reden:</strong> %2$s',
	'LOG_TOPIC_UNSTIFLED_2'	=> $lang['LOG_TOPIC_UNSTIFLED'] . '<br />» » <strong>Reden:</strong> %2$s',

	'LOG_POST_STIFLED_2'	=> $lang['LOG_POST_STIFLED'] . '<br />» » <strong>Reden:</strong> %2$s',
	'LOG_POST_TRASHED_2'	=> $lang['LOG_POST_TRASHED'] . '<br />» » <strong>Reden:</strong> %2$s',
	'LOG_POST_UNSTIFLED_2'	=> $lang['LOG_POST_UNSTIFLED'] . '<br />» » <strong>Reden:</strong> %2$s',
));


// Administration
$lang = array_merge($lang, array(
	'PRIME_FAKE_DELETE'					=> 'Verwijdering van topics',
	'PRIME_FAKE_DELETE_EXPLAIN'			=> 'Bepaalt hoe topics verwijderd worden.',
	'PRIME_FAKE_DELETE_DISABLE'			=> 'Verwijder topic definitief',
	'PRIME_FAKE_DELETE_ENABLE'			=> 'Behoud topic en markeer als verwijderd', 
	'PRIME_FAKE_DELETE_AUTO_TRASH'		=> 'Verplaats topic naar de prullenbak',
	'PRIME_FAKE_DELETE_SHADOW_ON'		=> 'Verplaats naar de prullenbak met een schaduw',
	'PRIME_FAKE_DELETE_SHADOW_OFF'		=> 'Verplaats naar de prullenbak zonder een schaduw',

	'PRIME_TRASH_FORUM'					=> 'Prullenbak',
	'PRIME_TRASH_FORUM_EXPLAIN'			=> 'Een topic dat verwijderd wordt zal naar dit forumdeel verplaatst worden. Het verwijderen van een topic in de prullenbak verwijdert het definitief.',
	'PRIME_TRASH_FORUM_DISABLE'			=> 'Gebruik de prullenbak niet',
	'PRIME_TRASH_FORUM_DIVIDER'			=> '---------------------------',
	'PRIME_NO_TRASH_FORUM_ERROR'		=> 'U moet een prullenbak-forumdeel selecteren als je de "%s" optie wilt gebruiken',

	'PRIME_FOREVER_WHEN_DELETE_USER'	=> 'Verwijder posts definitief',
));

// Moderation
$lang = array_merge($lang, array(

	// Topics - Deleting
	'PRIME_DELETE_TOPIC_REASON'			=> 'Gelieve een reden in te voeren voor de verwijdering',
	'PRIME_DELETE_TOPIC_FOREVER'		=> 'Verwijder dit topic definitief',
	'PRIME_DELETE_TOPICS_FOREVER'		=> 'Verwijder deze topics definitief',
	'PRIME_DELETE_TO_TRASH_BIN'			=> 'Verplaats topic naar de prullenbak',
	'PRIME_DELETE_TOPIC_FOREVER_DENIED'	=> 'Je kan topics naar definitief verwijderen in dit forumdeel.',
	'PRIME_DELETE_TOPIC_MIX_NOTICE'		=> 'Opmerking: Elk topic dat al gemarkeerd is als verwijderd zal geen wijzigingen ondergaan.',

	// Topics - Deleted
	'PRIME_DELETED_TOPIC_SUCCESS'		=> 'Het geselecteerde topic is succesvol gemarkeerd als verwijderd.',
	'PRIME_DELETED_TOPICS_SUCCESS'		=> 'De geselecteerde topics zijn succesvol gemarkeerd als verwijderd.',
	'PRIME_DELETED_TOPIC_FAILURE'		=> 'Het geselecteerde topic is NIET gemarkeerd als verwijderd.',
	'PRIME_DELETED_TOPICS_FAILURE'		=> 'De geselecteerde topics zijn NIET gemarkeerd als verwijderd.',

	// Topics - Deleted to Trash Bin
	'PRIME_TRASHED_TOPIC_SUCCESS'		=> 'Het selecteerde topic is succesvol verplaatst naar de prullenbak.',
	'PRIME_TRASHED_TOPICS_SUCCESS'		=> 'De geselecteerde topics zijn succesvol verplaatst naar de prullenbak.',
	'PRIME_TRASHED_TOPIC_FAILURE'		=> 'Het geselecteerde topic is NIET verplaatst naar de prullenbak.',
	'PRIME_TRASHED_TOPICS_FAILURE'		=> 'De geselecteerde topics zijn NIET verplaatst naar de prullenbak.',
	'PRIME_GO_TO_TRASH_BIN'				=> '%sGa naar de prullenbak%s',

	// Topics - Undeleting
	'PRIME_UNDELETE_TOPICS'				=> 'Herstel',
	'PRIME_UNDELETE_TOPIC_REASON'		=> 'Gelieve een reden in te voeren voor de omkering van de verwijdering',
	'PRIME_UNDELETE_TOPIC_CONFIRM'		=> 'Ben je zeker dat je dit topic wilt herstellen?',
	'PRIME_UNDELETE_TOPICS_CONFIRM'		=> 'Ben je zeker dat je deze topics wilt herstellen?',
	'PRIME_UNDELETE_TOPICS_UNNEEDED'	=> 'De geselecteerde topics kunnen niet hersteld worden.',


	// Topics - Undeleted
	'PRIME_UNDELETED_TOPIC_SUCCESS'		=> 'Het geselecteerde topic is succesvol hersteld.',
	'PRIME_UNDELETED_TOPICS_SUCCESS'	=> 'De geselecteerde topics zijn succesvol hersteld.',
	'PRIME_UNDELETED_TOPIC_FAILURE'		=> 'Het geselecteerde topic is NIET hersteld.',
	'PRIME_UNDELETED_TOPICS_FAILURE'	=> 'De geselecteerde topics zijn NIET hersteld.',

	// Posts - Deleting
	'PRIME_DELETE_POST_REASON'			=> 'Gelieve een reden in te voeren voor de verwijdering',
	'PRIME_DELETE_POST_FOREVER'			=> 'Verwijder deze post definitief',
	'PRIME_DELETE_POSTS_FOREVER'		=> 'Verwijder deze posts definitief',
	'PRIME_DELETE_POST_FOREVER_DENIED'	=> 'Je kan geen posts definitief verwijderen in dit forumdeel.',
	'PRIME_DELETE_POST_MIX_NOTICE'		=> 'Opmerking: Elke post dat al gemarkeerd is als verwijderd zal geen wijzigingen ondergaan.',

	// Posts - Deleted
	'PRIME_DELETED_POST_SUCCESS'		=> 'De geselecteerde post is succesvol gemarkeerd als verwijderd.',
	'PRIME_DELETED_POSTS_SUCCESS'		=> 'De geselecteerde posts zijn succesvol gemarkeerd als verwijderd.',
	'PRIME_DELETED_POST_FAILURE'		=> 'De geselecteerde post is NIET gemarkeerd als verwijderd.',
	'PRIME_DELETED_POSTS_FAILURE'		=> 'De geselecteerde posts zijn NIET gemarkeerd als verwijderd.',

	// Posts - Undeleting
	'PRIME_UNDELETE_POST'				=> 'Herstel post',
	'PRIME_UNDELETE_POSTS'				=> 'Herstel posts',
	'PRIME_UNDELETE_POST_REASON'		=> 'Gelieve een reden in te voeren voor de omkering van de verwijdering',
	'PRIME_UNDELETE_POST_CONFIRM'		=> 'Ben je zeker dat je deze post wilt herstellen?',
	'PRIME_UNDELETE_POSTS_CONFIRM'		=> 'Ben je zeker dat je deze posts wilt herstellen?',
	'PRIME_UNDELETE_POSTS_UNNEEDED'		=> 'De geselecteerde posts kunnen niet hersteld worden.',

	// Posts - Undeleted
	'PRIME_UNDELETED_POST_SUCCESS'		=> 'De geselecteerde post is succesvol hersteld.',
	'PRIME_UNDELETED_POSTS_SUCCESS'		=> 'De geselecteerde posts zijn succesvol hersteld.',
	'PRIME_UNDELETED_POST_FAILURE'		=> 'De geselecteerde post is NIET hersteld.',
	'PRIME_UNDELETED_POSTS_FAILURE'		=> 'De geselecteerde posts zijn NIET hersteld.',

));

?>