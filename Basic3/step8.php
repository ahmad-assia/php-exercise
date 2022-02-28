<?php
$transaction = array(
    array(
     "id" =>1,
     "name"=>"Gaby",
     "email"=> "gaby@codi.tech"
    ),
    array(
        "id" =>1,
        "name"=>"omar",
        "email"=> "omar@codi.tech" 
         )  
    );
    foreach($transaction as $key => $value){
        echo "ID: " . $value["id"] . " name" .  $value["name"]. " email" .  $value["email"] ."\n";
    }
    
?>