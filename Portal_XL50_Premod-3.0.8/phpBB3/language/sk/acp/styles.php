<?php
/**
*
* acp_styles.php [Slovak]
*
* @package language
* @version $Id: styles.php,v 1.40 2010/01/05 23:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
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

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Sada obrázkov obsahuje všetky obrázky pre tlačidla fóra, zložky a veľa ďalších vecí na celom fóre. Tu môžete upravovať, exportovať alebo odstraňovať existujúcu sadu obrázkov, alebo pridať a importovať nové sady.',
	'ACP_STYLES_EXPLAIN'	=> 'Tu môžete upravovať dostupné štýly pre vaše fórum. Štýl sa skladá z templatu (šablóny), skinu, a sady obrázkov. Môžete upravovať existujúce štýly, odstraňovať ich, deaktivovať, reaktivovať, vytvárať, importovať a oveľa viac. Môžete sa pozrieť ako daný štýl vyzerá použitím funkcie náhľad. Zvolený prednastavený štýl je označený hviezdičkou (*). Je tu tiež uvedené, koľko užívateľov používa tento štýl.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Template (šablóna) zahrňuje celý kód, ktorý tvorí štruktúru stránky. Tu môžete upravovať existujúce templaty, exportovať ich, importovať alebo sa pozrieť, ako daný štýl vyzerá použitím funkcie náhľad. Môžete tiež upraviť šablónu, ktorá prekladá BBCode značky.',
	'ACP_THEMES_EXPLAIN'	=> 'Tu môžete vytvárať, inštalovať, upravovať, odstraňovať alebo exportovať skiny. Skin je kombinácia farieb a obrázkov, ktoré sú aplikované na šablóny pre utvorenie finálneho vzhľadu vášho fóra. Možnosti nastavení sú závislé na konfigurácií vášho serveru a phpBB, pozri manuál pre podrobnosti. Pri vytváraní nového skinu tiež môžete použiť stávajúci ako základ.',
	'ADD_IMAGESET'	=> 'Vytvoriť sadu obrázkov',
	'ADD_IMAGESET_EXPLAIN'	=> 'Tu môžete vytvoriť novú sadu obrázkov. V závislosti od nastavení servera a oprávnení k súborom vám budú ponúknuté rôzne možnosti nastavení. Napríklad budete môcť založiť novú sadu obrázkov na už existujúcom. Budete tiež môcť importovať, alebo exportovať (z/do zložky pre ukladanie) archív so sadou obrázkov. Pokiaľ budete importovať sadu obrázkov z archívu, názov môže byť zvolený podľa názvu archívu, pokiaľ tak chcete urobiť, nechajte pole názvu sady prázdne.',
	'ADD_STYLE'	=> 'Vytvoriť štýl',
	'ADD_STYLE_EXPLAIN'	=> 'Tu môžete vytvoriť nový štýl. V závislosti od nastavení servera a oprávnení k súborom vám budú ponúknuté rôzne možnosti nastavení. Napríklad budete môcť založiť nový štýl na už existujúcom. Budete tiež môcť importovať, alebo exportovať (z/do zložky pre ukladanie) archív so štýlom. Pokiaľ nahrávate, alebo importujete štýl, názov bude zistený automaticky.',
	'ADD_TEMPLATE'	=> 'Vytvoriť template',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Tu môžete pridať nový template. V závislosti od nastavení servera a oprávnení k súborom vám tu budú ponúknuté rôzne možnosti nastavení. Napríklad budete môcť založiť novú sadu šablón na už existujúcej. Budete tiež môcť importovať, alebo exportovať (z/do zložky pre ukladanie) archív s templatom. Pokiaľ budete importovať template z archívu, názov môže byť zvolený podľa názvu toho archívu, pokiaľ tak chcete urobiť, nechajte pole názvu sady prázdne.',
	'ADD_THEME'	=> 'Vytvoriť skin',
	'ADD_THEME_EXPLAIN'	=> 'Tu môžete pridať nový skin. V závislosti od nastavení servera a oprávnení k súborom vám tu budú ponúknuté rôzne možnosti nastavení. Napríklad budete môcť založiť nový skin na už existujúcom. Budete tiež môcť importovať, alebo exportovať (z/do zložky pre ukladanie) archív so skinom. Pokiaľ budete importovať skin z archívu, názov môže byť zvolený podľa názvu toho archívu, pokiaľ tak chcete urobiť, nechajte pole názvu sady prázdne.',
	'ARCHIVE_FORMAT'	=> 'Typ archívu',
	'AUTOMATIC_EXPLAIN'		=> 'Nechajte prázdne pre automatickú detekciu.',

	'BACKGROUND'	=> 'Pozadie',
	'BACKGROUND_COLOUR'	=> 'Farba pozadia',
	'BACKGROUND_IMAGE'	=> 'Obrázok na pozadí',
	'BACKGROUND_REPEAT'	=> 'Opakovanie pozadia',
	'BOLD'	=> 'Tučné',

	'CACHE'	=> 'Cache',
	'CACHE_CACHED'	=> 'Cacheované',
	'CACHE_FILENAME'	=> 'Súbor templatu',
	'CACHE_FILESIZE'	=> 'Veľkosť súboru',
	'CACHE_MODIFIED'	=> 'Upravené',
	'CONFIRM_IMAGESET_REFRESH'	=> 'Naozaj chcete obnoviť všetky dáta v sade obrázkov? Nastavenie z konfiguračného súboru sady obrázkov prepíšu všetky úpravy, ktoré boli vykonané editorom.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Naozaj chcete odstrániť všetky cacheované verzie súborov šablón?',
	'CONFIRM_TEMPLATE_REFRESH'	=> 'Naozaj chcete obnoviť všetky dáta templatov uložených v databáze nahraním základných hodnôt zo súborov? Toto prepíše všetky úpravy, ktoré boli spracované editorom za dobu, kedy bol template uložený v databáze.',
	'CONFIRM_THEME_REFRESH'	=> 'Naozaj chcete obnoviť všetky dáta skinov uložených v databáze nahraním základných hodnôt zo súborov? Toto prepíše všetky úpravy, ktoré boli spracované editorom za dobu, kedy bol štýl uložený v databáze.',
	'COPYRIGHT'	=> 'Copyright',
	'CREATE_IMAGESET'	=> 'Vytvoriť novú sadu obrázkov',
	'CREATE_STYLE'	=> 'Vytvoriť nový štýl',
	'CREATE_TEMPLATE'	=> 'Vytvoriť nový template',
	'CREATE_THEME'	=> 'Vytvoriť nový skin',
	'CURRENT_IMAGE'	=> 'Súčasný obrázok',

	'DEACTIVATE_DEFAULT'	=> 'Nemôžete deaktivovať základný štýl.',
	'DELETE_FROM_FS'	=> 'Odstrániť zo súborového systému',
	'DELETE_IMAGESET'	=> 'Odstrániť sadu obrázkov',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Tu môžete odstrániť vybrané sady obrázkov z databázy. Pamätajte na to, že tento krok sa nedá vrátiť späť. Odporúča sa, najprv vyexportovať svoj súbor pre prípadné budúce použitie.',
	'DELETE_STYLE'				=> 'Odstrániť štýl',
	'DELETE_STYLE_EXPLAIN'		=> 'Tu môžete odstrániť vybraný štýl. Nemôžete odstrániť všetky súčasti štýlu. Tie musia byť odstránené samostatne prostredníctvom príslušných formulárov. Dávajte pozor pri mazaní štýlov, nie je možné vrátiť vykonané zmeny.',
	'DELETE_TEMPLATE'			=> 'Odstrániť template',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Tu môžete odstrániť vybranú šablónu z databázy. Pamätajte tento krok sa nedá vrátiť späť. Odporúča sa, aby ste vyexportovali súbor pre prípadné budúce použitie.',
	'DELETE_THEME'				=> 'Odstrániť skin',
	'DELETE_THEME_EXPLAIN'		=> 'Tu môžete odstrániť vybrané témy z databázy. Pamätajte tento krok sa nedá vrátiť späť. Odporúča sa, aby ste vyexportovali skin pre prípadné budúce použitie.',
	'DETAILS'	=> 'Detaily',
	'DIMENSIONS_EXPLAIN'	=> 'Zvolením budú pridané informácie o rozmeroch obrázku',

	'EDIT_DETAILS_IMAGESET'	=> 'Upraviť detaily sady obrázkov',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'	=> 'Tu môžete upravovať niektoré detaily sady obrázkov, ako je ich názov',
	'EDIT_DETAILS_STYLE'	=> 'Upraviť štýl',
	'EDIT_DETAILS_STYLE_EXPLAIN'	=> 'Týmto formulárom môžete upraviť existujúci štýl. Môžete tiež zvoliť kombinácie templatov, sady obrázkov a skinov, ktoré tento štýl tvoria. Môžete tiež vybrať tento štýl ako základný.',
	'EDIT_DETAILS_TEMPLATE'	=> 'Upraviť detaily templatu',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'	=> 'Tu môžete upraviť niektoré nastavenia šablóny, ako napríklad jej meno. Môžete tiež zvoliť, či použiť štýl z .css súboru, alebo štýly z databázy. Táto možnosť závisí na nastaveniach PHP a či do vášho templatu môže zapisovať webserver.',
	'EDIT_DETAILS_THEME'	=> 'Upraviť detaily skinu',
	'EDIT_DETAILS_THEME_EXPLAIN'	=> 'Tu môžete upraviť niektoré nastavenia skinu, ako napríklad jeho meno. Môžete tiež zvoliť, či použiť štýl z .css súboru, alebo štýly z databázy. Táto možnosť závisí na nastaveniach PHP a či do vášho skinu môže zapisovať webserver.',
	'EDIT_IMAGESET'	=> 'Upraviť sadu obrázkov',
	'EDIT_IMAGESET_EXPLAIN'	=> 'Tu môžete upraviť jednotlivé obrázky, ktoré tvoria celú sadu. Môžete tiež nastaviť rozmery týchto obrázkov. Rozmery sú voliteľné, ale môžu predísť niektorým problémom s vykresľovaním v niektorých prehliadačoch. Môžete ale ušetriť trochu miesta v databáze, pokiaľ ich neuvediete.',
	'EDIT_TEMPLATE'	=> 'Upraviť template',
	'EDIT_TEMPLATE_EXPLAIN'	=> 'Tu môžete priamo upraviť template. Majte na vedomí, že tieto zmeny sú trvalé a nedajú sa vrátiť späť. Pokiaľ má PHP príslušné oprávnenia, priamo spraví zápis do súborov templatu. Pokiaľ ich nemá, tak zmeny budú uložené v databáze a nahrávané odtadiaľ. Buďte opatrný pri úprave vášho templatu, nezabudnite uzavrieť všetky premenné {XXXX} a podmienené výrazy.',
	'EDIT_TEMPLATE_STORED_DB'	=> 'Súbor šablóny nie je zapisovateľný, takže úpravy boli uložené v databáze.',
	'EDIT_THEME'	=> 'Upraviť skin',
	'EDIT_THEME_EXPLAIN'	=> 'Tu môžete upraviť vybraný skin, meniť farby, obrázky atď. Môžete si vybrať medzi zjednodušeným rozhraním, kde môžete nastaviť základné farby atď., alebo pokročilejší režim "čistého CSS". Ten vám umožňuje pridávať ďalšie prvky ako rámčeky apod. Nastavte iba prvky ktoré potrebujete, ostatné môžete nechať prázdne, alebo nedefinované.',
	'EDIT_THEME_STORED_DB'	=> 'Súbor štýlov nie je zapisovateľný, takže úpravy boli uložené v databáze..',
	'EDIT_THEME_STORE_PARSED'         	=> 'Skin vyžaduje, aby jeho súbory štýlov boli zparsované, to je možné iba pokiaľ je uložený v databáze.',
	'EDITOR_DISABLED'					=> 'Editor štýlu je vypnutý.',
	'EXPORT'	=> 'Export',

	'FOREGROUND'	=> 'Popredie',
	'FONT_COLOUR'	=> 'Farba písma',
	'FONT_FACE'	=> 'Štýl písma',
	'FONT_FACE_EXPLAIN'			=> 'Môžete zvoliť viac fontov použitím čiarok. Pokiaľ užívateľ nemá nainštalovaný prvý font, bude použitý ten nasledujúci',
	'FONT_SIZE'					=> 'Veľkosť písma',

	'GLOBAL_IMAGES'				=> 'Globálne',

	'HIDE_CSS'					=> 'Skryť čisté CSS',

	'IMAGE_WIDTH'				=> 'Šírka obrázkov',
	'IMAGE_HEIGHT'				=> 'Výška obrázkov',
	'IMAGE'						=> 'Obrázok',
	'IMAGE_NAME'				=> 'Názov obrázku',
	'IMAGE_PARAMETER'			=> 'Parameter',
	'IMAGE_VALUE'				=> 'Hodnota',
	'IMAGESET_ADDED'			=> 'Nová sada obrázkov nahraná do súborového systému.',
	'IMAGESET_ADDED_DB'			=> 'Nová sada obrázkov pridaná do databázy.',
	'IMAGESET_DELETED'			=> 'Sada obrázkov bola úspešne odstránená',
	'IMAGESET_DELETED_FS'		=> 'Sada obrázkov bola odstránená z databáze, ale niektoré súbory mohli zostať v súborovom systéme.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Nastavenie sady obrázkov bolo úspešne aktualizované',
	'IMAGESET_ERR_ARCHIVE'		=> 'Prosím zvoľte archivačnú metódu',
	'IMAGESET_ERR_COPY_LONG'	=> 'Copyright nemôže byť dlhší ako 60 znakov.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Názov sady obrázkov môže obsahovať len alfanumerické znaky, -, +, _ a medzeru.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Sada obrázkov s týmto označením už existuje.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Názov sady obrázkov nesmie byť dlhší než 30 znakov.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Zvolený archív neobsahuje platnú sadu obrázkov.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Musíte zvoliť názov sady obrázkov.',
	'IMAGESET_EXPORT'	=> 'Exportovať sadu',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Tu môžete exportovať zvolenú sadu obrázkov v archíve. Archív bude obsahovať všetky potrebné dáta pre prenesenie na iné fórum. Môžete si vybrať medzi uložením archívu do zložky pre ukladanie, jeho stiahnutím, alebo nahraním cez FTP.',
	'IMAGESET_EXPORTED'	=> 'Sada obrázkov bola úspešne exportovaná a uložená %s.',
	'IMAGESET_NAME'	=> 'Názov sady obrázkov',
	'IMAGESET_REFRESHED'	=> 'Sada úspešne aktualizovaná.',
	'IMAGESET_UPDATED'	=> 'Sada úspešne aktualizovaná.',
	'ITALIC'	=> 'Kurzíva',

	'IMG_CAT_BUTTONS'	=> 'Preložené tlačidla',
	'IMG_CAT_CUSTOM'	=> 'Vlastné obrázky',
	'IMG_CAT_FOLDERS'	=> 'Ikony tém',
	'IMG_CAT_FORUMS'	=> 'Ikony fór',
	'IMG_CAT_ICONS'	=> 'Obecné ikony',
	'IMG_CAT_LOGOS'	=> 'Logá',
	'IMG_CAT_POLLS'	=> 'Obrázky hlasovaní',
	'IMG_CAT_UI'	=> 'Všeobecné prvky rozhraní',
	'IMG_CAT_USER'	=> 'Ďalšie obrázky',

	'IMG_SITE_LOGO'	=> 'Hlavné logo',
	'IMG_UPLOAD_BAR'	=> 'Lišta priebehu nahrávania',
	'IMG_POLL_LEFT'	=> 'Ľavý kraj hlasovania',
	'IMG_POLL_CENTER'	=> 'Stred hlasovania',
	'IMG_POLL_RIGHT'	=> 'Pravý kraj hlasovania',
	'IMG_ICON_FRIEND'	=> 'Pridať priateľa',
	'IMG_ICON_FOE'	=> 'Pridať nepriateľa',

	'IMG_FORUM_LINK'	=> 'Fórum ako odkaz',
	'IMG_FORUM_READ'	=> 'Fórum',
	'IMG_FORUM_READ_LOCKED'	=> 'Zamknuté fórum',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subfórum',
	'IMG_FORUM_UNREAD'			=> 'Neprečítané príspevky vo fóre',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Neprečítané príspevky vo fóre - zamknuté',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Neprečítané príspevky v subfóre',
	'IMG_SUBFORUM_READ'			=> 'Ikona subfóra',
	'IMG_SUBFORUM_UNREAD'		=> 'Ikona subfóra s neprečítanými príspevkami',


	'IMG_TOPIC_MOVED'	=> 'Presunutá téma',

	'IMG_TOPIC_READ'	=> 'Téma',
	'IMG_TOPIC_READ_MINE'	=> 'Téma s vlastným príspevkom',
	'IMG_TOPIC_READ_HOT'	=> 'Obľúbená téma',
	'IMG_TOPIC_READ_HOT_MINE'	=> 'Obľúbená téma s vlastným príspevkom',
	'IMG_TOPIC_READ_LOCKED'	=> 'Zamknutá téma',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Zamknutá téma s vlastným príspevkom',

	'IMG_TOPIC_UNREAD'	=> 'Téma s neprečítanými príspevkami',
	'IMG_TOPIC_UNREAD_MINE'	=> 'Oznámenie s vlastnými a neprečítanými príspevkami',
	'IMG_TOPIC_UNREAD_HOT'	=> 'Obľúbená téma s neprečítanými príspevkami',
	'IMG_TOPIC_UNREAD_HOT_MINE'	=> 'Obľúbená téma s vlastnými a neprečítanými príspevkami',
	'IMG_TOPIC_UNREAD_LOCKED'	=> 'Neprečítaná zamknutá téma',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Zamknutá téma s vlastnými a neprečítanými príspevkami',

	'IMG_STICKY_READ'	=> 'Oznámenie',
	'IMG_STICKY_READ_MINE'	=> 'Oznámenie s vlastným príspevkom',
	'IMG_STICKY_READ_LOCKED'	=> 'Zamknuté oznámenie',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Zamknuté oznámenie s vlastným príspevkom',
	'IMG_STICKY_UNREAD'	=> 'Oznámenie s neprečítanými príspevkami',
	'IMG_STICKY_UNREAD_MINE'	=> 'Oznámenie s vlastnými a neprečítanými príspevkami',
	'IMG_STICKY_UNREAD_LOCKED'	=> 'Zamknuté oznámenie s neprečítanými príspevkami',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Zamknuté oznámenie s vlastnými a neprečítanými príspevkami',

	'IMG_ANNOUNCE_READ'	=> 'Dôležité',
	'IMG_ANNOUNCE_READ_MINE'	=> 'Dôležité s vlastným príspevkom',
	'IMG_ANNOUNCE_READ_LOCKED'	=> 'Zamknuté dôležité',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'	=> 'Zamknuté dôležité s vlastným príspevkom',
	'IMG_ANNOUNCE_UNREAD'	=> 'Dôležité s neprečítanými príspevkami',
	'IMG_ANNOUNCE_UNREAD_MINE'	=> 'Dôležité s neprečítanými a vlastnými príspevkami',
	'IMG_ANNOUNCE_UNREAD_LOCKED'	=> 'Zamknuté dôležité s neprečítanými príspevkami',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Zamknuté dôležité s neprečítanými a vlastnými príspevkami',

	'IMG_GLOBAL_READ'	=> 'Globálne',
	'IMG_GLOBAL_READ_MINE'	=> 'Globálne s vlastnými príspevkami',
	'IMG_GLOBAL_READ_LOCKED'	=> 'Zamknuté globálne',
	'IMG_GLOBAL_READ_LOCKED_MINE'	=> 'Zamknuté globálne s vlastnými príspevkami',
	'IMG_GLOBAL_UNREAD'	=> 'Globálne s neprečítanými príspevkami',
	'IMG_GLOBAL_UNREAD_MINE'	=> 'Globálne s vlastnými a neprečítanými príspevkami',
	'IMG_GLOBAL_UNREAD_LOCKED'	=> 'Zamknuté globálne s neprečítanými príspevkami',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'	=> 'Zamknuté globálne s vlastnými a neprečítanými príspevkami',

	'IMG_PM_READ'	=> 'Prečítaná súkromná správa',
	'IMG_PM_UNREAD'	=> 'Neprečítaná súkromná správa',

	'IMG_ICON_BACK_TOP'		=> 'Hore',

	'IMG_ICON_CONTACT_AIM'	=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Odoslať e-mail',
	'IMG_ICON_CONTACT_ICQ'	=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'	=> 'MSNM',
	'IMG_ICON_CONTACT_PM'	=> 'Odoslať správu',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'	=> 'WWW',

	'IMG_ICON_POST_DELETE'	=> 'Odstrániť príspevok',
	'IMG_ICON_POST_EDIT'	=> 'Upraviť príspevok',
	'IMG_ICON_POST_INFO'	=> 'Zobraziť detaily príspevku',
	'IMG_ICON_POST_QUOTE'	=> 'Citovať príspevok',
	'IMG_ICON_POST_REPORT'	=> 'Oznámiť príspevok',
	'IMG_ICON_POST_TARGET'	=> 'Minipríspevok',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nový minipríspevok',


	'IMG_ICON_TOPIC_ATTACH'	=> 'Príloha',
	'IMG_ICON_TOPIC_LATEST'	=> 'Posledný príspevok',
	'IMG_ICON_TOPIC_NEWEST'	=> 'Posledný neprečítaný príspevok',
	'IMG_ICON_TOPIC_REPORTED'	=> 'Oznámený príspevok',
	'IMG_ICON_TOPIC_UNAPPROVED'	=> 'Neschválený príspevok',

	'IMG_ICON_USER_ONLINE'	=> 'Pripojený užívateľ',
	'IMG_ICON_USER_OFFLINE'	=> 'Odpojený užívateľ',
	'IMG_ICON_USER_PROFILE'	=> 'Zobraziť profil',
	'IMG_ICON_USER_SEARCH'	=> 'Vyhľadať príspevky',
	'IMG_ICON_USER_WARN'	=> 'Varovať užívateľa',

	'IMG_BUTTON_PM_FORWARD'	=> 'Preposlať súkromnú správu',
	'IMG_BUTTON_PM_NEW'	=> 'Nová súkromná správa',
	'IMG_BUTTON_PM_REPLY'	=> 'Odpovedať na súkromnú správu',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Zamknúť tému',
	'IMG_BUTTON_TOPIC_NEW'	=> 'Nová téma',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Odpovedať na tému',

	'IMG_USER_ICON1'	=> 'Užívateľsky definovaný obrázok 1',
	'IMG_USER_ICON2'	=> 'Užívateľsky definovaný obrázok 2',
	'IMG_USER_ICON3'	=> 'Užívateľsky definovaný obrázok 3',
	'IMG_USER_ICON4'	=> 'Užívateľsky definovaný obrázok 4',
	'IMG_USER_ICON5'	=> 'Užívateľsky definovaný obrázok 5',
	'IMG_USER_ICON6'	=> 'Užívateľsky definovaný obrázok 6',
	'IMG_USER_ICON7'	=> 'Užívateľsky definovaný obrázok 7',
	'IMG_USER_ICON8'	=> 'Užívateľsky definovaný obrázok 8',
	'IMG_USER_ICON9'	=> 'Užívateľsky definovaný obrázok 9',
	'IMG_USER_ICON10'	=> 'Užívateľsky definovaný obrázok 10',

	'INCLUDE_DIMENSIONS'	=> 'Zahrnúť rozmery',
	'INCLUDE_IMAGESET'	=> 'Zahrnúť sadu obrázkov',
	'INCLUDE_TEMPLATE'	=> 'Zahrnúť template',
	'INCLUDE_THEME'	=> 'Zahrnúť skin',
	'INHERITING_FROM'			=> 'Dedí z',
	'INSTALL_IMAGESET'	=> 'Inštalovať sadu obrázkov',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Tu môžete nainštalovať sadu obrázkov, ktorú ste vybrali. Môžete upresniť vaše nastavenie, alebo použiť prednastavené z inštalácie.',
	'INSTALL_STYLE'	=> 'Inštalovať štýl',
	'INSTALL_STYLE_EXPLAIN'	=> 'Tu môžete nainštalovať vybraný štýl a odpovedajúce položky a súčasti, pokiaľ je treba. Pokiaľ už máte potrebné súčasti štýlov nainštalované, nebudú prepísané. Niektoré štýly vyžadujú, aby ich súčasti už boli nainštalované vopred. Budete upozornený, pokiaľ by ste sa pokúsili taký štýl nainštalovať bez potrebných súčastí.',
	'INSTALL_TEMPLATE'	=> 'Inštalovať template',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Tu môžete nainštalovať šablónu, ktorú ste vybrali. Podľa nastavení servera a oprávnení k súborom vám tu budú ponúknuté rôzne možnosti nastavení.',
	'INSTALL_THEME'	=> 'Inštalovať skin',
	'INSTALL_THEME_EXPLAIN'	=> 'Tu môžete nainštalovať skin, ktorý ste vybrali. Môžete upresniť vaše nastavenie, alebo použiť prednastavené z inštalácie.',
	'INSTALLED_IMAGESET'	=> 'Nainštalované sady obrázkov',
	'INSTALLED_STYLE'	=> 'Nainštalované štýly',
	'INSTALLED_TEMPLATE'	=> 'Nainštalované templaty',
	'INSTALLED_THEME'	=> 'Nainštalované skiny',

	'LINE_SPACING'	=> 'Medzery medzi riadkami',
	'LOCALISED_IMAGES'	=> 'Preložené',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Toto nastavenie je dedené a nemôže byť zmenené.',

	'NO_CLASS'	=> 'Nepodarilo sa nájsť triedu v štýloch',
	'NO_IMAGESET'	=> 'Nepodarilo sa nájsť sadu obrázkov v súboroch.',
	'NO_IMAGE'	=> 'Bez obrázku',
	'NO_IMAGE_ERROR'			=> 'Nepodarilo sa nájsť obrázok v systéme súborov.',
	'NO_STYLE'	=> 'Nepodarilo sa nájsť štýl v súboroch.',
	'NO_TEMPLATE'	=> 'Nepodarilo sa nájsť template v súboroch.',
	'NO_THEME'	=> 'Nepodarilo sa nájsť skin v súboroch.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Žiadne odinštalované sady obrázkov',
	'NO_UNINSTALLED_STYLE'	=> 'Žiadne odinštalované štýly',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Žiadne odinštalované templaty',
	'NO_UNINSTALLED_THEME'	=> 'Žiadne odinštalované skiny',
	'NO_UNIT'	=> 'Žiadne',

	'ONLY_IMAGESET'	=> 'Toto je jediná sada obrázkov, nedá sa zmazať',
	'ONLY_STYLE'	=> 'Toto je jediný štýl, nedá sa zmazať',
	'ONLY_TEMPLATE'	=> 'Toto je jediný template, nedá sa zmazať',
	'ONLY_THEME'	=> 'Toto je jediný skin, nedá sa zmazať',
	'OPTIONAL_BASIS'	=> 'Voliteľné',

	'REFRESH'	=> 'Obnoviť',
	'REPEAT_NO'	=> 'Žiadne',
	'REPEAT_X'	=> 'Len horizontálne',
	'REPEAT_Y'	=> 'Len vertikálne',
	'REPEAT_ALL'	=> 'Obidvoma smermi',
	'REPLACE_IMAGESET'	=> 'Nahradiť sadu obrázkov',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Vybraná sada obrázkov nahradí odstraňovanú vo všetkých štýloch, kde je použitá.',
	'REPLACE_STYLE'	=> 'Nahradiť štýlom',
	'REPLACE_STYLE_EXPLAIN'	=> 'Tento štýl sa použije u užívateľov, ktorí majú nastavený štýl, ktorý sa chystáte vymazať.',
	'REPLACE_TEMPLATE'	=> 'Nahradiť template',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Vybraná šablóna nahradí odstraňovanú vo všetkých štýloch, kde je použitá.',
	'REPLACE_THEME'	=> 'Nahradiť skin',
	'REPLACE_THEME_EXPLAIN'	=> 'Vybraný skin nahradí odstraňovaný vo všetkých štýloch, kde je použitý.',
	'REQUIRES_IMAGESET'	=> 'Tento štýl vyžaduje, aby sada šablón %s bola už nainštalovaná.',
	'REQUIRES_TEMPLATE'	=> 'Tento štýl vyžaduje, aby sada obrázkov %s bola už nainštalovaná.',
	'REQUIRES_THEME'	=> 'Tento štýl vyžaduje, aby skin %s bol už nainštalovaný.',

	'SELECT_IMAGE'	=> 'Vyberte obrázok',
	'SELECT_TEMPLATE'	=> 'Vyberte súbor templatu',
	'SELECT_THEME'				=> 'Vybrať súbor skinu',
	'SELECTED_IMAGE'	=> 'Vybraný obrázok',
	'SELECTED_IMAGESET'	=> 'Vybraná sada obrázkov',
	'SELECTED_TEMPLATE'	=> 'Vybraný template',
	'SELECTED_TEMPLATE_FILE'	=> 'Vybraný súbor templatu',
	'SELECTED_THEME'	=> 'Vybraný skin',
	'SELECTED_THEME_FILE'		=> 'Vybraný súbor skinu',
	'STORE_DATABASE'	=> 'Databáza',
	'STORE_FILESYSTEM'	=> 'Súbory',
	'STYLE_ACTIVATE'	=> 'Aktivovať',
	'STYLE_ACTIVE'	=> 'Aktívne ',
	'STYLE_ADDED'	=> 'Štýl úspešne pridaný',
	'STYLE_DEACTIVATE'	=> 'Deaktivovať',
	'STYLE_DEFAULT'	=> 'Vybrať za defaultný štýl',
	'STYLE_DELETED'	=> 'Štýl úspešne odstránený',
	'STYLE_DETAILS_UPDATED'	=> 'Štýl úspešne aktualizovaný',
	'STYLE_ERR_ARCHIVE'	=> 'Prosím vyberte archivačnú metódu',
	'STYLE_ERR_COPY_LONG'	=> 'Copyright nemôže byť dlhší, ako 60 znakov',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Musíte vybrať aspoň jednu súčasť štýlu.',
	'STYLE_ERR_NAME_CHARS'	=> 'Názov štýlu môže obsahovať len alfanumerické znaky, -, +, _ a medzery.',
	'STYLE_ERR_NAME_EXIST'	=> 'Štýl s týmto názvom už existuje.',
	'STYLE_ERR_NAME_LONG'	=> 'Názov štýlov nesmie byť dlhší, ako 30 znakov.',
	'STYLE_ERR_NO_IDS'	=> 'Musíte pre tento štýl vybrať skin, template a sadu obrázkov.',
	'STYLE_ERR_NOT_STYLE'	=> 'Importovaný, alebo nahraný archív neobsahoval platný štýl.',
	'STYLE_ERR_STYLE_NAME'	=> 'Musíte zvoliť meno pre tento štýl.',
	'STYLE_EXPORT'	=> 'Exportovať štýl',
	'STYLE_EXPORT_EXPLAIN'	=> 'Tu môžete exportovať štýl do archívu. Štýl nemusí obsahovať všetky prvky, ale najmenej jeden. Napríklad pokiaľ ste vytvorili nový skin a sadu obrázkov pre často používaný template, môžete exportovať len skin a sadu obrázkov a šablónu vynechať. Môžete si vybrať, či chcete súbor stiahnuť priamo, alebo ho uložiť na serveri pre neskoršie stiahnutie.',
	'STYLE_EXPORTED'	=> 'Štýl bol úspešne exportovaný a uložený v %s.',
	'STYLE_IMAGESET'	=> 'Sada obrázkov',
	'STYLE_NAME'	=> 'Názov štýlu',
	'STYLE_TEMPLATE'	=> 'Šablóna',
	'STYLE_THEME'	=> 'Skin',
	'STYLE_USED_BY'	=> 'Používa (vrátane botov)',

	'TEMPLATE_ADDED'	=> 'Sada šablón pridaná a uložená v súborovom systéme.',
	'TEMPLATE_ADDED_DB'	=> 'Sada šablón pridaná a uložená v databáze.',
	'TEMPLATE_CACHE'	=> 'Cache šablón',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'phpBB ukladá kópie skopírovaných šablón do cache. Toto znižuje zaťaženie servera a dobu načítania zakaždým, keď je na fóre načítaná akákoľvek stránka. Tu si môžete prezrieť stav všetkých súborov v cache, prípadne z nej odstrániť jeden, alebo viac súborov.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Zložka pre cache šablón bola úspešne prečistená.',
	'TEMPLATE_CACHE_EMPTY'	=> 'V cache nie sú uložené žiadne šablóny.',
	'TEMPLATE_DELETED'	=> 'Sada šablón úspešne zmazaná.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Sada šablón nemôže byť zmenená, keďže jeden alebo viac iných sád šablón dedí z nej:',
	'TEMPLATE_DELETED_FS'	=> 'Sada šablón bola úspešne odstránená z databázy, ale na serveri mohlo zostať niekoľko súborov zo sady.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Podrobnosti o šablóne boli úspešne aktualizované.',
	'TEMPLATE_EDITOR'	=> 'HTML editor šablón',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Výška editora šablón',
	'TEMPLATE_ERR_ARCHIVE'	=> 'Prosím zvoľte archivačnú metódu.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Adresár pre cache, ktorý slúži pre urýchlenie načítania šablón nemohol byť otvorený.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Copyright nesmie byť dlhší, ako 60 znakov.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Názov šablóny môže obsahovať len alfanumerické znaky -, +, _ a medzeru.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Sada šablón s rovnakým názvom už existuje..',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Názov šablóny nesmie byť dlhší, ako 60 znakov.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Zadaný archív neobsahuje platnú sadu šablón.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Nová sada šablón vyžaduje nainštalovaný štýl %s a nebola dedičná.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Musíte zadať názov pre túto šablónu.',
	'TEMPLATE_EXPORT'	=> 'Exportovať šablóny',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Tu môžete exportovať sadu šablón do archívu. Tento archív bude obsahovať všetky potrebné dáta pre inštaláciu sady šablón na inom fóre. Môžete si vybrať, či chcete súbor stiahnuť priamo, alebo ho uložiť na serveri pre neskoršie stiahnutie.',
	'TEMPLATE_EXPORTED'	=> 'Šablóna úspešne exportovaná a uložená v %s.',
	'TEMPLATE_FILE'	=> 'Súbor šablóny',
	'TEMPLATE_FILE_UPDATED'	=> 'Súbor šablóny úspešne aktualizovaný.',
	'TEMPLATE_INHERITS'			=> 'Táto sada šablón dedí z %s a teda nemôže mať iné nastavenie ukladania ako štýl, z ktorého dedí.',
	'TEMPLATE_LOCATION'	=> 'Ukladať šablóny v',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Obrázky budú vždy ukladané v súborovom systéme.',
	'TEMPLATE_NAME'	=> 'Názov šablóny',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Nemožno upraviť súbor %s. Skontrolujte oprávnenia adresára šablóny a súborov.',
	'TEMPLATE_REFRESHED'	=> 'Šablóna úspešne aktualizovaná.',

	'THEME_ADDED'	=> 'Nový skin bol úspešne pridaný do databázy.',
	'THEME_ADDED_DB'	=> 'Nový skin bol úspešne pridaný do databázy.',
	'THEME_CLASS_ADDED'	=> 'Vlastná trieda bola úspešne pridaná.',
	'THEME_DELETED'	=> 'Skin bol úspešne odstránený.',
	'THEME_DELETED_FS'	=> 'Skin bol úspešne odstránený z databázy, ale ale na serveri mohlo zostať niekoľko súborov zo skinu.',
	'THEME_DETAILS_UPDATED'	=> 'Detaily skinu úspešne aktualizované.',
	'THEME_EDITOR'	=> 'CSS editor skinov',
	'THEME_EDITOR_HEIGHT'	=> 'Výška editora skinov.',
	'THEME_ERR_ARCHIVE'	=> 'Prosím vyberte archivačnú metódu.',
	'THEME_ERR_CLASS_CHARS'	=> 'V názvoch triedy môžu byť len alfanumerické znaky ., :, -, _ a #.',
	'THEME_ERR_COPY_LONG'	=> 'Copyright nesmie byť dlhší, ako 60 znakov',
	'THEME_ERR_NAME_CHARS'	=> 'Názov skinu môže obsahovať len alfanumerické znaky, -, +, _ a medzery.',
	'THEME_ERR_NAME_EXIST'	=> 'Skin s týmto názvom už existuje.',
	'THEME_ERR_NAME_LONG'	=> 'Názov skinu nesmie byť dlhší, ako 30 znakov.',
	'THEME_ERR_NOT_THEME'	=> 'Importovaný, alebo nahraný archív neobsahoval platný skin.',
	'THEME_ERR_REFRESH_FS'	=> 'Tento skin je uložený v súboroch, a preto nie je potrebné ho obnovovať.',
	'THEME_ERR_STYLE_NAME'	=> 'Musíte zvoliť názov pre tento skin.',
	'THEME_EXPORT'	=> 'Exportovať skin',
	'THEME_EXPORT_EXPLAIN'	=> 'Tu môžete exportovať skin do archívu. Tento archív bude obsahovať všetky potrebné dáta pre inštaláciu skinu na inom fóre. Môžete si vybrať, či chcete súbor stiahnuť priamo, alebo ho uložiť na serveri pre neskoršie stiahnutie.',
	'THEME_EXPORTED'	=> 'Skin bol úspešne exportovaný a uložený v %s.',
	'THEME_FILE'				=> 'Súbor skinov',
	'THEME_LOCATION'	=> 'Ukladať štýly v',
	'THEME_LOCATION_EXPLAIN'	=> 'Obrázky sú vždy ukladané v súboroch.',
	'THEME_NAME'	=> 'Názov skinu',
	'THEME_REFRESHED'	=> 'Skin úspešne obnovený.',
	'THEME_UPDATED'	=> 'Trieda úspešne aktualizovaná.',

	'UNDERLINE'	=> 'Podčiarknuté',
	'UNINSTALLED_IMAGESET'	=> 'Nenainštalované sady obrázkov',
	'UNINSTALLED_STYLE'	=> 'Nenainštalované štýly',
	'UNINSTALLED_TEMPLATE'	=> 'Nenainštalované templaty',
	'UNINSTALLED_THEME'	=> 'Nenainštalované skiny',
	'UNSET'	=> 'Nedefinované',

));

// phpbb Calendar Version 0.1.0
$lang = array_merge($lang, array(
	'IMG_BUTTON_CALENDAR_NEW'	=> 'Nová udalosť',
	'IMG_BUTTON_CALENDAR_DAY'	=> 'View Day',
	'IMG_BUTTON_CALENDAR_WEEK'	=> 'View Week',
	'IMG_BUTTON_CALENDAR_MONTH'	=> 'View Month',
	'IMG_ICON_CALENDAR_EDIT_ALL' => 'Upraviť všetky príspevky',
	'IMG_ICON_CALENDAR_DELETE_ALL' => 'Vymazať všetky príspevky',	
));

// AJAX checking
$lang = array_merge($lang, array(
	'IMG_ICON_AJAX_CHECKING'		=> 'AJAX overenie',
	'IMG_ICON_AJAX_TRUE'			=> 'AJAX true',
	'IMG_ICON_AJAX_FALSE'			=> 'AJAX false',
	'IMG_ICON_AJAX_PASSWORD_STRENGTH_1'	=> 'AJAX sila hesla - Velmi slabé',
	'IMG_ICON_AJAX_PASSWORD_STRENGTH_2'	=> 'AJAX sila hesla - Slabé',
	'IMG_ICON_AJAX_PASSWORD_STRENGTH_3'	=> 'AJAX sila hesla - Akceptovateľné',
	'IMG_ICON_AJAX_PASSWORD_STRENGTH_4'	=> 'AJAX sila hesla - Silné',
));

// -- Gender MOD 1.0.1
$lang = array_merge($lang, array(
	'IMG_ICON_GENDER_X'	=> 'Pohlavie: Nezadané',
	'IMG_ICON_GENDER_M'	=> 'Pohlavie: Muž',
	'IMG_ICON_GENDER_F'	=> 'Pohlavie: Žena',
));
// -- Gender MOD 1.0.1

// Start DM Video
$lang = array_merge($lang, array(
	'IMG_BUTTON_COMMENT_NEW'	=> 'New comment',
	'IMG_BUTTON_VIDEO_NEW'		=> 'New Video',
));
// Start DM Video

?>
