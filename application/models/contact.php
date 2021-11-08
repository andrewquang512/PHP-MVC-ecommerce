<?php
class Contact{
    public $id;
    public $customer_name;
    public $title;
    public $phone;
    public $email;
    public $content;

    function __construct($id, $customer_name, $title, $phone, $email, $content){
        $this->id = $id;
        $this->customer_name = $customer_name;
        $this->title = $title;
        $this->phone = $phone;
        $this->email = $email;
        $this->content = $content;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM CONTACT');
        foreach ($req->fetchAll() as $item){
            $list[] = new Contact($item['id'], $item['customer_name'],$item['title'],$item['phone'],$item['email'],$item['content']); 
        }
        return $list;
    }
}