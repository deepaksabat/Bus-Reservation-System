<?php

// module name
$HmvcMenu["hr"] = array(
    //set icon
    "icon" => "<i class='fa fa-users' aria-hidden='true'></i>", 

    'employee_type'   => array( 
        "controller" => "hr_controller",
        "method"     => "typeView",
        "permission" => "read",
    ),
    'employee_list'   => array( 
        "controller" => "hr_controller",
        "method"     => "hrView",
        "permission" => "read",
    ),
 );
   

 