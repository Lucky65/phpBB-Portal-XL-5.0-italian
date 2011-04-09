<?php
/**
* @package language(permissions)
* @version $Id: permissions_blog.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/13
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Create a new category named Blog
$lang['permission_cat']['blog'] = 'Blog';

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_blogview'			=> array('lang' => 'Può vedere voci blog', 'cat' => 'blog'),
	'acl_u_blogpost'			=> array('lang' => 'Può inviare voci blog', 'cat' => 'blog'),
	'acl_u_blogedit'			=> array('lang' => 'Può modificare voci blog', 'cat' => 'blog'),
	'acl_u_blogdelete'			=> array('lang' => 'Può cancellare voci blog', 'cat' => 'blog'),
	'acl_u_blognoapprove'		=> array('lang' => 'Voci blog non necessitano di approvazione prima di essere visibili pubblicamente', 'cat' => 'blog'),
	'acl_u_blogreport'			=> array('lang' => 'Può inviare rapporti di voci e risposte blog', 'cat' => 'blog'),
	'acl_u_blogreply'			=> array('lang' => 'Può inviare commenti su voci blog', 'cat' => 'blog'),
	'acl_u_blogreplyedit'		=> array('lang' => 'Può modficare i suoi commenti', 'cat' => 'blog'),
	'acl_u_blogreplydelete'		=> array('lang' => 'Può cancellare i suoi commenti', 'cat' => 'blog'),
	'acl_u_blogreplynoapprove'	=> array('lang' => 'Commenti non necessitano di approvazione prima di essere visibili pubblicamente', 'cat' => 'blog'),
	'acl_u_blogbbcode'			=> array('lang' => 'Può usare BBCode nelle voci e commenti blog', 'cat' => 'blog'),
	'acl_u_blogsmilies'			=> array('lang' => 'Può usare smilies nelle voci e commenti blog', 'cat' => 'blog'),
	'acl_u_blogimg'				=> array('lang' => 'Può usare immagini nelle voci e commenti blog', 'cat' => 'blog'),
	'acl_u_blogurl'				=> array('lang' => 'Può usare urls nelle voci e commenti blog', 'cat' => 'blog'),
	'acl_u_blogflash'			=> array('lang' => 'Può usare flash nelle voci e commenti blog', 'cat' => 'blog'),
	'acl_u_blogmoderate'		=> array('lang' => 'Può moderare (modifica e cancellazione) commenti nel suo blog.', 'cat' => 'blog'),
	'acl_u_blogattach'			=> array('lang' => 'Può inviare allegati nelle voci e commenti blog', 'cat' => 'blog'),
	'acl_u_blognolimitattach'	=> array('lang' => 'Può ignorare la dimensione e il valore limite', 'cat' => 'blog'),

	'acl_u_blog_create_poll'	=> array('lang' => 'Può creare sondaggi', 'cat' => 'blog'),
	'acl_u_blog_vote'			=> array('lang' => 'Può votare nei sondaggi', 'cat' => 'blog'),
	'acl_u_blog_vote_change'	=> array('lang' => 'Può modificare i voti esistenti', 'cat' => 'blog'),
	'acl_u_blog_style'			=> array('lang' => 'Può selezionare uno stile da usare nel suo blog', 'cat' => 'blog'),
	'acl_u_blog_css'			=> array('lang' => 'Può usare suoi CSS e personalizzare il suo blog.', 'cat' => 'blog'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_blogapprove'			=> array('lang' => 'Può visualizzare ed approvare voci blog per la visualizzazione publica', 'cat' => 'blog'),
	'acl_m_blogedit'			=> array('lang' => 'Può modificare voci blog', 'cat' => 'blog'),
	'acl_m_bloglockedit'		=> array('lang' => 'Può bloccare modifiche di voci blog', 'cat' => 'blog'),
	'acl_m_blogdelete'			=> array('lang' => 'Può cancellare e ripristinare voci blog', 'cat' => 'blog'),
	'acl_m_blogreport'			=> array('lang' => 'Può cancellare e chiudere rapporti di voci blog.', 'cat' => 'blog'),
	'acl_m_blogreplyapprove'	=> array('lang' => 'Può vedere commenti non approvati per la visione publica', 'cat' => 'blog'),
	'acl_m_blogreplyedit'		=> array('lang' => 'Può modificare commenti', 'cat' => 'blog'),
	'acl_m_blogreplylockedit'	=> array('lang' => 'Può bloccare commenti', 'cat' => 'blog'),
	'acl_m_blogreplydelete'		=> array('lang' => 'Può cancellare e ripristinare commenti', 'cat' => 'blog'),
	'acl_m_blogreplyreport'		=> array('lang' => 'Può chiudere e cancellare rapporti blog.', 'cat' => 'blog'),
));

// Administrator Permissions
$lang = array_merge($lang, array(
	'acl_a_blogmanage'			=> array('lang' => 'Può modificare configurazioni blogs', 'cat' => 'blog'),
	'acl_a_blogdelete'			=> array('lang' => 'Può cancellare definitivamente voci blog', 'cat' => 'blog'),
	'acl_a_blogreplydelete'		=> array('lang' => 'Può cancellare commenti su voce blog', 'cat' => 'blog'),
));
?>