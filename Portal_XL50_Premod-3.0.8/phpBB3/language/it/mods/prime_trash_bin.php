<?php
/**
*
* prime_trash_bin [Italian]
*
* @package language
* @version $Id: prime_trash_bin.php,v 1.0.6 2008/08/26 16:25:00 primehalo Exp $
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

$lang = array_merge($lang, array(
	// General
	'PRIME_DELETED'					=> 'Eliminato',
	'PRIME_DELETED_FROM'			=> 'da',
	'PRIME_DELETED_BY'				=> 'da',
	'PRIME_DELETED_ON'				=> 'il',

	// Deleted Topic
	'PRIME_TOPIC_DELETED_TITLE'		=> '[Eliminato]',
	'PRIME_TOPIC_DELETED_TITLE_SEP'	=> ' ', // Separator between PRIME_TOPIC_DELETED_TITLE and the topic title (only displayed if topic title is displayed)
	'PRIME_TOPIC_DELETED_MSG'		=> 'Questo argomento è stato eliminato',
	'PRIME_TOPIC_UNDELETE'			=> 'Ripristina questo argomento',
	'PRIME_TOPIC_DELETE_FOREVER'	=> 'Elimina definitivamento questo argomento',

	// Deleted Post
	'PRIME_POST_DELETED_REASON'		=> 'Ragione per l’eliminazione',
	'PRIME_POST_DELETED_TITLE'		=> '[Eliminato]',
	'PRIME_POST_DELETED_TITLE_SEP'	=> ' ', // Separator between PRIME_POST_DELETED_TITLE and the post subject (only displayed if post subject is displayed)
	'PRIME_POST_DELETED_MSG'		=> 'Questo messaggio è stato eliminato',
	'PRIME_POST_UNDELETE'			=> 'Ripristina questo messaggio',
	'PRIME_POST_DELETE_FOREVER'		=> 'Elimina definitivamento questo messaggio',
	'PRIME_VIEW_DELETED_POST'		=> 'Vedi messaggio cancellato',
	'PRIME_HIDE_DELETED_POST'		=> 'Nascondi messaggio cancellato',

	//Quickmod
	'PRIME_QM_TOPIC_UNDELETE'		=> 'Ripristina argomento',
	'PRIME_QM_TOPIC_DELETE_FOREVER'	=> 'Elimina definitivamente argomento',

));

?>