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
 
$HmvcConfig['website']["_title"]       = "Website Management";
$HmvcConfig['website']["_description"] = "Simple website System";

//Set true/false if module have database 
$HmvcConfig['website']['_database'] = true;

// register your module tables. only register tables are imported while installing the module
$HmvcConfig['website']["_tables"] = array(  
	'ws_setting',
	'ws_offer'
);
