<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: common.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'AVAILABLE_FEEDS'				=> 'Feeds disponibili',

	'BLOG'							=> 'Blog',
	'BLOGS'							=> 'Blogs',
	'BLOG_CONTROL_PANEL'			=> 'Pannello di controllo blog',
	'BLOG_CREDITS'					=> 'Blogs powered by <a href="http://www.lithiumstudios.org/">User Blog Mod</a> &copy; EXreaction',
	'BLOG_CREDITS_TRANSLATOR' 	    => 'Traduzione Italiana "User Blog Mod by EXreaction" a cura di <a href="http://www.portalxl.eu/">portalxl.eu</a>',
	'BLOG_DELETED_BY_MSG'			=> 'Questo blog è stato cancellato da %1$s su %2$s.  Clicca <b>%3$squi%4$s</b> per ripristinare questo blog.',
	'BLOG_DESCRIPTION'				=> 'Descrizione blog',
	'BLOG_LINKS'					=> 'Links blog',
	'BLOG_MCP'						=> 'Pannello moderatore blog',
	'BLOG_NOT_EXIST'				=> 'La voce blog richiesta non esiste.',
	'BLOG_SEARCH_BACKEND_NOT_EXIST'	=> 'La ricerca seleziona non è stata trovata.  Contatta un amministratore o moderatore.',
	'BLOG_STATS'					=> 'Statistiche blog',
	'BLOG_SUBJECT'					=> 'Oggetto blog',
	'BLOG_TITLE'					=> 'Titolo blog',

	'CATEGORIES'					=> 'Categorie',
	'CATEGORY'						=> 'Categoria',
	'CATEGORY_DESCRIPTION'			=> 'Descrizione categoria',
	'CATEGORY_NAME'					=> 'Nome categoria',
	'CATEGORY_RULES'				=> 'Regole categoria',
	'CLICK_INSTALL_BLOG'			=> 'Clicca %squi%s per installare il mod blog utente',
	'CNT_BLOGS'						=> '%s voci blog',
	'CNT_REPLIES'					=> '%s risposte',
	'CNT_VIEWS'						=> 'Visto %s volte',
	'CONTINUE'						=> 'Continua',
	'CONTINUED'						=> 'Leggi il resto',

	'DELETE_BLOG'					=> 'Cancella voce blog',
	'DELETE_REPLY'					=> 'Cancella commento',

	'EDIT_BLOG'						=> 'Modifiva voce blog',
	'EDIT_REPLY'					=> 'Modifica risposta',

	'FEED'							=> 'Feed',
	'FOE_PERMISSIONS'				=> 'Permessi ignorati',
	'FRIEND_PERMISSIONS'			=> 'Permessi amici',

	'GUEST_PERMISSIONS'				=> 'Permessi ospiti',

	'LIMIT'							=> 'Limite',

	'MUST_BE_FOUNDER'				=> 'Devi essere un amministratore per accedere a questa pagina.',
	'MY_BLOG'						=> 'Mio blog',

	'NEW_BLOG'						=> 'Nuova voce blog',
	'NO_BLOGS'						=> 'Non risultano voci blog.',
	'NO_BLOGS_USER'					=> 'Questo utente non ha inviato nessuna voce blog.',
	'NO_BLOGS_USER_SORT_DAYS'		=> 'Questo utente non ha inviato nessuna voce blog nell’ultimo %s',
	'NO_CATEGORIES'					=> 'Non risultano categorie',
	'NO_CATEGORY'					=> 'La categoria selezionata non esiste.',
	'NO_PERMISSIONS_READ'			=> 'Non hai i permessi per leggere questo blog.',
	'NO_REPLIES'					=> 'Non ci sono commenti.',

	'ONE_BLOG'						=> '1 blog',
	'ONE_REPLY'						=> '1 commento',
	'ONE_VIEW'						=> 'Visto 1 volta',

	'PERMANENT_LINK'				=> 'Link permanente',
	'PLUGIN_TEMPLATE_MISSING'		=> 'Il file template non esiste.',
	'POPULAR_BLOGS'					=> 'Voci blog popolari',
	'POST_A_NEW_BLOG'				=> 'Scrivi voce blog',
	'POST_A_NEW_REPLY'				=> 'Scrivi un commento',

	'RANDOM_BLOGS'					=> 'Voci blog casuali',
	'RECENT_BLOGS'					=> 'Voci blog recenti',
	'REGISTERED_PERMISSIONS'		=> 'Permessi utenti',
	'REPLIES'						=> 'Commenti',
	'REPLY'							=> 'Commento',
	'REPLY_COUNT'					=> 'Conteggio commenti',
	'REPLY_DELETED_BY_MSG'			=> 'Questo commento è stato cancellato da %1$s su %2$s.  Clicca <b>%3$squi%4$s</b> per ripristinare questo commento.',
	'REPLY_NOT_EXIST'				=> 'La risposta richiesta non esiste.',
	'REPORT_BLOG'					=> 'Segnalazione voce blog',
	'REPORT_REPLY'					=> 'Segnalazione commento',
	'RETURN_BLOG_MAIN'				=> '%1$sTorna a %2$ blog%3$s',
	'RETURN_BLOG_OWN'				=> '%sRitorna al tuo blog%s',
	'RETURN_MAIN'					=> 'Clicca %squi%s per tornare alla pagina principale blog utente',

	'SEARCH_BLOGS'					=> 'Ricerca blogs',
	'SUBSCRIBE'						=> 'Sottoscrivi',
	'SUBSCRIBE_BLOG'				=> 'Sottoscrivi questo blog',
	'SUBSCRIBE_USER'				=> 'Sottoscrivi questo blog utente',
	'SUBSCRIPTION'					=> 'Sottoscrizione',
	'SUBSCRIPTION_EXPLAIN'			=> 'Seleziona come perferisci le notifiche di questo blog.',
	'SUBSCRIPTION_EXPLAIN_REPLY'	=> 'Se hai già sottoscritto questo blog, le opzioni attuali della tua sottoscrizione sono mostrate (tutto quello che si seleziona sarà selezionato come nuovo abbonamento).',

	'TOTAL_BLOG_ENTRIES'			=> 'Totale voci blog',

	'UNSUBSCRIBE'					=> 'Elimina sottoscrizione',
	'UNSUBSCRIBE_BLOG'				=> 'Elimina sottoscrizione per questo blog',
	'UNSUBSCRIBE_USER'				=> 'Elimina sottoscrizione per questo utente',
	'USERNAMES_BLOGS'				=> '%s blog',
	'USERNAMES_DELETED_BLOGS'		=> '%s voci cancellate',
	'USER_BLOGS'					=> 'Blog utente',
	'USER_BLOG_MOD_DISABLED'		=> 'Questo blog utente è disattivato.',
	'USER_BLOG_RATINGS_DISABLED'	=> 'Il sistema di voti è disattivato.',

	'VIEW_BLOG'						=> 'Vedi blogs',
	'VIEW_REPLY'					=> 'Vedi risposte',

	'WARNING'						=> 'Attenzione',
));

?>