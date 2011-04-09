<?php
/** 
*
* @name acp_portal_xl_menu.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_menu.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Pozície nastavenie Ponuky',
	'TITLE_EXPLAIN'				=> 'V tomto zadaní môžete vytvárať upravovať, premiestňovať alebo vymazať voliteľné položky v menu. Táto ponuka bloku môže byť zapnutá alebo vypnutá in Portal -> Všeobecné -> Pozície menu. Ikony pre použitie v tejto ponuke sú umiestnené v adresáry /portal/images/icon_menu/. Odporúčané sú ikony rozmeru 16x16px. Do adresára môžete pridať ikon koľko chcete ale predzobrazenie zobrazí len toľko ako je zobrazené, ostatné Dostupne mini ikony ponuky sú a budú v časti pridania z ponuky ikon. Relativna cesta v roote fóra, napr:. "http://www.vašadoména.com/" pre externé linky. Interné linky môžu byť pripojené z "portal.php" vyvolaním určitého súboru z vašej stránky, alebo "memberlist.php?mode=leaders" vyvolaním určitej funkcie vášho fóra mimo navigačnej ponuky.',
 
	'PORTAL_MENUS_EDIT_HEADER'	=> 'Správa ponuky',
	'ACP_MENU_EXPLAIN'			=> 'Správa zobrazenej ponuky v portále',
	'ACP_PORTAL_MENU'			=> 'Správa ponuky',
	'ACTION'					=> 'Výkon',
	'ADD_URL'					=> 'Pridať do ponuky',		
	'ADMIN'						=> 'Administrátorom',			
	'ALL'						=> 'Všetkým',
	'GUESTS'					=> 'len Hosťom',
	'MENU_ADDED'				=> 'Člen ponuky bol úspešne pridaný',
	'MENU_REMOVED'				=> 'Člen ponuky bol úspešne odstránený',			
	'MENU_UPDATED'				=> 'Člen ponuky bol úspešne aktualizovaný',
	'MOD'						=> 'Moderátorom',
	'MUST_SELECT_MENU'			=> 'Výber',
	'NAME_LINK'					=> 'Názov Člena',
	'NAME_URL_EXPLAIN'			=> 'Názov Člena ponuky ktorý bude zabrazený v Portály',
	'NONE'						=> 'Nezobraziť',
	'REG'						=> 'Registrovaným uživateľom',
	'RESET_MENU'				=> 'Vymazať',		
	'STAFF'						=> 'Tímu.',
	'URL_EXPLAIN'				=> 'Url otvorenia okna',
	'URL_EXPLAIN_2'				=> 'Url môže byť zapísaná nasledovným spôsobom. Príklad : <br>index.php pre interné linky, <br>http://google.com pre externé linky',		
	'URL_IMG'					=> 'Ikona url ktorá bude zobrazená pre Člen Ponuky',	
	'URL_IMG_2'					=> 'Mini ikona',		
	'URL_IMG_EXPLAIN'			=> 'Obrázok url ktorý bude zobrazená pre Člen Ponuky',
	'URL_IMG_EXPLAIN2'			=> 'Kliknutím v zadaní sa zobrazia dostupné obrázky',		
	'URL_LINK'					=> 'Link url',
	'VIEW_BY'					=> 'Zobrazím',
	'VIEW_BY_EXPLAIN'			=> 'Zadajte kto bude vidieť tohoto člena ponuky v ponuke Portálu',	
	'MENU_FNAME_INFO'		    => 'Dostupné mini ikony',	
	'MENU_FNAME_I_EXPLAIN'		=> 'Náhľad dostupných mini ikon s ktorých si môžete vybrať z (obrázkov umiestnených v adresáry /portal/images/icon_menu/ ak chcete pridať viac mini ikon). doporučené sú ikony veľkosti 16x16px.',	
	'MENU_FNAME_I_CHOSEN'		=> 'Výber mini obrázkov.',	
	'OPEN_IN'					=> 'Otvorím v',
	'OPEN_IN_EXPLAIN'			=> 'Zadajte ako bude tento člen otvorený. <br />Áno = v novom okne, Nie = v zhodnom okne',	
	'OPEN_IN_BLANK'				=> 'V novom okne',
	'OPEN_IN_SAME'				=> 'V zhodnom okne',
		
   ));

?>