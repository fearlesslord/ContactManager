<?php

interface iDatabase
{
  public function connect($host, $name, $user, $pass);
  public function selectDb($dbName);
  public function execute($databaseObject, $fetchAll, $fetchMode);
  public function disconnect();
}