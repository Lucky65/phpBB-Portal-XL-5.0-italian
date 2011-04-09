<?php
/**
*
* gallery_ucp [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package phpBB Gallery
* @version $Id: gallery_ucp.php 1007 2009-03-04 01:31:45Z nickvergessen $
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
	'ALBUMS'						=> 'Albumy',
	'ALBUM_DESC'					=> 'Popis albumu',
	'ALBUM_NAME'					=> 'Názov albumu',
	'ALBUM_PARENT'					=> 'Nadradený Album',
	'ATTACHED_SUBALBUMS'			=> 'Pripojený podalbum',

	'CREATE_PERSONAL_ALBUM'			=> 'Vytvoriť osobný album',
	'CREATE_SUBALBUM'				=> 'Vytvoriť podalbum',
	'CREATE_SUBALBUM_EXP'			=> 'Môžete si pripojiť nový podalbum do vašej osobnej galérie.',
	'CREATED_SUBALBUM'				=> 'Podalbum bol úspešne vytvorený',

	'DELETE_ALBUM'					=> 'Vymazať Album',
	'DELETE_ALBUM_CONFIRM'			=> 'Vymažem Album, so všetkými pripojenými podalbumami a obrázkami?',
	'DELETED_ALBUMS'				=> 'Album bol úspešne vymazaný',

	'EDIT'							=> 'Upraviť',
	'EDIT_ALBUM'					=> 'Upraviť album',
	'EDIT_SUBALBUM'					=> 'Upraviť podalbum',
	'EDIT_SUBALBUM_EXP'				=> 'Tu si môžete upraviť vaše albumy.',
	'EDITED_SUBALBUM'				=> 'Album bol úspešne upravený',

	'GOTO'							=> 'Prejdem do',

	'MANAGE_SUBALBUMS'				=> 'Nastavenie vášich podalbumov',
	'MISSING_ALBUM_NAME'			=> 'Prosím zadajte názov pre album',

	'NEED_INITIALISE'				=> 'Nemáte ešte vytvorený osobný album.',
	'NO_ALBUM_STEALING'				=> 'Nemáte oprávnenie nastavovať Album ďalších uživateľov.',
	'NO_FAVORITES'					=> 'Nemáte ešte žiadnych favoritov.',
	'NO_MORE_SUBALBUMS_ALLOWED'		=> 'Pridal ste maximálny počet podbalbumov do vášho osobného albumu',
	'NO_PARENT_ALBUM'				=> '&farba;-- bez nadradenia',
	'NO_PERSALBUM_ALLOWED'			=> 'Nemáte oprávnenie pre vytvorenie osobného albumu',
	'NO_PERSONAL_ALBUM'				=> 'Nemáte ešte osobný album. Tu si môžete vytvoriť váš osobný album, aj z podalbumamy.<br />Do osobnného albumu iba majiteľ môže vkladať obrázky.',
	'NO_SUBALBUMS'					=> 'Nie sú pripojené žiadne albumy',
	'NO_SUBSCRIPTIONS'				=> 'Prispejte nejakým obrázkom.',

	'PARSE_BBCODE'					=> 'Časť BBCode',
	'PARSE_SMILIES'					=> 'Časť smailov',
	'PARSE_URLS'					=> 'Časť linkov',
	'PERSONAL_ALBUM'				=> 'Osobný album',

	'REMOVE_FROM_FAVORITES'			=> 'Odstrániť z obľúbených',

	'UNSUBSCRIBE'					=> 'zastaviť sledovanie',

	'YOUR_FAVORITE_IMAGES'			=> 'S tohoto zadania si môžete prezrieť svoje obľúbené-obrázky a ak ich už nechcete môžete ich aj odstrániť.',
	'YOUR_SUBSCRIPTIONS'			=> 'Tu si môžete prezrieť nahlásené albumy a obrázky.',

	'WATCH_CHANGED'					=> 'Mastavenie uloženia',
	'WATCH_COM'						=> 'Odsúhlasiť komentáre k obrázkom',
	'WATCH_FAVO'					=> 'Odsúhlasiť obrázky favoritov',
	'WATCH_NOTE'					=> 'Tieto nastavenia ovplyvňujú len nové obrázky, pridané obrázky cez tieto nastavenia musia byť ak potrebujete "odsúhlasené".',
	'WATCH_OWN'						=> 'Odsúhlasiť samotné obrázky',
));

?>