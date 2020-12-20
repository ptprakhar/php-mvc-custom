<?php
namespace app\core;

function pre($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}