<?php
class CustomerModel{

    private $customer_id;
    private $user_name;
    private $pwd;
    private $first_name;
    private $last_name;
    private $phone;
    private $email;
    private $addr;

    public function getCustomer_id () { return $this->customer_id; }
    private function setCustomer_id ($customer_id) { $this->customer_id = $customer_id; }

    public function getUser_name () { return $this->user_name; }
    private function setUser_name ($user_name) { $this->user_name = $user_name; }

    public function getPwd () { return $this->pwd; }
    private function setPwd ($pwd) { $this->pwd = $pwd; }

    public function getFirst_name () { return $this->first_name; }
    private function setFirst_name ($first_name) { $this->first_name = $first_name; }
    
    public function getLast_name () { return $this->last_name; }
    private function setLast_name ($last_name) { $this->last_name = $last_name; }

    public function getPhone () { return $this->phone; }
    private function setPhone ($phone) { $this->phone = $phone; }

    public function getEmail () { return $this->email; }
    private function setEmail ($email) { $this->email = $email; }

    public function getAddr () { return $this->addr; }
    private function setAddr ($addr) { $this->addr = $addr; }

    public function __construct(
        $customer_id = '',
        $user_name = '',
        $pwd = '',
        $first_name = '',
        $last_name = '',
        $phone = '',
        $email = '',
        $addr = '',
      ) {
        $this->customer_id = $customer_id;
        $this->user_name = $user_name;
        $this->pwd = $pwd;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->email = $email;
        $this->addr = $addr;
    }

    
    public static function GetAll () {
      $list_model = [];
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("SELECT * FROM customer");
      $statement->bind_result($customer_id, $user_name, $pwd, $first_name, $last_name, $phone, $email, $addr);
      if ($statement->execute()) {
        while ($row = $statement->fetch()) {
          $model = new CustomerModel($customer_id, $user_name, $pwd, $first_name, $last_name, $phone, $email, $addr);
          array_push($list_model, $model);
        }
      }
      return $list_model;
    }
    
    public static function GetByCustomerId($id) { 
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("SELECT * FROM customer WHERE user_id = ?");
      $statement->bind_param('i', $id);
      $statement->bind_result($customer_id, $user_name, $pwd, $first_name, $last_name, $phone, $email, $addr);
      if ($statement->execute()) {
        while ($row = $statement->fetch()) {
          $model = new CustomerModel($customer_id, $user_name, $pwd, $first_name, $last_name, $phone, $email, $addr);
          return $model;
        }
      }
    }
    

    public static function UpdateByCustomerId($customer_id, $first_name ,$last_name, $user_name, $phone, $email, $addr) { 
        $db = (new DB())->CreateConnection();
        $statement = $db->prepare("UPDATE customer SET user_name = '$user_name',
        first_name = '$first_name', last_name = '$last_name',
        phone = '$phone', email = '$email', addr = '$addr'
        WHERE user_id = $customer_id");
        if ($statement->execute()) {
          return "Record updated successfully";
        } else {
          return "Error updating record: ";
        }
    }
    public static function CreateCustomer($pwd, $first_name ,$last_name, $user_name, $phone, $email, $addr) { 
        $db = (new DB())->CreateConnection();
        $statement = $db->prepare("INSERT INTO CUSTOMER(user_name,pwd,first_name,last_name,phone,email,addr)
        VALUE ('$user_name','$pwd', '$first_name' ,'$last_name', '$phone', '$email', '$addr') ");
        if ($statement->execute()) {
          return "Record created successfully";
        } else {
          return "Error creating record: ";
        }
    }
    public static function DeleteByCustomerId($customer_id) { 
        $db = (new DB())->CreateConnection();
        $statement = $db->prepare("DELETE FROM CUSTOMER WHERE user_id='$customer_id'");
        if ($statement->execute()) {
          return "Record deleted successfully";
        } else {
          return "Error deleting record: ";
        }
    }
  
}
?>