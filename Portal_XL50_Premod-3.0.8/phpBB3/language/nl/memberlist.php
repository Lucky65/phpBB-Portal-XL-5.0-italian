<?php
/**
*
* memberlist [Dutch]
*
* @package language
* @version $Id: memberlist.php,v 1.0.0 2006/08/03 19:10:38 grahamje Exp $
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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Profiel',
	'ACTIVE_IN_FORUM'		=> 'Meest actief in forum',
	'ACTIVE_IN_TOPIC'		=> 'Meest actief in onderwerp',
	'ADD_FOE'				=> 'Toevoegen als vijand',
	'ADD_FRIEND'			=> 'Toevoegen als vriend',
	'AFTER'					=> 'Na',

	'ALL'					=> 'Alles',

	'BEFORE'				=> 'Voor',

	'CC_EMAIL'				=> 'Stuur mij een kopie per e-mail.',
	'CONTACT_USER'			=> 'Contact',

	'DEST_LANG'				=> 'Taal',
	'DEST_LANG_EXPLAIN'		=> 'Selecteer een taal (indien beschikbaar) voor de ontvanger van dit bericht.',

	'EMAIL_BODY_EXPLAIN'	=> 'Dit bericht wordt verstuurd in plain tekst. Gebruik daarom geen HTML of BBCode. Het antwoordadres voor dit bericht is je eigen e-mailadres.',
	'EMAIL_DISABLED'		=> 'Alle e-mail gerelateerde functies zijn op dit moment uitgeschakeld.',
	'EMAIL_SENT'			=> 'De e-mail is verzonden.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Dit bericht wordt verstuurd in plain tekst, gebruik daarom geen HTML of BBCode. Het onderwerp is reeds toegevoegd aan het bericht. Het antwoordadres voor dit bericht is je eigen e-mailadres.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Het e-mailadres voor de ontvanger is niet correct ingevuld.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Je hebt nog geen bericht ingevoerd.',
	'EMPTY_MESSAGE_IM'		=> 'Je hebt nog geen bericht ingevoerd.',
	'EMPTY_NAME_EMAIL'		=> 'Je moet de naam van de ontvanger nog opgeven.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Je hebt nog geen onderwerp ingevuld.',
	'EQUAL_TO'				=> 'Gelijk aan',

	'FIND_USERNAME_EXPLAIN'	=> 'Gebruik dit formulier om naar specifieke gebruikers te zoeken. Je hoeft niet alle velden in te vullen. Gebruik de * als joker voor ontbrekende tekens of voor tekens die je niet weet. Als je een datum wilt opgeven, gebruik dan het formaat jjjj-mm-dd, bijvoorbeeld 2009-10-25. Gebruik de checkboxen om een of meerdere gebruikersnamen te selecteren (aantal gebruikers worden geaccepteerd door het formulier zelf) en klik op de selecteer gemarkeerden-button om terug te keren naar het vorige formulier.',
	'FLOOD_EMAIL_LIMIT'		=> 'Je kunt op dit moment geen e-mails meer versturen. Probeer het later nog eens.',

	'GROUP_LEADER'			=> 'Groepsleider',

	'HIDE_MEMBER_SEARCH'	=> 'Verberg gebruiker zoeken',

	'IM_ADD_CONTACT'		=> 'Voeg contact toe',
	'IM_AIM'				=> 'Hiervoor dien je AOL Instant Messenger te hebben geïnstalleerd',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Download applicatie',
	'IM_ICQ'				=> 'Houd rekening met gebruikers die je geselecteerd hebt, dat ze mogelijk geen ongevraagde chatberichten kunnen ontvangen.',
	'IM_JABBER'				=> 'Houd rekening met gebruikers die je geselecteerd hebt dat ze mogelijk geen ongevraagde chatberichten kunnen ontvangen.',
	'IM_JABBER_SUBJECT'		=> 'Dit is een automatisch gegenereerd bericht, waarop niet kan worden gereageerd. Bericht van gebruiker %1$s om %2$s',
	'IM_MESSAGE'			=> 'Jouw bericht',
	'IM_MSNM'				=> 'Om van deze functie gebruik te kunnen maken, moet je MSN/Windows Live Messenger op je pc hebben geïnstalleerd.',
	'IM_MSNM_BROWSER'		=> 'Je browser ondersteunt dit niet.',
	'IM_MSNM_CONNECT'		=> 'Je bent niet aangemeld op MSN/WLM.\nJe moet je eerst aanmelden om verder te gaan.',
	'IM_NAME'				=> 'Jouw naam',
	'IM_NO_DATA'			=> 'Er is geen passende contactinformatie voor deze gebruiker.',
	'IM_NO_JABBER'			=> 'Het direct verzenden van berichten naar Jabber-gebruikers via het forum wordt niet ondersteund. Je moet een Jabber-cliënt geïnstalleerd hebben op je pc om contact te leggen met de ontvanger.',
	'IM_RECIPIENT'			=> 'Ontvanger',
	'IM_SEND'				=> 'Verstuur bericht',
	'IM_SEND_MESSAGE'		=> 'Verstuur bericht',
	'IM_SENT_JABBER'		=> 'Je bericht aan %1$s is verstuurd.',
	'IM_USER'				=> 'Verstuur een chatbericht',

	'LAST_ACTIVE'				=> 'Laatst actief',
	'LESS_THAN'					=> 'Minder dan',
	'LIST_USER'					=> '1 gebruiker',
	'LIST_USERS'				=> '%d gebruikers',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Het forum vereist dat je geregistreerd en ingelogd bent om de teamlijst te kunnen zien.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Het forum vereist dat je geregistreerd en ingelogd bent om toegang te krijgen tot de gebruikerslijst.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Het forum vereist dat je geregistreerd en ingelogd bent om naar gebruikers te zoeken.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Het forum vereist dat je geregistreerd en ingelogd bent om profielen te bekijken.',

	'MORE_THAN'				=> 'Meer dan',

	'NO_EMAIL'				=> 'Je bent niet bevoegd om een e-mail te versturen naar deze gebruiker.',
	'NO_VIEW_USERS'			=> 'Je bent niet bevoegd om de gebruikerslijst of profielen te bekijken.',

	'ORDER'					=> 'Volgorde',
	'OTHER'					=> 'Andere',

	'POST_IP'				=> 'Geplaatst van IP/domein',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Naam ontvanger',
	'RECIPIENT'				=> 'Ontvanger',
	'REMOVE_FOE'			=> 'Verwijder vijand',
	'REMOVE_FRIEND'			=> 'Verwijder vriend',

	'SEARCH_USER_POSTS'		=> 'Zoek berichten gebruiker',
	'SELECT_MARKED'			=> 'Selecteer gemarkeerde(n)',
	'SELECT_SORT_METHOD'	=> 'Selecteer sorteermethode',
	'SEND_AIM_MESSAGE'		=> 'Stuur AIM-bericht',
	'SEND_ICQ_MESSAGE'		=> 'Stuur ICQ-bericht',
	'SEND_IM'				=> 'Chatberichten',
	'SEND_JABBER_MESSAGE'	=> 'Stuur Jabber-bericht',
	'SEND_MESSAGE'			=> 'Stuur bericht',
	'SEND_MSNM_MESSAGE'		=> 'Stuur MSN-bericht',
	'SEND_YIM_MESSAGE'		=> 'Stuur YIM-bericht',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Laatst actief',
	'SORT_POST_COUNT'		=> 'Berichtaantal',

	'USERNAME_BEGINS_WITH'	=> 'Gebruikersnaam begint met',
	'USER_ADMIN'			=> 'Beheer gebruiker',
	'USER_BAN'				=> 'Verbannen',
	'USER_FORUM'			=> 'Statistieken gebruiker',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Nog geen herinnering verzonden op dit moment',
		1		=> '%1$d herinnering verzonden<br />&raquo; %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Forum voorkomen',

	'VIEWING_PROFILE'		=> 'Bekijk profiel - %s',
	'VISITED'				=> 'Laatst bezocht',

	'WWW'					=> 'Website',
));

// -- User achievements 0.0.2
$lang = array_merge($lang, array(
	'ACHIEVE'				=> 'Gebruiker prestaties',
	'40_POSTS'				=> 'Behaalde 40 berichten',
	'80_POSTS'				=> 'Behaalde 80 berichten',
	'160_POSTS'				=> 'Behaalde 160 berichten',
	'240_POSTS'				=> 'Behaalde 240 berichten',
	'480_POSTS'				=> 'Behaalde 480 berichten',
	'600_POSTS'				=> 'Behaalde 600 berichten',
	'1000_POSTS'			=> 'Behaalde 1000 berichten',
	'2000_POSTS'			=> 'Behaalde 2000 berichten',
	'3000_POSTS'			=> 'Behaalde meer dan 3000 berichten',
	'TOPIC_VIEWS_500'		=> 'Heeft een onderwerp met meer dan 500 oproepen',
	'TOPIC_VIEWS_1000'		=> 'Heeft een onderwerp met meer dan 1000 oproepen',
	'TOPIC_VIEWS_10000'		=> 'Heeft een onderwerp met meer dan 10000 oproepen',
	'TOPIC_REPLIES_25'		=> 'Heeft een onderwerp met meer dan 25 antwoorden',
	'TOPIC_REPLIES_50'		=> 'Heeft een onderwerp met meer dan 50 antwoorden',
	'TOPIC_REPLIES_100'		=> 'Heeft een onderwerp met meer dan 100 antwoorden',	
	'TOPIC_REPLIES_500'		=> 'Heeft een onderwerp met meer dan 500 antwoorden',	
	'HAS_ATTACHED'			=> 'Heeft een bestand geupload',
	'HAS_POLL'				=> 'Heeft een rondvraag aangemaakt',
	'UP_AVATAR'				=> 'Heeft een avatar',
	'FRIEND_5'				=> 'Behaalde 5 vrienden',
	'FRIEND_10'				=> 'Behaalde 10 vrienden',
	'FRIEND_20'				=> 'Behaalde 20 vrienden',
	'FRIEND_50'				=> 'Behaalde 50 vrienden',
	'JOIN_30'				=> 'Is gebruiker sinds 30 dagen',
	'JOIN_60'				=> 'Is gebruiker sinds 60 dagen',
	'JOIN_365'				=> 'Is gebruiker sinds een jaar',
	'POST_PER_DAY_5'		=> 'Posts 5+ keer per dag',
	'POST_PER_DAY_10'		=> 'Posts 10+ keer per dag',
	'POST_PER_DAY_20'		=> 'Posts 20+ keer per dag',
	'VOTED_POLL'			=> 'Heeft in rondvraag gestemt',
	'CREATED_TOPIC_10'		=> 'Heeft 10 onderwerpen aangemaakt',
	'CREATED_TOPIC_20'		=> 'Heeft 20 onderwerpen aangemaakt',
	'CREATED_TOPIC_50'		=> 'Heeft 50 onderwerpen aangemaakt',
	'TOTAL_REACH'			=> 'totaal behaald',
	'TROPHY'				=> 'prestatietrofeeën',
	'TOTAL_POST_REACH'		=> 'Totaal berichtendoel behaald :',
	'TOPIC_CREATE'			=> 'Onderwerpplaatsingen behaald :',
	'TOPIC_VIEW'			=> 'Onderwerpoproepen behaald :',
	'TOPIC_REPLIES'			=> 'Onderwerpantwoorden behaald :',
	'RANDOM_GOALS'			=> 'Totaal aanatal willekeurige doelen behaald :',
	'MEMBER_GOALS'			=> 'Totaal aantal gebruikerlidmaatschap behaald :',
	'FRIEND_GOALS'			=> 'Totaal aantal vrienden behaald :',
	'JOIN_GOALS'			=> 'Totaal aanatl berichten per dag behaald :',
	'NONE_YET'				=> '<strong>Deze gebruiker heeft het minimum van 10 doelen nog niet breikt om aanspraak op een prijzenbeker te kunnen maken!</strong>',
));

// Friend list on member view by DaMysterious
$lang = array_merge($lang, array(
	'LIST_FRIEND'     		=> '1 vriend',
	'LIST_FRIENDS'			=> '%d vrienden',
	'FRIEND_LIST'			=> 'Vriendenlijst',
	'FRIEND_AVATAR'			=> 'Avatar',
	'FRIEND_COUNTRY'		=> 'Land',
	'ONLINE_FRIENDS'		=> 'Vrienden on-line',
	'OFFLINE_FRIENDS'		=> 'Vrienden off-line',
	'VIEW_ALL'				=> 'Toon volledig',
	'NO_FRIEND'				=> 'Geen gebruiker geselecteerd!',
	'TOTAL_FRIENDS'			=> 'Vrienden totaal',
));

?>