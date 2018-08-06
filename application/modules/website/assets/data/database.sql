CREATE TABLE `ws_setting` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NULL DEFAULT NULL,
	`slogan` VARCHAR(255) NULL DEFAULT NULL,
	`address` VARCHAR(255) NULL DEFAULT NULL,
	`email` VARCHAR(100) NULL DEFAULT NULL,
	`phone` VARCHAR(20) NULL DEFAULT NULL,
	`favicon` VARCHAR(255) NULL DEFAULT NULL,
	`logo` VARCHAR(255) NULL DEFAULT NULL,
	`status` TINYINT(1) NULL DEFAULT '1',
	`paypal_email` VARCHAR(100) NULL DEFAULT NULL,
	`currency` VARCHAR(50) NULL DEFAULT NULL,
	`about` VARCHAR(255) NULL DEFAULT NULL,
	`description` TEXT NULL,
	`google_map` TEXT NULL,
	PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;


CREATE TABLE `ws_offer` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NULL DEFAULT NULL,
	`position` TINYINT(4) NULL DEFAULT '0',
	`image` VARCHAR(255) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;


CREATE TABLE `ws_booking_history` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`id_no` VARCHAR(20) NULL DEFAULT NULL,
	`trip_id_no` VARCHAR(20) NULL DEFAULT NULL,
	`tkt_passenger_id_no` VARCHAR(20) NULL DEFAULT NULL,
	`trip_route_id` INT(11) NULL DEFAULT NULL,
	`pickup_trip_location` VARCHAR(50) NULL DEFAULT NULL,
	`drop_trip_location` VARCHAR(50) NULL DEFAULT NULL,
	`request_facilities` TEXT NULL,
	`price` FLOAT NULL DEFAULT NULL,
	`discount` FLOAT NULL DEFAULT NULL,
	`total_seat` INT(11) NULL DEFAULT NULL,
	`seat_numbers` VARCHAR(255) NULL DEFAULT NULL,
	`offer_code` VARCHAR(255) NULL DEFAULT NULL,
	`tkt_refund_id` INT(11) NULL DEFAULT NULL,
	`agent_id` INT(11) NULL DEFAULT NULL,
	`booking_date` DATETIME NULL DEFAULT NULL,
	`date` DATETIME NULL DEFAULT NULL, 
	`status` TINYINT(1) NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `id_no` (`id_no`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;


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

