<?php
/**
*
* prime_trash_bin_2 [Italian]
*
* @package language
* @version $Id: prime_trash_bin_2.php,v 1.0.5 2008/08/23 17:01:00 primehalo Exp $
* @copyright (c) 2007 Ken F. Innes IV
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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
	'LOG_TOPIC_DELETED'		=> '<strong>Argomento definitivamente cancellato</strong><br />» %s',
	'LOG_DELETE_TOPIC'		=> '<strong>Argomento definitivamente cancellato</strong><br />» %s',
	'LOG_DELETE_POST'		=> '<strong>Messaggio definitivamente cancellato</strong><br />» %s',

	// New
	'LOG_TOPIC_STIFLED'		=> '<strong>Argomento cancellato</strong><br />» %1$s',
	'LOG_TOPIC_TRASHED'		=> '<strong>Argomento cancellato dal cestino</strong><br />» %1$s',
	'LOG_TOPIC_UNSTIFLED'	=> '<strong>Argomenti cancellati</strong><br />» %1$s',

	'LOG_POST_STIFLED'		=> '<strong>Messaggio cancellato</strong><br />» %1$s',
	'LOG_POST_TRASHED'		=> '<strong>Messaggio cancellato dal cestino</strong><br />» %1$s',
	'LOG_POST_UNSTIFLED'	=> '<strong>Messaggi cancellati</strong><br />» %1$s',
));

$lang = array_merge($lang, array(
	'LOG_TOPIC_STIFLED_2'	=> $lang['LOG_TOPIC_STIFLED'] . '<br />» » <strong>Ragione:</strong> %2$s',
	'LOG_TOPIC_TRASHED_2'	=> $lang['LOG_TOPIC_TRASHED'] . '<br />» » <strong>Ragione:</strong> %2$s',
	'LOG_TOPIC_UNSTIFLED_2'	=> $lang['LOG_TOPIC_UNSTIFLED'] . '<br />» » <strong>Ragione:</strong> %2$s',

	'LOG_POST_STIFLED_2'	=> $lang['LOG_POST_STIFLED'] . '<br />» » <strong>Ragione:</strong> %2$s',
	'LOG_POST_TRASHED_2'	=> $lang['LOG_POST_TRASHED'] . '<br />» » <strong>Ragione:</strong> %2$s',
	'LOG_POST_UNSTIFLED_2'	=> $lang['LOG_POST_UNSTIFLED'] . '<br />» » <strong>Ragione:</strong> %2$s',
));


// Administration
$lang = array_merge($lang, array(
	'PRIME_FAKE_DELETE'					=> 'Cancellazione Argomenti',
	'PRIME_FAKE_DELETE_EXPLAIN'			=> 'Determina come gli argomenti devono essere cancellati.',
	'PRIME_FAKE_DELETE_DISABLE'			=> 'Cancella definitivamente argomento',
	'PRIME_FAKE_DELETE_ENABLE'			=> 'Segna argomento come cancellato',
	'PRIME_FAKE_DELETE_AUTO_TRASH'		=> 'Sposta argomento nel cestino',
	'PRIME_FAKE_DELETE_SHADOW_ON'		=> 'Sposta nel cestino con ombreggiatura',
	'PRIME_FAKE_DELETE_SHADOW_OFF'		=> 'Sposta nel cestino senza ombreggiatura',

	'PRIME_TRASH_FORUM'					=> 'Cestino Forum',
	'PRIME_TRASH_FORUM_EXPLAIN'			=> 'Se selezionato, cancellando un’argomento verr&agrave spostato da questo forum. Cancellando un argomento dal cestino esso sar&agrave cancellato definitivamente.',
	'PRIME_TRASH_FORUM_DISABLE'			=> 'Non usare cestino',
	'PRIME_TRASH_FORUM_DIVIDER'			=> '---------------------------',
	'PRIME_NO_TRASH_FORUM_ERROR'		=> 'Devi selezionare un forum cestino quando scegli l’opzione "%s"',

	'PRIME_FOREVER_WHEN_DELETE_USER'	=> 'Messaggi cancellati definitivamente',
));

// Moderation
$lang = array_merge($lang, array(

	// Topics - Deleting
	'PRIME_DELETE_TOPIC_REASON'			=> 'Aggiungi una ragione per la cancellazione',
	'PRIME_DELETE_TOPIC_FOREVER'		=> 'Cancella definitivamente questo argomento',
	'PRIME_DELETE_TOPICS_FOREVER'		=> 'Cancella definitivamente questi argomenti',
	'PRIME_DELETE_TO_TRASH_BIN'			=> 'Sposta argomento nel cestino',
	'PRIME_DELETE_TOPIC_FOREVER_DENIED'	=> 'Non puoi cancellare completamente argomenti da questo forum.',
	'PRIME_DELETE_TOPIC_MIX_NOTICE'		=> 'Nota: Eventuali argomenti che sono gi&agrave segnati come eliminati non verranno modificati.',

	// Topics - Deleted
	'PRIME_DELETED_TOPIC_SUCCESS'		=> 'L’argomento scelto è stato contrassegnato come eliminato.',
	'PRIME_DELETED_TOPICS_SUCCESS'		=> 'Gli argomenti scelti sono stati contrassegnati come eliminati.',
	'PRIME_DELETED_TOPIC_FAILURE'		=> 'L’argomento scelto non è stato contrassegnato come eliminato.',
	'PRIME_DELETED_TOPICS_FAILURE'		=> 'Gli argomenti scelti non sono stati contrassegnati come eliminati.',

	// Topics - Deleted to Trash Bin
	'PRIME_TRASHED_TOPIC_SUCCESS'		=> 'L’argomento scelto è stato spostato nel cestino.',
	'PRIME_TRASHED_TOPICS_SUCCESS'		=> 'Gli argomenti scelti sono stati spostati nel cestino.',
	'PRIME_TRASHED_TOPIC_FAILURE'		=> 'L’argomento scelto non è stato spostato nel cestino.',
	'PRIME_TRASHED_TOPICS_FAILURE'		=> 'Gli argomenti scelti non sono stati spostati nel cestino.',
	'PRIME_GO_TO_TRASH_BIN'				=> '%sVai al cestino del forum%s',

	// Topics - Undeleting
	'PRIME_UNDELETE_TOPICS'				=> 'Ripristina',
	'PRIME_UNDELETE_TOPIC_REASON'		=> 'Aggiungi la ragione per ripristinare la cancellazione.',
	'PRIME_UNDELETE_TOPIC_CONFIRM'		=> 'Sei sicuro di voler ripristinare questo argomento?',
	'PRIME_UNDELETE_TOPICS_CONFIRM'		=> 'Sei sicuro di voler ripristinare questi argomenti?',
	'PRIME_UNDELETE_TOPICS_UNNEEDED'	=> 'Gli argomenti selezionati non possono essere ripristinati.',


	// Topics - Undeleted
	'PRIME_UNDELETED_TOPIC_SUCCESS'		=> 'L’argomento selezionato è stato ripristinato.',
	'PRIME_UNDELETED_TOPICS_SUCCESS'	=> 'Gli argomenti selezionati sono stati ripristinati.',
	'PRIME_UNDELETED_TOPIC_FAILURE'		=> 'L’argomento selezionato non è stato ripristinato.',
	'PRIME_UNDELETED_TOPICS_FAILURE'	=> 'Gli argomenti selezionati non sono stati ripristinati.',

	// Posts - Deleting
	'PRIME_DELETE_POST_REASON'			=> 'Aggiungi una ragione per l’eliminazione',
	'PRIME_DELETE_POST_FOREVER'			=> 'Elimina definitivamente questo messaggio',
	'PRIME_DELETE_POSTS_FOREVER'		=> 'Elimina definitivamente questi messaggi',
	'PRIME_DELETE_POST_FOREVER_DENIED'	=> 'Non puoi eliminare definitivamente argomenti in questo forum.',
	'PRIME_DELETE_POST_MIX_NOTICE'		=> 'Nota: Eventuali argomenti che sono gi&agrave segnati come eliminati non verranno modificati.',

	// Posts - Deleted
	'PRIME_DELETED_POST_SUCCESS'		=> 'Il messaggio selezionato è stato marcato come eliminato.',
	'PRIME_DELETED_POSTS_SUCCESS'		=> 'I messaggi selezionati sono stati marcati come eliminati.',
	'PRIME_DELETED_POST_FAILURE'		=> 'Il messaggio selezionato non è stato marcato come eliminato.',
	'PRIME_DELETED_POSTS_FAILURE'		=> 'I messaggi selezionati sono stati marcati come eliminati.',

	// Posts - Undeleting
	'PRIME_UNDELETE_POST'				=> 'Ripristina messaggio',
	'PRIME_UNDELETE_POSTS'				=> 'Ripristina messaggi',
	'PRIME_UNDELETE_POST_REASON'		=> 'Aggiungi la ragione per ripristinare la cancellazione.',
	'PRIME_UNDELETE_POST_CONFIRM'		=> 'Sei sicuro di voler ripristinare questo messaggio?',
	'PRIME_UNDELETE_POSTS_CONFIRM'		=> 'Sei sicuro di voler ripristinare questi messaggi?',
	'PRIME_UNDELETE_POSTS_UNNEEDED'		=> 'I messaggi selezionati non possono essere ripristinati.',

	// Posts - Undeleted
	'PRIME_UNDELETED_POST_SUCCESS'		=> 'Il messaggio selezionato è stato ripristinato.',
	'PRIME_UNDELETED_POSTS_SUCCESS'		=> 'I messaggi selezionati sono stati ripristinati.',
	'PRIME_UNDELETED_POST_FAILURE'		=> 'Il messaggio selezionato non è stato ripristinato.',
	'PRIME_UNDELETED_POSTS_FAILURE'		=> 'I messaggi selezionati non sono stati ripristinati.',

));

?>