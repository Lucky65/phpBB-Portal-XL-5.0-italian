<?php
/**
*
* Knowledge Base [English]
* @author Tobi Schaefer http://www.tas2580.de/
*
* english translation by RedTrinity
*
* @package language
* @version $Id: kb.php, v 0.2.8 2008/07/08 18:14:44 tas2580 Exp $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
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
	
	'ARTICLE_DETAIL'		=> 'Artikel details',
	'ARTICLE_REPORTED'		=> 'Dit artikel is gerapporteerd',
	'DISPLAY_ON_INDEX'		=> 'Laten zien in hoofd categorie',
	'DISPLAY_ON_INDEX_DESC'	=> '',
	'DELETED'				=> 'Het artikel is verwijderd',
	'MCP_REPORT_TITLE'		=> 'Gerapporteerde artikelen',
	'MCP_REPORT_EXPLAIN'	=> '',
	'REALY_DELETE'			=> 'Weet je zeker dat je het artikel wilt verwijderen?',
	'VIEW_REPORTS_OLD'		=> 'Bekijk gesloten rapporten',
	'VIEW_REPORTS_NEW'		=> 'Bekijk openstaande rapporten',
	'SHOW_ARTICLE'			=> 'Laat artikel zien',
	'SORT_ORDER'			=> 'Sorteer volgorde',
	'SORT_ORDER_DESC'		=> 'Hoe worden artikelen gesorteerd?',
	'SUB_CATGEGORIES'		=> 'Subcategorieen',
	'SEARCH_CATEGORIE'		=> 'Zoek in categorie',
	'ACP_TYPES'				=> 'Artikel typen',
	'ACP_TYPES_DESC'		=> 'Hier kun je artikel types toevoegen en wijzigen',
	'ACP_CATEGORIE'			=> 'Categorie',
	'ACP_CATEGORIE_DESC'	=> 'Hier kun je categorieen toevoegen of wijzigen voor de knoweldge base.',
	'ACP_CONFIG'			=> 'Configuratie',
	'ACP_CONFIG_DESC'		=> 'Hier kun je de configuratie van de Knowledge Base wijzigen.',
	'ARTICLE_ACTIVATED'		=> 'Het artikel is gepost!',
	'ARTICLE_DELETED'		=> 'Het artikel is verwijderd!',
	'ARTICLE_ADDED'			=> 'Het artikel is vertstuurd en wacht op goedkeuring alvorens het wordt getoond.',
	'ARTICLE_HISTORY'		=> 'Artikel log',
	'ARTICLE_ADD'			=> 'Voeg een artikel toe',
	'ARTICLE_TITLE'			=> 'Titel',
	'ARTICLE_DESCRIPTION'	=> 'Omschrijving',
	'ARTICLE'				=> 'Artikel',
	'ARTICLE_TYPES'			=> 'Artikel types',
	'ARTICLE_TYPES_DESC'	=> 'In welk artikel type wil je zoeken? Gebruik de &lt;strg&gt; toets om meer dan 1 type te selecteren, vul niets in om in alle artikelen te zoeken.',
	'ARTICLE_CONT'			=> 'Artikelen in de database',
	'ARTICLE_DEL'			=> 'Moet het artikel echt verwijderd worden?',
	'ARTICLE_EDIT'			=> 'Wijzig artikel',
	'ARTICLE_EDITED'		=> 'Het artikel is verwijderd!',
	'ARTICLE_DEACTIVATED'	=> 'Gesloten artikel',
	'ARTICLE_POSTET'		=> 'Artikel geplaatst',
	'AKTIVATE'				=> 'Activeer',

	'BACK_ARTICLE'			=> 'Terug naar artikel',
	'BACK_KB'				=> 'Keer terug naar de knowledge base',
	'BACK_TO_ARTICLE'		=> 'Klik %shier%s om het artikel te bekijken.',
	'BACK_TO_POSTING'		=> 'Klik %shier%s om terug te gaan.',
	'BACK_TO_KB'			=> 'Klik %shier%s om terug te gaan naar de knowledge base.',
	'BACK_TO_LOG'			=> 'Klik %shier%s om terug te gan naar het artikel log.',



	'CATEGORIE'				=> 'Categorie',
	'CHANGED_AT'			=> 'Gewijzigd op',
	'CONT_CAT'				=> 'Categorieen',
	'CATEGORIES'			=> 'categorieen',
	'CATEGORIES_DESC'		=> 'In welk artikel type wil je zoeken? Gebruik de &lt;strg&gt; toets om meer dan 1 type te selecteren, vul niets in om in alle artikelen te zoeken.',
	'CAT_NOT_EMPTY'			=> 'De categorie is niet leeg!',
	'CAT_NAME'				=> 'Categorie naam',
	'CAT_NAME_DESC'			=> 'Naam voor de categorie',
	'CAT_IMAGE'				=> 'Categorie afbeelding',
	'CAT_IMAGE_DESC'		=> 'Vul de URL in voor de afbeelding van de categorie.',
	'CAT_DECRIPTION_DESC'	=> 'Geef een omschrijving voor de categorie',
	'CAT_MAIN'				=> 'Hoofd categorie',
	'CAT_SELECT_MAIN'		=> 'Kies een hoofd categorie',
	'CAT_ADDED'				=> 'De categorie is toegevoegd',
	'CAT_DELETED'			=> 'De categorie is verwijderd.',
	'CAT_UPDATED'			=> 'De categorie is geupdate.',
	'CAT_REALY_DELETE'		=> 'Moet de categorie echt verwijderd worden?',
	'CAT_CREATE_NEW'		=> 'Nieuwe categorie',
	'DESCRIPTION'			=> 'Omschrijving',


	'FIENAME'				=> 'Bestandsnaam',
	'FOUND_IN'				=> 'Gevonden in',
	'INDEX_POSTS'			=> 'Artikelen op de index pagina',
	'INDEX_POSTS_DESC'		=> 'Hoeveel artikelen moeten er op de index pagina getoond worden?',
	'KB_NAME'				=> 'Knowledge Base',
	'KB_NAME_DESC'			=> 'De naam van de Knowledge Base',
	'KB_DECRIPTION_DESC'	=> 'Voeg een beschrijving van de Knowledge Base toe.',
	'KBASE'					=> 'Knowledge Base',
	'KB_DESCRIPTION'		=> 'Als je een artikel hebt geschreven, dan kun je een voorbeeld laten zien en dan versturen. Als hij wordt goedgekeurd. dan zal het artikel in de knoweledge base komen te staan. ',

	'LOG_TITEL'				=> 'Artikel log',
	'LOG_DESCRIPTION'		=> 'Hier kun je zien wanneer het artikel is gewijzigd en door wie.',
	'LOG_DELETED'			=> 'Het artikel log is verwijderd',

	'MAINCAT_DESC'			=> 'Hier kun je hoofd categorieen creeren, waar je dan subcategorieen in kunt zetten voor de artikelen.',

	'MODE'					=> 'Mode',
	'MODE_DESC'				=> 'Welke mode wil je gebruik voor de Index page?',
	'MODE_MODERN'			=> 'Modern',
	'MODE_CLASSIC'			=> 'Klassiek',
	'NO_ARTICLE'			=> 'Het opgevraagde artikel bestaat niet!',
	'NEED_INPUT'			=> 'Voeg een titel en tekst toe voor het artikel!',
	'ARTICLE_NEW'			=> 'Nieuwe artikelen',
	'ARTICLE_NEW_DESC'		=> 'De volgende artikelen zijn nog niet verstuurd of zijn gesloten',
	'NAME'					=> 'Categorie naam',
	'NEED_NAME'				=> 'Geef een naam voor de categorie',
	'ARTICLE_NEWEST'		=> 'Het nieuwste artikel is',
	'NO_TYPE'				=> 'Geen type',
	'POST_FORUM'			=> 'Forum als referentie voor het artikel',
	'POST_TEMPLATE'			=> 'Post template',
	'POST_MESSAGE'			=> 'Post tekst',
	'POST_USER'				=> 'Gebruiker ID',
	'POST_NORMAL'			=> 'Normaal',
	'POST_TOPIC_GLOBAL'		=> 'Globale Mededeling',
	'POST_TOPIC_AS'			=> 'Post onderwerp als',
	'POST_TOPIC_AS_DESC'	=> 'Wat voor onderwerp moet gecreerd worden?',
	'POST_USER_DESC'		=> 'Het ID van de gebruiker die de onderwerpen maakt',
	'POST_SUBJECT'			=> 'Topics Titel',
	'POST_SUBJECT_DESC'		=> 'De titel van het onderwerp dat wordt gemaakt',
	'POST_FORUM_DESC'		=> 'Geef het forum ID van het forum als referentie waar het artikel in wordt geplaatst. Als je dit niet wilt, kies dan "0"',
	'POST_MESSAGE_DESC'		=> '{TITLE} = Artikel titel <br />{DESCRIPTION} = Artikel omschrijving<br />{POST_TIME} = Tijd dat het geschreven werd<br />{TYPE} = Artikel type<br />{SUB_CAT} = Categorie<br />{URL} = URL naar artikel<br />{AUTHOR} = Auteur van het artikel<br />{AUTHOR_ID} = Gebruiker-ID van de auteur.',
	'RELASED'				=> 'verstuurd op',
	'READ_MORE'				=> 'Laat alle %s artikelen zien',


	'SEARCH_KEYWORDS_DESC'	=> 'Hier kun je zoeken in de Knowledge Base.',
	'SHOW_EDITS'			=> 'Laat wijzigingen zien',
	'SHOW_EDITS_DESC'		=> 'Moeten wijzigingen in een eigen artikel getoond worden?',
	'TYPE'					=> 'Artikel type',
	'TYPE_DESC'				=> 'Geef een naam voor het artikel type',
	'TYPE_ADDED'			=> 'Het type is toegevoegd',
	'TYPE_UPDATED'			=> 'het type is verwijderd',

	'NO_SUBCAT_IN_MAINCAT'	=> 'Je kunt geen subcategeorien creeren in de index!',
	'CAT_TYPE'				=> 'Categorie type',
	'CAT_TYPE_DESC'			=> 'Kies een categorie type',
	'IN_INDEX'				=> 'In Index',
	'CAT_SUB'				=> 'Sub categorie',

	'CACHE_TIME'			=> 'Cache tijd',
	'CACHE_TIME_DESC'		=> 'De tijd dat types en categorieen worden cached',
	'SECONDS'				=> 'Seconden',
	'ACTIVATE_TYPES'		=> 'Gebruik artikel typen?',
	'ACTIVATE_TYPES_DESC'	=> 'Kun je een naam voor een artikel type geven?',
	'UPDATE_POST'			=> 'Ververs post',
	'UPDATE_POST_DESC'		=> 'Moet de post voor het artikel geupdate worden als het artikel is geupdate?',
	'POST_UPDATE_MESSAGE'	=> 'Artikel geupdate',
	'POST_ID'				=> 'ID van de forum post',
	'ARTICLE_ADDED_AKTIV'	=> 'Het artikel is toegevoegd aan de database en geactiveerd',
	'SHOW_POST_EDIT'		=> 'Laat updates zien',
	'SHOW_POST_EDIT_DESC'	=> 'Moet een update ook in de post gezien worden?',

	'PRINT_TOPIC'			=> 'Print artikel',
	
	// Portal XL Additions
	'HITS'					=> 'Bekeken',
	'LATEST_TOPICS'			=> 'Laatste onderwerpen',
	
));

?>