<?php
/**
*
* Module info ajax shoutbox [German]
*
* @package language
* @version $Id: ajax_shoutbox.php,v 1.1.1.1 2009/05/15 05:15:55 damysterious Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* @german translation by woipi
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
	'ACP_SHOUTBOX_SETTINGS'				=> 'Ajax Shoutbox Einstellungen',
	'ACP_SHOUTBOX_SETTINGS_EXPLAIN'     => 'Du wirst die Basiseinstellungen der Ajax Shoutbox vorfinden.',
	'ACP_SHOUTBOX_OVERVIEW'             => 'Ajax Shoutbox &Uuml;bersicht',

	// Overview
	'AS_OVERVIEW'			=> 'MOD &Uuml;bersicht',
	'AS_OVERVIEW_EXPLAIN'	=> 'Unten wirst du die Stats von der Ajax Shoutbox finden.<br/>Wenn du einen Programmfehler findest, oder um eine Eigenschaft bitten willst, besuche bitte unseren <a href="http://www.paulsohier.nl/ajax">Link</a>.<br/>Vor dem Einreichen, &uuml;berpr&uuml;fe bitte zuerst, ob der Programmfehler bereits berichtet worden ist.<br/>Weitere Informationen &uuml;ber die Shoutbox, den Entwicklungsstatus und andere Informationen, kannst du aus unseren Link entnehmen.<br/>Die Berechtigungen der Shoutbox k&ouml;nnen unter dem Berechtigungsreiter im ACP unter den Benutzer ung Gruppen Berechtigungen gesetzt werden.',

	
	'AS_STATS'      => 'Shoutbox Statistik',
	'NUMBER_SHOUTS' => 'Anzahl der Shouts',
	'AS_VERSION'    => 'Shoutbox Version',
	'AS_OPTIONS'    => 'Shoutbox Optionen',
	'PURGE_AS'      => 'Alle Meldungen l&ouml;schen',
	
	'UNABLE_CONNECT'    => 'Es war mir nicht m&ouml;glich die Verbindung zum Versionscheck Server herzustellen, Er hat mir diesen Fehler ausgegeben: %s',
	'NEW_VERSION'       => 'Die Ajax Shoutbox ist nich auf dem neuesten Stand. Deine Version ist %1$s, die neueste Version ist %2$s. Lese <a href="%3$s">dies</a> f&uuml;r weitere Informationen',
	
	
	// Configuration
	'AS_PRUNE_TIME'				=> 'L&ouml;schungszeit',
	'AS_PRUNE_TIME_EXPLAIN'		=> 'Die Zeit, nach der die Nachrichten automatisch gel&ouml;scht werden. Wenn "L&ouml;schung bei maximaler Beitr&auml;gsanzahl" aktiviert ist, werden diese Einstellungen &uuml;berschrieben. Setze diese Einstellung auf 0, um die Einstellung zu deaktivieren.',
	'AS_MAX_POSTS'				=> 'Maximale Anzahl der Meldungen',
	'AS_MAX_POSTS_EXPLAIN'		=> 'Maximale Anzahl der Meldungen. Setze auf 0, um zu deaktivieren. Wenn die Einstellung aktiviert ist, wird sie die "L&ouml;schungszeit" Einstellungen <strong>&uuml;berschreiben</strong>!',
	
	'AS_FLOOD_INTERVAL'         => 'Anti-Spam Interval',
	'AS_FLOOD_INTERVAL_EXPLAIN' => 'Die minimale Zeit, die vergehen muss zwischen 2 Beitr&auml;gen eines Users. Setze auf 0, um zu deaktivieren.',
	
	'AS_IE_NR'				=> 'Anzahl an Nachrichten',
	'AS_IE_NR_EXPLAIN'		=> 'Die Anzahl an Nachrichten im Internet Explorer. Setze diese Einstellungen nicht zu hoch, wegen ein paar IE Fehlern.',
	'AS_NON_IE_NR'			=> 'Anzahl an Nachrichten',
	'AS_NON_IE_NR_EXPLAIN'	=> 'Die Anzahl an Nachrichten in anderen Browsern.',
	
));

?>