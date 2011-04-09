<?php
/**
*
* info_acp_gallery_logs [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package phpBB Gallery
* @version $Id: info_acp_gallery_logs.php 1004 2009-03-03 23:04:13Z nickvergessen $
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
	'LOG_ALBUM_ADD'							=> '<strong>Vytvoril nový album</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUM'					=> '<strong>Vymazal album</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUMS'					=> '<strong>Vymazal album a jeho podalbumy</strong><br />» %s',
	'LOG_ALBUM_DEL_MOVE_ALBUMS'				=> '<strong>Vymazal album a premiestnil podalbumy</strong> do %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES'				=> '<strong>Vymazal album a premiestnil obrázky </strong> do %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_ALBUMS'		=> '<strong>Vymazal album a aj podalbumy, premiestnil obrázky</strong> do %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_MOVE_ALBUMS'	=> '<strong>Vymazal album, premiestnil obrázky</strong> do %1$s <strong>a podalbumy</strong> do %2$s<br />» %3$s',
	'LOG_ALBUM_DEL_IMAGES'					=> '<strong>Vymazal album aj jeho obrázky</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_ALBUMS'			=> '<strong>Vymazal album, jeho obrazy a podalbumy</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_MOVE_ALBUMS'		=> '<strong>Vymazal album a jeho obrázky premiestnil do podalbuma</strong> do %1$s<br />» %2$s',
	'LOG_ALBUM_EDIT'						=> '<strong>Upravil detaily albumu</strong><br />» %s',
	'LOG_ALBUM_MOVE_DOWN'					=> '<strong>Premiestnil album</strong> %1$s <strong>below</strong> %2$s',
	'LOG_ALBUM_MOVE_UP'						=> '<strong>Premiestnil album</strong> %1$s <strong>above</strong> %2$s',
	'LOG_ALBUM_SYNC'						=> '<strong>Re-synchronizoval album</strong><br />» %s',

	'LOG_CLEAR_GALLERY'					=> 'Prečistil zaznamenia výkonov v galérii',

	'LOG_GALLERY_APPROVED'				=> '<strong>Schválil obrázok</strong><br />» %s',
	'LOG_GALLERY_COMMENT_DELETED'		=> '<strong>Vymazal komentár</strong><br />» %s',
	'LOG_GALLERY_COMMENT_EDITED'		=> '<strong>Upravil komentár</strong><br />» %s',
	'LOG_GALLERY_DELETED'				=> '<strong>Vymazal obrázok</strong><br />» %s',
	'LOG_GALLERY_EDITED'				=> '<strong>Upravil obrázok</strong><br />» %s',
	'LOG_GALLERY_LOCKED'				=> '<strong>Uzamkol obrázok</strong><br />» %s',
	'LOG_GALLERY_MOVED'					=> '<strong>Premiestnil obrázok</strong><br />» from %1$s to %2$s',
	'LOG_GALLERY_REPORT_CLOSED'			=> '<strong>Uzavrel oznam</strong><br />» %s',
	'LOG_GALLERY_REPORT_DELETED'		=> '<strong>Vymazal oznam</strong><br />» %s',
	'LOG_GALLERY_REPORT_OPENED'			=> '<strong>Znovuotvoril oznam</strong><br />» %s',
	'LOG_GALLERY_UNAPPROVED'			=> '<strong>Neschválil oznam</strong><br />» %s',

	'LOGVIEW_VIEWALBUM'					=> 'Zobrazil album',
	'LOGVIEW_VIEWIMAGE'					=> 'Zobrazil obrázok',
));

?>