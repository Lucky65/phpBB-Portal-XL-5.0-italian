<?php
/**
*
* prime_trash_bin_2 [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: prime_trash_bin_2.php,v 1.0.5 2008/08/23 17:01:00 primehalo Exp $
* @copyright (c) 2007 Ken F. Innes IV
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
// ’ » “ ” …
//

//Logs
$lang = array_merge($lang, array(
	// Overwrite
	'LOG_TOPIC_DELETED'		=> '<strong>Natrvalo vymazať tému</strong><br />» %s',
	'LOG_DELETE_TOPIC'		=> '<strong>Natrvalo vymazať tému</strong><br />» %s',
	'LOG_DELETE_POST'		=> '<strong>Natrvalo vymazať príspevok</strong><br />» %s',

	// New
	'LOG_TOPIC_STIFLED'		=> '<strong>Vymazať tému</strong><br />» %1$s',
	'LOG_TOPIC_TRASHED'		=> '<strong>Vymazať tému do Odpadkového Koša</strong><br />» %1$s',
	'LOG_TOPIC_UNSTIFLED'	=> '<strong>Undeleted topic</strong><br />» %1$s',

	'LOG_POST_STIFLED'		=> '<strong>Vymazať príspevok</strong><br />» %1$s',
	'LOG_POST_TRASHED'		=> '<strong>Vymazané príspevky v Koši</strong><br />» %1$s',
	'LOG_POST_UNSTIFLED'	=> '<strong>Obnovené príspevky</strong><br />» %1$s',
));

$lang = array_merge($lang, array(
	'LOG_TOPIC_STIFLED_2'	=> $lang['LOG_TOPIC_STIFLED'] . '<br />» » <strong>Dôvod:</strong> %2$s',
	'LOG_TOPIC_TRASHED_2'	=> $lang['LOG_TOPIC_TRASHED'] . '<br />» » <strong>Dôvod:</strong> %2$s',
	'LOG_TOPIC_UNSTIFLED_2'	=> $lang['LOG_TOPIC_UNSTIFLED'] . '<br />» » <strong>Dôvod:</strong> %2$s',

	'LOG_POST_STIFLED_2'	=> $lang['LOG_POST_STIFLED'] . '<br />» » <strong>Dôvod:</strong> %2$s',
	'LOG_POST_TRASHED_2'	=> $lang['LOG_POST_TRASHED'] . '<br />» » <strong>Dôvod:</strong> %2$s',
	'LOG_POST_UNSTIFLED_2'	=> $lang['LOG_POST_UNSTIFLED'] . '<br />» » <strong>Dôvod:</strong> %2$s',
));


// Administration
$lang = array_merge($lang, array(
	'PRIME_FAKE_DELETE'					=> 'Vymazanie Tém',
	'PRIME_FAKE_DELETE_EXPLAIN'			=> 'Určuje, ako budú témy zmazané.',
	'PRIME_FAKE_DELETE_DISABLE'			=> 'Natrvalo vymazať tému',
	'PRIME_FAKE_DELETE_ENABLE'			=> 'Pokračovať v téme a označiť ako zmazaná',
	'PRIME_FAKE_DELETE_AUTO_TRASH'		=> 'Presunúť tému do koša',
	'PRIME_FAKE_DELETE_SHADOW_ON'		=> 'Presun do Koša s tieňom',
	'PRIME_FAKE_DELETE_SHADOW_OFF'		=> 'Presunúť do koša bez tieňa',

	'PRIME_TRASH_FORUM'					=> 'Fórum Odpadkový Kôš',
	'PRIME_TRASH_FORUM_EXPLAIN'			=> 'Ak zadáte, vymazať témy premiestnim ich na toto fórum. Vymazané témy v Odpadkovom Koši budem permanentne odstrňovať.',
	'PRIME_TRASH_FORUM_DISABLE'			=> 'Nepoužiť odpadkový kôš',
	'PRIME_TRASH_FORUM_DIVIDER'			=> '---------------------------',
	'PRIME_NO_TRASH_FORUM_ERROR'		=> 'Musíte nastaviť Kôš na fóre keď vyberiete "%s" voľbu',

	'PRIME_FOREVER_WHEN_DELETE_USER'	=> 'Natrvalo odstrániť príspevky',
));

// Moderation
$lang = array_merge($lang, array(

	// Topics - Deleting
	'PRIME_DELETE_TOPIC_REASON'			=> 'Prosím, zadajte dôvod pre zmazanie',
	'PRIME_DELETE_TOPIC_FOREVER'		=> 'Natrvalo zmazať túto tému',
	'PRIME_DELETE_TOPICS_FOREVER'		=> 'Natrvalo zmazať tieto témy',
	'PRIME_DELETE_TO_TRASH_BIN'			=> 'Presunúť tému do koša fóra',
	'PRIME_DELETE_TOPIC_FOREVER_DENIED'	=> 'Nemôžete natrvalo vymazať témy v tomto fóre.',
	'PRIME_DELETE_TOPIC_MIX_NOTICE'		=> 'Upozornenie: Všetky témy, ktoré sú už označené ako zmazané nebudú týmto dotknuté.',

	// Topics - Deleted
	'PRIME_DELETED_TOPIC_SUCCESS'		=> 'Vybraná označená téma bola úspešne zmazaná.',
	'PRIME_DELETED_TOPICS_SUCCESS'		=> 'Vybrané označené témy boli úspešne zmazané.',
	'PRIME_DELETED_TOPIC_FAILURE'		=> 'Vybraná označená téma nebola zmazaná.',
	'PRIME_DELETED_TOPICS_FAILURE'		=> 'Vybrané označené témy neboli zmazané.',

	// Topics - Deleted to Trash Bin
	'PRIME_TRASHED_TOPIC_SUCCESS'		=> 'Označená téma bola úspešne presunutá do koša vo fóre.',
	'PRIME_TRASHED_TOPICS_SUCCESS'		=> 'Označené témy boli úspešne presunuté do koša vo fóre.',
	'PRIME_TRASHED_TOPIC_FAILURE'		=> 'Označená téma nebola presunutá do koša vo fóre.',
	'PRIME_TRASHED_TOPICS_FAILURE'		=> 'Označené témy neboli presunuté do koša vo fóre.',
	'PRIME_GO_TO_TRASH_BIN'				=> '%sVrátim sa do koša na fóra%s',

	// Topics - Undeleting
	'PRIME_UNDELETE_TOPICS'				=> 'Obnoviť (Krok späť)',
	'PRIME_UNDELETE_TOPIC_REASON'		=> 'Prosím, zadajte dôvod pre zrušenie zmazania',
	'PRIME_UNDELETE_TOPIC_CONFIRM'		=> 'Ste si istí, mám obnoviť túto tému?',
	'PRIME_UNDELETE_TOPICS_CONFIRM'		=> 'Ste si istí, mám obnoviť tieto témuy?',
	'PRIME_UNDELETE_TOPICS_UNNEEDED'	=> 'Zvolené téma sa nedá obnoviť.',


	// Topics - Undeleted
	'PRIME_UNDELETED_TOPIC_SUCCESS'		=> 'Označená téma bola úspešne obnovená.',
	'PRIME_UNDELETED_TOPICS_SUCCESS'	=> 'Označené témy boli úspešne obnovené.',
	'PRIME_UNDELETED_TOPIC_FAILURE'		=> 'Označená téma nebola obnovená.',
	'PRIME_UNDELETED_TOPICS_FAILURE'	=> 'Označené témy neboli obnovené.',

	// Posts - Deleting
	'PRIME_DELETE_POST_REASON'			=> 'Prosím, zadajte dôvod pre zmazanie',
	'PRIME_DELETE_POST_FOREVER'			=> 'Natrvalo vymazať tento príspevok',
	'PRIME_DELETE_POSTS_FOREVER'		=> 'Natrvalo vymazať tieto príspevky',
	'PRIME_DELETE_POST_FOREVER_DENIED'	=> 'Vy nemôžete vymazať príspevky v tomto fóre.',
	'PRIME_DELETE_POST_MIX_NOTICE'		=> 'Upozornenie: Všetky príspevky, ktoré sú už označené ako zmazané nebudú týmto dotknuté.',

	// Posts - Deleted
	'PRIME_DELETED_POST_SUCCESS'		=> 'Vybraný označený príspevok bol úspešne zmazaný.',
	'PRIME_DELETED_POSTS_SUCCESS'		=> 'Vybrané označené príspevky boli úspešne zmazané..',
	'PRIME_DELETED_POST_FAILURE'		=> 'Vybraný označený príspevok nebol zmazaný.',
	'PRIME_DELETED_POSTS_FAILURE'		=> 'Vybrané označené príspevky neboli zmazané.',

	// Posts - Undeleting
	'PRIME_UNDELETE_POST'				=> 'Obnoviť príspevok (Krok späť)',
	'PRIME_UNDELETE_POSTS'				=> 'Obnoviť príspevky (Krok späť)',
	'PRIME_UNDELETE_POST_REASON'		=> 'Prosím, zadajte dôvod pre zrušenie zmazania',
	'PRIME_UNDELETE_POST_CONFIRM'		=> 'Ste si istí, mám obnoviť tento príspevok?',
	'PRIME_UNDELETE_POSTS_CONFIRM'		=> 'Ste si istí, mám obnoviť tieto príspevky?',
	'PRIME_UNDELETE_POSTS_UNNEEDED'		=> 'Vybrané príspevky nemôžu byť obnovené.',

	// Posts - Undeleted
	'PRIME_UNDELETED_POST_SUCCESS'		=> 'Vybraný príspevok bol úspešne obnovený.',
	'PRIME_UNDELETED_POSTS_SUCCESS'		=> 'Vybrané príspevky boli úspešne obnovené.',
	'PRIME_UNDELETED_POST_FAILURE'		=> 'Vybraný príspevok nebol obnovený.',
	'PRIME_UNDELETED_POSTS_FAILURE'		=> 'Vybrané príspevky neboli obnovené.',

));

?>