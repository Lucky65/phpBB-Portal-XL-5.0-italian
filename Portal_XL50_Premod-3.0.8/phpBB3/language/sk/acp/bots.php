<?php
/**
*
* acp_bots [Slovak]
*
* @package language
* @version $Id: bots.php,v 1.12 2007/10/15 00:00:00 phpbb3.sk Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Správa robotov',
	'BOTS_EXPLAIN'		=> '&quot;Bot&quot; je program používaný vyhľadávačmi na aktualizáciu ich databáz. Tento program prechádza odkazmi stránku po stránke na internete a zbiera informácie o nových, aktualizuje staré a maže neexistujúce stránky. Tieto potom ukladá do databázy a tvorí tzv. index. Tu môžete nastaviť špeciálne nastavenia pre týchto agentov.',
	'BOT_ACTIVATE'		=> 'Aktivovať',
	'BOT_ACTIVE'		=> 'Aktívny bot',
	'BOT_ADD'			=> 'Pridať bota',
	'BOT_ADDED'			=> 'Nový bot bol úspešne pridaný.',
	'BOT_AGENT'			=> 'Rozpoznanie bota podľa označenia',
	'BOT_AGENT_EXPLAIN'	=> 'Reťazec, ktorý je v označení, pod ktorým sa vyskytuje bot, čiastočné zhody sú povolené.',
	'BOT_DEACTIVATE'	=> 'Deaktivovať',
	'BOT_DELETED'		=> 'Bot bol úspešne odstránený.',
	'BOT_EDIT'			=> 'Editovanie bota',
	'BOT_EDIT_EXPLAIN'	=> 'Tu môžete pridávať alebo editovať existujúcich botov. Môžete definovať agentove obmedzenia a napríklad aj IP adresu (alebo rozpätie adries). Buďte opatrní, keď definujete práva a adresy robotov môže to ovplyvniť kvalitu výsledkov bota. Môžete špecifikovať štýl a jazyk ktorý sa rozbalí robotovi, keď bude používať fórum. Takto môžete určiť šírku používateľnosti a jednoduché štýly pre botov. Nezabudnite na nastavenie špeciálnych práv pre užívateľskú skupinu botov.',
	'BOT_LANG'			=> 'Jazyk',
	'BOT_LANG_EXPLAIN'	=> 'Jazyk prezentovaný botom, keď prehliadajú fórum.',
	'BOT_LAST_VISIT'	=> 'Posledná návšteva',
	'BOT_IP'			=> 'IP adresa bota',
	'BOT_IP_EXPLAIN'	=> 'Čiastočné zhody sú povolené, adresy oddeľte čiarkou.',
	'BOT_NAME'			=> 'Meno bota',
	'BOT_NAME_EXPLAIN'	=> 'Slúži len pre vašu informáciu.',
	'BOT_NAME_TAKEN'	=> 'Tento názov je už na vašom fóre používaný a nemôžete ho použiť pre tohto bota.',
	'BOT_NEVER'			=> 'Nikdy',
	'BOT_STYLE'			=> 'Vzhľad bota',
	'BOT_STYLE_EXPLAIN'	=> 'Štýl používaný pre bota.',
	'BOT_UPDATED'		=> 'Nastavenia boli úspešne aktualizovane.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Označenie bota ktorého ste pridali je podobný jednému ktorého práve používaťe. Prosím zmeňte označenie tohto bota.',
	'ERR_BOT_NO_IP'				=> 'Zadaná IP adresa nie je správna.',
	'ERR_BOT_NO_MATCHES'		=> 'Musíte dodať najmenej jedného agenta alebo IP pre kombináciu agentov.',

	'NO_BOT'		=> 'Žiadny bot nebol nájdený podľa zadaného ID.',
	'NO_BOT_GROUP'	=> 'Zakázať zobrazenie skupiny botov.',
));

?>