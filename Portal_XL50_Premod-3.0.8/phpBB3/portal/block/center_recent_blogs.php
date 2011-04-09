<?php
/*
*
* @name center_recent_blogs.php
* @package phpBB3 Portal XL Premod
* @version $Id: center_recent_blogs.php,v 1.0.0 2010/03/15 damysterious Exp $
*
* @copyright (c) 2007, 2010  Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

/**
*/
$blog_limit = $portal_config['portal_attachments_number']; // number of blogs allowed to show, set in portal's ACP

/*
* include and create the main class
*/
$user->add_lang(array('mods/blog/common', 'mods/blog/view'));
include($phpbb_root_path . 'blog/functions.' . $phpEx);
$blog_data = new blog_data();

$recent_blog_ids = $blog_data->get_blog_data('recent', 0, array('limit' => $blog_limit));
$blog_data->get_user_data(false, true);
update_edit_delete();
if ($recent_blog_ids !== false)
{
   foreach ($recent_blog_ids as $id)
   {
	  $template->assign_block_vars('recent_blogs', array_merge($blog_data->handle_user_data(blog_data::$blog[$id]['user_id']), $blog_data->handle_blog_data($id, $config['user_blog_text_limit'])));
   }
}

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_recent_blogs.html',
   ));

?>