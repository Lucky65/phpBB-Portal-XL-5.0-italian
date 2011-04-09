<?php
/**
*
* phpbb_seo [Italian]
*
* @package Ultimate SEO URL phpBB SEO
* @version $Id: acp_phpbb_seo.php 149 2009-11-10 11:10:00Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/01/01
* @license http://www.opensource.org/licenses/rpl1.5.txt Reciprocal Public License 1.5
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
	// ACP Main CAT
	'ACP_CAT_PHPBB_SEO'	=> 'phpBB SEO',
	'ACP_MOD_REWRITE'	=> 'Configurazione riscrittura URL',
	// ACP phpbb seo class
	'ACP_PHPBB_SEO_CLASS'	=> 'Configurazione phpBB SEO',
	'ACP_PHPBB_SEO_CLASS_EXPLAIN'	=> 'Puoi impostare varie opzioni della Mod phpBB Seo.<br/>Le varie impostazioni di default, come i delimitatori ed i suffissi devono essere istituiti in phpbb_seo_class.php, dal momento che implica una modifica di queste nell’.htaccess e, molto probabilmente, nel caso di redirezioni nell’%s.',
	'ACP_PHPBB_SEO_VERSION' => 'Versione',
	'ACP_PHPBB_SEO_MODE' => 'Modo',
	'ACP_SEO_SUPPORT_FORUM' => 'Supporto Forum',
	// ACP forum urls
	'ACP_FORUM_URL'	=> 'Gestione URL Forum',
	'ACP_FORUM_URL_EXPLAIN'		=> 'Qui puoi vedere quello che contiene la cache del forum, il titolo da inserire nei loro URL.<br/>Il forum di colore verde è in cache, quello di colore rosso non è in cache.<br/><br/><b style="color:red">Nota bene</b><ul><b>any-title-fxx/</b> sarà sempre correttamente reindirizzato con Zero duplicati, ma non sarà il caso se si modifica <b>any-title/</b> a <b>something-else/</b>.<br/> In questo caso, <b>any-title/</b> sarà trattato come un forum che non esiste se non imposti adeguate redirezioni.</ul>',
	'ACP_NO_FORUM_URL'	=> '<b>Gestione URL forum disattivato<b><br/>La gestione dell’URL forum è disponibile in avanzate e nel modo misto quando la cache del forum è attivata.<br/>Gli URL sono già configurati e resterà attivo in modalità mista e avanzata.',
	// ACP .htaccess
	'ACP_HTACCESS'	=> '.htaccess',
	'ACP_HTACCESS_EXPLAIN'	=> 'Questo strumento ti aiuterà a costruire il tuo .htacess.<br/>La versione proposta è scritta nella tua configurazione di phpbb_seo/phpbb_seo_class.php.<br/>Puoi modificare i valori di $seo_ext e $seo_static prima di installare .htaccess e personalizzare gli URL.<br/>Puoi ad esempio scegliere di usare .htm invece di .html, ’message’ invece di ’post’ ’mysite-team’ invece di ’the-team’ e altri.<br/>Puoi modificare mentre sei già indicizzato in SE, devi personalizzate le redirezioni.<br/>La configurazione di default non va bene per tutto, puoi saltare questo step senza preoccupazioni, se preferisci.<br/>E’il momento migliore per farlo, facendolo dopo richiederà alcune redirezioni personalizzate.<br/>Per default l’.htaccess deve essere caricato nella root del dominio (es dove www.example.com è linkato).<br/>Se phpBB è inserito in una sotto-directory, devi aggiungere l’opzione che consente di caricarlo nel phpBB.',
	'SEO_HTACCESS_RBASE'	=> 'Locazione .htaccess',
	'SEO_HTACCESS_RBASE_EXPLAIN' => 'Inserisci .htaccess nella root del tuo phpBB ?<br/>La configurazione di base permette di aggiungere .htaccess nella tua directory. Generalmente è più conveniente inserire htaccess nellla cartella principale del phpbb, puoi anche aggiungerlo in una sotto directory,  ma è preferibile inserire l’htaccess nella directory principale.',
	'SEO_HTACCESS_SLASH'	=> 'RegEx Slash Destro',
	'SEO_HTACCESS_SLASH_EXPLAIN'	=> 'Dipende dall’host che usi, potrebbe essere necessario eliminare o aggiungere  ("/") all’inizio della parte destra di ogni regola di riscrittura. Questo particolare slash è usato per default quando .htaccess è posizionato nel primo livello della root. Al contrario se è posizionato in una sottodirectory ed usi un .htaccess nella stessa directory.<br/>Le impostazioni predefinite dovrebbero funzionare automaticamente, in caso contrario prova a rigenerare un .htaccess usando il pulsante di rigenerazione.',
	'SEO_HTACCESS_WSLASH'	=> 'RegEx Slash Sinistro',
	'SEO_HTACCESS_WSLASH_EXPLAIN'	=> 'Dipende dall’host che usi, potrebbe essere necessario eliminare o aggiungere  ("/") all’inizio della parte destra di ogni regola di riscrittura. Questo particolare slash non è usato per default.<br/>Le impostazioni predefinite dovrebbero funzionare automaticamente, in caso contrario prova a rigenerare un .htaccess usando il pulsante di rigenerazione.',
	'SEO_MORE_OPTION'	=> 'Altre Opzioni',
	'SEO_MORE_OPTION_EXPLAIN' => 'Se il primo suggerimento non funziona.<br/>Sii sicuro che il mod_rewrite sia attivato sul tuo server.<br/>Quindi, assicurati di avere caricato il .htaccess nella cartella giusta, e che non ci siano altri .htaccess che creano conflitto.<br/>Se questo non basta verifica le altre opzioni.',
	'SEO_HTACCESS_SAVE' => 'Salva .htaccess',
	'SEO_HTACCESS_SAVE_EXPLAIN' => 'Se selezionato un .htaccess verrà generato nella directory phpbb_seo/cache/. Quindi sarà pronto per essere usato con le tue impostazioni.',
	'SEO_HTACCESS_ROOT_MSG'	=> 'Quando sei pronto è possibile selezionare il codice .htaccess, ed incollarlo nel tuo file .htaccess file o usare "Salva .htaccess" con le relative istruzioni.<br/> Questo .htaccess è pensato per essere usato nella cartella principale del tuo dominio, nel tuo caso <u>%1$s</u> aggiungilo con il tuo FTP.<br/><br/>Puoi anche rigenerare un .htaccess in una sottodirectory usando le altre opzioni.',
	'SEO_HTACCESS_FOLDER_MSG' => 'Quando sei pronto è possibile selezionare il codice .htaccess, ed incollarlo nel tuo file .htaccess file o usare "Salva .htaccess" con le relative istruzioni.<br/> Questo .htaccess è pensato per essere usato nella cartella principale del tuo dominio, nel tuo caso <u>%1$s</u> aggiungilo con il tuo FTP.',
	'SEO_HTACCESS_CAPTION' => 'Titolo',
	'SEO_HTACCESS_CAPTION_COMMENT' => 'Commenti',
	'SEO_HTACCESS_CAPTION_STATIC' => 'Statistica, modificabile in phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_DELIM' => 'Delimitatori, modificabili in phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SUFFIX' => 'Suffissi, modificabili in phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SLASH' => 'Slashes opzionali',
	'SEO_SLASH_DEFAULT'	=> 'Default',
	'SEO_SLASH_ALT'		=> 'Alternato',
	'SEO_MOD_TYPE_ER'	=> 'Il mod rewrite non è installato correttamente in phpbb_seo/phpbb_seo_class.php.', 
	'SEO_SHOW'		=> 'Mostra',
	'SEO_HIDE'		=> 'Nascondi',
	'SEO_SELECT_ALL'	=> 'Seleziona tutto',
	// ACP extended
	'ACP_SEO_EXTENDED_EXPLAIN' => 'Configurazioni estese di phpBB SEO mod.',
	'SEO_EXTERNAL_LINKS' => 'Links esterni',
	'SEO_EXTERNAL_LINKS_EXPLAIN' => 'Apre o meno i links esterni in una nuova finestra/scheda',
	'SEO_EXTERNAL_SUBDOMAIN' => 'Links sottodomini',
	'SEO_EXTERNAL_SUBDOMAIN_EXPLAIN' => 'Apre o meno i sottodomini (del tuo server) in una nuova finestra/scheda',
	'SEO_EXTERNAL_CLASSES' => 'Classe esterna con css class',
	'SEO_EXTERNAL_CLASSES_EXPLAIN' => 'qui puoi definire la classe css che attiverà la funzione di una nuova finestra sui links. Elenco separato di nomi di classe, ad esempio: postlink,external',
	// Titles
	'SEO_PAGE_TITLES' => '<a href="http://www.phpbb-seo.com/en/phpbb-seo-toolkit/optimal-titles-t1289.html" title="Mod titoli ottimali" onclick="window.open(this.href); return false;">Titoli pagina</a>',
	'SEO_APPEND_SITENAME' => 'Aggiunge il nome del sito alla pagina titoli',
	'SEO_APPEND_SITENAME_EXPLAIN' => 'Aggiunge o meno il nome del sito alla pagina titoli.<br/><b style="color:red;">Attenzione :</b><br/>Questa opzione richiede la modifica del tuo overall_header.html per la mod titoli ottimali, il nome del sito potrebbe essere ripetuto nei titoli delle pagine.',
	// Meta
	'SEO_META' => '<a href="http://www.phpbb-seo.com/en/phpbb-seo-toolkit/seo-dynamic-meta-tags-t1308.html" title="Mod Meta tags dinamico" onclick="window.open(this.href); return false;">Meta tags</a>',
	'SEO_META_TITLE' => 'Titolo meta',
	'SEO_META_TITLE_EXPLAIN' => 'Titolo meta predefinito, utilizzati nella pagina. Disattiva il titolo metatag se vuoto.',
	'SEO_META_DESC' => 'Descrizione meta',
	'SEO_META_DESC_EXPLAIN' => 'Descrizione meta predefinita, utilizzati nella pagina, non la definizione di una descrizione meta.',
	'SEO_META_DESC_LIMIT' => 'Limite meta descrizione',
	'SEO_META_DESC_LIMIT_EXPLAIN' => 'Limite in parole per i tags della descrizione meta',
	'SEO_META_BBCODE_FILTER' => 'Filtro Bbcodes',
	'SEO_META_BBCODE_FILTER_EXPLAIN' => 'Elenco separato di BBCodes che saranno filtrati in meta-tag. Gli altri saranno semplicemente disattivati e il loro contenuto potrebbe non essere visualizzato nel meta-tag.<br/> I bbcodes filtrati sono : <b>img,url,flash,code</b>.<br/><b style="color:red;">Attenzione :</b><br/>Non filtra url e flash bbcode. In linea generale, puoi mantenere il contenuto BBCode avere contenuti interessanti per meta.',
	'SEO_META_KEYWORDS' => 'Meta keywords',
	'SEO_META_KEYWORDS_EXPLAIN' => 'Meta keywords predefinite, utilizzati nella pagina. Basta inserire semplicemente una lista di parole',
	'SEO_META_KEYWORDS_LIMIT' => 'Limite Meta keywords',
	'SEO_META_KEYWORDS_LIMIT_EXPLAIN' => 'Limite in parole per i tags Meta keywords',
	'SEO_META_MIN_LEN' => 'Filtra parole corte',
	'SEO_META_MIN_LEN_EXPLAIN' => 'Valore minimo di caratteri in parole inclusi nei tags Meta keywords, solo parole composto da un mumero superiore a questo limite verrà presa in considerazione',
	'SEO_META_CHECK_IGNORE' => 'Ignora filtro parole',
	'SEO_META_CHECK_IGNORE_EXPLAIN' => 'Applica o meno l’esclusione search_ignore_words.php nei tags meta keywords',
	'SEO_META_LANG' => 'Linguaggio meta ',
	'SEO_META_LANG_EXPLAIN' => 'Codice lingua usato nei meta tags',
	'SEO_META_COPY' => 'Meta copyright',
	'SEO_META_COPY_EXPLAIN' => 'Copyright usato nei meta tags. Disattivati i meta copyright se vuoto.',
	'SEO_META_FILE_FILTER' => 'Filtro file',
	'SEO_META_FILE_FILTER_EXPLAIN' => 'Elenco separato di script php e nome file che non devono essere indicizzati (robots:noindex,follow). Esempio : ucp,mcp',
	'SEO_META_GET_FILTER' => 'Filtro _GET',
	'SEO_META_GET_FILTER_EXPLAIN' => 'Elenco separato di variabili _GET variable che non devono essere indicizzate (robots:noindex,follow). Esempio : style,hilit,sid',
	'SEO_META_ROBOTS' => 'Meta Robots',
	'SEO_META_ROBOTS_EXPLAIN' => 'I tags meta Robots tag che saranno inviati ai bots come indice delle tue pagine. Per configurazione predefinita il valore è "index,follow", che permette di indicizzare e inviare la cache delle pagine o di seguire i link in essi. Disattiva il meta tag robots se vuoto.<br/><b style="color:red;">Attenzione :</b><br/>Il tag è sensibile, se usi "noindex", nessuna pagina sarà indicizzata.',
	'SEO_META_NOARCHIVE' => 'Nessun archivio Meta Robots',
	'SEO_META_NOARCHIVE_EXPLAIN' => 'Il tag nessun archivio comunica ai bots se il sito può essere cachato o meno. Vietare la cache, non ha alcun rapporto con l’indicizzazione e SERPS della pagina.<br/>Puoi selezionare una lista di forum che saranno "non-archiviati", l’opzione sarà aggiunta nei meta robots.<br/>Questa funzione può essere utile per esempio quando si hanno alcuni forum aperti ai bots, ma chiuso agli ospiti. Aggiungendo l’opzione "noarchive" impedirà ai clients da accedere a contenuti tramite la cache del motore di ricerca, mentre il forum e il suo argomento verrà comunque visualizzato nelle SERPS.',
	// Install
	'SEO_INSTALL_PANEL'	=> 'Pannello Installazione phpBB SEO',
	'SEO_ERROR_INSTALL'	=> 'Risulta un’errore nel processo di installazione. Disinstalla prima di riprovare.',
	'SEO_ERROR_INSTALLED'	=> 'Il modulo %s è già installato.',
	'SEO_ERROR_ID'	=> 'Il modulo %1$ ha numero ID.',
	'SEO_ERROR_UNINSTALLED'	=> 'Il modulo %s è già disinstallato.',
	'SEO_ERROR_INFO'	=> 'Informazione :',
	'SEO_FINAL_INSTALL_PHPBB_SEO'	=> 'Login in ACP',
	'SEO_FINAL_UNINSTALL_PHPBB_SEO'	=> 'Ritorna all’indice del forum',
	'CAT_INSTALL_PHPBB_SEO'	=> 'Installazione',
	'CAT_UNINSTALL_PHPBB_SEO'	=> 'Disinstallazione',
	'SEO_OVERVIEW_TITLE'	=> 'Panoramica riscrittura phpBB SEO Mod',
	'SEO_OVERVIEW_BODY'	=> 'Benvenuto nella versione pubblica di %1$s phpBB3 SEO mod rewrite %2$s.</p><p>Leggi <a href="%3$s" title="Check the release thread" target="_phpBBSEO"><b>the release thread</b></a> per altre informazioni</p><p><strong style="text-transform: uppercase;">Nota:</strong> Devi avere già svolto le necessarie modifiche al codice e caricato tutti i nuovi file prima di poter procedere con questa procedura guidata di installazione.</p><p>Questo sistema di installazione ti guiderà attraverso il processo di installazione. Ti permetterà di scegliere in modo accurato il tuo phpBB rewritten URL standard per il migliore uso nei motori di ricerca</p>.',
	'CAT_SEO_PREMOD'	=> 'phpBB SEO Premod',
	'SEO_PREMOD_TITLE'	=> 'Panoramica phpBB SEO Premod',
	'SEO_PREMOD_BODY'	=> 'Benvenuto nella versione pubblica di phpBB SEO Premod.</p><p>Leggi <a href="http://www.phpbb-seo.com/boards/phpbb-seo-premod/seo-url-premod-vt1549.html" title="Check the release thread" target="_phpBBSEO"><b>the release thread</b></a> per altre informazioni</p><p><strong style="text-transform: uppercase;">Nota:</strong> Potrai scegliere tra i tre phpBB3 SEO mod rewrites.<br/><br/><b>Tre differenti URL riscrittura standards disponibili :</b><ul><li><a href="http://www.phpbb-seo.com/boards/simple-seo-url/simple-phpbb3-seo-url-vt1566.html" title="More details about the Simple mod"><b>The Simple mod</b></a>,</li><li><a href="http://www.phpbb-seo.com/boards/mixed-seo-url/mixed-phpbb3-seo-url-vt1565.html" title="More details about the Mixed mod"><b>The Mixed mod</b></a>,</li><li><a href="http://www.phpbb-seo.com/boards/advanced-seo-url/advanced-phpbb3-seo-url-vt1219.html" title="More details about the Advanced mod"><b>Advanced</b></a>.</li></ul>Questa scelta è molto importante, ti invitiamo a prendere il tempo per scoprire gli strumenti SEO di questo mod prima di metterlo online.<br/>Installarlo è semplice su phpBB3, segui il processo di installazione.<br/><br/>
	<p>Requisiti per riscrittura URL:</p>
	<ul>
		<li>Apache server (linux OS) con mod_rewrite module.</li>
		<li>IIS server (windows OS) con isapi_rewrite module, ma devi adattare le regole di rewrite in httpd.ini</li>
	</ul>
	<p>Dopo averlo installato sarà necessario andare nel tuo ACP ed attivare la mod.</p>',
	'SEO_LICENCE_TITLE'	=> 'LICENZA PUBBLICA RECIPROCA',
	'SEO_LICENCE_BODY'	=> 'Il phpBB SEO mod rewrites è realizzato sotto licenza RPL e afferma che non è possibile rimuovere i crediti di phpBB SEO.<br/>Per altri dettagli ed eventuali eccezioni, contatta l’amministratore di phpBB SEO (primarily SeO or dcz).',
	'SEO_PREMOD_LICENCE'	=> 'Il phpBB SEO mod rewrites e Zero duplicati incluso in questo mod sono realizzati sotto licenza RPL, per utilizzare liberamente questo software, la licenza afferma che tu non puoi eliminare i crediti di phpBB SEO.<br/>Per altri dettagli ed eventuali eccezioni, contatta l’amministratore di phpBB SEO (primarily SeO or dcz).',
	'SEO_SUPPORT_TITLE'	=> 'Supporto',
	'SEO_SUPPORT_BODY'	=> 'Pieno supporto è disponibile nel <a href="%1$s" title="Visit the %2$s SEO URL forum" target="_phpBBSEO"><b>%2$s SEO URL forum</b></a>. Puoi trovare risposte generali riguardanti l’installazione, problemi di configurazione, e supporto per altri problemi.</p><p>Visita il nostro <a href="http://www.phpbb-seo.com/boards/" title="SEO Forum" target="_phpBBSEO"><b>Search Engine Optimization forums</b></a>.</p><p>Devi <a href="http://www.phpbb-seo.com/boards/profile.php?mode=register" title="Register to phpBB SEO" target="_phpBBSEO"><b>registrarti</b></a>, loggarti e <a href="%3$s" title="Be notified about updates" target="_phpBBSEO"><b>sottoscrivere il thread della versione</b></a> per ricevere le relative notifiche o aggiornamenti.',
	'SEO_PREMOD_SUPPORT_BODY'	=> 'Pieno supporto è disponibile nel <a href="http://www.phpbb-seo.com/boards/phpbb-seo-premod-vf61/" title="Visit the phpBB SEO Premod forum" target="_phpBBSEO"><b>phpBB SEO Premod forum</b></a>. Puoi trovare risposte generali riguardanti l’installazione, problemi di configurazione, e supporto per altri problemi.</p><p>Visita il nostro <a href="http://www.phpbb-seo.com/boards/" title="SEO Forum" target="_phpBBSEO"><b>Search Engine Optimization forums</b></a>.</p><p>Devi <a href="http://www.phpbb-seo.com/boards/profile.php?mode=register" title="Register to phpBB SEO" target="_phpBBSEO"><b>registrarti</b></a>, loggarti e <a href="http://www.phpbb-seo.com/boards/viewtopic.php?t=1549&watch=topic" title="Be notified about updates" target="_phpBBSEO"><b>sottoscrivere il thread della versione</b></a> per ricevere le relative notifiche o aggiornamenti.',
	'SEO_INSTALL_INTRO'		=> 'Benvenuto nell’installazione guidata di phpBB SEO',
	'SEO_INSTALL_INTRO_BODY'	=> '<p>Stai per installare %1$s phpBB SEO mod rewrite %2$s. Il tool di installazione attiverà il phpBB SEO mod rewrite nel tuo pannello di controllo ACP.</p><p>Una volta installato, sarà necessario andare nel tuo ACP per attivare la mod.</p>
	<p><strong>Nota:</strong> Se è la prima volta si tenta questo mod, si consiglia vivamente di prendere il tempo per testare i vari standard url questo mod può produrre a livello locale o privato su un server di prova. In questo modo, non si mostra un bot URL diverso per ogni giorno, mentre fai le prove. E non si scopre un mese dopo che avresti preferito URL diversi. La pazienza è virtù SEO saggia e anche se il reindirizzamento di Zero duplicati HTTP rende il tutto molto facile, non vuoi reindirizzare tutti i forum del tuo URL troppo spesso.</p><br/>
	<p>Requisiti :</p>
	<ul>
		<li>Apache server (linux OS) con mod_rewrite module.</li>
		<li>IIS server (windows OS) with isapi_rewrite module, ma devi adattare le regole nel tuo httpd.ini</li>
	</ul>',
	'SEO_INSTALL'		=> 'Installazione',
	'UN_SEO_INSTALL_INTRO'		=> 'Benvenuti nella procedura guidata di disinstallazione di phpBB SEO',
	'UN_SEO_INSTALL_INTRO_BODY'	=> '<p>Stai per disinstallare il %1$s phpBB SEO mod rewrite %2$s ACP module.</p>
	<p><strong>Nota:</strong> non disattivare la riscrittura degli URL sul tuo forum finchè i files phpBB non sono ancora moddati.</p>',
	'UN_SEO_INSTALL'		=> 'Elimina',
	'SEO_INSTALL_CONGRATS'			=> 'Congratulazioni!',
	'SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Hai appena installato con successo il %1$s phpBB3 SEO mod rewrite %2$s. Devi andare ora nel tuo ACP per configurare la mod.<p>
	<p>Nella nuova categoria phpBB SEO, devi attivare :</p>
	<h2>Selezionare e attivare l’URL riscrittura</h2>
		<p>Prenditi il tempo per sceliere come preferisci il tuo url. Le opzioni di Zero duplicati sono ora state installate.</p>
	<h2>Scegli accuratamente l’URL del tuo forum</h2>
		<p>Utilizzandolo in modo misto o avanzato, potrai dissociare gli URL del forum dai loro titoli e scegliere di utilizzare qualsiasi parola chiave.</p>
	<h2>Genera e personalizza .htaccess</h2>
	<p>Dopo aver creato le opzioni di cui sopra, sarai in grado di generare uno .htaccess personalizzato e salvarlo direttamente sul server.</p>',
	'UN_SEO_INSTALL_CONGRATS'	=> 'Il modulo phpBB SEO è stato eliminato.',
	'UN_SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Hai correttamente eliminato il %1$s phpBB3 SEO mod rewrite %2$s.<p>
	<p>Ora, non sisattivare la riscrittura degli URL finchè i files phpBB non saranno moddati.</p>',
	'SEO_VALIDATE_INFO'	=> 'Info validazione :',
	'SEO_SQL_ERROR' => 'Errore SQL',
	'SEO_SQL_TRY_MANUALLY' => 'L’utente del database non ha i permessi necessari per creare SQL query, occorre eseguire manualmente la query (phpMyadmin) :',
	// Security
	'SEO_LOGIN'		=> 'Il forum richiede che tu sia registrato e loggato per vedere questa pagina.',
	'SEO_LOGIN_ADMIN'	=> 'Il forum richiede che tu sia loggato come admin per vedere questa pagina.<br/>La sessione è stata cancellata per motivi di sicurezza.',
	'SEO_LOGIN_FOUNDER'	=> 'Il forum richiede che tu sia loggato per vedere questa pagina.',
	'SEO_LOGIN_SESSION'	=> 'Controllo sessione fallito.<br/>La configurazione non è stata alterata.<br/>La sessione è stata cancellata per motivi di sicurezza.',
	// Cache status
	'SEO_CACHE_FILE_TITLE'	=> 'Stato cache file',
	'SEO_CACHE_STATUS'	=> 'La directory cache è configurata in : <b>%s</b>',
	'SEO_CACHE_FOUND'	=> 'La directory cache è stata trovata.',
	'SEO_CACHE_NOT_FOUND'	=> 'La directory cache non è stata trovata.',
	'SEO_CACHE_WRITABLE'	=> 'La directory cache è scrivibile.',
	'SEO_CACHE_UNWRITABLE'	=> 'La directory cache non è scrivibile. Devi settare a 777 il tuo CHMOD.',
	'SEO_CACHE_INNER_UNWRITABLE' => 'Alcuni files della cache directory non sono scrivibili, assicurati di aver impostato i corretti CHMOD alla directory e a tutti i files in essa contenuti.',
	'SEO_CACHE_FORUM_NAME'	=> 'Nome forum',
	'SEO_CACHE_URL_OK'	=> 'URL Cache',
	'SEO_CACHE_URL_NOT_OK'	=> 'Questo URL non è in cache',
	'SEO_CACHE_URL'		=> 'URL finale',
	'SEO_CACHE_MSG_OK'	=> 'Il file cache è stato aggiornato.',
	'SEO_CACHE_MSG_FAIL'	=> 'Risulta un errore nell’aggiornamento del file cache.',
	'SEO_CACHE_UPDATE_FAIL'	=> 'L’url inserito non può essere utilizzato, la cache è stata alterata.',
	// Seo advices
	'SEO_ADVICE_DUPE'	=> 'E’ stato rilevato un contenuto duplicato nel titolo URL : <b>%1$s</b>.<br/>Esso resterà invariato fino a quando non aggiorni.',
	'SEO_ADVICE_RESERVED'	=> 'Url riservati (utilizzati da altri URL, come membri di tali profili), il loro ingresso nel titolo è stato rilevato per un forum URL : <b>%1$s</b>.<br/>Esso resterà invariato fino a quando non aggiorni.',
	'SEO_ADVICE_LENGTH'	=> 'L’URL cache è un troppo lungo.<br/>Cerca di accorciarlo',
	'SEO_ADVICE_DELIM'	=> 'L’URL cache contiene un delimitatore SEO e ID.<br/>Cerca di rispettare la struttura originale.',
	'SEO_ADVICE_WORDS'	=> 'L’URL cache contiene troppe parole.<br/>Cerca di crearne uno migliore.',
	'SEO_ADVICE_DEFAULT'	=> 'La fine dell’URL, dopo la formattazione, è di default.<br/>Cerca di rispettare la struttura originale.',
	'SEO_ADVICE_START'	=> 'Forum URL non può terminare con un parametro di impaginazione.<br/>Saranno eliminati dall’invio.',
	'SEO_ADVICE_DELIM_REM'	=> 'L’URL non può terminare con un forum delimitatore.<br/>Saranno eliminati dall’invio.',
	// Mod Rewrite type
	'ACP_SEO_SIMPLE'	=> 'Semplice',
	'ACP_SEO_MIXED'		=> 'Mista',
	'ACP_SEO_ADVANCED'	=> 'Avanzata',
	'ACP_ULTIMATE_SEO_URL'	=> 'ultimate SEO URL',
	// URL Sync
	'SYNC_REQ_SQL_REW' => 'Devi attivare il rewrite SQL per eseguire questo script !',
	'SYNC_TITLE' => 'Sincronizzazione URL',
	'SYNC_WARN' => 'Attenzione, non fermare lo script prima della fine, ed esegui un backup del tuo dc prima di utilizzarlo!',
	'SYNC_COMPLETE' => 'Sincronizzazione completata !',
	'SYNC_RESET_COMPLETE' => 'Azzeramento completato !',
	'SYNC_PROCESSING' => '<b>Processo in esecuzione, attendi ...</b><br/><br/><b>%1$s%%</b> sono stati processati. <br/>Al momento, <b>%2$s</b> oggetti processati.<br/><b>%3$s</b> oggetti in totale, <b>%4$s</b> processati al momento.<br/>Velocità : <b>%5$s oggetto/i.</b><br/>Tempo utilizzato per ciclo : <b>%6$ss</b><br/>Tempo stimato rimanente : <b>%7$s minuti</b>',
	'SYNC_ITEM_UPDATED' => '<b>%1$s</b> oggetti aggiornati',
	'SYNC_TOPIC_URLS' => 'Inizio sincronizzazione URLs argomenti',
	'SYNC_RESET_TOPIC_URLS' => 'Azzera tutti gli URLs argomenti',
	'SYNC_TOPIC_URL_NOTE' => 'Hai appena attivato l’opzione di SQL riscrittura, dovresti ora sincronizzare tutti i tuoi URL argomenti andando a %squesta pagina%s se non lo hai già fatto.<br/>Questo non cambierà le tue URL correnti<br/><b style="color:red">Nota :</b><br/><em>Dovresti sincronizzare solo gli URLs argomenti una volta che hai impostato il tipo url. Non è un problema se modifichi il tuo url standard dopo la sincronizzazione dell’argomento URL, ma dovresti eseguirlo ogni volta.<br/>Se non lo esegui, i tuoi argomenti URL sarenno aggiornati su ogni visita argomento e nel caso in cui l’argomento URL argomento è vuoto o non corrispondente allo standard attuale.</em>',
	// phpBB SEO Class option
	'url_rewrite' => 'Attiva riscrittura URL',
	'url_rewrite_explain' => 'Dopo aver attivato le opzioni qui di seguito, e aver generato un .htaccess personalizzato, è possibile attivare la riscrittura degli URL e verificare se il tuo URL funziona correttamente. Se ricevi un errore 404, è probabile che hai un problema, prova a crearne uno nuovo.',
	'modrtype' => 'Tipo riscrittura URL',
	'modrtype_explain' => 'Il phpBB SEO premod è compatibile con tre modalità di riscrittura:<br/> <a href="http://www.phpbb-seo.com/boards/simple-seo-url/simple-phpbb3-seo-url-vt1566.html" title="More details about the Simple mod"><b>Semplice</b></a>- <a href="http://www.phpbb-seo.com/boards/mixed-seo-url/mixed-phpbb3-seo-url-vt1565.html" title="More details about the Mixed mod"><b>Mista</b></a> -<a href="http://www.phpbb-seo.com/boards/advanced-seo-url/advanced-phpbb3-seo-url-vt1219.html" title="More details about the Advanced mod"><b> Avanzata</b></a>.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Modificando queste opzioni cambierà il modo di scrivere l’URL  sul tuo sito.<br/>Farlo con un sito web già indicizzato dovrebbe quindi essere considerato con la stessa attenzione di una migrazione e non frequentemente.<br/>Decidi come meglio credi se proseguire.</ul>',
	'sql_rewrite' => 'Attiva Riscrittura SQL',
	'sql_rewrite_explain' => 'Questa opzione ti permetterà di scegliere un url per ogni argomento. Sarai in grado di impostare con precisione l’url dell’argomento durante la pubblicazione o la modifica di un messaggio. Questa funzione è limitata ad amministratori e moderatori.<br/><br/><b style="color:red">Nota :</b><br/><em>Attivando questa opzione non cambierà l’argomento URL. Gli URL esistenti saranno conservati così come sono visualizzati nel database. Ma non può essere effettuato se lo disattivi dopo che hai iniziato ad usarlo. In tal caso, gli URL personalizzati possono essere trattati come se non esistessero.<br/>La funzione ha anche il grande vantaggio di fissare la riscrittura degli URL, soprattutto quando si utilizza l’opzione di directory virtuale in modalità avanzata, e di rendere molto più facile recuperare URL riscritti da qualsiasi pagina.</em>',
	'profile_inj' => 'Profili e gruppi',
	'profile_inj_explain' => 'Puoi usare nickname, nomi di gruppo, e messaggi utenti (facoltativo vedi sotto) URL al posto di quello di default, <b>phpBB/nickname-uxx.html</b> riscritti come <b>phpBB/memberxx.html</b>.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Modificando questa opzione sarà richiesto un aggiornamento  di .htaccess</ul>',
	'profile_vfolder' => 'Profilo directory virtuale',
	'profile_vfolder_explain' => 'Puoi scegliere di simulare un struttura di directory per profili e messaggi di pagina (opzionale vedi sotto) URLs, <b>phpBB/nickname-uxx/(topics/)</b> o <b>phpBB/memberxx/(topics/)</b> intestati come <b>phpBB/nickname-uxx(-topics).html</b> e <b>phpBB/memberxx(-topics).html</b>.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Il profilo ID sarà sovrascitto alla configurazione.<br/>Modificando questa opzione sarà richiesto un aggiornamento  di .htaccess</ul>',
	'profile_noids' => 'Eliminazione Profilo ID',
	'profile_noids_explain' => 'Quando il profilo ad il gruppo è attivato, puoi scegliere di usare <b>example.com/phpBB/member/nickname</b> o <b>example.com/phpBB/nickname-uxx.html</b>. phpBB usa una SQL query sulla pagina con l’user id.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">I caratteri speciali non saranno riconosciuti su tutti i browser. FF sempre codificato (<a href="http://www.php.net/urlencode">urlencode()</a>), e come sembra utilizzando Latin1, IE e Opera no. Per avanzate opzioni di encoding, leggi il file di installazione.<br/>Modificando queste opzioni cambierà il modo di scrivere l’URL  su tuo sito.</ul>',
	'rewrite_usermsg' => 'Ricerca comune e pagine di riscrittura messaggi utente',
	'rewrite_usermsg_explain' => 'Questa opzione rende più senso se si consente l’accesso del pubblico ad entrambi i profili e alle pagine di ricerca.<br/> Utilizzando questa opzione implica un maggiore utilizzo di funzioni di ricerca e quindi un pesante carico del server.<br/> Il tipo di URL riscrittura (con e senza ID) segue una serie di profili e gruppi.<br/><b>phpBB/messages/nickname/topics/</b> o <b>phpBB/nickname-uxx-topics.html</b> o <b>phpBB/memberxx-topics.html</b>.<br/>Inoltre, questa opzione attiva la ricerca comune e riscrive le pagine, come gli argomenti, senza nuovi articoli e pagine.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">La rimozione di tali collegamenti comporterà la stessa limitazione, come per i profili utente.<br/>Modificando queste opzioni cambierà il modo di scrivere l’URL  su tuo sito.</ul>',
	'rewrite_files' => 'Riscrittura allegati',
	'rewrite_files_explain' => 'Attiva la riscrittura degli allegati in phpBB. Può essere di grande aiuto se hai molte immagini allegate che meritano di essere indicizzate.<br/><br/><b style="color:red">Nota :</b><br/><em>Assicurarsi di avere le necessarie regole di riscrittura (# PHPBB FILES ALL MODES) nel tuo .htaccess quando attivi questa opzione.</em>',
	'rem_sid' => 'Eliminazione SID',
	'rem_sid_explain' => 'SID verrà rimosso dal 100% degli URL che passa attraverso il phpbb_seo class, per ospiti e bots.<br/>Questo garantisce che il bot non veda alcun SID sul forum, l’argomento e dopo gli URL, ma il visitatore che non accetta i cookie probabilmente crearà più di una sessione.<br/>Zero duplicati reindirizzerà su 301 con SID per utenti e bot per impostazione predefinita.',
	'rem_hilit' => 'Eliminazione highlights',
	'rem_hilit_explain' => 'Highlights sarà eliminato del 100% di URLs passanti attraverso il phpbb_seo class, per ospiti e bots.<br/>Zero duplicati reindirizzerà su 301 con SID per utenti e bot per impostazione predefinita.',
	'rem_small_words' => 'Elimina parole corte',
	'rem_small_words_explain' => 'Permette di eliminare tutte le parole inferiori a tre lettere in rewrite URL.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Il filtraggio cambia molti URL sul tuo sito web.<br/>Anche se il duplicato zero mod avrà cura di tutte le richieste di reindirizzamento quando si cambia questa opzione, prima di essere usato su un sito già indicizzato dovrebbe essere considerato con la stessa attenzione di una migrazione e non di frequente.<br/>Decidi come meglio credi, ma pensaci prima di proseguire.</ul>',
	'virtual_folder' => 'Directory virtuale',
	'virtual_folder_explain' => 'Permette di aggiungere l’URL in una directory virtuale.<br/><u>Esempio :</u><ul style="margin-left:20px"><b>forum-title-fxx/topic-title-txx.html</b> o <b>topic-title-txx.html</b><br/>per argomento URL.</ul><br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">La directory virtuale può cambiare tutte le tue URL del sito molto facilmente.<br/>quando si cambia questa opzione, prima di essere usato su un sito già indicizzato dovrebbe essere considerato con la stessa attenzione di una migrazione e non di frequente.<br/>Pensaci prima di proseguire.</ul>',
	'virtual_root' => 'Root virtuale',
	'virtual_root_explain' => 'Se phpBB è installato in una sotto directory (example phpBB3/), puoi simulare una riscrittura di links.<br/><u>Esempio :</u><ul style="margin-left:20px"><b>phpBB3/forum-title-fxx/topic-title-txx.html</b> o <b>forum-title-fxx/topic-title-txx.html</b><br/>per argomento URL.</ul><br/>Questo può essere utile per abbreviare gli URLs soprattutto se si utilizza la "Directory virtuale".Nota :</b><br/><ul style="margin-left:20px">Usando questa opzione devi usare una home page ed un’indice per il forum (esempio forum.html).<br/> Questa opzione modifica gli URLs molto rapidamente.<br/>Modificando queste opzioni cambierà il modo di scrivere l’URL  su tuo sito.</ul>',
	'cache_layer' => 'Forum URL cache',
	'cache_layer_explain' => 'Accende la cache forum per gli URL e gli consentono di separare i loro titoli dal forum URL<br/><u>Esempio :</u><ul style="margin-left:20px"><b>forum-title-fxx/</b> o <b>any-title-fxx/</b><br/>per un url forum.</ul><br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Questa opzione modifica gli URLs del tuo forum, con il rischio di modificarne troppi se usi una directory virtuale.<br/>Gli argomenti saranno sempre dirottati con Zero Duplicati.<br/></ul>',
	'rem_ids' => 'Eliminazione forum ID',
	'rem_ids_explain' => 'Elimina gli ID e delimitatori URL nel forum. Si applica solo se il caching Forum URL viene attivato<br/><u>Esempio :</u><ul style="margin-left:20px"><b>any-title-fxx/</b> o <b>any-title/</b><br/>per un url forum.</ul><br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Questa opzione modifica gli URLs del tuo forum, con il rischio di modificarne troppi se usi una directory virtuale.<br/>Gli argomenti saranno sempre dirottati con Zero Duplicati.<br/></ul>',
	// copytrights
	'copyrights' => 'Copyrights',
	'copyrights_img' => 'Link immaggine',
	'copyrights_img_explain' => 'Puoi scegliere di visualizzare un link di copyright con un’immaggine o un link di testo.',
	'copyrights_txt' => 'Link testo',
	'copyrights_txt_explain' => 'Puoi scegliere di visualizzare un link di copyright un link di testo. Lasciandolo vuoto saranno attivati i dati di default.',
	'copyrights_title' => 'Titolo link',
	'copyrights_title_explain' => 'Puoi scegliere di visualizzare un link di copyright con un titolo. Lasciandolo vuoto saranno attivati i dati di default.',
	// Zero duplicate
	'ACP_ZERO_DUPE_OFF' => 'Spento',
	'ACP_ZERO_DUPE_MSG' => 'Messaggio',
	'ACP_ZERO_DUPE_GUEST' => 'Ospite',
	'ACP_ZERO_DUPE_ALL' => 'Tutto',
	'zero_dupe' =>'Zero duplictati',
	'zero_dupe_explain' => 'Le seguenti configurazioni riguardano Zero duplicati, puoi modificare ciò che preferisci secondo le tue esigenze.<br/>Non implica nessun aggiornamento di .htacess.',
	'zero_dupe_on' => 'Attiva Zero duplicati',
	'zero_dupe_on_explain' => 'Attiva o disattiva il reindirizzamento di Zero Duplicati.',
	'zero_dupe_strict' => 'Modo Strict',
	'zero_dupe_strict_explain' => 'Quando viene attivato, Zero Duplicati verificherà se la richiesta URL corrisponda esattamente quello frequentato.<br/>Quando è impostato su no, Zero Duplicati verifica che l’url frequentato corrisponde alla prima parte della richiesta.<br/>L’interesse è quello di rendere più facile trattare con mods che potrebbero interferire con Zero Duplicati aggiungendo le variabili GET.',
	'zero_dupe_post_redir' => 'Reindirizzamento Messaggi',
	'zero_dupe_post_redir_explain' => 'La scelta determina il modo di gestire gli urls dei messaggi; può assumere quattro valori :<ul style="margin-left:20px"><li><b>&nbsp;spento</b>, non reindirizzare url messaggi, in ogni caso,</li><li><b>&nbsp;messaggio</b>, assicurati che postxx.html sia usato per messaggi url,</li><li><b>&nbsp;ospite</b>, reindirizzare gli ospiti, se necessario, per il corrispondente argomento url piuttosto che al postxx.html, e assicurati che postxx.html è usato per gli utenti loggati,<li><b>&nbsp;tutto</b>, reindirizzare se richiesto al corrispondente argomento url.</li></ul><br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Mantieni <b>postxx.html</b> URL SEO fintanto che mantieni sul messaggio e disabilita l’URL del tuo file robots.txt.<br/>Reindirizzare tutto produce la maggior parte delle redirezioni tra tutti.<br/>Reindirizza postxx.html in tutti i casi, anche questo significa che un messaggio che sarà inviato in un thread e poi spostato in un altro cambierà l’url, che grazie a Zero duplicati non inficierà sulla tua SEO, ma il legame con il precedente messaggio non è un link ad esso.</ul>.',
	// no duplicate
	'no_dupe' => 'Numero duplicati',
	'no_dupe_on' => 'Attiva numero duplicati',
	'no_dupe_on_explain' => 'Il numero duplicati sostituisce l’url con il corrispondente argomento (con paginazione).<br/>Non aggiungere qualsiasi SQL una query JOIN già in corso di esecuzione, questo potrebbe significare più lavoro, anche se non dovrebbe essere un problema per il carico del tuo server.',
));
?>