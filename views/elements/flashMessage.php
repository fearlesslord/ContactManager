<?php

if (isset($_SESSION['flashMessage'])) {
  echo $_SESSION['flashMessage'];
  Session::unsetValue('flashMessage');
}
 