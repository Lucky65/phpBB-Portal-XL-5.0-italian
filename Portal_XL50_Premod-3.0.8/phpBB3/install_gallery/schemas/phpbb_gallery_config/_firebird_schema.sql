#
# $Id$
#


# Table: 'phpbb_gallery_config'
CREATE TABLE phpbb_gallery_config (
	config_name VARCHAR(255) CHARACTER SET NONE DEFAULT '' NOT NULL,
	config_value VARCHAR(255) CHARACTER SET NONE DEFAULT '' NOT NULL
);;

ALTER TABLE phpbb_gallery_config ADD PRIMARY KEY (config_name);;


