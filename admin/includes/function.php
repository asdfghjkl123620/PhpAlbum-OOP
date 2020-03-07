<?php

function classAutoLoader($class){
$class = strtolower($class);
    $the_path = "includes/{$class}.php";
    //finished:$the_path = INCLUDES_PATH . {$class}.php;

    if(is_file($the_path) && !class_exists($class)){
    include $the_path;
    }
    
    
    //if(file_exists($the_path)){

//require_once($the_path);
//}else{

//die("This file name{$class}.php was not found...");
//}

}
spl_autoload_register('classAutoLoader');

function redirect($location){

header("Location:{$location}");

}


?>