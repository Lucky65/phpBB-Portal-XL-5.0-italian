<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: ucp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/13
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
	'BLOG_CSS'								=> 'Blog CSS',
	'BLOG_CSS_EXPLAIN'						=> 'Qui è possibile inserire il codice CSS che desideri formattare per cambiare lo stile del tuo blog e per avere l’aspetto desiderato',
	'BLOG_INSTANT_REDIRECT'					=> 'Redirect instantaneo',
	'BLOG_INSTANT_REDIRECT_EXPLAIN'			=> 'Questo valore imposta l’utente sul blog per reindirizzare alla pagina successiva invece di visualizzare la pagina informazioni.',
	'BLOG_STYLE'							=> 'Stile blog',
	'BLOG_STYLE_EXPLAIN'					=> 'Seleziona lo stile visualizzato per il tuo blog.<br />Se questo stile ha un * dopo il nome puoi inserire il tuo CSS per personalizzare ulteriormente (se hai i permessi necessari).',

	'NONE'									=> 'Nessuno',
	'NO_PERMISSIONS'						=> 'Impossibile leggere o rispondere alle tue voci blog.',

	'REPLY_PERMISSIONS'						=> 'Puoi leggere o rispondere alle tue voci blog.',
	'RESYNC_PERMISSIONS'					=> 'Sincronizza permessi',
	'RESYNC_PERMISSIONS_EXPLAIN'			=> 'Seleziona questa opzione per sincronizzare tutte i permessi voci blog',

	'SUBSCRIPTION_DEFAULT'					=> 'Sottoscrizione default:',
	'SUBSCRIPTION_DEFAULT_EXPLAIN'			=> 'Seleziona quali tipi di abbonamento desideri ricevere per impostazione predefinita quando ci sono nuovi commenti su un blog. E’ possibile impostare questo su ogni messaggio.',

	'UCP_BLOG_PERMISSIONS_EXPLAIN'			=> 'Qui puoi modificare i permessi per questo blog.<br />Le impostazioni globali sovrascrivono le attuali impostazioni.',
	'UCP_BLOG_SETTINGS_EXPLAIN'				=> '',
	'UCP_BLOG_TITLE_DESCRIPTION_EXPLAIN'	=> 'Qui puoi impostare il titolo e la descrizione per questo blog.',
	'USER_PERMISSIONS_DISABLED'				=> 'I permessi utenti sono stati disabilitati dagli amminstratori.',

	'VIEW_PERMISSIONS'						=> 'Puoi leggere le tue voci blog.',
));

?>