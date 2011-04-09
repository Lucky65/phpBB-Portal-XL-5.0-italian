<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: mcp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/06/26
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
	'MCP_BLOG_DISAPPROVED_BLOGS_EXPLAIN'	=> 'Qui puoi vedere una lista di voci blog in attesa di approvazione.',
	'MCP_BLOG_DISAPPROVED_REPLIES_EXPLAIN'	=> 'Qui puoi vedere una lista di commenti in attesa di approvazione.',
	'MCP_BLOG_REPORTED_BLOGS_EXPLAIN'		=> 'Qui puoi vedere una lista di segnalazioni voci blog.',
	'MCP_BLOG_REPORTED_REPLIES_EXPLAIN'		=> 'Qui puoi vedere una lista di segnalazioni commenti blog.',
));

?>