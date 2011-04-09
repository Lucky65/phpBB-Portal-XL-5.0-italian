<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: ucp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $ 
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
	'BLOG_CSS'								=> 'Blog CSS',
	'BLOG_CSS_EXPLAIN'						=> 'Hier kannst Du deinen CSS-Code einf&uuml;gen, mit dem Du das Aussehen deines Blogs nach deinen W&uuml;nschen ver&auml;ndern kannst.',
	'BLOG_INSTANT_REDIRECT'					=> 'Sofortige Weiterleitung',
	'BLOG_INSTANT_REDIRECT_EXPLAIN'			=> 'Damit leitet der Blog-Mod sofort auf die n&auml;chste Seite weiter, anstatt erst eine Infoseite einzublenden.',
	'BLOG_STYLE'							=> 'Blog Style',
	'BLOG_STYLE_EXPLAIN'					=> 'W&auml;hle daen gew&uuml;nschten Style f&uuml;r dein Blog.<br />Wenn der Style ein * hinter dem Namen hat, kannst Du eigenes CSS hinzuf&uuml;gen, um das Erscheinungsbild anzupassen (sofern Du die Berechtigung hast).',

	'NONE'									=> 'Keine',
	'NO_PERMISSIONS'						=> 'Kann deine Blogeintr&auml;ge nicht lesen oder beantworten.',

	'REPLY_PERMISSIONS'						=> 'Kann deine Blogeintr&auml;ge lesen und beantworten.',
	'RESYNC_PERMISSIONS'					=> 'Berechtigungen neu synchronisieren',
	'RESYNC_PERMISSIONS_EXPLAIN'			=> 'Ausw&auml;hlen, wenn Du die oben gemachten Einstellungen f&uuml;r alle deine Blogeintr&auml;ge &uuml;bernehmen m&ouml;chtest.',

	'SUBSCRIPTION_DEFAULT'					=> 'Standardbenachrichtigung',
	'SUBSCRIPTION_DEFAULT_EXPLAIN'			=> 'W&auml;hle aus, wie Du normalerweise benachrichtigt werden m&ouml;chstest, wenn jemand auf einen deiner Blogeintr&auml;ge oder Kommentare antwortet.  Du kannst dies auch f&uuml;r jeden deiner Blogeintr&auml;ge einzeln einstellen.',

	'UCP_BLOG_PERMISSIONS_EXPLAIN'			=> 'Hier kannst Du die Nutzerberechtigungen f&uuml;r deinen Blog &auml;ndern.<br/>Beachte bitte, da&szlig; die globalen Boardeinstellungen deine Einstellungen &uuml;berschreiben.',
	'UCP_BLOG_SETTINGS_EXPLAIN'				=> 'Hier kannst Du die Grundeinstellungen f&uuml;r deinen Blog &auml;ndern.',
	'UCP_BLOG_TITLE_DESCRIPTION_EXPLAIN'	=> 'Hier kannst Du den Titel und die Beschreibung f&uuml;r deinen Blog festlegen.',
	'USER_PERMISSIONS_DISABLED'				=> 'Die Administratoren haben das Rechtesystem deaktiviert.',

	'VIEW_PERMISSIONS'						=> 'Kann deine Blogeintr&auml;ge lesen.',
));

?>