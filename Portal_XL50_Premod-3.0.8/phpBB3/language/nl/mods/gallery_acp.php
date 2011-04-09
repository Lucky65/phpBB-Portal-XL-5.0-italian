<?php
/**
*
* gallery_acp [Nederlands]
*
* @package phpBB Gallery
* @version $Id: gallery_acp.php 1298 2009-08-23 21:42:50Z nickvergessen $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

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
	'ACP_GALLERY_CLEANUP_EXPLAIN'	=> 'Hier kun je restanten opruimen.',
	'ACP_GALLERY_OVERVIEW'			=> 'phpBB Galerie',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'	=> 'Hier een aantal statistieken over je galerij.',
	'ACP_IMPORT_ALBUMS'				=> 'Nieuw afbeeldingen importeren',
	'ACP_IMPORT_ALBUMS_EXPLAIN'		=> 'Hier kan je meerdere afbeeldingen van de server importeren. Voor dat de afbeeldingen ge&iuml;mporteerd kunnen worden moeten ze handmatige gecontroleerd worden op groote.',


	'ADD_ALBUM_ON_TOP'				=> 'Voeg album bovenaan toe',
	'ADD_PERMISSIONS'				=> 'Permissies toevoegen',
	'ALBUM_ADMIN'					=> 'Album beheer',
	'ALBUM_ADMIN_EXPLAIN'			=> 'In phpBB Galerie zijn er geen categoriën, alles is gebaseerd op albums. Elk album kan een ongelimiteerde hoeveelheid subalbums hebben en je kunt van elk bepalen of er afbeeldingen in geplaatst mogen worden of niet (zodat het zich gedraagt als een oude categorie). Hier kun je losse albums toevoegen, bewerken, verwijderen, (ont)sluiten en extra regels instellen. Als je afbeeldingen niet meer synchroon lopen kun je dat ook herstellen. <strong>Je moet rechten zetten of kopieëren voor nieuwe albums omdat ze anders niet zichtbaar zijn.</strong>',
	'ALBUM_AUTH_TITLE'				=> 'Albumrechten',
	'ALBUM_CREATED'					=> 'Album succesvol gecreëerd.',
	'ALBUM_DELETE'					=> 'Verwijder %s',
	'ALBUM_DELETE_EXPLAIN'			=> 'Onderstaand formulier kun je gebruiken om een album te verwijderen en te bepalen wat er met de afbeeldingen die er in staan moet gebeuren',
	'ALBUM_DELETED'					=> 'Dit album is succesvol verwijderd',
	'ALBUM_DESC'					=> 'Album Omschrijving',
	'ALBUM_DESC_EXPLAIN'			=> 'Ingevoerde HTML code wordt onverwerkt weergegeven.',
	'ALBUM_DESC_TOO_LONG'			=> 'De album omschrijving is te lang, deze moet minder zijn dan 4000 karakters.',
	'ALBUM_EDIT_EXPLAIN'			=> 'Met onderstaand forumiler kun je dit album aanpassen. Let erop dat je moderatie instellingen via de albumpermissies voor elke ' . /*user or */ 'gebruikersgroep gezet worden.',
	'ALBUM_ID'						=> 'Afbeeldingnummer',
	'ALBUM_IMAGE'					=> 'Galerie afbeelding',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Locatie, relatief aan de phpBB basis folder, van een afbeelding om aan het album te koppelen.',
	'ALBUM_NAME_EMPTY'				=> 'Je moet een naam voor dit album invoeren.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Een niet-wedstrijd album kan niet omgezet worden in een webstrijd-album.',
	'ALBUM_PARENT'					=> 'Hoofdalbum',
	'ALBUM_PASSWORD'				=> 'Albumwachtwoord',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Definieer een wachtwoord voor dit album, bij voorkeur het rechtensysteem gebruiken.',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Bevestig albumwachtwoord',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Hoeft alleen gezet te worden als er een albumwachtwoord ingevoerd is.',
	'ALBUM_RESYNCED'				=> 'Album “%s” succesvol gesynchroniseerd',
	'ALBUM_SETTINGS'				=> 'Albuminstellingen',
	'ALBUM_STATUS'					=> 'Albumstatus',
	'ALBUM_TYPE'					=> 'Albumtype',
	'ALBUM_TYPE_CAT'				=> 'Categorie',
	'ALBUM_TYPE_CONTEST'			=> 'Wedstrijd',
	'ALBUM_TYPE_UPLOAD'				=> 'Album',
	'ALBUM_UPDATED'					=> 'Album is succesvol bijgewerkt',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Wedstrijd-albums kunnen niet omgezet worden in een niet-wedstrijd album.',
	'ALBUMS'						=> 'Albums',

	'CACHE_DIR_SIZE'				=> 'buffer/-map grootte',
	'CHANGE_AUTHOR'					=> 'Verander auteur naar gast',
	'CHECK'							=> 'Controleer',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Geen afbeeldingen zonder geldige auteur gevonden.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Geen commentaren zonder geldige auteur gevonden.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Je moet een controle uitvoeren om bestanden zonder bijpassende database-waarde te vinden.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Geen persoonlijke albums zonder geldige auteur gevonden.',
	'CHECK_PERSONALS_BAD_EXPLAIN'	=> 'Geen persoonlijke albums gevonden.',
	'CHECK_SOURCE_EXPLAIN'			=> 'Geen resultaat gevonden. Je zou de controle moeten starten om zeker te zijn.',
	'CLEAN_AUTHORS_DONE'			=> 'Afbeeldingen zonder geldige auteur verwijderd.',
	'CLEAN_CHANGED'					=> 'Auteur veranderd in "Gast".',
	'CLEAN_COMMENTS_DONE'			=> 'Commentaren zonder geldige auteur verwijderd.',
	'CLEAN_ENTRIES_DONE'			=> 'Bestanden zonder bijpassende database-waarde verwijderd.',
	'CLEAN_GALLERY'					=> 'Galerie schoonmaken',
	'CLEAN_GALLERY_ABORT'			=> 'Schoonmaak afgebroken!',
	'CLEAN_PERSONALS_DONE'			=> 'Persoonlijke albums zonder geldige eigenaar verwijderd.',
	'CLEAN_PERSONALS_BAD_DONE'		=> 'Persoonlijke albums van geselecteerde gebruikers verwijderd.',
	'CLEAN_SOURCES_DONE'			=> 'Afbeeldingen zonder bestand verwijderd.',
	'COLS_PER_PAGE'					=> 'Aantal columns op de miniaturenpagina',
	'COMMENT'						=> 'Commentaar',
	'COMMENT_ID'					=> 'Commentaarnummer',
	'COMMENT_SYSTEM'				=> 'Schakel commentaarsysteem in',
	'CONFIRM_CLEAN'					=> 'Deze stap kan niet ongedaan worden gemaakt!',
	'CONFIRM_CLEAN_AUTHORS'			=> 'Afbeeldingen zonder geldige auteur verwijderen?',
	'CONFIRM_CLEAN_COMMENTS'		=> 'Commentaren zonder geldige auteur verwijderen?',
	'CONFIRM_CLEAN_ENTRIES'			=> 'Bestanden zonder database-waarde verwijderen?',
	'CONFIRM_CLEAN_PERSONALS'		=> 'Persoonlijke albums zonder geldige eigenaar verwijderen?',
	'CONFIRM_CLEAN_PERSONALS_BAD'	=> 'Persoonlijke albums van de geselecteerde gebruikers verwijderen?<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_SOURCES'			=> 'Afbeeldingen zonder bestand verwijderen?',
	'CONTEST_DATE_EXPLAIN'			=> 'Voer a.u.b. een datum in in JJJJ-MM-DD HH:MM formaat.',
	'CONTEST_END'					=> 'Einde wedstrijd',
	'CONTEST_END_BEFORE_RATING'		=> 'Het wedstrijd-einde mag niet voor het wedstrijd-boordelings-begin liggen.',
	'CONTEST_END_BEFORE_START'		=> 'Het wedstrijd-einde mag niet voor het wedstrijd-begin liggen.',
	'CONTEST_END_EXPLAIN'			=> 'De eindtijd is t.o.v. de start van de wedstrijd. Na het einde van de wedstrijd kunnen gebruikers geen afbeeldingen meer plaatsen of beoordelen.',
	'CONTEST_END_INVALID'			=> 'Foutief wedstrijd-einde (%s). Voer a.u.b. een datum in in JJJJ-MM-DD HH:MM formaat.',
	'CONTEST_RATING'				=> 'Beoordelingsstart',
	'CONTEST_RATING_BEFORE_START'	=> 'Het wedstrijd-boordelings-begin mag niet voor het wedstrijd-begin liggen',
	'CONTEST_RATING_EXPLAIN'		=> 'De beoordelingstijd is t.o.v. de start van de wedstrijd.',
	'CONTEST_RATING_INVALID'		=> 'Foutief wedstrijd-boordelings-begin (%s). Voer a.u.b. een datum in in JJJJ-MM-DD HH:MM formaat.',
	'CONTEST_SETTINGS'				=> 'Wedstrijdinstellingen',
	'CONTEST_START'					=> 'Starttijd wedstrijd',
	'CONTEST_START_EXPLAIN'			=> 'Aan het begin van de wedstrijd kunnen gebruikers afbeeldingen plaatsen.',
	'CONTEST_START_INVALID'			=> 'Foutief wedstrijd-begin (%s). Voer a.u.b. een datum in in JJJJ-MM-DD HH:MM formaat.',
	'COPY_PERMISSIONS'				=> 'Kopieer permissies van',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Als je kiest om de permissies te kopieeren dan krijgt het album rechten als die je hier nu selecteert. Als je geen album hebt geselecteerd moet je de permissies achteraf instellen.',
	'COPY_PERMISSIONS_ALBUM_FROM_EXPLAIN'	=> 'The source album you want to copy permissions from.',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'		=> 'The destination albums you want the copied permissions applied to.',
	'COPY_PERMISSIONS_CONFIRM'		=> 'Please be aware that this will overwrite any existing permissions on the selected albums.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Als je kiest om de permissies te kopieeren dan krijgt het album rechten als die je hier nu selecteert. Hiermee worden eventuele bestaande permissies overschreven.  Als je geen album selecteert worden de bestaande permissies behouden.',
	'COPY_PERMISSIONS_FROM'			=> 'Copy permissions from',
	'COPY_PERMISSIONS_SUCCESSFUL'	=> 'Copied permissions successful to target albums.',
	'COPY_PERMISSIONS_TO'			=> 'Apply permissions to',
	'CREATE_ALBUM'					=> 'Voeg nieuw album toe',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Verwijder inhoud of verplaats naar album',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Verwijder subalbums of verplaats naar album',
	'DEFAULT_SORT_METHOD'			=> 'Standaard Sorteer Methode',
	'DEFAULT_SORT_ORDER'			=> 'Standaard Sorteer Methode',
	'DELETE_ALBUM_SUBS'				=> 'Verwijder als eerste de subalbums',//@todo
	'DELETE_ALL_IMAGES'				=> 'Verwijder Afbeeldingen',
	'DELETE_IMAGES'					=> 'Verwijder Afbeeldingen',
	'DELETE_PERMISSIONS'			=> 'Verwijder permissies',
	'DELETE_SUBALBUMS'				=> 'DVerwijder subalbums en hun afbeeldingen',
	'DISP_BIRTHDAYS'				=> 'Toon verjaardagen',
	'DISP_EXIF_DATA'				=> 'Toon Exif-gegevens',
	'DISP_EXIF_DATA_EXP'			=> 'This feature can not be used at the moment, as the need function "exif_read_data" is not included in your PHP Installation.',
	'DISP_FAKE_THUMB'				=> 'Bekijk miniatuur in albumlijst',
	'DISP_LOGIN'					=> 'Toon inlog-veld',
	'DISP_LOGIN_EXP'				=> 'Alleen gasten',
	'DISP_PERSONAL_ALBUM_PROFILE'	=> 'Toon verwijzing naar Persoonlijk Album in gebruikersprofiel',
	'DISP_STATISTIC'				=> 'Toon galerij-statistieken',
	'DISP_TOTAL_IMAGES'				=> 'Toon "Aantal afbeeldingen" op index.' . $phpEx,
	'DISP_USER_IMAGES_PROFILE'		=> 'Toon statistiek bij het uploaden van afbeeldingen in het gebruikersprofiel',
	'DISP_VIEWTOPIC_ICON'			=> 'Toon knop voor persoonlijk albums op viewtopic.' . $phpEx,
	'DISP_VIEWTOPIC_IMAGES'			=> 'Toon afbeeldingenteller op viewtopic.' . $phpEx,
	'DISP_VIEWTOPIC_LINK'			=> 'Koppel afbeeldingenteller aan de afbeeldingen van de gebruiker',
	'DISP_WHOISONLINE'				=> 'Toon Wie-Is-Online',
	'DISPLAY_IN_RRC'				=> 'Geef afbeeldingen in dit album weer bij "Recente-Willekeurige"-afbeeldingen',
	'DONT_COPY_PERMISSIONS'			=> 'kopieer geen permissies',
	
	'EDIT_ALBUM'					=> 'Bewerk Album',
	
	'FAKE_THUMB_SIZE'				=> 'Miniatuurgrootte',
	'FAKE_THUMB_SIZE_EXP'			=> 'Bij aanpassen naar maximale grootte rekening houden met 16-beeldpunten voor de zwart informatie-regel',
	
	'GALLERY_ALBUMS_TITLE'			=> 'Galerie Albums Beheer',
	'GALLERY_CONFIG'				=> 'Galerie-instellingen',
	'GALLERY_CONFIG_EXPLAIN'		=> 'Je kunt hier de algemene instellingen van de phpBB Galerie hier wijzigen',
	'GALLERY_CONFIG_UPDATED'		=> 'Galerie-instellingen zijn succesvol bijgewerkt',
	'GALLERY_INDEX'					=> 'Galerie-index',
	'GALLERY_PURGE_CACHE_EXPLAIN'	=> 'Als je gebruikt maakt van het Miniatuur Buffer mogelijkheid moet je het Miniatuur Buffer legen na het wijzigen van de miniatuur-instellingen in Album Instellingen om ze opnieuw aan te laten maken.',//@todo
	'GALLERY_STATS'					=> 'Galeriestatistieken',
	'GALLERY_VERSION'				=> 'Galerieversie',
	'GD_VERSION'					=> 'Optimaliseer voor GD versie',
	'GENERAL_ALBUM_SETTINGS'		=> 'Algemene albuminstellingen',
	'GIF_ALLOWED'					=> 'Toegestaan om GIF-bestanden te uploaden',
	'GUPLOAD_DIR_SIZE'				=> 'upload/-map grootte',

	'HACKING_ATTEMPT'				=> 'Hacking attempt!',
	'HANDLE_IMAGES'					=> 'Wat te doen met de afbeeldingen',
	'HANDLE_SUBS'					=> 'Wat te doen met de subalbums',
	'HOTLINK_ALLOWED'				=> 'Domeinen die toegestaan zijn voor "hotlink" (gescheiden door een komma)',
	'HOTLINK_ALLOWED_EXP'			=> 'De domeinen moeten door een komma (geen spatie) gescheiden worden. B.v.: "flying-bits.org,phpbb.com"',
	'HOTLINK_PREVENT'				=> 'Hotlink Bescherming',
	
	'IMAGE_DESC_MAX_LENGTH'			=> 'Afbeeldingomschrijving /-commentaar Max. Lengte (bytes)',
	'IMAGE_ID'						=> 'Afbeeldingnummer',
	'IMAGE_SETTINGS'				=> 'Afbeeldingsinstellingen',
	'IMAGES_PER_DAY'				=> 'Afbeeldingen per dag',
	'IMPORT_ALBUM'					=> 'Album waar de afbeeldingen naar ge&iuml;mporteerd moeten worden:',
	'IMPORT_DEBUG_MES'				=> '%1$s afbeeldingen ge&iuml;mporteerd. Er zijn nog %2$s afbeeldingen te gaan. Herhaal het proces.',
	'IMPORT_DIR_EMPTY'				=> 'De map %s is leeg. Je moet de afbeeldingen uploaden voor je ze kunt importeren.',
	'IMPORT_FINISHED'				=> 'Alle %1$s afbeeldingen zijn succesvol ge&iuml;mporteerd.',
	'IMPORT_MISSING_ALBUM'			=> 'Selecteer een album waar de afbeeldingen geplaatst moeten worden.',
	'IMPORT_SELECT'					=> 'Kies de afbeeldingen die je wilt importeren. Succesvol ge&uuml;ploade afbeeldingen worden verwijderd. Andere afbeeldingen blijven beschikbaar.',
	'IMPORT_SCHEMA_CREATED'			=> 'Het import-schema was succesvol gecreëerd, wacht a.u.b. terwijl de afbeeldingen geïmporteerd worden.',
	'IMPORT_USER'					=> 'Ge&uuml;pload door',
	'IMPORT_USER_EXP'				=> 'Hier kun je de afbeeldingen voor een andere gebruikers toevoegen.',
	'INDEX_SETTINGS'				=> 'Instellingen voor gallery/index.' . $phpEx,
	'INFO_LINE'						=> 'Toon bestandsgrootte bij miniatuur',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Erf rechten van een ander album',
	'INHERIT_PERMISSIONS_VICTIM'	=> 'Erf rechten van een andere instelling',

	'JPG_ALLOWED'					=> 'Toegestaan om JPG-bestanden te uploaden',
	'JPG_QUALITY'					=> 'JPG-Quality',
	'JPG_QUALITY_EXP'				=> 'When rotating or resizing image, the filesize might get bigger than it was before the action. With this option you can reduce the quality, to save disk space.',

	'LIST_INDEX'					=> 'Toon subalbums in de index van het hoofdalbum',
	'LIST_INDEX_EXPLAIN'			=> 'Toon dit album in de index en op andere plaatsen als een verwijzing in de index van het hoofdalbum als daar de optie “Toon subalbums in index” optie is ingeschakeld.',
	'LIST_SUBALBUMS'				=> 'Toon subalbums in index',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Toon de subalbums van dit album in de index en op andere plaatsen als een verwijzing in de index van het hoofdalbum als daar de optie “Toon subalbums in de index van het hoofdalbum” optie is ingeschakeld.',
	'LOCKED'						=> 'Gesloten',
	'LOOK_UP_ALBUM'					=> 'Select a album',
	'LOOK_UP_ALBUMS_EXPLAIN'		=> 'You are able to select more than one album.',

	'MANAGE_CRASHED_ENTRIES'		=> 'Beheer corrupte waardes',
	'MANAGE_CRASHED_IMAGES'			=> 'Beheer corrupte afbeeldingen',
	'MANAGE_PERSONALS'				=> 'Beheer persoonlijke albums',
	'MAX_IMAGES_PER_ALBUM'			=> 'Maximum aantal afbeeldingen in een Album (-1 = onbeperkt)',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> 'Onbeperkt is -1',
	'MEDIUM_CACHE'					=> 'Buffer aangepaste afbeeldingen voor afbeeldings-pagina',
	'MEDIUM_DIR_SIZE'				=> 'medium/-folder grootte',
	'MISSING_ALBUM_NAME'			=> 'Je moet een naam voor het album ingeven',
	'MISSING_AUTHOR'				=> 'Afbeeldingen zonder geldige auteur',
	'MISSING_AUTHOR_C'				=> 'Commentaren zonder geldige auteur',
	'MISSING_ENTRY'					=> 'Bestanden zonder database-waarde',
	'MISSING_IMPORT_SCHEMA'			=> 'Het opgegeven import-schema (%s) kon niet gevonden worden.',
	'MISSING_OWNER'					=> 'Persoonlijke albums zonder geldige eigenaar',
	'MISSING_OWNER_EXP'				=> 'Subalbums, afbeeldingen en commentaren worden ook verwijderd.',
	'MISSING_SOURCE'				=> 'Afbeeldingen zonder bestand',
	'MOVE_IMAGES_TO'				=> 'Verplaats afbeeldingen naar',
	'MOVE_SUBALBUMS_TO'				=> 'Verplaats subalbums naar',
	
	'NEW_ALBUM_CREATED'				=> 'Het nieuwe album is succesvol aan gemaakt',
	'NO_ALBUM_SELECTED'				=> 'Je moet minimaal één album selecteren.',
	'NO_DESTINATION_ALBUM'			=> 'You have not specified a album to move content to.',
	'NO_FILE_SELECTED'				=> 'Je moet minimaal één bestand selecteren.',
	'NO_PERMISSIONS_SELECTED'		=> 'Je moet minimaal één album of een speciale permissie-set selecteren.',
	'NO_VICTIM_SELECTED'			=> 'Je moet minimaal één ' /*gebruiker of */ . 'groep selecteren.',
	'NO_INHERIT'					=> 'Kopieer geen rechten',
	'NO_PARENT_ALBUM'				=> 'Geen Hoofdalbum',
	'NO_SUBALBUMS'					=> 'Geen Albums toegevoegd',
	'NUMBER_ALBUMS'					=> 'Aantal albums',
	'NUMBER_IMAGES'					=> 'Aantal afbeeldingen',
	'NUMBER_PERSONALS'				=> 'Aantal persoonlijke albums',

	'OWN_PERSONAL_ALBUMS'			=> 'Je eigen persoonlijke album',

	'PERMISSION'					=> 'Permissies',
	'PERMISSION_NEVER'				=> 'Nooit',
	'PERMISSION_NO'					=> 'Nee',
	'PERMISSION_SETTING'			=> 'Instelling',
	'PERMISSION_YES'				=> 'Ja',
	
	'PERMISSION_A_LIST'				=> 'Kan album zien',
	'PERMISSION_ALBUM_COUNT'		=> 'Aantal mogelijke persoonlijke subalbums',
	'PERMISSION_ALBUM_UNLIMITED'	=> 'Unlimited number of personal subalbums',
	'PERMISSION_C'					=> 'Commentaren',
	'PERMISSION_C_DELETE'			=> 'Kan commentaar verwijderen',
	'PERMISSION_C_EDIT'				=> 'Kan commentaar bewerken',
	'PERMISSION_C_POST'				=> 'Kan commentaar op afbeelding geven',
	'PERMISSION_C_READ'				=> 'Kan commentaar lezen',
	'PERMISSION_I'					=> 'Afbeeldingen',
	'PERMISSION_I_APPROVE'			=> 'Kan uploaden zonder toestemming',
	'PERMISSION_I_COUNT'			=> 'Aantal te uploaden afbeeldingen',
	'PERMISSION_I_DELETE'			=> 'Kan afbeeldingen verwijderen',
	'PERMISSION_I_EDIT'				=> 'Kan afbeeldingen bewerken',
	'PERMISSION_I_LOCK'				=> 'Kan afbeeldingen sluiten',
	'PERMISSION_I_RATE'				=> 'Kan afbeeldingen beoordelen',
	'PERMISSION_I_RATE_EXPLAIN'		=> 'Guests and the image-uploader can <samp>NEVER</samp> rate images.',
	'PERMISSION_I_REPORT'			=> 'Kan afbeeldingen rapporteren',
	'PERMISSION_I_UNLIMITED'		=> 'Can upload unlimited images',
	'PERMISSION_I_UPLOAD'			=> 'Kan afbeeldingen uploaden',
	'PERMISSION_I_VIEW'				=> 'Kan afbeeldingen bekijken',
	'PERMISSION_I_WATERMARK'		=> 'Kan afbeeldingen zonder watermerk bekijken',
	'PERMISSION_M'					=> 'Moderatie',
	'PERMISSION_MISC'				=> 'Divs', //Diversen
	'PERMISSION_M_COMMENTS'			=> 'Kan commentaren modereren',
	'PERMISSION_M_DELETE'			=> 'Kan afbeeldingen verwijderen',
	'PERMISSION_M_EDIT'				=> 'Kan afbeeldingen bewerken',
	'PERMISSION_M_MOVE'				=> 'Kan afbeeldingen verplaatsen',
	'PERMISSION_M_REPORT'			=> 'Kan rapporten beheren',
	'PERMISSION_M_STATUS'			=> 'Kan afbeeldingen goedkeuren of afsluiten',

	'PERMISSION_EMPTY'				=> 'Je hebt niet alle permissies gezet.',
	'PERMISSIONS'					=> 'Permissies',
	'PERMISSIONS_EXPLAIN'			=> 'Hier kun je veranderen welke gebruikers en groepen toegang hebben tot welke albums.',
	'PERMISSIONS_STORED'			=> 'Permissies zijn succesvol opgeslagen.',
	'PERSONAL_ALBUM_INDEX'			=> 'Bekijk persoonlijke albums als album op de index',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Als "Nee" gekozen, komt er een verwijzing, rechts onder.',
	'PGALLERIES_PER_PAGE'			=> 'Number of personal galleries per page',
	'PHPBB_INTEGRATION'				=> 'Integratie in phpBB',
	'PNG_ALLOWED'					=> 'Toegestaan om PNG-bestanden te uploaden',
	'PURGED_CACHE'					=> 'Leeg de buffer',
	
	'RATE_SCALE'					=> 'Beoordelingsschaal',
	'RATE_SYSTEM'					=> 'Schakel Beoordelingssysteem in',
	'REDIRECT_ACL'					=> 'Je kunt nu %spermissies instellen%s voor dit album.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'Je moet de afbeeldingen uit het album verwijderen voor je het albumtypekunt omzetten naar een categorie.',
	'RESET_RATING'					=> 'Reset beoordeling voor het album',
	'RESET_RATING_COMPLETED'		=> 'Beoordelingen succesvol verwijderd.',
	'RESET_RATING_CONFIRM'			=> 'Weet je zeker dat je alle beoordelingen van het album "%s" wilt verwijderen?',
	'RESET_RATING_EXPLAIN'			=> 'Verwijderd alle beoordelingen van afbeeldingen in het gespecificeerde album. Voer het albumnummer in in het veld aan de rechterzijde.',
 	'RESIZE_IMAGES'					=> 'Pas grotere afbeeldingen aan',
	'RESYNC_IMAGECOUNTS'			=> 'Hersynchroniseer afbeelding-tellers',
	'RESYNC_IMAGECOUNTS_CONFIRM'	=> 'Weet je zeker dat je de afbeeldingtellers wilt hersynchroniseren?',
	'RESYNC_IMAGECOUNTS_EXPLAIN'	=> 'Alleen bestaande afbeeldingen worden meegenomen.',
	'RESYNC_LAST_IMAGES'			=> 'Ververs "Meest recente afbeelding"',
	'RESYNC_PERSONALS'				=> 'Hersynchroniseer persoonlijke albumnummers',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Weet je zeker dat je de persoonlijke albumnummers wilt hersynchroniseren?',
	'RESYNCED_IMAGECOUNTS'			=> 'Ververs afbeeldingen tellers',
	'RESYNCED_LAST_IMAGES'			=> '"Meest recente afbeelding" ververst',
	'RESYNCED_PERSONALS'			=> 'Persoonlijke album nummers ververst',
	'ROTATE_IMAGES'					=> 'Allow to rotate images',
	'ROTATE_IMAGES_EXP'				=> 'This feature can not be used at the moment, as the need function "imagerotate" is not included in your GD Version.',
	'ROWS_PER_PAGE'					=> 'Aantal regels op een miniatuuroverzicht',

	'RRC_DISPLAY_ALBUMNAME'			=> 'Albumnaam',
	'RRC_DISPLAY_COMMENTS'			=> 'Commentaren',
	'RRC_DISPLAY_IMAGENAME'			=> 'Afbeeldingnaam',
	'RRC_DISPLAY_IMAGETIME'			=> 'Afbeeldingtijd',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Afbeeldingkijkers',
	'RRC_DISPLAY_IP'				=> 'User ip',
	'RRC_DISPLAY_NONE'				=> 'Geen',
	'RRC_DISPLAY_OPTIONS'			=> 'Welke waarden moeten er onder de miniatuur getoond worden?',
	'RRC_DISPLAY_USERNAME'			=> 'Gebruikersnaam',
	'RRC_DISPLAY_RATINGS'			=> 'Beoordelingen',
	'RRC_GINDEX'					=> 'Recente- en Willekeurige afbeeldingen & Commentaren - Optie',
	'RRC_GINDEX_COLUMNS'			=> 'Kolommen',
	'RRC_GINDEX_COMMENTS'			=> 'Klap commentaren op',
	'RRC_GINDEX_CONTESTS'			=> 'Aantal wedstrijden',
	'RRC_GINDEX_CROWS'				=> 'Aantal commentaren',
	'RRC_GINDEX_MODE'				=> 'Modus',
	'RRC_GINDEX_MODE_EXP'			=> '"Willekeurige afbeeldingen" kan lang aan het laden zijn bij grote databases!',
	'RRC_GINDEX_PGALLERIES'			=> 'Bekijk afbeeldingen uit persoonlijke albums',
	'RRC_GINDEX_ROWS'				=> 'Regels',
	'RRC_MODE_COMMENTS'				=> 'Commentaren',
	'RRC_MODE_NONE'					=> 'Geen',
	'RRC_MODE_RANDOM'				=> 'Willekeurige afbeeldingen',
	'RRC_MODE_RECENT'				=> 'Recente afbeeldingen',
	'RRC_PROFILE_COLUMNS'			=> 'Kolommen',
	'RRC_PROFILE_MODE'				=> 'Modus van "Recente & willekeurige afbeeldingen"-opties in het profiel',
	'RRC_PROFILE_MODE_EXP'			=> '"Willekeurige afbeeldingen" kan lang aan het laden zijn bij grote databases!',
	'RRC_PROFILE_ROWS'				=> 'Regels',

	'RSZ_HEIGHT'					=> 'Maximum hoogte bij bekijken afbeelding',
	'RSZ_WIDTH'						=> 'Maximum breedte bij bekijken afbeelding',

	'SEARCH_SETTINGS'				=> 'Search settings',
	'SELECT_ALBUM'					=> 'Selecteer album',
	'SELECT_GROUPS'					=> 'Selecteer groepen',
	'SELECT_PERM_SYS'				=> 'Selecteer permissiesysteem',
	'SELECT_PERMISSIONS'			=> 'Selecteer permissies',
	'SELECTED_ALBUM_NOT_EXIST'		=> 'The selected album(s) do not exist.',
	'SELECTED_ALBUMS'				=> 'Geselecteerde albums',
	'SELECTED_GROUPS'				=> 'Geselecteerde groepen',
	'SELECTED_PERM_SYS'				=> 'Geselecteerd permissiesysteem',
	'SET_PERMISSIONS'				=> '<br />Zet nu <a href="%s">permissies</a>.',
	'SHORTED_IMAGENAMES'			=> 'Kort afbeeldingsnamen in',
	'SHORTED_IMAGENAMES_EXP'		=> 'Als de afbeeldingsnaam te lang is en geen spaties bevat kan de pagina-opmaak verminkt worden.',
	'SORRY_NO_STATISTIC'			=> 'Sorry, deze statistiek is nog niet beschikbaar.',
	'SYNC_IN_PROGRESS'				=> 'Album synchronisatie ...',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Synchronisatie afbeeldingen nummers %1$d/%2$d.',

	'THUMBNAIL_CACHE'				=> 'Miniatuurbuffer',
	'THUMBNAIL_QUALITY'				=> 'Kwaliteit miniatuur (1-100)',
	'THUMBNAIL_SETTINGS'			=> 'Miniatuurinstellingen',
	
	'UC_IMAGE_NAME'					=> 'Afbeeldingsnaam',
	'UC_IMAGE_ICON'					=> 'Icoon Laatste afbeelding',
	'UC_IMAGEPAGE'					=> 'Afbeelding op eigen pagina (met commentaren en beoordelingen)',
	'UC_LINK_CONFIG'				=> 'Verwijzing configuratie',
	'UC_LINK_HIGHSLIDE'				=> 'Open Highslide-optie',
	'UC_LINK_IMAGE'					=> 'Open afbeelding',
	'UC_LINK_IMAGE_PAGE'			=> 'Open afbeeldingpagina (met commentaren en beoordelingen)',
	'UC_LINK_LYTEBOX'				=> 'Open Lytebox-optie',
	'UC_LINK_NONE'					=> 'Geen verwijzing',
	'UC_LINK_SHADOWBOX'				=> 'Open Shadowbox-Plugin',
	'UC_THUMBNAIL'					=> 'Miniatuur',
	'UC_THUMBNAIL_EXP'				=> 'Also used for the BBCode.',
	'UNLOCKED'						=> 'Geopend',
	'UPDATE_BBCODE'					=> 'Update BBCode',
	'UPLOAD_IMAGES'					=> 'Upload meerdere afbeeldingen',
	
	'VIEW_IMAGE_URL'				=> 'Bekijk afbeeldingadres op afbeeldingpagina',
	
	'WATERMARK'						=> 'Watermerk',
	'WATERMARK_HEIGHT'				=> 'Minimum hoogte voor watermerk',
	'WATERMARK_HEIGHT_EXP'			=> 'Om te voorkomen dat kleine plaatjes verdwijnen achter het watermerk kun je hier een minimum breedte/hoogte opgeven.',
	'WATERMARK_IMAGES'				=> 'Watermark afbeeldingen',
	'WATERMARK_OPTIONS'				=> 'Watermerk opties',
	'WATERMARK_POSITION'			=> 'Watermark position',
	'WATERMARK_POSITION_BOTTOM'		=> 'bottom',
	'WATERMARK_POSITION_CENTER'		=> 'center',
	'WATERMARK_POSITION_LEFT'		=> 'left',
	'WATERMARK_POSITION_MIDDLE'		=> 'middle',
	'WATERMARK_POSITION_RIGHT'		=> 'right',
	'WATERMARK_POSITION_TOP'		=> 'top',
	'WATERMARK_SOURCE'		 		=> 'Watermark bronbestand (relatief aan je phpbb root)',
	'WATERMARK_WIDTH'				=> 'Minimum breedte voor watermerk',
	'WATERMARK_WIDTH_EXP'			=> 'Om te voorkomen dat kleine afbeeldingen afgedekt worden door het watermerk kun je hier een minimum breedte/hoogte opgeven.',
));

/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Release Announcement',
	'CURRENT_VERSION'		=> 'Current Version',
	'DOWNLOAD_LATEST'		=> 'Download Latest Version',
	'LATEST_VERSION'		=> 'Latest Version',
	'NO_INFO'					=> 'Version server could not be contacted',
	'NOT_UP_TO_DATE'			=> '%s is not up to date',
	'RELEASE_ANNOUNCEMENT'	=> 'Annoucement Topic',
	'UP_TO_DATE'			=> '%s is up to date',
	'VERSION_CHECK'			=> 'MOD Version Check',
));

?>