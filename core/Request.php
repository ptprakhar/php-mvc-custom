<?php
namespace app\core;
/**
 * Request
 */
class Request{

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']) ?? false;  
    }


    public function getPath(){
        // echo '<pre>';
        // print_r($_SERVER);
        // echo '</pre>';
        return strtolower($_SERVER['REQUEST_URI']) ?? false;  
    }

    
}