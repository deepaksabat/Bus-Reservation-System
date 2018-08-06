<?php
// module directory name
$HmvcConfig['fitness']["_title"]     = "FITNESS";
$HmvcConfig['fitness']["_description"] = "fitness";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['fitness']['_database'] = true;
$HmvcConfig['fitness']["_tables"] = array( 
	'fit_fitness', 
	'ftn_fitness_period',
);
