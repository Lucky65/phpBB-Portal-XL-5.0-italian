<?php
/**
*
* acp_info_auto_gropus [Italian]
*
* @package language
* @version 1.0.0 $
* @copyright (c) 2007 A_Jelly_Doughnut
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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
	'AUTO_GROUP'			=> 'Configurazione Gruppi Automatici',
	'GROUP_MIN_POSTS'		=> 'Messaggi minimi',
	'GROUP_MAX_POSTS'		=> 'Messaggi massimi',
	'GROUP_MIN_DAYS'		=> 'Messaggi minimi dalla registrazione',
	'GROUP_MAX_DAYS'		=> 'Messaggi massimi dalla registrazione',
	'GROUP_MIN_WARNINGS'	=> 'Punteggi minimi',
	'GROUP_MAX_WARNINGS'	=> 'Punteggi massimi',
	'DEFAULT_AUTO_GROUP'	=> 'Riporta ai valori di default',
	'DEFAULT_AUTO_GROUP_EXPLAIN'	=> 'Gli utenti cambieranno il loro gruppo predefinito nel momento in cui saranno aggiunti a questo gruppo.',)
);
?>