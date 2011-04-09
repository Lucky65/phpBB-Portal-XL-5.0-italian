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
	'AJAX_CHECK_USERNAME_FALSE'		=>	'De gebruikersnaam is al in gebruik',
	'AJAX_CHECK_USERNAME_TRUE'		=>	'De gebruikersnaam is beschikbaar',
	'AJAX_CHECKING'					=>	'Controleert via AJAX',
	'AJAX_CHECKING_USERNAME'		=>	'Kijken of de gekozen gebruikersnaam nog beschikbaar is',
	'AJAX_CHECKING_PASSWORD'		=>	'Kijken of de wachtwoorden gelijk zijn',
	'AJAX_CHECKING_EMAIL'			=>	'Kijken of de email adressen gelijk zijn',
	'AJAX_CHECK_PASSWORD_TRUE'		=>	'Je wachtwoorden zijn hetzelfde',
	'AJAX_CHECK_PASSWORD_FALSE'		=>	'Je wachtwoorden zijn niet hetzelfde',
	'AJAX_CHECK_PASSWORD_STRENGTH'	=>	'Sterkte van je wachtwoord',
	'AJAX_CHECK_PASSWORD_STRENGTH_1'	=>	'Zeer zwak wachtwoord',
	'AJAX_CHECK_PASSWORD_STRENGTH_2'	=>	'Zwak wachtwoord',
	'AJAX_CHECK_PASSWORD_STRENGTH_3'	=>	'Sterkte van het wachtwoord is acceptabel',
	'AJAX_CHECK_PASSWORD_STRENGTH_4'	=>	'Sterk wachtwoord',
	'AJAX_CHECK_EMAIL_TRUE'			=>	'Je email adressen zijn hetzelfde',
	'AJAX_CHECK_EMAIL_FALSE'		=>	'Je email adressen zijn niet hetzelfde',
	'AJAX_CHECK_EMAIL_FORMAT_FALSE'	=>	'Je email adres is niet goed neergezet',
));

?>