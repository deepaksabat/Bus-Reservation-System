<?php
// module directory name
$HmvcConfig['agent']["_title"]     = "Agent";
$HmvcConfig['agent']["_description"] = "Agent information";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['agent']['_database'] = true;
$HmvcConfig['agent']["_tables"] = array( 
	'agent_info', 
);
