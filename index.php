<?php

require_once('./application/config/db.php');

define('ROOT', __DIR__);

if(isset($_GET['controller'])){
    // ? Get the 2 parameters values controller=__&action=__
    // ? https://www.w3schools.com/php/php_superglobals_get.asp
    $controller = $_GET['controller'];
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    } else{
        $action = 'home';
    }
    if(isset($_GET['id'])){
        // ? Get the 3rd parameter value if it exist : controller=__&action=__&id=___
        $id = $_GET['id'];
    }
} else{
    // ? These are default controller and its default action
    $controller = 'pages';
    $action = 'home';
}
require_once('./application/config/routes.php');