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
 
$HmvcConfig['enquiry']["_title"]       = "Enquiry Management System";
$HmvcConfig['enquiry']["_description"] = "Simple Enquiry System";

//Set true/false if module have database 
$HmvcConfig['enquiry']['_database'] = true;

// register your module tables. only register tables are imported while installing the module
$HmvcConfig['enquiry']["_tables"] = array( 
	'enquiry'
);
