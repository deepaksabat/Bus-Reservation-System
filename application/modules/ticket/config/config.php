<?php
/*
|___________________________________________________________________
|	-> Configuration variable name must be $HmvcConfig
|	-> Module Name must be unique 
|	-> Module Name must be same as the module directory
|	-> Set a title and description 
|	-> Set true/false if module have database 
|	-> Must be register your database tables
|___________________________________________________________________
|
*/
 
$HmvcConfig['ticket']["_title"]       = "Ticket Management";
$HmvcConfig['ticket']["_description"] = "Simple Ticket Management System";

//Set true/false if module have database 
$HmvcConfig['ticket']['_database'] = true;

// register your module tables. only register tables are imported while installing the module
$HmvcConfig['ticket']["_tables"] = array( 
	'tkt_passenger',
	'tkt_booking',
	'tkt_refund',
	'tkt_feedback',
	'tkt_referal',
	'booking_downtime'
);
