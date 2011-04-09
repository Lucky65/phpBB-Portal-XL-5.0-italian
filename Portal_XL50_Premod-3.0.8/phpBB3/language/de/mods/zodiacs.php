<?php
/**
*
* DM Multi Zodiacs
* User language File[German]
*
* @package language
* @version 1.0.0
* @copyright (c) 2010 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* @based on Zodiac Beta by evil<3 - http://phpbbmodders.net
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// IMPORTANT NOTE:
//
// You need do edit the language file to reflect your path to the images!
// So. ie. in below case, the forum is in a subdirectory. You need to edit the first part
// of the path based on your root directory. If your forum is located in the root
// directory, simply start with /images/.  If it's in a sub directory, start with the name
// of the sub directory. ie. /phpbb/images/
//
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
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'ZODIAC'	=> 'Sternzeichen',

	'ZODIACS'	=> array(
		'<br /><img src="./images/zodiacs/european/icon_zodiac_steinbock.png" alt="Europe: Steinbock" title="Europe: Steinbock" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_wassermann.png" alt="Europe: Wassermann" title="Europe: Wassermann" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_fische.png" alt="Europe: Fische" title="Europe: Fische" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_widder.png" alt="Europe: Widder" title="Europe: Widder" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_stier.png" alt="Europe: Stier" title="Europe: Stier" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_zwilling.png" alt="Europe: Zwilling" title="Europe: Zwilling" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_krebs.png" alt="Europe: Krebs" title="Europe: Krebs" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_loewe.png" alt="Europe: Löwe" title="Europe: Löwe" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_jungfrau.png" alt="Europe: Jungfrau" title="Europe: Jungfrau" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_waage.png" alt="Europe: Waage" title="Europe:  Waage" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_skorpion.png" alt="Europe:Skorpion" title="Europe: Skorpion" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_schuetze.png" alt="Europe:Schütze" title="Europe: Schütze" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_steinbock.png" alt="Europe:Steinbock" title="Europe: Steinbock" height="30" width="30" />',
	),

	'ZODIACS_INDIAN'	=> array(
		'<img src="./images/zodiacs/indian/icon_zodiac_gans.gif" alt="Indian: Gans" title="Indian: Gans" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_otter.gif" alt="Indian: Otter" title="Indian: Otter" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_wolf.gif" alt="Indian: Wolf" title="Indian: Wolf" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_falke.gif" alt="Indian: Falke" title="Indian: Falke" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_biber.gif" alt="Indian: Biber" title="Indian: Biber" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_hirsch.gif" alt="Indian: Hirsch" title="Indian: Hirsch" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_specht.gif" alt="Indian: Specht" title="Indian: Specht" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_lachs.gif" alt="Indian: Lachs" title="Indian: Lachs" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_baer.gif" alt="Indian: Braunbär" title="Indian: Braunbär" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_kraehe.gif" alt="Indian: Krähe" title="Indian: Krähe" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_schlange.gif" alt="Indian: Schlange" title="Indian: Schlange" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_eule.gif" alt="Indian: Eule" title="Indian: Eule" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_gans.gif" alt="Indian: Gans" title="Indian: Gans" height="30" width="30" />',
	),

	'ZODIACS_CHINESE'	=> array(
		'Rat' 		=> '<img src="./images/zodiacs/chinese/icon_zodiac_ratte.png" alt="Chinese: Ratte" title="Chinese: Ratte" height="30" width="30" />',
		'Buffalo' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_bueffel.png" alt="Chinese: Büffel" title="Chinese: Büffel" height="30" width="30" />',
		'Tiger' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_tiger.png" alt="Chinese: Tiger" title="Chinese: Tiger" height="30" width="30" />',
		'Cat'   	=> '<img src="./images/zodiacs/chinese/icon_zodiac_hase.png" alt="Chinese: Hase" title="Chinese: Hase" height="30" width="30" />',
		'Dragon' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_drache.png" alt="Chinese: Drache" title="Chinese: Drache" height="30" width="30" />',
		'Snake' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_schlange.png" alt="Chinese: Schlange" title="Chinese: Schlange" height="30" width="30" />',
		'Horse' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_pferd.png" alt="Chinese: Pferd" title="Chinese: Pferd" height="30" width="30" />',
		'Goat' 		=> '<img src="./images/zodiacs/chinese/icon_zodiac_schaf.png" alt="Chinese: Schaf" title="Chinese: Schaf" height="30" width="30" />',
		'Monkey'    => '<img src="./images/zodiacs/chinese/icon_zodiac_affe.png" alt="Chinese: Affe" title="Chinese: Affe" height="30" width="30" />',
		'Cock'      => '<img src="./images/zodiacs/chinese/icon_zodiac_hahn.png" alt="Chinese: Hahn" title="Chinese: Hahn" height="30" width="30" />',
		'Dog' 		=> '<img src="./images/zodiacs/chinese/icon_zodiac_hund.png" alt="Chinese: Hund" title="Chinese: Hund" height="30" width="30" />',
		'Pig'       => '<img src="./images/zodiacs/chinese/icon_zodiac_schwein.png" alt="Chinese: Schwein" title="Chinese: Schwein" height="30" width="30" />',
	),

));

?>