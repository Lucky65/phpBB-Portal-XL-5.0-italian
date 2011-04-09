<?php
/** 
* @package language(permissions)
* @version $Id: permissions_blog.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* German  translation Version 1.0.7 by FatFreddy (http://www.mebitco.de)
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

// Create a new category named Blog
$lang['permission_cat']['blog'] = 'Blog';

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_blogview'			=> array('lang' => 'Kann Blogs sehen', 'cat' => 'blog'),
	'acl_u_blogpost'			=> array('lang' => 'Kann Blogs schreiben', 'cat' => 'blog'),
	'acl_u_blogedit'			=> array('lang' => 'Kann eigene Blogs &auml;ndern', 'cat' => 'blog'),
	'acl_u_blogdelete'			=> array('lang' => 'Kann eigene Blogs l&ouml;schen', 'cat' => 'blog'),
	'acl_u_blognoapprove'		=> array('lang' => 'Blogs ben&ouml;tigen keine Freigabe um &ouml;ffentlich sichtbar zu sein', 'cat' => 'blog'),
	'acl_u_blogreport'			=> array('lang' => 'Kann Blogs und Kommentare melden', 'cat' => 'blog'),
	'acl_u_blogreply'			=> array('lang' => 'Kann Blogs beantworten', 'cat' => 'blog'),
	'acl_u_blogreplyedit'		=> array('lang' => 'Kann eigene Kommentare &auml;ndern', 'cat' => 'blog'),
	'acl_u_blogreplydelete'		=> array('lang' => 'Kann eigene Kommentare l&ouml;schen', 'cat' => 'blog'),
	'acl_u_blogreplynoapprove'	=> array('lang' => 'Kommentare ben&ouml;tigen keine Freigabe um &ouml;ffentlich sichtbar zu sein', 'cat' => 'blog'),
	'acl_u_blogbbcode'			=> array('lang' => 'Kann  BBCode in Blogs und Kommentaren nutzen', 'cat' => 'blog'),
	'acl_u_blogsmilies'			=> array('lang' => 'Kann  Smilies in Blogs und Kommentaren nutzen', 'cat' => 'blog'),
	'acl_u_blogimg'				=> array('lang' => 'Kann  Bilder in Blogs und Kommentaren einf&uuml;gen', 'cat' => 'blog'),
	'acl_u_blogurl'				=> array('lang' => 'Kann  URLs in Blogs und Kommentaren einf&uuml;gen', 'cat' => 'blog'),
	'acl_u_blogflash'			=> array('lang' => 'Kann  Flash in Blogs und Kommentaren einf&uuml;gen', 'cat' => 'blog'),
	'acl_u_blogmoderate'		=> array('lang' => 'Kann Kommentare in eigenen Blogs moderieren (bearbeiten und l&ouml;schen).', 'cat' => 'blog'),
	'acl_u_blogattach'			=> array('lang' => 'Kann Dateianh&auml;nge in Blogs und Kommentaren einf&uuml;gen', 'cat' => 'blog'),
	'acl_u_blognolimitattach'	=> array('lang' => 'Kann Gr&ouml;ßenbeschr&auml;nkungen f&uuml;r Dateianh&auml;ngeumgehen', 'cat' => 'blog'),

	'acl_u_blog_create_poll'	=> array('lang' => 'Kann Umfragen erstellen', 'cat' => 'blog'),
	'acl_u_blog_vote'			=> array('lang' => 'Kann an Umfragen teilnehmen', 'cat' => 'blog'),
	'acl_u_blog_vote_change'	=> array('lang' => 'Kann Abstimmung &auml;ndern', 'cat' => 'blog'),
	'acl_u_blog_style'			=> array('lang' => 'Kann einen Style f&uuml;r seinen Blog ausw&auml;hlen', 'cat' => 'blog'),
	'acl_u_blog_css'			=> array('lang' => 'Kann eigenen CSS-Code in den Styles verwenden.', 'cat' => 'blog'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_blogapprove'			=> array('lang' => 'Kann nichtfreigegebene Blogs sehen und Blogs f&uuml;r &ouml;ffentliche Ansicht freigeben', 'cat' => 'blog'),
	'acl_m_blogedit'			=> array('lang' => 'Kann Blogs bearbeiten', 'cat' => 'blog'),
	'acl_m_bloglockedit'		=> array('lang' => 'Kann Blogs f&uuml;r Bearbeitung sperren', 'cat' => 'blog'),
	'acl_m_blogdelete'			=> array('lang' => 'Kann Blogs l&ouml;schen und wiederherstellen', 'cat' => 'blog'),
	'acl_m_blogreport'			=> array('lang' => 'Kann Meldungen schließen und l&ouml;schen', 'cat' => 'blog'),
	'acl_m_blogreplyapprove'	=> array('lang' => 'Kann nichtfreigegebene Kommentare sehen und Kommentare f&uuml;r &ouml;ffentliche Ansicht freigeben', 'cat' => 'blog'),
	'acl_m_blogreplyedit'		=> array('lang' => 'Kann Kommentare bearbeiten', 'cat' => 'blog'),
	'acl_m_blogreplylockedit'	=> array('lang' => 'Kann Kommentare f&uuml;r Bearbeitung sperren', 'cat' => 'blog'),
	'acl_m_blogreplydelete'		=> array('lang' => 'Kann Kommentare l&ouml;schen und wiederherstellen', 'cat' => 'blog'),
	'acl_m_blogreplyreport'		=> array('lang' => 'Kann Meldungen schließen und l&ouml;schen', 'cat' => 'blog'),
));

// Administrator Permissions
$lang = array_merge($lang, array(
	'acl_a_blogmanage'			=> array('lang' => 'Kann Blogeinstellungen &auml;ndern', 'cat' => 'blog'),
	'acl_a_blogdelete'			=> array('lang' => 'Kann Blogs endg&uuml;ltig l&ouml;schen', 'cat' => 'blog'),
	'acl_a_blogreplydelete'		=> array('lang' => 'Kann Kommentare endg&uuml;ltig l&ouml;schen', 'cat' => 'blog'),
));
?>