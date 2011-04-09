<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: view.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'AVERAGE_OF_RATING'				=> 'Priemer hodnotenia %s',
	'AVERAGE_OF_RATINGS'			=> 'Priemer hodnotenia %s',

	'CLICK_HERE_SHOW_POST'			=> 'Sem kliknite a zobrazím príspevok.',
	'CNT_COMMENTS'					=> 'Komentárov je celkom %s',
	'COMMENTS'						=> 'Komentáre',

	'DELETED_REPLY_SHOW'			=> 'Tento komentár bol zmazaný.  Sem kliknite a zobrazím komentár.',

	'LAST_VISIT_BLOGS'				=> 'Položky Blogu od poslednej návštevy',

	'MY_RATING'						=> 'Moje hodnotenie',

	'NO_DELETED_BLOGS'				=> 'Neexistujú žiadne vymazané položky z blogu tohto užívateľa.',
	'NO_DELETED_BLOGS_SORT_DAYS'	=> 'Nie sú zmazané žiadne uverejnené položky z blogu od tohto užívateľa za posledných %s.',

	'ONE_COMMENT'					=> '1 Komentár',

	'POSTED_BY_FOE'					=> 'Tento príspevok bol vytvorený %s ktorý je aktuálne vo vašom zozname ignorovaných.',

	'RANDOM_BLOG'					=> 'Toto Zobrazenie je Náhodný Výber Zadania v Blogu',
	'RATE_ME'						=> '%1$s z %2$s',
	'RECENT_COMMENTS'				=> 'Nové Komentáre',
	'REMOVE_RATING'					=> 'Vynulujem Hodnotenie',
	'REPLY_SHOW_NO_JS'				=> 'Musíte povoliť JavaScript pre zobrazenie tohto príspevku.',
	'REPORTED'						=> 'Táto správa bola nahlásená. Sem kliknite ak je v poriadku a zavriem správu.',
	'REPORTED_SHORT'				=> 'Zadanie je v zoznama Nahlásených',

	'SUBCATEGORIES'					=> 'Podkategórie',
	'SUBCATEGORY'					=> 'Podkategória',

	'TOTAL_NUMBER_OF_BLOGS'			=> 'Celkom Príspevkov',
	'TOTAL_NUMBER_OF_REPLIES'		=> 'Celkom Komentárov',

	'UNAPPROVED'					=> 'Táto správa čaká na schválenie. Kliknite sem ak chcete aby bola táto správa povolená.',
));

?>