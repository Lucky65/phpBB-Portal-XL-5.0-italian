<?php
/**
*
* toplist [English]
*
* version $Id: points.php 248 2009-07-28 02:22:43Z femu $
* copyright (c) 2009 WyriHaximus
* license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB')) {
    exit;
}

if ( empty($lang) || !is_array($lang) ) {
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
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
        'TOPLIST_EDIT' => 'Edit',
        'TOPLIST_DELETE' => 'Delete',
        'TOPLIST_RANK' => 'Rank',
        'TOPLIST_SITE' => 'Site',
        'TOPLIST_HITS_IN' => 'In',
        'TOPLIST_HITS_OUT' => 'Out',
        'TOPLIST_HITS_IMG' => 'Image',
        'TOPLIST' => 'Toplist',
        'TOPLIST_SQL_ERROR' => 'Error executing SQL query.',
        'TOPLIST_EDIT_WEBSITE' => 'Edit Website',
        'TOPLIST_ADD_WEBSITE' => 'Add Website',
        'TOPLIST_NAME' => 'Name:',
        'TOPLIST_INFO' => 'Info:',
        'TOPLIST_SITE_URL' =>'Site URL:',
        'TOPLIST_BANNER_URL' => 'Banner URL:',
        'TOPLIST_RESEND_HTML' => 'E-mail me the HTML code again:',
        'TOPLIST_DISPLAYS_IMAGES' => 'Display Images:',
        'TOPLIST_TOPLIST' => 'Toplist',
        'TOPLIST_NO_ID' => 'No ID found!',
        'TOPLIST_NO_AUTH' => 'I\'m sorry but you are not authorized to do this.',
        'TOPLIST_EDIT_DONE' => 'Your site has ben updated.<br />It can take up to 60 secconds before the edits to the site are visible in the toplist due to caching.',
        'TOPLIST_DID_RESEND' => 'The html code for the toplist has been resend to your email as requested.',
        'TOPLIST_SITE_VIEW' => 'Site information',
        'TOPLIST_PROCEED_TO_SITE' => 'Continue to this site >>>',
        'TOPLIST_EDIT_SITES' => 'Edit sites',
        'TOPLIST_ADD_SITES' => 'Add site',
        'TOPLIST_LOGIN_EXP' => 'You must be loggedin to continue.',
        'TOPLIST_ADD_DONE' => 'Your site has been added.<br />The toplist code have have to place on your website, as stated below is also email to your email address.<br />Please place the following HTML code on your site so visitors can vote for you site!<br /><textarea name="textarea" cols="100" rows="3">%s</textarea>',
        'TOPLIST_ADD_DONE_EMAIL' => "Hello %1\$s,\n\nYour site '%2\$s' has been added to the toplist succesfully. Please place the following HTML code on your site so visitors can vote for you site!\n%3\$s\n%4\$s\n",
        'TOPLIST_DELETE_DONE' => "Your site has been successfully deleted.<br />It can take up to 60 secconds before the site has completely disapeard from the toplist due to caching.",
        'TOPLIST_CONFIRM_DELETE' => 'Delete site',
        'TOPLIST_CONFIRM_COMMENT_DELETE' => 'Are you sure you want to delete this comment?',
        'TOPLIST_CONFIRM_DELETE_CONFIRM' => 'Are you realy sure you want to delete this site? Once it has been deleted it can\'t be taken back!',
        'TOPLIST_COMMENT_NOT_DELETED' => 'Comment hasn\'t been deleted!',
        'TOPLIST_COMMENT_DELETED' => 'Comment has been deleted!',
        'TOPLIST_NOT_RATED_YET' => 'Not rated yet.',
        'TOPLIST_RATING_COLL' => 'Rating',
        'TOPLIST_BAD_AUTH' => 'Bad authentication hash!',
        'TOPLIST_RATING_DONE' => 'Rating successfull.',
        'TOPLIST_ALLREADY_RATED' => 'You allready rated this site.',
        'TOPLIST_DISABLED' => 'The board admin has disabled the Toplist on this board.',
        'TOPLIST_DISABLED_RATING' => 'The board admin has disabled rating of sites on the Toplist on this board.',
        'TOPLIST_ADD_SITE' => 'Add site',
        'TOPLIST_PREVIEW' => 'Preview (<a href="http://www.thumbshots.org" target="_blank" title="Thumbnails by Thumbshots.org">by Thumbshots.org</a>)',
        'TOPLIST_RATE_THIS_SITE' => 'Rate this site',
        'TOPLIST_NO_SITES_IN_TOPLIST' => 'No sites in toplist.',
        'TOPLIST_NO_COMMENTS' => 'No comments found. Feel free to post one!',
        'TOPLIST_SITE_OF_THE_MOMENT' => 'Site of the moment',
        'TOPLIST_CHECK_CODE' => 'Check code on site',
        'TOPLIST_ADMIN_TOPLIST_SETTINGS' => 'Toplist Settings',
        'TOPLIST_ADMIN_ENABLE_TOPLIST' => 'Enable Toplist',
        'TOPLIST_ADMIN_ENABLE_TOPLIST_EXPLAIN' => 'Enables or disables the entire toplist. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist">this page</a>. Make sure you\'ve checked it before enabling this mod!!!',
        'TOPLIST_ADMIN_ENABLE_RATINGS' => 'Enable Ratings',
        'TOPLIST_ADMIN_ENABLE_RATINGS_EXPLAIN' => 'Enables or disables the rating system within toplist. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Rating">this page</a>.',
        'TOPLIST_ADMIN_ENABLE_COMMENTS' => 'Enable Comments',
        'TOPLIST_ADMIN_ENABLE_COMMENTS_EXPLAIN' => 'Enables or disables the comments on sites. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Comments">this page</a>.',
        'TOPLIST_ADMIN_ENABLE_SITE_THUMBNAILS' => 'Enable Site Thumbnails',
        'TOPLIST_ADMIN_ENABLE_SITE_THUMBNAILS_EXPLAIN' => 'Enables or disables the thumbnails of sites. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Thumbnails">this page</a>.',
        'TOPLIST_ADMIN_ENABLE_PAGENATION' => 'Enable Pagenation',
        'TOPLIST_ADMIN_ENABLE_PAGENATION_EXPLAIN' => 'Enables or disables the pagenation to spread the list over more then 2 pages. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pagenation">this page</a>.',
        'TOPLIST_ADMIN_SITES_PER_PAGE' => 'Sites Per Page',
        'TOPLIST_ADMIN_SITES_PER_PAGE_EXPLAIN' => 'Number sites per page for pagenation. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pagenation">this page</a>.',
        'TOPLIST_ADMIN_ANTI_FLOOD_WAIT_TIME' => 'Anti-Flood wait time',
        'TOPLIST_ADMIN_ANTI_FLOOD_WAIT_TIME_EXPLAIN' => 'A visitor can\'t generate a \'hit\' within the number of secconds entered below when he allready generated one.<br /><i>Note: Entering text or 0 will result in disabling of the anti-flood mechanism!!! For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Anti_Flood">this page</a>.',
        'TOPLIST_ADMIN_ENABLE_HITS_IN' => 'Enable Hits In',
        'TOPLIST_ADMIN_ENABLE_HITS_OUT' => 'Enable Hits Out',
        'TOPLIST_ADMIN_ENABLE_HITS_IMAGE' => 'Enable Image Hits',
        'TOPLIST_ADMIN_ENABLE_PR' => 'Enable Google Pagerank',
        'TOPLIST_ADMIN_ENABLE_REFRESH' => 'Enable List Refresh',
        'TOPLIST_ADMIN_ENABLE_REFRESH_EXPLAIN' => 'Refresh the Toplist once in a while',
        'TOPLIST_ADMIN_REFRESH_TIME' => 'List Refresh Timer (In Secconds)',
        'TOPLIST_ADMIN_REFRESH_TIME_EXPLAIN' => 'Time in secconds between refreshes',
        'TOPLIST_ADMIN_ENABLE_ALEXA' => 'Enable Alexa Rank',
        'TOPLIST_ADMIN_ENABLE_HITS_IN_EXPLAIN' => 'Proccess and display in hits.',
        'TOPLIST_ADMIN_ENABLE_HITS_OUT_EXPLAIN' => 'Proccess and display out hits.',
        'TOPLIST_ADMIN_ENABLE_HITS_IMAGE_EXPLAIN' => 'Proccess and display image views.',
        'TOPLIST_ADMIN_ENABLE_PR_EXPLAIN' => 'Proccess Google Pagerank.',
        'TOPLIST_ADMIN_ENABLE_ALEXA_EXPLAIN' => 'Proccess Alexa Rank.',
        'TOPLIST_ADMIN_BANNER_WIDTH' => 'Maximum Banner Width',
        'TOPLIST_ADMIN_BANNER_HEIGHT' => 'Maximum Banner Height',
        'TOPLIST_ADMIN_BANNER_RESIZE' => 'Resize Banner',
        'TOPLIST_ADMIN_BANNER_WIDTH_EXPLAIN' => 'Maximum banner width if the banner is bigger then this value it will be resized or not displayed depending on the banner resize settings. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Banner_Resize">this page</a>.',
        'TOPLIST_ADMIN_BANNER_HEIGHT_EXPLAIN' => 'Maximum banner height if the banner is bigger then this value it will be resized or not displayed depending on the banner resize settings. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Banner_Resize">this page</a>.',
        'TOPLIST_ADMIN_BANNER_RESIZE_EXPLAIN' => 'Resize banner if the width or height of the banner is more then the maximum specified below. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Banner_Resize">this page</a>.',
        'TOPLIST_ADMIN_IN_HITS_WEIGHT' => 'In Hits Weight',
        'TOPLIST_ADMIN_OUT_HITS_WEIGHT' => 'Out Hits Weight',
        'TOPLIST_ADMIN_IMG_HITS_WEIGHT' => 'Image Shows Weight',
        'TOPLIST_ADMIN_RATING_WEIGHT' => 'Rating Weight',
        'TOPLIST_ADMIN_PR_WEIGHT' => 'Google Pagerank Weight',
        'TOPLIST_ADMIN_ALEXA_WEIGHT' => 'Alexa Rank Weight',
        'TOPLIST_ADMIN_IN_HITS_WEIGHT_EXPLAIN' => 'Changing this settings allows you to tweak with the order in which sites are displayed. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">this page</a>.',
        'TOPLIST_ADMIN_OUT_HITS_WEIGHT_EXPLAIN' => 'Changing this settings allows you to tweak with the order in which sites are displayed. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">this page</a>.',
        'TOPLIST_ADMIN_IMG_HITS_WEIGHT_EXPLAIN' => 'Changing this settings allows you to tweak with the order in which sites are displayed. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">this page</a>.',
        'TOPLIST_ADMIN_RATING_WEIGHT_EXPLAIN' => 'Changing this settings allows you to tweak with the order in which sites are displayed. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">this page</a>.',
        'TOPLIST_ADMIN_PR_WEIGHT_EXPLAIN' => 'Changing this settings allows you to tweak with the order in which sites are displayed. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">this page</a>.',
        'TOPLIST_ADMIN_ALEXA_WEIGHT_EXPLAIN' => 'Changing this settings allows you to tweak with the order in which sites are displayed. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">this page</a>.',
        'TOPLIST_ADMIN_SITE_OF_THE_MOMENT' => 'Site of the Moment',
        'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_LENGTH' => 'Site of the Moment Length',
        'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_EXPLAIN' => 'Shows a random picked website on top of the toplist featuring as Site of the Moment. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Site_of_the_Moment">this page</a>.',
        'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_LENGTH_EXPLAIN' => 'Amount of time (in seconds) the site of the moment is shown.',
        'TOPLIST_ADMIN_IMAGE_CACHE_DAYS' => 'Image Cache Time (in days)',
        'TOPLIST_ADMIN_IMAGE_CACHE_DAYS_EXPLAIN' => 'The duration images are cached for. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Cache">this page</a>.',
        'TOPLIST_ADMIN_CHECK_CODE' => 'Check code on listed sites',
        'TOPLIST_ADMIN_CHECK_CODE_EXPLAIN' => 'Enables the remote checking of the toplist code on the listed site. This to ensure that the listed are giving you a link back. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Code_Check">this page</a>.',
        'TOPLIST_ADMIN_CHECK_CODE_TIME' => 'Time interval for check code cron',
        'TOPLIST_ADMIN_CHECK_CODE_TIME_EXPLAIN' => 'Enables the remote checking of the toplist code on the listed site. This to ensure that the listed are giving you a link back. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Code_Check">this page</a>.',
        'TOPLIST_EDIT_ERROR' => 'Make sure you fill this field out correctly.',
        'TOPLIST_EDIT_ERROR_SITE' => 'You cannot add the same site twice.',
        'TOPLIST_ADMIN_ENABLE_CACHE' => 'Enable SQL Cache',
        'TOPLIST_ADMIN_ENABLE_CACHE_EXPLAIN' => 'Caches several heavy SQL queries. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Cache">this page</a>',
        'TOPLIST_ADMIN_ENABLE_CACHE_TIME' => 'Enable SQL Cache Length',
        'TOPLIST_ADMIN_ENABLE_CACHE_TIME_EXPLAIN' => 'The length in secconds to cache a SQL query. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Cache">this page</a>',
        'TOPLIST_ADMIN_ENABLE_CACHE_CLEAR' => 'Enable SQL Cache Clear',
        'TOPLIST_ADMIN_ENABLE_CACHE_CLEAR_EXPLAIN' => 'When enabled clears cache for the updated tables. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Cache">this page</a>',
        'ACP_TOPLIST' => 'Toplist MOD',
        'ACP_TOPLIST_SETTINGS' => 'Configuration',
        'ACP_TOPLIST_SETTINGS_EXPLAIN' => 'Here you can determine the basic operation of your toplist, site it up wisely and beware of cheaters!',
        'ACP_TOPLIST_POINTSMODS' => 'Points Mods',
        'ACP_TOPLIST_BASIC' => 'Basic',
        'ACP_TOPLIST_CACHE' => 'Cache',
        'ACP_TOPLIST_ANTICHEAT' => 'Anti-Cheat',
        'ACP_TOPLIST_WEIGHT' => 'Weight',
        'ACP_TOPLIST_SITEOFTHEMOMENT' => 'Site of the Moment',
        'ACP_TOPLIST_BANNERRESIZE' => 'Banner Resize',
        'TOPLIST_ADMIN_POINTS_ENABLE' => 'Enabled Points Mod Support',
        'TOPLIST_ADMIN_POINTS_PER_ADD' => 'Amount per Added site',
        'TOPLIST_ADMIN_POINTS_PER_EDIT' => 'Amount per site Edit',
        'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_VISITOR' => 'Amount per image hit (visitor)',
        'TOPLIST_ADMIN_POINTS_PER_IN_HIT_VISITOR' => 'Amount per in hit (visitor)',
        'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_VISITOR' => 'Amount per out hit (visitor)',
        'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_OWNER' => 'Amount per image hit (owner)',
        'TOPLIST_ADMIN_POINTS_PER_IN_HIT_OWNER' => 'Amount per in hit (owner)',
        'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_OWNER' => 'Amount per out hit (owner)',
        'TOPLIST_ADMIN_POINTS_PER_RATE' => 'Amount per rate',
        'TOPLIST_ADMIN_POINTS_PER_COMMENT' => 'Amount per comment',
        'TOPLIST_ADMIN_POINTS_ENABLE_EXPLAIN' => 'Enables awarding of points for certain actions',
        'TOPLIST_ADMIN_POINTS_PER_ADD_EXPLAIN' => 'Adds the specified amount of points for adding a site. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_POINTS_PER_EDIT_EXPLAIN' => 'Adds the specified amount of points for editing a site. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_VISITOR_EXPLAIN' => 'Adds the specified amount of points per image hit for the specific site to the site visitor. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_POINTS_PER_IN_HIT_VISITOR_EXPLAIN' => 'Adds the specified amount of points per in hit for the specific site to the site visitor. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_VISITOR_EXPLAIN' => 'Adds the specified amount of points per out hit for the specific site to the site visitor. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_OWNER_EXPLAIN' => 'Adds the specified amount of points per image hit for the specific site to the site owner. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_POINTS_PER_IN_HIT_OWNER_EXPLAIN' => 'Adds the specified amount of points per in hit for the specific site to the site owner. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_OWNER_EXPLAIN' => 'Adds the specified amount of points per out hit for the specific site to the site owner. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_POINTS_PER_RATE_EXPLAIN' => 'Adds the specified amount of points for rating a site. Please note that points are only awarded the first time someone rates the specific site. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_POINTS_PER_COMMENT_EXPLAIN' => 'Adds the specified amount of points for commenting a site. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">this page</a>',
        'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_INDEX' => 'Site of the Moment on the Index',
        'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_INDEX_EXPLAIN' => 'Shows the site of the moment on the index of the forums. For more information check out <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Site_of_the_Moment">this page</a>.',
        'TOPLIST_VOTE_FOR_SITE' => 'Vote for this site',
        'TOPLIST_ADMIN_CREDITS' => 'Show Credits',
        'TOPLIST_ADMIN_CREDITS_EXPLAIN' => 'Show credits on pages where the Toplist MOD has been loaded.',
        'TOPLIST_VERSION_CHECK' => 'Version Check',
        'TOPLIST_VERSION_CHECK_EXPLAIN' => 'Checks to see if the version of the Toplist MOD you are currently running is up to date.',
        'TOPLIST_VERSION_UP_TO_DATE_ACP' => 'Toplist MOD Up to date',
        'TOPLIST_VERSION_NOT_UP_TO_DATE_ACP' => 'Toplist MOD not up to date',
        'TOPLIST_CURRENT_VERSION' => 'Current Installed Version',
        'TOPLIST_LATEST_VERSION' => 'Latest Available Version',
        'TOPLIST_UPDATE_INSTRUCTIONS_INCOMPLETE' => '

		<h1>Incomplete update detected</h1>

		<p>phpBB detected an incomplete automatic update. Please make sure you followed every step within the automatic update tool. Below you will find the link again, or go directly to your install directory.</p>
	',
        'TOPLIST_UPDATE_INSTRUCTIONS' => '

		<h1>Release announcement</h1>

		<p>Please read <a href="%1$s" title="%1$s"><strong>the release announcement for the latest version</strong></a> before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation with the Automatic Update Package</h1>

		<p>The recommended way of updating your installation listed here is only valid for the automatic update package. You are also able to update your installation using the methods listed within the INSTALL.html document. The steps for updating phpBB3 automatically are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="%1$s" title="%1$s"><strong>the release announcement</strong></a> and download the "Automatic Update Package" archive.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the complete uncompressed install folder to your phpBB root directory (where your config.php file is).<br /><br /></li>
		</ul>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now present.<br /><br />
		<strong><a href="%2$s" title="%2$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified once the update is complete.
		</p>
	',
        'TOPLIST_ADMIN_ENABLE_SCORE' => 'Show score',
        'TOPLIST_ADMIN_ENABLE_SCORE_EXPLAIN' => 'Show the calculated score used to rank the sites',
        'TOPLIST_ADMIN_SHOW_DISABLED' => 'Show disabled sites',
        'TOPLIST_ADMIN_SHOW_DISABLED_EXPLAIN' => 'Shows the disabled sites but ranks the sites that are enabled first and then the disabled sites',
        'TOPLIST_SCORE' => 'Score',
        'TOPLIST_CHECK_CODE_DONE' => 'Site checked for toplist code. Status has been updated.',
        'TOPLIST_PLAIN' => 'Plain',
        'TOPLIST_GD_OPTIONS' => 'GD Images with rank',
        'TOPLIST_CODE_DP' => 'Code:',
        'TOPLIST_SITE_DISABLED' => 'Disabled because the required toplist code was not found on your site!',
        'TOPLIST_RATING_UPDATED' => 'Rating updated',
        'TOPLIST_SUBJECT' => 'Subject:',
        'TOPLIST_MESSAGE' => 'Message:',
        'TOPLIST_POST_COMMENT' => 'Post a comment',
        'ACP_TOPLIST_UPDATE' => 'Update Notification',
        'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK' => 'Send email on security updates',
        'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK_EXPLAIN' => 'Sends an email out to all the board administrators on a security update for this mod. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Update_Notification">this page</a>',
        'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK_SECURITY' => 'Send update email on normal updates',
        'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK_SECURITY_EXPLAIN' => 'Also send an email out when the update is a regular update. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Update_Notification">this page</a>',
        'ACP_TOPLIST_ADMIN_HELP' => 'Help',
        'TOPLIST_ADMIN_HELP_ENABLE' => 'Show help box above toplist',
        'TOPLIST_ADMIN_HELP_ENABLE_EXPLAIN' => 'Enabling this feature shows a box with help text depending on the features you enabled above the toplist. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Help">this page</a>',
        'TOPLIST_ADMIN_HELP_CUSTOM_ENABLE' => 'User custom text',
        'TOPLIST_ADMIN_HELP_CUSTOM_ENABLE_EXPLAIN' => 'Enabling this feature tells the toplist to use a lang index defined in the toplist lang file rather then the automaticly generated text. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Help">this page</a>',
        'TOPLIST_ADMIN_HELP_CUSTOM_LANGINDEX' => 'Lang index',
        'TOPLIST_ADMIN_HELP_CUSTOM_LANGINDEX_EXPLAIN' => 'Specify the lang index used by the toplist to display the custom help text. For more information check <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Help">this page</a>',
        'TOPLIST_INFORMATION' => 'Toplist Information',
        'TOPLIST_HELP_INTRO' => 'The toplist is a ranked list of usersubmitted sites.',
        'TOPLIST_HELP_DESC_START' => 'The list is ranked by a score calculated and order by the site name',
        'TOPLIST_HELP_DESC_HITS_FROM_SITES' => ', hits from sites',
        'TOPLIST_HELP_DESC_HITS_TO_SITES' => ', hits to sites',
        'TOPLIST_HELP_DESC_IMAGE_SHOWS' => ', image shows',
        'TOPLIST_HELP_DESC_RATING' => ', rating',
        'TOPLIST_HELP_DESC_END' => '.',
        'TOPLIST_HELP_LNKEXCH_START' => 'Users can add their sites and add the supplied code',
        'TOPLIST_HELP_LNKEXCH_CODECHECK' => ', the site is checked once in a while for the code and will be disabled if it isn\'t found,',
        'TOPLIST_HELP_LNKEXCH_END' => ' for a link exchange.',
        'TOPLIST_HELP_COMMENTS' => 'Users can post comments about a site when they click through to the vote page.',
        'TOPLIST_MOBILE_COMMENTS' => 'Post made via Mobile Device',
        'TOPLIST_COMMENT_SEND' => 'Send comment',
        'TOPLIST_COMMENT_PREVIEW' => 'Preview comment',
        'TOPLIST_EDIT_WEBSITE_SHORT' => 'Save changes',
        'TOPLIST_ADD_WEBSITE_SHORT' => 'Add Website now',
        'TOPLIST_NORMAL_IMAGE_DESC' => '<strong>Preview:</strong> Here you see the Toplist-Image for your Website.',
        'TOPLIST_GD_IMAGE_DESC' => '<strong>Preview:</strong> Here you see the Toplist-Image with Ranking for your Website.',
        '' => '',
));

// Custom help text
$lang = array_merge($lang, array(
        'TOPLIST_CUSTOM_HELP' => 'Enter your own custom help text in lang/en/mods/toplist.php at the end of the file (search for this text ;)).',
));

?>