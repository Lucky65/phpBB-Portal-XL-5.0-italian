#
# $Id: schema_data.sql $
#

# POSTGRES BEGIN #

# -- Arcade auth options
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_list', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_view', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_play', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_score', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_rate', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_comment', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_resolution', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_download', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_ignorecontrol', 1);

# -- Arcade auth roles
INSERT INTO phpbb_acl_arcade_roles (role_id, role_name, role_description, role_type, role_order) VALUES (1, 'ROLE_ARCADE_NOACCESS', 'ROLE_DESCRIPTION_ARCADE_NOACCESS', 'c_', 1);
INSERT INTO phpbb_acl_arcade_roles (role_id, role_name, role_description, role_type, role_order) VALUES (2, 'ROLE_ARCADE_FULL', 'ROLE_DESCRIPTION_ARCADE_FULL', 'c_', 2);
INSERT INTO phpbb_acl_arcade_roles (role_id, role_name, role_description, role_type, role_order) VALUES (3, 'ROLE_ARCADE_LIMITED', 'ROLE_DESCRIPTION_ARCADE_LIMITED', 'c_', 3);
INSERT INTO phpbb_acl_arcade_roles (role_id, role_name, role_description, role_type, role_order) VALUES (4, 'ROLE_ARCADE_PLAYONLY', 'ROLE_DESCRIPTION_ARCADE_PLAYONLY', 'c_', 4);
INSERT INTO phpbb_acl_arcade_roles (role_id, role_name, role_description, role_type, role_order) VALUES (5, 'ROLE_ARCADE_STANDARD', 'ROLE_DESCRIPTION_ARCADE_STANDARD', 'c_', 5);
INSERT INTO phpbb_acl_arcade_roles (role_id, role_name, role_description, role_type, role_order) VALUES (6, 'ROLE_ARCADE_STANDARD_DOWNLOADS', 'ROLE_DESCRIPTION_ARCADE_STANDARD_DOWNLOADS', 'c_', 6);
INSERT INTO phpbb_acl_arcade_roles (role_id, role_name, role_description, role_type, role_order) VALUES (7, 'ROLE_ARCADE_VIEWONLY', 'ROLE_DESCRIPTION_ARCADE_VIEWONLY', 'c_', 7);

# No Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 1, auth_option_id, 0 FROM phpbb_acl_arcade_options WHERE auth_option = 'c_';

# Full Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 2, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%';

# Limited Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 3, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view', 'c_play', 'c_score');

# Play Only Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 4, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view', 'c_play');

# Standard Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 5, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view', 'c_play', 'c_score', 'c_rate', 'c_comment', 'c_resolution');

# Standard Access + Downloads (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 6, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view', 'c_play', 'c_score', 'c_rate', 'c_comment', 'c_resolution', 'c_download');

# View Only Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 7, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view');

# POSTGRES COMMIT #