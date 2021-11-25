<?php
class PhoneInBillModel{

    private $bill_id;
    private $product_id;
    private $quantity;

    public function getBill_id () { return $this->bill_id; }
    private function setBill_id ($bill_id) { $this->bill_id = $bill_id; }

    public function getProduct_id () { return $this->product_id; }
    private function setProduct_id ($product_id) { $this->product_id = $product_id; }

    public function getQuantity () { return $this->quantity; }
    private function setQuantity ($quantity) { $this->quantity = $quantity; }

    public function __construct(
        $bill_id = 0,
        $product_id = 0,
        $quantity = 0,
      ) {
        $this->bill_id = $bill_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
    }
    
    public static function GetAll() {
      $list_model = [];
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("SELECT * FROM phone_in_bill");
      $statement->bind_result($bill_id, $product_id, $quantity);
      if ($statement->execute()) {
        while ($row = $statement->fetch()) {
          $model = new PhoneInBillModel($bill_id, $product_id, $quantity);
          array_push($list_model, $model);
        }
      }
      return $list_model;
    }

    public static function GetByBillId ($id) {
        $models = [];
        $db = (new DB())->CreateConnection();
        $statement = $db->prepare("SELECT * FROM phone_in_bill WHERE BID = ?");
        $statement->bind_param('i', $id);
        $statement->bind_result($bill_id, $product_id, $quantity);
        if ($statement->execute()) {
          while ($row = $statement->fetch()) {
            $model = new PhoneInBillModel($bill_id, $product_id, $quantity);
            array_push($models, $model);
          }
        }
        return $models;
    }

    public function InsertPhoneIntoBill() {
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare('INSERT INTO phone_in_bill (bid, pid, quantity_buy) VALUES (?, ?, ?)');
      $statement->bind_param(
        'iii',
        $this->bill_id,
        $this->product_id,
        $this->quantity,
      );
      $statement->execute();
    }
    
    public function Delete () {
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare('DELETE FROM phone_in_bill WHERE bid = ? AND pid = ?' );
      $statement->bind_param('ii', $this->bill_id, $this->product_id);
      $statement->execute();
    }

    public function updateQuantity($billid, $productid, $quan) {
      $db = (new DB())->CreateConnection();
      $qr = "UPDATE phone_in_bill SET quantity_buy='$quan' WHERE BID='$billid' AND PID='$productid'";
      mysqli_query($db, $qr);
    }
}
?>