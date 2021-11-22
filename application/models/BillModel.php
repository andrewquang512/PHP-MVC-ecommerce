<?php
class BillModel{

    private $customer_id;
    private $bill_id;
    private $bill_date;
    private $total;
    private $status;

    public function getCustomer_id () { return $this->customer_id; }
    private function setCustomer_id ($customer_id) { $this->customer_id = $customer_id; }

    public function getBill_id () { return $this->bill_id; }
    private function setBill_id ($bill_id) { $this->bill_id = $bill_id; }

    public function getBill_date () { return $this->bill_date; }
    private function setBill_date ($bill_date) { $this->bill_date = $bill_date; }

    public function getTotal () { return $this->total; }
    private function setTotal ($total) { $this->total = $total; }

    public function getStatus () { return $this->status; }
    private function setStatus ($status) { $this->status = $status; }

    public function __construct(
        $customer_id = '',
        $bill_id = '',
        $bill_date = '',
        $total = '',
        $status = '',
      ) {
        $this->customer_id = $customer_id;
        $this->bill_id = $bill_id;
        $this->bill_date = $bill_date;
        $this->total = $total;
        $this->status = $status;
    }
    
    public static function GetAll() {
      $list_model = [];
      $db = (new DB())->CreateConnection();
      $statement = $db->prepare("SELECT * FROM bill");
      $statement->bind_result($customer_id, $bill_id, $bill_date, $total, $status);
      if ($statement->execute()) {
        while ($row = $statement->fetch()) {
          $model = new BillModel($customer_id, $bill_id, $bill_date, $total, $status);
          array_push($list_model, $model);
        }
      }
      return $list_model;
    }

    public static function GetByCustomerId ($id) {
        $db = (new DB())->CreateConnection();
        $statement = $db->prepare("SELECT * FROM bill WHERE CID = ? AND PaySTATUS = 0");
        $statement->bind_param('i', $id);
        $statement->bind_result($customer_id, $bill_id, $bill_date, $total, $status);
        if ($statement->execute()) {
          while ($row = $statement->fetch()) {
            $model = new BillModel($customer_id, $bill_id, $bill_date, $total, $status);
            return $model;
          }
        }
    }
}
?>