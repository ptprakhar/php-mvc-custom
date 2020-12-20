<?php
namespace app\core;




class Load{

    
    
    public function view($fileName, $params = []){
        //Convert Data array into the variables
        foreach($params as $key => $value){
            $$key = $value;
        }

       
        include_once __DIR__."../../views/$fileName.php";
    
    
    }
}