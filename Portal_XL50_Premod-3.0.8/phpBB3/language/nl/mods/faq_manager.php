<?php
/**
*
* @package phpBB3 FAQ Manager
* @copyright (c) 2007 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_FAQ_MANAGER'            => 'FAQ Beheerder',

	'BACKUP_LOCATION_NO_WRITE'    => 'Het is niet mogelijk om een backup bestand te maken. Controleer de permisies van de map store/faq_backup/.',
	'BAD_FAQ_FILE'                => 'Het bestand dat je probeerd te bewerken is geen FAQ bestand.',

	'CAT_ALREADY_EXISTS'        => 'Een categorie met je ingevoerde naam bestaat al.',
	'CATEGORY_NOT_EXIST'        => 'De gevraagde categorie bestaat al.',
	'CREATE_CATEGORY'            => 'Maak categorie',
	'CREATE_FIELD'                => 'Maak veld',

	'DELETE_CAT'                => 'Verwijder Categorie',
	'DELETE_CAT_CONFIRM'        => 'Ben je er zeker van dat je deze categorie wilt verwijderen? Dit verwijderd ook alle velden binnen deze categorie!',
	'DELETE_VAR'                => 'Verwijder veld',
	'DELETE_VAR_CONFIRM'        => 'Ben je er zeker van dat je dit veld wilt verwijderen?',

	'FAQ_CAT_LIST'                => 'Hier kun je de bestaande categorie(en) bekijken en aanpassen.',
	'FAQ_EDIT_SUCCESS'            => 'De FAQ is succesvol bijgewerkt.',
	'FAQ_FILE_NOT_EXIST'        => 'Het bestand dat je wilt aanpassen bestaat niet.',
	'FAQ_FILE_NO_WRITE'            => 'Het is niet mogelijk om dit bestand bij te werken. Controleer de permissies voor dit bestand..',
	'FAQ_FILE_SELECT'            => 'Selecteer het bestand dat je wilt aanpassen.',

	'LANGUAGE'                    => 'Taal',
	'LOAD_BACKUP'                => 'Laad Backup',

	'NAME'                        => 'Naam',
	'NOT_ALLOWED_OUT_OF_DIR'    => 'Het is niet toegestaan om bestanden buiten de language map aan te passen.',
	'NO_FAQ_FILES'                => 'Geen beschikbare FAQ bestanden.',
	'NO_FAQ_VARS'                => 'Er zijn geen FAQ variabelen in dit bestand.',

	'VAR_ALREADY_EXISTS'        => 'Een bestand met de ingevoerde naam bestaat al.',
	'VAR_NOT_EXIST'                => 'De gevraagde variabel bestaat niet..',
));

?>