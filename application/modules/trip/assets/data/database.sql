CREATE TABLE `trip_location` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `description` TEXT NULL,
  `google_map` TEXT NULL,
  `image` VARCHAR(255) NULL DEFAULT NULL,
  `status` TINYINT(1) NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB ;


CREATE TABLE `trip_route` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `start_point` VARCHAR(255) NULL DEFAULT NULL,
  `end_point` VARCHAR(255) NULL DEFAULT NULL,
  `stoppage_points` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Location ids',
  `distance` FLOAT NULL DEFAULT NULL,
  `approximate_time` VARCHAR(100) NULL DEFAULT NULL,
  `status` TINYINT(1) NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;


CREATE TABLE `trip_assign` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_no` VARCHAR(20) NULL DEFAULT NULL,
  `fleet_registration_id` INT(11) NULL DEFAULT NULL,
  `trip_route_id` INT(11) NULL DEFAULT NULL,
  `start_date` DATETIME NULL DEFAULT NULL,
  `end_date` DATETIME NULL DEFAULT NULL,
  `driver_id` INT(11) NULL DEFAULT NULL,
  `assistant_1` VARCHAR(30) NULL DEFAULT NULL,
  `assistant_2` VARCHAR(30) NULL DEFAULT NULL,
  `assistant_3` VARCHAR(30) NULL DEFAULT NULL,
  `sold_ticket` FLOAT NOT NULL DEFAULT '0',
  `total_income` FLOAT NULL DEFAULT '0',
  `total_expense` FLOAT NULL DEFAULT '0',
  `total_fuel` FLOAT NULL DEFAULT '0',
  `trip_comment` TEXT NULL,
  `closed_by_id` INT(11) NULL DEFAULT '0',
  `date` DATETIME NULL DEFAULT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;

 