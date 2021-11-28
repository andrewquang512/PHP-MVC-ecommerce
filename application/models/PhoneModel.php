<?php
class PhoneModel{

    private $id;
    private $pname;
    private $price;
    private $quantity;
    private $brand;
    private $image;
    private $ram;
    private $pstorage;
    private $gift;
    private $link;

    public function getId () { return $this->id; }
    private function setId ($id) { $this->id = $id; }

    public function getPname () { return $this->pname; }
    private function setPname ($pname) { $this->pname = $pname; }

    public function getPrice () { return $this->price; }
    private function setPrice ($price) { $this->price = $price; }

    public function getQuantity () { return $this->quantity; }
    private function setQuantity ($quantity) { $this->quantity = $quantity; }

    public function getBrand () { return $this->brand; }
    private function setBrand ($brand) { $this->brand = $brand; }

    public function getImage () { return $this->image; }
    private function setImage ($image) { $this->image = $image; }

    public function getRam () { return $this->ram; }
    private function setRam ($ram) { $this->ram = $ram; }

    public function getPstorage () { return $this->pstorage; }
    private function setPstorage ($pstorage) { $this->pstorage = $pstorage; }

    public function getGift () { return $this->gift; }
    private function setGift ($gift) { $this->gift = $gift; }

    public function getLink () { return $this->link; }
    private function setLink ($link) { $this->link = $link; }

    public function __construct(
        $id = '',
        $pname = '',
        $price = '',
        $quantity = '',
        $brand = '',
        $image = '',
        $ram = '',
        $pstorage = '',
        $gift = '',
        $link = ''
      ) {
        $this->id = $id;
        $this->pname = $pname;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->brand = $brand;
        $this->image = $image;
        $this->ram = $ram;
        $this->pstorage = $pstorage;
        $this->gift = $gift;
        $this->link = $link;
    }

    
    public static function GetAll () {
      $list_model = [];
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("SELECT * FROM phone");
      $statement->bind_result($id, $pname, $price, $quantity, $brand, $image, $ram, $pstorage, $gift, $link);
      if ($statement->execute()) {
        while ($row = $statement->fetch()) {
          $model = new PhoneModel($id, $pname, $price, $quantity, $brand, $image, $ram, $pstorage, $gift, $link);
          array_push($list_model, $model);
        }
      }
      return $list_model;
    }
    
    public static function GetByPhoneId ($id) { 
        $db = (new DB())->CreateConnection();
        $statement = $db->prepare("SELECT * FROM phone WHERE ID = ?");
        $statement->bind_param('i', $id);
        $statement->bind_result($id, $pname, $price, $quantity, $brand, $image, $ram, $pstorage, $gift, $link);
        if ($statement->execute()) {
          while ($row = $statement->fetch()) {
            $model = new PhoneModel($id, $pname, $price, $quantity, $brand, $image, $ram, $pstorage, $gift, $link);
            return $model;
          }
        }
    }
    public static function CreatePhone($pname, $price ,$quantity, $brand, $image, $ram, $pstorage,$gift,$link) { 
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("INSERT INTO Phone(PNAME,PRICE,QUANTITY,BRAND,IMAGE,RAM,PSTORAGE,GIFT,LINK)
      VALUE ('$pname','$price', '$quantity' ,'$brand', '$image', '$ram', '$pstorage', '$gift', '$link') ");
      if ($statement->execute()) {
        return true;
      } else {
        return false;
      }
    }
    public static function GetLastPhoneID() { 
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("SELECT MAX(ID) FROM Phone ");
      if ($statement->execute()) {
        $result = $statement->get_result();
        $row = $result->fetch_array();
        $highest_id = $row[0];
        return $highest_id;
      } else {
        return false;
      }
    }
    public static function UpdatePhoneImage($image, $products_id) { 
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("UPDATE Phone SET IMAGE = '$image'
      WHERE ID = $products_id");
      if ($statement->execute()) {
        return "Record updated successfully";
      } else {
        return "Error updating record: ";
      }
    }
}
?>