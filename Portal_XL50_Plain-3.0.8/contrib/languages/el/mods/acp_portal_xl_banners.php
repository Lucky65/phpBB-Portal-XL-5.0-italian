<?php
/** 
*
* @name acp_portal_xl_banners.php [Greek-El]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_banners.php,v 1.5 2008/02/27 17:52:25 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbbgr.com:
* (http://phpbbgr.com/team/)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(   
	'TITLE_PARTNERS' 						=> 'Διαχείριση συνεργατών 88x31px',
	'TITLE_PARTNERS_EXPLAIN'					=> 'Από εδώ μπορείτε να δημιουργήσετε/επεξεργαστείτε/διαγράψετε έναν συνεργάτη.<br /> Η διαδρομή είναι σχετική με τον κύριο κατάλογο της κοινότητας, π.χ. "http://www.ησελίδα.com/" για εξωτερικό δεσμό. Εσωτερικοί δεσμοί για τα banners μπορούν να προστεθούν ως "portal/images/banners/88x31/ησελίδασας.com.gif". Το μέγιστο μέγεθος της εικόνας είναι 88x31 ιχνοστοιχεία, σε μεγαλύτερες εικόνες θα αλλάζει το μέγεθος τους σε αυτήν την τιμή στο block της αρχικής σελίδας. Μπορείτε να προσθέσετε όσους συνεργάτες θέλετε για να εμφανίζονται σε αυτό το block, ορίστε το όριο των τυχαίων banner συνεργατών που θα εμφανίζονται παρακάτω.',

 	'TITLE_HO' 						=> 'Διαχείριση οριζοντίων banners 400x60px',
	'TITLE_HO_EXPLAIN'				=> 'Από εδώ μπορείτε να δημιουργήσετε/επεξεργαστείτε/διαγράψετε ένα banners.<br /> Η διαδρομή είναι σχετική με τον κύριο κατάλογο της δημ. συζήτησης "http://www.ησελίδασας.com/", δηλαδή "portal/images/banners/400x60/yourdomain.com.gif" για τα οριζόντια banners. Το μέγιστο επιτρεπτό μέγεθος της εικόνας είναι 400x60px, σε μεγαλύτερες εικόνες θα αλλάζει το μέγεθος τους σε αυτήν την τιμή. Μπορείτε να προσθέσετε όσα banners θέλετε για να εμφανίζονται σε αυτό το block, αλλά υπάρχει ένα όριο για την τυχαία προβολή 1 logo. <br /><br />Κατά την εμφάνιση τους στον Πίνακα Ελέγχου Διαχειριστή το μέγεθος τους αλλάζει στο μισό του πραγματικού τους.',

	'TITLE_VE' 						=> 'Διαχείριση οριζοντίων banners 130x600px',
	'TITLE_VE_EXPLAIN'				=> 'Από εδώ μπορείτε να δημιουργήσετε/επεξεργαστείτε/διαγράψετε ένα banners.<br /> Η διαδρομή είναι σχετική με τον κύριο κατάλογο της δημ. συζήτησης "http://www.ησελίδασας.com/", δηλαδή "portal/images/banners/130x600/yourdomain.com.gif" για τα οριζόντια banners. Το μέγιστο επιτρεπτό μέγεθος της εικόνας είναι 130x600px, σε μεγαλύτερες εικόνες θα αλλάζει το μέγεθος τους σε αυτήν την τιμή. Μπορείτε να προσθέσετε όσα banners θέλετε για να εμφανίζονται σε αυτό το block, αλλά υπάρχει ένα όριο για την τυχαία προβολή 1 logo. <br /><br />Κατά την εμφάνιση τους στον Πίνακα Ελέγχου Διαχειριστή το μέγεθος τους αλλάζει στο μισό του πραγματικού τους.',
	
	'PORTAL_PARTNERS_EDIT_HEADER'	=> 'Προσθήκη ή επεξεργασία ενός συνεργάτη',
	'ACP_MANAGE_PARTNERS'			=> 'Προσθήκη ή επεξεργασία συνεργάτη',	
	'ACP_PARTNERS'					=> 'Διαχείριση συνεργατών ',
	'ACP_PARTNERS_EXPLAIN'			=> 'Προσθήκη, επεξεργασία, διαγραφή ενός συνεργάτη',
	'ADD_PARTNERS'					=> 'Προσθήκη συνεργάτη',
	'MUST_SELECT_PARTNERS'			=> 'Επιλεγμένοι συνεργάτες',
	'PARTNERS'						=> 'Συνεργάτες',	
	'PARTNERS_ADDED'				=> 'Επιτυχής προσθήκη συνεργάτη',
	'PARTNERS_DESCRIPTION'			=> 'Περιγραφή',	
	'PARTNERS_DESCRIPTION_EXPLAIN'	=> 'Η περιγραφή του συνεργάτη π.χ. το θέμα της σελίδας.',
	'PARTNERS_IMG'			        => 'Δεσμός logo',
	'PARTNERS_IMG_EXPLAIN'			=> 'Δεσμός logo συνεργάτη, ο δεσμός είναι σχετικός με τον root κατάλογο της δημ. συζήτησης, π.χ. "http://www.ησελίδασας.com/"',
	'PARTNERS_LOGO'					=> 'Logo (88x31px)',
	'PARTNERS_REMOVED'				=> 'Επιτυχής διαγραφή συνεργάτη',
	'PARTNERS_UPDATED'				=> 'Επιτυχής επεξεργασία συνεργάτη',
	'PARTNERS_URL'					=> 'Δεσμός σελίδας',	
	'PARTNERS_URL_EXPLAIN'			=> 'Δεσμός σελίδας συνεργάτη, ο δεσμός είναι σχετικός με τον root κατάλογο της δημ. συζήτησης, π.χ. "http://www.ησελίδασας.com/"',
	'RESET_PARTNERS' 				=> 'Επαναφορά',


    'PORTAL_PARTNERS_DISPLAY'          => 'Τιμή τυχαίας εμφάνισης',
    'PORTAL_PARTNERS_DISPLAY_EXPLAIN'    => 'Θέστε πόσα banners θα εμφανίζονται τυχαία σε αυτό το μπλοκ.',
    'PORTAL_PARTNERS_DISPLAY_VALUE'    => 'Εμφανιζόμενα ταυτόχρονα banners',
	
	'PORTAL_BANNERS_EDIT_HEADER'	=> 'Προσθήκη ή επεξεργασία ενός banner',
	'ACP_MANAGE_BANNERS'			=> 'Προσθήκη ή επεξεργασία banner',	
	'ACP_BANNERS'					=> 'Διαχείριση banners ',
	'ACP_BANNERS_EXPLAIN'			=> 'Προσθήκη, επεξεργασία, διαγραφή ενός banner',
	'ADD_BANNERS'					=> 'Προσθήκη banner',
	'MUST_SELECT_BANNERS'			=> 'Επιλεγμένο banner',
	'BANNERS'						=> 'Banners',	
	'BANNERS_ADDED'					=> 'Επιτυχής προσθήκη banner',
	'BANNERS_DESCRIPTION'			=> 'Περιγραφή',	
	'BANNERS_DESCRIPTION_EXPLAIN'	=> 'Η περιγραφή του banner π.χ. το θέμα της σελίδας.',
	'BANNERS_IMG_EXPLAIN'			=> 'Ο δεσμός του banner Logo, ο δεσμός είναι σχετικός με τον root κατάλογο της δημ. συζήτησης, π.χ. "http://www.ησελίδασας.com/"',
	'BANNERS_REMOVED'				=> 'Επιτυχής αφαίρεση banner',
	'BANNERS_UPDATED'				=> 'Επιτυχής επεξεργασία banner',
	'BANNERS_URL'					=> 'Δεσμός σελίδας',	
	'BANNERS_URL_EXPLAIN'			=> 'Δεσμός σελίδας banner, ο δεσμός είναι σχετικός με τον root κατάλογο της δημ. συζήτησης, π.χ. "http://www.ησελίδασας.com/"',
	'RESET_BANNERS' 				=> 'Επαναφορά',
	
	'BANNERS_IMG_HO'			    => 'Σύνδεσμος Banner οριζόντια 400x60px',
	'BANNERS_LOGO_HO'				=> 'Banner (400x60px)',

	'BANNERS_IMG_VE'			    => 'Σύνδεσμος Banner κάθετα 130x600px',
	'BANNERS_LOGO_VE'				=> 'Banner (130x600px)',
	
));

?>
