<?php if ( ! defined('PATH_APPLICATION')) die ('Bad requested!');
 
class New_Controller 
{
    public function indexAction()
    {
        echo '<h1>Index Action</h1>';
    }
     
    public function detailAction()
    {
        echo '<h1>Detail Action</h1>';
    }
}