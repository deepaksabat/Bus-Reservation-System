<?php
// module directory name
$HmvcConfig['price']["_title"]     = "Price";
$HmvcConfig['price']["_description"] = "Price information";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['price']['_database'] = true;
$HmvcConfig['price']["_tables"] = array( 
	'pri_price' 
);
