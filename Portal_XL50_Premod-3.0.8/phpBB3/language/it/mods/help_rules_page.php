<?php
/**
*
* it/mods/help_rules_page
*
* Built with the FAQ Manager addon by EXreaction
* http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=31&t=464
*
* @name help_portal.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_faq_manager.php,v 1.1.1.1 2009/05/15 05:14:08 damysterious Exp $
* @copyright (c) 2007, 2009  Portal XL Group
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/01/01
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
global $config, $user;

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

$help = array(
	array(
		0 => '--',
		1 => 'Regole generali [Italiano]'
	),
	array(
		0 => 'Regole del forum e supporto',
		1 => '<br>
<p align="justify">Questo Forum è riservato a tutte le <SPAN style="FONT-WEIGHT: bold">attività 
della comunità</SPAN>. Sono consentiti commenti o messaggi purchè attinenti al 
titolo del topic. Sarà compito dei moderatori o amministratori spostare i topics 
non attinenti. Quelli che non rispettano le regole andranno spostati nel 
cestino.<BR><BR>Ricordati prima di postare di rispettare le seguenti 
regole:<BR>1) Cerca prima di postare, potresti trovare la soluzione al tuo 
problema;<br>2) Quando inserisci un nuovo argomento cerca di essere 
dettagliato, il titolo del topic dovrà identificare il tuo problema, 
messaggi del tipo "<b>aiuto, help, errore</b>"
 ecc., non aiutano nessuno e costringono moderatori e amministratori a 
modificarlo. Non abusare della pazienza e lavoro altrui, continui 
richiami da parte di amministratori o moderatori comportano il <span style="font-weight: bold;">ban</span> dal sito;<br>3) Quando replichi ad
 un messaggio, cerca di essere attinente e non fare altre richieste su 
altri argomenti;<br>4) Quando hai risolto il tuo problema, modifica il 
titolo del tuo argomento anteponendo al testo iniziale <span style="font-weight: bold;">[Risolto]</span>;<br>5) Cerca di postare 
nelle sezioni adeguate, argomenti non attinenti vanno postati nell\'off 
topic;<br>6) Quando scrivi un nuovo argomento comunica la tua versione 
installata: Plain o Premod, sii dettagliato, fai uso di screnshot, 
inserisci il link del tuo sito (fai prima ad inserirlo nel tuo profilo);<br>7)
 Rispetta tutti, e rispetta il nostro lavoro gratuito, considera che il software 
che stamo utilizzando è Open Source, <span style="font-weight: bold;">ma è necessario che tutti i crediti di 
copyright siano rispettati (compresi quelle delle  traduzioni in italiano), in
 assenza di crediti di copyright o se essi sono incompleti, l\'assistenza decade;</span><br>8) Non sollecitare risposte, ti 
risponderemo appena possibile;<br>9) <span style="font-weight: bold;">Compila
 il tuo profilo</span>, ed aggiungi il link del tuo sito affinchè 
possiamo verificare che tu sia in regola con i crediti di copyright, non
 rispettando questa semplice regola, <b>non riceverai assistenza</b>.<p align="justify"><BR>Considera che l’amministratore potrebbe avere inserito altre regole nella 
testa di ogni forum, queste sono regole generali, accertati di rispettare tutte 
le regole.<BR>In generale, sii cortese e rispettoso delle regole. Se hai 
acquisito maggiore esperienza, aiuta gli altri e partecipa alla vita della 
comunità. <SPAN style="FONT-WEIGHT: bold">Una comunità è fatta di persone e 
dalla condivisione di risorse.</SPAN> 
<br>
<p align="justify"> <b>Traduzioni</b><strong><b>:</b></strong></p>
<ul>    
    <div align="justify">
    <li>Il supporto per le traduzioni può essere trovato su i siti di supporto 
    ufficiali.</li>
    <li>Gli aggiornamenti delle traduzione in italiano per le versioni Portal 
    XL 5.0 Plain e Premod sono disponibili sulla comunità di supporto ufficiale 
    <a href="http://www.portalxl.eu">Portal XL Italia</a>. Ogni aggiornamento 
    sarà comunicato nell\'area forum news e novità.</li>
    </div>
</ul>
<br>'
	),
	array(
		0 => 'Note legali e privacy',
		1 => '<p>&nbsp;</p>
<p><b>' . $config['sitename'] . '</b><strong> </strong>non è responsabile per 
nessun articolo, commento, recensione, o nome utente che risultasse 
autore di un particolare articolo, commento, recensione, o di un 
particolare username assunto su ' . $config['sitename'] . ' e di cui 
l’utente, pertanto, se ne assume la piena responsabilità.</p>
<p></p>
<p align="justify">
</p><p align="justify"><strong>' . $config['sitename'] . '</strong> non si assume alcuna
 responsabilità od obbigo circa 
l’accuratezza, il contenuto, la completezza, la legalità, il controllo, 
l’operatività o la disponibilità delle informazioni o del materiale che 
appaiono in ' . $config['sitename'] . '. <strong>' . $config['sitename'] . '</strong> non si assume 
alcuna responsabilità per qualsivoglia 
danno derivante dai download o dall’accesso a qualsivoglia tipo di 
contenuto o di materiale disponibile su <b>q</b><strong><b>uesto sito.</b></strong></p>
<p align="justify">
</p><p align="justify"><strong>' . $config['sitename'] . '</strong> contiene links 
(collegamenti) ad altri siti Internet. Questi links sono offerti solo ed
 esclusivamente per tua informazione o tua convenienza e non per 
collegamento, partecipazione od appoggio a qualsivoglia prodotto o 
servizio offerto in questi siti, quindi nessuna informazione in questo 
sito può essere considerata collegata od approvata da <b>q</b><strong><b>uesto 
sito</b></strong>.
 Questi siti di Terze parti possono anche contenere opinioni e punti di 
vista delle terze parti che non necessariamente coincidono con le 
nostre. Questi siti possono avere anche delle politiche sulla privacy 
differenti dalla nostra.</p>
<p align="justify">
</p><p align="justify">Tutti i materiali, le informazioni, i prodotti 
& servizi inclusi in ' . $config['sitename'] . ' vengono offerti <em>così
 come sono</em>, <strong>senza alcuna garanzia</strong> di nessun 
genere. <strong>' . $config['sitename'] . '</strong> dichiara espressamente di non 
assumersi e di non accettare responsabilità alcuna, nei più 
ampi termini di legge, per garanzie espresse, implicite e/o previste 
dalla legge. <strong>' . $config['sitename'] . '</strong> non fornisce alcuna garanzia 
per i servizi od i benefici ricevuti attraverso il sito o pubblicizzati,
 non è responsabile per garanzie di servizi o prodotti ricevuti 
attraverso pubblicità su ' . $config['sitename'] . '.</p>
<p align="justify">
</p><p align="justify">Tutti i Loghi e le Immagini sono di proprietà dei
 rispettivi aventi diritto. I temi, i templates, gli scripts, le 
versioni e tutti i lavori realizzati non possono essere in nessun modo, 
riprodotti, messi a disposizione di altri o venduti, senza l’esplicita 
autorizzazione scritta da parte del proprietario del sito, tutto il 
codice HTML ed il Database di <b>q</b><strong><b>uesto sito</b> </strong>sono <strong>Copyright
 2009</strong> - <b>2011</b> di ' . $config['sitename'] . '</p>
<p align="justify">
</p><p align="justify">Se hai domande, commenti o suggerimenti 
riguardanti le Avvertenze Legali, ti invitiamo ad usare il nostro <a 
href="/contact.php">Formulario Contatti</a><a 
href="http://www.luckylab.eu/info/">.</a></p>
<p align="justify">
</p><p align="justify"><strong>Informativa sulla Privacy</strong></p>
<p align="justify">
</p><p align="justify">Noi rispettiamo e facciamo in modo di proteggere 
la tua privacy. Questa informativa sulla Privacy (resa in ottemperanza 
ed ai sensi dell’<strong>art. 13 del d.lgs. n. 196/2003</strong> ha lo 
scopo di renderti edotto su come le tue informazioni personali vengano 
usate e processate su ' . $config['sitename'] . '. Abbiamo la massima 
cura dei tuoi dati personali che utilizziamo solo nei casi previsti o 
compatibili con questa Privacy Policy. <strong>I dati raccolti</strong> 
vengono trattati esclusivamente per le seguenti finalità: instaurare 
rapporti con l’utenza, in particolare al fine di rispondere alle 
richieste di informazioni e assistenza inoltrate tramite il modulo <strong>Contatti,
 Messaggi Privati, Form</strong>, etc., inviare comunicazioni relative a
 nuove iniziative del sito, effettuare analisi statistiche, ottemperare 
agli obblighi di legge. Raccogliamo i dati allo scopo di erogare i 
servizi proposti attraverso il sito.</p>
<p align="justify">
</p><p align="justify"><strong><span style="text-decoration: underline;">Raccolta
 di Informazioni</span></strong><br>
<strong>' . $config['sitename'] . '</strong> è l’esclusivo detentore delle informazioni 
raccolte dal nostro sito. Noi, nè ora nè in futuro inviamo, 
condividiamo, o vendiamo queste informazioni ad altri in nessun modo se 
non in quello spiegato da questo regolamento sulla privacy e di seguito 
riportato.</p>
<p align="justify">
</p><p align="justify"><strong><span style="text-decoration: underline;">Cookies</span></strong><br>
Un Cookie (biscotto) è una porzione di codice archiviato sull’hard disk 
dell’utente, registrato o anonimo che sia, contenente informazioni 
dell’utente stesso. Viene inserito per connettersi a <b>q</b><strong><b>uesto 
sito</b></strong>
 che richiede i cookies per avere: informazioni statistiche sul sistema 
usato, l’area geografica, etc.. Ma in <strong><em>nessun caso</em></strong>
 i nostri cookies contengono dati personali che ne permettano 
l’identificazione., ' . $config['sitename'] . ' usa i cookies 
esclusivamente per consentire il login.</p>
<p align="justify">
</p><p align="justify"><strong><span style="text-decoration: underline;">Log
 Files</span></strong><br>
<strong>' . $config['sitename'] . '</strong> tiene un registro di files per analizzare i
 trends, tracciare i movimenti dell’utente nel sito, ed ottenere dati 
sul numero di accessi e da dove. Questo non inficia nè consente in alcun
 modo l’identificazione personale dei visitatori.<br>
<strong><span style="text-decoration: underline;">Links/Collegamenti</span></strong><br>
I Links agli altri siti esterni a ' . $config['sitename'] . ' 
potrebbero non applicare questo stesso regolamento sulla privacy. Non 
siamo responsabili delle politiche sulla privacy degli altri siti che 
sono collegati/linkati su <strong>' . $config['sitename'] . '</strong>. Per cortesia 
leggi lo statuto sulla privacy di ciascun sito collegato/linkato su <b>q</b><strong><b>uesto 
sito</b></strong>
 per l’informazione ed i dati usati per l’identificazione personale dei 
visitatori. Il nostro regolamento sulla privacy si applica solo ed 
esclusivamente a ' . $config['sitename'] . '.</p>
<p align="justify">
</p><p align="justify"><strong><span style="text-decoration: underline;">Modifiche
 Privacy e diritti dell’interessato</span></strong><br>
Se e quando il nostro Regolamento sulla Privacy cambiasse, i visitatori e
 gli Iscritti registrati nel nostro database verranno avvertiti dei 
cambiamenti ed informati del link a questa pagina per visionarne le 
modifiche. Se l’utente dovesse ritenere tali modifiche inerente ed in 
conflitto con la propria e la nostra politica, potrà in qualsiasi 
momento usare l’opzione di uscita (Logout) dal sito e/o chiedere la 
cancellazione del personale account all’Amministratore, quale <strong>Titolare
 del Trattamento dei dati personali</strong>. <strong>Correzione/Aggiornamento</strong>
 dei dati personali <strong>L’art. 7 del Dlgs 196/2003</strong> 
conferisce all’interessato l’esercizio di specifici diritti. In 
particolare: 1. L’interessato ha diritto di ottenere la conferma 
dell’esistenza o meno di dati personali che lo riguardano, anche se non 
ancora registrati, e la loro comunicazione in forma intelligibile. 2. 
L’interessato ha diritto di ottenere l’indicazione dell’origine dei dati
 personali; delle finalità e modalità del trattamento; della logica 
applicata in caso di trattamento effettuato con l’ausilio di strumenti 
elettronici; degli estremi identificativi del titolare, dei responsabili
 e del rappresentante designato ai sensi dell’articolo 5, comma 2; dei 
soggetti o delle categorie di soggetti ai quali i dati personali possono
 essere comunicati o che possono venirne a conoscenza in qualità di 
rappresentante designato nel territorio dello Stato, di responsabili o 
incaricati. L’interessato ha diritto di ottenere: l’aggiornamento, la 
rettificazione ovvero, quando vi ha interesse, l’integrazione dei 
dati;la cancellazione, la trasformazione in forma anonima o il blocco 
dei dati trattati in violazione di legge, compresi quelli di cui non è 
necessaria la conservazione in relazione agli scopi per i quali i dati 
sono stati raccolti o successivamente trattati;L’interessato ha diritto 
di opporsi, in tutto o in parte:per motivi legittimi al trattamento dei 
dati personali che lo riguardano, ancorchè pertinenti allo scopo della 
raccolta; al trattamento di dati personali che lo riguardano a fini di 
invio di materiale pubblicitario o di vendita diretta o per il 
compimento di ricerche di mercato o di comunicazione commerciale.</p>
<p align="justify">
</p><p align="justify">Se hai domande, commenti o suggerimenti 
riguardanti le Avvertenze Legali, ti invitiamo ad usare il nostro <a 
href="/contact.php">Formulario Contatti</a><a 
href="http://www.luckylab.eu/info/">.</a></p>
<p align="justify">
</p><p align="justify">
</p><p align="justify">
</p><p align="justify"><strong>Termini di Utilizzo</strong></p>
<p align="justify">
</p><p align="justify"><strong>1. Accettazione dei termini d’uso e loro 
successive modifiche</strong><br>
Ogni volta che usi od accedi a ' . $config['sitename'] . ', tu accetti le limitazioni 
imposte da questi Termini di Utilizzo, cosi come modificati di volta in 
volta con o senza avviso. Inoltre, se stai usando un particolare 
servizio su o per mezzo di ' . $config['sitename'] . ', sarai soggetto al rispetto di 
tutte le regole o linee guida per quel servizio, e che devono 
considerarsi parte integrante dei presenti Termini di Utilizzo. Per 
cortesia Leggiti la nostra Informativa sulla Privacy, che è da 
considerarsi incorporata in questi Termini di Utilizzo per connessione e
 riferimento.</p>
<p align="justify">
</p><p align="justify"><strong>2. I Nostri Servizi</strong><br>
Il Nostro sito web ed i servizi offerti attraverso esso vengono offerti 
così come sono. Tu accetti che i proprietari di ' . $config['sitename'] . ' si 
riservano il diritto esclusivo e possono, in qualsiasi momento e senza 
alcuna responsabilità verso di te, modificare o sospendere ' . $config['sitename'] . ' 
web ed i suoi servizi o cancellare i dati da te forniti, sia 
temporaneamente che permanentemente. Non ci assumiamo alcuna 
responsabilità per la durata, la cancellazione, l’errata archiviazione, 
l’inaccuratezza o l’impropria diffusione di qualsiasi dato od 
informazione.</p>
<p align="justify">
</p><p align="justify"><strong>3. Tue responsabilità e Obblighi di 
Registrazione</strong><br>
Per l’utilizzo dei contenuti di ' . $config['sitename'] . ', è d’obbligo la 
registrazione e accettare di fornire, ove richiesto, informazioni 
corrispondenti al vero e dichiari inoltre di avere diciotto (<strong>18</strong>)
 anni compiuti o di <strong>essere maggiorenne</strong>. Con la 
registrazione accetti espressamente i Termini di Utilizzo e le possibili
 successive modifiche che di volta in volta verrano rese disponibili in 
questa sezione.</p>
<p align="justify">
</p><p align="justify"><strong>4. Informazioni sulla Privacy</strong><br>
I tuoi dati di Registrazione raccolte e le altre informazioni personali 
che potremmo raccogliere sono soggette ai termini della nostra 
Informativa sulla Privacy.</p>
<p align="justify">
</p><p align="justify"><strong>5. Registrazione e Password</strong><br>
Sei responsabile della riservatezza della tua password e potresti essere
 considerato responsabile per tutte le azioni compiute successivamente 
al tuo Login di nome utente/username, siano esse autorizzate o meno da 
te. Tu convieni e ti impegni nel notificarci immediatamente ogni 
utilizzo non autorizzato della tua registrazione, account o password.</p>
<p align="justify">
</p><p align="justify"><strong>6. La Tua Condotta</strong><br>
Convieni, Concordi ed Accetti espressamente che tutte le informazioni o 
dati di ogni tipo, siano essi di testo o software, codice, musiche o 
suoni, fotografie o grafica, video od altro materiale (Contenuto), 
fornito pubblicamente o privatamente, siano essere di sola 
responsabilità esclusivamente della persona che ha fornito tali 
Contenuti o fatto uso del medesimo account. Convieni ed accetti inoltre 
in maniera espressiva il fatto che il nostro sito web potrebbe esporti 
ad un Contenuto che potrebbe essere considerato discutibile od 
offensivo. Noi non potremo essere considerati responsabili in alcun modo
 per tali Contenuti che appaiono su ' . $config['sitename'] . ' o per qualsiasi errore 
od omissione.</p>
<p align="justify">
</p><p align="justify">Convieni ed accetti espressamente, con l’utilzzo 
di ' . $config['sitename'] . ' ed i servizi offerti, che non puoi e non devi:</p>
<p align="justify">
</p><p align="justify"><strong>(a)</strong> Tenere una condotta che 
potrebbe violare la legge, offrire alcun Contenuto (illegale, 
minaccioso, dannoso, abusivo, molesto, offensivo, tortuoso, 
diffamatorio, ingiurioso, volgare, osceno, provocatorio, di dubbio 
gusto, pornografico, destinato ad interrompere il sito od interferire 
con qualunche servizio offerto dal sito, infetto con virus od altri 
programmi distruttivi o deleteri, etc.) che dia adito a responsabilità 
civili o penali, o che possa violare qualsiasi legge regionale, 
nazionale od internazionale;<br>
<strong>(b)</strong> Impersonare o rappresentare falsamente di essere 
una qualsiasi altra persona o di avere un ruolo in una qualsiasi 
società, contraffare o mistificare in qualsiasi altro modo l’origine di 
qualsiasi dato o Contenuto fornito da te;<br>
<strong>(c)</strong> Collezionare o raccogliere dati riguardanti altri 
utenti;<br>
<strong>(d)</strong> Offrire od usare ' . $config['sitename'] . ' ed ogni suo 
contenuto o servizio in modo commerciale od in qualsiasi altra maniera 
che provochi email spazzatura, spam, lettere a catena, schemi 
piramidali, o qualsiasi altra forma di pubblicità non autorizzata senza 
aver ottenuto prima il consenso per iscritto;<br>
<strong>(e)</strong> Offrire alcun tipo di Contenuto che possa dare 
adito alla nostra responsabilità civile o penale o che possa costituire 
od essere considerata una violazione di una qualsiasi legge regionale, 
nazionale od internazionale, in particolare, ma non in via esclusiva, 
quelle relative al copyright (diritto d’autore), ai trademark (diritto 
marchi), ai patent (diritto brevetti), ai segreti commerciali od a 
concorrenza sleale.</p>
<p align="justify">
</p><p align="justify"><strong>7. Invio di Contenuti su ' . $config['sitename'] . ' </strong><br>
Con l’offerta di qualsiasi tipo o forma di Contenuti per il nostro sito 
web:<br>
<strong>(a)</strong> convieni ed accetti di concederci il diritto e 
l’autorizzazione esclusiva e globale, gratuita, perpetua, non-exclusive 
(incluso ogni diritto morale ed ogni altro diritto necessario) per 
l’utilizzo, l’esposizione, la riproduzione, le modifiche, gli 
adattamenti, la pubblicazione, la distribuzione, il miglioramento, la 
promozione, l’archiviazione, la traduzione, atte a creare lavori o 
modifiche correlate, in tutto o in parte. Tale licenza verrà applicata e
 riportata in ogni formulario, media, tecnologia conosciuta o 
successivamente sviluppati;<br>
<strong>(b)</strong> Sei al corrente e consapevole di godere di tutti i 
diritti legali, morali, e di tutti gli altri diritti che potrebbero 
essere necessari per accordarci la licenza sopra descritta in questa 
Sezione 7;<br>
<strong>(c)</strong> Conosci ed accetti espressamente il fatto che noi 
potremmo avere il diritto (ma non l’obbligo), a nostra semplice 
discrezione, al rifiuto di pubblicare, di rimuovere e di bloccare 
l’accesso a qualsiasi Contenuto che ci hai fornito, in qualsiasi momento
 e per qualsiasi ragione, con o senza avviso.</p>
<p align="justify">
</p><p align="justify"><strong>8. Servizi di Terze Parti</strong><br>
Benefici o servizi offerti da terze parti possono essere pubblicizzati 
e/o resi disponibili attravero ' . $config['sitename'] . '. Le rappresentazioni fatte 
dei prodotti e dei servizi forniti da terze parti sono governate dai 
loro termini di utilizzo, dalla loro responsabilità e dalle loro 
indicazioni o rappresentazioni fornite. Noi non potremo essere in alcun 
caso considerati responsabili per qualsivoglia tuo accordo od 
interazione con queste terze parti.</p>
<p align="justify">
</p><p align="justify"><strong>9. Indennizzi</strong><br>
Convieni ed accetti espressamente di indennizzare e sollevare da ogni 
responsabilità noi, i nostri sussidiari, affiliati, strutture collegate,
 incaricati, direttori, impiegati, agenti, professionisti a contratto, 
sponsor, partners ed associati da tutte le domande o reclami, incluso il
 pagamento delle spese legali, che potrebbero derivare da richieste di 
qualsiasi terzo e che fossero dovute o si presentassero a causa della 
tua condotta, comportamento o relazione con ' . $config['sitename'] . ' e/o servizio, od
 a causa dei Contenuti da te forniti, della tua violazione di questi 
Termini di Utilizzo od a causa di ogni altra violazione dei diritti di 
un’altra parte o persona.</p>
<p align="justify">
</p><p align="justify"><strong>10. Assunzione di responsabilità’</strong><br>
Convieni ed Accetti che l’utilizzo di ogni servizio di ' . $config['sitename'] . ', di 
ogni servizio o contenuti forniti viene reso disponibile e distribuito a
 tuo rischio e pericolo e non ci assumiamo nessun tipo di responsabilità
 implicita o esplicita , oggettiva o soggettiva, incluse a mero titolo 
indicativo quelle atte e soggette a commercializzazione, adattamento per
 utilizzi particolari, ed infrazioni.</p>
<p align="justify">
</p><p align="justify">Non forniamo alcuna garanzia, implicita o 
esplicita, sulle possibili interruzioni di una parte o di tutti i 
servizi, sulla loro mancanza di errori o di virus, sulla durata, sulla 
sicurezza, accuratezza, affidabilita’, o ogni altra qualita’, non 
garantiamo nemmeno che ogni contenuto scaricabile in qualche modo da 
' . $config['sitename'] . ' sia sicuro. Dichiari di aver compreso e di accettare che 
nessuno, ne’ noi ne’ gli altri collaboranti al servizio reso, forniamo 
consulenza professionale di alcun genere e che ogni consiglio od ogni 
altro suggerimento od informazione viene fornito solo ed esclusivamente a
 tuo rischio e pericolo, senza nostra responsabilita’ di alcun genere.</p>
<p align="justify">
</p><p align="justify">Alcune giurisdizioni non consentono come garanzia
 implicita la previa dichiarazione di non responsabilità e quindi la 
nostra dichiarazione di non responsabilità potrebbe non applicarsi. In 
tali casi, rimane comunque valida ed implicitamente collegata a tale 
nostra dichiarazione la presunzione di conoscenza di tale dichiarazione a
 tuo carico con ci= che ne consegue circa il tuo utilizzo del sito e del
 servizio.</p>
<p align="justify">
</p><p align="justify"><strong>11. Limitazioni di responsabilità’</strong><br>
Dichiari di aver compreso e accettare espressamente che noi non potremo 
essere considerati responsabili in alcun modo per danni diretti, 
indiretti, speciali, incidentali, oggettivi, soggettivi, consequenziali 
od, a titolo di mero esempio, per danni costituenti perdita di profitti,
 di benefici, causati, dall’utilizzo del sito, ai dati od altri danni 
immateriali (anche qualora noi fossimo stati avvisati della possibilità 
di tali danni), risultanti o causati dagli utilizzi o inagibilità del 
servizio, i costi per ottenere benefici sostitutivi e/o servizi 
risultanti da qualsiasi transazione eseguita nel o dal servizio, accessi
 non autorizzati od alterazione della tua trasmissione dei dati, ivi 
condotta o dichiarazioni di terze parti nel servizio, od ogni altra cosa
 collegata al servizio.</p>
<p align="justify">
</p><p align="justify">In alcune Giurisdizioni, non è ammessa la 
limitazione di responsabilità e quindi queste limitazioni non potrebbero
 non applicarsi.</p>
<p align="justify">
</p><p align="justify"><strong>12. Diritti Riservati</strong><br>
Ci riserviamo tutti i nostri diritti, nessun escluso come per esempio 
quelli afferenti al diritto d’autore, ai marchi, ai brevetti, ai segreti
 commerciali, ed a ogni altro diritto, legittimamente posseduto, che 
potremmo avere nel nostro sito. In riferimento al nostro sito, ci 
riserviamo tutti i diritti sul suo contenuto e sui benefici o servizi 
che potrebbero essere forniti. L’utilizzo dei nostri contenuti protetti e
 di quanto ci appartiene richiede il nostro preventivo consenso scritto.
 Noi non ti accordiamo alcuna licenza, implicita od esplicita, o diritto
 rendendoti disponibile i servizi e tu non hai alcun diritto di fare un 
uso commerciale del nostro sito, delle sue risorse o dei nostri servizi,
 senza aver ricevuto il nostro preventivo consenso scritto.</p>
<p align="justify">
</p><p align="justify"><strong>13. Legge Applicabile</strong><br>
Tu convieni ed accetti espressamente che questi Termini di Utilizzo ed 
ogni altra questione insorta a seguito del tuo utilizzo di ' . $config['sitename'] . ' 
web o dei nostri servizi verrà regolata e definita in base alla legge 
vigente nel luogo ove è domiciliato il proprietario di ' . $config['sitename'] . ', 
ovvero alla Legge italiana, con espressa eccezione e prevalenza su ogni 
altra previsione di legge in conflitto con quanto deciso e/od accettato 
liberamente tra le parti. Con la registrazione o l’utilizzo di questo 
sito e del servizio tu acconsenti e stabilisci espressamente che il 
luogo designato e la giurisdizione applicabile in via esclusiva sia 
quella dove ha sede il proprietario di ' . $config['sitename'] . ' ovvero in Italia.</p>
<p align="justify">
</p><p align="justify"><strong>14. Informazioni varie</strong><br>
<strong>(a)</strong> Qualora si verificasse che questi Termini di 
Utilizzo fossero in conflitto con qualsiasi legge, che possa attraverso 
una giurisdizione diversa invalidarne uno o più termini, le parti 
stabiliscono che quanto ivi contenuto dovrà essere interpretato secondo 
le intenzioni originali delle parti circa la legge applicabile ed il 
rimando a questi Termini di Utilizzo rimarrà valido ed inalterato;<br>
<strong>(b)</strong> Il fallimento di ambo le parti nell’esatta 
individuazione od interpretazione di un qualsivoglia punto incluso in 
questi Termini di utilizzo, non comporterà e non potrà essere 
considerato come rinuncia dei diritto delle parti, ma tali diritti 
rimarranno pienamente efficace ed effettivi;<br>
<strong>(c)</strong> Tu convieni ed accetti espressamente di voler 
disattendere ogni diverso regolamento o previsione di legge a che ogni 
reclamo o causa derivata da ' . $config['sitename'] . ' o dall’utilizzo dei suoi 
servizi possa essere presentata oltre il termine di un (1) anno. Decorso
 un anno dal primo insorgere di un motivo di contesa, ogni reclamo o 
causa sarà precluso e da considerarsi prescritto per sempre;<br>
<strong>(d)</strong> Noi abbiamo facoltà di cedere i diritti e le 
obbligazioni scaturenti da questi Termini di Utilizzo, in tale caso 
dovremo essere considerati come manlevati da ogni altra obbligazione.</p>
<p align="justify">
</p><p align="justify">Se hai domande, commenti o suggerimenti 
riguardanti le Avvertenze Legali, ti invitiamo ad usare il nostro <a 
href="/contact.php">Formulario Contatti</a>.</p><div 
style="overflow: hidden; color: rgb(0, 0, 0); background-color: 
transparent; text-align: left; text-decoration: none; border: medium 
none;" id="TixyyLink"><br></div>'
	),
	array(
		0 => 'Licenza',
		1 => '<p align="justify"> </p>
<p align="justify">Questo Forum è stato creato 
utilizzando le seguenti piattaforme:</p>
<b>Powered by </b><a tip="© 2000, 2002, 2005, 2007 phpBB Group" 
href="http://www.phpbb.com/"><b>phpBB</b></a><b> © 2000, 2002, 2005, 2007 phpBB 
Group 
        <br>Traduzione Italiana PhpBB </b><a tip="" 
href="http://www.phpbb.it/"><b>phpBB.it</b></a><b> - Per Portal XL </b><a tip="" 
href="http://www.portalxl.eu/"><b>portalxl.eu</b></a>
<p><b>&nbsp;</b></p>
<p align="justify"><strong><font color="red">Ricorda che tutti i&nbsp;crediti 
di copyright deveno essere ben visibili in tutte le pagine del sito, dalla prima 
messa online del forum.</font></strong></p>
<p align="justify">
</p><p align="justify">Tutto il <a id="ed_Id_3">materiale</a> di questo 
forum è rilasciato sotto licenza <a id="ed_Id_4">Creative</a> Commons “<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.it" target="_blank"><b>Attribuzione-Non commerciale-Condividi allo 
stesso modo 3.0 Unported</b></a>“.</p>
<p align="justify">
</p><p align="justify">Questo significa che:<br>
<strong>1.</strong> Devi attribuire la paternità del materiale a ' . $config['sitename'] . '<br>
<strong>2.</strong> Non puoi usare il materiale per fini commerciali.<br>
<strong>3.</strong> Non puoi alterare o trasformare i contenuti, né 
usarne stralci per creare altre opere.</p>
<p align="justify">
</p><p align="justify"><span style="text-decoration: underline;"><strong>Distribuzione
 – Citazioni</strong></span></p>
<p align="justify">
</p><p align="justify">Ogni volta che usi o distribuisci quest’opera, 
devi farlo secondo i termini della licenza con cui è stata rilasciata, 
che va comunicata con chiarezza. Puoi citare o quotare questi contenuti a
 patto che <strong>non vengano modificati </strong>e<strong> sia sempre 
citata la fonte con un collegamento ipertestuale a ' . $config['sitename'] . '.</strong></p><div
 style="overflow: hidden; color: rgb(0, 0, 0); background-color: 
transparent; text-align: left; text-decoration: none; border: medium 
none;" id="TixyyLink"> </div>'
		),
);

?>