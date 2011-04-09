<?php
/**
* @package language(permissions)
* @version $Id: permissions_blog.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Μετάφραση Μάνος Πασχαλάκης
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
	'acl_u_blogview'			=> array('lang' => 'Μπορεί να δεί νέες αναρτήσεις στο blog', 'cat' => 'blog'),
	'acl_u_blogpost'			=> array('lang' => 'Μπορεί να προσθέσει σχόλια στο blog', 'cat' => 'blog'),
	'acl_u_blogedit'			=> array('lang' => 'Μπορεί να επεξεργαστεί τις αναρτήσεις του', 'cat' => 'blog'),
	'acl_u_blogdelete'			=> array('lang' => 'Μπορεί να διαγράψει τις αναρτήσεις σας στο blog', 'cat' => 'blog'),
	'acl_u_blognoapprove'		=> array('lang' => 'Οι αναρτήσεις στο Blog δεν χρειάζονται έγκριση πριν δημοσιευτούν', 'cat' => 'blog'),
	'acl_u_blogreport'			=> array('lang' => 'Μπορεί να αναφέρει αναρτήσεις και σχόλια των blog', 'cat' => 'blog'),
	'acl_u_blogreply'			=> array('lang' => 'Μπορεί να σχολιάσει στις αναρτήσεις των blog', 'cat' => 'blog'),
	'acl_u_blogreplyedit'		=> array('lang' => 'Μπορεί να επεξεργαστεί τα σχόλια του', 'cat' => 'blog'),
	'acl_u_blogreplydelete'		=> array('lang' => 'Μπορεί να διαγράψει τα σχόλια του', 'cat' => 'blog'),
	'acl_u_blogreplynoapprove'	=> array('lang' => 'Τα σχόλια δεν χρειάζονται έγκριση πριν την δημοσίευση', 'cat' => 'blog'),
	'acl_u_blogbbcode'			=> array('lang' => 'Μπορεί να χρησιμοποιήσει BBCode στις αναρτήσεις των blog και στα σχόλια', 'cat' => 'blog'),
	'acl_u_blogsmilies'			=> array('lang' => 'Μπορεί να χρησιμοποιήσει εικονίδια (smilies) στις αναρτήσεις των blog και στα σχόλια', 'cat' => 'blog'),
	'acl_u_blogimg'				=> array('lang' => 'Μπορεί να προσθέσει εικόνες στις αναρτήσεις των blog και στα σχόλια', 'cat' => 'blog'),
	'acl_u_blogurl'				=> array('lang' => 'Μπορεί να προσθέσει συνδέσμους (URLs) στις αναρτήσεις των blogs και στα σχόλια', 'cat' => 'blog'),
	'acl_u_blogflash'			=> array('lang' => 'Μπορεί να προσθέσει flash στις αναρτήσεις των blog και στα σχόλια', 'cat' => 'blog'),
	'acl_u_blogmoderate'		=> array('lang' => 'Μπορεί να συντονίσει (επεξεργασία και διαγραφή) τα σχόλια στο blog του.', 'cat' => 'blog'),
	'acl_u_blogattach'			=> array('lang' => 'Μπορεί να προσθέσει συνημμένα στις αναρτήσεις των blog και στα σχόλια', 'cat' => 'blog'),
	'acl_u_blognolimitattach'	=> array('lang' => 'Μπορεί να αγνοήσει το όριο μεγέθους των συνημμένων', 'cat' => 'blog'),

	'acl_u_blog_create_poll'	=> array('lang' => 'Μπορεί να δημιουργήσει δημοσκοπήσεις', 'cat' => 'blog'),
	'acl_u_blog_vote'			=> array('lang' => 'Μπορεί να ψηφίσει στις δημοσκοπήσεις', 'cat' => 'blog'),
	'acl_u_blog_vote_change'	=> array('lang' => 'Μπορεί να αλλάξει την ψήφο του', 'cat' => 'blog'),
	'acl_u_blog_style'			=> array('lang' => 'Μπορεί να επιλέξει στύλ εμφάνισης στο blog του', 'cat' => 'blog'),
	'acl_u_blog_css'			=> array('lang' => 'Μπορεί να εισαγάγει τον δικό του κώδικα CSS για να παραμετροποιήσει το στυλ του blog του όπως θέλει', 'cat' => 'blog'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_blogapprove'			=> array('lang' => 'Μπορεί να δεί μη εγκεκριμένες αναρτήσεις και να εγκρίνει για να δημοσιευτούν στο blog', 'cat' => 'blog'),
	'acl_m_blogedit'			=> array('lang' => 'Μπορεί να επεξεργαστεί αναρτήσεις στο blog', 'cat' => 'blog'),
	'acl_m_bloglockedit'		=> array('lang' => 'Μπορεί να κλειδώσει την επεξεργασία στις αναρτήσεις των blog', 'cat' => 'blog'),
	'acl_m_blogdelete'			=> array('lang' => 'Μπορεί να διαγράψει ή να επαναφέρει διεγραμμένες αναρτήσεις του blog', 'cat' => 'blog'),
	'acl_m_blogreport'			=> array('lang' => 'Μπορεί να κλείσει και να διαγράψει εισαγωγές αναφορών στο blog.', 'cat' => 'blog'),
	'acl_m_blogreplyapprove'	=> array('lang' => 'Μπορεί να δεί μη εγκεκριμένα σχόλια και να εγκρίνει σχόλια για δημοσίευση', 'cat' => 'blog'),
	'acl_m_blogreplyedit'		=> array('lang' => 'Μπορείτε να επεξεργαστεί τα σχόλια', 'cat' => 'blog'),
	'acl_m_blogreplylockedit'	=> array('lang' => 'Μπορεί να κλειδώσει την επεξεργασία για τα σχόλια', 'cat' => 'blog'),
	'acl_m_blogreplydelete'		=> array('lang' => 'Μπορεί να διαγράψει και να επαναφέρει σχόλια', 'cat' => 'blog'),
	'acl_m_blogreplyreport'		=> array('lang' => 'Μπορεί να κλείσει και να διαγράψει αναφορές σχολίων.', 'cat' => 'blog'),
));

// Administrator Permissions
$lang = array_merge($lang, array(
	'acl_a_blogmanage'			=> array('lang' => 'Μπορεί να αλλάξει τις ρυθμίσεις του Blog', 'cat' => 'blog'),
	'acl_a_blogdelete'			=> array('lang' => 'Μπορεί να διαγράψει οριστικά αναρτήσεις του blog', 'cat' => 'blog'),
	'acl_a_blogreplydelete'		=> array('lang' => 'Μπορεί να διαγράψει οριστικά σχόλια στο blog', 'cat' => 'blog'),
));
?>