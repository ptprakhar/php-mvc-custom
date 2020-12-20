<?php
namespace app\core;
/**
 * Router
 * 
 */
class Router
{

    

    protected array $routes = [];
    
   

    public function __construct(Request $request){
        $this->request = new Request();
    }

    public function get($path , $callback){
       $this->routes['get'][$path] = $callback;
    }

    public function resolve(){

        //Get the Request varabile based on URL varaibles
        $method = $this->request->getMethod();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path] ?? false;
        
        if($callback === false){
            return "Not Found";
        }

        // if(is_string($callback)){
        //     return $this->renderView($callback);
        // }

        if(is_array($callback)){
            $callback[0]  = new $callback[0](); 
        }

        return call_user_func($callback);


    }

    public function renderView($fileName, $params = [])
    {

       //Convert Data array into the variables
        foreach($params as $key => $value){
            $$key = $value;
        }

       
        include_once __DIR__."../../views/$fileName.php";
        
    }

    
}