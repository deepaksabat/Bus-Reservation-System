CREATE TABLE `acc_account_name` (
`account_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`account_name` varchar(255) NOT NULL,
`account_type` int(11) NOT NULL,
PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `acn_account_transaction` (
	`account_tran_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`account_id` INT(11) NOT NULL,
	`transaction_description` VARCHAR(255) NOT NULL,
	`amount` VARCHAR(25) NULL DEFAULT NULL,
	`pass_book_id` VARCHAR(50) NULL DEFAULT NULL,
	`trip_id` VARCHAR(50) NULL DEFAULT NULL,
	`payment_id` VARCHAR(50) NULL DEFAULT NULL,
	`create_by_id` INT(11) NOT NULL,
	PRIMARY KEY (`account_tran_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;