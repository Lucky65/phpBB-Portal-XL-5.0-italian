<?php
/**
*
* permissions_gallery [Italian]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/03/29
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

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

$lang['permission_cat']['gallery'] = 'phpBB Gallery';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_gallery_manage'		=> array('lang' => 'Può gestire gli adeguamenti della galleria phpBB',	'cat' => 'gallery'),
	'acl_a_gallery_albums'		=> array('lang' => 'Può aggiungere/modificare albums e permessi',		'cat' => 'gallery'),
	'acl_a_gallery_import'		=> array('lang' => 'Può usare la funzione di importazione',				'cat' => 'gallery'),
	'acl_a_gallery_cleanup'		=> array('lang' => 'Può pulire la galleria phpBB',			            'cat' => 'gallery'),
));
?>