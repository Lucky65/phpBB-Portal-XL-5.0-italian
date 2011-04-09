<?php
/** 
*
* @name acp_portal_xl_blocks.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_blocks.php,v 1.3 2009/10/17 damysterious Exp $
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
	'TITLE_BLOCKS' 							=> 'Nastavenie blokov portálu',
	'TITLE_BLOCKS_EXPLAIN'						=> 'V tomto zadaní môžete vytvárať upravovať, premiestňovať alebo vymazať zobrazené Bloky alebo položky Bloku v Portále. K dispozícii je päť základných stĺpov umiestnených v priestore portálu, na vrchu, vľavo, v strede, vpravo a dole. Tieto bloky portálu za môžu premiestňovať všetkými smermy. Pozície iných blokov ktoré sú dole majú to isté zoradenie, ako ich uvidíte na stránke portálu. Správa použitých rovnakých blokov je rovnaká i keď sú oddelené od seba, to znamená že môžete meniť vzhľad v portále a indexe zobrazení fóra.',
	'TITLE_BLOCKS_COLUMN_EXPLAIN'				=> 'Nastavenia ľavéj a pravéj šírky kolón. V tomto zadaní môžete zmeniť ľavú a pravú šírku kolón na hlavnéj stránke portálu.',

	'TITLE_BLOCKS_INDEX' 				=> 'Správa blokov index/zobrazenie fóra/zobrazenie tém',
	'TITLE_BLOCKS_INDEX_EXPLAIN'		=> 'Z tohto zadania môžete vytvárať, upravovať, presunúť, vymazať Bloky a Bloky položiek z indexu /zobrazenie fóra/zobrazenie tém. Bloky sa môžu premiestňovať všetkými smermy. Existuje päť kolón umiestnených v bloku, hore, vľavo, vstrede, vpravo a dole. Pozície jednotlivých blokov nižšie majú rovnaké usporiadanie, ako uvidíte na indexe stránky /zobrazenie fóra/zobrazenie tém. Obe časti bloku používajú rovnaké bloky ale zvlášť od seba, takže môžete mať iný vzhľad na portále a iný na indexe stránky/zobrazenie fóra/zobrazenie tém. <br /><br /><strong style="text-transform: uppercase;">Prosím čítajte:</strong> Majte na pamäti <strong>nesmiete</strong> odstrániť <strong>center_forumblock.html</strong> z nastavenia bloku; ak by ste ho odstránil, nebude vyditelný žiadny obsah stránky!',
 	'TITLE_BLOCKS_INDEX_COLUMN_EXPLAIN'	=> 'V portáli stránka indexu/zobrazenia fóra/zobrazenia tém môžete zmeniť ľavé a pravé nastavenia šírky kolóny.',

	'TITLE_PAGES' 						=> 'Nastavenia stránok portálu',
	'TITLE_PAGES_EXPLAIN'				=> 'Stránky Položiek na stránke portálu z tohto zadania môžete vytvárať, upravovať, presunúť a vymazať. Stránky sa môžu presúvať šetkými smermy. Existuje päť kolón ktoré sú umiestné na stránke, hore, vľavo, v strede, vpravo a dole. Pozície rôzdielnych stránok, ktoré sú dole majú rovnaké usporiadanie, ako ich uvidíte na stránke portálu.',
	'TITLE_PAGES_COLUMN_EXPLAIN'		=> 'V hlavnej stránke portálu môžete zmeniť ľavé a pravé nastavenia šírky kolóny.',

	'BLOCK_EDIT_HEADER'					=> 'Upravenie alebo vytvorenie bloku',
	'BLOCK_EDIT_HEADER_MAIN'			=> 'Nastavenie základneho bloku',
	'BLOCK_COLUMN_SETTINGS'				=> 'Šírka Stĺpcov',
	'BLOCK_EDIT_COLUMN_SETTINGS'		=> 'Upravenie šírky kolón',

	'ADD_BLOCK'							=> 'Pridať Blok',
	'CANCEL'							=> 'Zrušiť',	
	'PIXEL'								=> 'Pixel',
	'BLOCK_ACTIV'						=> 'Aktivácia Bloku',
	'BLOCK_ACTIVE'						=> 'Aktivovať',
	'BLOCK_ACTIV_EXPLAIN'				=> 'Zobrazím tento blok Áno/Nie?',	
	'BLOCK_CENTRE'						=> 'Nie je dostupný',
	'BLOCK_HTML'						=> 'Súbor Html',
	'BLOCK_HTML_EXPLAIN'				=> 'Vyberte preddeklarovaný blok (*.html súbor) ktorý bude používať tento blok.',		
	'BLOCK_NAME'						=> 'Názov v Bloku',
	'BLOCK_NAME_EXPLAIN'				=> 'Zadajte názov bloku. Tento názov bude zobrazený ako Titul tohto bloku v portále na prednej strane.',	
	'BLOCK_ORD'							=> 'Poradie',	
	'BLOCK_ORDER'						=> 'Poradie',
	'BLOCK_POS'							=> 'Pozícia',
	'BLOCK_REMOVED'						=> 'Blok bol úspešne vymazaný',
	'BLOCK_UPDATED'						=> 'Aktualizácia prebehla úspešne',
	'BLOCK_ADDED'						=> 'Pridanie prebehlo úspešne',
	'BLOCK_CENTER'						=> 'Stredná pozícia',	
	'BLOCK_BOTTOM'						=> 'Spodná časť',
	'BLOCK_DISABLE_EX'					=> 'Blok je deaktivovaný',	
	'BLOCK_RIGHT'						=> 'Pravá časť',
	'BLOCK_LEFT'						=> 'Ľavá časť',
	'BLOCK_TOP'						    => 'Vrchná časť',
	'BLOCK_NAME_EDIT'					=> 'Editovať Blok',
	'BLOCK_ORD'							=> 'Poradie:',	
	'BLOCK_ORD_EXPLAIN'					=> 'Zadanie do ktorého stĺpca bude tento blok pridaný.',	
	'BLOCK_POSITION'					=> 'Posledná pozícia',	
	'BLOCK_POSITION_EXPLAIN'			=> 'Tadajte si pre to vrchnú kolónu',	
	'DISABLE_BLOCK'						=> 'Aktivujem blok',
	'ENABLE_BLOCK'						=> 'Zablokujem blok',
	'ICON_DELETE'						=> 'Zmazanie vlastných blokov je povolené, pred-definované bloky sa nemôžu odstrániť.',
	'ICON_EDIT'							=> 'Úprava vlastných blokov je povolená, pred-definované bloky sa nemôžu upraviť.',
	'ICON_MOVE_BOTTOM'					=> 'Presunúť blok dole do nižšej kolóny',
	'ICON_MOVE_BOTTOM_DIRECT'			=> 'Presunúť blok na spodok kolóny',	
	'ICON_MOVE_DOWN'					=> 'Presunúť v bloku o jeden riadok',
	'ICON_MOVE_LEFT'					=> 'Presunúť blok do kolóny na ľavú stranu',	
	'ICON_MOVE_LEFT_DIRECT'				=> 'Presunúť blok do najväčšiej kolóny na ľavú stranu',	
	'ICON_MOVE_RIGHT'					=> 'Presunúť blok do kolóny na pravú stranu',
	'ICON_MOVE_RIGHT_DIRECT'			=> 'Presunúť blok do najväčšiej kolóny na pravú stranu',	
	'ICON_MOVE_TOP'						=> 'Presunúť blok na spodok  kolóny',
	'ICON_MOVE_TOP_DIRECT'				=> 'Presunúť blok na vrch  kolóny',
	'ICON_MOVE_UP'						=> 'Presunúť hore v bloku o jeden riadok',
	'OPEN_ICON_PREVIEW'					=> 'Otvoriť náhľad ikon',	
	'CLOSE_ICON_PREVIEW'				=> 'Zavrieť náhľad ikon',
	'MUST_SELECT_BLOCK'					=> 'Voľba je chybná',
	'OFFLIGNE'							=> 'Blok je deaktivovaný, ak ho chcete aktivovať kliknite na ikonu',
	'ONLIGNE'							=> 'Blok je aktivovaný, ak ho chcete deaktivovať kliknite na ikonu',
	'RESET_INCLUDE_BLOCK'				=> 'Vymazať',
	'SUBMIT_INCLUDE_BLOCK'				=> 'Uložiť',
	'PERMISSION' 						=> 'Oprávnenia pre Blok',
	'PERMISSION_EXPLAIN' 				=> 'Kdo môže vidieť blok:',
	'ADMIN'								=> 'Administrátory',			
	'ALL'								=> 'Všetci',
	'GUESTS'							=> 'Hostia',
	'MOD'								=> 'Moderátory',
	'NONE'								=> 'Nezobraziť',
	'REG'								=> 'Registrovaný uživatelia',
	'STAFF'								=> 'Tím.',
	'URL_IMG_EXPLAIN'					=> 'Url obrázka ktorý bude zobrazený v časti Ponuky',
	'URL_IMG_EXPLAIN2'					=> 'Po kliknutí otvorím ponuku',		
	'BLOCK_FNAME_INFO'		    		=> 'Dostupné mini ikony',	
	'BLOCK_FNAME_I_EXPLAIN'				=> 'Toto sú dostupné mini ikony, z ktorých si môžete vybrať (obrázky sú umiestnené v priečinku /portal/images/icon_menu/ ak by ste chceli pridať viac iných mini ikon). doporučená veľkosť ikon je 16x16px.',	
	'BLOCK_FNAME_I_CHOSEN'				=> 'Zvolený mini obrázok.',	
    'CONFIG_UPDATED'					=> 'Aktualizácia nastavenia prebehla úspešne.',
    'CONFIG_ADDED'						=> 'Pridané nastavenie prebehlo úspešne.',

	'DELETE'							=> 'Vymažem Blok',
	'EDIT'								=> 'Editovať Blok',
	'MOVE_BOTTOM'						=> 'Presunúť kolónu o jeden krok nižšie',
	'MOVE_BOTTOM_DIRECT'				=> 'Presunúť kolónu na spodok',	
	'MOVE_DOWN'							=> 'Presunúť v bloku o jeden blok nadol',
	'MOVE_LEFT'							=> 'Presunúť k ľavej kolóne',	
	'MOVE_LEFT_DIRECT'					=> 'Presunúť čo najviac k ľavej kolóne',	
	'MOVE_RIGHT'						=> 'Presunúť k pravej kolóne',
	'MOVE_RIGHT_DIRECT'					=> 'Presunúť čo najviac k pravej kolóne',	
	'MOVE_TOP'							=> 'Presunúť o jeden krok k vrchu kolóny',
	'MOVE_TOP_DIRECT'					=> 'Presunúť hore celkom na vrch kolóny',
	'MOVE_UP'							=> 'Presunúť hore o jeden blok',

	'BLOCK_CONTENT'						=> 'Obsah',	
	'BLOCK_CONTENT_EXPLAIN'				=> 'Zadanie pre obsah bloku. <br /><br /> Po zadaní obsahu do tohto pola pre zobrazenie v bloku portálu musíte zadať <strong>voliteľnú_predformu_blok.html </strong> a to Súbor Html z voľby ktorá je nižšie pre zobrazenie tohto zadania v bloku na portále. <strong>Voliteľnú_predformú_blok.html</strong> môžete použiť opakovanie tak ako potrebujete.',
	
   'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Šírka Kolón v Portále',
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Nastavenia ľavéj a pravéj šírky kolón',	
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'V tomto zadaní môžete zmeniť ľavú a pravú šírku kolón na stránke portálu.',
	
   'PORTAL_LEFT_COLLUMN_WIDTH'                 	=> 'Ľavá šírka kolóny',
   'PORTAL_LEFT_COLLUMN_ACTIVE'                 => 'Aktivujem ľavú kolónu',
   'PORTAL_LEFT_COLLUMN_ACTIVE_EXPLAIN'         => 'Zobrazím/Skryjem na ľavéj strane obsah, zobrazeného fóra a zobrazených tém Portálu blok zadaní Áno/Nie?',
   'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => 'Zmena šírky v pixeloch, ľavého bloku Portálu, doporučená hodnota je 180',

   'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Pravá šírka kolóny',
   'PORTAL_RIGHT_COLLUMN_ACTIVE'                => 'Aktivujem pravú kolónu',
   'PORTAL_RIGHT_COLLUMN_ACTIVE_EXPLAIN'        => 'Zobrazím/Skryjem na pravéj strane obsah, zobrazeného fóra a zobrazených tém Portálu blok zadaní Áno/Nie?',
   'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => 'Zmena šírky v pixeloch, pravého bloku Portálu, doporučená hodnota je 180',

   'PORTAL_LAYOUT'                 				=> 'Rozmiestnenie v Portále',
   'PORTAL_LAYOUT_ACTIVE'                		=> 'Zobrazím rozmiestnenie kolón v portále',
   'PORTAL_LAYOUT_EXPLAIN'        				=> 'Toto zadanie umožňuje zobraziť alebo skryť kolóny na Portále. <br /> Zobrazím/Skryjem Áno/Nie?',

   'PORTAL_INDEX_LAYOUT'                 		=> 'Rozmiestnenie v Indexe',
   'PORTAL_INDEX_LAYOUT_ACTIVE'                	=> 'Zobrazím rozmiestnenie kolón v indexe /zobrazeni fóra/zobrazenie tém',
   'PORTAL_INDEX_LAYOUT_EXPLAIN'        		=> 'Tento hlavný prepínač je schopný zapnúť/vypnúť, ľavú a pravú kolónu jediným kliknutím, bez použitia nižšie uvedených možností, prestavenia strednej kolóny. <br />Povoliť/Zakázať Áno/Nie?',
   
   'PORTAL_PAGES_LAYOUT'                 		=> 'Rozvrhnutie stránky',
   'PORTAL_PAGES_LAYOUT_ACTIVE'                	=> 'Zobrazenie rozmiestnenia kolón na stránke portálu',
   'PORTAL_PAGES_LAYOUT_EXPLAIN'        		=> 'Tento hlavný prepínač je schopný zapnúť/vypnúť, ľavú a pravú kolónu jediným kliknutím, bez použitia nižšie uvedených možností, prestavenia strednej kolóny. <br />Povoliť/Zakázať Áno/Nie?',

   'PORTAL_PAGES_PAGE_ACTIVE'        			=> 'Zobrazenie na jednej stránke',
   'PORTAL_PAGES_PAGE_ACTIVE_EXPLAIN'        	=> 'Tento hlavný prepínač je schopný zapnúť/vypnúť zobrazenie ako jednu stránku. Ak je nastavené na Áno bude zobrazená jedna stránka miesto rozmiestnenia kolón. Ak je vytvorených viac ako jedna stránka pomocou bloku "Portál stránky" budú zoskupené ako čísla stránok. Takto sa potom budú prezerať ako, stránka po stránke. Všetky ostatné bloky budú zatvorené podľa tohoto zadania.<br /> Povoliť/Zakázať Áno/Nie?',
   'PORTAL_PAGES_PAGE_ACTIVE_NUMBER'        	=> 'Aktívovanie stránky',
   'PORTAL_PAGES_PAGE_ACTIVE_NUMBER_EXPLAIN'    => 'Sem zadajte ID stránky. Táto stránka bude zobrazená v prvej pozícii. Kombinácia stredného bloku a názov bloku "Portál stránok" bude základom stránky. Všetky ostatné bloky budú ignorované. Nenechávajte toto pole prázdne, ponechajte aj 0, ak nezadáte inak. Stránky budú stránkované ak je ich k dispozícii viac ako jedna.',
   'PAGES_PAGE_ACTIVE'        					=> 'Aktivovanie jednej stránky',
   'PAGES_PAGE_ACTIVE_NUMBER'        			=> 'Aktivovanie jednej stránky ID bloku',
   'BLOCK_EDIT_PAGES_SETTINGS'        		    => 'Nastavenia jednej stránky',

));

?>
