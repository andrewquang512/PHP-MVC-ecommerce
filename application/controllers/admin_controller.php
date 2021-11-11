<?php
require_once(ROOT .'/application/controllers/base_controller.php');
require_once(ROOT .'/application/models/CustomerModel.php');
require_once(ROOT .'/application/models/ContactModel.php');

class AdminController extends BaseController{
    function __construct(){
        $this->folder = 'admin';
    }

    public function home(){
      $this->render('index');
    }

    public function customermanage(){
      $customer_model = new CustomerModel();
      $customer_info = $customer_model->GetAll();
      $data = array('customers' => $customer_info);
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
      $contacts = new ContactModel();
      $contacts_info = $contacts->GetAll();
      $data = array('contacts' => $contacts_info);
      $this->render('contact_manage', $data);
    }
    public function commentmanage(){
      $this->render('comment_manage');
    }
    public function contentmanage(){
      $this->render('content_manage');
    }
}