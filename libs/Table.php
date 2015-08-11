<?php

/**
 * @property Mysql_driver $driver
 */
class Table
{
  private $db;
  private $driver;
  private $table;

  function __construct()
  {
    $path = 'libs/'.DRIVER.'Driver.php';

    if (file_exists($path)) {
      include_once $path;

      $driverName = DRIVER.'_driver';
      $this->driver = new $driverName;
    }

    $this->db = $this->driver->connect(DB_HOST, DB_NAME, DB_USER, DB_PASS);

    $this->driver->selectDb(DB_NAME);
  }

  public function __destruct()
  {
    $this->driver->disconnect();
  }

  /**
   * @param $table table to select
   */
  public function selectTable ($table)
  {
    $this->table = $table;
  }

  /**
   * select
   * @param string $fields
   * @param bool $where
   * @param bool $order
   * @param bool $limit
   * @param bool $offset
   * @param int $fetchMode
   * @return bool or data array
   */
  public function select($fields = '*', $where = false, $order = false, $limit = false, $offset = false, $fetchMode = PDO::FETCH_ASSOC)
  {
    if (is_array($fields)) {
      $fields = implode(',', $fields);
    }

    $limit_str = '';
    if ($limit) {
      $offset = $offset ? $offset : 0;
      $limit_str = " LIMIT $offset , $limit";
    }

    $order_str = '';
    if ($order) {
      $order_str = " ORDER BY $order";
    }

    if ($where) {
      $databaseObject = $this->db->prepare("
        SELECT
          $fields
        FROM
          $this->table
        WHERE
          $where
        $order_str
        $limit_str
      ");
    } else {
        $databaseObject = $this->db->prepare("
          SELECT
            $fields
          FROM
            $this->table
          $order_str
          $limit_str
        ");
    }

    return $this->driver->execute($databaseObject, true);
  }

  /**
   * insert
   * @param string $data associative array of data to insert
   * @return bool try or false
   */
  public function insert($data)
  {
    $fieldColumns = implode('`,`', array_keys($data));
    $fieldValues = implode("','", array_values($data));

    $databaseObject = $this->db->prepare("
      INSERT INTO
        $this->table (`$fieldColumns`)
      VALUES ( '$fieldValues' )
    ");

    return $this->driver->execute($databaseObject);
  }

  /**
   * update
   * @param string $data associative array of data to update
   * @param string $where add condition to update expression
   * @return bool try or false
   */
  public function update($data, $where)
  {
    $columnEqualValues = null;
    foreach ($data as $columnName => $value) {
      $columnEqualValues .= "$columnName = '$value',";
    }

    $columnEqualValues = rtrim($columnEqualValues, ',');

    $databaseObject = $this->db->prepare("
      UPDATE
        $this->table
      SET
        $columnEqualValues
      WHERE
        id = $where
    ");

    return $this->driver->execute($databaseObject);
  }

  /**
   * delete
   * @param string $id record to delete
   * @return bool try or false
   */
  public function delete($id)
  {
    $databaseObject = $this->db->prepare("
      DELETE FROM
        $this->table
      WHERE
        id = $id
    ");

    return $this->driver->execute($databaseObject);
  }

  /**
   * @param bool $conditions
   * @return mixed
   */
  public function count($conditions = false)
  {
    if ($conditions){
      $databaseObject = $this->db->prepare("SELECT count(*) FROM $this->table WHERE $conditions");
    }
    else {
      $databaseObject = $this->db->prepare("SELECT count(*) FROM $this->table");
    }

    $count = $this->driver->execute($databaseObject, true, PDO::FETCH_COLUMN);

    return $count[0];
  }
}