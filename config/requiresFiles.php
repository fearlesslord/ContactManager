<?php

require 'configuration.php';
require 'database.php';
require 'paths.php';

function __autoload($class)
{
  require 'libs/' . $class . '.php';
}