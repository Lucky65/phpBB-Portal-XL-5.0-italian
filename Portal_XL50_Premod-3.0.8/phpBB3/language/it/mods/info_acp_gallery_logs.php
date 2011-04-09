<?php
/**
*
* info_acp_gallery_logs [Italian]
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
	'LOG_ALBUM_ADD'							=> '<strong>Nuovo album creato</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUM'					=> '<strong>Album cancellato</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUMS'					=> '<strong>Cancellato album e relativi sotto-album</strong><br />» %s',
	'LOG_ALBUM_DEL_MOVE_ALBUMS'				=> '<strong>Cancellato album e spostati sotto-albums</strong> a %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES'				=> '<strong>Cancellato album e spostate immagini </strong> per %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_ALBUMS'		=> '<strong>Cancellato album e relativi sotto-album, spostate immagini </strong> a %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_MOVE_ALBUMS'	=> '<strong>Cancellato album, spostate immagini</strong> a %1$s <strong>con relativi sotto-albums</strong> a %2$s<br />» %3$s',
	'LOG_ALBUM_DEL_IMAGES'					=> '<strong>Cancellato album con relative immagini</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_ALBUMS'			=> '<strong>Cancellato album, immagini e sotto-albums</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_MOVE_ALBUMS'		=> '<strong>Cancellato album e immagini, spostati sotto-albums</strong> a %1$s<br />» %2$s',
	'LOG_ALBUM_EDIT'						=> '<strong>Modificato dettagli album</strong><br />» %s',
	'LOG_ALBUM_MOVE_DOWN'					=> '<strong>Spostato album</strong> %1$s <strong>sotto</strong> %2$s',
	'LOG_ALBUM_MOVE_UP'						=> '<strong>Spostato album</strong> %1$s <strong>sopra</strong> %2$s',
	'LOG_ALBUM_SYNC'						=> '<strong>Sincronizzato album</strong><br />» %s',

	'LOG_CLEAR_GALLERY'					=> 'Log galleria pulito',

	'LOG_GALLERY_APPROVED'				=> '<strong>Immagine approvata</strong><br />» %s',
	'LOG_GALLERY_COMMENT_DELETED'		=> '<strong>Commento cancellato</strong><br />» %s',
	'LOG_GALLERY_COMMENT_EDITED'		=> '<strong>Commento cancellato</strong><br />» %s',
	'LOG_GALLERY_DELETED'				=> '<strong>Immagine cancellata</strong><br />» %s',
	'LOG_GALLERY_EDITED'				=> '<strong>Immagine modificata</strong><br />» %s',
	'LOG_GALLERY_LOCKED'				=> '<strong>Immagine bloccata</strong><br />» %s',
	'LOG_GALLERY_MOVED'					=> '<strong>Immagine spostata</strong><br />» from %1$s to %2$s',
	'LOG_GALLERY_REPORT_CLOSED'			=> '<strong>Segnalazione chiusa</strong><br />» %s',
	'LOG_GALLERY_REPORT_DELETED'		=> '<strong>Segnalazione cancellata</strong><br />» %s',
	'LOG_GALLERY_REPORT_OPENED'			=> '<strong>Segnalazione riaperta</strong><br />» %s',
	'LOG_GALLERY_UNAPPROVED'			=> '<strong>Immagine non approvata</strong><br />» %s',

	'LOGVIEW_VIEWALBUM'					=> 'Vedi album',
	'LOGVIEW_VIEWIMAGE'					=> 'Vedi immagine',
));

?>