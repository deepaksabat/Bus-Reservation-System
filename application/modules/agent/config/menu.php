<?php

// module name
$HmvcMenu["agent"] = array(
    //set icon
    "icon" => "<i class='fa fa-user' aria-hidden='true'></i>", 
    
    'agent_list'   => array(  
        "controller" => "agent_controller",
        "method"     => "create_agent", 
        "permission" => "read"
    ),
  
 );
   

 