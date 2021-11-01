<?php
class DB{
    private static $instance = NULL;
    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                // ! Change these values acoording to your comptuter
                self::$instance = new PDO('mysql:host=localhost; dbname=phoneshop', 'root','');
                self::$instance = exec("SET NAMES 'utf8'");
            }
            catch (PDOException $ex){
                die($ex->getMessage());
            }
        } 
    }
}