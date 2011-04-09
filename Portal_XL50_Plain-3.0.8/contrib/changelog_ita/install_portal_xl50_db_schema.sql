# Table: 'phpbb_portal_acronyms'
CREATE TABLE phpbb_portal_acronyms (
  acronym_id mediumint(9) NOT NULL auto_increment,
  acronym varchar(80) binary NOT NULL default '',
  description varchar(255) binary NOT NULL default '',
  acronym_url varchar(150) NOT NULL default '',
  PRIMARY KEY  (acronym_id)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_banners_ho'
CREATE TABLE phpbb_portal_banners_ho (
  banners_id smallint(5) unsigned NOT NULL auto_increment,
  banners_url varchar(255) binary NOT NULL,
  banners_img_hor varchar(255) binary NOT NULL,
  banners_description varchar(255) binary default NULL,
  PRIMARY KEY  (banners_id)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_banners_ve'
CREATE TABLE phpbb_portal_banners_ve (
  banners_id smallint(5) unsigned NOT NULL auto_increment,
  banners_url varchar(255) binary NOT NULL,
  banners_img_ver varchar(255) binary NOT NULL,
  banners_description varchar(255) binary default NULL,
  PRIMARY KEY  (banners_id)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_block'
CREATE TABLE phpbb_portal_block (
  block_id mediumint(8) unsigned NOT NULL auto_increment,
  block_index tinyint(1) NOT NULL default '0',
  block_edit mediumint(8) unsigned NOT NULL default '0',
  block_name varchar(255) binary NOT NULL default '',
  block_alias varchar(255) binary NOT NULL default '',
  block_disable mediumint(8) unsigned NOT NULL default '0',
  block_order tinyint(8) unsigned default NULL,
  block_position char(2) binary NOT NULL default '',
  block_last_position char(2) binary NOT NULL default '',
  block_view varchar(20) binary NOT NULL default '0',
  block_img varchar(150) binary NOT NULL,
  block_content text,
  PRIMARY KEY  (block_id,block_index),
  KEY config_value (block_order)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_block_index'
CREATE TABLE phpbb_portal_block_index (
  block_id mediumint(8) unsigned NOT NULL auto_increment,
  block_index tinyint(1) NOT NULL default '0',
  block_edit mediumint(8) unsigned NOT NULL default '0',
  block_name varchar(255) binary NOT NULL default '',
  block_alias varchar(255) binary NOT NULL default '',
  block_disable mediumint(8) unsigned NOT NULL default '0',
  block_order tinyint(8) unsigned default NULL,
  block_position char(2) binary NOT NULL default '',
  block_last_position char(2) binary NOT NULL default '',
  block_view varchar(20) binary NOT NULL default '0',
  block_img varchar(150) binary NOT NULL,
  block_content text,
  PRIMARY KEY  (block_id,block_index),
  KEY config_value (block_order)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_config'
CREATE TABLE phpbb_portal_config (
  config_name varchar(255) binary NOT NULL default '',
  config_value text NOT NULL,
  is_dynamic tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (config_name),
  KEY is_dynamic (is_dynamic)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_forumadds'
CREATE TABLE phpbb_portal_forumadds (
  adds_id int(11) NOT NULL auto_increment,
  adds_name varchar(255) binary NOT NULL,
  adds_code text NOT NULL,
  adds_show_forums int(11) NOT NULL default '0',
  adds_show_all_forums int(11) NOT NULL default '0',
  adds_active int(11) NOT NULL default '0',
  adds_views int(11) NOT NULL default '0',
  adds_max_views int(11) NOT NULL default '0',
  adds_position int(11) NOT NULL default '0',
  PRIMARY KEY  (adds_id)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_links'
CREATE TABLE phpbb_portal_links (
  links_id mediumint(8) unsigned NOT NULL auto_increment,
  links_img varchar(150) binary NOT NULL default '',
  links_name varchar(150) binary NOT NULL default '',
  links_url varchar(150) binary NOT NULL default '',
  links_view varchar(20) binary NOT NULL default '',
  links_order mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (links_id),
  KEY links_order (links_order)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_menu'
CREATE TABLE phpbb_portal_menu (
  menu_id mediumint(8) unsigned NOT NULL auto_increment,
  menu_img varchar(150) binary NOT NULL default '',
  menu_name varchar(150) binary NOT NULL default '',
  menu_url varchar(150) binary NOT NULL default '',
  menu_view varchar(20) binary NOT NULL default '',
  menu_order mediumint(8) unsigned NOT NULL default '0',
  menu_open mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (menu_id),
  KEY menu_order (menu_order)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_mods'
CREATE TABLE phpbb_portal_mods (
  mod_id smallint(5) unsigned NOT NULL auto_increment,
  mod_title varchar(50) binary NOT NULL,
  mod_version varchar(10) binary NOT NULL,
  mod_version_type varchar(10) binary NOT NULL,
  mod_desc text,
  mod_url varchar(100) binary default NULL,
  mod_author varchar(50) binary default NULL,
  mod_download varchar(255) binary default NULL,
  PRIMARY KEY  (mod_id)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_newsfeeds'
CREATE TABLE phpbb_portal_newsfeeds (
  feed_id mediumint(8) NOT NULL auto_increment,
  feed_title varchar(255) binary NOT NULL default '',
  feed_show tinyint(1) NOT NULL default '1',
  feed_url text NOT NULL,
  feed_position tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (feed_id)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_pages'
CREATE TABLE phpbb_portal_pages (
  page_id mediumint(8) NOT NULL auto_increment,
  page_index tinyint(1) NOT NULL default '0',
  page_edit mediumint(8) unsigned NOT NULL default '0',
  page_title varchar(255) binary NOT NULL default '',
  page_alias varchar(255) binary NOT NULL default '',
  page_disable mediumint(8) unsigned NOT NULL default '0',
  page_order tinyint(8) unsigned default NULL,
  page_position char(2) binary NOT NULL default '',
  page_last_position char(2) binary NOT NULL default '',
  page_view varchar(20) binary NOT NULL default '0',
  page_img varchar(150) binary NOT NULL,
  page_content text,
  enable_bbcode tinyint(1) unsigned NOT NULL default '1',
  enable_smilies tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (page_id,page_index),
  KEY config_value (page_order)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_partners'
CREATE TABLE phpbb_portal_partners (
  partners_id smallint(5) unsigned NOT NULL auto_increment,
  partners_url varchar(255) binary NOT NULL,
  partners_img varchar(255) binary NOT NULL,
  partners_description varchar(255) binary default NULL,
  PRIMARY KEY  (partners_id)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

# Table 'phpbb_portal_quote'
CREATE TABLE phpbb_portal_quote (
  quote_id smallint(5) unsigned NOT NULL auto_increment,
  quote text NOT NULL,
  quote_author varchar(150) binary NOT NULL,
  PRIMARY KEY  (quote_id)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;

