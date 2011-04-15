<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_html.php 204 2009-12-20 12:04:51Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 portalxl.eu - update translation for portal xl on 2011/04/14
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_html [Italian]
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
	'HTML_MAIN' => 'Configurazione HTML',
	'HTML_MAIN_EXPLAIN' => 'Queste sono le confiurazioni principali del modulo HTML.<br/>Sono applicate a tutti i moduli HTML e dipendono dalle tue impostazioni.',
	// Linking setup
	'HTML_LINKS_ACTIVATION' => 'Forum Linking',
	'HTML_LINKS_MAIN' => 'Links principali',
	'HTML_LINKS_MAIN_EXPLAIN' => 'Visualizza o meno link indice della mappa nel footer.<br/>Questa funzionalità richiede che i links vengano attivati nella configurazione principale.',
	'HTML_LINKS_INDEX' => 'Links nell’indice',
	'HTML_LINKS_INDEX_EXPLAIN' => 'Visualizza o meno limks delle mappe disponibili nell’indice del forum. I links sono aggiunti vicino la descrizione del forum.<br/>Questa funzionalità richiede che i links vengano attivati nella configurazione principale.',
	'HTML_LINKS_CAT' => 'Links sulla pagina del forum',
	'HTML_LINKS_CAT_EXPLAIN' => 'Visualizza o meno links alle mappe sito del forum corrente. I links sono aggiunti vicino al titolo del form.<br/>Questa funzionalità richiede che i links vengano attivati nella configurazione principale.',
	// Reset settings
	'HTML_ALL_RESET' => 'Tutti i moduli HTML',
	// Limits
	'HTML_RSS_NEWS_LIMIT' => 'Limite principale nuova pagina',
	'HTML_RSS_NEWS_LIMIT_EXPLAIN' => 'Numero di voci visualizzate nella nuova pagina, raccolte da configurare nella fonte RSS per le nuove pagine principali.',
	'HTML_MAP_TIME_LIMIT' => 'Tempo limite per il modulo principale mappe',
	'HTML_MAP_TIME_LIMIT_EXPLAIN' => 'Limite in giorni. Il tempo massimo degli elementi presi in considerazione per la costruzione del modulo principale mappa. Può essere molto utile per ridurre il carico del server su ampie basi di dati. Scegli 0 per nessun limite',
	'HTML_CAT_MAP_TIME_LIMIT' => 'Tempo limite per categorie mappe',
	'HTML_CAT_MAP_TIME_LIMIT_EXPLAIN' => 'Limite in giorni. Il tempo massimo degli elementi presi in considerazione per la costruzione del modulo principale cetegoria. Può essere molto utile per ridurre il carico del server su ampie basi di dati. Scegli 0 per nessun limite',
	'HTML_NEWS_TIME_LIMIT' => 'Tempo limite per news',
	'HTML_NEWS_TIME_LIMIT_EXPLAIN' => 'Limite in giorni. Il tempo massimo degli elementi presi in considerazione per la costruzione del modulo principale news. Può essere molto utile per ridurre il carico del server su ampie basi di dati. Scegli 0 per nessun limite',
	'HTML_CAT_NEWS_TIME_LIMIT' => 'Tempo limite per categoria news',
	'HTML_CAT_NEWS_TIME_LIMIT_EXPLAIN' => 'Limite in giorni. Il tempo massimo degli elementi presi in considerazione per la costruzione del modulo principale categoria news. Può essere molto utile per ridurre il carico del server su ampie basi di dati. Scegli 0 per nessun limite',
	// sort
	'HTML_MAP_SORT_TITLE' => 'Ordinamento mappa',
	'HTML_NEWS_SORT_TITLE' => 'Ordinamento news',
	'HTML_CAT_SORT_TYPE' => 'Ordinamento per mappe categoria',
	'HTML_CAT_SORT_TYPE_EXPLAIN' => 'Seguendo lo stesso principio di cui sopra, si applica alla pagina di categoria mappe, es. una mappa forum mappa per il modulo HTML forum.',
	'HTML_NEWS_SORT_TYPE' => 'Ordinamento pagina news',
	'HTML_NEWS_SORT_TYPE_EXPLAIN' => 'Seguendo lo stesso principio di cui sopra, si applica alla pagina delle news, es. una mappa forum mappa per il modulo HTML forum.',
	'HTML_CAT_NEWS_SORT_TYPE' => 'Ordinamento per categoria nuove pagine',
	'HTML_CAT_NEWS_SORT_TYPE_EXPLAIN' => 'Seguendo lo stesso principio di cui sopra, si applica alla categoria nuove pagine, es. una mappa forum mappa per il modulo HTML forum.',
	'HTML_PAGINATION_GEN' => 'Paginazione principale',
	'HTML_PAGINATION_SPEC' => 'Paginazione modulo',
	'HTML_PAGINATION' => 'Paginazione mappa sito',
	'HTML_PAGINATION_EXPLAIN' => 'Attiva paginazione sul sito dulle pagine della mappa sito. Puoi decidere di usare solo una o più pagine per le mappe del tuo sito.',
	'HTML_PAGINATION_LIMIT' => 'Elementi per pagina',
	'HTML_PAGINATION_LIMIT_EXPLAIN' => 'Quando la paginazione è attivata, puoi scegliere quanti elementi vuoi visualizzare per pagina.',
	'HTML_NEWS_PAGINATION' => 'Paginazione news',
	'HTML_NEWS_PAGINATION_EXPLAIN' => 'Attiva paginazione sulla pagina news. puoi scegliere quanti elementi vuoi visualizzare per pagina news.',
	'HTML_NEWS_PAGINATION_LIMIT' => 'News per pagina',
	'HTML_NEWS_PAGINATION_LIMIT_EXPLAIN' => 'Quando la paginazione è attivata, puoi scegliere quanti elementi vuoi visualizzare per pagina.',
	'HTML_ITEM_PAGINATION' => 'Impaginazione voci',
	'HTML_ITEM_PAGINATION_EXPLAIN' => 'Puoi decidere l’uscita cliccando sul link (se disponibile) per i prodotti elencati.',
	// Basic settings
	'HTML_SETTINGS' => 'Configurazione base',
	'HTML_C_INFO' => 'Informazione copyright',
	'HTML_C_INFO_EXPLAIN' => 'Utilizzato per visualizzare le informazioni di copyright nei meta tag per le mappe sito e le pagine delle notizie. Il valore di default è il nome del sito del phpBB. Queste informazioni verranno utilizzate unicamente se hai installato il phpBB SEO meta tag mod.',
	'HTML_SITENAME' => 'Nome sito',
	'HTML_SITENAME_EXPLAIN' => 'Il nome del sito viene mostrato nelle mappe del sito e nelle nuove pagine. Il valore di default è il nome del sito.',
	'HTML_SITE_DESC' => 'Descrizione sito',
	'HTML_SITE_DESC_EXPLAIN' => 'La descrizione del sito viene mostrato nelle mappe del sito e nelle nuove pagine. Il valore di default è il nome del sito.',
	'HTML_LOGO_URL' => 'Logo sito',
	'HTML_LOGO_URL_EXPLAIN' => 'Il file immagine usato come logo del sito nei feeds RSS, è localizzato nella directory gym_sitemaps/images/.',
	'HTML_URL' => 'Url HTML',
	'HTML_URL_EXPLAIN' => 'Devi aggiungere l’URL completo del tuo file map.php, es http://www.example.com/eventual_dir/ se map.php è installato in http://www.example.com/eventual_dir/.<br/>Questa opzione è utile quando phpBB non è installato nel dominio root e se desidi inserire il file il map.php file nella radice.',
	'HTML_RSS_NEWS_URL' => 'Fonte principale pagina news RSS',
	'HTML_RSS_NEWS_URL_EXPLAIN' => 'Devi aggiungere l’URL completo per il feed RSS desideri visualizzare sulla pagina delle news, ad esempio http://www.example.com/gymrss.php?news&amp;digest per visualizzare tutte le news del modulo RSS installato nella pagina principale HTML.<br />Puoi usare un feed RSS 2.0 come fonte per questa pagina.',
	'HTML_STATS_ON_NEWS' => 'Visualizza le statistiche forum sulle nuove pagine news',
	'HTML_STATS_ON_NEWS_EXPLAIN' => 'Visualizza o meno sul forum le statistiche sulle nuove pagine.',
	'HTML_STATS_ON_MAP' => 'Visualizza sul forum le statistiche delle mappe',
	'HTML_STATS_ON_MAP_EXPLAIN' => 'Visualizza o meno sul forum le statistiche delle mappe.',
	'HTML_BIRTHDAYS_ON_NEWS' => 'Visualizza compleanni sulle nuove pagine',
	'HTML_BIRTHDAYS_ON_NEWS_EXPLAIN' => 'Visualizza o meno sul forum i compleanni sulle nuove pagine.',
	'HTML_BIRTHDAYS_ON_MAP' => 'Visualizza compleanni sulle nuove pagine',
	'HTML_BIRTHDAYS_ON_MAP_EXPLAIN' => 'Visualizza o meno compleanni sulle nuove pagine.',
	'HTML_DISP_ONLINE' => 'Visualizza utenti online',
	'HTML_DISP_ONLINE_EXPLAIN' => 'Visualizza o meno utenti online nella lista sulla mappa sito e nelle pagine news.',
	'HTML_DISP_TRACKING' => 'Attiva tracciatura',
	'HTML_DISP_TRACKING_EXPLAIN' => 'Attiva o meno tracciatura voci (letto/non letto).',
	'HTML_DISP_STATUS' => 'Attiva stato',
	'HTML_DISP_STATUS_EXPLAIN' => 'Attiva o meno lo stato degli oggetti del sistama (Annunci, Importanti, Bloccati ecc ... ).',
	// Cache
	'HTML_CACHE' => 'Cache',
	'HTML_CACHE_EXPLAIN' => 'Puoi definire diverse opzioni di cache per il modulo HTML. La cache HTML è separata dalle altre funzioni (Google e RSS). Questo modulo utilizza la cache standard di phpBB.<br/>Queste opzioni non possono quindi essere ereditate dal livello principale, saranno visibili solo i contenuti e saranno messi in cache. Questo impostazioni però, possono essere digitali per i moduli HTML a seconda delle tue impostazioni HTML.<br/><br/>La cache è divisa in due tipi, uno per ogni colonna in uscita : La colonna principale contiene le mappe e le news, è opzionale, per esempio può essere usato per aggiungere un ultimo argomento in annunci attivi del modulo HTML.',
	'HTML_MAIN_CACHE_ON' => 'Attiva colonna principale cache',
	'HTML_MAIN_CACHE_ON_EXPLAIN' => 'Puoi attivare/disattivare le mappe sito e la nuove colonna cache.',
	'HTML_OPT_CACHE_ON' => 'Attiva cache opzionale colonna',
	'HTML_OPT_CACHE_ON_EXPLAIN' => 'Puoi attivare/disattivare la cache opzionale della colonna.',
	'HTML_MAIN_CACHE_TTL' => 'Durata principale cache',
	'HTML_MAIN_CACHE_TTL_EXPLAIN' => 'Numero massimo di ore per la colonna principale in cache prima che sarà aggiornata. Ogni file memorizzato nella cache sarà aggiornato ogni qualvolta qualcuno utilizzerà il browser dopo questa durata e avrà superato il limite.',
	'HTML_OPT_CACHE_TTL' => 'Durata opzionale colonna cache',
	'HTML_OPT_CACHE_TTL_EXPLAIN' => 'Valore massimo espresso in ore per la colonna principale in cache prima che sarà aggiornata. Ogni file memorizzato nella cache sarà aggiornato ogni qualvolta qualcuno utilizzerà il browser dopo questa durata e avrà superato il limite.',
	// Auth settings
	'HTML_AUTH_SETTINGS' => 'Configurazione permessi',
	'HTML_ALLOW_AUTH' => 'Permessi',
	'HTML_ALLOW_AUTH_EXPLAIN' => 'Attiva permessi per la mappa sito e le nuove pagine. Se attivato, gli utenti loggati saranno in grado di navigare nei contenuti per vedere gli oggetti privati, se hanno le dovute autorizzazioni.',
	'HTML_ALLOW_NEWS' => 'Attiva news',
	'HTML_ALLOW_NEWS_EXPLAIN' => 'Ogni modulo può avere una pagina di notizie con le ultime X voci con il loro contenuto, la pagina può essere filtrata. La pagina forum è generalmente una pagina visualizzata con i dieci ultimi argomenti ed i primi messaggi della raccolta provenienti da una selezione di forum pubblici o privati.',
	'HTML_ALLOW_CAT_NEWS' => 'Attiva news categoria',
	'HTML_ALLOW_CAT_NEWS_EXPLAIN' => 'Seguendo gli stessi principi con la pagina news, ogni modulo categoria può avere una pagina notizie.',
	// Content
	'HTML_NEWS' => 'Nuova configurazione',
	'HTML_NEWS_EXPLAIN' => 'Qui puoi configurare, filtrare e formattare varie opzione per le news. <br/>Possono essere applicate ai moduli HTML e dipendono dalle tue configurazioni HTML.',
	'HTML_NEWS_CONTENT' => 'Configurazione contenuto news',
	'HTML_SUMARIZE' => 'Voci raccolta',
	'HTML_SUMARIZE_EXPLAIN' => 'Si può riassumere il contenuto del messaggio inserito nelle pagine news.<br/> Il limite stabilisce il valore massimo di frasi, parole o caratteri, secondo il metodo scelto sotto. Scegli 0 per disattiavare il controllo.',
	'HTML_SUMARIZE_METHOD' => 'Metodo raccolta',
	'HTML_SUMARIZE_METHOD_EXPLAIN' => 'Puoi selezionare tre differenti metodi per limitare il contenuto dei messaggi nei feeds.<br/> Per numero di linee, per numero di parole e per numero di caratteri. I BBcode tags e le parole non possono essere danneggiati.',
	'HTML_ALLOW_PROFILE' => 'Mostra profili',
	'HTML_ALLOW_PROFILE_EXPLAIN' => 'Possono essere aggiunte le voci di un determinato autore.',
	'HTML_ALLOW_PROFILE_LINKS' => 'Profilo link',
	'HTML_ALLOW_PROFILE_LINKS_EXPLAIN' => 'Se il nome dell’auore è incluso, puoi decidere di inserire il link o il orofilo corrispondente in phpBB.',
	'HTML_ALLOW_BBCODE' => 'Permetti BBcodes',
	'HTML_ALLOW_BBCODE_EXPLAIN' => 'Qui puoi scegliere di selezionare il parsing in uscita o aggiungere il Bbcode.',
	'HTML_STRIP_BBCODE' => 'Lista BBcodes',
	'HTML_STRIP_BBCODE_EXPLAIN' => 'Puoi configurare una lista di bbcodes per escludere il parsing .<br/>Il formato è semplice : <br/><ul><li> <u>Lista di bbcodes separati da spazi :</u> Cancella tags bbcode, Lascia il contenuto. <br/><u>Esempio :</u> <b>img,b,quote</b> <br/> In questo esempio, al bbcode grassetto e cita non viene attivato il parsing, the bbcode tags themselves will be deleted and the content inside the bbcode tags kept.</li><li> <u>Comma separated list of bbcodes with colon option :</u> Delete bbcode tags and decide about their content. <br/><u>Example :</u> <b>img:1,b:0,quote,code:1</b> <br/> In this example, img bbcode and the img link will be deleted, bold won’t be processed, but the bold-ed text will be kept, quote won’t be parsed, but their content will be kept, code bbcode and their content will be deleted from the output.</ul>The filter will work even if bbcode is empty. Handy to delete code tags content and img links from output for example.<br/>The filtering occurs before summarizing.<br/> The Magic parameter "all" (can be all:0 or all:1 to strip bbcode tags content as well) will take care of all at once.',
	'HTML_ALLOW_LINKS' => 'Permetti attiva links',
	'HTML_ALLOW_LINKS_EXPLAIN' => 'Puoi scegliere di attivare i links non utilizzati nel contenuto degli elementi.<br/> Se la funzione è disattivata, links e emails saranno incluse nel contenuto ma non saranno cliccabili.',
	'HTML_ALLOW_EMAILS' => 'Permetti emails',
	'HTML_ALLOW_EMAILS_EXPLAIN' => 'Puoi scegliere una "email di dominio DOT com" ad esempio "email@domain.com" nel contenuto delle voci.',
	'HTML_ALLOW_SMILIES' => 'Permetti Smilies',
	'HTML_ALLOW_SMILIES_EXPLAIN' => 'Puoi scegliere di attivare o ignorare gli smilies nel contenuto.',
	'HTML_ALLOW_SIG' => 'Permetti firme',
	'HTML_ALLOW_SIG_EXPLAIN' => 'uoi scegliere di attivare o ignorare le firme nel contenuto.',
	'HTML_ALLOW_MAP' => 'Attiva il modulo mappa',
	'HTML_ALLOW_MAP_EXPLAIN' => 'Puoi attivare/disattivare il modulo mappa sito.',
	'HTML_ALLOW_CAT_MAP' => 'Attiva il modulo categoria mappe',
	'HTML_ALLOW_CAT_MAP_EXPLAIN' => 'Puoi attivare/disattivare il modulo categoria mappe.',
));
?>