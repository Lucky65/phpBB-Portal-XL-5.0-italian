<?php
/**
*
* calendar [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @author alightner
*
* @package phpBB Calendar
* @version CVS/SVN: $Id: $
* @copyright (c) 2009 alightner
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


 
$lang = array_merge($lang, array(
    '12_HOURS'								=> '12 hodín',
    '24_HOURS'								=> '24 hodín',
    'AUTO_POPULATE_EVENT_FREQUENCY'			=> 'Automatické Dosadenie Opakovanéj Udalosti',
    'AUTO_POPULATE_EVENT_FREQUENCY_EXPLAIN'	=> 'Ako často (v dňoch) majú byť vyplnené opakované udalosti v kalendári? Poznámka: Ak zadate 0, opakujúce sa udalosti nebudú pridané do kalendára nikdy.',
    'AUTO_POPULATE_EVENT_LIMIT'				=> 'Limit Automatického Dosadenia',
    'AUTO_POPULATE_EVENT_LIMIT_EXPLAIN'		=> 'Koľko dní dopredu chcete aby boli dosadené opakujúce sa udalostí? Inými slovami, chcete vidieť iba opakované udalosti v kalendári 30, 45 alebo viac dní pred začatím akcie?',
    'AUTO_PRUNE_EVENT_FREQUENCY'			=> 'Automatické Prečistenie Udalostí',
    'AUTO_PRUNE_EVENT_FREQUENCY_EXPLAIN'	=> 'Ako často (v dňoch) by sa mali prečistiť staré udalostí kalendára? Poznámka: Ak zadate 0, nebudú prečistené udalostí nikdy, budete ich musieť odstrániť ručne.',
    'AUTO_PRUNE_EVENT_LIMIT'				=> 'Auto.Nastavenie Limitov',
    'AUTO_PRUNE_EVENT_LIMIT_EXPLAIN'		=> 'Koľko dni chcete pridať končiacej udalosti, pred ďalším automatickým prečistením teda vymazaním zo zoznamu? Inými slovami, chcete aby všetky udalosti v kalendári zostali 0, 30 alebo 45 dní po skončení akcie?',
    'CALENDAR_ETYPE_NAME'					=> 'Názov typu udalosti',
    'CALENDAR_ETYPE_COLOR'					=> 'Sfarbenie typu udalosti',
    'CALENDAR_ETYPE_ICON'					=> 'Typ ikony URL udalosti',
    'CALENDAR_SETTINGS_EXPLAIN'				=> 'Upravenie nastavení kalendára.',
    'CHANGE_EVENTS_TO'						=> 'Zmenil všetkých udalosti tohoto typu',
    'CLICK_PLUS_HOUR'						=> 'Presun všetkých udalosti o jednu hodinu.',
    'CLICK_PLUS_HOUR_EXPLAIN'				=> 'Presun všetkých udalosti v kalendári o +/ - jednu hodina pomáha keď sa nad ránom resetujú panely pre uloženie časového nastavenia.  Poznámka: kliknutim na linky sa presunú udalosti a v ich nastaveniach sa vykonajú zmeny.  Prosím ak máte rozrobenú prácu uložte si ju pred, vykonom presunutia udalostí o +/ - jednu hodinu.',
    'COLOR'									=> 'Farba',
    'CREATE_EVENT_TYPE'						=> 'Vytvoriť nový typ udalosti',
    'DATE_FORMAT'							=> 'Formát dátumu',
    'DATE_FORMAT_EXPLAIN'					=> 'Zadanie &quot;M d, Y&quot;',
    'DATE_TIME_FORMAT'						=> 'Formát dátumu a času',
    'DATE_TIME_FORMAT_EXPLAIN'				=> 'Zadanie &quot;M d, Y h:i a&quot; alebo &quot;M d, Y H:i&quot;',
    'DELETE'								=> 'Vymazať',
    'DELETE_ALL_EVENTS'						=> 'Vymazať všetky udalosti tohoto typu',
    'DELETE_ETYPE'							=> 'Vymazať udalosť',
    'DELETE_ETYPE_EXPLAIN'					=> 'Naozaj mám vymazať tento typ udalosti?',
    'DELETE_LAST_EVENT_TYPE'				=> 'Pozor: toto je posledný typ uzla udalosti.',
    'DELETE_LAST_EVENT_TYPE_EXPLAIN'		=> 'Vymazaním tohoto typu udalosti sa vymažú všetky udalosti z kalendára.  Vytvorenie novej udalosti nebude možné bude deaktivované, pokiaľ nebude v zadaní, Typ kalendára, vytvorená nová udalosť.',
    'DISPLAY_12_OR_24_HOURS'				=> 'Zobrazovať formát času',
    'DISPLAY_12_OR_24_HOURS_EXPLAIN'		=> 'V tomto nastavení si môžete zadať formát zobrazenia 12 hodinový režim AM/PM, alebo 24 hodinový režim?  Toto neovplyvní formát času, ktorý má nastavený uživateľ vo svojom profile.  Toto nastavenie je pre roletové menu pre čas ktorý sa zobrazí pri vytvorených, alebo editovaných udalostiach, ale aj v zobrazení času v dňoch kalendára.',
    'DISPLAY_HIDDEN_GROUPS'					=> 'Zobrazenie skrytie skupiny',
    'DISPLAY_HIDDEN_GROUPS_EXPLAIN'			=> 'Chcete aby uživatelia si mohli prezerať a pozývať členov skrytých skupín?  Ak toto nastavenie je deaktivované, len správcovia skupín si budú môcť prezerať a pozývať členov skrytej skupiny.',
    'DISPLAY_NAME'							=> 'Zobraziť názov (nemusí byť ZADANÝ)',
    'DISPLAY_EVENTS_ONLY_1_DAY'				=> 'Zobrazím udalosti 1 deň',
    'DISPLAY_EVENTS_ONLY_1_DAY_EXPLAIN'		=> 'Zobrazím udalosti, len v ten deň, keď im (končí dátum/čas zobrazenia).',
    'DISPLAY_FIRST_WEEK'					=> 'Zobrazenie aktuálneho týždňa',
    'DISPLAY_FIRST_WEEK_EXPLAIN'			=> 'Chcete aby bol zobrazovaný obsah na fóre za tento týždeň?',
    'DISPLAY_NEXT_EVENTS'					=> 'Zobrazenie ďalších udalostí',
    'DISPLAY_NEXT_EVENTS_EXPLAIN'			=> 'Zadajte počet aktuálnych udalostí ktoré chcete aby boli evidované v zozname obsahu stránky.  Pozor, toto nastavenie bude ignorované, ak máte aktivovanú voľbu zobraziť tento týždeň.',
    'DISPLAY_TRUNCATED_SUBJECT'				=> 'Orezanie subjektu',
    'DISPLAY_TRUNCATED_SUBJECT_EXPLAIN'		=> 'Dlhé názvy v predmete zaberajú veľa priestoru v kalendári.  Zadajte maximálny počet znakov koľko môže byť zobrazených v predmete kalendára (zadaním 0 počet znakov v  predmete nebude obmedzený)',
    'EDIT'									=> 'Upraviť',
    'EDIT_ETYPE'							=> 'Upraviť typ udalosti',
    'EDIT_ETYPE_EXPLAIN'					=> 'Zadajte spôsob, ktorým sa má tento typ udalosti zobraziť.',
    'FIRST_DAY'								=> 'Prvý deň',
    'FIRST_DAY_EXPLAIN'						=> 'Ktorý deň bude zobrazený ako prvý deň týždňa?',
    'FULL_NAME'								=> 'Celý názov',
    'FRIDAY'								=> 'Piatok',
    'ICON_URL'								=> 'URL pre ikonu',
    'MANAGE_ETYPES'							=> 'Správa typov udalostí',
    'MANAGE_ETYPES_EXPLAIN'					=> 'Použité tipy udalostí vám pomôžu zostaviť kalendár, môžete pridať, úpraviť, vymazať, alebo znovu usporiadať tipy týchto udalostí.<br><strong><font color="red">Upozornenie!</FONT></strong></br> Po vytvorení typu kalendára nikdy nezabudnite udeliť oprávnenia cez panel OPRÁVNENIA kde na ľavej strane sú zadania oprávnení pre <strong><font color="red">OPRÁVNENIA UŽIVATEĽOV alebo OPRÁVNENIA SKUPÍN</FONT></strong>. Po zvolení zadania zvolte: <strong><font color="red">Pokročilé oprávnenia</FONT></strong> a tam môžete zadať jednotlivé oprávnenia.',
    'MINUS_HOUR'							=> 'Presunúť všetky udalosti mínus (-) jedna hodina',
    'MONDAY'								=> 'Pondelok',
    'NO_EVENT_TYPE_ERROR'					=> 'Ľutujem vyhľadanie, zadaného typu udalosti bolo neúspešné.',
    'PLUS_HOUR'								=> 'Presunúť všetky udalosti plus (+) jedna hodina',
    'PLUS_HOUR_CONFIRM'						=> 'Ste si istí, naozaj mám presunúť všetky udalosti o %1$s hodinu?',
    'PLUS_HOUR_SUCCESS'						=> 'Všetky udalosti boli úspešne presunté o %1$s hodinu.',
    'SATURDAY'								=> 'Sobota',
    'SUNDAY'								=> 'Nedeľa',
     'TIME_FORMAT'							=> 'Formát času',
    'TIME_FORMAT_EXPLAIN'					=> 'Zadanie &quot;h:i a&quot; alebo &quot;H:i&quot;',
    'THURSDAY'								=> 'Štvrtok',
    'TUESDAY'								=> 'Utorok',
    'USER_CANNOT_MANAGE_CALENDAR'			=> 'Nemáte oprávnenie menežovať nastavenie kalendára alebo tipy udalostí.',
    'WEDNESDAY'								=> 'Streda',

));

?>
