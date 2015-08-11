<?php

class View
{
  public $templatesFolder = 'views/';
  public $extension = '.php';
  public $layout = 'default';
  public $layoutsFolder = 'views/layouts/';
  public $elementsFolder = 'views/elements/';
  public $data = array();

  public function set($key, $value)
  {
    $this->data[$key]= $value;
  }

  public function setLayout($name)
  {
    $this->layout = $name;
  }

  public function render($template, $renderLayout = true)
  {
    $templatePath = $this->templatesFolder . $template . $this->extension;
    $template = $this->renderFile($templatePath, $this->data);

    if (!$renderLayout) {
      echo $template;
      return;
    }

    $layoutVars = array_merge($this->data, array('contentForLayout' => $template));
    $layoutPath =  $this->layoutsFolder . $this->layout . $this->extension;
    echo $this->renderFile($layoutPath, $layoutVars);
  }

  protected function renderFile($filepath, $data)
  {
    if (!file_exists($filepath)){
      return;
    }

    extract($data);

    ob_start();
    require $filepath;

    return ob_get_clean();
  }

  public function element($name, $data = array())
  {
    $elementPath = $this->elementsFolder . $name . $this->extension;

    return $this->renderFile($elementPath, $this->data);
  }

}