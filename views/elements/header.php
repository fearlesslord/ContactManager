  <div id = "header">
     <div id="logo">
        <h1><a href="<?php echo URL ?>index" class="headTitle">Contact Manager</a></h1>
     </div>

    <a href="<?php echo URL ?>index">Index</a>
    <?php if (Session::get('id')) :?>
      <a href="<?php echo URL ?>contacts?page=1">Contacts</a>
      <a href="<?php echo URL ?>user/logout">Logout</a>
    <?php else :?>
    <a href="<?php echo URL ?>user">Login</a>
    <?php  endif; ?>
  </div>