#
# TABLE STRUCTURE FOR: bf_activities
#

DROP TABLE IF EXISTS bf_activities;

CREATE TABLE `bf_activities` (
  `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (1, 1, 'logged in from: 127.0.0.1', 'users', '2013-10-02 19:40:46', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (2, 1, 'created a new User: Collin', 'users', '2013-10-02 19:53:03', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (3, 1, 'logged out from: 127.0.0.1', 'users', '2013-10-02 19:55:43', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (4, 2, 'logged in from: 127.0.0.1', 'users', '2013-10-02 19:55:54', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (5, 2, 'logged out from: 127.0.0.1', 'users', '2013-10-02 19:56:11', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (6, 1, 'logged in from: 127.0.0.1', 'users', '2013-10-02 19:56:27', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (7, 1, 'modified user: Collin', 'users', '2013-10-02 19:56:52', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (8, 2, 'logged in from: 127.0.0.1', 'users', '2013-10-02 19:57:25', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (9, 2, 'logged out from: 127.0.0.1', 'users', '2013-10-02 19:57:34', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (10, 1, 'logged in from: 127.0.0.1', 'users', '2013-10-02 20:31:22', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (11, 1, 'logged in from: 127.0.0.1', 'users', '2013-10-03 16:27:36', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (12, 1, 'deleted user: Collin', 'users', '2013-10-03 16:27:59', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (13, 1, 'Created Module: Organizations : 127.0.0.1', 'modulebuilder', '2013-10-03 17:46:31', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (14, 1, 'logged in from: 127.0.0.1', 'users', '2013-10-04 14:53:32', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (15, 1, 'Migrate Type: organizations_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2013-10-04 15:03:01', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (16, 1, 'Created Module: Reports : 127.0.0.1', 'modulebuilder', '2013-10-04 15:42:32', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (17, 1, 'Created record with ID: 1 : 127.0.0.1', 'reports', '2013-10-04 15:43:53', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (18, 1, 'logged in from: 127.0.0.1', 'users', '2013-10-07 14:05:56', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (19, 1, 'Migrate Type: reports_ to Version: 2 from: 127.0.0.1', 'migrations', '2013-10-07 14:18:25', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (20, 1, 'Migrate Type: reports_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2013-10-07 14:18:31', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (21, 1, 'Migrate Type: observation_ to Version: 2 from: 127.0.0.1', 'migrations', '2013-10-07 14:18:39', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (22, 1, 'App settings saved from: 127.0.0.1', 'core', '2013-10-07 15:30:46', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (23, 1, 'App settings saved from: 127.0.0.1', 'core', '2013-10-07 15:31:14', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (24, 1, 'modified user: Admin', 'users', '2013-10-07 15:31:37', 0);
INSERT INTO bf_activities (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES (25, 1, 'App settings saved from: 127.0.0.1', 'core', '2013-10-07 15:31:51', 0);


#
# TABLE STRUCTURE FOR: bf_email_queue
#

DROP TABLE IF EXISTS bf_email_queue;

CREATE TABLE `bf_email_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_email` varchar(128) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: bf_login_attempts
#

DROP TABLE IF EXISTS bf_login_attempts;

CREATE TABLE `bf_login_attempts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: bf_observation
#

DROP TABLE IF EXISTS bf_observation;

CREATE TABLE `bf_observation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `observation_obs_date` date NOT NULL DEFAULT '0000-00-00',
  `observation_obs_location` varchar(150) NOT NULL,
  `observation_anonymous` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: bf_organizations
#

DROP TABLE IF EXISTS bf_organizations;

CREATE TABLE `bf_organizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: bf_permissions
#

DROP TABLE IF EXISTS bf_permissions;

CREATE TABLE `bf_permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') DEFAULT 'active',
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (1, 'Site.Signin.Allow', 'Allow users to login to the site', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (2, 'Site.Content.View', 'Allow users to view the Content Context', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (3, 'Site.Reports.View', 'Allow users to view the Reports Context', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (4, 'Site.Settings.View', 'Allow users to view the Settings Context', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (5, 'Site.Developer.View', 'Allow users to view the Developer Context', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (6, 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (7, 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (8, 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (9, 'Bonfire.Users.Add', 'Allow users to add new Users', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (10, 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (11, 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (12, 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (13, 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (14, 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (15, 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (16, 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (17, 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (18, 'Bonfire.Roles.Delete', 'Allow users to delete user Roles', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (19, 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (20, 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (21, 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (22, 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (24, 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (25, 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (27, 'Activities.Own.View', 'To view the users own activity logs', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (28, 'Activities.Own.Delete', 'To delete the users own activity logs', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (29, 'Activities.User.View', 'To view the user activity logs', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (30, 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (31, 'Activities.Module.View', 'To view the module activity logs', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (32, 'Activities.Module.Delete', 'To delete the module activity logs', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (33, 'Activities.Date.View', 'To view the users own activity logs', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (34, 'Activities.Date.Delete', 'To delete the dated activity logs', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (35, 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (36, 'Bonfire.Settings.View', 'To view the site settings page.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (37, 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (38, 'Bonfire.Activities.View', 'To view the Activities menu.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (39, 'Bonfire.Database.View', 'To view the Database menu.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (40, 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (41, 'Bonfire.Builder.View', 'To view the Modulebuilder menu.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (42, 'Bonfire.Roles.View', 'To view the Roles menu.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (43, 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (44, 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (45, 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (46, 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (47, 'Bonfire.Update.Manage', 'To manage the Bonfire Update.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (48, 'Bonfire.Update.View', 'To view the Developer Update menu.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (49, 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (50, 'Bonfire.Roles.Add', 'To add New Roles', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (51, 'Site.Learn.View', 'Allow user to view the Learn Context.', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (72, 'Observation.Content.View', '', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (73, 'Observation.Content.Create', '', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (74, 'Observation.Content.Edit', '', 'active');
INSERT INTO bf_permissions (`permission_id`, `name`, `description`, `status`) VALUES (75, 'Observation.Content.Delete', '', 'active');


#
# TABLE STRUCTURE FOR: bf_role_permissions
#

DROP TABLE IF EXISTS bf_role_permissions;

CREATE TABLE `bf_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 1);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 2);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 3);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 4);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 5);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 6);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 7);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 8);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 9);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 10);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 11);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 12);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 13);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 14);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 15);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 16);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 17);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 18);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 19);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 20);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 21);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 22);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 24);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 25);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 27);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 28);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 29);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 30);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 31);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 32);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 33);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 34);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 35);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 36);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 37);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 38);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 39);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 40);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 41);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 42);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 43);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 44);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 45);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 46);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 47);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 48);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 49);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 50);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 51);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 72);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 73);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 74);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (1, 75);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (2, 1);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (2, 2);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (2, 3);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (2, 51);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (4, 1);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (4, 51);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 1);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 2);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 3);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 4);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 5);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 6);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 7);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 8);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 9);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 10);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 11);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 12);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 13);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 49);
INSERT INTO bf_role_permissions (`role_id`, `permission_id`) VALUES (6, 51);


#
# TABLE STRUCTURE FOR: bf_roles
#

DROP TABLE IF EXISTS bf_roles;

CREATE TABLE `bf_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `default_context` varchar(255) NOT NULL DEFAULT 'content',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO bf_roles (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `deleted`, `default_context`) VALUES (1, 'Administrator', 'Has full control over every aspect of the site.', 0, 0, '', 0, 'content');
INSERT INTO bf_roles (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `deleted`, `default_context`) VALUES (2, 'Editor', 'Can handle day-to-day management, but does not have full power.', 0, 1, '', 0, 'content');
INSERT INTO bf_roles (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `deleted`, `default_context`) VALUES (4, 'User', 'This is the default user with access to login.', 1, 0, '', 0, 'content');
INSERT INTO bf_roles (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `deleted`, `default_context`) VALUES (6, 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', 0, 1, '', 0, 'content');


#
# TABLE STRUCTURE FOR: bf_schema_version
#

DROP TABLE IF EXISTS bf_schema_version;

CREATE TABLE `bf_schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO bf_schema_version (`type`, `version`) VALUES ('app_', 0);
INSERT INTO bf_schema_version (`type`, `version`) VALUES ('core', 34);
INSERT INTO bf_schema_version (`type`, `version`) VALUES ('observation_', 2);


#
# TABLE STRUCTURE FOR: bf_sessions
#

DROP TABLE IF EXISTS bf_sessions;

CREATE TABLE `bf_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: bf_settings
#

DROP TABLE IF EXISTS bf_settings;

CREATE TABLE `bf_settings` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `unique - name` (`name`),
  KEY `index - name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.allow_name_change', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.allow_register', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.allow_remember', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.do_login_redirect', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.login_type', 'core', 'email');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.name_change_frequency', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.name_change_limit', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.password_force_mixed_case', 'core', '0');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.password_force_numbers', 'core', '0');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.password_force_symbols', 'core', '0');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.password_min_length', 'core', '8');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.password_show_labels', 'core', '0');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.remember_length', 'core', '1209600');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.use_extended_profile', 'core', '0');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.use_usernames', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('auth.user_activation_method', 'core', '2');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('form_save', 'core.ui', 'ctrl+s/⌘+s');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('goto_content', 'core.ui', 'alt+c');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('mailpath', 'email', '/usr/sbin/sendmail');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('mailtype', 'email', 'text');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('protocol', 'email', 'mail');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('sender_email', 'email', 'nplanam@mtu.edu');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('site.languages', 'core', 'a:3:{i:0;s:10:\"portuguese\";i:1;s:7:\"persian\";i:2;s:7:\"english\";}');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('site.list_limit', 'core', '25');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('site.show_front_profiler', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('site.show_profiler', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('site.status', 'core', '1');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('site.system_email', 'core', 'nobody@nowhere.com');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('site.title', 'core', 'Watershed');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('smtp_host', 'email', '');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('smtp_pass', 'email', '');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('smtp_port', 'email', '');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('smtp_timeout', 'email', '');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('smtp_user', 'email', '');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('updates.bleeding_edge', 'core', '0');
INSERT INTO bf_settings (`name`, `module`, `value`) VALUES ('updates.do_check', 'core', '0');


#
# TABLE STRUCTURE FOR: bf_user_cookies
#

DROP TABLE IF EXISTS bf_user_cookies;

CREATE TABLE `bf_user_cookies` (
  `user_id` bigint(20) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL,
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: bf_user_meta
#

DROP TABLE IF EXISTS bf_user_meta;

CREATE TABLE `bf_user_meta` (
  `meta_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO bf_user_meta (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (1, 2, 'street_name', 'Houghton');
INSERT INTO bf_user_meta (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (2, 2, 'state', 'MI');
INSERT INTO bf_user_meta (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (3, 2, 'country', 'US');
INSERT INTO bf_user_meta (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (4, 2, 'type', 'med');
INSERT INTO bf_user_meta (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (5, 1, 'state', 'SC');
INSERT INTO bf_user_meta (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (6, 1, 'country', 'US');
INSERT INTO bf_user_meta (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (7, 1, 'type', 'small');


#
# TABLE STRUCTURE FOR: bf_users
#

DROP TABLE IF EXISTS bf_users;

CREATE TABLE `bf_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `email` varchar(120) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password_hash` varchar(40) NOT NULL,
  `reset_hash` varchar(40) DEFAULT NULL,
  `salt` varchar(7) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(40) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_message` varchar(255) DEFAULT NULL,
  `reset_by` int(10) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT '',
  `display_name_changed` date DEFAULT NULL,
  `timezone` char(4) NOT NULL DEFAULT 'UM6',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activate_hash` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO bf_users (`id`, `role_id`, `email`, `username`, `password_hash`, `reset_hash`, `salt`, `last_login`, `last_ip`, `created_on`, `deleted`, `banned`, `ban_message`, `reset_by`, `display_name`, `display_name_changed`, `timezone`, `language`, `active`, `activate_hash`) VALUES (1, 1, 'nobody@nowhere.com', 'Admin', '0fd6b0c95be28eaef791de737f97a99feade8140', NULL, 'CpHHl6c', '2013-10-07 14:05:56', '127.0.0.1', '0000-00-00 00:00:00', 0, 0, NULL, NULL, '', NULL, 'UM6', 'english', 1, '');


