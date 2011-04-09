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
	'AJAX_CHECK_USERNAME_FALSE'		=>	'Dieser Username wird bereit verwendet',
	'AJAX_CHECK_USERNAME_TRUE'		=>	'Dieser Username ist verf&uuml;gbar',
	'AJAX_CHECKING'					=>	'AJAX Pr&uuml;fung',
	'AJAX_CHECKING_USERNAME'		=>	'Pr&uuml;fen, ob Name verf&uuml;gbar',
	'AJAX_CHECKING_PASSWORD'		=>	'Pr&uuml;fen, ob Passw&ouml;rter gleich sind',
	'AJAX_CHECKING_EMAIL'			=>	'Pr&uuml;fen, ob E-Mail Adresse gleich ist',
	'AJAX_CHECK_PASSWORD_TRUE'		=>	'Dein Passwort stimmt &uuml;berein',
	'AJAX_CHECK_PASSWORD_FALSE'		=>	'Passworte stimmen nicht &uuml;verein',
	'AJAX_CHECK_PASSWORD_STRENGTH'	=>	'Passwort Sicherheit',
	'AJAX_CHECK_PASSWORD_STRENGTH_1'	=>	'Sehr einfaches Passwort',
	'AJAX_CHECK_PASSWORD_STRENGTH_2'	=>	'Einfaches Passwort',
	'AJAX_CHECK_PASSWORD_STRENGTH_3'	=>	'Gutes Passwort',
	'AJAX_CHECK_PASSWORD_STRENGTH_4'	=>	'Sehr gutes Passwort',
	'AJAX_CHECK_EMAIL_TRUE'			=>	'E-Mail Adresse stimmt &uuml;berein',
	'AJAX_CHECK_EMAIL_FALSE'		=>	'E-Mail Adresse stimmt nicht &uuml;berein',
	'AJAX_CHECK_EMAIL_FORMAT_FALSE'	=>	'Das E-Mail Format ist nicht korrekt',
));

?>