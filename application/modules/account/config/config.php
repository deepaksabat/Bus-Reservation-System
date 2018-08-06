<?php
// module directory name
$HmvcConfig['account']["_title"]     = "Account";
$HmvcConfig['account']["_description"] = "Account information";


// register your module tables
// only register tables are imported while installing the module

$HmvcConfig['account']['_database'] =true;
$HmvcConfig['account']["_tables"] = array( 
	'acc_account_name',
	'acn_account_transaction',  
);
