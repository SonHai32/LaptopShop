<?php 
$controllers = array(
    'pages' => ['home', 'error', 'sale', 'pants', 'login', 'register']
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])){
    $controller = 'pages';
    $action = 'error';

}

include_once('Controllers/' . $controller . '_controller.php');
$kclass  = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $kclass;
$controller->$action();
?>