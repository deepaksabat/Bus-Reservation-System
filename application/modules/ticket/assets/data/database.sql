CREATE TABLE `tkt_passenger` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_no` VARCHAR(20) NULL DEFAULT NULL,
  `firstname` VARCHAR(50) NULL DEFAULT NULL,
  `lastname` VARCHAR(50) NULL DEFAULT NULL,
  `middle_name` VARCHAR(50) NULL DEFAULT NULL,
  `phone` VARCHAR(30) NULL DEFAULT NULL,
  `email` VARCHAR(100) NULL DEFAULT NULL,
  `password` VARCHAR(32) NULL DEFAULT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `date_of_birth` DATE NULL DEFAULT NULL,
  `image` VARCHAR(255) NULL DEFAULT NULL,
  `address_line_1` VARCHAR(255) NULL DEFAULT NULL,
  `address_line_2` VARCHAR(255) NULL DEFAULT NULL,
  `city` VARCHAR(255) NULL DEFAULT NULL,
  `zip_code` VARCHAR(10) NULL DEFAULT NULL,
  `country` VARCHAR(20) NULL DEFAULT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB ;


CREATE TABLE `tkt_booking` (
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
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_no` (`id_no`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;


CREATE TABLE `tkt_refund` (
  `id` INT(11)  UNSIGNED NOT NULL AUTO_INCREMENT,
  `tkt_booking_id_no` VARCHAR(20) NULL DEFAULT NULL,
  `tkt_passenger_id_no` VARCHAR(20) NULL DEFAULT NULL,
  `cancelation_fees` FLOAT NULL DEFAULT NULL,
  `causes` TEXT NULL,
  `comment` TEXT NULL,
  `refund_by_id` INT(11) NULL DEFAULT NULL,
  `date` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `FK_tkt_refund_tkt_booking` (`tkt_booking_id_no`),
  CONSTRAINT `FK_tkt_refund_tkt_booking` FOREIGN KEY (`tkt_booking_id_no`) REFERENCES `tkt_booking` (`id_no`) ON UPDATE CASCADE ON DELETE CASCADE
) COLLATE='utf8_general_ci' ENGINE=InnoDB;


CREATE TABLE `tkt_feedback` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `tkt_booking_id_no` VARCHAR(20) NULL DEFAULT NULL,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  `comment` TEXT NULL,
  `rating` TINYINT(1) NULL DEFAULT '1', 
  `add_to_website` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;


CREATE TABLE `tkt_referal` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `tkt_passenger_id_no` INT(11) NULL DEFAULT NULL,
  `date` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;


CREATE TABLE `booking_downtime` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `downtime` varchar(20) NOT NULL,
 PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;