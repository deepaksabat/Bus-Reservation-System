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
 
$HmvcConfig['fleet']["_title"]       = "Fleet Management";
$HmvcConfig['fleet']["_description"] = "Simple fleet System";

//Set true/false if module have database 
$HmvcConfig['fleet']['_database'] = true;

// register your module tables. only register tables are imported while installing the module
$HmvcConfig['fleet']["_tables"] = array( 
	'fleet_type',
	'fleet_facilities',
	'fleet_registration'
);
