<?php
/**
*
* common [Dutch]
*
* @package language
* @version $Id: common.php,v 1.0.0 2006/08/12 13:55:01 naderman Exp $
* @copyright (c) 2005 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2007
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> '<a href="http://www.phpbb.nl">phpBB.nl Vertaling</a>', // Copyright mag verwijderd worden
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007 (with Relative days enabled)
	'USER_LANG'			=> 'nl-nl',

	'1_DAY'			=> '1 dag',
	'1_MONTH'		=> '1 maand',
	'1_YEAR'		=> '1 jaar',
	'2_WEEKS'		=> '2 weken',
	'3_MONTHS'		=> '3 maanden',
	'6_MONTHS'		=> '6 maanden',
	'7_DAYS'		=> '7 dagen',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'Je account is reeds geactiveerd.',
	'ACCOUNT_DEACTIVATED'			=> 'Je account is gedeactiveerd en kan alleen door een beheerder opnieuw worden geactiveerd.',
	'ACCOUNT_NOT_ACTIVATED'			=> 'Je account is nog niet geactiveerd.',
	'ACP'							=> 'Beheerderspaneel',
	'ACTIVE'						=> 'Actief',
	'ACTIVE_ERROR'					=> 'De opgegeven gebruiker is niet geactiveerd. Activeer je account en probeer opnieuw. Als je deze melding blijft krijgen, neem dan contact op met de beheerder.',
	'ADMINISTRATOR'					=> 'Beheerder',
	'ADMINISTRATORS'				=> 'Beheerders',
	'AGE'							=> 'Leeftijd',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> 'Toegestaan',
	'ALL_FILES'						=> 'Alle bestanden',
	'ALL_FORUMS'					=> 'Alle forums',
	'ALL_MESSAGES'					=> 'Alle berichten',
	'ALL_POSTS'						=> 'Alle berichten',
	'ALL_TIMES'						=> 'Alle tijden zijn %1$s %2$s',
	'ALL_TOPICS'					=> 'Alle onderwerpen',
	'AND'							=> 'En',
	'ARE_WATCHING_FORUM'			=> 'Je wordt op de hoogte gehouden van nieuwe onderwerpen in dit forum.',
	'ARE_WATCHING_TOPIC'			=> 'Je wordt op de hoogte gehouden van nieuwe berichten in dit onderwerp.',
	'ASCENDING'						=> 'Oplopend',
	'ATTACHMENTS'					=> 'Bijlagen',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'De afbeelding die je als bijlage wilde meegeven, is ongeldig.',
	'AUTHOR'						=> 'Auteur',
	'AUTH_NO_PROFILE_CREATED'		=> 'Het profiel kon niet worden aangemaakt.',
	'AVATAR_DISALLOWED_CONTENT'		=> 'De upload is afgewezen omdat het als onveilig is geïdentificeerd.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'De extensie %s is niet toegestaan.',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'De avatar kon niet worden geüpload, het bestand is ongeldig of beschadigd.',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'De geüploade avatar is incompleet.',
	'AVATAR_INVALID_FILENAME'		=> '%s is een ongeldige bestandsnaam.',
	'AVATAR_NOT_UPLOADED'			=> 'De avatar kon niet worden geüpload.',
	'AVATAR_NO_SIZE'				=> 'De afmetingen van de avatar konden niet worden vastgesteld, gelieve deze op te geven.',
	'AVATAR_PARTIAL_UPLOAD'			=> 'Het geüploade bestand is niet volledig geüpload.',
	'AVATAR_PHP_SIZE_NA'			=> 'De bestandsgrootte van de avatar is overschreden.<br />De maximum-grootte, bepaalt door PHP in php.ini kon niet worden bepaalt.',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'De bestandsgrootte van de avatar is overschreden. De maximum toegestane grootte is %1$d %2$s.<br />Let erop dat dit is ingesteld in het php.ini bestand en kan niet worden overschreven.',
	'AVATAR_URL_INVALID'			=> 'De opgegeven URL is ongeldig.',
	'AVATAR_URL_NOT_FOUND'			=> 'Het opgegeven bestand kon niet worden gevonden.',
	'AVATAR_WRONG_FILESIZE'			=> 'De bestandsgrootte van de avatar moet tussen 0 en %1d %2s zijn.',
	'AVATAR_WRONG_SIZE'				=> 'De avatar moet minstens %1$d pixels breed en %2$d pixels hoog zijn. De maximum-waardes zijn %3$d pixels breed en %4$d pixels hoog. De opgegeven avatar is %5$d pixels breed en %6$d pixels hoog.',

	'BACK_TO_TOP'			=> 'Omhoog',
	'BACK_TO_PREV'			=> 'Terug naar de vorige pagina.',
	'BAN_TRIGGERED_BY_EMAIL'=> 'Deze ban is van toepassing op je e-mailadres.',
	'BAN_TRIGGERED_BY_IP'	=> 'Deze ban is van toepassing op je IP-adres.',
	'BAN_TRIGGERED_BY_USER'	=> 'Deze ban is van toepassing op jouw gebruikersnaam.',
	'BBCODE_GUIDE'			=> 'BBCode handleiding',
	'BCC'					=> 'BCC',
	'BIRTHDAYS'				=> 'Verjaardagen',
	'BOARD_BAN_PERM'		=> 'Je bent <strong>permanent</strong> verbannen van dit forum.<br /><br />Voor meer informatie kun je contact opnemen met de %2$sbeheerder%3$s.',
	'BOARD_BAN_REASON'		=> 'De reden waarom je verbannen bent: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'Je bent tot <strong>%1$s</strong> van dit forum verbannen.<br /><br />Voor meer informatie kun je contact opnemen met de %2$sbeheerder%3$s.',
	'BOARD_DISABLE'			=> 'Sorry, maar het forum is tijdelijk niet beschikbaar.',
	'BOARD_DISABLED'		=> 'Dit forum is tijdelijk uitgeschakeld.',
	'BOARD_UNAVAILABLE'		=> 'Sorry, maar het forum is tijdelijk niet beschikbaar. Probeer het straks nog eens.',
	'BROWSING_FORUM'		=> 'Gebruikers op dit forum: %1$s',
	'BROWSING_FORUM_GUEST'	=> 'Gebruikers op dit forum: %1$s en %2$d gast',
	'BROWSING_FORUM_GUESTS'	=> 'Gebruikers op dit forum: %1$s en %2$d gasten',
	'BYTES'					=> 'Bytes',

	'CANCEL'				=> 'Annuleren',
	'CHANGE'				=> 'Wijzigen',
	'CHANGE_FONT_SIZE'		=> 'Verander lettergrootte',
	'CHANGING_PREFERENCES'	=> 'Verander forumvoorkeuren',
	'CHANGING_PROFILE'		=> 'Verander profielinstellingen',
	'CLICK_VIEW_PRIVMSG'	=> '%sGa naar je Postvak IN%s',
	'COLLAPSE_VIEW'			=> 'Inklappen',
	'CLOSE_WINDOW'			=> 'Sluit het scherm',
	'COLOUR_SWATCH'			=> 'Kleurenpalet',
	'COMMA_SEPARATOR'		=> ', ',	// Used in pagination and secret yet-to-be-release style, use localised comma if appropiate, eg: Ideographic or Arabic
	'CONFIRM'				=> 'Bevestigen',
	'CONFIRM_CODE'			=> 'Bevestigingscode',
	'CONFIRM_CODE_EXPLAIN'	=> 'Geef de code van de afbeelding exact op zoals weergegeven. De code is niet hoofdlettergevoelig.',
	'CONFIRM_CODE_WRONG'	=> 'De opgegeven bevestigingscode is onjuist.',
	'CONFIRM_OPERATION'		=> 'Weet je zeker dat je deze actie wilt uitvoeren?',
	'CONGRATULATIONS'		=> 'Proficiat',
	'CONNECTION_FAILED'		=> 'De verbinding is mislukt.',
	'CONNECTION_SUCCESS'	=> 'De verbinding is gelukt!',
	'COOKIES_DELETED'		=> 'Alle forumcookies zijn verwijderd.',
	'CURRENT_TIME'			=> 'Het is nu %s',

	'DAY'					=> 'Dag',
	'DAYS'					=> 'Dagen',
	'DELETE'				=> 'Verwijder',
	'DELETE_ALL'			=> 'Verwijder alles',
	'DELETE_COOKIES'		=> 'Verwijder alle forumcookies',
	'DELETE_MARKED'			=> 'Verwijder gemarkeerden',
	'DELETE_POST'			=> 'Verwijder bericht',
	'DELIMITER'				=> 'Scheidingsteken',
	'DESCENDING'			=> 'Aflopend',
	'DISABLED'				=> 'Uitgeschakeld',
	'DISPLAY'				=> 'Weergeven',
	'DISPLAY_GUESTS'		=> 'Gasten weergeven',
	'DISPLAY_MESSAGES'		=> 'Geef de vorige onderwerpen weer',
	'DISPLAY_POSTS'			=> 'Geef de vorige berichten weer',
	'DISPLAY_TOPICS'		=> 'Geef de vorige onderwerpen weer',
	'DOWNLOADED'			=> 'Gedownload',
	'DOWNLOADING_FILE'		=> 'Bestand aan het downloaden',
	'DOWNLOAD_COUNT'		=> '%d keer gedownload',
	'DOWNLOAD_COUNTS'		=> '%d keer gedownload',
	'DOWNLOAD_COUNT_NONE'	=> 'Nog niet gedownload',
	'VIEWED_COUNT' 			=> '%d keer bekeken',
	'VIEWED_COUNTS' 		=> '%d keer bekeken',
	'VIEWED_COUNT_NONE' 	=> 'Nog niet bekeken',

	'EDIT_POST'							=> 'Wijzig bericht',
	'EMAIL'								=> 'E-mail', // Short form for EMAIL_ADDRESS
	'EMAIL_ADDRESS'						=> 'E-mailadres',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'Er ging iets fout bij het versturen van de mail op <strong>regel %1$s</strong>. Antwoord: %2$s',
	'EMPTY_SUBJECT'						=> 'Je moet een onderwerp opgeven bij het plaatsen van een nieuw bericht.',
	'EMPTY_MESSAGE_SUBJECT'				=> 'Je moet een onderwerp opgeven bij het plaatsen van een nieuw bericht.',
	'ENABLED'							=> 'Ingeschakeld',
	'ENCLOSURE'							=> 'Bijgevoegd',
	'ERR_CHANGING_DIRECTORY'			=> 'De map kon niet worden gewijzigd.',
	'ERR_CONNECTING_SERVER'				=> 'Er ging iets fout bij het verbinden met de server.',
	'ERR_JAB_AUTH'						=> 'Het aanmelden op de Jabber server is mislukt.',
	'ERR_JAB_CONNECT'					=> 'Er kon geen verbinding met de Jabber server tot stand worden gebracht.',
	'ERR_UNABLE_TO_LOGIN'				=> 'Fout bij het inloggen. Opgegeven gebruikersnaam of wachtwoord is onjuist.',
	'ERR_UNWATCHING'					=> 'Er is een fout opgetreden tijdens het afmelden van je bladwijzer.',
	'ERR_WATCHING'						=> 'Er is een fout opgetreden tijdens het aanmelden van je bladwijzer.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'Het ingevulde phpBB-pad is niet correct.',
	'EXPAND_VIEW'						=> 'Uitklappen',
	'EXTENSION'							=> 'Extensie',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'De extensie <strong>%s</strong> is gedeactiveerd en wordt niet langer weergegeven.',

	'FAQ'					=> 'Help',
	'FAQ_EXPLAIN'			=> 'Veel gestelde vragen',
	'FILENAME'				=> 'Bestandsnaam',
	'FILESIZE'				=> 'Bestandsgrootte',
	'FILEDATE'				=> 'Bestandsdatum',
	'FILE_COMMENT'			=> 'Opmerkingen bij bestand',
	'FILE_NOT_FOUND'		=> 'Het opgevraagde bestand kon niet worden gevonden.',
	'FIND_USERNAME'			=> 'Zoek een lid',
	'FOLDER'				=> 'Map',
	'FORGOT_PASS'			=> 'Wachtwoord vergeten?',
	'FORM_INVALID'			=> 'Het verstuurde formulier is ongeldig. Probeer opnieuw te versturen.',
	'FORUM'					=> 'Forum',
	'FORUMS'				=> 'Forums',
	'FORUMS_MARKED'			=> 'Alle forums zijn als ’gelezen’ gemarkeerd.',
	'FORUM_CAT'				=> 'Forumcategorie',
	'FORUM_INDEX'			=> 'Forumoverzicht',
	'FORUM_LINK'			=> 'Forumlink',
	'FORUM_LOCATION'		=> 'Forumlocatie',
	'FORUM_LOCKED'			=> 'Forum gesloten',
	'FORUM_RULES'			=> 'Forumregels',
	'FORUM_RULES_LINK'		=> 'Klik hier om de forumregels te lezen.',
	'FROM'					=> 'van',
	'FSOCK_DISABLED'		=> 'De actie kon niet worden uitgevoerd omdat de fsock-functies uitgeschakeld zijn, of omdat de betreffende server niet werd gevonden.',

	'FTP_FSOCK_HOST'				=> 'FTP-host',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'De FTP-server waar je jouw website naar uploadt.',
	'FTP_FSOCK_PASSWORD'			=> 'FTP-wachtwoord',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Het wachtwoord van de FTP-gebruiker.',
	'FTP_FSOCK_PORT'				=> 'FTP-poort',
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'De poort waarmee je met de FTP-server verbindt.',
	'FTP_FSOCK_ROOT_PATH'			=> 'phpBB-locatie',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'De map, gezien vanuit je website root, naar het phpBB-forum.',
	'FTP_FSOCK_TIMEOUT'				=> 'Time-out FTP',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'De maximum-tijd, in seconden, die de server zal wachten op een antwoord van de FTP-server.',
	'FTP_FSOCK_USERNAME'			=> 'FTP-gebruikersnaam',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'De gebruiker waarmee je met de FTP-server verbindt.',

	'FTP_HOST'					=> 'FTP-host',
	'FTP_HOST_EXPLAIN'			=> 'De FTP-server waar je jouw website naar uploadt.',
	'FTP_PASSWORD'				=> 'FTP-wachtwoord',
	'FTP_PASSWORD_EXPLAIN'		=> 'Het wachtwoord van de FTP-gebruiker.',
	'FTP_PORT'					=> 'FTP-poort',
	'FTP_PORT_EXPLAIN'			=> 'De poort waarmee je met de FTP-server verbindt.',
	'FTP_ROOT_PATH'				=> 'phpBB-locatie',
	'FTP_ROOT_PATH_EXPLAIN'		=> 'De map, gezien vanuit je website root, naar het phpBB-forum.',
	'FTP_TIMEOUT'				=> 'Time-out FTP',
	'FTP_TIMEOUT_EXPLAIN'		=> 'De maximum-tijd, in seconden, dat de server zal wachten op een antwoord van de FTP-host.',
	'FTP_USERNAME'				=> 'FTP-gebruikersnaam',
	'FTP_USERNAME_EXPLAIN'		=> 'De gebruiker waarmee je met de FTP-server verbindt.',

	'GENERAL_ERROR'				=> 'Algemene fout',
	'GB'						=> 'GB',
	'GIB'						=> 'GiB',
	'GO'						=> 'Ga',
	'GOTO_PAGE'					=> 'Ga naar pagina',
	'GROUP'						=> 'Groep',
	'GROUPS'					=> 'Groepen',
	'GROUP_ERR_TYPE'			=> 'Ongeldig groepstype opgegeven.',
	'GROUP_ERR_USERNAME'		=> 'Er is geen groepsnaam opgegeven.',
	'GROUP_ERR_USER_LONG'		=> 'De groepsnaam is te lang. Maximaal 60 karakters.',
	'GUEST'						=> 'Gast',
	'GUEST_USERS_ONLINE'		=> 'Er zijn %d gasten online.',
	'GUEST_USERS_TOTAL'			=> '%d gasten',
	'GUEST_USERS_ZERO_ONLINE'	=> 'Er zijn 0 gasten online.',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 gasten',
	'GUEST_USER_ONLINE'			=> 'Er is %d gast online.',
	'GUEST_USER_TOTAL'			=> '%d gast',
	'G_ADMINISTRATORS'			=> 'Beheerders',
	'G_BOTS'					=> 'Bots',
	'G_GUESTS'					=> 'Gasten',
	'G_REGISTERED'				=> 'Geregistreerde gebruikers',
	'G_REGISTERED_COPPA'		=> 'Geregistreerde COPPA-gebruikers',
	'G_GLOBAL_MODERATORS'		=> 'Globale moderators',
	'G_NEWLY_REGISTERED'		=> 'Nieuw geregistreerde gebruikers',

	'HIDDEN_USERS_ONLINE'			=> '%d verborgen gebruikers online',
	'HIDDEN_USERS_TOTAL'			=> '%d verborgen',
	'HIDDEN_USERS_TOTAL_AND'		=> '%d verborgen en ',
	'HIDDEN_USERS_ZERO_ONLINE'		=> '0 verborgen gebruikers online',
	'HIDDEN_USERS_ZERO_TOTAL'		=> '0 verborgen',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 verborgen en ',
	'HIDDEN_USER_ONLINE'			=> '%d verborgen gebruiker online',
	'HIDDEN_USER_TOTAL'				=> '%d verborgen',
	'HIDDEN_USER_TOTAL_AND'			=> '%d verborgen en ',
	'HIDE_GUESTS'					=> 'Verberg gasten',
	'HIDE_ME'						=> 'Mij gedurende deze sessie als Verborgen weergeven in de lijst met online gebruikers.',
	'HOURS'							=> 'Uren',
	'HOME'							=> 'Home',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'ICQ-status',
	'IF'						=> 'Als',
	'IMAGE'						=> 'Afbeelding',
	'IMAGE_FILETYPE_INVALID'	=> 'Afbeeldingbestand %d voor mimetype %s wordt niet ondersteund.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Afbeeldingbestand fout: extensie %1$s verwacht, maar %2$s gegeven.',
	'IN'						=> 'in',
	'INDEX'						=> 'Forumoverzicht',
	'INFORMATION'				=> 'Informatie',
	'INTERESTS'					=> 'Interesses',
	'INVALID_DIGEST_CHALLENGE'	=> 'Ongeldige samenstelling van karakters.',
	'INVALID_EMAIL_LOG'			=> '<strong>%s</strong> is mogelijk een vals e-mailadres.',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'			=> 'Jouw IP %1$s is geblokkeerd omdat deze op de zwarte lijst staat. Voor meer informatie zie %2$s.',

	'JABBER'		=> 'Jabber',
	'JOINED'		=> 'Geregistreerd',
	'JUMP_PAGE'		=> 'Geef het paginanummer op van waar je naartoe wilt gaan.',
	'JUMP_TO'		=> 'Ga naar',
	'JUMP_TO_PAGE'	=> 'Klik om naar de pagina te gaan…',

	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'							=> 'Laatste bericht',
	'LAST_UPDATED'						=> 'Laatst gewijzigd',
	'LAST_VISIT'						=> 'Laatste bezoek',
	'LDAP_NO_LDAP_EXTENSION'			=> 'LDAP-extensie niet beschikbaar.',
	'LDAP_NO_SERVER_CONNECTION'			=> 'Verbinding met de LDAP-server mislukt.',
	'LDAP_SEARCH_FAILED'				=> 'Er is een fout opgetreden tijdens het zoeken in de LDAP directory.',
	'LEGEND'							=> 'Legenda',
	'LOCATION'							=> 'Woonplaats',
	'LOCK_POST'							=> 'Bericht sluiten',
	'LOCK_POST_EXPLAIN'					=> 'Voorkomt wijzigingen',
	'LOCK_TOPIC'						=> 'Sluit onderwerp',
	'LOGIN'								=> 'Inloggen',
	'LOGIN_CHECK_PM'					=> 'Log in om je privéberichten te lezen.',
	'LOGIN_CONFIRMATION'				=> 'Bevestig inloggen',
	'LOGIN_CONFIRM_EXPLAIN'				=> 'Om de accounts van de leden te beschermen, moet je een bevestigingscode ingeven na het maximum-aantal mislukte loginpogingen. De code is weergegeven in onderstaande afbeelding. Indien u visueel gehandicapt bent of op een andere manier niet in staat bent deze code te lezen, contacteer dan de %sbeheerder%s.', // unused
	'LOGIN_ERROR_ATTEMPTS'				=> 'Je overschreed het maximum-aantal pogingen om in te loggen. Naast je gebruikersnaam en wachtwoord, moet je nu ook de onderstaande CAPTCHA oplossen.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Je bent niet ingelogd door Apache.',
	'LOGIN_ERROR_PASSWORD'				=> 'Het opgegeven wachtwoord klopt niet, controleer je wachtwoord en probeer nogmaals. Als dit probleem zich blijft voordoen, contacteer dan de %sbeheerder%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> 'Het was niet mogelijk je wachtwoord te converteren tijdens de forumconversie. Gelieve een %snieuw wachtwoord%s aan te vragen. Als dit probleem zich blijft voordoen, contacteer dan de %sbeheerder%s.',
	'LOGIN_ERROR_USERNAME'				=> 'De opgegeven gebruikersnaam is onjuist, controleer deze en probeer nogmaals. Als dit probleem zich blijft voordoen, contacteer dan de %sbeheerder%s.',
	'LOGIN_FORUM'						=> 'Om dit forum te lezen of er berichten in te plaatsen, moet je het bijhorende wachtwoord opgeven.',
	'LOGIN_INFO'						=> 'Om te kunnen inloggen, moet je geregistreerd zijn. Registreren duurt slechts enkele minuten en daardoor krijg je ook veel meer mogelijkheden op dit forum. De beheerder kan geregistreerde gebruikers ook extra permissies verlenen. Neem voordat je inlogt eerst kennis van onze gebruikersvoorwaarden en bijhorende regels. Op het forum dienen de regels altijd te worden nageleefd.',
	'LOGIN_VIEWFORUM'					=> 'De beheerder vereist dat je geregistreerd en ingelogd bent om dit forum te openen.',
	'LOGIN_EXPLAIN_EDIT'				=> 'Om berichten in dit forum te kunnen wijzigen, moet je geregistreerd en ingelogd zijn.',
	'LOGIN_EXPLAIN_VIEWONLINE'			=> 'Om de lijst met online gebruikers te bekijken moet je geregistreerd en ingelogd zijn.',
	'LOGOUT'							=> 'Uitloggen',
	'LOGOUT_USER'						=> 'Uitloggen [ %s ]',
	'LOG_ME_IN'							=> 'Log mij automatisch in bij ieder bezoek.',

	'MARK'					=> 'Markeer',
	'MARK_ALL'				=> 'Selecteer alles',
	'MARK_FORUMS_READ'		=> 'Markeer alle forums als gelezen',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> 'Moderatorpaneel',
	'MEMBERLIST'			=> 'Leden',
	'MEMBERLIST_EXPLAIN'	=> 'Bekijk de volledige ledenlijst',
	'MERGE'					=> 'Samenvoegen',
	'MERGE_POSTS'			=> 'Berichten samenvoegen',
	'MERGE_TOPIC'			=> 'Onderwerp samenvoegen',
	'MESSAGE'				=> 'Bericht',
	'MESSAGES'				=> 'Berichten',
	'MESSAGE_BODY'			=> 'Bericht inhoud',
	'MINUTES'				=> 'Minuten',
	'MODERATE'				=> 'Modereer',
	'MODERATOR'				=> 'Moderator',
	'MODERATORS'			=> 'Moderators',
	'MONTH'					=> 'Maand',
	'MOVE'					=> 'Verplaats',
	'MSNM'					=> 'MSNM/WLM',

	'NA'						=> 'Niet beschikbaar',
	'NEWEST_USER'				=> 'Ons nieuwste lid is <strong>%s</strong>',
	'NEW_MESSAGE'				=> 'Nieuw bericht',
	'NEW_MESSAGES'				=> 'Nieuwe berichten',
	'NEW_PM'					=> '<strong>%d</strong> nieuw bericht',
	'NEW_PMS'					=> '<strong>%d</strong> nieuwe berichten',
	'NEW_POST'					=> 'Nieuw bericht',	// Not used anymore
	'NEW_POSTS'					=> 'Nieuwe berichten',	// Not used anymore
	'NEXT'						=> 'Volgende',		// Used in pagination
	'NEXT_STEP'					=> 'Volgende',
	'NEVER'						=> 'Nooit',
	'NO'						=> 'Nee',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'Je hebt geen permissies om deze groep te beheren.',
	'NOT_AUTHORISED'			=> 'Je bent niet bevoegd om deze sectie te bekijken.',
	'NOT_WATCHING_FORUM'		=> 'Je wordt niet langer op de hoogte gehouden van wijzigingen in dit forum.',
	'NOT_WATCHING_TOPIC'		=> 'Je wordt niet langer op de hoogte gehouden van wijzigingen in dit onderwerp.',
	'NOTIFY_ADMIN'				=> 'Gelieve de beheerder of webmaster te contacteren.',
	'NOTIFY_ADMIN_EMAIL'		=> 'Gelieve de beheerder of webmaster te contacteren: <a href="mailto:%1$s">%1$s</a>.',
	'NO_ACCESS_ATTACHMENT'		=> 'Je beschikt niet over de nodige permissies om dit bestand te openen.',
	'NO_ACTION'					=> 'Geen actie geselecteerd.',
	'NO_ADMINISTRATORS'			=> 'Er zijn geen beheerders.',
	'NO_AUTH_ADMIN'				=> 'Doordat je geen beheerder bent, beschik je niet over de juiste permissies om het beheerderspaneel te openen.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'Je kunt niet opnieuw inloggen als een andere gebruiker.',
	'NO_AUTH_OPERATION'			=> 'Je beschikt niet over de juiste permissies om deze procedure af te ronden.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Verbinding met SMTP-server mislukt : %1$s : %2$s',
	'NO_BIRTHDAYS'				=> 'Er zijn vandaag geen jarigen.',
	'NO_EMAIL_MESSAGE'			=> 'Er is geen e-mailbericht opgegeven.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'De mailserver gaf geen antwoord.',
	'NO_EMAIL_SUBJECT'			=> 'Er is geen e-mailonderwerp opgegeven.',
	'NO_FORUM'					=> 'Het geselecteerde forum bestaat niet (meer).',
	'NO_FORUMS'					=> 'Er zijn geen forums beschikbaar.',
	'NO_GROUP'					=> 'De opgevraagde gebruikersgroep bestaat niet (meer).',
	'NO_GROUP_MEMBERS'			=> 'Deze groep heeft momenteel nog geen leden.',
	'NO_IPS_DEFINED'			=> 'Er zijn geen IP’s of hosts opgegeven.',
	'NO_MEMBERS'				=> 'Er zijn geen leden die aan de zoekopdracht voldoen.',
	'NO_MESSAGES'				=> 'Geen berichten',
	'NO_MODE'					=> 'Geen modus geselecteerd.',
	'NO_MODERATORS'				=> 'Er zijn geen moderators.',
	'NO_NEW_MESSAGES'			=> 'Geen nieuwe berichten.',
	'NO_NEW_PM'					=> '<strong>0</strong> nieuwe berichten',
	'NO_NEW_POSTS'				=> 'Geen nieuwe berichten.',	// Not used anymore
	'NO_ONLINE_USERS'			=> 'Geen geregistreerde gebruikers.',
	'NO_POSTS'					=> 'Geen berichten',
	'NO_POSTS_TIME_FRAME'		=> 'Er zijn in dit onderwerp in de gekozen periode geen berichten geplaatst.',
	'NO_FEED_ENABLED'			=> 'Feeds zijn op dit forum niet beschikbaar.',
	'NO_FEED'					=> 'De opgevraagde feed is niet beschikbaar.',
	'NO_SUBJECT'				=> 'Geen titel opgegeven',								// Used for posts having no subject defined but displayed within management pages.
	'NO_SUCH_SEARCH_MODULE'		=> 'De opgegeven zoekmodule bestaat niet',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Er zijn geen ondersteunende inlogmethodes',
	'NO_TOPIC'					=> 'Het opgevraagde onderwerp bestaat niet (meer).',
	'NO_TOPIC_FORUM'			=> 'Het onderwerp of forum bestaat niet langer.',
	'NO_TOPICS'					=> 'Er zijn geen onderwerpen of berichten in dit forum.',
	'NO_TOPICS_TIME_FRAME'		=> 'Er zijn in dit forum in de gekozen periode geen berichten geplaatst.',
	'NO_UNREAD_PM'				=> '<strong>0</strong> ongelezen berichten',
	'NO_UNREAD_POSTS'			=> 'Geen ongelezen berichten',
	'NO_UPLOAD_FORM_FOUND'		=> 'Upload bevestigd, maar er werd geen geldig uploadformulier gevonden.',
	'NO_USER'					=> 'De opgevraagde gebruiker bestaat niet.',
	'NO_USERS'					=> 'De opgevraagde gebruikers bestaan niet (meer).',
	'NO_USER_SPECIFIED'			=> 'Er is geen gebruikersnaam opgegeven.',

	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> 'Geen berichten in de wachtrij',		// 0
		1			=> '1 bericht in de wachtrij',			// 1
		2			=> '%d berichten in de wachtrij',		// 2+
	),

	'OCCUPATION'				=> 'Beroep',
	'OFFLINE'					=> 'Offline',
	'ONLINE'					=> 'Online',
	'ONLINE_BUDDIES'			=> 'Online contactpersonen',
	'ONLINE_USERS_TOTAL'		=> 'Er zijn in totaal <strong>%d</strong> gebruikers online :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'Er zijn <strong>geen</strong> gebruikers online :: ',
	'ONLINE_USER_TOTAL'			=> 'Er is <strong>%d</strong> gebruiker online :: ',
	'OPTIONS'					=> 'Opties',

	'PAGE_OF'				=> 'Pagina <strong>%1$d</strong> van <strong>%2$d</strong>',
	'PASSWORD'				=> 'Wachtwoord',
	'PIXEL'					=> 'px',
	'PLAY_QUICKTIME_FILE'	=> 'Speel Quicktime-bestand',
	'PM'					=> 'PB',
	'PM_REPORTED'			=> 'Klik om de melding te openen',
	'POSTING_MESSAGE'		=> 'Bericht plaatsen in %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'Stuur privébericht',
	'POST'					=> 'Bericht',
	'POST_ANNOUNCEMENT'		=> 'Mededeling',
	'POST_STICKY'			=> 'Sticky',
	'POSTED'				=> 'Geplaatst',
	'POSTED_IN_FORUM'		=> 'in',
	'POSTED_ON_DATE'		=> 'op',
	'POSTS'					=> 'Berichten',
	'POSTS_UNAPPROVED'		=> 'Tenminste één bericht in dit onderwerp is niet goedgekeurd',
	'POST_BY_AUTHOR'		=> 'door',
	'POST_BY_FOE'			=> 'Dit bericht is geplaatst door <strong>%1$s</strong>, deze gebruiker zit momenteel in je vijandenlijst. %2$sToon dit bericht%3$s.',
	'POST_DAY'				=> '%.2f berichten per dag',
	'POST_DETAILS'			=> 'Berichtdetails',
	'POST_NEW_TOPIC'		=> 'Plaats een nieuw onderwerp',
	'POST_PCT'				=> '%.2f%% van alle berichten',
	'POST_PCT_ACTIVE'		=> '%.2f%% van zijn/haar berichten',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% van jouw berichten',
	'POST_REPLY'			=> 'Plaats een reactie',
	'POST_REPORTED'			=> 'Klik om de melding te openen',
	'POST_SUBJECT'			=> 'Berichttitel',
	'POST_TIME'				=> 'Berichtdatum',
	'POST_TOPIC'			=> 'Plaats een nieuw bericht',
	'POST_UNAPPROVED'		=> 'Dit bericht wacht op goedkeuring',
	'PREVIEW'				=> 'Voorbeeld',
	'PREVIOUS'				=> 'Vorige',		// Used in pagination
	'PREVIOUS_STEP'			=> 'Vorige',
	'PRIVACY'				=> 'Privacybeleid',
	'PRIVATE_MESSAGE'		=> 'Privébericht',
	'PRIVATE_MESSAGES'		=> 'Privéberichten',
	'PRIVATE_MESSAGING'		=> 'Privéberichten',
	'PROFILE'				=> 'Gebruikerspaneel',

	'READING_FORUM'				=> 'Onderwerpen tonen uit %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'Globale mededeling lezen',
	'READING_LINK'				=> 'Volgen van forumlink %s',
	'READING_TOPIC'				=> 'Onderwerp lezen uit %s',
	'READ_PROFILE'				=> 'Profiel',
	'REASON'					=> 'Reden',
	'RECORD_ONLINE_USERS'		=> 'Het grootst aantal gebruikers online was <strong>%1$s</strong> op %2$s',
	'REDIRECT'					=> 'Doorsturen',
	'REDIRECTS'					=> 'Totaal aantal verwijzingen',
	'REGISTER'					=> 'Registreren',
	'REGISTERED_USERS'			=> 'Geregistreerde gebruikers:',
	'REG_USERS_ONLINE'			=> 'Er zijn %d geregistreerde gebruikers en ',
	'REG_USERS_TOTAL'			=> '%d geregistreerde, ',
	'REG_USERS_TOTAL_AND'		=> '%d geregistreerde en ',
	'REG_USERS_ZERO_ONLINE'		=> 'Er zijn 0 geregistreerde gebruikers en ',
	'REG_USERS_ZERO_TOTAL'		=> '0 geregistreerde, ',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 geregistreerde en ',
	'REG_USER_ONLINE'			=> 'Er is %d geregistreerde gebruiker en ',
	'REG_USER_TOTAL'			=> '%d geregistreerde, ',
	'REG_USER_TOTAL_AND'		=> '%d geregistreerde en ',
	'REMOVE'					=> 'Verwijder',
	'REMOVE_INSTALL'			=> 'Verwijder of hernoem de installatiemap voordat je het forum in gebruik neemt. Zolang je dit niet doet zal alleen het beheerderspaneel bereikbaar zijn.',
	'REPLIES'					=> 'Reacties',
	'REPLY_WITH_QUOTE'			=> 'Antwoord met een citaat',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Antwoorden op een globale mededeling',
	'REPLYING_MESSAGE'			=> 'Antwoorden op een bericht uit %s',
	'REPORT_BY'					=> 'Melding door',
	'REPORT_POST'				=> 'Meld dit bericht',
	'REPORTING_POST'			=> 'Bericht gemeld',
	'RESEND_ACTIVATION'			=> 'Verzend activatie e-mail opnieuw',
	'RESET'						=> 'Reset',
	'RESTORE_PERMISSIONS'		=> 'Permissies herstellen',
	'RETURN_INDEX'				=> '%sKeer terug naar het forumoverzicht%s',
	'RETURN_FORUM'				=> '%sKeer terug naar het laatst geopende forum%s',
	'RETURN_PAGE'				=> '%sKeer terug naar de vorige pagina%s',
	'RETURN_TOPIC'				=> '%sKeer terug naar het laatst gelezen onderwerp%s',
	'RETURN_TO'					=> 'Keer terug naar',
	'FEED'						=> 'Feed',
	'FEED_NEWS'					=> 'Nieuws',
	'FEED_TOPICS_ACTIVE'		=> 'Actieve onderwerpen',
	'FEED_TOPICS_NEW'			=> 'Nieuwe onderwerpen',
	'RULES_ATTACH_CAN'			=> 'Je <strong>mag</strong> bijlagen toevoegen in dit forum',
	'RULES_ATTACH_CANNOT'		=> 'Je <strong>mag geen</strong> bijlagen toevoegen in dit forum',
	'RULES_DELETE_CAN'			=> 'Je <strong>mag</strong> je berichten uit dit forum verwijderen',
	'RULES_DELETE_CANNOT'		=> 'Je <strong>mag</strong> je berichten <strong>niet</strong> uit dit forum verwijderen',
	'RULES_DOWNLOAD_CAN'		=> 'Je <strong>mag</strong> bijlagen uit dit forum downloaden',
	'RULES_DOWNLOAD_CANNOT'		=> 'Je <strong>mag geen</strong> bijlagen uit dit forum downloaden',
	'RULES_EDIT_CAN'			=> 'Je <strong>mag</strong> je berichten in dit forum wijzigen',
	'RULES_EDIT_CANNOT'			=> 'Je <strong>mag</strong> je berichten in dit forum <strong>niet</strong> wijzigen',
	'RULES_LOCK_CAN'			=> 'Je <strong>mag</strong> je berichten in dit forum sluiten',
	'RULES_LOCK_CANNOT'			=> 'Je <strong>mag</strong> je berichten in dit forum <strong>niet</strong> sluiten',
	'RULES_POST_CAN'			=> 'Je <strong>mag</strong> nieuwe onderwerpen in dit forum plaatsen',
	'RULES_POST_CANNOT'			=> 'Je <strong>mag geen</strong> nieuwe onderwerpen in dit forum plaatsen',
	'RULES_REPLY_CAN'			=> 'Je <strong>mag</strong> antwoorden op een onderwerp in dit forum',
	'RULES_REPLY_CANNOT'		=> 'Je <strong>mag niet</strong> antwoorden op een onderwerp in dit forum',
	'RULES_VOTE_CAN'			=> 'Je <strong>mag</strong> stemmen op poll’s in dit forum',
	'RULES_VOTE_CANNOT'			=> 'Je <strong>mag niet</strong> stemmen op poll’s in dit forum',

	'SEARCH'					=> 'Zoeken',
	'SEARCH_MINI'				=> 'Zoek…',
	'SEARCH_ADV'				=> 'Uitgebreid zoeken',
	'SEARCH_ADV_EXPLAIN'		=> 'Toon de geavanceerde zoekopties',
	'SEARCH_KEYWORDS'			=> 'Zoek naar trefwoorden',
	'SEARCHING_FORUMS'			=> 'Zoeken in forums',
	'SEARCH_ACTIVE_TOPICS'		=> 'Toon actieve onderwerpen',
	'SEARCH_FOR'				=> 'Zoek naar',
	'SEARCH_FORUM'				=> 'Doorzoek forum',
	'SEARCH_NEW'				=> 'Toon nieuwe berichten',
	'SEARCH_POSTS_BY'			=> 'Doorzoek berichten bij',
	'SEARCH_SELF'				=> 'Toon je eigen berichten',
	'SEARCH_TOPIC'				=> 'Doorzoek dit onderwerp',
	'SEARCH_UNANSWERED'			=> 'Toon onbeantwoorde berichten',
	'SEARCH_UNREAD'				=> 'Toon ongelezen berichten',
	'SECONDS'					=> 'Seconden',
	'SELECT'					=> 'Selecteer',
	'SELECT_ALL_CODE'			=> 'Selecteer alles',
	'SELECT_DESTINATION_FORUM'	=> 'Selecteer het doelforum',
	'SELECT_FORUM'				=> 'Selecteer een forum',
	'SEND_EMAIL'				=> 'E-mail',				// Used for submit buttons
	'SEND_EMAIL_USER'			=> 'E-mail',				// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX
	'SEND_PRIVATE_MESSAGE'		=> 'Stuur privébericht',
	'SETTINGS'					=> 'Instellingen',
	'SIGNATURE'					=> 'Onderschrift',
	'SKIP'						=> 'Doorgaan naar inhoud',
	'SMTP_NO_AUTH_SUPPORT'		=> 'De SMTP-server ondersteunt het inloggen niet',
	'SORRY_AUTH_READ'			=> 'Je beschikt niet over de nodige permissies om dit forum te lezen',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'Je beschikt niet over de nodige permissies om deze bijlage te downloaden',
	'SORT_BY'					=> 'Sorteer op',
	'SORT_JOINED'				=> 'Geregistreerd op',
	'SORT_LOCATION'				=> 'Woonplaats',
	'SORT_RANK'					=> 'Rang',
	'SORT_POSTS'				=> 'Berichten',
	'SORT_TOPIC_TITLE'			=> 'Titel',
	'SORT_USERNAME'				=> 'Gebruikersnaam',
	'SPLIT_TOPIC'				=> 'Splits onderwerp',
	'SQL_ERROR_OCCURRED'		=> 'Een SQL-fout deed zich voor tijdens het samenstellen van deze pagina. Contacteer de %sbeheerder%s als dit probleem zich blijft voordoen.',
	'STATISTICS'				=> 'Statistieken',
	'START_WATCHING_FORUM'		=> 'Abonneer op dit forum',
	'START_WATCHING_TOPIC'		=> 'Abonneer op dit onderwerp',
	'STOP_WATCHING_FORUM'		=> 'Geen abonnement meer op dit forum',
	'STOP_WATCHING_TOPIC'		=> 'Geen abonnement meer op dit onderwerp',
	'SUBFORUM'					=> 'Subforum',
	'SUBFORUMS'					=> 'Subforums',
	'SUBJECT'					=> 'Onderwerp',
	'SUBMIT'					=> 'Bevestig',

	'TERMS_USE'			=> 'Gebruikersvoorwaarden',
	'TEST_CONNECTION'	=> 'Verbinding testen',
	'THE_TEAM'			=> 'Het team',
	'TIME'				=> 'Tijd',

	'TOO_LARGE'						=> 'De door jou ingevoerde waarde is te groot.',
	'TOO_LARGE_MAX_RECIPIENTS'		=> 'De door jou ingevoerde waarde van de <strong>Maximaal aantal ontvangers per privébericht</strong> instelling is te groot.',

	'TOO_LONG'						=> 'De ingevoerde waarde is te lang.',

	'TOO_LONG_AIM'					=> 'De opgegeven schermnaam is te lang.',
	'TOO_LONG_CONFIRM_CODE'			=> 'De opgegeven bevestigingscode is te lang.',
	'TOO_LONG_DATEFORMAT'			=> 'Het opgegeven datumformaat is te lang.',
	'TOO_LONG_ICQ'					=> 'Het opgegeven ICQ-nummer is te lang.',
	'TOO_LONG_INTERESTS'			=> 'De opgegeven interesses zijn te lang.',
	'TOO_LONG_JABBER'				=> 'Het opgegeven Jabber-adres is te lang.',
	'TOO_LONG_LOCATION'				=> 'De opgegeven woonplaats is te lang.',
	'TOO_LONG_MSN'					=> 'Het opgegeven MSN-adres is te lang.',
	'TOO_LONG_NEW_PASSWORD'			=> 'Het opgegeven wachtwoord is te lang.',
	'TOO_LONG_OCCUPATION'			=> 'Het opgegeven beroep is te lang.',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'De opgegeven wachtwoordbevestiging is te lang.',
	'TOO_LONG_USER_PASSWORD'		=> 'Het opgegeven wachtwoord is te lang.',
	'TOO_LONG_USERNAME'				=> 'De opgegeven gebruikersnaam is te lang.',
	'TOO_LONG_EMAIL'				=> 'Het opgegeven e-mailadres is te lang.',
	'TOO_LONG_EMAIL_CONFIRM'		=> 'De opgegeven e-mailadresbevestiging is te lang.',
	'TOO_LONG_WEBSITE'				=> 'De opgegeven website is te lang.',
	'TOO_LONG_YIM'					=> 'Het opgegeven Yahoo-adres is te lang.',

	'TOO_MANY_VOTE_OPTIONS'			=> 'Je probeerde op te veel opties te stemmen.',

	'TOO_SHORT'						=> 'De ingevoerde waarde is te kort.',

	'TOO_SHORT_AIM'					=> 'De opgegeven schermnaam is te kort.',
	'TOO_SHORT_CONFIRM_CODE'		=> 'De opgegeven bevestigingscode is te kort.',
	'TOO_SHORT_DATEFORMAT'			=> 'Het opgegeven datumformaat is te kort.',
	'TOO_SHORT_ICQ'					=> 'Het opgegeven ICQ-nummer is te kort.',
	'TOO_SHORT_INTERESTS'			=> 'De opgegeven interesses zijn te kort.',
	'TOO_SHORT_JABBER'				=> 'Het opgegeven Jabber-adres is te kort.',
	'TOO_SHORT_LOCATION'			=> 'De opgegeven woonplaats is te kort.',
	'TOO_SHORT_MSN'					=> 'Het opgegeven MSN-adres is te kort.',
	'TOO_SHORT_NEW_PASSWORD'		=> 'Het opgegeven wachtwoord is te kort.',
	'TOO_SHORT_OCCUPATION'			=> 'Het opgegeven beroep is te kort.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'De opgegeven wachtwoordbevestiging is te kort.',
	'TOO_SHORT_USER_PASSWORD'		=> 'Het opgegeven wachtwoord is te kort.',
	'TOO_SHORT_USERNAME'			=> 'De opgegeven gebruikersnaam is te kort.',
	'TOO_SHORT_EMAIL'				=> 'Het opgegeven e-mailadres is te kort.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'De opgegeven e-mailadresbevestiging is te kort.',
	'TOO_SHORT_WEBSITE'				=> 'De opgegeven website is te kort.',
	'TOO_SHORT_YIM'					=> 'Het opgegeven Yahoo-adres is te kort.',

	'TOO_SMALL'						=> 'De door jou ingevoerde waarde is te klein.',
	'TOO_SMALL_MAX_RECIPIENTS'		=> 'De door jou ingevoerde waarde van de <strong>Maximaal aantal ontvangers per privébericht</strong> instelling is te klein.',

	'TOPIC'				=> 'Onderwerp',
	'TOPICS'			=> 'Onderwerpen',
	'TOPICS_UNAPPROVED'	=> 'Ten minste één onderwerp uit dit forum is niet goedgekeurd.',
	'TOPIC_ICON'		=> 'Onderwerpsymbool',
	'TOPIC_LOCKED'		=> 'Dit onderwerp is gesloten, je kunt geen berichten wijzigen of nieuwe antwoorden plaatsen',
	'TOPIC_LOCKED_SHORT'=> 'Gesloten onderwerp',
	'TOPIC_MOVED'		=> 'Verplaatst onderwerp',
	'TOPIC_REVIEW'		=> 'Voorafgaande berichten',
	'TOPIC_TITLE'		=> 'Titel',
	'TOPIC_UNAPPROVED'	=> 'Dit onderwerp is niet goedgekeurd',
	'TOTAL_ATTACHMENTS'	=> 'Bijlage(n)',
	'TOTAL_LOG'			=> '1 log',
	'TOTAL_LOGS'		=> '%d logs',
	'TOTAL_NO_PM'		=> '0 privéberichten in totaal',
	'TOTAL_PM'			=> '1 privébericht in totaal',
	'TOTAL_PMS'			=> '$d privéberichten in totaal',
	'TOTAL_POSTS'		=> 'Totaal aantal berichten',
	'TOTAL_POSTS_OTHER'	=> 'Totaal aantal berichten <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> 'Totaal aantal berichten <strong>0</strong>',
	'TOPIC_REPORTED'	=> 'Dit onderwerp is gemeld',
	'TOTAL_TOPICS_OTHER'=> 'Totaal aantal onderwerpen <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'Totaal aantal onderwerpen <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> 'Totaal aantal leden <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> 'Totaal aantal leden <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'Getraceerde PHP-fouten: %s',

	'UNABLE_GET_IMAGE_SIZE'	=> 'De afbeelding kan niet worden geopend, of het is geen geldige afbeelding.',
	'UNABLE_TO_DELIVER_FILE'=> 'Het bestand kan niet worden afgeleverd.',
	'UNKNOWN_BROWSER'		=> 'Onbekende browser',
	'UNMARK_ALL'			=> 'Deselecteer alles',
	'UNREAD_MESSAGES'		=> 'Ongelezen berichten',
	'UNREAD_PM'				=> '<strong>%d</strong> ongelezen bericht',
	'UNREAD_PMS'			=> '<strong>%d</strong> ongelezen berichten',
	'UNREAD_POST'			=> 'Ongelezen bericht',
	'UNREAD_POSTS'			=> 'Ongelezen berichten',
	'UNWATCHED_FORUMS'			=> 'Je bent niet langer op de aangegeven forums geabonneerd.',
	'UNWATCHED_TOPICS'			=> 'Je bent niet langer op de geselecteerde onderwerpen geabonneerd.',
	'UNWATCHED_FORUMS_TOPICS'	=> 'Je bent niet langer op de geselecteerde items geabonneerd.',
	'UPDATE'				=> 'Wijzigen',
	'UPLOAD_IN_PROGRESS'	=> 'Bezig met uploaden',
	'URL_REDIRECT'			=> 'Als je browser geen meta-doorsturingen ondersteunt, klik dan %sHIER%s om te worden doorgestuurd.',
	'USERGROUPS'			=> 'Groepen',
	'USERNAME'				=> 'Gebruikersnaam',
	'USERNAMES'				=> 'Gebruikersnamen',
	'USER_AVATAR'			=> 'Avatar gebruiker',
	'USER_CANNOT_READ'		=> 'Je mag de berichten in dit forum niet lezen',
	'USER_POST'				=> '%d bericht',
	'USER_POSTS'			=> '%d berichten',
	'USERS'					=> 'Gebruikers',
	'USE_PERMISSIONS'		=> 'Test de gebruikerspermissies',

	'USER_NEW_PERMISSION_DISALLOWED'	=> 'Helaas, maar het is je niet toegestaan om deze functie te gebruiken. Je dient te zijn geregistreerd en moet mogelijk meer posten om deze functie te mogen gebruiken.',

	'VARIANT_DATE_SEPARATOR'	=> '-',
	'VIEWED'					=> 'Bekeken',
	'VIEWING_FAQ'				=> 'Bekijkt help',
	'VIEWING_MEMBERS'			=> 'Bekijkt liddetails',
	'VIEWING_ONLINE'			=> 'Bekijkt wie er online is',
	'VIEWING_MCP'				=> 'Bekijkt moderatorpaneel',
	'VIEWING_MEMBER_PROFILE'	=> 'Bekijkt profiel van een lid',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Leest privéberichten',
	'VIEWING_REGISTER'			=> 'Registreert een account',
	'VIEWING_UCP'				=> 'Bekijkt gebruikerspaneel',
	'VIEWS'						=> 'Bekeken',
	'VIEW_BOOKMARKS'			=> 'Bekijkt bladwijzers',
	'VIEW_FORUM_LOGS'			=> 'Bekijk logs',
	'VIEW_LATEST_POST'			=> 'Bekijk laatste bericht',
	'VIEW_NEWEST_POST'			=> 'Bekijk eerste ongelezen bericht',
	'VIEW_NOTES'				=> 'Bekijk gebruikersnotities',
	'VIEW_ONLINE_TIME'			=> 'gebaseerd op de gebruikers die de laatste minuut actief waren',
	'VIEW_ONLINE_TIMES'			=> 'gebaseerd op de gebruikers die de laatste %d minuten actief waren',
	'VIEW_TOPIC'				=> 'Toon onderwerp',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Mededeling: ',
	'VIEW_TOPIC_GLOBAL'			=> 'Globale mededeling: ',
	'VIEW_TOPIC_LOCKED'			=> 'Gesloten: ',
	'VIEW_TOPIC_LOGS'			=> 'Bekijk logs',
	'VIEW_TOPIC_MOVED'			=> 'Verplaatst: ',
	'VIEW_TOPIC_POLL'			=> 'Poll: ',
	'VIEW_TOPIC_STICKY'			=> 'Sticky: ',
	'VISIT_WEBSITE'				=> 'Bezoek website',

	'WARNINGS'			=> 'Waarschuwingen',
	'WARN_USER'			=> 'Waarschuw gebruiker',
	'WELCOME_SUBJECT'	=> 'Welkom bij de %s forums',
	'WEBSITE'			=> 'Website',
	'WHOIS'				=> 'Whois',
	'WHO_IS_ONLINE'		=> 'Wie is er online',
	'WRONG_PASSWORD'	=> 'Het opgegeven wachtwoord is onjuist.',

	'WRONG_DATA_ICQ'			=> 'Het opgegeven ICQ-nummer is ongeldig.',
	'WRONG_DATA_JABBER'			=> 'Het opgegeven Jabber-adres is ongeldig.',
	'WRONG_DATA_LANG'			=> 'De opgegeven taal is ongeldig.',
	'WRONG_DATA_WEBSITE'		=> 'Het websiteadres moet een geldige url zijn, inclusief het protocol. Bijvoorbeeld http://www.voorbeeld.be/',
	'WROTE'						=> 'schreef',

	'YEAR'				=> 'Jaar',
	'YEAR_MONTH_DAY'	=> '(JJJJ-MM-DD)',
	'YES'				=> 'Ja',
	'YIM'				=> 'YIM',
	'YOU_LAST_VISIT'	=> 'Je laatste bezoek was op %s',
	'YOU_NEW_PM'		=> 'Je hebt een nieuw privébericht in je Postvak IN',
	'YOU_NEW_PMS'		=> 'Je hebt nieuwe privéberichten in je Postvak IN',
	'YOU_NO_NEW_PM'		=> 'Er zijn geen nieuwe privéberichten',

	'datetime'			=> array(
		'TODAY'		=> 'vandaag',
		'TOMORROW'	=> 'morgen',
		'YESTERDAY'	=> 'gisteren',
		'AGO'		=> array(
			0		=> 'minder dan een minuut geleden',
			1		=> '%d minuut geleden',
			2		=> '%d minuten geleden',
			60		=> '1 uur geleden',
		),

		'Sunday'	=> 'zondag',
		'Monday'	=> 'maandag',
		'Tuesday'	=> 'dinsdag',
		'Wednesday'	=> 'woensdag',
		'Thursday'	=> 'donderdag',
		'Friday'	=> 'vrijdag',
		'Saturday'	=> 'zaterdag',

		'Sun'		=> 'zo',
		'Mon'		=> 'ma',
		'Tue'		=> 'di',
		'Wed'		=> 'wo',
		'Thu'		=> 'do',
		'Fri'		=> 'vr',
		'Sat'		=> 'za',

		'January'	=> 'januari',
		'February'	=> 'februari',
		'March'		=> 'maart',
		'April'		=> 'april',
		'May'		=> 'mei',
		'June'		=> 'juni',
		'July'		=> 'juli',
		'August'	=> 'augustus',
		'September'	=> 'september',
		'October'	=> 'oktober',
		'November'	=> 'november',
		'December'	=> 'december',

		'Jan'		=> 'jan',
		'Feb'		=> 'feb',
		'Mar'		=> 'maart',
		'Apr'		=> 'apr',
		'May_short'	=> 'mei',	// Short representation of "May". May_short used because in english the short and long date are the same for May.
		'Jun'		=> 'jun',
		'Jul'		=> 'jul',
		'Aug'		=> 'aug',
		'Sep'		=> 'sep',
		'Oct'		=> 'okt',
		'Nov'		=> 'nov',
		'Dec'		=> 'dec',
	),

	'tz'				=> array(
		'-12'	=> 'GMT - 12 uur',
		'-11'	=> 'GMT - 11 uur',
		'-10'	=> 'GMT - 10 uur',
		'-9.5'	=> 'GMT - 9:30 uur',
		'-9'	=> 'GMT - 9 uur',
		'-8'	=> 'GMT - 8 uur',
		'-7'	=> 'GMT - 7 uur',
		'-6'	=> 'GMT - 6 uur',
		'-5'	=> 'GMT - 5 uur',
		'-4.5'	=> 'GMT - 4:30 uur',
		'-4'	=> 'GMT - 4 uur',
		'-3.5'	=> 'GMT - 3:30 uur',
		'-3'	=> 'GMT - 3 uur',
		'-2'	=> 'GMT - 2 uur',
		'-1'	=> 'GMT - 1 uur',
		'0'		=> 'GMT',
		'1'		=> 'GMT + 1 uur',
		'2'		=> 'GMT + 2 uur',
		'3'		=> 'GMT + 3 uur',
		'3.5'	=> 'GMT + 3:30 uur',
		'4'		=> 'GMT + 4 uur',
		'4.5'	=> 'GMT + 4:30 uur',
		'5'		=> 'GMT + 5 uur',
		'5.5'	=> 'GMT + 5:30 uur',
		'5.75'	=> 'GMT + 5:45 uur',
		'6'		=> 'GMT + 6 uur',
		'6.5'	=> 'GMT + 6:30 uur',
		'7'		=> 'GMT + 7 uur',
		'8'		=> 'GMT + 8 uur',
		'8.75'	=> 'GMT + 8:45 uur',
		'9'		=> 'GMT + 9 uur',
		'9.5'	=> 'GMT + 9:30 uur',
		'10'	=> 'GMT + 10 uur',
		'10.5'	=> 'GMT + 10:30 uur',
		'11'	=> 'GMT + 11 uur',
		'11.5'	=> 'GMT + 11:30 uur',
		'12'	=> 'GMT + 12 uur',
		'12.75'	=> 'GMT + 12:45 uur',
		'13'	=> 'GMT + 13 uur',
		'14'	=> 'GMT + 14 uur',
		'dst'	=> '[ Zomertijd ]',
	),

	'tz_zones'	=> array(
		'-19'	=> '[GMT - 199] Pluto tijd',
		'-12'	=> '[GMT - 12, Y] Bakereiland tijd',
		'-11'	=> '[GMT - 11, X] Niue tijd, Samoa tijd',
		'-10'	=> '[GMT - 10, W] Hawaïaanse standaardtijd, Cookeilanden tijd',
		'-9.5'	=> '[GMT - 9:30, V*] Marquesaseilanden tijd',
		'-9'	=> '[GMT - 9, V] Alaska standaard tijd, Gambier Eilanden tijd',
		'-8'	=> '[GMT - 8, U] De Stille Oceaan standaardtijd',
		'-7'	=> '[GMT - 7, T] Mountain standaardtijd',
		'-6'	=> '[GMT - 6, S] Centrale standaardtijd',
		'-5'	=> '[GMT - 5, R] Oostelijke standaardtijd',
		'-4.5'	=> '[GMT - 4:30, Q*] Venezulaanse standaardtijd',
		'-4'	=> '[GMT - 4, Q] Atlantische standaardtijd',
		'-3.5'	=> '[GMT - 3:30, P*] Newfoundland standaardtijd',
		'-3'	=> '[GMT - 3, P] Amazone standaardtijd, Centraal Groenland tijd',
		'-2'	=> '[GMT - 2, O] Fernando de Noronha tijd, Zuid Georgia & de Zuid Sandwich Eilanden tijd',
		'-1'	=> '[GMT - 1, N] Azoren standaard tijd, Cape Verde tijd, Oost Groenland tijd',
		'0'		=> '[GMT, Z] West Europese tijd, Greenwich Mean Time',
		'1'		=> '[GMT + 1, A] Centraal Europese tijd, West Afrikaanse tijd',
		'2'		=> '[GMT + 2, B] Oost-Europese tijd, Centraal Afrikaanse tijd',
		'3'		=> '[GMT + 3, C] Moskou standaardtijd, Oost Afrikaanse tijd',
		'3.5'	=> '[GMT + 3:30, C*] Iran standaardtijd',
		'4'		=> '[GMT + 4, D] Verenigde Arabische Emiraten standaardtijd',
		'4.5'	=> '[GMT + 4:30, D*] Afghaanse tijd',
		'5'		=> '[GMT + 5, E] Pakistaanse standaardtijd, Jekaterinenburg standaardtijd',
		'5.5'	=> '[GMT + 5:30, E*] Indiaanse standaardtijd, Sri Lanka tijd',
		'5.75'	=> '[GMT + 5:45, E‡] Nepal tijd',
		'6'		=> '[GMT + 6, F] Bangladesh tijd, Bhutan tijd, Novosibirsk standaardtijd',
		'6.5'	=> '[GMT + 6:30, F*] Kokoseilanden tijd, Myanmar tijd',
		'7'		=> '[GMT + 7, G] Indonesische tijd, Cambodje standaardtijd',
		'8'		=> '[GMT + 8, H] Chinese standaardtijd, West Australische standaardtijd',
		'8.75'	=> '[GMT + 8:45, H‡] Zuidoostelijke West Australische standaardtijd',
		'9'		=> '[GMT + 9, I] Japan standaardtijd, Korea standaardtijd',
		'9.5'	=> '[GMT + 9:30, I*] Centraal Australische standaardtijd',
		'10'	=> '[GMT + 10, K] Oost Australische standaardtijd, Vladivostok standaardtijd',
		'10.5'	=> '[GMT + 10:30, K*] Lord Howe Eiland standaardtijd',
		'11'	=> '[GMT + 11, L] Salomonseilanden tijd',
		'11.5'	=> '[GMT + 11:30, L*] Norfolk Eiland tijd',
		'12'	=> '[GMT + 12, M] Nieuw-Zeeland tijd, Fiji tijd',
		'12.75'	=> '[GMT + 12:45, M‡] Chatham Eilanden tijd',
		'13'	=> '[GMT + 13, M*] Tonga tijd, Phoenix Eilanden tijd',
		'14'	=> '[GMT + 14, M‡] Line Eilanden tijd',
		'19'	=> '[GMT + 199] Mercury  tijd',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'|d M Y| H:i'		=> '10 jan 2005 17:54 [Relatieve dagen]',
		'd M Y, H:i'		=> '10 jan 2005, 17:57',
		'd M Y H:i'			=> '10 jan 2005 17:57',
		'D M d, Y g:i a'	=> 'ma jan 10, 2005 5:57 pm',
		'M j, y, H:i'		=> 'jan 10, 05, 5:57 pm',
		'F j, Y, g:i a'		=> 'januari 10, 2005, 5:57 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D d M Y, H:i', // ma 10 jan 2005 17:57

));

/*
* Portal XL related language definitions
*/

// Portal
$lang = array_merge($lang, array(
    'PORTAL_MODS'			=> 'Modsdatabank',	
));

// [img] Resize Width Images
$lang = array_merge($lang, array(
	'IMG_CLICK_HERE'	=> 'Klik hier om het plaatje op volle grootte weer te geven!',
));

// Event Calendar
$lang = array_merge($lang, array(
	'CALENDAR'		=> 'Kalender',
	// minical short day names	
	'mini_datetime'	=> array(
		  'Su'		=> 'Zo',
		  'Mo'		=> 'Ma',
		  'Tu'		=> 'Di',
		  'We'		=> 'Wo',
		  'Th'		=> 'Do',
		  'Fr'		=> 'Vr',
		  'Sa'		=> 'Za',
	),
));

// Animate Digits IP Tracking Counter
$lang = array_merge($lang, array(
	'COUNTER' 			=> 'Bezoekenteller',
	'COUNTER_STARTDATE' => 'Bijgehouden sinds %s',
	'HITS_PER_DAY'		=> 'Hits per dag',
	'HITS_PER_HOUR'		=> 'Hits per uur',
	'HITS_PER_MONTH'	=> 'Hits per maand',
	'HITS_PER_USER'		=> 'Hits per Gebruiker',
	'HITS_PER_WEEK'		=> 'Hits per week',
	'HITS_PER_YEAR'		=> 'Hits per jaar',
	'IP_TRACKING_NO' 	=> '[Opsporen IP uit]',
	'IP_TRACKING_YES' 	=> '[Opsporen IP aan]',
));

// Knowledge Base
$lang = array_merge($lang, array(
	'KNOWLEDGE_BASE'	=> 'Kennisbank',
	'KBASE'				=> 'Kennisbank',
));

// Anti Bot Question
$lang = array_merge($lang, array(
	'AB_QUESTION_EXPLAIN'	=> 'Om spam te voorkomen, beantwoord de bovenstaande vraag.',
));

// start Thank Post MOD
$lang = array_merge($lang, array(
	'REMOVE_THANKS'			=> 'Verwijder je bedankt voor ',
	'THANK_POST1'			=> 'Dank ',
	'THANK_POST2'			=> '\'s bericht',
	'THANK_TEXT_1'			=> 'Het volgende',
	'THANK_TEXT_2'			=> 'gebruiker wil zich bedanken bij',
	'THANK_TEXT_2pl'		=> 'gebruikers willen zich bedanken bij',
	'THANK_GENDER_F'		=> 'voor haar bericht',
	'THANK_GENDER_M'		=> 'voor zijn bericht',
	'THANK_GENDER_U'		=> 'voor haar/zijn bericht',
	'RECEIVED'				=> 'Ontvangen',
	'THANKS'				=> 'dank je',
	'GIVEN'					=> 'Gegeven',
	'TP_UPDATED'			=> 'Je bedanktmod is successvol geactualiseerd!',
));
// end Thank Post MOD

// Posts per day
$lang = array_merge($lang, array(
	'POSTS_PER_DAY_OTHER'	=> 'Berichten per dag <strong>%.2f</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Berichten per dag <strong>Geen</strong>',
));

// Announcements Centre
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TITLE_GUESTS'		=> 'Gastenadvertentie locaal',
	'ANNOUNCEMENT_TITLE'			=> 'Forumadvertentie locaal',
));

// Portal FAQ
$lang = array_merge($lang, array(
	'FAQ_PORTAL'				=> 'Portaal FAQ',
	'FAQ_PORTAL_EXPLAIN'		=> 'Portaal veel gestelde vragen',
));

// Rules page
$lang = array_merge($lang, array(
	'RULES_PAGE'				=> 'Forumregels',
	'RULES'						=> 'Regels',
));

// Similar Topics 1.0.0
$lang = array_merge($lang, array(
	'SIMILAR_TOPICS'			=> 'Gelijkluidende onderwerpen',
));

/*
 * Welcome PM on First Login (WPM)
 * By DualFusion
 */
$lang = array_merge($lang, array(
	'ACP_WELCOME_PM'		=> 'Welkom PM bij eerste login',
	'LOG_CONFIG_WELCOME_PM'	=> '<strong>Bijgewerkte Welkom PM instellingen</strong>',
));
/* End WPM */

//-- mod : Contact board administration ------------------------------------------------------------
//-- add
$lang = array_merge($lang, array(
	'CONTACT_BOARD_ADMIN'		=> 'Contacteer de beheerder',
	'CONTACT_BOARD_ADMIN_SHORT'	=> 'Contact',
));
//-- fin mod : Contact board administration --------------------------------------------------------

// start mod view or mark unread posts
$lang = array_merge($lang, array(
	'LOGIN_EXPLAIN_VIEWUNREADS'	=> 'Je dient ingelogd te zijn om de lijst van ongelezen berichten te kunnen bekijken',
	'MARK_PM_UNREAD'			=> 'Markeer pm als ongelezen',
	'MARK_POST_UNREAD'			=> 'Markeer bericht als ongelezen',
	'NO_UNREADS'				=> 'Je hebt geen ongelezen berichten',
	'PM_MARKED_UNREAD'			=> 'Privebericht gemarkeerd als ongelezen',
	'POST_MARKED_UNREAD'		=> 'Bericht gemarkeerd als ongelezen',
	'RETURN_INBOX'				=> 'Terug naar PM inbox',
	'VIEW_UNREAD_PMS'			=> 'Bekijk ongelezen PMs',
	'VIEW_UNREADS'				=> 'Bekijk ongelezen berichten',
));
// end mod view or mark unread posts

// Character Countdown
$lang = array_merge($lang, array(
	'CHARACTERS_COUNT_DOWN'			=> 'Ingegeven characters:',
));

// www.phpBB-SEO.com SEO TOOLKIT BEGIN - TITLE
$lang['Page'] = 'Page ';
// www.phpBB-SEO.com SEO TOOLKIT END - TITLE
// www.phpBB-SEO.com SEO TOOLKIT BEGIN -> GYM Sitemaps
$lang = array_merge($lang, array(
	'GYM_LINKS' => 'Links',
	'GYM_LINK' => 'Link',
	'GYM_RSS_SLIDE_START' => 'Start scroller',
	'GYM_RSS_SLIDE_STOP' => 'Stop scroller',
	'GYM_RSS_SOURCE' => 'Source',
));
// www.phpBB-SEO.com SEO TOOLKIT END -> GYM Sitemaps
// www.phpBB-SEO.com SEO TOOLKIT BEGIN - Related Topics
$lang['RELATED_TOPICS'] = 'Related topics';
// www.phpBB-SEO.com SEO TOOLKIT END - Related Topics

// Radio Mod
$lang = array_merge($lang, array(
	'RADIO' => 'Radio',
));

// phpbb Calendar Version 0.1.0
$lang = array_merge($lang, array(
	'VIEWING_CALENDAR'			=> 'Bekijkt kalender',
	'VIEWING_CALENDAR_DAY'		=> 'Bekijkt kalender dag',
	'VIEWING_CALENDAR_EVENT'	=> 'Bekijkt kalender gebeurtenis',
	'VIEWING_CALENDAR_MONTH'	=> 'Bekijkt kalender maand',
	'VIEWING_CALENDAR_WEEK'		=> 'Bekijkt kalender week',
	'EDITING_CALENDAR_EVENT'	=> 'Bewerken kalender gebeurtenis',
	'CREATING_CALENDAR_EVENT'	=> 'Aanmaken kalender gebeurtenis',
));

// Country Flags Version 3.0.6
$lang = array_merge($lang, array(
	'COUNTRY'			=> 'Land',
	'COUNTRY_FLAGS'		=> 'Landvlaggen',
	'TOO_SHORT_FLAG'	=> 'Je dient de vlag van je land op te geven',
	'GROUP_FLAG'		=> 'Groepvlag',
	'SELECT_FLAG'		=> 'Kies de vlag van je land',
	'SORT_FLAG'			=> 'Landvlag',
	'USER_FLAG'			=> 'Gebruikersvlag',
));

// -- Gender MOD 1.0.1
$lang = array_merge($lang, array(
	'GENDER'			=> 'Geslacht',
	'GENDER_EXPLAIN'	=> 'Geef hier je geslacht op.',
	'GENDER_X'			=> 'Geen opgave',
	'GENDER_M'			=> 'Man',
	'GENDER_F'			=> 'Vrouw',
));

// Google Search
$lang = array_merge($lang, array(
	'SEARCH_GOOGLE' 	=> 'Google zoekopdracht?',
));

// phpBB AJAX Chat
$lang = array_merge($lang, array(
	'SHOUTBOX'		=> 'Chatbox',
	'CHAT_LABEL'	=> 'In Chatbox',
	'CHAT_TITLE'	=> 'Online',
	'CHAT_WINDOW'	=> 'Chatbox als venster',
));

// AdvancedBlockMOD 1.0.3						
$lang = array_merge($lang, array(
	'WRONG_TIMEZONE'	=> 'Foutive tijdzone. Op aarde blijven graag!',
));

// Mod_Share_On by JesusADS
$lang = array_merge($lang, array(
	'SHARE_ON'				=> 'Deel op ...',
	'SHARE_FACEBOOK'		=> 'Facebook',
	'SHARE_TWITTER'			=> 'Twitter',
	'SHARE_ORKUT'			=> 'Orkut',
	'SHARE_DIGG'			=> 'Digg',
	'SHARE_MYSPACE'			=> 'MySpace',
	'SHARE_DELICIOUS'		=> 'Delicious',
	'SHARE_TECHNORATI'		=> 'Technorati',

	'SHARE_ON_FACEBOOK'		=> 'Deel op Facebook',
	'SHARE_ON_TWITTER'		=> 'Deel op Twitter',
	'SHARE_ON_ORKUT'		=> 'Deel op Orkut',
	'SHARE_ON_DIGG'			=> 'Deel op Digg',
	'SHARE_ON_MYSPACE'		=> 'Deel op MySpace',
	'SHARE_ON_DELICIOUS'	=> 'Deel op Delicious',
	'SHARE_ON_TECHNORATI'	=> 'Deel op Technorati',
));

// Toplist MOD 2.0.0RC3						
$lang = array_merge($lang, array(
    'VIEWING_TOPLIST'       => 'Bekijken de Top Sites',
));

?>