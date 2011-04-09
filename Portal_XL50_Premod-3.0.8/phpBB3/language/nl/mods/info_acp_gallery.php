<?php
/**
*
* info_acp_gallery [Nederlands]
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
	'ACP_GALLERY_ALBUM_MANAGEMENT'		=> 'Albumbeheer',
	'ACP_GALLERY_ALBUM_PERMISSIONS'		=> 'Albumpermissies',
	'ACP_GALLERY_ALBUM_PERMISSIONS_COPY'=> 'Copy permissions',
	'ACP_GALLERY_CLEANUP'				=> 'Galerie opruimen',
	'ACP_GALLERY_CONFIGURE_GALLERY'		=> 'Configureer Galerie',
	'ACP_GALLERY_LOGS'					=> 'Galerie-log',
	'ACP_GALLERY_LOGS_EXPLAIN'			=> 'Deze toont alle moderator-acties in de galerij, zoals goed- of afkeuren, (ont)sluiten, rapportages sluiten en afbeeldingen verwijderen.',
	'ACP_GALLERY_MANAGE_ALBUMS'			=> 'Beheer Albums',
	'ACP_GALLERY_OVERVIEW'				=> 'Overzicht',
	'ACP_IMPORT_ALBUMS'					=> 'Importeer Afbeeldingen',

	'GALLERY'							=> 'Galerie',
	'GALLERY_EXPLAIN'					=> 'Afbeeldingen Galerie',
	'GALLERY_HELPLINE_ALBUM'			=> 'Gallery image: [album]image_id[/album], with this BBCode you can add an image from the gallery into your post.',

	// A little line where you can give yourself some credits on the translation.
	//'GALLERY_TRANSLATION_INFO'			=> 'English "phpBB Gallery"-Translation by <a href="http://www.flying-bits.org/">nickvergessen</a>',
	'GALLERY_TRANSLATION_INFO'			=> '',
	'IMAGES'							=> 'Afbeeldingen',
	'IMG_BUTTON_UPLOAD_IMAGE'			=> 'Upload afbeelding',

	'PERSONAL_ALBUM'					=> 'Persoonlijk album',
	'PHPBB_GALLERY'						=> 'phpBB Galerie',

	'TOTAL_IMAGES_OTHER'				=> 'Aantal afbeeldingen <strong>%d</strong>',
	'TOTAL_IMAGES_ZERO'					=> 'Geen afbeeldingen',
));

?>