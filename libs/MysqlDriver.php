<?php
require 'iDatabase.php';

class Mysql_driver implements iDatabase
{

  function __construct()
  {
  }

  public function connect($host, $name, $user, $pass)
  {
    $type = DB_TYPE . ':host=' . $host . ';dbname=' . $name;
    return $this->db = new PDO($type, $user, $pass);
  }

  public function selectDb($dbName)
  {
    $databaseObject = $this->db->prepare("use $dbName");
    $this->execute($databaseObject);
  }

  public function execute($databaseObject, $fetchAll = false, $fetchMode = PDO::FETCH_ASSOC)
  {
    $result = $databaseObject->execute();
    //$err = $databaseObject->errorInfo(); // debug mysql error in PDO

    if (!$result){
      return false;
    }

    if (!($fetchAll && ($databaseObject->rowCount())) > 0) {
      return true;
    }

    return $databaseObject->fetchAll($fetchMode);
  }

  public function disconnect()
  {
    $this->db = null;
  }
}