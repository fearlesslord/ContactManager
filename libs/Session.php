<?php


class Session 
{
  public static function init()
  {
    session_start();
  }

  public static function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public static function setFlash($message)
  {
    $_SESSION['flashMessage'] = $message;
  }

  public static function get($key)
  {
    if (isset($_SESSION[$key]))
    return $_SESSION[$key];
  }

  public static function destroy()
  {
    self::unsetValue('id');
  }

  public static function unsetValue($value)
  {
    if (isset($_SESSION[$value]))
      unset($_SESSION[$value]);
  }

}