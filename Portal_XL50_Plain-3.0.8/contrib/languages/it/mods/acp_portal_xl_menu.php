<?php
/** 
*
* @name acp_portal_xl_menu.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_menu.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @copyright (c) 2009, 2010 luckylab.eu - upgrade translation for portal xl on 2010/08/09
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
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
	'TITLE' 					=> 'Gestione menu di navigazione',
	'TITLE_EXPLAIN'				=> 'Con questo modulo puoi creare/modificare/spostare/cancellare/ un link personalizzato. Questo menu può essere abilitato o disabilitato. Questo menu può essere abilitato/disabilitato in Portale -> Blocchi portale -> per la gestione dei blocchi per il solo portale -> Gestione blocchi forum -> per la gestione dei blocchi visualizzati nel forum. Le icone per l’uso in questo menu sono posizionate nella directory /portal/images/icon_menu/. La dimensione raccomandata è di 16x16px. Aggiungi quante icone vuoi, ma tieni presente che l’anteprima le mostrerà tutte. Il percorso è quello della directory radice, es. "http://www.yourdomain.com/" per un link esterno. I links interni possono essere aggiunti come "portal.php" per accedere ad una determinata pagina del tuo sito, o "memberlist.php?mode=leaders" per accedere ad alcune funzioni o pagine speciali del tuo forum nel menu di navigazione.',
 
	'PORTAL_MENUS_EDIT_HEADER'	=> 'Modifica menu',
	'ACP_MENU_EXPLAIN'			=> 'Gestione menu visualizzato nel portale',
	'ACP_PORTAL_MENU'			=> 'Gestione menu',
	'ACTION'					=> 'Azione',
	'ADD_URL'					=> 'Aggiungi menu',		
	'ADMIN'						=> 'Amministratore',			
	'ALL'						=> 'Tutti',
	'GUESTS'					=> 'Ospiti',	
	'MENU_ADDED'				=> 'Link aggiunto',
	'MENU_REMOVED'				=> 'Link eliminato',			
	'MENU_UPDATED'				=> 'Link aggiornato',
	'ADMIN'						=> 'Amministratore',
	'MOD'						=> 'Moderatore',
	'MUST_SELECT_LINKS'			=> 'Seleziona',
	'NAME_LINK'					=> 'Nome link',
	'NAME_URL_EXPLAIN'			=> 'Nome link visualizzato nel blocco links',
	'NONE'						=> 'Nessuna visualizzazione',
	'REG'						=> 'Registrati',
	'RESET_MENU'				=> 'Cancella',		
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
	'LINKS_FNAME_INFO'		    => 'Mini icone disponibili',
	'LINKS_FNAME_I_EXPLAIN'		=> 'Per vedere un’anteprima delle mini icone puoi sceglierle (imaggini posizionate in /portal/images/icon_menu/ e se ti piacciono puoi aggiungere quelle che più ti piacciono). La dimensione raccomandata è di 16x16px.',
    'MENU_FNAME_I_CHOSEN' => 'Mini icona selezionata',
	'LINKS_FNAME_I_CHOSEN'		=> 'Scegli le mini icone.',
	'OPEN_IN'					=> 'Aperto in',
	'OPEN_IN_EXPLAIN'			=> 'Determina come questi links devono essere aperti. <br />Si = nuova finestra, No = stessa finestra',
	'OPEN_IN_BLANK'				=> 'Nuova finestra',
	'OPEN_IN_SAME'				=> 'Stessa finestra',
		
   ));

?>