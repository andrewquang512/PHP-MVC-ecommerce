<?php
$controllers = array(
    'pages' => ['home'],
    'admin' => ['customermanage']
);

if(!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])){
    $controller = 'pages';
    $action = 'home';
}

include_once(ROOT . '/application/controllers/'.$controller.'_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
// ? for example, we have controller name pages, it will change to PagesController as the name of the class
$controller = new $klass;
$controller->$action();