<?php
/**
*
* memberlist [Slovak]
*
* @package language
* @version $Id: memberlist.php,v 1.35 2010/01/05 23:00:00 phpbb3.sk Exp $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Najaktívnejšie fórum',
	'ACTIVE_IN_TOPIC'		=> 'Najaktívnejšia téma',
	'ADD_FOE'				=> 'Pridať nepriateľa',
	'ADD_FRIEND'			=> 'Pridať priateľa',
	'AFTER'					=> 'Potom',

	'ALL'					=> 'Všetci',

	'BEFORE'				=> 'Pred tým',

	'CC_EMAIL'				=> 'Odoslať kópiu emailu sebe',
	'CONTACT_USER'			=> 'Kontakt',

	'DEST_LANG'				=> 'Jazyk',
	'DEST_LANG_EXPLAIN'		=> 'Vybrať vhodný jazyk (pokiaľ je táto možnosť povolená) pre príjemcu tejto správy.',

	'EMAIL_BODY_EXPLAIN'	=> 'Táto správa bude odoslaná ako čistý text, nevkladajte do nej žiadne HTML ani BBCode značky. Spätná adresa bude nastavená na Vašu e-mailovú adresu.',
	'EMAIL_DISABLED'		=> 'Prepáčte, ale všetky funkcie súvisiace s e-mailami boli zakázané.',
	'EMAIL_SENT'			=> 'Email bol úspešne odoslaný.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Táto správa bude odoslaná ako čistý text, nevkladajte do nej žiadne HTML ani BBCode značky. Majte na vedomí, že názov témy bude vložený do e-mailu. Spätná adresa bude nastavená na Vašu e-mailovú adresu.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Musíte zadať platnú emailovú adresu príjemcu.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Musíte napísať správu.',
	'EMPTY_MESSAGE_IM'		=> 'Musíte zadať správu, ktorá sa odošle.',
	'EMPTY_NAME_EMAIL'		=> 'Musíte vložiť celé meno príjemcu.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Musíte vložiť predmet emailu.',
	'EQUAL_TO'				=> 'Zhodné s',

	'FIND_USERNAME_EXPLAIN'	=> 'Tento formulár Vám pomôže vyhľadať člena fóra. Nemusíte vyplniť všetky polia. Ako náhradu za znaky môžete použiť <strong>*</strong>. Formát dátumu vkladajte v tvare <kbd>RRRR-MM-DD</kbd>, príklad <samp>2004-02-29</samp>. Môžete použiť zaškrtávacie políčka pre hľadanie jedného, alebo viacerých užívateľských mien (môžete vybrať viacero mien podľa povahy prechádzajúceho formulára) a potom pokračujte stlačením tlačítka v predchádzajúcom formulári.',
	'FLOOD_EMAIL_LIMIT'		=> 'Nemôžete poslať e-mail tak skoro po predchádzajúcom. Chvíľu počkajte a skúste to znova.',

	'GROUP_LEADER'			=> 'Moderátor skupiny',

	'HIDE_MEMBER_SEARCH'	=> 'Zakázať hľadanie užívateľov',

	'IM_ADD_CONTACT'		=> 'Pridať kontakt',
	'IM_AIM'				=> 'K používaniu tejto funkcie je potrebné mať nainštalovaný AOL Instant Messenger.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Stiahnuť aplikácie',
	'IM_ICQ'				=> 'Berte na vedomie, že užívateľ môže mať nastavené neprijímať správy od neznámych užívateľov.',
	'IM_JABBER'				=> 'Berte na vedomie, že užívateľ môže mať nastavené neprijímať správy od neznámych užívateľov.',
	'IM_JABBER_SUBJECT'		=> 'Toto je automatická správa, prosím neodpovedajte na ňu! %1$s od %2$s',
	'IM_MESSAGE'			=> 'Vaša správa',
	'IM_MSNM'				=> 'K používaniu tejto funkcie je potrebné mať nainštalovaný Windows Messenger.',
	'IM_MSNM_BROWSER'		=> 'Váš prehliadač nepodporuje túto funkciu.',
	'IM_MSNM_CONNECT'		=> 'MSNM nieje pripojený.\nPre pokračovanie sa musíte pripojiť.',
	'IM_NAME'				=> 'Vaše meno',
	'IM_NO_DATA'			=> 'Neboli uvedené žiadne kontaktné informácie pre tohto užívateľa.',
	'IM_NO_JABBER'			=> 'Prepáčte, priame kontaktovanie užívateľov prostredníctvom Jabber-a nieje povolené. Pre kontaktovanie užívateľa budete potrebovať mať nainštalovaný Jabber klient na Vašom počítači.',
	'IM_RECIPIENT'			=> 'Príjemca',
	'IM_SEND'				=> 'Odoslať správu',
	'IM_SEND_MESSAGE'		=> 'Odoslať správu',
	'IM_SENT_JABBER'		=> 'Vaša správa pre %1$s bola úspešne odoslaná.',
	'IM_USER'				=> 'Poslať priamu správu',

	'LAST_ACTIVE'				=> 'Posledná aktivita',
	'LESS_THAN'					=> 'Viac ako',
	'LIST_USER'					=> '1 užívateľ',
	'LIST_USERS'				=> '%d užívateľov',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Pre zobrazenie moderátorov musíte byť prihlásený.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Pre zobrazenie zoznamu užívateľov musíte byť prihlásený.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Pre hľadanie užívateľov musíte byť prihlásený.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Pre prezeranie profilu musíte byť prihlásený.',

	'MORE_THAN'				=> 'Viac ako',

	'NO_EMAIL'				=> 'Nemáte oprávnenie posielať emaily tomuto užívateľovi.',
	'NO_VIEW_USERS'			=> 'Nemáte oprávnenia pre prezeranie profilu užívateľov a zoznam užívateľov.',

	'ORDER'					=> 'Zoradiť',
	'OTHER'					=> 'Ostatné',

	'POST_IP'				=> 'Odoslané z ip adresy/domény',

	'RANK'					=> 'Hodnotenia',
	'REAL_NAME'				=> 'Meno príjemcu',
	'RECIPIENT'				=> 'Príjemca',
	'REMOVE_FOE'			=> 'Odstrániť nepriateľa',
	'REMOVE_FRIEND'			=> 'Odstrániť priateľa',

	'SEARCH_USER_POSTS'		=> 'Hľadať všetky príspevky od užívateľa',
	'SELECT_MARKED'			=> 'Označiť zaškrtnuté',
	'SELECT_SORT_METHOD'	=> 'Zoradiť podľa',
	'SEND_AIM_MESSAGE'		=> 'Poslať správu cez AIM',
	'SEND_ICQ_MESSAGE'		=> 'Poslať správu cez ICQ',
	'SEND_IM'				=> 'Priame posielanie správ',
	'SEND_JABBER_MESSAGE'	=> 'Poslať správu Jabber',
	'SEND_MESSAGE'			=> 'Súkromná Správa',
	'SEND_MSNM_MESSAGE'		=> 'Poslať správu cez MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Poslať správu cez YIM',
	'SORT_EMAIL'			=> 'Emailu',
	'SORT_LAST_ACTIVE'		=> 'Poslednej aktivity',
	'SORT_POST_COUNT'		=> 'Počtu príspevkov',

	'USERNAME_BEGINS_WITH'	=> 'Prvé písmeno užívateľského mena',
	'USER_ADMIN'			=> 'Upraviť užívateľa',
	'USER_BAN'				=> 'Udeliť ban',
	'USER_FORUM'			=> 'Štatistiky užívateľov',
	
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Žiadne pripomenutie nebolo odoslané',
		1		=> 'Odoslané %1$d pripomenutie<br />» %2$s',
	),
	
	'USER_ONLINE'			=> 'Prítomný',
	'USER_PRESENCE'			=> 'Obrázok postavičky',

	'VIEWING_PROFILE'		=> 'Zobraziť profil - %s',
	'VISITED'				=> 'Posledná návšteva',

	'WWW'					=> 'WWW',
));

// -- User achievements 0.0.2
$lang = array_merge($lang, array(
	'ACHIEVE'				=> 'Výkony Uživateľa',
	'40_POSTS'				=> 'Dosiahol 40 príspevkov',
	'80_POSTS'				=> 'Dosiahol l80 príspevkov',
	'160_POSTS'				=> 'Dosiahol 160 príspevkov',
	'240_POSTS'				=> 'Dosiahol 240 príspevkov',
	'480_POSTS'				=> 'Dosiahol 480 príspevkov',
	'600_POSTS'				=> 'Dosiahol 600 príspevkov',
	'1000_POSTS'			=> 'Dosiahol 1000 príspevkov',
	'2000_POSTS'			=> 'Dosiahol 2000 príspevkov',
	'3000_POSTS'			=> 'Dosiahol viac ako 3000 príspevkov',
	'TOPIC_VIEWS_500'		=> 'Má tému s viac ako 500 zobrazeniami',
	'TOPIC_VIEWS_1000'		=> 'Má tému s viac ako 1000 zobrazeniami',
	'TOPIC_VIEWS_10000'		=> 'Má tému s viac ako 10000 zobrazeniami',
	'TOPIC_REPLIES_25'		=> 'Má tému s viac ako 25 odpoveďami',
	'TOPIC_REPLIES_50'		=> 'Má tému s viac ako 50 odpoveďami',
	'TOPIC_REPLIES_100'		=> 'Má tému s viac ako 100 odpoveďami',	
	'TOPIC_REPLIES_500'		=> 'Má tému s viac ako 500 odpoveďami',	
	'HAS_ATTACHED'			=> 'Nahral súbor',
	'HAS_POLL'				=> 'Vytvoril anketu',
	'UP_AVATAR'				=> 'Má Avatar',
	'FRIEND_5'				=> 'Má 5 priateľov',
	'FRIEND_10'				=> 'Má 10 priateľov',
	'FRIEND_20'				=> 'Má 20 priateľov',
	'FRIEND_50'				=> 'Má 50 priateľov',
	'JOIN_30'				=> 'Bol členom po dobu 30 dní',
	'JOIN_60'				=> 'Bol členom po dobu 60 dní',
	'JOIN_365'				=> 'Bol členom celý rok',
	'POST_PER_DAY_5'		=> 'Príspevky 5+ krát za deň',
	'POST_PER_DAY_10'		=> 'Príspevky 10+ krát za deň',
	'POST_PER_DAY_20'		=> 'Príspevky 20+ krát za deň',
	'VOTED_POLL'			=> 'Má hlasov na základe hlasovania',
	'CREATED_TOPIC_10'		=> 'Vytvoril 10 tém',
	'CREATED_TOPIC_20'		=> 'Vytvoril 20 tém',
	'CREATED_TOPIC_50'		=> 'Vytvoril 50 tém',
	'TOTAL_REACH'			=> 'Štatistika',
	'TROPHY'				=> 'dosiahnuté trofeje',
	'TOTAL_POST_REACH'		=> 'Celkom za príspevky obdržal celkom bodov:',
	'TOPIC_CREATE'			=> 'Za vytvorenú tému obdržal celkom bodov:',
	'TOPIC_VIEW'			=> 'Za zobrazenie témy obdržal celkom bodov:',
	'TOPIC_REPLIES'			=> 'Za odpovede k téme obdržal celkom bodov:',
	'RANDOM_GOALS'			=> 'Za iné,zadania obdržal celkom bodov:',
	'MEMBER_GOALS'			=> 'Celkovo účastník za deň dosiahol celkom bodov:',
	'FRIEND_GOALS'			=> 'Od priateľov obdržal celkom bodov:',
	'JOIN_GOALS'			=> 'Za príspevok na deň obdržal celkom bodov:',
	'NONE_YET'				=> '<strong>Tento užívateľ nedosiahol ani minimum 10 bodov aby mohol získať trofej!</strong>',
));

// Friend list on member view by DaMysterious
$lang = array_merge($lang, array(
	'LIST_FRIEND'     		=> '1 priateľ',
	'LIST_FRIENDS'			=> '%d priate.',
	'FRIEND_LIST'			=> 'Zoznam priateľov',
	'FRIEND_AVATAR'			=> 'Avatar',
	'FRIEND_COUNTRY'		=> 'Národnosť',
	'ONLINE_FRIENDS'		=> 'Priatelia on-line',
	'OFFLINE_FRIENDS'		=> 'Priatelia off-line',
	'VIEW_ALL'				=> 'Zobraziť všetko',
	'NO_FRIEND'				=> 'Žiadny uživateľ nie je vybraný!',
	'TOTAL_FRIENDS'			=> 'Celkom priateľov',
));

?>
