<?php
class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "123456";
    protected $dbname = "phoneshop";

    private static $instance = NULL;
    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                // ! Change these values acoording to your comptuter
                self::$instance = new PDO('mysql:host=localhost; dbname=phoneshop', 'root','home123');
                self::$instance->exec("SET NAMES 'utf8'");
            }
            catch (PDOException $ex){
                die($ex->getMessage());
            }
        } 
        return self::$instance;
    }
    public function CreateConnection() {
        $db = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if($db->connect_error){
          throw new Exception('Failed to connect to MYSQL ('.$db->connect_errno.')');
        }
        return $db;
    }
}