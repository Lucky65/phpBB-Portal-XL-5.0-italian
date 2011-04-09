<?php
/**
*
* acp_attachments [Slovak]
*
* @package language
* @version $Id: attachments.php,v 1.31 2007/10/15 00:00:00 phpbb3.sk Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Tu môžete upraviť hlavné nastavenia príloh a príslušných kategórií. ',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Tu môžete pridať, zmazať, modifikovať alebo deaktivovať skupiny prípon súborov. Ďalšie možnosti zahŕňajú priradenie špecialných kategórií, zmenu mechanizmu sťahovania súborov a nastavenie ikony, ktorá sa zobrazí pred každou prílohou pri jednotlivých skupinách.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Tu možete spravovať povolené druhy súborov. Pre aktiváciu prípon použite Administráciu skupín druhov súborov. Odporúčame nepovoliť prípony skriptov (ako napríklad <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> atď.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Tu možete vidieť nepriradené súbory. Dochádza k tomu v prípadoch, keď užívateľ pripojí prílohu, ale neodošle správu. Môžete tento súbor zmazať, alebo pripojiť k už existujúcej správe. Pripojenie prílohy vyžaduje platné ID správy, ktoré si musíte zistiť sami. Toto následne priradí nahratý súbor k už existujúcej správe.',
	'ADD_EXTENSION'						=> 'Pridať druh súboru',
	'ADD_EXTENSION_GROUP'				=> 'Pridať skupiny druhov súborov',
	'ADMIN_UPLOAD_ERROR'				=> 'Chyba pri priradení súboru: “%s”.',
	'ALLOWED_FORUMS'					=> 'Povolené fóra',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Môžete uverejniť dané rozšírenie vo vybraných (alebo vo všetkých ak boli vybrané) fórach.',
	'ALLOWED_IN_PM_POST'				=> 'Povoliť',
	'ALLOW_ATTACHMENTS'					=> 'Povoliť prílohy',
	'ALLOW_ALL_FORUMS'					=> 'Povoliť všetky fóra',
	'ALLOW_IN_PM'						=> 'Povoliť v súkromných správach',
	'ALLOW_PM_ATTACHMENTS'				=> 'Povoliť prílohy v súkromných správach',
	'ALLOW_SELECTED_FORUMS'				=> 'Len nižšie vybrané fóra',
	'ASSIGNED_EXTENSIONS'				=> 'Priradené prípony',
	'ASSIGNED_GROUP'					=> 'Priradené skupiny súborov',
	'ATTACH_EXTENSIONS_URL'				=> 'Druhy súborov',
	'ATTACH_EXT_GROUPS_URL'				=> 'Skupiny druhov súborov',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maximálna veľkosť súboru',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maximálna veľkosť pre každý súbor, zadajte 0 pre žiadne obmedzenia.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximálna veľkosť pre správy',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maximálna veľkosť pre každý súbor v súkromnej správe, zadajte 0 pre žiadne obmedzenia.',
	'ATTACH_ORPHAN_URL'					=> 'Nepriradené prílohy',
	'ATTACH_POST_ID'					=> 'ID správy',
	'ATTACH_QUOTA'						=> 'Celková kvóta príloh',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maximálne miesto na disku vyhradené pre prílohy súkromných správ (údaj pre celé fórum). Ak je 0, miesto je neobmedzené.',
	'ATTACH_TO_POST'					=> 'Pripojiť súbor k správe',

	'CAT_FLASH_FILES'			=> 'Flashové súbory',
	'CAT_IMAGES'				=> 'Obrázky',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime media súbory',
	'CAT_RM_FILES'				=> 'RealMedia súbory',
	'CAT_WM_FILES'				=> 'Windows Media súbory',
	'CHECK_CONTENT'				=> 'Skontrolovať prílohy',
	'CHECK_CONTENT_EXPLAIN'		=> 'Niektoré prehliadače môžu byť oklamané nesprávnymi mimitypy pre prílohy. Toto nastavenie zaručí, že budu vyradené.',
	'CREATE_GROUP'			=> 'Vytvoriť novú skupinu',
	'CREATE_THUMBNAIL'			=> 'Vytvoriť náhľad',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Vytvorí náhľad pri každej príležitosti.',

	'DEFINE_ALLOWED_IPS'			=> 'Definovať povolené IP adresy/hostiteľov',
	'DEFINE_DISALLOWED_IPS'			=> 'Definovať zakázané IP adresy/hostiteľov',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Ak chcete špecifikovať viac IP adries, uveďte každú do nového riadku. Pre definovanie rozpätia IP adries použite pomlčku (-) medzi dvoma adresami, ako náhradné znaky použite hviezdičku “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Môžete odstrániť (alebo odznačiť) viac IP adries naraz použitím myši a klávesnice vo vašom prehliadači. Vylúčené IP adresy majú modré pozadie.',
	'DISPLAY_INLINED'				=> 'Zobraziť obrázky v príspevku',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ak je nastavené - Žiadne obrázky - prílohy sa budú zobrazovať ako odkazy.',
	'DISPLAY_ORDER'					=> 'Poradie zobrazenia príloh',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Zobrazí prílohy zoradené podľa času.',

	'EDIT_EXTENSION_GROUP'			=> 'Upraviť skupinu prípon',
	'EXCLUDE_ENTERED_IP'			=> 'Povoľte túto možnosť pre vylúčenie IP adresy.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Odstrániť IP zo zoznamu povolených IP adries',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Odstrániť IP zo zoznamu zakázaných IP adries',
	'EXTENSIONS_UPDATED'			=> 'Prípony úspešne aktualizované.',
	'EXTENSION_EXIST'				=> 'Prípona %s už existuje.',
	'EXTENSION_GROUP'				=> 'Skupina druhov súborov',
	'EXTENSION_GROUPS'				=> 'Skupiny druhov súborov',
	'EXTENSION_GROUP_DELETED'		=> 'Skupina prípon bola úspešne zmazaná.',
	'EXTENSION_GROUP_EXIST'			=> 'Skupina prípon %s už existuje.',
	'EXT_GROUP_ARCHIVES'			=> 'Archívy',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumenty',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Súbory na stiahnutie',
	'EXT_GROUP_FLASH_FILES'			=> 'Flashové súbory',
	'EXT_GROUP_IMAGES'				=> 'Obrázky',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Text',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Média',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Média',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Média',
	
	'GO_TO_EXTENSIONS'		=> 'Prejsť na panel riadenia skupín prípon',
	'GROUP_NAME'			=> 'Meno skupiny',

	'IMAGE_LINK_SIZE'			=> 'Rozmery pre odkaz k obrázku',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Zobraziť obrázok ako textový odkaz, ak sú jeho rozmery väčšie ako nastavený limit. Pre vypnutie tejto funkcie, nastavte hodnoty - 0px na 0px.',
	'IMAGICK_PATH'				=> 'Cesta k Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Úplná cesta ku konvertnému programu imagemagick, napr. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximálny počet príloh na jeden príspevok',
	'MAX_ATTACHMENTS_PM'			=> 'Maximálny počet príloh na jednu súkromnú správu',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximálna veľkosť súboru.',
	'MAX_IMAGE_SIZE'				=> 'Maximálne rozmery obrázku',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximálna veľkosť obrázkových príloh. Ak chcete vypnúť kontrolu rozmerov, nastavte obe hodnoty na 0px.',
	'MAX_THUMB_WIDTH'				=> 'Maximálna šírka náhľadu v pixeloch',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Šírka vytvoreného náhľadu nepresiahne vami zadanú hodnotu.',
	'MIN_THUMB_FILESIZE'			=> 'Minimálna veľkosť náhľadu',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Pre obrázky s menšími hodnotami sa nebudú vytvárať náhľady.',
	'MODE_INLINE'					=> 'V príspevku',
	'MODE_PHYSICAL'					=> 'Fyzické',

	'NOT_ALLOWED_IN_PM'			=> 'Povolené len v súkromných správach',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Zakázané',
	'NOT_ASSIGNED'				=> 'Nepriradené',
	'NO_EXT_GROUP'				=> 'Žiadna',
	'NO_EXT_GROUP_NAME'			=> 'Nebolo vložené meno skupiny.',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nebola určená žiadna skupina.',
	'NO_FILE_CAT'				=> 'Žiadna',
	'NO_IMAGE'					=> 'Bez obrázku',
	'NO_THUMBNAIL_SUPPORT'		=> 'Funkcia vytvárania náhľadov bola vypnutá. Pre bezchybné fungovanie sú potrebné php GD rozšírenie, alebo nainštalovaný imagemagick. Ani jedno nebolo nájdené.',
	'NO_UPLOAD_DIR'				=> 'Zvolený adresár pre nahrávanie neexistuje.',
	'NO_WRITE_UPLOAD'			=> 'Do zvoleného adresára pre nahrávanie sa nedá zapisovať. Nastavte oprávnenia tak, aby mohol server zapisovať do neho.',

	'ONLY_ALLOWED_IN_PM'	=> 'Povolené len v sukromných správach',
	'ORDER_ALLOW_DENY'		=> 'Povoliť',
	'ORDER_DENY_ALLOW'		=> 'Zakázať',

	'REMOVE_ALLOWED_IPS'		=> 'Odstrániť alebo pridať <em>povolené</em> IP adresy/hostiteľov',
	'REMOVE_DISALLOWED_IPS'		=> 'Odstrániť alebo pridať <em>nepovolené</em> IP adresy/hostiteľov',

	'SEARCH_IMAGICK'				=> 'Hľadať Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Zoznam povolených/zakázaných',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Zmeniť základné správanie Zoznamu povolených/zakázaných, ak je zapnuté zabezpečené sťahovanie na nastavenia <strong>whitelist</strong> (povoliť) alebo <strong>blacklist</strong> (zakázať).',
	'SECURE_DOWNLOADS'				=> 'Povoliť zabezpečené sťahovanie',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Ak je táto možnosť povolená, sťahovať môžu iba IP adresy, príp. hostitelia, ktorých ste určili.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Zabezpečené sťahovanie nie je povolené. Nastavenia, ktoré sú uvedené nižšie sa použijú, keď zapnete zabezpečené sťahovanie.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Zoznam IP adries bol úspešne aktualizovaný.',
	'SECURE_EMPTY_REFERRER'			=> 'Povoliť prázdny referrer (odkazujúcu stránku)',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Zabezpečené sťahovanie je založené na odkazujúcich stránkach (referrer). Chcete povoliť sťahovania, ktoré nemajú odkazujúce stránky?',
	'SETTINGS_CAT_IMAGES'			=> 'Nastavenie kategórií obrázkov',
	'SPECIAL_CATEGORY'				=> 'Zvláštna kategória',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Zvláštne kategórie odlišujú samotnú prezentáciu v správach.',
	'SUCCESSFULLY_UPLOADED'			=> 'Úspešne nahrané.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Skupina súborov bola úspešne pridaná.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Skupina súborov bola úspešne aktualizovaná.',

	'UPLOADING_FILES'				=> 'Nahrávanie súborov',
	'UPLOADING_FILE_TO'				=> 'Nahrávam súbor “%1$s” k príspevku %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Nemáte povolenie na nahrávanie súborov na fórum “%s”.',
	'UPLOAD_DIR'					=> 'Adresár pre nahrávanie',
	'UPLOAD_DIR_EXPLAIN'			=> 'Odkladací adresár pre prílohy. Ak zmeníte adresár s už nahranými prílohami, tieto budete musieť ručne prekopírovať do novej zložky.',
	'UPLOAD_ICON'					=> 'Ikona uploadov',
	'UPLOAD_NOT_DIR'				=> 'Zadaný adresár pre nahrávanie je pravdepodobne neplatný.',
));

?>