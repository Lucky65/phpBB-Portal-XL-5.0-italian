<?php
/**
*
* gallery_ucp [Nederlands]
*
* @package phpBB Gallery
* @version $Id: gallery_ucp.php 1007 2009-03-04 01:31:45Z nickvergessen $
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
	'ALBUMS'						=> 'Albums',
	'ALBUM_DESC'					=> 'Beschrijving',
	'ALBUM_NAME'					=> 'Naam',
	'ALBUM_PARENT'					=> 'Hoofdalbum',
	'ATTACHED_SUBALBUMS'			=> 'Gekoppelde subalbums',

	'CREATE_PERSONAL_ALBUM'			=> 'Creëer persoonlijk album',
	'CREATE_SUBALBUM'				=> 'Creëer een subalbum',
	'CREATE_SUBALBUM_EXP'			=> 'Je kunt een nieuw subalbum aan je persoonlijk album koppelen.',
	'CREATED_SUBALBUM'				=> 'Subalbum succesvol gecreëerd',

	'DELETE_ALBUM'					=> 'Verwijder Album',
	'DELETE_ALBUM_CONFIRM'			=> 'Album, inclusief alle gekoppelde albums en afbeeldingen verwijderen?',
	'DELETED_ALBUMS'				=> 'Albums succesvol verwijderd',

	'EDIT'							=> 'Bewerk',
	'EDIT_ALBUM'					=> 'Bewerk dit album',
	'EDIT_SUBALBUM'					=> 'Bewerk Subalbum',
	'EDIT_SUBALBUM_EXP'				=> 'Je kunt je albums hier bewerken.',
	'EDITED_SUBALBUM'				=> 'Album succesvol bewerkt',

	'GOTO'							=> 'Ga naar',

	'MANAGE_SUBALBUMS'				=> 'Beheer je subalbums',
	'MISSING_ALBUM_NAME'			=> 'Geef een naam voor het album',

	'NEED_INITIALISE'				=> 'Je hebt nog geen persoonlijk album.',
	'NO_ALBUM_STEALING'				=> 'Je bent niet bevoegd albums van anderen te beheren.',
	'NO_FAVORITES'					=> 'Je hebt geen favorieten.',
	'NO_MORE_SUBALBUMS_ALLOWED'		=> 'Je hebt het maximaal aantal subalbums aan te persoonlijke album toegevoegd',
	'NO_PARENT_ALBUM'				=> '&laquo;-- geen hoofdalbum',
	'NO_PERSALBUM_ALLOWED'			=> 'Je bent niet bevoegd een persoonlijke album aan te maken.',
	'NO_PERSONAL_ALBUM'				=> 'Je hebt nog geen persoonlijk album. Hier kun je er een aanmaken, inclusief subalbums.<br />In persoonlijke albums kan alleen de eigenaar afbeeldingen plaatsen.',
	'NO_SUBALBUMS'					=> 'Geen subalbums',
	'NO_SUBSCRIPTIONS'				=> 'Je hebt op geen enkele afbeelding een abonnement.',

	'PARSE_BBCODE'					=> 'Verwerk bbcodes',
	'PARSE_SMILIES'					=> 'Verwerk smiles',
	'PARSE_URLS'					=> 'Verwerk urls',
	'PERSONAL_ALBUM'				=> 'Persoonlijk album',

	'REMOVE_FROM_FAVORITES'			=> 'Verwijderen uit favorieten',

	'UNSUBSCRIBE'					=> 'stop abonnement',

	'YOUR_FAVORITE_IMAGES'			=> 'Hier kun je je favoriete afbeeldingen zien. Je kunt ze verwijderen als je ze niet meer leuk vind.',
	'YOUR_SUBSCRIPTIONS'			=> 'Hier zie je de albums en afbeeldingen waar je een abonnement op hebt.',

	'WATCH_CHANGED'					=> 'Instellingen opgeslagen',
	'WATCH_COM'						=> 'Abonneer standaard op becommentarieerde afbeeldingen',
	'WATCH_FAVO'					=> 'Abonneer standaard op favoriete afbeeldingen',
	'WATCH_NOTE'					=> 'Deze optie geldt alleen voor nieuwe afbeeldingen. Alle andere afbeeldingen moeten via de "abonneer op afbeelding" optie toegevoegd worden.',
	'WATCH_OWN'						=> 'Abonneer standaard op eigen afbeeldingen',
));

?>