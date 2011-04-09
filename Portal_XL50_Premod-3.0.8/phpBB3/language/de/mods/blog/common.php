<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: common.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $ 
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* German translation Version 1.0.7 by FatFreddy (http://www.mebitco.de)
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
	'AVAILABLE_FEEDS'				=> 'verf&uuml;gbare Feeds',

	'BLOG'							=> 'Blog',
	'BLOGS'							=> 'Blogs',
	'BLOG_CONTROL_PANEL'			=> 'Blogeinstellungen',
	'BLOG_CREDITS'					=> 'Blog System powered by <a href="http://www.lithiumstudios.org/">User Blog Mod</a> &copy; EXreaction',
	'BLOG_DELETED_BY_MSG'			=> 'Dieser Blogeintrag wurde von %1$s am %2$s gel&ouml;scht.  Klicke <b>%3$shier%4$s</b> um diesen Eintrag wieder herzustellen.',
	'BLOG_DESCRIPTION'				=> 'Blogbeschreibung',
	'BLOG_LINKS'					=> 'Blog Links',
	'BLOG_MCP'						=> 'Blog Moderator CP',
	'BLOG_NOT_EXIST'				=> 'Dieser Blogeintrag existiert nicht.',
	'BLOG_SEARCH_BACKEND_NOT_EXIST'	=> 'The Search backend was not found.  Please contact an administrator or moderator.',
	'BLOG_STATS'					=> 'Blog Statistik',
	'BLOG_SUBJECT'					=> 'Blog Thema',
	'BLOG_TITLE'					=> 'Blog Titel',

	'CATEGORIES'					=> 'Kategorien',
	'CATEGORY'						=> 'Kategorie',
	'CATEGORY_DESCRIPTION'			=> 'Kategoriebeschreibung',
	'CATEGORY_NAME'					=> 'Kategoriename',
	'CATEGORY_RULES'				=> 'Kategorieregeln',
	'CLICK_INSTALL_BLOG'			=> '%sHier%s klicken um den User Blog Mod zu installieren.',
	'CNT_BLOGS'						=> '%s Blogeintr&auml;ge',
	'CNT_REPLIES'					=> '%s Antworten',
	'CNT_VIEWS'						=> ' %s mal betrachtet',
	'CONTINUE'						=> 'Weiter',
	'CONTINUED'						=> 'weiterlesen',

	'DELETE_BLOG'					=> ' Blog l&ouml;schen',
	'DELETE_REPLY'					=> 'Kommentar l&ouml;schen',

	'EDIT_BLOG'						=> ' Blog bearbeiten',
	'EDIT_REPLY'					=> 'Antwort bearbeiten',

	'FEED'							=> 'Feed',
	'FOE_PERMISSIONS'				=> 'Befugnisse von Ignorierten',
	'FRIEND_PERMISSIONS'			=> 'Befugnisse von Freunden',

	'GUEST_PERMISSIONS'				=> 'Gast Befugnisse',

	'LIMIT'							=> 'Limit',

	'MUST_BE_FOUNDER'				=> 'Du mu&szlig;t Gr&uuml;nder sein um auf diese Seite zuzugreifen.',
	'MY_BLOG'						=> 'Mein Blog',

	'NEW_BLOG'						=> 'Neuer Blogeintrag',
	'NO_BLOGS'						=> 'Keine Eintr&auml;ge im Blog.',
	'NO_BLOGS_USER'					=> 'Dieser Nutzer hat keine Blogeintr&auml;ge geschrieben.',
	'NO_BLOGS_USER_SORT_DAYS'		=> 'Dieser Nutzer hat in den letzten %s keine Blogeintr&auml;ge geschrieben.',
	'NO_CATEGORIES'					=> 'Es gibt keine Kategorien',
	'NO_CATEGORY'					=> 'Die gew&auml;hlte Kategorie existiert nicht.',
	'NO_PERMISSIONS_READ'			=> 'Du hast keine Berechtigung dieses Blog zu lesen.',
	'NO_REPLIES'					=> 'Keine Kommentare.',

	'ONE_BLOG'						=> '1 Blog',
	'ONE_REPLY'						=> '1 Kommentar',
	'ONE_VIEW'						=> '1 mal betrachtet',

	'PERMANENT_LINK'				=> 'permanenter Link',
	'PLUGIN_TEMPLATE_MISSING'		=> 'Die Templatedatei f&uuml;r das Plugin fehlt.', 
	'POPULAR_BLOGS'					=> 'Popul&auml;re Blogeintr&auml;ge',
	'POST_A_NEW_BLOG'				=> 'Blogeintrag schreiben',
	'POST_A_NEW_REPLY'				=> 'Kommentar schreiben',

	'RANDOM_BLOGS'					=> 'zuf&auml;llige Blogeintr&auml;ge',
	'RECENT_BLOGS'					=> 'neueste Blogeintr&auml;ge',
	'REGISTERED_PERMISSIONS'		=> 'Mitgliederbefugnisse',
	'BLOG_REPLIES'					=> 'Kommentare',
	'REPLY'							=> 'Kommentar schreiben',
	'REPLY_COUNT'					=> 'Kommentarz&auml;hler',
	'REPLY_DELETED_BY_MSG'			=> 'Dieser Kommentar wurde von %1$s am %2$s gel&ouml;scht.  Klicke <b>%3$shier%4$s</b> um diesen Kommentar wieder herzustellen.',
	'REPLY_NOT_EXIST'				=> 'Die Antwort existiert nicht.',
	'REPORT_BLOG'					=> 'Blog melden',
	'REPORT_REPLY'					=> 'Kommentar melden',
	'RETURN_BLOG_MAIN'				=> '%1$sZur&uuml;ck zu %2$ss Blog%3$s',
	'RETURN_BLOG_OWN'				=> '%sZur&uuml;ck zu deinem Blog%s',
	'RETURN_MAIN'					=> 'Klicke %shier%s um zur Hauptseite der Userblogs zur&uuml;ckzukehren.',

	'SEARCH_BLOGS'					=> 'Blogs durchsuchen',
	'SUBSCRIBE'						=> 'Beobachten',
	'SUBSCRIBE_BLOG'				=> 'Dieses Blog beobachten',
	'SUBSCRIBE_USER'				=> 'Das Blog dieses Nutzers beobachten',
	'SUBSCRIPTION'					=> 'Beobachtung',
	'SUBSCRIPTION_EXPLAIN'			=> 'W&auml;hle aus, wie du &uuml;ber zuk&uuml;nftige Kommentare zu diesem Blog informiert werden m&ouml;chtest.',
	'SUBSCRIPTION_EXPLAIN_REPLY'	=> 'Wenn Du dieses Blog bereits beobachtest, werden deine momentanen Einstellungen gezeigt (Was Du jetzt ausw&auml;hlst werden deine neuen Beobachtungseinstellungen sein.).',

	'TOTAL_BLOG_ENTRIES'			=> 'Blogeintr&auml;ge insgesamt <strong>%s</strong>',

	'UNSUBSCRIBE'					=> 'nicht mehr beobachten',
	'UNSUBSCRIBE_BLOG'				=> 'dieses Blog nicht mehr beobachten',
	'UNSUBSCRIBE_USER'				=> 'Blogs dieses Nutzers nicht mehr beobachten',
	'USERNAMES_BLOGS'				=> '%ss Blog',
	'USERNAMES_DELETED_BLOGS'		=> '%ss gel&ouml;schte Eintr&auml;ge',
	'USER_BLOGS'					=> 'User Blogs',
	'USER_BLOG_MOD_DISABLED'		=> 'Der User Blog Mod ist deaktiviert.',
	'USER_BLOG_RATINGS_DISABLED'	=> 'Das Bewertungssystem ist deaktiviert.',

	'VIEW_BLOG'						=> 'Blog lesen',
	'VIEW_REPLY'					=> 'Antwort lesen',

	'WARNING'						=> 'Warnung',
));

?>