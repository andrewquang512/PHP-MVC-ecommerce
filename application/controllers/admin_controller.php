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
      // if(isset($_GET['status'])){
      //   $id = $_GET['status'];
      //   $customer_model = new CustomerModel();
      //   $customer_info = $customer_model->GetAll();
      //   //? put the value $customer_info into name 'customers', to call: $data['customers']
      //   $data = array('customers' => $customer_info, 'status' => $id);
      //   $this->render('customer_manage', $data);
      // }
      $customer_model = new CustomerModel();
      $customer_info = $customer_model->GetAll();
      $data = array('customers' => $customer_info);
      $this->render('customer_manage', $data);
    }
    public function updatecustomer(){
      $customer_id = $_POST['customer_id'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $user_name = $_POST['user_name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $addr = $_POST['addr'];
      $customer_model = new CustomerModel();
      $result = $customer_model->UpdateByCustomerId($customer_id, $first_name ,$last_name, $user_name, $phone, $email, $addr);
      // if($result == "Record updated successfully"){
      //   header('Location: index.php?controller=admin&action=customermanage&status=success');
      // } else{
      //   header('Location: index.php?controller=admin&action=customermanage&status=fail');
      // }
      header('Location: index.php?controller=admin&action=customermanage');
    }
    public function addcustomer(){
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $user_name = $_POST['user_name'];
      $pwd = $_POST['password'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $addr = $_POST['addr'];
      $customer_model = new CustomerModel();
      $result = $customer_model->CreateCustomer($pwd, $first_name ,$last_name, $user_name, $phone, $email, $addr);
      header('Location: index.php?controller=admin&action=customermanage');
    }
    public function deletecustomer(){
      $customer_id = $_POST['customer_id'];
      $customer_model = new CustomerModel();
      $result = $customer_model->DeleteByCustomerId($customer_id);
      header('Location: index.php?controller=admin&action=customermanage');
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