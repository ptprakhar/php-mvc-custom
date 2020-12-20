<?php
namespace app\core;
use app\core\Load;

class Controller extends Load{

    public function render($view, $params = []){
      return $this->view($view , $params);
      echo "daf";
    }

}