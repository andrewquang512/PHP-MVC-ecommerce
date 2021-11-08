<?php
class Customer{
    public $user_id;
    public $user_name;
    public $pwd;
    public $first_name;
    public $last_name;
    public $phone;
    public $email;
    public $addr;

    function __construct($user_id, $user_name, $pwd, $first_name, $last_name, $phone, $email, $addr){
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->pwd = $pwd;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->email = $email;
        $this->addr = $addr;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM customer');
        foreach ($req->fetchAll() as $item){
            $list[] = new Customer($item['user_id'], $item['user_name'],$item['pwd'],$item['first_name'],$item['last_name'],$item['phone'],$item['email'],$item['addr']); 
        }
        return $list;
    }
}