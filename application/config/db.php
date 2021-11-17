<?php
class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "phoneshop";

    public function CreateConnection() {
        $db = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if($db->connect_error){
          throw new Exception('Failed to connect to MYSQL ('.$db->connect_errno.')');
        }
        return $db;
    }
}