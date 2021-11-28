<?php
class BaseController{
    protected $folder;
    // ? render function will extract data, make a new one if something wrong
    function render($file, $data = array()){
        $view_file= ROOT . '/application/views/' . $this->folder . '/' . $file . '.php';
        if(is_file($view_file)){
            extract($data);
            include($view_file);
        }else{
            // header('Location: index.php?controller=pages&action=error');
        }        
    }
}