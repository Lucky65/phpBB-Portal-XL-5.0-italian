<?php
/**
*
* Knowledge Base [Italian]
* @author Tobi Schaefer http://www.tas2580.de/
*
* english translation by RedTrinity
*
* @package language
* @version $Id: kb.php,v 1.1.1.1 2009/05/15 05:16:04 damysterious Exp $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
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
	
	'ARTICLE_DETAIL'		=> 'Dettagli articolo',
	'ARTICLE_REPORTED'		=> 'Questo articolo è stato segnalato',
	'DISPLAY_ON_INDEX'		=> 'Mostra nella categoria principale',
	'DISPLAY_ON_INDEX_DESC'	=> '',
	'DELETED'				=> 'La voce è stata cancellata',
	'MCP_REPORT_TITLE'		=> 'Articoli segnalati',
	'MCP_REPORT_EXPLAIN'	=> '',
	'REALY_DELETE'			=> 'Vuoi cancellare questa voce?',
	'VIEW_REPORTS_OLD'		=> 'Vedi segnalazioni chiuse',
	'VIEW_REPORTS_NEW'		=> 'Vedi segnalazioni aperte',
	'SHOW_ARTICLE'			=> 'Mostra articoli',
	'SORT_ORDER'			=> 'Ordina per',
	'SORT_ORDER_DESC'		=> 'Ordine articoli nelle categorie',
	'SUB_CATGEGORIES'		=> 'Sottocategorie',
	'SEARCH_CATEGORIE'		=> 'Cerca categorie',
	'ACP_TYPES'				=> 'Tipi di articoli',
	'ACP_TYPES_DESC'		=> 'Qui puoi aggiungere o modificare il tipo di articoli',
	'ACP_CATEGORIE'			=> 'Categoria',
	'ACP_CATEGORIE_DESC'	=> 'Qui puoi aggiungere o modificare categorie per la Guida Base.',
	'ACP_CONFIG'			=> 'Configurazione',
	'ACP_CONFIG_DESC'		=> 'Qui puoi modificare la configurazione della Guida Base.',
	'ARTICLE_ACTIVATED'		=> 'L’articolo è stato attivato!',
	'ARTICLE_DELETED'		=> 'L’articolo è stato cancellato!',
	'ARTICLE_ADDED'			=> 'L’articolo è stato inviato e verrà attivato, dopo l’esame.',
	'ARTICLE_HISTORY'		=> 'Log articolo',
	'ARTICLE_ADD'			=> 'Aggiungi un articolo',
	'ARTICLE_TITLE'			=> 'Titolo',
	'ARTICLE_DESCRIPTION'	=> 'Descrizione',
	'ARTICLE'				=> 'Articolo',
	'ARTICLE_TYPES'			=> 'Tipo di articolo',
	'ARTICLE_TYPES_DESC'	=> 'In quali tipi di articoli vuoi effettuare la ricerca? Usa la chiave &lt;CTRL&gt; per scegliere più di un articolo,  per cercare in tutti gli articoli non scegliere il tipo.',
	'ARTICLE_CONT'			=> 'Articoli nel database',
	'ARTICLE_DEL'			=> 'Vuoi cancellare l’articolo?',
	'ARTICLE_EDIT'			=> 'Modifica articolo',
	'ARTICLE_EDITED'		=> 'L’articolo è stato modificato!',
	'ARTICLE_DEACTIVATED'	=> 'Blocca articolo',
	'ARTICLE_POSTET'		=> 'Articolo scaricato',
	'AKTIVATE'				=> 'Attiva',

	'BACK_ARTICLE'			=> 'Torna all’articolo',
	'BACK_KB'				=> 'Torna indietro alla Guida Base',
	'BACK_TO_ARTICLE'		=> 'Clicca %squi%s per vedere l’articolo.',
	'BACK_TO_POSTING'		=> 'Clicca %squi%s per tornare indietro.',
	'BACK_TO_KB'			=> 'Clicca %squi%s per tornare alla Guida Base.',
	'BACK_TO_LOG'			=> 'Clicca %squi%s per tornare al log dell’articolo.',



	'CATEGORIE'				=> 'Categoria',
	'CHANGED_AT'			=> 'Modificata in',
	'CONT_CAT'				=> 'Categorie',
	'CATEGORIES'			=> 'categorie',
	'CATEGORIES_DESC'		=> 'In quale categoria vuoi cercare? Usa la chiave &lt;CTRL&gt; per scegliere più di una categoria, per cercare in tutte le categorie non scegliere il tipo.',
	'CAT_NOT_EMPTY'			=> 'La categoria non è vuota!',
	'CAT_NAME'				=> 'Nome categoria',
	'CAT_NAME_DESC'			=> 'Nome per la categoria',
	'CAT_IMAGE'				=> 'Immaggine categoria',
	'CAT_IMAGE_DESC'		=> 'Inserisci l’URL dell’immaggine per questa categoria.',
	'CAT_DECRIPTION_DESC'	=> 'Aggiungi una descrizione per la categoria',
	'CAT_MAIN'				=> 'Categoria principale',
	'CAT_SELECT_MAIN'		=> 'Scegli categoria principale',
	'CAT_ADDED'				=> 'La categoria è stata aggiunta.',
	'CAT_DELETED'			=> 'La categoria è stata cancellata.',
	'CAT_UPDATED'			=> 'La categoria è stata aggiornata.',
	'CAT_REALY_DELETE'		=> 'Vuoi cancellare la categoria?',
	'CAT_CREATE_NEW'		=> 'Nuova categoria',
	'DESCRIPTION'			=> 'Descrizione',


	'FIENAME'				=> 'Nome file',
	'FOUND_IN'				=> 'trovati in',
	'INDEX_POSTS'			=> 'Articoli nell’indice della pagina',
	'INDEX_POSTS_DESC'		=> 'Quanti articoli vuoi visualizzare nell’indice?',
	'KB_NAME'				=> 'Guida Base',
	'KB_NAME_DESC'			=> 'Il nome per la tua Guida Base',
	'KB_DECRIPTION_DESC'	=> 'Scrivi una descrizione per la tua Guida Base.',
	'KBASE'					=> 'Guida Base',
	'KB_DESCRIPTION'		=> 'Hai scritto un’articolo, puoi vedere un’anteprima alla fine della pagina. Dopo l’approvazione, l’articolo sarà pubblicato nella Guida Base. ',

	'LOG_TITEL'				=> 'Log articolo',
	'LOG_DESCRIPTION'		=> 'Qui puoi vedere il tempo in cui l’articolo è stato modificato dall’utente.',
	'LOG_DELETED'			=> 'Il log dell’articolo è stato cancellato.',

	'MAINCAT_DESC'			=> 'Qui puoi creare le categorie principali, in cui ci sono le sottocategorie per gli articoli.',

	'MODE'					=> 'Modo',
	'MODE_DESC'				=> 'Quali modalità vuoi utilizzare per l’indice?',
	'MODE_MODERN'			=> 'Moderno',
	'MODE_CLASSIC'			=> 'Classico',
	'NO_ARTICLE'			=> 'L’articolo desiderato non esiste!',
	'NEED_INPUT'			=> 'Aggiungi titolo e testo per l’articolo!',
	'ARTICLE_NEW'			=> 'Non rilasciati',
	'ARTICLE_NEW_DESC'		=> 'Le voci seguenti non sono state rilasciate o sono state bloccate',
	'NAME'					=> 'Nome categoria',
	'NEED_NAME'				=> 'Aggiungi un nome per la categoria',
	'ARTICLE_NEWEST'		=> 'L’articolo più recente è',
	'NO_TYPE'				=> 'Tipo articolo',
	'POST_FORUM'			=> 'Forum di riferimento per l’articolo',
	'POST_TEMPLATE'			=> 'Template messaggio',
	'POST_MESSAGE'			=> 'Testo messaggio',
	'POST_USER'				=> 'User ID',
	'POST_NORMAL'			=> 'Normale',
	'POST_TOPIC_GLOBAL'		=> 'Annuncio globale',
	'POST_TOPIC_AS'			=> 'Messaggio argomento come',
	'POST_TOPIC_AS_DESC'	=> 'Che tipo di argomento verrà creato?',
	'POST_USER_DESC'		=> 'L’ID utente che ha creato il messaggio',
	'POST_SUBJECT'			=> 'Titolo argomento',
	'POST_SUBJECT_DESC'		=> 'Il titolo dell’argomento creato',
	'POST_FORUM_DESC'		=> 'Indica l’ID del forum riferito a questo articolo creato, scegli "0" per nessun articolo',
	'POST_MESSAGE_DESC'		=> '{TITLE} = Titolo articolo <br />{DESCRIPTION} = Descrizione articolo<br />{POST_TIME} = Tempo dalla creazione<br />{TYPE} = Tipo articolo<br />{SUB_CAT} = Categorie<br />{URL} = URL per l’articolo<br />{AUTHOR} = Autore dell’articolo<br />{AUTHOR_ID} = User-ID dell’autore.<br /> Scrivi nel campo "Testo del messaggio"<br /> {TITLE} {DESCRIPTION} {URL}<br /> per avere un nuovo argomento nel forum con<br />titolo, descrizione, url.',
	'RELASED'				=> 'Realizzato il',
	'READ_MORE'				=> 'Visualizza tutti i %s articoli',


	'SEARCH_KEYWORDS_DESC'	=> 'Qui puoi cercare nella Guida Base.',
	'SHOW_EDITS'			=> 'Mostra modifiche',
	'SHOW_EDITS_DESC'		=> 'Vuoi visualizzare le mofiche nell’articolo?',
	'TYPE'					=> 'Tipo articolo',
	'TYPE_DESC'				=> 'Assegna un nome per il tipo di articolo',
	'TYPE_ADDED'			=> 'Tipo articolo aggiunto',
	'TYPE_UPDATED'			=> 'Tipo articolo cancellato',

	'NO_SUBCAT_IN_MAINCAT'	=> 'Puoi creare delle sottocategorie nell’indice!',
	'CAT_TYPE'				=> 'Tipo categoria',
	'CAT_TYPE_DESC'			=> 'Scegli un tipo di categoria',
	'IN_INDEX'				=> 'Nell’indice',
	'CAT_SUB'				=> 'Sottocategoria',

	'CACHE_TIME'			=> 'Tempo cache',
	'CACHE_TIME_DESC'		=> 'Tempo in cui tipi e categorie saranno in cache',
	'SECONDS'				=> 'Secondi',
	'ACTIVATE_TYPES'		=> 'Vuoi usare nomi per tipo di articoli?',
	'ACTIVATE_TYPES_DESC'	=> 'Vuoi assegnare un nome per il tipo di articolo?',
	'UPDATE_POST'			=> 'Aggiornamento articolo',
	'UPDATE_POST_DESC'		=> 'Nuovo argomento all’aggiornamento di un’articolo?',
	'POST_UPDATE_MESSAGE'	=> 'Articolo aggiornato',
	'POST_ID'				=> 'ID messaggio forum',
	'ARTICLE_ADDED_AKTIV'	=> 'L’articolo è stato inviato ed attivato',
	'SHOW_POST_EDIT'		=> 'Mostra aggiornamenti',
	'SHOW_POST_EDIT_DESC'	=> 'Vuoi visualizzare aggiornamenti nell’articolo?',

	'PRINT_TOPIC'			=> 'Stampa articolo',
	
	// Portal XL Additions
	'HITS'					=> 'Visite',
	'LATEST_TOPICS'			=> 'Ultimi argomenti',
	
));

?>