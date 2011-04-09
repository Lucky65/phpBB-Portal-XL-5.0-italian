<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: acp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $ 
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* German translation Version 1.0.7 by FatFreddy (http://www.mebitco.de)
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_BLOG_CATEGORIES_EXPLAIN'			=> 'Hier Kannst Du Blogkategorien hinzuf&uuml;gen, &auml;ndern und verwalten.',
	'ACP_BLOG_PLUGINS_EXPLAIN'				=> 'Hier kannst Du Plugins f&uuml;r den User Blog Mod installieren, deinstallieren, aktivieren und deaktivieren.<br /><br />Ebenso kannst Du Plugins in der Liste verschieben und damit ihre Priorit&auml;t &auml;ndern (beeinflu&szlig;t, in welcher Reihenfolge sie angezeigt werden.).',
	'ALLOWED_IN_BLOG'						=> 'In User Blogs erlaubt',
	'ALLOW_IN_BLOG'							=> 'In User Blogs erlauben',

	'BLOG_ALWAYS_SHOW_URL'					=> 'Immer einen Bloglink im Profil zeigen',
	'BLOG_ALWAYS_SHOW_URL_EXPLAIN'			=> 'Wenn diese Einstellung auf NEIN steht, wird der Link nur in den Profilen der Nutzer angezeigt, die bereits Blogs schrieben haben..',
	'BLOG_ATTACHMENT_SETTINGS'				=> 'Einstellungen f&uuml;r Dateianh&auml;nge',
	'BLOG_ENABLE_ATTACHMENTS'				=> 'Dateianh&auml;nge',
	'BLOG_ENABLE_ATTACHMENTS_EXPLAIN'		=> 'Aktiviere oder deaktiviere das gesammte Dateianhangsystem des User Blog Mods',
	'BLOG_ENABLE_FEEDS'						=> 'RSS/ATOM/Javascript Feeds aktivieren',
	'BLOG_ENABLE_RATINGS'					=> 'Blog Bewertungen',
	'BLOG_ENABLE_RATINGS_EXPLAIN'			=> 'Deaktivieren um Bewertungen f&uuml;r Blogs zu verbieten.',
	'BLOG_ENABLE_SEARCH'					=> 'Suche',
	'BLOG_ENABLE_SEARCH_EXPLAIN'			=> 'Aktiviert die Suche f&uuml;r den User Blog Mod (Das Suchsystem des Blog Mod ist unabh&auml;ngig von der Boardsuche!).',
	'BLOG_ENABLE_SEO'						=> 'SEO Url\'s',
	'BLOG_ENABLE_SEO_EXPLAIN'				=> 'Mod-rewrite MUSS aktiviert sein damit diese Einstellung funktioniert! Wenn die Blog-Urls nicht funktionieren, deaktiviere diese Einstellung.',
	'BLOG_ENABLE_USER_PERMISSIONS'			=> 'Nutzerberechtigungen',
	'BLOG_ENABLE_USER_PERMISSIONS_EXPLAIN'	=> 'Aktiviert das System der Nutzerberechtigungen. Damit haben Nutzer die M&ouml;glichkeit, eigene Berechtigungen (f&uuml;r G&auml;ste, Mitglieder, Freunde und Ignorierte) f&uuml;r ihre Blogs zu vergeben.Administratoren und Moderatoren k&ouml;nnen Blogs immer sehen und kommentieren.',
	'BLOG_ENABLE_ZEBRA'						=> 'Freunde/Ignorierte Einstellungen',
	'BLOG_ENABLE_ZEBRA_EXPLAIN'				=> 'Wenn Du diese Einstellung deaktivierst, K&ouml;nnen Nutzer keine Berechtigungen f&uuml;r Freunde/Ignorierte mehr vergeben. Au&szlig;erdem werden einige andere Dinge deaktiviert.',
	'BLOG_GUEST_CAPTCHA'					=> 'Eintr&auml;ge von G&auml;sten erst nach Captchaerkennung erlauben',
	'BLOG_INFORM'							=> 'User, die &uuml;ber Meldungen und freizugebende Beitr&auml;ge per PN informiert werden',
	'BLOG_INFORM_EXPLAIN'					=> 'Gebe hier die User_id\'s der Nutzer an, die eine private Nachricht erhalten sollen, wenn ein Blogeintrag oder ein Kommentar gemeldet wurde oder eine Freigabe erfordert.  Mehere Nutzer-IDs durch Kommata trennen, keine Leerzeichen einf&uuml;gen.',
	'BLOG_MAX_ATTACHMENTS'					=> 'Maximale Anzahl der erlaubten Dateianh&auml;nge pro Beitrag',
	'BLOG_MAX_ATTACHMENTS_EXPLAIN'			=> 'Diese Einstellung kann f&uuml;r jeden Nutzer durch die Nutzerberechtigungen &uuml;berschrieben werden.',
	'BLOG_MAX_RATING'						=> 'H&ouml;chste Blogbewertung',
	'BLOG_MAX_RATING_EXPLAIN'				=> 'Die h&ouml;chste Bewertung, die vergeben werden kann.',
	'BLOG_MESSAGE_FROM'						=> 'Nachricht gesendet von',
	'BLOG_MESSAGE_FROM_EXPLAIN'				=> 'Die User_ID des Nutzers, von dem du Benachrichtigungen und Nachrichten erhalten m&ouml;chtest.  Wenn der Benutzer nicht existiert, sind Fehlermeldungen die Folge.', 
	'BLOG_MIN_RATING'						=> 'Niedrigste Blogbewertung',
	'BLOG_MIN_RATING_EXPLAIN'				=> 'Die niedrigste Bewertung, die vergeben werden kann.',
	'BLOG_POST_VIEW_SETTINGS'				=> 'Blog Ansichts- und Eintragseinstellungen',
	'BLOG_QUICK_REPLY'						=> 'Quick Reply',
	'BLOG_QUICK_REPLY_EXPLAIN'				=> 'Aktiviert die Anzeige der Quickreply-Box beim betrachten eines Blogs.',
	'BLOG_SETTINGS'							=> 'User Blog Einstellungen',
	'BLOG_SETTINGS_EXPLAIN'					=> 'Hier kannst Du die Einstellungen des User Blog Mod &auml;ndern.',

	'CATEGORY_CREATED'						=> 'Kategorie erfolgreich angelegt!',
	'CATEGORY_DELETE'						=> 'Kategorie l&ouml;schen',
	'CATEGORY_DELETED'						=> 'Kategorie erfolgreich gel&ouml;scht!',
	'CATEGORY_DELETE_EXPLAIN'				=> 'Bist Du sicher, da&szlig; Du diese Kategorie l&ouml;schen willst?',
	'CATEGORY_DESCRIPTION_EXPLAIN'			=> 'Beschreibung des Zwecks diser Kategorie.',
	'CATEGORY_EDIT_EXPLAIN'					=> 'Hier kannst Du die Einstellungen der Kategorie &auml;ndern.',
	'CATEGORY_INDEX'						=> 'Kategorieindex',
	'CATEGORY_NAME_EMPTY'					=> 'Du mu&szlig;t einen Namen f&uuml;r die Kategorie eintragen.',
	'CATEGORY_PARENT'						=> '&Uuml;bergeordnete Kategorie',
	'CATEGORY_RULES_EXPLAIN'				=> 'Hier kannst Du Regeln eintragen, die &uuml;ber jeder Kategorie eingeblendet werden.',
	'CATEGORY_SETTINGS'						=> 'Kategorieeinstellungen',
	'CATEGORY_UPDATED'						=> 'Kategorie erfolgreich aktualisiert!',
	'CLICK_CHECK_NEW_VERSION'				=> '%sHier%s klicken um nach Updates der f&uuml;r den User Blog Mod zu suchen',
	'CLICK_GET_NEW_VERSION'					=> '%sHier%s klicken um die neueste Version des User Blog Mod zu bekommen.',
	'CLICK_UPDATE'							=> '%sHier%s klicken um die Datenbank des User Blog Mod zu aktualisieren.',
	'CONTINUE'								=> 'Weiter',
	'COPYRIGHT'								=> 'Copyright',
	'CREATE_CATEGORY'						=> 'Kategorie erstellen',

	'DATABASE_VERSION'						=> 'Datenbankversion',
	'DEFAULT_TEXT_LIMIT'					=> 'Angezeigte Textl&auml;nge auf der Hauptseite des Blogs',
	'DEFAULT_TEXT_LIMIT_EXPLAIN'			=> 'Der angezeigte Text eines Blogeintrages auf der &Uuml;bersichtsseite wird auf die hier eingetragene Zeichenzahl gek&uuml;rzt.',
	'DELETE_SUBCATEGORIES'					=> 'Unterkategorien l&ouml;schen',

	'EDIT_CATEGORY'							=> 'Kategorie bearbeiten',
	'ENABLE_BLOG_CUSTOM_PROFILES'			=> 'Benutzerdefinierte Profilfelder auf den Blogseiten zeigen',
	'ENABLE_SUBSCRIPTIONS'					=> 'User/Blog Benachrichtigungen',
	'ENABLE_SUBSCRIPTIONS_EXPLAIN'			=> 'Erlaubt registrierten Nutzern Blogs und Nutzer zu beobachten und Nachrichten &uuml;ber neue Eintr&auml;ge und Kommentare zu erhalten.',
	'ENABLE_USER_BLOG'						=> 'User Blog Mod',
	'ENABLE_USER_BLOG_EXPLAIN'				=> 'Beachte, da&szlig; ACP and UCP des User Blog Mod immer aktiviert bleiben, solange der Mod installiert ist (Sofern Du diese Module nicht deaktivierst oder entfernst).',
	'ENABLE_USER_BLOG_PLUGINS'				=> 'Pluginsystem',
	'ENABLE_USER_BLOG_PLUGINS_EXPLAIN'		=> 'Wenn Du dies deaktivierst, werden alle momentan installierten Plugins deaktiviert. Die Pluginsektion im ACP wird trotzdem weiterhin angezeigt.',

	'FILE_VERSION'							=> 'Dateiversion',

	'INSTALLED_PLUGINS'						=> 'installierte Plugins',

	'LATEST_VERSION'						=> 'aktuelle Version',

	'MOVE_BLOGS_TO'							=> 'Blogs verschieben',
	'MOVE_SUBCATEGORIES_TO'					=> 'Unterkategorien verschieben',

	'NOT_ALLOWED_IN_BLOG'					=> 'In User Blogs nicht erlaubt',
	'NO_DESTINATION_CATEGORY'				=> 'Keine Zielkategorie',
	'NO_INSTALLED_PLUGINS'					=> 'Keine installierten Plugins',
	'NO_PARENT'								=> 'keine &uuml;bergeordnete Kategorie',
	'NO_UNINSTALLED_PLUGINS'				=> 'Keine nichtinstallierten Plugins',

	'OUTPUT_CPLINKS_BLOCK'					=> 'Profil-Bloglinks in benutzerdefinierten Profilfeldern ausgeben',
	'OUTPUT_CPLINKS_BLOCK_EXPLAIN'			=> 'Wenn diese Einstellung auf NEIN steht, werden die "Blogs zeigen"-Links nicht mehr mit den benutzerdefinierten Profilfeldern ausgegeben. Du mu&szlig;t die Links dann manuell in deine Templates einf&uuml;gen damit sie angezeigt werden.',

	'PARENT_NOT_EXIST'						=> 'Das gew&auml;hlte, &uuml;bergeordnete Element existiert nicht.',
	'PLUGINS_DISABLED'						=> 'Plugins sind deaktiviert.',
	'PLUGINS_NAME'							=> 'Plugin Name',
	'PLUGIN_ACTIVATE'						=> 'Aktivieren',
	'PLUGIN_ALREADY_INSTALLED'				=> 'Das ausgew&auml;hlte Plugin ist bereits intalliert.',
	'PLUGIN_DEACTIVATE'						=> 'Deaktivieren',
	'PLUGIN_INSTALL'						=> 'Installieren',
	'PLUGIN_NOT_EXIST'						=> 'Das gew&auml;hlte Plugin existiert nicht.',
	'PLUGIN_NOT_INSTALLED'					=> 'Das gew&auml;hlte Plugin ist nicht installiert.',
	'PLUGIN_UNINSTALL'						=> 'Deinstallieren',
	'PLUGIN_UNINSTALL_CONFIRM'				=> 'Bist du sicher, da&szlig; du dieses Plugin deinstallieren willst?<br/><strong>Dadurh werden alle, durch dieses Plugin gespeicherten Daten aus der Datenbank entfernt (alle gespeicherten Daten gehen verloren)!</strong><br/><br/>Um das Plugin vollst&auml;ndig zu entfernen, mu&szlig;t du alle Dateien des Plugins l&ouml;schen und die, durch das Plugin vorgenommenen &Auml;nderungen manuell r&uuml;ckg&auml;ngig machen.',
	'PLUGIN_UPDATE'							=> 'DB aktualisieren',

	'REMOVE_ALL_BLOGS'						=> 'Just delete the category.',

	'SELECT_CATEGORY'						=> 'Kategorie w&auml;hlen',

	'UNINSTALLED_PLUGINS'					=> 'Deinstallierte Plugins',
	'USER_TEXT_LIMIT'						=> 'Angezeigte Textl&auml;nge auf der Blogseite des Nutzers',
	'USER_TEXT_LIMIT_EXPLAIN'				=> 'Hat die gleiche Wirkung, wie oben, bezieht sich aber auf die &Uuml;bersichtsseite der per&ouml;nlichen Blogs eines Nutzers.',

	'VERSION'								=> 'Version',
));

?>