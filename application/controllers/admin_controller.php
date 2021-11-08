<?php
require_once(ROOT .'/application/controllers/base_controller.php');
require_once(ROOT .'/application/models/customer.php');
require_once(ROOT .'/application/models/contact.php');

class AdminController extends BaseController{
    function __construct(){
        $this->folder = 'admin';
    }

    public function home(){
      $this->render('index');
    }

    public function customermanage(){
      $customers = Customer::all();
      $data = array('customers' => $customers);
      $this->render('customer_manage', $data);
    }
    public function updatecustomer(){
      print_r($_POST);
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $user_name = $_POST['user_name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $addr = $_POST['addr'];
      // header('Location: index.php?controller=admin&action=customermanage');
    }

    public function contactmanage(){
      $contacts = Contact::all();
      $data = array('contacts' => $contacts);
      $this->render('contact_manage', $data);
    }
    public function commentmanage(){
      $this->render('comment_manage');
    }
    public function contentmanage(){
      $this->render('content_manage');
    }
}