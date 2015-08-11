<h2 class="login">Login</h2>

<div class="loginError"><?php echo isset($errorMessage) ? $errorMessage : false ?></div>
  <form action="<?php echo URL ?>user/login" method="post">
    <table id="loginTable" class="loginTable">
      <tbody>
        <tr>
          <td><label for="login">Login</label></td>
          <td><input type="text" id="login" name="login"></td>
        </tr>

        <tr>
          <td><label for="password">Password</label></td>
          <td><input type="password" id="password" name="password"></td>
        </tr>

        <tr>
          <td><input type="submit" value="Log in" /></td>
        </tr>
      </tbody>
    </table>
  </form>