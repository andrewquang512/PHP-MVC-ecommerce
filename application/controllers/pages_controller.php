<?php
require_once(ROOT . '/application/controllers/base_controller.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'layouts';
  }

  public function home()
  {
    $this->render('index');
  }

}