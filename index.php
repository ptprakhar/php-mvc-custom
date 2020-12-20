<?php
 ini_set("display_errors", 1);

require_once __DIR__.'/vendor/autoload.php';
use app\core\Application;
use app\controllers\SiteController;

$app = new Application();



//echo $app->getName();

$app->router->get('/' ,'home');
$app->router->get('/contact' ,[SiteController::Class , 'contact']);

$app->run();