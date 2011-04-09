<?php
/**
* @package SEO URL User blog MOD
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB')) {
	exit;
}
/**
* ht_blog Class
*/
class ht_blog {
	/**
	* get_tpl
	*/
	function get_tpl() {
		global $config, $phpbb_admin_path, $phpbb_seo;
		$htaccess_tpl = '';
		$htaccess = array();
		$htaccess_tpl .= '<b style="color:blue">#####################################################' . "\n";
		$htaccess_tpl .= '<b style="color:blue"># BEGIN USER BLOG MOD</b>' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}blog/(.+)/(.+)\.html$ {DEFAULT_SLASH}{PHPBB_RPATH}blog/view/blog.php?page=$1&mode=$2 [QSA,L,NC]' . "\n";
		$htaccessn_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}blog/(.+)\.html$ {DEFAULT_SLASH}{PHPBB_RPATH}blog/blog.php?page=$1 [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}blog/(.+)/$ {DEFAULT_SLASH}{PHPBB_RPATH}blog/view/blog.php?page=$1 [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}blog/$ {DEFAULT_SLASH}{PHPBB_RPATH}blog/blog.php [QSA,L,NC]' . "\n\n";
		$htaccess_tpl .= '<b style="color:green">RewriteCond</b> %{REQUEST_FILENAME} !-f</b>' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}blog/(.+)/(.+)$ {DEFAULT_SLASH}{PHPBB_RPATH}blog/view/blog.php?page=$1&mode=$2 [QSA,L,NC]' . "\n\n";
		$htaccess_tpl .= '<b style="color:green">RewriteCond</b> %{REQUEST_FILENAME} !-f</b>' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}blog/(.+)$ {DEFAULT_SLASH}{PHPBB_RPATH}blog/blog.php?page=$1 [QSA,L,NC]' . "\n\n";
		$htaccess_tpl .= '<b style="color:blue"># USER BLOG MOD ATTACHMENTS/PROFILE AVATAR FIX</b>' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}blog/(.+)/(.+)_id-([0-9]+)\.html/(.+)$ {DEFAULT_SLASH}{PHPBB_RPATH}blog/view/blog.php?page=$1&mode=$2&id=$3/$4 [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}blog/images/avatars/no_avatar\.png$ {DEFAULT_SLASH}{PHPBB_RPATH}images/avatars/no_avatar.png [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}blog/(.+)/images/avatars/no_avatar\.png$ {DEFAULT_SLASH}{PHPBB_RPATH}images/avatars/no_avatar.png [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:blue"># END USER BLOG MOD</b>' . "\n";
		$htaccess_tpl .= '#####################################################</b>' . "\n";
		$htaccess['pos1'] = $htaccess_tpl;
		return !empty($htaccess['pos1']) ? $htaccess : false;
	}
}
?>
