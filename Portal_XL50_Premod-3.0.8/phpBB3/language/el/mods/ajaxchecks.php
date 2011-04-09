<?php
/*
+-----------------------------------------------------------------------+
|        _____                                                          |
|       /\  __`\                                                        |
|       \ \ \/\ \  __  __     __   ____    ____      __                 |
|        \ \ \ \ \/\ \/\ \  /'__`\/\_ ,`\ /\_ ,`\  /'__`\               |
|         \ \ \\'\\ \ \_\ \/\  __/\/_/  /_\/_/  /_/\ \L\.\_             |
|          \ \___\_\ \____/\ \____\ /\____\ /\____\ \__/.\_\            |
|           \/__//_/\/___/  \/____/ \/____/ \/____/\/__/\/_/            |
|                                                                       |
+-----------------------------------------------------------------------+
| Support Site  : www.Quezza.com                                        |
| Contact Email : LoonyLuke@gmail.com (NOT FOR SUPPORT)                 |
| Copyright     : (c) 2007 Luke Cousins (LoonyLuke) & Quezza Dev Team   |
| Portions (C)  : (c) 2007 phpBB Group                                  |
+-----------------------------------------------------------------------+
| Quezza is free software; you can redistribute it and/or               |
| modify it under the terms of the GNU General Public License           |
| as published by the Free Software Foundation; either version 2        |
| of the License, or (at your option) any later version.                |
|                                                                       |
| Quezza is distributed in the hope that it will be useful,             |
| but WITHOUT ANY WARRANTY; without even the implied warranty of        |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         |
| GNU General Public License for more details.                          |
|                                                                       |
| You should have received a copy of the GNU General Public License     |
| along with this program; if not, please visit: www.Quezza.com/GPL.php |
+-----------------------------------------------------------------------+
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbb2.gr:
* (http://phpbb2.gr/groupcp.php?g=322&sid=7acc2b540cebf07b063274dde036a3ac)
* Athanasios Ziouzios Panagioths Mixas Konstantakelhs Panagioths
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

// AJAX Checks stuff
$lang = array_merge($lang, array(
	'AJAX_CHECK_USERNAME_FALSE'		=>	'Το όνομα μέλους υπάρχει ήδη',
	'AJAX_CHECK_USERNAME_TRUE'		=>	'Αυτό το όνομα μέλους είναι διαθέσιμο',
	'AJAX_CHECKING'					=>	'Έλεγχος με την χρησιμοποίηση AJAX',
	'AJAX_CHECKING_USERNAME'		=>	'Ελέγξτε εάν το όνομα μέλους είναι διαθέσιμο ',
	'AJAX_CHECKING_PASSWORD'		=>	'Ελέγξτε εάν ο κωδικός είναι ίδιος',
	'AJAX_CHECKING_EMAIL'			=>	'Ελέγξτε εάν η ηλεκτρονική σας διεύθυνση είναι ίδια',
	'AJAX_CHECK_PASSWORD_TRUE'		=>	'Οι κωδικοί είναι ίδιοι',
	'AJAX_CHECK_PASSWORD_FALSE'		=>	'Οι κωδικοί σας δεν είναι ίδιοι',
	'AJAX_CHECK_PASSWORD_STRENGTH'	=>	'Η δύναμη του κωδικού πρόσβασης σας',
	'AJAX_CHECK_PASSWORD_STRENGTH_1'	=>	'Πολύ αδύναμος κωδικός',
	'AJAX_CHECK_PASSWORD_STRENGTH_2'	=>	'Μέτριος κωδικός',
	'AJAX_CHECK_PASSWORD_STRENGTH_3'	=>	'Αποδεκτός κωδικός',
	'AJAX_CHECK_PASSWORD_STRENGTH_4'	=>	'Δυνατός κωδικός',
	'AJAX_CHECK_EMAIL_TRUE'			=>	'Η ηλεκτρονική σας διεύθυνση είναι ίδια',
	'AJAX_CHECK_EMAIL_FALSE'		=>	'Η ηλεκτρονική σας διεύθυνση δε είναι ίδια',
	'AJAX_CHECK_EMAIL_FORMAT_FALSE'	=>	'Η μορφή της ηλεκτρονικής σας διεύθυνσης δεν είναι σωστή',
));

?>