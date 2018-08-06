
CREATE TABLE `ofr_offer` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,   
  `offer_name` varchar(100) DEFAULT NULL,
  `offer_start_date` DATE DEFAULT NULL,
  `offer_end_date` DATE DEFAULT NULL,
  `offer_code` varchar(50) DEFAULT NULL,
  `offer_discount` float(15) DEFAULT NULL,
  `offer_terms` varchar(30) DEFAULT NULL,
  `offer_route_id` varchar(50) DEFAULT NULL,
  `offer_number` int(15) DEFAULT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




