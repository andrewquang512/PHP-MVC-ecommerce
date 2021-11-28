<?php
$controllers = array(
    'pages' => ['home', 'tintuc','lienhe','gioithieu','sanpham','dangnhap','dangky','shoppingcart','dangxuat'],
    'admin' => ['home','customermanage', 'contactmanage','commentmanage','contentmanage','updatecustomer', 'addcustomer', 'deletecustomer','deletecontact','productmanage','addproduct','updateproduct','deleteproduct'],
    'client' => ['phone','new','contact','detail'],
    'detailed' =>['huawei-p30-pro','iphone-12','iphone-13-promax','oppo-a74','oppo-reno6','samsung-galaxy-21','samsung-galaxyz-fold3','vivo-12s','vivo-y21s','xiaomi-mi11-lite','xiaomi-redmi-9t'],
    'shoppingcart' => ['getcart', 'removeitem', 'removeall']
);

if(!array_key_exists($controller, $controllers)){
    $controller = 'pages';
}
if(!in_array($action, $controllers[$controller])){
    $action = 'home';
}
if($controller == 'pages' && $action == 'sanpham' && isset($id)){
    //? the id parameter which is value of $row['LINK'] is used to get the details of product when clicked
    include_once(ROOT . '/application/controllers/'.$controller.'_controller.php');
    $klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
    $controller = new $klass;
    $action = $action. '_detailed';
    $controller->$action($id);
}
else if($controller == 'client'){
    //? These actions are used to fetch data using AJAX
    if($action == 'phone'){
        include(ROOT . '/application/controllers/phone_controller.php');
    }
    if($action == 'new'){
        include(ROOT . '/application/controllers/new_controller.php');
    }
    if($action == 'contact'){
        include(ROOT . '/application/controllers/contact_controller.php');
    }
    if($action == 'detail'){
        include(ROOT . '/application/controllers/detailphone_controller.php');
    }
}
else{
    include_once(ROOT . '/application/controllers/'.$controller.'_controller.php');
    $klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
    // ? for example, we have controller name pages, it will change to PagesController as the name of the class
    // ? for example, we have controller name pages_find, it will change to PagesFindController as the name of the class
    $controller = new $klass;
    $controller->$action();
}