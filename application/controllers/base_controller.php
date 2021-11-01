<?php
class BaseController{
    protected $folder;
    // ? render function will extract data, make a new one if something wrong
    function render($file, $data = array()){
        $view_file= ROOT . '/application/views/' . $this->folder . '/' . $file . '.php';
        // echo($view_file);
        // echo(is_file($view_file));
        // echo($this->folder);
        // echo($this->folder == 'admin');
        if(is_file($view_file)){
            // if($this->folder == 'admin'){
            //     extract($data);
            //     ob_start();
            //     require_once($view_file);
            //     $content = ob_get_clean();
            //     // require_once('views/admin/templates/footer.php');
            //     // require_once('views/admin/templates/header.php');
            //     // require_once('views/admin/templates/navbar.php');
            //     // require_once('views/admin/templates/sidebar.php');
            // }
            // else{
                include($view_file);
                // extract($data);
                // ob_start();
                // print($view_file);
                // $content = ob_get_clean();
                // require_once('views/layouts/head.php');
                // require_once('views/layouts/header.php');
                // require_once('views/layouts/footer.php');
            // }
        }else{
            header('Location: index.php?controller=pages&action=error');
        }        
    }
}