<?php
/**
*
* acp_phpbb_seo [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package Ultimate SEO URL phpBB SEO
* @version $Id: phpbb_seo_related_install.php 152 2009-11-10 19:21:31Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
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
	// ACP
	'SEO_RELATED' => 'Aktivácia súvisiacich tém',
	'SEO_RELATED_EXPLAIN' => 'Zobrazím alebo nezobrazím zoznam príbuzmých tém stránky.<br/><b style="color:red;">Poznámka :</b><br/>V tabuľke MySQL> = 4.1 sa použije MyISAM, týkajúcich sa tém pre odber fulltextových indexov, názvy tém budú zoradené podľa relevantnosti, v ostatných prípadoch bude SQL, zoraďovať výsledky podľa času vydania.',
	'SEO_RELATED_CHECK_IGNORE' => 'Ignorovať filtrovanie slov',
	'SEO_RELATED_CHECK_IGNORE_EXPLAIN' => 'Použijem, alebo nie, search_ignore_words.php, teda vylúčim pri hľadaní slová v príbuzných témach.',
	'SEO_RELATED_LIMIT' => 'Limit súvisiacich tém',
	'SEO_RELATED_LIMIT_EXPLAIN' => 'Zadajte maximály počet súvisiacich tém ktoré budú zobrazené.',
	'SEO_RELATED_ALLFORUMS' => 'Hľadať vo všetkých fórach',
	'SEO_RELATED_ALLFORUMS_EXPLAIN' => 'Mám prehľadávať všetky fóra, alebo len aktuálne fórum.<br/><b style="color:red;">Poznámka :</b><br/>Vyhľadávanie vo všetkých fórach je trochu pomalšie a nemusí nevyhnutne priniesť lepšie výsledky.',
	// Install
	'INSTALLED' => 'Inštalácia Módu SEO phpBB Related Topics',
	'ALREADY_INSTALLED' => 'Mód SEO phpBB a Súvisiace témy je už nainštalovaný',
	'FULLTEXT_INSTALLED' => 'Inštalácia Mysql FullText Index',
	'FULLTEXT_NOT_INSTALLED' => 'Mysql FullText Index nie je k dispozícii na tomto serveri, namiesto toho sa bude používať SQL LIKE ',
	'INSTALLATION' => 'Mód SEO phpBB a Súvisiace témy je úspešne nainštalovaný',
	'INSTALLATION_START' => '&rArr; <a href="%1$s" ><b>Pokračujte v inštalácii módu</b></a><br/><br/>&rArr; <a href="%2$s" ><b>Opakovať nastavenie FullText Index</b></a> (Mysql >= 4.1 používa na témy iba MyISAM)<br/><br/>&rArr; <a href="%3$s" ><b>Pokračujte v odinštalácii módu</b></a>',
	// un-install
	'UNINSTALLED' => 'Odinštalovanie Módu SEO phpBB Related Topics',
	'ALREADY_UNINSTALLED' => 'Mód SEO phpBB a Súvisiace témy je už odinštalovaný',
	'UNINSTALLATION' => 'Mód SEO phpBB a Súvisiace témy je úspešne odinštalovaný',
	// SQL message
	'SQL_REQUIRED' => 'Užívateľ nemá dostatočné oprávnenie k zmene tabuľky, je potrebné spustiť tento dotaz ručne, aby sa pridal alebo odobral Mysql FullText index :<br/>%1$s',
	// Security
	'SEO_LOGIN'		=> 'Musite byť zaregistrovaný a prihlásený aby ste si mohli prezerať túto stránku.',
	'SEO_LOGIN_ADMIN'	=> 'Je nutné, aby ste bol prihlásený ako admin ak chcete zobraziť túto stránku.<br/> Vaša relácia bola zničená z bezpečnostných dôvodov.',
	'SEO_LOGIN_FOUNDER'	=> 'Je nutné, aby ste bol prihlásený ako zakladateľ, ak chcete prezerať túto stránku.',
	'SEO_LOGIN_SESSION'	=> 'Kontrola sekcii zlyhala.<br/> Nastavenie neboli ovplyvnené.<br/> Táto sekcia bola zničený z bezpečnostných dôvodov.',
));
?>