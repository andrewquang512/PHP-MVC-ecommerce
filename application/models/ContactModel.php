<?php
class ContactModel{

    private $id;
    private $customer_name;
    private $content;
    private $phone;
    private $email;
    private $title;

    public function getid () { return $this->id; }
    private function setid ($id) { $this->id = $id; }

    public function getcustomer_name () { return $this->customer_name; }
    private function setcustomer_name ($customer_name) { $this->customer_name = $customer_name; }

    public function gettitle () { return $this->title; }
    private function settitle ($title) { $this->title = $title; }

    public function getcontent () { return $this->content; }
    private function setcontent ($content) { $this->content = $content; }

    public function getphone () { return $this->phone; }
    private function setPhone ($phone) { $this->phone = $phone; }

    public function getemail () { return $this->email; }
    private function setEmail ($email) { $this->email = $email; }

    public function __construct(
        $id = '',
        $customer_name = '',
        $title = '',
        $phone = '',
        $email = '',
        $content = '',
        
      ) {
        $this->id = $id;
        $this->customer_name = $customer_name;
        $this->title = $title;
        $this->phone = $phone;
        $this->email = $email;
        $this->content = $content;
    }

    
    public static function GetAll () {
      $list_model = [];
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("SELECT * FROM contact");
      $statement->bind_result($id, $customer_name, $title, $phone, $email, $content,);
      if ($statement->execute()) {
        while ($row = $statement->fetch()) {
          $model = new ContactModel($id, $customer_name, $title, $phone, $email, $content);
          array_push($list_model, $model);
        }
      }
      return $list_model;
    }
    
    public static function GetByCustomerId ($id) { 
        $db = (new DB())->CreateConnection();
        $statement = $db->prepare("SELECT * FROM customer WHERE user_id = ?");
        $statement->bind_param('i', $id);
        $statement->bind_result($id, $customer_name, $title, $first_name, $content, $phone, $email, $addr);
        if ($statement->execute()) {
          while ($row = $statement->fetch()) {
            $model = new ContactModel($id, $customer_name, $title, $first_name, $content, $phone, $email, $addr);
            return $model;
          }
        }
    }
}
?>