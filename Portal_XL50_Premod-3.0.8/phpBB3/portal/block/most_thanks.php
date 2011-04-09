<?php
/**
*
* @name most_thanks.php
* @package phpBB3 Portal XL Premod
* @version $Id: most_thanks.php,v 1.3 2009/10/13 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/
$number_of_top_posters = $portal_config['portal_max_most_poster'];

$sql = 'SELECT *
		FROM ' . USERS_TABLE . '
		WHERE user_type IN (' . USER_NORMAL . ', ' . USER_FOUNDER . ')
			AND user_posts > 0
		ORDER BY user_thanked_others DESC';
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

	// Country Flags Version 3.0.6
	if ($user->data['user_id'] != ANONYMOUS)
	{
		$flag_title = $flag_img = $flag_img_src = '';
		get_user_flag($row['user_country_flag'], $row['user_country'], $flag_title, $flag_img, $flag_img_src);
	}
	// Country Flags Version 3.0.6
	
	$user_colour = ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'" onmouseover="show_popup(' .$row['user_id']. ')" onmouseout="close_popup()"' : ' ' . $flag_img;

   $template->assign_block_vars('most_thanks', array(
      'USERNAME'      		=> censor_text($row['username']),
      'USERNAME_COLOR'		=> $user_colour,
      'U_USERNAME'   		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']),
      'THANK_GIVEN'   		=> $row['user_thanked_others'],
      'THANK_RECEIVED' 		=> $row['user_thanked'],
      'THANKER_AV' 			=> $img_avatar,
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
    'body' => 'portal/block/most_thanks.html',
	));

?>