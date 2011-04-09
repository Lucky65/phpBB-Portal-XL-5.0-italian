#
# $Id$
#

BEGIN TRANSACTION;

# Table: 'phpbb_gallery_roles'
CREATE TABLE phpbb_gallery_roles (
	role_id INTEGER PRIMARY KEY NOT NULL ,
	a_list INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_view INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_watermark INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_upload INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_edit INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_delete INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_rate INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_approve INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_lock INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_report INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_count INTEGER UNSIGNED NOT NULL DEFAULT '0',
	i_unlimited INTEGER UNSIGNED NOT NULL DEFAULT '0',
	c_read INTEGER UNSIGNED NOT NULL DEFAULT '0',
	c_post INTEGER UNSIGNED NOT NULL DEFAULT '0',
	c_edit INTEGER UNSIGNED NOT NULL DEFAULT '0',
	c_delete INTEGER UNSIGNED NOT NULL DEFAULT '0',
	m_comments INTEGER UNSIGNED NOT NULL DEFAULT '0',
	m_delete INTEGER UNSIGNED NOT NULL DEFAULT '0',
	m_edit INTEGER UNSIGNED NOT NULL DEFAULT '0',
	m_move INTEGER UNSIGNED NOT NULL DEFAULT '0',
	m_report INTEGER UNSIGNED NOT NULL DEFAULT '0',
	m_status INTEGER UNSIGNED NOT NULL DEFAULT '0',
	album_count INTEGER UNSIGNED NOT NULL DEFAULT '0',
	album_unlimited INTEGER UNSIGNED NOT NULL DEFAULT '0'
);



COMMIT;