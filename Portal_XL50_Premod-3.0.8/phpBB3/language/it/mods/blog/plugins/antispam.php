<?php
/**
*
* @package phpBB3 User Blog Anti-Spam
* @version $Id: antispam.php 603 2010-05-21 18:08:30Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2010 luckylab.eu - translated for portal xl on 2010/06/26
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
	'BLOG_ANTISPAM'				=> 'Anti-Spam ACP plugin',
	'BLOG_ANTISPAM_EXPLAIN'		=> 'Anti-Spam ACP plugin per Mod blog utente.<br /><br /><strong>Questo plugin richiede la mod <a href="http://www.lithiumstudios.org/forum/viewtopic.php?f=31&t=941">Anti-Spam ACP</a> installata.</strong>',

));

?>