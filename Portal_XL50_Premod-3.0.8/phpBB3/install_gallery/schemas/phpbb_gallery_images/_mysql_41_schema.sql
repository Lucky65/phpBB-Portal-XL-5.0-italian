#
# $Id$
#

# Table: 'phpbb_gallery_images'
CREATE TABLE phpbb_gallery_images (
	image_id mediumint(8) UNSIGNED NOT NULL auto_increment,
	image_filename varchar(255) DEFAULT '' NOT NULL,
	image_thumbnail varchar(255) DEFAULT '' NOT NULL,
	image_name varchar(255) DEFAULT '' NOT NULL,
	image_name_clean varchar(255) DEFAULT '' NOT NULL,
	image_desc mediumtext NOT NULL,
	image_desc_uid varchar(8) DEFAULT '' NOT NULL,
	image_desc_bitfield varchar(255) DEFAULT '' NOT NULL,
	image_user_id mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	image_username varchar(255) DEFAULT '' NOT NULL,
	image_username_clean varchar(255) DEFAULT '' NOT NULL,
	image_user_colour varchar(6) DEFAULT '' NOT NULL,
	image_user_ip varchar(40) DEFAULT '' NOT NULL,
	image_time int(11) UNSIGNED DEFAULT '0' NOT NULL,
	image_album_id mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	image_view_count int(11) UNSIGNED DEFAULT '0' NOT NULL,
	image_status int(3) UNSIGNED DEFAULT '0' NOT NULL,
	image_contest int(1) UNSIGNED DEFAULT '0' NOT NULL,
	image_contest_end int(11) UNSIGNED DEFAULT '0' NOT NULL,
	image_contest_rank int(3) UNSIGNED DEFAULT '0' NOT NULL,
	image_filemissing int(3) UNSIGNED DEFAULT '0' NOT NULL,
	image_has_exif int(3) UNSIGNED DEFAULT '2' NOT NULL,
	image_exif_data text NOT NULL,
	image_rates mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	image_rate_points mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	image_rate_avg mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	image_comments mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	image_last_comment mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	image_favorited mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	image_reported mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	filesize_upload int(20) UNSIGNED DEFAULT '0' NOT NULL,
	filesize_medium int(20) UNSIGNED DEFAULT '0' NOT NULL,
	filesize_cache int(20) UNSIGNED DEFAULT '0' NOT NULL,
	PRIMARY KEY (image_id),
	KEY image_album_id (image_album_id),
	KEY image_user_id (image_user_id),
	KEY image_time (image_time)
) CHARACTER SET `utf8` COLLATE `utf8_bin`;


