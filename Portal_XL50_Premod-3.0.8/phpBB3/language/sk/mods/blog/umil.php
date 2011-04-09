<?php
/**
*
* @package phpBB3 User Blog
* @version $Id$
* @copyright (c) 2008 EXreaction, Lithium Studios
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
	'ADDING_FIRST_BLOG'					=> 'Pridanie Prvéj Položky do Blog',

	'FIXING_MAX_POLL_OPTIONS'			=> 'Opravenie Volieb Max. Možností',
	'FIXING_MISSING_STYLES'				=> 'Resetovanie všetkých štýlov, ktoré už neexistujú.',

	'INSTALLING_ARCHIVE_PLUGIN'			=> 'Inštalácia Pluginu Archívov',

	'SETTING_DEFAULT_PERMISSIONS'		=> 'Nastavenie Predvolených Oprávnení',
	'SUCCESSFULLY_UPDATED_UMIL_RETURN'	=> 'Úspešne ste aktualizoval 1.0.7.  Vzhľadom na inštaláciu nového systému 1.0.8 i mimo neho, sa musí dokončiť proces aktualizácie preto prosím kliknite <a href="%s">sem</a>.',

	'USER_BLOG_MOD'						=> 'Uživateľský Mód pre Blogy',
	'USE_OLD_UPDATE_SCRIPT'				=> 'Verzia pred 0.9.0 sa nedá aktualizovať použitím tejto metódy, musíte použiť starý skript aktualizácie ako prvý, potom sa vrátiť a pokracovať ďalej v aktualizácii.<br />Skript starej aktualizácie je umiestnený <a href="%s">tu</a>.',
));

?>