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
* ht_portal Class
*/
class ht_portal {
	/**
	* get_tpl
	*/
	function get_tpl() {
		global $config, $phpbb_admin_path, $phpbb_seo;
		$htaccess_tpl = '';
		$htaccess = array();
		$htaccess_tpl .= '<b style="color:blue">#####################################################' . "\n";
		$htaccess_tpl .= '<b style="color:blue"># BEGIN PORTALXL' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}portal\.html$ {DEFAULT_SLASH}{PHPBB_RPATH}portal.{PHP_EX} [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}portal-([0-9]+)\.html$ {DEFAULT_SLASH}{PHPBB_RPATH}portal.{PHP_EX}?start=$1 [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}calendar\.html$ {DEFAULT_SLASH}{PHPBB_RPATH}calendar.{PHP_EX} [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}downloads\.html$ {DEFAULT_SLASH}{PHPBB_RPATH}downloads.{PHP_EX} [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:green">RewriteRule</b> ^{WIERD_SLASH}{PHPBB_LPATH}arcade\.html$ {DEFAULT_SLASH}{PHPBB_RPATH}arcade.{PHP_EX} [QSA,L,NC]' . "\n";
		$htaccess_tpl .= '<b style="color:blue"># END PORTALXL' . "\n";
		$htaccess_tpl .= '#####################################################</b>' . "\n";
		$htaccess['pos1'] = $htaccess_tpl;
		return !empty($htaccess['pos1']) ? $htaccess : false;
	}
}
?>
