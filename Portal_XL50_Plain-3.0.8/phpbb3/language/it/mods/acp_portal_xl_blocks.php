<?php
/** 
*
* @name acp_portal_xl_blocks.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_blocks.php,v 1.3 2009/10/17 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
	'TITLE_BLOCKS'						=> 'Gestione blocchi portale',
	'TITLE_BLOCKS_EXPLAIN'				=> 'Puoi modificare/cancellare/spostare/cancellare blocchi e oggetti sul portale. Tutte le direzioni sono permesse per lo spostamento. Ci sono cinque colonne disponibili per posizionare il tuo blocco, sopra, sinistra, centro, destra e sotto. Le posizioni dei diversi blocchi sono gestibili nello stesso modo, come vedrai sulla tua pagina del portale. Entrambe le parti del blocco di gestione utilizzando gli stessi blocchi sono separati gli uni dagli altri, in modo che siano in grado di avere un diverso aspetto e sul portale indice/forum.',
  	'TITLE_BLOCKS_COLUMN_EXPLAIN'		=> 'Configurazione di sinistra e destra. Qui puoi modificare la tua colonna di sinistra e destra con le informazioni della pagina principale.',

	'TITLE_BLOCKS_INDEX' 				=> 'Gestione blocchi indice/forum/vedi messaggi',
	'TITLE_BLOCKS_INDEX_EXPLAIN'		=> 'Puoi modificare/cancellare/spostare/cancellare blocchi e oggetti sul portale. Tutte le direzioni sono permesse per lo spostamento. Ci sono cinque colonne disponibili per posizionare il tuo blocco, sopra, sinistra, centro, destra e sotto. Le posizioni dei differenti blocchi sono gestibili nello stesso modo, come vedrai nella tua pagina index/viewforum/viewtopic. Entrambe le parti del blocco di gestione utilizzano gli stessi blocchi e sono separati gli uni dagli altri, in modo che siano in grado di avere un diverso aspetto sul portale e in index/viewforum/viewtopic. <br /><br /><strong style="text-transform: uppercase;">Nota:</strong> Tieni presente di <strong>non</strong> di eliminare <strong>center_forumblock.html</strong> dalla gestione blocchi, altrimenti non tutti i forum saranno visibili!',
 	'TITLE_BLOCKS_INDEX_COLUMN_EXPLAIN'	=> 'Configurazione di sinistra e destra. Qui puoi modificare la tua colonna di sinistra e destra con le informazioni della pagina principale.',

	'TITLE_PAGES' 						=> 'Gestione pagine portale',
	'TITLE_PAGES_EXPLAIN'				=> 'Puoi modificare/cancellare/spostare/cancellare pagine e oggetti sul portale. Tutte le direzioni sono permesse per lo spostamento. Ci sono cinque colonne disponibili per posizionare le tue pagine, sopra, sinistra, centro, destra e sotto. Le posizioni delle diverse pagine sono gestibili nello stesso modo, come vedrai sulla tua pagina del portale.',
  	'TITLE_PAGES_COLUMN_EXPLAIN'		=> 'Configurazione di sinistra e destra. Qui puoi modificare la tua colonna di sinistra e destra con le informazioni della pagina principale.',

	'BLOCK_EDIT_HEADER'					=> 'Modifica/crea un blocco',
	'BLOCK_EDIT_HEADER_MAIN'			=> 'Gestione principale blocchi',
	'BLOCK_COLUMN_SETTINGS'				=> 'Larghezza colonna',
	'BLOCK_EDIT_COLUMN_SETTINGS'		=> 'Modifica/cambia larghezza colonna',

	'ADD_BLOCK'							=> 'Aggiungi blocco',
	'CANCEL'							=> 'Cancella',
	'PIXEL'								=> 'Pixel',
	'BLOCK_ACTIV'						=> 'Attivazione blocco',
	'BLOCK_ACTIVE'						=> 'Attivato',
	'BLOCK_ACTIV_EXPLAIN'				=> 'Vuoi visualizzare questo blocco Si/No?',
	'BLOCK_CENTRE'						=> 'Non disponibile',
	'BLOCK_HTML'						=> 'Html file',
	'BLOCK_HTML_EXPLAIN'				=> 'Seleziona un blocco predefinito (*.html file).',
	'BLOCK_NAME'						=> 'Nome del blocco',
	'BLOCK_NAME_EXPLAIN'				=> 'Unico nome per il tuo blocco. Questo nome verrà visualizzato nel titolo del tuo blocco.',
	'BLOCK_ORD'							=> 'Ordine',
	'BLOCK_ORDER'						=> 'Ordine',
	'BLOCK_POS'							=> 'Posizione',
	'BLOCK_REMOVED'						=> 'Blocco cancellato',
	'BLOCK_UPDATED'						=> 'Blocco aggiornato',
	'BLOCK_ADDED'						=> 'Blocco aggiunto',
	'BLOCK_CENTER'						=> 'Posizione centrale',
	'BLOCK_BOTTOM'						=> 'Posizione giù',
	'BLOCK_DISABLE_EX'					=> 'Blocco disattivato',
	'BLOCK_RIGHT'						=> 'Posizione destra',
	'BLOCK_LEFT'						=> 'Posizione sinistra',
	'BLOCK_TOP'						    => 'Posizione sù',
	'BLOCK_NAME_EDIT'					=> 'Modifica blocco',
	'BLOCK_ORD'							=> 'Ordine:',
	'BLOCK_ORD_EXPLAIN'					=> 'Definisci la colonna sulla quale questo blocco deve essere aggiunto. Opzioni possibili sono sù, sinistra, centro, destra e giù.',
	'BLOCK_POSITION'					=> 'Ultima posizione',
	'BLOCK_POSITION_EXPLAIN'			=> 'Seleziona la colonna qui sopra',
	'DISABLE_BLOCK'						=> 'Abilita blocco',
	'ENABLE_BLOCK'						=> 'Disabilita blocco',
	'ICON_DELETE'						=> 'L’eliminazione del tuo blocco è consentita, i blocchi predefiniti non possono essere eliminati.',
	'ICON_EDIT'							=> 'La modifica di un tuo blocco è consentita, i blocchi predefiniti non possono essere modificati.',
	'ICON_MOVE_BOTTOM'					=> 'Sposta in basso il blocco',
	'ICON_MOVE_BOTTOM_DIRECT'			=> 'Sposta in basso il blocco direttamente in fondo alla colonna',
	'ICON_MOVE_DOWN'					=> 'Sposta il blocco di una riga',
	'ICON_MOVE_LEFT'					=> 'Sposta il blocco nella colonna sulla tua sinistra',
	'ICON_MOVE_LEFT_DIRECT'				=> 'Sposta il blocco direttamente nella colonna più a sinistra',
	'ICON_MOVE_RIGHT'					=> 'Sposta il blocco nella colonna sulla tua destra',
	'ICON_MOVE_RIGHT_DIRECT'			=> 'Sposta il blocco direttamente nella colonna più a destra',
	'ICON_MOVE_TOP'						=> 'Sposta il blocco in alto alla colonna',
	'ICON_MOVE_TOP_DIRECT'				=> 'Sposta il blocco direttamente nella parte superiore della colonna',
	'ICON_MOVE_UP'						=> 'Sposta il blocco di una riga',
	'OPEN_ICON_PREVIEW'					=> 'Apri anteprima icona',
	'CLOSE_ICON_PREVIEW'				=> 'Chiudi anteprima icona',
	'MUST_SELECT_BLOCK'					=> 'Seleziona errore',
	'OFFLIGNE'							=> 'Blocco disattivato, per attivarlo clicca sull’icona',
	'ONLIGNE'							=> 'Blocco attivo, per disattivarlo clicca sull’icona',
	'RESET_INCLUDE_BLOCK'				=> 'Cancella',
	'SUBMIT_INCLUDE_BLOCK'				=> 'Salva',
	'PERMISSION' 						=> 'Permessi blocco',
	'PERMISSION_EXPLAIN' 				=> 'Vedi visibilità blocco:',
	'ADMIN'								=> 'Amministratore',
	'ALL'								=> 'Tutti',
	'GUESTS'							=> 'Ospiti',
	'MOD'								=> 'Moderatori',
	'NONE'								=> 'Non visualizzati',
	'REG'								=> 'Registrati',
	'STAFF'								=> 'Team',
	'URL_IMG_EXPLAIN'					=> 'Url immagine visualizzato nel menu links',
	'URL_IMG_EXPLAIN2'					=> 'Clicca sulla selezione immagine',
	'BLOCK_FNAME_INFO'		    		=> 'Mini icona selezionata',
	'BLOCK_FNAME_I_EXPLAIN'				=> 'Puoi vedere l’anteprima delle mini icone scegliendo da (immaggini posizionate in /portal/images/icon_menu/ se vuoi puoi aggiungere altre mini icone). Dimensione raccomandata di 16x16px.',
	'BLOCK_FNAME_I_CHOSEN'				=> 'Scegli mini immagine.',
    'CONFIG_UPDATED'					=> 'Configurazione aggiornata.',
    'CONFIG_ADDED'						=> 'Aggiunto alla configurazione.',

	'DELETE'							=> 'Cancella blocco',
	'EDIT'								=> 'Modifica blocco',
	'MOVE_BOTTOM'						=> 'Sposta giù un passo inferiore alla colonna',
	'MOVE_BOTTOM_DIRECT'				=> 'Sposta giù direttamente al fondo della colonna',
	'MOVE_DOWN'							=> 'Sposta giù di una riga',
	'MOVE_LEFT'							=> 'Sposta a sinistra',
	'MOVE_LEFT_DIRECT'					=> 'Sposta nella colonna di sinistra',
	'MOVE_RIGHT'						=> 'Sposta a destra',
	'MOVE_RIGHT_DIRECT'					=> 'Sposta nella colonna di destra',
	'MOVE_TOP'							=> 'Sposta su di uno step superiore alla colonna',
	'MOVE_TOP_DIRECT'					=> 'Sposta direttamente alla parte superiore della colonna',
	'MOVE_UP'							=> 'Sposta sù di una riga',

	'BLOCK_CONTENT'						=> 'Contenuto',
	'BLOCK_CONTENT_EXPLAIN'				=> 'Contenuto del blocco personalizzato. <br /><br /> Se utilizzi questo campo per personalizzare il tuo blocco devi scegliere <strong>blank_custom_block.html</strong> come file Html dal menu a discesa sotto l’opzione di visualizzare il contenuto in un blocco. <strong>blank_custom_block.html</strong> puoi scegliere quello di cui hai bisogno.',
	
	'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Larghezza colonna',
	'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Larghezza sinistra e destra',
	'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'Qui puoi modificare le informazioni relative alle colonne di sinistra e destra.',
	
	'PORTAL_LEFT_COLLUMN_WIDTH'                 	=> 'Larghezza colonna sinistra',
	'PORTAL_LEFT_COLLUMN_ACTIVE'                 => 'Colonna attiva di sinistra',
	'PORTAL_LEFT_COLLUMN_ACTIVE_EXPLAIN'         => 'Abilita/Disabilita colonna sinistra Si/No?',
	'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => 'Modifica la larghezza della colonna di sinistra in pixel, valore raccomandato 180',
	
	'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Larghezza colonna destra',
	'PORTAL_RIGHT_COLLUMN_ACTIVE'                => 'Colonna attiva di destra',
	'PORTAL_RIGHT_COLLUMN_ACTIVE_EXPLAIN'        => 'Abilita/Disabilita colonna destra Si/No?',
	'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => 'Modifica la larghezza della colonna di destra in pixel, valore raccomandato 180',
	
	'PORTAL_LAYOUT'                 			=> 'Layout portale',
	'PORTAL_LAYOUT_ACTIVE'                		=> 'Visualizza layout nel portale',
	'PORTAL_LAYOUT_EXPLAIN'        				=> 'Questo pulsante è in grado di accendere o spegnere le colonne di sinistra e destra con un solo clic senza l’uso delle opzioni di seguito indicate, la colonna centrale si ridimensiona. <br /> Abilita/Disabilita Si/No?',
	
	'PORTAL_INDEX_LAYOUT'                       => 'Indice layout',
	'PORTAL_INDEX_LAYOUT_ACTIVE'                => 'Visualizza la colonna layout sull’indice/su vedi forum/su vedi argomento',
	'PORTAL_INDEX_LAYOUT_EXPLAIN'        		=> 'Questo pulsante è in grado di accendere o spegnere le colonne a destra e sinistra con un solo clic senza l’uso delle opzioni di seguito indicate, la colonna centrale si ridimensiona. <br /> Abilita/Disabilita Si/No?',
	
	'PORTAL_PAGES_LAYOUT'                 		=> 'Layout pagine',
	'PORTAL_PAGES_LAYOUT_ACTIVE'                => 'Mostra colonna layout nelle pagine del portale',
	'PORTAL_PAGES_LAYOUT_EXPLAIN'        		=> 'Questo pulsante è in grado di accendere/spegnere le colonne a destra e sinistra di uno scatto senza l’uso delle opzioni. <br /> Attiva/Disattiva Si/No?',
	
	'PORTAL_PAGES_PAGE_ACTIVE'                 => 'Visualizza paginazione',
	'PORTAL_PAGES_PAGE_ACTIVE_EXPLAIN'         => 'Questa opzione attiva/disattiva la scelta di visualizzare una pagina singola o una paginazione di tutte le tue pagine. Se impostato su Si le pagine saranno raggruppate e numerate. Se viene creata più di una pagina utilizzando la funzione "Aggiungi pagina" tutte le pagine saranno raggruppate e impaginate.<br /> Attiva/Disattiva Si/No?',
	'PORTAL_PAGES_PAGE_ACTIVE_NUMBER'          => 'Pagina attiva',
	'PORTAL_PAGES_PAGE_ACTIVE_NUMBER_EXPLAIN'  => 'L’Id della pagina (è necessario indicare l’ID della pagina), separato da virgole per multi-pagine, es. 1,2,5. Non lasciare questo campo vuoto, anche 0 è richiesto. Successivamente le pagine saranno impaginate.',
	'PAGES_PAGE_ACTIVE'                        => 'Paginazione attivata',
	'PAGES_PAGE_ACTIVE_NUMBER'                 => 'Blocco ID pagina singola',
	'BLOCK_EDIT_PAGES_SETTINGS'        		   => 'Opzioni pagina singola',

));

?>