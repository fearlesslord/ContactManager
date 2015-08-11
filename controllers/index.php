<?php

class Index extends AppController
{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->view->render('index/index');
  }

}