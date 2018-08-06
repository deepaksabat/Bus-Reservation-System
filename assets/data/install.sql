
-- Dumping structure for table db_fleet_ticket.language
DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` varchar(100) NOT NULL,
  `english` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=437 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.language: ~306 rows (approximately)
DELETE FROM `language`;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES
  (1, 'login', 'Login'),
  (2, 'email', 'Email Address'),
  (3, 'password', 'Password'),
  (4, 'reset', 'Reset'),
  (5, 'dashboard', 'Dashboard'),
  (6, 'home', 'Home'),
  (7, 'profile', 'Profile'),
  (8, 'profile_setting', 'Profile Setting'),
  (9, 'firstname', 'First Name'),
  (10, 'lastname', 'Last Name'),
  (11, 'about', 'About'),
  (12, 'preview', 'Preview'),
  (13, 'image', 'Image'),
  (14, 'save', 'Save'),
  (15, 'upload_successfully', 'Upload Successfully!'),
  (16, 'user_added_successfully', 'User Added Successfully!'),
  (17, 'please_try_again', 'Please Try Again...'),
  (18, 'inbox_message', 'Inbox Messages'),
  (19, 'sent_message', 'Sent Message'),
  (20, 'message_details', 'Message Details'),
  (21, 'new_message', 'New Message'),
  (22, 'receiver_name', 'Receiver Name'),
  (23, 'sender_name', 'Sender Name'),
  (24, 'subject', 'Subject'),
  (25, 'message', 'Message'),
  (26, 'message_sent', 'Message Sent!'),
  (27, 'ip_address', 'IP Address'),
  (28, 'last_login', 'Last Login'),
  (29, 'last_logout', 'Last Logout'),
  (30, 'status', 'Status'),
  (31, 'delete_successfully', 'Delete Successfully!'),
  (32, 'send', 'Send'),
  (33, 'date', 'Date'),
  (34, 'action', 'Action'),
  (35, 'sl_no', 'SL No.'),
  (36, 'are_you_sure', 'Are You Sure ? '),
  (37, 'application_setting', 'Application Setting'),
  (38, 'application_title', 'Application Title'),
  (39, 'address', 'Address'),
  (40, 'phone', 'Phone'),
  (41, 'favicon', 'Favicon'),
  (42, 'logo', 'Logo'),
  (43, 'language', 'Language'),
  (44, 'left_to_right', 'Left To Right'),
  (45, 'right_to_left', 'Right To Left'),
  (46, 'footer_text', 'Footer Text'),
  (47, 'site_align', 'Application Alignment'),
  (48, 'welcome_back', 'Welcome Back!'),
  (49, 'please_contact_with_admin', 'Please Contact With Admin'),
  (50, 'incorrect_email_or_password', 'Incorrect Email/Password'),
  (51, 'select_option', 'Select Option'),
  (52, 'ftp_setting', 'Data Synchronize [FTP Setting]'),
  (53, 'hostname', 'Host Name'),
  (54, 'username', 'User Name'),
  (55, 'ftp_port', 'FTP Port'),
  (56, 'ftp_debug', 'FTP Debug'),
  (57, 'project_root', 'Project Root'),
  (58, 'update_successfully', 'Update Successfully'),
  (59, 'save_successfully', 'Save Successfully!'),
  (61, 'internet_connection', 'Internet Connection'),
  (62, 'ok', 'Ok'),
  (63, 'not_available', 'Not Available'),
  (64, 'available', 'Available'),
  (65, 'outgoing_file', 'Outgoing File'),
  (66, 'incoming_file', 'Incoming File'),
  (67, 'data_synchronize', 'Data Synchronize'),
  (68, 'unable_to_upload_file_please_check_configuration', 'Unable to upload file! please check configuration'),
  (69, 'please_configure_synchronizer_settings', 'Please configure synchronizer settings'),
  (70, 'download_successfully', 'Download Successfully'),
  (71, 'unable_to_download_file_please_check_configuration', 'Unable to download file! please check configuration'),
  (72, 'data_import_first', 'Data Import First'),
  (73, 'data_import_successfully', 'Data Import Successfully!'),
  (74, 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data! please check configuration / SQL file.'),
  (75, 'download_data_from_server', 'Download Data from Server'),
  (76, 'data_import_to_database', 'Data Import To Database'),
  (77, 'data_upload_to_server', 'Data Upload to Server'),
  (78, 'please_wait', 'Please Wait...'),
  (79, 'ooops_something_went_wrong', ' Ooops something went wrong...'),
  (80, 'module_permission_list', 'Module Permission List'),
  (81, 'user_permission', 'User Permission'),
  (82, 'add_module_permission', 'Add Module Permission'),
  (83, 'module_permission_added_successfully', 'Module Permission Added Successfully!'),
  (84, 'update_module_permission', 'Update Module Permission'),
  (85, 'download', 'Download'),
  (86, 'module_name', 'Module Name'),
  (87, 'create', 'Create'),
  (88, 'read', 'Read'),
  (89, 'update', 'Update'),
  (90, 'delete', 'Delete'),
  (91, 'module_list', 'Module List'),
  (92, 'add_module', 'Add Module'),
  (93, 'directory', 'Module Direcotory'),
  (94, 'description', 'Description'),
  (95, 'image_upload_successfully', 'Image Upload Successfully!'),
  (96, 'module_added_successfully', 'Module Added Successfully'),
  (97, 'inactive', 'Inactive'),
  (98, 'active', 'Active'),
  (99, 'user_list', 'User List'),
  (100, 'see_all_message', 'See All Messages'),
  (101, 'setting', 'Setting'),
  (102, 'logout', 'Logout'),
  (103, 'admin', 'Admin'),
  (104, 'add_user', 'Add User'),
  (105, 'user', 'User'),
  (106, 'module', 'Module'),
  (107, 'new', 'New'),
  (108, 'inbox', 'Inbox'),
  (109, 'sent', 'Sent'),
  (110, 'synchronize', 'Synchronize'),
  (111, 'data_synchronizer', 'Data Synchronizer'),
  (112, 'module_permission', 'Module Permission'),
  (113, 'backup_now', 'Backup Now!'),
  (114, 'restore_now', 'Restore Now!'),
  (115, 'backup_and_restore', 'Backup and Restore'),
  (116, 'captcha', 'Captcha Word'),
  (117, 'database_backup', 'Database Backup'),
  (118, 'restore_successfully', 'Restore Successfully'),
  (119, 'backup_successfully', 'Backup Successfully'),
  (120, 'filename', 'File Name'),
  (121, 'file_information', 'File Information'),
  (122, 'size', 'Size'),
  (123, 'backup_date', 'Backup Date'),
  (124, 'overwrite', 'Overwrite'),
  (125, 'invalid_file', 'Invalid File!'),
  (126, 'invalid_module', 'Invalid Module'),
  (127, 'remove_successfully', 'Remove Successfully!'),
  (128, 'install', 'Install'),
  (129, 'uninstall', 'Uninstall'),
  (130, 'tables_are_not_available_in_database', 'Tables are not available in database.sql'),
  (131, 'no_tables_are_registered_in_config', 'No tables are registerd in config.php'),
  (132, 'enquiry', 'Enquiry'),
  (133, 'read_unread', 'Read/Unread'),
  (134, 'enquiry_information', 'Enquiry Information'),
  (135, 'user_agent', 'User Agent'),
  (136, 'checked_by', 'Checked By'),
  (137, 'new_enquiry', 'New Enquiry'),
  (138, 'fleet', 'Fleet Management'),
  (139, 'fleet_type', 'Fleet Type'),
  (140, 'add', 'Add'),
  (141, 'list', 'List'),
  (142, 'fleet_facilities', 'Fleet Facilities'),
  (143, 'fleet_registration', 'Fleet Registration'),
  (144, 'reg_no', 'Registration No.'),
  (145, 'model_no', 'Model No.'),
  (146, 'engine_no', 'Engine No.'),
  (147, 'chasis_no', 'Chasis No.'),
  (148, 'total_seat', 'Total Seat'),
  (149, 'seat_numbers', 'Seat Number'),
  (150, 'owner', 'Owner'),
  (151, 'company', 'Company Name'),
  (152, 'trip', 'Trip Management'),
  (153, 'location', 'Location'),
  (154, 'route', 'Route'),
  (155, 'assign', 'Assign'),
  (156, 'close', 'Close'),
  (157, 'location_name', 'Location Name'),
  (158, 'google_map', 'Google Map'),
  (159, 'start_point', 'Start Point'),
  (160, 'end_point', 'End Point'),
  (161, 'route_name', 'Route Name'),
  (162, 'distance', 'Distance'),
  (163, 'approximate_time', 'Approximate Time'),
  (164, 'stoppage_points', 'Stoppage Points'),
  (165, 'fleet_registration_no', 'Fleet Registration No.'),
  (166, 'start_date', 'Start Date'),
  (167, 'end_date', 'End Date'),
  (168, 'driver_name', 'Driver Name'),
  (169, 'assistants_ids', 'Assistants'),
  (170, 'sold_ticket', 'Sold Ticket'),
  (171, 'total_income', 'Total Income'),
  (172, 'total_expense', 'Total Expense'),
  (173, 'total_fuel', 'Total Fuel'),
  (174, 'trip_comment', 'Trip Comment'),
  (175, 'closed_by', 'Closed by'),
  (176, 'ticket', 'Ticket Management'),
  (177, 'passenger', 'Passenger'),
  (178, 'middle_name', 'Middle Name'),
  (179, 'date_of_birth', 'Date of Birth'),
  (180, 'passenger_id', 'Passenger ID.'),
  (181, 'address_line_1', 'Address Line 1'),
  (182, 'address_line_2', 'Address Line 2'),
  (184, 'zip_code', 'Zip Code'),
  (186, 'name', 'Name'),
  (187, 'ac_available', 'AC available'),
  (188, 'trip_id', 'Trip ID.'),
  (189, 'book', 'Book'),
  (190, 'booking_id', 'Booking ID.'),
  (191, 'available_seats', 'Available Seats'),
  (192, 'select_seats', 'Select Seats'),
  (193, 'time', 'Time'),
  (194, 'offer_code', 'Offer Code'),
  (195, 'price', 'Price'),
  (196, 'discount', 'Discount'),
  (197, 'request_facilities', 'Request Facilities'),
  (198, 'pickup_location', 'Pickup Location'),
  (199, 'drop_location', 'Drop Location'),
  (200, 'amount', 'Amount'),
  (201, 'invalid_passenger_id', 'Invalid Passenger ID'),
  (202, 'invalid_input', 'Invalid Input'),
  (203, 'booking_date', 'Booking Date'),
  (204, 'cancelation_fees', 'Cancelation Fees'),
  (205, 'causes', 'Causes'),
  (206, 'comment', 'Comment'),
  (207, 'refund', 'Refund'),
  (208, 'refund_by', 'Refund by'),
  (209, 'feedback', 'Feedback'),
  (210, 'rating', 'Rating'),
  (211, 'blood_group', 'Blood Group'),
  (212, 'religion', 'Religion'),
  (219, 'details', 'Details'),
  (220, 'type_name', 'Type Name'),
  (221, 'view_details', 'View Details'),
  (222, 'document_pic', 'Document Picture'),
  (223, 'fitness_list', 'Fitness List'),
  (226, 'fitness_name', 'Fitness Name'),
  (227, 'fitness_description', 'Description'),
  (228, 'successfully_updated', 'Your Data Successfully Updated'),
  (229, 'fitness_period', 'Fitness Period List'),
  (230, 'fitness_id', 'Fitness Name'),
  (231, 'vehicle_id', 'Vehicles No'),
  (234, 'start_milage', 'Start Milage'),
  (235, 'end_milage', 'End Milage'),
  (236, 'agent', 'Agent'),
  (237, 'agent_first_name', 'First Name'),
  (238, 'agent_second_name', 'LastName'),
  (239, 'agent_company_name', 'Company Name'),
  (240, 'agent_document_id', 'Document ID'),
  (241, 'agent_pic_document', 'Document File'),
  (242, 'agent_phone', 'Phone'),
  (243, 'agent_mobile', 'Mobile No'),
  (244, 'agent_email', 'Email'),
  (245, 'agent_address_line_1', 'Address Line 1'),
  (246, 'agent_address_line_2', 'Address Line 2'),
  (247, 'agent_address_city', 'City'),
  (248, 'agent_address_zip_code', 'ZIP'),
  (249, 'agent_country', 'Country'),
  (252, 'sl', 'SL'),
  (253, 'route_id', 'Rout Name'),
  (254, 'vehicle_type_id', 'Vehicle Type'),
  (255, 'group_price_per_person', 'Group Price Per Person'),
  (256, 'group_size', 'Group Members'),
  (257, 'successfully_saved', 'Your Data Successfully Saved'),
  (258, 'account', 'Account'),
  (259, 'account_name', 'Account Name'),
  (260, 'account_type', 'Account Type'),
  (261, 'account_transaction', 'Account Transaction'),
  (262, 'account_id', 'Account Name'),
  (263, 'transaction_description', 'Transaction Details'),
  (265, 'pass_book_id', 'Passenger ID'),
  (267, 'payment_id', 'Payment ID'),
  (268, 'create_by_id', 'Created By'),
  (269, 'offer', 'Offer'),
  (270, 'offer_name', 'Offer Name'),
  (271, 'offer_start_date', 'Offer Start Date'),
  (272, 'offer_end_date', 'Offer Last Date'),
  (274, 'offer_discount', 'Discount'),
  (275, 'offer_terms', 'Offer Terms'),
  (276, 'offer_route_id', 'Rout Name'),
  (277, 'offer_number', 'Offer Number'),
  (280, 'seat_number', 'Seat No'),
  (281, 'available_seat', 'Available Seat'),
  (282, 'owner_name', 'Owner Name'),
  (283, 'agent_picture', 'Picture'),
  (284, 'account_add', 'Add Account'),
  (285, 'add_agent', 'Add Agent'),
  (286, 'hr', 'Human Resource'),
  (287, 'create_hr', 'Add Employee'),
  (288, 'serial', 'Sl'),
  (289, 'position', 'Position'),
  (290, 'phone_no', 'Phone No'),
  (291, 'email_no', 'Email'),
  (292, 'picture', 'Picture'),
  (293, 'first_name', 'First Name'),
  (294, 'second_name', 'Last Name'),
  (295, 'document_id', 'Documet Id'),
  (298, 'country', 'Country'),
  (299, 'city', 'City'),
  (300, 'zip', 'Zip '),
  (393, 'add_passenger', 'Add Passenger'),
  (394, 'search_tiket', 'Search Ticket'),
  (395, 'slogan', 'Slogan'),
  (396, 'website', 'Website'),
  (397, 'submit', 'Submit'),
  (398, 'customer_service', 'Customer Service'),
  (399, 'submit_successfully', 'Submit Successfully!'),
  (400, 'add_to_website', 'Add to Website'),
  (401, 'our_customers_say', 'Our Customers Say'),
  (402, 'website_status', 'Website Status'),
  (403, 'title', 'Title'),
  (405, 'total_fleet', 'Total Fleet'),
  (406, 'total_passenger', 'Total Passenger'),
  (407, 'todays_trip', 'Today\'s Trip'),
  (408, 'seats_available', 'Seats Available'),
  (409, 'no_trip_avaiable', 'No trip avaiable'),
  (410, 'booking', 'Booking'),
  (411, 'something_went_worng', 'Something went worng!'),
  (412, 'paypal_email', 'Paypal Email'),
  (413, 'currency', 'Currency'),
  (414, 'reports', 'Reports'),
  (415, 'search', 'Search'),
  (417, 'go', 'Go'),
  (418, 'all', 'All'),
  (419, 'filter', 'Filter'),
  (420, 'last_year_progress', 'Last Year Progress'),
  (421, 'download_document', 'Download Document'),
  (422, 'mobile', 'Mobile No.'),
  (424, 'account_list', 'Account List'),
  (425, 'add_income', 'Add Income'),
  (426, 'add_expense', 'Add Expense'),
  (427, 'agent_list', 'Agent List'),
  (428, 'add_fitness', 'Add Fitness'),
  (429, 'fitness', 'Fitness'),
  (430, 'add_fitness_period', 'Add Fitness Period'),
  (431, 'employee_type', 'Employee Type'),
  (432, 'employee_list', 'Employee List'),
  (433, 'add_offer', 'Add Offer'),
  (434, 'offer_list', 'Offer List'),
  (435, 'add_price', 'Add Price'),
  (436, 'price_list', 'Price List');
/*!40000 ALTER TABLE `language` ENABLE KEYS */;


-- Dumping structure for table db_fleet_ticket.ws_setting
DROP TABLE IF EXISTS `ws_setting`;
CREATE TABLE IF NOT EXISTS `ws_setting` (
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

-- Dumping data for table db_fleet_ticket.ws_setting: ~1 rows (approximately)
DELETE FROM `ws_setting`;
/*!40000 ALTER TABLE `ws_setting` DISABLE KEYS */;
INSERT INTO `ws_setting` (`id`, `title`, `slogan`, `address`, `email`, `phone`, `favicon`, `logo`, `status`, `about`, `description`, `paypal_email`, `currency`, `google_map`) VALUES
  (2, 'Demo Application', 'Demo Slogan', '123, demo street, demo-city, 0000', 'admin@example.com', '0123456789', 'application/modules/website/assets/images/icons/f.jpg', 'application/modules/website/assets/images/icons/l.png', 1, 'About Section', '<h1 class="page-header" style="text-align: center;"><span style="color: #000000;">ANNUAIRE DES ASSOCIATIONS</span></h1>\r\n<div id="main_content" class="region region-content" style="text-align: center;">\r\n<div id="block-system-main" class="block block-system"><header></header>\r\n<div class="row article-summary no-childs content-image" style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></div>\r\n<p style="text-align: center;"><span style="color: #000000;"><strong>Vous souhaitez vous investir dans la vie associative? Trouvez&nbsp; l\'association &eacute;tudiante qui vous ressemble ! Ou cr&eacute;ez la votre !</strong></span></p>\r\n<p style="text-align: center;"><span style="color: #000000;"><br /><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsumis simply dummy text of the printing and typesetting industry. </span></p>\r\n</div>\r\n</div>', 'business@test.com', 'USD', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29215.021939977993!2d90.40923229999999!3d23.75173875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sbn!2sbd!4v1477987829881" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>');
 

-- Dumping structure for table db_fleet_ticket.setting
DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
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

-- Dumping data for table db_fleet_ticket.setting: ~0 rows (approximately)
DELETE FROM `setting`;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` (`id`, `title`, `address`, `email`, `phone`, `logo`, `favicon`, `language`, `site_align`, `footer_text`) VALUES
  (2, 'Fleet Ticketing System', '98 Green Road, Farmgate, Dhaka-1215.', 'bdtask@gmail.com', '0123456789', 'assets/img/icons/logo.png', 'assets/img/icons/m.png', 'english', 'LTR', '2017©Copyright');
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;

 

-- Dumping structure for table db_fleet_ticket.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
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

-- Dumping data for table db_fleet_ticket.user: ~5 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES
  (1, 'Henry', 'Smith', '', 'johnny@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/m.png', '2017-10-14 11:43:59', '2017-10-14 11:44:14', '::1', 1, 0),
  (2, 'Administrator', 'User', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'admin@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/m2.png', '2017-10-24 11:55:35', '2017-10-23 08:38:18', '::1', 1, 1),
  (3, 'Jennifer', 'Smith', '', 'janie@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/f.png', '2017-10-24 08:36:36', '2017-10-24 07:40:12', '::1', 1, 0),
  (6, 'Jane', 'Doe', '', 'jane@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/f2.png', '2017-07-18 11:34:38', '2017-07-18 11:34:42', '::1', 1, 0),
  (7, 'William ', 'Hanna', '', 'william@example.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, NULL, 1, 0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;




-- Dumping structure for table db_fleet_ticket.acc_account_name
DROP TABLE IF EXISTS `acc_account_name`;
CREATE TABLE IF NOT EXISTS `acc_account_name` (
  `account_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_name` varchar(255) NOT NULL,
  `account_type` int(11) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.acc_account_name: ~4 rows (approximately)
DELETE FROM `acc_account_name`;
/*!40000 ALTER TABLE `acc_account_name` DISABLE KEYS */;
INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES
	(1, 'DBBL - Expense', 0),
	(2, 'IBBL', 1),
	(3, 'EBBL', 1),
	(5, 'IFIBL - Expense', 0);
/*!40000 ALTER TABLE `acc_account_name` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.acn_account_transaction
DROP TABLE IF EXISTS `acn_account_transaction`;
CREATE TABLE IF NOT EXISTS `acn_account_transaction` (
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

-- Dumping data for table db_fleet_ticket.acn_account_transaction: ~3 rows (approximately)
DELETE FROM `acn_account_transaction`;
/*!40000 ALTER TABLE `acn_account_transaction` DISABLE KEYS */;
INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `pass_book_id`, `trip_id`, `payment_id`, `create_by_id`) VALUES
	(1, 5, 'Expense', '1000', '', '', '', 2),
	(2, 2, '', '5000', '', '', '', 2),
	(3, 3, 'Income', '1000', '', '123456789', '12345', 2),
	(5, 2, '', '10', '', '', '', 2);
/*!40000 ALTER TABLE `acn_account_transaction` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.agent_info
DROP TABLE IF EXISTS `agent_info`;
CREATE TABLE IF NOT EXISTS `agent_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.agent_info: 2 rows
DELETE FROM `agent_info`;
/*!40000 ALTER TABLE `agent_info` DISABLE KEYS */;
INSERT INTO `agent_info` (`agent_id`, `agent_first_name`, `agent_second_name`, `agent_company_name`, `agent_document_id`, `agent_pic_document`, `agent_picture`, `agent_phone`, `agent_mobile`, `agent_email`, `agent_address_line_1`, `agent_address_line_2`, `agent_address_city`, `agent_address_zip_code`, `agent_country`, `status`) VALUES
	(2, 'Hello ', 'World', '', '', NULL, NULL, '0123456789', '', '', '', '', '', '', '', NULL),
	(3, '   Hello ', '   World', '   bdtask', '   Ew4324', './application/modules/agent/assets/images/2017-10-18/d.jpg', './application/modules/agent/assets/images/2017-10-18/d1.jpg', '   0123456789', '   0123456789', 'hello@world.com', '                                                                                                            112, test street,                         ', '                                                                                                            112, test street,                         ', '   Dhaka', '   1205', 'Algeria', NULL);
/*!40000 ALTER TABLE `agent_info` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.employee_history
DROP TABLE IF EXISTS `employee_history`;
CREATE TABLE IF NOT EXISTS `employee_history` (
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

-- Dumping data for table db_fleet_ticket.employee_history: 4 rows
DELETE FROM `employee_history`;
/*!40000 ALTER TABLE `employee_history` DISABLE KEYS */;
INSERT INTO `employee_history` (`id`, `first_name`, `second_name`, `position`, `phone_no`, `email_no`, `document_id`, `document_pic`, `address_line_1`, `address_line_2`, `picture`, `blood_group`, `country`, `city`, `zip`, `status`) VALUES
	(4, '      William', '      Hanna', 'Driver', '      0123456789', '', '      ', '', '            ', '            ', './application/modules/hr/assets/images/d.jpg', '      ', '', '      ', '      ', NULL),
	(2, 'John', 'Doe', 'Driver', '0123456789', '', '', NULL, '', '', NULL, '', '', '', '', NULL),
	(3, '   William', '   Jonson', ' Jr. Software Engineer', '   0123456789', '', '   ', './application/modules/hr/assets/images/2017-10-15/Tul.jpg', '      ', '      ', './application/modules/hr/assets/images/2017-10-15/i1.jpg', '   ', '', '   ', '   ', NULL),
	(5, '  Justin', '  Denver', 'Driver', '  0123456789', 'driver@example.com', '    E3434BX', './application/modules/hr/assets/images/2017-10-19/d.jpg', '  123, Green Road', '    Dhaka                  ', './application/modules/hr/assets/images/914014e9792f2e711236d3a0461764d1.jpg', '  B+', 'Bangladesh', '  Dhaka', '  1205', NULL),
	(6, 'Elise', 'Rozan', 'Driver', '2134596900', '', '', NULL, '', '', NULL, '', '', '', '', NULL);
/*!40000 ALTER TABLE `employee_history` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.employee_type
DROP TABLE IF EXISTS `employee_type`;
CREATE TABLE IF NOT EXISTS `employee_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.employee_type: 3 rows
DELETE FROM `employee_type`;
/*!40000 ALTER TABLE `employee_type` DISABLE KEYS */;
INSERT INTO `employee_type` (`type_id`, `type_name`, `details`, `status`) VALUES
	(1, 'Driver', '', NULL),
	(4, ' Helper', '  Test Details', NULL),
	(3, ' Jr. Software Engineer', '  ', NULL);
/*!40000 ALTER TABLE `employee_type` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.enquiry
DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
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

-- Dumping data for table db_fleet_ticket.enquiry: ~4 rows (approximately)
DELETE FROM `enquiry`;
/*!40000 ALTER TABLE `enquiry` DISABLE KEYS */;
INSERT INTO `enquiry` (`enquiry_id`, `email`, `phone`, `name`, `enquiry`, `checked`, `ip_address`, `user_agent`, `checked_by`, `created_date`, `status`) VALUES
	(1, 'admin@example.com', '0123456789', 'TEST', 'TEST', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', 0, '2017-08-17 10:51:21', 1),
	(2, 'admin@example.com', '0123456789', 'TEST', 'TEST', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', NULL, '2017-08-17 10:57:05', 1),
	(3, 'admin@example.com', '0123456789', 'Jane Doe', 'TSET', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', 0, '2017-08-17 13:40:54', 1),
	(4, 'jonny@doe.com', '0123654656', 'Jonny Doe', 'TEST', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', 2, '2017-08-17 13:45:55', 1),
	(5, 'admin@example.com', '4234234234', 'TEST', 'TEST', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 2, '2017-09-24 12:52:53', 1);
/*!40000 ALTER TABLE `enquiry` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.fit_fitness
DROP TABLE IF EXISTS `fit_fitness`;
CREATE TABLE IF NOT EXISTS `fit_fitness` (
  `fitness_id` int(11) NOT NULL AUTO_INCREMENT,
  `fitness_name` varchar(50) DEFAULT NULL,
  `fitness_description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`fitness_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.fit_fitness: 3 rows
DELETE FROM `fit_fitness`;
/*!40000 ALTER TABLE `fit_fitness` DISABLE KEYS */;
INSERT INTO `fit_fitness` (`fitness_id`, `fitness_name`, `fitness_description`) VALUES
	(1, 'Tyre ', 'Tyre of Car'),
	(4, 'Engine', ''),
	(6, 'Insurance', '');
/*!40000 ALTER TABLE `fit_fitness` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.fleet_facilities
DROP TABLE IF EXISTS `fleet_facilities`;
CREATE TABLE IF NOT EXISTS `fleet_facilities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.fleet_facilities: ~3 rows (approximately)
DELETE FROM `fleet_facilities`;
/*!40000 ALTER TABLE `fleet_facilities` DISABLE KEYS */;
INSERT INTO `fleet_facilities` (`id`, `name`, `description`, `status`) VALUES
	(1, 'Tea', '', 1),
	(2, 'Coffee', '', 1),
	(3, 'Wheelchair', '', 1);
/*!40000 ALTER TABLE `fleet_facilities` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.fleet_registration
DROP TABLE IF EXISTS `fleet_registration`;
CREATE TABLE IF NOT EXISTS `fleet_registration` (
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

-- Dumping data for table db_fleet_ticket.fleet_registration: ~5 rows (approximately)
DELETE FROM `fleet_registration`;
/*!40000 ALTER TABLE `fleet_registration` DISABLE KEYS */;
INSERT INTO `fleet_registration` (`id`, `reg_no`, `fleet_type_id`, `engine_no`, `model_no`, `chasis_no`, `total_seat`, `seat_numbers`, `fleet_facilities`, `owner`, `company`, `ac_available`, `status`) VALUES
	(1, 'DHAKA-TA-1000', 1, '', '', '', 41, 'A 1, A 2, A 3, A 4, B1, B2, B3, B4, C1, C2, C3, D1, D2, D3, D4, E1, E2, E3, E4, C4, F1, F2, F3, F4, G1, G2, G3, G4, H1, H2, H3, H4, I1, I2, I3, I4, J1, J2, J3, J4, J5', 'Tea, Coffee, Wheelchair', '', '', 1, 1),
	(2, 'Dhaka-Kha-2000', 2, 'CE100', 'M100', 'SL-XCESC', 15, 'A, B, C, D, E, F, G, H, I, J, K, L, M, N, O', 'Tea', 'Cargo BD .Net', 'Cargo BD', 1, 1),
	(3, 'Test', 1, '23423', '234234', '', 0, '', '', '234234', '', 0, 1),
	(4, 'CTG-1020', 1, '', '12345', '', 10, '', '', '', '', 1, 1),
	(6, 'CTG-1022', 1, '', '', '', 0, '', '', '', '', 1, 1);
/*!40000 ALTER TABLE `fleet_registration` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.fleet_type
DROP TABLE IF EXISTS `fleet_type`;
CREATE TABLE IF NOT EXISTS `fleet_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.fleet_type: ~2 rows (approximately)
DELETE FROM `fleet_type`;
/*!40000 ALTER TABLE `fleet_type` DISABLE KEYS */;
INSERT INTO `fleet_type` (`id`, `type`, `status`) VALUES
	(1, 'Bus', 1),
	(2, 'Car', 1);
/*!40000 ALTER TABLE `fleet_type` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.ftn_fitness_period
DROP TABLE IF EXISTS `ftn_fitness_period`;
CREATE TABLE IF NOT EXISTS `ftn_fitness_period` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fitness_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_milage` float DEFAULT NULL,
  `end_milage` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.ftn_fitness_period: 2 rows
DELETE FROM `ftn_fitness_period`;
/*!40000 ALTER TABLE `ftn_fitness_period` DISABLE KEYS */;
INSERT INTO `ftn_fitness_period` (`id`, `fitness_id`, `vehicle_id`, `start_date`, `end_date`, `start_milage`, `end_milage`) VALUES
	(9, 1, 1, '2017-10-01', '2017-10-31', 4500, 5000),
	(2, 4, 2, '2017-10-16', '2017-10-31', 1000, 10000);
/*!40000 ALTER TABLE `ftn_fitness_period` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.message
DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
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

-- Dumping data for table db_fleet_ticket.message: ~7 rows (approximately)
DELETE FROM `message`;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES
	(1, 2, 1, 'TEST', 'All the best', '2017-02-07 00:00:00', 0, 2),
	(3, 26, 3, 'TEST', 'Hello world!', '2017-02-07 00:00:00', 0, 1),
	(10, 2, 17, 'TEST', 'The quick brown fox jumps over the lazy dog!', '2017-02-07 11:34:41', 0, 0),
	(11, 2, 6, 'ateat', '<p>TEST</p>', '2017-05-11 10:00:07', 1, 1),
	(12, 3, 6, 'Test', '<p>Test</p>', '2017-10-14 11:43:25', 1, 0),
	(13, 1, 2, 'Test', '<p>TEST</p>', '2017-10-14 11:44:10', 1, 1),
	(14, 2, 1, 'Test', '<p>sadfsadf</p>', '2017-10-14 01:23:38', 1, 0);
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.module
DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `directory` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.module: ~9 rows (approximately)
DELETE FROM `module`;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES
	(24, 'Ticket Management', 'Simple Ticket Management System', 'application/modules/ticket/assets/images/thumbnail.jpg', 'ticket', 1),
	(25, 'Trip Management', 'Simple Trip System Management with location, route, trip assign and trip close.', 'application/modules/trip/assets/images/thumbnail.jpg', 'trip', 1),
	(26, 'Enquiry Management System', 'Simple Enquiry System', 'application/modules/enquiry/assets/images/thumbnail.jpg', 'enquiry', 1),
	(27, 'Fleet Management', 'Simple fleet System', 'application/modules/fleet/assets/images/thumbnail.jpg', 'fleet', 1),
	(38, 'Account', 'Account information', 'application/modules/account/assets/images/thumbnail.jpg', 'account', 1),
	(39, 'Agent', 'Agent information', 'application/modules/agent/assets/images/thumbnail.jpg', 'agent', 1),
	(43, 'Price', 'Price information', 'application/modules/price/assets/images/thumbnail.jpg', 'price', 1),
	(44, 'Hr', 'Hr information', 'application/modules/hr/assets/images/thumbnail.jpg', 'hr', 1),
	(45, 'offer', 'Price information', 'application/modules/offer/assets/images/thumbnail.jpg', 'offer', 1),
	(46, 'FITNESS', 'fitness', 'application/modules/fitness/assets/images/thumbnail.jpg', 'fitness', 1),
	(47, 'Website Management', 'Simple website System', 'application/modules/website/assets/images/thumbnail.jpg', 'website', 1),
	(48, 'Reports', 'Application Report', 'application/modules/reports/assets/images/thumbnail.jpg', 'reports', 1);
/*!40000 ALTER TABLE `module` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.module_permission
DROP TABLE IF EXISTS `module_permission`;
CREATE TABLE IF NOT EXISTS `module_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_module_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.module_permission: ~12 rows (approximately)
DELETE FROM `module_permission`;
/*!40000 ALTER TABLE `module_permission` DISABLE KEYS */;
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES
	(240, 24, 3, 0, 0, 0, 0),
	(241, 25, 3, 0, 0, 0, 0),
	(242, 26, 3, 1, 1, 1, 1),
	(243, 27, 3, 0, 0, 0, 0),
	(244, 38, 3, 0, 1, 1, 0),
	(245, 39, 3, 0, 1, 0, 0),
	(246, 43, 3, 0, 0, 0, 0),
	(247, 44, 3, 1, 1, 1, 0),
	(248, 45, 3, 1, 1, 1, 1),
	(249, 46, 3, 1, 1, 1, 1),
	(250, 47, 3, 0, 0, 0, 0),
	(251, 48, 3, 0, 0, 0, 0);
/*!40000 ALTER TABLE `module_permission` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.ofr_offer
DROP TABLE IF EXISTS `ofr_offer`;
CREATE TABLE IF NOT EXISTS `ofr_offer` (
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

-- Dumping data for table db_fleet_ticket.ofr_offer: ~2 rows (approximately)
DELETE FROM `ofr_offer`;
/*!40000 ALTER TABLE `ofr_offer` DISABLE KEYS */;
INSERT INTO `ofr_offer` (`offer_id`, `offer_name`, `offer_start_date`, `offer_end_date`, `offer_code`, `offer_discount`, `offer_terms`, `offer_route_id`, `offer_number`) VALUES
	(2, 'Eid Offer', '2017-08-15', '2017-09-30', '101', 10, '', '1', 10),
	(3, 'Summer offer', '2017-10-24', '2017-10-31', '1000', 100, '', '2', 10);
/*!40000 ALTER TABLE `ofr_offer` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.pri_price
DROP TABLE IF EXISTS `pri_price`;
CREATE TABLE IF NOT EXISTS `pri_price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` varchar(50) DEFAULT NULL,
  `vehicle_type_id` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `group_price_per_person` float DEFAULT NULL,
  `group_size` int(15) DEFAULT NULL,
  PRIMARY KEY (`price_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.pri_price: 5 rows
DELETE FROM `pri_price`;
/*!40000 ALTER TABLE `pri_price` DISABLE KEYS */;
INSERT INTO `pri_price` (`price_id`, `route_id`, `vehicle_type_id`, `price`, `group_price_per_person`, `group_size`) VALUES
	(2, '1', '1', 20, 15, 3),
	(3, '2', '1', 28, 25, 5),
	(4, '1', '1', 20, 10, 10);
/*!40000 ALTER TABLE `pri_price` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.synchronizer_setting
DROP TABLE IF EXISTS `synchronizer_setting`;
CREATE TABLE IF NOT EXISTS `synchronizer_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.synchronizer_setting: ~0 rows (approximately)
DELETE FROM `synchronizer_setting`;
/*!40000 ALTER TABLE `synchronizer_setting` DISABLE KEYS */;
INSERT INTO `synchronizer_setting` (`id`, `hostname`, `username`, `password`, `port`, `debug`, `project_root`) VALUES
	(8, '70.35.198.200', 'spreadcargo', '123123123123', '21', 'true', './public_html/');
/*!40000 ALTER TABLE `synchronizer_setting` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.tkt_booking
DROP TABLE IF EXISTS `tkt_booking`;
CREATE TABLE IF NOT EXISTS `tkt_booking` (
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

-- Dumping data for table db_fleet_ticket.tkt_booking: ~15 rows (approximately)
DELETE FROM `tkt_booking`;
/*!40000 ALTER TABLE `tkt_booking` DISABLE KEYS */;
INSERT INTO `tkt_booking` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`) VALUES
	(1, 'BKGU9P9X', '170810111047', 'PEH0T7OI', 2, 'Dhaka', 'Comilla', 'Tea, ', 200, 50, 1, 'A 1,', '100', 1, NULL, '2016-01-10 00:00:00', '2017-08-10 12:33:28'),
	(2, 'BB3TBEEF', '170810111047', 'PBME2RPI', 1, 'Dhaka', 'Feni', 'Tea, Coffee, ', 400, 50, 2, 'A 2,A 3,', '100', 2, NULL, '2017-01-10 00:30:00', '2017-08-12 09:08:00'),
	(3, 'B2GRO5IX', '170810111047', 'PVRDGWMJ', 1, 'Dhaka', 'Feni', 'Tea, ', 200, 0, 1, 'A 4,', '', NULL, NULL, '2017-01-11 00:00:00', '2017-08-12 09:53:30'),
	(4, 'BY02DQ9T', '170810111047', 'PGC3EX3K', 1, 'Dhaka', 'Feni', 'Tea, ', 200, 0, 1, 'A 5,', '', NULL, NULL, '2017-08-10 00:30:00', '2017-08-12 09:54:44'),
	(5, 'BVA8KUSY', '170813082450', 'PKNZZWZD', 1, 'Dhaka', 'Feni', 'Tea, ', 400, 50, 2, 'A 1,A 2,', '100', NULL, NULL, '2017-08-13 00:00:00', '2017-08-13 09:00:35'),
	(6, 'B8LJKNO3', '170819124818', 'PGZ329IB', 1, 'Dhaka', 'Feni', 'Tea, ', 400, 0, 2, 'A 1,A 2,', '', NULL, NULL, '2017-08-23 11:00:00', '2017-08-23 12:51:52'),
	(7, 'BMEMZ97Z', '170819124815', 'PDUSYFNL', 1, 'Dhaka', 'Feni', 'Tea, ', 200, 0, 1, 'A 1,', '', NULL, NULL, '2017-08-23 06:30:00', '2017-08-23 12:52:32'),
	(8, 'BH92JT9L', '170819124815', 'PFITTTYS', 1, 'Dhaka', 'Dhaka', 'Tea, ', 400, 0, 2, 'A 2,A 3,', '', NULL, NULL, '2017-08-23 06:00:00', '2017-08-23 12:53:14'),
	(9, 'BJDZVOTC', '170819124818', 'PZXWLO8M', 1, 'Dhaka', 'Feni', 'Tea, Coffee, ', 600, 100, 4, 'D2, D3, D4, E1, ', '101', NULL, NULL, '2017-08-30 11:30:00', '2017-08-30 09:10:35'),
	(197, 'BREPFG37', '170819124818', 'PA1UXB6L', 1, 'Dhaka', 'Feni', 'Tea, Coffee, ', 60, 0, 4, 'E2, E3, E4, C4, ', '', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:21:25'),
	(198, 'BJFNNPDA', '170819124818', 'PV20EMWV', 1, 'Dhaka', 'Feni', 'Tea, Coffee, ', 45, 0, 3, 'C1, C2, C3, ', '', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:24:29'),
	(199, 'BKJPGOQB', '170819124818', 'PTRHKOT8', 1, 'Dhaka', 'Feni', NULL, 20, 0, 1, 'D1, ', '', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:31:11'),
	(200, 'BJILYNBW', '170819124818', 'PBXWZQ25', 2, 'Dhaka', 'Feni', 'Tea, Coffee, ', 40, 0, 2, 'F1, F2, ', '', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:37:39'),
	(201, 'B2L18LOY', '170819124818', 'PM69YI1X', 1, 'Dhaka', 'Feni', 'Tea, Coffee, ', 20, 0, 1, 'F3, ', 'ters', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:47:09'),
	(202, 'BNVY5X9Y', '170819124818', 'P09YCE0S', 1, 'Dhaka', 'Feni', 'Tea, Coffee, ', 20, 0, 1, 'F4, ', '100', NULL, NULL, '2017-09-17 11:30:00', '2017-09-17 12:51:01');
/*!40000 ALTER TABLE `tkt_booking` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.tkt_feedback
DROP TABLE IF EXISTS `tkt_feedback`;
CREATE TABLE IF NOT EXISTS `tkt_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tkt_booking_id_no` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `comment` text,
  `rating` tinyint(1) DEFAULT '1',
  `add_to_website` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.tkt_feedback: ~5 rows (approximately)
DELETE FROM `tkt_feedback`;
/*!40000 ALTER TABLE `tkt_feedback` DISABLE KEYS */;
INSERT INTO `tkt_feedback` (`id`, `tkt_booking_id_no`, `name`, `comment`, `rating`, `add_to_website`) VALUES
	(17, 'B4EFDEFD', 'Jane Doe', '', 3, 0),
	(19, 'BKGU9P9X', 'Jane Doe', 'TEST', 5, 0),
	(20, 'B4EFDEFD', 'Jane Doe || ', 'TEST', 5, 0),
	(21, 'BB3TBEEF', 'Jane Doe || ', 'TEST', 4, 0),
	(22, 'BKGU9P9X', 'John Doe', 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type', 5, 1),
	(23, 'BKGU9P9X', 'Jennifer doe', 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type', 5, 1);
/*!40000 ALTER TABLE `tkt_feedback` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.tkt_passenger
DROP TABLE IF EXISTS `tkt_passenger`;
CREATE TABLE IF NOT EXISTS `tkt_passenger` (
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

-- Dumping data for table db_fleet_ticket.tkt_passenger: ~80 rows (approximately)
DELETE FROM `tkt_passenger`;
/*!40000 ALTER TABLE `tkt_passenger` DISABLE KEYS */;
INSERT INTO `tkt_passenger` (`id`, `id_no`, `firstname`, `lastname`, `middle_name`, `phone`, `email`, `password`, `remember_token`, `date_of_birth`, `image`, `address_line_1`, `address_line_2`, `city`, `zip_code`, `country`, `status`) VALUES
	(1, 'PEH0T7OI', 'Tuhin', 'Sorkar', '', '012345678', 'tuhin@demo.com', '', NULL, '2017-08-10', './application/modules/ticket/assets/images/passenger/2017-10-21/i.jpg', '98, Green road', 'Farmgate ', 'Dhaka', '1205', 'BD', 1),
	(12, 'PTVP74GO', 'Tuhin', 'Mahmood', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(13, 'P7NOVGIH', 'Sayem', 'Mahmood', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(14, 'P7VD9JTW', 'Rifat', 'Bin', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(15, 'P33BR4FX', 'Shohag', 'Islam', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(16, 'PTKT5MPW', 'Ahmed', 'Ali', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(17, 'PR4KNYTQ', 'Ahmed', 'Ali', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(18, 'PH190DLC', 'M', 'Joy', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(19, 'PBME2RPI', 'Santu', 'Roy', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(20, 'PVRDGWMJ', 'Tuhin', 'Sorkar', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(21, 'PGC3EX3K', 'Sabuj', 'Al Amin', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(22, 'PPPL3J9B', 'Jahed', 'Abdullah', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(23, 'PAUFQ8U4', 'Sabuj', 'Ali', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(24, 'PV3470JX', 'John', 'Doe', NULL, '32423423423', 'john@doe.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, 'TEST', '', '', '', 'BD', 1),
	(25, 'PKNZZWZD', 'Ahmed', 'Ali', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(26, 'PGZ329IB', 'Karim', 'Khan', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(27, 'PDUSYFNL', 'Sharif', 'Khan', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', 'BD', 1),
	(30, 'P4O3CV0W', 'Jahed', 'Abdullah', NULL, '0123456789', 'jahed@example.com', '4b5a31c16e8f4dca08ef67830b27d15f', NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(31, 'P8QPHAF2', 'Jahed', 'Abdullah', NULL, '012346567888989', 'jahed@example.com', '1654a5f5492dcc35692e924bfa7e7486', NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(32, 'PYDQRMK3', 'John ', 'Doe', NULL, '0123456789', 'john@doe.com', 'e76710452deeaecb3291eee8914c71f2', NULL, NULL, NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, NULL, 1),
	(33, 'PBAKE0PB', 'Kamal', 'Uddin', NULL, '01234566789', 'kamal@gmail.com', '491f9f4e5a624ac5719ed7009af5eecd', NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(34, 'PZ5I563Q', 'Kamal', 'Uddin', NULL, '0123456789', 'kamal@gmail.com', 'c05f70280df53f4bb440e3bfe487308e', NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(35, 'P0KPPPL3', 'Jenny', 'Jay', NULL, '88015552585', 'jenny@example.com', 'b79fcdc70ec731225934d08e0eddc253', NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(55, 'PD4CM0XD', 'Tuhin', 'Sorkar', NULL, '0123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(56, 'PEJNSXWO', 'Tuhin', 'Sorkar', NULL, '123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(57, 'PEHTZNBF', 'asda', 'asda', NULL, '5346365463', 'sdsfd@fgd.com', NULL, NULL, NULL, NULL, 'dfsdfgsdgd', NULL, NULL, NULL, NULL, 1),
	(58, 'P768WB6J', 'sadf', 'asdf', NULL, '23423423', 'sdafasdf@exadfasdfsa.com', NULL, NULL, NULL, NULL, 'asdfsadf', NULL, NULL, NULL, NULL, 1),
	(59, 'PZK7XYHS', 'TEST', 'Sorkar', NULL, '23423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(60, 'PW8J3URD', 'Tuhin', 'Sorkar', NULL, '4534534', 'admin@example.com', NULL, NULL, NULL, NULL, 'DSDFDSF', NULL, NULL, NULL, NULL, 1),
	(61, 'P3MSBBRG', 'Tuhin', 'Sorkar', NULL, '324234', 'admin@example.com', NULL, NULL, NULL, NULL, 'DASAF', NULL, NULL, NULL, NULL, 1),
	(62, 'P7D0FNZZ', 'Tuhin', 'Sorkar', NULL, '32234532523', 'admin@example.com', NULL, NULL, NULL, NULL, 'DE', NULL, NULL, NULL, NULL, 1),
	(63, 'PXNKF08O', 'Tuhin', 'Sorkar', NULL, '2342353454325', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(64, 'PYDNZSJQ', 'Tuhin', 'Sorkar', NULL, '324234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'asdfasdf', NULL, NULL, NULL, NULL, 1),
	(65, 'PN4V6Y1R', 'Tuhin', 'Sorkar', NULL, '34234234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(66, 'PN0RV1QB', 'Tuhin', 'Sorkar', NULL, '32423423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(67, 'PN41RUMV', 'Tuhin', 'Sorkar', NULL, '3453245', 'admin@example.com', NULL, NULL, NULL, NULL, 'asdfsadf', NULL, NULL, NULL, NULL, 1),
	(68, 'PUPLMZLF', 'Tuhin', 'Sorkar', NULL, '423423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'sdfasdfsdf', NULL, NULL, NULL, NULL, 1),
	(69, 'P23XEEE5', 'Tuhin', 'Sorkar', NULL, '3423423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'DSAA', NULL, NULL, NULL, NULL, 1),
	(70, 'PQ9Y74G4', 'Tuhin', 'Sorkar', NULL, '45345324534', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(71, 'PUSYFNLM', 'Tuhin', 'Sorkar', NULL, '34234234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(72, 'PITTTYSH', 'Tuhin', 'Sorkar', NULL, '23423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(73, 'P9BZ329I', 'Tuhin', 'Sorkar', NULL, '2324324234', 'admin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(74, 'P3U1W3R6', 'Tuhin', 'Sorkar', NULL, '3423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(75, 'P82ARER6', 'Tuhin', 'Sorkar', NULL, '23423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(76, 'P2C1CVTV', 'Tuhin', 'Sorkar', NULL, '32412312312', 'admin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(77, 'P031NNDS', 'Tuhin', 'Sorkar', NULL, '234234234', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(80, 'PDSYGAFN', 'Tuhin', 'Sorkar', NULL, '234234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'SASDASD', NULL, NULL, NULL, NULL, 1),
	(81, 'P90DLC71', 'Tuhin', 'Sorkar', NULL, '123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(82, 'PTIJ3TC7', 'Tuhin', 'Sorkar', NULL, '23423423423', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(83, 'P8NHS43Q', 'Tuhin', 'Sorkar', NULL, '34234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'DA', NULL, NULL, NULL, NULL, 1),
	(84, 'PAB1EJXQ', 'Tuhin', 'Sorkar', NULL, '234234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(85, 'P3CV0WZ3', 'Tuhin', 'Sorkar', NULL, '34223423', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'DATA', NULL, NULL, NULL, NULL, 1),
	(86, 'PJAY8ZH5', 'Tuhin', 'Sorkar', NULL, '123245465', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(87, 'PG3DZ5XS', 'Tuhin', 'Sorkar', NULL, '32456788', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(88, 'PICCOLX7', 'Tuhin', 'Sorkar', NULL, '23423423423', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TETS', NULL, NULL, NULL, NULL, 1),
	(89, 'PK3NYEKF', 'Tuhin', 'Sorkar', NULL, '4234123', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(90, 'P9WUSCG8', 'Tuhin', 'Sorkar', NULL, '453453245324', 'admin@example.com', NULL, NULL, NULL, NULL, 'sadfasdfs', NULL, NULL, NULL, NULL, 1),
	(91, 'PA1UXB6L', 'Tuhin', 'Sorkar', NULL, '3423423423', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Tadsf', NULL, NULL, NULL, NULL, 1),
	(92, 'PV20EMWV', 'Tuhin', 'Sorkar', NULL, '12312312', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(93, 'PTRHKOT8', 'Tuhin', 'Sorkar', NULL, '324223', 'admin@example.com', NULL, NULL, NULL, NULL, 'sadfasd', NULL, NULL, NULL, NULL, 1),
	(94, 'PBXWZQ25', 'Tuhin', 'Sorkar', NULL, '23423423', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEWT', NULL, NULL, NULL, NULL, 1),
	(95, 'PM69YI1X', 'Tuhin', 'Sorkar', NULL, '3423421312312', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TETS', NULL, NULL, NULL, NULL, 1),
	(96, 'P09YCE0S', 'Tuhin', 'Sorkar', NULL, '123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(97, 'PE2RPIB3', 'Tuhin', 'Sorkar', NULL, '123456789', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(98, 'PAYY5DUC', 'John', 'Doe', NULL, '0123456789', 'john@doe.com', NULL, NULL, NULL, NULL, 'NY, USA', NULL, NULL, NULL, NULL, 1),
	(99, 'PVKAYY5D', 'John', 'Doe', NULL, '2345678909', 'john@doe.com', NULL, NULL, NULL, NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, NULL, 1),
	(100, 'P8O31WUA', 'John', 'Doe', NULL, '234567890', 'john@doe.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(101, 'PZAIGK1V', 'John', 'Doe', NULL, '2134567890', 'john@doe.com', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL, NULL, NULL, 1),
	(103, 'PY1M8Y8Y', 'John', 'Doe', NULL, '2134546789', 'john@doe.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(104, 'PQWPLPZ2', 'John', 'Doe', NULL, '324234234', 'john@doe.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(105, 'PIGK1VBJ', 'John', 'Doe', NULL, '123123123123', 'john@doe.com', NULL, NULL, NULL, NULL, 'TEWST', NULL, NULL, NULL, NULL, 1),
	(106, 'PM8Y8YEC', 'John', 'Doe', NULL, '32456789', 'john@doe.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(107, 'PE60AVGO', 'John', 'Doe', NULL, '34234234234', 'john@doe.com', NULL, NULL, NULL, NULL, 'EST', NULL, NULL, NULL, NULL, 1),
	(108, 'P502KQNI', 'John', 'Doe', NULL, '123456', 'john@doe.com', NULL, NULL, NULL, NULL, 'TeST', NULL, NULL, NULL, NULL, 1),
	(109, 'PSOQ60KT', 'Tuhin', 'Sorkar', NULL, '124567890', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TET', NULL, NULL, NULL, NULL, 1),
	(110, 'PNYTQRPG', 'Tuhin', 'Sorkar', NULL, '3244', 'admin@example.com', NULL, NULL, NULL, NULL, 'rdsfsd', NULL, NULL, NULL, NULL, 1),
	(111, 'PTYKSOQ6', 'Tuhin', 'Sorkar', NULL, '4234234', 'admin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(112, 'PWZ3U1W3', 'Tuhin', 'Sorkar', NULL, '45234234', 'tuhin@example.com', NULL, NULL, NULL, NULL, 'TEST', NULL, NULL, NULL, NULL, 1),
	(113, 'P8A6MBM4', 'Tuhin', 'Sorkar', NULL, '4567899009887765', 'admin@example.com', NULL, NULL, NULL, NULL, 'vg fhg fhg', NULL, NULL, NULL, NULL, 1),
	(114, 'P6RD15O9', 'Tuhin', 'Sorkar', '', '432423423', 'admin@example.com', '', NULL, '2017-10-12', '', 'TESt', '', '', '', 'BD', 1),
	(123, 'PXPS3LG8', 'Jahed', 'Abdullah', NULL, '', '', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '', '', '', '', '', 1),
	(124, 'P9YL2FBA', 'Test', 'User', NULL, '0123456789', 'admin@example.com', NULL, NULL, NULL, NULL, 'de', NULL, NULL, NULL, NULL, 1),
	(125, 'P2MM9RSH', 'Jhon', 'Doe', NULL, '0123456789', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 1);
/*!40000 ALTER TABLE `tkt_passenger` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.tkt_referal
DROP TABLE IF EXISTS `tkt_referal`;
CREATE TABLE IF NOT EXISTS `tkt_referal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tkt_passenger_id_no` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.tkt_referal: ~0 rows (approximately)
DELETE FROM `tkt_referal`;
/*!40000 ALTER TABLE `tkt_referal` DISABLE KEYS */;
/*!40000 ALTER TABLE `tkt_referal` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.tkt_refund
DROP TABLE IF EXISTS `tkt_refund`;
CREATE TABLE IF NOT EXISTS `tkt_refund` (
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

-- Dumping data for table db_fleet_ticket.tkt_refund: ~0 rows (approximately)
DELETE FROM `tkt_refund`;
/*!40000 ALTER TABLE `tkt_refund` DISABLE KEYS */;
INSERT INTO `tkt_refund` (`id`, `tkt_booking_id_no`, `tkt_passenger_id_no`, `cancelation_fees`, `causes`, `comment`, `refund_by_id`, `date`) VALUES
	(1, 'BKGU9P9X', 'PEH0T7OI', 231, '', '', 2, '2017-08-12 11:51:25'),
	(2, 'BB3TBEEF', 'PBME2RPI', 10, '', '', 2, '2017-09-16 10:44:20');
/*!40000 ALTER TABLE `tkt_refund` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.trip_assign
DROP TABLE IF EXISTS `trip_assign`;
CREATE TABLE IF NOT EXISTS `trip_assign` (
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

-- Dumping data for table db_fleet_ticket.trip_assign: ~6 rows (approximately)
DELETE FROM `trip_assign`;
/*!40000 ALTER TABLE `trip_assign` DISABLE KEYS */;
INSERT INTO `trip_assign` (`id`, `id_no`, `fleet_registration_id`, `trip_route_id`, `start_date`, `end_date`, `driver_id`, `assistant_1`, `assistant_2`, `assistant_3`, `sold_ticket`, `total_income`, `total_expense`, `total_fuel`, `trip_comment`, `closed_by_id`, `date`, `status`) VALUES
	(1, '170810111047', 1, 1, '2017-01-30 00:30:00', '2017-01-30 00:30:00', 4, '0', '0', '0', 1, 1000, 200, 5, 'Complete successfully!', 2, '2017-10-21 07:53:00', 1),
	(2, '170813082450', 1, 1, '2017-02-28 00:30:00', '2017-08-31 21:30:00', 1, '0', '0', '0', 0, 0, 0, 0, NULL, 0, NULL, 1),
	(3, '170819124815', 1, 1, '2017-08-29 06:30:00', '2017-08-29 00:00:00', 1, '0', '0', '0', 0, 0, 0, 0, NULL, 0, NULL, 1),
	(4, '170819124818', 1, 1, '2017-09-20 11:30:00', '2017-09-20 02:00:00', 2, '0', '0', '0', 0, 0, 0, 0, NULL, 0, NULL, 1),
	(5, '170823120822', 2, 2, '2017-10-12 00:30:00', '2017-10-12 03:00:00', 1, '0', '0', '0', 0, 0, 0, 0, NULL, 0, NULL, 1),
	(6, '170830125252', 1, 2, '2017-10-21 11:30:00', '2017-10-21 11:30:00', 4, '0', '0', '0', 0, 0, 0, 0, NULL, 0, NULL, 1);
/*!40000 ALTER TABLE `trip_assign` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.trip_location
DROP TABLE IF EXISTS `trip_location`;
CREATE TABLE IF NOT EXISTS `trip_location` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `google_map` text,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.trip_location: ~4 rows (approximately)
DELETE FROM `trip_location`;
/*!40000 ALTER TABLE `trip_location` DISABLE KEYS */;
INSERT INTO `trip_location` (`id`, `name`, `description`, `google_map`, `image`, `status`) VALUES
	(1, 'Dhaka', 'Dhaka', '', '', 1),
	(2, 'Chittagong', '', '', '', 1),
	(3, 'Comilla', '', '', '', 1),
	(4, 'Feni', '', '', '', 1),
	(5, 'Mirsharai ', '', '', '', 1),
	(6, 'Chittagong Division', '', '', '', 1);
/*!40000 ALTER TABLE `trip_location` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.trip_route
DROP TABLE IF EXISTS `trip_route`;
CREATE TABLE IF NOT EXISTS `trip_route` (
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

-- Dumping data for table db_fleet_ticket.trip_route: ~0 rows (approximately)
DELETE FROM `trip_route`;
/*!40000 ALTER TABLE `trip_route` DISABLE KEYS */;
INSERT INTO `trip_route` (`id`, `name`, `start_point`, `end_point`, `stoppage_points`, `distance`, `approximate_time`, `status`) VALUES
	(1, 'Dhaka to Chittagong', '1', '2', 'Dhaka, Feni, Comilla', 200, '5 Hours', 1),
	(2, 'Dhaka to Feni', '1', '4', 'Comilla', 168, '3 hours 30 minutes', 1);
/*!40000 ALTER TABLE `trip_route` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.ws_booking_history
DROP TABLE IF EXISTS `ws_booking_history`;
CREATE TABLE IF NOT EXISTS `ws_booking_history` (
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

-- Dumping data for table db_fleet_ticket.ws_booking_history: ~10 rows (approximately)
DELETE FROM `ws_booking_history`;
/*!40000 ALTER TABLE `ws_booking_history` DISABLE KEYS */;
INSERT INTO `ws_booking_history` (`id`, `id_no`, `trip_id_no`, `tkt_passenger_id_no`, `trip_route_id`, `pickup_trip_location`, `drop_trip_location`, `request_facilities`, `price`, `discount`, `total_seat`, `seat_numbers`, `offer_code`, `tkt_refund_id`, `agent_id`, `booking_date`, `date`, `status`) VALUES
	(8, 'BJQYKE5P', '170819124818', 'PQWPLPZ2', 1, 'Dhaka', 'Feni', NULL, 40, 0, 2, 'B3, B4, ', '', NULL, NULL, '2017-09-18 11:30:00', '2017-09-18 09:05:46', 0),
	(9, 'BP3NRTZA', '170819124818', 'PIGK1VBJ', 1, 'Dhaka', 'Feni', 'Tea, Coffee, ', 40, 10, 2, 'B3, B4, ', '101', NULL, NULL, '2017-09-18 11:30:00', '2017-09-18 09:08:00', 0),
	(10, 'BWPA9YY1', '170819124818', 'PM8Y8YEC', 1, 'Dhaka', 'Dhaka', NULL, 20, 0, 1, 'B3, ', '', NULL, NULL, '2017-09-18 11:30:00', '2017-09-18 09:19:17', 0),
	(11, 'BCZL7XC0', '170819124818', 'PE60AVGO', 1, 'Dhaka', 'Dhaka', NULL, 40, 0, 2, 'B3, B4, ', '', NULL, NULL, '2017-09-18 11:30:00', '2017-09-18 09:20:46', 0),
	(12, 'B5STKTYK', '170819124818', 'PSOQ60KT', 1, 'Dhaka', 'Dhaka', NULL, 20, 0, 1, 'B2, ', '', NULL, NULL, '2017-09-19 11:30:00', '2017-09-19 11:11:01', 0),
	(14, 'BMI9NPZO', '170819124818', 'PHSNU4LC', 1, 'Dhaka', 'Dhaka', NULL, 20, 0, 1, 'B1, ', '', NULL, NULL, '2017-09-19 11:30:00', '2017-09-19 11:19:33', 0),
	(15, 'BWTP8GTK', '170819124818', 'PTYKSOQ6', 1, 'Dhaka', 'Dhaka', NULL, 20, 0, 1, 'B1, ', '', NULL, NULL, '2017-09-19 11:30:00', '2017-09-19 11:19:38', 0),
	(16, 'BN4O3CV0', '170819124818', 'PWZ3U1W3', 1, 'Dhaka', 'Dhaka', NULL, 20, 0, 1, 'B1, ', '', NULL, NULL, '2017-09-19 11:30:00', '2017-09-19 11:21:37', 0),
	(17, 'BXPY2T1O', '170819124818', 'PWAKWFKP', 1, 'Dhaka', 'Dhaka', NULL, 40, 0, 2, 'G3, G4, ', '', NULL, NULL, '2017-09-20 11:30:00', '2017-09-20 07:53:55', 0),
	(18, 'BVATJPS3', '170819124818', 'PQD3JEM6', 1, 'Dhaka', 'Dhaka', NULL, 40, 0, 2, 'G1, G2, ', '', NULL, NULL, '2017-09-20 11:30:00', '2017-09-20 07:54:13', 0),
	(19, 'BRD15O96', '170830125252', 'P9YL2FBA', 2, 'Comilla', 'Comilla', NULL, 200, 0, 8, 'B1, B2, B3, B4, C1, C2, C3, D1, ', '', NULL, NULL, '2017-10-14 11:30:00', '2017-10-14 12:59:15', 0),
	(20, 'BYWIPXH9', '170830125252', 'PHH5VQA3', 2, 'Comilla', 'Comilla', 'Tea, Coffee, ', 56, 0, 2, 'C3, D1, ', '', NULL, NULL, '2017-10-21 11:30:00', '2017-10-21 08:31:41', 0),
	(21, 'BL3J9BJE', '170830125252', 'P2MM9RSH', 2, 'Comilla', 'Comilla', NULL, 28, 0, 1, 'D4, ', '', NULL, NULL, '2017-10-21 11:30:00', '2017-10-21 10:49:15', 0),
	(22, 'BR9T7CJX', '170830125252', 'PUU178PY', 2, 'Comilla', 'Comilla', NULL, 28, 0, 1, 'C3, ', '', NULL, NULL, '2017-10-21 11:30:00', '2017-10-21 11:55:17', 0);
/*!40000 ALTER TABLE `ws_booking_history` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.ws_offer
DROP TABLE IF EXISTS `ws_offer`;
CREATE TABLE IF NOT EXISTS `ws_offer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `position` tinyint(4) DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dumping data for table db_fleet_ticket.ws_offer: ~1 rows (approximately)
DELETE FROM `ws_offer`;
/*!40000 ALTER TABLE `ws_offer` DISABLE KEYS */;
INSERT INTO `ws_offer` (`id`, `title`, `position`, `image`) VALUES
	(20, 'Winter Offer', 0, 'application/modules/website/assets/images/offer/d.jpg');
/*!40000 ALTER TABLE `ws_offer` ENABLE KEYS */;

-- Dumping structure for table db_fleet_ticket.ws_payments
DROP TABLE IF EXISTS `ws_payments`;
CREATE TABLE IF NOT EXISTS `ws_payments` (
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

-- Dumping data for table db_fleet_ticket.ws_payments: ~0 rows (approximately)
DELETE FROM `ws_payments`;
/*!40000 ALTER TABLE `ws_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `ws_payments` ENABLE KEYS */;
