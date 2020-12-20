<?php
namespace app\controllers;
use app\core\Controller;

class SiteController extends Controller {

   
    public function contact(){
        $data['name'] = 'Prakhar';
        $this->render('contact' ,$data );
    }

}