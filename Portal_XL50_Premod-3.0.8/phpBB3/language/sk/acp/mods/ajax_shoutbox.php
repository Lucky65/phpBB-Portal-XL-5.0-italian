<?php
/**
*
* Module info ajax shoutbox [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: ajax_shoutbox.php,v 1.1.1.1 2009/05/15 05:15:55 damysterious Exp $
* @copyright (c) 2005 phpBB Group
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
	'ACP_SHOUTBOX_SETTINGS'				=> 'Nastavenia Chatu Ajax',
	'ACP_SHOUTBOX_SETTINGS_EXPLAIN'     => '<strong><font color="red">Upozornenie!</FONT></strong></br>Pre správne fungovanie si musíte vytvoriť v zadaní tabuľky <strong><font color="red">Portál</FONT></strong>, časť, <strong><font color="red">"Portál Nastavenie Blokov"</FONT></strong> blok kde bude umiestnený chat, tam pre chat použite súbor html <strong><font color="red">Center shout</FONT></strong>. <br /><strong><font color="red">Chat Ajax!</FONT></strong></br>Nezabudnite udeliť povolenia pre Ajax Chat ktoré nájdete hore v tabuľke <strong><font color="red">OPRÁVNENIA</FONT></strong>, kde na ľavej strane sú zadania <strong><font color="red">Oprávnenia užívateľov alebo Oprávnenia skupín</FONT></strong>, vo zvolenom zadaní zvolte: <strong><font color="red">Pokročilé oprávnenia</FONT></strong> a tam môžete zadať jednotlivé oprávnenia.',	
	'ACP_SHOUTBOX_OVERVIEW'             => 'Prehľad Chatu Ajax ',

	// Overview
	'AS_OVERVIEW'			=> 'Prehľad MÓDU',
	'AS_OVERVIEW_EXPLAIN'	=> 'Tu sú určité štatistiky výkonov z Chatu Ajax.<br />
	Ak najdete nejaké chyby, alebo chcete navyše nejakú vlastnosť, prosím navštívte náš <a href="http://www.paulsohier.nl/ajax">trac</a>.<br />
	Pred predložením čohokoľvek, prosím najprv si skontrolujte či chyba alebo fukcia nie je už vyriešená a zverejnená.',

	
	'AS_STATS'      => 'Štatistika Chatu',
	'NUMBER_SHOUTS' => 'Celkvý počet zadaní',
	'AS_VERSION'    => 'Verzia Shoutbox',
	'AS_OPTIONS'    => 'Volby Chatu',
	'PURGE_AS'      => 'Vymazať všetky správy',
	
	'UNABLE_CONNECT'    => 'Ľutujem neviem sa pripojiť na server, kde mám preveriť verziu, Výsledkom je táto chyba: %s',
	'NEW_VERSION'       => 'Vaša verzia ajax shoutbox je už zastaralá. Verziu ktorú používate je is %1$s, najnovšia verzia je %2$s. Prečítajte si <a href="%3$s">tieto</a> ako aj ďalšie informácie',
	
	
	// Configuration
	'AS_PRUNE_TIME'				=> 'Čas prečistenia',
	'AS_PRUNE_TIME_EXPLAIN'		=> 'Nastavte čas, kedy budú správy automaticky orezané. Ak je aktivované nastavenie pre maximum prispevkov, tak v tom pripade sa bude riadiť týmto nastavenim. zadaním 0 bude táto vlastnosť zablokovaná',
	'AS_MAX_POSTS'				=> 'Maximálny počet zadaní',
	'AS_MAX_POSTS_EXPLAIN'		=> 'Maximálny počet zadaní. Zadaním 0 bude táto vlastnosť zablokovaná. Ak je toto nastavenie aktivované, tak sa bude <strong>riadiť</strong> nastavením prečistenia!',
	
	'AS_FLOOD_INTERVAL'         => 'Interval postúpenia',
	'AS_FLOOD_INTERVAL_EXPLAIN' => 'Minimálna doba zverejnenia medzi 2 príspevkami užívateľov. Zadaním 0 bude táto vlastnosť zablokovaná.',
	
	'AS_IE_NR'				=> 'Počet správ',
	'AS_IE_NR_EXPLAIN'		=> 'Počet správ v prehliadači internetu. Kvôli určitým obmedzeniam v IE, je potrebné zostrihnúť ich velkosť.',
	'AS_NON_IE_NR'			=> 'Počet správ',
	'AS_NON_IE_NR_EXPLAIN'	=> 'Počet správ v inom prehliadači ako je IE.',
));
?>
