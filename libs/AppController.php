<?php

class AppController
{
  public $allowedControllers = array('User', 'Index', 'Error');
  public $useModels = array();

  public function __construct()
  {
    $this->allowedUnregisteredUsersActions();
    $this->loadModel();

    $this->view = new View();
    $this->paginator = new Paginator();
  }

  public function loadModel()
  {
    if (is_null($this->useModels)) {
      return false;
    }

    $modelNames = empty($this->useModels) ? array(strtolower(get_called_class())) : $this->useModels;

    foreach ($modelNames as $name) {
      $path = 'models/'. $name .'.php';
      if (file_exists($path)) {
        require_once $path;
        $modelName = $name .'_model';
        $this->$name = new $modelName;
      }
    }
  }

  public function set($key, $value)
  {
    $this->view->set($key, $value);
  }

  public function redirect ($url)
  {
    header("Location:". URL . $url);
    exit;
  }

  public function allowedUnregisteredUsersActions()
  {
    $calledClases = get_called_class();
    if (!in_array($calledClases, $this->allowedControllers) && !Session::get('id')) {
      Session::destroy();
      $this->redirect('user');
    }
  }
}