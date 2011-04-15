<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_common.php 204 2009-12-20 12:04:51Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 portalxl.eu - update translation for portal xl on 2011/04/14
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_common [Italian]
*
*/
/**
* DO NOT CHANGE
*/
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
	// Main
	'ALL' => 'Tutto',
	'MAIN' => 'Mappa sito GYM',
	'MAIN_MAIN_RESET' => 'Opzioni mappa sito GYM',
	'MAIN_MAIN_RESET_EXPLAIN' => 'Ripristina ai valori di default le opzioni principali',
	// Linking setup
	'GYM_LINKS_ACTIVATION' => 'Forum Linking',
	'GYM_LINKS_MAIN' => 'Links principali',
	'GYM_LINKS_MAIN_EXPLAIN' => 'Visualizza o meno links nella pagina footer : Indice Mappa, RSS feed e lista feed, mappa principale e nuova pagina.',
	'GYM_LINKS_INDEX' => 'Links nell’indice',
	'GYM_LINKS_INDEX_EXPLAIN' => 'Visualizza o meno links in ogni forum. I links saranno aggiunti vicino alla descrizione del forum.',
	'GYM_LINKS_CAT' => 'Links sulla pagina forum',
	'GYM_LINKS_CAT_EXPLAIN' => 'Visualizza o meno links in una pagina forum. I links saranno aggiunti vicino al titolo del forum.',
	// Google sitemaps
	'GOOGLE' => 'Google',
	// Reset settings
	'GOOGLE_MAIN_RESET' => 'Opzioni Google mappa sito',
	'GOOGLE_MAIN_RESET_EXPLAIN' => 'Ripristina ai valori di default le opzioni Google',
	// RSS feeds
	'RSS' => 'RSS',
	'RSS_ALTERNATE' => 'Links RSS previsiti',
	'RSS_ALTERNATE_EXPLAIN' => 'Visualizza o meno links RSS previsti nella barra di navigazione del browser',
	'RSS_LINKING_TYPE' => 'Tipi links RSS',
	'RSS_LINKING_TYPE_EXPLAIN' => 'Il tipo di feed visualizzato tra le pagine del forum.<br/>Può essere impostato come :<br/><b>&bull; News Feeds con o senza contenuto</b><br/>Le voci vengono visualizzate secondo l’ordine di creazione, con o senza contenuto,<br/><b>&bull; Feeds regolari con contenuto</b><br/>Le voci vengono visualizzate secondo l’ultima attività, con o senza contenuto.<br/>Questo riguarda solo il link mostrato, non i feeds effettivamente disponibili.',
	'RSS_LINKING_NEWS' => 'Feeds news',
	'RSS_LINKING_NEWS_DIGEST' => 'Feeds news con contenuto',
	'RSS_LINKING_REGULAR' => 'Feeds regolari',
	'RSS_LINKING_REGULAR_DIGEST' => 'Feeds regolari con contenuto',
	// Reset settings
	'RSS_MAIN_RESET' => 'Opzioni principali RSS',
	'RSS_MAIN_RESET_EXPLAIN' => 'Ripristina ai valori di default le opzioni RSS.',
	'YAHOO' => 'Yahoo',
	// HTML
	'HTML_MAIN_RESET' => 'Opzioni globali HTML ',
	'HTML_MAIN_RESET_EXPLAIN' => 'Ripristina la mappe HTML e le opzioni principali ai valori di default',
	'HTML' => 'Html',

	// GYM authorisation array
	'GYM_AUTH_ADMIN' => 'Amministratore',
	'GYM_AUTH_GLOBALMOD' => 'Moderatori globali',
	'GYM_AUTH_REG' => 'Loggato come',
	'GYM_AUTH_GUEST' => 'Ospiti',
	'GYM_AUTH_ALL' => 'Tutti',
	'GYM_AUTH_NONE' => 'Nessuno',
	// XSLT
	'GYM_STYLE' => 'Stile',

	// Cache status
	'SEO_CACHE_FILE_TITLE' => 'Stato cache',
	'SEO_CACHE_STATUS' => 'La cache è configurata in: <b>%s</b>',
	'SEO_CACHE_FOUND' => 'File cache trovata.',
	'SEO_CACHE_NOT_FOUND' => 'File cache non trovata.',
	'SEO_CACHE_WRITABLE' => 'File cache scrivibile.',
	'SEO_CACHE_UNWRITABLE' => 'File cache <b>non</b> è scrivibile. Configura 0777 alla cartella cache.',
	
	// Mod Rewrite type
	'ACP_SEO_SIMPLE' => 'Semplice',
	'ACP_SEO_MIXED' => 'Intermedio',
	'ACP_SEO_ADVANCED' => 'Avanzato',
	'ACP_PHPBB_SEO_VERSION' => 'versione',
	'ACP_SEO_SUPPORT_FORUM' => 'forum di supporto',
	'ACP_SEO_RELEASE_THREAD' => 'argomento disponibile',
	'ACP_SEO_REGISTER_TITLE' => 'registrati',
	'ACP_SEO_REGISTER_UPDATE' => 'notifica degli aggiornamenti.',
	'ACP_SEO_REGISTER_MSG' => 'Se vuoi %1$s per avere la %2$s',

	// Maintenance
	'GYM_MAINTENANCE' => 'Manutenzione',
	'GYM_MODULE_MAINTENANCE' => '%1$s manutenzione',
	'GYM_MODULE_MAINTENANCE_EXPLAIN' => 'Qui puoi gestire i files in cache usati da %1$s.<br/> Ci sono due tipi: quella utilizzata per memorizzare i dati in uscita sulle pagine pubbliche, e quelli utilizzati per costruire ogni modulo in ACP. Puoi cancellare il modulo cache attivando l’opzione di cancellamento cache; con il valore default svuoti la cache contenuta nella scelta moduli.',
	'GYM_CLEAR_CACHE' => 'Svuota cache %1$s',
	'GYM_CLEAR_CACHE_EXPLAIN' => 'Qui puoi pulire i files nel modulo %1$s cache. I files contengono i dati %1$s in uscita.<br/>Può essere utile se vuoi aggiornare la cache.',
	'GYM_CLEAR_ACP_CACHE' => 'Svuota %1$s ACP',
	'GYM_CLEAR_ACP_CACHE_EXPLAIN' => 'Qui puoi scegliere di pulire i files %1$s in cache nell’intestazione. Può essere utile se vuoi aggiornare la cache %1$s ACP.<br/>Può essere utile per attivare nuove opzioni che possono essere state aggiunte ai moduli di questo tipo di output.',
	'GYM_CACHE_CLEARED' => 'Cancellazione avenuta con successo in : ',
	'GYM_CACHE_NOT_CLEARED' => 'Risulta un’errore nella cancellazione della cache, controlla i permessi della cartella cache (CHMOD 0666 o 0777).<br/>L’attuale cartella è : ',
	'GYM_FILE_CLEARED' => 'Files cancellati: ',
	'GYM_CACHE_ACCESSED' => 'L’accesso nella cartella cache è avvenuto correttamente, ma nessun file è stato cancellato: ',
	'MODULE_CACHE_CLEARED' => 'Moduli ACP in cache cancellati con successo, se si è caricato un modulo esso sarà mostrato in ACP.',
	
	// set defaults
	'GYM_SETTINGS' => 'Configurazione',
	'GYM_RESET_ALL' => 'Ripristina tutto',
	'GYM_RESET_ALL_EXPLAIN' => 'Se selezioni l’opzione, tutte le suddette opzioni saranno ripristinate ai valori di default.',
	'GYM_RESET' => 'Ripristina %1$s configurazione',
	'GYM_RESET_EXPLAIN' => 'Qui puoi ripristinare la configurazione di %1$s, il ripristino può riguardare l’intero modulo o un dato del modulo.',

	'GYM_INSTALL' => 'Installa',
	'GYM_MODULE_INSTALL' => 'Installa modulo %1$s',
	'GYM_MODULE_INSTALL_EXPLAIN' => 'Quoi puoi attivare/disattivare il modulo %1$s.<br/>Se hai caricato un modulo, è necessario prima attivarlo, solo in tal caso l’applicazione sarà in grado di utilizzarlo. Se non vedi nessun nuovo modulo, prova ad aggiornare la cache in  ACP e in manutenzione.',

	// Titles
	'GYM_MAIN' => 'Configurazione mappa sito GYM',
	'GYM_MAIN_EXPLAIN' => 'Queste sono le impostazioni comuni a tutti i tipi di moduli.<br/> Esse possono essere applicate a tutti i tipi di uscite (html, RSS, mappe sito Google, Yahoo! lista url) e/o a tutti i moduli a seconda delle tue impostazioni.',
	'MAIN_MAIN' => 'Panoramica mappa sito GYM',
	'MAIN_MAIN_EXPLAIN' => 'Mappa sito GYM è il modulo per ottimizzare il tuo sito sui motori di ricerca. Ti permetterà di costruire: Mappe sito Google, RSS 2.0 feeds, Yahoo! Lista URL e mappa sito in html per il tuo forum, come per qualsiasi parte del tuo sito grazie alla sua modularità.<br/><br/> Ogni tipo di output (Google, RSS, html & Yahoo) può interagire con gli oggetti nella lista delle diverse applicazioni installate sul tuo sito (forum, album ecc ...) usando un modulo dedicato.<br/>Puoi attivare/disattivare i moduli usando il link di installazione in ACP. Ogni modulo ha la propria configurazione delle pagine.<br/><br/>Assicurati di controllare periodicamente l’%1$s, il supporto del modulo è previsto sul %2$s.<br/>Il supporto generale SEO e le discussioni sono disponibili su %3$s.<br/>%4$s<br/>Buon divertimento ;-)',

	'GYM_GOOGLE' => 'Mappe sito Google',
	'GYM_GOOGLE_EXPLAIN' => 'Queste sono le impostazioni comuni a tutte le mappe sito di Google. (forum, personalizzazioni ecc ...).<br/> Saranno applicate a tutte le sitemaps di Google e sovrascriveranno le tue impostazioni.',
	'GYM_RSS' => 'RSS feeds',
	'GYM_RSS_EXPLAIN' => 'Queste sono le impostazioni comuni a tutti gli RSS feeds. (forum, personalizzazioni ecc ...).<br/> Saranno applicate a tutte gli RSS feeds e sovrascriveranno le tue impostazioni.',
	'GYM_HTML' => 'Pagine HTML',
	'GYM_HTML_EXPLAIN' => 'Queste sono le impostazioni comuni a tutte le pagine HTML. (forum, personalizzazioni ecc ...).<br/> Saranno applicate a tutte le pagine HTML e sovrascriveranno le tue impostazioni.',
	'GYM_MODULES_INSTALLED' => 'Modulo attivato',
	'GYM_MODULES_UNINSTALLED' => 'Modulo non attivato',

	// Overrides
	'GYM_OVERRIDE_GLOBAL' => 'Globale',
	'GYM_OVERRIDE_OTYPE' => 'Tipo uscita',
	'GYM_OVERRIDE_MODULE' => 'Modulo',
	
	// override messages
	'GYM_OVERRIDED_GLOBAL' => 'Questa opzione sovrascrive la configurazione al primo livello (configurazione principale)',
	'GYM_OVERRIDED_OTYPE' => 'Questa opzione sovrascrive la configurazione vicino al primo livello',
	'GYM_OVERRIDED_MODULE' => 'Questa opzione sovrascrive la configurazione vicino il livello del modulo',
	'GYM_OVERRIDED_VALUE' => 'Il valore attualmente preso in considerazione è : ',
	'GYM_OVERRIDED_VALUE_NOTHING' => 'niente',
	'GYM_COULD_OVERRIDE' => 'Questa opzione potrebbe essere sovrascritta ma attualmente non lo è.',

	// Overridable / common options
	'GYM_CACHE' => 'Cache',
	'GYM_CACHE_EXPLAIN' => 'Qui puoi impostare varie opzioni della cache. Ricorda che queste impostazioni possono essere annullate a seconda delle tue impostazioni.',
	'GYM_MOD_SINCE' => 'Modifica alla data',
	'GYM_MOD_SINCE_EXPLAIN' => 'Il modulo inviterà il browser se dispone già di un aggiornamento alla data per la versione della pagina nella sua cache prima di rinviare il contenuto.<br /><u>NOTA :</u> Questa opzione riguarda tutti i tipi di uscita.',
	'GYM_CACHE_ON' => 'Attiva cache',
	'GYM_CACHE_ON_EXPLAIN' => 'Puoi attivare/disattivare la cache di questo modulo.',
	'GYM_CACHE_FORCE_GZIP' => 'Forza compressione della cache',
	'GYM_CACHE_FORCE_GZIP_EXPLAIN' => 'Ti consentirà di dare maggiore vigore alla compressione gunzip per i file memorizzati nella cache nonostante l’uso di gunzip. Questo può aiutare un poco, se non hai abbastanza spazio web, ma sarà un pò più oneroso per il server che deve decomprimere il file prima che sia inviato al browser.',
	'GYM_CACHE_MAX_AGE' => 'Durata cache',
	'GYM_CACHE_MAX_AGE_EXPLAIN' => 'Valore massimo di ore di un file in cache che sarà utilizzato prima di essere aggiornati. Ogni file memorizzato nella cache sarà aggiornato ogni qualvolta i file si autorigenerano oltre questa durata. In caso contrario la cache potrà essere aggiornata su richiesta nel tuo ACP.',
	'GYM_CACHE_AUTO_REGEN' => 'Aggiornamento automatico cache',
	'GYM_CACHE_AUTO_REGEN_EXPLAIN' => 'Se attivi l’aggiornamento automatico della cache, solo le liste saranno aggiornate quando la cache è scaduta, se non viene attivata questa opzione, dovrai farlo manualmente attraverso la manutenzione.',
	'GYM_SHOWSTATS' => 'Statistiche cache',
	'GYM_SHOWSTATS_EXPLAIN' => 'Uscita o mancata generazione statistiche nel codice sorgente.<br /><u>NOTA :</u> La durata è il tempo necessario per costruire la pagina. Questo passo non è ripetuto come la scrittura dalla cache.',
	'GYM_CRITP_CACHE' => 'Codifica nome file cache',
	'GYM_CRITP_CACHE_EXPLAIN' => 'Codifica o meno i nomi file della cache. È preferibile mantenere la cache con i nomi dei file criptati, ma può essere comodo per controllare il debugging non cifrato  dei file.<br /><u>NOTA :</u> Questa opzione riguarderà tutti i tipi di file memorizzati nella cache.',

	'GYM_MODREWRITE' => 'Riscrittura URL',
	'GYM_MODREWRITE_EXPLAIN' => 'Qui puoi impostare varie opzioni di riscrittura URL. Ricorda che queste impostazioni possono essere annullate a seconda delle tue impostazioni.',
	'GYM_MODREWRITE_ON' => 'Attiva la riscrittura URL',
	'GYM_MODREWRITE_ON_EXPLAIN' => 'Questo attiva la riscrittura degli URL per il modulo links.<br /><u>NOTA :</u> Devi avere un server Web Apache con il mod_rewrite caricato o un server IIS lanciando il modulo isapi_rewrite e scrivere correttamente le regole nel tuo. htaccess (o httpd.ini con IIS).',
	'GYM_ZERO_DUPE_ON' => 'Attiva zero duplicati',
	'GYM_ZERO_DUPE_ON_EXPLAIN' => 'Attiva la funzione zero duplicati nel modulo links.<br /><u>NOTA :</u> Le redirezioni potranno verificarsi solo quando (RE) generano la cache in questa versione.',
	'GYM_MODRTYPE' => 'Tipo riscrittura URL',
	'GYM_MODRTYPE_EXPLAIN' => 'Queste opzioni saranno sovrascritte dall’uso di phpBB e la riscrittura della SEO mod (rilevamento automatico).<br/>Risultano quattro livelli di riscrittura URL : nessuno, semplice, misto e avanzato: :<br/><ul><li><b>Nessuno :</b> Nessuna riscrittura;<br></li><li><b>Semplice :</b>Gli URL statici vengono riscritti per tutti i links;<br></li><li><b>Misto :</b> Forum e titoli di categoria sono iniettati negli URL, ma nessun titolo argomento viene riscritto;<br></li><li><b>Avanzato :</b> Tutti i titoli sono iniettati negli URL;</li></ul>',

	'GYM_GZIP' => 'GUNZIP',
	'GYM_GZIP_EXPLAIN' => 'Qui puoi impostare varie opzioni per la funzione gunzip. Ricorda che queste impostazioni possono essere annullate a seconda delle tue impostazioni di %1$s',
	'GYM_GZIP_FORCED' => '<br/><b style="color:red;">NOTA :</b> Gun-zip viene attivata tramite la configurazione di phpBB.',
	'GYM_GZIP_CONFIGURABLE' => '<br/><b style="color:red;">NOTA :</b> Gun-zip non è attivata tramite la configurazione di phpBB. Puoi impostare le seguenti opzioni come vuoi.',
	'GYM_GZIP_ON' => 'Attiva gunzip',
	'GYM_GZIP_ON_EXPLAIN' => 'Attiva la compressione gunzip in uscita. Questo può essere significativamente inferiore al valore dei dati trasmessi al browser e quindi il tempo necessario per trasmettere il contenuto.',
	'GYM_GZIP_EXT' => 'Suffisso gunzip',
	'GYM_GZIP_EXT_EXPLAIN' => 'Puoi scegliere di usare o meno il suffisso .gz nel modulo URL. Viene applicato solo quando gunzip e gli URL riscritti sono attivati.',
	'GYM_GZIP_LEVEL' => 'Livelllo compressione gunzip',
	'GYM_GZIP_LEVEL_EXPLAIN' => 'Numero intero compreso fra 1 e 9, generalmente non vale la pena di andare oltre il valore 6.<br /><u>NOTA :</u> Questa opzione riguarda tutti i tipi di uscita.',

	'GYM_LIMIT' => 'Limiti',
	'GYM_LIMIT_EXPLAIN' => 'Qui puoi impostare il limite da applicare quando viene costruita l’uscita: numero di URL usciti, cicli sql e l’età degli elementi elencati.<br/>Ricordate che queste impostazioni possono essere annullate a seconda delle tue impostazioni.',
	'GYM_URL_LIMIT' => 'Limite voci',
	'GYM_URL_LIMIT_EXPLAIN' => 'Il numero massimo di oggetti in uscita.',
	'GYM_SQL_LIMIT' => 'Cicli SQL',
	'GYM_SQL_LIMIT_EXPLAIN' => 'Per tutti i tipi di uscita, eccetto html, le SQL queries sono suddivise per essere in grado di elencare grandi quantità di prodotti senza correre troppo pesante dubbi sulla sua riuscita.<br/>Definisci il valore per interrogare la funzione una sola volta. Il numero di query SQL sarà il numero di voce diviso per il ciclo.',
	'GYM_TIME_LIMIT' => 'Tempo limite',
	'GYM_TIME_LIMIT_EXPLAIN' => 'Limite in giorni. L’età massima di voci prese in considerazione per costruire gli elenchi in uscita. Può essere molto utile per ridurre il carico al Server su ampie basi di dati. Scegli 0 per nessun limite',

	'GYM_SORT' => 'Ordinamento',
	'GYM_SORT_EXPLAIN' => 'Qui puoi impostare l’ordinamento in uscita.<br/>Ricorda che queste impostazioni possono essere annullate a seconda delle tue impostazioni.',
	'GYM_SORT_TYPE' => 'Ordinamento per default',
	'GYM_SORT_TYPE_EXPLAIN' => 'Tutti i links in uscita sono ordinati per default e secondo l’ultima attività (Discendente). <br /> Puoi impostare crescente per esempio se desideri rendere più agevole ai motori di ricerca la localizzazione dei collegamenti per i vecchi contenuti. Ricorda che queste impostazioni possono essere annullate a seconda delle tue impostazioni.',

	'GYM_PAGINATION' => 'Paginazione',
	'GYM_PAGINATION_EXPLAIN' => 'Qui puoi impostare varie opzioni relative all’impaginazione. Ricorda che queste impostazioni possono essere annullate a seconda delle tue impostazioni.',
	'GYM_PAGINATION_ON' => 'Attiva paginazione',
	'GYM_PAGINATION_ON_EXPLAIN' => 'Puoi decidere la paginazione dei link in uscita (quando disponibile) per elencare le voci. Per esempio, il modulo può inoltre essere dirottato verso i links del Forum, o alle pagine argomenti.',
	'GYM_LIMITDOWN' => 'Paginazione: Limite minimo',
	'GYM_LIMITDOWN_EXPLAIN' => 'Scegli qui il numero delle pagine a partire dalla prima all’ultima.',
	'GYM_LIMITUP' => 'Paginazioni: Limite massimo',
	'GYM_LIMITUP_EXPLAIN' => 'Scegli qui il numero delle pagine a partire dalla prima all’ultima.',

	'GYM_OVERRIDE' => 'Eredita impostazioni',
	'GYM_OVERRIDE_EXPLAIN' => 'Il modulo mappa sito GYM è molto moduulare. Ogni tipo di uscita (Google, RSS ...), utilizza i propri moduli di uscita corrispondente al tipo di prodotto da visualizzare. Per esempio, il primo modulo per tutti i tipi di produzione è il modulo Forum, elencando oggetti dal forum.<br/> Molte opzioni, come la riscrittura degli URL, la cache, la compressione gunzip ecc...., sono ripetute su diversi livelli della configurazione ACP. Questo permette di usare diverse impostazioni per la stessa opzione a seconda del tipo di uscita e il modulo di uscita. Ma può accadere che preferisci, per esempio, attivare gli URL di riscrittura su tutte le configurazioni delle mappe sito in una volta sola (tutte i tipi di uscita e tutti i moduli).<br/>Questo tipo di configurazione ti consentirà di fare per molti tipi di impostazioni. <br/>Il processo di eredità va dal livello più elevato delle impostazioni (configurazione principale) secondo il tipo di livello uscita (google, RSS....) e termina al più basso livello: i moduli di uscita (Forum, album....) sovrascriveranno le impostazioni e possono assumere tre valori: <br/><ul><li><b>Globale :</b> saranno utilizzate le impostazioni principali;<br></li><li><b>Tipo di uscita :</b> Il tipo di uscita saranno utilizzati per i suoi moduli;<br></li><li><b>Modulo :</b> Sarà usata la più bassa impostazione disponibile, ad esempio prima il modulo, e se non stabilito, il tipo di uscita e così via fino alle impostazioni globali se disponibili.</li></ul>',
	'GYM_OVERRIDE_ON' => 'Attiva eredita impostazioni',
	'GYM_OVERRIDE_ON_EXPLAIN' => 'Qui puoi attivare/disattivare la sovrascrittura ereditando le impostazioni. Disattivando l’impostazione prevarrà su tutti i "moduli".',
	'GYM_OVERRIDE_MAIN' => 'Eredita impostazioni valori default',
	'GYM_OVERRIDE_MAIN_EXPLAIN' => 'Configura il livello di sovrascrittura per il tipo di configurazione al modulo in uso.',
	'GYM_OVERRIDE_CACHE' => 'Cache eredita impostazioni',
	'GYM_OVERRIDE_CACHE_EXPLAIN' => 'Livello per ereditare le impostazioni per le opzioni cache.',
	'GYM_OVERRIDE_GZIP' => 'Gunzip eredita impostazioni',
	'GYM_OVERRIDE_GZIP_EXPLAIN' => 'Livello per ereditare le impostazioni per le opzioni gunzip.',
	'GYM_OVERRIDE_MODREWRITE' => 'Riscrittura URL eredita impostazioni',
	'GYM_OVERRIDE_MODREWRITE_EXPLAIN' => 'Livello per ereditare le impostazioni per le opzioni riscrittura URL.',
	'GYM_OVERRIDE_LIMIT' => 'Limite eredita impostazioni',
	'GYM_OVERRIDE_LIMIT_EXPLAIN' => 'Livello per ereditare le impostazioni per le opzioni limite.',
	'GYM_OVERRIDE_PAGINATION' => 'Paginazione eredita impostazioni',
	'GYM_OVERRIDE_PAGINATION_EXPLAIN' => 'Livello per ereditare le impostazioni per le opzioni paginazione.',
	'GYM_OVERRIDE_SORT' => 'Ordinamento eredita impostazioni',
	'GYM_OVERRIDE_SORT_EXPLAIN' => 'Livello per ereditare le impostazioni per le opzioni ordinamento.',

	// Mod rewrite
	'GYM_MODREWRITE_ADVANCED' => 'Avanzato',
	'GYM_MODREWRITE_MIXED' => 'Misto',
	'GYM_MODREWRITE_SIMPLE' => 'Semplice',
	'GYM_MODREWRITE_NONE' => 'Nessuno',

	// Sorting
	'GYM_ASC' => 'Ascendente',
	'GYM_DESC' => 'Discendente',

	// Other
	// robots.txt
	'GYM_CHECK_ROBOTS' => 'Controlla regole disallows al robots.txt',
	'GYM_CHECK_ROBOTS_EXPLAIN' => 'Controlla ed applica le regole per il robots.txt alla lista URL. Il modulo sarà riconosciuto automaticamente con gli aggiornamenti del robots.txt.<br />Questa opzione è molto comoda per XML e TXT d’importazione, quando non possiamo essere certi della coerenza degli URL.<br/><br /><u>Nota</u> :<br />Questa opzione comporterà maggior lavoro per il file sorgente, si raccomanda di usare quando la cache è attivata.',
	// summarize method
	'GYM_METHOD_CHARS' => 'da caratteri',
	'GYM_METHOD_WORDS' => 'da parole',
	'GYM_METHOD_LINES' => 'da linee',
));
?>
