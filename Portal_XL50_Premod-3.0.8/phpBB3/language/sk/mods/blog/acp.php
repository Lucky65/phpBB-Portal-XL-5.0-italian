<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: acp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'ACP_BLOG_CATEGORIES_EXPLAIN'			=> 'S tadialto môžete pridať/editovať a riadiť Kategóriu blogu.',
	'ACP_BLOG_PLUGINS_EXPLAIN'				=> 'V tomto zdaní môžete zapnúť/vypnúť/nainštalovať a odinštalovať pluginy pre Mód Uživateľského Blogu.<br /><br />Môžete v zozname presúvať pluginy hore/dole, ten puging ktorý bude hore bude v priorite (a bude zobrazený ako prvý).',
	'ALLOWED_IN_BLOG'						=> 'Povolené Užívateľské Blogy',
	'ALLOW_IN_BLOG'							=> 'Povoliť Užívateľské Blogy',

	'BLOG_ALWAYS_SHOW_URL'					=> 'Vždy zobrazovať odkaz na blog v profile',
	'BLOG_ALWAYS_SHOW_URL_EXPLAIN'			=> 'Ak je zadanie nastavené na nie nebude sa odkaz na Blok zobrazovať v profile uživateľov, ak uverejní blog.',
	'BLOG_ATTACHMENT_SETTINGS'				=> 'Pripojenie nastavenia',
	'BLOG_ENABLE_ATTACHMENTS'				=> 'Nadstavba',
	'BLOG_ENABLE_ATTACHMENTS_EXPLAIN'		=> '  Aktivuje alebo vypne celú nadstavbu systému pre Blogy a Blog Odpovede',
	'BLOG_ENABLE_FEEDS'						=> 'RSS/ATOM/Javascript výstup RSS',
	'BLOG_ENABLE_RATINGS'					=> 'Hodnotenie Blogu',
	'BLOG_ENABLE_RATINGS_EXPLAIN'			=> 'Vypnutím sa nepovoli hodnotenie Blogov.',
	'BLOG_ENABLE_SEARCH'					=> 'Hľadať',
	'BLOG_ENABLE_SEARCH_EXPLAIN'			=> 'Povolí systém vyhľadávania v Uživateľskom Blogu (tento systém vyhľadávania je oddelený od systému vyhľadávania na fóre).',
	'BLOG_ENABLE_SEO'						=> 'Url SEO',
	'BLOG_ENABLE_SEO_EXPLAIN'				=> 'Musíte mať aktivované prepísanie módu, aby to fungovalo. Ak url blogu nefunguje, vypnite toto zadanie.',
	'BLOG_ENABLE_USER_PERMISSIONS'			=> 'Užívateľské oprávnenia',
	'BLOG_ENABLE_USER_PERMISSIONS_EXPLAIN'	=> 'Aktivovaním užívateľských oprávnení, sa umožní uživateľom zadať oprávnenia v blogu (pre hostí, registrovaných užívateľov, nepriateľov, a priateľov). Administrátori a moderátori si vždy môžu prezerať odpovede v blogoch.',
	'BLOG_ENABLE_ZEBRA'						=> 'Sekcia Priateľ/Nepriateľ',
	'BLOG_ENABLE_ZEBRA_EXPLAIN'				=> 'Ak zadanie vypnete, užívatelia si nebudú môcť nastaviť povolenia pre priateľov a nepriateľov, ktorí majú vidieť ich blog, a pár ďalších vecí, ktoré môžu byť zakázané.',
	'BLOG_GUEST_CAPTCHA'					=> 'Hostia musia vyplniť Captcha pred odoslaním',
	'BLOG_INFORM'							=> 'Užívateľove nahlásenia alebo príspevky musia byť schválené prostredníctvom Súkromnej Správy',
	'BLOG_INFORM_EXPLAIN'					=> 'Zadajte užívateľské meno užívateľa, od ktorého chcete prijímať súkromné správy, ak je v blogu reakcia, alebo blog je nahlásený alebo nový príspevok musí byť schválený. Oddelte viac užívateľov čiarkou, nenechajte medzery.',
	'BLOG_MAX_ATTACHMENTS'					=> 'Maximálne príspevkov',
	'BLOG_MAX_ATTACHMENTS_EXPLAIN'			=> 'Všimnite si, toto zadanie môže byť prevedené na každého užívateľa v užívateľských oprávneniach.',
	'BLOG_MAX_RATING'						=> 'Maximálne Ohodnotenie Blogu',
	'BLOG_MAX_RATING_EXPLAIN'				=> 'Maximálna hodnota, ktorá môže byť zadaná.',
	'BLOG_MESSAGE_FROM'						=> 'Správy odoslané z',
	'BLOG_MESSAGE_FROM_EXPLAIN'				=> 'ID pre užívateľa ktorého chcete sledovať nahlásenia.  Ak užívateľ neexistuje, vráti sa to ako omyl.',
	'BLOG_MIN_RATING'						=> 'Minimálne Ohodnotenie Blogu',
	'BLOG_MIN_RATING_EXPLAIN'				=> 'Minimálna hodnota, ktorá môže byť zadaná.',
	'BLOG_POST_VIEW_SETTINGS'				=> 'Zobrazenie Blogu a Aktualizácia Nastavení',
	'BLOG_QUICK_REPLY'						=> 'Rýchla odpoveď',
	'BLOG_QUICK_REPLY_EXPLAIN'				=> 'Povolí zobraziť, Rýchla odpoveď pri zobrazení v blogu.',
	'BLOG_SETTINGS'							=> 'Užívateľské Nastavenia Blogu',
	'BLOG_SETTINGS_EXPLAIN'					=> 'Tu môžete nastaviť Užívateľské Nastavenia Blogu.',

	'CATEGORY_CREATED'						=> 'Kategória bola úspešne vytvorená!',
	'CATEGORY_DELETE'						=> 'Vymazať Kategóriu',
	'CATEGORY_DELETED'						=> 'Kategória bola úspešne vymazaná!',
	'CATEGORY_DELETE_EXPLAIN'				=> 'Ste si istí, mám zmazať túto kategóriu?',
	'CATEGORY_DESCRIPTION_EXPLAIN'			=> 'Opis toho, čo je v kategórii.',
	'CATEGORY_EDIT_EXPLAIN'					=> 'Tu môžete zmeniť nastavenia kategórie.',
	'CATEGORY_INDEX'						=> 'Kategórie na Indexe',
	'CATEGORY_NAME_EMPTY'					=> 'Musíte zadať názov kategórie',
	'CATEGORY_PARENT'						=> 'Nadradená Kategória',
	'CATEGORY_RULES_EXPLAIN'				=> 'V tomto zadaní môžete napísať pravidlá, ktoré bude uvedené v každej kategórii.',
	'CATEGORY_SETTINGS'						=> 'Nastavenie Kategórie',
	'CATEGORY_UPDATED'						=> 'Kategória bola úspešne aktualizovaná!',
	'CLICK_CHECK_NEW_VERSION'				=> 'Sem %skliknite%s a skontrolujem aktuakizácie verzie Uživateľského Blogu',
	'CLICK_GET_NEW_VERSION'					=> 'Sem %skliknite%s ak chcete získať najnovšiu verziu tohto Módu',
	'CLICK_UPDATE'							=> 'Sem %skliknite%s ak chcete aktualizovať databázu pre tento Mód',
	'CONTINUE'								=> 'Pokračovať',
	'COPYRIGHT'								=> 'Copyright',
	'CREATE_CATEGORY'						=> 'Vytvoriť Kategóriu',

	'DATABASE_VERSION'						=> 'Verzia Databázy',
	'DEFAULT_TEXT_LIMIT'					=> 'Predvolba, limit textu pre hlavnú stránku blogu',
	'DEFAULT_TEXT_LIMIT_EXPLAIN'			=> 'Po prekročení limitu bude zvyšok textu v správe (skrátený)',
	'DELETE_SUBCATEGORIES'					=> 'Vymazať Podkategórie',

	'EDIT_CATEGORY'							=> 'Upraviť Kategóriu',
	'ENABLE_BLOG_CUSTOM_PROFILES'			=> 'Zobrazí voliteľné pole v profile na stránke užívateľov Blogu',
	'ENABLE_SUBSCRIPTIONS'					=> 'Sledovanie Uživateľský Blog',
	'ENABLE_SUBSCRIPTIONS_EXPLAIN'			=> 'Umožňuje registrovaným užívateľom prihlásiť sa k odberu blogov alebo prijímať oznámenia od užívateľa, ale aj keď je v novom blogu pridaná reakcia.',
	'ENABLE_USER_BLOG'						=> 'Uživateľský Blog',
	'ENABLE_USER_BLOG_EXPLAIN'				=> 'Poznamenávam, že Administrátorský Panel a Uživatelský Panel sekcia Užívateľský Blog bude vždy k dispozícii pokiaľ je mód nainštalovaný (ak ho deaktivujete alebo odstránite nebudú k dispozícii, ponuky Blogy a Môj Blog).',
	'ENABLE_USER_BLOG_PLUGINS'				=> 'Systém Pluginov',
	'ENABLE_USER_BLOG_PLUGINS_EXPLAIN'		=> 'Ak vypnete toto zadanie, všetky aktuálne nainštalované pluginy budú deaktivované, ale Pluginy v časti Administrátorského Pnela budú stále zobrazené.',

	'FILE_VERSION'							=> 'Verzia Súborov',

	'INSTALLED_PLUGINS'						=> 'Nainštalované Pluginy',

	'LATEST_VERSION'						=> 'Posledná verzia',

	'MOVE_BLOGS_TO'							=> 'Presunúť do Blogu',
	'MOVE_SUBCATEGORIES_TO'					=> 'Presunúť do podkategórie',

	'NOT_ALLOWED_IN_BLOG'					=> 'Užívateľské Blogy nie sú povolené',
	'NO_DESTINATION_CATEGORY'				=> 'Nie je zadaná cieľová kategória',
	'NO_INSTALLED_PLUGINS'					=> 'Pluginy nie sú naištalované',
	'NO_PARENT'								=> 'Bez Nadradeného',
	'NO_UNINSTALLED_PLUGINS'				=> 'Nie sú žiadne Odinštalované Pluginy',

	'OUTPUT_CPLINKS_BLOCK'					=> 'Výstupný profil v Blogu ide o voliteľné pole v profile',
	'OUTPUT_CPLINKS_BLOCK_EXPLAIN'			=> 'Ak zadanie nastavíte na Nie, odkaz na Zobrazenie Blogov v každom profile nebude výstup poľa v profile. Budete musieť ručne pridať odkazy v šablóne, ak ich chcete zobraziť.',

	'PARENT_NOT_EXIST'						=> 'Vybraný nadradený neexistuje.',
	'PLUGINS_DISABLED'						=> 'Pluginy sú vypnuté.',
	'PLUGINS_NAME'							=> 'Názov Pluginu',
	'PLUGIN_ACTIVATE'						=> 'Aktivovať',
	'PLUGIN_ALREADY_INSTALLED'				=> 'Vybraný plugin je už nainštalovaný.',
	'PLUGIN_DEACTIVATE'						=> 'Deaktivovať',
	'PLUGIN_INSTALL'						=> 'Nainštalovať',
	'PLUGIN_NOT_EXIST'						=> 'Vybraný plugin neexistuje.',
	'PLUGIN_NOT_INSTALLED'					=> 'Vybraný plugin nie je nainštalovaný.',
	'PLUGIN_UNINSTALL'						=> 'Odinštalovať',
	'PLUGIN_UNINSTALL_CONFIRM'				=> 'Ste si istí, mám odinštalovať tento plugin?<br /><strong>Tým sa odstránia z databázy všetky pridané dáta tohoto modu (všetky uložené údaje, sa stratia)!</strong><br /><br />Musíte manuálne odinštalovať všetky zmenené súbory vytvorené týmto pluginom a vymazať súbory pluginu aby bolo odstránenie kompletné.',
	'PLUGIN_UPDATE'							=> 'Aktualizovať DB',

	'REMOVE_ALL_BLOGS'						=> 'Vymazať celú kategóriu.',

	'SELECT_CATEGORY'						=> 'Vyberte kategóriu',

	'UNINSTALLED_PLUGINS'					=> 'Nenainštalované Pluginy',
	'USER_TEXT_LIMIT'						=> 'Predvolba, limit textu v uživateľovej stránke blogu',
	'USER_TEXT_LIMIT_EXPLAIN'				=> 'Rovnaký ako predvolený limit textu, mimo limit v Zobrazení Uživateľovej stránky',

	'VERSION'								=> 'Verzia',
));

?>