<?php
/**
* @package language(permissions) [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @version $Id: permissions_blog.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
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
	'acl_u_blogview'			=> array('lang' => 'Môže zobraziť blog', 'cat' => 'blog'),
	'acl_u_blogpost'			=> array('lang' => 'Môže posielať položky do blogu', 'cat' => 'blog'),
	'acl_u_blogedit'			=> array('lang' => 'Môže upraviť vlastné blogy', 'cat' => 'blog'),
	'acl_u_blogdelete'			=> array('lang' => 'Môže vymazať vlastné blogy', 'cat' => 'blog'),
	'acl_u_blognoapprove'		=> array('lang' => 'Návšteva blogu nemusí byť schválená pred jej zverejním', 'cat' => 'blog'),
	'acl_u_blogreport'			=> array('lang' => 'Môže nahlásiť blog a odpovede', 'cat' => 'blog'),
	'acl_u_blogreply'			=> array('lang' => 'Môže zadavať pripomienky do blogu', 'cat' => 'blog'),
	'acl_u_blogreplyedit'		=> array('lang' => 'Môže upraviť vlastný komentár', 'cat' => 'blog'),
	'acl_u_blogreplydelete'		=> array('lang' => 'Môže zmazať vlastný komentár', 'cat' => 'blog'),
	'acl_u_blogreplynoapprove'	=> array('lang' => 'Nemusí mať schválené komentáre pred ich uverejnením', 'cat' => 'blog'),
	'acl_u_blogbbcode'			=> array('lang' => 'Môže použiť BBCode v blogu komentárov', 'cat' => 'blog'),
	'acl_u_blogsmilies'			=> array('lang' => 'Môže používať smajlíky v blogu komentárov', 'cat' => 'blog'),
	'acl_u_blogimg'				=> array('lang' => 'Môže pridávať obrázky do blogu komentárov', 'cat' => 'blog'),
	'acl_u_blogurl'				=> array('lang' => 'Môže zverejniť URL v blogu položky a komentáre', 'cat' => 'blog'),
	'acl_u_blogflash'			=> array('lang' => 'Môže zverejniť flash v blogu položky a komentáre', 'cat' => 'blog'),
	'acl_u_blogmoderate'		=> array('lang' => 'Môže spravovať (upravovať a mazať) komentáre vlastného blogu.', 'cat' => 'blog'),
	'acl_u_blogattach'			=> array('lang' => 'Môže prikladať súbory v blogu položky a komentáre', 'cat' => 'blog'),
	'acl_u_blognolimitattach'	=> array('lang' => 'Môže ignorovať veľkosť prílohy a výšky limitov', 'cat' => 'blog'),

	'acl_u_blog_create_poll'	=> array('lang' => 'Môže vytvárať ankety', 'cat' => 'blog'),
	'acl_u_blog_vote'			=> array('lang' => 'Môže hlasovať v anketách', 'cat' => 'blog'),
	'acl_u_blog_vote_change'	=> array('lang' => 'Môže meniť súčasné hlasovanie', 'cat' => 'blog'),
	'acl_u_blog_style'			=> array('lang' => 'Môže si vybrať štýl a použiť ho pre vlastný blog', 'cat' => 'blog'),
	'acl_u_blog_css'			=> array('lang' => 'Môže zadať svoj vlastnej kód CSS a prispôsobiť si štýl svojho blogu tak, ako chce.', 'cat' => 'blog'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_blogapprove'			=> array('lang' => 'Môže vidieť neschválené položky v blogu, pred ich verejnov projekciov', 'cat' => 'blog'),
	'acl_m_blogedit'			=> array('lang' => 'Môže upravovať zadania v blogu', 'cat' => 'blog'),
	'acl_m_bloglockedit'		=> array('lang' => 'Môže uzamknúť editáciu zadania v blogu', 'cat' => 'blog'),
	'acl_m_blogdelete'			=> array('lang' => 'Môže vymazať ale aj obnoviť zadania v blogu', 'cat' => 'blog'),
	'acl_m_blogreport'			=> array('lang' => 'Môže uzavrieť alebo odstrániť správy z blogu.', 'cat' => 'blog'),
	'acl_m_blogreplyapprove'	=> array('lang' => 'Môže vidieť neschválené komentáre v blogu, pred ich zverejnením', 'cat' => 'blog'),
	'acl_m_blogreplyedit'		=> array('lang' => 'Môže upravovať komentáre', 'cat' => 'blog'),
	'acl_m_blogreplylockedit'	=> array('lang' => 'Môže uzamknúť editáciu komentárov', 'cat' => 'blog'),
	'acl_m_blogreplydelete'		=> array('lang' => 'Môže vymazať ale aj obnoviť komentáre', 'cat' => 'blog'),
	'acl_m_blogreplyreport'		=> array('lang' => 'Môže uzavrieť oznámenia a odstrániť komentáre.', 'cat' => 'blog'),
));

// Administrator Permissions
$lang = array_merge($lang, array(
	'acl_a_blogmanage'			=> array('lang' => 'Môže zmeniť nastavenia blogu', 'cat' => 'blog'),
	'acl_a_blogdelete'			=> array('lang' => 'Môže natrvalo odstrániť blog', 'cat' => 'blog'),
	'acl_a_blogreplydelete'		=> array('lang' => 'Môže natrvalo odstrániť komentáre z blogu', 'cat' => 'blog'),
));
?>