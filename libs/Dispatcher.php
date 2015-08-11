<?php

class Dispatcher
{
  private $error;

  public function dispatch()
  {
    $url = explode('/', rtrim(isset($_GET['url']) ? $_GET['url'] : false, '/'));

    $controllerName = !empty($url[0]) ? $url[0] : 'index';
    $action = isset($url[1]) ? $url[1] : 'index';
    $params = isset($url[2]) ? $url[2] : '';

    require 'controllers/error.php';
    $this->error = new Error();

    Session::init();
    $file = 'controllers/' . $controllerName . '.php';

    if (!file_exists($file)) {
      $this->error->index();
      return false;
    }

    require_once $file;

    $controller = new $controllerName;

    if (!method_exists($controller, $action)) {
      $this->error->index();
      return false;
    }

    $controller->$action($params);
  }
}