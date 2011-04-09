<?php
/**
*
* acp_groups [Slovak]
*
* @package language
* @version $Id: groups.php,v 1.29 2010/01/05 23:00:00 phpbb3.sk Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Z tohto panela môžete ovládať všetky skupiny, mazať, vytvárať a upravovať existujúce skupiny. Môžete zvoliť moderátorov, otvárať a zatvárať skupinu, nastaviť meno skupiny a popis.',
	'ADD_USERS'						=> 'Pridať užívateľa',
	'ADD_USERS_EXPLAIN'				=> 'Tu môžete pridať nových užívateľov do skupiny. Môžete vybrať, či sa skupina stane pre užívateľa predvolená, prípadne ju môžete nastaviť ako hlavnú skupinu. Každé meno napíšte do nového riadku.',

	'COPY_PERMISSIONS'				=> 'Skopírovať oprávnenia z',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Skupina bude mať po vytvorení rovnaké oprávnenia ako tá, ktorú ste zvolili.',
	'CREATE_GROUP'					=> 'Vytvoriť novú skupinu',

	'GROUPS_NO_MEMBERS'				=> 'Táto skupina nemá žiadnych členov',
	'GROUPS_NO_MODS'				=> 'Správca skupiny nie je zvolený',

	'GROUP_APPROVE'					=> 'Schváliť členov',
	'GROUP_APPROVED'				=> 'Členovia schválení',
	'GROUP_AVATAR'					=> 'Postavička skupiny',
	'GROUP_AVATAR_EXPLAIN'			=> 'Tento obrázok bude zobrazený v kontrolnom paneli skupiny.',
	'GROUP_CLOSED'					=> 'Uzavretá',
	'GROUP_COLOR'					=> 'Farba skupiny',
	'GROUP_COLOR_EXPLAIN'			=> 'Určuje farbu mien členov skupiny. Ak chcete ponechať základné nastavenia, ponechajte prázdne.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Určite chcete pridať užívateľa %1$s do skupiny?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Určite chcete pridať užívateľov %1$s do skupiny?',
	'GROUP_CREATED'					=> 'Skupina bola úspešne vytvorená.',
	'GROUP_DEFAULT'					=> 'Nastavte ako východziu skupinu pre užívateľa',
	'GROUP_DEFS_UPDATED'			=> 'Prednastavená skupina bola nastavená vybratým užívateľom.',
	'GROUP_DELETE'					=> 'Zmazať člena zo skupiny',
	'GROUP_DELETED'					=> 'Skupina zmazaná a prednastavené skupiny zmenené.',
	'GROUP_DEMOTE'					=> 'Zrušiť vodcu skupiny',
	'GROUP_DESC'					=> 'Popis skupiny',
	'GROUP_DETAILS'					=> 'Detaily skupiny',
	'GROUP_EDIT_EXPLAIN'			=> 'Tu môžete upravovať existujúcu skupinu. Môžete zvoliť meno, popis a typ (otvorená, uzavretá atď.). Môžete tiež zmeniť niektoré skupinové nastavenia ako farbu, hodnosť a pod. Zmena týchto nastavení prepíše užívateľove nastavenia. Pokiaľ nenastavíte potrebné užívateľské oprávnenia, členovia skupiny môžu obísť nastavenia skupinového avatara.',
	'GROUP_ERR_USERS_EXIST'			=> 'Zvolení užívatelia sú už členmi skupiny',
	'GROUP_FOUNDER_MANAGE'			=> 'Spravujú iba zakladatelia',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Obmedziť správu skupiny iba pre zakladateľa skupiny. Užívatelia s patričnými skupinovými oprávneniami môžu vidieť túto skupinu rovnako ako jej členovia.',
	'GROUP_HIDDEN'					=> 'Skrytá',
	'GROUP_LANG'					=> 'Jazyk skupiny',
	'GROUP_LEAD'					=> 'Správcovia skupiny',
	'GROUP_LEADERS_ADDED'			=> 'Nový správcovia skupiny boli pridaní.',
	'GROUP_LEGEND'					=> 'Zobraziť skupinu v legende',
	'GROUP_LIST'					=> 'Aktuálni členovia',
	'GROUP_LIST_EXPLAIN'			=> 'Toto je kompletný zoznam členov tejto skupiny. Môžete zmazať členov (až na niektoré špeciálne skupiny) alebo pridať jedného vami vybraného.',
	'GROUP_MEMBERS'					=> 'Členovia skupiny',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Toto je kompletný zoznam členov tejto skupiny. To zahrňuje oddelenie sekcií pre vodcov, čakajúcich a existujúcich členov. Tu môžete upravovať všetky nastavenia, ktoré určia kto bude členom a aká je ich úloha. Pre zrušenie vodcu skupiny a jeho ponechanie v skupine použi možnosť degradovať moderátora skupiny namiesto možnosti zmazať. Podobne môžete použiť funkciu povýšiť na moderátora skupiny.',
	'GROUP_MESSAGE_LIMIT'			=> 'Počet súkromných správ v skupine.',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Toto nastavenie ignoruje nastavenie súkromých správ pre jednotlivých užívateľov. Ak je nastavené na 0, bude použité nastavenie obmedzenia správ pre daného užívateľa.',
	'GROUP_MODS_ADDED'				=> 'Nový moderátor skupiny bol pridaný.',
	'GROUP_MODS_DEMOTED'			=> 'Vodcovia skupiny boli zrušení.',
	'GROUP_MODS_PROMOTED'			=> 'Členovia skupiny boli pridaní.',
	'GROUP_NAME'					=> 'Meno skupiny',
	'GROUP_NAME_TAKEN'				=> 'Vami zvolený názov skupiny sa už používa. Vyberte prosím iný.',
	'GROUP_OPEN'					=> 'Otvoriť',
	'GROUP_PENDING'					=> 'Členovia čakajúci na vstup',
	'GROUP_MAX_RECIPIENTS'			=> 'Maximálny počet príjemcov jednej súkromnej správy',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Maximálny počet príjemcov jednej súkromnej správy. Nastavte 0 pre použitie globálneho nastavenia.',
	'GROUP_OPTIONS_SAVE'					=> 'Nastavenie pre celu skupinu',
  'GROUP_PROMOTE'					=> 'Povýšiť na moderátora skupiny',
	'GROUP_RANK'					=> 'Hodnosť skupiny',
	'GROUP_RECEIVE_PM'				=> 'Skupina môže prijímať súkromné právy',
	'GROUP_RECEIVE_PM_EXPLAIN'				=> 'Berte na vedomie, že skryté skupiny nikdy nemôžu prijímať správy pre skupinu.',
	'GROUP_REQUEST'					=> 'Žiadosť',
	'GROUP_SETTINGS_SAVE'			=> 'Nastavenia boli uložené',
	'GROUP_SKIP_AUTH'							=> 'Vyňať vedúceho skupiny z oprávnenia',
	'GROUP_SKIP_AUTH_EXPLAIN'			=> 'Ak je toto nastavené, vedúci skupiny nezdieľa oprávnenia z tejto skupiny',
  'GROUP_TYPE'					=> 'Typ skupiny',
	'GROUP_TYPE_EXPLAIN'			=> 'Toto nastavenie určuje, ktorí užívatelia môžu vstúpiť alebo prezerať skupinu.',
	'GROUP_UPDATED'					=> 'Nastavenia skupiny boli úspešne upravené.',

	'GROUP_USERS_ADDED'				=> 'Noví užívatelia boli pridaní do skupiny.',
	'GROUP_USERS_EXIST'				=> 'Označení členovia sú už členmí.',
	'GROUP_USERS_REMOVE'			=> 'Užívatelia boli vymazaní a nové predvolené nastavenia boli úspešne nastavené.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Nastaviť skupinu ako prednastavenú pre všetkých členov.',
	'MEMBERS'				=> 'Členovia',

	'NO_GROUP'					=> 'Nebola zvolená žiadna skupina.',
	'NO_GROUPS_CREATED'			=> 'Neboli vytvorené žiadne skupiny.',
	'NO_PERMISSIONS'			=> 'Nekopírovať oprávnenia',
	'NO_USERS'					=> 'Nie sú pridaní žiadni užívatelia.',
  'NO_USERS_ADDED'			=> 'Žiadni užívatelia neboli pridaní do skupiny.',
  'NO_VALID_USERS'			=> 'Nevložili ste žiadneho užívateľa pre požadovanú akciu.',
	'SPECIAL_GROUPS'			=> 'Preddefinované skupiny',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Preddefinované skupiny sú vopred vytvorené skupiny, ktoré nemôžu byť zmazané, alebo upravované. Môžete však pridávať užívateľov a meniť základné nastavenia. Kliknutím na "prednastavené" môžete nastaviť skupinu ako prednastavenú pre všetkých členov.',

	'TOTAL_MEMBERS'				=> 'Počet členov',

	'USERS_APPROVED'				=> 'Užívatelia úspešne prijatí.',
	'USER_DEFAULT'					=> 'Prednastavená pre užívateľa',
	'USER_DEF_GROUPS'				=> 'Skupiny definované užívateľom',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Toto sú skupiny vytvorené vami alebo inými administrátormi. Môžete upravovať členstvo a vlastnosti skupiny, prípadne zmazať skupinu.',
	'USER_GROUP_DEFAULT'			=> 'Nastaviť ako prednastavenú skupinu',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Vybraním tejto možnosti, nastavíte danú skupinu ako prednastavenú pre vybraných užívateľov.',
	'USER_GROUP_LEADER'				=> 'Nastaviť ako vodcu skupiny',
));

?>