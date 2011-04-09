<?php
/**
*
* Knowledge Base [Deutsch]
* @author Tobi Schaefer http://www.tas2580.de/
*
* german translation for Portal XL by purzl --> http://portalxl.cwsurf.de
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
	
	'ARTICLE_DETAIL'		=> 'Artikel Details',
	'ARTICLE_REPORTED'		=> 'Dieser Artikel wurde gemeldet',
	'DISPLAY_ON_INDEX'		=> 'In Hauptkategorie anzeigen',
	'DISPLAY_ON_INDEX_DESC'	=> '',
	'DELETED'				=> 'Der Artikel wurde gel&ouml;scht',
	'MCP_REPORT_TITLE'		=> 'gemeldete Artikel',
	'MCP_REPORT_EXPLAIN'	=> '',
	'REALY_DELETE'			=> 'M&ouml;chten Sie den Artikel wirklich l&ouml;schen?',
	'VIEW_REPORTS_OLD'		=> 'Alte Meldungen ansehen',
	'VIEW_REPORTS_NEW'		=> 'Neue Meldungen anzeigen',
	'SHOW_ARTICLE'			=> 'Artikel anzeigen',
	'SORT_ORDER'			=> 'Sortierreihenfolge',
	'SORT_ORDER_DESC'		=> 'Wonach sortieren?',
	'SUB_CATGEGORIES'		=> 'Unterkategorie',
	'SEARCH_CATEGORIE'		=> 'Suche in Kategorie',
	'ACP_TYPES'				=> 'Artikel Typen',
	'ACP_TYPES_DESC'		=> 'Hier k&ouml;nnen Sie Artikeltypen zuf&uuml;gen oder editieren',
	'ACP_CATEGORIE'			=> 'Kategorie',
	'ACP_CATEGORIE_DESC'	=> 'Hier k&ouml;nnen Sie Kategorien zuf&uuml;gen oder editieren.',
	'ACP_CONFIG'			=> 'Konfiguration',
	'ACP_CONFIG_DESC'		=> 'Hier k&ouml;nnen Sie die Konfiguration der Wissensbank &auml;ndern.',
	'ARTICLE_ACTIVATED'		=> 'Der Artikel wurde ver&ouml;ffentlicht!',
	'ARTICLE_DELETED'		=> 'Der Artikel wurde gel&ouml;scht!',
	'ARTICLE_ADDED'			=> 'Der Artikel wurde gesendet und nach Pr&uuml;fung freigeschaltet',
	'ARTICLE_HISTORY'		=> 'Artikel Log',
	'ARTICLE_ADD'			=> 'Neuen Artikel erstellen',
	'ARTICLE_TITLE'			=> 'Titel',
	'ARTICLE_DESCRIPTION'	=> 'Beschreibung',
	'ARTICLE'				=> 'Artikel',
	'ARTICLE_TYPES'			=> 'Artikel Typen',
	'ARTICLE_TYPES_DESC'	=> 'In welchen Artikeltypen m&ouml;chten Sie suchen? Um mehrere Typen zu w&auml;hlen nutzen Sie zum Markieren die &lt;strg&gt; Taste.',
	'ARTICLE_CONT'			=> 'Artikel in der Datenbank',
	'ARTICLE_DEL'			=> 'Soll der Artikel wirklich entfernt werden?',
	'ARTICLE_EDIT'			=> 'Bearbeite Artikel',
	'ARTICLE_EDITED'		=> 'Der Artikel wurde &uuml;berarbeitet!',
	'ARTICLE_DEACTIVATED'	=> 'gesperrte Artikel',
	'ARTICLE_POSTET'		=> 'Artikel gesendet',
	'AKTIVATE'				=> 'Aktiviert',

	'BACK_ARTICLE'			=> 'Zur&uuml;ck zum Artikel',
	'BACK_KB'				=> 'Zur&uuml;ck zur Wissensbank',
	'BACK_TO_ARTICLE'		=> 'Klick %hier%s um den Artikel anzuzeigen.',
	'BACK_TO_POSTING'		=> 'Klick %hier%s zur letzten Seite zur&uuml;ck.',
	'BACK_TO_KB'			=> 'Klick %shier%s zur&uuml;ck zur Wissensbank.',
	'BACK_TO_LOG'			=> 'Klick %shier%s zur&uuml;ck zum Artikel Log.',



	'CATEGORIE'				=> 'Kategorie',
	'CHANGED_AT'			=> 'ge&auml;ndert am',
	'CONT_CAT'				=> 'Kategorien',
	'CATEGORIES'			=> 'Kategorien',
	'CATEGORIES_DESC'		=> 'In welchen Artikeltypen m&ouml;chten Sie suchen? Um mehrere Typen zu w&auml;hlen nutzen Sie zum Markieren die &lt;strg&gt; Taste.',
	'CAT_NOT_EMPTY'			=> 'Es sind noch Artikel in der Kategorie!',
	'CAT_NAME'				=> 'Kategorie Name',
	'CAT_NAME_DESC'			=> 'Name der Kategorie',
	'CAT_IMAGE'				=> 'Kategorie icon',
	'CAT_IMAGE_DESC'		=> 'URL zum Kategorie icon',
	'CAT_DECRIPTION_DESC'	=> 'Beschreibung der Kategorie',
	'CAT_MAIN'				=> 'Hauptkategorie',
	'CAT_SELECT_MAIN'		=> 'W&auml;hle eine Hauptkategorie',
	'CAT_ADDED'				=> 'Die Kategorie wurde hinzugef&uuml;gt',
	'CAT_DELETED'			=> 'Die Kategorie wurde entfernt.',
	'CAT_UPDATED'			=> 'Die Kategorie wurde bearbeitet.',
	'CAT_REALY_DELETE'		=> 'M&ouml;chten Sie die Kategorie wirklich entfernen?',
	'CAT_CREATE_NEW'		=> 'Neue Kategorie',
	'DESCRIPTION'			=> 'Beschreibung',


	'FIENAME'				=> 'Dateiname',
	'FOUND_IN'				=> 'gefunden in',
	'INDEX_POSTS'			=> 'Artikel in der Index Seite',
	'INDEX_POSTS_DESC'		=> 'Wieviele Artikel sollen auf der Indexseite angezeigt werden?',
	'KB_NAME'				=> 'Wissensbank',
	'KB_NAME_DESC'			=> 'Name der Wissensbank',
	'KB_DECRIPTION_DESC'	=> 'Beschreibung deiner Wissensbank.',
	'KBASE'					=> 'Wissensbank',
	'KB_DESCRIPTION'		=> 'Wenn Sie einen Artikel geschrieben haben k&ouml;nnen Sie den Entwurf unten auf der Seite sehen und zur &uuml;berpr&uuml;fung absenden.',

	'LOG_TITEL'				=> 'Artikel Log',
	'LOG_DESCRIPTION'		=> 'Hier k&ouml;nnen Sie Zeit und User sehen der den Artikel zuletzt bearbeitet hat.',
	'LOG_DELETED'			=> 'Der Artikel Log wurde gel&ouml;scht',

	'MAINCAT_DESC'			=> 'Hier k&ouml;nnen Sie Hauptkategorien erstellen in denen dann Unterkategorien f&uuml;r Artikel eingef&uuml;gt werden k&ouml;nnen.',

	'MODE'					=> 'Modus',
	'MODE_DESC'				=> 'Welchen Modus m&ouml;chtest du f&uuml;r die Wissensbank Indexseite?',
	'MODE_MODERN'			=> 'Modern',
	'MODE_CLASSIC'			=> 'Klassisch',
	'NO_ARTICLE'			=> 'Der gew&uuml;nschte Artikel existiert nicht sorry!',
	'NEED_INPUT'			=> 'Bitte geben Sie einen Titel und Text f&uuml;r ihren Artikel ein',
	'ARTICLE_NEW'			=> 'Unver&ouml;ffentlichte Artikel',
	'ARTICLE_NEW_DESC'		=> 'Die folgenden Artikel sind noch nicht ver&ouml;ffentlicht oder gesperrt',
	'NAME'					=> 'Kategorie Name',
	'NEED_NAME'				=> 'Geben Sie einen Namen f&uuml;r die Kategorie ein',
	'ARTICLE_NEWEST'		=> 'Der neueste Artikel ist',
	'NO_TYPE'				=> 'No Type',
	'POST_FORUM'			=> 'Referenz Forum f&uuml;r den Artikel',
	'POST_TEMPLATE'			=> 'Post template',
	'POST_MESSAGE'			=> 'Post text',
	'POST_USER'				=> 'User ID',
	'POST_NORMAL'			=> 'Normal',
	'POST_TOPIC_GLOBAL'		=> 'Globale Ank&uuml;ndigung',
	'POST_TOPIC_AS'			=> 'Poste Forenbeitrag als',
	'POST_TOPIC_AS_DESC'	=> 'Was f&uuml;r eine art Beitrag soll er&ouml;ffnet werden?',
	'POST_USER_DESC'		=> 'Die User ID der den Beitrag er&ouml;ffnet',
	'POST_SUBJECT'			=> 'Beitrags Titel',
	'POST_SUBJECT_DESC'		=> 'Der Titel den der Foreneintrag haben soll',
	'POST_FORUM_DESC'		=> 'Geben Sie die Foren ID an in dem der Beitrag &uuml;ber neue Artikel erscheinen soll, wenn Sie dieses Feature nicht nutzen m&ouml;chten geben Sie bitte "0" ein',
	'POST_MESSAGE_DESC'		=> '{TITLE} = Artikel Titel <br />{DESCRIPTION} = Artikelbeschreibung<br />{POST_TIME} = Zeit<br />{TYPE} = Artikel Typ<br />{SUB_CAT} = Kategorie<br />{URL} = URL zum Artikel<br />{AUTHOR} = Autor des Artekels<br />{AUTHOR_ID} = User-ID des Autors.',
	'RELASED'				=> 'Ver&ouml;ffentlicht am',
	'READ_MORE'				=> 'Alle Artikel %s anzeigen',


	'SEARCH_KEYWORDS_DESC'	=> 'Hier k&ouml;nnen Sie die Wissensbank durchsuchen.',
	'SHOW_EDITS'			=> '&uuml;berarbeitungen anzeigen?',
	'SHOW_EDITS_DESC'		=> 'Sollen &uuml;berarbeitungen angezeigt werden?',
	'TYPE'					=> 'Artikel Typ',
	'TYPE_DESC'				=> 'Name des Artikeltyps',
	'TYPE_ADDED'			=> 'Der Typ wurde hinzugef&uuml;gt',
	'TYPE_UPDATED'			=> 'Der Typ wurde entfernt',

	'NO_SUBCAT_IN_MAINCAT'	=> 'Sie k&ouml;nnen keine Unterkategorien auf der Indexseite erstellen!',
	'CAT_TYPE'				=> 'Kategorie Typ',
	'CAT_TYPE_DESC'			=> 'W&auml;hlen Sie einen Kategorie Typ',
	'IN_INDEX'				=> 'im Index (der Wissensbankseite)',
	'CAT_SUB'				=> 'Unterkategorie',

	'CACHE_TIME'			=> 'Cache Zeit',
	'CACHE_TIME_DESC'		=> 'Zeit die zum cachen der Artikel und Typen gegeben wird',
	'SECONDS'				=> 'Sekunden',
	'ACTIVATE_TYPES'		=> 'M&ouml;chten Sie Artikeltypen verwenden?',
	'ACTIVATE_TYPES_DESC'	=> 'verwenden ja / nein?',
	'UPDATE_POST'			=> 'Artikel aktualisieren',
	'UPDATE_POST_DESC'		=> 'Soll der Forenbeitrag aktualisiert werden, wenn der Artikel &uuml;berarbeitet wurde?',
	'POST_UPDATE_MESSAGE'	=> 'Artikel aktualisiert',
	'POST_ID'				=> 'ID des Forenbeitrags',
	'ARTICLE_ADDED_AKTIV'	=> 'Der Artikel wurde in die Datenbank &uuml;bertragen und Aktiviert!',
	'SHOW_POST_EDIT'		=> 'Updates ansehen',
	'SHOW_POST_EDIT_DESC'	=> 'Neue Updates ansehen?',

	'PRINT_TOPIC'			=> 'Artikel drucken',
	
	// Portal XL Additions
	'HITS'					=> 'Gelesen',
	'LATEST_TOPICS'			=> 'Neueste Artikel',
	
));

?>