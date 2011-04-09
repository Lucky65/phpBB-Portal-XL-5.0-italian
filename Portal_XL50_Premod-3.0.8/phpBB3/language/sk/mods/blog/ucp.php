<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: ucp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'BLOG_CSS'								=> 'Blog CSS',
	'BLOG_CSS_EXPLAIN'						=> 'Toto zadanie vám umožní zadať ľubovoľný kód CSS, ak chcete zmeniť formát a štýl vlastného blogu, aby vyzeral tak, ako chcete.',
	'BLOG_INSTANT_REDIRECT'					=> 'Okamžité presmerovanie',
	'BLOG_INSTANT_REDIRECT_EXPLAIN'			=> 'Toto nastavenie umožní okamžite presmerovanie Uživateľského Blogu na ďalšiu stránku namiesto zobrazenia informačnej stránky.',
	'BLOG_STYLE'							=> 'Štýl Blogu',
	'BLOG_STYLE_EXPLAIN'					=> 'Vyberte si štýl, pre zobrazenie vášho blogu. <br />Ak štýl má  pri názve označenie * tak si môžete zadať vlastné CSS pre prispôsobenie šrýlu (ak máte na to oprávnenie).',

	'NONE'									=> 'Nezadaný',
	'NO_PERMISSIONS'						=> 'Nemôžu zadania vo vašom blogu čítať ani na ne reagovať.',

	'REPLY_PERMISSIONS'						=> 'Môžu čítať a odpovedať na vaše zadania v blogu.',
	'RESYNC_PERMISSIONS'					=> 'Resynchronizovať Oprávnenia',
	'RESYNC_PERMISSIONS_EXPLAIN'			=> 'Zaškrtnite ak chcete resynchronizovať všetky oprávnenia v blogoch.',

	'SUBSCRIPTION_DEFAULT'					=> 'Predvolba Odoslania:',
	'SUBSCRIPTION_DEFAULT_EXPLAIN'			=> 'Zadajte typ, ktorým vám bude štandardne odoslaná správa o tom ak niekto pridá komentár do blogu, ktorý ste uverejnil, toto nastavenie sledovania si môžete nastaviť v každom prispevku.',

	'UCP_BLOG_PERMISSIONS_EXPLAIN'			=> 'Tu môžete zmeniť nastavenia povolení pre váš blog.<br />Poznamenávam , že globálne oprávnenia zadané v panely, zrušia všetky oprávnenia ktoré tu zadáte.',
	'UCP_BLOG_SETTINGS_EXPLAIN'				=> '',
	'UCP_BLOG_TITLE_DESCRIPTION_EXPLAIN'	=> 'Tu môžete zadať názov a popis svojho blogu.',
	'USER_PERMISSIONS_DISABLED'				=> 'Systém užívateľských oprávnení bol zakázaný Administratorom.',

	'VIEW_PERMISSIONS'						=> 'Môžu si prečítať zadania blogu.',
));

?>