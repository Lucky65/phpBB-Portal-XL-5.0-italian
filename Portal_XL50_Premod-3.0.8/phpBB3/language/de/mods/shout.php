<?php
/** 
*
* shout [Deutsch - Du]
*
* @package language
* @version $Id: shout.php 249 2008-02-16 13:08:57Z paul $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
	'MISSING_DIV' 			=> 'Die Shoutbox div kann nicht gefunden werden.',
	'NO_POST_GUEST'         => 'G&auml;ste k&ouml;nen nicht posten.',
	'LOADING' 				=> 'Laden',
	'POST_MESSAGE'			=> 'Nachricht posten',
	'SENDING' 				=> 'Nachricht senden.',
	'MESSAGE_EMPTY'			=> 'Die NAchricht ist leer.',
	'XML_ER' 				=> 'XML Error.',
	'NO_MESSAGE' 			=> 'Es sind keine Nachrichten vorhanden.',
	'NO_AJAX' 				=> 'Kein Ajax',
	'JS_ERR' 				=> 'Es gibt einen JavaScript Error. \nError:',
	'LINE' 					=> 'Line',
	'FILE' 					=> 'File',
	'FLOOD_ERROR'	 		=> 'Flood error',
	'POSTED' 				=> 'Nachricht gesendet.',
	
	'NO_QUOTE' 				=> 'Ben&uuml;tze kein list, quote oder code BBCode.',
	'SMILIES' 				=> 'Smilies', 
	'DEL_SHOUT' 			=> 'Bist du sicher, dass du diesen Eintrag entfernen willst?',
	'NO_SHOUT_ID'	 		=> 'Keine Shout ID.',
	'MSG_DEL_DONE' 			=> 'Nachricht wurde entfernt',
    'ONLY_ONE_OPEN'         => 'Du kannst nur 1 Edit Box offen haben',
    'EDIT'                  => 'Bearbeiten',
    'CANCEL'                => 'Abbrechen',
    'SENDING_EDIT'          => 'Bearbeitete Nachricht senden...',
    'EDIT_DONE'             => 'Die Nachricht wurde bearbeitet',
	
	'SHOUTBOX'				=> 'Shoutbox',
	
	'SERVER_ERR'			=> 'Irgendein Fehler trat w&auml;hrend der Anfrage an den Server auf',
	
	// No permission errors
	'NO_SMILIE_PERM'    => 'Es ist dir nicht gestattet Smilies zu verwenden',
	'NO_DELETE_PERM'    => 'Es ist dir nicht gestattet Nachrichten zu l&ouml;schen',
	'NO_POST_PERM'		=> 'Es ist dir nicht gestattet Nachrichten zu schreiben',
	'NO_EDIT_PERM'		=> 'Es ist dir nicht gestattet diese Nachricht zu bearbeiten',
	'NO_VIEW_PERM'      => 'Es ist dir nicht gestattet die Shoutbox anzuzeigen',
	'NO_ADMIN_PERM'     => 'Keine Adminberechtigungen gefunden',
	
	// Installation
	'MOD_INSTALLED'     => 'Die Shoutbox wurde installiert',
	'MOD_UPGRADED'		=> 'Die Shoutbox wurde upgegraded',
	'MOD_UPDATED'		=> 'Die Shoutbox wurde upgedated',
	'NO_FOUNDER'        => 'Nur Gr&uuml;nder k&ouml;nnen diese Datei &ouml;ffnen',
	'ONLY_UPGRADE'      => 'Dieses File ist nur geeignen f&uuml;r Upgrades von 1.0.x',
	'ONLY_INSTALL'      => 'Dieses File ist nur geeignen f&uuml;r Neuinstallstallationen',
	'ONLY_UPDATE'       => 'Dieses File ist nur geeignen f&uuml;r Updates',
	'ALREADY_UPTODATE'	=> 'Die Datenbank ist schon auf die neueste Version gebracht.',
));

?>
