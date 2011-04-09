UPDATE phpbb_portal_config SET config_value = 'Premod 0.3' WHERE config_name = 'portal_version';


UPDATE phpbb_portal_config SET `config_value` = '1' WHERE CONVERT( `phpbb_portal_config`.`config_name` USING utf8 ) = 'portal_show_thanks' LIMIT 1 ;
UPDATE phpbb_portal_config SET `config_value` = '1' WHERE CONVERT( `phpbb_portal_config`.`config_name` USING utf8 ) = 'portal_pages_page' LIMIT 1 ;
UPDATE phpbb_portal_config SET `config_value` = '4' WHERE CONVERT( `phpbb_portal_config`.`config_name` USING utf8 ) = 'portal_pages_page_number' LIMIT 1 ;


UPDATE phpbb_config SET is_dynamic = 0 WHERE config_name = 'board_dst';   
ALTER TABLE phpbb_users CHANGE user_timezone user_timezone VARCHAR( 255 ) NOT NULL;
UPDATE phpbb_users SET user_dst = 0 WHERE user_dst = 2;

UPDATE phpbb_portal_mods SET mod_version = '2.0.2', mod_desc = 'Consente agli utenti di scegliere l\'ora legale (DST) automaticamente, invece di impostarla due volte all\'anno. La base di questo adeguamento &egrave data dalle impostazioni del server web. La nuova versione introduce i fusi orari basati sulle citt&agrave' WHERE phpbb_portal_mods.mod_id =57;


DELETE FROM phpbb_config WHERE (phpbb_config . config_name ) = 'wpm_enable';
DELETE FROM phpbb_config WHERE (phpbb_config . config_name ) = 'wpm_send_id';
DELETE FROM phpbb_config WHERE (phpbb_config . config_name ) = 'wpm_subject';
DELETE FROM phpbb_config WHERE (phpbb_config . config_name ) = 'wpm_message';
DELETE FROM phpbb_config WHERE (phpbb_config . config_name ) = 'wpm_preview';
DELETE FROM phpbb_config WHERE (phpbb_config . config_name ) = 'wpm_variables';


DROP TABLE IF EXISTS phpbb_wpm;
CREATE TABLE phpbb_wpm (
  wpm_config_id int(3) NOT NULL,
  wpm_enable tinyint(1) unsigned NOT NULL,
  wpm_send_id mediumint(8) NOT NULL,
  wpm_preview tinyint(1) unsigned NOT NULL,
  wpm_variables varchar(255) binary NOT NULL,
  wpm_subject varchar(100) binary NOT NULL,
  wpm_message mediumtext NOT NULL,
  wpm_version varchar(255) binary NOT NULL,
  PRIMARY KEY (wpm_config_id)
) CHARACTER SET utf8 COLLATE utf8_bin;

INSERT INTO phpbb_wpm (wpm_config_id, wpm_enable, wpm_send_id, wpm_preview, wpm_variables, wpm_subject, wpm_message, wpm_version) VALUES(1, 1, 2, 0, '', 'Benvenuto su {SITE_NAME}!', 'Ciao, [b]{USERNAME}[/b]!\n\nBenvenuto su {SITE_NAME}	({SITE_DESC})\n\nTi sei registrato il [b]{USER_REGDATE}[/b]. Secondo le tue istruzioni, la tua email &egrave [b]{USER_EMAIL}[/b], hai il seguente fuso orario [b]{USER_TZ}[/b]. E\' piacevole sapere che parli la lingua {USER_LANG_LOCAL}.\n\nSe vuoi puoi contattarci a questo link : {BOARD_CONTACT} o qui: {BOARD_EMAIL}, scegli quello che preferisci. Grazie per la scelta.\n\n-Grazie per la tua registrazione su {SITE_NAME}!\n\nGrazie, {SENDER}', '2.2.5');
     
UPDATE phpbb_portal_mods SET mod_version = '2.2.5', mod_url = 'http://www.phpbb.com/community/viewtopic.php?f=69&t=573016', mod_download = 'http://www.phpbb.com/community/viewtopic.php?f=69&t=573016', mod_author = '..::Frans::..' WHERE phpbb_portal_mods.mod_id =50;
UPDATE `phpbb_portal_mods` SET `mod_version` = '2.2.5',`mod_author` = '..::Frans::..' WHERE `phpbb_portal_mods`.`mod_id` =51 LIMIT 1 ;
    

DROP TABLE IF EXISTS phpbb_toplist;
CREATE TABLE phpbb_toplist (
  id int(32) NOT NULL AUTO_INCREMENT,
  in_hits int(32) NOT NULL DEFAULT '0',
  out_hits int(32) NOT NULL DEFAULT '0',
  image_hits int(32) NOT NULL DEFAULT '0',
  pr int(1) NOT NULL DEFAULT '0',
  alexa int(32) NOT NULL DEFAULT '0',
  owner int(32) NOT NULL DEFAULT '0',
  image varchar(255) binary NOT NULL DEFAULT '',
  image_type varchar(255) binary NOT NULL DEFAULT '',
  ip varchar(255) binary NOT NULL DEFAULT '',
  site_name varchar(255) binary NOT NULL DEFAULT '',
  site_info text NOT NULL,
  site_banner varchar(255) binary NOT NULL DEFAULT '',
  site_url varchar(255) binary NOT NULL DEFAULT '',
  enabled int(1) NOT NULL DEFAULT '1',
  show_banner int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (id),
  KEY id (id)
) CHARACTER SET utf8 COLLATE utf8_bin;

INSERT INTO phpbb_toplist (id, in_hits, out_hits, image_hits, pr, alexa, owner, image, image_type, ip, site_name, site_info, site_banner, site_url, enabled, show_banner) VALUES(6, 0, 13, 0, 1, 0, 2, 'banner3.jpg', '0', '82.95.242.37', 'Portal XL', 'Portal XL 5.0 Plain ~ Your insane crazy ass-kicking portal system for use with phpBB 3.0.x', 'http://damysterious.xs4all.nl/stylebase_premod/portal/images/banners/400x60/damysterious.xs4all.nl.jpg', 'http://damysterious.xs4all.nl/portalxl/', 1, 0);

DROP TABLE IF EXISTS phpbb_toplist_comments;
CREATE TABLE phpbb_toplist_comments (
  id int(32) NOT NULL AUTO_INCREMENT,
  poster int(32) NOT NULL DEFAULT '0',
  time int(32) NOT NULL DEFAULT '0',
  bbuid varchar(255) binary NOT NULL DEFAULT '',
  bbbitfield varchar(255) binary NOT NULL DEFAULT '',
  subject varchar(255) binary NOT NULL DEFAULT '',
  message text NOT NULL,
  site int(32) NOT NULL DEFAULT '0',
  PRIMARY KEY (id),
  KEY id (id),
  KEY poster (poster),
  KEY site (site),
  KEY time (time)
) CHARACTER SET utf8 COLLATE utf8_bin;

DROP TABLE IF EXISTS phpbb_toplist_flood_control;
CREATE TABLE phpbb_toplist_flood_control (
  id int(32) NOT NULL DEFAULT '0',
  ip varchar(255) binary NOT NULL DEFAULT '',
  time int(32) NOT NULL DEFAULT '0',
  type varchar(5) binary NOT NULL DEFAULT '0'
) CHARACTER SET utf8 COLLATE utf8_bin;

DROP TABLE IF EXISTS phpbb_toplist_hash;
CREATE TABLE phpbb_toplist_hash (
  site_id int(32) NOT NULL DEFAULT '0',
  type varchar(5) binary NOT NULL DEFAULT '',
  time int(32) NOT NULL DEFAULT '0',
  hash varchar(32) binary NOT NULL DEFAULT '',
  uniqid int(32) NOT NULL DEFAULT '0'
) CHARACTER SET utf8 COLLATE utf8_bin;

DROP TABLE IF EXISTS phpbb_toplist_rate;
CREATE TABLE phpbb_toplist_rate (
  site_id int(32) NOT NULL DEFAULT '0',
  user_id int(32) NOT NULL DEFAULT '0',
  rating int(1) NOT NULL DEFAULT '0',
  ip varchar(255) binary NOT NULL DEFAULT ''
) CHARACTER SET utf8 COLLATE utf8_bin;



CREATE TABLE phpbb_country_flags (
flag_id mediumint(8) unsigned NOT NULL auto_increment,
flag_country blob NOT NULL,
flag_code blob NOT NULL,
flag_image varbinary(255) NOT NULL default '',
PRIMARY KEY  (flag_id)
) CHARACTER SET utf8 COLLATE utf8_bin;


INSERT INTO phpbb_config (config_name, config_value, is_dynamic) VALUES ('country_flags_require', '1', 0);
INSERT INTO phpbb_config (config_name, config_value, is_dynamic) VALUES ('country_flags_path', 'images/flags', 0);
INSERT INTO phpbb_acl_options (auth_option, is_global, is_local, founder_only) VALUES ('a_country_flags', 1, 0, 0);
ALTER TABLE phpbb_users ADD user_country_flag varchar(30) binary NOT NULL DEFAULT '0';
ALTER TABLE phpbb_groups ADD group_country_flag varchar(30) binary NOT NULL DEFAULT '0';


INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (1, 'Afghanistan', 'af', 'af.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (2, 'Aland Islands', 'ax', 'ax.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (3, 'Albania', 'al', 'al.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (4, 'Algeria', 'dz', 'dz.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (5, 'American Samoa', 'as', 'as.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (6, 'Andorra', 'ad', 'ad.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (7, 'Angola', 'ao', 'ao.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (8, 'Anguilla', 'ai', 'ai.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (9, 'Antarctica', 'aq', 'aq.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (10, 'Antigua and Barbuda', 'ag', 'ag.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (11, 'Argentina', 'ar', 'ar.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (12, 'Armenia', 'am', 'am.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (13, 'Aruba', 'aw', 'aw.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (14, 'Ascension Island', 'ac', 'ac.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (15, 'Australia', 'au', 'au.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (16, 'Austria', 'at', 'at.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (17, 'Azerbaijan', 'az', 'az.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (18, 'Bahamas', 'bs', 'bs.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (19, 'Bahrain', 'bh', 'bh.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (20, 'Bangladesh', 'bd', 'bd.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (21, 'Barbados', 'bb', 'bb.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (22, 'Belarus', 'by', 'by.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (23, 'Belgium', 'be', 'be.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (24, 'Belize', 'bz', 'bz.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (25, 'Benin', 'bj', 'bj.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (26, 'Bermuda', 'bm', 'bm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (27, 'Bhutan', 'bt', 'bt.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (28, 'Bolivia', 'bo', 'bo.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (29, 'Bosnia and Herzegowina', 'ba', 'ba.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (30, 'Botswana', 'bw', 'bw.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (31, 'Bouvet Island', 'bv', 'bv.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (32, 'Brazil', 'br', 'br.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (33, 'British Indian Ocean Territory', 'io', 'io.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (34, 'Brunei', 'bn', 'bn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (35, 'Bulgaria', 'bg', 'bg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (36, 'Burkina Faso', 'bf', 'bf.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (37, 'Burundi', 'bi', 'bi.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (38, 'Cambodia', 'kh', 'kh.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (39, 'Cameroon', 'cm', 'cm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (40, 'Canada', 'ca', 'ca.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (41, 'Cape Verde', 'cv', 'cv.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (42, 'Cayman Islands', 'ky', 'ky.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (43, 'Central African Republic', 'cf', 'cf.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (44, 'Chad', 'td', 'td.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (45, 'Chile', 'cl', 'cl.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (46, 'China', 'cn', 'cn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (47, 'Christmas Island', 'cx', 'cx.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (48, 'Cocos (Keeling) Islands', 'cc', 'cc.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (49, 'Colombia', 'co', 'co.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (50, 'Comoros', 'km', 'km.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (51, 'Congo', 'cg', 'cg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (52, 'Congo, Democratic Republic of', 'cd', 'cd.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (53, 'Cook Islands', 'ck', 'ck.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (54, 'Costa Rica', 'cr', 'cr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (55, 'Cote d''Ivoire', 'ci', 'ci.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (56, 'Croatia', 'hr', 'hr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (57, 'Cuba', 'cu', 'cu.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (58, 'Cyprus', 'cy', 'cy.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (59, 'Czech Republic', 'cz', 'cz.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (60, 'Denmark', 'dk', 'dk.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (61, 'Djibouti', 'dj', 'dj.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (62, 'Dominica', 'dm', 'dm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (63, 'Dominican Republic', 'do', 'do.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (64, 'Ecuador', 'ec', 'ec.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (65, 'Egypt', 'eg', 'eg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (66, 'El Salvador', 'sv', 'sv.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (67, 'Equatorial Guinea', 'gq', 'gq.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (68, 'Eritrea', 'er', 'er.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (69, 'Estonia', 'ee', 'ee.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (70, 'Ethiopia', 'et', 'et.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (71, 'Falkland Islands', 'fk', 'fk.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (72, 'Faroe Islands', 'fo', 'fo.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (73, 'Fiji', 'fj', 'fj.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (74, 'Finland', 'fi', 'fi.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (75, 'France', 'fr', 'fr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (76, 'French Guiana', 'gf', 'gf.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (77, 'French Polynesia', 'pf', 'pf.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (78, 'French Southern Territories', 'tf', 'tf.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (79, 'Gabon', 'ga', 'ga.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (80, 'Gambia', 'gm', 'gm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (81, 'Georgia', 'ge', 'ge.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (82, 'Germany', 'de', 'de.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (83, 'Ghana', 'gh', 'gh.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (84, 'Gibraltar', 'gi', 'gi.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (85, 'Greece', 'gr', 'gr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (86, 'Greenland', 'gl', 'gl.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (87, 'Grenada', 'gd', 'gd.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (88, 'Guadeloupe', 'gp', 'gp.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (89, 'Guam', 'gu', 'gu.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (90, 'Guatemala', 'gt', 'gt.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (91, 'Guernsey', 'gg', 'gg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (92, 'Guinea', 'gn', 'gn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (93, 'Guinea-Bissau', 'gw', 'gw.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (94, 'Guyana', 'gy', 'gy.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (95, 'Haiti', 'ht', 'ht.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (96, 'Heard Island and McDonald Islands', 'hm', 'hm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (97, 'Holy See (Vatican City State)', 'va', 'va.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (98, 'Honduras', 'hn', 'hn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (99, 'Hong Kong', 'hk', 'hk.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (100, 'Hungary', 'hu', 'hu.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (101, 'Iceland', 'is', 'is.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (102, 'India', 'in', 'in.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (103, 'Indonesia', 'id', 'id.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (104, 'Iran', 'ir', 'ir.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (105, 'Iraq', 'iq', 'iq.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (106, 'Ireland', 'ie', 'ie.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (107, 'Isle of Man', 'im', 'im.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (108, 'Israel', 'il', 'il.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (109, 'Italy', 'it', 'it.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (110, 'Jamaica', 'jm', 'jm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (111, 'Japan', 'jp', 'jp.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (112, 'Jersey', 'je', 'je.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (113, 'Jordan', 'jo', 'jo.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (114, 'Kazakhstan', 'kz', 'kz.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (115, 'Kenya', 'ke', 'ke.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (116, 'Kiribati', 'ki', 'ki.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (117, 'Korea, Democratic People''s Republic of', 'kp', 'kp.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (118, 'Korea, Republic of', 'kr', 'kr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (119, 'Kuwait', 'kw', 'kw.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (120, 'Kyrgyzstan', 'kg', 'kg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (121, 'Laos', 'la', 'la.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (122, 'Latvia', 'lv', 'lv.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (123, 'Lebanon', 'lb', 'lb.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (124, 'Lesotho', 'ls', 'ls.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (125, 'Liberia', 'lr', 'lr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (126, 'Libyan Arab Jamahiriya', 'ly', 'ly.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (127, 'Liechtenstein', 'li', 'li.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (128, 'Lithuania', 'lt', 'lt.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (129, 'Luxembourg', 'lu', 'lu.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (130, 'Macao', 'mo', 'mo.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (131, 'Macedonia', 'mk', 'mk.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (132, 'Madagascar', 'mg', 'mg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (133, 'Malawi', 'mw', 'mw.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (134, 'Malaysia', 'my', 'my.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (135, 'Maldives', 'mv', 'mv.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (136, 'Mali', 'ml', 'ml.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (137, 'Malta', 'mt', 'mt.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (138, 'Marshall Island', 'mh', 'mh.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (139, 'Martinique', 'mq', 'mq.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (140, 'Mauritania', 'mr', 'mr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (141, 'Mauritius', 'mu', 'mu.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (142, 'Mayotte', 'yt', 'yt.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (143, 'Mexico', 'mx', 'mx.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (144, 'Micronesia', 'fm', 'fm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (145, 'Moldova', 'md', 'md.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (146, 'Monaco', 'mc', 'mc.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (147, 'Mongolia', 'mn', 'mn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (148, 'Montenegro', 'me', 'me.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (149, 'Montserrat', 'ms', 'ms.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (150, 'Morocco', 'ma', 'ma.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (151, 'Mozambique', 'mz', 'mz.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (152, 'Myanmar', 'mm', 'mm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (153, 'Namibia', 'na', 'na.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (154, 'Nauru', 'nr', 'nr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (155, 'Nepal', 'np', 'np.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (156, 'Netherlands', 'nl', 'nl.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (157, 'Netherlands Antilles', 'an', 'an.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (158, 'New Caledonia', 'nc', 'nc.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (159, 'New Zealand', 'nz', 'nz.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (160, 'Nicaragua', 'ni', 'ni.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (161, 'Niger', 'ne', 'ne.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (162, 'Nigeria', 'ng', 'ng.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (163, 'Niue', 'nu', 'nu.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (164, 'Norfolk Island', 'nf', 'nf.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (165, 'Northern Mariana Islands', 'mp', 'mp.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (166, 'Norway', 'no', 'no.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (167, 'Oman', 'om', 'om.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (168, 'Pakistan', 'pk', 'pk.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (169, 'Palau', 'pw', 'pw.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (170, 'Palestine', 'ps', 'ps.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (171, 'Panama', 'pa', 'pa.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (172, 'Papua New Guinea', 'pg', 'pg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (173, 'Paraguay', 'py', 'py.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (174, 'Peru', 'pe', 'pe.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (175, 'Philippines', 'ph', 'ph.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (176, 'Pitcairn', 'pn', 'pn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (177, 'Poland', 'pl', 'pl.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (178, 'Portugal', 'pt', 'pt.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (179, 'Puerto Rico', 'pr', 'pr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (180, 'Qatar', 'qa', 'qa.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (181, 'Reunion', 're', 're.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (182, 'Romania', 'ro', 'ro.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (183, 'Russia', 'ru', 'ru.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (184, 'Rwanda', 'rw', 'rw.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (185, 'Saint Helena', 'sh', 'sh.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (186, 'Saint Kitts and Nevis', 'kn', 'kn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (187, 'Saint Lucia', 'lc', 'lc.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (188, 'Saint Pierre and Miquelon', 'pm', 'pm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (189, 'Saint Vincent and the Grenadines', 'vc', 'vc.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (190, 'Samoa', 'ws', 'ws.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (191, 'San Marino', 'sm', 'sm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (192, 'Sao Tome and Principe', 'st', 'st.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (193, 'Saudi Arabia', 'sa', 'sa.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (194, 'Senegal', 'sn', 'sn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (195, 'Serbia', 'rs', 'rs.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (196, 'Seychelles', 'sc', 'sc.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (197, 'Sierra Leone', 'sl', 'sl.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (198, 'Singapore', 'sg', 'sg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (199, 'Slovakia', 'sk', 'sk.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (200, 'Slovenia', 'si', 'si.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (201, 'Slomon Islands', 'sb', 'sb.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (202, 'Somalia', 'so', 'so.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (203, 'South Africa', 'za', 'za.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (204, 'South Georgia and the South Sandwich Islands', 'gs', 'gs.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (205, 'Spain', 'es', 'es.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (206, 'Sri Lanka', 'lk', 'lk.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (207, 'Sudan', 'sd', 'sd.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (208, 'Suriname', 'sr', 'sr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (209, 'Svalbard and Jan Mayen', 'sj', 'sj.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (210, 'Swaziland', 'sz', 'sz.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (211, 'Sweden', 'se', 'se.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (212, 'Switzerland', 'ch', 'ch.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (213, 'Syria', 'sy', 'sy.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (214, 'Taiwan', 'tw', 'tw.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (215, 'Tajikistan', 'tj', 'tj.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (216, 'Tanzania', 'tz', 'tz.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (217, 'Thailand', 'th', 'th.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (218, 'Timor-Leste', 'tl', 'tl.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (219, 'Togo', 'tg', 'tg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (220, 'Tokelau', 'tk', 'tk.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (221, 'Tonga', 'to', 'to.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (222, 'Trinidad and Tobago', 'tt', 'tt.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (223, 'Tunisia', 'tn', 'tn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (224, 'Turkey', 'tr', 'tr.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (225, 'Turkmenistan', 'tm', 'tm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (226, 'Turks and Caicos Islands', 'tc', 'tc.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (227, 'Tuvalu', 'tv', 'tv.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (228, 'Uganda', 'ug', 'ug.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (229, 'Ukraine', 'ua', 'ua.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (230, 'United Arab Emirates', 'ae', 'ae.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (231, 'United Kingdom', 'uk', 'uk.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (232, 'United States', 'us', 'us.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (233, 'United States Minor Outlying Islands', 'um', 'um.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (234, 'Uruguay', 'uy', 'uy.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (235, 'Uzbekistan', 'uz', 'uz.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (236, 'Vanuatu', 'vu', 'vu.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (237, 'Venezuela', 've', 've.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (238, 'Vietnam', 'vn', 'vn.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (239, 'Virgin Islands (British)', 'vg', 'vg.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (240, 'Virgin Islands (US)', 'vi', 'vi.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (241, 'Wallis and Futuna', 'wf', 'wf.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (242, 'Western Sahara', 'eh', 'eh.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (243, 'Yemen', 'ye', 'ye.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (244, 'Zambia', 'zm', 'zm.png');
INSERT INTO phpbb_country_flags (flag_id, flag_country, flag_code, flag_image) VALUES (245, 'Zimbabwe', 'zw', 'zw.png');


ALTER TABLE phpbb_users ADD user_gender TINYINT(1) UNSIGNED NOT NULL DEFAULT 0;

INSERT INTO phpbb_config (config_name, config_value, is_dynamic) VALUES ('number_friends', '5', 0);
INSERT INTO phpbb_config (config_name, config_value, is_dynamic) VALUES ('friend_avatar_size', '80', 0);

# ajax chat
DROP TABLE IF EXISTS ajax_chat_online;
CREATE TABLE ajax_chat_online (
	userID INT(11) NOT NULL,
	userName VARCHAR(64) NOT NULL,
	userRole INT(1) NOT NULL,
	channel INT(11) NOT NULL,
	dateTime DATETIME NOT NULL,
	ip VARBINARY(16) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

DROP TABLE IF EXISTS ajax_chat_messages;
CREATE TABLE ajax_chat_messages (
	id INT(11) NOT NULL AUTO_INCREMENT,
	userID INT(11) NOT NULL,
	userName VARCHAR(64) NOT NULL,
	userRole INT(1) NOT NULL,
	channel INT(11) NOT NULL,
	dateTime DATETIME NOT NULL,
	ip VARBINARY(16) NOT NULL,
	text TEXT,
	PRIMARY KEY (id)
) DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

DROP TABLE IF EXISTS ajax_chat_bans;
CREATE TABLE ajax_chat_bans (
	userID INT(11) NOT NULL,
	userName VARCHAR(64) NOT NULL,
	dateTime DATETIME NOT NULL,
	ip VARBINARY(16) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

DROP TABLE IF EXISTS ajax_chat_invitations;
CREATE TABLE ajax_chat_invitations (
	userID INT(11) NOT NULL,
	channel INT(11) NOT NULL,
	dateTime DATETIME NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (65, 'Plugin CAPTCHA ordinabile', '1.0.1', '', 'Questo plugin CAPTCHA aggiunge due colonne, &egrave possibile aggiungere le opzioni per ogni colonna. Tutte le opzioni saranno visualizzate in una colonna, poi l\'utente ha la possibilit&agrave di ordinare le colonne da una all\'altra, trascinandole con il mouse. Con questo plugin non &egrave necessario modificare nessun file, basta caricare tutti i file e funziona!', 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1714415', 'Derky', 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1714415');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (66, 'Country Flags', '1.0.0', '', 'Sei un patriota? Con questo MOD gli utenti registrati potranno selezionare la bandiera della propria nazionalit&agrave.\r\nLe bandiere degli stati saranno visualizzate in phpBB. Puoi selezionare una bandiera di default per i gruppi.\r\nPuoi gestire anche le bandiere (modificare/cancellare/aggiungere), modificare alcune configurazioni, selezionare bandiere per utenti/gruppi...\r\nin ACP, e in UCP per i gruppi.', 'http://www.vinabb.com/', 'nedka', 'http://vinabb.com/viewtopic.php?p=513#p513');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (67, 'Genders', '1.0.1', '', 'Questo mod permette di specificare il sesso degli utenti. Essi possono scegliere tra &quot;Maschio&quot;, &quot;Femmina&quot; and &quot;Non specificato&quot;.', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=736135&amp;start=0', 'eviL<3', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=736135&amp;start=0');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (68, 'Archivio utenti', '0.0.2', '', 'Aggiunge obiettivi nei profili utenti', 'http://itmods.com/viewtopic.php?p=605#p605', 'platinum_2007', 'http://itmods.com/viewtopic.php?p=605#p605');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (69, 'Pagina livelli', '1.0', '', 'Aggiunge una pagina dei livelli installati sul forum. La pagina crea automaticamente nuove pagine in presenza di pi&ugrave livelli.', 'http://damysterious.xs4all.nl/portalxl/', 'DaMysterious', 'http://damysterious.xs4all.nl/portalxl/');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (70, 'Pagina smiles', '1.0', '', 'Aggiunge una pagina di smiles sul forum. La pagina crea automaticamente nuove pagine in presenza di pi&ugrave smiles.', 'http://damysterious.xs4all.nl/portalxl/', 'DaMysterious', 'http://damysterious.xs4all.nl/portalxl/');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (71, 'Ricerca Google', '1.0.0', '', 'Aggiunge un pulsante di ricerca Google nella ricerca standard.', 'http://allcity.net.ru/', 'AllCity', 'http://allcity.net.ru/');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (72, 'Guest Hide BBCode MOD', '1.4.0', '', 'Con il BBCode [hide], gli utenti possono nascondere il contenuto dei loro messaggi agli ospiti!', 'http://allcity.net.ru/', 'AllCity', 'http://allcity.net.ru/');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (73, 'Amici nel profilo utente', '1.0.0', '', 'Aggiunge la lista amici nel profilo utente.', 'http://damysterious.xs4all.nl/portalxl/', 'DaMysterious', 'http://damysterious.xs4all.nl/portalxl/');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (74, 'phpBB Arcade', '1.0', 'RC9', 'Una sala giochi per phpBB 3.0.x.', 'http://www.jeffrusso.net', 'JRSweets', 'http://www.jeffrusso.net');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (75, 'Lista bandiere', '1.0', '', 'Aggiunge la lista delle bandiere installate sul forum.', 'http://damysterious.xs4all.nl/portalxl/', 'DaMysterious', 'http://damysterious.xs4all.nl/portalxl/');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (76, 'Mod blog utente', '1.0.10', '', 'Aggiunge un blog nel forum phpBB3.', 'http://www.lithiumstudios.org/', 'EXreaction', 'http://www.lithiumstudios.org/');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (77, 'Pagina gruppi', '1.0', '', 'Aggiunge una lista gruppi mostrando tutti i gruppi disponibili in Portal XL Premod.', 'http://damysterious.xs4all.nl/portalxl/', 'DaMysterious', 'http://damysterious.xs4all.nl/portalxl/');
INSERT INTO phpbb_portal_mods (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (78, 'AJAX Chat', '0.8.3', '', 'AJAX Chat &egrave una chat open source altamente configurabile in JavaScript, PHP and MySQL. La chat utilizza la tecnologia Flash lato client e Ruby lato server. Questa versione &egrave un\'integrazione di phpBB.', 'https://blueimp.net/ajax/', 'Sebastian Tschan', 'https://blueimp.net/ajax/');

UPDATE `phpbb_portal_mods` SET `mod_title` = 'Gestione database mods' WHERE `phpbb_portal_mods`.`mod_id` =1 LIMIT 1 ;
UPDATE `phpbb_portal_mods` SET `mod_title` = 'Gestione partners 88x31' WHERE `phpbb_portal_mods`.`mod_id` =3 LIMIT 1 ;
UPDATE `phpbb_portal_mods` SET `mod_title` = 'Gestione Banners 400x60' WHERE `phpbb_portal_mods`.`mod_id` =4 LIMIT 1 ;
UPDATE `phpbb_portal_mods` SET `mod_title` = 'Gestione banners 130x600' WHERE `phpbb_portal_mods`.`mod_id` =5 LIMIT 1 ;
UPDATE `phpbb_portal_mods` SET `mod_title` = 'Messaggi non letti' WHERE `phpbb_portal_mods`.`mod_id` =55 LIMIT 1 ;
UPDATE `phpbb_portal_mods` SET `mod_title` = 'phpBB3 Portal XL 5.0 italiano',`mod_version` = 'Premod',`mod_desc` = 'Portal XL 5.0 e Premod phpBB3 sono il valore aggiunto, offrono un portale frontend per il forum phpBB3. Portal XL 5.0 Plain e Premod sono testati per phpBB3. Il portale &egrave uno strumento flessibile e potente, una soluzione di portale dinamica e avanzata, offre complete funzionalit&agrave e la configurazione via phpBB3 ACP in maniera rapida ed efficace. Le nostre versioni sono completamente tradotte in italiano, database e dati di default compresi. Le traduzioni in italiano sono di Lucky.',`mod_download` = 'http://forum.luckylab.eu/downloads.php' WHERE `phpbb_portal_mods`.`mod_id` =20 LIMIT 1 ;

UPDATE `phpbb_portal_mods` SET `mod_version` = '1.0.8' WHERE `phpbb_portal_mods`.`mod_id` =49 LIMIT 1 ;
UPDATE `phpbb_portal_mods` SET `mod_version` = '1.0.7' WHERE `phpbb_portal_mods`.`mod_id` =27 LIMIT 1 ;
UPDATE `phpbb_portal_mods` SET `mod_version` = '6.2.32' WHERE `phpbb_portal_mods`.`mod_id` =22 LIMIT 1 ;

INSERT INTO `phpbb_portal_menu` (`menu_id` ,`menu_img` ,`menu_name` ,`menu_url` ,`menu_view` ,`menu_order` ,`menu_open`) VALUES ('50', 'icon_menu_011.gif', 'Livelli', 'portal/portal_ranks.php', '1', '20', '0');
INSERT INTO `phpbb_portal_menu` (`menu_id` ,`menu_img` ,`menu_name` ,`menu_url` ,`menu_view` ,`menu_order` ,`menu_open`) VALUES ('51', 'icon_menu_026.gif', 'Smiles', 'portal/portal_smiles.php', '1', '20', '0');
INSERT INTO `phpbb_portal_menu` (`menu_id` ,`menu_img` ,`menu_name` ,`menu_url` ,`menu_view` ,`menu_order` ,`menu_open`) VALUES ('52', 'icon_menu_024.gif', 'Bandiere', 'portal/portal_flags.php', '1', '20', '0');
INSERT INTO `phpbb_portal_menu` (`menu_id` ,`menu_img` ,`menu_name` ,`menu_url` ,`menu_view` ,`menu_order` ,`menu_open`) VALUES ('53', 'icon_profile.png', 'Gruppi', 'portal/portal_groups.php', '1', '20', '0');

UPDATE `phpbb_portal_mods` SET `mod_version` = '6.3.0' WHERE `phpbb_portal_mods`.`mod_id` =22 LIMIT 1 ;
UPDATE `phpbb_config` SET `config_value` = '6.3.0' WHERE CONVERT( `phpbb_config`.`config_name` USING utf8 ) = 'dl_mod_version' LIMIT 1 ;
