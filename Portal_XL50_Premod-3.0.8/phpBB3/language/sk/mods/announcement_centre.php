<?php
/** 
*
* acp_announcements_centre [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: announcement_centre.php,v 1.1.1.1 2009/05/15 05:15:57 damysterious Exp $ 
* @copyright (c) 2007 lefty74
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

// Announcement  settings
$lang = array_merge($lang, array(
	'TITLE'									=> 'ACP Centrálne Oznámenia',
	'TITLE_EXPLAIN'							=> 'Toto nastavenie vám umožní zadávať Oznámenia na Stránku. Tu môžete nastaviť kto by mal vidieť tieto oznámenia. Ale môže to byť aj ako alternatíva pre upozornenie hostí. <br /><span style="color:red;">Aby sa zobrazili Oznámenia, treba si v Nastavení Blokov vytvoriť príslušný blok. (použi súbor html: Announcement centre)</span>',
	'ANNOUNCEMENTS'							=> 'Nastavenie Oznámenia',
	'ANNOUNCEMENT_ENABLE'					=> 'Zobrazím oznámenie na stránke',
	'ANNOUNCEMENT_SHOW'						=> 'Komu zobrazím oznámenie  na stránke',
	'ANNOUNCEMENT_SHOW_INDEX'				=> 'Zobrazím oznámenie len na stránke Indexu',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS'			=> 'Zobrazím oznámenie na Narodeniny',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS_EXPLAIN'	=> 'Zobrazím upozornenie na aktuálne narodeniny, tieto oznámenia (majú prednosť v stránke Upozornenia)',
	'ANNOUNCEMENT_SHOW_GROUP'				=> 'Vyberte Skupinu(y) ktorý by mali vidieť oznam',
	'ANNOUNCEMENT_SHOW_GROUP_EXPLAIN'		=> 'Len platný oznam bude zobrazený Skupinám',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR'			=> 'Zobrazím avatar v narodeninových oznámeniach',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR_EXPLAIN'	=> 'Zobrazím avatar osobám ktorý majú narodeniny',
	'ANNOUNCEMENT_DRAFT_PREVIEW'			=> 'Vzor: Takto bude zobrazené Oznámenie',
	'ANNOUNCEMENT_TITLE'					=> 'Titul oznámenie na stránke',
	'ANNOUNCEMENT_TITLE_EXPLAIN'			=> 'Nastavenie Titulu Bloku oznámenia<br/>Ak ponecháte pole prázdne použijem prednastavený jazyk',
	'ANNOUNCEMENT_DRAFT'					=> 'Zadanie pre oznámenie',
	'ANNOUNCEMENT_DRAFT_EXPLAIN'			=> 'Toto je príklad zadania vášho oznámenia',
	'ANNOUNCEMENT_TEXT'						=> 'Text Všeobecného Oznámenia',
	'ANNOUNCEMENT_TEXT_EXPLAIN'				=> 'Sem zadajte text vášho oznamu',
	'ANNOUNCEMENT_ENABLE_GUESTS'			=> 'Zobrazím iné oznámenie pre hostí',
	'ANNOUNCEMENT_ENABLE_GUESTS_EXPLAIN'	=> 'Zobrazím iné oznámenie pre hosťa a iné pre uživateľa pri zobrazení stránky.',
	'ANNOUNCEMENT_TITLE_GUESTS'				=> 'Titul oznámenia pre hostí',
	'ANNOUNCEMENT_TITLE_GUESTS_EXPLAIN'		=> 'Prispôsobte si Titul Bloku pre oznámenie hostí <br/>Ak ponecháte toto miesto prázdne použijem predvolený jazyk',
	'ANNOUNCEMENT_TEXT_GUESTS'				=> 'Text oznámenia pre hostí',
	'ANNOUNCEMENT_TEXT_GUESTS_EXPLAIN'		=> 'Sem zadajte text oznámenia pre Hosťov',
	'ACP_ANNOUNCEMENTS_CENTRE'				=> 'Centrum oznámení',

	'COPY_TO_ANNOUNCEMENT_SHORT'			=> 'Preložím text do Všeobecného zadania Stránky',
	'COPY_TO_GUEST_ANNOUNCEMENT_SHORT'		=> 'Preložím text do zadania pre Hostí',
	'COPY_TO_ANNOUNCEMENT'					=> 'Preložím text do Všeobecného zadania Stránky',
	'COPY_TO_GUEST_ANNOUNCEMENT'			=> 'Preložím text do zadania pre Hostí',

	'YES'			=> 'Áno',
	'NO'			=> 'Nie',
	'GUESTS'		=> 'Hosťom',
	'EVERYONE'		=> 'Každému',
	'GROUPS'		=> 'Skupinám',
));

?>