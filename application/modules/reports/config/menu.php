<?php

// module name
$HmvcMenu["reports"] = array(
    //set icon
    "icon"           => "<i class='fa fa-pie-chart'></i>", 

    // booking
    'booking'  => array( 
        "controller" => "booking",
        "method"     => "report",
        "permission" => "read"
    ), 
    
    // assign
    'assign'  => array( 
        "controller" => "assign",
        "method"     => "report",
        "permission" => "read"
    ), 
  
);
   

 