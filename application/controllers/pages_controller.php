<?php
require_once(ROOT . '/application/controllers/base_controller.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'layouts';
  }

  public function home()
  {
    $this->render('index');
  }
  public function tintuc()
  {
    $this->render('tintuc');
    //? http://localhost/PHP-MVC-ecommerce/?controller=pages&action=tintuc
  }
  public function gioithieu()
  {
    $this->render('gioithieu');
    //? http://localhost/PHP-MVC-ecommerce/?controller=pages&action=gioithieu
  }
  public function sanpham()
  {
    $this->render('phone');
    //? http://localhost/PHP-MVC-ecommerce/?controller=pages&action=sanpham
  }
  public function lienhe()
  {
    $this->render('lienhe');
    //? http://localhost/PHP-MVC-ecommerce/?controller=pages&action=lienhe
  }
  public function dangky()
  {
    $this->render('dangky');
    //? http://localhost/PHP-MVC-ecommerce/?controller=pages&action=dangky
  }
  public function dangnhap()
  {
    $this->render('dangnhap');
    //? http://localhost/PHP-MVC-ecommerce/?controller=pages&action=dangnhap
  }
  public function shoppingcart()
  {
    $this->render('shopping-cart');
    //? http://localhost/PHP-MVC-ecommerce/?controller=pages&action=shoppingcart
  }
}