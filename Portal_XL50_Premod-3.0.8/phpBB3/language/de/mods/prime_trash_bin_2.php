<?php
/**
*
* prime_trash_bin_2 [German]
*
* @package language
* @version $Id: prime_trash_bin_2.php,v 1.0.5 2008/08/23 17:01:00 primehalo Exp $
* @copyright (c) 2007 Ken F. Innes IV
* @translation 2007 German by Thilak
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
	'LOG_TOPIC_DELETED'		=> '<strong>Endg&uuml;ltig gel&ouml;schtes Thema</strong><br />» %s',
	'LOG_DELETE_TOPIC'		=> '<strong>Endg&uuml;ltig gel&ouml;schter Beitrag</strong><br />» %s',
	'LOG_DELETE_POST'		=> '<strong>Endg&uuml;ltig gel&ouml;schter Beitrag</strong><br />» %s',
	
	// New
	'LOG_TOPIC_STIFLED'		=> '<strong>Gel&ouml;schtes Thema</strong><br />» %1$s',
	'LOG_TOPIC_TRASHED'		=> '<strong>In den Papierkorb gel&ouml;schtes Thema</strong><br />» %1$s',
	'LOG_TOPIC_UNSTIFLED'	=> '<strong>Wiederhergestelltes Thema</strong><br />» %1$s',
	
	'LOG_POST_STIFLED'		=> '<strong>Gel&ouml;schter Beitrag</strong><br />» %1$s',
	'LOG_POST_TRASHED'		=> '<strong>In den Papierkorb gel&ouml;schter Beitrag</strong><br />» %1$s',
	'LOG_POST_UNSTIFLED'	=> '<strong>Wiederhergestellter Beitrag</strong><br />» %1$s',
));

$lang = array_merge($lang, array(
	'LOG_TOPIC_STIFLED_2'	=> $lang['LOG_TOPIC_STIFLED'] . '<br />» » <strong>Grund:</strong> %2$s',
	'LOG_TOPIC_TRASHED_2'	=> $lang['LOG_TOPIC_TRASHED'] . '<br />» » <strong>Grund:</strong> %2$s',
	'LOG_TOPIC_UNSTIFLED_2'	=> $lang['LOG_TOPIC_UNSTIFLED'] . '<br />» » <strong>Grund:</strong> %2$s',
	
	'LOG_POST_STIFLED_2'	=> $lang['LOG_POST_STIFLED'] . '<br />» » <strong>Grund:</strong> %2$s',
	'LOG_POST_TRASHED_2'	=> $lang['LOG_POST_TRASHED'] . '<br />» » <strong>Grund:</strong> %2$s',
	'LOG_POST_UNSTIFLED_2'	=> $lang['LOG_POST_UNSTIFLED'] . '<br />» » <strong>Grund:</strong> %2$s',
));


// Administration
$lang = array_merge($lang, array(
	'PRIME_FAKE_DELETE'					=> 'Themen L&ouml;schen',
	'PRIME_FAKE_DELETE_EXPLAIN'			=> 'Legt fest, wie Themen gel&ouml;scht werden.',
	'PRIME_FAKE_DELETE_DISABLE'			=> 'Thema endg&uuml;ltig l&ouml;schen',
	'PRIME_FAKE_DELETE_ENABLE'			=> 'Thema behalten und als gel&ouml;scht markieren',
	'PRIME_FAKE_DELETE_AUTO_TRASH'		=> 'In Papierkorb verschieben',
	'PRIME_FAKE_DELETE_SHADOW_ON'		=> 'In Papierkorb verschieben und einen Link im Forum behalten',
	'PRIME_FAKE_DELETE_SHADOW_OFF'		=> 'In Papierkorb verschieben ohne Link im Forum',

	'PRIME_TRASH_FORUM'					=> 'Papierkorb',
	'PRIME_TRASH_FORUM_EXPLAIN'			=> 'Falls markiert, werden gel&ouml;schte Themen in dieses Forum verschoben. L&ouml;schen von Themen im Papierkorb entfernt diese endg&uuml;ltig.',
	'PRIME_TRASH_FORUM_DISABLE'			=> 'Keinen Papierkorb verwenden',
	'PRIME_TRASH_FORUM_DIVIDER'			=> '---------------------------',
	'PRIME_NO_TRASH_FORUM_ERROR'		=> 'Du musst ein Papierkorb-Forum festlegen, um die "%s" Option zu verwenden',

	'PRIME_FOREVER_WHEN_DELETE_USER'	=> 'Dauerhaft l&ouml;schen',
));

// Moderation
$lang = array_merge($lang, array(

	// Topics - Deleting
	'PRIME_DELETE_TOPIC_REASON'			=> 'Bitte einen Grund f&uuml;r die L&ouml;schung angeben',
	'PRIME_DELETE_TOPIC_FOREVER'		=> 'Dieses Thema endg&uuml;ltig l&ouml;schen',
	'PRIME_DELETE_TOPICS_FOREVER'		=> 'Diese Themen endg&uuml;ltig l&ouml;schen',
	'PRIME_DELETE_TO_TRASH_BIN'			=> 'Dieses Thema ins Papierkorb-Forum verschieben',
	'PRIME_DELETE_TOPIC_FOREVER_DENIED'	=> 'In diesem Forum kannst du keine Themen endg&uuml;ltig l&ouml;schen.',
	'PRIME_DELETE_TOPIC_MIX_NOTICE'		=> 'Achtung: Das hat keine Auswirkung auf Themen, die schon als gel&ouml;scht angezeigt werden.',

	// Topics - Deleted
	'PRIME_DELETED_TOPIC_SUCCESS'		=> 'Das ausgew&auml;hlte Thema wurde erfolgreich als gel&ouml;scht gekennzeichnet.',
	'PRIME_DELETED_TOPICS_SUCCESS'		=> 'Die ausgew&auml;hlten Themen wurden erfolgreich als gel&ouml;scht gekennzeichnet.',
	'PRIME_DELETED_TOPIC_FAILURE'		=> 'Das ausgew&auml;hlte Thema wurde erfolgreich als gel&ouml;scht gekennzeichnet.',
	'PRIME_DELETED_TOPICS_FAILURE'		=> 'Die ausgew&auml;hlten Themen wurden erfolgreich als gel&ouml;scht gekennzeichnet.',

	// Topics - Deleted to Trash Bin
	'PRIME_TRASHED_TOPIC_SUCCESS'		=> 'Das ausgew&auml;hlte Thema wurde erfolgreich ins Papierkorb-Forum verschoben.',
	'PRIME_TRASHED_TOPICS_SUCCESS'		=> 'Die ausgew&auml;hlten Themen wurden erfolgreich in den Papierkorb-Forum verschoben.',
	'PRIME_TRASHED_TOPIC_FAILURE'		=> 'Das ausgew&auml;hlte Thema wurde NICHT ins Papierkorb-Forum verschoben.',
	'PRIME_TRASHED_TOPICS_FAILURE'		=> 'Die ausgew&auml;hlten Themen wurde NICHT ins Papierkorb-Forum verschoben.',
	'PRIME_GO_TO_TRASH_BIN'				=> '%sIns Papierkorb-Forum%s',

	// Topics - Undeleting
	'PRIME_UNDELETE_TOPICS'				=> 'Wiederherstellen',
	'PRIME_UNDELETE_TOPIC_REASON'		=> 'Bitte einen Grund f&uuml;r die Wiederherstellung angeben',
	'PRIME_UNDELETE_TOPIC_CONFIRM'		=> 'Sicher? Das Thema wiederherstellen ?',
	'PRIME_UNDELETE_TOPICS_CONFIRM'		=> 'Sicher? Die Themen wiederherstellen ??',
	'PRIME_UNDELETE_TOPICS_UNNEEDED'	=> 'Die ausgew&auml;hlten Themen k&ouml;nnen nicht wiederhergestellt werden.',


	// Topics - Undeleted
	'PRIME_UNDELETED_TOPIC_SUCCESS'		=> 'Das ausgew&auml;hlte Thema wurde erfolgreich wiederhergestellt.',
	'PRIME_UNDELETED_TOPICS_SUCCESS'	=> 'Die ausgew&auml;hlte Themen wurde erfolgreich wiederhergestellt.',
	'PRIME_UNDELETED_TOPIC_FAILURE'		=> 'Das Thema wurde NICHT wiederhergestellt.',
	'PRIME_UNDELETED_TOPICS_FAILURE'	=> 'Die Themen wurden NICHT wiederhergestellt.',

	// Posts - Deleting
	'PRIME_DELETE_POST_REASON'			=> 'Bitte einen Grund f&uuml;r das L&ouml;schen angeben',
	'PRIME_DELETE_POST_FOREVER'			=> 'Beitrag endg&uuml;ltig l&ouml;schen',
	'PRIME_DELETE_POSTS_FOREVER'		=> 'Beitr&auml;ge endg&uuml;ltig l&ouml;schen',
	'PRIME_DELETE_POST_FOREVER_DENIED'	=> 'Du kannst keine Beitr&auml;ge in diesem Forum endg&uuml;ltig l&ouml;schen.',
	'PRIME_DELETE_POST_MIX_NOTICE'		=> 'Achtung ! Das hat keine Auswirkung auf Beitr&auml;ge, die schon als gel&ouml;scht angezeigt werden.',

	// Posts - Deleted
	'PRIME_DELETED_POST_SUCCESS'		=> 'Der ausgew&auml;hlte Beitrag wurde erfolgreich als gel&ouml;scht gekennzeichnet.',
	'PRIME_DELETED_POSTS_SUCCESS'		=> 'Die ausgew&auml;hlten Beitr&auml;ge wurde erfolgreich als gel&ouml;scht gekennzeichnet.',
	'PRIME_DELETED_POST_FAILURE'		=> 'Der ausgew&auml;hlte Beitrag wurde NICHT als gel&ouml;scht gekennzeichnet.',
	'PRIME_DELETED_POSTS_FAILURE'		=> 'Die ausgew&auml;hlten Beitr&auml;ge wurde NICHT als gel&ouml;scht gekennzeichnet.',

	// Posts - Undeleting
	'PRIME_UNDELETE_POST'				=> 'Beitrag wiederherstellen',
	'PRIME_UNDELETE_POSTS'				=> 'Beitr&auml;ge wiederherstellen',
	'PRIME_UNDELETE_POST_REASON'		=> 'Bitte einen Grund f&uuml;r die Wiederherstellung angeben',
	'PRIME_UNDELETE_POST_CONFIRM'		=> 'Sicher ? Diesen Beitrag wiederherstellen ?',
	'PRIME_UNDELETE_POSTS_CONFIRM'		=> 'Sicher ? Diese Beitr&auml;ge wiederherstellen ?',
	'PRIME_UNDELETE_POSTS_UNNEEDED'		=> 'Der ausgew&auml;hlte Beitrag kann nicht wiederhergestellt werden.',

	// Posts - Undeleted
	'PRIME_UNDELETED_POST_SUCCESS'		=> 'Der ausgew&auml;hlte Beitrag wurde erfolgreich wiederhergestellt.',
	'PRIME_UNDELETED_POSTS_SUCCESS'		=> 'Die ausgew&auml;hlten Beitr&auml;ge wurden erfolgreich wiederhergestellt.',
	'PRIME_UNDELETED_POST_FAILURE'		=> 'Der ausgew&auml;hlte Beitrag wurde NICHT wiederhergestellt.',
	'PRIME_UNDELETED_POSTS_FAILURE'		=> 'Die ausgew&auml;hlten Beitr&auml;ge wurden NICHT wiederhergestellt.',
));

?>