<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Taras
 * Date: 03.09.13
 * Time: 22:57
 * To change this template use File | Settings | File Templates.
 */

  date_default_timezone_set('Europe/Kiev');

  require 'config/requiresFiles.php';

  $dispatcher = new Dispatcher();
  $dispatcher->dispatch();