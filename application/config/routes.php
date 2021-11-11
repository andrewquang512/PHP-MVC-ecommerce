<?php
$controllers = array(
    'pages' => ['home', 'tintuc','lienhe','gioithieu','sanpham','dangnhap','dangky','shoppingcart'],
    'admin' => ['home','customermanage', 'contactmanage','commentmanage','contentmanage','updatecustomer']
);

if(!array_key_exists($controller, $controllers)){
    $controller = 'pages';
}
if(!in_array($action, $controllers[$controller])){
    $action = 'home';
}

include_once(ROOT . '/application/controllers/'.$controller.'_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
// ? for example, we have controller name pages, it will change to PagesController as the name of the class
$controller = new $klass;
$controller->$action();