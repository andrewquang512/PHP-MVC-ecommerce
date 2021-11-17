<?php
require_once(ROOT . '/application/controllers/base_controller.php');
require_once("./application/models/PhoneModel.php");
require_once("./application/models/PhoneInBillModel.php");
require_once("./application/models/BillModel.php");
require_once("./application/models/CustomerModel.php");

class PagesController extends BaseController
{
  protected $bill_model;
  protected $phone_model;
  protected $phone_in_bill_model;
  protected $customer_model;

  function __construct()
  {
    $this->folder = 'layouts';
    $this->bill_model = new BillModel();
    $this->phone_model = new PhoneModel();
    $this->phone_in_bill_model = new PhoneInBillModel();
    $this->customer_model = new CustomerModel();
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
  public function dangxuat()
  {
    $this->render('dangxuat');
    //? http://localhost/PHP-MVC-ecommerce/?controller=pages&action=dangxuat
  }
  public function shoppingcart()
  {
    //? http://localhost/PHP-MVC-ecommerce/?controller=pages&action=shoppingcart

    $customer_id = 6;
    $bill_id = $this->bill_model->GetByCustomerId($customer_id)->getBill_id();  // trả về bill_id của customer_id
    $list_phone_in_bill = $this->phone_in_bill_model->GetByBillId($bill_id);       // trả về danh sách phone trong bill
    $customer_info = $this->customer_model->GetByCustomerId($customer_id);

    $data = [];
    array_push($data, $customer_info);

    foreach ($list_phone_in_bill as $index) {
      $phone = $this->phone_model->GetByPhoneId($index->getProduct_id());
      array_push($data,$phone);
    }
    
    // $a = new PhoneInBillModel(1003, 4, 1);
    // $b = new PhoneInBillModel(1003, 5, 1);
    // $c = new PhoneInBillModel(1003, 6, 1);
    // $d = new PhoneInBillModel(1003, 7, 1);
    // $a->InsertPhoneIntoBill();
    // $b->InsertPhoneIntoBill();
    // $c->InsertPhoneIntoBill();
    // $d->InsertPhoneIntoBill();
    //$a->Delete();
   
    $this->render('shopping-cart', $data);
    
  }
}