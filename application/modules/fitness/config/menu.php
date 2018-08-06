<?php
// module name
$HmvcMenu["fitness"] = array(
    //set icon
    "icon" => "<i class='fa fa-cog' aria-hidden='true'></i>", 
    
    'fitness_list'   => array(  
        "controller" => "fitness_controller",
        "method"     => "create_fitness",
        "permission" => "read"
    ), 

    'fitness_period'   => array(  
        "controller" => "fitness_controller",
        "method"     => "create_fit_period",
        "permission" => "read"
    ), 
 );
   

 