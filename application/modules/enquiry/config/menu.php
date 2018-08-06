<?php

// module name
$HmvcMenu["enquiry"] = array(
    //set icon
    "icon"           => "<i class='fa fa-question-circle-o'></i>", 
    
    //1st level menu name
    "enquiry" => array( 
        "controller" => "home",
        "method"     => "index",
        "permission" => "create"
    ), 

    "setting" => array( 
        "controller" => "home",
        "method"     => "form",
        "permission" => "create"
    ), 

    // 2nd level menu 
    // "group_name" => array( 
    //     'menu1'    => array( 
    //         "controller" => "home",
    //         "method"     => "index",
    //         "permission" => "create"
    //     ), 
    //     'menu2'  => array( 
    //         "controller" => "home",
    //         "method"     => "index2",
    //         "permission" => "read"
    //     ), 
    // ), 
  
);
   

 