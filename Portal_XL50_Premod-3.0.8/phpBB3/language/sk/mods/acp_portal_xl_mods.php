<?php
/** 
*
* @name acp_portal_xl_mods.php [Slovak] prelo�en� s preklada�om Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_mods.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
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
// � � � � �
//

$lang = array_merge($lang, array(   
	'TITLE' 					=> 'Datab�za Inform�ci� o M�doch',
	'TITLE_EXPLAIN'				=> 'V tomto zadan� s� inform�cie o M�doch pou�it�ch aj vo va�ej datab�ze m��ete, ich vytvori�, upravi� alebo vymaza�.',
 
	'PORTAL_MOD_EDIT_HEADER'	=> 'Pridanie alebo �prava m�du',
	'ACP_MANAGE_MOD'			=> 'Pridanie alebo �prava m�dov',
	'ACP_MOD_EXPLAIN'			=> 'Spr�va M�dov',
	'ADD_MOD'					=> 'Prida� m�d',
	'DISABLE'					=> '<b>Block enabled</b>',
	'DISABLE_BLOCK'				=> 'Povoli�',
	'ENABLE'					=> '<b>Blok je zablokovan�</b>',
	'ENABLE_BLOCK'				=> 'Zablokova�',
	'MUST_SELECT_MOD'			=> 'Vybran� m�d',
	'MOD'						=> 'M�dy v datab�ze',
	'MOD_INFO'					=> 'M�d',
	'MOD_EXPLAIN'				=> 'Text of your Mod goes inhere',
	'MOD_ADDED'					=> 'Mod successfully added',
	'MOD_DISABLE'				=> '<b>Enable</b>',
	'MOD_DISABLE_EXPLAIN'		=> '<b>Enable :</b><br>Block display on the forum.',
	'MOD_DISABLE_EXPLAIN2'		=> 'You can enable or disable the Block display on the forum : ',
	'MOD_REMOVED'				=> 'Mod successfully odstr�nimd',
	'MOD_UPDATED'				=> 'Mod successfully edited',
	'RESET_MOD' 				=> 'Reset',
	'MOD_EDIT'					=> 'Edit Mod\'s',
	'MOD_EDIT_EXPLAIN'			=> 'V tomto zadan� m��ete prida� alebo upravi� existuj�ci M�d. Zadanie N�zvu a ��sla verzie je povinn�. M��ete zada� inform�cie o tom, kde je mo�n� stiahnu� M�d, alebo kde sa d� n�js� len samotn� M�d.',
	'MOD_TITLE'					=> 'N�zov M�du',
	'MOD_TITLE_EXPLAIN'			=> 'Short but descriptive title of the Mod.',
	'MOD_VERSION'				=> 'Verzia',
	'MOD_VERSION_EXPLAIN'		=> 'Verzia number eg. 0.4B5',
	'MOD_VERSION_TYPE'			=> 'Verzia Type',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Alpha, Beta, Dev alebo RC*',
	'MOD_DESC'					=> 'Popis',
	'MOD_DESC_EXPLAIN'			=> 'Popis of your Mod goes inhere. A clear description can be taken from a mod\'s install description most of the time.',
	'MOD_AUTHOR'				=> 'Autor',
	'MOD_AUTHOR_EXPLAIN'		=> 'Name of the original author, place Unknown if not known',
	'MOD_URL'					=> 'URL',
	'MOD_URL_EXPLAIN'			=> 'Specify a site URL for this modification (link to mod -description or -topic).',
	'MOD_DOWNLOAD'				=> 'Download',
	'MOD_DOWNLOAD_EXPLAIN'		=> 'Specify a download URL for this modification (direct link to download from).',

));

?>