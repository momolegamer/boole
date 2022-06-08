<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$_SERVER['SCRIPT_NAME'];
$_SERVER['SCRIPT_FILENAME'];


define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));


$path = ROOT.'core/model.php';
require($path);
$path = ROOT.'core/controller.php';
require($path);



$param = explode('/', $_GET['p']);
$controller = $param[0];

if(isset($param[1])){
    $method = $param[1];
}

if(isset($param[2])){
    $filtre = $param[2];
}


$called = 'controllers/'.$controller.'.php';
require($called);


if(method_exists($controller, $method)){
    $ctrl = new $controller;
    if(isset($filtre)){
        $ctrl->$method($filtre);
    } else {
        $ctrl->$method();
    }
} else {
    echo "la methode n'existe pas";
}

?>
 