<?php
/**
*
* dm_video [English] 
*
* @package language
* @version $Id: dm_video.php 225 2009-12-22 13:52:33Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'DMV_ACTION'				=> 'Actie',
	'DMV_ADD_VIDEO'				=> 'Video toevoegen',
	'DMV_ADDED'					=> 'Je video is successvol toegevoegd.<br />Alvorens het bestand in de lijst zichtbaar zal zijn, dient de administrator het goed te keuren.',
	'DMV_ADDED_ADMIN'			=> 'Je video is successvol toegevoegd.',
	'DMV_ALL_VIDEOS'			=> 'Toon alle videos',
	'DMV_ALL_VIDEOS_LIST'		=> 'Alle Videos',
	'DMV_ANNOUNCE_TITLE'		=> '[NIEUW VIDEO] %1$s',
	'DMV_ANNOUNCE_MSG'			=> 'Hallo,

er is een nieuwe video!

Titel: <strong>%1$s</strong>
Schrijver: <strong>%2$s</strong>
Lengte: <strong>%3$s</strong>

<strong>Klik %4$s om de video te bekijken!</strong>

Have fun!',
	'DMV_AUTHOR'				=> 'Geplaatst door',
	'DMV_BACK'					=> 'Terug naar overzicht',
	'DMV_BACK_LINK'				=> '<br /><br />Klik %shier%s om terug te keren tot de laatste categorie',
	'DMV_BACK_LINK_COMMENT'		=> '<br /><br />Klik %shier%s om terug te keren naar de video opmerkingen',
	'DMV_BACK_LINK2'			=> '<br /><br />Terug naar de laatste categorie',
	'DMV_BACK_LINK3'			=> '<br /><br />Klik %shier%s om terug te keren',
	'DMV_BACK_LINK4'			=> '<br /><br />Klik %shier%s om terug te keren naar de index',
	'DMV_BACK_VIDEO'			=> '%sTerug naar video overzicht%s',
	'DMV_CAT_NAME'				=> 'Categorieën',
	'DMV_CAT_NAME1'				=> 'Categorie',
	'DMV_CLICK'					=> 'hier',
	'DMV_COMMENT'				=> 'Opmerkingen',
	'DMV_COMMENT_ADD'			=> 'Toevoegen reactie',
	'DMV_COMMENT_ADDED'			=> 'Je reactie werd toegevoegd',
	'DMV_COMMENT_DEL'			=> 'Wis opmerking',
	'DMV_COMMENT_DEL_CONFIRM'	=> 'Are you sure you want to delete your comment?',
	'DMV_COMMENT_DELETED'		=> 'Jouw reactie is succesvol verwijderd.',
	'DMV_COMMENT_EDIT'			=> 'Bewerk opmerking',
	'DMV_COMMENT_EDITED'		=> 'Your comment was updated successfully',
	'DMV_COMMENT_EXPLAIN'		=> 'Here you can leave a comment for the current video. Please keep it short!',
	'DMV_COMMENT_MULTI'			=> '%d opmerkingen',
	'DMV_COMMENT_NEEDED'		=> 'Je dient een opmerking te plaatsen!',
	'DMV_COMMENT_NEW'			=> 'Nieuwe opmerkingen',
	'DMV_COMMENT_NO_CC'			=> 'Momenteel geen opmerkingen',
	'DMV_COMMENT_NONE'			=> 'There\'s currently no comment available for this video.',
	'DMV_COMMENT_SHOW'			=> 'De opmerkingen voor de video %s',
	'DMV_COMMENT_SINGLE'		=> '1 commentaar',
	'DMV_COPY_NOTE'				=> '<strong>Belangrijke mededeling!</strong> Alle video\'s hier gepresenteerd, zijn video\'s van YouTube, MyVideo of van soortgelijke video portalen. Het auteursrecht berust aan de auteur of de juridische eigenaar van de video. Als plaatsing van een video verboden is op een prive-homepage, neem dan contact op met <a href="mailto:%1$s">%2$s</a> met de vraag om de bewuste video uit de lijst te verwijderen.',
	'DMV_COUNT'					=> 'Aantal videos',
	'DMV_DELETE_VIDEO'			=> 'Wis je video',
	'DMV_DELETE_VIDEO_CONFIRM'	=> 'Are you sure you want to delete your video?',
	'DMV_DELETED_VIDEO'			=> 'Je video is succesvol verwijderd.',
	'DMV_DURATION'				=> 'Lengte',
	'DMV_DURATION_EXPLAIN'		=> 'Please enter here the duration of the video in following format: 5:00 min',
	'DMV_EDITED'				=> 'Your video was successfully updated',
	'DMV_EDIT_VIDEO'			=> 'Bewerk je video',
	'DMV_FROM'					=> 'door',
	'DMV_HITS'					=> 'Top %s volgens hits',
	'DMV_IN'					=> 'in',
	'DMV_INDEX'					=> 'Index',
	'DMV_LAST_VIDEO'			=> 'Nieuwste video',
	'DMV_MOST_SEEN_VIDEOS'		=> 'Meest bekeken videos',
	'DMV_MULTI'					=> '%d videos',
	'DMV_MULTI_VIEW'			=> 'Video was tot nu toe <strong>%d</strong> keer bekeken.',
	'DMV_NEED'					=> 'Fields marked with an asterix (*) needs to be filled',
	'DMV_NEED_DATA'				=> 'You need to enter at least the title and the URL! Klik the browsers return button, to complete your entry.',
	'DMV_NEED_TITLE'			=> 'You need to enter a title! Klik the browsers return button to complete your entry.',
	'DMV_NEED_URL'				=> 'You need to enter the URL of the video. Klik the browsers return button to complete your entry!',
	'DMV_NEW_VIDEOS'			=> 'There are new unapproved videos! Klik here to go to your ACP',
	'DMV_NEW_VIDEOS_PM_SUBJECT'	=> 'There are new unapproved videos!',	
	'DMV_NEW_VIDEOS_PM'			=> 'Hello,<br /><br />there are new videos, which needs be checked and released.',
	'DMV_NEWEST_VIDEOS'			=> 'The newest videos',
	'DMV_NO_CATS'				=> 'There are currently no categories available',
	'DMV_NO_OWN_VIDEOS'			=> 'Didn\'t placed any videos yet',
	'DMV_NO_VIDEOS'				=> 'Momenteel zijn geen videos beschikbaar',
	'DMV_NO_VIDEOS_IN_CAT'		=> 'There are no videos available in this category or already existing videos are not yet released.<br />If this categroy has sub-categories, place your videos in the sub-category, which fits best!',
	'DMV_NOT_RELEASED'			=> 'The last video isn\'t released yet!',
	'DMV_ON'					=> 'op',
	'DMV_OWN_MULTI'				=> 'Placed <strong>%d</strong> videos up to now',
	'DMV_OWN_SINGLE'			=> 'Placed <strong>1</strong> video up to now',
	'DMV_OWN_VIDEO'				=> 'Videos placed',
	'DMV_POST_VIDEO'			=> 'Place a new video in the current category',
	'DMV_POST_VIDEO_EXPLAIN'	=> 'Here you can enter a new video in the currenty category.<br />Please try to fill all fields (title and URL needs to be filled!)',
	'DMV_RANDOM_VIDEO'			=> 'Willekeurig Video',
	'DMV_RANK'					=> 'Rang',
	'DMV_RATED_SUCCESSFUL'		=> '<strong>Your rating was successfully added!</strong>',
	'DMV_RATES'					=> 'Top %s volgens waardeingen',
	'DMV_RATING'				=> 'Waardeer de video',
	'DMV_RATING_AVG'			=> 'Gemiddeld',
	'DMV_RATING_BAD'			=> 'Slecht',
	'DMV_RATING_GOOD'			=> 'Goed',
	'DMV_RATING_GREAT'			=> 'Geweldig',
	'DMV_RATING_LIST'			=> 'Waardering',
	'DMV_RATING_NO'				=> 'Momenteel geen waarderingen beschikbaar',
	'DMV_RATING_NOT_BAD'		=> 'Niet slecht',
	'DMV_RATING_NO_PERM'		=> 'You are not allowed to rate videos',
	'DMV_RATING_SELECT'			=> 'Select rating',
	'DMV_RATING_SUM'			=> '%s rating with %s',
	'DMV_RATING_SUMS'			=> '%s ratimg and an avarage rating of %s',
	'DMV_RATING_TITLE'			=> 'Select your rating for %1$s from %2$s!',
	'DMV_RATING_VIDEO'			=> 'Select your rating',
	'DMV_REPORT_VIDEO'			=> 'Report a broken video',
	'DMV_REPORTED_THANKS'		=> 'Thanks very much for reporting a broken video.',
	'DMV_REPORTED_VIDEOS'		=> 'There are reported videos. Klik here to go to your ACP!',
	'DMV_RETURN_MAIN'			=> 'Return to the video menu',
	'DMV_SEARCH'				=> 'Zoek video',
	'DMV_SEARCH_NO_RESULTS'		=> 'Unfortunately we could not find anything matching your search string.',
	'DMV_SEARCH_RESULTS'		=> 'Below you will find the search results for your search of <strong>%s</strong>',
	'DMV_SEARCH_RESULTS_HEADER'	=> 'Zoekresultaat',
	'DMV_SEARCH_STRING'			=> 'Toets de zoekterm in',
	'DMV_SHOW_POPUP'			=> 'Toon video in popup-venster',
	'DMV_SHOW_TOPTEN'			=> 'Show Top %1$s List',
	'DMV_SHOW_VIDEO'			=> 'Je kijkt momenteel',
	'DMV_SHOW_VIDEO_EXPLAIN'	=> 'Hier kijk je naar de geselecteerde video.<br />Als er extra informatie beschikbaar is, vindt je deze aan de rechterkant.',
	'DMV_SINGER'				=> 'Artist',
	'DMV_SINGER_EXPLAIN'		=> 'Vul hier de naam in van de artist',
	'DMV_SINGLE'				=> '1 video',
	'DMV_SINGLE_VIEW'			=> 'Bekeken: 1 keer',
	'DMV_SONGTEXT'				=> 'Omschrijving',
	'DMV_SONGTEXT_EXPLAIN'		=> 'Here you may enter the description of your video. Please <strong>don\'t</strong> place any lyrics over here! You will see this text beside the video.',
	'DMV_SORT_ARTIST'			=> 'Artist',
	'DMV_SORT_ASC'				=> 'Aflopend',
	'DMV_SORT_DATE'				=> 'Datum',
	'DMV_SORT_DESC'				=> 'Oplopend',
	'DMV_SORT_DIRECTION'		=> 'Sorteervolgorde',
	'DMV_SORT_FROMNAME'			=> 'Geplaats door',
	'DMV_SORT_KEYS'				=> 'Sorteer-waarde ',
	'DMV_SORT_RATING'			=> 'Waardering',
	'DMV_SORT_TITLE'			=> 'Titel',
	'DMV_SORT_VIEWS'			=> 'Bekeken',
	'DMV_SUB_CAT'				=> 'Sub-Categorie',
	'DMV_SUB_CATS'				=> 'Sub-Categorieën',
	'DMV_TITLE'					=> 'Titel',
	'DMV_TITLE_EXPLAIN'			=> 'Vul hier de titel van de video in',
	'DMV_TOPTEN_HITS_EXPLAIN'	=> 'Here you see the list of our Top %s Videos listed by views',
	'DMV_TOPTEN_RATE_EXPLAIN'	=> 'Here you see the list of our Top %s Videos listed by ratings',
	'DMV_TOTAL_VIDEOS'			=> 'Totaal aantal videos: %s',
	'DMV_URL'					=> 'Video URL',
	'DMV_URL_EXPLAIN'			=> 'Vul hier de <strong>embedded code</strong> (geen rechtstreekse link!) die je van YouTube, MyVideo of anderen hebt ontvangen. If you have an own video, please create an account on one of these video providers and first place your video over there and after that enter the embedded code over here.',
	'DMV_VIDEO'					=> 'Videos',
	'DMV_VIDEO_COUNTER'			=> '%s bekeken',
	'DMV_VIDEO_IMG'				=> 'Afbeelding Link',
	'DMV_VIDEO_IMG_EXPLAIN'		=> 'Vul hier een link naar een afbeelding voor de video in. De grootte mag niet meer dan 250 x 250px zijn! Zorg ervoor dat de link beschikbaar is! Controleer het auteursrecht!',
	'DMV_VIDEO_RATES'			=> 'Waarderingen',
	'DMV_VIDEO_VIEWS'			=> 'Aantal keren bekeken',
	'DMV_VIEW_VIDEOS'			=> 'Bekijkt videos',

	// UMIL Installer strings
	'UMIL_DMV_INSERT_FIRST_FILL'		=> 'The tables of the DM Video modifaction were filled successfully filled with some basic data.',
	'UMIL_DMV_REMOVE_CONFIG_ENTRIES'	=> 'The entries in the config table were removed successfully.',
	'UMIL_DMV_NAME'						=> 'DM Video',
	'UMIL_DMV_NAME_EXPLAIN'				=> 'This modification allows you to offer your users a video page like YouTube or MyVideo.<br /><br />Please select the desired action below (in normal cases you don\'t need to change anythin. The best selection is selected automatically).<br /><br />Have fun!',
	'UMIL_DMV_UPDATE_SUCCESFUL'			=> 'The tables were updated successfully.',

	'ACP_DMV_DM_VIDEO'					=> 'DM Video',
	'ACP_DMV_CONFIG'					=> 'Configuratie',
	'ACP_DMV_EDIT'						=> 'Bewerk videos',
	'ACP_DMV_MANAGE_CATEGORIES'			=> 'Categorieën',
	'ACP_DMV_RELEASE'					=> 'Plaats videos',
	'ACP_DMV_REPORTED'					=> 'Gerapporteerde videos',
));

?>