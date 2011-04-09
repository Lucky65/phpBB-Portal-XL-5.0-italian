<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: acp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'ACP_BLOG_CATEGORIES_EXPLAIN'			=> 'Qui puoi aggiungere/modificare/gestire le categorie del Blog.',
	'ACP_BLOG_PLUGINS_EXPLAIN'				=> 'Qui puoi attivare/disattivare/installare/disinstallare i plugins utenti per il mod Blog.<br /><br />Puoi anche spostare i plugins sopra/sotto nella lista.',
	'ALLOWED_IN_BLOG'						=> 'Attivati in Blog utenti',
	'ALLOW_IN_BLOG'							=> 'Attivato in Blog utenti',

	'BLOG_ALWAYS_SHOW_URL'					=> 'Mostrato nel link profilo',
	'BLOG_ALWAYS_SHOW_URL_EXPLAIN'			=> 'Se questo è impostato su No, non mostrerà il link sul blog di ogni profilo degli utenti a meno che non hanno inviato un blog.',
	'BLOG_ATTACHMENT_SETTINGS'				=> 'Configurazione allegati',
	'BLOG_ENABLE_ATTACHMENTS'				=> 'Allegati',
	'BLOG_ENABLE_ATTACHMENTS_EXPLAIN'		=> 'Attiva o disattiva l’intero sistema degli allegati per il blog e le risposte blog',
	'BLOG_ENABLE_FEEDS'						=> 'RSS/ATOM/Javascript feeds',
	'BLOG_ENABLE_RATINGS'					=> 'Valutazioni blog',
	'BLOG_ENABLE_RATINGS_EXPLAIN'			=> 'Disabilita valutazioni per i blog.',
	'BLOG_ENABLE_SEARCH'					=> 'Ricerca',
	'BLOG_ENABLE_SEARCH_EXPLAIN'			=> 'Attiva il sistema di ricerca per il mod blog utente (questo sistema di ricerca  è separato dal sistema di ricerca del forum).',
	'BLOG_ENABLE_SEO'						=> 'SEO Urls',
	'BLOG_ENABLE_SEO_EXPLAIN'				=> 'Devi avere il mod rewrite attivato per avere la riscrittura degli urls.  Se il blog non funziona correttamente, disattiva questa opzione.',
	'BLOG_ENABLE_USER_PERMISSIONS'			=> 'Permessi utente',
	'BLOG_ENABLE_USER_PERMISSIONS_EXPLAIN'	=> 'Attiva i permmessi utente per autorizzare gli utenti a specifici permessi base sul blog (per ospiti, registrati, utenti, amici e ignorati).  Amministratori e moderatori sono sempre autorizzati a visualizzare/rispondere ai blogs.',
	'BLOG_ENABLE_ZEBRA'						=> 'Sezioni Amici/Ignorati',
	'BLOG_ENABLE_ZEBRA_EXPLAIN'				=> 'Se disabiliti questa funzione, gli utenti non saranno più autorizzati ad impostare le autorizzazioni per gli amici che vedono i loro blog, e poche altre cose possono essere disattivate.',
	'BLOG_GUEST_CAPTCHA'					=> 'Richiede agli ospiti di inserire un codice di sicurezza prima di inserire una nuova voce',
	'BLOG_INFORM'							=> 'Informa gli utenti per rapporti o messaggi che richiedono l’approvazione via PM',
	'BLOG_INFORM_EXPLAIN'					=> 'Inserisci l’user_id degli utenti di cui desideri ricevere un messaggio privato quando un blog o una risposta viene segnalata. Separa gli utenti da una virgola, non aggiungere spazi.',
	'BLOG_MAX_ATTACHMENTS'					=> 'Valore massimo per gli allegati permessi per messaggio',
	'BLOG_MAX_ATTACHMENTS_EXPLAIN'			=> 'Nota bene: questo può essere sovrascritto su ogni utente nelle autorizzazioni utente.',
	'BLOG_MAX_RATING'						=> 'Valutazione massima blog',
	'BLOG_MAX_RATING_EXPLAIN'				=> 'La valutazione massima permessa.',
	'BLOG_MESSAGE_FROM'						=> 'Messaggi inviati da',
	'BLOG_MESSAGE_FROM_EXPLAIN'				=> 'L’user_id dell’utente che di cui desideri la sottoscrizione e i messaggi di notifica. Se l’utente non esiste avrai errori.',
	'BLOG_MIN_RATING'						=> 'Valutazione minima blog',
	'BLOG_MIN_RATING_EXPLAIN'				=> 'La valutazione minima permessa.',
	'BLOG_POST_VIEW_SETTINGS'				=> 'Configurazione visualizzazione e invio messaggi',
	'BLOG_QUICK_REPLY'						=> 'Risposta rapida',
	'BLOG_QUICK_REPLY_EXPLAIN'				=> 'Attiva la visualizzazione della risposta rapida nel blog.',
	'BLOG_SETTINGS'							=> 'Configurazione blog utente',
	'BLOG_SETTINGS_EXPLAIN'					=> 'Qui puoi configurare le impostazioni per il mod blog utente.',

	'CATEGORY_CREATED'						=> 'Categoria creata con successo!',
	'CATEGORY_DELETE'						=> 'Cancella categoria',
	'CATEGORY_DELETED'						=> 'La categoria è stata eliminata con successo!',
	'CATEGORY_DELETE_EXPLAIN'				=> 'Sei sicuro di voler cancellare questa categoria?',
	'CATEGORY_DESCRIPTION_EXPLAIN'			=> 'Descrizione della categoria.',
	'CATEGORY_EDIT_EXPLAIN'					=> 'Qui puoi modificare la configurazione della categoria.',
	'CATEGORY_INDEX'						=> 'Indice categoria',
	'CATEGORY_NAME_EMPTY'					=> 'Devi inserire un nome per la categoria',
	'CATEGORY_PARENT'						=> 'Categoria padre',
	'CATEGORY_RULES_EXPLAIN'				=> 'Qui puoi scrivere le regole che vuoi mostrare nella categoria.',
	'CATEGORY_SETTINGS'						=> 'Configurazione categoria',
	'CATEGORY_UPDATED'						=> 'Categoria aggiornata con successo!',
	'CLICK_CHECK_NEW_VERSION'				=> 'Clicca %squi%s per controllare gli aggiornamenti di versione per il mod Blog utente',
	'CLICK_GET_NEW_VERSION'					=> 'Clicca %squi%s per controllare l’ultima versione per il mod Blog utente',
	'CLICK_UPDATE'							=> 'Clicca %squi%s per aggiornare il database del mod Blog utente',
	'CONTINUE'								=> 'Continua',
	'COPYRIGHT'								=> 'Copyright',
	'CREATE_CATEGORY'						=> 'Crea categoria',

	'DATABASE_VERSION'						=> 'Versione database',
	'DEFAULT_TEXT_LIMIT'					=> 'Limite testo per pagine blog',
	'DEFAULT_TEXT_LIMIT_EXPLAIN'			=> 'Superato il limite, il testo verrà tagliato dalla restante parte (meglio accorciarlo)',
	'DELETE_SUBCATEGORIES'					=> 'Cancella sottocategorie',

	'EDIT_CATEGORY'							=> 'Modifica categoria',
	'ENABLE_BLOG_CUSTOM_PROFILES'			=> 'Visualizza campi profilo personalizzato nelle pagine blog utente',
	'ENABLE_SUBSCRIPTIONS'					=> 'Sottoscrizioni blog/utente',
	'ENABLE_SUBSCRIPTIONS_EXPLAIN'			=> 'Permette agli utenti registrati di sottoscrivere il blog e ricevere notifiche quando ci sono nuove voci nel blog utente',
	'ENABLE_USER_BLOG'						=> 'Mod blog utente',
	'ENABLE_USER_BLOG_EXPLAIN'				=> 'Nota che in ACP e in UCP del blog utente resterà sempre consentito a condizione che sia installato (a meno che non viene disattivato o che vengano eliminati i moduli).',
	'ENABLE_USER_BLOG_PLUGINS'				=> 'Sistema plugins',
	'ENABLE_USER_BLOG_PLUGINS_EXPLAIN'		=> 'Se disabiliti questa opzione, tutti i plugins installati verrano disabilitati, tuttavia, la sezione Plugins in ACP verrà ancora mostrato anche se disattivato.',

	'FILE_VERSION'							=> 'Versione files',

	'INSTALLED_PLUGINS'						=> 'Plugins installati',

	'LATEST_VERSION'						=> 'Ultima versione',

	'MOVE_BLOGS_TO'							=> 'Sposta blog a',
	'MOVE_SUBCATEGORIES_TO'					=> 'Sposta sottodirectori a',

	'NOT_ALLOWED_IN_BLOG'					=> 'Non consentito in blog utente',
	'NO_DESTINATION_CATEGORY'				=> 'Nessuna destinazione categoria',
	'NO_INSTALLED_PLUGINS'					=> 'Nessun plugin installato',
	'NO_PARENT'								=> 'Nessun modulo padre',
	'NO_UNINSTALLED_PLUGINS'				=> 'Nessun plugin disinstallato',

	'OUTPUT_CPLINKS_BLOCK'					=> 'Link profilo sul blog nei campi profilo personalizzati',
	'OUTPUT_CPLINKS_BLOCK_EXPLAIN'			=> 'Se impostato su No il link "Visualizza Blog in ogni profilo" non sarà utilizzato nei campi profilo personalizzato. Sarà necessario aggiungere manualmente i collegamenti nel template.',

	'PARENT_NOT_EXIST'						=> 'Il modulo padre selezionato non esiste.',
	'PLUGINS_DISABLED'						=> 'Plugins disattivati.',
	'PLUGINS_NAME'							=> 'Nome plugin',
	'PLUGIN_ACTIVATE'						=> 'Attiva',
	'PLUGIN_ALREADY_INSTALLED'				=> 'Il plugin selezionato esiste già.',
	'PLUGIN_DEACTIVATE'						=> 'Disattiva',
	'PLUGIN_INSTALL'						=> 'Installa',
	'PLUGIN_NOT_EXIST'						=> 'Il plugin selezionato non esite.',
	'PLUGIN_NOT_INSTALLED'					=> 'Il plugin selezionato non è installato.',
	'PLUGIN_UNINSTALL'						=> 'Disinstalla',
	'PLUGIN_UNINSTALL_CONFIRM'				=> 'Vuoi disinstallare questo plugin?<br /><strong>Questo eliminer&grave tutti i dati aggiunti di questo mod nel tuo database (quindi tutti i dati salvati verranno persi)!</strong><br /><br />E’ necessario disinstallare manualmente le modifiche apportate dal presente plugin e cancellare i file del plugin per rimuovere completamente questo plugin.',
	'PLUGIN_UPDATE'							=> 'Aggiornamento DB',

	'REMOVE_ALL_BLOGS'						=> 'Eliminare solo la categoria.',

	'SELECT_CATEGORY'						=> 'Seleziona categoria',

	'UNINSTALLED_PLUGINS'					=> 'Disinstalla plugins',
	'USER_TEXT_LIMIT'						=> 'Limite testo pagina blog utente',
	'USER_TEXT_LIMIT_EXPLAIN'				=> 'Stesso limite di testo predefinito, limite sulla visualizzazione per la pagina utente',

	'VERSION'								=> 'Versione',
));

?>