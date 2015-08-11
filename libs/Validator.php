<?php

class Validator
{
  public $errors = array();
  public $messages = array(
    'email'     => 'Invalid email',
    'number'    => 'Invalid number',
    'integer'   => 'Invalid integer',
    'string'    => 'Invalid string',
    'notempty'  => 'Fill this field',
  );

  public static function integer ($val)
  {
    return preg_match('|^[0-9]+$|', $val);
  }

  public static function number ($val)
  {
    return !empty($val) ? is_numeric($val) : true;
  }

  public static function string ($val)
  {
    return is_string($val);
  }

  public static function maxLength ($val, $maxLength)
  {
    return (!(strlen($val) > $maxLength));
  }

  public static function minLength ($val, $minLength)
  {
    return (!(strlen($val) < $minLength));
  }

  public static function email ($val)
  {
    return preg_match('/[0-9a-z_-]+@[0-9a-z_^\.]+\.[a-z]{2,4}/i', $val);
  }

  public static function notempty($val)
  {
    return !empty($val);
  }
}