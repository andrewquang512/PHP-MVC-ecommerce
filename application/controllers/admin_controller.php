<?php
require_once(ROOT .'application/controlles/base_controller.php');
require_once(ROOT .'application/models/customer.php');

class AdminController extends BaseController{
    function _construct(){
        $this->folder = 'admin';
    }
    public function customermanage(){
      $customers = Customer::all();
      $data = array('customers' => $customers);
      $this->render('customer_manage');
    }
}