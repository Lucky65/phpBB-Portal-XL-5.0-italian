<?php
/**
*
* acp_prune [Slovak]
*
* @package language
* @version $Id: prune.php,v 1.14 2010/01/05 23:00:00 phpbb3.sk Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Tu môžete zmazať (alebo deaktivovať) užívateľov z vašej skupiny. To môžete spraviť rôznymi spôsobmi; podľa odoslaných príspevkov, poslednej aktivity atď., väčšinu kritérií je možné kombinovať. Napríklad užívatelia s poslednou aktivitou 2002-01-01 a s počtom príspevkov nižším ako 10. Môžete taktiež zadať iba zoznam užívateľov do textového poľa a ostatné kritéria budú ignorované. Buďte opatrní pri prečisťovaní užívateľov, zmazaných užívateľov nie je možné vrátiť späť.',

	'DEACTIVATE_DELETE'			=> 'Deaktivovať alebo zmazať',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Vyberte užívateľov ktorých chcete trvalo deaktivovať, alebo zmazať. Pozor, nie je možné vrátiť túto akciu späť!',
	'DELETE_USERS'				=> 'Zmazať',
	'DELETE_USER_POSTS'			=> 'Odstrániť príspevky deaktivovaných užívateľov',
	'DELETE_USER_POSTS_EXPLAIN' => 'Odstrániť príspevky zmazaných užívateľov pri prečisťovaní (nemá účinok pre deaktivovaných užívateľov)',

	'JOINED_EXPLAIN'			=> 'Zadajte dátum vo formáte <kbd>RRRR-MM-DD</kbd> ',

	'LAST_ACTIVE_EXPLAIN'		=> 'Zadajte dátum vo formáte <kbd>RRRR-MM-DD</kbd>. Zadejte <kbd>0000-00-00</kbd> pre vybranie užívateľov, ktorí sa nikdy neprihlásili, v tomto prípade budú ignorované podmienky <em>Pred</em> a <em>Po</em> ',

	'PRUNE_USERS_LIST'				=> 'Užívatelia k&nbsp; prečisteniu',
	'PRUNE_USERS_LIST_DELETE'		=> 'S vybranými kritériami budú odstránené nasledujúce užívateľské účty.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'S vybranými kritériami budú deaktivováné nasledujúce užívateľské účty.',

	'SELECT_USERS_EXPLAIN'		=> 'Tu môžete zadať určité užívateľské mená, pre ktoré majú byť použité nastavené kritéria. Zakladatelia fora nikdy nesmú byť vybraní.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Vybraní užívatelia boli úspešne deaktivovaní.',
	'USER_DELETE_SUCCESS'		=> 'Vybraní užívatelia boli úspešne zmazaní.',
	'USER_PRUNE_FAILURE'		=> 'Vybraným kritériám nevyhovujú žiadni užívatelia.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Zadaný dátum nie je správny, použite formát <kbd>RRRR-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Toto zmaže témy, ktoré boli odoslané alebo zobrazené denne menej krát ako je určený počet. Pokiaľ nezadáte číslo všetky témy budú zmazané. Vo základnom nastavení nezmaže témy s hlasovaním, ktoré stále bežia - zmaže iba dôležité a oznámenia.',

	'FORUM_PRUNE'		=> 'Prečistenie fóra',

	'NO_PRUNE'			=> 'Žiadne prečistené fóra',

	'SELECTED_FORUM'	=> 'Vybrané fórum',
	'SELECTED_FORUMS'	=> 'Vybrané fóra',

	'POSTS_PRUNED'					=> 'Prečistené príspevky',
	'PRUNE_ANNOUNCEMENTS'			=> 'Prečistiť dôležité',
	'PRUNE_FINISHED_POLLS'			=> 'Prečistiť uzavreté hlasovania',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Vymazať témy s uzavretým hlasovaním',
	'PRUNE_FORUM_CONFIRM'			=> 'Naozaj chcete prečistiť vybrané fóra pomocou zvolených kritérií? Táto akcia je nevratná, a nie je možné obnoviť prečistené témy a príspevky.',
	'PRUNE_NOT_POSTED'				=> 'Dni od poslednej odpovede',
	'PRUNE_NOT_VIEWED'				=> 'Dni od posledného zobrazenia',
	'PRUNE_OLD_POLLS'				=> 'Prečistiť staré hlasovania',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Odstráni témy s anketou, v ktorých sa nehlasovalo viac ako je nastavený čas od posledného príspevku.',
	'PRUNE_STICKY'					=> 'Prečistiť oznámenia',
	'PRUNE_SUCCESS'					=> 'Prečistenie fóra je dokončené',

	'TOPICS_PRUNED'		=> 'Prečistenie starých tém',
));

?>