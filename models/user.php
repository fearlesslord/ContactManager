<?php

class User_model extends Model
{
  public $errorMessage;

  function __construct()
  {
    parent::__construct();
  }

  public function login()
  {
    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $this->selectTable('users');
    $user = $this->select('id', 'login = "' . $login . '"
      AND password = "' . $password . '" ');

    if (!isset($user[0]['id'])) {
      $this->errorMessage = 'Incorrect login or password';
      return false;
    }

    Session::set('id', $user[0]['id']);
    return true;
  }

  public function getErrorMessage()
  {
    return $this->errorMessage;
  }

  public function logout()
  {
    Session::destroy();
  }

}