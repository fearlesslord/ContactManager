<?php

class Error extends AppController
{
  public function __construct()
  {
    $this->useModels = null;
    parent::__construct();
  }

  function index()
  {
    $this->set('msg', 'This page doesn\'t exist');
    $this->view->render('error/index');
  }
}