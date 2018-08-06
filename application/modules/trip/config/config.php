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
 
$HmvcConfig['trip']["_title"]       = "Trip Management";
$HmvcConfig['trip']["_description"] = "Simple Trip System Management with location, route, trip assign and trip close.";

//Set true/false if module have database 
$HmvcConfig['trip']['_database'] = true;

// register your module tables. only register tables are imported while installing the module
$HmvcConfig['trip']["_tables"] = array( 
	'trip_location', 
	'trip_route', 
	'trip_assign' 
);
