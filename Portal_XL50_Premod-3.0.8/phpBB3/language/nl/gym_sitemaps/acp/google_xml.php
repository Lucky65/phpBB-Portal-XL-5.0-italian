<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $id: google_xml.php - 5441 11-20-2008 14:38:27 - 2.0.RC1 dcz $
* @copyright (c) 2006 - 2008 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* google_xml [English]
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'GOOGLE_XML' => 'XML Sitemap',
	'GOOGLE_XML_EXPLAIN' => 'These are the parameter for the XML Google sitemap module. It can fully integrate URL list from a xml file (on url per line) in GYM sitemaps and take advantage of all the module’s features such as XSLt styling and caching.<br/> Some settings can be overridden depending on the Google sitemaps and main override settings.<br/>Each xml file added in the gym_sitemaps/sources/ directory will be taken into account once you will have cleared the module ACP cache, using the maintenance link above.<br/> Each URL list xml file must be composed of one full URL per line and will have to follow a basic pattern for file naming : <b>google_</b>xml_file_name<b>.xml</b>.<br />An entry will be created in the SitemapIndex with URL <b>example.com/sitemap.php?xml=xml_file_name</b> or <b>example.com/xml-xml_file_name.xml</b> when url rewritten.<br/> The name of the source file must must use alphanumerical characters (0-9a-z) plus both separators "_" and "-".<p>You can as well use a full sitemap URL generated by an external application, by configuring the gym_sitemaps/sources/xml_google_external.php file (Read comments in the file for more details).</p><u style="color:red;">Note :</u><br/> It is advised to cache this module’s sitemaps to prevent useless parsing of potentially big xml files.',
	// Main
	'GOOGLE_XML_CONFIG' => 'XML Sitemap settings',
	'GOOGLE_XML_CONFIG_EXPLAIN' => 'Some settings can be overridden depending on the Google sitemaps and main override settings.',
	'GOOGLE_XML_RANDOMIZE' => 'Randomize',
	'GOOGLE_XML_RANDOMIZE_EXPLAIN' => 'You can randomize URLs grabbed from the xml file. Changing the order on a regular basis may help for crawling a bit. This option is as well handy for example when you would limit the urls to 1000 for this module and use xml source files with 5000 urls, in such cases all the 5000 URLs will be regularly  displayed on the corresponding sitemap.<br/><u>Note :</u><br/>This option requires a full parsing of the source file, it is advised to use it when caching is activated.',
	'GOOGLE_XML_UNIQUE' => 'Check duplicate',
	'GOOGLE_XML_UNIQUE_EXPLAIN' => 'Activate to make sure that if some URL appear more than one time in the xml source, it will only display once in the sitemap.<br/><u>Note :</u><br/>This option requires a full parsing of the source file, it is advised to use it when caching is activated.',
	'GOOGLE_XML_FORCE_LASTMOD' => 'Last modification',
	'GOOGLE_XML_FORCE_LASTMOD_EXPLAIN' => 'You can force a last modification time based on the cache duration cycle (even if cache is not activated) for all URLs in the sitemap. The module will as well compute priorities and change frequencies based on this last mod time. Else the eventual lastmod, changefreq and priority tags provided in the xml source file will be used, or no lastmod tags in case the source file doe not provide with any.<br/><u>Note :</u><br/>This option requires a full parsing of the source file, it is advised to use it when caching is activated.',
	'GOOGLE_XML_FORCE_LIMIT' => 'Forcer limit',
	'GOOGLE_XML_FORCE_LIMIT_EXPLAIN' => 'You can here make sure that no more than the maximum amount of URL set will be displayed in the sitemap.<br/><u>Note :</u><br/>This option requires a full parsing of the source file, it is advised to use it when caching is activated.',
	// Reset settings
	'GOOGLE_XML_RESET' => 'XML Sitemaps Module',
	'GOOGLE_XML_RESET_EXPLAIN' => 'Reset to default all the options in the "XML Sitemap settings" (main) tab of the XML Sitemap module.',
	'GOOGLE_XML_MAIN_RESET' => 'XML Sitemap Settings',
	'GOOGLE_XML_MAIN_RESET_EXPLAIN' => 'Reset to default all the options in the "XML Sitemap settings" (main) tab of the XML Sitemap module.',
	'GOOGLE_XML_CACHE_RESET' => 'XML Sitemaps Cache',
	'GOOGLE_XML_CACHE_RESET_EXPLAIN' => 'Reset to default all the caching options of the XML Sitemap module.',
	'GOOGLE_XML_GZIP_RESET' => 'XML Sitemaps Gunzip',
	'GOOGLE_XML_GZIP_RESET_EXPLAIN' => 'Reset to default all the Gunzip options of the XML Sitemap module.',
	'GOOGLE_XML_LIMIT_RESET' => 'XML Sitemap Limit',
	'GOOGLE_XML_LIMIT_RESET_EXPLAIN' => 'Reset to default all the Limit options of the XML Sitemap module.',
));
?>