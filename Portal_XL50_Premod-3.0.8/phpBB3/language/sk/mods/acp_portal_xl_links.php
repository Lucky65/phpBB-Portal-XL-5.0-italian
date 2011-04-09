<?php
/** 
*
* @name acp_portal_xl_links.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_links.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(   
	'TITLE' 					=> 'Nastavenie Linkov',
	'TITLE_EXPLAIN'				=> 'V tomto zadaní môžete vytvárať upravovať, premiestňovať alebo vymazať voliteľný link položky. Táto ponuka bloku môže byť zapnutá alebo vypnutá a to v Portáli -> Všeobecné -> Linky. Ikony pre použitie v tejto ponuke sú umiestnené v adresári /portal /images/ con_links/. Odporúčaná veľkosť ikony je 16x16px. Pridajte toľko ikon, koľko chcete, ale nezabúdajte že pokial sa všetky zobrazia bude to trochu dlhšie trvať, dostupné sú mini ikony v ponuke úprav alebo pridať v sekcii ponuky. Relatívna cesta pre pre externe linky je adresár v roote fóra, napr "http://www.vašadoména.com/".',
 
	'PORTAL_LINKS_EDIT_HEADER'	=> 'Upraviť link',
	'ACP_LINKS_EXPLAIN'			=> 'Nastavenie linkov zobrazených v portály',
	'ACP_PORTAL_LINKS'			=> 'Nastavenie Linku',
	'ACTION'					=> 'Akcia',
	'ADD_URL'					=> 'Pridať link',		
	'ADMIN'						=> 'Administrátory',			
	'ALL'						=> 'Všetci',
	'GUESTS'					=> 'Hostia',
	'LINKS_ADDED'				=> 'Link bol úspešne pridaný',
	'LINKS_REMOVED'				=> 'Link bol úspešne odstránený',			
	'LINKS_UPDATED'				=> 'Link bol úspešne aktualizovaný',
	'MOD'						=> 'Moderátory',
	'MUST_SELECT_LINKS'			=> 'Vybrať',
	'NAME_LINK'					=> 'Názov linku',
	'NAME_URL_EXPLAIN'			=> 'Názov linku ktorý bude zobrazený v bloku portálu pre Linky',
	'NONE'						=> 'Nikomu',
	'REG'						=> 'Registrovaný uživatelia',
	'RESET_LINKS'				=> 'Vymazať',		
	'STAFF'						=> 'Tím',
	'URL_EXPLAIN'				=> 'Url otvorenia okna',
	'URL_EXPLAIN_2'				=> 'Url môže byť napísané nasledovným spôsobom. Príklad : <br>index.php pre interné linky, <br>http://google.com pre externé linky',		
	'URL_IMG'					=> 'URL Ikony ktorá bude zobrazená v linkoch bloku',	
	'URL_IMG_2'					=> 'Mini ikona',		
	'URL_IMG_EXPLAIN'			=> 'URL obrázka ktorý bude zobrazený v linkoch bloku',
	'URL_IMG_EXPLAIN2'			=> 'Po kliknutí otvorím ponuku',		
	'URL_LINK'					=> 'Url linku',
	'VIEW_BY'					=> 'Kto môže vidieť',
	'VIEW_BY_EXPLAIN'			=> 'Určuje kto si môže zobraziť linku v portály',	
	'LINKS_FNAME_INFO'		    => 'Dostupné mini ikony',	
	'LINKS_FNAME_I_EXPLAIN'		=> 'Náhľad dostupných mini ikon, z ktorých si môžete vybrať (obrázky sú umiestnené v priečinku /portal/images/icon_menu/ ak chcete môžte si do toho priečinka pridať aj ďalšie mini ikony). Odporúčaná veľkosť ikony je 16x16px.',	
	'LINKS_FNAME_I_CHOSEN'		=> 'Zvolený mini obrázok.',	
		
   ));

?>