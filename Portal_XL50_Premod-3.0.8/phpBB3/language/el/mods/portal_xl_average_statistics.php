<?php
/**
*
* @name portal_xl_average_statistics.php [Greek-El]
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl_average_statistics.php,v 1.4 2008/01/25 16:49:51 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbb2.gr:
* (http://phpbb2.gr/groupcp.php?g=322&sid=7acc2b540cebf07b063274dde036a3ac)
* Athanasios Ziouzios Panagioths Mixas Konstantakelhs Panagioths
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Average Statistics
$lang = array_merge($lang, array(
	'TOPICS_PER_DAY_OTHER'	=> 'Θέματα ανά ημέρα: <strong>%d</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Θέματα ανά ημέρα: <strong>0</strong>',
	'POSTS_PER_DAY_OTHER'	=> 'Δημοσιεύσεις ανά ημέρα: <strong>%d</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Δημοσιεύσεις ανά ημέρα: <strong>0</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Μέλη ανά ημέρα: <strong>%d</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Μέλη ανά ημέρα: <strong>0</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Θέματα ανά μέλος: <strong>%d</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Θέματα ανά μέλος: <strong>0</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Δημοσιεύσεις ανά μέλος: <strong>%d</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Δημοσιεύσεις ανά μέλος: <strong>0</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Δημοσιεύσεις ανά θέμα: <strong>%d</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Δημοσιεύσεις ανά θέμα: <strong>0</strong>',
));
?>
