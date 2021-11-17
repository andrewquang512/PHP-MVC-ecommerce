<?php
$controllers = array(
    'pages' => ['home', 'tintuc','lienhe','gioithieu','sanpham','dangnhap','dangky','shoppingcart','dangxuat'],
    'admin' => ['home','customermanage', 'contactmanage','commentmanage','contentmanage','updatecustomer'],
    'client' => ['phone','new','contact'],
    'detailed' =>['huawei-p30-pro','iphone-12','iphone-13-promax','oppo-a74','oppo-reno6','samsung-galaxy-21','samsung-galaxyz-fold3','vivo-12s','vivo-y21s','xiaomi-mi11-lite','xiaomi-redmi-9t']
);

if(!array_key_exists($controller, $controllers)){
    $controller = 'pages';
}
if(!in_array($action, $controllers[$controller])){
    $action = 'home';
}
if($controller == 'detailed'){
    if($action =='huawei-p30-pro'){include(ROOT . '/application/views/detailed/huawei-p30-pro.php');}
    if($action =='iphone-12'){include(ROOT . '/application/views/detailed/iphone-12.php');}
    if($action =='iphone-13-promax'){include(ROOT . '/application/views/detailed/iphone-13-promax.php');}
    if($action =='oppo-a74'){include(ROOT . '/application/views/detailed/oppo-a74.php');}
    if($action =='oppo-reno6'){include(ROOT . '/application/views/detailed/oppo-reno6.php');}
    if($action =='samsung-galaxy-21'){include(ROOT . '/application/views/detailed/samsung-galaxy-21.php');}
    if($action =='samsung-galaxyz-fold3'){include(ROOT . '/application/views/detailed/samsung-galaxyz-fold3.php');}
    if($action =='vivo-12s'){include(ROOT . '/application/views/detailed/vivo-12s.php');}
    if($action =='vivo-y21s'){include(ROOT . '/application/views/detailed/vivo-y21s.php');}
    if($action =='xiaomi-mi11-lite'){include(ROOT . '/application/views/detailed/xiaomi-mi11-lite.php');}
    if($action =='xiaomi-redmi-9t'){include(ROOT . '/application/views/detailed/xiaomi-redmi-9t.php');}
}

if($controller == 'client'){
    if($action == 'phone'){
        include(ROOT . '/application/controllers/phone_controller.php');
    }
    if($action == 'new'){
        include(ROOT . '/application/controllers/new_controller.php');
    }
    if($action == 'contact'){
        include(ROOT . '/application/controllers/contact_controller.php');
    }
}
else{
    include_once(ROOT . '/application/controllers/'.$controller.'_controller.php');
    $klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
    // ? for example, we have controller name pages, it will change to PagesController as the name of the class
    $controller = new $klass;
    $controller->$action();
}