<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$_SERVER['SCRIPT_NAME'];
$_SERVER['SCRIPT_FILENAME'];


define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));


$path = ROOT.'src/Controller.class.php';
require_once($path);
$path = ROOT.'database/Model.abstractclass.php';
require_once($path);



$param = explode('/', $_GET['p']);
$controller = "Controller";

if(isset($param[0])){
    $method = $param[0];
}

if(isset($param[1])){
    $filtre = $param[1];
}


/*$called = 'src/'.$controller.'.php';
require($called);*/

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
