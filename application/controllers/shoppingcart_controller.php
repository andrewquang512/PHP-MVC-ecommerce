<?php

session_start(); 

require_once(ROOT . '/application/controllers/base_controller.php');
require_once("./application/models/PhoneModel.php");
require_once("./application/models/PhoneInBillModel.php");
require_once("./application/models/BillModel.php");
require_once("./application/models/CustomerModel.php");

class ShoppingCartController extends BaseController
{
  protected $bill_model;
  protected $phone_model;
  protected $phone_in_bill_model;
  protected $customer_model;

  protected $customer_id;
  protected $bill_id;
  protected $list_phone_in_bill;
  protected $customer_info;

  function __construct()
  {
    $this->folder = 'layouts';
    $this->bill_model = new BillModel();
    $this->phone_model = new PhoneModel();
    $this->phone_in_bill_model = new PhoneInBillModel();
    $this->customer_model = new CustomerModel();

    $this->customer_id = $_SESSION['user_id'];
    $this->bill_id = $this->bill_model->GetByCustomerId($this->customer_id)->getBill_id();
    $this->list_phone_in_bill = $this->phone_in_bill_model->GetByBillId($this->bill_id);
    $this->customer_info = $this->customer_model->GetByCustomerId($this->customer_id);
  }

  public function getcart()
  {  
    $index=$_GET['index'];
    if($index >  0) {
      $this->list_phone_in_bill[$index - 1]->Delete();
      $this->list_phone_in_bill = $this->phone_in_bill_model->GetByBillId($this->bill_id);
      $_GET[$index] = 0;
    } else if ($index == -1) {
      foreach($this->list_phone_in_bill as $i) {
        $i->Delete();
      }
      $this->list_phone_in_bill = $this->phone_in_bill_model->GetByBillId($this->bill_id);
      $_GET[$index] = 0;
    }
   
    $data = [];
    array_push($data, $this->customer_info);
    foreach ($this->list_phone_in_bill as $i) {
      $phone = $this->phone_model->GetByPhoneId($i->getProduct_id());
      array_push($data,$phone);
    }
   
    $this->render('shopping-cart', $data);
  }
}