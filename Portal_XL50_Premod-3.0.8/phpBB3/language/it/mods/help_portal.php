<?php
/**
*
* it/mods/help_portal
*
* Built with the FAQ Manager addon by EXreaction
* http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=31&t=464
*
* @name help_portal.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_faq_manager.php,v 1.1.1.1 2009/05/15 05:14:08 damysterious Exp $
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/03/11
* @copyright (c) 2007, 2009  Portal XL Group
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

$help = array(
	array(
		0 => '--',
		1 => 'Introduzione'
	),
	array(
		0 => 'Cos’è Portal XL 5.0?',
		1 => 'Portal XL 5.0 ~ Plain e Premod sono uno strumento flessibile e potente, una soluzione 
di portale dinamica e avanzata, offrono complete funzionalità e la configurazione 
via phpBB3 ACP in maniera rapida ed efficace. Portal XL 5.0 ~ Plain e Premod sono il valore 
aggiunto, offrono un portale frontend per il forum phpBB3. Portal XL 5.0 Plain e Premod sono testati 
per phpBB3.</p>
<p><b>Requisiti minimi</b>:</p>
<ul>
<LI>Un server web che supporti php, preferibilmente linux; 
<LI>Un sistema di database Sql (MySQL 
3.23 o oltre (MySQLi è supportato); 
<LI>PHP 4.3.3+ (>=4.3.3, >4.4.x, >5.x.x, >6.0-dev (compatibile)) con 
supporto al database; 
<LI>getimagesize() -  la funzione deve essere abilitata; 
<LI>Le funzioni: zlib Compression support, Remote FTP support, XML support, 
Imagemagick support, GD Support migliorano il cms ma non sono indispensabili. </LI>
</ul>
<p><b>Pacchetti disponibili</b>:</p>
<ul type="disc">
    <li><b>Portal xl 5.0 Plain</b> - è la versione base, non contiene tutti 
    i mods della versione Premods, ma contiene codice sorgente e file di 
    lingua italiani che consentono di creare un portale originale e completo, 
     installato su phpBB 3.0.x;</li>
    <li><b>Portal xl 5.0 Premod</b> - è la versione moddata che oltre al codice 
    sorgente e file di lingua italiani, comprende anche codice di terze parti 
    con oltre 70 mods, il tutto installato su phpbb 3.0.x.</li>
</ul>
<p>Installa la versione più adatta alle tue esigenze, ti raccomandiamo di non 
miscelare le versioni otterresti grossi errori! Leggi attentamente il documento 
<a href="http://www.portalxl.eu/docs/PORTAL_XL_INSTALL_IT.html">Portal XL install</a> 
 o le nostre <a href="http://www.portalxl.eu/kb.php">guide 
online</a> prima di procedere con l’installazione o con l’aggiornamento.'
	),
	array(
		0 => 'Chi ha scritto questo portale?',
		1 => 'Questo software (non modificato nella sua forma) è prodotto, realizzato ed è copyright di <a href="http://www.portalxl.nl/forum/">Portal XL Group</a>. Esso è stato creato sotto la licenza GNU General Public e può essere liberamente distribuito.'
	),
	array(
		0 => 'Chi ha tradotto questo portale?',
		1 => 'Questo software (nella sola traduzione italiana) è stato tradotto, adattato e modificato con copyright di <a href="http://www.portalxl.eu/">Portal XL Italia</a>. Esso è stato creato sotto la licenza GNU General Public e può essere liberamente distribuito.'
	),
	array(
		0 => '--',
		1 => 'Installazione Portal XL 5.0'
	),
	array(
		0 => 'Installazione Portal XL 5.0 Plain',
		1 => '<p>Descrizione delle prime sei fasi per l’installazione dello script della nostra versione Portal XL 5.0 Plain.<br><br>
  Scheda "<strong>INSTALLAZIONE</strong>" è utilizzata per creare le nuove tabelle per la versione Portal XL 5.0 Plain.<br>
  Scheda "<strong>AGGIORNAMENTO</strong>" è utilizzata per gli aggiornamenti delle nuove versioni di Portal XL 5.0 Plain se esse sono state rilasciate.<br> 
  Scheda "<strong>DISINSTALLAZIONE</strong>" è utilizzata per eliminare Portal XL 5.0 Plain e riportare il tuo database allo stato iniziale.<br> 
  Scheda "<strong>BBCODE</strong>" è utilizzato per personalizzare i bbCodes nel tuo database.<br> 
  Scheda "<strong>CHMOD</strong>" è utilizzato per tentare di impostare i CHMOD in modo automatico(se il server lo consente) a cartelle o files, se il server non lo permette occorrerà configurare i CHMOD manualmente.
  </p>
<p>Nel caso tu voglia ritornare alla versione iniziale di phpBB3 devi scegliere la scheda "<strong>DISINSTALLAZIONE</strong>", cancellare tutti i files e cartelle del tuo forum eccetto il file <strong>config.php</strong>, caricare un nuova versione di phpBB3 (eliminare il file <strong>config.php</strong> e la directory <strong>\install\</strong> dal tuo pacchetto). Fatto!</p>
<p>PS: se hai allegati nei tuoi messaggi <em>NON</em> cancellare la directory <strong>\files\</strong> dalla tua root.<br>
   Gli avatars degli utenti sono conservati nella directory <strong>\images\avatars\<strong>upload</strong>\</strong>, <em>NON</em> cancellare questa cartella se gli utenti hanno un’avatar definito.<br>
   Hai stili opzionali per Portal XL 5.0 Plain e vuoi cancellarli? Cancella tutti i temi tranne quelli di default (prosilver, subsilver2) dal tuo ACP -> Stili.<br>
Nota: per impostazione predefinita il CHMOD del file config.php è 644 se hai problemi nel terminare la procedura di installazione imposta a 777 prima di lanciare l’installazione.<br>
<p>Per Portal XL 5.0 Plain è necessario impostare chmods a files e cartelle (777 o -rwxrwxrwx con il tuo client FTP): <code style="color: #006600; font-weight: normal; font-family: ’Courier New’, monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/store/</strong> a <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: ’Courier New’, monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/cache/</strong> a <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: ’Courier New’, monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/files/</strong> a <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: ’Courier New’, monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/images/avatars/upload/</strong> a <span style="color:#F00; font-weight:bold;">0777</span></code>, files <code style="color: #006600; font-weight: normal; font-family: ’Courier New’, monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/images/counter/ip.txt</strong> a <span style="color:#F00; font-weight:bold;">0666</span></code> e per ultimo il <code style="color: #006600; font-weight: normal; font-family: ’Courier New’, monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/config.php</strong> a <span style="color:#F00; font-weight:bold;">0644</span></code>. </p>'
	),
	array(
		0 => 'Installazione Portal XL 5.0 Premod',
		1 => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-language" content="en" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2008 Portal XL Group" />
<meta name="keywords" content="" />
<meta name="description" content="phpBB3 Portal XL Installation and updating informations" />
<title>phpBB3 Portal XL • Install</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" media="screen, projection" />
</head>
<body id="phpbb" class="section-docs">
<div id="wrap"> 
    <p align="justify"><a id="top" name="top" accesskey="t"></a>
  <div id="page-header">
    <div class="headerbar">
      <div class="inner">
        <div id="doc-description"> 
                    <p align="justify"><a href="../index.php" id="logo"><img src="styles/prosilver/imageset/logos/logo_010.gif" alt="" /></a>
          <h1 align="justify">Portal XL Installazione</h1>
          <p align="justify">Portal XL  Installazione e informazioni di aggiornamento</p>
          <p style="display: none;" align="justify"><a href="#start_here">Salta</a></p>
        </div>
</div>
    </div>
  </div>
          
    <p align="justify"><a name="start_here"></a>
  <div id="page-body">
    
        <p align="justify"><!-- BEGIN DOCUMENT -->
    <p align="justify"><strong>Leggi questo documento completamente prima di procedere all’installazione 
        o all’aggiornamento.</strong></p>
    <p align="justify">Questo documento è; una base per procedre all’installazione, l’aggiornamento e la conversione del software per il forum..</p>
    <p align="justify">Una panoramica di installazione su phpBB3 Portal XL può; essere trovata nel documento di accompagnamento <a href="\docs\it\PORTAL_XL_README.html">README</a> 
        (in lingua inglese). Leggi anche questo documento oltre al presente file!</p>
    <h1 align="justify">Installazione</h1>
    <div class="paragraph menu">
      <div class="inner">
        <div class="content" align="justify">
          <ol>
            <li><a href="#quickinstall">Installazione rapida</a></li>
            <li><a href="#require">Requisiti</a></li>
            <li><a href="#install">Nuova installazione</a></li>
            <li><a href="#update">Aggiornamento ad una versione precedente di phpBB3 Portal XL</a>
            <li><a href="# Copyright e liberatoria legale">Copyright e liberatoria legale</a></li>
          </ol>
        </div>
</div>
    </div>
            <hr / align="justify">
    
        <p align="justify"><a name="quickinstall"></a>
    <h2 align="justify">1. Installazione rapida</h2>
    <div class="paragraph">
      <div class="inner">
        <div class="content">
          <p align="justify">Se hai una conoscenza di base sull’uso FTP il server eseguirà; phpBB3 Portal XL, 
                    quindi puoi possibile utilizzare questa procedura per iniziare rapidamente. 
                    Esegui questa proceduera solo se hai già; installato 
                    una copia di phpbb 3.0.x!</p>
  </div>
        <div class="content" align="justify">
          <ol>
            <li>Decomprimi l’archivio Portal_XL50_Plain.zip in una directory locale del tuo computer.</li>
            <li>Scarica tutto il contenuto nella directory \root\ o nella \public_html\ del tuo server (rispettando la struttura).</li>
            <li>Modifica i permessi alle directories facendo in modo che siano scrivibili (777 o -rwxrwxrwx con il tuo client FTP):<br />
              <code>store /</code>, <code>cache / e tutte le loro sottocartelle</code>, 
<code>files /</code>, <code>mods / toplist_mod / cache /</code>, <code>images / 
upload / avatars /</code>, <code>/ dl_mod / thumbs / e di tutte le loro 
sottocartelle</code>, <code>dl_mod / downloads / e di tutte le loro 
sottocartelle</code>, <code>phpbb_seo / cache /</code>, <code>gym_sitemaps / 
cache /</code>, <code>/ config.php</code> e almeno <code>/ images / counter / 
ip.txt</code>. 
<LI>Utilizzando il browser Web. visita il percorso messo phpBB3 Portal XL con 
l’aggiunta di install_portal / o puntando direttamente a install_portal / 
index.php, ad esempio, http://www.mydomain.com/phpBB3/install_portal/index.php, 
http://www.mydomain.com/forum/install_portal/index.php ecc </LI><LI>Clicca sulla scheda "<strong>Installa</strong>"per installare la 
    versione base (Portal XL 5.0 Plain) seguendo le istruzioni fornite. Non 
    effettuare il login! </LI><LI>Clicca  sulla scheda "<strong>Upgrade Premod</strong>", e 
    poi su"<strong>Aggiornamento del database</strong>", procederi. 
Se l’<b>a</b><strong>ggiornamento è; completato, clicca su login <b>p</b></strong>er accedere alla XL 5.0 Premod. </LI>          </ol>
  </div>
        <div class="content">
<div id="wrap"> <div id="page-body">
    <div class="paragraph">
      <div class="inner">
        <div class="content">
          <p align="justify">Se hai riscontrato problemi o non sai come procedere con una qualsiasi delle fasi di cui sopra sei pregato di leggere il resto di questo documento o vedi <a href="#refresh_cache">aggiornamento cache</a>.</p>
        </div>
        <div class="back2top">
                                        <p align="justify"><a href="#wrap" class="top">Torna sù;</a></div>
</div>
    </div>
            <hr / align="justify">
    
                            <p align="justify"><a name="require"></a>
    <h2 align="justify">2. Requisiti</h2>
    <div class="paragraph">
      <div class="inner">
        <div class="content">
          <p align="justify">phpBB3 Portal XL necessita dei seguenti requisiti:</p>
        </div>
        <div class="content" align="justify">
          <ul>
            <li>Un server web che supporti php, preferibilmente linux</li>
            <li>Un sistema di database Sql                <li>(MySQL 3.23 o oltre (MySQLi è; supportato)</li>
            <li><strong>PHP 4.3.3+ (>=4.3.3, >4.4.x, >5.x.x, >6.0-dev (compatibile)) con supporto al database</strong></li>
            <li><strong>getimagesize() -  la funzione deve essere abilitata;</strong></li>
            <li><strong>Le funzioni: zlib Compression support, Remote FTP support, XML support, Imagemagick support, GD Support migliorano il cms ma non sono indispensabili.</strong></ul>        
          
        </div>
        <div class="content">
<p align="justify"><strong>Se il tuo server di hosting non soddisfa i requisiti di cui sopra phpBB3 Portal XL non è; per te.</strong></p>
        </div>
        <div class="back2top">
                                        <p align="justify"><strong><a href="PORTAL_XL_INSTALL.html#wrap" class="top">Torna 
                    sù;</a></strong></div>
</div>
    </div>
            <hr / align="justify">
    
                            <p align="justify"><strong><a name="install"></a>
    </strong>3. Nuova installazione
                        </div>
                    </div>
  </div>
</div>
<DIV class=paragraph>
<DIV class=inner>
<DIV class=content>
<P align="justify">Se hai scaricato uno dei due pacchetti e deciso quale versione 
                        vuoi installare, in questo caso Portal XL5.0 Premod. <strong>Nota</strong>: Che 
prima di aggiornare consigliamo di fare un <em>completo  
backup del database e file esistenti phpBB3</em>! Se non sei sicuro su come 
raggiungere questo obiettivo puoi sempre rivolgerti al tuo fornitore di hosting per un 
consiglio. <strong>ATTENZIONE!</strong> Se il tuo ex phpBB3 Portal o setup di XL è; 
stato modificato da mods diversi da quelli che sono installati  con Portal XL 5.0 ~ 
Premod,  perderai tutte le modifiche!</P>
                        <p align="justify"><A name=install_full></A>
<H3 align="justify">3. Portale XL5.0 Premod </H3>
<P align="justify"><strong>Nota</strong>: Step da seguire (formati da due fasi: installazione di PhpBB e installazione di 
Portal XL):<P align="justify">Step da eseguire: 
<P align="justify">- Scarica una recente copia di phpBB 3.0.x da phpBB 3.0.x da <A 
href="http://www.phpbb.com/downloads/" target=_blank>phpbb.com</A> o da <A 
href="http://www.phpbb.it/download.html" target=_blank>phpbb.it</A> se non è; 
ancora installato. Se installato procedere <A href="#creating_portal">qui</A>.<BR>- 
Scarica e decomprimi il pacchetto di phpBB 3.0.x su una directory del tuo 
computer <BR>- Invia sul tuo server il contenuto della cartella phpBB situato 
                        nel pacchetto che hai scaricato nella directory root 
                        del tuo sito o 
public_html<BR>- Posizionati sulla barra del tuo browser e scrivi ad esempio 
http://your-domain/install/, inizierà; l’installazione e segui la guida in 
linea<BR>- Elimina la cartella /install/ relativa all’installazione del tuo 
phpBB dopo l’installazione.</P>
<P align="justify"><A name=creating_portal></A></P>
<P align="justify">Il prossimo passo sarà; la creazione di XL 5.0 Premod.</P>
</DIV>
<DIV class=content align="justify">
<UL>
<LI><strong>1.</strong> Decomprimi l’archivio 
<strong>Portal_XL50_Premod.zip</strong> in una directory temporanea 
<LI><strong>2.</strong> Carica / copia / sovrascrivi tutti i contenuti 
(mantenendo la struttura delle directory) dalla directory del pacchetto <strong>\ 
root \</strong> alla root del tuo  
forum o<STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG> 
\</STRONG>public_html<STRONG>\</STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG> <LI><strong>3.</strong> Posizionati 
                            sulla barra del tuo browser e aggiungi al nome del 
                            tuo sto <strong>/ install_portal / 
index.php</strong> per avviare lo script di installazione,  clicca sulla 
scheda "<strong>Installa</strong>" per installare la versione base 
                            (Portal XL 5.0 Plain). <b>Non effettuare il login! 
                            </b><LI><strong>4.</strong> Scegli la scheda "<strong>Upgrade Premod</strong>",  clicca 
su"<strong>Aggiornamento del database</strong>",  procedi con l’installazione 
                            dei mods di terze parti, verra installata la "<b>phpBB 
                            Gallery</b>", successivamente potrai loggarti 
                            per accedere alla XL 5.0 Premod. 
<LI><b>5</b>.Per installare la<b>  </b><strong><b>phpBB Gallery</b></strong>, scegli la 
                            scheda "<strong>INSTALLA GALLERIA. </strong>Si aprirà; lo  script di 
installazione originale in una nuova finestra per assegnare le modifiche al 
database. Nel caso non riesci ad aprire in una nuova finestra lo script scrivi 
                            sul tuo browser 
                            <a href="http://your-domain/install_gallery/index.php">http://your-domain/install_gallery/index.php</a> 
                            per eseguire lo script 
di installazione manualmente. 
                            <LI><b>6</b>.Elimina o rinomina la directory<strong>\ 
install_portal \</strong>. </LI></UL>
</DIV>
<DIV class=content>
<P align="justify"><strong><strong>Opzionale:</strong></strong></P>
</DIV>
<DIV class=content align="justify">
<UL>
<LI><strong><strong><strong>--</strong> Installare i  BBCodes predefiniti del database, scegli 
                            la scheda "<strong>BBCode</strong>" 
                            </strong></strong><LI><strong><strong><strong>--</strong> Per 
                            i permessi dei file CHMOD, scegli la scheda 
"<strong>CHMOD</strong>" </strong></strong></LI></UL>
</DIV>
<DIV class=content>
<P align="justify"><strong><strong>Per rimuovere Portal XL 5,0 Premod completamente senza lasciare alcun 
residuo:</strong></strong></P>
</DIV>
<DIV class=content align="justify">
<UL>
<LI><strong><strong><strong>--</strong> Scegli la scheda "<strong>UPGRADE REMOVE</strong>" </strong></strong></LI></UL>
</DIV>
<DIV class=content>
<P align="justify"><strong><strong><A name=refresh_cache></A></strong></strong></P>
<P align="justify"><strong><strong>- Dopo l’installazione, accedi in ACP e fare tutti i seguenti 
                        passaggi:</strong></strong></P>
<P align="justify"><strong><strong>- Stili -> componenti Stile -> Templates -> prosilver -> 
Aggiorna<BR>- Stili  -> componenti Stile -> Temi -> prosilver -> 
Aggiorna<BR>- Stili  -> componenti Stile -> Imagesets -> prosilver 
-> Aggiorna<BR>- Scheda Generale -> Nella schermata principale -> 
Svuota la cache<BR>- Aggiorna la tua cache del browser</strong></strong></P>
<P align="justify"><strong><strong>Pronto!</strong></strong></P>
<P align="justify"><strong><strong>PS: visita i nostri <a href="http://www.portalxl.nl/stylespremod/" target="_blank">stili Demo</a> / Scaricali per Portal XL 5.0 ~ Premod<BR>Buon divertimento con Portal XL 5.0 ~  Premod Il 
pazzo pazzo sistema portale per phpBB 3.0.x</strong></strong></P></DIV>
<DIV class=back2top>
                        <p align="justify"><strong><strong><A class=top href="#wrap">Torna in alto</A></strong></strong></DIV></DIV></DIV>
<HR align="justify">
            <p align="justify"><strong><strong><A name=update></A>
            </strong></strong><H2 align="justify"><strong><strong>4. Aggiornare una versione precedente di phpBB3 Portal XL</strong></strong></H2>
<DIV class=paragraph>
<DIV class=inner>
<DIV class=content>
<P align="justify">Se hai scaricato uno dei due pacchetti e deciso quale versione 
                        vuoi installare, in questo caso Portal XL5.0 Premod. <strong>Nota</strong>: Che 
prima di aggiornare consigliamo di fare un <em>completo  
backup del database e file esistenti phpBB3</em>! Se non sei sicuro su come 
raggiungere questo obiettivo puoi sempre rivolgerti al tuo fornitore di hosting per un 
consiglio. <strong>ATTENZIONE!</strong> Se il tuo ex phpBB3 Portal o setup di XL è; 
stato modificato da mods diversi da quelli che sono installati  con Portal XL 5.0 ~ 
Premod,  perderai tutte le modifiche!</P>
<P align="justify"><strong><strong><A name=update_full></A></strong></strong></P>
<H3 align="justify"><strong><strong>4. Portale XL5.0 Premod </strong></strong></H3>
<P align="justify"><strong><strong>Step da eseguire: 
                        </strong></strong><P align="justify"><strong><strong>E ’necessario solo se non già; utilizzando una recente phpBB 3.0.x. Se 
installato procedere <A href="#update_portal">qui</A><BR><BR>- </strong></strong><b>Scarica una recente copia di phpBB 3.0.x da phpBB 3.0.x da </b><A 
href="http://www.phpbb.com/downloads/" target=_blank><b>phpbb.com</b></A><b> o da </b><A 
href="http://www.phpbb.it/download.html" target=_blank><b>phpbb.it</b></A><b> se non è; 
ancora installato. Se installato procedere </b><A href="PORTAL_XL_INSTALL.html#creating_portal"><b>qui</b></A><strong><strong><BR>- Scompatta phpBB 3.0.x 
in una directory temporanea<BR>- Elimina il file config.php dalla cartella / 
phpBB3 / del pacchetto<BR>- Carica / sovrascrivi la cartella phpBB3 alla tua 
root forum (il portale è; perduto)<BR>- Scrivi sul tuo browser  per esempio. 
http://your-domain/install/database_update.php ed eseguire lo script di 
aggiornamento<BR>- Rimuove la cartella / install /</strong></strong></P>
<P align="justify"><strong><strong><A id=update_portal name=update_portal></A></strong></strong></P>
<P align="justify"><strong><strong>Il prossimo step ri-crea il tuo portale.</strong></strong></P>
                        <p align="justify"><strong><strong><BR>
                        </strong></strong><HR align="justify">

<DIV style="BACKGROUND-COLOR: #ffffff">
<P align="justify"><strong><strong><STRONG><SPAN style="COLOR: #ff0000">ATTENZIONE!</SPAN> Da utilizzare con una 
                            versione esistente di XL 5.0 Plain</strong>!<BR>Per aggiornare a questa 
versione correttamente sono necessari alcuni passaggi essenziali  per  
accedere al tuo sito senza errori.<BR>- Rimuovi la directory \ portal \ e 
tutte le sotto directory<BR>- Rimuovi \ language \ it \ mods 
\<strong>portal_xl.php</strong>, In \ language \ it \ mods 
\<strong>acp_portal_xl *. php</strong>, In adm \ style \ portal_xl 
\<strong>acp_portal *. html</strong>.<BR>- Rimuovi (solo temporaneamente in caso di 
problemi) \ lingua \ xx \ se hai lingue diverse da \ it \ installate. I file 
                            di lingua della  Portal XL 5.0 Plain non  funzionaranno con la versione 
Premod, però; le basi sono identiche.</strong></strong></P>
</DIV><DIV style="BACKGROUND-COLOR: #ffffff" align="justify">
<UL>
<LI><strong><strong><strong>1.</strong> decomprimi l’archivio 
<strong>Portal_XL50_Premod.zip</strong> in una directory temporanea 
                                </strong></strong><LI><strong><strong><strong>2.</strong> carica / copia / sovrascrivi tutti i contenuti 
(mantenendo la struttura delle directory) dalla directory del pacchetto <strong>\ 
root \</strong> alla root del tuo 
forum, ad esempio<STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG> 
\</STRONG>public_html<STRONG>\</STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG> </strong></strong><LI><strong><strong><strong>3.</strong> Scrivi 
                                sulla barra del tuo browser <strong>/ install_portal / 
index.php</strong> dopo l’indirizzo del tuo sito per avviare lo script di installazione e scegli 
                                la 
scheda "<strong>Upgrade Premod</strong>",  clicca su"<strong>Aggiornamento del 
database</strong>"  </strong></strong><b>procedi con l’installazione 
                            dei mods di terze parti, verra installata la "phpBB 
                            Gallery"</b>, s<b>uccessivamente potrai loggarti 
                            per accedere alla XL 5.0 Premod.</b> 
<strong><strong>. Se l’<strong>Aggiornamento è; completato</strong>" 
                                puoi fare il login per accedere alla XL 5.0 Premod. 
                                </strong></strong><LI><strong><strong><strong>4.</strong> Elimina 
                                o rinomina la directory <strong>\ 
install_portal \</strong>. </strong></strong></LI></UL></DIV>
                        <p align="justify"><strong><strong><BR>
                        </strong></strong><HR align="justify">

<DIV style="BACKGROUND-COLOR: #ffffff">
<P align="justify"><strong><strong><STRONG><SPAN style="COLOR: #ff0000">ATTENZIONE!</SPAN> Da utilizzare con una 
                            versione esistente di XL 5.0 Premod</strong>!<BR>Per aggiornare a questa 
versione correttamente alcuni passaggi essenziali sono necessari per dare 
seguito al vostro sito in esecuzione.<BR>- Rimuovi la directory \ portal \ e 
tutte le sotto directory<BR>- Rimuovi \ language \ it \ mods 
\<strong>portal_xl.php</strong>, In \ language \ it \ mods 
\<strong>acp_portal_xl *. php</strong>, In adm \ style \ portal_xl 
\<strong>acp_portal *. html</strong>.<BR>- Rimuovi tutto il contenuto nella 
directory <strong>\ stili \ prosilver \ template \ portale \ *.*</strong>.<BR>- 
Rimuovi tutto il contenuto nella directory <strong>\ stili \ subsilver2 \ 
template \ portale \ *.*</strong>.</strong></strong></P>
</DIV><DIV style="BACKGROUND-COLOR: #ffffff" align="justify">
<UL>
<LI><strong><strong><strong>1.</strong> decomprimi l’archivio 
<strong>Portal_XL50_Premod.zip</strong> in una directory temporanea 
                                </strong></strong><LI><strong><strong><strong>2.</strong> carica / copia / sovrascrivi tutti i contenuti 
(mantenendo la struttura delle directory) dalla directory del pacchetto <strong>\ 
root \</strong> alla root del tuo 
forum, ad esempio<STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG><STRONG> 
\</STRONG>public_html<STRONG>\</STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG></STRONG> </strong></strong><LI><strong><strong><strong>3.</strong> Rimuovi o rinomina la directory <strong>\ 
install_portal \</strong>. </strong></strong></LI></UL></DIV><DIV style="BACKGROUND-COLOR: #ffffff">
<P align="justify"><strong><strong><STRONG><SPAN style="COLOR: #ff0000">ATTENZIONE!</SPAN> Aggiornamento a 
phpBB3 SEO SEO 0.6.0  attivo sul tuo sito:</strong><BR>
                            </strong></strong></DIV><DIV style="BACKGROUND-COLOR: #ffffff" align="justify">
<UL>
<LI><strong><strong><strong>--</strong> Nella directory <strong>/ phpbb_seo / cache /</strong>, esegui 
                                un backup del file di installazione SEO esistenti 
<strong>phpbb_cache.php</strong> o rimuovi il file dalla cartella pacchetto / 
root / phpbb_seo / cache / prima di caricare qualsiasi cosa. 
                                </strong></strong><LI><strong><strong><strong>--</strong> Nella directory <strong>/ root /</strong> del tuo forum, 
esegui un backup del file  <strong>. htaccess</strong> o rimuovere il file 
dalla cartella package / root / prima di caricare qualsiasi cosa. 
                                </strong></strong><LI><strong><strong><strong>--</strong> Nella directory <strong>/ root /</strong> del tuo forum, 
esegui un backup del file <strong>config.php</strong> prima del 
caricamento dei file. </strong></strong></LI></UL>
</DIV><DIV style="BACKGROUND-COLOR: #ffffff">
<P align="justify"><strong><strong><STRONG><SPAN style="COLOR: #ff0000">ATTENZIONE!</SPAN> Installazione di 
phpBB Gallery 1.0.0:</strong><BR>
                            </strong></strong></DIV><DIV style="BACKGROUND-COLOR: #ffffff" align="justify">
<UL>
<LI><strong><strong><strong>--</strong> Scrivi sul tuo browser 
http://your-domain/install_gallery/index.php per richiamare lo script di 
installazione e seguire la descrizione. </strong></strong></LI></UL></DIV>
                        <p align="justify"><strong><strong><BR>
                        </strong></strong><HR align="justify">

<P align="justify"><strong><strong>- Dopo l’installazione, accedi in ACP e fare tutti i seguenti 
                        passaggi:</strong></strong></P>
<P align="justify"><strong><strong>- Stili -> componenti Stile -> Templates -> prosilver -> 
Aggiorna<BR>- Stili  -> componenti Stile -> Temi -> prosilver -> 
Aggiorna<BR>- Stili  -> componenti Stile -> Imagesets -> prosilver 
-> Aggiorna<BR>- Scheda Generale -> Nella schermata principale -> 
Svuota la cache<BR>- Aggiorna la tua cache del browser</strong></strong></P>
<P align="justify"><strong><strong>Pronto!</strong></strong></P>
<P align="justify"><strong><strong>PS: visita i nostri <a href="http://www.portalxl.nl/stylespremod/" target="_blank">stili Demo</a> / Scaricali per Portal XL 5.0 ~ Premod<BR>Buon divertimento con Portal XL 5.0 ~  Premod Il 
pazzo pazzo sistema portale per phpBB 3.0.x</strong></strong></P></DIV>
<DIV class=back2top>
                        <p align="justify"><strong><strong><A class=top href="#wrap">Torna in alto</A></strong></strong></DIV></DIV></DIV>
<HR align="justify">
            <p align="justify"><strong><strong><A name=convert></A>
            </strong></strong><HR align="justify">
            <p align="justify"><strong><strong><A name=disclaimer></A>
            </strong></strong><H2 align="justify"><strong><strong>7.<a name=" Copyright e liberatoria legale"> Copyright e liberatoria legale</a></strong></strong></H2>
<P align="justify"><strong><strong>Questa applicazione è; un software opensource realizzato sotto licenza 
<a href="http://opensource.org/licenses/gpl-license.php">GPL</a>. Leggi il 
codice sorgente ed i documenti per maggiori dettagli. Questo pacchetto e tutto 
il suo contenuto sono Copyright (c) 2007, 2008 <a href="http://www.portalxl.nl/forum/" target="_blank">Portal XL 
Group</a>. La traduzione in italiano, comprendente tutti i languages, ivi 
compresi la traduzione del database, le eventuali modifiche al codice sorgente e 
tutti i documenti allegati, sono Copyright (c) 2009 - 2011 <a href="http://www.portalxl.eu" target="_blank">Portal XL Italia</a>. Tutti i 
diritti riservati.Sotto licenza Creative Commons <A 
href="http://creativecommons.org/licenses/by-nc-sa/3.0/" 
target=_blank>Attribution-NonCommercial-ShareAlike 3.0</A>.</strong></strong></P><DIV class=paragraph>
<DIV class=inner><DIV class=back2top>
                        <p align="justify"><strong><strong><A class=top href="#wrap">Torna in alto</A></strong></strong></DIV></DIV></DIV>
            <p align="justify"><strong><strong><!-- END DOCUMENT -->
            </strong></strong><DIV id=page-footer>
<DIV class=version>
                    <p align="justify"> </DIV></DIV></body>
</html>'
	),
	array(
		0 => '--',
		1 => 'Configurazione Portal XL 5.0'
	),
	array(
		0 => 'Scheda » Generale',
		1 => 'Ci sono sette configurazioni:<br /><br />
		<ul>
		<li><strong>Le immaggini vengono automaticamente ridimensionate (pixel):</strong> il ridimensionamento avviene usando il tag img-tag nei messaggi posizionati come news portale. Raccomandato il valore di 400px.</li>
		<li><strong>Limite di visualizzazione amici online:</strong> il limite visualizzato degli amici online nel blocco online_friends.html ha diversi valori (default è 8).</li>
		<li><strong>Limite di visualizzazione ultime visite:</strong> il limite visualizzato delle ultime visite nel blocco whos_online.html ha diversi valori (default è 5).</li>
		<li><strong>Ordine dei messaggi news:</strong> questo pulsante ha come effetto la visualizzazione l’ordine dei messaggi nei blocchi announci, news etc. Si = ultimo messaggio/prima risposta, No = primo argomento.</li>
		<li><strong>Strumenti del forum:</strong> vuoi visualizzare gli strumenti del forum Si/No? L’effetto del mouse mostra le descrizioni nel titolo di immaggini/links etc.</li>
		<li><strong>Opzione "seleziona e sposta" portale:</strong> le scelte possibili sono Si/No? Attiva o disattiva la selezione e lo spostamento dei blocchi nel portale/indice.</li>
		<li><strong>Immaggini ridimensionate automaticamente (pixel):</strong> Ridimensionamento 
    delle immaggini usando il tag img-tag nei messaggi che sono posizionati 
    nell news del portale. Raccomandato il valore di  400px. Per non ridimensionare 
    le firme 
 aumentare il valore per la larghezza della tua  firma con un valore più alto 
    in pixel.</li>		
	     </ul>'
	),
	array(
		0 => 'Scheda » Annunci',
		1 => '<p>Qui puoi modificare le informazioni per gli annunci ed alcune opzioni specifiche. Ci 
sono diverse opzioni:</p>
<ul type="disc">
    <li>
    <b>Numero degli annunci del portale</b>, 0 per infiniti<SPAN>;<BR></SPAN><li><b>Numero 
    di giorni per visualizzare gli annunci</b>, 0 per infiniti<SPAN><SAMP>;</SAMP></SPAN></li>
    <li><b>Lunghezza massima per gli annunci,</b><SPAN> questo valore conta i caratteri che possono essere visualizzati. 0 per 
infiniti;</SPAN></li>
    <li><b>ID forum per gli annunci globali</b><SPAN>, Forum per annunci globali (devi specificare un ID) separato da una virgola 
per multi-forums, es. 1,2,5. Non lasciare questo campo vuoto, anche solo 0 è 
richiesto.</SPAN></li>
</ul>
<p>Configurazione paginazione annunci è un impostazione che permette di numerare 
gli annunci nel blocco, ci sono le seguenti opzioni:</p>
<ul type="disc">
    <li><b>Repository articoli</b><SPAN>, con opzione  Si/No relativa alla paginazione. 
    </SPAN>Se abiliti i numeri degli articoli, puoi visualizzare l’ultimo articolo nel 
blocco;<SPAN> <BR></SPAN></li>
    <li><b>Visualizzazione tutti i tipi di messaggi</b><SPAN>, con opzione  Si/No, 
    t</SPAN>utti i tipi di articoli come gli annunci, annunci globali, importanti e normali 
saranno considerati nella sezione articoli. La sezione annunci sarà conteggiata 
negli annunci globali e annunci normali;</li>
    <li><b>Permessi di paginazione</b><SPAN>, scelta Si/No.</SPAN></li>
</ul>'
	),
	array(
		0 => 'Scheda » News',
		1 => '<P>Qui puoi modificare le news ed alcune opzioni specifiche. Ci 
sono diverse opzioni:</P><ul type="disc">
    <li>
    <b>Numero di articoli nel portale</b>, 0 per infiniti<SPAN>;<BR></SPAN><li><b>Lunghezza 
    massima per le news</b>, q<SPAN>uesto valore conta i caratteri che possono essere visualizzati. 0 per 
infiniti.<SAMP>;</SAMP></SPAN></li>
    <li><b>ID per news,</b><SPAN> Forum per news (devi specificare un ID) separato da una virgola per 
multi-forums, es. 1,2,5. Non lasciare questo campo vuoto, anche solo 0 è 
richiesto;</SPAN></li>
</ul>
<p>Configurazione paginazione news&nbsp;è un impostazione che permette di numerare 
gli annunci nel blocco, ci sono le seguenti opzioni:</p>
<ul type="disc">
    <li><b>Repository articoli</b><SPAN>, con opzione  Si/No relativa alla paginazione. 
    </SPAN>Se abiliti i numeri degli articoli, puoi visualizzare l’ultimo articolo nel 
blocco;<SPAN> <BR></SPAN></li>
    <li><b>Visualizzazione tutti i tipi di messaggi</b><SPAN>, con opzione  Si/No, 
    t</SPAN>utti i tipi di articoli come gli annunci, annunci globali, importanti e normali 
saranno considerati nella sezione articoli. La sezione annunci sarà conteggiata 
negli annunci globali e annunci normali;</li>
    <li><b>Permessi di paginazione</b><SPAN>, scelta Si/No.</SPAN></li>
</ul>'
	),
	array(
		0 => 'Scheda » Messaggi recenti',
		1 => '<P>Qui puoi modificare le impostazione dei messaggi recenti  ed alcune opzioni specifiche. Ci 
sono due opzioni:</P><ul type="disc">
    <li>
    <b>Limite degli annunci recenti</b>, 0 per infiniti<SPAN>;<BR></SPAN><li><b>Limite 
    caratteri per gli annunci recenti</b>, 0 per infiniti<SPAN>;.</SPAN></li>
</ul>'
	),
	array(
		0 => 'Scheda » Paroliere',
		1 => '<P>Qui puoi modificare le tue informazioni per il paroliere ed alcune opzioni 
specifiche. Ci 
sono tre opzioni:</P><ul type="disc">
    <li>
    <b>Quante parole vuoi mostrare</b>, 0 per infiniti<SPAN>;<BR></SPAN><li><b>Includi 
    la visualizzazione dei valori</b>, 0 per infiniti<SPAN>;</SPAN></li>
    <li><b>Dimensione ratio</b><SPAN>, modifica il ratio (grande/piccolo) della dimensione parola (default=4). 
Questo valore è relativo al valore delle parole visualizzate. Per le altre 
parole e gli altri aspetti ratio puoi scegliere di assegnare un ratio 
grande.</SPAN> </li>
</ul>'
	),
	array(
		0 => 'Scheda » Paypal',
		1 => '<P>Qui puoi modificare le tue informazioni paypal ed alcune opzioni 
specifiche. Ci 
sono tre opzioni:</P><ul type="disc">
    <li>
    <b>Visualizza paypal al centro</b>, <SPAN>visualizza blocco Si/No?</SPAN><li><b>Visualizza pulsante piccolo</b>, Visualizza blocco Si/No?<SPAN></SPAN></li>
    <li><b>Account paypal</b><SPAN>, aggiungi la tua email paypal es. xxx@xxx.com. 
</SPAN></li>
</ul>'
	),
	array(
		0 => 'Scheda » Allegati',
		1 => '<P>Qui puoi modificare le tue informazioni allegati ed alcune opzioni 
specifiche.</P><ul type="disc">
    <li>
    <b>Limite allegati visualizzati</b>, 0 per infiniti.</ul>'
	),
	array(
		0 => 'Scheda » Ultimi utenti',
		1 => '<P>Qui puoi modificare le tue informazioni ultimi utenti ed alcune opzioni 
specifiche.</P><ul type="disc">
    <li>
    <b>Limite per visualizzazione ultimi utenti</b>, 0 per infiniti.</ul>'
	),
	array(
		0 => 'Scheda » Sondaggi',
		1 => '<P>Qui puoi modificare le tue informazioni sondaggi ed alcune opzioni 
specifiche.</P><ul type="disc">
    <li>
    <b>Visualizza sondaggi del relativo argomento ID</b>, messaggio ID (numero topic) che desideri visualizzare, selezionato a 0 (non lasciare il campo vuoto);
    <li><b>Visualizza sondaggio del relativo forum ID</b>, f<SPAN>orum ID (numero forum) che desideri visualizzare, selezionato a 2 (non 
lasciare il campo vuoto);</SPAN></li>
    <li><b>Visualizza sondaggio del relativo messaggio ID</b>, m<SPAN>essaggio ID (numero messaggio) che desideri visualizzare, selezionato a 0 
(non lasciare il campo vuoto).</SPAN> </li>
</ul>'
	),
	array(
		0 => 'Scheda » Visite bots',
		1 => '<P>Qui puoi modificare le tue informazioni bots ed alcune opzioni 
specifiche.</P><ul type="disc">
    <li>
    <b>Quanti bots vuoi visualizzare</b>, 0 per infiniti.</ul>'
	),
	array(
		0 => 'Scheda » Maggiori autori',
		1 => '<P>Qui puoi modificare le tue informazioni autori ed alcune opzioni specifiche.
</P><ul type="disc">
    <li>
    <b>Quanti autori vuoi visualizzare</b>, 0 per infiniti.</ul>'
	),
	array(
		0 => 'Scheda » Benvenuto',
		1 => '<P>Qui puoi modificare il messaggio di benvenuto ed alcune opzioni 
specifiche.</P><ul type="disc">
    <li>
    <b>Messaggio di benvenuto per gli ospiti</b>, puoi creare un messaggio di 
    benvenuto da inserire successivamente in un blocco, e specifico per gli 
    ospiti.  <SPAN>Max. 2000 caratteri 
(html consentito)! Tutto il testo oltre il limite viene automaticamente 
tagliato.</SPAN> 
    <li><b>Messaggio di benvenuto per gli utenti registrati</b>, puoi creare 
    un messaggio di benvenuto da inserire successivamente in un blocco, e specifico 
    per gli utenti registrati.  <SPAN>Max. 2000 caratteri 
(html consentito)! Tutto il testo oltre il limite viene automaticamente 
tagliato.</SPAN> </li>
</ul>'
	),
	array(
		0 => 'Scheda » Meteo',
		1 => '<P>Qui puoi modificare le informazioni meteo ed alcune opzioni specifiche. Il 
sito di configurazione di default è wetter.com (Germania). Se vuoi cambiare 
con altri siti devi modificare l’url in 
styles/prosilver/template/portal/block/weather.html, o compilare i campi 
sottostanti. Oltre i tre links non è possibile aggiungere.</P>Configurazione meteo di wetter.com (Germania)<ul type="disc">
    <li>
    <b>Visualizza meteo (Germania) wetter.com</b>, visualizza questo blocco Si/No; 
    <li><b>Il tuo codice postale</b>, aggiungi il tuo codice postale per visualizzare la tua area da wetter.com;</li>
</ul>
<p> Configurazione meteo per altri siti meteo</p>
<p>Sono disponibili tre campi per inserire il codice html di siti meto alternativi. 
<SPAN>Lascia vuoto per non visualizzarlo.</SPAN> </p>'
	),
	array(
		0 => 'Scheda » Messaggio scorrevole',
		1 => '<P>Qui puoi modificare le informazioni per il messaggio scorrevole da inserire 
dopo la configurazione in un blocco. Il tag marquee è un tag HTML che genera un testo scorrevole da destra a 
sinistra. La larghezza predefinita del marqee è pari alla larghezza 
dell’elemento principale. Ci sono diverse opzioni:</P><ul type="disc">
    <li>
    <b>Visualizza messaggio scorrevole</b>, visualizza questo blocco Si/No; 
    <li><b>Visualizza effetto colorato</b>, visualizza questo blocco Si/No;</li>
    <li><b>Colore testo</b>, <SPAN>HEX o il nome del colore ad esempio #ffffff per bianco. Il colore di 
default è #ff0000;</SPAN></li>
    <li><b>Dimensione testo</b><SPAN>, dimensione testo in pixel. Il valore di default è 10px.;</SPAN></li>
    <li><b>Direzione scorrimento</b>, d<SPAN>irezione del testo scorrevole. Questo attributo controlla la direzione 
del testo scorrevole. I valori permessi sono <STRONG>left</STRONG>, 
<STRONG>right</STRONG>, <STRONG>up</STRONG> e <STRONG>down</STRONG> specificando 
la fine della casella di scorrimento dall’inizio;</SPAN></li>
    <li><b>Velocità scorrimento</b><SPAN>, controlla la velocità del movimento (in pixel) tra le successive 
visualizzazioni delle animazioni;</SPAN></li>
    <li><b>Ritardo scorrimento</b>, c<SPAN>ontrolla il ritardo in millesecondi tra le successive visualizzazioni per 
imprimere l’animazione;</SPAN></li>
    <li><b>Allineamento</b>, q<SPAN>uesto tag controlla il comportamento del testo visualizzato. Ci sono tre 
possibili valori. Inizia a scorrere il testo non appena la pagina viene 
caricata. <BR>Opzioni: <BR></SPAN><STRONG><font color="red">scroll</font></STRONG><SPAN> il testo scorre attraverso lo schermo e 
ri-appare all’altra estremità quando è scomparso. Questo è il comportamento di 
default. <BR><STRONG><font color="red">slide</font></STRONG> è simile allo scorrimento ad eccezione del 
fatto che quando il testo scorrevole raggiunge l’estremità del box, scompare e 
si riavvia a partire della fine del box. Se lo schermo non è loop il testo 
rimane posizionato alla fine del box. <BR><STRONG><font color="red">alternate</font></STRONG> il testo 
"rimbalza" tra le estremità del box.</SPAN> </li>
    <li><b>Colore</b>, q<SPAN>uesto tag controlla il colore di sfondo del box;</SPAN></li>
    <li><b>Altezza e larghezza scorrimento</b>, tag che controlla l’altezza 
    e la larghezza del box;</li>
    <li><b>Spazio orizzontale e verticale</b>, tag che controlla lo spazio del 
    box;</li>
    <li><b>Loop scorrimento</b>, q<SPAN>uesto valore controlla il numero di cicli. Il valore -1 è infinito 
significa che continua fino a infinito;</SPAN></li>
    <li><b>Codice testo scorrevole</b><SPAN>, aggiungi/modifica un messaggio. Oltre i 1000 caratteri, il testo viene 
automaticamente tagliato, HTML è consentito, i cookie sono abilitati!</SPAN></li>
</ul>'
	),
	array(
		0 => 'Scheda » Meta tags',
		1 => '<P>Qui puoi modificare le informazioni per i meta tags del tuo sito. I tags creano una descrizione del tuo sito utili per i motori di ricerca.<BR>Ciò 
consentirà al motore di ricerca di indicizzare meglio il tuo sito. Questi 
tags consentono altre opzioni come il reindirizzamento automatico ad un altro 
URL. Ci sono diverse opzioni:</P><ul type="disc">
    <li>
    <b>Reindirizzamento tempo (sec)</b>, specifica il tempo in secondi entro il quale i browser reindirizza automaticamente ad un URL specifico. Lascia in bianco per non eseguire nessun reindirizzamento automatico!; 
    <li><b>Indirizzo di reindirizzamento (URL)</b>, specifica un URL per il reindirizzamento da eseguire in un tempo determinato. Lascia in bianco per non eseguire nessun reindirizzamento automatico!;
    </li>
    <li><b>Aggiornamento META</b>, <SPAN>specifica un tempo in secondi prima che il browser aggiorni automaticamente il documento. Lascia in bianco per non eseguire nessun aggiornamento automatico!;</SPAN></li>
    <li><b>Cache META</b><SPAN>, proibisce al record della pagina di conservare nella cache del browser.
- Se usi questo tag, aggiungi no-cache, altrimenti lascia il campo in bianco.;</SPAN></li>
    <li><b>Keywords META</b> in<SPAN>dica ai motori di ricerca le keywords relative al tuo 
sito.<BR>- Massimo numero di caratteri: 1000 o 100 keywords.<BR>- Il numero di 
caratteri, non considera le lettere accentate 
incorporate nel codice HTML. Ad esempio la lettera "à", codifica &à il 
conteggio HTML è di otto caratteri.<BR>- Non ripetere più volte la stessa 
keyword ai motori questa pratica non piace.<BR>- Le keywords devono essere 
separate da una virgola, uno spazio, una virgola ed uno spazio, questa è la 
migliore soluzione.</SPAN> ,<SPAN>irezione del testo scorrevole;</SPAN></li>
    <li><b>Descrizione MET</b><SPAN>A, descrizione del tuo sito.<BR>- Numero massimo di caratteri: 200<BR>- Evita 
gli accenti, su alcuni motori non sono presi in considerazione;</SPAN></li>
    <li><b>Meta autore</b><SPAN>, permette di identificare l’autore del sito.<BR>- Aggiungi il primo nome in 
minuscolo, seguita dal cognome in maiuscolo.<BR>- Se devi aggiungere più autori 
separa questi ultimi da una virgola.</SPAN></li>
    <li><b>Meta url-identificativo</b><SPAN>, specifica l’URL.<BR>- Scrivi l’URL del tuo sito.<BR>- Devi scrivere solo 
l’URL.</SPAN> </li>
    <li><b>Meta replica a</b>, p<SPAN>ermette di specificare l’email del webmaster.Preferibilmente 
specificare un solo indirizzo email;</SPAN></li>
    <li><b>Meta rivisita dopo</b>, <SPAN>permette di specificare il numero di giorni entro i quali lo spider (robot 
dei motori di ricerca) potreanno visitare nuovamente il tuo sito. - 15 giorni" o 
"30 giorni" è la migliore soluzione;</SPAN></li>
    <li><b>Categoria Meta</b><SPAN>, permette di specificare la categoria del sito. Usata per certi motori per 
creare una classificazione di categorie;</SPAN></li>
    <li><b>META Copyright</b><SPAN>, utilizzato per il copyright.  Puoi includere copyright, trademarks, 
patents, o altre informazioni.<BR>Altre opzioni: <BR></SPAN></li>
    <li><b>Generatore META - META Robots - Distribuzione META - Meta data creazione 
    e aggiornamento.</b></li>
</ul>'
	),
	array(
		0 => 'Scheda » Contatore',
		1 => '<p> Impostazioni contatore e  animazione cifre di monitoraggio IP.</p>
<ul type="disc">
    <li>
<b>Modo visualizzazione contatore</b>, <SPAN>seleziona il modo di visualizzazione per il contatore. 
Scelte possibili: non visualizzare - visualizza immaggini - visualizza come 
    testo;<BR><STRONG>Nota</STRONG>: puoi <STRONG>sempre</STRONG> cliccare/attivare 
<STRONG>mostra immaggini</STRONG> o <STRONG>Visualizza come testo</STRONG>, 
prima di salvare le modifiche.</SPAN> <li><b>Percorso contatore, </b>p<SPAN>ercorso nella root phpBB, es. <SAMP>images/counter/digits;</SAMP></SPAN></li>
    <li><b>Percorso cifre animate,</b><SPAN> percorso cifre animate nella root phpBB, es. 
<SAMP>images/counter/digits_ani</SAMP></SPAN> <SPAN>;</SPAN></li>
    <li><b>Numero delle cifre</b><SPAN>, numero delle cifre per visualizzare il contatore;</SPAN></li>
    <li><b>Direzione scorrimento</b><SPAN>, direzione del testo scorrevole. Questo attributo controlla la direzione 
del testo scorrevole. I valori permessi sono <STRONG>left</STRONG>, 
<STRONG>right</STRONG>, <STRONG>up</STRONG> e <STRONG>down</STRONG> specificando 
la fine della casella di scorrimento dall’inizio;</SPAN></li>
    <li><b>Larghezza cifre</b><SPAN>, larghezza delle cifre;<BR></SPAN></li>
    <li><b>Altezza cifre</b><SPAN>,  altezza delle cifre;</SPAN></li>
    <li><b>Permetti il blocco degli Ip</b><SPAN>,  abilita monitoraggio/blocco degli indirizzi IP per il contatore. Questa 
opzione potrà funzionare correttamente se gli utenti aggiorneranno il loro 
browser al di sotto del tempo fissato nei campi di sotto.</SPAN></li>
    <li><b>Tempo blocco Ip,</b> n<SPAN>umero di secondi per monitoraggio/blocco di ogni indirizzo IP.</SPAN></li>
    <li><b>Ip log file,</b> p<SPAN>ercorso del log IP nel tuo phpBB, es. <SAMP>images/counter/ip.txt</SAMP>. 
Richiede che sia abilitato l’opzione per abilitare il blocco degli indirizzo 
IP.</SPAN></li>'
	),
	array(
		0 => '--',
		1 => 'Blocchi e Pagine Portal XL 5.0'
	),
	array(
		0 => 'Descrizione icone gestione blocchi',
		1 => 'Sono disponibili icone differenti per ogni funzione dei blocchi:</p>
<ul>
    <li><img src="./adm/images/icon_edit.gif" width="16" height="16" alt="Modifica blocco" /> Modifica blocco</li>
    <li><img src="./adm/images/icon_move_left.gif" width="16" height="16" alt="Sposta a sinistra" /> Sposta alla colonna di sinistra</li>
    <li><img src="./adm/images/icon_up_disabled.gif" width="16" height="16" alt="Opzione disabilita al momento" /> Opzione disabilitata al momento</li>
    <li><img src="./adm/images/icon_down.gif" width="16" height="16" alt="Sposta in basso" /> Sposta in basso di una riga</li>
    <li><img src="./adm/images/online.png" width="16" height="16" alt="Blocco attivato" /> Blocco attivato. </li>
    <li><img src="./adm/images/offline.png" width="16" height="16" alt="Blocco disattivato" /> Blocco disattivato. </li>
    <li><img src="./adm/images/icon_move_top.gif" width="16" height="16" alt="Sposta di un passo sopra alla colonna" /> Sposta alla colonna superiore</li>
    <li><img src="./adm/images/icon_move_bottom.gif" width="16" height="16" alt="Sposta alla colonna inferiore" /> Sposta di un passo alla colonna inferiore</li>
    <li><img src="./adm/images/icon_move_right.gif" width="16" height="16" alt="Sposta alla colonna di destra" /> Sposta alla colonna di destra</li>
    <li><img src="./adm/images/icon_delete.gif" width="16" height="16" alt="Cancella blocco" /> Cancella blocco</li>
</ul>'
	),
	array(
		0 => 'Schede » Blocchi portale e forum',
		1 => 'Con <SPAN style="FONT-WEIGHT: bold">Portal xl 5.0 Plain</SPAN> è possibile 
gestire i blocchi in modo separato sia per il portale, e sia per il forum. Il 
funzionamento è identico, con le stesse funzioni, ma essi vanno gestiti 
separatamente. Per gestire i blocchi occorre andare un <SPAN style="FONT-WEIGHT: bold">ACP/Portale/</SPAN> e 
scegliere le schede <SPAN style="FONT-WEIGHT: bold">blocchi portale</SPAN> o 
<SPAN style="FONT-WEIGHT: bold">blocchi forum </SPAN>(indice). i blocchi sono disposti a sinistra, in posizione centrale e a destra. Attraverso la tecnologia 
ajak essi potranno essere spostati in qualunque posizione senza andare a 
modificare necessariamente ogni singolo blocco. Ora vediamo come creare un 
blocco, e nello specifico come creare un nostro blocco con nostro contenuto 
html, e come invece creare un blocco tra quelli disponibili.<BR>
<p>Cliccando su <SPAN style="FONT-WEIGHT: bold">Aggiungi blocco</SPAN> avremmo 
i seguenti campi, vediamo il significato:
<p>-<SPAN style="FONT-WEIGHT: bold">Nome del blocco</SPAN>, corrisponde al nome che 
vogliamo assegnare al blocco. Esso sarà visualizato sul portale o nel 
forum;<BR>-<SPAN style="FONT-WEIGHT: bold">Url immaggine</SPAN>, occorre 
selezionare dal menu a tendina le immaggini che corrispondono a quelle indicate 
in <SPAN style="FONT-WEIGHT: bold">Mini icona selezionata</SPAN>;<BR>-<SPAN style="FONT-WEIGHT: bold">Contenuto</SPAN>, il campo va riempito solo se abbiamo 
la necessità di creare un nostro blocco, con nostro codice html (in tal caso è 
necessario selezionare blank_custom_block.html come file Html dal menu a discesa 
sotto l’opzione di visualizzare il contenuto in un blocco.;<BR>-<SPAN style="FONT-WEIGHT: bold">Html file</SPAN>, seleziona un blocco predefinito 
(*.html file);<BR>-<SPAN style="FONT-WEIGHT: bold">Posizione</SPAN>, per 
definire la colonna sulla quale questo blocco deve essere aggiunto. Opzioni 
possibili sono sù, sinistra, centro, destra e giù.<BR>-<SPAN style="FONT-WEIGHT: bold">Permessi blocco</SPAN>, per configurare i permessi di 
visibilità al blocco;<BR>-<SPAN style="FONT-WEIGHT: bold">Attivazione 
blocco</SPAN>, per attivare o disattivare il blocco.<BR><BR>Quindi la differenza 
tra <SPAN style="FONT-STYLE: italic">un nostro blocco</SPAN>, con nostro codice 
html e un <SPAN style="FONT-STYLE: italic">blocco predefinito</SPAN> è data 
dalla compilazione del campo <SPAN style="FONT-WEIGHT: bold">Contenuto</SPAN> 
associato a <SPAN style="FONT-WEIGHT: bold">blank_custom_block.html </SPAN>per 
un <SPAN style="FONT-STYLE: italic">un nostro blocco</SPAN>, e la compilazione 
di tutti i campi escluso <SPAN style="FONT-WEIGHT: bold">Contenuto</SPAN> ed 
escluso <SPAN style="FONT-WEIGHT: bold">blank_custom_block.html </SPAN>per un 
blocco già esistente.
<p>La gestione dei blocchi prevede la possibilità di modificare/cancellare/spostare/cancellare blocchi e oggetti sul portale. Tutte 
le direzioni sono permesse per lo spostamento. Ci sono cinque colonne 
disponibili per posizionare il tuo blocco, sopra, sinistra, centro, destra e 
sotto. Le posizioni dei diversi blocchi sono gestibili nello stesso modo, come 
vedrai sulla tua pagina del portale. Entrambe le parti del blocco di gestione 
utilizzando gli stessi blocchi sono separati gli uni dagli altri, in modo che 
siano in grado di avere un diverso aspetto e sul portale indice/forum.</p>
<p>E’ possibile modificare le dimensioni della colonna di sinistra o destra 
(il valore di default è 180), puoi scegliere se attivare o meno le colonne di 
sinistra o destra con il pulsante <b>Layout</b> (se scegli di disattivare 
le colonne di sinistra e destra vedrai il forum a pieno schermo).</p>'
	),
	array(
		0 => 'Scheda » Pagine portale',
		1 => 'Con <SPAN style="FONT-WEIGHT: bold">Portal xl 5.0 Plain</SPAN> è possibile 
gestire le pagine del portale in un’unica pagina definite nei moduli <b>Pagine 
portale,</b> puoi modificare/cancellare/spostare/cancellare pagine e oggetti sul portale. 
Tutte le direzioni sono permesse per lo spostamento. Ci sono cinque colonne 
disponibili per posizionare le tue pagine, sopra, sinistra, centro, destra e 
sotto. Le posizioni delle diverse pagine sono gestibili nello stesso modo, come 
vedrai sulla tua pagina del portale.<BR>
<p>Cliccando su <SPAN style="FONT-WEIGHT: bold">Aggiungi pagina</SPAN> avremmo 
i seguenti campi, vediamo il significato:
<p>-<SPAN style="FONT-WEIGHT: bold">Nome della pagina</SPAN>, u<SPAN>nico nome solo per questa pagina. Il nome sarà visualizzato nel titolo 
della tue pagine portale. Le pagine saranno visualizzate nelle pagine del 
portale, ed il titolo di ogni pagina creata sarà visualizzato a seconda sella 
posizione scelta nel tuo portal_pages.php.</SPAN>;<BR>-<SPAN style="FONT-WEIGHT: bold">Url immaggine</SPAN>, occorre 
selezionare dal menu a tendina le immaggini che corrispondono a quelle indicate 
in <SPAN style="FONT-WEIGHT: bold">Mini icona selezionata</SPAN>;<BR>-<SPAN style="FONT-WEIGHT: bold">Contenuto</SPAN>, se usi questo campo devi scegliere <STRONG>portal_pages.html</STRONG> uno dei 
file Html dalla casella a discesa visualizzata nel blocco 
<STRONG>portal_pages.html</STRONG>. Puoi scegliere quello che preferisci.;<BR>-<SPAN style="FONT-WEIGHT: bold">Html file</SPAN>, seleziona un blocco predefinito 
(*.html file);<BR>-<SPAN style="FONT-WEIGHT: bold">Posizione</SPAN>, per 
definire la colonna sulla quale questo blocco deve essere aggiunto. Opzioni 
possibili sono sù, sinistra, centro, destra e giù.<BR>-<SPAN style="FONT-WEIGHT: bold">Permessi pagina</SPAN>, per configurare i permessi di 
visibilità;<BR>-<SPAN style="FONT-WEIGHT: bold">Attivazione 
pagina</SPAN>, per attivare o disattivare la pagina.<BR><BR>E’ possibile modificare 
le dimensioni della colonna di sinistra o destra (il valore di default è 180), 
puoi scegliere se attivare o meno le colonne di sinistra o destra con il pulsante 
<b>Layout</b> (se scegli di disattivare le colonne di sinistra e destra 
vedrai il forum a pieno schermo).'
	),
	array(
		0 => '--',
		1 => 'Configurazione menu Portal XL 5.0'
	),
	array(
		0 => 'Scheda » Gestione menu',
		1 => 'Con questo modulo puoi creare/modifica/spostare/cancellare/ un link 
personalizzato. Questo menu può essere abilitato o disabilitato nel portale in <b>-> 
Generale -> Links</b>. Le icone per l’uso in questo menu sono posizionate nella 
directory <font color="red">/portal/images/icon_menu/</font>. La dimensione raccomandata è di <b>16x16px</b>. 
Aggiungi quante icone vuoi, ma tieni presente che l’anteprima le mostrerà tutte. 
Il percorso è quello della directory radice, es. "http://www.yourdomain.com/" 
per un link esterno. I links interni possono essere aggiunti come "portal.php" 
per accedere ad una determinata pagina del tuo sito, o 
<b>"memberlist.php?mode=leaders</b>" per accedere ad alcune funzioni o pagine speciali 
del tuo forum nel menu di navigazione.
<p>Nelle installazioni delle versioni Plain e Premod, il menu è configurato di 
default, e raccoglie i links più utilizzati. Ogni links può essere spostato 
nella posizione preferita, possono essere gestiti : icona, visibilità, url 
(interno ed esterno), apertura in una nuova finestra, o nella stessa 
finestra.<BR><BR>Per creare delle categorie procedere nel seguente modo:<BR>
<p><SPAN style="FONT-WEIGHT: bold">1) Creare una linea di divisione per le 
categorie. </SPAN><BR>Creare una nuova voce di menu, url immaggine scegliete 
<SPAN style="FONT-WEIGHT: bold">blank.gif</SPAN><p><SPAN style="FONT-WEIGHT: bold">2) Creare una categoria.</SPAN><BR>Creare una 
nuova voce di menu, url immaggine scegliete <SPAN style="FONT-WEIGHT: bold">blank.gif</SPAN></p>
<p><font color="red"><b>Maggiori info sono disponibili nella nostra</b></font><b><font color="red"> 
    </font><a href="http://www.portalxl.eu/kb.php"><font color="red">Guida 
Base</font></a></b><BR><BR>Di seguito aggiungete i vostri links 
ordinandoli e organizzandoli per categoria.<BR>Ricordate nel nome link l’html è 
permesso, potrete aggiungere ciò che volete per rendere il vostro menu bello e 
organizzato.</p><p>&nbsp;</p>'
	),
	array(
		0 => '--',
		1 => 'Gestione citazioni Portal XL 5.0'
	),
	array(
		0 => 'Scheda » Gestione citazioni',
		1 => '<P>Da questo menu puoi creare/modficare/cancellare le tue citazioni Puoi 
aggiungere molte citazioni e visualizzarle in un blocco, ma esse sono 
limitate alla visualizzazione casuale delle citazioni selezionate. Sono previsti 
due campi:</P>
<ul type="disc">
    <li><b>Citazione</b>, per il testo della tua citazione;</li>
    <li><b>Autore</b> n<SPAN>ome autore originale, scrivi Sconosciuto se non sai chi sia.</SPAN></li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'Gestione links Portal XL 5.0'
	),
	array(
		0 => 'Scheda » Gestione links',
		1 => '<P>Con questo modulo puoi creare/modifica/spostare/cancellare/ un link 
personalizzato. Questo menu può essere abilitato o disabilitato nel portale <font color="red">-> 
Generale -> Links.</font> Le icone per l’uso in questo menu sono posizionate nella 
directory <font color="red">/portal/images/icon_links/</font>. La dimensione raccomandata è di <font color="black"><b>16x16px</b></font>. 
Aggiungi quante icone vuoi, ma tieni presente che l’anteprima le mostrerà tutte. 
Il percorso è quello directory radice, cioè "http://www.yourdomain.com/" per 
utilizzare un link esterno. Sono previsti i seguenti campi:</P>
<ul type="disc">
    <li><b>Url immaggine visualizzata</b>,scegli l’immaggine da un menu a tendina. 
    Un esempio di icone sono visibili nel campo <b>Mini icona selezionata</b>. <SPAN>Per vedere un’anteprima delle mini icone puoi sceglierle (imaggini 
posizionate in /portal/images/icon_menu/ e se ti piacciono puoi aggiungere 
quelle che più ti piacciono). La dimensione raccomandata è di 16x16px.</SPAN></li>
    <li><b>Apertura icona in una nuova finestra</b>, <SPAN>L’url può essere scritto come segue. Esempio : <BR>index.php per links 
interni, <BR>http://google.com per links esterni.</SPAN></li>
    <li><b>Visibilità</b><SPAN>, scelte possibili visibile a tutti, ospiti, 
    registrati, gruppi, nessuna visualizzazione,</SPAN></li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'Gestione banners Portal XL 5.0'
	),
	array(
		0 => 'Scheda » Gestione banners 88x31',
		1 => '<P>Puoi creare/modificare/cancellare i partners. Il percorso è quello 
relativo alla root del forum, es. "http://www.yourdomain.com/" per un link 
esterno. Links interni ai banners possono essere aggiunti come 
"<b>portal/images/banners/88x31/yourdomain.com.gif</b>". L’immagine massima è di 88x31 
pixel, le immagini più grandi saranno ridimensionate automaticamente. 
Puoi aggiungere altri parametri, selezionare un limite casuale per visualizzare 
il tuo logo. Ci sono diverse opzioni:</P><ul type="disc">
    <li>
    <b>Url del sito</b>, p<SPAN>artner url sito, il percorso è quello relativo alla root del forum, es. 
"http://www.yourdomain.com/"</SPAN>; 
    <li><b>Logo url</b>, p<SPAN>artner logo url, il percorso è quello relativo alla root del forum, es. 
"http://www.yourdomain.com/"</SPAN>;
    </li>
    <li><b>Descrizione</b>, l<SPAN>a descrizione partner deve rispettare le direttive del tema 
utilizzato.</SPAN></li>
</ul>'
	),
	array(
		0 => 'Scheda » Gestione banners 400x60',
		1 => '<P>Puoi creare/modificare/cancellare i partners. Il percorso è quello 
relativo alla root del forum, es. "http://www.yourdomain.com/" per un link 
esterno. Links interni ai banners possono essere aggiunti come 
"<b>portal/images/banners/400x60/yourdomain.com.gif</b>". L’immagine massima è di 400x60 
pixel, le immagini più grandi saranno ridimensionate automaticamente. 
Puoi aggiungere altri parametri, selezionare un limite casuale per visualizzare 
il tuo logo. Ci sono diverse opzioni:</P><ul type="disc">
    <li>
    <b>Url del sito</b>, p<SPAN>artner url sito, il percorso è quello relativo alla root del forum, es. 
"http://www.yourdomain.com/"</SPAN>; 
    <li><b>Logo url</b>, p<SPAN>artner logo url, il percorso è quello relativo alla root del forum, es. 
"http://www.yourdomain.com/"</SPAN>;
    </li>
    <li><b>Descrizione</b>, l<SPAN>a descrizione partner deve rispettare le direttive del tema 
utilizzato.</SPAN></li>
</ul>'
	),
	array(
		0 => 'Scheda » Gestione banners 130x600',
		1 => '<P>Puoi creare/modificare/cancellare i partners. Il percorso è quello 
relativo alla root del forum, es. "http://www.yourdomain.com/" per un link 
esterno. Links interni ai banners possono essere aggiunti come 
"<b>portal/images/banners/130x600/yourdomain.com.gif</b>". L’immagine massima è di 130x600 
pixel, le immagini più grandi saranno ridimensionate automaticamente. 
Puoi aggiungere altri parametri, selezionare un limite casuale per visualizzare 
il tuo logo. Ci sono diverse opzioni:</P><ul type="disc">
    <li>
    <b>Url del sito</b>, p<SPAN>artner url sito, il percorso è quello relativo alla root del forum, es. 
"http://www.yourdomain.com/"</SPAN>; 
    <li><b>Logo url</b>, p<SPAN>artner logo url, il percorso è quello relativo alla root del forum, es. 
"http://www.yourdomain.com/"</SPAN>;
    </li>
    <li><b>Descrizione</b>, l<SPAN>a descrizione partner deve rispettare le direttive del tema 
utilizzato.</SPAN></li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'Gestione mods Portal XL 5.0'
	),
	array(
		0 => 'Scheda » Gestione mods',
		1 => '<P>Da questo modulo puoi gestire i Mods del database, 
creare/modificare/cancellare. Ci sono diverse opzioni:</P><ul type="disc">
    <li>
    <b>Titolo mod</b>, t<SPAN>itolo breve del Mod</SPAN>; 
    <li><b>Versione</b>, n<SPAN>umero versione es. 0.4B5</SPAN>;
    </li>
    <li><b>Tipo versione</b>, <SPAN>Alpha, Beta, Dev or RC;</SPAN></li>
    <li><b>Descrizione</b><SPAN>, descrizione del tuo Mod. Una chiara descrizione del mod e della sua 
installazione;</SPAN></li>
    <li><b>Autore</b><SPAN>, nome dell’autore originale se conosciuto, sconosciuto se non sai chi 
sia;</SPAN></li>
    <li><b>URL</b><SPAN>, specifica un sito URL (link al mod -descrizione o -argomento);</SPAN></li>
    <li><b>Download</b>, s<SPAN>pecifica un URL per il download (link diretto per il download).</SPAN></li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'Gestione pubblicità Portal XL 5.0'
	),
	array(
		0 => 'Scheda » Gestione pubblicità',
		1 => '<P>Da questo modulo puoi gestire i piani pubblicitari del forum. Puoi aggiungere molti banners, e 
puoi vederli nei messaggi del forum, in tutti i nuovi messaggi e visualizzarli 
in modo casuale. Puoi decidere di creare un banner per gli ospiti ed uno diverso 
per i registrati, puoi scegliere anche la posizione del banner, sopra o sotto 
i messaggi. Queste le opzioni:</P><ul type="disc">
    <li>
    <b>Nome</b>, n<SPAN>ome del piano pubblicitario</SPAN>; 
    <li><b>Contenuto</b>, codice html per il tuo banner;
    </li>
    <li><b>Forum ID</b>, <SPAN>ID del forum o dei forums che vuoi pubblicizzare, ogni forum deve 
essere separato da una virgola.;</SPAN></li>
    <li><b>Forums</b><SPAN>, scelta di visualizzare il banner in tutti i&nbsp;forums, 
    Si/No;</SPAN></li>
    <li><b>Visibilità</b><SPAN>, sceltra tra Si/No/Ospite;</SPAN></li>
    <li><b>Totale visite</b><SPAN>, valore visite per questa campagna;</SPAN></li>
    <li><b>Visualizzazioni</b>, quante visualizzazioni vuoi per questa campagna;</li>
    <li><b>Posizione</b>, sceltra tra <i>dopo ogni messaggio</i>, <i>dopo il 
    primo messaggio</i>, <i>prima di ogni messaggio</i>, <i>sotto ogni messaggio</i>.</li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'Gestione feeds Portal XL 5.0'
	),
	array(
		0 => 'Scheda » Gestione feeds',
		1 => '<P>Da questo modulo puoi gestire i tuoi feeds RSS, creare/modificare/cancellare, 
tanti feeds che puoi gestire e visualizzare nel tuo portale.Puoi configurare 
il t<SPAN>empo massimo </SPAN><b>cache</b><SPAN> per il file prima che il feed venga aggiornato, in 
secondi (default è 1 ora = 60 minuti = 3600 secondi)</SPAN>, il <b>limite</b><SPAN> massimo oggetti/righe da mostrare per singolo feed, 
il limite (</SPAN><b>Lista casuale</b><SPAN>) massimo feeds da visualizzare nel blocco</SPAN>&nbsp;Queste 
le altre opzioni:</P><ul type="disc">
    <li>
<b>Titolo feed</b>, titolo breve feed; 
    <li><b>Url feed</b>, URL per questo feed (link al feed -descrizione o -argomento).;
    </li>
    <li><b>Visualizzazione</b>, scelta Si/No<SPAN>;</SPAN></li>
    <li><b>Posizione</b><SPAN>, scelta tra posizione di sinistra o destra.</SPAN></li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'Gestione acronimi Portal XL 5.0'
	),
	array(
		0 => 'Scheda » Gestione acronimi',
		1 => 'Gli acronimi sono delle abbrevazioni, come <STRONG>NATO</STRONG>, 
<STRONG>laser</STRONG>, e <STRONG>IBM</STRONG>, che sono formati dalle iniziali 
delle lettere, parole o parti di parole in una frase o nel nome. Acronimi ed 
iniziali vengono pronunciate come distinte in una piena forma per la quale esse 
sono: come i nomi delle singole lettere (come in <EM><STRONG>IBM</STRONG></EM>), 
come (<EM><STRONG>NATO</STRONG></EM>), o come una (combinazione 
<EM><STRONG>IUPAC</STRONG></EM>). Puoi aggiungere molti acronimi come meglio 
credi. Puoi creare/modificare/cancellare acronimi. Queste le altre opzioni:<ul type="disc">
    <li>
<b>Acronimo</b>, titolo breve acronimo, preferibilmente alcune iniziali, ad 
    esempio P.S (post ; 
    <li><b>Url feed</b>, URL per questo feed (link al feed -descrizione o -argomento).;
    </li>
    <li><b>Visualizzazione</b>, scelta Si/No<SPAN>;</SPAN></li>
    <li><b>Posizione</b><SPAN>, scelta tra posizione di sinistra o destra.</SPAN></li>
</ul>'
	),
);

?>