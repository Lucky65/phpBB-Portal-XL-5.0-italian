<?php
/**
*
* @package phpBB3 User Blog Archives
* @version $Id: archive.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Μετάφραση Μάνος Πασχαλάκης
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
	'ARCHIVES'					=> 'Αρχεία',

	'BLOG_ARCHIVES_DESCRIPTION'	=> 'Προσθέτει λίστα αρχείων στα Blog μέλους',
));

?>