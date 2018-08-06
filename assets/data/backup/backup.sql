#
# TABLE STRUCTURE FOR: acc_account_name
#

DROP TABLE IF EXISTS `acc_account_name`;

CREATE TABLE `acc_account_name` (
  `account_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_name` varchar(255) NOT NULL,
  `account_type` int(11) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES ('1', 'DBBL - Expense', '0');
INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES ('2', 'IBBL', '1');
INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES ('3', 'EBBL', '1');
INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES ('5', 'IFIBL - Expense', '0');


#
# TABLE STRUCTURE FOR: acn_account_transaction
#

DROP TABLE IF EXISTS `acn_account_transaction`;

CREATE TABLE `acn_account_transaction` (
  `account_tran_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `transaction_description` varchar(255) NOT NULL,
  `amount` varchar(25) DEFAULT NULL,
  `pass_book_id` varchar(50) DEFAULT NULL,
  `trip_id` varchar(50) DEFAULT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `create_by_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`account_tran_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `pass_book_id`, `trip_id`, `payment_id`, `create_by_id`) VALUES ('1', '5', 'Expense', '1000', '', '', '', '2');
INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `pass_book_id`, `trip_id`, `payment_id`, `create_by_id`) VALUES ('2', '2', '', '5000', '', '', '', '2');
INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `pass_book_id`, `trip_id`, `payment_id`, `create_by_id`) VALUES ('3', '3', 'Income', '1000', '', '123456789', '12345', '2');
INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `pass_book_id`, `trip_id`, `payment_id`, `create_by_id`) VALUES ('5', '2', '', '10', '', '', '', '2');


#
# TABLE STRUCTURE FOR: agent_info
#

DROP TABLE IF EXISTS `agent_info`;

CREATE TABLE `agent_info` (
  `agent_id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_first_name` varchar(30) DEFAULT NULL,
  `agent_second_name` varchar(150) DEFAULT NULL,
  `agent_company_name` varchar(150) DEFAULT NULL,
  `agent_document_id` varchar(150) DEFAULT NULL,
  `agent_pic_document` varchar(255) DEFAULT NULL,
  `agent_picture` varchar(255) DEFAULT NULL,
  `agent_phone` varchar(150) DEFAULT NULL,
  `agent_mobile` varchar(150) DEFAULT NULL,
  `agent_email` varchar(150) DEFAULT NULL,
  `agent_address_line_1` varchar(150) DEFAULT NULL,
  `agent_address_line_2` varchar(150) DEFAULT NULL,
  `agent_address_city` varchar(150) DEFAULT NULL,
  `agent_address_zip_code` varchar(150) DEFAULT NULL,
  `agent_country` varchar(150) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`agent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `agent_info` (`agent_id`, `agent_first_name`, `agent_second_name`, `agent_company_name`, `agent_document_id`, `agent_pic_document`, `agent_picture`, `agent_phone`, `agent_mobile`, `agent_email`, `agent_address_line_1`, `agent_address_line_2`, `agent_address_city`, `agent_address_zip_code`, `agent_country`, `status`) VALUES ('3', '    Hello ', '    World', '    bdtask', '    Ew4324', './application/modules/agent/assets/images/85dc84c854a5ac1d28bf75659a261683.jpg', './application/modules/agent/assets/images/956f35999d72732a438d8b986d8622f2.jpg', '    0123456789', '    0123456789', 'hello@world.com', '                                                                                                                                                112, t', '                                                                                                                                                112, t', '    Dhaka', '    1205', 'Algeria', NULL);


#
# TABLE STRUCTURE FOR: employee_history
#

DROP TABLE IF EXISTS `employee_history`;

CREATE TABLE `employee_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `second_name` varchar(30) DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL,
  `phone_no` varchar(30) DEFAULT NULL,
  `email_no` varchar(30) DEFAULT NULL,
  `document_id` varchar(30) DEFAULT NULL,
  `document_pic` varchar(255) DEFAULT NULL,
  `address_line_1` varchar(150) DEFAULT NULL,
  `address_line_2` varchar(150) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `blood_group` varchar(6) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `employee_history` (`id`, `first_name`, `second_name`, `position`, `phone_no`, `email_no`, `document_id`, `document_pic`, `address_line_1`, `address_line_2`, `picture`, `blood_group`, `country`, `city`, `zip`, `status`) VALUES ('4', '      William', '      Hanna', 'Driver', '      0123456789', '', '      ', '', '            ', '            ', './application/modules/hr/assets/images/d.jpg', '      ', '', '      ', '      ', NULL);
INSERT INTO `employee_history` (`id`, `first_name`, `second_name`, `position`, `phone_no`, `email_no`, `document_id`, `document_pic`, `address_line_1`, `address_line_2`, `picture`, `blood_group`, `country`, `city`, `zip`, `status`) VALUES ('2', 'John', 'Doe', 'Driver', '0123456789', '', '', NULL, '', '', NULL, '', '', '', '', NULL);
INSERT INTO `employee_history` (`id`, `first_name`, `second_name`, `position`, `phone_no`, `email_no`, `document_id`, `document_pic`, `address_line_1`, `address_line_2`, `picture`, `blood_group`, `country`, `city`, `zip`, `status`) VALUES ('3', '   William', '   Jonson', ' Jr. Software Engineer', '   0123456789', '', '   ', './application/modules/hr/assets/images/2017-10-15/Tul.jpg', '      ', '      ', './application/modules/hr/assets/images/2017-10-15/i1.jpg', '   ', '', '   ', '   ', NULL);
INSERT INTO `employee_history` (`id`, `first_name`, `second_name`, `position`, `phone_no`, `email_no`, `document_id`, `document_pic`, `address_line_1`, `address_line_2`, `picture`, `blood_group`, `country`, `city`, `zip`, `status`) VALUES ('5', '   Justin', '   Denver', 'Driver', '   0123456789', 'driver@example.com', '     E3434BX', './application/modules/hr/assets/images/2017-10-19/d.jpg', '    123, Green Road', '      Dhaka                  ', './application/modules/hr/assets/images/e5a3e5a0da487d85069ed43c625b3b98.jpg', '   B+', 'Bangladesh', '   Dhaka', '   1205', NULL);
INSERT INTO `employee_history` (`id`, `first_name`, `second_name`, `position`, `phone_no`, `email_no`, `document_id`, `document_pic`, `address_line_1`, `address_line_2`, `picture`, `blood_group`, `country`, `city`, `zip`, `status`) VALUES ('6', '   Elise', '   Rozan', 'Driver', '   2134596900', '', '   ', './application/modules/hr/assets/images/b2791bf437a85e4b2590f3f2970018f7.jpg', '      ', '      ', './application/modules/hr/assets/images/568b2b5da9322d617e29dfdb0b44e4a7.jpg', '   ', '', '   ', '   ', NULL);


#
# TABLE STRUCTURE FOR: employee_type
#

DROP TABLE IF EXISTS `employee_type`;

CREATE TABLE `employee_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `employee_type` (`type_id`, `type_name`, `details`, `status`) VALUES ('1', 'Driver', '', NULL);
INSERT INTO `employee_type` (`type_id`, `type_name`, `details`, `status`) VALUES ('4', ' Helper', '  Test Details', NULL);
INSERT INTO `employee_type` (`type_id`, `type_name`, `details`, `status`) VALUES ('3', ' Jr. Software Engineer', '  ', NULL);


#
# TABLE STRUCTURE FOR: enquiry
#

DROP TABLE IF EXISTS `enquiry`;

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `enquiry` text,
  `checked` tinyint(1) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `checked_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `enquiry` (`enquiry_id`, `email`, `phone`, `name`, `enquiry`, `checked`, `ip_address`, `user_agent`, `checked_by`, `created_date`, `status`) VALUES ('1', 'admin@example.com', '0123456789', 'TEST', 'TEST', '1', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', '0', '2017-08-17 10:51:21', '1');
INSERT INTO `enquiry` (`enquiry_id`, `email`, `phone`, `name`, `enquiry`, `checked`, `ip_address`, `user_agent`, `checked_by`, `created_date`, `status`) VALUES ('2', 'admin@example.com', '0123456789', 'TEST', 'TEST', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', NULL, '2017-08-17 10:57:05', '1');
INSERT INTO `enquiry` (`enquiry_id`, `email`, `phone`, `name`, `enquiry`, `checked`, `ip_address`, `user_agent`, `checked_by`, `created_date`, `status`) VALUES ('3', 'admin@example.com', '0123456789', 'Jane Doe', 'TSET', '1', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', '0', '2017-08-17 13:40:54', '1');
INSERT INTO `enquiry` (`enquiry_id`, `email`, `phone`, `name`, `enquiry`, `checked`, `ip_address`, `user_agent`, `checked_by`, `created_date`, `status`) VALUES ('4', 'jonny@doe.com', '0123654656', 'Jonny Doe', 'TEST', '1', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', '2', '2017-08-17 13:45:55', '1');
INSERT INTO `enquiry` (`enquiry_id`, `email`, `phone`, `name`, `enquiry`, `checked`, `ip_address`, `user_agent`, `checked_by`, `created_date`, `status`) VALUES ('5', 'admin@example.com', '4234234234', 'TEST', 'TEST', '1', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '2', '2017-09-24 12:52:53', '1');


#
# TABLE STRUCTURE FOR: fit_fitness
#

DROP TABLE IF EXISTS `fit_fitness`;

CREATE TABLE `fit_fitness` (
  `fitness_id` int(11) NOT NULL AUTO_INCREMENT,
  `fitness_name` varchar(50) DEFAULT NULL,
  `fitness_description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`fitness_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `fit_fitness` (`fitness_id`, `fitness_name`, `fitness_description`) VALUES ('1', 'Tyre ', 'Tyre of Car');
INSERT INTO `fit_fitness` (`fitness_id`, `fitness_name`, `fitness_description`) VALUES ('4', 'Engine', '');
INSERT INTO `fit_fitness` (`fitness_id`, `fitness_name`, `fitness_description`) VALUES ('6', 'Insurance', '');


#
# TABLE STRUCTURE FOR: fleet_facilities
#

DROP TABLE IF EXISTS `fleet_facilities`;

CREATE TABLE `fleet_facilities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `fleet_facilities` (`id`, `name`, `description`, `status`) VALUES ('1', 'Tea', '', '1');
INSERT INTO `fleet_facilities` (`id`, `name`, `description`, `status`) VALUES ('2', 'Coffee', '', '1');
INSERT INTO `fleet_facilities` (`id`, `name`, `description`, `status`) VALUES ('3', 'Wheelchair', '', '1');


#
# TABLE STRUCTURE FOR: fleet_registration
#

DROP TABLE IF EXISTS `fleet_registration`;

CREATE TABLE `fleet_registration` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(255) DEFAULT NULL,
  `fleet_type_id` int(11) DEFAULT NULL,
  `engine_no` varchar(255) DEFAULT NULL,
  `model_no` varchar(255) DEFAULT NULL,
  `chasis_no` varchar(255) DEFAULT NULL,
  `total_seat` int(11) DEFAULT NULL,
  `seat_numbers` text,
  `fleet_facilities` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `ac_available` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `fleet_registration` (`id`, `reg_no`, `fleet_type_id`, `engine_no`, `model_no`, `chasis_no`, `total_seat`, `seat_numbers`, `fleet_facilities`, `owner`, `company`, `ac_available`, `status`) VALUES ('1', 'DHAKA-TA-1000', '1', '', '', '', '41', 'A 1, A 2, A 3, A 4, B1, B2, B3, B4, C1, C2, C3, D1, D2, D3, D4, E1, E2, E3, E4, C4, F1, F2, F3, F4, G1, G2, G3, G4, H1, H2, H3, H4, I1, I2, I3, I4, J1, J2, J3, J4, J5', 'Tea, Coffee, Wheelchair', '', '', '1', '1');
INSERT INTO `fleet_registration` (`id`, `reg_no`, `fleet_type_id`, `engine_no`, `model_no`, `chasis_no`, `total_seat`, `seat_numbers`, `fleet_facilities`, `owner`, `company`, `ac_available`, `status`) VALUES ('2', 'Dhaka-Kha-2000', '2', 'CE100', 'M100', 'SL-XCESC', '15', 'A, B, C, D, E, F, G, H, I, J, K, L, M, N, O', 'Tea', 'Cargo BD .Net', 'Cargo BD', '1', '1');
INSERT INTO `fleet_registration` (`id`, `reg_no`, `fleet_type_id`, `engine_no`, `model_no`, `chasis_no`, `total_seat`, `seat_numbers`, `fleet_facilities`, `owner`, `company`, `ac_available`, `status`) VALUES ('3', 'Test', '1', '23423', '234234', '', '0', '', '', '234234', '', '0', '1');
INSERT INTO `fleet_registration` (`id`, `reg_no`, `fleet_type_id`, `engine_no`, `model_no`, `chasis_no`, `total_seat`, `seat_numbers`, `fleet_facilities`, `owner`, `company`, `ac_available`, `status`) VALUES ('4', 'CTG-1020', '1', '', '12345', '', '10', '', '', '', '', '1', '1');
INSERT INTO `fleet_registration` (`id`, `reg_no`, `fleet_type_id`, `engine_no`, `model_no`, `chasis_no`, `total_seat`, `seat_numbers`, `fleet_facilities`, `owner`, `company`, `ac_available`, `status`) VALUES ('6', 'CTG-1022', '1', '', '', '', '0', '', '', '', '', '1', '1');


#
# TABLE STRUCTURE FOR: fleet_type
#

DROP TABLE IF EXISTS `fleet_type`;

CREATE TABLE `fleet_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `fleet_type` (`id`, `type`, `status`) VALUES ('1', 'Bus', '1');
INSERT INTO `fleet_type` (`id`, `type`, `status`) VALUES ('2', 'Car', '1');


#
# TABLE STRUCTURE FOR: ftn_fitness_period
#

DROP TABLE IF EXISTS `ftn_fitness_period`;

CREATE TABLE `ftn_fitness_period` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fitness_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_milage` float DEFAULT NULL,
  `end_milage` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO `ftn_fitness_period` (`id`, `fitness_id`, `vehicle_id`, `start_date`, `end_date`, `start_milage`, `end_milage`) VALUES ('9', '1', '1', '2017-10-01', '2017-10-31', '4500', '5000');
INSERT INTO `ftn_fitness_period` (`id`, `fitness_id`, `vehicle_id`, `start_date`, `end_date`, `start_milage`, `end_milage`) VALUES ('2', '4', '2', '2017-10-16', '2017-10-31', '1000', '10000');


#
# TABLE STRUCTURE FOR: language
#

DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` varchar(100) NOT NULL,
  `english` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=437 DEFAULT CHARSET=utf8;

INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('1', 'login', 'Login');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('2', 'email', 'Email Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('3', 'password', 'Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('4', 'reset', 'Reset');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('5', 'dashboard', 'Dashboard');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('6', 'home', 'Home');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('7', 'profile', 'Profile');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('8', 'profile_setting', 'Profile Setting');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('9', 'firstname', 'First Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('10', 'lastname', 'Last Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('11', 'about', 'About');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('12', 'preview', 'Preview');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('13', 'image', 'Image');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('14', 'save', 'Save');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('15', 'upload_successfully', 'Upload Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('16', 'user_added_successfully', 'User Added Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('17', 'please_try_again', 'Please Try Again...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('18', 'inbox_message', 'Inbox Messages');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('19', 'sent_message', 'Sent Message');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('20', 'message_details', 'Message Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('21', 'new_message', 'New Message');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('22', 'receiver_name', 'Receiver Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('23', 'sender_name', 'Sender Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('24', 'subject', 'Subject');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('25', 'message', 'Message');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('26', 'message_sent', 'Message Sent!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('27', 'ip_address', 'IP Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('28', 'last_login', 'Last Login');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('29', 'last_logout', 'Last Logout');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('30', 'status', 'Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('31', 'delete_successfully', 'Delete Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('32', 'send', 'Send');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('33', 'date', 'Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('34', 'action', 'Action');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('35', 'sl_no', 'SL No.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('36', 'are_you_sure', 'Are You Sure ? ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('37', 'application_setting', 'Application Setting');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('38', 'application_title', 'Application Title');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('39', 'address', 'Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('40', 'phone', 'Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('41', 'favicon', 'Favicon');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('42', 'logo', 'Logo');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('43', 'language', 'Language');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('44', 'left_to_right', 'Left To Right');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('45', 'right_to_left', 'Right To Left');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('46', 'footer_text', 'Footer Text');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('47', 'site_align', 'Application Alignment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('48', 'welcome_back', 'Welcome Back!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('49', 'please_contact_with_admin', 'Please Contact With Admin');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('50', 'incorrect_email_or_password', 'Incorrect Email/Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('51', 'select_option', 'Select Option');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('52', 'ftp_setting', 'Data Synchronize [FTP Setting]');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('53', 'hostname', 'Host Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('54', 'username', 'User Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('55', 'ftp_port', 'FTP Port');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('56', 'ftp_debug', 'FTP Debug');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('57', 'project_root', 'Project Root');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('58', 'update_successfully', 'Update Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('59', 'save_successfully', 'Save Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('61', 'internet_connection', 'Internet Connection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('62', 'ok', 'Ok');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('63', 'not_available', 'Not Available');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('64', 'available', 'Available');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('65', 'outgoing_file', 'Outgoing File');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('66', 'incoming_file', 'Incoming File');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('67', 'data_synchronize', 'Data Synchronize');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('68', 'unable_to_upload_file_please_check_configuration', 'Unable to upload file! please check configuration');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('69', 'please_configure_synchronizer_settings', 'Please configure synchronizer settings');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('70', 'download_successfully', 'Download Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('71', 'unable_to_download_file_please_check_configuration', 'Unable to download file! please check configuration');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('72', 'data_import_first', 'Data Import First');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('73', 'data_import_successfully', 'Data Import Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('74', 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data! please check configuration / SQL file.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('75', 'download_data_from_server', 'Download Data from Server');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('76', 'data_import_to_database', 'Data Import To Database');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('77', 'data_upload_to_server', 'Data Upload to Server');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('78', 'please_wait', 'Please Wait...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('79', 'ooops_something_went_wrong', ' Ooops something went wrong...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('80', 'module_permission_list', 'Module Permission List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('81', 'user_permission', 'User Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('82', 'add_module_permission', 'Add Module Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('83', 'module_permission_added_successfully', 'Module Permission Added Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('84', 'update_module_permission', 'Update Module Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('85', 'download', 'Download');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('86', 'module_name', 'Module Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('87', 'create', 'Create');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('88', 'read', 'Read');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('89', 'update', 'Update');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('90', 'delete', 'Delete');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('91', 'module_list', 'Module List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('92', 'add_module', 'Add Module');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('93', 'directory', 'Module Direcotory');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('94', 'description', 'Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('95', 'image_upload_successfully', 'Image Upload Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('96', 'module_added_successfully', 'Module Added Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('97', 'inactive', 'Inactive');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('98', 'active', 'Active');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('99', 'user_list', 'User List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('100', 'see_all_message', 'See All Messages');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('101', 'setting', 'Setting');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('102', 'logout', 'Logout');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('103', 'admin', 'Admin');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('104', 'add_user', 'Add User');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('105', 'user', 'User');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('106', 'module', 'Module');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('107', 'new', 'New');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('108', 'inbox', 'Inbox');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('109', 'sent', 'Sent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('110', 'synchronize', 'Synchronize');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('111', 'data_synchronizer', 'Data Synchronizer');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('112', 'module_permission', 'Module Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('113', 'backup_now', 'Backup Now!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('114', 'restore_now', 'Restore Now!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('115', 'backup_and_restore', 'Backup and Restore');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('116', 'captcha', 'Captcha Word');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('117', 'database_backup', 'Database Backup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('118', 'restore_successfully', 'Restore Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('119', 'backup_successfully', 'Backup Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('120', 'filename', 'File Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('121', 'file_information', 'File Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('122', 'size', 'Size');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('123', 'backup_date', 'Backup Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('124', 'overwrite', 'Overwrite');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('125', 'invalid_file', 'Invalid File!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('126', 'invalid_module', 'Invalid Module');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('127', 'remove_successfully', 'Remove Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('128', 'install', 'Install');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('129', 'uninstall', 'Uninstall');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('130', 'tables_are_not_available_in_database', 'Tables are not available in database.sql');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('131', 'no_tables_are_registered_in_config', 'No tables are registerd in config.php');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('132', 'enquiry', 'Enquiry');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('133', 'read_unread', 'Read/Unread');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('134', 'enquiry_information', 'Enquiry Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('135', 'user_agent', 'User Agent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('136', 'checked_by', 'Checked By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('137', 'new_enquiry', 'New Enquiry');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('138', 'fleet', 'Fleet Management');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('139', 'fleet_type', 'Fleet Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('140', 'add', 'Add');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('141', 'list', 'List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('142', 'fleet_facilities', 'Fleet Facilities');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('143', 'fleet_registration', 'Fleet Registration');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('144', 'reg_no', 'Registration No.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('145', 'model_no', 'Model No.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('146', 'engine_no', 'Engine No.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('147', 'chasis_no', 'Chasis No.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('148', 'total_seat', 'Total Seat');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('149', 'seat_numbers', 'Seat Number');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('150', 'owner', 'Owner');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('151', 'company', 'Company Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('152', 'trip', 'Trip Management');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('153', 'location', 'Location');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('154', 'route', 'Route');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('155', 'assign', 'Assign');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('156', 'close', 'Close');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('157', 'location_name', 'Location Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('158', 'google_map', 'Google Map');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('159', 'start_point', 'Start Point');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('160', 'end_point', 'End Point');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('161', 'route_name', 'Route Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('162', 'distance', 'Distance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('163', 'approximate_time', 'Approximate Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('164', 'stoppage_points', 'Stoppage Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('165', 'fleet_registration_no', 'Fleet Registration No.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('166', 'start_date', 'Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('167', 'end_date', 'End Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('168', 'driver_name', 'Driver Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('169', 'assistants_ids', 'Assistants');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('170', 'sold_ticket', 'Sold Ticket');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('171', 'total_income', 'Total Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('172', 'total_expense', 'Total Expense');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('173', 'total_fuel', 'Total Fuel');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('174', 'trip_comment', 'Trip Comment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('175', 'closed_by', 'Closed by');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('176', 'ticket', 'Ticket Management');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('177', 'passenger', 'Passenger');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('178', 'middle_name', 'Middle Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('179', 'date_of_birth', 'Date of Birth');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('180', 'passenger_id', 'Passenger ID.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('181', 'address_line_1', 'Address Line 1');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('182', 'address_line_2', 'Address Line 2');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('184', 'zip_code', 'Zip Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('186', 'name', 'Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('187', 'ac_available', 'AC available');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('188', 'trip_id', 'Trip ID.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('189', 'book', 'Book');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('190', 'booking_id', 'Booking ID.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('191', 'available_seats', 'Available Seats');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('192', 'select_seats', 'Select Seats');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('193', 'time', 'Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('194', 'offer_code', 'Offer Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('195', 'price', 'Price');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('196', 'discount', 'Discount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('197', 'request_facilities', 'Request Facilities');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('198', 'pickup_location', 'Pickup Location');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('199', 'drop_location', 'Drop Location');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('200', 'amount', 'Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('201', 'invalid_passenger_id', 'Invalid Passenger ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('202', 'invalid_input', 'Invalid Input');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('203', 'booking_date', 'Booking Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('204', 'cancelation_fees', 'Cancelation Fees');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('205', 'causes', 'Causes');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('206', 'comment', 'Comment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('207', 'refund', 'Refund');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('208', 'refund_by', 'Refund by');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('209', 'feedback', 'Feedback');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('210', 'rating', 'Rating');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('211', 'blood_group', 'Blood Group');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('212', 'religion', 'Religion');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('219', 'details', 'Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('220', 'type_name', 'Type Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('221', 'view_details', 'View Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('222', 'document_pic', 'Document Picture');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('223', 'fitness_list', 'Fitness List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('226', 'fitness_name', 'Fitness Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('227', 'fitness_description', 'Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('228', 'successfully_updated', 'Your Data Successfully Updated');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('229', 'fitness_period', 'Fitness Period List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('230', 'fitness_id', 'Fitness Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('231', 'vehicle_id', 'Vehicles No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('234', 'start_milage', 'Start Milage');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('235', 'end_milage', 'End Milage');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('236', 'agent', 'Agent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('237', 'agent_first_name', 'First Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('238', 'agent_second_name', 'LastName');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('239', 'agent_company_name', 'Company Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('240', 'agent_document_id', 'Document ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('241', 'agent_pic_document', 'Document File');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('242', 'agent_phone', 'Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('243', 'agent_mobile', 'Mobile No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('244', 'agent_email', 'Email');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('245', 'agent_address_line_1', 'Address Line 1');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('246', 'agent_address_line_2', 'Address Line 2');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('247', 'agent_address_city', 'City');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('248', 'agent_address_zip_code', 'ZIP');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('249', 'agent_country', 'Country');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('252', 'sl', 'SL');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('253', 'route_id', 'Rout Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('254', 'vehicle_type_id', 'Vehicle Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('255', 'group_price_per_person', 'Group Price Per Person');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('256', 'group_size', 'Group Members');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('257', 'successfully_saved', 'Your Data Successfully Saved');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('258', 'account', 'Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('259', 'account_name', 'Account Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('260', 'account_type', 'Account Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('261', 'account_transaction', 'Account Transaction');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('262', 'account_id', 'Account Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('263', 'transaction_description', 'Transaction Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('265', 'pass_book_id', 'Passenger ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('267', 'payment_id', 'Payment ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('268', 'create_by_id', 'Created By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('269', 'offer', 'Offer');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('270', 'offer_name', 'Offer Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('271', 'offer_start_date', 'Offer Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('272', 'offer_end_date', 'Offer Last Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('274', 'offer_discount', 'Discount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('275', 'offer_terms', 'Offer Terms');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('276', 'offer_route_id', 'Rout Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('277', 'offer_number', 'Offer Number');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('280', 'seat_number', 'Seat No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('281', 'available_seat', 'Available Seat');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('282', 'owner_name', 'Owner Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('283', 'agent_picture', 'Picture');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('284', 'account_add', 'Add Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('285', 'add_agent', 'Add Agent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('286', 'hr', 'Human Resource');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('287', 'create_hr', 'Add Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('288', 'serial', 'Sl');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('289', 'position', 'Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('290', 'phone_no', 'Phone No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('291', 'email_no', 'Email');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('292', 'picture', 'Picture');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('293', 'first_name', 'First Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('294', 'second_name', 'Last Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('295', 'document_id', 'Documet Id');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('298', 'country', 'Country');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('299', 'city', 'City');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('300', 'zip', 'Zip ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('393', 'add_passenger', 'Add Passenger');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('394', 'search_tiket', 'Search Ticket');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('395', 'slogan', 'Slogan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('396', 'website', 'Website');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('397', 'submit', 'Submit');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('398', 'customer_service', 'Customer Service');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('399', 'submit_successfully', 'Submit Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('400', 'add_to_website', 'Add to Website');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('401', 'our_customers_say', 'Our Customers Say');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('402', 'website_status', 'Website Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('403', 'title', 'Title');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('405', 'total_fleet', 'Total Fleet');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('406', 'total_passenger', 'Total Passenger');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('407', 'todays_trip', 'Today\'s Trip');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('408', 'seats_available', 'Seats Available');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('409', 'no_trip_avaiable', 'No trip avaiable');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('410', 'booking', 'Booking');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('411', 'something_went_worng', 'Something went worng!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('412', 'paypal_email', 'Paypal Email');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('413', 'currency', 'Currency');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('414', 'reports', 'Reports');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('415', 'search', 'Search');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('417', 'go', 'Go');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('418', 'all', 'All');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('419', 'filter', 'Filter');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('420', 'last_year_progress', 'Last Year Progress');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('421', 'download_document', 'Download Document');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('422', 'mobile', 'Mobile No.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('424', 'account_list', 'Account List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('425', 'add_income', 'Add Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('426', 'add_expense', 'Add Expense');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('427', 'agent_list', 'Agent List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('428', 'add_fitness', 'Add Fitness');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('429', 'fitness', 'Fitness');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('430', 'add_fitness_period', 'Add Fitness Period');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('431', 'employee_type', 'Employee Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('432', 'employee_list', 'Employee List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('433', 'add_offer', 'Add Offer');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('434', 'offer_list', 'Offer List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('435', 'add_price', 'Add Price');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('436', 'price_list', 'Price List');


#
# TABLE STRUCTURE FOR: message
#

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  `sender_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unseen, 1=seen, 2=delete',
  `receiver_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unseen, 1=seen, 2=delete',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('1', '2', '1', 'TEST', 'All the best', '2017-02-07 00:00:00', '0', '2');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('3', '26', '3', 'TEST', 'Hello world!', '2017-02-07 00:00:00', '0', '1');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('10', '2', '17', 'TEST', 'The quick brown fox jumps over the lazy dog!', '2017-02-07 11:34:41', '0', '0');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('11', '2', '6', 'ateat', '<p>TEST</p>', '2017-05-11 10:00:07', '1', '1');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('12', '3', '6', 'Test', '<p>Test</p>', '2017-10-14 11:43:25', '1', '0');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('13', '1', '2', 'Test', '<p>TEST</p>', '2017-10-14 11:44:10', '1', '1');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('14', '2', '1', 'Test', '<p>sadfsadf</p>', '2017-10-14 01:23:38', '1', '0');


#
# TABLE STRUCTURE FOR: module
#

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `directory` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('24', 'Ticket Management', 'Simple Ticket Management System', 'application/modules/ticket/assets/images/thumbnail.jpg', 'ticket', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('25', 'Trip Management', 'Simple Trip System Management with location, route, trip assign and trip close.', 'application/modules/trip/assets/images/thumbnail.jpg', 'trip', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('26', 'Enquiry Management System', 'Simple Enquiry System', 'application/modules/enquiry/assets/images/thumbnail.jpg', 'enquiry', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('27', 'Fleet Management', 'Simple fleet System', 'application/modules/fleet/assets/images/thumbnail.jpg', 'fleet', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('38', 'Account', 'Account information', 'application/modules/account/assets/images/thumbnail.jpg', 'account', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('39', 'Agent', 'Agent information', 'application/modules/agent/assets/images/thumbnail.jpg', 'agent', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('43', 'Price', 'Price information', 'application/modules/price/assets/images/thumbnail.jpg', 'price', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('44', 'Hr', 'Hr information', 'application/modules/hr/assets/images/thumbnail.jpg', 'hr', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('45', 'offer', 'Price information', 'application/modules/offer/assets/images/thumbnail.jpg', 'offer', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('46', 'FITNESS', 'fitness', 'application/modules/fitness/assets/images/thumbnail.jpg', 'fitness', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('47', 'Website Management', 'Simple website System', 'application/modules/website/assets/images/thumbnail.jpg', 'website', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('48', 'Reports', 'Application Report', 'application/modules/reports/assets/images/thumbnail.jpg', 'reports', '1');


#
# TABLE STRUCTURE FOR: module_permission
#

DROP TABLE IF EXISTS `module_permission`;

CREATE TABLE `module_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_module_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=288 DEFAULT CHARSET=utf8;

INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('276', '24', '3', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('277', '25', '3', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('278', '26', '3', '1', '1', '1', '1');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('279', '27', '3', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('280', '38', '3', '1', '1', '1', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('281', '39', '3', '0', '1', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('282', '43', '3', '1', '1', '1', '1');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('283', '44', '3', '1', '1', '1', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('284', '45', '3', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('285', '46', '3', '1', '1', '1', '1');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('286', '47', '3', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('287', '48', '3', '0', '0', '0', '0');


#
# TABLE STRUCTURE FOR: ofr_offer
#

DROP TABLE IF EXISTS `ofr_offer`;

CREATE TABLE `ofr_offer` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` varchar(100) DEFAULT NULL,
  `offer_start_date` date DEFAULT NULL,
  `offer_end_date` date DEFAULT NULL,
  `offer_code` varchar(50) DEFAULT NULL,
  `offer_discount` float DEFAULT NULL,
  `offer_terms` varchar(30) DEFAULT NULL,
  `offer_route_id` varchar(50) DEFAULT NULL,
  `offer_number` int(15) DEFAULT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `ofr_offer` (`offer_id`, `offer_name`, `offer_start_date`, `offer_end_date`, `offer_code`, `offer_discount`, `offer_terms`, `offer_route_id`, `offer_number`) VALUES ('2', 'Eid Offer', '2017-08-15', '2017-09-30', '101', '10', '', '1', '10');
INSERT INTO `ofr_offer` (`offer_id`, `offer_name`, `offer_start_date`, `offer_end_date`, `offer_code`, `offer_discount`, `offer_terms`, `offer_route_id`, `offer_number`) VALUES ('3', 'Summer offer', '2017-10-24', '2017-10-31', '1000', '100', '', '2', '10');


#
# TABLE STRUCTURE FOR: pri_price
#

DROP TABLE IF EXISTS `pri_price`;

CREATE TABLE `pri_price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` varchar(50) DEFAULT NULL,
  `vehicle_type_id` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `group_price_per_person` float DEFAULT NULL,
  `group_size` int(15) DEFAULT NULL,
  PRIMARY KEY (`price_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `pri_price` (`price_id`, `route_id`, `vehicle_type_id`, `price`, `group_price_per_person`, `group_size`) VALUES ('2', '1', '1', '20', '15', '3');
INSERT INTO `pri_price` (`price_id`, `route_id`, `vehicle_type_id`, `price`, `group_price_per_person`, `group_size`) VALUES ('3', '2', '1', '28', '25', '5');
INSERT INTO `pri_price` (`price_id`, `route_id`, `vehicle_type_id`, `price`, `group_price_per_person`, `group_size`) VALUES ('4', '1', '2', '20', '10', '10');


#
# TABLE STRUCTURE FOR: setting
#

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `address` text,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `site_align` varchar(50) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `setting` (`id`, `title`, `address`, `email`, `phone`, `logo`, `favicon`, `language`, `site_align`, `footer_text`) VALUES ('2', 'Fleet Ticketing System', '98 Green Road, Farmgate, Dhaka-1215.', 'bdtask@gmail.com', '0123456789', '', '', 'english', 'LTR', '2017©Copyright');


#
# TABLE STRUCTURE FOR: synchronizer_setting
#

DROP TABLE IF EXISTS `synchronizer_setting`;

CREATE TABLE `synchronizer_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `synchronizer_setting` (`id`, `hostname`, `username`, `password`, `port`, `debug`, `project_root`) VALUES ('8', '70.35.198.200', 'spreadcargo', '123123123123', '21', 'true', './public_html/');


#
# TABLE STRUCTURE FOR: tkt_booking
#

DROP TABLE IF EXISTS `tkt_booking`;

CREATE TABLE `tkt_booking` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_no` varchar(20) DEFAULT NULL,
  `trip_id_no` varchar(20) DEFAULT NULL,
  `tkt_passenger_id_no` varchar(20) DEFAULT NULL,
  `trip_route_id` int(11) DEFAULT NULL,
  `pickup_trip_location` varchar(50) DEFAULT NULL,
  `drop_trip_location` varchar(50) DEFAULT NULL,
  `request_facilities` text,
  `price` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `total_seat` int(11) DEFAULT NULL,
  `seat_numbers` varchar(255) DEFAULT NULL,
  `offer_code` varchar(255) DEFAULT NULL,
  `tkt_refund_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `booking_date` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_no` (`id_no`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8;

INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('1', 'BKGU9P9X', '170810111047', 'PEH0T7OI', '2', 'Dhaka', 'Comilla', 'Tea, ', '200', '50', '1', 'A 1,', '100', '1', NULL, '2016-01-10 00:00:00', '2017-08-10 12:33:28');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('2', 'BB3TBEEF', '170810111047', 'PBME2RPI', '1', 'Dhaka', 'Feni', 'Tea, Coffee, ', '400', '50', '2', 'A 2,A 3,', '100', '2', NULL, '2017-01-10 00:30:00', '2017-08-12 09:08:00');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('3', 'B2GRO5IX', '170810111047', 'PVRDGWMJ', '1', 'Dhaka', 'Feni', 'Tea, ', '200', '0', '1', 'A 4,', '', NULL, NULL, '2017-01-11 00:00:00', '2017-08-12 09:53:30');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('4', 'BY02DQ9T', '170810111047', 'PGC3EX3K', '1', 'Dhaka', 'Feni', 'Tea, ', '200', '0', '1', 'A 5,', '', NULL, NULL, '2017-08-10 00:30:00', '2017-08-12 09:54:44');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('5', 'BVA8KUSY', '170813082450', 'PKNZZWZD', '1', 'Dhaka', 'Feni', 'Tea, ', '400', '50', '2', 'A 1,A 2,', '100', NULL, NULL, '2017-08-13 00:00:00', '2017-08-13 09:00:35');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('6', 'B8LJKNO3', '170819124818', 'PGZ329IB', '1', 'Dhaka', 'Feni', 'Tea, ', '400', '0', '2', 'A 1,A 2,', '', NULL, NULL, '2017-08-23 11:00:00', '2017-08-23 12:51:52');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('7', 'BMEMZ97Z', '170819124815', 'PDUSYFNL', '1', 'Dhaka', 'Feni', 'Tea, ', '200', '0', '1', 'A 1,', '', NULL, NULL, '2017-08-23 06:30:00', '2017-08-23 12:52:32');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('8', 'BH92JT9L', '170819124815', 'PFITTTYS', '1', 'Dhaka', 'Dhaka', 'Tea, ', '400', '0', '2', 'A 2,A 3,', '', NULL, NULL, '2017-08-23 06:00:00', '2017-08-23 12:53:14');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('9', 'BJDZVOTC', '170819124818', 'PZXWLO8M', '1', 'Dhaka', 'Feni', 'Tea, Coffee, ', '600', '100', '4', 'D2, D3, D4, E1, ', '101', NULL, NULL, '2017-08-30 11:30:00', '2017-08-30 09:10:35');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('197', 'BREPFG37', '170819124818', 'PA1UXB6L', '1', 'Dhaka', 'Feni', 'Tea, Coffee, ', '60', '0', '4', 'E2, E3, E4, C4, ', '', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:21:25');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('198', 'BJFNNPDA', '170819124818', 'PV20EMWV', '1', 'Dhaka', 'Feni', 'Tea, Coffee, ', '45', '0', '3', 'C1, C2, C3, ', '', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:24:29');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('199', 'BKJPGOQB', '170819124818', 'PTRHKOT8', '1', 'Dhaka', 'Feni', NULL, '20', '0', '1', 'D1, ', '', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:31:11');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('200', 'BJILYNBW', '170819124818', 'PBXWZQ25', '2', 'Dhaka', 'Feni', 'Tea, Coffee, ', '40', '0', '2', 'F1, F2, ', '', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:37:39');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('201', 'B2L18LOY', '170819124818', 'PM69YI1X', '1', 'Dhaka', 'Feni', 'Tea, Coffee, ', '20', '0', '1', 'F3, ', 'ters', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:47:09');
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES ('202', 'BNVY5X9Y', '170819124818', 'P09YCE0S', '1', 'Dhaka', 'Feni', 'Tea, Coffee, ', '20', '0', '1', 'F4, ', '100', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:51:01');


#
# TABLE STRUCTURE FOR: tkt_feedback
#

DROP TABLE IF EXISTS `tkt_feedback`;

CREATE TABLE `tkt_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tkt_booking_id_no` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `comment` text,
  `rating` tinyint(1) DEFAULT '1',
  `add_to_website` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

INSERT INTO `tkt_feedback` (`id`, `tkt_booking_id_no`, `name`, `comment`, `rating`, `add_to_website`) VALUES ('17', 'B4EFDEFD', 'Jane Doe', '', '3', '0');
INSERT INTO `tkt_feedback` (`id`, `tkt_booking_id_no`, `name`, `comment`, `rating`, `add_to_website`) VALUES ('19', 'BKGU9P9X', 'Jane Doe', 'TEST', '5', '0');
INSERT INTO `tkt_feedback` (`id`, `tkt_booking_id_no`, `name`, `comment`, `rating`, `add_to_website`) VALUES ('20', 'B4EFDEFD', 'Jane Doe || ', 'TEST', '5', '0');
INSERT INTO `tkt_feedback` (`id`, `tkt_booking_id_no`, `name`, `comment`, `rating`, `add_to_website`) VALUES ('21', 'BB3TBEEF', 'Jane Doe || ', 'TEST', '4', '0');
INSERT INTO `tkt_feedback` (`id`, `tkt_booking_id_no`, `name`, `comment`, `rating`, `add_to_website`) VALUES ('22', 'BKGU9P9X', 'John Doe', 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type', '5', '1');
INSERT INTO `tkt_feedback` (`id`, `tkt_booking_id_no`, `name`, `comment`, `rating`, `add_to_website`) VALUES ('23', 'BKGU9P9X', 'Jennifer doe', 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type', '5', '1');


#
# TABLE STRUCTURE FOR: tkt_passenger
#

DROP TABLE IF EXISTS `tkt_passenger`;

CREATE TABLE `tkt_passenger` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_no` varchar(20) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address_line_1` varchar(255) DEFAULT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('1', 'PEH0T7OI', 'Tuhin', 'Sorkar', '', '012345678', 'tuhin@demo.com', '', NULL, '2017-08-10', './application/modules/ticket/assets/images/passenger/2017-10-21/i.jpg', '98, Green road', 'Farmgate ', 'Dhaka', '1205', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('12', 'PTVP74GO', 'Tuhin', 'Mahmood', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('13', 'P7NOVGIH', 'Sayem', 'Mahmood', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('14', 'P7VD9JTW', 'Rifat', 'Bin', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('15', 'P33BR4FX', 'Shohag', 'Islam', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('16', 'PTKT5MPW', 'Ahmed', 'Ali', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('17', 'PR4KNYTQ', 'Ahmed', 'Ali', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('18', 'PH190DLC', 'M', 'Joy', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('19', 'PBME2RPI', 'Santu', 'Roy', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('20', 'PVRDGWMJ', 'Tuhin', 'Sorkar', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('21', 'PGC3EX3K', 'Sabuj', 'Al Amin', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('22', 'PPPL3J9B', 'Jahed', 'Abdullah', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('23', 'PAUFQ8U4', 'Sabuj', 'Ali', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('24', 'PV3470JX', 'John', 'Doe', NULL, '32423423423', 'john@doe.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, 'TEST', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('25', 'PKNZZWZD', 'Ahmed', 'Ali', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('26', 'PGZ329IB', 'Karim', 'Khan', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('27', 'PDUSYFNL', 'Sharif', 'Khan', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('30', 'P4O3CV0W', 'Jahed', 'Abdullah', NULL, '0123456789', 'jahed@example.com', '4b5a31c16e8f4dca08ef67830b27d15f', NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('31', 'P8QPHAF2', 'Jahed', 'Abdullah', NULL, '012346567888989', 'jahed@example.com', '1654a5f5492dcc35692e924bfa7e7486', NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('32', 'PYDQRMK3', 'John ', 'Doe', NULL, '0123456789', 'john@doe.com', 'e76710452deeaecb3291eee8914c71f2', NULL, NULL, NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('33', 'PBAKE0PB', 'Kamal', 'Uddin', NULL, '01234566789', 'kamal@gmail.com', '491f9f4e5a624ac5719ed7009af5eecd', NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('34', 'PZ5I563Q', 'Kamal', 'Uddin', NULL, '0123456789', 'kamal@gmail.com', 'c05f70280df53f4bb440e3bfe487308e', NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('35', 'P0KPPPL3', 'Jenny', 'Jay', NULL, '88015552585', 'jenny@example.com', 'b79fcdc70ec731225934d08e0eddc253', NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('55', 'PD4CM0XD', 'Tuhin', 'Sorkar', NULL, '0123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('56', 'PEJNSXWO', 'Tuhin', 'Sorkar', NULL, '123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('57', 'PEHTZNBF', 'asda', 'asda', NULL, '5346365463', 'sdsfd@fgd.com', NULL, NULL, NULL, NULL, 'dfsdfgsdgd', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('58', 'P768WB6J', 'sadf', 'asdf', NULL, '23423423', 'sdafasdf@exadfasdfsa.com', NULL, NULL, NULL, NULL, 'asdfsadf', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('59', 'PZK7XYHS', 'TEST', 'Sorkar', NULL, '23423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('60', 'PW8J3URD', 'Tuhin', 'Sorkar', NULL, '4534534', 'admin@example.com', NULL, NULL, NULL, NULL, 'DSDFDSF', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('61', 'P3MSBBRG', 'Tuhin', 'Sorkar', NULL, '324234', 'admin@example.com', NULL, NULL, NULL, NULL, 'DASAF', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('62', 'P7D0FNZZ', 'Tuhin', 'Sorkar', NULL, '32234532523', 'admin@example.com', NULL, NULL, NULL, NULL, 'DE', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('63', 'PXNKF08O', 'Tuhin', 'Sorkar', NULL, '2342353454325', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('64', 'PYDNZSJQ', 'Tuhin', 'Sorkar', NULL, '324234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'asdfasdf', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('65', 'PN4V6Y1R', 'Tuhin', 'Sorkar', NULL, '34234234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('66', 'PN0RV1QB', 'Tuhin', 'Sorkar', NULL, '32423423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('67', 'PN41RUMV', 'Tuhin', 'Sorkar', NULL, '3453245', 'admin@example.com', NULL, NULL, NULL, NULL, 'asdfsadf', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('68', 'PUPLMZLF', 'Tuhin', 'Sorkar', NULL, '423423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'sdfasdfsdf', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('69', 'P23XEEE5', 'Tuhin', 'Sorkar', NULL, '3423423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'DSAA', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('70', 'PQ9Y74G4', 'Tuhin', 'Sorkar', NULL, '45345324534', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('71', 'PUSYFNLM', 'Tuhin', 'Sorkar', NULL, '34234234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('72', 'PITTTYSH', 'Tuhin', 'Sorkar', NULL, '23423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('73', 'P9BZ329I', 'Tuhin', 'Sorkar', NULL, '2324324234', 'admin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('74', 'P3U1W3R6', 'Tuhin', 'Sorkar', NULL, '3423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('75', 'P82ARER6', 'Tuhin', 'Sorkar', NULL, '23423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('76', 'P2C1CVTV', 'Tuhin', 'Sorkar', NULL, '32412312312', 'admin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('77', 'P031NNDS', 'Tuhin', 'Sorkar', NULL, '234234234', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('80', 'PDSYGAFN', 'Tuhin', 'Sorkar', NULL, '234234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'SASDASD', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('81', 'P90DLC71', 'Tuhin', 'Sorkar', NULL, '123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('82', 'PTIJ3TC7', 'Tuhin', 'Sorkar', NULL, '23423423423', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('83', 'P8NHS43Q', 'Tuhin', 'Sorkar', NULL, '34234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'DA', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('84', 'PAB1EJXQ', 'Tuhin', 'Sorkar', NULL, '234234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('85', 'P3CV0WZ3', 'Tuhin', 'Sorkar', NULL, '34223423', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'DATA', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('86', 'PJAY8ZH5', 'Tuhin', 'Sorkar', NULL, '123245465', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('87', 'PG3DZ5XS', 'Tuhin', 'Sorkar', NULL, '32456788', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('88', 'PICCOLX7', 'Tuhin', 'Sorkar', NULL, '23423423423', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TETS', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('89', 'PK3NYEKF', 'Tuhin', 'Sorkar', NULL, '4234123', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('90', 'P9WUSCG8', 'Tuhin', 'Sorkar', NULL, '453453245324', 'admin@example.com', NULL, NULL, NULL, NULL, 'sadfasdfs', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('91', 'PA1UXB6L', 'Tuhin', 'Sorkar', NULL, '3423423423', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Tadsf', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('92', 'PV20EMWV', 'Tuhin', 'Sorkar', NULL, '12312312', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('93', 'PTRHKOT8', 'Tuhin', 'Sorkar', NULL, '324223', 'admin@example.com', NULL, NULL, NULL, NULL, 'sadfasd', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('94', 'PBXWZQ25', 'Tuhin', 'Sorkar', NULL, '23423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEWT', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('95', 'PM69YI1X', 'Tuhin', 'Sorkar', NULL, '3423421312312', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TETS', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('96', 'P09YCE0S', 'Tuhin', 'Sorkar', NULL, '123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('97', 'PE2RPIB3', 'Tuhin', 'Sorkar', NULL, '123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('98', 'PAYY5DUC', 'John', 'Doe', NULL, '0123456789', 'john@doe.com', NULL, NULL, NULL, NULL, 'NY, USA', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('99', 'PVKAYY5D', 'John', 'Doe', NULL, '2345678909', 'john@doe.com', NULL, NULL, NULL, NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('100', 'P8O31WUA', 'John', 'Doe', NULL, '234567890', 'john@doe.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('101', 'PZAIGK1V', 'John', 'Doe', NULL, '2134567890', 'john@doe.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('103', 'PY1M8Y8Y', 'John', 'Doe', NULL, '2134546789', 'john@doe.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('104', 'PQWPLPZ2', 'John', 'Doe', NULL, '324234234', 'john@doe.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('105', 'PIGK1VBJ', 'John', 'Doe', NULL, '123123123123', 'john@doe.com', NULL, NULL, NULL, NULL, 'TEWST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('106', 'PM8Y8YEC', 'John', 'Doe', NULL, '32456789', 'john@doe.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('107', 'PE60AVGO', 'John', 'Doe', NULL, '34234234234', 'john@doe.com', NULL, NULL, NULL, NULL, 'EST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('108', 'P502KQNI', 'John', 'Doe', NULL, '123456', 'john@doe.com', NULL, NULL, NULL, NULL, 'TeST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('109', 'PSOQ60KT', 'Tuhin', 'Sorkar', NULL, '124567890', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TET', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('110', 'PNYTQRPG', 'Tuhin', 'Sorkar', NULL, '3244', 'admin@example.com', NULL, NULL, NULL, NULL, 'rdsfsd', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('111', 'PTYKSOQ6', 'Tuhin', 'Sorkar', NULL, '4234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('112', 'PWZ3U1W3', 'Tuhin', 'Sorkar', NULL, '45234234', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('113', 'P8A6MBM4', 'Tuhin', 'Sorkar', NULL, '4567899009887765', 'admin@example.com', NULL, NULL, NULL, NULL, 'vg fhg fhg', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('114', 'P6RD15O9', 'Tuhin', 'Sorkar', '', '432423423', 'admin@example.com', '', NULL, '2017-10-12', '', 'TESt', '', '', '', 'BD', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('123', 'PXPS3LG8', 'Jahed', 'Abdullah', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', '', '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('124', 'P9YL2FBA', 'Test', 'User', NULL, '0123456789', 'admin@example.com', NULL, NULL, NULL, NULL, 'de', NULL, NULL, NULL, NULL, '1');
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES ('125', 'P2MM9RSH', 'Jhon', 'Doe', NULL, '0123456789', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '1');


#
# TABLE STRUCTURE FOR: tkt_referal
#

DROP TABLE IF EXISTS `tkt_referal`;

CREATE TABLE `tkt_referal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tkt_passenger_id_no` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: tkt_refund
#

DROP TABLE IF EXISTS `tkt_refund`;

CREATE TABLE `tkt_refund` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tkt_booking_id_no` varchar(20) DEFAULT NULL,
  `tkt_passenger_id_no` varchar(20) DEFAULT NULL,
  `cancelation_fees` float DEFAULT NULL,
  `causes` text,
  `comment` text,
  `refund_by_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tkt_refund_tkt_booking` (`tkt_booking_id_no`),
  CONSTRAINT `FK_tkt_refund_tkt_booking` FOREIGN KEY (`tkt_booking_id_no`) REFERENCES `tkt_booking` (`id_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `tkt_refund` (`id`, `tkt_booking_id_no`, `tkt_passenger_id_no`, `cancelation_fees`, `causes`, `comment`, `refund_by_id`, `date`) VALUES ('1', 'BKGU9P9X', 'PEH0T7OI', '231', '', '', '2', '2017-08-12 11:51:25');
INSERT INTO `tkt_refund` (`id`, `tkt_booking_id_no`, `tkt_passenger_id_no`, `cancelation_fees`, `causes`, `comment`, `refund_by_id`, `date`) VALUES ('2', 'BB3TBEEF', 'PBME2RPI', '10', '', '', '2', '2017-09-16 10:44:20');


#
# TABLE STRUCTURE FOR: trip_assign
#

DROP TABLE IF EXISTS `trip_assign`;

CREATE TABLE `trip_assign` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_no` varchar(20) DEFAULT NULL,
  `fleet_registration_id` int(11) DEFAULT NULL,
  `trip_route_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `assistant_1` varchar(30) DEFAULT NULL,
  `assistant_2` varchar(30) DEFAULT NULL,
  `assistant_3` varchar(30) DEFAULT NULL,
  `sold_ticket` float NOT NULL DEFAULT '0',
  `total_income` float DEFAULT '0',
  `total_expense` float DEFAULT '0',
  `total_fuel` float DEFAULT '0',
  `trip_comment` text,
  `closed_by_id` int(11) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `trip_assign` (`id`, `id_no`, `fleet_registration_id`, `trip_route_id`, `start_date`, `end_date`, `driver_id`, `assistant_1`, `assistant_2`, `assistant_3`, `sold_ticket`, `total_income`, `total_expense`, `total_fuel`, `trip_comment`, `closed_by_id`, `date`, `status`) VALUES ('1', '170810111047', '1', '1', '2017-01-30 00:30:00', '2017-01-30 00:30:00', '4', '0', '0', '0', '1', '1000', '200', '5', 'Complete successfully!', '2', '2017-10-21 07:53:00', '1');
INSERT INTO `trip_assign` (`id`, `id_no`, `fleet_registration_id`, `trip_route_id`, `start_date`, `end_date`, `driver_id`, `assistant_1`, `assistant_2`, `assistant_3`, `sold_ticket`, `total_income`, `total_expense`, `total_fuel`, `trip_comment`, `closed_by_id`, `date`, `status`) VALUES ('2', '170813082450', '1', '1', '2017-02-28 00:30:00', '2017-08-31 21:30:00', '1', '0', '0', '0', '0', '0', '0', '0', NULL, '0', NULL, '1');
INSERT INTO `trip_assign` (`id`, `id_no`, `fleet_registration_id`, `trip_route_id`, `start_date`, `end_date`, `driver_id`, `assistant_1`, `assistant_2`, `assistant_3`, `sold_ticket`, `total_income`, `total_expense`, `total_fuel`, `trip_comment`, `closed_by_id`, `date`, `status`) VALUES ('3', '170819124815', '1', '1', '2017-08-29 06:30:00', '2017-08-29 00:00:00', '1', '0', '0', '0', '0', '0', '0', '0', NULL, '0', NULL, '1');
INSERT INTO `trip_assign` (`id`, `id_no`, `fleet_registration_id`, `trip_route_id`, `start_date`, `end_date`, `driver_id`, `assistant_1`, `assistant_2`, `assistant_3`, `sold_ticket`, `total_income`, `total_expense`, `total_fuel`, `trip_comment`, `closed_by_id`, `date`, `status`) VALUES ('4', '170819124818', '1', '1', '2017-09-20 11:30:00', '2017-09-20 02:00:00', '2', '0', '0', '0', '0', '0', '0', '0', NULL, '0', NULL, '1');
INSERT INTO `trip_assign` (`id`, `id_no`, `fleet_registration_id`, `trip_route_id`, `start_date`, `end_date`, `driver_id`, `assistant_1`, `assistant_2`, `assistant_3`, `sold_ticket`, `total_income`, `total_expense`, `total_fuel`, `trip_comment`, `closed_by_id`, `date`, `status`) VALUES ('5', '170823120822', '2', '2', '2017-10-12 00:30:00', '2017-10-12 03:00:00', '1', '0', '0', '0', '0', '0', '0', '0', NULL, '0', NULL, '1');
INSERT INTO `trip_assign` (`id`, `id_no`, `fleet_registration_id`, `trip_route_id`, `start_date`, `end_date`, `driver_id`, `assistant_1`, `assistant_2`, `assistant_3`, `sold_ticket`, `total_income`, `total_expense`, `total_fuel`, `trip_comment`, `closed_by_id`, `date`, `status`) VALUES ('6', '170830125252', '1', '2', '2017-10-21 11:30:00', '2017-10-21 11:30:00', '4', '0', '0', '0', '0', '0', '0', '0', NULL, '0', NULL, '1');


#
# TABLE STRUCTURE FOR: trip_location
#

DROP TABLE IF EXISTS `trip_location`;

CREATE TABLE `trip_location` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `google_map` text,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `trip_location` (`id`, `name`, `description`, `google_map`, `image`, `status`) VALUES ('1', 'Dhaka', 'Dhaka', '', '', '1');
INSERT INTO `trip_location` (`id`, `name`, `description`, `google_map`, `image`, `status`) VALUES ('2', 'Chittagong', '', '', '', '1');
INSERT INTO `trip_location` (`id`, `name`, `description`, `google_map`, `image`, `status`) VALUES ('3', 'Comilla', '', '', '', '1');
INSERT INTO `trip_location` (`id`, `name`, `description`, `google_map`, `image`, `status`) VALUES ('4', 'Feni', '', '', '', '1');
INSERT INTO `trip_location` (`id`, `name`, `description`, `google_map`, `image`, `status`) VALUES ('5', 'Mirsharai ', '', '', '', '1');
INSERT INTO `trip_location` (`id`, `name`, `description`, `google_map`, `image`, `status`) VALUES ('6', 'Chittagong Division', '', '', '', '1');


#
# TABLE STRUCTURE FOR: trip_route
#

DROP TABLE IF EXISTS `trip_route`;

CREATE TABLE `trip_route` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `start_point` varchar(255) DEFAULT NULL,
  `end_point` varchar(255) DEFAULT NULL,
  `stoppage_points` varchar(255) DEFAULT NULL COMMENT 'Location ids',
  `distance` float DEFAULT NULL,
  `approximate_time` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `trip_route` (`id`, `name`, `start_point`, `end_point`, `stoppage_points`, `distance`, `approximate_time`, `status`) VALUES ('1', 'Dhaka to Chittagong', '1', '2', 'Dhaka, Feni, Comilla', '200', '5 Hours', '1');
INSERT INTO `trip_route` (`id`, `name`, `start_point`, `end_point`, `stoppage_points`, `distance`, `approximate_time`, `status`) VALUES ('2', 'Dhaka to Feni', '1', '4', 'Comilla', '168', '3 hours 30 minutes', '1');


#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `about` text,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_reset_token` varchar(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `ip_address` varchar(14) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('1', 'Henry', 'Smith', '', 'johnny@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/m.png', '2017-10-14 11:43:59', '2017-10-14 11:44:14', '::1', '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('2', 'Administrator', 'User', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'admin@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/m2.png', '2017-10-28 13:11:30', '2017-10-28 13:07:43', '::1', '1', '1');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('3', 'Jennifer', 'Smith', '', 'janie@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/f.png', '2017-10-24 12:46:18', '2017-10-24 12:45:57', '::1', '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('6', 'Jane', 'Doe', '', 'jane@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/f2.png', '2017-07-18 11:34:38', '2017-07-18 11:34:42', '::1', '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('7', 'William ', 'Hanna', '', 'william@example.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, NULL, '1', '0');


#
# TABLE STRUCTURE FOR: ws_booking_history
#

DROP TABLE IF EXISTS `ws_booking_history`;

CREATE TABLE `ws_booking_history` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_no` varchar(20) DEFAULT NULL,
  `trip_id_no` varchar(20) DEFAULT NULL,
  `tkt_passenger_id_no` varchar(20) DEFAULT NULL,
  `trip_route_id` int(11) DEFAULT NULL,
  `pickup_trip_location` varchar(50) DEFAULT NULL,
  `drop_trip_location` varchar(50) DEFAULT NULL,
  `request_facilities` text,
  `price` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `total_seat` int(11) DEFAULT NULL,
  `seat_numbers` varchar(255) DEFAULT NULL,
  `offer_code` varchar(255) DEFAULT NULL,
  `tkt_refund_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `booking_date` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_no` (`id_no`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('8', 'BJQYKE5P', '170819124818', 'PQWPLPZ2', '1', 'Dhaka', 'Feni', NULL, '40', '0', '2', 'B3, B4, ', '', NULL, NULL, '2017-09-18 11:30:00', '2017-09-18 09:05:46', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('9', 'BP3NRTZA', '170819124818', 'PIGK1VBJ', '1', 'Dhaka', 'Feni', 'Tea, Coffee, ', '40', '10', '2', 'B3, B4, ', '101', NULL, NULL, '2017-09-18 11:30:00', '2017-09-18 09:08:00', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('10', 'BWPA9YY1', '170819124818', 'PM8Y8YEC', '1', 'Dhaka', 'Dhaka', NULL, '20', '0', '1', 'B3, ', '', NULL, NULL, '2017-09-18 11:30:00', '2017-09-18 09:19:17', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('11', 'BCZL7XC0', '170819124818', 'PE60AVGO', '1', 'Dhaka', 'Dhaka', NULL, '40', '0', '2', 'B3, B4, ', '', NULL, NULL, '2017-09-18 11:30:00', '2017-09-18 09:20:46', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('12', 'B5STKTYK', '170819124818', 'PSOQ60KT', '1', 'Dhaka', 'Dhaka', NULL, '20', '0', '1', 'B2, ', '', NULL, NULL, '2017-09-19 11:30:00', '2017-09-19 11:11:01', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('14', 'BMI9NPZO', '170819124818', 'PHSNU4LC', '1', 'Dhaka', 'Dhaka', NULL, '20', '0', '1', 'B1, ', '', NULL, NULL, '2017-09-19 11:30:00', '2017-09-19 11:19:33', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('15', 'BWTP8GTK', '170819124818', 'PTYKSOQ6', '1', 'Dhaka', 'Dhaka', NULL, '20', '0', '1', 'B1, ', '', NULL, NULL, '2017-09-19 11:30:00', '2017-09-19 11:19:38', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('16', 'BN4O3CV0', '170819124818', 'PWZ3U1W3', '1', 'Dhaka', 'Dhaka', NULL, '20', '0', '1', 'B1, ', '', NULL, NULL, '2017-09-19 11:30:00', '2017-09-19 11:21:37', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('17', 'BXPY2T1O', '170819124818', 'PWAKWFKP', '1', 'Dhaka', 'Dhaka', NULL, '40', '0', '2', 'G3, G4, ', '', NULL, NULL, '2017-09-20 11:30:00', '2017-09-20 07:53:55', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('18', 'BVATJPS3', '170819124818', 'PQD3JEM6', '1', 'Dhaka', 'Dhaka', NULL, '40', '0', '2', 'G1, G2, ', '', NULL, NULL, '2017-09-20 11:30:00', '2017-09-20 07:54:13', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('19', 'BRD15O96', '170830125252', 'P9YL2FBA', '2', 'Comilla', 'Comilla', NULL, '200', '0', '8', 'B1, B2, B3, B4, C1, C2, C3, D1, ', '', NULL, NULL, '2017-10-14 11:30:00', '2017-10-14 12:59:15', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('20', 'BYWIPXH9', '170830125252', 'PHH5VQA3', '2', 'Comilla', 'Comilla', 'Tea, Coffee, ', '56', '0', '2', 'C3, D1, ', '', NULL, NULL, '2017-10-21 11:30:00', '2017-10-21 08:31:41', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('21', 'BL3J9BJE', '170830125252', 'P2MM9RSH', '2', 'Comilla', 'Comilla', NULL, '28', '0', '1', 'D4, ', '', NULL, NULL, '2017-10-21 11:30:00', '2017-10-21 10:49:15', '0');
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES ('22', 'BR9T7CJX', '170830125252', 'PUU178PY', '2', 'Comilla', 'Comilla', NULL, '28', '0', '1', 'C3, ', '', NULL, NULL, '2017-10-21 11:30:00', '2017-10-21 11:55:17', '0');


#
# TABLE STRUCTURE FOR: ws_offer
#

DROP TABLE IF EXISTS `ws_offer`;

CREATE TABLE `ws_offer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `position` tinyint(4) DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

INSERT INTO `ws_offer` (`id`, `title`, `position`, `image`) VALUES ('20', 'Winter Offer', '0', 'application/modules/website/assets/images/offer/d.jpg');


#
# TABLE STRUCTURE FOR: ws_payments
#

DROP TABLE IF EXISTS `ws_payments`;

CREATE TABLE `ws_payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: ws_setting
#

DROP TABLE IF EXISTS `ws_setting`;

CREATE TABLE `ws_setting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `about` varchar(255) DEFAULT NULL,
  `description` text,
  `paypal_email` varchar(100) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `google_map` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `ws_setting` (`id`, `title`, `slogan`, `address`, `email`, `phone`, `favicon`, `logo`, `status`, `about`, `description`, `paypal_email`, `currency`, `google_map`) VALUES ('2', 'Demo Application', 'Demo Slogan', '123, demo street, demo-city, 0000', 'admin@example.com', '0123456789', '', '', '1', 'About Section', '<h1 class=\"page-header\" style=\"text-align: center;\"><span style=\"color: #000000;\">ANNUAIRE DES ASSOCIATIONS</span></h1>\r\n<div id=\"main_content\" class=\"region region-content\" style=\"text-align: center;\">\r\n<div id=\"block-system-main\" class=\"block block-system\"><header></header>\r\n<div class=\"row article-summary no-childs content-image\" style=\"text-align: justify;\"><span style=\"color: #000000;\">&nbsp;</span></div>\r\n<p style=\"text-align: center;\"><span style=\"color: #000000;\"><strong>Vous souhaitez vous investir dans la vie associative? Trouvez&nbsp; l\'association &eacute;tudiante qui vous ressemble ! Ou cr&eacute;ez la votre !</strong></span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #000000;\"><br /><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsumis simply dummy text of the printing and typesetting industry. </span></p>\r\n</div>\r\n</div>', 'business@test.com', 'USD', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29215.021939977993!2d90.40923229999999!3d23.75173875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sbn!2sbd!4v1477987829881\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>');


