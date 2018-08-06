<?php
$HmvcMenu["price"] = array(
	
    "icon" => "<i class='fa fa-money' aria-hidden='true'></i>", 
    
    'price_list'   => array( 
        "controller" => "price_controller",
        "method"     => "create_price",
        "permission" => "read"
    ) 
 );
 