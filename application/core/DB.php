<?php
//My connection (khác theo th Khoa)
$connect = new PDO("mysql:host=localhost;dbname=phoneshop", "root", "");
//The DB MVC
class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "phoneshop";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }

}

?>