<?php
// module directory name
$HmvcConfig['offer']["_title"]       = "offer";
$HmvcConfig['offer']["_description"] = "Price information";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['offer']['_database'] = true;
$HmvcConfig['offer']["_tables"] = array( 
	'ofr_offer', 
);
