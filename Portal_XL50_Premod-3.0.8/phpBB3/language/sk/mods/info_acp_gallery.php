<?php
/**
*
* info_acp_gallery [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package phpBB Gallery
* @version $Id: info_acp_gallery.php 1291 2009-08-18 19:26:42Z nickvergessen $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

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

$lang = array_merge($lang, array(
	'ACP_GALLERY_ALBUM_MANAGEMENT'		=> 'Správa Albumu',
	'ACP_GALLERY_ALBUM_PERMISSIONS'		=> 'Povolenia',
	'ACP_GALLERY_ALBUM_PERMISSIONS_COPY'=> 'Skopírovať oprávnenia',
	'ACP_GALLERY_CLEANUP'				=> 'Prečistenie galérie',
	'ACP_GALLERY_CONFIGURE_GALLERY'		=> 'Nastavenie galérie',
	'ACP_GALLERY_LOGS'					=> 'Protokol Galérie',
	'ACP_GALLERY_LOGS_EXPLAIN'			=> 'Tento súpis obsahuje všetky výkony moderátorov, ako schválenia, zamietnutia, uzamknutia, odblokovania, uzavrenie správ a vymazanie obrázkov.',
	'ACP_GALLERY_MANAGE_ALBUMS'			=> 'Vytvorenie a správa albumov',
	'ACP_GALLERY_OVERVIEW'				=> 'Prehľad',
	'ACP_IMPORT_ALBUMS'					=> 'Import Obrázkov',

	'GALLERY'							=> 'Galéria',
	'GALLERY_EXPLAIN'					=> 'Galéria Obrázkov',
	'GALLERY_HELPLINE_ALBUM'			=> 'Obrázky Galérie: [album]image_id[/album], s týmto BBCode môžete pridať obrázok z galérie do svojho príspevku.',

	// A little line where you can give yourself some credits on the translation.
	//'GALLERY_TRANSLATION_INFO'			=> 'Anglická "Galéria phpBB"-Preklad <a href="http://www.flying-bits.org/">nickvergessen</a>',
	'GALLERY_TRANSLATION_INFO'			=> '',

	'IMAGES'							=> 'Obrázky',
	'IMG_BUTTON_UPLOAD_IMAGE'			=> 'Nahratie obrázku',

	'PERSONAL_ALBUM'					=> 'Osobný album',
	'PHPBB_GALLERY'						=> 'Galéria phpBB',

	'TOTAL_IMAGES_OTHER'				=> 'Celkom obrázkov <strong>%d</strong>',
	'TOTAL_IMAGES_ZERO'					=> 'Celkom obrázkov <strong>0</strong>',
));

?>