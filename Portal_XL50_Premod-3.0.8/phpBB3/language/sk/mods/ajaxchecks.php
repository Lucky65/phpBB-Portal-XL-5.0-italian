<?php
/*
+-----------------------------------------------------------------------+
| Support Site  : www.realcurryrecipes.co.uk                            |
| Contact Email : andy2295@realcurryrecipes.co.uk (NOT FOR SUPPORT)     |
| Copyright     : (c) 2008 Andy Roberts                                 |
| Portions (C)  : (c) 2007 phpBB Group                                  |
+-----------------------------------------------------------------------+
| This is free software; you can redistribute it and/or                 |
| modify it under the terms of the GNU General Public License           |
| as published by the Free Software Foundation; either version 2        |
| of the License, or (at your option) any later version.                |
|                                                                       |
| This script is distributed in the hope that it will be useful,        |
| but WITHOUT ANY WARRANTY; without even the implied warranty of        |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         |
| GNU General Public License for more details.                          |
|                                                                       |
| You should have received a copy of the GNU General Public License     |
| along with this program; if not, please visit: www.Quezza.com/GPL.php |
+-----------------------------------------------------------------------+
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

// AJAX Checks stuff
$lang = array_merge($lang, array(
	'AJAX_CHECK_USERNAME_FALSE'		=>	'Tento uživateľský názov sa už používa',
	'AJAX_CHECK_USERNAME_TRUE'		=>	'Tento uživateľský názov je dostupný',
	'AJAX_CHECKING'					=>	'Kontrola použitím AJAXU',
	'AJAX_CHECKING_USERNAME'		=>	'Skontrolujte si prosím či je dostupný tento uživateľský názov',
	'AJAX_CHECKING_PASSWORD'		=>	'Skontrolujte si prosím či heslá prístupu sú tie isté',
	'AJAX_CHECKING_EMAIL'			=>	'Skontrolujte si prosím či adresy emajlu sú tie isté',
	'AJAX_CHECK_PASSWORD_TRUE'		=>	'Heslá sú OK',
	'AJAX_CHECK_PASSWORD_FALSE'		=>	'Heslá sa nezhodujú',
	'AJAX_CHECK_PASSWORD_STRENGTH'	=>	'Sila hesla',
	'AJAX_CHECK_PASSWORD_STRENGTH_1'	=>	'Sila hesla je veľmi slabá',
	'AJAX_CHECK_PASSWORD_STRENGTH_2'	=>	'Sila hesla je slabá',
	'AJAX_CHECK_PASSWORD_STRENGTH_3'	=>	'Sila hesla je obstojné',
	'AJAX_CHECK_PASSWORD_STRENGTH_4'	=>	'Sila hesla je vysoká',
	'AJAX_CHECK_EMAIL_TRUE'			=>	'Zadané e-mailové adresy sú v poriadku',
	'AJAX_CHECK_EMAIL_FALSE'		=>	'Zadané e-mailové adresy nie sú v poriadku, nie sú rovnaké',
	'AJAX_CHECK_EMAIL_FORMAT_FALSE'	=>	'Zadaný formát mejlovej adresy je nesprávny',
));

?>