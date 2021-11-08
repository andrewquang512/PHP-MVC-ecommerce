<?php
class DB{
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
}