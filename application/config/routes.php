<?php
$controllers = array(
    'pages' => ['home', 'tintuc','lienhe','gioithieu','sanpham','dangnhap','dangky','shoppingcart'],
    'admin' => ['home','customermanage', 'contactmanage','commentmanage','contentmanage','updatecustomer'],
    'client' => ['phone']
);

if(!array_key_exists($controller, $controllers)){
    $controller = 'pages';
}
if(!in_array($action, $controllers[$controller])){
    $action = 'home';
}

if($controller == 'client'){
    if($action == 'phone'){
        include(ROOT . '/application/controllers/phone_controller.php');
    }
}
else{
    include_once(ROOT . '/application/controllers/'.$controller.'_controller.php');
    $klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
    // ? for example, we have controller name pages, it will change to PagesController as the name of the class
    $controller = new $klass;
    $controller->$action();
}