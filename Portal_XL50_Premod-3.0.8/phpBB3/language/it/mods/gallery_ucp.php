<?php
/**
*
* gallery_ucp [Italian]
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
	'ALBUMS'						=> 'Albums',
	'ALBUM_DESC'					=> 'Descrizione album',
	'ALBUM_NAME'					=> 'Nome album',
	'ALBUM_PARENT'					=> 'Album padre',
	'ATTACHED_SUBALBUMS'			=> 'Sotto-album allegati',

	'CREATE_PERSONAL_ALBUM'			=> 'Crea album personale',
	'CREATE_SUBALBUM'				=> 'Crea sotto-album',
	'CREATE_SUBALBUM_EXP'			=> 'È possibile allegare un nuovo sotto-album alla tua galleria personale.',
	'CREATED_SUBALBUM'				=> 'Sotto-album creato con successo',

	'DELETE_ALBUM'					=> 'Cencella album',
	'DELETE_ALBUM_CONFIRM'			=> 'Vuoi cancellare questo album con i sotto-albums e immagini collegate?',
	'DELETED_ALBUMS'				=> 'Albums cancellati con successo',

	'EDIT'							=> 'Modifica',
	'EDIT_ALBUM'					=> 'Modifica album',
	'EDIT_SUBALBUM'					=> 'Modifica sotto-album',
	'EDIT_SUBALBUM_EXP'				=> 'Puoi modificare i tuoi albums.',
	'EDITED_SUBALBUM'				=> 'Album modificato con successo',

	'GOTO'							=> 'Torna a',

	'MANAGE_SUBALBUMS'				=> 'Gestione sotto-albums personali',
	'MISSING_ALBUM_NAME'			=> 'Scrivi un nome per l’album',

	'NEED_INITIALISE'				=> 'Non hai un tuo album personale.',
	'NO_ALBUM_STEALING'				=> 'Non sei autorizzato a gestire gli albums di altri utenti.',
	'NO_FAVORITES'					=> 'Non hai nessun preferito.',
	'NO_MORE_SUBALBUMS_ALLOWED'		=> 'Hai raggiunto il massimo di sotto-albums per il tuo album personale',
	'NO_PARENT_ALBUM'				=> '&laquo;-- nessun album padre',
	'NO_PERSALBUM_ALLOWED'			=> 'Non hai i permessi per creare il tuo album personale',
	'NO_PERSONAL_ALBUM'				=> 'Non hai un album personale. Puoi creare il tuo album personale con alcuni aotto-albums.<br />Negli albums personali solo i proprietare possono inviare immagini.',
	'NO_SUBALBUMS'					=> 'Non ci sono albums allegati',
	'NO_SUBSCRIPTIONS'				=> 'Non hai sottoscritto nessuna immagine.',

	'PARSE_BBCODE'					=> 'Analizza BBCode',
	'PARSE_SMILIES'					=> 'Analizza faccine',
	'PARSE_URLS'					=> 'Analizza links',
	'PERSONAL_ALBUM'				=> 'Album personale',

	'REMOVE_FROM_FAVORITES'			=> 'Elimina dai preferiti',

	'UNSUBSCRIBE'					=> 'Elimina sottoscrizione',

	'YOUR_FAVORITE_IMAGES'			=> 'Puoi vedere le tue immagini preferite. Puoi anche eliminarle se non ti piacciono.',
	'YOUR_SUBSCRIPTIONS'			=> 'Puoi vedere gli albums e le immagini che hai sottoscritto.',

	'VIEWEXIFS_DEFAULT'				=> 'Puoi vedere i dati Exif per impostazione predefinita',

	'WATCH_CHANGED'					=> 'Configurazione salvata',
	'WATCH_COM'						=> 'Sottoscrivi immagini commentate',
	'WATCH_FAVO'					=> 'Sottoscrivi immagini preferite',
	'WATCH_NOTE'					=> 'Questa opzione ha effetto solo sulle nuove immagini. Tutte le altre immagini necessitano di essere aggiunte come "sottoscritte".',
	'WATCH_OWN'						=> 'Sottoscrivi immagini',
));

?>