<?php
/**
*
* Knowledge Base [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @author Tobi Schaefer http://www.tas2580.de/
*
* @package language
* @version $Id: info_acp_kb.php,v 1.1.1.1 2009/05/15 05:16:04 damysterious Exp $
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

$lang = array_merge($lang, array(
	'KB_NAME'				=> 'Báza Poznatkov',
	'KB_CONFIG'				=> 'Nastavenia Báza Poznatkov',
	'TYPES'					=> 'Typy článkov',
	'CATEGORIES'			=> 'Vytvorenie Kategórie Báza Poznatkov',
));

?>