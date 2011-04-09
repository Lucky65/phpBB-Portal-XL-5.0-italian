<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: view.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/06/26
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
	'AVERAGE_OF_RATING'				=> 'Media di %s voti',
	'AVERAGE_OF_RATINGS'			=> 'Media di %s votazioni',

	'CLICK_HERE_SHOW_POST'			=> 'Clicca qui per mostrare i messaggi.',
	'CNT_COMMENTS'					=> '%s Commenti',
	'COMMENTS'						=> 'Commenti',

	'DELETED_REPLY_SHOW'			=> 'Questo commento è stato eliminato.  Clicca qui per visualizzare il commento.',

	'LAST_VISIT_BLOGS'				=> 'Articoli blog dall’ultima visita',

	'MY_RATING'						=> 'Miei votazioni',

	'NO_DELETED_BLOGS'				=> 'Non risultano voci blog per questo utente.',
	'NO_DELETED_BLOGS_SORT_DAYS'	=> 'Non risultano voci cancellate scritte da questo utente negli ultimi %s.',

	'ONE_COMMENT'					=> '1 Commento',

	'POSTED_BY_FOE'					=> 'Questo messaggio è stato creato da %s che è attualmente nella lista di persone da ignorare',

	'RANDOM_BLOG'					=> 'Voci casuali blog',
	'RATE_ME'						=> '%1$s fuori di %2$s',
	'RECENT_COMMENTS'				=> 'Commenti recenti',
	'REMOVE_RATING'					=> 'Azzera votazioni',
	'REPLY_SHOW_NO_JS'				=> 'Devi aver attivato Javascript per vedere il messaggio.',
	'REPORTED'						=> 'Per questo messaggio è stato efeettuato un rapporto.  Clicca qui per chiudere il rapporto.',
	'REPORTED_SHORT'				=> 'Segnalazioni',

	'SUBCATEGORIES'					=> 'Sotto categorie',
	'SUBCATEGORY'					=> 'Sotto categorie',

	'TOTAL_NUMBER_OF_BLOGS'			=> 'Totale voci',
	'TOTAL_NUMBER_OF_REPLIES'		=> 'Totale commenti',

	'UNAPPROVED'					=> 'Questo messaggio necessita di approvazione.  Clicca qui per approvarlo.',

));

?>