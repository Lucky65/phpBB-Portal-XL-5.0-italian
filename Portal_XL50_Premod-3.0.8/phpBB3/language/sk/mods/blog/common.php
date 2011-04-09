<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: common.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'AVAILABLE_FEEDS'				=> 'Dostupné RSS',

	'BLOG'							=> 'Blog',
	'BLOGS'							=> 'Blogy',
	'BLOG_CONTROL_PANEL'			=> 'Ovládací panel Blogu',
	'BLOG_CREDITS'					=> 'Anglická podpora <a href="http://www.lithiumstudios.org/">User Blog Mod</a> &copy; EXreaction',
	'BLOG_DELETED_BY_MSG'			=> 'Tento blog zrušil %1$s dňa %2$s.  <b>%3$sSem kliknite ak chcete obnoviť tento blog%4$s</b>.',
	'BLOG_DESCRIPTION'				=> 'Opis Blogu',
	'BLOG_LINKS'					=> 'Odkazy Blogu',
	'BLOG_MCP'						=> 'Ovládací Panel Moderátora Blogu',
	'BLOG_NOT_EXIST'				=> 'Požadovaná položka blogu už neexistuje.',
	'BLOG_SEARCH_BACKEND_NOT_EXIST'	=> 'Hľadaný backend nebol nájdený.  Prosím kontaktujte administrátora alebo moderátor.',
	'BLOG_STATS'					=> 'Štatistika Blogu',
	'BLOG_SUBJECT'					=> 'Predmet Blogu',
	'BLOG_TITLE'					=> 'Názov Blogu',

	'CATEGORIES'					=> 'Vložiť do Kategórie',
	'CATEGORY'						=> 'Kategória',
	'CATEGORY_DESCRIPTION'			=> 'Opis Kategórie',
	'CATEGORY_NAME'					=> 'Názov Kategórie',
	'CATEGORY_RULES'				=> 'Pravidlá Kategórie',
	'CLICK_INSTALL_BLOG'			=> 'Kliknite %ssem%s a nainštalujem Uživateľský Mód Blogu',
	'CNT_BLOGS'						=> 'V blogu sú reakcie %s',
	'CNT_REPLIES'					=> 'Sú tu reakcie %s',
	'CNT_VIEWS'						=> 'Zobrazený bol %sx',
	'CONTINUE'						=> 'Pokračovať',
	'CONTINUED'						=> 'Pokračovať',

	'DELETE_BLOG'					=> 'Vymažem Zadanie z Blogu',
	'DELETE_REPLY'					=> 'Vymažem Komentár',

	'EDIT_BLOG'						=> 'Upraviť Zadanie v Blogu',
	'EDIT_REPLY'					=> 'Upraviť Odpoveď',

	'FEED'							=> 'Feed',
	'FOE_PERMISSIONS'				=> 'Oprávnenia Nepriateľov',
	'FRIEND_PERMISSIONS'			=> 'Oprávnenia Priateľov',

	'GUEST_PERMISSIONS'				=> 'Oprávnenia pre Hosťov',

	'LIMIT'							=> 'Limit',

	'MUST_BE_FOUNDER'				=> 'Musíte byť zakladateľ zadania pre prístup na túto stránku.',
	'MY_BLOG'						=> 'Môj Blog',

	'NEW_BLOG'						=> 'Zadať Nový Prispevok do Blogu',
	'NO_BLOGS'						=> 'Neexistujú žiadne blogy.',
	'NO_BLOGS_USER'					=> 'Zatial nepridal nikdo príspevok do blogu.',
	'NO_BLOGS_USER_SORT_DAYS'		=> 'Tento užívateľ v minulosti neuverejnil nič v blogu %s',
	'NO_CATEGORIES'					=> 'Zatial nie sú vytvorené žiadne kategórie',
	'NO_CATEGORY'					=> 'Zvolená kategória neexistuje.',
	'NO_PERMISSIONS_READ'			=> 'Ospravedlňujeme sa, ale nemôžete si prečítať tento blog.',
	'NO_REPLIES'					=> 'Zatial nie sú zadané žiadne komentáre.',

	'ONE_BLOG'						=> '1 blog',
	'ONE_REPLY'						=> '1 komentár',
	'ONE_VIEW'						=> 'Zobrazený bol 1x',

	'PERMANENT_LINK'				=> 'Trvalý odkaz',
	'PLUGIN_TEMPLATE_MISSING'		=> 'Plugin súbor šablóny je poškodený.',
	'POPULAR_BLOGS'					=> 'Obľúbené Položky Blogu',
	'POST_A_NEW_BLOG'				=> 'Nový Príspevok do Blogu',
	'POST_A_NEW_REPLY'				=> 'Pridať Komentár',

	'RANDOM_BLOGS'					=> 'Náhodné Položky Blogu',
	'RECENT_BLOGS'					=> 'Recentné Položky Blogu',
	'REGISTERED_PERMISSIONS'		=> 'Oprávnenia Členov',
	'BLOG_REPLIES'						=> 'Komentáre',
	'REPLY'							=> 'Pridať Komentár',
	'REPLY_COUNT'					=> 'Počet Komentárov',
	'REPLY_DELETED_BY_MSG'			=> 'Tento komentár vymazal %1$s v %2$s.  <b>%3$sSem kliknite ak chcete obnoviť tento komentár%4$s</b>.',
	'REPLY_NOT_EXIST'				=> 'Požadované zadanie neexistuje.',
	'REPORT_BLOG'					=> 'Nahlásiť Zadanie Blogu',
	'REPORT_REPLY'					=> 'Náhlásiť Komentár',
	'RETURN_BLOG_MAIN'				=> '%1$sVrátim sa v Blogu do Blogu uživateľa %2$s%3$s',
	'RETURN_BLOG_OWN'				=> '%sVrátim sa späť do blogu%s',
	'RETURN_MAIN'					=> '%sSem klikni a vrátim sa na na hlavnú stránku Uživateľskeho Blogu%s',

	'SEARCH_BLOGS'					=> 'Vyhľadať Blogy',
	'SUBSCRIBE'						=> 'Odoslať',
	'SUBSCRIBE_BLOG'				=> 'Sledovať Blog',
	'SUBSCRIBE_USER'				=> 'Sledovať uživateľský Blog',
	'SUBSCRIPTION'					=> 'Sledovanie',
	'SUBSCRIPTION_EXPLAIN'			=> 'Vyberte si, ako vás budem informovať po pridaní odpovede do tohto blogu.',
	'SUBSCRIPTION_EXPLAIN_REPLY'	=> 'Po prihlásení do blogu, sú tam možnosti sledovania zobrazené (kde si čo označíte bude váš nový výber sledovania).',

	'TOTAL_BLOG_ENTRIES'			=> 'Celkom Položiek v Blogu je <strong>%s</strong>',

	'UNSUBSCRIBE'					=> 'Zruším sledovanie',
	'UNSUBSCRIBE_BLOG'				=> 'Zruším sledovanie tohoto uživateľa',
	'UNSUBSCRIBE_USER'				=> 'Odhlásiť sa od tohto užívateľa',
	'USERNAMES_BLOGS'				=> 'Blog uživateľa %s',
	'USERNAMES_DELETED_BLOGS'		=> '%s Vymazal Zadanie',
	'USER_BLOGS'					=> 'Uživateľské Blogy',
	'USER_BLOG_MOD_DISABLED'		=> 'Tento Uživateľský Blog bol deaktivovaný.',
	'USER_BLOG_RATINGS_DISABLED'	=> 'Systém ohodnotenia bol deaktivovaný.',

	'VIEW_BLOG'						=> 'Zobrazím všetky Blogy',
	'VIEW_REPLY'					=> 'Zobrazím všetky Reakcie',

	'WARNING'						=> 'Výstraha',
));

?>