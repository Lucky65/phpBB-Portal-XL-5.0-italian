<?php
/**
*
* prime_post_revisions [Italian]
*
* @package language
* @version $Id: prime_post_revisions.php,v 1.2.0 2008/07/21 13:45:00 primehalo Exp $
* @copyright (c) 2007-2008 Ken F. Innes IV
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
	// Viewing posts
	'PRIME_POST_REVISIONS_VIEW'				=> 'Vedi lo storico messaggi.',	// Text for the link to view the revision history

	// Viewing revisions
	'PRIME_POST_REVISIONS_VIEWING'			=> 'Vedi storico messaggi',
	'PRIME_POST_REVISIONS_VIEWING_EXPLAIN'	=> 'Questa pagina mostra tutte le versioni di questo messaggio, inizia con la versione più recente.',
	'PRIME_POST_REVISIONS_TITLE'			=> 'Vedi storico messaggio: %s',	// The %s is the post title
	'PRIME_POST_REVISIONS_FIRST'			=> 'Messaggio originale: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_FINAL'			=> 'Attuale messaggio: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_COUNT'			=> 'Revisione %d: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_INFO'				=> 'Modificato da  %1$s on %2$s.',
	'PRIME_POST_REVISIONS_NO_SUBJECT'		=> '[nessun oggetto]',	

	// Delete a revision
	'PRIME_POST_REVISIONS_DELETE'			=> 'Cancella revisione',
	'PRIME_POST_REVISIONS_DELETE_CONFIRM'	=> 'Sei sicuro di voler cancellare questa revisione?',
	'PRIME_POST_REVISIONS_DELETE_DENIED'	=> 'Non hai i permessi necessari per cancellare questa revisione.',
	'PRIME_POST_REVISIONS_DELETE_FAILED'	=> 'Si è verificato un errore durante il tentativo di eliminare la revisione.',
	'PRIME_POST_REVISIONS_DELETE_SUCCESS'	=> 'La revisione è stata eliminata con successo.',
	'PRIME_POST_REVISIONS_DELETE_INVALID'	=> 'Nessuna revisione è stata seleziona per l’eliminazione.',

	// Delete all revisions
	'PRIME_POST_REVISIONS_DELETES'			=> 'Cancella tutte le revisioni.',
	'PRIME_POST_REVISIONS_DELETES_CONFIRM'	=> 'Sei sicuro di voler cancellare queste revisioni?',
	'PRIME_POST_REVISIONS_DELETES_DENIED'	=> 'Non hai i permessi necessari per cancellare queste revisioni.',
	'PRIME_POST_REVISIONS_DELETES_FAILED'	=> 'Si è verificato un errore durante il tentativo di eliminare le revisioni.',
	'PRIME_POST_REVISIONS_DELETES_SUCCESS'	=> 'Le revisioni sono state eliminate con successo.',
	'PRIME_POST_REVISIONS_DELETES_INVALID'	=> 'Nessuna revisione è stata seleziona per l’eliminazione.',
));

?>