<?php
/** 
*
* @name acp_portal_xl_banners.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_banners.php,v 1.3 2009/10/18 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/16
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
	'TITLE_PARTNERS' 				=> 'Gestione partners 88x31px',
	'TITLE_PARTNERS_EXPLAIN'		=> 'Puoi creare/modificare/cancellare i partners.<br /> Il percorso è quello relativo alla root del forum, es. "http://www.yourdomain.com/" per un link esterno. Links interni ai banners possono essere aggiunti come "portal/images/banners/88x31/yourdomain.com.gif". L’immagine massima è di 88x31 pixel, le immagini più grandi saranno ridimensionate automaticamente al valore. Puoi aggiungere altri parametri, selezionare un limite casuale per visualizzare il tuo logo.',
 
 	'TITLE_HO' 						=> 'Gestione partners orizzontali 400x60px',
	'TITLE_HO_EXPLAIN'				=> 'Puoi creare/modificare/cancellare i partners. <br /> Il percorso è quello relativo alla root del forum, es. "http://www.yourdomain.com/", ad esempio "portal/images/banners/400x60/yourdomain.com.gif" per banner orizzontali. La dimensione massima è di 400x60px, le immagini più grandi saranno ridimensionate automaticamente al valore. Puoi aggiungere altri parametri selezionare un limite casuale per visualizzare il tuo logo.',

	'TITLE_VE' 						=> 'Gestione banners verticali 130x600px',
	'TITLE_VE_EXPLAIN'				=> 'Puoi creare/modificare/cancellare i partners. <br /> Il percorso è quello relativo alla root del forum, es. "http://www.yourdomain.com/", ad esempio "portal/images/banners/130x600/yourdomain.com.gif" per banner verticali. La dimensione massima è di 130x600px, le immagini più grandi saranno ridimensionate automaticamente al valore. Puoi aggiungere altri parametri selezionare un limite casuale per visualizzare il tuo logo.',
	
	'PORTAL_PARTNERS_EDIT_HEADER'	=> 'Aggiungi o modifica partner',
	'ACP_MANAGE_PARTNERS'			=> 'Aggiungi o modifica partner',
	'ACP_PARTNERS'					=> 'Gestione Partners',
	'ACP_PARTNERS_EXPLAIN'			=> 'Aggiungi, modifica, cancella un partner',
	'ADD_PARTNERS'					=> 'Aggiungi partner',
	'MUST_SELECT_PARTNERS'			=> 'Seleziona partner',
	'PARTNERS'						=> 'Partners',	
	'PARTNERS_ADDED'				=> 'Partner aggiunto',
	'PARTNERS_DESCRIPTION'			=> 'Descrizione',
	'PARTNERS_DESCRIPTION_EXPLAIN'	=> 'La descrizione partner deve rispettare le direttive del tema utilizzato.',
	'PARTNERS_IMG'			        => 'Logo url',
	'PARTNERS_IMG_EXPLAIN'			=> 'Partner Logo url, il percorso è quello relativo alla root del forum, es. "http://www.yourdomain.com/"',
	'PARTNERS_LOGO'					=> 'Logo (88x31px)',
	'PARTNERS_REMOVED'				=> 'Partner eliminato',
	'PARTNERS_UPDATED'				=> 'Partner modificato',
	'PARTNERS_URL'					=> 'Url sito',
	'PARTNERS_URL_EXPLAIN'			=> 'Partner url sito, il percorso è quello relativo alla root del forum, es. "http://www.yourdomain.com/"',
	'RESET_PARTNERS' 				=> 'Annulla',

	'PORTAL_PARTNERS_DISPLAY' 			=> 'Visualizza valori casuali',
	'PORTAL_PARTNERS_DISPLAY_EXPLAIN' 	=> 'Seleziona quanti banners vuoi mostrare nel blocco.',
	'PORTAL_PARTNERS_DISPLAY_VALUE' 	=> 'Visualizzati banners simultanei',
	
	'PORTAL_BANNERS_EDIT_HEADER'	=> 'Aggiungi o modifica partner',
	'ACP_MANAGE_BANNERS'			=> 'Aggiungi o modifica banner',
	'ACP_BANNERS'					=> 'Gestione banners ',
	'ACP_BANNERS_EXPLAIN'			=> 'Aggiungi, modifica, cancella banner',
	'ADD_BANNERS'					=> 'Aggiungi banner',
	'MUST_SELECT_BANNERS'			=> 'Seleziona banner',
	'BANNERS'						=> 'Banners',
	'BANNERS_ADDED'					=> 'Banner aggiunto',
	'BANNERS_DESCRIPTION'			=> 'Descrizione',
	'BANNERS_DESCRIPTION_EXPLAIN'	=> 'La descrizione banner deve rispettare le direttive del tema utilizzato.',
	'BANNERS_IMG_EXPLAIN'			=> 'Banner logo url, il percorso è quello relativo alla root del forum, es. "http://www.yourdomain.com/"',
	'BANNERS_REMOVED'				=> 'Banner eliminato',
	'BANNERS_UPDATED'				=> 'Banner modificato',
	'BANNERS_URL'					=> 'Url sito',
	'BANNERS_URL_EXPLAIN'			=> 'Banner url sito, il percorso è quello relativo alla root del forum, es. "http://www.yourdomain.com/"',
	'RESET_BANNERS' 				=> 'Annulla',
	
	'BANNERS_IMG_HO'			    => 'Url logo horizzontale 400x60px',
	'BANNERS_LOGO_HO'				=> 'Logo (400x60px)',

	'BANNERS_IMG_VE'			    => 'Url logo verticale 130x600px',
	'BANNERS_LOGO_VE'				=> 'Logo (130x600px)',
	
));

?>