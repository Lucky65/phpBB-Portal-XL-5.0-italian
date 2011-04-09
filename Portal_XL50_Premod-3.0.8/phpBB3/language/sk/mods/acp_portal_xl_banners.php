<?php
/** 
*
* @name acp_portal_xl_banners.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_banners.php,v 1.3 2009/10/18 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
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
	'TITLE_PARTNERS'						=> 'Nastavenie partnerov 88x31px',
	'TITLE_PARTNERS_EXPLAIN'				=> 'V tomto zadaní môžete vytvoriť, upraviť alebo vymazať položky partnerov.<br /> Relatívna cesta adresára v roote fóra, napr. "http://www.vašadoména.com/" pre externé linky. Interné linky pre banery sú pridané v "portal/images/banners/88x31/yourdomain.com.gif". Max veľkosť obrázka by mala byť 88x31 pixel, väčšie obrázky sa prestavia na túto hodnotu v bloku portálu. Môžete si pridať partnerov v tomto bloku koľko chcete, v ďalšom kroku si potom zadáte váš limit pre náhodné zobrazenie loga partnerov.',

 	'TITLE_HO' 						=> 'Nastavenie vodorovných banerov 400x60px',
	'TITLE_HO_EXPLAIN'				=> 'Z tohto formulára môžete vytvárať, upravovať a odstraňovať položky banerov. <br /> Relatívna cesta adresára v roote fóra je napr. "http://www.vašadoména.com/", v časti pre vodorovné bannery "portal/images/banners/400x60/yourdomain.com.gif". Max veľkosť obrázka by mala byť 400x60px, väčšie obrázky sa prestavia na túto hodnotu v bloku portálu. Môžete si pridať partnerov v tomto bloku koľko chcete, v ďalšom kroku si potom zadáte váš limit pre náhodné zobrazenie loga partnerov. <br /><br />Bannery v ACP sú zobrazené v polovičnej velkosti ich skutočného zobrazenia.',

	'TITLE_VE' 						=> 'Nastavenie zvislích banerov 130x600px',
	'TITLE_VE_EXPLAIN'				=> 'Z tohto formulára môžete vytvárať, upravovať a odstraňovať položky banerov. <br /> Relatívna cesta adresára v roote fóra je napr. "http://www.vašadoména.com/", v časti pre zvislé bannery "portal/images/banners/130x600/yourdomain.com.gif" for vertical banners. Max veľkosť obrázka by mala byť 130x600px, väčšie obrázky sa prestavia na túto hodnotu v bloku portálu. Môžete si pridať partnerov v tomto bloku koľko chcete, v ďalšom kroku si potom zadáte váš limit pre náhodné zobrazenie loga partnerov. <br /><br />Bannery v ACP sú zobrazené v polovičnej velkosti ich skutočného zobrazenia.',
 
	'PORTAL_PARTNERS_EDIT_HEADER'	=> 'Pridanie alebo upravenie partnera',
	'ACP_MANAGE_PARTNERS'			=> 'Pridanie alebo upravenie partnera',	
	'ACP_PARTNERS'					=> 'Nastavenie partnerov ',
	'ACP_PARTNERS_EXPLAIN'			=> 'Pridanie upravenie alebo vymazanie partnera',
	'ADD_PARTNERS'					=> 'Pridať partnera',
	'MUST_SELECT_PARTNERS'			=> 'Vybrať partnera',
	'PARTNERS'						=> 'Partnery',	
	'PARTNERS_ADDED'				=> 'Partner bol úspešne pridaný',
	'PARTNERS_DESCRIPTION'			=> 'Popis',	
	'PARTNERS_DESCRIPTION_EXPLAIN'	=> 'Popis stránky Partnera napríklad havné zameranie tém jeho stránky.',
	'PARTNERS_IMG'			        => 'Logo url',
	'PARTNERS_IMG_EXPLAIN'			=> 'Logo Partnera url, Relatívna cesta adresára v roote vašeho fóra, napr. "http://www.vašadoména.com/<br/>portal/images/banners/výš.xšír./náz.gif',
	'PARTNERS_LOGO'					=> 'Logo (88x31px)',
	'PARTNERS_REMOVED'				=> 'Partner bol úspešne odstránený',
	'PARTNERS_UPDATED'				=> 'Partner bol úspešne upravený',
	'PARTNERS_URL'					=> 'Stránka url',	
	'PARTNERS_URL_EXPLAIN'			=> 'Zadajte Partnerovu Url stránky vzdialeného fóra, napr. "http://www.jehodoména.com/"',
	'RESET_PARTNERS' 				=> 'Reset',

	'PORTAL_PARTNERS_DISPLAY' 			=> 'Nastavenie hodnoty zo zadaných pre náhodné zobrazenie',
	'PORTAL_PARTNERS_DISPLAY_EXPLAIN' 	=> 'Zadajte koľko banerov bude náhodne zobrazovaných z tohoto bloku na ploche portálu.',
	'PORTAL_PARTNERS_DISPLAY_VALUE' 	=> 'Zobrazujem stiedavo banery',
	
	'PORTAL_BANNERS_EDIT_HEADER'	=> 'Pridanie alebo úprava banera',
	'ACP_MANAGE_BANNERS'			=> 'Pridať alebo upraviť baner',	
	'ACP_BANNERS'					=> 'Nastavenia banera ',
	'ACP_BANNERS_EXPLAIN'			=> 'Pridať, upraviť, alebo odstrániť baner',
	'ADD_BANNERS'					=> 'Pridať baner',
	'MUST_SELECT_BANNERS'			=> 'Vybrať baner',
	'BANNERS'						=> 'Banery',	
	'BANNERS_ADDED'					=> 'Baner bol úspešne pridany',
	'BANNERS_DESCRIPTION'			=> 'Popis',	
	'BANNERS_DESCRIPTION_EXPLAIN'	=> 'Popis banera napríklad, hlavná pseudoinštrukcia alebo téma stránky.',
	'BANNERS_IMG_EXPLAIN'			=> 'Logo Banera, cesta vo fóre koreňového adresára kde je baner uložený, napr. "http://www.vašadoména.com/aaaa"',
	'BANNERS_REMOVED'				=> 'Baner bol úspešne odstránený',
	'BANNERS_UPDATED'				=> 'Baner bol úspešne upravený',
	'BANNERS_URL'					=> 'URL stránky',	
	'BANNERS_URL_EXPLAIN'			=> 'URL stránky banera, cesta je relatívna k fóra koreňového adresára, napr. "http://www.jehodoména.com/"',
	'RESET_BANNERS' 				=> 'Reset',
	
	'BANNERS_IMG_HO'			    => 'Url vodorovné logo 400x60px',
	'BANNERS_LOGO_HO'				=> 'Logo (400x60px)',

	'BANNERS_IMG_VE'			    => 'Url zvisle logo 130x600px',
	'BANNERS_LOGO_VE'				=> 'Logo (130x600px)',
	
));

?>
