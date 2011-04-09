<?php
/**
*
* @name most_poster.php
* @package phpBB3 Portal XL 5.0
* @version $Id: most_poster.php,v 1.3 2009/10/13 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Start session management
*/

/*
* Begin block script here
*/
$number_of_top_posters = $portal_config['portal_max_most_poster'];

$sql = 'SELECT *
   FROM ' . USERS_TABLE . '
   WHERE user_type <> 2
   AND user_posts <> 0
   ORDER BY user_posts DESC';
$result = $db->sql_query_limit($sql, $number_of_top_posters);

while( ($row = $db->sql_fetchrow($result)) && ($row['username'] != '') )
   {         
            $avatar_img = '';
            $img_avatar ='';
            switch ($row['user_avatar_type'])
            {
               case AVATAR_UPLOAD:
			      $avatar_img = $phpbb_root_path . "download/file.$phpEx?avatar=";
                  $avatar_img .= $row['user_avatar'];
                  $img_avatar = '<img src="' . $avatar_img . '" width="40" height="40" alt="" />';
               break;

               case AVATAR_GALLERY:
			      $avatar_img = $phpbb_root_path . $config['avatar_gallery_path'] . '/';
                  $avatar_img .= $row['user_avatar'];
                  $img_avatar = '<img src="' . $avatar_img . '" width="40" height="40" alt="" />';
               break;
            }

		$user_colour = ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'"' : '';

   $template->assign_block_vars('most_poster', array(
      'S_SEARCH_ACTION'		=> append_sid("{$phpbb_root_path}search.$phpEx", 'author_id=' . $row['user_id'] . '&amp;sr=posts'),
      'USERNAME'      		=> censor_text($row['username']),
      'USERNAME_COLOR'		=> $user_colour,
      'U_USERNAME'   		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']),
      'POSTER_POSTS'   		=> $row['user_posts'],
      'POSTER_AV' 			=> $img_avatar,
	  'FLAG_TITLE'			=> $flag_title,
	  'FLAG_IMG'		    => $flag_img,
	  'FLAG_IMG_SRC'		=> $flag_img_src,
      'U_WWW'   			=> $row['user_website'],
	  'WWW_IMG' 			=> $user->img('icon_contact_www', 'VISIT_WEBSITE'),
      ));
}
$db->sql_freeresult($result);

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/most_poster.html',
	));

?>