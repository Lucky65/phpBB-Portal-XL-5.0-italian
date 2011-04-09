/*

 $Id$

*/


/*
	Table: 'phpbb_gallery_images'
*/
CREATE TABLE phpbb_gallery_images (
	image_id number(8) NOT NULL,
	image_filename varchar2(255) DEFAULT '' ,
	image_thumbnail varchar2(255) DEFAULT '' ,
	image_name varchar2(255) DEFAULT '' ,
	image_name_clean varchar2(255) DEFAULT '' ,
	image_desc clob DEFAULT '' ,
	image_desc_uid varchar2(8) DEFAULT '' ,
	image_desc_bitfield varchar2(255) DEFAULT '' ,
	image_user_id number(8) DEFAULT '0' NOT NULL,
	image_username varchar2(255) DEFAULT '' ,
	image_username_clean varchar2(255) DEFAULT '' ,
	image_user_colour varchar2(6) DEFAULT '' ,
	image_user_ip varchar2(40) DEFAULT '' ,
	image_time number(11) DEFAULT '0' NOT NULL,
	image_album_id number(8) DEFAULT '0' NOT NULL,
	image_view_count number(11) DEFAULT '0' NOT NULL,
	image_status number(3) DEFAULT '0' NOT NULL,
	image_contest number(1) DEFAULT '0' NOT NULL,
	image_contest_end number(11) DEFAULT '0' NOT NULL,
	image_contest_rank number(3) DEFAULT '0' NOT NULL,
	image_filemissing number(3) DEFAULT '0' NOT NULL,
	image_has_exif number(3) DEFAULT '2' NOT NULL,
	image_exif_data clob DEFAULT '' ,
	image_rates number(8) DEFAULT '0' NOT NULL,
	image_rate_points number(8) DEFAULT '0' NOT NULL,
	image_rate_avg number(8) DEFAULT '0' NOT NULL,
	image_comments number(8) DEFAULT '0' NOT NULL,
	image_last_comment number(8) DEFAULT '0' NOT NULL,
	image_favorited number(8) DEFAULT '0' NOT NULL,
	image_reported number(8) DEFAULT '0' NOT NULL,
	filesize_upload number(20) DEFAULT '0' NOT NULL,
	filesize_medium number(20) DEFAULT '0' NOT NULL,
	filesize_cache number(20) DEFAULT '0' NOT NULL,
	CONSTRAINT pk_phpbb_gallery_images PRIMARY KEY (image_id)
)
/

CREATE INDEX phpbb_gallery_images_image_album_id ON phpbb_gallery_images (image_album_id)
/
CREATE INDEX phpbb_gallery_images_image_user_id ON phpbb_gallery_images (image_user_id)
/
CREATE INDEX phpbb_gallery_images_image_time ON phpbb_gallery_images (image_time)
/

CREATE SEQUENCE phpbb_gallery_images_seq
/

CREATE OR REPLACE TRIGGER t_phpbb_gallery_images
BEFORE INSERT ON phpbb_gallery_images
FOR EACH ROW WHEN (
	new.image_id IS NULL OR new.image_id = 0
)
BEGIN
	SELECT phpbb_gallery_images_seq.nextval
	INTO :new.image_id
	FROM dual;
END;
/


