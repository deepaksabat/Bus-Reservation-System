<?php

// module name
$HmvcMenu["fleet"] = array(
    //set icon
    "icon"           => "<i class='fa fa-car'></i>", 

    // fleet type
    "fleet_type" => array( 
        'add'    => array( 
            "controller" => "fleet_type",
            "method"     => "form",
            "permission" => "create"
        ), 
        'list'  => array( 
            "controller" => "fleet_type",
            "method"     => "index",
            "permission" => "read"
        ), 
    ), 

    // fleet facilities
    "fleet_facilities" => array( 
        'add'    => array( 
            "controller" => "fleet_facilities",
            "method"     => "form",
            "permission" => "create"
        ), 
        'list'  => array( 
            "controller" => "fleet_facilities",
            "method"     => "index",
            "permission" => "read"
        ), 
    ), 
  

    // fleet registration
    "fleet_registration" => array( 
        'add'    => array( 
            "controller" => "fleet_registration",
            "method"     => "form",
            "permission" => "create"
        ), 
        'list'  => array( 
            "controller" => "fleet_registration",
            "method"     => "index",
            "permission" => "read"
        ), 
    ), 
  
);
   

 