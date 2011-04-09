<?php

/**
*
* automatic_dst.php [Italian]
*
* @package - "Automatic Daylight Savings Time 2"
* @version $Id: automatic_dst.php 3 2009-03-28 MartectX $
* @copyright (C)2008-2009, MartectX ( http://mods.martectx.de/ )
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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
	'AUTOMATIC_DST_DISPLAY'		=> 'Fuso orario: %1$s %2$s',
	'AUTOMATIC_DST_SETUP'		=> 'Vai nella configurazione del tuo forum e scegli un nuovo fuso orario (se invece è già corretto confermalo semplicemente cliccando su "Invia").<br /><br /><strong>Il fuso orario non è aggiornato!</strong>',
	'AUTOMATIC_DST_INSTALLED'	=> 'Aggiornamento fuso orario completato.<br /><br /><strong>Elimina questo file dal tuo server!</strong>',

	// I know this is pointless for English but here goes nonetheless...
	'automatic_dst_timezones'	=> array(
		'Africa'		=> 'Africa',
		'America'		=> 'America',
		'Antarctica'	=> 'Antarctica',
		'Arctic'		=> 'Arctic',
		'Asia'			=> 'Asia',
		'Atlantic'		=> 'Atlantic',
		'Australia'		=> 'Australia',
		'Europe'		=> 'Europe',
		'Indian'		=> 'Indian',
		'Pacific'		=> 'Pacific'
	)
));

?>