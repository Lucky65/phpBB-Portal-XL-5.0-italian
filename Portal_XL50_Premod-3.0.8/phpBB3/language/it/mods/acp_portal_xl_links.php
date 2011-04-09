<?php
/** 
*
* @name acp_portal_xl_links.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_links.php,v 1.1.1.1 2009/05/15 05:15:57 damysterious Exp $
* @copyright (c) 2007, 2009  Portal XL Group
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

$lang = array_merge($lang, array(   
	'TITLE' 					=> 'Gestione links',
	'TITLE_EXPLAIN'				=> 'Con questo modulo puoi creare/modifica/spostare/cancellare/ un link personalizzato. Questo menu può essere abiliato o disabilitato nel portale -> Generale -> Links. Le icone per l’uso in questo menu sono posizionate nella directory /portal/images/icon_links/. La dimensione raccomandata è di 16x16px. Aggiungi quante icone vuoi, ma tieni presente che l’anteprima le mostrerà tutte. Il percorso è quello directory radice, cioè "http://www.yourdomain.com/" per utilizzare un link esterno.',
 
	'PORTAL_LINKS_EDIT_HEADER'	=> 'Modifica link',
	'ACP_LINKS_EXPLAIN'			=> 'Gestione links del portale',
	'ACP_PORTAL_LINKS'			=> 'Gestione links',
	'ACTION'					=> 'Azione',
	'ADD_URL'					=> 'Aggiungi un link',
	'ADMIN'						=> 'Amministratore',
	'ALL'						=> 'Tutti',
	'GUESTS'					=> 'Ospiti',
	'LINKS_ADDED'				=> 'Link aggiunto',
	'LINKS_REMOVED'				=> 'Link eliminato',
	'LINKS_UPDATED'				=> 'Link aggiornato',
	'MOD'						=> 'Moderatore',
	'MUST_SELECT_LINKS'			=> 'Seleziona',
	'NAME_LINK'					=> 'Nome link',
	'NAME_URL_EXPLAIN'			=> 'Nome link visualizzato nel blocco links',
	'NONE'						=> 'Nessuna visualizzazione',
	'REG'						=> 'Registrati',
	'RESET_LINKS'				=> 'Cancella',
	'STAFF'						=> 'Team',
	'URL_EXPLAIN'				=> 'Apertura url in una nuova finestra',
	'URL_EXPLAIN_2'				=> 'L’url può essere scritto come segue. Esempio : <br>index.php per links interni, <br>http://google.com per links esterni',
	'URL_IMG'					=> 'Url icona visualizzata',
	'URL_IMG_2'					=> 'Mini icona',
	'URL_IMG_EXPLAIN'			=> 'Url immagine visualizzata',
	'URL_IMG_EXPLAIN2'			=> 'Clicca per selezionare l’immaggine',
	'URL_LINK'					=> 'Url link',
	'VIEW_BY'					=> 'Visibile a',
	'VIEW_BY_EXPLAIN'			=> 'Determina la visibilità dei links nel portale',
	'LINKS_FNAME_INFO'		    => 'Mini icona selezionata',
	'LINKS_FNAME_I_EXPLAIN'		=> 'Per vedere un’anteprima delle mini icone puoi sceglierle (imaggini posizionate in /portal/images/icon_menu/ e se ti piacciono puoi aggiungere quelle che più ti piacciono). La dimensione raccomandata è di 16x16px.',
	'LINKS_FNAME_I_CHOSEN'		=> 'Scegli le mini icone.',
		
   ));

?>