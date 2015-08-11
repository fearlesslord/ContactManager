<?php

/**
 * @property User_model $user
 */
class User extends AppController
{
  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->view->render('user/index');
  }

  public function login()
  {
    if (!$this->user->login()){
      $this->set('errorMessage', $this->user->getErrorMessage());

      return $this->view->render('user/index');
    }
      $this->redirect('contacts?page=1');
  }

  public function logout()
  {
    $this->user->logout();
    $this->redirect('user');
  }

}