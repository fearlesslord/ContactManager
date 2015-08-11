<?php

class Model extends Table
{
  public function __construct()
  {
    parent::__construct();
    $this->validator = new Validator();
  }

  public function validate ($data, $rules)
  {
    $this->data = $data;
    foreach ($data as $key => $val) {

      if (isset($rules[$key])) {

        foreach ($rules[$key] as $rule) {

          if (strpos($rule, '=')) {
            $ruleArr = explode('=', $rule);
            $this->validator->messages[$ruleArr[0]] = "$ruleArr[0] $ruleArr[1] characters";
          }

          $ruleCond = strpos($rule, '=') ? $ruleArr[0] : $rule;
          $secondParam = isset($ruleArr) ? $ruleArr[1] : false;

          if (method_exists($this->validator, $ruleCond)) {
            if (!call_user_func_array(array($this->validator, $ruleCond), array($val, $secondParam))) {
              $this->validator->errors[$key] = $this->validator->messages[$ruleCond];
              break;
            }
          }
        }
      }
    }

    return empty($this->validator->errors);
  }

  public function getErrors()
  {
    return empty($this->validator->errors) ? false : $this->validator->errors;
  }

  public function getData ($key)
  {
    return empty($this->data[$key]) ? false : $this->data[$key];
  }
}