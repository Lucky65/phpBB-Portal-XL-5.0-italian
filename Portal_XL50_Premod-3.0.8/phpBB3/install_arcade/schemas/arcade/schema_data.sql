#
# $Id: schema_data.sql $
#

# POSTGRES BEGIN #

# -- Config
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('acp_items_per_page', '10');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('arcade_leaders_header', '3');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('arcade_leaders', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('cat_image_path', 'arcade/images/cats/');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('copyright', 'Powered by phpBB Arcade &copy; 2008 <a href="http://www.jeffrusso.net">JRSweets</a>');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('download_list', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('download_list_message', '');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('download_list_per_page', '50');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('flash_version', '8');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('game_path', 'arcade/games/');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('unpack_game_path', 'arcade/install/');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('games_per_page', '10');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('override_user_sort', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('games_sort_order', 'n');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('games_sort_dir', 'a');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('image_path', 'arcade/images/');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('latest_highscores', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('least_popular', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('least_downloaded', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('game_scores', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('limit_play', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('limit_play_days', '7');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('limit_play_posts', '10');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('limit_play_total_posts', '10');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('longest_held_scores', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('most_popular', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('most_downloaded', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('new_games_delay', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('newest_games', '10');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('pm_message', '***MESSAGE GENERATED FROM ARCADE***\n\nYou lost your score in [game_link].  [user_link] received a score of [b][new_score][/b] which defeated your old score of [b][old_score][/b].\n\nYou can view your arcade statistics by clicking [old_user_link].');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('pm_subject', 'You lost your trophy in [game_name] to [new_username]...');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('send_arcade_pm', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('stat_items_per_page', '10');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('version', '1.0.RC9');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('protect_amod', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('protect_ibpro', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('protect_v3arcade', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('parse_bbcode', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('parse_smilies', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('parse_links', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('game_autosize', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('game_zero_negative_score', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('game_width', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('game_height', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('game_cost', '5');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('game_reward', '10');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('cm_currency_id', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('use_jackpot', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('jackpot_maximum', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('jackpot_minimum', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('use_points', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('played_games', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('played_colour', 'cdcdcd');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('cache_time', '4');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('online_time', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('resolution_select', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('display_desc', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('arcade_disable', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('arcade_disable_msg', '');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('auto_disable', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('auto_disable_start', '');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('auto_disable_end', '');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('announce_forum', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('announce_game', '0');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('announce_message', '[game_image]\n[b]Game Name:[/b] [game_name]\n[b]Game Description:[/b] [game_desc]\n\n[game_link]\n[download_link]\n[stats_link]');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('announce_subject', '[GAME RELEASE] [game_name]');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('welcome_index', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('search_index', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('links_index', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('welcome_cats', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('search_cats', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('links_cats', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('welcome_stats', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('search_stats', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('links_stats', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('display_viewtopic', '1');
INSERT INTO phpbb_arcade_config (config_name, config_value) VALUES ('display_memberlist', '1');

# -- Arcade auth options
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_list', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_view', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_play', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_popup', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_playfree', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_score', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_rate', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_comment', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_report', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_resolution', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_download', 1);
INSERT INTO phpbb_acl_arcade_options (auth_option, is_local) VALUES ('c_ignorecontrol', 1);

# -- Arcade auth roles
INSERT INTO phpbb_acl_arcade_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ARCADE_NOACCESS', 'ROLE_DESCRIPTION_ARCADE_NOACCESS', 'c_', 1);
INSERT INTO phpbb_acl_arcade_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ARCADE_FULL', 'ROLE_DESCRIPTION_ARCADE_FULL', 'c_', 2);
INSERT INTO phpbb_acl_arcade_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ARCADE_LIMITED', 'ROLE_DESCRIPTION_ARCADE_LIMITED', 'c_', 3);
INSERT INTO phpbb_acl_arcade_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ARCADE_PLAYONLY', 'ROLE_DESCRIPTION_ARCADE_PLAYONLY', 'c_', 4);
INSERT INTO phpbb_acl_arcade_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ARCADE_STANDARD', 'ROLE_DESCRIPTION_ARCADE_STANDARD', 'c_', 5);
INSERT INTO phpbb_acl_arcade_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ARCADE_STANDARD_DOWNLOADS', 'ROLE_DESCRIPTION_ARCADE_STANDARD_DOWNLOADS', 'c_', 6);
INSERT INTO phpbb_acl_arcade_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ARCADE_VIEWONLY', 'ROLE_DESCRIPTION_ARCADE_VIEWONLY', 'c_', 7);

# No Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 1, auth_option_id, 0 FROM phpbb_acl_arcade_options WHERE auth_option = 'c_';

# Full Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 2, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%';

# Limited Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 3, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view', 'c_play', 'c_popup', 'c_score');

# Play Only Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 4, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view', 'c_play', 'c_popup');

# Standard Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 5, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view', 'c_play', 'c_popup', 'c_score', 'c_rate', 'c_comment', 'c_report', 'c_resolution');

# Standard Access + Downloads (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 6, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view', 'c_play', 'c_popup', 'c_score', 'c_rate', 'c_comment', 'c_report', 'c_resolution', 'c_download');

# View Only Access (c_)
INSERT INTO phpbb_acl_arcade_roles_data (role_id, auth_option_id, auth_setting) SELECT 7, auth_option_id, 1 FROM phpbb_acl_arcade_options WHERE auth_option LIKE 'c_%' AND auth_option IN ('c_', 'c_list', 'c_view');

# POSTGRES COMMIT #