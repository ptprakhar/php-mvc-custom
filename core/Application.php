<?php
namespace app\core;

/**
 * Class Application
 * 
 * @author  Prakhar Tiwari
 * @package app\core
 */

class Application
{


    public Router $router;
    public Request $request;
    public static Application $app;
   
    
    public function __construct(){
        $this->request = new Request();
        $this->router = new Router($this->request);
        self::$app = $this;
    }



    public function run(){
        echo $this->router->resolve();
    }



    


}