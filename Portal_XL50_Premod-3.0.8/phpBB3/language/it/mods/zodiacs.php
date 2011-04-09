<?php
/**
*
* DM Multi Zodiacs
* User language File[Italian]
*
* @package language
* @version 1.0.0
* @copyright (c) 2010 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @copyright (c) 2010 luckylab.eu - translated for portal xl on 2010/05/21
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
// So. ie. in below case, the testpremod is in a subdirectory. You need to edit the first part
// of the path based on your root directory. If your testpremod is located in the root
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
	'ZODIAC'	=> 'Zodiacs',

	'ZODIACS'	=> array(
		'<br /><img src="./images/zodiacs/european/icon_zodiac_steinbock.png" alt="Europa: Capricorno" title="Europa: Capricorn" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_wassermann.png" alt="Europa: Aquario" title="Europa: Aquarius" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_fische.png" alt="Europa: Pesci" title="Europa: Pesci" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_widder.png" alt="Europa: Ariete" title="Europa: Ariete" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_stier.png" alt="Europa: Toro" title="Europa: Toro" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_zwilling.png" alt="Europa: Gemelli" title="Europa: Gemelli" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_krebs.png" alt="Europa: Cancro" title="Europa: Cancro" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_loewe.png" alt="Europa: Leone" title="Europa: Leone" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_jungfrau.png" alt="Europa: Vergine" title="Europa: Vergine" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_waage.png" alt="Europa: Bilancia" title="Europa: Bilancia" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_skorpion.png" alt="Europa: Scorpione" title="Europa: Scorpione" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_schuetze.png" alt="Europa: Sagittario" title="Europa: Sagittario" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_steinbock.png" alt="Europa: Capricorno" title="Europa: Capricorno" height="30" width="30" />',
	),

	'ZODIACS_INDIAN'	=> array(
		'<img src="./images/zodiacs/indian/icon_zodiac_gans.gif" alt="India: Oca" title="India: Oca" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_otter.gif" alt="India: Lontra" title="India: Lontra" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_wolf.gif" alt="India: Lupo" title="India: Lupo" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_falke.gif" alt="India: Falco" title="India: Falco" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_biber.gif" alt="India: Castoro" title="India: Castoro" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_hirsch.gif" alt="India: Alce" title="India: Alce" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_specht.gif" alt="India: Picchio" title="India: Picchio" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_lachs.gif" alt="India: Salmone" title="India: Salmone" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_baer.gif" alt="India: Orso" title="India: Orso" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_falke.gif" alt="India: Falco" title="India: Falco" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_schlange.gif" alt="India: Serpente" title="India: Serpente" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_eule.gif" alt="India: Gufo" title="India: Gufo" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_gans.gif" alt="India: Oca" title="India: Oca" height="30" width="30" />',
	),

	'ZODIACS_CHINESE'	=> array(
		'Rat' 		=> '<img src="./images/zodiacs/chinese/icon_zodiac_ratte.png" alt="Cina: Topo" title="Cina: Topo" height="30" width="30" />',
		'Buffalo' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_bueffel.png" alt="Cina: Bufalo" title="Cina: Bufalo" height="30" width="30" />',
		'Tiger' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_tiger.png" alt="Cina: Tigre" title="Cina: Tigre" height="30" width="30" />',
		'Cat'   	=> '<img src="./images/zodiacs/chinese/icon_zodiac_hase.png" alt="Cina: Coniglio" title="Cina: Coniglio" height="30" width="30" />',
		'Dragon' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_drache.png" alt="Cina: Drago" title="Cina: Drago" height="30" width="30" />',
		'Snake' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_schlange.png" alt="Cina: Serpente" title="Cina: Serpente" height="30" width="30" />',
		'Horse' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_pferd.png" alt="Cina: Cavallo" title="Cina: Cavallo" height="30" width="30" />',
		'Goat' 		=> '<img src="./images/zodiacs/chinese/icon_zodiac_schaf.png" alt="Cina: Capra" title="Cina: Capra" height="30" width="30" />',
		'Monkey'    => '<img src="./images/zodiacs/chinese/icon_zodiac_affe.png" alt="Cina: Scimmia" title="Cina: Scimmia" height="30" width="30" />',
		'Cock'      => '<img src="./images/zodiacs/chinese/icon_zodiac_hahn.png" alt="Cina: Gallo" title="Cina: Gallo" height="30" width="30" />',
		'Dog' 		=> '<img src="./images/zodiacs/chinese/icon_zodiac_hund.png" alt="Cina: Cane" title="Cina: Cane" height="30" width="30" />',
		'Pig'       => '<img src="./images/zodiacs/chinese/icon_zodiac_schwein.png" alt="Cina: Maiale" title="Cina: Maiale" height="30" width="30" />',
	),

));

?>