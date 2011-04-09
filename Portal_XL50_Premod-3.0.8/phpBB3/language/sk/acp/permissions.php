<?php
/**
*
* acp_permissions [Slovak]
*
* @package language
* @version $Id: permissions.php,v 1.38 2010/01/05 23:00:00 phpbb3.sk Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Oprávnenia sú veľmi podrobné a dajú sa rozdeliť do štyroch hlavných skupín, ktoré sú:</p>

		<h2>Globálne oprávnenia</h2>
		<p>Tieto nastavujú práva na globálnej úrovni a platia na celom fóre. Sú ďalej rozdelené na Oprávnenia užívateľov, Oprávnenia skupín, Administrátorov a Globálnych Moderátorov.</p>

		<h2>Oprávnenia založené na fórach</h2>
		<p>Tieto nastavujú prístupové práva k jednotlivým fóram pre každé zvlášť. Sú ďalej rozdelené na Oprávnenia fór, Moderátori fóra, Užívateľské oprávnenia k fóru a Skupinové oprávnenia k fóru.</p>

		<h2>Role oprávnení</h2>
		<p>Tieto sa používajú k vytvoreniu rôznych preddefinovaných rolí, ktoré využívajú všetky druhy oprávnení a dajú sa využiť pri nastavovaní ostatných druhov oprávnení. Prednastavené, pre vás už vytvorené role, by mali pokryť potreby diskusných fór veľkých aj malých, a pokiaľ nie, napriek všetkým druhom oprávnení, môžete pridávať/upravovať/mazať ďalšie role podľa vašich potrieb.</p>

		<h2>Masky oprávnení</h2>
		<p>Tieto môžete využiť pre zobrazenie konkrétnych koncových oprávnení pridelených Užívateľom, Moderátorom (miestnym aj Globálnym), Administrátorom, alebo jednotlivým fóram.</p>

		<br />

		<p>Pre ďalšie informácie o nastavení a správe oprávnení na vašom fóre, sa pozrite do <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Kapitoly 1.5 Sprievodca pre rýchly začiatok</a>.</p>
	',

	'ACL_NEVER'				=> 'Nikdy',
	'ACL_SET'				=> 'Nastavenie oprávnení',
	'ACL_SET_EXPLAIN'		=> 'Oprávnenia sú založené na jednoduchom systéme <samp>ÁNO</samp>/<samp>NIE</samp>. Pokiaľ je vo vlastnostiach pri užívateľovi, alebo skupine nastavené <samp>NIKDY</samp>, budú ignorované akékoľvek iné nastavenia oprávnení. Pokiaľ si neprajete priradiť hodnotu k vlastnostiam pre užívateľa, alebo skupinu, nastavte položku na <samp>NIE</samp>. Pokiaľ je niekde nastavené inak, tieto nastavenia budú použité prednostne, inak bude nastavenie zhodné s hodnotou <samp>NIKDY</samp>. Všetky objekty, ktoré sú zaškrtnuté, obdržia nastavované oprávnenia.',
	'ACL_SETTING'			=> 'Nastavenia',

	'ACL_TYPE_A_'			=> 'Administrátorské oprávnenia',
	'ACL_TYPE_F_'			=> 'Oprávnenia fór',
	'ACL_TYPE_M_'			=> 'Moderátorské oprávnenia',
	'ACL_TYPE_U_'			=> 'Užívateľské oprávnenia',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrátorské oprávnenia',
	'ACL_TYPE_GLOBAL_U_'	=> 'Užívateľské oprávnenia',
	'ACL_TYPE_GLOBAL_M_'	=> 'Oprávnenia Globálnych Moderátorov',
	'ACL_TYPE_LOCAL_M_'		=> 'Oprávnenia Moderátorov fór',
	'ACL_TYPE_LOCAL_F_'		=> 'Oprávnenia fór',

	'ACL_NO'				=> 'Nie',
	'ACL_VIEW'				=> 'Zobrazenie oprávnení',
	'ACL_VIEW_EXPLAIN'		=> 'Tu si môžete pozrieť využiteľné oprávnenia užívateľa alebo skupiny. Červený štvorec znamená, že užívateľ/skupina nemá dané oprávnenie; zelený, že toto oprávnenie má.',
	'ACL_YES'				=> 'Áno',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Tu môžete prideliť administrátorské práva užívateľom, alebo skupinám. Všetci užívatelia s administrátorskými právomocami môžu nakuknúť do Ovládacieho panelu fóra.',
 	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Tu môžete prideliť užívateľom, alebo skupinám práva moderátora fóra. Pre nastavenie prístupu užívateľov k diskusiám, nastaveniu globálnych moderátorov alebo administrátorov použite odpovedajúcu sekciu oprávnení.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Tu môžete upraviť, ktoré skupiny alebo užívatelia majú prístup k určitým fóram. Pre nastavenie moderátorov alebo administrátorov použite odpovedajúcu sekciu oprávnení.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Tu môžete kopírovať nastavenia oprávnenie fóra z jedného na druhé.',
  'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Tu môžete priradiť moderátorskú právomoc pre celé fórum užívateľom, alebo skupinám. Títo moderátori sú rovnakí ako bežní s tým rozdielom, že majú práva ku všetkým sekciám na fóre.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu môžete upraviť práva skupín pre jednotlivé fóra.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Tu môžete priradiť globálne práva skupinám - užívateľské oprávnenia alebo moderátorské aj administrátorské oprávnenia. Užívateľské oprávnenia zahŕňajú možnosti ako použitie avataru, odosielanie súkromných správ atď.; globálne moderátorské práva zahŕňajú možnosti ako schvaľovanie príspevkov, správa tém, správa banov apod. a nakoniec administrátorské práva ako úpravy oprávnení, definovanie vlastných BBCode značiek, správa fór atď. Individuálne užívateľské oprávnenia by mali byť menené len výnimočne, preferovaná metóda je zaradenie užívateľov do skupín a nastavenie konkrétnym skupinám koncové práva.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Tu môžete upraviť role pre administratívne oprávnenia. Role sú účinné oprávnenia, pokiaľ zmeníte danú rolu všetkým užívateľom alebo skupinám k nej priradeným odpovedajúcim spôsobom, zmenia sa oprávnenia.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Tu môžete upraviť role pre oprávnenia pre fóra. Role sú účinné oprávnenia, pokiaľ zmeníte danú rolu všetkým užívateľom alebo skupinám k nej priradeným odpovedajúcim spôsobom, zmenia sa oprávnenia.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Tu môžete upraviť role pre moderátorské oprávnenia. Role sú účinné oprávnenia, pokiaľ zmeníte danú rolu, všetkým užívateľom, alebo skupinám k nej priradeným odpovedajúcim spôsobom, zmenia sa oprávnenia.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Tu môžete upraviť role pre užívateľské oprávnenia. Role sú účinné oprávnenia, pokiaľ zmeníte danú rolu, všetkým užívateľom, alebo skupinám k nej priradeným odpovedajúcim spôsobom, zmenia sa oprávnenia.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu môžete upraviť práva užívateľov pre jednotlivé fóra.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Tu môžete priradiť globálne práva jednotlivým užívateľom - užívateľské oprávnenia, alebo moderátorské aj administrátorské oprávnenia. Užívateľské oprávnenia zahŕňajú možnosti ako použitie avataru, odoslanie súkromných správ atď.; globálne moderátorské práva možnosti ako schvaľovanie príspevkov, správa tém, správa banov apod. a nakoniec administrátorské ako úpravy oprávnení, definovanie vlastných BBCode značiek, správa fór atď. Pre úpravu týchto oprávnení pre väčší počet užívateľov je doporučené využiť Užívateľské skupiny, individuálne užívateľské oprávnenia by mali byť menené len výnimočne, preferovaná metóda je zaradenie užívateľov do skupín a nastavením konkrétnym skupinám koncové práva.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Tu si môžete pozrieť koncové administratívne oprávnenia priradené vybraným užívateľom, alebo skupinám.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Tu si môžete pozrieť koncové globálne moderátorské oprávnenia priradené vybraným užívateľom alebo skupinám.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu si môžete pozrieť koncové práva ku konkrétnym fóram priradené vybraným užívateľom, skupinám alebo samotným fóram.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Tu si môžete pozrieť koncové moderátorské oprávnenia ku konkrétnym fóram priradené vybraným užívateľom, skupinám alebo samotným fóram.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Tu si môžete pozrieť koncové uživateľské oprávnenia priradené vybraným užívateľom či skupinám.',

	'ADD_GROUPS'				=> 'Pridať skupiny',
	'ADD_PERMISSIONS'			=> 'Pridať oprávnenia',
	'ADD_USERS'					=> 'Pridať užívateľov',
	'ADVANCED_PERMISSIONS'		=> 'Pokročilé oprávnenia',
	'ALL_GROUPS'				=> 'Vybrať všetky skupiny',
	'ALL_NEVER'					=> 'Všetko <samp>NIKDY</samp>',
	'ALL_NO'					=> 'Všetko <samp>NIE</samp>',
	'ALL_USERS'					=> 'Vybrať všetkých užívateľov',
	'ALL_YES'					=> 'Všetko <samp>ÁNO</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Použiť všetky oprávnenia',
	'APPLY_PERMISSIONS'			=> 'Použiť oprávnenia',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Oprávnenia a role definované pre túto položku budú použité na tejto položke a všetkých ďalších, ktoré sú zaškrtnuté',
  'AUTH_UPDATED'				=> 'Oprávnenia boli aktualizované.',
  
  'COPY_PERMISSIONS_CONFIRM'				=> 'Naozaj chcete skopírovať oprávnenia? Kopírovanie prepíše všetky súčasné nastavenie na cieľových fórach.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Zdrojové fórum s už existujúcou sadou oprávnení.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Fóra, kde budú zdrojové oprávnenia aplikované.',
	'COPY_PERMISSIONS_FROM'					=> 'Skopírovať oprávnenie od',
	'COPY_PERMISSIONS_TO'					=> 'Použiť oprávnenie na',

	'CREATE_ROLE'				=> 'Vytvoriť rolu',
	'CREATE_ROLE_FROM'			=> 'Použiť nastavenie z…',
	'CUSTOM'					=> 'Vlastné…',

	'DEFAULT'					=> 'Prednastavené',
	'DELETE_ROLE'				=> 'Odstrániť rolu',
	'DELETE_ROLE_CONFIRM'		=> 'Naozaj chcete odstrániť túto rolu? Položky, ktoré majú túto rolu pridelenú <strong>nestratia</strong> svoje oprávnenia.',
	'DISPLAY_ROLE_ITEMS'		=> 'Zobraziť položky využívajúce túto rolu',

	'EDIT_PERMISSIONS'			=> 'Upraviť oprávnenia',
	'EDIT_ROLE'					=> 'Upraviť rolu',

	'GROUPS_NOT_ASSIGNED'		=> 'Tejto roli nebola pridelená žiadna skupina',

	'LOOK_UP_GROUP'				=> 'Prezrieť skupinu',
	'LOOK_UP_USER'				=> 'Prezrieť užívateľov',

	'MANAGE_GROUPS'		=> 'Spravovať skupiny',
	'MANAGE_USERS'		=> 'Spravovať užívateľov',

	'NO_AUTH_SETTING_FOUND'		=> 'Oprávnenia neboli definované.',
	'NO_ROLE_ASSIGNED'			=> 'Žiadna rola nepridelená…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Nastavenie tejto role nezmení oprávnenia zobrazené napravo. Pokiaľ chcete prednastaviť/odstrániť všetky oprávnenia, použite odkaz “Všetko <samp>NIE</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Nie je dostupná žiadna rola',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Musíte pomenovať rolu.',
	'NO_ROLE_SELECTED'			=> 'Rola nebola nájdená.',
	'NO_USER_GROUP_SELECTED'	=> 'Nevybrali ste žiadneho užívateľa alebo skupinu.',

	'ONLY_FORUM_DEFINED'	=> 'Pri vašom výbere ste definovali iba fórum, vyberte ešte aspoň jedného užívateľa alebo skupinu.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Oprávnenie a role budú použité na všetky zaškrtnuté objekty',
	'PLUS_SUBFORUMS'				=> '+subfóra',

	'REMOVE_PERMISSIONS'			=> 'Odstrániť oprávnenia',
	'REMOVE_ROLE'					=> 'Odstrániť rolu',
	'RESULTING_PERMISSION'          => 'Výsledné oprávnenia',
	'ROLE'							=> 'Rola',
	'ROLE_ADD_SUCCESS'				=> 'Rola bola úspešne pridaná.',
	'ROLE_ASSIGNED_TO'				=> 'Užívatelia/skupiny boli priradení k %s',
	'ROLE_DELETED'					=> 'Rola bola úspešne odstránená.',
	'ROLE_DESCRIPTION'				=> 'Popis role',

	'ROLE_ADMIN_FORUM'			=> 'Admininstrátor diskusií',
	'ROLE_ADMIN_FULL'			=> 'Hlavný administrátor',
	'ROLE_ADMIN_STANDARD'		=> 'Bežný administrátor',
	'ROLE_ADMIN_USERGROUP'		=> 'Admininistrátor užívateľov',
	'ROLE_FORUM_BOT'			=> 'Prístup botov',
	'ROLE_FORUM_FULL'			=> 'Plný prístup',
	'ROLE_FORUM_LIMITED'		=> 'Obmedzený prístup',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Obmedzený prístup + hlasovanie',
	'ROLE_FORUM_NOACCESS'		=> 'Žiadny prístup',
	'ROLE_FORUM_ONQUEUE'		=> 'Nutné schválenie',
	'ROLE_FORUM_POLLS'			=> 'Bežný prístup + hlasovanie',
	'ROLE_FORUM_READONLY'		=> 'Len čítanie',
	'ROLE_FORUM_STANDARD'		=> 'Bežný prístup',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Nový člen fóra',
	'ROLE_MOD_FULL'				=> 'Hlavný moderátor',
	'ROLE_MOD_QUEUE'			=> 'Schvaľovací moderátor',
	'ROLE_MOD_SIMPLE'			=> 'Obmedzený moderátor',
	'ROLE_MOD_STANDARD'			=> 'Normálny moderátor',
	'ROLE_USER_FULL'			=> 'Všetky funkcie',
	'ROLE_USER_LIMITED'			=> 'Obmedzené funkcie',
	'ROLE_USER_NOAVATAR'		=> 'Bez avatarov',
	'ROLE_USER_NOPM'			=> 'Bez súkromných správ',
	'ROLE_USER_STANDARD'		=> 'Bežné funkcie',
	'ROLE_USER_NEW_MEMBER'		=> 'Nový člen fóra',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Má prístup k ovládaniu fór a nastaveniam oprávnení pre fóra.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Má prístup ku všetkým administrátorským panelom na tomto fóre.<br />Nie je doporučené.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Má prístup ku väčšine možností administrátora, ale nemôže meniť nastavenia servera a systému.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Môže spravovať skupiny a užívateľov. Môže meniť oprávnenia, nastavenia, bany a hodnosti.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Táto rola je doporučená pre botov a vyhľadávacích robotov.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Môže využívať všetky možnosti fóra, vrátane odosielania Dôležitých tém a Oznámení. Taktiež môže ignorovať časový interval pre odosielanie príspevkov.<br />Nie je doporučené pre bežných užívateľov.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Môže využiť niektoré možnosti fóra, ale nemôže pripojovať prílohy a využívať ikony tém.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Rovnaké ako obmedzený prístup, ale môže zakladať hlasovanie.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nevidí ani nemá prístup k fóru.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Môže využiť väčšinu funkcií fóra vrátane príloh, ale príspevky a témy musia byť schválené moderátorom.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Rovnaké ako bežný prístup, ale môže zakladať hlasovania.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Môže si čítať témy na fóre, ale nemôže vytvárať nové témy, alebo odosielať odpovede.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Môže využívať väčšinu funkcií fóra vrátane príloh, ale nemôže zamykať, alebo mazať svoje vlastné príspevky a nemôže vytvárať nové hlasovania.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Role pre skupinu novo registrovaných užívateľov. Obsahuje oprávnenie typu <samp> NIKDY </ samp> pre obmedzenie povolení nových užívateľov',
  'ROLE_DESCRIPTION_MOD_FULL'				=> 'Môže využívať všetky možnosti moderátora, vrátane banovania.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Môže využiť zoznam príspevkov ku schváleniu pre úpravu a schvaľovanie príspevkov, ale nič iného.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Môže využívať len základné operácie s témami. Nemôže udeľovať varovania, alebo používať zoznam príspevkov ku schváleniu, alebo úprave.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Môže využiť väčšiny nástrojov moderátora, ale nemôže udeliť ban, alebo zmeniť autora príspevku.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Môže využiť všetkých možností, ktoré užívateľ môže mať vrátane zmeny užívateľského mena a ignorácie ochranných intervalov.<br />Nie je doporučené.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Má prístup k niektorým možnostiam užívateľa. Prílohy, e-maily, alebo instantné správy nie sú povolené.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Má obmedzenú sadu možností a má zakázaní si zobrazovať avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Má obmedzenú sadu možností a nemôže používať súkromné správy.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Má prístup k väčšine možností užívateľa. Nemôže si ale napríklad zmeniť uživ. meno, alebo ignorovať ochranné intervaly.',
  'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Role pro skupinu novo registrovaných užívateľov. Obsahuje oprávnenia typu <samp>NIKDY</samp> pre obmedzenie oprávnenia nových užívateľov',


	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Máte možnosť vložiť krátky popis toho, k čomu je rola určená, alebo koho označuje. Text, ktorý tu vložíte bude tiež zobrazený v prehľade rolí v administrácií.',
	'ROLE_DESCRIPTION_LONG'			=> 'Popis rola má príliš dlhý popis, skráťte ho pod 4000 znakov.',
	'ROLE_DETAILS'					=> 'Podrobnosti role',
	'ROLE_EDIT_SUCCESS'				=> 'Rola bola úspešne upravená.',
	'ROLE_NAME'						=> 'Názov role',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Rola s názvom <strong>%s</strong> už existuje pre daný druh oprávnenia.',
	'ROLE_NOT_ASSIGNED'				=> 'Rola ešte nebola priradená.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Vybrané fórum (fóra) neexistujú.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Vybraná skupina (skupiny) neexistujú.',
	'SELECTED_USER_NOT_EXIST'		=> 'Vybraný užívateľ (užívatelia) neexistujú.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Pokiaľ tu zvolíte fórum, budú zahrnuté aj všetky subfóra.',
	'SELECT_ROLE'					=> 'Vybrať rolu…',
	'SELECT_TYPE'					=> 'Vybrať druh',
	'SET_PERMISSIONS'				=> 'Nastaviť oprávnenia',
	'SET_ROLE_PERMISSIONS'			=> 'Nastaviť oprávnenie role',
	'SET_USERS_PERMISSIONS'			=> 'Nastavenie oprávnení užívateľa',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Nastavenie oprávnení užívateľa pre fóra',

	'TRACE_DEFAULT'					=> 'Pokiaľ nie je nastavené inak, oprávnenie má vždy hodnotu <samp>NIE</samp> (bez oprávnení), a tak môžu byť oprávnenia prepísané inými nastaveniami.',
	'TRACE_FOR'						=> 'Sledovať pre',
	'TRACE_GLOBAL_SETTING'			=> '%s (globálne)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Oprávnenia skupiny sú nastavené na <samp>NIKDY</samp> ako výsledné oprávnenia, teda je táto hodnota ponechaná.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'   => 'Oprávnenia skupiny pre toto fórum sú nastavené na <samp>NIKDY</samp> ako výsledné oprávnenie, preto je táto hodnota ponechaná.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Oprávnenia skupiny sú nastavené na <samp>NIKDY</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ bola posledná nastavené len na <samp>NIE</samp>.',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'   	=> 'Oprávnenia skupiny pre toto fórum sú nastavené na <samp>NIKDY</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ bola posledná nastavená iba na <samp>NE</samp>.',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Oprávnenia skupiny sú nastavené na <samp>NIKDY</samp>, čo zmení nastavenia oprávnení <samp>ÁNO</samp> na <samp>NIKDY</samp> pre tohoto užívateľa',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'   	=> 'Oprávnenia skupiny pre toto fórum sú nastavené na <samp>NIKDY</samp>, čo zmení nastavenie oprávnenia <samp>ÁNO</samp> na <samp>NIKDY</samp> pre tohto užívateľa.',
	'TRACE_GROUP_NO'				=> 'Oprávnenie je nastavené na <samp>NIE</samp> pre túto skupinu, preto je ponechaná pôvodná hodnota.',
	'TRACE_GROUP_NO_LOCAL'         			=> 'Oprávnenie v tomto fóre je nastavené na <samp>NIE</samp> pre túto skupinu, preto je ponechaná pôvodná hodnota.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Oprávnenia skupiny sú nastavené na <samp>ÁNO</samp>, ale nastavenie oprávnení <samp>NIKDY</samp> nemôžete ignorovať.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'   	=> 'Oprávnenie skupiny v tomto fóre sú nastavené na <samp>ÁNO</samp>, ale nastavenie oprávnení <samp>NIKDY</samp> nieje možné zmeniť.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Oprávnenia skupiny sú nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ posledná bola nastavená len na <samp>NIE</samp>.',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'   		=> 'Oprávnenia skupiny v tomto fóre sú nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ posledná bola nastavená iba na <samp>NIE</samp>.',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Oprávnenia skupiny sú nastavené na <samp>ÁNO</samp>, a výsledné oprávnenia už sú taktiež nastavené na <samp>ÁNO</samp>, takže pôvodná hodnota je ponechaná.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'   	=> 'Oprávnenia skupiny v tomto fóre sú nastavené na <samp>ÁNO</samp>, a výsledné oprávnenie už je aj tak nastavené na <samp>ÁNO</samp>, takže pôvodná hodnota je ponechaná.',
	'TRACE_PERMISSION'				=> 'Sledovať oprávnenia - %s',
	'TRACE_RESULT'               			=> 'Sledovať výsledok',
	'TRACE_SETTING'					=> 'Nastavenie sledovania',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Oprávnenia nezávislé na fóre majú hodnotu <samp>ÁNO</samp> a výsledná hodnota už má tiež hodnotu <samp>ÁNO</samp>, a tak sa teda nič nemení. %sSledovať globálne oprávnenia%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Oprávnenia nezávislé na fóre majú hodnotu <samp>ÁNO</samp>, čo prepisujú miestnu hodnotu <samp>NIKDY</samp>. %sSledovať globálne oprávnenia%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Oprávnenia nezávislé na fóre majú hodnotu <samp>NIKDY</samp>, čo neovplyvňuje miestne oprávnenia. %sSledovať globálne oprávnenia%s',

	'TRACE_USER_FOUNDER'					=> 'Tento užívateľ je zakladateľ, teda oprávnenia administrátora sú nastavené na <samp>ÁNO</samp>.',
	'TRACE_USER_KEPT'						=> 'Oprávnenie užívateľa je nastavené na <samp>NIE</samp>, pôvodná hodnota je teda ponechaná.',
	'TRACE_USER_KEPT_LOCAL'               	=> 'Oprávnenia užívateľa pre toto fórum sú nastavené na <samp>NIE</samp>, pôvodná hodnota je teda ponechaná.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Oprávnenia užívateľa sú nastavené na <samp>NIKDY</samp> a výsledná hodnota je nastavená na <samp>NIKDY</samp>, nič sa teda nemení.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'   	=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>NIKDY</samp> a výsledná hodnota je nastavená na <samp>NIKDY</samp>, nič se teda nemení.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Oprávnenia užívateľa sú nastavené na <samp>NIKDY</samp>, čo sa stáva výslednou hodnotou, pretože bolo doteraz nastavené len na <samp>NIE</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>NIKDY</samp>, čo sa stáva výslednou hodnotou, pretože bola doteraz nastavená iba na NIE.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Oprávnenia užívateľa sú nastavené na <samp>NIKDY</samp>, ktoré má väčšiu platnosť a nahradzuje hodnotu <samp>ÁNO</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>NIKDY</samp>, ktoré má väčšiu platnosť a nahradzuje hodnotu <samp>ÁNO</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Oprávnenia užívateľa je nastavené na <samp>NIE</samp> a výsledná hodnota už obsahuje <samp>NIE</samp>, hodnota sa teda mení na <samp>NIKDY</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>NIE</samp> a výsledná hodnota už obsahuje <samp>NIE</samp>, hodnota sa teda mení na <samp>NIKDY</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Oprávnenia užívateľa je nastavené na <samp>ÁNO</samp>, ale výsledné oprávnenia sú nastavené na <samp>NIKDY</samp>, ktoré nejdu prepísať.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>ÁNO</samp>, ale výsledné oprávnenia sú nastavené na <samp>NIKDY</samp>, ktoré sa nedajú zmeniť.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Oprávnenia užívateľa je nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ posledná bola nastavená len na <samp>NIE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ posledná bola nastavená iba na <samp>NIE</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Oprávnenia užívateľa je nastavené na <samp>ÁNO</samp> a výsledná hodnota je nastavená na<samp>ÁNO</samp>, nič sa teda nemení.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Oprávnenie užívateľa pre toto fórum je nastavené na <samp>ÁNO</samp> a výsledná hodnota je nastavená na <samp>ÁNO</samp>, nič se teda nemení.',
	'TRACE_WHO'								=> 'Kto',
	'TRACE_TOTAL'							=> 'Výsledné',

	'USERS_NOT_ASSIGNED'			=> 'Žiadny užívateľ nebol priradený k tejto role',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'je členom nasledujúcich prednastavených skupín',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'je členom nasledujúcich užívateľom definovaných skupín',

	'VIEW_ASSIGNED_ITEMS'	=> 'Zobraziť pridelené položky',
	'VIEW_LOCAL_PERMS'		=> 'Miestne oprávnenia',
	'VIEW_GLOBAL_PERMS'		=> 'Globálne oprávnenia',
	'VIEW_PERMISSIONS'		=> 'Zobraziť oprávnenia',

	'WRONG_PERMISSION_TYPE'	=> 'Bol zvolený zlý druh oprávnení.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Nastavenia oprávnení sú v zlom formáte, phpBB ich nemôže správne spracovať.',
));

?>