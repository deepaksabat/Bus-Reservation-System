<?php
// module directory name
$HmvcConfig['hr']["_title"]     = "Human Resource";
$HmvcConfig['hr']["_description"] = "Human Resource information module";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['hr']['_database'] = true;
$HmvcConfig['hr']["_tables"] = array( 
	'employee_type', 
	'employee_history',
);
