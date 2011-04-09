<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: mcp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'MCP_BLOG_DISAPPROVED_BLOGS_EXPLAIN'	=> 'Εδώ μπορείτε να δείτε μια λίστα με τις αναρτήσεις των blog που θέλουν έγκριση.',
	'MCP_BLOG_DISAPPROVED_REPLIES_EXPLAIN'	=> 'Εδώ μπορείτε να δείτε μια λίστα με τα σχόλια που θέλουν έγκριση.',
	'MCP_BLOG_REPORTED_BLOGS_EXPLAIN'		=> 'Εδώ μπορείτε να δείτε μια λίστα με τις αναφερόμενες αναρτήσεις των blog.',
	'MCP_BLOG_REPORTED_REPLIES_EXPLAIN'		=> 'Εδώ μπορείτε να δείτε μια λίστα με τα ανεφερόμενα σχόλια.',
));

?>