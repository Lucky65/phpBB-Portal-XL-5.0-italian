<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_rss.php 204 2009-12-20 12:04:51Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 portalxl.eu - update translation for portal xl on 2011/04/14
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_rss [Italian]
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
	'RSS_MAIN' => 'Configurazione feeds RSS',
	'RSS_MAIN_EXPLAIN' => 'Qui puoi impostare la configurazione principale per il modulo feeds RSS.<br/>Queste impostazioni sono applicate a tutti i moduli RSS e dipendono dalle tue impostazioni RSS predefinite.',
	// Linking setup
	'RSS_LINKS_ACTIVATION' => 'Forum Linking',
	'RSS_LINKS_MAIN' => 'Links principali',
	'RSS_LINKS_MAIN_EXPLAIN' => 'Visualizza o meno link indice della mappa nel footer.<br/>Questa funzionalità richiede che i links vengano attivati nella configurazione principale.',
	'RSS_LINKS_INDEX' => 'Links nell’indice',
	'RSS_LINKS_INDEX_EXPLAIN' => 'Visualizza o meno limks delle mappe disponibili nell’indice del forum. I links sono aggiunti vicino la descrizione del forum.<br/>Questa funzionalità richiede che i links vengano attivati nella configurazione principale.',
	'RSS_LINKS_CAT' => 'Links sulla pagina del forum',
	'RSS_LINKS_CAT_EXPLAIN' => 'Visualizza o meno links alle mappe sito del forum corrente. I links sono aggiunti vicino al titolo del form.<br/>Questa funzionalità richiede che i links vengano attivati nella configurazione principale.',
	// Reset settings
	'RSS_ALL_RESET' => 'Tutti i moduli RSS',
	// Limits
	'RSS_LIMIT_GEN' => 'Limiti principali',
	'RSS_LIMIT_SPEC' => 'Limiti RSS',
	'RSS_URL_LIMIT_LONG' => 'Limite lunghezza feeds',
	'RSS_URL_LIMIT_LONG_EXPLAIN' => 'Numero di voci visulizzate nel feed senza contenuto, richiede l’abilitazione dei feeds di lunga durata.',
	'RSS_SQL_LIMIT_LONG' => 'Ciclo lungo SQL',
	'RSS_SQL_LIMIT_LONG_EXPLAIN' => 'Numero di voci interrogate in un determinato tempo per una lunga durata senza contenuto.',
	'RSS_URL_LIMIT_SHORT' => 'Limite breve feeds',
	'RSS_URL_LIMIT_SHORT_EXPLAIN' => 'Numero di voci visulizzate in un breve tempo senza contenuto, richiede l’abilitazione dei feeds di breve durata.',
	'RSS_SQL_LIMIT_SHORT' => 'Ciclo breve SQL',
	'RSS_SQL_LIMIT_SHORT_EXPLAIN' => 'umero di voci interrogate in un momento per una durata breve senza contenuto.',
	'RSS_URL_LIMIT_MSG' => 'Limite con contenuto di default',
	'RSS_URL_LIMIT_MSG_EXPLAIN' => 'Numero di voci visualizzate per default con contenuto, richiede l’abilitazione di voci attivate.',
	'RSS_SQL_LIMIT_MSG' => 'Ciclo SQL con contenuto',
	'RSS_SQL_LIMIT_MSG_EXPLAIN' => 'Numero di voci interrogate in un determinato tempo per un feed con contenuto.',
	// Basic settings
	'RSS_SETTINGS' => 'Configurazione base',
	'RSS_C_INFO' => 'Informazioni Copyright',
	'RSS_C_INFO_EXPLAIN' => 'Le informazioni di Copyright mostrano queste informazioni nei feeds RSS. Per default viene indicato il nome del sito scritto in phpBB.',
	'RSS_SITENAME' => 'Nome sito',
	'RSS_SITENAME_EXPLAIN' => 'Il nome del sito da visualizzare nei feeds RSS. Il nome di default è quello scritto in phpBB.',
	'RSS_SITE_DESC' => 'Descrizione sito',
	'RSS_SITE_DESC_EXPLAIN' => 'La decrizione del sito da visualizzare nei feeds RSS. La descrizione di default è quella scritta in phpBB.',
	'RSS_LOGO_URL' => 'Logo sito',
	'RSS_LOGO_URL_EXPLAIN' => 'L’immagine usata come logo del sito nel feed RSS, è posizionata nel percorso gym_sitemaps/images/.',
	'RSS_IMAGE_URL' => 'Logo RSS',
	'RSS_IMAGE_URL_EXPLAIN' => 'L’immagine usata come logo rss nel feed RSS, è posizionata nel percorso gym_sitemaps/images/.',
	'RSS_LANG' => 'Lingua RSS',
	'RSS_LANG_EXPLAIN' => 'La lingua utilizzata nel feed RSS. La lingua di dfault è quella utilizzata da phpBB.',
	'RSS_URL' => 'Feed URL',
	'RSS_URL_EXPLAIN' => 'Inserire l’url completo del file gymrss.php, es. http://www.example.com/eventual_dir/ se gymrss.php è installato in http://www.example.com/eventual_dir/.<br/>Questa opzione è utile quando phpBB non è installato nella root del dominio e vuoi utilizzare il file gymrss.php nel livello root.',
	// Auth settings
	'RSS_AUTH_SETTINGS' => 'Configurazione permessi',
	'RSS_ALLOW_AUTH' => 'Autorizzazioni',
	'RSS_ALLOW_AUTH_EXPLAIN' => 'Attiva permessi nei feed RSS. Se attivati, gli utenti registrati saranno in grado di navigare nei feeds privati e di visualizzare gli elementi dei forum privati, in generale, potranno accedere a questa funzione se disporranno delle dovute autorizzazioni.',
	'RSS_CACHE_AUTH' => 'Cache feeds privati',
	'RSS_CACHE_AUTH_EXPLAIN' => 'Puoi disabilitare la cache per i feeds privati.<br/> La cache dei feeds privati incrementa il numero di filesin cache;  questo non è un problema, ma puoi sempre decidere di usare la cache solo per i feeds pubblici.',
	'RSS_NEWS_UPDATE' => 'Aggiornamento news feeds',
	'RSS_NEWS_UPDATE_EXPLAIN' => 'Quando i feeds news sono attivati, puoi configurare un tempo personalizzato in ore per tutti i feeds news. Utilizza 0 o lascia vuoto per disattivare l’uso e la durata del regolare aggiornamento.',
	'RSS_ALLOW_NEWS' => 'Autorizza feeds news',
	'RSS_ALLOW_NEWS_EXPLAIN' => 'I feed news utilizzano il primo elemento senza considerare le successive risposte. E’ un feed supplementare che non interferisca con gli altri.  Può essere utile se, per esempio, desideri inviare il tuo feed forum a Google News.',
	'RSS_ALLOW_SHORT' => 'Autorizza feeds brevi',
	'RSS_ALLOW_SHORT_EXPLAIN' => 'Permette di usare o meno i feeds RSS brevi.',
	'RSS_ALLOW_LONG' => 'Autorizza feeds lunghi',
	'RSS_ALLOW_LONG_EXPLAIN' => 'Permette di usare o meno i feeds RSS lunghi.',
	// Notifications
	'RSS_NOTIFY' => 'Notifiche',
	'RSS_YAHOO_NOTIFY' => 'Notifiche Yahoo',
	'RSS_YAHOO_NOTIFY_EXPLAIN' => 'Attiva le notifiche a Yahoo per i feeds RSS.<br/> Non riguarda i feeds generali (RSS.xml).<br/>Ogni volta la cache di un feed è aggiornato, una notifica verrà inviata a Yahoo!<br/><u>NOTA :</u>Devi inserire il tuo ID Yahoo per inviare la notifica.',
	'RSS_YAHOO_APPID' => 'Yahoo! YD',
	'RSS_YAHOO_APPID_EXPLAIN' => 'Entra nel tuo Yahoo! ID. Se non hai ancora un ID, visita il sito <a href="http://api.search.yahoo.com/webservices/register_application">questa pagina</a>.<br/><u>NOTA :</u>Devi registrarti per ottenere un’account ID.',
	// Styling
	'RSS_STYLE' => 'Stile Rss',
	'RSS_XSLT' => 'Stile XSLT',
	'RSS_XSLT_EXPLAIN' => 'Gli stile RSS possono essere utilizzati usando la trasformazione XLT, maggiori informazioni sono disponibili su questa <a href="http://www.w3schools.com/xsl/xsl_transformation.asp">pagina</a> che riguarda i fogli di stile.',
	'RSS_FORCE_XSLT' => 'Forza stili',
	'RSS_FORCE_XSLT_EXPLAIN' => 'Può sembrare strano, ma abbiamo bisogno di truccare il browser per consentire l’utilizzo XLST. Lo facciamo con l’aggiunta di alcuni caratteri di spazio all’inizio del codice XML.<br/>FF 2 and IE7 leggono solo i primi 500 caratteri quindi impongono il loro trattamento come privato.',
	'RSS_LOAD_PHPBB_CSS' => 'Carica CSS di phpBB',
	'RSS_LOAD_PHPBB_CSS_EXPLAIN' => 'Il modulo mappa sito GYM utilizza appieno il potenta sistama di phpBB3 per la gestione degli stili. I fogli di stile XSL utilizzato per costruire l’uscita HTML è compatibile con gli stili di phpBB3.<btr/>Con questa opzione, puoi decidere di applicare il CSS di phpBB sul foglio di stile XSL al posto di quello di default. In questo modo, tutte le tue personalizzazioni del tema, come sfondo e colore del carattere o addirittura immagini saranno utilizzati per la lo stile di uscita RSS.<br/>Questo può avvenire solo dopo aver cancellato la cache, troverai il link nel menu di "Manutenzione".<br/>Se il file di stile RSS non è presente nello stile attuale, sarà utilizzato lo stile di default (sempre disponibile, basato su prosilver).<br/>Non provare ad utilizzare lo stile prosilver in un’altro stile, sicuramente il CSS non funzionerà.',
	// Content
	'RSS_CONTENT' => 'Configurazione contenuto',
	'RSS_CONTENT_EXPLAIN' => 'Qui puoi configurare varie opzioni per filtrare/formattare il contenuto. <br/>Queste opzioni possono essere applicate a tutti i moduli RSS e dipendono dalle tue configurazioni preimpostate.',
	'RSS_ALLOW_CONTENT' => 'Permetti contenuto voci',
	'RSS_ALLOW_CONTENT_EXPLAIN' => 'Qui puoi scegliere di consentire il contenuto del messaggio in modo tale da essere totalmente o parzialmente visualizzato nel feed RSS. <br/><u>NOTA :</u> Questa opzione crea un maggior lavoro al server, è preferibile diminuire i limiti per eliminare questo problema.',
	'RSS_SUMARIZE' => 'Raccolta voci',
	'RSS_SUMARIZE_EXPLAIN' => 'Si può riassumere il contenuto del messaggio messo in feed.<br/> Il limite fissa il valore massimo di frasi, parole o caratteri, secondo il metodo scelto qui di seguito. Immettere 0 per disabilitare la funzione.',
	'RSS_SUMARIZE_METHOD' => 'Metodo raccolta',
	'RSS_SUMARIZE_METHOD_EXPLAIN' => 'Si può scegliere tra tre diversi metodi per limitare il contenuto dei messaggi nel feed.<br/> Per numero di linee, per numero di parole e per numero di caratteri. I tags BBcode e le parole non saranno interrotti.',
	'RSS_ALLOW_PROFILE' => 'Mostra profili',
	'RSS_ALLOW_PROFILE_EXPLAIN' => 'Se lo desideri nei feeds RSS possono essere aggiunti i nomi degli autori.',
	'RSS_ALLOW_PROFILE_LINKS' => 'Link profilo',
	'RSS_ALLOW_PROFILE_LINKS_EXPLAIN' => 'Se il nome dell’autore è incluso, puoi decidere di lincare o meno il corrispondente profilo in phpBB.',
	'RSS_ALLOW_BBCODE' => 'Permetti BBcodes',
	'RSS_ALLOW_BBCODE_EXPLAIN' => 'Qui puoi scegliere di selezionare il parsing in uscita o aggiungere il Bbcode.',
	'RSS_STRIP_BBCODE' => 'Lista BBcodes',
	'RSS_STRIP_BBCODE_EXPLAIN' => 'Puoi configurare una lista di bbcodes per escludere il parsing .<br/>Il formato è semplice : <br/><ul><li> <u>Lista di bbcodes separati da spazi :</u> Cancella tags bbcode, Lascia il contenuto. <br/><u>Esempio :</u> <b>img,b,quote</b> <br/> In questo esempio, al bbcode grassetto e cita non viene attivato il parsing, the bbcode tags themselves will be deleted and the content inside the bbcode tags kept.</li><li> <u>Comma separated list of bbcodes with colon option :</u> Delete bbcode tags and decide about their content. <br/><u>Example :</u> <b>img:1,b:0,quote,code:1</b> <br/> In this example, img bbcode and the img link will be deleted, bold won’t be processed, but the bold-ed text will be kept, quote won’t be parsed, but their content will be kept, code bbcode and their content will be deleted from the output.</ul>The filter will work even if bbcode is empty. Handy to delete code tags content and img links from output for example.<br/>The filtering occurs before summarizing.<br/> The Magic parameter "all" (can be all:0 or all:1 to strip bbcode tags content as well) will take care of all at once.',
	'RSS_ALLOW_LINKS' => 'Permetti attiva links',
	'RSS_ALLOW_LINKS_EXPLAIN' => 'Puoi scegliere di attivare i links non utilizzati nel contenuto degli elementi.<br/> Se la funzione è disattivata, links e emails saranno incluse nel contenuto ma non saranno cliccabili.',
	'RSS_ALLOW_EMAILS' => 'Permetti emails',
	'RSS_ALLOW_EMAILS_EXPLAIN' => 'Puoi scegliere una "email di dominio DOT com" ad esempio "email@domain.com" nel contenuto delle voci.',
	'RSS_ALLOW_SMILIES' => 'Permetti Smilies',
	'RSS_ALLOW_SMILIES_EXPLAIN' => 'Puoi scegliere di attivare o ignorare gli smilies nel contenuto.',
	'RSS_NOHTML' => 'Filtra HTML',
    'RSS_NOHTML_EXPLAIN' => 'Filtra, o no, l\'html nei feed rss. Se attivi questa opzione, i feed rss conterranno solo del normale testo.',
	// Old URL handling
	'RSS_1XREDIR' => 'Gestione GYM 1x riscrittura URL',
	'RSS_1XREDIR_EXPLAIN' => 'Attivare la riscrittura automatica degli URL. Nel modulo verrà visualizzato un feed personalizzato che fornisce il nuovo URL del feed richiesto.<br/><u>Nota :</u><br/>Questa opzione richiede la compatibilità del mod rewrite come spiegato nel file di installazione.',
));
?>