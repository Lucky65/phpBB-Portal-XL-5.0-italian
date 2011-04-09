<?php
/**
*
* ucp info_ucp_arcade [Greek]
*
* @package language
* @version $Id: info_ucp_arcade.php 629 2008-12-07 19:18:39Z JRSweets $
* @copyright (c) 2008 JeffRusso.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Ελληνική μετάφραση από diastasi (thraki.info) και την ομάδα  του phpbb2.gr:
* (http://phpbb2.gr/team/)
*/

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

//Arcade
$lang = array_merge($lang, array(
	'ARCADE_DELETE_FAVORITE'				=> 'Διαγραφή αγαπημένου παιχνιδιού',
	'ARCADE_DELETE_FAVORITES'				=> 'Διαγραφή αγαπημένων παιχνιδιών',
	'ARCADE_DELETE_FAVORITES_CONFIRM'		=> 'Θέλεις σίγουρα να διαγράψεις τα επιλεγμένα παιχνίδια?',
	'ARCADE_DELETE_FAVORITE_CONFIRM'		=> 'Θέλεις σίγουρα να διαγράψεις το επιλεγμένο παιχνίδι?',
	'ARCADE_FAVORITES_DELETED'				=> 'Αγαπημένα παιχνίδια διαγράφηκαν επιτυχώς.',
	'ARCADE_FAVORITE_DELETED'				=> 'Αγαπημένο παιχνίδι διεγράφη επιτυχώς.',
	'ARCADE_OVERRIDE_USER_SORT_UCP'		=> 'Η προεπιλεγμένες ρυθμίσεις κατάταξης παρακάτω αγνοούνται από τις ρυθμίσεις του Διαχειριστή.',

	'UCP_ARCADE'						=> 'phpBB Arcade',
	'UCP_ARCADE_FAVORITES'					=> 'Ρυθμίσεις αγαπημένων',
	'UCP_ARCADE_FAVORITES_EXPLAIN'		=> 'Παρακάτω μπορείς να δεις και να διαγράψεις τα αγαπημένα σου παιχνίδια.',
	'UCP_ARCADE_SETTINGS'				=> 'Ρυθμίσεις',
	'UCP_ARCADE_SETTINGS_EXPLAIN'		=> 'Οι ρυθμίσεις ελέγχουν διάφορα σημεία του arcade.',
));

?>