<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: mcp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $ 
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* German translation Version 1.0.7 by FatFreddy (http://www.mebitco.de)
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
	'MCP_BLOG_DISAPPROVED_BLOGS_EXPLAIN'	=> 'Hier kannst Du eine Liste der Blogeintr&auml;ge sehen, die freigeschaltet werden m&uuml;ssen.',
	'MCP_BLOG_DISAPPROVED_REPLIES_EXPLAIN'	=> 'Hier kannst Du eine Liste der Kommentare sehen, die freigeschaltet werden m&uuml;ssen.',
	'MCP_BLOG_REPORTED_BLOGS_EXPLAIN'		=> 'Hier kannst Du eine Liste der gemeldeten Blogeintr&auml;ge sehen.',
	'MCP_BLOG_REPORTED_REPLIES_EXPLAIN'		=> 'Hier kannst Du eine Liste der gemeldeten Kommentare sehen.',
));

?>