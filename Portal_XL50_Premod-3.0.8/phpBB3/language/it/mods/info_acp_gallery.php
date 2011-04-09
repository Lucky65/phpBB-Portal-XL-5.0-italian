<?php
/**
*
* info_acp_gallery [Italian]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/03/29
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
	'ACP_GALLERY_ALBUM_MANAGEMENT'		=> 'Gestione album',
	'ACP_GALLERY_ALBUM_PERMISSIONS'		=> 'Permessi',
    'ACP_GALLERY_ALBUM_PERMISSIONS_COPY'=> 'Copia permessi',	
	'ACP_GALLERY_CLEANUP'				=> 'Pulizia galleria',
	'ACP_GALLERY_CONFIGURE_GALLERY'		=> 'Configura galleria',
	'ACP_GALLERY_LOGS'					=> 'Log galleria',
	'ACP_GALLERY_LOGS_EXPLAIN'			=> 'In questa lista vengono elencate tutte le azioni da moderatore della galleria come, approvazione, disapprovazione, blocco, sblocco, segnalazioni e l’eliminazione di immagini.',
	'ACP_GALLERY_MANAGE_ALBUMS'			=> 'Gestione albums',
	'ACP_GALLERY_OVERVIEW'				=> 'Panoramica',
	'ACP_IMPORT_ALBUMS'					=> 'Importa immagini',

	'GALLERY'							=> 'Galleria',
	'GALLERY_EXPLAIN'					=> 'Galleria immagini',
	'GALLERY_HELPLINE_ALBUM'			=> 'Galleria immagini: [album]image_id[/album], con questo BBCode puoi aggiungere una nuova immagine della galleria nei tuoi messaggi.',
	
	// A little line where you can give yourself some credits on the translation.
	//'GALLERY_TRANSLATION_INFO'        => 'English "phpBB Gallery"-Translation by <a href="http://www.flying-bits.org/">nickvergessen</a>',
	'GALLERY_TRANSLATION_INFO'			=> '"phpBB Gallery" - Traduzione italiana &copy; 2009-2011 a cura di <a href="http://www.portalxl.eu/">portalxl.eu</a>',
	
	'IMAGES'							=> 'Immagini',
	'IMG_BUTTON_UPLOAD_IMAGE'			=> 'Carica immagini',

	'PERSONAL_ALBUM'					=> 'Album personale',
	'PHPBB_GALLERY'						=> 'Galleria phpBB',

	'TOTAL_IMAGES_OTHER'				=> 'Totale immagini <strong>%d</strong>',
	'TOTAL_IMAGES_ZERO'					=> 'Totale immagini <strong>0</strong>',
));

?>