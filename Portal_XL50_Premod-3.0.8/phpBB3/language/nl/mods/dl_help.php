<?php

/** 
*
* @mod package		Download Mod 6
* @file				dl_help.php 9 2009/09/04 OXPUS
* @copyright		(c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/*
* [ english ] language file for Download MOD 6
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

$lang = array_merge($lang, array(
    'HELP_TITLE' => 'Download MOD Online Hulp',
    
    'DL_NO_HELP_AVIABLE' => 'Er is geen hulp mogelijk voor deze optie',

    'HELP_DL_APPROVE' => 'Dit zal de download goedkeuren en zal meteen kunnen worden gedownload.<br />Anders word de download verborgen voor gebruikers.',
    'HELP_DL_APPROVE_COMMENTS' => 'Als je deze optie uitschakeld dan zal een moderator elke reactie eerst moeten goedkeuren voordat andere gebruikers hem kunnen zien..',

    'HELP_DL_BUG_TRACKER_CAT' => 'Opent de bugtracker in deze categorie.<br />Bugs kunnen worden geplaatst en gezien door iedere gebruiker in deze categorie.<br />Enkel beheerders en moderators kunnen deze bugs in behandeling nemen.<br />Bij elke verandering met betrekking tot de bug worden het teamlid die aan de bug werkt en de bugmelder geinformeert met een emailbericht.',

    'HELP_DL_CAT_DESCRIPTION' => 'Een kleine beschrijving voor deze categorie.<br />BBcodes zijn hier niet mogelijk.<br />Deze beschrijving word op de index van de downloadpagina en bij alle subcategorieen getoont.',
	'HELP_DL_CAT_ICON' => 'The Category Icon must be still uploaded into the forum. E. g. into the folder /images/dl_icons/ (This folder must be created before the icons can be uploaded in this).<br />Enter the relative URL from the forum root, e. g. images/dl_icon.gif.<br /><br />Please use only icons which can be displayed by a webbrowser.<br />Recommended are for this JPG, GIF or PNG.<br />Regard the image size of the icons to avoid destructing the download index, because the icons will not be resized before using.',
    'HELP_DL_CAT_NAME' => 'Dit is de naam van de categorie die overal getoont word.<br />Probeer speciale tekens te vermijden aangezien dit problemen kan opleveren.',
    'HELP_DL_CAT_PARENT' => 'De categorie boven deze categorie.<br />Met dit dynamische menu kan je elke structuur maken die je wilt.',
    'HELP_DL_CAT_PATH' => 'Hier moet je een bestaand pad naar al je downloads invullen..<br />Dit moet een submap zijn van je phpBB installatie.(voorbeeld: /downloads) <br />Vul de mapnaam in met een slash op het eind .<br />Als de map bijvoorbeeld downloads/mods is moet je bij path dit invullen: mods/".<br />Als je dit formulier verzend is de map ingestelt.<br />Wees zeker dat deze map echt bestaat!<br />Als het is een submap is dan moet je het ook zo invullen.<br />Voorbeeld: Het path is downloads/mods/download dat je dan: mods/download/ invult.<br />Als je een Linux server hebt zorg dan dat de map 777 ge CH Mod is.',
    'HELP_DL_CAT_RULES' => 'Deze regels worden bij de Downloads en overal in de categorie weergegeven',
    'HELP_DL_CAT_TRAFFIC' => 'Vul een maximum aantal verkeer voor deze categorie in.<br />Dit verkeer zal niet opgeteld worden bij het algemene verkeer!<br />Zet op nul voor geen limiet.',
    'HELP_DL_CHOOSE_CATEGORY' => 'Kies de categorie voor deze download.<br />Het bestanden moet eerst in de eerder aangegeven map staan voordat hij opgeslagen word.<br />Anders krijg je een foutmelding.',
    'HELP_DL_COMMENTS' => 'Activeer het reactiesysteem.<br />Gebruikers die je dit toestaat kunnen bestanden bekijken en plaatsen.<br />Beheeders en download-moderators kunnen alles zien en bewerken/verwijderen, de makers kunnen hun eigen bewerken.',
    'HELP_DL_COPY_PERMISSIONS' => 'Deze optie kopieerd de permissies van de geselecteerde categorie.<br />Wanneer de hoofdcategorie geselecteerd wordt, zal deze categorie de permissies overnemen.<br />Wanneer de download index wordt geselecteerd zullen er geen permissies worden toegekend aan deze categorie. In dit geval zullen de permissies handmatig moeten worden toegekend met de permissie module.',

    'HELP_DL_DELAY_AUTO_TRAFFIC' => 'Vul het aantal dagen in dat een gebruiker automatisch verkeer krijgt.<br />Dit start vanaf de dag van de registratie.<br />Zet op nul om dit uit te schakelen.',
    'HELP_DL_DELAY_POST_TRAFFIC' => 'Zet hier het aantal dagen naar waarnaar de gebruiker verkeer gaat krijgen na het plaatsen van berichten.<br />Dit start vanaf de dag van registratie.<br />Zet op nul om uit te schakelen.',
    'HELP_DL_DISABLE_EMAIL' => 'Met deze optie bepaal je of e-mail berichten door het forum voor de download base kunnen worden verstuurd.',
    'HELP_DL_DISABLE_EMAIL_FILES' => 'Zet deze optie aan voor de stoppen van de berichten sturend door de Download MOD.<br />Dit heeft geen effect voor pop-up berichten van het forum op het moment.',
    'HELP_DL_DISABLE_POPUP' => 'Met deze optie maak je het mogelijk dat mensen een pop-up bericht krijgen als er een nieuwe download beschikbaar is in een bepaalde categorie..<br />Als deze optie aan staat kan je per download bepalen of er een pop-up voor word gedaan of niet.<br />Enkel een gebruik die dit zelf aan heeft gezet zal de pop-up dan zien, niet iedereen.<br />Ze kunnen deze instellingen aan de onderkant van de download pagina vinden en wijzigen.',
    'HELP_DL_DISABLE_POPUP_FILES' => 'Zet deze optie aan als je geen pop-ups wil, ongeacht wat de gebruiker invult.',
    'HELP_DL_DISABLE_POPUP_NOTIFY' => 'Als je deze optie aanzet kunnen gebruikers enkel beperkte tijd hun download aanpassen.',
    'HELP_DL_DROP_TRAFFIC_POSTDEL' => 'Als een topic al bericht word verwijderd kan dit het verkeer van een gebruiker ook verlagen.  (bij het verwijderen van een topic geld dit enkel voor de topic starter!), .<br />Onthoud dat wat een gebruiker kan verliezen bij de verwijdering van een bericht verschillend kan zijn!',

    'HELP_DL_EDIT_OWN_DOWNLOADS' => 'Als je deze optie aanzet kan iedereen zijn eigen downloads aanpassen zonder beheerder of download moderator te zijn.',
    'HELP_DL_EDIT_TIME' => 'Vul hier de duur in van hoelang een bewerkte download word gemarkeerd.<br />Zet op nul om deze functie uit te schakelen.',
    'HELP_DL_ENABLE_POST_TRAFFIC' => 'Zet hier het aantal verkeer neer dat een gebruiker krijgt bij het maken van topics en het plaatsen van berichten.',
    'HELP_DL_EXT_NEW_WINDOW' => 'Open een externe download in een nieuw browser scherm, of in het huisige scherm.',
    'HELP_DL_EXTERN' => 'Externe uploads activeren.',
    'HELP_DL_EXTERN_UP' => 'Klik hier als je de functie externe uploads wil toevoegen (http://www.voorbeeld.nl/media.mp3)',

    'HELP_DL_FILE_DESCRIPTION' => 'Een kleine beschrijving van de download.<br />Dit word ook in de download categorie gezet.<br />BBCodes kunnen hierin niet gebruikt worden.<br />Vul hier alsjeblieft enkel een klein tekstje in anders krijgt het forum een hoge load.',
    'HELP_DL_FILES_URL' => 'De bestandsnaam van deze download.<br />Vul hier de naam in zonder slash of path.<br />Het bestanden moet al geupload zijn voordat je het toevoegd anders komt er een foutmelding.<br />Noteer dit bij verboden extensies de bestanden zonder pardon geblokkeerd worden.',

    'HELP_DL_GUEST_STATS_SHOW' => 'Deze optie zal alleen statistieken voor gasten naar buiten brengen.<br />Echter word voor beheerders dan nog steeds alle data bewaard.<br />Deze functie is in het Beheerderspaneel.',

    'HELP_DL_HACK_AUTOR' => 'De uploader van de download.<br />Laat dit leeg als je wilt dat dit op de download pagina niet weergegeven zal worden.',
    'HELP_DL_HACK_AUTOR_EMAIL' => 'Het e-mail adres van de uploader.<br />Laat dit leeg als je wilt dat dit op de download pagina niet weergegeven zal worden..',
    'HELP_DL_HACK_AUTOR_WEBSITE' => 'De website van de uploader.<br />Dit moet niet de pagina van de Download zijn!<br />Vul geen content in naar verboden sites of sites die verborgen zijn.',
    'HELP_DL_HACK_DL_URL' => 'De pagina voor een alternatieve download van het bestand.<br />Dit kan de website van de uploader zijn of een andere site.<br />Vul alsjeblieft geen direct link in als de auteur hier geen toestemming toe geeft.',
    'HELP_DL_HACK_VERSION' => 'De versie van de download.<br />Dit zit altijd in de download.<br />Je kan er niet op zoeken.',
    'HELP_DL_HACKLIST' => 'Met deze knop kan je de download toevoegen aan de lijst (moet wel toegestaan zijn) als hier Ja gezet word.<br />Op Nee zetten veroorzaakte dat de download niet toegevoegd word!',
    'HELP_DL_HOTLINK_ACTION' => 'Hier kies je hoe het downloadscript zal reageren als je het download.<br />Het zal een bericht weergeven of je rechtstreeks naar de download doorsturen.',

    'HELP_DL_ICON_FREE_FOR_REG' => 'Deze optie veranderd het witte icoontje (gratis download voor geregistreerde gebruikers) ook voor gasten in wit.<br />Als je deze optie uitzet zullen gasten in plaats van wit, rood zien.',
    'HELP_DL_IS_FREE' => 'Deze optie inschakelen maakt de download gratis voor iedereen.<br />Verkeer zal dan niet worden gebruikt..<br />Kiezen voor enkele geregistreerde gebruikers gratis of iedereen is mogelijk.',

    'HELP_DL_KLICKS_RESET' => 'Deze optie zet het aantal keer bekeken voor deze maand voor terug op nul.<br />Dit is erg handig als je na de release het bestand aangepast hebt.',
 
    'HELP_DL_LATEST_COMMENTS' => 'Deze optie geeft een aantal reacties weer als je hem inschakeld. Vul hier nul in het blok uit te zetten.',
    'HELP_DL_LIMIT_DESC_ON_INDEX' => 'Knip de beschrijvingen uit als ze over het dit aantal tekens komen.<br />Zet op nul om deze functie uit te zetten.',
    'HELP_DL_LINKS_PER_PAGE' => 'Deze optie controleerd het aantal downloads op een pagina voor de statistieken in het Beheerderspaneel.<br />In de lijst word de optie: Onderwerpen per pagina gebruikt.',

    'HELP_DL_METHOD' => 'De "oude" methode verzond het bestand direct naar de broswer.<br />Deze methode kan voor bijna alles browsers worden gebruikt maar dan kon de echt bestandsgroote niet worden bepaald en niet bepaald worden hoelang het nog zou duren.<br />De nieuwe methode doet dit wel goed maar kan soms fouten opleveren.<br />Gebruik de oude als je problemen hebt met de nieuwe.<br />Als helemaal niks lijkt te werken check dan het boxje direct zodat alles direct word gedownload. Dit vereist wel een aardige PHP Memory limit.',
    'HELP_DL_METHOD_QUOTA' => 'Zet hier de download grootte handmatig neer. Dit is handig als het bestand erg groot is en je voor de nieuwe mthode hebt gekozen.<br />Hieronder zal het bestand door een PHP functie worden binnengehaald, en zal dan direct naar de browser worden verzonnen.',
    'HELP_DL_MOD_DESC' => 'Gedetailleerde beschrijven van de downloads.<br />Je kan hier BBCodes en smilies gebruiken.<br />Dit word alleen bij de Download details weergegeven.',
    'HELP_DL_MOD_DESC_ALLOW' => 'Staat een MOD informatie blok toe bij het toevoegen of veranderen van downloads.',
    'HELP_DL_MOD_LIST' => 'Acitveer dit blok in de downloaddetails.<br />Als je deze optie niet aanzet word het hele blok niet weergegeven.',
    'HELP_DL_MOD_REQUIRE' => 'Enkele MODs die enkele geinstalleerd moeten zijn voor deze download.<br />Dexe tekst zal enkel worden weergegeven in de downloaddetails.',
    'HELP_DL_MOD_TEST' => 'Kijk hier op welke phpBB versie dit is getest.<br />Zet hier enkel de versie van je testforum.<br />Het script zal het laten zien als phpBB X, Dus je moet enkel hier de X (versienummer) zetten.<br />Dexe tekst zal enkel worden weergegeven in de downloaddetails.',
    'HELP_DL_MOD_TODO' => 'Hier kan je de volgende stappen in de ontwikkeling van de download plaatsen.<br />Dit maakt een Te-doen lijst aan de onderkant van de pagina.<br />Met deze lijst kan de gebruiker zijn want er nog verwacht word.<br />Het is nog steeds enkel tekst, BBCodes zijn niet toegestaan..<br />Zelfs als het blok is uitgeschakeld word de Te-doen lijst weergegeven.',
    'HELP_DL_MOD_WARNING' => 'Belangrijk advies over de MOD die de downloaders moeten weten.<br />Deze tekst word in een andere kleur getoont (standaard is dit rood).<br />Enkel gewone tekst!<br />BBCodes kunnen niet gebruikt worden.',
    'HELP_DL_MUST_APPROVE' => 'Zet dit op Ja als je wilt dat een Download Moderator of Beheerder elke nieuwe download in deze categorie moet goedkeuren.<br />Zij zullen een mail krijg bij ongekeurde downloads.',

    'HELP_DL_NAME' => 'Dit zijn de namen van de downloads die op verschillende plaatsen worden weergegeven.',
    'HELP_DL_NEW_TIME' => 'Zet hier het nummer neer van het aantal dagen dat de download gemarkeerd moet zijn.<br />Zet op nul om dexe functie uit te zetten.',
    'HELP_DL_NEWTOPIC_TRAFFIC' => 'Voor elk nieuw geopende topic krijgt de gebruiker het hier aantal ingevulde verkeer erbij gestort.',
    'HELP_DL_NO_CHANGE_EDIT_TIME' => 'Check deze optie om te zorgen dat er niet meer of beperkte tijd kan worden aangepast na de toevoeging.<br />Dit zal nodificaties niet uitmaken.',

    'HELP_DL_OVERALL_TRAFFIC' => 'Dit totale limiet van het aantal downloads over de hele maand kan niet overschreden worden.<br />Als deze limiet wel gehaald word word de download gemarkeerd en geblokeerd. Dan kan ook niemand hem meer downloaden.',
    'HELP_DL_OVERALL_GUEST_TRAFFIC' => 'De totale downloadlimiet voor gasten voor alle downloads, en wanneer ingeschakeld, alle uploads, die niet overschreden mogen worden voor de huisige maand.<br />Wanneer het limiet bereikt wordt zullen de downloads gemarkeerd en gesloten worden, en wanneer ingeschakeld, zal de upload functie tijdelijk niet mogelijk zijn.',

    'HELP_DL_PHYSICAL_QUOTA' => 'Downloads kunnen worden opgeslagen in het beheerderspaneel.<br />Als deze limiet gehaald is kunnen downloads nog enkele via de FTP worden toegevoegd.',
    'HELP_DL_POSTS' => 'Elke gebruikers kan een limiet niet overschreden voor downloads. Ook de Beheerders en Download Moderators niet.<br />Het is aan te raden ook een Anti-Spam MOD te installeren omdat mensen anders ga spammen voor posts.<br />Zet op 0 om uit te schakelen, dit is aan te raden voor kleine forums.',
    'HELP_DL_PREVENT_HOTLINK' => 'Deze optie aanzetten betekend dat je zonder op de downloadpagina te kijken een bestand kan downloaden.<br />Deze optie maakt <strong>geen</strong> map-beveiliging!',

    'HELP_DL_REPLY_TRAFFIC' => 'De gebruiker zal voor elke reactie die hij plaatst verkeer krijgen.',
    'HELP_DL_REPORT_BROKEN' => 'Zet de functie voor het raporteren van gebroken links aan of uit.<br />Als je het op niet voor gasten zet kunnen enkel geregistreerde gebruikers de downloads raporteren.',
    'HELP_DL_REPORT_BROKEN_LOCK' => 'Als je deze optie aanzet word een download gesloten die geraporteerd is.<br />De download is dan niet te downloaden te een Beheerder of Download Moderator de download weer opend.',
    'HELP_DL_REPORT_BROKEN_MESSAGE' => 'Als een download is gesloten omdat hij geraporteerd word daarover een bericht gezet.<br />Als je dit toestaat zal dit bericht ook komen wanneer een download normaal geblokkeerd is.',
    'HELP_DL_REPORT_BROKEN_VC' => 'Zet de visuele beweging aan bij het raporteren van een download.<br />Enkel als de code goed is word het report verstuurd en de Beheerders en Download Moderator krijgen dan een e-mail.',

    'HELP_DL_SHORTEN_EXTERN_LINKS' => 'Voer de lengte van de externe downloadlink in. <br />Gebasseerd op de lengte word de link wellicht wat in het midden verkort.<br />Zet dit op nul als je deze functie wilt uitschakelen.',
    'HELP_DL_SHOW_FOOTER_LEGEND' => 'Deze optie maakt een legenda aan de onderkant van de pagina over alle inconen die de Download MOD gebruikt.<br />De gebruikte iconen kunnen door deze optie niet worden veranderd.',
    'HELP_DL_SHOW_FOOTER_STAT' => 'Met deze optie kan je de statistieken aan de onderkant van het forum aan en uit zetten.<br />De statistieken zullen nog steeds data verzamelen als je het uitzet, enkel word het dan niet meer weergegeven.',
    'HELP_DL_SHOW_REAL_FILETIME' => 'Hiermee kan je in de downloaddetails weergeven wanneer de download voor het laatst is aangepast.<br />Dit is de exactste tijdcode en dus volledig betrouwbaar, op welke manier er ook geupload is.',
    'HELP_DL_SORT_PREFORM' => 'De optie "Preset" zal alle downloads in het Beheerderspaneel sorteren.<br />Met de optie "Gebruiker" kan gekozen worden op welke manier deze weergegeven gaan worden.',
    'HELP_DL_STAT_PERM' => 'Selecteer hier welk gebruikerslevel iemand op de downloadspagina heeft.<br />Als je iemand de rang Download Moderator geeft kan hij dus ook deze pagina oke. Let op! Een forum moderator is iets anders!<br />Noteer wel dat dit een pagina is met hoge load en het is niet aan te raden deze keer op keer voor niks te laden.',
    'HELP_DL_STATISTICS' => 'Sta details over de bestanden toe.<br />Deze details moeten de database wel meer querys laten uitvoeren en dit kan tijd kosten.',
    'HELP_DL_STATS_PRUNE' => 'Zet het nummer van aantal regels dat er mogen komen voor de statistieken.<br />Elke nieuwe die over de limiet gaat verwijderd de oudste<br />Zet op nul op uit te zetten.',
    'HELP_DL_STOP_UPLOADS' => 'Je kan uploads met deze uploads toestaan of niet.<br />Als je het niet toestaat kunnen enkel Beheerders bestanden uploaden.<br />Als je het wel toestaat kunnen enkele gebruikers met de juiste permissies het.',

    'HELP_DL_THUMB' => 'Hier kan je een klein plaatje uploaden voor onder de downloaddetails.<br />Als er al een is kan je hier je nieuwe uploaden en het veranderen.<br />Enkel bij het al bestaande plaatje op "verwijder" drukken.',
    'HELP_DL_THUMB_CAT' => 'Deze optie staat plaatjes bij downloads toe.<br />De grootte van deze plaatjes moet worden installatie bij de Generale configuratie.',
    'HELP_DL_THUMB_MAX_DIM' => 'Deze waarde kan misschien de grootte van de bestanden beinvloeden.<br />Zet op 0 on het plaatje uit te zetten (niet aan te raden).<br />Bestaanden plaatjes worden ook weggehaald als de waarde op 0 word genet',
    'HELP_DL_THUMB_MAX_SIZE' => 'Zet nul als waarde om plaatjes in alle categorieeen uit te zetten.<br />Als je ze wel toestaat vul dan alstublieft nuttige namen in.<br />Als je de plaatjes uitgeschakeld kan je ook de huidige niet meer zien.',
    'HELP_DL_TRAFFIC' => 'Het maximale verkeer dat word toegestaan in de procedure.<br />Een waarde van nul schakeld het verkeer uit.',

    'HELP_DL_UPLOAD_FILE' => 'Upload het bestand van je computer.<br />Als de extensie van je bestand niet overeenkomt maar 1 van de hieronder genoemden kan de bestandsgrootte afwijken.',
    'HELP_DL_UPLOAD_TRAFFIC_COUNT' => 'Als deze optie aanstaat is het verkeer lager dan een anders komend totaal.<br />Als dit limiet is gehaald kunnen er enkel nog maar via het Beheerderspaneel en de FTP downloads worden geupload.',
    'HELP_DL_USE_EXT_BLACKLIST' => 'Als je een zwarte lijst toevoegd zullen alle nieuwe of gewijzigde downloads met deze extensie worden geweigerd.',
    'HELP_DL_USE_HACKLIST' => 'Deze optie zet de trucklijst aan en uit.<br />Als het ingeschakeld is kunnen gebruikers trucken toevoegen aan de lijst voor enkele downloads zodat deze de downloadende gebruikers kunnen helpen.<br />Als je het niet wilt toestaan word de hele lijst verborgen maar je kan het altijd voor wel toestaan. Dan komt de lijst weer terug.<br />Let op! Je verliest wel alle hacks als je het bestand wijzigt terwijl de trucklijst uitstaat.',
    'HELP_DL_USER_TRAFFIC_ONCE' => 'Kies of iets downloaden de gebruikers verkeer verlaagd. Dit hoeft enkel de eerste keer<br /><strong>Onthoud:</strong><br />Deze optie zal de downloadstatus zelf niet veranderen!',

    'HELP_DL_VISUAL_CONFIRMATION' => 'Deze optie aanzetten zorgt dat de gebruikers een 5-tekencode moeten invullen. Dit is tegen bots.<br />Als de code meerdere malen fout word ingevoerd word de download gestopt en kan de gebruiker niet verder.',

    'HELP_DOWNLOAD_PATH' => 'Het relatieve path naar je phpBB rootmap.<br />Op de eerste keer van de installatie vind je deze map: "dl_mod/downloads/".<br />Dit is enkel wanneer Linux gebruikt word!.<br />De slash aan het eind van de naam is belangrijk, anders werkt het niet. Aan het begin hoeft geen slash te staan.<br />Deze map en alle submappen moeten de CH Mod 777 hebben anders krijg je errors en werken de functies niet.<br />Onder deze map met je 1 of meerdere submappen maken voor bestanden via het Beheerderspaneel.<br />Het is aangeraden een submap voor elke groep te maken zodat niet alles snel vol komt te zitten.<br />Deze submappen moeten worden ingevoerd relatief aan het root path van de downloads MOD. Meer hierover bij Categorie Management.<br />Je kan submappen maken via de FTP of door de Toolbox (Zie de link op de rechthoek van de pagina).',

    'HELP_NUMBER_RECENT_DL_ON_PORTAL' => 'Het nummer van laatste downloads dat gebruikers zien op het portaal.<br />Het blok gebruikt de laatste tijden voor het blok van alle downloads. Dus als je weinig downloads hebt is het mogelijk dat je hele oude downloads ziet.',
    
    'HELP_DL_ENABLE_TOPIC'    => 'Sta toe om onderwerpen aan te maken voor elke download die wordt gewijzigd of toegevoegd via het beheerderspaneel op het forum met de ingevulde tekst. Voor downloads die goedgekeurd moeten worden voordat ze zichbaar zijn zal het onderwerp verschijnen in het moderator controle paneel.',
    'HELP_DL_TOPIC_FORUM'    => 'Het forum waarin de onderwerpen voor de nieuwe downloads zullen komen te staan.',
    'HELP_DL_TOPIC_TEXT'    => 'Vrije tekst voor het aanmaken van het onderwerp over de downloads. BBCodes, HTML en smillies zijn hier niet toegestaan, omdat de tekst alleen zal worden gebruikt om het onderwerp te introduceren.',
	'HELP_DL_TOPIC_FORUM_C'	=> 'The forum which will display the new topics about the downloads from this category.',

));

?>